<?php
$title = "Pendaftaran";
require 'koneksi.php';
include("_partials/head.php");


if( isset($_POST["submit"]) ) {
	$nik            = $_POST["nik"];
	$nama           = $_POST["nama"];
	$alamat         = $_POST["alamat"];
	$jenis_kelamin  = $_POST["jenis_kelamin"];
    $no_hp          = $_POST["no_hp"];
    $perkap 	    = $_POST["perlengkapan"];

    $source ="";
    foreach ($perkap as $hasil) {
    	$source.=$hasil.", ";
    }

    $perlengkapan = substr($source, 0, -2);


    $query = "INSERT INTO pendaki 
    	VALUES('','$nik','$nama','$alamat','$jenis_kelamin','$no_hp','$perlengkapan')";
  
    mysqli_query($conn, $query);
    $id = mysqli_insert_id($conn);

    //echo "$id";

    if(mysqli_affected_rows($conn)>0){
    	header("location:tanggal.php?pesan=berhasil&id=".$id);

    } else{
    	echo "<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'pendaftaran.php';
			</script>";
    }
}
?>

<div class="container col-md-10" >
	<br>
	<h3 align="center">Pendaftaran Online Pendakian Gunung Merbabu</h3><br><br>
	<h5>Form Data Pendaki</h5>
	<form action="" method="post">
		<div class="form-group">
    		<label>NIK</label>
    		<input type="text" class="form-control" placeholder="Masukan NIK" name="nik" required>
  		</div>
  		<div class="form-group">
    		<label >Nama</label>
    		<input type="text" class="form-control" placeholder="Masukan Nama" name="nama" required>
  		</div>
  		<div class="form-group">
    		<label>Alamat</label>
    		<textarea class="form-control" placeholder="Masukan Alamat Sesuai KTP" name="alamat" required></textarea>
    	</div>
    	<div class="form-group">
		    <label>Jenis Kelamin</label>
		    <select class="form-control" id="jeniskelamin" name="jenis_kelamin" required>
		    	<option selected="">Pilih...</option>
		      	<option>Laki-laki</option>
		      	<option>Perempuan</option>
		    </select>
		</div>
    	<div class="form-group">
    		<label>No. Telp/HP</label>
    		<input type="text" class="form-control" placeholder="Masukan No. Telp/HP" name="no_hp" required>
    	</div>
    	<div class="form-group">
    		<label>Daftar Perlengkapan(Centang) :</label><br>
    		<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="jaket" name="perlengkapan[]" value="Jaket">
			  	<label class="form-check-label" for="jaket">Jaket</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="tas" name="perlengkapan[]" value="Tas">
			  	<label class="form-check-label"for="tas">Tas</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="sleepingbag" name="perlengkapan[]" value="Sleeping Bag">
			  	<label class="form-check-label"for="sleepingbag">Sleeping Bag</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="peralatanmasak" name="perlengkapan[]" value="Peralatan Masak">
			  	<label class="form-check-label" for="peralatanmasak">Peralatan Masak</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="tenda" name="perlengkapan[]" value="Tenda">
			  	<label class="form-check-label"for="tenda">Tenda</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="p3k" name="perlengkapan[]" value="P3K">
			  	<label class="form-check-label"for="p3k">P3K</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="jashujan" name="perlengkapan[]" value="Jas Hujan">
			  	<label class="form-check-label"for="jashujan">Jas Hujan</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="penerangan" name="perlengkapan[]" value="Alat Penerangan">
			  	<label class="form-check-label"for="penerangan">Alat Penerangan</label>
			</div>
			<div class="form-check form-check-inline">
			  	<input class="form-check-input" type="checkbox" id="matras" name="perlengkapan[]" value="Matras">
			  	<label class="form-check-label"for="matras">Matras</label>
			</div> 
			<br> <br>
			<h6>**Dengan menekan tombol submit dibawah ini, Anda menyatakan bahwa data yang diisi benar dan dapat dipertanggung jawabkan.</h6> <br>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary " name="submit">Submit</button>
			</div>
    	</div>
	</form>
</div>


<?php
include("_partials/foot.php");
?>