<?php
  session_start();

  include '../config/koneksi.php';

  ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />


    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <!-- header start -->
    <header class="py-1 d-none d-lg-block sticky-top header" style="background-color: #191919">
        <div class="container-fluid topbar">
            <div class="container px-0">
                <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                    <div class="top-info flex-grow-0 d-flex">
                        <span class="rounded-circle btn-sm-square me-2">
                            <i class="bi bi-airplane-engines-fill text-white" style="color: #677d6a"></i>
                        </span>
                        <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                            <p class="mb-0 fs-6 text-white fw-normal">Travellers</p>
                        </div>
                        <div class="overflow-hidden" style="width: 735px">
                            <div id="note" class="ps-2">
                                <a href="#">
                                    <p class="text-white mb-0 link-hover">
                                        Desa Wisata Pulesari Wisata Alam Budaya dan Tradisi.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="top-link d-flex align-items-center">
                        <p class="mb-0 text-white me-2">Follow Us:</p>
                        <a href="#" class="me-2">
                            <i class="bi bi-facebook text-white"></i>
                        </a>
                        <a href="#" class="me-2">
                            <i class="bi bi-twitter text-white"></i>
                        </a>
                        <a href="#" class="me-2">
                            <i class="bi bi-instagram text-white"></i>
                        </a>
                        <a href="#" class="me-2">
                            <i class="bi bi-youtube text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- nav start -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top" style="background-color: #eeeeee">
        <div class="container">
            <h2 class="navbar-brand" href="#">Desa<span>Pulesari</span></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/pemesanan.html">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wisata">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hotel">Paket Hotel</a>
                    </li>
                </ul>
                <i class="bi bi-person" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profil"></i>
                <i class="bi bi-box-arrow-in-right ms-2" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Login"></i>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- login start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-dark mb-5 fst-italic">
                                            <strong>Desa<span>Pulesari</span></strong>
                                        </h1>
                                        <h3>Pendaftaran</h3>
                                    </div>
                                    <!-- Form start -->
                                    <form method="post">
                                        <div class="form-group d-flex align-items-center mt-3">
                                            <i class="bi bi-person-fill me-2"></i>
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                placeholder="Nama Lengkap" required />
                                        </div>

                                        <div class="form-group d-flex align-items-center mt-3">
                                            <i class="bi bi-envelope-fill me-2"></i>
                                            <input type="email" name="email" class="form-control form-control-user"
                                                placeholder="E-mail" required />
                                        </div>

                                        <div class="form-group d-flex align-items-center mt-3">
                                            <i class="bi bi-lock-fill me-2"></i>
                                            <input type="password" name="password"
                                                class="form-control form-control-user" placeholder="Password"
                                                required />
                                        </div>

                                        <button name="login" class="btn btn-one mt-5 w-100">
                                            Daftar
                                        </button>
                                        <hr />
                                    </form>
                                    <!-- Form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->

    <!-- footer start -->
    <footer>
        <div class="container pt-5">
            <div class="row row-content">
                <div class="col-md-6">
                    <h1 class="logo-brand">Desa<span>Pulesari</span></h1>
                    <p class="">Wisata Alam dan Budaya Tradisi.</p>
                </div>

                <div class="col-md-3 mt-4 mt-sm-0 navigasi">
                    <h4 class="mb-3">Navigation</h4>
                    <ul class="p-0 list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li class="mt-3"><a href="#about">Tentang Kami</a></li>
                        <li class="mt-3"><a href="#">Pemesanan</a></li>
                        <li class="mt-3"><a href="#">Wisata</a></li>
                        <li class="mt-3"><a href="#">Paket Wisata</a></li>
                        <li class="mt-3"><a href="#">Paket Hotel</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mt-4 mt-sm-0">
                    <h4 class="mb-3">Sosial Media</h4>
                    <ul class="footer-sosial">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </ul>
                </div>

                <div class="row content-copy fst-italic">
                    <div class="col-md-12">
                        <p class="content-copy-p">
                            &copy; 2024 <strong>Desa Pulesari</strong>, All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <?php
    if(isset($_POST['login'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = ($_POST['password']);

        $ambil = $koneksi->query("SELECT * FROM user
        WHERE email='$email'");
        $ada_email = $ambil->num_rows;
        if ($ada_email==1) {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Email Sudah Ada',
                text: 'Silahkan Masukkan Email Lain',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/daftar.php';
                }
            });
            </script>";
        } else {
            $koneksi->query("INSERT INTO user (nama_lengkap, email, password) VALUES ('$nama', '$email', '$password')");

            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire({
                icon: 'sucess',
                title: 'Daftar Berhasil',
                text: 'Silahkan Login!',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/login.php';
                }
            });
            </script>";
        }
    }
    ?>


    <script src="../node_modules/bootstrap/js/dist/modal.js"></script>
    <script src="../node_modules/bootstrap/js/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/js/dist/jquery-3.2.1.min.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- link main.js -->
    <script src="assets/js/main.js"></script>
</body>

</html>