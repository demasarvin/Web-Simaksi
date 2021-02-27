<?php
$title = "Daftar Pendaki";
require 'koneksi.php';
include("_partials/head.php");
$query = "SELECT * FROM pendakian daftar JOIN pendaki p ON daftar.id_pendaki = p.id JOIN biaya b ON daftar.id_biaya = b.id";
$result = mysqli_query($conn, $query);

?>
	<br>
	<h3 align="center">Daftar Pendaki</h3><br><br>
	<div class="text-right">
		<a href="hal_operator.php" class="btn btn-success">Kembali</a>
	</div>
	<br>
	<table class="table table-bordered">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">NIK</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Jenis Kelamin</th>
	      <th scope="col">No. Telp/HP</th>
	      <th scope="col">Perlengkapan</th>
	      <th scope="col">Tanggal Naik</th>
	      <th scope="col">Tanggal Turun</th>
	      <th scope="col">Biaya</th>
	      <th scope="col">Opsi</th>
	    </tr>
	  </thead>

	  <tbody>
	  	<?php $i=1; ?>
	  	<?php while ($row = mysqli_fetch_assoc($result)) :
	  		$tgl_naik = new DateTime($row["tgl_naik"]);
	  		$tgl_turun = new DateTime($row["tgl_turun"]);
	  		$diff  = $tgl_naik->diff($tgl_turun);
	  		$diff2 = $diff->d;
	  		$biaya = (int)$row["biaya"];
	  		$total = $diff2*$biaya;
	  		?>

	    <tr>
	      <th scope="row"><?= $i; ?></th>
	      <td><?= $row["nik"] ?></td>
	      <td><?= $row["nama"] ?></td>
	      <td><?= $row["alamat"] ?></td>
	      <td><?= $row["jenis_kelamin"] ?></td>
	      <td><?= $row["no_hp"] ?></td>
	      <td><?= $row["perlengkapan"] ?></td>
	      <td><?= $row["tgl_naik"] ?></td>
	      <td><?= $row["tgl_turun"] ?></td>
	      <td><?= $total ?></td>
	      <td><a href="edit_pendaki.php?id=<?= $row["id_pendaki"]; ?>" class="btn btn-warning">Edit</a></td>
	    </tr>
	    <?php $i++; ?>
		<?php endwhile; ?>
	  </tbody>
</table>
<?php
include("_partials/foot.php");
?>