<?php
$title = "Laporan Pendapatan";
require 'koneksi.php';
include("_partials/head.php");
$query = "SELECT * FROM pendakian daftar JOIN pendaki p ON daftar.id_pendaki = p.id JOIN biaya b ON daftar.id_biaya = b.id";
$result = mysqli_query($conn, $query);
$jumlah_pendaki = mysqli_num_rows($result);
$total = 0;
?>
<div class="container col-md-8" >
	<br>
	<h3 align="center">Laporan Pendapatan</h3><br><br>
	<table class="table table-bordered">
	  <tbody>
	  	<?php while ($row = mysqli_fetch_assoc($result)) :
	  		$tgl_naik = new DateTime($row["tgl_naik"]);
			$tgl_turun = new DateTime($row["tgl_turun"]);
			$diff  = $tgl_naik->diff($tgl_turun);
			$diff2 = $diff->d;

			$biaya = (int)$row["biaya"];
			$total += $diff2*$biaya; 
	  		?>
	    <?php endwhile; ?>
	    <tr>
	  		<td scope="col">Jumlah Pendaki</td>
	  		<td><?= $jumlah_pendaki ?></td>
	  	</tr>
	    <tr>
	    	<td scope="col">Jumlah Pendapatan</td>
	    	<td>Rp. <?= $total ?></td>
	    </tr>
	  </tbody>
	</table>
</div>
<script>
		window.print();
</script>
<?php
include("_partials/foot.php");
?>