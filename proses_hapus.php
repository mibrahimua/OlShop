<?php

include "koneksi.php";

$kd_brg=$_GET['kd_brg'];

$query = "SELECT * FROM barang WHERE kd_brg = '".$kd_brg."'";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);

		if(is_file("gambar/".$data['foto']))
			unlink("gambar/".$data['foto']);
		$query2 = "DELETE FROM barang WHERE kd_brg = '".$kd_brg."'";
		$sql2 = mysqli_query($koneksi, $query2);

		if($sql2){
			header("location:data_barang.php");
		}else{
			echo '<script language="javascript" type="text/javascript"> alert("Data Gagal Dihapus !"); </script>';
				echo "<meta http_equiv='refresh' content='0; url=data_barang.php'>";
		}
		
?>