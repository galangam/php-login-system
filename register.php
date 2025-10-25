<?php
    include "service/database.php";
    session_start();
    
    $register_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
     }

    if(isset($_POST["register"])){
       $username = $_POST["username"];
       $password = $_POST["password"];

       $hash_password = password_hash($password, PASSWORD_DEFAULT);

       try {
        $sql = "INSERT INTO users (username, password) VALUES ('$username','$hash_password')";

        if($db->query($sql)) {
           $register_message= "daftar akun berhasil, silahkan login";
        }else {
         $register_message= "daftar akun gagal silahkan coba lagi";
        }
       }catch (mysqli_sql_exception ) {
          $register_message = "user name sudah ada, silahkan ganti yang lain";
       }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h3>DAFTAR AKUN</H3>
    <i><?= $register_message ?></i>

    <form action="register.php" method="POST">
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="password"/>
    <button type="submit" name="register">daftar sekarang</button>
</form>

    <?Php include "layout/footer.html" ?>
</body>
</html>