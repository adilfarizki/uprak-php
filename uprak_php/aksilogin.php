<?php
session_start();
include 'koneksi.php';
if ( isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1) {
        
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

        // session
        $_SESSION["login"] = true;

        header("Location: index.php");
        exit;
    }
    }
}

?>