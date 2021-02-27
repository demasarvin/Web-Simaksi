<?php
$title = "Edit Biaya";
require 'koneksi.php';
include("_partials/head.php");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    $id             = $_POST["id"];
	$nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $alamat         = $_POST["alamat"];
    $jenis_kelamin  = $_POST["jenis_kelamin"];
    $no_hp          = $_POST["no_hp"];
    $perkap         = $_POST["perlengkapan"];

	$query = "UPDATE pendaki SET 
                nik = '$nik',
                nama = '$nama',
                alamat = '$alamat',
                jenis_kelamin = '$jenis_kelamin',
                no_hp = '$no_hp',
                perlengkapan = '$perkap'
            WHERE id = $id";
    mysqli_query($conn,$query);

	// cek apakah data berhasil diubah atau tidak
	if(mysqli_affected_rows($conn)>0){
    	header("location:data_pendaki.php?pesan=data berhasil diubah");

    } else{
    	header("location:edit_pendaki.php?pesan=data gagal diubah");
    	echo mysqli_error($conn);
    }


}