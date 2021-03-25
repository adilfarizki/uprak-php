<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Online Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-link">
                <div><a class="me-4" href="index.php">Home</a></div>
                <div><a class="me-4" href="produk.php">Produk</a></div>
                <div><a class="me-4" href="cart.php">Cart</a></div>
                <div><a class="me-4" style="margin-left: 700px;" href="logout.php">Logout</a></div>
            </div>
        </div>
    </nav>

    <!-- hero -->



    <div id="carouselExampleControls" class="carousel slide gambar" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-item active">
                <img src="https://s3.bukalapak.com/uploads/content_attachment/8c074ee410e8d762540a8cb5/w-744/12._Raincoat.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://s0.bukalapak.com/uploads/content_attachment/5df4369af5f4585e8bcf5cb5/w-744/14._Jaket_track_top.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/OrdUvsozEEjdX3F-YXwNLyuR1fA=/118x63:1288x843/750x500/data/photo/2020/01/29/5e3104a405ae4.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="button">
        </div>
        <b>Jaket</b>
        <p>No Windage Hold Off, No Windage Hold Off seri MA-1 dan N3-B</p>

    </div>

    
    <!-- Produk -->
    <div class="pro">
        <h1 class="laris ps-5 p-2">Produk Terlaris</h1>
    </div>
    <div class="produk">

        <?php
            $id = mysqli_query($connect,'SELECT * FROM produk ORDER BY produk.id_produk');
            while ($prdk = mysqli_fetch_array($id)){
            $idp = $prdk['id_produk']; 
        ?>

        <a href="detail.php?id_produk=<?= $prdk["id_produk"]?>">
            <div class="card m-2 me-3" style="width: 18rem;">
                <img src="<?php echo $prdk['gambar'] ?>" class="mt-2 ms-3 mb-2 me-3 gambar_produk" alt="...">
                <div class="card-body float-end">
                    <h5 class="card-title"><?php echo $prdk['nama_produk'] ?></h5>
                    <b>Rp. <?php echo $prdk['harga'] ?></b> <br>
                </div>
            </div>
        </a>
        <?php
            }
        ?>
    </div>

    
    <!-- produk -->

    
    <div class="duk">
        <h1 class="produkkk ps-5 p-2">Product</h1>
    </div>
    <div class="listproduk">

        <?php
            $id = mysqli_query($connect,'SELECT * FROM produk ORDER BY produk.id_produk');
            while ($prdk = mysqli_fetch_array($id)){
            $idp = $prdk['id_produk']; 
        ?>

        <a href="detail.php?id_produk=<?= $prdk["id_produk"]?>">
            <div class="card m-2 me-3 float-start" style="width: 15rem;">
                <img src="<?php echo $prdk['gambar'] ?>"  style="width: 200px; height: 200px !important;" class="mt-2 ms-3 mb-2 me-3 gambar_produk" alt="...">
                <div class="card-body float-end">
                    <h5 class="card-title"><?php echo $prdk['nama_produk'] ?></h5>
                    <b>Rp. <?php echo $prdk['harga'] ?></b> <br>
                </div>
            </div>
        </a>
        <?php
            }
        ?>
    </div>

    <div id="footer">
        <footer>Copyright © 2021 Online Shop.com MAF Muhammad Adil Farizki.</footer>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>