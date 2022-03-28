<?php

include '../config.php';
$id_kamar = $_GET['id_kamar'];

mysqli_query($koneksi, "DELETE FROM tipekamar WHERE id_kamar='$id_kamar'");

header("location: roomdata.php");
?>