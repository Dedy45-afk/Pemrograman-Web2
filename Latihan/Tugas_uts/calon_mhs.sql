-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2026 at 01:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `kode_pendaftaran` varchar(20) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `nilai_matematika` float NOT NULL,
  `nilai_b_inggris` float NOT NULL,
  `nilai_umum` float NOT NULL,
  `rata_rata` float NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `kode_pendaftaran`, `nama_pendaftar`, `jenis_kelamin`, `ttl`, `asal_sekolah`, `pekerjaan_ortu`, `nilai_matematika`, `nilai_b_inggris`, `nilai_umum`, `rata_rata`, `keterangan`, `created_at`) VALUES
(1, 'A2', 'dedy', 'Laki-laki', 'Cilacap 8 april 2002', 'SMK Komputama Majenang', 'Buruh', 90, 89, 80, 86.3333, 'Lulus', '2026-10-28 12:28:48'),
(2, 'B2', 'Agung', 'Laki-laki', 'Cilacap 8 april 2004', 'SMK Komputama Majenang1', 'Buruh1', 91, 89, 60, 80, 'Lulus', '2026-10-28 12:29:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
