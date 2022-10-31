<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login ShopNow</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Selamat Datang!</h5>

            <?php
              if(isset($_GET['alert'])){
                if($_GET['alert']=="gagal"){
                  echo "<div class='alert alert-danger' role='alert'>
                  Username atau Password Salah!
                </div>";
                }else if($_GET['alert']=="belum_login"){
                  echo "<div class='alert alert-danger' role='alert'>
                  Silahkan login terlebih dahulu!
                </div>";
                }else if($_GET['alert']=="logout"){
                  echo "<div class='alert alert-success' role='alert'>
                  Berhasil logout!
                </div>";
                }
              }
              ?>
       
            <form action="" method="POST"> 
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="*********">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
              <input type="submit" class="btn btn-primary" value="login">
              </div>
              
            </form>
            <hr>
            <p>Belum punya akun? <a href="daftar.php" rel="noopener noreferrer">Daftar sekarang!</a></p>
            <hr>
            <p><center><a href="index.php">Beranda</a></center></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = sha1($_POST['password']);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['status']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama'];
		$_SESSION['status'] = "admin";
		//berfungsi mengalihkan ke halaman admin
		header("location:admin/index.php");
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['status']=="pengguna"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['status'] = "pengguna";
		// berfungsi mengalihkan ke halaman moderator
		header("location:pengguna/index.php");

	}else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:login.php?alert=gagal");
	}	
}
?>