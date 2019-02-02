<?php

include "header.php";
include "menu_navbar.php";
?>
<link rel="stylesheet" href="lib/css/owl.carousel.css">
<script src="lib/js/owl.carousel.min.js"></script>
<script src="lib/js/jquery.sticky.js"></script>
<script src="lib/js/slider.js"></script>

<br>
<div class="slider-area">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner" role="listbox">
		<div class="item active img-responsive">
			<img src="gambar/zenbook.png" alt="New York" width="1200" height="300">
		</div>
		<div class="item">
			<img src="gambar/samsungs9.png" alt="Chicago" width="1200" height="300">
		</div>
		<div class="item">
			<img src="gambar/cannon_eos.png" alt="Los Angeles" width="1200" height="300">
		</div>
	</div>
<!-- Left and right Slider area -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="gylphicon gylphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr_only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="gylphicon gylphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr_only">Next</span>
	</a>
	</div>
</div> <!-- End Slider area -->
<br>
<br>
<?php 
/*
?>
<div class="container text-center"><!-- Start hot deal -->
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
</div><br><br><!-- End hot deal -->
<?php 
*/
?>

	<div class="promo-area">
		<div class="zigzag-bottom"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="single-promo promo1">
						<i class="fa fa-refresh"></i>
						<p>Kembali 30 Hari</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-promo promo2">
						<i class="fa fa-truck"></i>
						<p>Gratis Ongkir</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-promo promo3">
						<i class="fa fa-lock"></i>
						<p>Keamanan Transaksi</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-promo promo4">
						<i class="fa fa-gift"></i>
						<p>Produk Terbaru</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include "produk_terbaru.php";
include 'footer.php';

	?>