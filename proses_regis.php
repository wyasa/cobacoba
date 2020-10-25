<?php

	require 'connection.php';
	if (isset($_POST['simpan'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		
echo $username;
echo $password;

		$sq = "INSERT INTO users (username, password) VALUE ('$username', '$password')";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: login.php?status=sukses');
		} else {
			echo "masukkan data dengan benar";
		}
	}
	else {
		die("akses dilarang");
	}
 ?>