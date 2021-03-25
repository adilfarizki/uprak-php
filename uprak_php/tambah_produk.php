<?php
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

    <link rel="stylesheet" href="input.css">
  

    <title>Hello, world!</title>
  </head>
  <body>
    
      <!-- nav-bar  -->
      <form action="simpan.php" method="post">
      <div class="card container">
        <div class="card-body">
          <div class="modal-body">
            <h4 class="card-subtitle mb-4 text-center">Input Data Barang/Produk</h4>
    
            <div class="form-gorup row">
              <label class="col-sm-3 col-form-label" for="id_produk">Id Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="id_produk">
              </div>
            </div>
    
            <div class="form-gorup row" style="margin-top: 10px;">
              <label class="col-sm-3" for="nama">Nama Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="nama_produk">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 10px;">
              <label class="col-sm-3" for="harga">Harga Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="harga">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="stock">Stock Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="stok">
              </div>
            </div>
    
            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="gambar">Gambar Produk</label>
              <div class="col-8">
                <input type="url" class="form-control" name="gambar">
              </div>
            </div>

            <div class="form-group row" style="margin-top: 8px;">
              <label class="col-sm-3" for="detail">Detail Produk</label>
              <div class="col-8">
                <input type="text" class="form-control" name="detail">
              </div>
            </div>
          </div>
    
          <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
          <a href="index.php" class="btn btn-success ms-3">Kembali</a>
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