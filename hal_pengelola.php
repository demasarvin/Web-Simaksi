<?php
$title = "Pengelola";
require 'koneksi.php';
include("_partials/head.php");
?>
<center>
	<div class="container col-md-10" >
	<br>
	<h3 align="center">Halaman Pengelola</h3><br><br>
	<a href="laporan_pendaki.php" class="btn btn-primary btn-lg">Laporan Data Pendaki</a>
	<a href="laporan_pendapatan.php" class="btn btn-success btn-lg">Laporan Pendapatan</a><br><br>
	<a href="logout.php" class="btn btn-danger btn-sm mb-2">LOG OUT</a>
</div>
</center>

<?php
include("_partials/foot.php");
?>