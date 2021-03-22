-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2019 at 01:14 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademis_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id_admin` varchar(6) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id_admin`, `nip`, `password`, `nama_admin`, `foto`) VALUES
('adm001', '1231', '123', 'admin baru', 'adm0012.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblgaleri`
--

CREATE TABLE `tblgaleri` (
  `id_galeri` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgaleri`
--

INSERT INTO `tblgaleri` (`id_galeri`, `foto`) VALUES
(1, '31298465_10210984022666488_9178812245080014848_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblguru`
--

CREATE TABLE `tblguru` (
  `id_guru` varchar(6) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL DEFAULT 'default.png',
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguru`
--

INSERT INTO `tblguru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jabatan`, `no_telp`, `jenis_kelamin`, `agama`, `foto`, `password`) VALUES
('gur001', '1231', 'aaaa', 'jakarta', '2018-05-10', 'Jalan 1234', 'Guru Tetap', '086637', 'L', 'Islam', 'gur0011.png', '1231'),
('gur002', '1232', 'a', 'jakarta', '2018-05-10', 'Jalan 123', 'Guru Tetap', '086637', 'P', 'Islam', 'default.png', '123'),
('gur003', '1234', 'a', 'jakarta', '2018-06-10', 'ay', 'Guru Tetap', '086637', 'L', 'Islam', 'gur003.png', '123'),
('gur004', '1235', 'a', 'jakarta', '2018-05-10', 'Jalan 123', 'Guru Tetap', '086637', 'P', 'Islam', 'default.png', '123'),
('gur006', '1236', 'aasdasd', 'jakarta', '2018-05-10', 'Jalan 123', 'Guru Tetaps', '086637', 'P', 'Islam', 'gur0061.png', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` tinyint(4) NOT NULL,
  `jadwal` text NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljadwal`
--

INSERT INTO `tbljadwal` (`id_jadwal`, `hari`, `jadwal`, `id_kelas`) VALUES
(1, 1, 'matematika,ipa,istirahat,ipa', 1),
(2, 2, 'matematika,ipa,fisika,olahraga', 1),
(3, 3, 'matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika', 1),
(4, 4, 'matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika', 1),
(5, 5, 'matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika', 1),
(6, 6, 'matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika,matematika', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblkalender`
--

CREATE TABLE `tblkalender` (
  `id_kalender` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkalender`
--

INSERT INTO `tblkalender` (`id_kalender`, `tgl_mulai`, `tgl_selesai`, `keterangan`) VALUES
(1, '2019-07-02', '2019-07-03', 'Jadwal masuk1'),
(3, '2019-07-01', '2019-07-01', 'Jadwal Libur');

-- --------------------------------------------------------

--
-- Table structure for table `tblkelas`
--

CREATE TABLE `tblkelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(3) NOT NULL,
  `wali_kelas` varchar(20) NOT NULL,
  `mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkelas`
--

INSERT INTO `tblkelas` (`id_kelas`, `nama_kelas`, `wali_kelas`, `mapel`) VALUES
(1, '3a', 'gur002', 'matematika,ipa'),
(2, '3b', 'gur002', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblkurikulum`
--

CREATE TABLE `tblkurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `nama_kurikulum` varchar(20) NOT NULL,
  `status_kurikulum` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkurikulum`
--

INSERT INTO `tblkurikulum` (`id_kurikulum`, `nama_kurikulum`, `status_kurikulum`) VALUES
(1, 'Kurikulum 20131', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmapel`
--

CREATE TABLE `tblmapel` (
  `kode_mapel` varchar(6) NOT NULL,
  `id_kurikulum` int(11) NOT NULL,
  `kd_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(40) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmapel`
--

INSERT INTO `tblmapel` (`kode_mapel`, `id_kurikulum`, `kd_mapel`, `nama_mapel`, `kkm`) VALUES
('mpl001', 1, 'a', 'matematika', 90),
('mpl002', 1, 'b', 'ipa', 80),
('mpl003', 1, '80', 'bahasa indonesia', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tblnilai`
--

CREATE TABLE `tblnilai` (
  `id_nilai` int(10) NOT NULL,
  `nis` varchar(6) DEFAULT NULL,
  `kode_mapel` varchar(6) DEFAULT NULL,
  `nilai` int(5) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `id_guru` varchar(6) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnilai`
--

INSERT INTO `tblnilai` (`id_nilai`, `nis`, `kode_mapel`, `nilai`, `semester`, `id_guru`, `keterangan`) VALUES
(1, 'sis001', 'mpl001', 90, 1, 'gur001', 'UH'),
(2, 'sis001', 'mpl001', 100, 1, 'gur001', 'UH2'),
(3, 'sis001', 'mpl001', 100, 1, 'gur001', 'UH3'),
(4, 'sis001', 'mpl001', 100, 1, 'gur001', 'UH4'),
(5, 'sis001', 'mpl001', 90, 2, 'gur001', 'UH5');

-- --------------------------------------------------------

--
-- Table structure for table `tblsekolah`
--

CREATE TABLE `tblsekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `npsn` varchar(30) NOT NULL,
  `nss` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `kode_pos` varchar(19) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsekolah`
--

INSERT INTO `tblsekolah` (`id_sekolah`, `nama_sekolah`, `npsn`, `nss`, `alamat_sekolah`, `kode_pos`, `no_telp`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `website`, `email`, `visi`, `misi`) VALUES
(2, 'SMP Negeri 1 Papua', '123', '123', 'Jalan 123', '1234', '086637', 'Kelurahan A', 'Kecamatan B', 'Kabupaten C', 'Papua', 'http://smp.com', 'a@a.com', 'Ini Visi 1', 'Ini Misi');

-- --------------------------------------------------------

--
-- Table structure for table `tblsiswa`
--

CREATE TABLE `tblsiswa` (
  `id_siswa` varchar(6) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `semester` int(1) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL DEFAULT 'default.png',
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsiswa`
--

INSERT INTO `tblsiswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `id_kelas`, `semester`, `jenis_kelamin`, `agama`, `foto`, `password`) VALUES
('sis001', '12312311', 'ini nama', 'jakarta', '2018-05-10', 'Jalan 123', '123123', 1, 2, 'L', 'islam', 'default.png', '123'),
('sis002', '4123121', 'aasdasd', 'jakarta', '2018-06-10', 'Jalan 123', '086637', 2, 12, 'P', 'Islam', 'sis002.jpg', '321'),
('sis003', '123123', 'asd', 'asd', '2018-06-27', '123123', '123123', 1, 123, 'L', '123123', 'default.png', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tblgaleri`
--
ALTER TABLE `tblgaleri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tblkalender`
--
ALTER TABLE `tblkalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indexes for table `tblkelas`
--
ALTER TABLE `tblkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `wali_kelas` (`wali_kelas`);

--
-- Indexes for table `tblkurikulum`
--
ALTER TABLE `tblkurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tblmapel`
--
ALTER TABLE `tblmapel`
  ADD PRIMARY KEY (`kode_mapel`) USING BTREE,
  ADD KEY `id_kurikulum` (`id_kurikulum`);

--
-- Indexes for table `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nis` (`nis`) USING BTREE;

--
-- Indexes for table `tblsekolah`
--
ALTER TABLE `tblsekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tblsiswa`
--
ALTER TABLE `tblsiswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgaleri`
--
ALTER TABLE `tblgaleri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblkalender`
--
ALTER TABLE `tblkalender`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblkelas`
--
ALTER TABLE `tblkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblkurikulum`
--
ALTER TABLE `tblkurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblnilai`
--
ALTER TABLE `tblnilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblsekolah`
--
ALTER TABLE `tblsekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tblkelas` (`id_kelas`);

--
-- Constraints for table `tblkelas`
--
ALTER TABLE `tblkelas`
  ADD CONSTRAINT `tblkelas_ibfk_1` FOREIGN KEY (`wali_kelas`) REFERENCES `tblguru` (`id_guru`);

--
-- Constraints for table `tblmapel`
--
ALTER TABLE `tblmapel`
  ADD CONSTRAINT `tblmapel_ibfk_1` FOREIGN KEY (`id_kurikulum`) REFERENCES `tblkurikulum` (`id_kurikulum`);

--
-- Constraints for table `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD CONSTRAINT `tblnilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tblsiswa` (`id_siswa`),
  ADD CONSTRAINT `tblnilai_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `tblguru` (`id_guru`),
  ADD CONSTRAINT `tblnilai_ibfk_4` FOREIGN KEY (`kode_mapel`) REFERENCES `tblmapel` (`kode_mapel`);

--
-- Constraints for table `tblsiswa`
--
ALTER TABLE `tblsiswa`
  ADD CONSTRAINT `tblsiswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tblkelas` (`id_kelas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
