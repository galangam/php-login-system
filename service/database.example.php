<?php
// Copy file ini dan rename menjadi database.php
// Kemudian isi dengan kredensial database Anda

$hostname = "localhost";
$username = "your_username";
$password = ""; // Kosongkan jika tidak ada password
$database_name = ""; // isi dengan nama database Anda

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "koneksi database rusak";
    die("error!");
}
?>