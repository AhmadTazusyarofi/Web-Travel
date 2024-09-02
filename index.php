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
    <title>Desa-Pulesari</title>

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
                        <a class="nav-link" aria-current="page" href="#">Home</a>
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
            <img src="assets/images/bg3.jpg" class="img-fluid w-100" alt="..." />
            <div class="position-absolute top-50 start-50 translate-middle hero-caption">
                <h1>VISIT DESA PULESARI</h1>
                <h3 class="text-white text-shadow">Wisata Alam dan Budaya Tradisi</h3>
                <button class="btn btn-one mt-3 btn-hero">Booking Sekarang!</button>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- Our Service start -->
    <div class="services" data-aos="fade-in" data-aos-delay="100">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <i class="bi bi-map" style="font-size: 3rem"></i>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Adventure</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                                vitae animi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <i class="bi bi-compass" style="font-size: 3rem"></i>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Wisata Alam</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                                vitae animi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <i class="bi bi-people" style="font-size: 3rem"></i>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Budaya Tradisi</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                                vitae animi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about mt-3" id="about">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h1 data-aos="fade-in" data-aos-delay="100">
                        Tentang<span> Kami</span>
                    </h1>
                    <hr />
                    <p data-aos="fade-in" data-aos-delay="100">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem
                        commodi, dolores corrupti facere, perspiciatis soluta illo,
                        nostrum dolorum nihil aspernatur esse cum voluptatem omnis eius
                        tenetur architecto et aliquam. Odio molestiae distinctio ducimus
                        praesentium consequatur eos tenetur quam deleniti a.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our service end -->

    <!-- wisata start -->
    <section class="wisata" id="wisata">
        <div class="container">
            <div class="row justify-content-start pb-3">
                <div class="col-md-7 heading-section ftco-animate" data-aos="fade-right" data-aos-delay="100">
                    <span class="">Featured</span>
                    <h3 class=""><strong>Rekomendasi</strong> Destinasi Wisata</h3>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Berikut adalah rekomendasi wajib wisata di Desa Pulesari.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-in" data-aos-delay="200">
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/bg3.jpg" class="card-img-top img-fluid" alt="" />
                        <div class="card-body">
                            <p class="card-title">Adventure</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/pax</strong></p>
                            <hr />
                            <a class="btn btn-sm btn-success" data-bs-toggle="modal" href="#bookingModal"
                                role="button">Booking</a>
                            <a class="btn btn-sm btn-outline-success" data-bs-toggle="modal" href="#exampleModalToggle"
                                role="button">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/bg3.jpg" class="card-img-top img-fluid" alt="Destination Image" />
                        <div class="card-body">
                            <p class="card-title">Wisata Alam</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/pax</strong></p>
                            <hr />
                            <a href="#" class="btn btn-sm btn-success">Booking</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/bg3.jpg" class="card-img-top img-fluid" alt="Destination Image" />
                        <div class="card-body">
                            <p class="card-title">Wisata Budaya</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/pax</strong></p>
                            <hr />
                            <a href="#" class="btn btn-sm btn-success">Booking</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wisata end -->

    <!-- modal booking start -->
    <div class="container">
        <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form id="bookingForm" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" required />
                            </div>

                            <div class="mb-3">
                                <label for="noTelepon" class="form-label">No Telepon</label>
                                <input type="number" name="notelepon" class="form-control" id="noTelepon" required />
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Pesan</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" required />
                            </div>

                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu Pelaksanaan Perjalanan</label>
                                <input type="date" name="waktu" class="form-control" id="waktu" required />
                            </div>

                            <p class="fw-bold">Pelayanan Paket Perjalanan</p>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="penginapan" class="form-check-input" id="penginapan" />
                                <label class="form-check-label" for="penginapan">Penginapan (Rp.1.000.000)</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="transportasi" class="form-check-input" id="transportasi" />
                                <label class="form-check-label" for="transportasi">Transportasi (Rp.1.200.000)</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="servis" class="form-check-input" id="servis" />
                                <label class="form-check-label" for="servis">Servis/Makan (Rp.500.000)</label>
                            </div>

                            <p class="fw-bold">Makanan</p>
                            <div class="mb-3">
                                <label for="jumlahPeserta" class="form-label">Jumlah Peserta</label>
                                <input type="number" name="peserta" class="form-control" id="jumlahPeserta" required />
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Paket Perjalanan</label>
                                <input type="number" name="harga" class="form-control" id="harga" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="tagihan" class="form-label">Jumlah Tagihan</label>
                                <input type="number" name="tagihan" class="form-control" id="tagihan" readonly />
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-outline-success" onclick="calculate()">
                                Hitung
                            </button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal booking end -->

    <!-- modal detail start-->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">
                        Adventure
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Show a second modal and hide this one with the button below.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-one" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal detail end -->

    <!-- hotel start -->
    <section class="hotel" id="hotel">
        <div class="container">
            <div class="row justify-content-start pb-3">
                <div class="col-md-7 heading-section ftco-animate" data-aos="fade-right" data-aos-delay="100">
                    <span class="">Featured</span>
                    <h3 class=""><strong>Rekomendasi</strong> Hotel</h3>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Berikut adalah rekomendasi hotel di Desa Pulesari.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-in" data-aos-delay="200">
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/hotel-5.jpg" class="card-img-top img-fluid" alt="Destination Image" />
                        <div class="card-body">
                            <p class="card-title">Hotel 1</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/day</strong></p>
                            <hr />
                            <a href="#" class="btn btn-sm btn-success">Booking</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/hotel-5.jpg" class="card-img-top img-fluid" alt="Destination Image" />
                        <div class="card-body">
                            <p class="card-title">Hotel 2</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/day</strong></p>
                            <hr />
                            <a href="#" class="btn btn-sm btn-success">Booking</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/hotel-5.jpg" class="card-img-top img-fluid" alt="Destination Image" />
                        <div class="card-body">
                            <p class="card-title">Hotel 3</p>
                            <p class="card-text" style="color: rgb(235, 178, 64)">
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">5 Rating</span>
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem, quasi.
                            </p>
                            <p class="harga"><strong>Rp.200.000/day</strong></p>
                            <hr />
                            <a href="#" class="btn btn-sm btn-success">Booking</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hotel end -->

    <!-- funfact start -->
    <section class="funfact" id="section-counter" style="
        margin-top: 150px;
        background-image: url(assets/images/bg3.jpg);
        object-fit: cover;
        padding: 50px 0;
      ">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4 text-white">Some fun facts</h2>
                    <span class="subheading text-white">More than 100 destination in Desa Pulesari</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row justify-content-center">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text text-white">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span class="text-white">Happy Customers</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text text-white">
                                    <strong class="number" data-number="100">0</strong>
                                    <span class="text-white">Destination Places</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text text-white">
                                    <strong class="number" data-number="100">0</strong>
                                    <span class="text-white">Restaurant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact end -->

    <!-- testi start -->
    <section class="testimony-section">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-5 heading-section ftco-animate" data-aos="fade-in" data-aos-delay="200">
                    <span><strong>Desa</strong> Pulesari.</span>
                    <h2 class="mb-4 pb-3"><strong>Kenapa</strong> Memilih Kami?</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione a
                        voluptatum vel delectus molestiae.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa,
                        dolores. Velit fuga illum dolores architecto sit accusantium
                        delectus saepe illo?
                    </p>
                    <p>
                        <a href="#" class="btn btn-two mt-4">Baca Selengkapnya</a>
                    </p>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-6 heading-section ftco-animate" data-aos="fade-in" data-aos-delay="200">
                    <span class="">Testimoni</span>
                    <h2 class="mb-4 pb-3"><strong>Apa Yang</strong> Mereka Katakan?</h2>
                    <div id="testimonyCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card mx-auto">
                                    <div class="d-flex align-items-start">
                                        <img src="assets/images/testi.jpg" class="card-img-left rounded-circle"
                                            alt="Testimonial 1" style="
                          width: 80px;
                          height: 80px;
                          object-fit: cover;
                          margin: 15px;
                        " />
                                        <div class="card-body">
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Sit adipisci vero consequatur, deleniti quod
                                                tempore.
                                            </p>
                                            <p class="name"><strong>Ahmad Tazusyarofi</strong></p>
                                            <span class="position">Pengunjung</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card mx-auto">
                                    <div class="d-flex align-items-start">
                                        <img src="assets/images/testi.jpg" class="card-img-left rounded-circle"
                                            alt="Testimonial 2" style="
                          width: 80px;
                          height: 80px;
                          object-fit: cover;
                          margin: 15px;
                        " />
                                        <div class="card-body">
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Sit adipisci vero consequatur, deleniti quod
                                                tempore.
                                            </p>
                                            <p class="name"><strong>Vino G Bastian</strong></p>
                                            <span class="position">Pengunjung</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card mx-auto">
                                    <div class="d-flex align-items-start">
                                        <img src="assets/images/testi.jpg" class="card-img-left rounded-circle"
                                            alt="Testimonial 3" style="
                          width: 80px;
                          height: 80px;
                          object-fit: cover;
                          margin: 15px;
                        " />
                                        <div class="card-body">
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Sit adipisci vero consequatur, deleniti quod
                                                tempore.
                                            </p>
                                            <p class="name"><strong>Nicholas Saputra</strong></p>
                                            <span class="position">Pengunjung</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonyCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonyCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testi end -->

    <!-- subscribe start -->
    <section class="subscribe" id="section-counter">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-7 text-center judul">
                    <h2 class="mb-4 text-white">Subscribe to our Newsletter</h2>
                    <span class="subheading text-white">Destination in Desa Pulesari</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control transparent-input mb-5"
                                placeholder="Enter email address" />
                            <input type="submit" value="Subscribe" class="btn btn-one mb-5" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

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

    <!-- php booking start -->
    <?php
    // Ambil data pengguna dari session
$id_user = $_SESSION['login']['id_user'];

// Variabel untuk status pesan
$status = '';

// Proses form pemesanan jika dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ambil data dari form
  $nama_pemesan = $_POST['nama'];
  $no_telepon = $_POST['notelepon'];
  $tanggal_pesan = $_POST['tanggal'];
  $waktu_pelaksanaan = $_POST['waktu'];
  $jumlah_peserta = $_POST['peserta'];
  $harga = $_POST['harga'];
  $tagihan = $_POST['tagihan'];

  // Tentukan paket yang dipilih
  $paket = [];
  if (isset($_POST['penginapan'])) {
      $paket[] = 'Penginapan';
  }
  if (isset($_POST['transportasi'])) {
      $paket[] = 'Transportasi';
  }
  if (isset($_POST['servis'])) {
      $paket[] = 'Servis/Makan';
  }

  $paket_json = json_encode($paket);

  // Simpan ke database
  $query = "INSERT INTO pesanan (id_user, nama_pemesan, no_telepon, waktu_pelaksanaan, paket, jumlah_peserta, harga, tagihan) 
            VALUES ('$id_user', '$nama_pemesan', '$no_telepon', '$waktu_pelaksanaan', '$paket_json', '$jumlah_peserta', '$harga', '$tagihan')";

  if ($koneksi->query($query) === TRUE) {
      $status = 'success';
      $message = 'Pemesanan Anda berhasil dilakukan!';
      $redirectUrl = 'pesanan.php';
  } else {
      $status = 'error';
      $message = 'Terjadi kesalahan saat melakukan pemesanan.';
      $redirectUrl = 'index.php';
  }

  // Menampilkan SweetAlert berdasarkan status
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script>
    Swal.fire({
        icon: '$status',
        title: '" . ($status === 'success' ? 'Pemesanan Berhasil' : 'Pemesanan Gagal') . "',
        text: '$message',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '$redirectUrl';
        }
    });
  </script>";
  exit;
}
?>
    ?>
    <!-- php booking end -->

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