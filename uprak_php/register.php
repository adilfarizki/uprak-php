<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    if (registerasi($_POST) > 0) {
        echo "<script> alert('user baru telah ditambahkan')</script>";
    }else{
        echo mysqli_error($connect);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="login.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Register</title>
</head>

<body>

    <div id="cardd">
        <div id="card-content">
            <div id="card-title">
                <h2>REGISTER</h2>
                <div class="underline-title2"></div>
            </div>
        </div>
    

    <!-- form -->
    <form action="" method="post" class="form">
        <label for="user-name" style="padding-top:-5px; margin-left:20px">&nbsp;Username</label>
        <input id="user-name" class="form-content" type="name" name="username" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-email" style="padding-top:13px; margin-left:20px">&nbsp;Email</label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:13px; margin-left:20px">&nbsp;Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

        <label for="user-password2" style="padding-top:13px; margin-left:20px">&nbsp;Confirm Password</label>
        <input id="user-confirmpassword" class="form-content" type="password" name="password2" required />
        <div class="form-border"></div>
    
        <input id="submit-btn" type="submit" name="submit" value="REGISTER" />
    </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    < src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    < src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></>
    -->
</body>

</html>