<?php
include '../config.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST ['tipe_kamar'];
$photo = $_POST ['photo'];
$view = $_POST ['view'];
$kapasitas = $_POST ['kapasitas'];
$size = $_POST ['size'];
$stok = $_POST ['stok'];
$deskripsi = $_POST ['deskripsi'];
$fasilitas = $_POST ['fasilitas'];
$harga = $_POST ['harga'];

mysqli_query($koneksi, "UPDATE tipekamar SET id_kamar='$id_kamar',tipe_kamar='$tipe_kamar',photo='$photo',view='$view',kapasitas='$kapasitas',size='$size',stok='$stok',deskripsi='$deskripsi',fasilitas='$fasilitas',harga='$harga' WHERE id_kamar='$id_kamar'");

header("location: roomdata.php");
?>