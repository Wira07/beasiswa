<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Beasiswa Fkom Universitas Kuningan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=pendaftaran">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=penerima_beasiswa">Penerima Beasiswa</a>
        </li>

        <div class="dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nama']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?pg=akun_admin">Akun</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>

      </ul>
    </div>
  </div>
</nav>

<section class="jumbotron text-center" style="background-color: blueviolet;">
  <img src="gambar/fkom-uniku.png" alt="logo" width="800px" height="300px" class="rounded-circle">
  <h1 class="display-10 text-white">Beasiswa Fkom Universitas Kuningan</h1>
</section>