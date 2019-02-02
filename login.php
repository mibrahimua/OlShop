<?php
include "koneksi.php";
session_start();

if(@$_SESSION['nmpegawai']){
	header('location:index.php');
}
if(isset($_GET['cek'])){
	$cek = $_GET['cek'];
	if($cek == "Login"){
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<title>Halaman <?php echo @$_GET['cek'] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<script src="lib/js/jquery.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1F1F1">
<br /><br > <br />
<div class="container-fluid">
	
	<ul class="nav nav-pills">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="panel-heading" align="center" style="background-color: #57D8F2">
				<h3> <a href="index.php?hlm=Dashboard">LOGIN OLSHOP</a></h3></div>
				<div class="panel-body">
					<form method="POST">
						
						<?php
						$username = mysqli_real_escape_string($koneksi,@$_POST['nmpegawai']);
						$password = mysqli_real_escape_string($koneksi,@$_POST['pass']);
						$password2 = md5($password);
						$query = "SELECT * FROM pegawai WHERE nmpegawai = '$username'";
						$hasil = mysqli_query($koneksi,@$query);
						$row = mysqli_fetch_array(@$hasil);
						if(isset($_POST['login'])){
							if($row['nmpegawai'] == $username AND $row['pass'] == $password AND $row['hakakses'] == "Admin" AND $row['status'] == "Aktif"){
								//code blablabla

								$_SESSION['nmpegawai'] = $username;
								header('location:data_barang.php?hlm=Data');
							}elseif ($row['status'] == "Tidak Aktif") {
								# code...
								echo "<div class ='alert alert-danger' role='aler'>Username anda di non aktifkan!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Nama atau Password yang anda masukan salah!</div>";
							}
						}
						?>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" class="form-control" name="nmpegawai" placeholder="Masukan Username" required="">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" class="form-control" name="pass" placeholder="Masukan Password" required="">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="" > Ingat Saya</label>
							<p class="pull-right"><a href="#">Lupa Password?</a></p>
						</div>
						<div class="form-group">
							<button type="submit" name="login" value="Login" class="btn btn-info btn-block">Masuk</button>
						</div>
						<div class="form-group">
							<p class="pull-left">Belum punya akun? <br><a href="login.php?cek=Daftar">Daftar Segera</a></p>
						</div>
					</form>
				</div>
		</div>
	</ul>
</div>

</body>
</html>
<?php

}else{

		$username = mysqli_real_escape_string($koneksi,@$_POST['nmpegawai']);
		$password = mysqli_real_escape_string($koneksi,@$_POST['pass']);
		$email = mysqli_real_escape_string($koneksi,@$_POST['email']);
		$telepon = mysqli_real_escape_string($koneksi,@$_POST['telp']);

		$password = md5($password);
		$query = "INSERT INTO pegawai (nmpegawai,pass,hakakses,status,email,telepon) VALUES ('$username','$password','Member','Aktif','$email','$telepon')";
		$hasil = mysqli_query($koneksi,@$query);
		$row = mysqli_fetch_array(@$hasil);
			if(isset($_POST['daftar'])){
			if($row['nmpegawai'] == $username AND $row['pass'] == $password AND $row['hakakses'] == "Admin" AND $row['status'] == "Aktif"){
								//code blablabla

			$_SESSION['nmpegawai'] = $username;
			header('location:data_barang.php?hlm=Data');
			}elseif ($row['status'] == "Tidak Aktif") {
								# code...
			echo "<div class ='alert alert-danger' role='aler'>Username anda di non aktifkan!</div>";
			}else{
			echo "<div class='alert alert-danger' role='alert'>Nama atau Password yang anda masukan salah!</div>";
			}
		}
						
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<title>Halaman <?php echo @$_GET['cek'] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<script src="lib/js/jquery.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F1F1F1">
<br /><br > <br />
<div class="container-fluid">
	
	<ul class="nav nav-pills">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="panel-heading" align="center" style="background-color: #57D8F2">
				<h3>LOGIN OLSHOP</h3></div>
				<div class="panel-body">

		<form method="POST">
		<div class="form-group">
			<label for="nama">Username :</label>
			<input class="form-control" name="nmpegawai" placeholder="Username" required="">
		</div>
		<div class="form-group">
			<label for="telp">Nomor Telepon :</label>
			<input class="form-control" name="telp" placeholder="Telepon" required="">
		</div>
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" name="email" placeholder="E-mail" required="">
		</div>
		<div class="form-group">
			<label for="pwd">Password :</label>
			<input type="password" class="form-control" name="pass" placeholder="Password" required="">
		</div>
		<button type="submit" name="daftar" class="btn btn-default">Daftar</button><br><br>
		<label> <a href="login.php?cek=Login">Sudah Punya Akun ?</label>
		
	</form>
				</div>
		</div>
	</ul>
</div>

</body>
</html>


<?php 
	}
}
 ?>