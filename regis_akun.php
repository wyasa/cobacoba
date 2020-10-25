<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Akun</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<style type="text/css">
			label{
				display: block;
			}
		</style>
</head>
<body>
 <div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="alert alert-primary" align="center">Silahkan Daftarkan Akun Anda</h2>		
			</div>
		</div>
	
	<form action="proses_regis.php" method="POST">
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<br>
			
			
			
			<div>
				<button  class="btn btn-primary" type="submit" name="simpan" >Daftar</button>
			</div>
		</ul>
		
	</form>
</div>
</body>
</html>