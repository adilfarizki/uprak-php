<?php
include 'koneksi.php';
if (isset($_GET['id_produk'])) {
    header('Location: produk.php');
}
$id_produk = $_GET['id_produk']; 

$sql    = "DELETE FROM produk WHERE id_produk='$id_produk'";
$query  = mysqli_query($connect, $sql);

if ($query){
    echo "<meta http-equiv='refresh' content='1;url=produk.php'>";
}else{
    header('Location: hapus.php?status=gagal');
}

?>