<?php
$title = "Daftar Pendaki";
require 'koneksi.php';
include("_partials/head.php");
$query = "SELECT * FROM pendakian daftar JOIN pendaki p ON daftar.id_pendaki = p.id";
$result = mysqli_query($conn, $query);

?>
	<br>
	<h3 align="center">Daftar Pendaki</h3><br><br>
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
	    </tr>
	  </thead>

	  <tbody>
	  	<?php $i=1; ?>
	  	<?php while ($row = mysqli_fetch_assoc($result)) : 
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
	    </tr>
	    <?php $i++; ?>
		<?php endwhile; ?>
	  </tbody>
</table>
<script>
		window.print();
</script>
<?php
include("_partials/foot.php");
?>