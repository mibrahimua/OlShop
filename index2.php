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
		<h2>Online Store</h2>
		<p>Mission,Vission, & Value Is Our Concern</p>
	</div>
</div>


<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="buttom" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"> </a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="#"><a href="index.php">Home</a></li>
						<li class="dropdown">
						<li class="#"><a href="index.php">Tentang Kami</a></li>
						<li class="dropdown">
						<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Toko Kami
						<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://goo.gl/maps/joRPbSGG98z" target="_blank=">Semarang</a></li>
								<li><a href="https://goo.gl/maps/joRPbSGG98z" target="_blank=">Yogjakarta</a></li>
								<li><a href="https://goo.gl/maps/joRPbSGG98z" target="_blank=">Solo</a></li>
								</ul>	
							</li>	
						<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Produk Kami
						<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php">Komputer / Laptop</a></li>
								<li><a href="index.php">Kamera</a></li>
								<li><a href="smartphone.php">Smartphone</a></li>
								</ul>
							</li>
							<div class="topnav">
							<li class="#">
							<input name="search" name="search" required="" list="list" autofocus placeholder="Cari apapun bisa"/> 
							</li>
							</div>
							<li class="#">
								<a href="form.php?login=masuk">Masuk/Daftar</a></li>
							</li>
				</div>
</nav>
<?php
$panel1="gambar/laptop1.png";
$panel2="gambar/canon.png";
$panel3="gambar/laptop2.png";
$panel4="gambar/nikon.png";
$panel5="gambar/s8.png";
$panel6="gambar/vivov9.png";

$panel1_name="HP Stream 14";
$panel2_name="Cannon EOS M10 Kit EF-M-15-45mm";
$panel3_name="HP Pavillion 15-cc101na";
$panel4_name="Nikon D3400 Kit AF-P 18-55mm";
$panel5_name="Samsung Galaxy S9";
$panel6_name="Vivo V9";
?>
					
<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">

			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer"><?php echo $panel1_name ?> </div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer"><?php echo $panel2_name ?></div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel2&gambar=<?php echo $panel2 ?>&panel_name=<?php echo $panel2_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 500.000</br>
			<strike> Rp 660.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer"><?php echo $panel3_name ?></div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel3&gambar=<?php echo $panel3 ?>&panel_name=<?php echo $panel3_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 300.000</br>
			<strike> Rp 350.000</strike><br>
			</div>
			</div>	
		</div>
</div><br>

<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel4 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer"><?php echo $panel4_name ?></div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel4&gambar=<?php echo $panel4 ?>&panel_name=<?php echo $panel4_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 300.000</br>
			<strike> Rp 350.000</strike><br>
			</div>
			</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel5 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer"><?php echo $panel5_name ?></div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span><br>
			<a href="spek_produk.php?panel=panel5&gambar=<?php echo $panel5 ?>&panel_name=<?php echo $panel5_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 300.000</br>
			<strike> Rp 350.000</strike><br>
			</div>
			</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">HOT Deal</div>
			<div class="panel-body"><img src=<?php echo $panel6 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer"><?php echo $panel6_name ?></div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel6&gambar=<?php echo $panel6 ?>&panel_name=<?php echo $panel6_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 300.000</br>
			<strike> Rp 350.000</strike><br>
			</div>
			</div>
		</div>
</div><br><br>
                 
  <ul class="pager">
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  </ul>

</body>
</html>