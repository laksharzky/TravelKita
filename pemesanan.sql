-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 02:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nm_pengguna` varchar(255) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nm_pengguna`, `kata_sandi`) VALUES
('laksha', '1234'),
('eko', '4321'),
('ramsel', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` int(255) NOT NULL,
  `dir_gambar` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `dir_gambar`, `konten`) VALUES
(2, '5cad09f8e07df-gambar3.jpg', 'Merupakan peninggalan Budha terbesar di dunia antara 780-840 Masehi.Borobudur dibangun dengan gaya Mandala yang mencerminkan alam semesta dalam kepercayaan Buddha. Struktur bangunan ini berbentuk kotak dengan empat pintu masuk dan titik pusat berbentuk li'),
(6, '5cad0f5980cac-gambar4.jpg', 'Danau Toba adalah salah satu danau terbesar di Indonesia dan terletak di Sumatera Utara. Danau ini memiliki panjang 100 kilometer, lebar 30 kilometer, dan kedalaman 505 meter'),
(8, '5cb0c7476e395-gambar7.jpg', 'Twin Tower Petronas adalah salah satu landmark di Malaysia yang terletak di Kuala Lumpur. Pernah menjadi bangunan tertinggi di dunia pada tahun 1998â€”2004, sebelum dilampaui oleh Burj Khalifa dan Taipei 101'),
(11, '5cbc453a66082-image5cad05718b901-gambar2.jpg', 'sssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `penumpang` int(255) NOT NULL,
  `tgl_brngkt` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `pesawat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `from`, `to`, `penumpang`, `tgl_brngkt`, `kelas`, `pesawat`) VALUES
(6, 'jakarta', 'yogyakarta', 2, '2019-04-18', 'Premium Economy', 'Lion Air'),
(8, 'bali', 'medan', 3, '2019-04-04', 'First Class', 'Garuda Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `check_out` varchar(255) NOT NULL,
  `tamu` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `kota`, `check_in`, `check_out`, `tamu`, `kamar`) VALUES
(2, 'yogyakarta', '2019-04-10', '2019-04-12', '3', 'Suite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`,`kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
