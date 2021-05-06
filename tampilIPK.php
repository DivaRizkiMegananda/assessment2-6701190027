<?php 

    require "koneksi.php";
    $semester = query("SELECT * FROM mahasiswa");

?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />


  <title>Beranda</title>
</head>
<body>
  <!-- navbar start -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-secondary shadow-sm" style="opacity: 0.7;" >
      <div class="container">
        <a class="navbar-brand" href="about.php">Ass2-Pengweb-Diva</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampilIPK.php">IPK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambahIPK.php">Input IPK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- navbar end -->

<div class="container" style="padding: 100px;">
    <br>
    <h4>Halaman IPK</h4>

    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Semester</th>
            <th>Jumlah IPK </th>
            <th colspan='2'>Aksi</th>
        </tr>
        </thead>
        <?php $i = 1;  ?>
        <?php foreach ($semester as $row) : ?>
          <tr>
            <th scope="row"> <?= $i ?></th>
            <td><?= $row["semester"]; ?></td>
            <td><?= $row["ipk"]; ?></td>
            <td>  
            <a href="ubahIPK.php?semester=<?= $row["semester"]; ?>" class="btn btn-warning" role="button">Update</a>
            <a href="hapusIPK.php?semester=<?= $row["semester"]; ?>" class="btn btn-danger" role="button">Delete</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="tambahIPK.php" class="btn btn-primary" role="button">Tambah Data</a>

</div>
 <!-- footer start -->
 <footer class="bg-secondary text-white text-center pb-1 fw-bold">
       
       <p>
         Assesment 2 Pengweb DivaRizkiM 6701190027
       </p>
         </footer>
         <!-- footer end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>