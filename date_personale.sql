-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2018 at 04:51 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `date_personale`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajati`
--

DROP TABLE IF EXISTS `angajati`;
CREATE TABLE IF NOT EXISTS `angajati` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(15) DEFAULT NULL,
  `prenume` varchar(15) DEFAULT NULL,
  `telefon` varchar(30) DEFAULT NULL,
  `datan` date DEFAULT NULL,
  `email` text,
  `cnp` varchar(13) DEFAULT NULL,
  `varsta` tinyint(4) DEFAULT NULL,
  `casatorit` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angajati`
--

INSERT INTO `angajati` (`id`, `nume`, `prenume`, `telefon`, `datan`, `email`, `cnp`, `varsta`, `casatorit`) VALUES
(1, 'Ion', 'Gheorghe', '07123456', '1950-12-22', 'ion@gmail.com', '123456798', 55, 1),
(2, 'Maria', 'Gheorghe', '07123456', '1972-06-01', 'maria@gmail.com', '2312654948', 42, 1),
(5, 'Funar', 'Vadim', '07123456', '1932-08-12', 'funar@gmail.com', '123456798', 64, 1),
(6, 'Funar', 'Vadim', '07123456', '1932-08-12', 'funar@gmail.com', '123456798', 64, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
