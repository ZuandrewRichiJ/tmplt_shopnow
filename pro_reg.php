
<?php
  include('koneksi.php');
 

	// membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama'];
  $username     = $_POST['username'];
  $password    = sha1($_POST['password']);
  $daftar = date('Y/m/d');
  $status = "pengguna";


// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO users (nama, username, password, daftar, status) VALUES ('$nama', '$username','$password', '$daftar', '$status')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Berhasil mendaftar');window.location='login.php';</script>";
                  }
                  ?>