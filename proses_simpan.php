<?php
include 'koneksi.php';

//ambil daya yang dikirim dari Form

$nama_brg = $_POST['nama_brg'];
$spek = $_POST['spek'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$kategori = $_POST['kategori'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

//rename nama_brg fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

//set path folder tempat menyimpan fotonya
$path = "gambar/".$fotobaru;

//proses upload
if(move_uploaded_file($tmp, $path)){
	//proses simpan ke database
	$query = "INSERT INTO barang VALUES('','".$nama_brg."','".$spek."', '".$stok."','".$harga."','".$diskon."', '".$kategori."','".$fotobaru."')";
	$sql = mysqli_query($koneksi, $query);

	if($sql){
		
		echo '<script language"javascript" type="text/javascript">alert("Data Tersimpan!");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
		
	}else{
	echo '<script language"javascript" type="text/javascript">alert("Maaf terjadi kesalahan saat mencoba untuk menyimpan data ke database !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
	}
}else{
	echo '<script language"javascript" type="text/javascript">alert("Gambar gagal untuk diupload !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
}
?>