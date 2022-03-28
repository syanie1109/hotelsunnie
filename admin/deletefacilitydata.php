<?php

include '../config.php';
$id_fasilitas = $_GET['id_fasilitas'];

mysqli_query($koneksi, "DELETE FROM fasilitas WHERE id_fasilitas='$id_fasilitas'");

header("location: facilitydata.php");
?>