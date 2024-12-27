<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Barbershop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #000, #c70039);
            color: #eee;
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background-color: #c70039;
        }

        .custom-div {
            background-color: #c70039;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }

        .custom-div a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }

        .custom-div a:hover {
            text-decoration: underline;
        }

        .card {
            background-color: rgba(34, 34, 34, 0.9);
            border: none;
            color: #eee;
        }

        .card .card-header {
            background-color: #c70039;
            color: #fff;
        }

        .highlight {
            background-color: #c70039;
            padding: 15px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
        }

        .photo-gallery img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard Barbershop</a>
        </div>
    </nav>

    <div class="container py-4">
        <div class="custom-div">
            <a href="home.php">Home</a>
            <a href="produk.php">Produk</a>
            <a href="pembayaran.php">Pembayaran</a>
            <a href="tentang_kami.php">Tentang Kami</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Keunggulan Produk Kami</div>
                    <div class="card-body">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Layanan Unggulan</div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Promo Spesial</div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

        <div class="row photo-gallery">
            <div class="col-md-4">
                <img src="https://i.pinimg.com/736x/be/2c/9b/be2c9b722f9917d34401b65a32d117c4.jpg" alt="Barbershop Interior">
            </div>
            <div class="col-md-4">
                <img src="https://i.pinimg.com/736x/61/6e/74/616e74bdf5ef7c083925b1a6bc23e8f0.jpg" alt="Produk Unggulan">
            </div>
            <div class="col-md-4">
                <img src="https://i.pinimg.com/736x/36/cc/ae/36ccae93277ab1ff1a4a0597165ddfbe.jpg" alt="Layanan Premium">
            </div>
        </div>

        <div class="highlight">
            "Gaya Anda, Kualitas Kami! Jadilah percaya diri dengan produk dan layanan unggulan dari Barbershop." 
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
