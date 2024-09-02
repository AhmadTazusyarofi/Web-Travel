<?php
session_start();
include 'config/koneksi.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['login'])) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: pages/login.php");
    exit;
}

// Ambil data pengguna yang login dari session
$user = $_SESSION['login'];
$user_id = $user['id_user'];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paket-Wisata</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- animasi aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket_wisata.php">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket_hotel.php">Paket Hotel</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <!-- jika user sudah melakukan login -->
                    <?php if (isset($_SESSION['login'])): ?>
                    <a href="pages/profile.php" class="me-2">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="pages/logout.php">
                        <i class="bi bi-box-arrow-left"></i>
                    </a>
                    <?php else: ?>
                    <!-- jika user belum login -->
                    <a href="pages/profile.php" class="me-2">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="pages/login.php">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- hero section start -->
    <section class="hero">
        <div class="position-relative text-center">
            <img src="assets/images/bg_2.jpg" class="img-fluid w-100" alt="..." />
            <div class="position-absolute top-50 start-50 translate-middle hero-caption">
                <h1>PAKET WISATA</h1>
                <h3 class="text-white text-shadow">Dapatkan Discount Menarik</h3>
                <button class="btn btn-one mt-3 btn-hero">Booking Sekarang!</button>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <div class="container mt-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
            </ol>
        </nav>
    </div>

    <!-- paket wisata section start -->
    <section id="paket-wisata" class="container py-5">
        <h2 class="text-center mb-5 fst-italic fw-bold" data-aos="fade-in" data-aos-delay="100">Paket Wisata Terbaru
        </h2>
        <div class="row" data-aos="fade-in" data-aos-delay="100">
            <!-- Paket Wisata 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="assets/images/gunung.jpg" class="card-img-top" alt="Paket Wisata 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Gunung</h5>
                        <p class="card-text">Nikmati pengalaman mendaki gunung dengan pemandangan yang menakjubkan.
                            Paket ini termasuk pemandu, makanan, dan akomodasi.</p>
                        <p class="card-text"><strong>Rp 2.500.000</strong></p>
                        <a href="pages/booking.php?paket=gunung" class="btn btn-one">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Paket Wisata 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="assets/images/pantai.jpg" class="card-img-top" alt="Paket Wisata 2">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Pantai</h5>
                        <p class="card-text">Rasakan keindahan pantai dengan paket wisata ini. Termasuk transportasi,
                            makanan, dan aktivitas seru di pantai.</p>
                        <p class="card-text"><strong>Rp 1.800.000</strong></p>
                        <a href="pages/booking.php?paket=pantai" class="btn btn-one">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Paket Wisata 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="assets/images/budaya.jpeg" class="card-img-top" alt="Paket Wisata 3">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Budaya</h5>
                        <p class="card-text">Explore budaya dan tradisi lokal dengan paket wisata budaya ini. Termasuk
                            tur ke situs sejarah dan pertunjukan budaya.</p>
                        <p class="card-text"><strong>Rp 2.000.000</strong></p>
                        <a href="pages/booking.php?paket=budaya" class="btn btn-one">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- paket wisata section end -->



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

                <div class="row content-copy">
                    <div class="col-md-12">
                        <p class="content-copy-p fst-italic">
                            &copy; 2024 <strong>Desa Pulesari</strong>, All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</body>




<script src="node_modules/bootstrap/js/dist/modal.js"></script>
<script src="node_modules/bootstrap/js/dist/owl.carousel.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- <script src="node_modules/bootstrap/js/dist/jquery-3.2.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- js animasi aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

<!-- link main.js -->
<script src="assets/js/main.js"></script>
</body>

</html>