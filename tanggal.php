<?php
$title = "Tanggal Pendakian";
require 'koneksi.php';
include("_partials/head.php");

$id=$_GET['id'];

if( isset($_POST["submit"]) ) {
	$tgl_naik    = $_POST["tgl_naik"];
	$tgl_turun   = $_POST["tgl_turun"];

	$query = "INSERT INTO pendakian
    	VALUES('','$tgl_naik','$tgl_turun','$id',1)";
    mysqli_query($conn, $query);

    $id = mysqli_insert_id($conn);

    if(mysqli_affected_rows($conn)>0){
    	echo "<script>
			alert('Pendaftaran berhasil!');
		</script>
		";
		header("location:cetak_slip.php?pesan=berhasil&id=".$id);

    } else{
    	echo "<script>
			alert('Pendaftaran gagal!');
		</script>
		";
    }

}

?>


<div class="container col-md-4" >
	<br>
	<h3 align="center">Input Tanggal Pendakian</h3><br><br>
	<form action="" method="post">
		<input type="hidden" name="id_pendaki" value="<?= $data['id']?>">
	    <div class="form-group">
	        <label>Tanggal Naik</label>
	        <input type="date" name="tgl_naik" class="form-control">
	    </div>
	    <div class="form-group">
	    	<label>Tanggal Turun</label>
	        <input type="date" name="tgl_turun" class="form-control">
	    </div>
	    <div class="form-group text-center">
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</div>
	</form>
</div>


<?php
include("_partials/foot.php");
?>