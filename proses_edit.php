<?php 
	include 'connection.php';

	if (isset($_POST['simpan'])){

		$id = $_POST['id'];
		$nama = $_POST['Nama'];
		$nim = $_POST['NIM'];
		$alamat = $_POST['Alamat'];

		$sq = "UPDATE mahasiswa SET Nama='$nama', NIM='$nim', Alamat='$alamat' WHERE id=$id";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: list.php');
		} else {
			die("Gagal menyimpan perubahan");
	    }
	    
	} else {
			die("Akses dilarang..");
		}

 ?>