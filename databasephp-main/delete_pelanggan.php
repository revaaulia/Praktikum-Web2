<?php 
require_once('dbkoneksi.php');
$iddel = $_GET['iddel'];
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$iddel]);
header('Location: list_pelanggan.php');

?>