-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2019 pada 11.08
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_admin`
--

CREATE TABLE `biaya_admin` (
  `ID` int(2) NOT NULL,
  `HARGA` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya_admin`
--

INSERT INTO `biaya_admin` (`ID`, `HARGA`) VALUES
(1, 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `ID` int(3) NOT NULL,
  `NAMA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`ID`, `NAMA`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'Nevember'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `IDUSER` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IDPELANGGAN` int(5) NOT NULL,
  `NOMETER` int(11) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL,
  `KODETARIF` varchar(20) DEFAULT '0',
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` int(1) DEFAULT 3,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `FOTO` text DEFAULT NULL,
  `EMAIL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`IDPELANGGAN`, `NOMETER`, `NAMA`, `ALAMAT`, `KODETARIF`, `USERNAME`, `PASSWORD`, `LEVEL`, `JENIS_KELAMIN`, `NO_HP`, `FOTO`, `EMAIL`) VALUES
(1, 563543, 'gavril', 'jl.aaaa', 'KT001', 'gavril', 'gavril', 3, NULL, NULL, NULL, NULL),
(3, 786565, 'vira', 'jl.xxxx', 'KT003', 'vira', 'vira', 3, NULL, NULL, NULL, NULL),
(4, 876754, 'rei', 'jl.bbbb', 'KT002', 'rei', 'rei', 3, NULL, NULL, NULL, NULL),
(5, 989880, 'tumpang', 'jl.xxcx', 'KT002', 'tumpang', 'tumpang', 3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `IDBAYAR` int(5) NOT NULL,
  `IDPELANGGAN` varchar(5) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `BULANBAYAR` int(5) DEFAULT NULL,
  `BIAYAADMIN` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`IDBAYAR`, `IDPELANGGAN`, `TANGGAL`, `BULANBAYAR`, `BIAYAADMIN`) VALUES
(1, '4', '2019-04-21', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan`
--

CREATE TABLE `penggunaan` (
  `IDPENGGUNAAN` int(5) NOT NULL,
  `IDPELANGGAN` int(5) NOT NULL,
  `BULAN` int(5) DEFAULT 0,
  `TAHUN` int(5) DEFAULT 0,
  `METERAWAL` int(5) DEFAULT 0,
  `METERAKHIR` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `penggunaan`
--

INSERT INTO `penggunaan` (`IDPENGGUNAAN`, `IDPELANGGAN`, `BULAN`, `TAHUN`, `METERAWAL`, `METERAKHIR`) VALUES
(1, 4, 1, 2019, 10, 55),
(2, 1, 1, 2019, 45, 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `IDTAGIHAN` int(5) NOT NULL,
  `IDPELANGGAN` int(5) NOT NULL,
  `BULAN` int(5) DEFAULT 0,
  `TAHUN` int(5) DEFAULT 0,
  `JUMLAHMETER` int(10) DEFAULT 0,
  `STATUS` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`IDTAGIHAN`, `IDPELANGGAN`, `BULAN`, `TAHUN`, `JUMLAHMETER`, `STATUS`) VALUES
(1, 4, 1, 2019, 45, 1),
(2, 1, 1, 2019, 32, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `KODETARIF` varchar(20) NOT NULL,
  `DAYA` int(11) DEFAULT NULL,
  `TARIFPERKWH` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`KODETARIF`, `DAYA`, `TARIFPERKWH`) VALUES
('KT001', 450, 35500),
('KT002', 900, 45000),
('KT003', 1300, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `IDUSER` int(5) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` int(3) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `EMAIL` text DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `FOTO` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`IDUSER`, `NAMA`, `USERNAME`, `PASSWORD`, `LEVEL`, `ALAMAT`, `JENIS_KELAMIN`, `EMAIL`, `NO_HP`, `FOTO`) VALUES
(1, 'ADMIN', 'admin', 'admin', 1, 'jl.sdsda', 'l', 'adeputra124@gmail.com', '087664132', 'uploads/foto/11102019024356.jpg'),
(2, 'petugas', 'petugas', 'petugas', 2, 'jl.nnjn', 'p', 'sadsd@gmail.com', '342342342', 'uploads/foto/21042019074213.jpg'),
(3, 'petugas1', 'petugas1', 'petugas1', 2, 'petugas1', 'l', NULL, NULL, NULL),
(4, 'petugas3', 'petugas3', 'petugas3', 2, 'jl.bba', 'l', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_laporan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_laporan` (
`METERAWAL` int(5)
,`METERAKHIR` int(5)
,`STATUS` int(2)
,`JUMLAHMETER` int(10)
,`TAHUN` int(5)
,`BULAN` int(5)
,`NOMETER` int(11)
,`NAMA` varchar(50)
,`ALAMAT` text
,`KODETARIF` varchar(20)
,`IDPELANGGAN` int(5)
,`IDTAGIHAN` int(5)
,`IDPENGGUNAAN` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pelanggan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pelanggan` (
`DAYA` int(11)
,`TARIFPERKWH` int(10)
,`IDPELANGGAN` int(5)
,`NOMETER` int(11)
,`NAMA` varchar(50)
,`ALAMAT` text
,`KODETARIF` varchar(20)
,`USERNAME` varchar(50)
,`PASSWORD` varchar(50)
,`LEVEL` int(1)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_laporan`
--
DROP TABLE IF EXISTS `view_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan`  AS  select `penggunaan`.`METERAWAL` AS `METERAWAL`,`penggunaan`.`METERAKHIR` AS `METERAKHIR`,`tagihan`.`STATUS` AS `STATUS`,`tagihan`.`JUMLAHMETER` AS `JUMLAHMETER`,`penggunaan`.`TAHUN` AS `TAHUN`,`penggunaan`.`BULAN` AS `BULAN`,`pelanggan`.`NOMETER` AS `NOMETER`,`pelanggan`.`NAMA` AS `NAMA`,`pelanggan`.`ALAMAT` AS `ALAMAT`,`pelanggan`.`KODETARIF` AS `KODETARIF`,`pelanggan`.`IDPELANGGAN` AS `IDPELANGGAN`,`tagihan`.`IDTAGIHAN` AS `IDTAGIHAN`,`penggunaan`.`IDPENGGUNAAN` AS `IDPENGGUNAAN` from ((`pelanggan` join `penggunaan` on(`penggunaan`.`IDPELANGGAN` = `pelanggan`.`IDPELANGGAN`)) join `tagihan` on(`tagihan`.`IDPELANGGAN` = `pelanggan`.`IDPELANGGAN`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pelanggan`
--
DROP TABLE IF EXISTS `view_pelanggan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pelanggan`  AS  select `tarif`.`DAYA` AS `DAYA`,`tarif`.`TARIFPERKWH` AS `TARIFPERKWH`,`pelanggan`.`IDPELANGGAN` AS `IDPELANGGAN`,`pelanggan`.`NOMETER` AS `NOMETER`,`pelanggan`.`NAMA` AS `NAMA`,`pelanggan`.`ALAMAT` AS `ALAMAT`,`pelanggan`.`KODETARIF` AS `KODETARIF`,`pelanggan`.`USERNAME` AS `USERNAME`,`pelanggan`.`PASSWORD` AS `PASSWORD`,`pelanggan`.`LEVEL` AS `LEVEL` from (`pelanggan` join `tarif` on(`pelanggan`.`KODETARIF` = `tarif`.`KODETARIF`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biaya_admin`
--
ALTER TABLE `biaya_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDUSER`) USING BTREE;

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IDPELANGGAN`) USING BTREE;

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`IDBAYAR`) USING BTREE;

--
-- Indeks untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`IDPENGGUNAAN`) USING BTREE;

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`IDTAGIHAN`) USING BTREE;

--
-- Indeks untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`KODETARIF`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bulan`
--
ALTER TABLE `bulan`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IDPELANGGAN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `IDBAYAR` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  MODIFY `IDPENGGUNAAN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `IDTAGIHAN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
