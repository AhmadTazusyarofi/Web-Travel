<?php
session_start();
include 'config/koneksi.php';

// Pastikan pengguna sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil data pengguna dari session
$id_user = $_SESSION['login']['id_user'];

// Ambil semua laporan booking
$query = "SELECT * FROM pesanan WHERE id_user = '$id_user'";
$result = $koneksi->query($query);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Pemesanan</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- animasi aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- cdn datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">

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
                        <a class="nav-link" href="pesanan.html">Pemesanan</a>
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



    <!-- table start -->
    <div class="container mt-4 mb-4">
        <div class="container mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paket Wisata</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>ID Pesanan</th>
                                <th>Nama Pemesan</th>
                                <th>No Telepon</th>
                                <th>Waktu Pelaksanaan</th>
                                <th>Paket</th>
                                <th>Jumlah Peserta</th>
                                <th>Harga</th>
                                <th>Tagihan</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        $paket = json_decode($row['paket'], true);
                        $paket_list = implode(', ', $paket);
                        echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['id_pesanan']}</td>
                            <td>{$row['nama_pemesan']}</td>
                            <td>{$row['no_telepon']}</td>
                            <td>{$row['waktu_pelaksanaan']}</td>
                            <td>{$paket_list}</td>
                            <td>{$row['jumlah_peserta']}</td>
                            <td>Rp.{$row['harga']}</td>
                            <td>Rp.{$row['tagihan']}</td>
                            <td>
                                <a class='btn btn-success' data-bs-toggle='modal' data-bs-target='#paymentModal{$row['id_pesanan']}'>Bayar</a>
                            </td>
                            <td>{$row['status']}</td> <!-- Menampilkan status -->
                        </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr>
                        <td colspan='11' class='text-center'>Belum ada pemesanan</td>
                    </tr>";
                }
                ?>
                        </tbody>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- table end -->

    <!-- modal pembayaran start -->
    <?php
    if ($result->num_rows > 0) {
        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            ?>
    <!-- Modal -->
    <div class="modal fade" id="paymentModal<?php echo $row['id_pesanan']; ?>" tabindex="-1"
        aria-labelledby="paymentModalLabel<?php echo $row['id_pesanan']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel<?php echo $row['id_pesanan']; ?>">Pembayaran untuk
                        Pesanan #<?php echo $row['id_pesanan']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pesanan" value="<?php echo $row['id_pesanan']; ?>">
                        <div class="mb-3">
                            <label for="namaPemesan" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="namaPemesan" name="nama_pemesan"
                                value="<?php echo $row['nama_pemesan']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="noTelepon" name="no_telepon"
                                value="<?php echo $row['no_telepon']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahTagihan" class="form-label">Jumlah Tagihan</label>
                            <input type="text" class="form-control" id="jumlahTagihan" name="jumlah_tagihan"
                                value="Rp. <?php echo $row['tagihan']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="metodePembayaran" name="metode_pembayaran" required>
                                <option value="Transfer Bank">Transfer Bank</option>
                                <option value="Kartu Kredit">Kartu Kredit</option>
                                <option value="E-Wallet">E-Wallet</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="buktiPembayaran" class="form-label">Upload Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="buktiPembayaran" name="bukti_pembayaran"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pembayaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
}
?>
    <!-- modal pembayaran end -->

    <!-- proses pembayaran -->
    <?php

// Periksa apakah form sudah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah semua data POST dan FILES tersedia
    if (isset($_POST['id_pesanan'], $_POST['nama_pemesan'], $_POST['no_telepon'], $_POST['jumlah_tagihan'], $_POST['metode_pembayaran'], $_FILES['bukti_pembayaran'])) {

        // Ambil data dari form
        $id_pesanan = $_POST['id_pesanan'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $no_telepon = $_POST['no_telepon'];
        $jumlah_tagihan = $_POST['jumlah_tagihan'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];

        // Tentukan folder untuk upload
        $targetDir = "assets/images/uploads/";
        $targetFile = $targetDir . basename($bukti_pembayaran);

        // Pindahkan file yang diupload ke folder tujuan
        if (move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"], $targetFile)) {
            // Simpan data pembayaran ke database
            $query = "INSERT INTO pembayaran (id_pesanan, nama_pemesan, no_telepon, jumlah_tagihan, metode_pembayaran, bukti_pembayaran) 
                      VALUES ('$id_pesanan', '$nama_pemesan', '$no_telepon', '$jumlah_tagihan', '$metode_pembayaran', '$bukti_pembayaran')";

            // Gunakan variabel $koneksi dari file koneksi.php
            if (mysqli_query($koneksi, $query)) {

                // Update status pesanan menjadi 'sudah bayar'
                $update_query = "UPDATE pesanan SET status = 'Sudah Bayar' WHERE id_pesanan = '$id_pesanan'";
                mysqli_query($koneksi, $update_query);

                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                  Swal.fire({
                      icon: 'success',
                      title: 'Pembayaran Berhasil',
                      text: 'Selamat Berlibur!',
                      confirmButtonText: 'OK'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = 'pesanan.php';
                      }
                  });
                </script>";
            } else {
                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                  Swal.fire({
                      icon: 'error',
                      title: 'Pembayaran Gagal',
                      text: 'Terjadi Kesalahan Saat Pembayaran!',
                      confirmButtonText: 'OK'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = 'pesanan.php';
                      }
                  });
                </script>";
            }
        } else {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
              Swal.fire({
                  icon: 'error',
                  title: 'Upload Gagal',
                  text: 'Gagal mengupload bukti pembayaran!',
                  confirmButtonText: 'OK'
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = 'pesanan.php';
                  }
              });
            </script>";
        }
    } else {
        // Jika data tidak lengkap
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          Swal.fire({
              icon: 'error',
              title: 'Pembayaran Gagal',
              text: 'Data tidak lengkap!',
              confirmButtonText: 'OK'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = 'pesanan.php';
              }
          });
        </script>";
    }
}
?>

    <!-- proses pembayaran -->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>

    <script src="node_modules/bootstrap/js/dist/modal.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- js animasi aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();

    // data tables
    new DataTable("#example", {
        layout: {
            topStart: {
                buttons: ["copy", "csv", "excel", "pdf", "print"],
            },
        },
    });
    </script>

    <!-- link main.js -->
    <script src="assets/js/main.js"></script>
</body>

</html>