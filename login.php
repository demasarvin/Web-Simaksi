<?php 
	$title = 'LOGIN';
	require 'koneksi.php';
	include("_partials/head.php");
 ?>
		<div class="container col-4 mt-4" style="margin-top: 9.5rem!important;">
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal") { echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Login gagal! Username atau password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';}

			elseif ($_GET['pesan']=="logout") {echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah berhasil <strong>logout</stong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';}

			elseif ($_GET['pesan']=="belum_login") { echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda belum <strong>login!</stong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';}
			}	
		?>
		
		<form method="POST" action="cek_login.php">
			<div class="card">
				<div class="card-header">
					<h4 align="center">LOGIN</h4>
				</div>
				<div class="card-body">
					  <div class="form-group">
					    <label>Username</label>
					    <input type="text" name="username" class="form-control">
					  </div>
				    <div class="form-group">
					    <label>Password</label>
					    <input type="password" name="pass" class="form-control">
				  	</div>
				  	<button type="submit" class="btn btn-primary btn-block">Login</button>
				</div>
			</div>
		</form>
		</div>
<?php 
	include("_partials/foot.php");
?>