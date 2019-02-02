<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1">
	<link rel="stylesheet" href="lib/bootstrap.min.css">
	<script src="lib/jquery.min.js"></script>
	<script src="lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		/* remove the navbar's default rounded borders and increase the bottom margin */
		.navbar{
			margin-bottom: 25px;
			border-radius: 0;
		}
		
		/* remove the jumbotron's default bottom margin */
			.jumbotron{
			margin-bottom: 0;
			}
			.checked {
    color: orange;
}
			
		/* Add a gray background color and some padding to the footer */
		footer{
		background-color: #f2f2f2;
		padding: 25px;
		}
		.topnav  {
		  float: right;
		  display: block;
		  color: black;
		  margin-left : relative;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}
		
	</style>
</head>
<body>
<div class="jumbotron">
	<div class="container text-left">
		<h2>
		<a href="index.php">Online Store</a>
		</h2>
		<p>Mission,Vission, & Value Is Our Concern</p>
	</div>
</div>
<?php
if(isset($_GET['login'])){
	$cek = $_GET['login'];
	if($cek == "masuk"){
?>
<div class="container">
	<h2>Halaman Login</h2>
	<form action="index.php">
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label for="pwd">Password :</label>
			<input type="password" class="form-control" id="pwd" placeholder="Password">
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me ?</label>
		</div>
		<button type="submit" class="btn btn-default">Masuk</button><br><br>
		<label> <a href="form.php?login=daftar">Belum Punya Akun ?</label>
	</form>
</div>
<?php
	}else if($cek == "daftar"){
		?>
		<div class="container">
	<h2>Daftar</h2>
	<form action="index.php">
		<div class="form-group">
			<label for="nama">Nama Lengkap :</label>
			<input class="form-control" id="nama" placeholder="Nama Lengkap">
		</div>
		<div class="form-group">
			<label for="telp">Nomor Telepon :</label>
			<input class="form-control" id="telp" placeholder="Telepon">
		</div>
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label for="pwd">Password :</label>
			<input type="password" class="form-control" id="pwd" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-default">Daftar</button><br><br>
		<label> <a href="form.php?login=masuk">Sudah Punya Akun ?</label>
		
	</form>
</div>
<?php
	}else{
		header("location: index.php");
	}
}
?>
</body>
</html>