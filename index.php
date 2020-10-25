<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Universitas Bumigora dong</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header class="text-center">
	<h2 class="alert alert-primary" >Daftar Mahasiswa Universitas Bumigora</h2>
</header>

<h5 >Menu</h5>
<nav>
	<ul>
		<li class="nav-item active"><a  class="nav-link" href="Daftar.php"> Daftar  <span class="sr-only">(current)</span></a></li>

		<li><a class="nav-item nav-link" href="List.php"> Mahasiswa</a></li>
	</ul>
</nav>

   	<?php if (isset($_Get['status'])): ?>
 		<p>

		<?php 
		if ($_Get['status']== 'sukses') {

		echo "Pendaftaran berhasil";
		} else {

		echo "Pendaftaran Gagal";
		}
   		?>

		</p>

	<?php endif; ?>

</body>
</html>