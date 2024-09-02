-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2024 pada 10.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `jumlah_tagihan` decimal(10,2) NOT NULL,
  `metode_pembayaran` enum('Transfer Bank','Kartu Kredit','E-Wallet') NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Belum Bayar','Sudah Bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `nama_pemesan`, `no_telepon`, `jumlah_tagihan`, `metode_pembayaran`, `bukti_pembayaran`, `tanggal_pembayaran`, `status`) VALUES
(1, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'header.png', '2024-08-16 19:50:08', 'Belum Bayar'),
(2, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'Desa_Pule.png', '2024-08-16 19:53:29', 'Belum Bayar'),
(3, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'Desa_Pule.png', '2024-08-16 19:53:35', 'Belum Bayar'),
(4, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'bg_2.jpg', '2024-08-16 20:01:27', 'Belum Bayar'),
(5, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'bg_2.jpg', '2024-08-16 20:04:02', 'Belum Bayar'),
(6, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'testi.jpg', '2024-08-16 20:06:32', 'Belum Bayar'),
(7, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'testi.jpg', '2024-08-16 20:11:34', 'Belum Bayar'),
(8, 27, 'Dela Risma', '2147483647', 0.00, 'E-Wallet', 'bg3.jpg', '2024-08-16 20:12:46', 'Belum Bayar'),
(9, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'bg3.jpg', '2024-08-16 20:20:04', 'Belum Bayar'),
(10, 27, 'Dela Risma', '2147483647', 0.00, 'Kartu Kredit', 'bg3.jpg', '2024-08-16 20:26:45', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `paket` varchar(100) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `status` enum('Belum Bayar','Sudah Bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `nama_pemesan`, `no_telepon`, `waktu_pelaksanaan`, `paket`, `jumlah_peserta`, `harga`, `tagihan`, `status`) VALUES
(26, 1, 'rofi', 2147483647, '2024-08-31', '[\"Penginapan\",\"Transportasi\",\"Servis/Makan\"]', 1, 2700000, 37800000, 'Belum Bayar'),
(27, 2, 'Dela Risma', 2147483647, '2024-08-19', '[\"Penginapan\",\"Servis/Makan\"]', 2, 1500000, 6000000, 'Sudah Bayar'),
(28, 2, 'Ahmad Tazusyarofi', 2147483647, '2024-08-21', '[\"Penginapan\",\"Transportasi\",\"Servis/Makan\"]', 2, 2700000, 16200000, 'Belum Bayar'),
(29, 2, 'Febri Haryadi', 2147483647, '2024-08-18', '[\"Penginapan\",\"Transportasi\",\"Servis/Makan\"]', 1, 2900000, 2900000, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'Ahmad Tazusyarofi', 'tazusya@gmail.com', '123'),
(2, 'Dela Risma', 'dela@gmail.com', '123'),
(7, 'Rofi', 'rofi@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
