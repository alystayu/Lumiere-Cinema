-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 05:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumiere`
--

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `no_seat` varchar(100) NOT NULL,
  `status` enum('kosong','terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`no_seat`, `status`) VALUES
('a1', 'kosong'),
('a2', 'kosong'),
('a3', 'kosong'),
('a4', 'kosong'),
('a5', 'kosong'),
('a6', 'kosong'),
('a7', 'kosong'),
('a8', 'kosong'),
('a9', 'kosong'),
('a10', 'kosong'),
('b1', 'kosong'),
('b2', 'kosong'),
('b3', 'kosong'),
('b4', 'kosong'),
('b5', 'kosong'),
('b6', 'kosong'),
('b7', 'kosong'),
('b8', 'kosong'),
('b9', 'kosong'),
('b10', 'kosong'),
('c1', 'kosong'),
('c2', 'kosong'),
('c3', 'kosong'),
('c4', 'kosong'),
('c5', 'kosong'),
('c6', 'kosong'),
('c7', 'kosong'),
('c8', 'kosong'),
('c9', 'kosong'),
('c10', 'kosong'),
('d1', 'kosong'),
('d2', 'kosong'),
('d3', 'kosong'),
('d4', 'kosong'),
('d5', 'kosong'),
('d6', 'kosong'),
('d7', 'kosong'),
('d8', 'kosong'),
('d9', 'kosong'),
('d10', 'kosong'),
('e1', 'kosong'),
('e2', 'kosong'),
('e3', 'kosong'),
('e4', 'kosong'),
('e5', 'kosong'),
('e6', 'kosong'),
('e7', 'kosong'),
('e8', 'kosong'),
('e9', 'kosong'),
('e10', 'kosong');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
