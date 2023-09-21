<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            min-height: 1500px;
            animation: nav 1s;
        }

        .beasiswa {
            /* background-image: url(assets/image/bg-uniku.jpg); */
            background-size: cover;
            background-position-y: -300px;
            background-repeat: no-repeat;
            color: white;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
        }

        header {
            background-color: blueviolet;
        }

        .beasiswa-prestasi p {
            color: #595260;
        }


        @keyframes nav {
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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="gambar/fkom-uniku.png" width="100px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../beasiswa/siswa/pendaftaran_akun.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="masuk.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-primary beasiswa">
        <header class="header w-100 py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9 d-flex flex-column align-items-center">
                    <div class="logo text-center">
                        <img src="gambar/fkom-uniku.png" alt="kemendikbud " class="img-fluid" />
                        <h1 class="d-flex flex-column align-items-center">Selamat Datang di Beasiswa Universitas Kuningan</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- <div class="p-5 mb-5">
            <div class="container py-4">
            </div>
        </div> -->
    </div>
    <!-- shadow-md border rounded -->
    <div class="container beasiswa-prestasi">
        <div class="py-8 px-5 my-8 mx-5 shadow-md border rounded mb-4 pb-5">
            <h2 class="text-primary pt-4">Beasiswa Prestasi Akademik</h2>
            <h3 class="text-primary pt-4">Ketentuan :</h3>
            <ol class="py-1">
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate aliquid beatae doloremque at, deleniti magnam..</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim porro deleniti repudiandae at optio voluptatem.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
            </ol>

            <h3 class="text-primary">Persyaratan :</h3>
            <ol class="py-1">
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate aliquid beatae doloremque at, deleniti magnam..</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim porro deleniti repudiandae at optio voluptatem.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
            </ol>
            <div class="text-center">
                <a href="../beasiswa/siswa/pendaftaran_akun.php"><button class="btn btn-primary mt-2 text-white">Daftar Sekarang</button></a>
            </div>
        </div>

        <div class="py-8 px-5 my-8 mx-5 shadow-md border rounded mb-4 pb-5">
            <h2 class="text-primary pt-4">Beasiswa Prestasi Non-Akademik</h2>

            <h3 class="text-primary pt-4">Ketentuan :</h3>
            <ol class="py-1">
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate aliquid beatae doloremque at, deleniti magnam..</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim porro deleniti repudiandae at optio voluptatem.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
            </ol>

            <h3 class="text-primary pt-4">Persyaratan :</h3>
            <ol class="py-1">
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate aliquid beatae doloremque at, deleniti magnam..</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim porro deleniti repudiandae at optio voluptatem.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores at iusto repellendus dignissimos voluptatum ut.</li>
            </ol>
            <div class="text-center">
                <a href="../beasiswa/siswa/pendaftaran_akun.php"><button class="btn btn-primary mt-2 text-white">Daftar Sekarang</button></a>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-light pb-2 pt-2 text-center fixed-bottom mt-5">
        <!-- <div class="container"> -->
        <p class="m-0">&copy; <?php echo date('Y'); ?> VSGA JWD</p>
        <!-- </div> -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>