<?php
//menghubungkan dengan koneksi databse
include'../config.php';

//menangkap data yang dikirim dari form
$kd_bayar=$_POST['kd_bayar'];
$kd_pesanan=$_POST['kd_pesanan'];
$tgl_bayar=$_POST['tgl_bayar'];
$nama_akun_rek=$_POST['nama_akun_rek'];
$no_rek=$_POST['no_rek'];
$name=$_FILES['bukti_bayar']['name'];
$file=$_FILES['bukti_bayar']['tmp_name'];

//menyimpan data reservasi ke database
move_uploaded_file($file,"../bukti/$name");
$data_bayar =mysqli_query($koneksi, "INSERT INTO bayar VALUES ('$kd_bayar','$kd_pesanan', '$tgl_bayar', '$nama_akun_rek', '$no_rek', '$name', '1')");

if($data_bayar){
	//$_POST['kd_reservasi']=$kd_reservasi;
	$_SESSION['username']=$username;
	$_SESSION['status']="login";
	header("location:cetak.php?kd_bayar=$kd_bayar");
}else{
	header("location:index.php?pesan=gagal");
}
?>