<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body {
    /* margin: auto 400px; */
    margin-top: 100px;
  }

  img {
    border-radius: 28%;
    background-color: blueviolet;
    transition: 1s;
  }

  img:hover {
    transform: scale(1.4);
  }

  .card {
    margin: auto;
    padding: 20px;
    animation: card 1s;
  }

  @keyframes card {
    0% {
      opacity: 0;
      transform: scale(0);
    }

    100% {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>

<body>
  <div class="card text-center" style="width: 38rem">
    <img src="gambar/fkom-uniku.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title fs-1 fw-bold">Selamat Datang</h5>
      <p class="card-text fs-4">Penerima Beasiswa Fkom Universitas Kuningan</p>
      <a href="admin/login_admin.php" class="btn btn-primary w-40">Admin</a>
      <a href="siswa/login_siswa.php" class="btn btn-danger w-40">User</a>
    </div>
  </div>
  <!-- Page 2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

</html>
<!-- <div class="container">
    <div class="card form">
      <div class="card-body">
        <h1 class="text-center">PENERIMAAN BEASISWA</h1>
      </div>
      <div class="card-text text-center">
        <img src="gambar/fkom-uniku.png" width="300px" height="100px">
      </div>
      <div class="card-text text-center">
        <a href="admin/login_admin.php">
          <button class="btn btn-success btn-lg">
            ADMIN
          </button>
        </a>
        <a href="siswa/login_siswa.php">
          <button class="btn btn-success btn-lg">
            SISWA
          </button>
        </a>
      </div>
    </div>
  </div> -->