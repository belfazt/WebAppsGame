-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2014 at 07:12 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `muscleboy`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '$2y$10$aN6zWhq3JPd3qbW68YNTweczxJBybjQQ/5czlW1bULSFMYBS2MqWm',
  `nivel` int(11) NOT NULL DEFAULT '1',
  `characterstate` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`username`, `email`, `password`, `nivel`, `characterstate`, `id`) VALUES
('chango', 'chango@chango.com', '$2y$10$l3EQZum/5g7chD7HsBeKy.BXtc2yumwGxm62wvfxPrI6fgwpbMJda', 1, 1, 6),
('iguana', 'iguana@juana.com', '$2y$10$svqdmkj19bSTZgH5Qaz6be5Yi3T/5c2JdaX1DSJyShrVsGPcO3SxW', 1, 1, 7),
('mono', 'mono@asd.csa', '$2y$10$BJ2c7k7z1vMP9E12PWOI8udJOUz/WTJA6C7V.d/0NmEFxzQqCxxLu', 1, 1, 8),
('ladrillo', 'ladrillo@cons.com', '$2y$10$j9CY2Zcqh/SAZ/ZfjN16Je3sxLzEK8qOxhmVvhNae/jazU6ATS/1a', 1, 1, 9),
('martillo', 'martillo@asda.com', '$2y$10$vxMO1ystDTDTUKrA1pVeReSTXgg0BaMU1b3Wf842Nqi1zaWgSErVa', 1, 1, 10),
('regla', 'regla@estuche.com', '$2y$10$9rIrAyE5g0IYpGFs.DpL2uacZAM3TF1Rk4VKxscRBTVVrZDwIY9Oe', 1, 1, 12),
('password', 'pas@tes.com', '$2y$10$O1dMQKjv2Yonym41h/AtbudcJ.KYddK4v4sGr7ZueaPKZGhnEO0Je', 1, 1, 13),
('lapiz', 'lapiz@a.com', '$2y$10$2Wv5IVzf/k2TeFCFp3HhLed2XxD1DvVsQsa22ufWKYYvDYCp0BSVi', 1, 1, 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;