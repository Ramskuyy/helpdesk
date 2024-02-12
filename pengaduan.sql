-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 02:08 PM
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
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_lokasi`, `nama`) VALUES
(1, 1, 'Workspace Indoor\r\n'),
(2, 1, 'Musholla\r\n'),
(3, 1, 'WC'),
(4, 1, 'Gadde'),
(5, 1, 'Parkiran'),
(6, 1, 'Workspace Outdoor'),
(7, 1, 'Gazebo'),
(8, 2, 'WC'),
(9, 2, 'Workspace'),
(10, 2, 'Laboratorium'),
(11, 3, 'Ruang Kelas'),
(12, 3, 'WC'),
(13, 3, 'Aula'),
(14, 3, 'Toilet'),
(15, 3, 'Pojok Baca'),
(16, 4, 'Ruang Kelass'),
(17, 4, 'WC'),
(18, 4, 'Toilet\r\n'),
(19, 4, 'Musholla ');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(5) NOT NULL,
  `id_fasilitas` int(5) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `id_fasilitas`, `jenis`) VALUES
(1, 10, 'Lab Microcontroller'),
(2, 10, 'Lab Computer Vision'),
(3, 10, 'Lab Data Science'),
(4, 10, 'Lab Multimedia'),
(5, 10, 'Lab Computer Network'),
(6, 10, 'Lab IOT'),
(7, 10, 'Lab Startup'),
(8, 11, 'Kelas 301'),
(9, 11, 'Kelas 302'),
(10, 11, 'Kelas 303'),
(11, 11, 'Kelas 304'),
(12, 11, 'Kelas 305'),
(13, 11, 'Kelas 306'),
(14, 11, 'Kelas 307'),
(15, 11, 'Kelas 308'),
(16, 11, 'Kelas 309'),
(17, 16, 'Kelas 401'),
(18, 16, 'Kelas 402'),
(19, 16, 'Kelas 403'),
(20, 16, 'Kelas 404'),
(21, 16, 'Kelas 405'),
(22, 16, 'Kelas 406'),
(23, 16, 'Kelas 407'),
(24, 16, 'Kelas 408'),
(25, 16, 'Kelas 409'),
(26, 19, 'Musholla Laki-Laki'),
(27, 19, 'Musholla Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `fasilitas` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `laporan` varchar(50) DEFAULT NULL,
  `obyek` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `nama`, `lokasi`, `fasilitas`, `jenis`, `laporan`, `obyek`, `status`, `catatan`) VALUES
(14, '2023-11-21', 'Wildan', 'Lantai 3', 'Ruang Kelas', 'Kelas 304', 'ruang kelas kekurangan kursi', 'ruang-kuliah-s33.png', 'Selesai', 'segera akan diperbaiki'),
(15, '2023-11-14', 'Wildan', 'Lantai 1 ', 'Workspace Indoor', NULL, 'rusak pada bagian saklar ', 'Untitled3-removebg-preview.png', 'Belum di Konfirmasi', '-');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`) VALUES
(1, 'Lantai 1'),
(2, 'Lantai 2'),
(3, 'Lantai 3'),
(4, 'Lantai 4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `stambuk` varchar(15) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`stambuk`, `nama`, `username`, `password`) VALUES
('13020190143', 'Wildan', 'wildan', 'wildan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
