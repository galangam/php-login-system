<!DOCTYPE html>
<html>
<head>
    <title>halo boss</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<H3>formulir Nama</h3>
      
    <form method ="POST">
    nama : <input type="text" name="nama">
    <input type="submit" value="kirim">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        echo "Halo, " . htmlspecialchars($nama);
    }
    ?>
</body>
</html>