<?php

	include 'connection.php';
	if (isset($_POST['daftar'])) {
		
		$nama = $_POST['Nama'];
		$nim = $_POST['NIM'];
		$alamat = $_POST['Alamat'];

		$sq = "INSERT INTO mahasiswa (nama, nim, alamat) VALUE ('$nama', '$nim', '$alamat')";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: index.php?status=sukses');
		} else {
			header('location: index.php?status=gagal');
		}
	}
	else {
		die("akses dilarang");
	}
 ?>