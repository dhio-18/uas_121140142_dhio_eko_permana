-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2023 pada 14.43
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21683631_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'Dhio', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'coba', 'admin', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `tahun_terbit`, `stok`, `kategori`, `sinopsis`) VALUES
(3, 'The Alchemist', 'J.K. Rowling', 1988, 1, 'Fiksi', 'Novel ini bercerita tentang Santiago, seorang penggembala muda dari Spanyol yang bermimpi untuk menemukan harta karun di piramida Mesir. Dia meninggalkan rumahnya dan memulai perjalanannya, bertemu berbagai orang dan mengalami berbagai petualangan. Dalam perjalanannya, Santiago belajar tentang pentingnya mengikuti mimpinya, mendengarkan kata hati, dan mencintai dengan sepenuh hati.'),
(4, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 2011, 2, 'Non-Fiksi', 'Buku ini menceritakan sejarah umat manusia dari sudut pandang biologi dan ekonomi. Harari menjelaskan bagaimana manusia berevolusi menjadi spesies dominan di planet ini, dan bagaimana kita telah membentuk masyarakat dan dunia kita. Buku ini adalah wawasan yang mendalam tentang sejarah dan masa depan manusia.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
