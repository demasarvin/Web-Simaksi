<?php
$title = "Operator";
require 'koneksi.php';
include("_partials/head.php");
?>
<center>
	<div class="container col-md-10" >
	<br>
	<h3 align="center">Halaman Operator</h3><br><br>
	<a href="data_pendaki.php" class="btn btn-primary btn-lg">Lihat Data</a>
	<a href="biaya.php" class="btn btn-warning btn-lg">Edit Biaya</a><br><br>
	<a href="logout.php" class="btn btn-danger btn-sm mb-2">LOG OUT</a>
</div>
</center>

<?php
include("_partials/foot.php");
?>