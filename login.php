<!DOCTYPE html>
<html>
<head>
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
				<h2 class="alert alert-primary" align="center">Silahkan Login</h2>		
			</div>
		</div>
	
	<div class="login">
	<br/>
		<form action="proses_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label >Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>	
			<br>		
			<div>
				<input class="btn btn-primary"   type="submit" value="Login" class="tombol">
				<a href="regis_akun.php"> Daftar </a>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</div>
</html>
