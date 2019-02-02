<?php
include "koneksi.php";



$kd_brg=$_GET['kd_brg'];

$nama_brg = $_POST['nama_brg'];
$spek = $_POST['spek'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$kategori = $_POST['kategori'];

if(isset($_POST['ubah_foto'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;

	$path = "gambar/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM barang WHERE kd_brg = '".$kd_brg."'";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);

		if(is_file("gambar/".$data['foto']))
			unlink("gambar/".$data['foto']);

			$query = "UPDATE barang SET nama_brg = '".$nama_brg."', spek = '".$spek."',stok = '".$stok."', harga = '".$harga."', diskon = '".$diskon."', kategori = '".$kategori."', foto = '".$fotobaru."' WHERE kd_brg = '".$kd_brg."'";
			$sql = mysqli_query($koneksi, $query);
			if($sql){
				echo '<script language="javascript" type="text/javascript"> alert("Data Berhasil Di Ubah !"); </script>';
				echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>"; 
			
		}else{
			echo '<script language="javascript" type="text/javascript"> alert("Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database !"); </script>';
				echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>"; 
			}
		}else{

			echo '<script language="javascript" type="text/javascript"> alert("Gambar gagal untuk diupload"); </script>';
			echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>"; 
		}
	}else{
		$query = "UPDATE barang SET nama_brg = '".$nama_brg."', spek = '".$spek."', stok = '".$stok."', harga = '".$harga."', diskon = '".$diskon."', kategori = '".$kategori."' WHERE kd_brg = '".$kd_brg."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			echo '<script language="javascript" type="text/javascript"> alert("Data Berhasil Di Ubah !"); </script>';
			echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>"; 
		}else{
			echo '<script language="javascript" type="text/javascript"> alert("Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database !"); </script>';
			echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>"; 
			}
		}



?>