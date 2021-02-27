<?php
	session_start();
	require 'koneksi.php';

	$username = $_POST['username'];
	$pass = $_POST['pass'];
	//$pw 	  = md5($password);

	$query = "SELECT * FROM login WHERE username='$username' AND pass='$pass'";
	$data = mysqli_query($conn, $query);
	$cek 	= mysqli_num_rows($data);
	$cek2 	= mysqli_fetch_array($data);
	if ($cek>0) {
		if($username=="pengelola"){
			$_SESSION['username']="pengelola";
			$_SESSION['password']=$pw;
			$_SESSION['status']="login";
			header("location:hal_pengelola.php");
		}elseif($username=="operator"){
			$_SESSION['username']="operator";
			$_SESSION['password']=$pw;
			$_SESSION['status']="login";
			header("location:hal_operator.php");
		} else{
			header("location:hal_user.php");
		}	
	}else{
		header("location:login.php?pesan=gagal");
	}
?>