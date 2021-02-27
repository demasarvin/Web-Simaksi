<?php
$title = "Edit Biaya";
require 'koneksi.php';
include("_partials/head.php");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	$id     = $_POST["id"];
	$biaya  = $_POST["biaya"];

	$query = "UPDATE biaya SET biaya = $biaya WHERE id = $id";
    mysqli_query($conn,$query);

	// cek apakah data berhasil diubah atau tidak
	if(mysqli_affected_rows($conn)>0){
    	header("location:biaya.php?pesan=biaya berhasil diubah");

    } else{
    	header("location:edit_biaya.php?pesan=biaya gagal diubah");
    	echo mysqli_error($conn);
    }


}