<?php
include '../config.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST ['tipe_kamar'];
$photo = $_POST ['photo'];
$deskripsi = $_POST ['deskripsi'];
$kapasitas = $_POST ['kapasitas'];
$size = $_POST ['size'];
$view = $_POST ['view'];
$stok = $_POST ['stok'];
$fasilitas = $_POST ['fasilitas'];
$harga = $_POST ['harga'];

mysqli_query($koneksi,"INSERT INTO tipekamar(id_kamar,tipe_kamar,photo,deskripsi, kapasitas,stok,size,view,fasilitas,harga)
VALUES ('$id_kamar','$tipe_kamar','$photo','$deskripsi','$kapasitas','$stok','$fasilitas','$size','$view','$harga')");

header("location: roomdata.php");
?>