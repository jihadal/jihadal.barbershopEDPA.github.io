<?php
// Jika form dikirimkan, proses data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari input user
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validasi sederhana
    $errors = [];
    if (empty($username)) {
        $errors[] = "Nama pengguna tidak boleh kosong.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }
    if (empty($password)) {
        $errors[] = "Kata sandi tidak boleh kosong.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Kata sandi harus minimal 6 karakter.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Kata sandi dan konfirmasi kata sandi tidak cocok.";
    }

    // Jika tidak ada kesalahan, simpan data
    if (empty($errors)) {
        // Enkripsi password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan ke database (pastikan database sudah disiapkan)
        $conn = new mysqli('localhost', 'root', '', 'barbershop'); // Ubah sesuai konfigurasi database Anda

        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success text-center'>Registrasi berhasil. Silakan <a href='login.php'>login</a>.</div>";
        } else {
            $errors[] = "Terjadi kesalahan saat menyimpan data. Coba lagi.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }

        .btn-custom {
            background-color: #c70039;
            color: white;
            font-size: 1rem;
            border: none;
            padding: 10px;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #b0002f;
        }
    </style>
</head>

<body>
    <div class="card">
        <h3 class="text-center mb-4">Registrasi Akun</h3>

        <!-- Tampilkan Error -->
        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Form Registrasi -->
        <form method="POST" action="register.php">
            <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-custom">Daftar</button>
            <p class="mt-3 text-center">Sudah punya akun? <a href="login.php" style="color: #c70039; text-decoration: none;">Login di sini</a></p>
        </form>
    </div>
</body>

</html>
<?php
session_start(); // Mulai sesi

// Jika form dikirimkan, proses data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $errors = [];
    if (empty($username)) {
        $errors[] = "Nama pengguna tidak boleh kosong.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }
    if (empty($password)) {
        $errors[] = "Kata sandi tidak boleh kosong.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Kata sandi harus minimal 6 karakter.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Kata sandi dan konfirmasi kata sandi tidak cocok.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $conn = new mysqli('localhost', 'root', '', 'barbershop'); // Ubah sesuai konfigurasi database Anda

        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Set sesi untuk user yang baru terdaftar
            $_SESSION['user'] = [
                'id' => $stmt->insert_id,
                'username' => $username,
                'email' => $email,
            ];
            $stmt->close();
            $conn->close();

            // Redirect ke halaman utama
            header("Location: home.php");
            exit();
        } else {
            $errors[] = "Terjadi kesalahan saat menyimpan data. Coba lagi.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
