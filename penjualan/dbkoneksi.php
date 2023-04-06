<?php
// konfigurasi database
$host = "localhost";
$dbname = "dbpenjualan";
$username = "root";
$password = "";

// buat koneksi PDO, menggunakan try catch
try {
    
// buat object koneksi yang di dalamnya ada parameter berupa
// variable host, dbname, username dan password
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "<h1>koneksi database berhasil</h1>";
} catch (PDOExpection $e) {
    echo "database tidak terhubung : " .$e->getMessage();
}
?>