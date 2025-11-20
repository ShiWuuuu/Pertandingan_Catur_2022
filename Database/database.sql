-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 12:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `nokp_hakim` varchar(12) NOT NULL,
  `nama_hakim` varchar(60) DEFAULT NULL,
  `katalaluan_hakim` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hakim`
--

INSERT INTO `hakim` (`nokp_hakim`, `nama_hakim`, `katalaluan_hakim`) VALUES
('123', 'Amrul Fadlee', '123'),
('234', 'Naim Bin Abu', '234');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nama_peserta` varchar(60) DEFAULT NULL,
  `nokp_peserta` varchar(12) NOT NULL,
  `katalaluan_peserta` varchar(13) DEFAULT NULL,
  `kod_sekolah` varchar(7) DEFAULT NULL,
  `nokp_hakim` varchar(12) DEFAULT NULL,
  `mata` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nama_peserta`, `nokp_peserta`, `katalaluan_peserta`, `kod_sekolah`, `nokp_hakim`, `mata`) VALUES
('Ali', '111', '111', 'SM8729', '123', 10),
('Abu', '222', '222', 'SM1234', '123', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `kod_sekolah` varchar(7) NOT NULL,
  `nama_sekolah` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`kod_sekolah`, `nama_sekolah`) VALUES
('SM1122', 'SMK Bunga Kuning'),
('SM1234', 'SMK Ros Pink'),
('SM8729', 'SMK Pandan Hijau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`nokp_hakim`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nokp_peserta`),
  ADD KEY `kod_sekolah` (`kod_sekolah`),
  ADD KEY `nokp_hakim` (`nokp_hakim`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`kod_sekolah`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`kod_sekolah`) REFERENCES `sekolah` (`kod_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_ibfk_2` FOREIGN KEY (`nokp_hakim`) REFERENCES `hakim` (`nokp_hakim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
