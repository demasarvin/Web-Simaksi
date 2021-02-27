<?php 
$conn = mysqli_connect("sql311.epizy.com", "epiz_27026224", "SI9MMBP5NZ", "epiz_27026224_pendaftaran");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$biaya = $data["nrp"];

	$query = "UPDATE biaya SET
				biaya = $biaya,
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}



