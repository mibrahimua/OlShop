<?php
session_start();
include 'koneksi.php';

$sid = $_SESSION['nmpegawai'];

$kd_brg = $_GET['kd_brg'];

$query = "DELETE FROM keranjang WHERE id_session = '$sid' AND kd_brg = '$kd_brg'";
$sql = mysqli_query($koneksi, $query);

if($sql){
	header('location:keranjang.php?hlm=Keranjang');
}else{
	echo '<script language="javascript" type="text/javascript">alert("Data Gagal Dihapus !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=keranjang.php?hlm=Keranjang'>";
}

?>