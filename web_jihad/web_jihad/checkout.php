<?php
// Get POST data from the form submission
$product = isset($_POST['product']) ? $_POST['product'] : 'Product Name';
$price = isset($_POST['price']) ? $_POST['price'] : 0;
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$payment_method = $_POST['payment-method'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout: Pembayaran Sedang Diproses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .card {
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            color: #ccc;
            margin-top: 30px;
        }

        .btn-custom {
            background-color: #c70039;
            color: white;
            font-size: 1.1rem;
        }

        .loading-spinner {
            margin-top: 50px;
            text-align: center;
        }

        .summary {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <div class="custom-div" style="background-color: #c70039; padding: 20px; margin-top: 20px; border-radius: 10px; color: #fff; text-align: center; font-size: 1.2rem;">
        <a href="home.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Home</a>
        <a href="produk.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Produk</a>
        <a href="pembayaran.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Pembayaran</a>
        <a href="tentang_kami.php" style="color: #fff; margin-right: 15px; text-decoration: none;">Tentang Kami</a>
        <a href="logout.php" style="color: #fff; text-decoration: none;">Logout</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Proses Pembayaran</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Terima kasih, <?php echo htmlspecialchars($name); ?>!</h3>
            <p><strong>Produk:</strong> <?php echo $product; ?></p>
            <p><strong>Total Pembayaran:</strong> Rp <?php echo number_format($price, 0, ',', '.'); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Alamat Pengiriman:</strong> <?php echo htmlspecialchars($address); ?></p>
            <p><strong>Metode Pembayaran:</strong> <?php echo ucfirst($payment_method); ?></p>
            
            <!-- Loading Spinner -->
            <div class="loading-spinner">
                <h4>Pesanan Anda sedang diproses...</h4>
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="summary">
                <h5>Ringkasan Pesanan:</h5>
                <ul>
                    <li><strong>Nama:</strong> <?php echo htmlspecialchars($name); ?></li>
                    <li><strong>Produk:</strong> <?php echo $product; ?></li>
                    <li><strong>Total Pembayaran:</strong> Rp <?php echo number_format($price, 0, ',', '.'); ?></li>
                    <li><strong>Metode Pembayaran:</strong> <?php echo ucfirst($payment_method); ?></li>
                </ul>
                <p>Silakan tunggu beberapa saat, kami sedang memverifikasi pembayaran Anda. Anda akan menerima email konfirmasi setelah pembayaran selesai diproses.</p>
            </div>

        </div>
    </div>

    <div class="footer">
        &copy; 2024 Barbershop. All rights reserved.
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
