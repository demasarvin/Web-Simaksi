<?php
$title = "Edit Biaya";
require 'koneksi.php';
include("_partials/head.php");

$result=mysqli_query($conn,"SELECT * FROM biaya");

?>
<center>
	<div class="container col-md-8" >
		<br>
		<h3 align="center">Biaya Pendakian</h3><br><br>
		<table class="table table-borderless">
			<tr>
				<?php while ($data=mysqli_fetch_array($result)) : ?>
				<td>
					<h4>Biaya per hari :</h4>
				</td>
				<td><h4>Rp. <?= $data["biaya"]; ?> </h4></td>
				<td>
					<a href="edit_biaya.php?id=<?= $data["id"]; ?>" class="btn btn-warning">Ubah</a>
					<a href="hal_operator.php" class="btn btn-success">Kembali</a>
				</td>
			</tr>
				<?php endwhile; ?>
		</table>
	</div>
</center>

<?php
include("_partials/foot.php");
?>