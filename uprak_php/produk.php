<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location : login.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="data.css">

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
                <div><a class="me-4" href="produk.php">Produk</a></div>
                <div><a class="me-4" href="cart.php">Cart</a></div>
            </div>
        </div>
    </nav>

    <!-- input -->
    <div class="container mb-5">
        
        <div class="hero">
            <p><span class="ms-2 fw-bold">Data Produk</span></p>
            <a href="tambah_produk.php" class="btn btn-primary ms-3">[+] Tambah Baru</a>
            <a href="index.php" class="btn btn-green ms-3">Kembali</a>
        </div>
        <div class="input ms-3 me-3 mt-3 pb-3">
            <table class="table table-bordered bg-light btn-dark text-dark text-center">
                <tr class="bg-primary table-bordered btn-dark">
                    <td>NO</td>
                    <td>GAMBAR</td>
                    <td>NAMA PRODUK</td>
                    <td>HARGA PRODUK</td>
                    <td>STOCK</td>
                    <td>ACTION</td>
                </tr>
                <?php
            $sql = "SELECT * FROM produk";
            $query = mysqli_query($connect,$sql);

                while($pel = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$pel['id_produk']."</td>";
                    echo "<td><img src='".$pel['gambar']."'style='width:80px; height:80px;'></td>";
                    echo"<td>".$pel['nama_produk']."</td>";
                    echo"<td>".$pel['harga']."</td>";
                    echo"<td>".$pel['stok']."</td>";

                    echo"<td>";
                    echo "<a class='btn btn-warning' href='formedit.php?id_produk=".$pel['id_produk']."'>Edit</a>  ";
                    echo "<a class='btn btn-danger' href='hapus.php?id_produk=".$pel['id_produk']."'>Hapus</a>";
                    echo"</td>";
                    echo"</tr>";    
                }

        ?>
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>