<?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $id_produk = $_POST['id_produk']; 
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $gambar = $_POST['gambar'];
        $detail = $_POST['detail'];
        $sql = "INSERT INTO produk (id_produk,nama_produk,harga,stok,gambar,detail) 
        VALUES ('$id_produk','$nama','$harga','$stok','$gambar','$detail')";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: produk.php');
        }else{
            header('location: simpan.php?status=gagal');
        }
    }
?>