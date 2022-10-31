<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar ShopNow</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Selamat Datang!</h5>
            <form action="pro_reg.php" method="POST"> 
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                <label for="floatingInput">Nama Lengkap</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="*********">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Daftar Sekarang</button>
              </div>
              
            </form>
            <hr>
            <p>Suda punya akun? <a href="login.php" rel="noopener noreferrer">login!</a></p>
             <hr>
            <p><center><a href="index.php">Beranda</a></center></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

