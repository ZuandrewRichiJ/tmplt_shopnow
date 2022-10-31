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
          <a class="navbar-brand" href="index.php">ShopNow</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
</a>
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

        
      </div>
    </header>
    <!-- Design -->
    <section class="text-center" style="margin-top: 60px">
      <div class="row justify-content-md-center">

      <?php
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from produk where id='$id'");
            while($row = mysqli_fetch_array($data)){
                ?>
        <div class="col-md-8 mb-4">
        <div class="card">
                <img src="gambar/<?php echo $row['gambar_produk']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
                    <p><?php echo"Rp". $row['harga_jual']; ?></p>
                    <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                    <hr>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
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
