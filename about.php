<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>About Me</title>
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
    <section class="jumbotron text-center">
      <img src="img/diva.jpeg" alt="Diva Rizki Megananda" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Diva Rizki M</h1>
      <p class="lead">Mahasiswa | ku cukur janggut siswi sma ku genjut</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L80,224C160,192,320,128,480,133.3C640,139,800,213,960,208C1120,203,1280,117,1360,74.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- jumbotron end -->

    <!-- about start-->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea tempora in optio minima, accusantium iste ullam quod fugit harum quidem?</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem animi quam voluptate! Quam mollitia omnis, amet eveniet quos tempora quod aspernatur atque, dicta repellat iusto.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#87a9dd"
          fill-opacity="1"
          d="M0,160L60,138.7C120,117,240,75,360,74.7C480,75,600,117,720,122.7C840,128,960,96,1080,74.7C1200,53,1320,43,1380,37.3L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- about end -->

    <!-- projects  -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gambar1.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gambar2.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gambar3.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir projects -->

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
