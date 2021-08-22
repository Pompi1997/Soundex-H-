-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundex`
--

-- --------------------------------------------------------

--
-- Table structure for table `charac`
--

CREATE TABLE `charac` (
  `cId` int(11) NOT NULL,
  `characters` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codeNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `charac`
--

INSERT INTO `charac` (`cId`, `characters`, `codeNumber`) VALUES
(1, 'क', 'K'),
(2, 'ख', '1'),
(3, 'ग', 'G'),
(4, 'घ', '2'),
(5, 'ङ', 'N'),
(6, 'च', 'C'),
(7, 'छ', 'S'),
(8, 'ज', 'J'),
(9, 'झ', 'J'),
(10, 'ञ', '3'),
(11, 'ट', 'T'),
(12, 'ठ', '4'),
(13, 'ड', 'D'),
(14, 'ढ', '5'),
(15, 'ण', 'N'),
(16, 'त', 'T'),
(17, 'थ', '4'),
(18, 'द', 'D'),
(19, 'ध', '5'),
(20, 'न', 'N'),
(21, 'प', 'P'),
(22, 'फ', 'F'),
(23, 'ब', 'B'),
(24, 'भ', 'V'),
(25, 'म', 'M'),
(26, 'य', 'Y'),
(27, 'र', 'R'),
(28, 'ल', 'L'),
(29, 'व', 'W'),
(30, 'श', 'S'),
(31, 'ष', 'S'),
(32, 'स', 'S'),
(33, 'ह', 'H'),
(34, 'अ', 'A'),
(35, 'आ', 'A'),
(36, 'इ', 'I'),
(37, 'ई', 'I'),
(38, 'उ', 'U'),
(39, 'ऊ', 'U'),
(40, 'ऋ', '6'),
(41, 'ए', 'A'),
(42, 'ऐ', 'A'),
(43, 'ओ', 'O'),
(44, 'औ', 'O'),
(45, 'ा', 'A'),
(46, 'ि', 'I'),
(47, 'ी', 'I'),
(48, 'ु', 'U'),
(49, 'ू', 'U'),
(50, 'ृ', '7'),
(51, 'े', 'A'),
(52, 'ै', 'A'),
(53, 'ो', 'O'),
(54, 'ौ', 'O'),
(55, 'ँ', '8'),
(56, 'ं', 'N'),
(57, 'ः', '9'),
(58, '़', '0'),
(59, 'ाॅ', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charac`
--
ALTER TABLE `charac`
  ADD PRIMARY KEY (`cId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
