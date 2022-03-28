<?php
include '../config.php';

$id_fasilitas = $_POST['id_fasilitas'];
$fasilitas = $_POST ['fasilitas'];
$photo = $_POST ['photo'];
$deskripsi = $_POST ['deskripsi'];

mysqli_query($koneksi, "UPDATE fasilitas SET id_fasilitas='$id_fasilitas',fasilitas='$fasilitas',photo='$photo',deskripsi='$deskripsi' WHERE id_fasilitas='$id_fasilitas'");

header("location: facilitydata.php");
?>