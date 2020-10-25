<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>

 	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<center><h2 class="alert alert-primary" align="center">Form Pendaftaran</h2></center>		
			</div>
		</div>
<div class="row">
			
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
     <form action="proses_daftar.php" method="POST">
     	<fieldset>
     		<p>
				<label for="Nama">Nama :</label>
				<input type="text" name="Nama" placeholder="Nama">
			</p>

			<p>
				<label for="NIM">Nim :</label>
				<input type="text" name="NIM" placeholder="NIM">
			</p>
			<p>
				<label for="Alamat">Alamat :</label>
				<textarea name="Alamat" placeholder="Alamat"></textarea>
			</p>

			<p>
				<input class="btn btn-primary" type="submit" value="daftar" name="daftar">
			</p>

     	</fieldset>
     		</div>
				</div>
			</div>
		</div>

		
	</div>
     
</body>
</html>