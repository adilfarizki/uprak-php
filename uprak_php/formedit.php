<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location : login.php");
    exit;
}
include 'koneksi.php';
    $id_produk = $_GET['id_produk'];
    $sql    = "SELECT * FROM produk WHERE id_produk='$id_produk'";
    $query  = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="edit.css">

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
            </div>
        </div>
    </nav>

      <!-- form edit  -->

      <form action="edit.php" method="post">
          <div class="form">
      <div class="container fluid">
        <div class="card-body">
          <div class="modal-body">
            <h4 class="card-subtitle mb-4 text-center">Form Edit Barang dan Stock Data Barang</h4>
    
            <div class="form-gorup row">
              <label class="col-sm-3 col-form-label" for="id_produk">Id Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="id_produk" value="<?php echo $pel['id_produk']?>">
              </div>
            </div>
    
            <div class="form-gorup row" style="margin-top: 10px;">
              <label class="col-sm-3" for="nama_produk">Nama Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $pel['nama_produk']?>">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 10px;">
              <label class="col-sm-3" for="harga">Harga Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="harga" value="<?php echo $pel['harga']?>">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="stok">Stock Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="stok" value="<?php echo $pel['stok']?>">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="gambar">Gambar Produk</label>
              <div class="col-8">
                <input type="url" class="form-control" name="gambar" value="<?php echo $pel['gambar']?>">
              </div>
            </div>

            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="detail">Detail Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="detail" value="<?php echo $pel['detail']?>">
              </div>
            </div>
          </div>
    
          <a href="produk.php" class="btn btn-danger">kembali</a>
          <button type="submit" name="simpan" value="simpan" class="btn btn-success">Submit</button>
          <!-- <button type="button" class="btn btn-primary mb-1 col-sm-2 container" onclick="datasimpan()"
            id="simpan2">Simpan</button> -->
        </div>
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
