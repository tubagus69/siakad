-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2020 pada 08.55
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `foto`, `nim`, `email`, `jurusan`) VALUES
(1, 'Pak Bagus M.pd', 'a.jpg', '09887764456', 'bagus@gmail.com', 'Matematika'),
(2, 'Pak Dika S.pd', 'e.jpg', '0893748123', 'dika@gmail.com', 'Biologi'),
(3, 'Pak Soni S.ak', 'c.jpg', '08138192341', 'soni@gmail.com', 'Sejarah'),
(8, 'Bu Ijah S.pd', 'b.jpg', '082133990123', 'ijah@gmail.com', 'MateMatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `foto`, `alamat`, `nim`, `keahlian`) VALUES
(1, 'Ade ', 'z.jpg', 'Wonokerto', '111', 'Kesiswaan'),
(2, 'Daffa', 'y.jpg', 'Bojonegoro', '112', 'Admin SPP'),
(3, 'Samsul', 'v.jpg', 'Lumajang', '113', 'BK'),
(4, 'Fahrul', 'w.jpg', 'Nganjuk', '114', 'BK'),
(5, 'Harisun ', 'x.jpg', 'Malang', '115', 'BK'),
(9, 'violet', '3.jpg', 'jln kalpataru', '1898787666', 'Admin SPP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level` varchar(500) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `Status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(4, 'ade', 'ade', 'user', 1),
(7, 'aku', '1234', 'admin', 0),
(8, 'qwerty', '1234', 'admin', 1),
(9, 'bagus', 'bagus', 'user', 1),
(12, 'samsul', 'samsul', 'user', 0),
(13, 'kontol', 'kontol', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
