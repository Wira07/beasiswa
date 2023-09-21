<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style_login.css" rel="stylesheet">
  </head>
  <style>
    body {
      background-color: brown;
    }
    .card {
      background-color: coral;
    }
  </style>
  <body>
    

    <div class="container">
      <div class="card login-form" style="height:450px;">
        <div class="card-body">
        <h1 class="text-center">LOGIN SISWA</h1>
        <hr>
        </div>
        <div class="card-text">
          
        <form class="row g-3 needs-validation" action="proses_login_siswa.php" method="post">
          
          <div class="col-12">
            <label for="validationCustomUsername" class="form-label">Nomor Induk Siswa (NIS)</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" name="nis" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Nomor Induk Siswa Tidak Boleh Kosong
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="validationCustomPassword" class="form-label">Password</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="password" name="password" class="form-control" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Password Tidak Boleh Kosong
              </div>
            </div>
          </div>
          
          <div class="col-12 d-grid gap-2">
            <button class="btn btn-primary" type="submit">LOGIN</button>
            <button class="btn btn-warning" type="reset">CANCEL</button>
          </div>
          <div class="col-12">
            <a href="pendaftaran_akun.php" style="color: white; text-decoration: none;">DAFTAR</a>
          </div>

        </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>