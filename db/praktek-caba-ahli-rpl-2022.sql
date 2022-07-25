-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 04:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktek-caba-ahli-rpl-2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `email_username` varchar(50) NOT NULL,
  `password` varchar(226) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `active` int(1) NOT NULL,
  `admin_online` int(1) NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_logout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email_username`, `password`, `nama_admin`, `role_id`, `active`, `admin_online`, `created_on`, `update_at`, `last_login`, `last_logout`) VALUES
(1, 'vebri@admin.com', '$2y$10$lR.gs1.j5eL19x399IwlFetcw.Ae1mM8XU.r/eKJid6QQ8Dyj9unS', 'Vebri Yusdi Putra Pradana', 1, 1, 0, '2021-02-12 09:50:30', '2022-05-23 11:47:12', '2022-07-25 20:42:21', '2022-07-25 21:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `alamat` longtext NOT NULL,
  `agama` varchar(10) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id`, `no_hp`, `nama`, `jenis_kelamin`, `alamat`, `agama`, `created_on`) VALUES
(1, '0895367081854', 'Vebri Yusdi Putra Pradana', 1, 'Puskopad Singosari Malang', 'ISLAM', '2022-07-25 06:38:32'),
(7, '0123584477', 'Melati', 2, 'Surabaya', 'ISLAM', '2022-07-25 07:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
