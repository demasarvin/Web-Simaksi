<?php
$title = "Home";
require 'koneksi.php';
include("_partials/head.php");
?>
<center>
	<div class="container col-md-15" >
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="">GUNUNG MERBABU</a>
		<a href="login.php" class="btn btn-primary btn-sm mb-2">ADMIN</a>
	</nav>
	<br>
	<h5 align="center">Pendakian Gunung via Selo</h5>
	<h6>Jl. Merbabu No. 136 Boyolali</h6><br>
	<div>
		<img src="gunung.jpg" class="img-fluid">
	</div>
	
	<br>
	<table class="table table-borderless">
		<tr>
			<td><h4 align="left">Booking Online Pendakian Merbabu</h4>
	<h6 align="left">Booking online dapat dilakukan selama 24 jam, cermati tatacara dan prosedur yang telah ditetapkan</h6></td>
			<td>
				<div>
		<a href="pendaftaran.php" class="btn btn-primary btn-lg">Daftar Sekarang</a>
	</div>
			</td>
		</tr>
	</table>
	
	<div class="text-left">
		<p>Tata Cara Pendaftaran Online Pendakian Gunung Merbabu Via Selo</p>
		<p>1. Klik Button Daftar Sekarang</p>
		<p>2. Isi form biodata dengan lengkap</p>
		<p>3. Klik Submit</p>
		<p>4. Pilih tanggal naik dan tanggal turun</p>
		<p>5. Klik Submit</p>
		<p>6. Proses pendaftaran online selesai, untuk silahkan mengunduh slip bukti pendaftaran</p>
		<p>7. Silahkan transfer sejumlah tersebut di bank terdekat</p>
		<p>8. Bukti pendaftaran dan bukti pembayaran dibawa untuk registrasi ulang loket pendaftaran</p>

	</div>
	<div class="navbar navbar-inverse navbar-fixed-bottom navbar-light bg-light">
	<div class="container text-right">
		<p>
			Copyright | Demas Arvin
		</p>
	</div>
</div>
</div>
</center>
<?php
include("_partials/foot.php");
?>