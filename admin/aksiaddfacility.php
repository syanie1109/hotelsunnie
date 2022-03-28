<?php
include '../config.php';

$id_fasilitas = $_POST['id_fasilitas'];
$fasilitas = $_POST ['fasilitas'];
$photo = $_POST ['photo'];
$deskripsi = $_POST ['deskripsi'];

mysqli_query($koneksi,"INSERT INTO fasilitas(id_fasilitas,fasilitas,photo,deskripsi)
VALUES ('$id_fasilitas','$fasilitas','$photo','$deskripsi')");

header("location: facilitydata.php");
?>