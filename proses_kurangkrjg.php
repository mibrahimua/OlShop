<?php
session_start();
include 'koneksi.php';
$kd_brg = $_GET['id'];
$sid = $_SESSION['nmpegawai'];

$query = "SELECT * FROM barang , keranjang WHERE barang.kd_brg = keranjang.kd_brg AND barang.kd_brg = '$kd_brg' AND keranjang.id_session = '$sid'";
$sql = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($sql);
$stok = $data['stok'];
$jumlah = $data['jumlah'];

if($jumlah == 1){
	echo '<script language="javascript" type="text/javascript">alert ("Jumlah Tidak Boleh Kosong !"); </script>';
	echo "<meta http-equiv='refresh' content='0; url=keranjang.php?hlm=Keranjang'>";
}else {
	$query = "UPDATE keranjang SET jumlah = jumlah - 1 WHERE id_session = '$sid' AND kd_brg = '$kd_brg'";
		mysqli_query($koneksi,$query);
		header('location:keranjang.php?hlm=Keranjang');
	
}
?>