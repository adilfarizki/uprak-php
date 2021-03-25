<?php
$host       ="localhost";
$user       ="root";
$password   ="";
$database   ="uprak_2";
$connect    =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");
?>
<?php
function registerasi($data) {
    global $connect;

    $username = stripslashes($data["username"]);
    $email = stripslashes($data["email"]);
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);



if( $password !== $password2) {
    echo "<script> alert('konfirmasi password tidak sama') </script>";
    return false;
}



$password = password_hash($password, PASSWORD_DEFAULT);
    
    // cek username 
    $result = mysqli_query($connect,"SELECT username FROM user WHERE username ='$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert('username sudah ada!')</script>";
            return false;
    }
    
    $querry = mysqli_query($connect, "INSERT INTO user VALUES('','$username','$email','$password')");

    return mysqli_affected_rows($connect);
}
?>