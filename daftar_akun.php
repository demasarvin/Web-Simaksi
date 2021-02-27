<!DOCTYPE html>
<?php
	session_start();
	
	$title = "Daftar";
	include('_partials/head.php');

?>
	<div class="container col-4" style="margin-top: 6rem!important;">
		<form method="POST" action="masuk_daftar_akun.php">
			<div class="card">
				<div class="card-header">
					<h1 align="center">DAFTAR</h1>
				</div>
					<div class="card-body">
						<div class="form-group form_error">
						    <label>Username</label>
						    <input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
						    <label>Nama</label>
						    <input type="text" name="nama" class="form-control" required>
					  	</div>
					    <div class="form-group">
						    <label>Password</label>
						    <input type="password" name="password" class="form-control" required>
					  	</div>
					  	<button type="submit" name="input_data" value="SIMPAN" class="btn btn-primary btn-block">SIMPAN</button>
					  	<button type="reset" name="reset_data" value="RESET" class="btn btn-danger btn-block">RESET</button>
					</div>
				</div>
		</form>
	</div>
<?php 
	include('_partials/foot.php');
 ?>