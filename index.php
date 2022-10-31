<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ShopNow</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->
    <!-- Navbar -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ShopNow</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
          <li style="color: white;">
            <a href="login.php">
              <button type="button" class="btn btn-outline-primary m-2" data-mdb-ripple-color="dark">Login</button>
            </a>
          </li>
          <li style="color: white;">
            <a href="daftar.php">
              <button type="button" class="btn btn-primary m-2">Sign Up</button>
        </div>
      </nav>
      <div class="progress-bar fixed-top" id="scrollBar"></div>
      <!-- Carousel wrapper / Slide Pict -->
      <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="desain1.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%)" />
            <div class="carousel-caption d-none d-md-block">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                  <h1 class="mb-3"></h1>
                  <a class="btn btn-outline-light btn-lg m-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal" role="button" rel="nofollow" target="#">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="desain2.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%)" />
            <div class="carousel-caption d-none d-md-block">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                  <h1 class="mb-3"></h1>
                  <a class="btn btn-outline-light btn-lg m-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal" role="button" rel="nofollow" target="#">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <!-- Button Control Pict -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <!-- Design -->
    <section class="text-center mb-4" style="margin-top: 60px">
      <div class="row">

      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="gambar/<?php echo $row['gambar_produk']; ?>" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
              <h6><?php echo"Rp". $row['harga_jual']; ?></h6>
              <p class="card-text"><?php echo $row['deskripsi']; ?></p>
              <a class="btn btn-warning btn-sm" href="detail.php?id=<?php echo $row['id']; ?>"
                        role="button">Lihat Detail
                    </a>
            </div>
          </div>
        </div>
        
        <?php
      }
      ?>
    
      </div>
      <!-- Video dan Maps -->
    <footer class="bg-dark text-center text-white" id="footer">
      <div class="container p-4">
        <!-- Section: Iframe -->
        <section class="">
          <div class="row">
            <div class="col-lg-4">
              <div class="row justify-content-lg-start">
                <div class="col">
                  <div class="ratio ratio-16x9">
                    <iframe
                      class="shadow-1-strong rounded"
                      src="https://www.youtube.com/embed/qZrX6jKfJxU"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                  <div class="ratio ratio-16x9">
                    <iframe
                      class="shadow-1-strong rounded"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8097318.4586992785!2d105.87487218948951!3d-7.707942894652217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4920fe5d1%3A0xf88f841d4c4e56a0!2sNET.%20TV!5e0!3m2!1sen!2sid!4v1635349580770!5m2!1sen!2sid"
                      title="Maps"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Sosial Media -->
      <div class="container p-4">
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-facebook-f"></i></a>
          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-google"></i></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-instagram"></i></a>
        </section>
      </div>
      <!-- Footer -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Create:
        <a class="text-white" href="">Yusnia Wilujeng</a>
      </div>
    </footer>
    <!-- Modal corousel-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sorry</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">You Don't Have Any Design</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal design -->
    <div class="modal fade" id="modalpembelian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Added To Design!</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">Dont Forget To Add Your Design</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End your project here-->
    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
