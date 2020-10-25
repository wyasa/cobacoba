<?php 
  include 'connection.php';

  if (!isset($_GET['id'])) {
    header('location: list.php');
  }

  $id = $_GET['id'];

  $sq = "SELECT * FROM mahasiswa WHERE id=$id";
  $query = mysqli_query($db, $sq);
  $mahasiswa = mysqli_fetch_assoc($query);

  if (mysqli_num_rows($query) < 1) {
    die("Tidak ditemukan");
  }

?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Form Edit</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
 </head>
 <body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="alert alert-primary" align="center">Silahkan Edit Data </h2>    
      </div>
    </div>
<div class="row">
      
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
  <form action="proses_edit.php" method="POST">
    <fieldset>
      <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>"/>

      <p>
        <label for="nama">Nama :</label>
        <input type="text" name="Nama" placeholder="Nama" value="<?php echo $mahasiswa['Nama'] ?>"/>
      </p>

      <p>
        <label for="nim">Nim :</label>
        <input type="text" name="NIM" placeholder="NIM" value="<?php echo $mahasiswa['NIM'] ?>"/>
      </p>

      <p>
        <label for="alamat">Alamat :</label>
        <input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $mahasiswa['Alamat'] ?>"/>

      </p>

      <div>
        <button  class="btn btn-primary" type="submit" name="simpan" >Simpah</button>
     </div>
    </fieldset>

  </form>
</div>
  </div>
        </div>
             </div>
                

 </body>
 </html>