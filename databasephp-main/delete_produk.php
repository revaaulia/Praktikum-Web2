<?php 
require_once('dbkoneksi.php');
$iddel = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$iddel]);
header('Location: list_produk.php');

?>