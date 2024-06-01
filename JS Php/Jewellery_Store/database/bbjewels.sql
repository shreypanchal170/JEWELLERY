-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2014 at 05:56 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbjewels`
--
CREATE DATABASE IF NOT EXISTS `bbjewels` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bbjewels`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `jewel_id` int(4) unsigned zerofill NOT NULL,
  `qty` int(4) NOT NULL DEFAULT '0',
  `cust_id` int(4) unsigned zerofill NOT NULL,
  `checkout` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'n',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checkedon` date NOT NULL,
  `trans` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `jewel_id`, `qty`, `cust_id`, `checkout`, `added`, `checkedon`, `trans`) VALUES
(0001, 0001, 1, 0002, 'y', '2014-03-27 07:44:55', '2014-03-27', 16444);

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

DROP TABLE IF EXISTS `jewellery`;
CREATE TABLE IF NOT EXISTS `jewellery` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `prodname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `path` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'images/nophoto.gif',
  `category` int(33) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `descr` text COLLATE latin1_general_ci NOT NULL,
  `type` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'latest',
  `noviews` int(4) NOT NULL DEFAULT '0',
  `topsell` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci PACK_KEYS=0 AUTO_INCREMENT=327 ;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`id`, `prodname`, `path`, `category`, `price`, `descr`, `type`, `noviews`, `topsell`) VALUES
(0001, 'Diamond/Bangles/1.jpg', 'Diamond/Bangles/1.jpg', 1, '1000.00', 'Diamond Carte:20\r\n\r\n', 'latest', 14, 33),
(0002, 'Diamond/Bangles/2.jpg', 'Diamond/Bangles/2.jpg', 1, '1000.00', 'Diamond Carte:20\r\n\r\n', 'featured', 13, 27),
(0003, 'Diamond/Bangles/3.jpg', 'Diamond/Bangles/3.jpg', 1, '1000.00', 'Diamond Carte:15\r\nGold Carte:24', 'featured', 0, 0),
(0004, 'Diamond/Bangles/4.jpg', 'Diamond/Bangles/4.jpg', 1, '1000.00', 'Diamond Carte:15\r\n', 'featured', 2, 7),
(0005, 'Diamond/Bangles/5.jpg', 'Diamond/Bangles/5.jpg', 1, '1000.00', 'Diamond Carte:20\r\nGold Carte:24', 'soon', 1, 1),
(0006, 'Diamond/Bangles/6.jpg', 'Diamond/Bangles/6.jpg', 1, '1000.00', 'Diamond carte:10\r\nGold Carte:24', 'featured', 0, 0),
(0007, 'Diamond/Bangles/7.jpg', 'Diamond/Bangles/7.jpg', 1, '1000.00', 'Diamond Carte:10\r\n', 'featured', 0, 0),
(0008, 'Diamond/Bangles/8.jpg', 'Diamond/Bangles/8.jpg', 1, '1000.00', 'Diamond Carte:20\r\nGold Carte:24', 'featured', 1, 5),
(0009, 'Diamond/Bangles/9.jpg', 'Diamond/Bangles/9.jpg', 1, '1000.00', 'Diamond Carte:25\r\n', 'featured', 1, 1),
(0010, 'Diamond/Bangles/10.jpg', 'Diamond/Bangles/10.jpg', 1, '1000.00', 'Diamond Carte:25\r\n', 'featured', 0, 0),
(0011, 'Diamond/Bangles/11.jpg', 'Diamond/Bangles/11.jpg', 1, '1000.00', 'Diamond Carte:20', 'soon', 0, 0),
(0015, 'Diamond/EarRings/1.jpg', 'Diamond/EarRings/1.jpg', 2, '1000.00', 'Diamond Carte:10\r\ngold Carte:24', 'featured', 0, 0),
(0016, 'Diamond/EarRings/2.jpg', 'Diamond/EarRings/2.jpg', 2, '1000.00', 'Diamond Carte:12\r\nGold Carte:24', 'featured', 0, 0),
(0017, 'Diamond/EarRings/3.jpg', 'Diamond/EarRings/3.jpg', 2, '1000.00', 'Diamond Carte:14\r\nGold Carte:24', 'featured', 0, 0),
(0018, 'Diamond/EarRings/4.jpg', 'Diamond/EarRings/4.jpg', 2, '1000.00', 'Diamond Carte:16\r\nGold Carte:24', 'featured', 0, 0),
(0019, 'Diamond/EarRings/5.jpg', 'Diamond/EarRings/5.jpg', 2, '1000.00', 'Diamond Carte:18\r\nGold Carte:24', 'featured', 0, 0),
(0020, 'Diamond/EarRings/6.jpg', 'Diamond/EarRings/6.jpg', 2, '2500.00', 'Diamond Carte:20\r\nGold Carte:24', 'featured', 0, 0),
(0021, 'Diamond/EarRings/7.jpg', 'Diamond/EarRings/7.jpg', 2, '2500.00', 'Diamond carte:5\r\nGold Carte:24', 'featured', 0, 0),
(0022, 'Diamond/EarRings/8.jpg', 'Diamond/EarRings/8.jpg', 2, '2500.00', 'Diamond Carte:10\r\nGold Carte:24', 'latest', 0, 0),
(0023, 'Diamond/EarRings/9.jpg', 'Diamond/EarRings/9.jpg', 2, '1000.00', 'Diamond Carte:16\r\nGold Carte:24', 'featured', 0, 0),
(0077, 'Gold/Bangles/2.jpg', 'Gold/Bangles/2.jpg', 9, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0076, 'Gold/Bangles/1.jpg', 'Gold/Bangles/1.jpg', 9, '1000.00', 'Gold Carte:24', 'soon', 0, 0),
(0026, 'Diamond/Lady Ring/1.jpg', 'Diamond/Lady Ring/1.jpg', 8, '1000.00', 'Diamond Carte:20', 'latest', 6, 14),
(0027, 'Diamond/Lady Ring/2.jpg', 'Diamond/Lady Ring/2.jpg', 8, '1000.00', 'Diamond Carte:10\r\nGold Carte:24', 'featured', 0, 0),
(0028, 'Diamond/Lady Ring/3.jpg', 'Diamond/Lady Ring/3.jpg', 8, '1000.00', 'Diamond Carte:12\r\nGold Carte: 24', 'featured', 0, 0),
(0029, 'Diamond/Lady Ring/4.jpg', 'Diamond/Lady Ring/4.jpg', 8, '1000.00', 'Diamond Carte:14\r\nGold  Carte:24', 'latest', 0, 0),
(0030, 'Diamond/Lady Ring/5.jpg', 'Diamond/Lady Ring/5.jpg', 8, '1000.00', 'Diamond Carte:18\r\nGold Carte: 24', 'featured', 2, 0),
(0031, 'Diamond/Lady Ring/6.jpg', 'Diamond/Lady Ring/6.jpg', 8, '2500.00', 'Diamond Carte:20\r\nGold Carte: 24', 'featured', 0, 0),
(0032, 'Diamond/Lady Ring/7.jpg', 'Diamond/Lady Ring/7.jpg', 8, '2500.00', 'Diamond Carte:20\r\nGold Carte: 24', 'latest', 0, 0),
(0033, 'Diamond/Lady Ring/8.jpg', 'Diamond/Lady Ring/8.jpg', 8, '2500.00', 'Diamond Carte: 10\r\nGold Carte:24', 'featured', 0, 0),
(0034, 'Diamond/Lady Ring/9.jpg', 'Diamond/Lady Ring/9.jpg', 8, '2500.00', 'Diamond Carte:19\r\nGold Carte:24', 'featured', 0, 0),
(0035, 'Diamond/Lady Ring/10.jpg', 'Diamond/Lady Ring/10.jpg', 8, '375.00', 'Diamond Carte:14\r\nGold Carte:24', 'featured', 0, 0),
(0036, 'Diamond/Necklaces/1.jpg', 'Diamond/Necklaces/1.jpg', 3, '1000.00', 'Diamond Carte:10', 'featured', 0, 0),
(0037, 'Diamond/Necklaces/2.jpg', 'Diamond/Necklaces/2.jpg', 3, '1000.00', 'Diamond Carte:15', 'featured', 0, 0),
(0038, 'Diamond/Necklaces/3.jpg', 'Diamond/Necklaces/3.jpg', 3, '1000.00', 'Diamond Carte:12', 'featured', 0, 0),
(0039, 'Diamond/Necklaces/4.jpg', 'Diamond/Necklaces/4.jpg', 3, '1000.00', 'Diamond Carte:14', 'featured', 0, 0),
(0040, 'Diamond/Necklaces/5.jpg', 'Diamond/Necklaces/5.jpg', 3, '1000.00', 'Diamond Carte:13', 'featured', 0, 0),
(0041, 'Diamond/Necklaces/6.jpg', 'Diamond/Necklaces/6.jpg', 3, '1000.00', 'Diamond Carte:15', 'latest', 1, 2),
(0042, 'Diamond/Necklaces/7.jpg', 'Diamond/Necklaces/7.jpg', 3, '1000.00', 'Diamond Carte:16', 'latest', 0, 0),
(0043, 'Diamond/Nose Pin/1.jpg', 'Diamond/Nose Pin/1.jpg', 4, '1000.00', 'Diamond Carte:1\r\nGold Carte:24', 'featured', 0, 0),
(0044, 'Diamond/Nose Pin/2.jpg', 'Diamond/Nose Pin/2.jpg', 4, '2500.00', 'Diamond Carte:2\r\nGold Carte:24', 'featured', 0, 0),
(0045, 'Diamond/Nose Pin/3.jpg', 'Diamond/Nose Pin/3.jpg', 4, '375.00', 'Diamond Carte:3\r\nGold Carte:24', 'featured', 0, 0),
(0046, 'Diamond/Nose Pin/4.jpg', 'Diamond/Nose Pin/4.jpg', 4, '4550.00', 'Diamond carte:4\r\nGold Carte:24', 'featured', 0, 0),
(0047, 'Diamond/Nose Pin/5.jpg', 'Diamond/Nose Pin/5.jpg', 4, '500.00', 'Diamond Carte:5\r\nGold Carte:24', 'featured', 0, 0),
(0048, 'Diamond/Nose Pin/6.jpg', 'Diamond/Nose Pin/6.jpg', 4, '1799.00', 'Diamond Carte:6\r\nGold Carte:24', 'featured', 0, 0),
(0049, 'Diamond/Nose Pin/7.jpg', 'Diamond/Nose Pin/7.jpg', 4, '780.00', 'Diamond Carte:7\r\nGold Carte:24', 'featured', 0, 0),
(0050, 'Diamond/Nose Pin/8.jpg', 'Diamond/Nose Pin/8.jpg', 4, '890.00', 'Diamond Carte:8\r\nGold  Carte:24', 'featured', 0, 0),
(0051, 'Diamond/Nose Pin/9.jpg', 'Diamond/Nose Pin/9.jpg', 4, '900.00', 'Diamond Carte:9\r\nGold Carte:24', 'featured', 0, 0),
(0052, 'Diamond/Nose Pin/10.jpg', 'Diamond/Nose Pin/10.jpg', 4, '1000.00', 'Diamond Carte:10\r\nGold Carte:24', 'featured', 0, 0),
(0053, 'Diamond/Pendant Set/1.jpg', 'Diamond/Pendant Set/1.jpg', 6, '375.00', 'Diamond Carte:25', 'featured', 0, 0),
(0054, 'Diamond/Pendant Set/2.jpg', 'Diamond/Pendant Set/2.jpg', 6, '2500.00', 'Diamond Carte:15', 'soon', 0, 0),
(0055, 'Diamond/Pendant Set/3.jpg', 'Diamond/Pendant Set/3.jpg', 6, '2500.00', 'Diamond Carte:10', 'featured', 0, 0),
(0056, 'Diamond/Pendant Set/4.jpg', 'Diamond/Pendant Set/4.jpg', 6, '375.00', 'Diamond Carte: 25', 'featured', 0, 0),
(0057, 'Diamond/Pendant Set/5.jpg', 'Diamond/Pendant Set/5.jpg', 6, '2500.00', 'Diamond Carte:15', 'featured', 0, 0),
(0072, 'Diamond/Pendants/1.jpg', 'Diamond/Pendants/1.jpg', 7, '2500.00', 'Diamond Carte:15', 'featured', 0, 0),
(0059, 'Diamond/Pendant Set/6.jpg', 'Diamond/Pendant Set/6.jpg', 6, '375.00', 'Diamond Carte:30', 'featured', 0, 0),
(0060, 'Diamond/Pendant Set/7.jpg', 'Diamond/Pendant Set/7.jpg', 6, '2500.00', 'Diamond Carte:15', 'featured', 0, 0),
(0061, 'Diamond/Pendant Set/8.jpg', 'Diamond/Pendant Set/8.jpg', 6, '2500.00', 'Diamond Carte:17', 'featured', 0, 0),
(0062, 'Diamond/Pendant Set/9.jpg', 'Diamond/Pendant Set/9.jpg', 6, '2500.00', 'Diamond Carte:20', 'featured', 0, 0),
(0063, 'Diamond/Pendant Set/10.jpg', 'Diamond/Pendant Set/10.jpg', 6, '1000.00', 'Diamond Carte:20\r\n', 'featured', 0, 0),
(0065, 'Diamond/Pendants/2.jpg', 'Diamond/Pendants/2.jpg', 7, '1799.00', 'Diamond Carte:20', 'featured', 0, 0),
(0066, 'Diamond/Pendants/3.jpg', 'Diamond/Pendants/3.jpg', 7, '780.00', 'Diamond Carte:10\r\n', 'featured', 0, 0),
(0067, 'Diamond/Pendants/4.jpg', 'Diamond/Pendants/4.jpg', 7, '890.00', 'Diamond Carte: 12', 'featured', 0, 0),
(0068, 'Diamond/Pendants/5.jpg', 'Diamond/Pendants/5.jpg', 7, '900.00', 'Diamond Carte:15', 'featured', 0, 0),
(0069, 'Diamond/Pendants/6.jpg', 'Diamond/Pendants/6.jpg', 7, '1000.00', 'Diamond Carte:20\r\n', 'featured', 0, 0),
(0070, 'Diamond/Pendants/9.jpg', 'Diamond/Pendants/9.jpg', 7, '1000.00', 'Diamond Carte:15\r\n', 'featured', 8, 0),
(0071, 'Diamond/Pendants/10.jpg', 'Diamond/Pendants/10.jpg', 7, '2500.00', 'Diamond Carte:25', 'featured', 0, 0),
(0073, 'Diamond/Pendants/7.jpg', 'Diamond/Pendants/7.jpg', 7, '375.00', 'Diamond Carte:15\r\n', 'featured', 0, 0),
(0074, 'Diamond/Pendants/8.jpg', 'Diamond/Pendants/8.jpg', 7, '375.00', 'Diamond Carte:15', 'featured', 0, 0),
(0084, 'Gold/Bangles/5.jpg', 'Gold/Bangles/5.jpg', 9, '1000.00', 'Gold Carte:24', 'featured', 4, 0),
(0085, 'Gold/Bangles/6.jpg', 'Gold/Bangles/6.jpg', 9, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0083, 'Gold/Bangles/4.jpg', 'Gold/Bangles/4.jpg', 9, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0082, 'Gold/Bangles/3.jpg', 'Gold/Bangles/3.jpg', 9, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0086, 'Gold/Bangles/7.jpg', 'Gold/Bangles/7.jpg', 9, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0087, 'Gold/Bangles/8.jpg', 'Gold/Bangles/8.jpg', 9, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0088, 'Gold/Bangles/9.jpg', 'Gold/Bangles/9.jpg', 9, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0089, 'Gold/Bangles/10.jpg', 'Gold/Bangles/10.jpg', 9, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0090, 'Gold/Ear Rings/1.jpg', 'Gold/Ear Rings/1.jpg', 10, '500.00', 'Gold Carte:24', 'featured', 0, 0),
(0091, 'Gold/Ear Rings/2.jpg', 'Gold/Ear Rings/2.jpg', 10, '1799.00', 'Gold Carte:24', 'featured', 0, 0),
(0092, 'Gold/Ear Rings/3.jpg', 'Gold/Ear Rings/3.jpg', 10, '1799.00', 'Gold Carte:24', 'featured', 0, 0),
(0093, 'Gold/Ear Rings/4.jpg', 'Gold/Ear Rings/4.jpg', 10, '780.00', 'Gold Carte:24', 'featured', 0, 0),
(0094, 'Gold/Ear Rings/5.jpg', 'Gold/Ear Rings/5.jpg', 10, '900.00', 'Gold Carte:24', 'featured', 0, 0),
(0095, 'Gold/Ear Rings/6.jpg', 'Gold/Ear Rings/6.jpg', 10, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0096, 'Gold/Ear Rings/7.jpg', 'Gold/Ear Rings/7.jpg', 10, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0097, 'Gold/Ear Rings/8.jpg', 'Gold/Ear Rings/8.jpg', 10, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0098, 'Gold/Ear Rings/9.jpg', 'Gold/Ear Rings/9.jpg', 10, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0099, 'Gold/Ear Rings/10.jpg', 'Gold/Ear Rings/10.jpg', 10, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0100, 'Gold/Lady Rings/1.jpg', 'Gold/Lady Rings/1.jpg', 35, '500.00', 'Gold Carte:24', 'featured', 0, 0),
(0101, 'Gold/Lady Rings/2.jpg', 'Gold/Lady Rings/2.jpg', 35, '1799.00', 'Gold Carte:24', 'featured', 0, 0),
(0102, 'Gold/Lady Rings/3.jpg', 'Gold/Lady Rings/3.jpg', 35, '780.00', 'Gold Carte:24', 'featured', 0, 0),
(0103, 'Gold/Lady Rings/4.jpg', 'Gold/Lady Rings/4.jpg', 35, '890.00', 'Gold Carte:24', 'featured', 0, 0),
(0104, 'Gold/Lady Rings/5.jpg', 'Gold/Lady Rings/5.jpg', 35, '900.00', 'Gold Carte: 24', 'featured', 0, 0),
(0105, 'Gold/Lady Rings/6.jpg', 'Gold/Lady Rings/6.jpg', 35, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0106, 'Gold/Lady Rings/7.jpg', 'Gold/Lady Rings/7.jpg', 35, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0107, 'Gold/Lady Rings/8.jpg', 'Gold/Lady Rings/8.jpg', 35, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0108, 'Gold/Lady Rings/9.jpg', 'Gold/Lady Rings/9.jpg', 35, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0109, 'Gold/Lady Rings/10.jpg', 'Gold/Lady Rings/10.jpg', 35, '1000.00', 'Gold Carte:24', 'soon', 0, 0),
(0110, 'Gold/Man Rings/1.jpg', 'Gold/Man Rings/1.jpg', 36, '500.00', 'Gold Carte:24', 'featured', 0, 0),
(0111, 'Gold/Man Rings/2.jpg', 'Gold/Man Rings/2.jpg', 36, '1799.00', 'Gold Carte:24', 'featured', 0, 0),
(0112, 'Gold/Man Rings/3.jpg', 'Gold/Man Rings/3.jpg', 36, '780.00', 'Gold Carte:24', 'featured', 0, 0),
(0113, 'Gold/Man Rings/4.jpg', 'Gold/Man Rings/4.jpg', 36, '890.00', 'Gold Carte:24', 'featured', 0, 0),
(0114, 'Gold/Man Rings/5.jpg', 'Gold/Man Rings/5.jpg', 36, '890.00', 'Gold Carte: 24', 'featured', 0, 0),
(0115, 'Gold/Man Rings/6.jpg', 'Gold/Man Rings/6.jpg', 36, '900.00', 'Gold Carte: 24', 'featured', 0, 0),
(0116, 'Gold/Man Rings/7.jpg', 'Gold/Man Rings/7.jpg', 36, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0117, 'Gold/Man Rings/8.jpg', 'Gold/Man Rings/8.jpg', 36, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0118, 'Gold/Mang Tika/1.jpg', 'Gold/Mang Tika/1.jpg', 11, '1000.00', '1 Gram', 'featured', 0, 0),
(0119, 'Gold/Mang Tika/2.jpg', 'Gold/Mang Tika/2.jpg', 11, '2500.00', '1 Gram', 'featured', 0, 0),
(0120, 'Gold/Mang Tika/3.jpg', 'Gold/Mang Tika/3.jpg', 11, '375.00', '1 Gram', 'featured', 0, 0),
(0121, 'Gold/Mang Tika/4.jpg', 'Gold/Mang Tika/4.jpg', 11, '4550.00', '1 Gram', 'featured', 0, 0),
(0122, 'Gold/Mang Tika/5.jpg', 'Gold/Mang Tika/5.jpg', 11, '500.00', '1 Gram', 'featured', 0, 0),
(0123, 'Gold/Mang Tika/6.jpg', 'Gold/Mang Tika/6.jpg', 11, '1799.00', '1 Gram', 'featured', 0, 0),
(0124, 'Gold/Mang Tika/7.jpg', 'Gold/Mang Tika/7.jpg', 11, '780.00', '1 Gram', 'featured', 0, 0),
(0126, 'Gold/Mang Tika/9.jpg', 'Gold/Mang Tika/9.jpg', 11, '900.00', '1 Gram', 'featured', 0, 0),
(0127, 'Gold/Mang Tika/10.jpg', 'Gold/Mang Tika/10.jpg', 11, '1000.00', '1 Gram', 'featured', 0, 0),
(0128, 'Gold/Mangalsutra/1.jpg', 'Gold/Mangalsutra/1.jpg', 12, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0129, 'Gold/Mangalsutra/2.jpg', 'Gold/Mangalsutra/2.jpg', 12, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0130, 'Gold/Mangalsutra/3.jpg', 'Gold/Mangalsutra/3.jpg', 12, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0131, 'Gold/Mangalsutra/4.jpg', 'Gold/Mangalsutra/4.jpg', 12, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0132, 'Gold/Mangalsutra/5.jpg', 'Gold/Mangalsutra/5.jpg', 12, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0133, 'Gold/Mangalsutra/6.jpg', 'Gold/Mangalsutra/6.jpg', 12, '2500.00', 'Gold Carte:', 'featured', 0, 0),
(0134, 'Gold/Mangalsutra/7.jpg', 'Gold/Mangalsutra/7.jpg', 12, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0135, 'Gold/Mangalsutra/8.jpg', 'Gold/Mangalsutra/8.jpg', 12, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0136, 'Gold/Mangalsutra/9.jpg', 'Gold/Mangalsutra/9.jpg', 12, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0137, 'Gold/Mangalsutra/10.jpg', 'Gold/Mangalsutra/10.jpg', 12, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0138, 'Gold/Necklaces/1.jpg', 'Gold/Necklaces/1.jpg', 13, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0139, 'Gold/Necklaces/2.jpg', 'Gold/Necklaces/2.jpg', 13, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0140, 'Gold/Necklaces/3.jpg', 'Gold/Necklaces/3.jpg', 13, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0141, 'Gold/Necklaces/4.jpg', 'Gold/Necklaces/4.jpg', 13, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0142, 'Gold/Necklaces/5.jpg', 'Gold/Necklaces/5.jpg', 13, '2500.00', 'Gold Carte: 24', 'latest', 1, 1),
(0143, 'Gold/Necklaces/6.jpg', 'Gold/Necklaces/6.jpg', 13, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0144, 'Gold/Necklaces/7.jpg', 'Gold/Necklaces/7.jpg', 13, '375.00', 'Gold Carte: 24', 'featured', 0, 0),
(0145, 'Gold/Necklaces/8.jpg', 'Gold/Necklaces/8.jpg', 13, '375.00', 'Gold Carte:24', 'featured', 0, 0),
(0146, 'Gold/Necklaces/9.jpg', 'Gold/Necklaces/9.jpg', 13, '375.00', 'Gold Carte: 24', 'featured', 0, 0),
(0147, 'Gold/Necklaces/10.jpg', 'Gold/Necklaces/10.jpg', 13, '375.00', 'Gold Carte:24', 'featured', 0, 0),
(0148, 'Gold/Nose Rings/1.jpg', 'Gold/Nose Rings/1.jpg', 14, '1000.00', '1 Gram', 'featured', 0, 0),
(0149, 'Gold/Nose Rings/2.jpg', 'Gold/Nose Rings/2.jpg', 14, '2500.00', '1 Gram', 'featured', 0, 0),
(0150, 'Gold/Nose Rings/3.jpg', 'Gold/Nose Rings/3.jpg', 14, '375.00', '1 Gram', 'featured', 0, 0),
(0151, 'Gold/Nose Rings/4.jpg', 'Gold/Nose Rings/4.jpg', 14, '4550.00', '1 Gram', 'featured', 0, 0),
(0152, 'Gold/Nose Rings/5.jpg', 'Gold/Nose Rings/5.jpg', 14, '500.00', '1 Gram', 'featured', 0, 0),
(0153, 'Gold/Nose Rings/6.jpg', 'Gold/Nose Rings/6.jpg', 14, '1799.00', '1 Gram', 'featured', 0, 0),
(0154, 'Gold/Nose Rings/7.jpg', 'Gold/Nose Rings/7.jpg', 14, '780.00', '1 Gram', 'featured', 0, 0),
(0155, 'Gold/Nose Rings/8.jpg', 'Gold/Nose Rings/8.jpg', 14, '890.00', '1 Gram', 'featured', 0, 0),
(0156, 'Gold/Pendant Set/1.jpg', 'Gold/Pendant Set/1.jpg', 15, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0157, 'Gold/Pendant Set/2.jpg', 'Gold/Pendant Set/2.jpg', 15, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0158, 'Gold/Pendant Set/3.jpg', 'Gold/Pendant Set/3.jpg', 15, '2500.00', 'Gold Carte:24', 'latest', 0, 0),
(0159, 'Gold/Pendant Set/4.jpg', 'Gold/Pendant Set/4.jpg', 15, '2500.00', 'Gold Carte: 24', 'latest', 0, 0),
(0160, 'Gold/Pendant Set/5.jpg', 'Gold/Pendant Set/5.jpg', 15, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0161, 'Gold/Pendant Set/6.jpg', 'Gold/Pendant Set/6.jpg', 15, '375.00', 'Gold Carte: 24', 'featured', 0, 0),
(0162, 'Gold/Pendant Set/7.jpg', 'Gold/Pendant Set/7.jpg', 15, '375.00', 'Gold Carte:24', 'soon', 0, 0),
(0163, 'Gold/Pendant Set/8.jpg', 'Gold/Pendant Set/8.jpg', 15, '375.00', 'Gold Carte: 24', 'featured', 0, 0),
(0164, 'Gold/Pendant Set/9.jpg', 'Gold/Pendant Set/9.jpg', 15, '0.00', 'Gold Carte: 24', 'featured', 0, 0),
(0165, 'Gold/Pendant Set/10.jpg', 'Gold/Pendant Set/10.jpg', 15, '375.00', 'Gold Carte: 24', 'featured', 0, 0),
(0166, 'Gold/Pendants/1.jpg', 'Gold/Pendants/1.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0167, 'Gold/Pendants/2.jpg', 'Gold/Pendants/2.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0168, 'Gold/Pendants/3.jpg', 'Gold/Pendants/3.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0169, 'Gold/Pendants/4.jpg', 'Gold/Pendants/4.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0170, 'Gold/Pendants/5.jpg', 'Gold/Pendants/5.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0171, 'Gold/Pendants/6.jpg', 'Gold/Pendants/6.jpg', 16, '1000.00', 'Gold Carte:24', 'featured', 0, 0),
(0172, 'Gold/Pendants/7.jpg', 'Gold/Pendants/7.jpg', 16, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0173, 'Gold/Pendants/8.jpg', 'Gold/Pendants/8.jpg', 16, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0174, 'Gold/Pendants/9.jpg', 'Gold/Pendants/9.jpg', 16, '2500.00', 'Gold Carte:24', 'featured', 0, 0),
(0175, 'Gold/Pendants/10.jpg', 'Gold/Pendants/10.jpg', 16, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0176, 'Gold/Lady Rings/1.jpg', 'Gold/Lady Rings/1.jpg', 35, '1000.00', 'White Gold Carte: 24 ', 'featured', 0, 0),
(0177, 'Gold/Lady Rings/2.jpg', 'Gold/Lady Rings/2.jpg', 35, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0178, 'Gold/Lady Rings/3.jpg', 'Gold/Lady Rings/3.jpg', 35, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0179, 'Gold/Lady Rings/4.jpg', 'Gold/Lady Rings/4.jpg', 35, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0180, 'Gold/Lady Rings/5.jpg', 'Gold/Lady Rings/5.jpg', 35, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0181, 'Gold/Lady Rings/6.jpg', 'Gold/Lady Rings/6.jpg', 35, '2500.00', 'White Gold Carte:24', 'featured', 0, 0),
(0182, 'Gold/Lady Rings/7.jpg', 'Gold/Lady Rings/7.jpg', 35, '2500.00', 'White Gold Carte: 24', 'featured', 3, 0),
(0183, 'Gold/Lady Rings/8.jpg', 'Gold/Lady Rings/8.jpg', 35, '2500.00', 'White Gold Carte:24', 'featured', 0, 0),
(0184, 'Gold/Lady Rings/9.jpg', 'Gold/Lady Rings/9.jpg', 35, '2500.00', 'Gold Carte: 24', 'featured', 0, 0),
(0185, 'Gold/Lady Rings/10.jpg', 'Gold/Lady Rings/10.jpg', 35, '375.00', 'White Gold Carte:24', 'featured', 0, 0),
(0201, 'Silver/Anklets/7.jpg', 'Silver/Anklets/7.jpg', 21, '1000.00', 'PureSilver', 'featured', 0, 0),
(0199, 'Silver/Anklets/5.jpg', 'Silver/Anklets/5.jpg', 21, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0200, 'Silver/Anklets/6.jpg', 'Silver/Anklets/6.jpg', 21, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0198, 'Silver/Anklets/4.jpg', 'Silver/Anklets/4.jpg', 21, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0197, 'Silver/Anklets/3.jpg', 'Silver/Anklets/3.jpg', 21, '890.00', 'Pure Silver', 'featured', 0, 0),
(0196, 'Silver/Anklets/2.jpg', 'Silver/Anklets/2.jpg', 21, '890.00', 'Pure Silver', 'featured', 0, 0),
(0195, 'Silver/Anklets/1.jpg', 'Silver/Anklets/1.jpg', 21, '500.00', 'Pure Silver', 'featured', 0, 0),
(0194, 'Gold/Man Rings/9.jpg', 'Gold/Man Rings/9.jpg', 36, '1000.00', 'Gold Carte: 24', 'featured', 0, 0),
(0202, 'Silver/Anklets/8.jpg', 'Silver/Anklets/8.jpg', 21, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0203, 'Silver/Anklets/9.jpg', 'Silver/Anklets/9.jpg', 21, '2500.00', 'PurSilver', 'featured', 0, 0),
(0204, 'Silver/Anklets/10.jpg', 'Silver/Anklets/10.jpg', 21, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0205, 'Silver/Armlets/1.jpg', 'Silver/Armlets/1.jpg', 22, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0206, 'Silver/Armlets/2.jpg', 'Silver/Armlets/2.jpg', 22, '1799.00', 'Pure Silver', 'featured', 0, 0),
(0207, 'Silver/Armlets/3.jpg', 'Silver/Armlets/3.jpg', 22, '890.00', 'Pure silver', 'featured', 0, 0),
(0208, 'Silver/Armlets/4.jpg', 'Silver/Armlets/4.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0209, 'Silver/Armlets/5.jpg', 'Silver/Armlets/5.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0210, 'Silver/Armlets/6.jpg', 'Silver/Armlets/6.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0211, 'Silver/Armlets/7.jpg', 'Silver/Armlets/7.jpg', 22, '1000.00', 'Pure silver', 'featured', 0, 0),
(0212, 'Silver/Armlets/8.jpg', 'Silver/Armlets/8.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0213, 'Silver/Armlets/9.jpg', 'Silver/Armlets/9.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0214, 'Silver/Armlets/10.jpg', 'Silver/Armlets/10.jpg', 22, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0215, 'Silver/Bracelet/1.jpg', 'Silver/Bracelet/1.jpg', 23, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0216, 'Silver/Bracelet/2.jpg', 'Silver/Bracelet/2.jpg', 23, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0217, 'Silver/Bracelet/3.jpg', 'Silver/Bracelet/3.jpg', 23, '1799.00', 'Pure Silver', 'featured', 0, 0),
(0218, 'Silver/Bracelet/4.jpg', 'Silver/Bracelet/4.jpg', 23, '890.00', 'Pure Silver', 'featured', 0, 0),
(0219, 'Silver/Bracelet/5.jpg', 'Silver/Bracelet/5.jpg', 23, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0220, 'Silver/Bracelet/6.jpg', 'Silver/Bracelet/6.jpg', 23, '1000.00', 'Pure  Silver', 'featured', 0, 0),
(0221, 'Silver/Bracelet/7.jpg', 'Silver/Bracelet/7.jpg', 23, '1000.00', 'Pure silver', 'featured', 0, 0),
(0222, 'Silver/Bracelet/8.jpg', 'Silver/Bracelet/8.jpg', 23, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0223, 'Silver/Bracelet/9.jpg', 'Silver/Bracelet/9.jpg', 23, '1799.00', 'Pure Silver', 'featured', 0, 0),
(0224, 'Silver/Bracelet/10.jpg', 'Silver/Bracelet/10.jpg', 23, '890.00', 'Pure Silver', 'featured', 0, 0),
(0225, 'Silver/Chain/1.jpg', 'Silver/Chain/1.jpg', 28, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0226, 'Silver/Chain/2.jpg', 'Silver/Chain/2.jpg', 28, '4550.00', 'Pure silver', 'featured', 0, 0),
(0227, 'Silver/Chain/3.jpg', 'Silver/Chain/3.jpg', 28, '1799.00', 'Pure Silverq', 'featured', 0, 0),
(0228, 'Silver/Chain/4.jpg', 'Silver/Chain/4.jpg', 28, '890.00', 'Pure Silver', 'featured', 0, 0),
(0229, 'Silver/Chain/5.jpg', 'Silver/Chain/5.jpg', 28, '890.00', 'Pure Silver', 'featured', 0, 0),
(0230, 'Silver/Chain/6.jpg', 'Silver/Chain/6.jpg', 28, '1000.00', 'Pure silver', 'featured', 0, 0),
(0231, 'Silver/Chain/7.jpg', 'Silver/Chain/7.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0232, 'Silver/Chain/8.jpg', 'Silver/Chain/8.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0233, 'Silver/Chain/9.jpg', 'Silver/Chain/9.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0234, 'Silver/Chain/10.jpg', 'Silver/Chain/10.jpg', 28, '1000.00', 'Pure silver', 'featured', 0, 0),
(0235, 'Silver/Cuffilinks/1.jpg', 'Silver/Cuffilinks/1.jpg', 27, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0236, 'Silver/Cuffilinks/2.jpg', 'Silver/Cuffilinks/2.jpg', 27, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0237, 'Silver/Cuffilinks/3.jpg', 'Silver/Cuffilinks/3.jpg', 27, '1799.00', 'Pure Silver', 'featured', 0, 0),
(0238, 'Silver/Cuffilinks/4.jpg', 'Silver/Cuffilinks/4.jpg', 27, '890.00', 'Pure Silver', 'featured', 6, 3),
(0239, 'Silver/Cuffilinks/5.jpg', 'Silver/Cuffilinks/5.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0240, 'Silver/Cuffilinks/6.jpg', 'Silver/Cuffilinks/6.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0241, 'Silver/Cuffilinks/7.jpg', 'Silver/Cuffilinks/7.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0242, 'Silver/Cuffilinks/8.jpg', 'Silver/Cuffilinks/8.jpg', 28, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0243, 'Silver/Cuffilinks/9.jpg', 'Silver/Cuffilinks/9.jpg', 28, '1799.00', 'Pure Silver', 'featured', 4, 0),
(0244, 'Silver/Cuffilinks/10.jpg', 'Silver/Cuffilinks/10.jpg', 28, '890.00', 'Pure Silver', 'featured', 0, 0),
(0245, 'Silver/EarRings/1.jpg', 'Silver/EarRings/1.jpg', 26, '500.00', 'Pure Silver', 'featured', 0, 0),
(0246, 'Silver/EarRings/2.jpg', 'Silver/EarRings/2.jpg', 26, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0247, 'Silver/EarRings/3.jpg', 'Silver/EarRings/3.jpg', 26, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0248, 'Silver/EarRings/4.jpg', 'Silver/EarRings/4.jpg', 26, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0249, 'Silver/EarRings/5.jpg', 'Silver/EarRings/5.jpg', 26, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0250, 'Silver/EarRings/6.jpg', 'Silver/EarRings/6.jpg', 26, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0251, 'Silver/EarRings/7.jpg', 'Silver/EarRings/7.jpg', 26, '375.00', 'Pure Silver', 'featured', 0, 0),
(0252, 'Silver/EarRings/8.jpg', 'Silver/EarRings/8.jpg', 26, '375.00', 'Pure Silver', 'featured', 0, 0),
(0253, 'Silver/EarRings/9.jpg', 'Silver/EarRings/9.jpg', 26, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0254, 'Silver/EarRings/10.jpg', 'Silver/EarRings/10.jpg', 26, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0255, 'Silver/Hair Pin/1.jpg', 'Silver/Hair Pin/1.jpg', 25, '1000.00', 'Silver', 'featured', 0, 0),
(0256, 'Silver/Hair Pin/2.jpg', 'Silver/Hair Pin/2.jpg', 25, '2500.00', 'Silver', 'featured', 0, 0),
(0258, 'Silver/Hair Pin/4.jpg', 'Silver/Hair Pin/4.jpg', 25, '4550.00', 'Silver', 'featured', 0, 0),
(0260, 'Silver/Hair Pin/6.jpg', 'Silver/Hair Pin/6.jpg', 25, '1799.00', 'Silver', 'featured', 0, 0),
(0261, 'Silver/Hair Pin/7.jpg', 'Silver/Hair Pin/7.jpg', 25, '780.00', 'Silver', 'featured', 0, 0),
(0262, 'Silver/Hair Pin/8.jpg', 'Silver/Hair Pin/8.jpg', 25, '890.00', 'Silver', 'featured', 0, 0),
(0263, 'Silver/Hair Pin/9.jpg', 'Silver/Hair Pin/9.jpg', 25, '900.00', 'Silver', 'featured', 0, 0),
(0264, 'Silver/Hair Pin/10.jpg', 'Silver/Hair Pin/10.jpg', 25, '1000.00', 'Silver', 'featured', 0, 0),
(0265, 'Silver/Lady Rings/1.jpg', 'Silver/Lady Rings/1.jpg', 32, '500.00', 'Pure Silver', 'featured', 0, 0),
(0267, 'Silver/Lady Rings/3.jpg', 'Silver/Lady Rings/3.jpg', 32, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0268, 'Silver/Lady Rings/4.jpg', 'Silver/Lady Rings/4.jpg', 32, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0269, 'Silver/Lady Rings/5.jpg', 'Silver/Lady Rings/5.jpg', 32, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0270, 'Silver/Lady Rings/6.jpg', 'Silver/Lady Rings/6.jpg', 32, '375.00', 'Pure silver', 'featured', 0, 0),
(0271, 'Silver/Lady Rings/7.jpg', 'Silver/Lady Rings/7.jpg', 32, '375.00', 'Pure Silver', 'featured', 0, 0),
(0272, 'Silver/Lady Rings/8.jpg', 'Silver/Lady Rings/8.jpg', 32, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0273, 'Silver/Lady Rings/9.jpg', 'Silver/Lady Rings/9.jpg', 32, '4550.00', 'Pure silver', 'soon', 0, 0),
(0274, 'Silver/Lady Rings/10.jpg', 'Silver/Lady Rings/10.jpg', 32, '500.00', 'Pure Silver', 'featured', 0, 0),
(0275, 'Silver/Man Ring/1.jpg', 'Silver/Man Ring/1.jpg', 39, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0276, 'Silver/Man Ring/2.jpg', 'Silver/Man Ring/2.jpg', 39, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0277, 'Silver/Man Ring/3.jpg', 'Silver/Man Ring/3.jpg', 39, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0278, 'Silver/Man Ring/4.jpg', 'Silver/Man Ring/4.jpg', 39, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0279, 'Silver/Man Ring/5.jpg', 'Silver/Man Ring/5.jpg', 39, '375.00', 'Pure Silver', 'featured', 0, 0),
(0280, 'Silver/Man Ring/6.jpg', 'Silver/Man Ring/6.jpg', 39, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0282, 'Silver/Man Ring/8.jpg', 'Silver/Man Ring/8.jpg', 39, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0283, 'Silver/Man Ring/9.jpg', 'Silver/Man Ring/9.jpg', 39, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0284, 'Silver/Man Ring/10.jpg', 'Silver/Man Ring/10.jpg', 39, '500.00', 'Pure Silver', 'featured', 0, 0),
(0285, 'Silver/Pendants/1.jpg', 'Silver/Pendants/1.jpg', 30, '500.00', 'Pure Silver', 'featured', 0, 0),
(0287, 'Silver/Pendants/3.jpg', 'Silver/Pendants/3.jpg', 30, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0288, 'Silver/Pendants/4.jpg', 'Silver/Pendants/4.jpg', 30, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0289, 'Silver/Pendants/5.jpg', 'Silver/Pendants/5.jpg', 30, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0290, 'Silver/Pendants/6.jpg', 'Silver/Pendants/6.jpg', 30, '375.00', 'Pure Silver', 'featured', 0, 0),
(0291, 'Silver/Pendants/7.jpg', 'Silver/Pendants/7.jpg', 30, '375.00', 'Pure Silver', 'featured', 0, 0),
(0292, 'Silver/Pendants/8.jpg', 'Silver/Pendants/8.jpg', 30, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0293, 'Silver/Pendants/9.jpg', 'Silver/Pendants/9.jpg', 30, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0294, 'Silver/Pendants/10.jpg', 'Silver/Pendants/10.jpg', 30, '500.00', 'Pure Silver', 'featured', 0, 0),
(0295, 'Silver/Pendants Sets/1.jpg', 'Silver/Pendants Sets/1.jpg', 31, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0296, 'Silver/Pendants Sets/2.jpg', 'Silver/Pendants Sets/2.jpg', 31, '1000.00', 'Pure Solver', 'featured', 0, 0),
(0297, 'Silver/Pendants Sets/3.jpg', 'Silver/Pendants Sets/3.jpg', 31, '2500.00', 'Pure silver', 'featured', 0, 0),
(0298, 'Silver/Pendants Sets/4.jpg', 'Silver/Pendants Sets/4.jpg', 31, '2500.00', 'Pure silver', 'featured', 0, 0),
(0299, 'Silver/Pendants Sets/5.jpg', 'Silver/Pendants Sets/5.jpg', 30, '2500.00', 'Pure silver', 'featured', 0, 0),
(0300, 'Silver/Pendants Sets/6.jpg', 'Silver/Pendants Sets/6.jpg', 31, '375.00', 'Pure Silver', 'featured', 0, 0),
(0301, 'Silver/Pendants Sets/7.jpg', 'Silver/Pendants Sets/7.jpg', 31, '375.00', 'Pure Silver', 'featured', 0, 0),
(0302, 'Silver/Pendants Sets/8.jpg', 'Silver/Pendants Sets/8.jpg', 31, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0303, 'Silver/Pendants Sets/9.jpg', 'Silver/Pendants Sets/9.jpg', 31, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0304, 'Silver/Pendants Sets/10.jpg', 'Silver/Pendants Sets/10.jpg', 31, '500.00', 'Pure Silver', 'featured', 0, 0),
(0305, 'Silver/Toe Ring/1.jpg', 'Silver/Toe Ring/1.jpg', 40, '1000.00', 'Pure Silver', 'featured', 0, 0),
(0306, 'Silver/Toe Ring/2.jpg', 'Silver/Toe Ring/2.jpg', 40, '2500.00', 'Pure Silver', 'featured', 0, 0),
(0307, 'Silver/Toe Ring/3.jpg', 'Silver/Toe Ring/3.jpg', 40, '375.00', 'Pure Silver', 'featured', 0, 0),
(0308, 'Silver/Toe Ring/4.jpg', 'Silver/Toe Ring/4.jpg', 40, '4550.00', 'Pure Silver', 'featured', 0, 0),
(0309, 'Silver/Toe Ring/5.jpg', 'Silver/Toe Ring/5.jpg', 40, '500.00', 'Pure Silver', 'featured', 0, 0),
(0310, 'Silver/Toe Ring/6.jpg', 'Silver/Toe Ring/6.jpg', 40, '1799.00', 'Pure Silver', 'featured', 0, 0),
(0311, 'Silver/Toe Ring/7.jpg', 'Silver/Toe Ring/7.jpg', 40, '780.00', 'Pure Silver', 'featured', 0, 0),
(0312, 'Silver/Toe Ring/8.jpg', 'Silver/Toe Ring/8.jpg', 40, '890.00', 'Pure Silver', 'featured', 0, 0),
(0313, 'Silver/Toe Ring/9.jpg', 'Silver/Toe Ring/9.jpg', 40, '900.00', 'Pure Silver', 'featured', 0, 0),
(0315, 'Silver/Brooches/1.jpg', 'Silver/Brooches/1.jpg', 24, '1000.00', 'Silver', 'featured', 0, 0),
(0316, 'Silver/Brooches/2.jpg', 'Silver/Brooches/2.jpg', 24, '2500.00', 'Silver', 'featured', 0, 0),
(0317, 'Silver/Brooches/3.jpg', 'Silver/Brooches/3.jpg', 24, '375.00', 'Silver', 'featured', 0, 0),
(0318, 'Silver/Brooches/4.jpg', 'Silver/Brooches/4.jpg', 24, '4550.00', 'Silver', 'featured', 0, 0),
(0319, 'Silver/Brooches/5.jpg', 'Silver/Brooches/5.jpg', 24, '500.00', 'Silver', 'featured', 0, 0),
(0320, 'Silver/Brooches/6.jpg', 'Silver/Brooches/6.jpg', 24, '1799.00', 'Silver', 'featured', 0, 0),
(0321, 'Silver/Brooches/7.jpg', 'Silver/Brooches/7.jpg', 24, '780.00', 'Silver', 'featured', 0, 0),
(0322, 'Silver/Brooches/8.jpg', 'Silver/Brooches/8.jpg', 24, '890.00', 'Silver', 'featured', 0, 0),
(0323, 'Silver/Brooches/9.jpg', 'Silver/Brooches/9.jpg', 24, '900.00', 'Silver', 'featured', 0, 0),
(0324, 'Silver/Brooches/10.jpg', 'Silver/Brooches/10.jpg', 24, '1000.00', 'Silver', 'featured', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

DROP TABLE IF EXISTS `main_menu`;
CREATE TABLE IF NOT EXISTS `main_menu` (
  `mmenu_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `mmenu_name` varchar(200) NOT NULL,
  `mmenu_link` varchar(200) NOT NULL,
  PRIMARY KEY (`mmenu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`mmenu_id`, `mmenu_name`, `mmenu_link`) VALUES
(0001, 'About Us', 'about.php'),
(0002, 'Contact Us', 'contact.php'),
(0003, 'Gold Items', 'javascript:void(0)'),
(0004, 'Silver Items', 'javascript:void(0)'),
(0005, 'Diamond Items', 'javascript:void(0)'),
(0006, 'Featured Items', 'featured.php'),
(0007, 'Latest Items', 'latest.php'),
(0008, 'Top', 'javascript:void(0)');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `mmenu_id` int(4) NOT NULL DEFAULT '375',
  `smenu_name` varchar(200) NOT NULL,
  `smenu_link` varchar(200) NOT NULL DEFAULT 'viewproduct.php',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `mmenu_id`, `smenu_name`, `smenu_link`) VALUES
(0001, 5, 'Bangles', 'viewproduct.php'),
(0002, 5, 'EarRings', 'viewproduct.php'),
(0003, 5, 'Necklaces', 'viewproduct.php'),
(0004, 5, 'Nose Pin', 'viewproduct.php'),
(0005, 5, 'Pendant Set', 'viewproduct.php'),
(0006, 5, 'Pendants', 'viewproduct.php'),
(0007, 5, 'LadyRings', 'viewproduct.php'),
(0008, 3, 'Bangles', 'viewproduct.php'),
(0009, 3, 'Ear Rings', 'viewproduct.php'),
(0010, 3, 'Mang Tika', 'viewproduct.php'),
(0011, 3, 'Mangalsutra', 'viewproduct.php'),
(0012, 3, 'Necklaces', 'viewproduct.php'),
(0013, 3, 'Nose Rings', 'viewproduct.php'),
(0014, 3, 'Pendant Set', 'viewproduct.php'),
(0015, 3, 'Pendants', 'viewproduct.php'),
(0016, 4, 'Anklets', 'viewproduct.php'),
(0017, 4, 'Armlets', 'viewproduct.php'),
(0018, 4, 'Bracelet', 'viewproduct.php'),
(0019, 4, 'Brooches', 'viewproduct.php'),
(0020, 4, 'Hair Pin', 'viewproduct.php'),
(0021, 4, 'EarRings', 'viewproduct.php'),
(0022, 4, 'Cuffilinks', 'viewproduct.php'),
(0023, 4, 'Chain', 'viewproduct.php'),
(0024, 4, 'ManRings', 'viewproduct.php'),
(0025, 4, 'Pendants', 'viewproduct.php'),
(0026, 4, 'Pendants Sets', 'viewproduct.php'),
(0027, 4, 'Lady Rings', 'viewproduct.php'),
(0028, 3, 'LadyRings', 'viewproduct.php'),
(0029, 3, 'ManRings', 'viewproduct.php'),
(0030, 4, 'ToeRings', 'viewproduct.php'),
(0031, 8, 'Views', 'topviewed.php'),
(0032, 8, 'Sellings', 'topsell.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `tel` int(8) NOT NULL,
  `ac_type` varchar(30) DEFAULT 'user',
  `user_status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `username`, `password`, `email`, `address`, `tel`, `ac_type`, `user_status`) VALUES
(0001, 'BB Jewellery', 'Online Store', 'Admin', '12345', 'admin@bbjewels.com', 'Montagne Blanche', 54954491, 'Administrator', 0),
(0002, 'Nadeem', 'Goolamhossen', 'Nadeem', '12345', 'nadeem05786@yahoo.com', 'Montagne Blanche', 54954491, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `webcontent`
--

DROP TABLE IF EXISTS `webcontent`;
CREATE TABLE IF NOT EXISTS `webcontent` (
  `content_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `webpage` varchar(200) NOT NULL,
  PRIMARY KEY (`content_id`),
  UNIQUE KEY `webpage` (`webpage`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webcontent`
--

INSERT INTO `webcontent` (`content_id`, `content`, `webpage`) VALUES
(0001, 'BB Jewellery Online Store has more than 35 years of experience in dealing with jewelleries susch as Gold, Silver and Diamond.', 'about');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
