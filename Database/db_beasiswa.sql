-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230119.3d4aea922c
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `semester_sekarang` int(11) NOT NULL,
  `ipk` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim`, `nama`, `email`, `no_hp`, `semester_sekarang`, `ipk`) VALUES
(38, '20210810075', 'Wira Sukma Saputra', 'wiralodrasaputra07@gmail.com', '081219195308', 5, 3.80),
(39, '20210810075', 'Wira Sukma Saputra', 'wiralodrasaputra07@gmail.com', '081219195308', 5, 3.80),
(45, '20210810075', 'Bakso Yamin', 'wiralodrasaputra17@gmail.com', '081219195308', 5, 3.41),
(46, '20210810075', 'Wira Sukma Saputra', 'wiralodrasaputra07@gmail.com', '081219195308', 5, 3.70),
(47, '20210810075', 'Wira Sukma Saputra', 'wiralodrasaputra07@gmail.com', '0898979777', 5, 3.80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `jenis_beasiswa` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `status_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `id_mhs`, `jenis_beasiswa`, `dokumen`, `status_pendaftaran`) VALUES
(53, 45, 'akademik', 'uploadsHenry o nx.jpeg', 'Belum di verifikasi'),
(54, 46, 'akademik', 'uploadsModul_Pelatihan_JWD_Pertemuan_2_Online_VSGA_DTS_2023[1].pdf', 'Belum di verifikasi'),
(55, 47, 'akademik', 'uploadsSesi Offline.jpg', 'Belum di verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(12) NOT NULL,
  `nama` int(35) NOT NULL,
  `username` int(35) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun_siswa`
--

CREATE TABLE `tb_akun_siswa` (
  `nis` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun_siswa`
--

INSERT INTO `tb_akun_siswa` (`nis`, `username`, `password`) VALUES
(121212, 'Wira Sukma Saputra', '$2y$10$DhocYHZbT9hWcpzynAA58OAOBVZ8'),
(123345, 'Sarjana', '$2y$10$/EDD63DXH2aXzSKRnBhnuuNSc4BN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `tbl_pendaftaran_ibfk_1` (`id_mhs`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_akun_siswa`
--
ALTER TABLE `tb_akun_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_akun_siswa`
--
ALTER TABLE `tb_akun_siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123346;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD CONSTRAINT `tbl_pendaftaran_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `tbl_mhs` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
