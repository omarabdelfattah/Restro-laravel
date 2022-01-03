-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2021 at 07:27 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(1, 'PC builds', '1.png'),
(2, 'Consoles', '2.png'),
(3, 'Accessories', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `feedback`) VALUES
(1, 'omar abdelfattah', 'omar.mero200125@gmail.com', 1061698368, '445343534'),
(2, 'omar abdelfattah', 'omar.mero200125@gmail.com', 1061698368, 'fff'),
(3, 'omar abdelfattah', 'omar.mero200125@gmail.com', 1061698368, 'cvvccxv');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `descr` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `cat_id` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `descr`, `cat_id`, `img`) VALUES
(1, 'Antec F12 RGB', 150, 'Material : Aluminum\r\nConnector: 4-Pin RGB & SATA Power', 1, '1.png'),
(2, 'AMD Ryzen 3 2200G\r\n', 1600, 'of CPU Cores: 4\r\n of Threads: 4\r\n of GPU Cores: 8\r\nMax Boost Clock: \r\nUp to 3.7GHz', 1, '2.png'),
(3, 'Amber Build', 33652, 'ASUS Prime X570-P\r\n\r\nAMD Ryzen 7-5800X\r\n\r\nZotac NVIDIA RTX 3060 Twin Edge OC-12G-DDR6\r\n\r\nRAM TEAM DARK Z 16GB 3600MHZ 2X8GB\r\n\r\n1TB\r\n\r\nCrucial P2 M.2 500GB nvme up to r:2400 w:2000\r\n\r\nPower Supply Antec High Current Gamer HCG 750W 80+ Gold Full Modular\r\n\r\nCase Antec DF600 Flux 5Fan(3*120M ARGB) (2*120M)\r\n\r\nCooling-Liquid-Msi-MAG-CORELIQUID-ARGB-360MM', 1, '3.png'),
(4, 'Astro Gaming A10', 1449, 'Frequency Response: 20 – 20,000 Hz\r\nMicrophone: 6.0mm uni-directional microphone', 3, '4.png'),
(5, 'Core I9-9900K', 8560, 'لا يوجد\r\n', 1, '5.png'),
(6, 'AULA F2066', 345, 'لوحة مفاتيح ميكانيكية للألعاب AULA F2066 مضادة للظلال بمفتاح أزرق بإضاءة خلفية LED مع برنامج ماكرو للكمبيوتر المحمول للاعبين', 3, '6.png'),
(8, 'PlayStation 5 Console\r\n', 15950, 'Experience lightning fast loading with an ultra-high speed SSD, deeper immersion with support for haptic feedback, adaptive triggers and 3D Audio, and an all-new generation of incredible PlayStation games.\r\n\r\n', 2, '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@admin.coom', '12345', 'attia'),
(20, 'omar.mero200125@gmail.com', '123', 'omar abdelfattah'),
(22, 'omar_abdo200125@yahoo.com', '123', 'omar abdelfattah'),
(23, 'islamid@gmail.com', '1212', 'omar abdelfattah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
