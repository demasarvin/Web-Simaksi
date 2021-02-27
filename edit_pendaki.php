<?php
$title = "Edit Pendaki";
require 'koneksi.php';
include("_partials/head.php");

$id=$_GET["id"];

$sql=mysqli_query($conn,"SELECT * FROM pendaki WHERE id=$id");
$data = mysqli_fetch_array($sql);

?>

<div class="container col-md-10" >
	<h5>Data Pendaki</h5>
	<br>
	<form action="update_pendaki.php" method="post">
		<input type="hidden" name="id" name="id" value="<?= $data["id"]; ?>">
		<div class="form-group">
    		<label>NIK</label>
    		<input type="text" class="form-control" placeholder="Masukan NIK" name="nik" required value="<?= $data["nik"] ?>">
  		</div>
  		<div class="form-group">
    		<label >Nama</label>
    		<input type="text" class="form-control" placeholder="Masukan Nama" name="nama" required value="<?= $data["nama"] ?>">
  		</div>
  		<div class="form-group">
    		<label>Alamat</label>
    		<input type="text" class="form-control" placeholder="Masukan Alamat Sesuai KTP" name="alamat" required value="<?= $data["alamat"] ?>"></input>
    	</div>
    	<div class="form-group">
		    <label>Jenis Kelamin</label>
		    <input type="text" class="form-control" placeholder="Masukan jenis kelamin" name="jenis_kelamin" required value="<?= $data["jenis_kelamin"] ?>">
		</div>
    	<div class="form-group">
    		<label>No. Telp/HP</label>
    		<input type="text" class="form-control" placeholder="Masukan No. Telp/HP" name="no_hp" required value="<?= $data["no_hp"] ?>">
    	</div>
    	<div class="form-group">
    		<label>Daftar Perlengkapan</label><br>
    		<input type="text" class="form-control" placeholder="Masukan perlengkapan" name="perlengkapan" required value="<?= $data["perlengkapan"] ?>">
		</div>
		<div class="form-group">
				<button type="submit" class="btn btn-warning " name="submit">Ubah</button>
		</div>
	</form>
</div>

