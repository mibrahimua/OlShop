<?php
session_start();
include 'koneksi.php';
$sid = $_SESSION['nmpegawai'];
$kd_brg = $_GET['id'];

$query = "SELECT kd_brg FROM keranjang WHERE kd_brg = '$kd_brg' AND id_session = '$sid'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_num_rows($sql);

if($data == 0){
	$query = "INSERT INTO keranjang (kd_brg,jumlah,id_session) VALUES ('$kd_brg', 1 , '$sid')";
	mysqli_query($koneksi, $query);
	header('location:keranjang.php?hlm=Keranjang');
} else{
	$query = "SELECT barang.stok AS stok, keranjang.jumlah AS jumlah FROM barang, keranjang WHERE barang.kd_brg = keranjang.kd_brg";
	$sql = mysqli_query($koneksi,$query);
	$data = mysqli_fetch_array($sql);
	$stok = $data['stok'];
	$jumlah = $data['jumlah'];
	if($jumlah == $stok){
		echo '<script language="javascript" type="text/javascript">alert("Stok Habis !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=keranjang.php?hlm=Keranjang'>";
	}else{
		$query = "UPDATE keranjang SET jumlah = jumlah + 1 WHERE id_session = '$sid' AND kd_brg = '$kd_brg'";
		mysqli_query($koneksi,$query);
		header('location:keranjang.php?hlm=Keranjang');
	}
}


?>