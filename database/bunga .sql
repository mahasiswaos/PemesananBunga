-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2014 at 04:56 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bunga`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_hp`, `email`, `kode_pos`) VALUES
(1, 'nitta', 'jerman', '08190898909', 'Aaq@YMAIL.COM', '83355'),
(2, 'Juichan', 'Mataram', '08199371234', 'jui@yahoo.com', '83311'),
(3, 'rohul', 'belanda', '078878898', 'rohul@gmail.com', '83355'),
(4, 'q', 'q', '1', 'a@ya.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bunga`
--

CREATE TABLE IF NOT EXISTS `tbl_bunga` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `gambar` varchar(45) DEFAULT NULL,
  `harga` decimal(8,0) DEFAULT NULL,
  `nama_latin` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_bunga`
--

INSERT INTO `tbl_bunga` (`id`, `nama`, `gambar`, `harga`, `nama_latin`) VALUES
(1, 'mawar merah', 'images/red rose.png', 45000, 'red rose'),
(2, 'mawar merah muda', 'images/pink rose.jpg', 50000, 'pink rose'),
(3, 'tulips merah', 'images/bunga tulip.jpg', 65000, 'tulipa'),
(4, 'tulips kuning', 'images/Tulips.jpg', 50000, 'tulipa'),
(5, 'kamboja', 'images/bunga kamboja putih.jpg', 30000, 'Plumeria alba'),
(6, 'sun flower', 'images/matahari.jpg', 75000, 'Helianthus annus'),
(7, 'alamanda', 'images/bunga anggrek.jpg', 45000, 'Golden Trumpet'),
(8, 'bunga bangkai', 'images/bunga bangkai.jpg', 35000, 'Amorphpophallus   titanium'),
(9, 'raflesia', 'images/bunga raflesia.jpg', 55000, 'raflesia arnoldi'),
(10, 'cempaka kuning', 'images/bunga cempaka kuning.jpg', 60000, 'Interest chrysolite'),
(11, 'bunga bangkai', 'images/bunga bangkai.jpg', 45000, 'raflesia arnoldi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tbl_pelanggan_id` int(11) NOT NULL,
  `tbl_bunga_id` int(11) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `jumlah` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `tbl_pelanggan_id`, `tbl_bunga_id`, `harga`, `jumlah`) VALUES
(7, 2, 6, 45000, 5),
(8, 1, 6, 50000, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
