<?php

	// variable untuk select database
	// $server = "localhost";
	// $user = "root";
	// $password = "";
	
	// urutannya -> server, username, password, namadatabase
	$conn = mysqli_connect('localhost', 'root', '', 'loginlogout');

	if (!$conn) {
		echo 'gagal terhubung ke database';
	}

?>