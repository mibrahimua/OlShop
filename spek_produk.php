
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/bootstrap.min.css">
	<script src="lib/jquery.min.js"></script>
	<script src="lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.checked {
    color: orange;
}
	</style>
		</head>
	<body>
		<?php
$panel1="gambar/j7.png";
$panel2="gambar/nokia6.png";
$panel3="gambar/s8.png";
$panel4="gambar/s9.png";
$panel5="gambar/vivov9.png";
$panel6="gambar/vivov9.png";

$panel1_name="Samsung Galaxy J7 Pro";
$panel2_name="Nokia 6";
$panel3_name="Samsung Galaxy S8";
$panel4_name="Samsung Galaxy S9";
$panel5_name="Vivo V9";
$panel6_name="Vivo V9";
?>
		<?php

if(isset($_GET['panel'])&&isset($_GET['gambar'])&&isset($_GET['panel_name'])){
	$gambar=$_GET['gambar'];
	$panel_name=$_GET['panel_name'];
	switch ($_GET['panel']) {
		case 'panel1':
?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body">
				<ul class="pager">
			    <li class="previous"><a href="spek_produk.php?panel=panel1&gambar=gambar/nokia6.png&panel_name=<?php echo $panel_name ?>"><</a></li>
			    <li class="next"><a href="spek_produk.php?panel=panel1&gambar=gambar/vivov9.png&panel_name=<?php echo $panel_name ?>">></a></li>
			    <img src=<?php echo $gambar; ?> id= "gambar" class="img-responsive" style="width: 100%" alt="Image">
			  </ul>
					</div>

					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 2.000.000 <br>
						<strike> Rp 3.000.000 </strike><br>
						<italic>cicilan</italic> :Rp 500.000</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger">
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>

<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>
	</div>
</div>
<?php
			break;
		case 'panel2':
			?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body"><img src=<?php echo  $gambar ?> class="img-responsive" style="width: 100%" alt="Image"></div>
					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 3 juta <br>
						<strike> Rp. 2 juta </strike><br>
						<italic>cicilan</italic> :rp 1 jt</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger">
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>

<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>

	</div>
</div>
<?php
			break;
		case 'panel3':
			?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body"><img src=<?php echo  $gambar ?> class="img-responsive" style="width: 100%" alt="Image"></div>
					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 3 juta <br>
						<strike> Rp. 2 juta </strike><br>
						<italic>cicilan</italic> :rp 1 jt</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger">
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>
<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>

	</div>
</div>
<?php
			break;
		case 'panel4':
			?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body"><img src=<?php echo  $gambar ?> class="img-responsive" style="width: 100%" alt="Image"></div>
					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 3 juta <br>
						<strike> Rp. 2 juta </strike><br>
						<italic>cicilan</italic> :rp 1 jt</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger"> 
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>

<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>

	</div>
</div>
<?php
			break;
		case 'panel5':
			?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body"><img src=<?php echo  $gambar ?> class="img-responsive" style="width: 100%" alt="Image"></div>
					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 3 juta <br>
						<strike> Rp. 2 juta </strike><br>
						<italic>cicilan</italic> :rp 1 jt</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger">
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>
<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>

	</div>
</div>
<?php
			break;
		case 'panel6':
			?>
			<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"> Black Friday Deal</div>
					<div class="panel-body"><img src=<?php echo  $gambar ?> class="img-responsive" style="width: 100%" alt="Image"></div>
					<div class="panel-footer">
						<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
						<?php echo $panel_name; ?> <br> Rp 3 juta <br>
						<strike> Rp. 2 juta </strike><br>
						<italic>cicilan</italic> :rp 1 jt</div>
			</div>
				</div>
			<div class="col-sm-5">
				<div class="panel panel-danger">
					<div class="panel panel-danger">
						<div class="panel-heading">Spesifikasi Produk</div>
						<div class="panel-footer"><b><u>Desain / Bodi</u></b><br>
						Dimensi : 152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)<br>
						Berat : 181 g (6.38 oz)<br>
						Warna : Hitam<br>
						Kamera : 13 MP, f/1.7, autofocus, LED flash <br>
						OS : Android 7.0 (Nougat) <br>
						Chipset : Exynos 7870 Octa <br>
						CPU : Octa-core 1.6 GHz Cortex-A53 <br>
						GPU : Mali-T830 MP1 <br>
						Card Slot : microSD, up to 256 GB (dedicated slot) <br>
						Memori : 3 GB RAM /32 GB <br>
						WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot <br>
						Bluetooth : 4.1, A2DP, LE <br>
						GPS : Yes, with A-GPS, GLONASS, BDS <br>
						NFC : Yes <br>
						Radio : FM Radio <br>
						USB : microUSB 2.0, USB On-The-Go <br>
						Sensor : Fingerprint (front-mounted), accelerometer, gyro, proximity, compass <br>
						Messaging : SMS(threaded view), MMS, Email, Push Email, IM <br>
						Browser : HTML5 <br>
						Talk Time : Up to 24 h (3G) <br>
						</div>
					</div>
				</div>
					</div>
				<div class="col-sm-3">
					<div class="panel panel-success">
						<div class="panel-heading"> Testimoni</div>
							<div class="panel-footer">I bought a j7 pro 6 months before. The thing I don't like about it that it is very fragile. I dropped it and the screen started bleeding. It took 3 days for bleeding to be so much of a problem that I had to go to the Samsung centre to change the lcd....</div>
						</div>
				</div>

<div class="container text-center">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel1 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Samsung Galaxy J7 Pro</div>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span><br>
			<a href="spek_produk.php?panel=panel1&gambar=<?php echo $panel1 ?>&panel_name=<?php echo $panel1_name ?>" target="_blank=">Tampilkan Lebih....</a><br>
			Rp 2.000.000</br>
			<strike> Rp 3.000.000</strike><br>
			</div>
			</div>
			
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Nokia</div>
			<div class="panel-body"><img src=<?php echo $panel2 ?>
			class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">Nokia 6</div>
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
			<div class="panel-heading">Samsung</div>
			<div class="panel-body"><img src=<?php echo $panel3 ?>
			class="img-responsive" style="width:100%" alt="Image" align="center"></div>
			<div class="panel-footer">Samsung Galaxy S8</div>
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
</div>


	</div>
</div>
<?php
			break;
		
		default:
			# code...
			break;
	}
	}
	





?>
</body>
</html>