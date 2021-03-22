-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 11:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `si_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login_username` varchar(30) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_level` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `status_admin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_username`, `login_password`, `login_level`, `foto`, `namalengkap`, `status_admin`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'admin', 'admin.png', 'Admin', 'Y'),
('karyawan1', '202cb962ac59075b964b07152d234b70', 'karyawan', 'PhotoGrid_1493545488621.png', 'Siti Khotimatul Wildah 2', 'Y'),
('pelanggan1', '827ccb0eea8a706c4c34a16891f84e7b', 'pelanggan', '', 'Siti Khotimatul Wildah 2', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `tgl_posting`, `username`) VALUES
(12, 'Kota Hangat Wonosari Jogja', 'Berada di kabupaten paling timur Daerah Istimewa Yogyakarta serta tidak berada pada jalur nasional tak membuat Kota Wonosari menjadi kota yang sepi. Justru sebaliknya, kini Kota Wonosari semakin berkembang dari tahun ke tahun. Seperti layaknya kota-kota lain yang mempunyai magnet tersendiri, Wonosari mempunyai beragam sajian khas daerah yang selalu membuat kangen para penghuninya. Terlebih bagi mereka yang sedang merantau mencari nafkah ke daerah lain. Berikut hipwee akan berikan beberapa alasan mengapa kota kecil ini selalu ngangenin.', 'hipwee-18251931_1828422857422285_4435213736449409024_n-750x422.jpg', '2017-05-10 00:16:12', 'karyawan1'),
(13, '5 Tips Hemat Liburan ke Jepang', 'Jepang kini menjadi primadona baru destinasi tujuan wisata traveler dari Indonesia. Hal ini berawal dari kebijakan bebas visa bagi traveler berpaspor Indonesia. Ya meskipun tetap harus pakai e-paspor, setidaknya tetap lebih mudah dibanding sebelumnya yang butuh biaya lumayan dan prosedur belibet. Dampak kebijakan tersebut, banyak orang Indonesia yang pengen banget liburan ke Jepang.\r\n\r\nNah, kali ini Hipwee Travel mau kasih 5 tips liburan hemat ke Jepang buat kamu backpacker berkantong pas-pasan. Kamu harus catat biar kamu nggak panik saat kantongmu kian sekarat. Maklum, Jepang mahal banget biaya hidupnya, Bro!\r\n\r\nPertama, kamu harus bawa banyak makanan dari Indonesia. Siapkan mie instan, abon, kering tempe, dan semua makanan Indonesia yang harganya murah. Kamu akan menyesal kalau sampai nggak bawa!\r\n\r\n\r\nstreet food jepang via travelphotodiscovery.com\r\n\r\nBerbeda dengan negara Asia Tenggara semacam Malaysia dan Thailand, makanan di Jepang emang terkenal mahal banget. Sekali makan jangan kaget kalau kamu harus merogoh kocok minimal 50-100 ribu rupiah. Mahal banget untuk ukuran backpacker â€˜kan? Untuk itulah sebaiknya kamu bawa bekal banyak makanan dari Indonesia. Bawalah rendang, soto, kari dalam bentuk mie instan. Hehe. Jangan lupakan abon, kering tempe dan teri, sereal, hingga boncabe. Di sana kamu tinggal beli nasi doang dong ya. Ngirit banget â€˜kan?\r\n\r\nYa bukan berarti kamu nggak jajan di sana sama sekali. Beli aja kaiten sushi yang murah, sekitar 20-30 ribu. Atau nggak kamu jajan aja street food yang bisa kamu temukan di jalanan Tokyo. Ada takoyaki, karage, ataupun sejenis tempura. Murah sih kalau beginian. Slurp!\r\n\r\nUntuk penginapan, mending kamu gabung Couchsurfing aja deh biar dapat tebengan menginap di Jepangâ€¦\r\n\r\nADVERTISEMENT\r\n\r\nsiapa tahu jodoh sama hostnya via tourkejepang.files.wordpress.com\r\n\r\nSudah zaman Instagram nih, liburan pun harus memanfaatkan teknologi dong ya. Kamu yang suka traveling ke luar negeri harusnya sudah tahu tentang adanya banyak platform online yang bisa menyediakan tempat tinggal gratis buat kamu, asal kamu sudah mendapat host di suatu negara. Jadi, kamu bisa berinteraksi dengan traveler di seluruh dunia.\r\n\r\nNggak usah terlalu lama di Tokyo, cukup buat foto-foto aja. Selebihnya pilihlah destinasi yang berada agak di pedesaan, ke pemandian Onsen misalnyaâ€¦\r\n\r\n\r\nonsen jepang via www.kojaconreport.com\r\n\r\nTidak bisa dipungkiri bahwa biaya hidup di Tokyo itu mahal banget. Cukup jalan-jalan di Shibuya dan Ginza buat foto-foto aja. Habis itu mending ke luar kota yang masih punya suasana yang menenangkan. Cobalah ke pemandian Onsen yang tak jauh dari Gunung Fuji. Wah suasananya syahdu banget deh. Kamu juga bisa coba tempat lain kok, misal ke Tohoku, Okinawa, maupun Osaka.\r\n\r\nLupakan Disneyland ataupun wahana permainan yang mahal-mahal. Cukup cari bunga sakura aja udah mantap kok. Apalagi bisa ikutan festival gratisan di Tokyo\r\n\r\n\r\nfestival di jepang via www.uabankir.com\r\n\r\nBiar kamu tetap survive di Jepang, lupakan deh wahana wisata yang mahal-mahal maupun pusat perbelanjaan yang bikin ngiler di Tokyo. Udah lupakan aja. Kamu mending fokus nyari bunga sakura yang bagus buat foto-foto. Kalau nggak, kamu bisa mencari festival yang selalu ada tiap musimnya di Tokyo maupun kota lain. Ada Festival Hanami Matsuri, Tsukimi, Takayama, maupun Festival Obon. Masih banyak yang lainnya sih. Intinya banyak pertunjukan gratisan yang akan menghemat biaya traveling kamu di Jepang.\r\n\r\nTerakhir dan yang paling penting, AirAsia sekarang buka penerbangan langsung ke Narita, Tokyo. Buat kamu yang butuh budget hemat, kabar bahagia ini tentu kamu nantikanâ€¦\r\n\r\n\r\ntokyo via www.airasia.com\r\n\r\nSatu hal yang paling menentukan budget traveling adalah tiket pesawat. Jika tiket pesawat mahal, tentu pengeluaran yang kian membengkak. Jika terjadi sebaliknya, kamu bisa berhemat banyak. Andalan para backpacker menyoal transportasi adalah dengan mengandalkan maskapai pesawat dengan biaya yang paling terjangkau. Survey harga sana-sini dengan mengotak-atik tanggal pergi dan keberangkatan sih sudah biasa.\r\n\r\nBuatmu yang sedang bimbang dan gundah gulana mau berangkat pake maskapai apa buat ke Jepang, AirAsia siap bikin hatimu lega. Karena AirAsia yang selalu mendapat tempat di hati dan kantong para backpacker ini sudah membuka rute penerbangan langsung dari Indonesia ke Jepang. Kamu bisa langsung berangkat dari Bandara Ngurah Rai Bali ke Narita, Tokyo.\r\n\r\nMumpung sebentar lagi banyak tanggal merah, segera aja deh cari harga murahnya ke Jepang. Visa udah nggak ada, tiket pesawat pun murah, lalu nunggu apalagi. Segera cari penerbangan kamu di laman AirAsia ini, guys.\r\n\r\nBikin e Paspor sudah beres, tiket pun murah, tips juga udah dikasih, terus kapan kamu rencana ke Jepang?', 'jepang.jpg', '2017-05-10 00:09:35', 'karyawan1'),
(14, 'Parade Foto Bali Tempo Doeloe', 'Bali adalah salah satu destinasi paling populer di dunia. Wisatawan dalam dan luar negeri selalu menjadikan Bali sebagai bucket list perjalanan traveling mereka. Tak salah bila situs TripAdvisor memberikan predikat destinasi terbaik dunia pada tahun 2016. Bali memang salah satu kebanggaan Indonesia.\r\n\r\nNamun kini Bali sudah banyak dikeluhkan wisatawan karena dianggap terlalu ramai dan banyak sampah di beberapa pantai. Hal ini tentu akan mengurangi keindahan Bali. Pesona Bali bisa perlahan memudar karena hal ini.\r\n\r\nSeorang traveler bernama Clifford White pada tahun 1975 dan 1977 mengunjungi Bali bersama kawan-kawannya. Dia mengabadikan keindahan Bali lewat album fotonya yang menarik. Penasaran pengen tahu seperti apa Bali pada tahun 70â€™an, yuk simak sama-sama.\r\n\r\nDari foto Cliff, untuk surfing di spot-spot terbaik, wisatawan harus melewati jalur setapak seperti di hutan seperti ini. Wah lebih kerasa petualangannya yaâ€¦\r\n\r\nClifford White menemukan Jalan Tegal Wangi yang sepi saat itu. Kini jalan ini termasuk paling padat dan sibuk di kawasan Kutaâ€¦\r\n\r\n\r\ntegal wangi via www.dailymail.co.uk\r\n\r\nTak seperti sekarang, Pantai Kuta masih terkesan alami dengan sedikit penjual souvenir di sekitarnya. Mereka menjual souvenir yang merupakan produk lokal Baliâ€¦\r\n\r\nADVERTISEMENT\r\n\r\npedagang souvenir via www.dailymail.co.uk\r\n\r\nSaat itu tempat wisata masih sepi dan nggak seramai sekarang ini karena efek sosial mediaâ€¦\r\n\r\n\r\nbermain air via www.dailymail.co.uk\r\n\r\nPantai Sanur pada tahun 1975 masih jadi favorit nelayan untuk mencari ikan. Sementara sekarang, jadi pusat resort-resort mahalâ€¦', 'hipwee-Desain-tanpa-judul-11-750x422.png', '2017-05-10 00:08:10', 'karyawan1'),
(15, 'Keindahan Pesta Lampion ', 'Perayaan Hari Raya Waisak 2017 bakal diadakan di Borobudur pada tanggal 11 Mei 2017 besok. Umat Buddha dari berbagai negara bakal hadir di Borobudur, Magelang, Jawa Tengah. Sebagai acara yang agung, Waisak tak pernah luput dari pantauan wisatawan domestik maupun mancanegara. Ribuan traveler datang di Borobudur untuk mengikuti prosesi Waisak dan pelepasan lampion. Wah seru banget yaâ€¦\r\n\r\nBuat kamu yang pada hari Kamis (11/5) masih bingung belum ada acara, yuk baiknya datang ke perayaan Waisak tahun 2017 di Borobudur. Epik banget sih acaranya. Yuk ah simak ulasannya sama-samaâ€¦\r\n\r\nSebagai Candi Buddha terbesar di dunia, Borobudur menjadi pusat ibadah agama Buddha di seluruh dunia. Wajar ketika Waisak, semua berkumpul di siniâ€¦\r\n\r\n\r\nwaisak borobudur via indonesiatrip.id\r\n\r\nSebagai negara dengan umat Muslim terbesar di dunia, Indonesia terbukti sangat bhinneka dan menjaga nilai-nilai pluralitas. Buktinya, hari raya umat Buddha sedunia dirayakan di Borobudur. Pemuka agama Buddha dari berbagai negara seperti Myanmar, Thailand, China dll hadir dalam rangkaian acara Waisak di candi peninggalan Wangsa Syailendra ini. Tentu saja, wisatawan bakal berduyun-duyun hadir ke sana demi ikut menikmati acara Waisak. Kamu juga mau ke sana nggak nih?\r\n\r\nAcara yang ditunggu-tunggu oleh banyak orang adalah acara pelepasan ribuan lampion di langit Borobudur. Keindahan paripurna di candi kebanggaan Indonesiaâ€¦\r\n\r\n\r\nlampion waisak via picture.triptrus.com\r\n\r\nADVERTISEMENT\r\nPelepasan ribuan lampion jadi salah satu acara yang paling ditunggu oleh pengunjung. Momen terbangnya lampion di Borobudur adalah sesuatu yang epik dan sangat syahdu. Jangan salah lho ya, ada makna di balik lampion tersebut. Proses pelepasan lampion memiliki makna penting bagi umat Buddha. Di dalam setiap lampion yang dilepaskan, berisi harapan dan doa bagi dirinya sendiri, orang yang dicintai, maupun negara. Jadi melepas lampion bukanlah sebuah hura-hura, melainkan doa yang diterbangkan ke langit.\r\n\r\nPerlu diketahui, Waisak tahun ini jatuh pada tanggal 11 Mei 2017. Namun prosesi pelepasan lampion akan dilakukan pada tanggal 10 Mei malam hari, biasanya mulai pukul 22.00 WIB. Jadi jangan salah tanggal ya, jangan nyari lampion di tanggal 11 Mei, karena tentu sudah berakhir. Kalau kamu tertarik ingin menerbangkan lampion silakan mendaftar di panitia (Walubi).\r\n\r\nBeberapa tahun lalu, muncul masalah saat pelaksanaan Waisak. Pengunjung yang tak punya etika dengan serta merta memotret para biksu yang sedang berdoaâ€¦', 'hipwee-l27505.jpg', '2017-05-10 00:05:01', 'karyawan1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `email` varchar(30) NOT NULL,
  `kode` int(5) NOT NULL AUTO_INCREMENT,
  `subjek` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`email`, `kode`, `subjek`, `pesan`, `tgl`) VALUES
('tes@gmail.cm', 1, 'tes', 'tes', '2015-02-22'),
('tes2@gmail.com', 2, 'tes2', 'tes tes tes 222', '2017-05-09'),
('stkwildah@gmail.com', 3, 'wiwil', 'tes tes 3 ', '2017-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE IF NOT EXISTS `detail_pemesanan` (
  `id_pemesanan` varchar(8) NOT NULL,
  `total` varchar(15) NOT NULL,
  `status_pemesanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_pemesanan`, `total`, `status_pemesanan`) VALUES
('PT-001', '3600000', 'Terkonfirmasi'),
('PT-002', '0', 'Batal');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `id_about` int(5) NOT NULL AUTO_INCREMENT,
  `judulweb` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `rek2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_about`, `judulweb`, `deskripsi`, `foto`, `logo`, `telp`, `facebook`, `twitter`, `instagram`, `rek`, `lokasi`, `rek2`, `email`) VALUES
(1, 'Travel With Us', 'Merupakan sebuah perusahaan yang bergerak dibidang travel yang menyediakan pendaftaran travel \nlebih mudah dan memberikan pelayanan yang baik.\njangan khawatir untuk anda yang ingin mendaftar karena pendaftaran anda akan aman karena pembayaran dilakukan setelah daftar dan langsung datang ke kantor pusat \nbegitu pula dengan identitas diri anda. Setiap pendaftar akan dibimbing oleh petugas yang profesional.', 'a.jpg', 'logo5.png', '0266 (24 6277) ', 'Travel With Us', '@travelwithus', '@travelwithus', '0148772784 an Arif ', 'Jl.Bhineka Karya Kopeng Keramat Kec.Gunung Puyuh - Kota Sukabumi', '0148772784 an Arif', 'travelwithus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(8) NOT NULL,
  `tujuan` text NOT NULL,
  `id_kendaraan` varchar(8) NOT NULL,
  `id_pengemudi` varchar(8) NOT NULL,
  `biaya` varchar(15) NOT NULL,
  `id_karyawan` varchar(8) NOT NULL,
  `jumlah_kursi` int(2) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tujuan`, `id_kendaraan`, `id_pengemudi`, `biaya`, `id_karyawan`, `jumlah_kursi`) VALUES
('JK-001', 'Destinasi Sejarah Di Yogyakarta', 'KN-001', 'PN-001', '450000', 'KR-001', 8),
('JK-002', 'Lembang Bandung', 'KN-001', 'PN-001', '250000', 'KR-001', 8),
('JK-003', 'Pasir Putih Jakarta', 'KN-001', 'PN-001', '350000', 'KR-001', 8);

-- --------------------------------------------------------

--
-- Table structure for table `jam_keberangkatan`
--

CREATE TABLE IF NOT EXISTS `jam_keberangkatan` (
  `id_jam` int(8) NOT NULL AUTO_INCREMENT,
  `jam` varchar(15) NOT NULL,
  `id_jadwal` varchar(8) NOT NULL,
  PRIMARY KEY (`id_jam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jam_keberangkatan`
--

INSERT INTO `jam_keberangkatan` (`id_jam`, `jam`, `id_jadwal`) VALUES
(1, '10.00 WIB', 'JK-001'),
(2, '13.00 WIB', 'JK-001'),
(3, '16.00 WIB', 'JK-001'),
(4, '10.00 WIB', 'JK-002'),
(5, '13.00 WIB', 'JK-002');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` varchar(8) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `foto_karyawan` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_shift` varchar(10) NOT NULL,
  `status_karyawan` varchar(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `no_telp`, `foto_karyawan`, `email`, `id_shift`, `status_karyawan`, `username`, `password`) VALUES
('KR-001', 'Siti Khotimatul Wildah 2', 'Kp Lio Pasanggrahan RT 02/01 2', '089657707499', 'PhotoGrid_1493545488621.png', 'sitikhotimatulwildah2@gmail.co', 'S01', 'Y', 'karyawan1', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `id_kendaraan` varchar(8) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `transmisi` varchar(30) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `foto_kendaraan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kendaraan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_polisi`, `transmisi`, `merk`, `warna`, `no_rangka`, `no_mesin`, `foto_kendaraan`) VALUES
('KN-001', 'F1213422', 'Automatic 2', 'Toyota Avanza 2', 'Silver 2', '1234567876', '9876790082', '20140607_191233.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` varchar(8) NOT NULL,
  `id_tanggal` int(8) NOT NULL,
  `id_jam` int(8) NOT NULL,
  `id_pengguna` varchar(20) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_jadwal` varchar(8) NOT NULL,
  `jml_pesan` int(3) NOT NULL,
  `status_jalan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_tanggal`, `id_jam`, `id_pengguna`, `tgl_pesan`, `id_jadwal`, `jml_pesan`, `status_jalan`) VALUES
('PT-001', 2, 1, 'pelanggan1', '2017-06-11', 'JK-001', 4, '2'),
('PT-002', 5, 5, 'pelanggan1', '2017-06-11', 'JK-002', 5, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pengemudi`
--

CREATE TABLE IF NOT EXISTS `pengemudi` (
  `id_pengemudi` varchar(8) NOT NULL,
  `nama_pengemudi` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `id_kendaraan` varchar(8) NOT NULL,
  `foto_pengemudi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengemudi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengemudi`
--

INSERT INTO `pengemudi` (`id_pengemudi`, `nama_pengemudi`, `alamat`, `no_telp`, `id_kendaraan`, `foto_pengemudi`) VALUES
('PN-001', 'Nam Joo Hyuk ak ', ' Sukabumi West Java', '089657707497', 'KN-001', '927d65683df8d2825c08f9cac5d0a3c1 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `pengguna_kode` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(50) NOT NULL,
  `pengguna_hp` varchar(12) NOT NULL,
  `pengguna_alamat` text NOT NULL,
  `pengguna_kecamatan` varchar(50) NOT NULL,
  `pengguna_kota` varchar(50) NOT NULL,
  `pengguna_kodepos` int(10) NOT NULL,
  `pengguna_provinsi` varchar(50) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(200) NOT NULL,
  `pengguna_nm_rek` varchar(50) NOT NULL,
  `pengguna_rek` varchar(50) NOT NULL,
  PRIMARY KEY (`pengguna_kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_kode`, `pengguna_nama`, `pengguna_email`, `pengguna_hp`, `pengguna_alamat`, `pengguna_kecamatan`, `pengguna_kota`, `pengguna_kodepos`, `pengguna_provinsi`, `pengguna_username`, `pengguna_password`, `pengguna_nm_rek`, `pengguna_rek`) VALUES
(4, 'eve', 'kelvin@gmail.com', '089657707497', 'kp lio pasanggrahan ', '', 'sukabumi', 43193, '', 'eve', '202cb962ac59075b964b07152d234b70', 'kelvin', '038220098'),
(6, 'Siti Khotimatul Wildah 2', 'stkwildah2@gmail.com', '089657707497', 'Kp Lio 2', 'Cireunghas 2', 'Sukabumi 2', 43193, 'Jawa Barat 2', 'pelanggan1', '827ccb0eea8a706c4c34a16891f84e7b', 'Siti Khotimatul Wildah', '03800438822');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` int(8) NOT NULL AUTO_INCREMENT,
  `id_jadwal` varchar(8) NOT NULL,
  `deskripsi_rute` text NOT NULL,
  `alamat_jemput` text NOT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `id_jadwal`, `deskripsi_rute`, `alamat_jemput`) VALUES
(1, 'JK-001', 'Purwokerto - Gombong - Purworejo', 'Alun Alun Kota Sukabumi'),
(2, 'JK-002', 'Sukaraja - Sukalarang - Warung Kondang - Jebrod - Cianjur - Cipatat - Padalarang', 'Bunderan Sukaraja');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `id_shift` varchar(5) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `jam_masuk` varchar(15) NOT NULL,
  `jam_keluar` varchar(15) NOT NULL,
  PRIMARY KEY (`id_shift`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`, `jam_masuk`, `jam_keluar`) VALUES
('S01', 'Pagi', '08.00 Wib', '14.00 Wib'),
('S02', 'Siang', '14.00 Wib', '20.00 Wib');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_keberangkatan`
--

CREATE TABLE IF NOT EXISTS `tanggal_keberangkatan` (
  `id_tanggal` int(8) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_jadwal` varchar(8) NOT NULL,
  PRIMARY KEY (`id_tanggal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tanggal_keberangkatan`
--

INSERT INTO `tanggal_keberangkatan` (`id_tanggal`, `tanggal`, `id_jadwal`) VALUES
(2, '2017-07-01', 'JK-001'),
(3, '2017-07-01', 'JK-002'),
(4, '2017-07-02', 'JK-001'),
(5, '2017-07-02', 'JK-002');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
