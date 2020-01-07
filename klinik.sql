-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailjadwal`
--

CREATE TABLE `detailjadwal` (
  `id` int(11) NOT NULL,
  `idDokter` int(11) NOT NULL,
  `idJadwal` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailjadwal`
--

INSERT INTO `detailjadwal` (`id`, `idDokter`, `idJadwal`, `hari`) VALUES
(1, 1, 1, 'Senin'),
(2, 2, 1, 'Selasa'),
(3, 3, 1, 'Rabu'),
(4, 4, 1, 'Kamis'),
(5, 1, 1, 'Jumat'),
(6, 4, 1, 'Sabtu'),
(7, 4, 2, 'Senin'),
(8, 5, 2, 'Selasa'),
(9, 6, 2, 'Rabu'),
(10, 5, 2, 'Kamis'),
(11, 3, 2, 'Jumat'),
(12, 6, 2, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `harga`) VALUES
(1, 'Jafar', 65000),
(2, 'Elsa', 50000),
(3, 'Ghaisani', 65000),
(4, 'Indah', 50000),
(5, 'Chrisna', 65000),
(6, 'Monica', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `jam`) VALUES
(1, '08.00 - 14.00'),
(2, '14.00 - 20.00');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`, `created_at`) VALUES
(14, 'Kepin', 'Muhammadkevinpf@gmail.com', 'edan lursdadsdaddsadasdadas', '2019-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nik`, `status`) VALUES
(1, 'admin', 'admin123', '123456789', 'admin'),
(2, 'atengs', '123123123', '1231231231', 'member'),
(3, 'sad', '123123123', '3242442523532', 'member'),
(4, 'jafar', 'jafar123', '0000025478', 'dokter'),
(5, 'shalma', '12345678', '1213425453252', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `idJadwal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nik`, `idJadwal`, `harga`, `status`, `created_at`) VALUES
(4, '1231231231', 1, 190000, 'Sudah Bayar', '2019-05-19'),
(5, '3242442523532', 2, 2900000, 'Sudah Bayar', '2019-05-19'),
(6, '1213425453252', 1, 160000, 'Sudah Bayar', '2019-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `temp_pendaftaran`
--

CREATE TABLE `temp_pendaftaran` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `idJadwal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_pendaftaran`
--

INSERT INTO `temp_pendaftaran` (`id`, `nik`, `idJadwal`, `harga`, `status`, `created_at`) VALUES
(4, '1231231231', 1, 65000, 'Sudah Diperiksa', '2019-05-19'),
(5, '3242442523532', 2, 50000, 'Sudah Diperiksa', '2019-05-19'),
(6, '1213425453252', 1, 65000, 'Sudah Diperiksa', '2019-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `nama_treatment` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `nama_treatment`, `harga`) VALUES
(1, 'Pencetakan Gigi', 120000),
(2, 'Rontgen', 150000),
(3, 'Bleaching Interna', 175000),
(4, 'Tambal Gigi', 95000),
(5, 'Veneer Porcelain', 2850000),
(6, 'Perawatan Gigi', 150000),
(7, 'Lepas Bracket per Rahang', 180000),
(8, 'Replace Bracket per Gigi', 80000),
(9, 'Scaling', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nik`, `nama`, `alamat`, `tanggalLahir`) VALUES
('0000025478', 'jafar', 'Jalan', '2019-05-19'),
('1213425453252', 'shal', 'jl asoy', '2019-05-01'),
('1231231231', 'Ateng atengs', 'Jalan garu', '1998-08-31'),
('123456789', 'admin', 'Jl. Sini', '1998-08-21'),
('3242442523532', 'as', 'fhfgh', '2019-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailjadwal`
--
ALTER TABLE `detailjadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idJadwal` (`idJadwal`),
  ADD KEY `idDokter` (`idDokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`),
  ADD KEY `idJadwal` (`idJadwal`);

--
-- Indexes for table `temp_pendaftaran`
--
ALTER TABLE `temp_pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`),
  ADD KEY `idJadwal` (`idJadwal`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailjadwal`
--
ALTER TABLE `detailjadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temp_pendaftaran`
--
ALTER TABLE `temp_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailjadwal`
--
ALTER TABLE `detailjadwal`
  ADD CONSTRAINT `detailjadwal_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `detailjadwal_ibfk_2` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`),
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`idJadwal`) REFERENCES `detailjadwal` (`id`);

--
-- Constraints for table `temp_pendaftaran`
--
ALTER TABLE `temp_pendaftaran`
  ADD CONSTRAINT `temp_pendaftaran_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`),
  ADD CONSTRAINT `temp_pendaftaran_ibfk_2` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
