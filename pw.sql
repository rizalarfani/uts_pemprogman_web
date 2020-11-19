-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2020 at 12:24 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `periode_id` int(11) DEFAULT NULL,
  `pria` int(11) DEFAULT NULL,
  `wanita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `periode_id`, `pria`, `wanita`) VALUES
(1, 1, 240, 229),
(2, 2, 318, 340),
(3, 3, 291, 337);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'bandung'),
(2, 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `periode` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `periode`) VALUES
(1, 2013),
(2, 2014),
(3, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `idreport` int(11) NOT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `nilai` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `bulan`, `nilai`) VALUES
(1, 'januari', 40),
(2, 'febuari', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `ruang`) VALUES
(1, 'Mawar'),
(2, 'Melati');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `waktu_absen` time NOT NULL,
  `date_absen` date NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_waktu`, `id_karyawan`, `keterangan`, `waktu_absen`, `date_absen`, `date_created`) VALUES
(66, 2, 1, 'Absen Pulang', '03:16:43', '2020-07-07', '2020-07-07 03:16:43'),
(67, 2, 1, 'Absen Pulang', '08:47:24', '2020-07-07', '2020-07-07 08:47:24'),
(68, 1, 11, 'Absen Berangkat', '08:51:37', '2020-07-07', '2020-07-07 08:51:37'),
(69, 1, 11, 'Absen Berangkat', '14:42:54', '2020-07-14', '2020-07-14 14:42:54'),
(70, 1, 12, 'Absen Berangkat', '14:42:54', '2020-07-14', '2020-07-14 14:42:54'),
(71, 1, 12, 'Absen Berangkat', '14:42:54', '2020-07-14', '2020-07-14 14:42:54'),
(72, 1, 1, 'Absen Berangkat', '14:42:54', '2020-07-14', '2020-07-14 14:42:54'),
(73, 1, 11, 'Absen Berangkat', '14:42:54', '2020-07-14', '2020-07-14 14:42:54'),
(74, 1, 1, 'Absen Berangkat', '14:44:03', '2020-07-14', '2020-07-14 14:44:03'),
(75, 1, 1, 'Absen Berangkat', '07:04:58', '2020-07-21', '2020-07-21 07:04:58'),
(76, 1, 1, 'Absen Berangkat', '07:04:58', '2020-07-21', '2020-07-21 07:04:58'),
(77, 1, 1, 'Absen Berangkat', '07:04:58', '2020-07-21', '2020-07-21 07:04:58'),
(78, 1, 1, 'Absen Berangkat', '06:14:17', '2020-07-22', '2020-07-22 06:14:17'),
(79, 1, 1, 'Absen Berangkat', '06:14:17', '2020-07-22', '2020-07-22 06:14:17'),
(80, 1, 1, 'Absen Berangkat', '06:14:17', '2020-07-22', '2020-07-22 06:14:17'),
(81, 1, 1, 'Absen Berangkat', '06:14:17', '2020-07-22', '2020-07-22 06:14:17'),
(82, 1, 1, 'Absen Berangkat', '07:14:15', '2020-07-22', '2020-07-22 07:14:15'),
(83, 1, 11, 'Absen Berangkat', '14:20:52', '2020-07-22', '2020-07-22 14:20:52'),
(84, 1, 12, 'Absen Berangkat', '14:22:17', '2020-07-22', '2020-07-22 14:22:17'),
(85, 1, 11, 'Absen Berangkat', '14:31:51', '2020-07-22', '2020-07-22 14:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama`, `date_created`) VALUES
(0, 'Direktur Utama', '2020-11-18 11:43:20'),
(2, 'Manajer', '2020-11-18 09:02:43'),
(4, 'Staff', '2020-11-18 11:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `name_karyawan` varchar(50) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `name_karyawan`, `id_jabatan`, `date_created`) VALUES
(1, 'Rijal Arfani', 1, '2020-11-18 04:14:33'),
(11, 'Atik Mulyani', 2, '2020-11-18 04:02:55'),
(12, 'Rijal Arfani', 0, '2020-11-19 00:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `password_user` varchar(70) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`, `id_kota`, `email_user`, `foto`) VALUES
(1, 'Rijal arfani', '0192023a7bbd73250516f069df18b500', 1, 'admin@gmail.com', '33a8e6a2aed7dec95b04963b26cf2777.png'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 'admin2@gmail.com', ''),
(3, 'noval assalam', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 'naufalassalam@gmail.com', ''),
(6, 'dwdwd', '40be4e59b9a2a2b5dffb918c0e86b3d7', 1, 'adwd@gmial.com', ''),
(7, 'dwdw', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 'yuiyi@gnm.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD UNIQUE KEY `nama` (`nama_kota`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
