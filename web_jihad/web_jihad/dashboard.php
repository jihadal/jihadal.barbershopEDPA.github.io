<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Barbershop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/736x/2b/d5/ff/2bd5ffa00418bc2bbbf24b82ac3e1e37.jpg'); /* Ganti dengan URL gambar latar belakang yang Anda inginkan */
            background-size: cover;
            background-position: top;
            height: 100vh;
            display: center;
            justify-content: center;
            align-items: center;
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
            background-color: #222;
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
                            <li>Pomade berkualitas tinggi dengan daya tahan lama.</li>
                            <li>Sampo alami untuk rambut sehat dan kuat.</li>
                            <li>Paket perawatan rambut dengan harga terjangkau.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Layanan Unggulan</div>
                    <div class="card-body">
                        <p>Guntingan rambut premium untuk berbagai gaya modern.</p>
                        <p>Cuci rambut relaksasi dengan aroma eksklusif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Promo Spesial</div>
                    <div class="card-body">
                        <p>Diskon hingga 20% untuk pembelian paket produk tertentu.</p>
                        <p>Gratis layanan cuci rambut untuk setiap potong rambut pria.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="highlight">
            "Gaya Anda, Kualitas Kami! Jadilah percaya diri dengan produk dan layanan unggulan dari Barbershop." 
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
