<?php
  include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  	<title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
      <header class="text-center">
      	<h2>Pendaftaran</h2>
      </header>

      <nav>
      	
        <a href="daftar.php" class="btn btn-success">Tambah</a>

        <a href="index.php" class="btn btn-danger">Menu Awal</a>
      </nav>
      <br>

<div class="col-md-6">
  <table border ="1" class="table table-sm">
        <thead class="thead-dark">
          <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr> 
        </thead>
       <tbody>
         <?php
                 $sq = "SELECT * FROM mahasiswa";
                 $query = mysqli_query($db, $sq);
                 $no = 1;

                 while($mahasiswa = mysqli_fetch_array($query))
                 {

                 ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $mahasiswa['Nama']; ?></td>
                  <td><?php echo $mahasiswa['NIM']; ?></td>
                  <td><?php echo $mahasiswa['Alamat']; ?></td>

                  <td>
                    <a href="edit.php?id=<?php echo $mahasiswa['id'] ?>" >Edit</a>
                    <a href="hapus.php?id=<?php echo $mahasiswa['id'] ?>" >Hapus</a>
                  </td>
                </tr>

              <?php } ?>
       </tbody>
                


    </table>
</div>
      

    <p>Total : <?php echo mysqli_num_rows($query) ?> </p>

</body>
</html>