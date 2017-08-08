-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 11:34 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keuangan`
--
CREATE DATABASE IF NOT EXISTS `keuangan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `keuangan`;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Operasional'),
(2, 'Entertainment'),
(3, 'Modal'),
(4, 'Gaji'),
(5, 'Beban Pajak'),
(6, 'Pendapatan');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_member`),
  UNIQUE KEY `id_member` (`id_member`),
  KEY `id_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `no_hp`, `user_id`) VALUES
(5, 'kiki', 'tembokrejo', '089447123456', 3),
(8, 'Lola', 'manasajaboleh', '123000456000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `tipe` enum('Income','Outcome') NOT NULL,
  `jml_transaksi` int(12) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  UNIQUE KEY `id_transaksi_2` (`id_transaksi`),
  KEY `id_transaksi` (`id_transaksi`),
  KEY `id_member` (`id_member`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_member`, `id_kategori`, `tipe`, `jml_transaksi`, `keterangan`) VALUES
(32, '2017-06-28', 5, 4, 'Income', 2500000, 'Gaji bulanan'),
(33, '1904-02-09', 5, 6, 'Outcome', 5000000, 'Survey industri1111'),
(44, '2017-01-12', 5, 1, 'Income', 111000, 'Alhamdulillah 222'),
(72, '2017-06-08', 5, 1, 'Income', 1200, 'sabun'),
(76, '2017-08-25', 8, 3, 'Outcome', 1500000, 'ngenes22'),
(77, '2017-08-02', 8, 1, 'Outcome', 100, 'lilin9'),
(82, '2017-08-01', 5, 1, 'Income', 1200, 'lilin'),
(89, '2017-06-30', 5, 1, 'Outcome', 2000, 'well'),
(94, '2017-08-04', 5, 1, 'Income', 30000, 'alhamdulillah'),
(95, '2017-08-12', 8, 2, 'Income', 500000, 'Jalan jalan'),
(99, '2017-11-11', 5, 2, 'Outcome', 250000, 'jalan jalan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`),
  FULLTEXT KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(3, 'ifa', 'e8de4a1923e500b80ad25a5a88d1ec1f', 'Bendahara'),
(6, 'mas zen', '27e76ef6b60400df7c6bedfb807191d6', 'Admin'),
(9, 'well', 'a9127950d4bf7970f69794b6827cf1eb', 'Bendahara'),
(10, 'ibnu', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
