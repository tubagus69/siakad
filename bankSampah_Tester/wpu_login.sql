-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2020 pada 16.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemputsampah`
--

CREATE TABLE `jemputsampah` (
  `id_jemput` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `permintaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jemputsampah`
--

INSERT INTO `jemputsampah` (`id_jemput`, `nama`, `alamat`, `noTelp`, `permintaan`) VALUES
(1, 'Eren Jeagger', 'Jl. Jombang Gg. III No. 22 RT 12 RW 03, Kelurahan Gadingkasri, kecamatan Klojen, Kota Malang, Kode Pos 65115', '6281335498131', 'Tolong ambil sampah di rumah saya nanti sore. Saya tunggu di depan rumah. Ini ada sampah kardus bekas, besi bekas dan botol plastik. Terima kasih'),
(2, 'Armin Alert', 'Jl.Jombang, Gg III Klojen, Kota Malang', '0830137410', 'Assalamualaikum, pak tolong jemput sampah di rumah saya, disini ada sampah kardus bekas, botol plastik bekas, dan tembaga bekas. Terima kasih'),
(4, 'anggun', 'bontang', '987654321', 'Tolong ambil sampah dirumah saya. Alhamdulilah Jazza Kallahukhoiro'),
(6, 'Tubagus', 'Tumpang, Malang', '9328742394', 'Jemput sampah di rumah kami sore ini, tolong ya pak'),
(7, 'Badrun', 'Malaysia', '98249273', 'Jemput sampah durian bosok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nabung`
--

CREATE TABLE `nabung` (
  `id_nabung` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `nama_nasabah` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_sampah` enum('botol','kertas','tembaga','besi','plastik','kaleng','elektronik','aluminium','campur') NOT NULL,
  `kategori_sampah` varchar(20) NOT NULL,
  `jumlah_kg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nabung`
--

INSERT INTO `nabung` (`id_nabung`, `nama_petugas`, `nama_nasabah`, `tgl_transaksi`, `jenis_sampah`, `kategori_sampah`, `jumlah_kg`) VALUES
(1, 'Moh.Andy Hediansyah', 'Abdullah Winasis', '2020-12-26', 'campur', 'tembaga', 15),
(2, 'Andy', 'Tubagus', '2020-12-22', 'kaleng', 'Kaleng bekas', 10),
(4, 'smash', 'aku', '2020-12-24', 'campur', 'Radio bekas', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `noTelp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `name`, `email`, `address`, `noTelp`) VALUES
(1, 'Abdullah Winasis', 'awinasism2p@gmail.com', 'Jl Supriyadi, Dsn Papar Selatan, Rt/Rw 004/007, Ds Papar, Kec Papar, Kab Kediri, Jawa Timur', '6287881445230'),
(4, 'Mentari Rizka Hasanah', 'rizkahasanah@gmail.com', 'Tawang Rejo, Kediri', '087654322');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Hindu','Budha','Konghucu','Lain-lain') NOT NULL,
  `alamat` text NOT NULL,
  `noTelp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `email`, `tgl_lahir`, `agama`, `alamat`, `noTelp`) VALUES
(1, 'Daffa Viraka', 'daffaviraka@gmail.com', '2000-08-12', 'Islam', 'Jl. Jombang Gg. III No. 22 RT 12 RW 03, Kelurahan Gadingkasri, kecamatan Klojen, Kota Malang, Kode Pos 65115', '937492'),
(2, 'Husnan Abdillah', 'husnanjokam@gmail.com', '2020-12-22', 'Islam', 'Klojen, Kota Malang', '93248237');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setor`
--

CREATE TABLE `setor` (
  `id_setor` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_sampah` enum('botol','kertas','tembaga','besi','plastik','kaleng','elektronik','aluminium','campur') NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga_per_kg` varchar(30) NOT NULL,
  `jmlh_kg` varchar(10) NOT NULL,
  `total_harga` varchar(30) NOT NULL,
  `tgl_setor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setor`
--

INSERT INTO `setor` (`id_setor`, `nama`, `jenis_sampah`, `kategori`, `harga_per_kg`, `jmlh_kg`, `total_harga`, `tgl_setor`) VALUES
(1, 'Awinasis', 'campur', 'kardus', 'Rp.5000,00', '100 kg', 'Rp.50000,00', '2020-11-24'),
(2, 'Anggun Milenia Rohman', 'elektronik', 'TV bekas', 'Rp. 70.000,00', '5 kg', 'Rp. 350.000,00', '2020-12-31'),
(5, 'Cristopher Hirata', 'plastik', 'Botol Plastik', 'Rp. 10.000,00', '20 Kg', 'Rp. 200.000,00', '2008-11-23'),
(7, 'Anggun', 'besi', 'baja bekas', 'Rp. 50.000,00', '30 Kg', 'Rp. 1500.000,00', '2020-12-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(40, 'Harist Al-Abror', 'haristm2p@gmail.com', 'default.jpg', '$2y$10$x9uWSrOU.fBrxlgrrKVZwu3jmQshCwINNue7e3Rl69q9eGNkg2kXe', 2, 1, 1606289203),
(41, 'Abdullah Winasis', 'awinasism2p@gmail.com', 'default.jpg', '$2y$10$IMBNvRWc7rcYLXPUxtY6HuN6GqiQB/xdyq12yg4fT17qPz4EBuXlK', 1, 1, 1606289733),
(43, 'Suriyanto', 'supriyanto@gmail.com', 'default.jpg', '$2y$10$g5xr4lWrXsSEdBETCoS2xufR7DleRQ4iy/hilKVbvA7.za./NB53G', 2, 1, 1608569477);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Officer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'homeview', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Petugas', 'Admin', 'fas fa-fw fa-users-cog', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jemputsampah`
--
ALTER TABLE `jemputsampah`
  ADD PRIMARY KEY (`id_jemput`);

--
-- Indeks untuk tabel `nabung`
--
ALTER TABLE `nabung`
  ADD PRIMARY KEY (`id_nabung`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jemputsampah`
--
ALTER TABLE `jemputsampah`
  MODIFY `id_jemput` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `nabung`
--
ALTER TABLE `nabung`
  MODIFY `id_nabung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
