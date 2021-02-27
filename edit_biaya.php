<?php
$title = "Edit Biaya";
require 'koneksi.php';
include("_partials/head.php");

$id=$_GET["id"];

$sql=mysqli_query($conn,"SELECT * FROM biaya WHERE id=$id");
$data = mysqli_fetch_array($sql);



?>

<center>
	<div class="container col-md-5" >
		<br>
	<h1>Ubah Biaya</h1>
		<form action="update_biaya.php" method="post">
				<input type="hidden" name="id" name="id" value="<?= $data["id"]; ?>">
					<div class="form-group">
		    		<label>Biaya per hari Rp. </label>
		    		<input type="text" class="form-control" name="biaya" id="biaya" value="<?= $data["biaya"]; ?>" required>
		  		</div>
			<div class="form-group">
				<button type="submit" class="btn btn-warning " name="submit">Ubah</button>
			</div>
		</form>
	</div>
</center>

<?php
include("_partials/foot.php");
?>