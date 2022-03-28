<?php

include '../config.php';

$kd_pesanan = $_POST['kd_pesanan'];
$tipe_kamar = $_POST['tipe_kamar'];
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$jmlh_kamar = $_POST['jmlh_kamar'];
$jmlh_hari = $_POST['jmlh_hari'];
$jmlh_bayar = $_POST['jmlh_bayar'];
$tgl_pesan = $_POST['tgl_pesan'];

$data_rsv = mysqli_query($koneksi, "INSERT INTO pesanan(kd_pesanan,tipe_kamar,id_tamu,id_kamar,check_in,check_out,jmlh_kamar,jmlh_hari,jmlh_bayar,tgl_pesan) 
VALUES('$kd_pesanan', '$id_tamu','$id_kamar' '$check_in','$jmlh_bayar','$check_out', '$jmlh_kamar', '$jmlh_hari','$tgl_pesan', '$jmlh_bayar')");
if ($data_rsv){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "signin";
	header("location:detailreservasi.php?kd_pesanan=$kd_pesanan");
}else{
	header("location:../index.php?pesan=gagal");
}
?>