<nav class="mainmenu-area navbar-default navbar-fixed-top">
	<div class="container">
	<div class="row">
		<div class="navbar-header">
		<div class="container-fluid">
		<a class="navbar-brand"
		href="index.php?hlm=Dashboard">OlShop</a>
		<button type="button" class="navbar-toggle pull-right" data-toggle="collapse"
		data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			</div>
			</div>
			
				<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php?hlm=Dashboard">Home</a></li>
					<li><a href="index.php?hlm=Semua Produk">Produk</a></li>
					<li class="dropdown">
					
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategori
			<span class="caret"></span>
			<ul class="dropdown-menu">
				<li><a href="produk.php?hlm=Smartphone">Smartphone</a></li>
				<li><a href="produk.php?hlm=Laptop">Laptop</a></li>
				<li><a href="produk.php?hlm=Kamera">Kamera</a></li>
					</ul>
					</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php
			if (@$_SESSION['nmpegawai']) {
				?>
					<li><a href="data_barang.php?hlm=Data">
					<span class="glyphicon glyphicon-folder-open"></span>Data Barang</a></li>
					<li><a href="keranjang.php?hlm=keranjang"><span class="glyphicon glyphicon=shopping-cart"></span>Keranjang</a></li>
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-user"></span><?php echo (@$_SESSION['nmpegawai'])?>
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span>Keluar</a></li>
					</ul>
					</li>
					<?php
			}else
			{
				?>
				<li><a href="login.php?cek=Login"><span class="glyphicon glyphicon-log-in"></span>Masuk</a></li>
			<?php
			}
			?>

					</ul>
					</div>
					</div>
					</div>
					</nav> <!-- End mainmenu area -->
		
				
				
				
				
				
				
		