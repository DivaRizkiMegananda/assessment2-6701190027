<?php 
require 'koneksi.php';

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

  <!-- jumbotron start -->
  <section class="jumbotron text-center mb-5">
      <h1 class="display-4">SELAMAT DATANG</h1>
      <p class="lead">SILAHKAN LOGIN UNTUK MASUK KE SUB MENU LAIN</p>
      <button style="margin-top: 20px;" type="button"  class="btn btn-outline-primary bg-primary"><a style="color: aliceblue; text-decoration: none;" href="loginform.php">LOGIN<a></button>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L80,224C160,192,320,128,480,133.3C640,139,800,213,960,208C1120,203,1280,117,1360,74.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </section>
  <!-- jumbtron end -->

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