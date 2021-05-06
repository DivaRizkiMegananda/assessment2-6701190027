<?php
    //Include file conneksi, untuk conneksikan ke database
    require "koneksi.php";
    //Cek apakah ada kiriman form dari method post
    if (isset($_POST["submit"])) {

        //cekkk data berhasil
        if (tambah($_POST) > 0) {
            echo "<script>alert('data berhasil ditambahkan!');
            document.location.href = 'tampilIPK.php';</script>";
        } else {
            echo "<script>alert('data gagal ditambahkan!');
            document.location.href = 'insertIPK.php'; </script>";
        }
    }

    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Isi IPK</title>
    <!-- Load file CSS Bootstrap online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<div class="container">
    <h2>Input Data</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Semester :</label>
            <input type="number" name="semester" class="form-control" placeholder="Masukan Semester" required />
        </div>
        <div class="form-group">
            <label>ipk :</label>
            <input type="text" name="ipk" class="form-control" placeholder="Masukan IPK " required />
        </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>