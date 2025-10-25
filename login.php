<?php
     include "service/database.php";
     session_start();

     $login_message = "";

     if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
     }

   if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil user dari database berdasarkan username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($sql);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Verifikasi password yang diketik dengan hash di database
        if (password_verify($password, $data['password'])) {
            // Login sukses
            $_SESSION['username'] = $data['username'];
            $_SESSION['is_login'] = true;
            header("Location: dashboard.php");
            exit;
        } else {
            // Password salah
            $login_message = "Password salah!";
        }
    } else {
        // Username tidak ditemukan
        $login_message = "Akun tidak ditemukan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h3>MASUK AKUN</H3>
    <i><?= $login_message ?></i>

    <form action="login.php" method="POST">
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="password"/>
    <button type="submit" name="Login">masuk sekarang</button>
</form>

    <?Php include "layout/footer.html" ?>
</body>
</html>