/*
Navicat MySQL Data Transfer

Source Server         : x_localhost_x
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : listrik

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-22 07:36:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `biaya_admin`
-- ----------------------------
DROP TABLE IF EXISTS `biaya_admin`;
CREATE TABLE `biaya_admin` (
  `ID` int(2) NOT NULL,
  `HARGA` int(7) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of biaya_admin
-- ----------------------------
INSERT INTO `biaya_admin` VALUES ('1', '500');

-- ----------------------------
-- Table structure for `bulan`
-- ----------------------------
DROP TABLE IF EXISTS `bulan`;
CREATE TABLE `bulan` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bulan
-- ----------------------------
INSERT INTO `bulan` VALUES ('1', 'Januari');
INSERT INTO `bulan` VALUES ('2', 'Februari');
INSERT INTO `bulan` VALUES ('3', 'Maret');
INSERT INTO `bulan` VALUES ('4', 'April');
INSERT INTO `bulan` VALUES ('5', 'Mei');
INSERT INTO `bulan` VALUES ('6', 'Juni');
INSERT INTO `bulan` VALUES ('7', 'Juli');
INSERT INTO `bulan` VALUES ('8', 'Agustus');
INSERT INTO `bulan` VALUES ('9', 'September');
INSERT INTO `bulan` VALUES ('10', 'Oktober');
INSERT INTO `bulan` VALUES ('11', 'Nevember');
INSERT INTO `bulan` VALUES ('12', 'Desember');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `IDUSER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`IDUSER`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of login
-- ----------------------------

-- ----------------------------
-- Table structure for `pelanggan`
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `IDPELANGGAN` int(5) NOT NULL AUTO_INCREMENT,
  `NOMETER` int(11) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `ALAMAT` text,
  `KODETARIF` varchar(20) DEFAULT '0',
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` int(1) DEFAULT '3',
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `FOTO` text,
  `EMAIL` text,
  PRIMARY KEY (`IDPELANGGAN`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('1', '563543', 'gavril', 'jl.aaaa', 'KT001', 'gavril', 'gavril', '3', null, null, null, null);
INSERT INTO `pelanggan` VALUES ('3', '786565', 'vira', 'jl.xxxx', 'KT003', 'vira', 'vira', '3', null, null, null, null);
INSERT INTO `pelanggan` VALUES ('4', '876754', 'rei', 'jl.bbbb', 'KT002', 'rei', 'rei', '3', null, null, null, null);
INSERT INTO `pelanggan` VALUES ('5', '989880', 'tumpang', 'jl.xxcx', 'KT002', 'tumpang', 'tumpang', '3', null, null, null, null);

-- ----------------------------
-- Table structure for `pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `IDBAYAR` int(5) NOT NULL AUTO_INCREMENT,
  `IDPELANGGAN` varchar(5) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `BULANBAYAR` int(5) DEFAULT NULL,
  `BIAYAADMIN` int(10) DEFAULT NULL,
  PRIMARY KEY (`IDBAYAR`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES ('1', '4', '2019-04-21', '0', '0');

-- ----------------------------
-- Table structure for `penggunaan`
-- ----------------------------
DROP TABLE IF EXISTS `penggunaan`;
CREATE TABLE `penggunaan` (
  `IDPENGGUNAAN` int(5) NOT NULL AUTO_INCREMENT,
  `IDPELANGGAN` int(5) NOT NULL,
  `BULAN` int(5) DEFAULT '0',
  `TAHUN` int(5) DEFAULT '0',
  `METERAWAL` int(5) DEFAULT '0',
  `METERAKHIR` int(5) DEFAULT '0',
  PRIMARY KEY (`IDPENGGUNAAN`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of penggunaan
-- ----------------------------
INSERT INTO `penggunaan` VALUES ('1', '4', '1', '2019', '10', '55');
INSERT INTO `penggunaan` VALUES ('2', '1', '1', '2019', '45', '77');

-- ----------------------------
-- Table structure for `tagihan`
-- ----------------------------
DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `IDTAGIHAN` int(5) NOT NULL AUTO_INCREMENT,
  `IDPELANGGAN` int(5) NOT NULL,
  `BULAN` int(5) DEFAULT '0',
  `TAHUN` int(5) DEFAULT '0',
  `JUMLAHMETER` int(10) DEFAULT '0',
  `STATUS` int(2) DEFAULT '0',
  PRIMARY KEY (`IDTAGIHAN`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tagihan
-- ----------------------------
INSERT INTO `tagihan` VALUES ('1', '4', '1', '2019', '45', '1');
INSERT INTO `tagihan` VALUES ('2', '1', '1', '2019', '32', '0');

-- ----------------------------
-- Table structure for `tarif`
-- ----------------------------
DROP TABLE IF EXISTS `tarif`;
CREATE TABLE `tarif` (
  `KODETARIF` varchar(20) NOT NULL,
  `DAYA` int(11) DEFAULT NULL,
  `TARIFPERKWH` int(10) DEFAULT NULL,
  PRIMARY KEY (`KODETARIF`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tarif
-- ----------------------------
INSERT INTO `tarif` VALUES ('KT001', '450', '35500');
INSERT INTO `tarif` VALUES ('KT002', '900', '45000');
INSERT INTO `tarif` VALUES ('KT003', '1300', '60000');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `IDUSER` int(5) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` int(3) DEFAULT NULL,
  `ALAMAT` text,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `EMAIL` text,
  `NO_HP` varchar(15) DEFAULT NULL,
  `FOTO` text,
  PRIMARY KEY (`IDUSER`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ADMIN', 'admin', 'admin', '1', 'jl.sdsda', 'l', 'asd@gmail.com', '087664132', 'uploads/foto/21042019050002.jpg');
INSERT INTO `user` VALUES ('2', 'petugas', 'petugas', 'petugas', '2', 'jl.nnjn', 'p', 'sadsd@gmail.com', '342342342', 'uploads/foto/21042019074213.jpg');
INSERT INTO `user` VALUES ('3', 'petugas1', 'petugas1', 'petugas1', '2', 'petugas1', 'l', null, null, null);
INSERT INTO `user` VALUES ('4', 'petugas3', 'petugas3', 'petugas3', '2', 'jl.bba', 'l', null, null, null);

-- ----------------------------
-- View structure for `view_laporan`
-- ----------------------------
DROP VIEW IF EXISTS `view_laporan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan` AS select `penggunaan`.`METERAWAL` AS `METERAWAL`,`penggunaan`.`METERAKHIR` AS `METERAKHIR`,`tagihan`.`STATUS` AS `STATUS`,`tagihan`.`JUMLAHMETER` AS `JUMLAHMETER`,`penggunaan`.`TAHUN` AS `TAHUN`,`penggunaan`.`BULAN` AS `BULAN`,`pelanggan`.`NOMETER` AS `NOMETER`,`pelanggan`.`NAMA` AS `NAMA`,`pelanggan`.`ALAMAT` AS `ALAMAT`,`pelanggan`.`KODETARIF` AS `KODETARIF`,`pelanggan`.`IDPELANGGAN` AS `IDPELANGGAN`,`tagihan`.`IDTAGIHAN` AS `IDTAGIHAN`,`penggunaan`.`IDPENGGUNAAN` AS `IDPENGGUNAAN` from ((`pelanggan` join `penggunaan` on((`penggunaan`.`IDPELANGGAN` = `pelanggan`.`IDPELANGGAN`))) join `tagihan` on((`tagihan`.`IDPELANGGAN` = `pelanggan`.`IDPELANGGAN`))) ;

-- ----------------------------
-- View structure for `view_pelanggan`
-- ----------------------------
DROP VIEW IF EXISTS `view_pelanggan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pelanggan` AS select `tarif`.`DAYA` AS `DAYA`,`tarif`.`TARIFPERKWH` AS `TARIFPERKWH`,`pelanggan`.`IDPELANGGAN` AS `IDPELANGGAN`,`pelanggan`.`NOMETER` AS `NOMETER`,`pelanggan`.`NAMA` AS `NAMA`,`pelanggan`.`ALAMAT` AS `ALAMAT`,`pelanggan`.`KODETARIF` AS `KODETARIF`,`pelanggan`.`USERNAME` AS `USERNAME`,`pelanggan`.`PASSWORD` AS `PASSWORD`,`pelanggan`.`LEVEL` AS `LEVEL` from (`pelanggan` join `tarif` on((`pelanggan`.`KODETARIF` = `tarif`.`KODETARIF`))) ;
