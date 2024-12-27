<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Barbershop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .navbar {
            background-color: #333;
            margin-bottom: 20px;
        }

        .navbar-brand {
            color: #fff !important;
        }

        .product-card {
            background-color: #222;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(253, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product-card .card-body {
            text-align: center;
        }

        .product-card h5 {
            margin-top: 15px;
            font-size: 1.5rem;
            color: #e74c3c; /* Red color */
        }

        .product-card p {
            color: #fff;
        }

        .product-card .price {
            color: #fff;
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #ccc;
            font-size: 0.9rem;
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

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barbershop Produk</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://i.pinimg.com/736x/18/c5/34/18c5347625153fc84c9fc01f963bf1bb.jpg" alt="Pomade Classic">
                    <div class="card-body">
                        <h5>Pomade Classic</h5>
                        <p>Tahan lama dengan kilau alami, cocok untuk berbagai gaya rambut.</p>
                        <p class="price">Rp 80,000</p>
                        <a href="pembayaran.php?product=Pomade+Classic&price=80000" class="btn btn-danger">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://i.pinimg.com/736x/2e/6c/2d/2e6c2d3cb57a95351be7ef43fc4638a4.jpg" alt="Sampo Herbal">
                    <div class="card-body">
                        <h5>Sampo Herbal</h5>
                        <p>Formula alami untuk membersihkan dan menutrisi rambut.</p>
                        <p class="price">Rp 50,000</p>
                        <a href="pembayaran.php?product=Sampo+Herbal&price=50000" class="btn btn-danger">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://i.pinimg.com/736x/37/91/4d/37914d029fc5c868563ed0da6b29a5a0.jpg" alt="Hair Wax">
                    <div class="card-body">
                        <h5>Hair Wax</h5>
                        <p>Tekstur kuat dengan hasil matte untuk gaya rambut maskulin.</p>
                        <p class="price">Rp 75,000</p>
                        <a href="pembayaran.php?product=Hair+Wax&price=75000" class="btn btn-danger">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://i.pinimg.com/736x/ce/85/b0/ce85b07f6ccc33ef6bb934e813a28d48.jpg" alt="Beard Oil">
                    <div class="card-body">
                        <h5>Beard Oil</h5>
                        <p>Melembutkan dan menyehatkan jenggot dengan aroma maskulin.</p>
                        <p class="price">Rp 90,000</p>
                        <a href="pembayaran.php?product=Beard+Oil&price=90000" class="btn btn-danger">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://i.pinimg.com/736x/b7/9b/2f/b79b2f332580fc0d95b93e8aaa38f02e.jpg" alt="Hair Comb">
                    <div class="card-body">
                        <h5>Hair Comb</h5>
                        <p>Sisir multifungsi dengan desain ergonomis.</p>
                        <p class="price">Rp 30,000</p>
                        <a href="pembayaran.php?product=Hair+Comb&price=30000" class="btn btn-danger">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Barbershop. All rights reserved.
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
