<?php
$title = "Slip";
require 'koneksi.php';
include("_partials/head.php");
$id=$_GET['id'];
$query = "SELECT nik,nama,alamat,jenis_kelamin,no_hp,perlengkapan,tgl_naik,tgl_turun,biaya FROM pendakian daftar JOIN pendaki p ON daftar.id_pendaki = p.id JOIN biaya b ON daftar.id_biaya = b.id WHERE daftar.id_pendakian = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$tgl_naik = new DateTime($row["tgl_naik"]);
$tgl_turun = new DateTime($row["tgl_turun"]);
$diff  = $tgl_naik->diff($tgl_turun);
$diff2 = $diff->d;
$biaya = (int)$row["biaya"];
$total = $diff2*$biaya;
?>

<div class="container col-md-8" >
	<br>
	<a href="hal_user.php">Pendakian Gunung Merbabu</a>
	<h3 align="center">Slip Pendaftaran Online Pendakian Gunung Merbabu</h3><br><br>
	<table class="table table-bordered">
	  <tbody>

	    <tr>
	      	<td scope="col" width="150px">NIK</td>
	      	<td><?= $row["nik"] ?></td>
	  	</tr>
	  	<tr>
	  		<td scope="col">Nama</td>
	  		<td><?= $row["nama"] ?></td>
	  	</tr>
	    <tr>
	    	<td scope="col">Alamat</td>
	    	<td><?= $row["alamat"] ?></td>
	    </tr>
	    <tr>
	    	<td scope="col">Jenis Kelamin</td>
	    	<td><?= $row["jenis_kelamin"] ?></td>
	    </tr>
	    <tr>
	    	<td scope="col">No. Telp/HP</td>
	    	<td><?= $row["no_hp"] ?></td>
	    </tr>
	    <tr>
	    	<td scope="col">Perlengkapan</td>
	    	<td><?= $row["perlengkapan"] ?></td>
	    </tr> 
	    <tr>
	    	<td scope="col">Tanggal Naik</td>
	    	<td><?= $row["tgl_naik"] ?></td>
	    </tr> 
	    <tr>
	    	<td scope="col">Tanggal Turun</td>
	    	<td><?= $row["tgl_turun"] ?></td>
	    </tr>
	    <tr>
	    	<td scope="col">Biaya</td>
	    	<td><?= $total ?></td>
	    </tr>    
	  </tbody>
	</table>
	<h5>Silahkan Transfer ke Rekening BRI 014015016017 A/N Merbabu.</h5>
	<h6>*Simpan Bukti Transfer dan Dibawa untuk Pengecekan</h6><br>
	<h5>Terima Kasih Telah Mendaftar.</h5>
</div>
<script>
		window.print();
</script>
<?php
include("_partials/foot.php");
?>