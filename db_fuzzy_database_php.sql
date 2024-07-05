-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 05:42 AM
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
-- Database: `db_fuzzy_database_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`) VALUES
('BKTS', 'Bukit Sanjaya ', '-'),
('BPCLR', 'Bumi Perkemahan Camping Lawu Resort', '-'),
('CECP', 'Cepogo Cheese Park', '-'),
('CKTW', 'Cemoro Kandang Tawangmangu', '-'),
('CNDC', 'Candi Cetho', '-'),
('CNDK', 'Candi Kethek', '-'),
('CNDM', 'Candi Muncar ', '-'),
('CNDP', 'Candi  Prambanan ', '-'),
('CNDS', 'Candi Sukuh', '-'),
('CNDSW', 'Candi Sewu ', '-'),
('EMBM', 'Embung Manajar', '-'),
('GBS', 'Galeri Batik Sukowati dan Sentra Bisnis Batik Sragen ', '-'),
('GNSP', 'Gunung Sepikul', '-'),
('KKS', 'Kraton Kasunan Surakarta', '-'),
('LKNT', 'Lokananta', '-'),
('MKI', 'Museum Karst Indonesia ', '-'),
('MKN', 'Museum Keris Nusantara', '-'),
('MMPS', 'Museum Manusia Purba Sangiran', '-'),
('OWKS', 'Obyek wisata Kawasan selo ', ''),
('PAPB', 'Pemandian Air Panas Bayanan', '-'),
('PKPG', 'Petilasan Kerajaan Pajang', '-'),
('PMKN', 'Pura Mangkunegaran', '-'),
('PNLP', 'Puncak Laskar Pelangi', '-'),
('PNTN', 'Pantai Nampu', '-'),
('RVKP', 'Riverboarding Kali pusur ', '-'),
('RWJB', 'Rowo Jombor', '-'),
('SKLT', 'Soko Langit', '-'),
('TBS', 'Taman Budaya Sukoharjo', '-'),
('TGSS', 'Technopark Ganesha Sukowati Sragen ', '-'),
('TMPK', 'Taman Pakujoyo', '-'),
('TPM', 'Tumurun Private Museum', '-'),
('UMBL', 'Umbul Lengse', '-'),
('UMBS', 'Umbul Sigedang ', '-'),
('WDKG', 'Waduk Gebyar ', '-'),
('WDKGM', 'Waduk Gajah Mungkur ', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_fuzzy`
--

CREATE TABLE `kriteria_fuzzy` (
  `id_kriteria_fuzzy` varchar(50) NOT NULL,
  `nama_kriteria_fuzzy` varchar(200) DEFAULT NULL,
  `batas_bawah` double DEFAULT NULL,
  `batas_tengah` double DEFAULT NULL,
  `batas_atas` double DEFAULT NULL,
  `nama_bawah` varchar(200) DEFAULT NULL,
  `nama_tengah` varchar(200) DEFAULT NULL,
  `nama_atas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kriteria_fuzzy`
--

INSERT INTO `kriteria_fuzzy` (`id_kriteria_fuzzy`, `nama_kriteria_fuzzy`, `batas_bawah`, `batas_tengah`, `batas_atas`, `nama_bawah`, `nama_tengah`, `nama_atas`) VALUES
('FSL', 'Fasilitas', 50, 70, 85, 'Kurang', 'Cukup', 'Lengkap'),
('HRG', 'Harga', 15000, 30000, 50000, 'Murah', 'Sedang', 'Mahal'),
('JRK', 'Jarak', 13, 26, 38, 'Dekat', 'Sedang', 'Jauh'),
('PKR', 'Parkiran', 50, 70, 85, 'Sempit', 'Sedang', 'Luas'),
('SPT', 'Spot Foto', 50, 70, 85, 'Kurang', 'Cukup', 'Keren');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_fuzzy`
--

CREATE TABLE `nilai_fuzzy` (
  `id_nilai_fuzzy` int(11) NOT NULL,
  `id_alternatif` varchar(50) DEFAULT NULL,
  `id_kriteria_fuzzy` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `bawah` double DEFAULT NULL,
  `tengah` double DEFAULT NULL,
  `atas` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nilai_fuzzy`
--

INSERT INTO `nilai_fuzzy` (`id_nilai_fuzzy`, `id_alternatif`, `id_kriteria_fuzzy`, `nilai`, `bawah`, `tengah`, `atas`) VALUES
(91, 'KKS', 'JRK', 2, 1, 0, 0),
(92, 'KKS', 'HRG', 35000, 0, 0.75, 0.25),
(93, 'KKS', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(94, 'KKS', 'PKR', 75, 0, 0.66666666666667, 0.33333333333333),
(95, 'KKS', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(96, 'TPM', 'JRK', 1.2, 1, 0, 0),
(97, 'TPM', 'HRG', 25000, 0.33333333333333, 0.66666666666667, 0),
(98, 'TPM', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(99, 'TPM', 'PKR', 70, 0, 1, 0),
(100, 'TPM', 'SPT', 85, 0, 0, 1),
(101, 'LKNT', 'JRK', 4.3, 1, 0, 0),
(102, 'LKNT', 'HRG', 35000, 0, 0.75, 0.25),
(103, 'LKNT', 'FSL', 75, 0, 0.66666666666667, 0.33333333333333),
(104, 'LKNT', 'PKR', 55, 0.75, 0.25, 0),
(105, 'LKNT', 'SPT', 85, 0, 0, 1),
(106, 'PMKN', 'JRK', 0, 1, 0, 0),
(107, 'PMKN', 'HRG', 30000, 0, 1, 0),
(108, 'PMKN', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(109, 'PMKN', 'PKR', 80, 0, 0.33333333333333, 0.66666666666667),
(110, 'PMKN', 'SPT', 85, 0, 0, 1),
(111, 'MKN', 'JRK', 1.9, 1, 0, 0),
(112, 'MKN', 'HRG', 10000, 1, 0, 0),
(113, 'MKN', 'FSL', 65, 0.25, 0.75, 0),
(115, 'MKN', 'PKR', 60, 0.5, 0.5, 0),
(116, 'MKN', 'SPT', 70, 0, 1, 0),
(117, 'TBS', 'JRK', 16, 0.76923076923077, 0.23076923076923, 0),
(118, 'TBS', 'HRG', 0, 1, 0, 0),
(119, 'TBS', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(120, 'TBS', 'PKR', 80, 0, 0.33333333333333, 0.66666666666667),
(121, 'TBS', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(122, 'PKPG', 'JRK', 5.8, 1, 0, 0),
(123, 'PKPG', 'HRG', 0, 1, 0, 0),
(124, 'PKPG', 'FSL', 60, 0.5, 0.5, 0),
(125, 'PKPG', 'PKR', 50, 1, 0, 0),
(126, 'PKPG', 'SPT', 70, 0, 1, 0),
(127, 'PNLP', 'JRK', 31, 0, 0.58333333333333, 0.41666666666667),
(128, 'PNLP', 'HRG', 0, 1, 0, 0),
(129, 'PNLP', 'FSL', 60, 0.5, 0.5, 0),
(130, 'PNLP', 'PKR', 70, 0, 1, 0),
(131, 'PNLP', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(132, 'GNSP', 'JRK', 29, 0, 0.75, 0.25),
(133, 'GNSP', 'HRG', 5000, 1, 0, 0),
(134, 'GNSP', 'FSL', 70, 0, 1, 0),
(135, 'GNSP', 'PKR', 60, 0.5, 0.5, 0),
(136, 'GNSP', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(137, 'TMPK', 'JRK', 15, 0.84615384615385, 0.15384615384615, 0),
(138, 'TMPK', 'HRG', 0, 1, 0, 0),
(139, 'TMPK', 'FSL', 70, 0, 1, 0),
(140, 'TMPK', 'PKR', 65, 0.25, 0.75, 0),
(141, 'TMPK', 'SPT', 60, 0.5, 0.5, 0),
(142, 'CNDC', 'JRK', 44, 0, 0, 1),
(143, 'CNDC', 'HRG', 10000, 1, 0, 0),
(144, 'CNDC', 'FSL', 90, 0, 0, 1),
(145, 'CNDC', 'PKR', 90, 0, 0, 1),
(146, 'CNDC', 'SPT', 85, 0, 0, 1),
(148, 'CNDS', 'FSL', 92, 0, 0, 1),
(149, 'CNDS', 'JRK', 59, 0, 0, 1),
(150, 'CNDS', 'PKR', 92, 0, 0, 1),
(151, 'CNDS', 'HRG', 10000, 1, 0, 0),
(152, 'CNDS', 'SPT', 89, 0, 0, 1),
(153, 'CNDK', 'JRK', 44, 0, 0, 1),
(154, 'CNDK', 'FSL', 90, 0, 0, 1),
(155, 'CNDK', 'HRG', 7000, 1, 0, 0),
(156, 'CNDK', 'PKR', 85, 0, 0, 1),
(157, 'CNDK', 'SPT', 90, 0, 0, 1),
(158, 'BPCLR', 'JRK', 48, 0, 0, 1),
(159, 'BPCLR', 'HRG', 25000, 0.33333333333333, 0.66666666666667, 0),
(160, 'BPCLR', 'FSL', 95, 0, 0, 1),
(161, 'BPCLR', 'PKR', 75, 0, 0.66666666666667, 0.33333333333333),
(162, 'BPCLR', 'SPT', 85, 0, 0, 1),
(163, 'CKTW', 'JRK', 50, 0, 0, 1),
(164, 'CKTW', 'HRG', 25000, 0.33333333333333, 0.66666666666667, 0),
(165, 'CKTW', 'FSL', 85, 0, 0, 1),
(166, 'CKTW', 'PKR', 90, 0, 0, 1),
(167, 'CKTW', 'SPT', 98, 0, 0, 1),
(168, 'MMPS', 'JRK', 16, 0.76923076923077, 0.23076923076923, 0),
(169, 'MMPS', 'HRG', 5000, 1, 0, 0),
(170, 'MMPS', 'FSL', 90, 0, 0, 1),
(171, 'MMPS', 'PKR', 83, 0, 0.13333333333333, 0.86666666666667),
(172, 'MMPS', 'SPT', 85, 0, 0, 1),
(173, 'PAPB', 'JRK', 50, 0, 0, 1),
(174, 'PAPB', 'HRG', 6000, 1, 0, 0),
(175, 'PAPB', 'FSL', 75, 0, 0.66666666666667, 0.33333333333333),
(176, 'PAPB', 'PKR', 85, 0, 0, 1),
(177, 'PAPB', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(178, 'TGSS', 'JRK', 30, 0, 0.66666666666667, 0.33333333333333),
(179, 'TGSS', 'HRG', 0, 1, 0, 0),
(180, 'TGSS', 'FSL', 90, 0, 0, 1),
(181, 'TGSS', 'PKR', 90, 0, 0, 1),
(182, 'TGSS', 'SPT', 70, 0, 1, 0),
(183, 'GBS', 'JRK', 31, 0, 0.58333333333333, 0.41666666666667),
(184, 'GBS', 'HRG', 0, 1, 0, 0),
(185, 'GBS', 'FSL', 73, 0, 0.8, 0.2),
(187, 'GBS', 'PKR', 85, 0, 0, 1),
(188, 'GBS', 'SPT', 79, 0, 0.4, 0.6),
(189, 'WDKG', 'JRK', 49, 0, 0, 1),
(190, 'WDKG', 'HRG', 3000, 1, 0, 0),
(191, 'WDKG', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(192, 'WDKG', 'PKR', 80, 0, 0.33333333333333, 0.66666666666667),
(193, 'WDKG', 'SPT', 70, 0, 1, 0),
(194, 'WDKGM', 'JRK', 45, 0, 0, 1),
(195, 'WDKGM', 'HRG', 15000, 1, 0, 0),
(196, 'WDKGM', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(197, 'WDKGM', 'PKR', 85, 0, 0, 1),
(198, 'WDKGM', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(199, 'PNTN', 'JRK', 91, 0, 0, 1),
(200, 'PNTN', 'HRG', 5000, 1, 0, 0),
(201, 'PNTN', 'FSL', 60, 0.5, 0.5, 0),
(202, 'PNTN', 'PKR', 70, 0, 1, 0),
(203, 'PNTN', 'SPT', 85, 0, 0, 1),
(204, 'CNDM', 'JRK', 56, 0, 0, 1),
(205, 'CNDM', 'HRG', 5000, 1, 0, 0),
(206, 'CNDM', 'FSL', 50, 1, 0, 0),
(207, 'CNDM', 'PKR', 55, 0.75, 0.25, 0),
(208, 'CNDM', 'SPT', 80, 0, 0.33333333333333, 0.66666666666667),
(209, 'MKI', 'JRK', 67, 0, 0, 1),
(210, 'MKI', 'HRG', 4000, 1, 0, 0),
(211, 'MKI', 'FSL', 70, 0, 1, 0),
(212, 'CNDM', 'PKR', 60, 0.5, 0.5, 0),
(213, 'CNDM', 'SPT', 70, 0, 1, 0),
(214, 'SKLT', 'JRK', 71, 0, 0, 1),
(215, 'SKLT', 'HRG', 10000, 1, 0, 0),
(216, 'SKLT', 'FSL', 77, 0, 0.53333333333333, 0.46666666666667),
(217, 'SKLT', 'PKR', 70, 0, 1, 0),
(218, 'SKLT', 'SPT', 90, 0, 0, 1),
(219, 'UMBL', 'JRK', 24, 0.15384615384615, 0.84615384615385, 0),
(220, 'UMBL', 'HRG', 0, 1, 0, 0),
(221, 'UMBL', 'FSL', 70, 0, 1, 0),
(222, 'UMBL', 'PKR', 30, 1, 0, 0),
(223, 'UMBL', 'SPT', 20, 1, 0, 0),
(224, 'CECP', 'JRK', 40, 0, 0, 1),
(225, 'CECP', 'HRG', 35000, 0, 0.75, 0.25),
(226, 'CECP', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(227, 'CECP', 'PKR', 60, 0.5, 0.5, 0),
(228, 'CECP', 'SPT', 80, 0, 0.33333333333333, 0.66666666666667),
(229, 'EMBM', 'JRK', 46, 0, 0, 1),
(230, 'EMBM', 'HRG', 5000, 1, 0, 0),
(231, 'EMBM', 'FSL', 50, 1, 0, 0),
(232, 'EMBM', 'PKR', 30, 1, 0, 0),
(233, 'EMBM', 'SPT', 80, 0, 0.33333333333333, 0.66666666666667),
(234, 'BKTS', 'JRK', 45, 0, 0, 1),
(235, 'BKTS', 'HRG', 10000, 1, 0, 0),
(236, 'BKTS', 'FSL', 70, 0, 1, 0),
(237, 'BKTS', 'PKR', 40, 1, 0, 0),
(238, 'BKTS', 'SPT', 70, 0, 1, 0),
(239, 'OWKS', 'JRK', 44, 0, 0, 1),
(240, 'OWKS', 'HRG', 5000, 1, 0, 0),
(241, 'OWKS', 'FSL', 40, 1, 0, 0),
(242, 'OWKS', 'PKR', 30, 1, 0, 0),
(243, 'OWKS', 'SPT', 65, 0.25, 0.75, 0),
(244, 'UMBS', 'JRK', 26, 0, 1, 0),
(245, 'UMBS', 'HRG', 10000, 1, 0, 0),
(246, 'UMBS', 'FSL', 85, 0, 0, 1),
(247, 'UMBS', 'PKR', 80, 0, 0.33333333333333, 0.66666666666667),
(248, 'UMBS', 'SPT', 85, 0, 0, 1),
(249, 'CNDP', 'JRK', 48, 0, 0, 1),
(250, 'CNDP', 'HRG', 50000, 0, 0, 1),
(251, 'CNDP', 'FSL', 65, 0.25, 0.75, 0),
(252, 'CNDP', 'PKR', 70, 0, 1, 0),
(253, 'CNDP', 'SPT', 85, 0, 0, 1),
(254, 'RWJB', 'JRK', 42, 0, 0, 1),
(255, 'RWJB', 'HRG', 0, 1, 0, 0),
(256, 'RWJB', 'FSL', 50, 1, 0, 0),
(257, 'RWJB', 'PKR', 65, 0.25, 0.75, 0),
(258, 'RWJB', 'SPT', 75, 0, 0.66666666666667, 0.33333333333333),
(259, 'RVKP', 'JRK', 24, 0.15384615384615, 0.84615384615385, 0),
(260, 'RVKP', 'HRG', 50000, 0, 0, 1),
(261, 'RVKP', 'FSL', 85, 0, 0, 1),
(262, 'RVKP', 'PKR', 80, 0, 0.33333333333333, 0.66666666666667),
(263, 'RVKP', 'SPT', 85, 0, 0, 1),
(264, 'CNDSW', 'JRK', 50, 0, 0, 1),
(265, 'CNDSW', 'HRG', 50000, 0, 0, 1),
(266, 'CNDSW', 'FSL', 65, 0.25, 0.75, 0),
(267, 'CNDSW', 'PKR', 70, 0, 1, 0),
(268, 'CNDSW', 'SPT', 85, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria_fuzzy`
--
ALTER TABLE `kriteria_fuzzy`
  ADD PRIMARY KEY (`id_kriteria_fuzzy`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `nilai_fuzzy`
--
ALTER TABLE `nilai_fuzzy`
  ADD PRIMARY KEY (`id_nilai_fuzzy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_fuzzy`
--
ALTER TABLE `nilai_fuzzy`
  MODIFY `id_nilai_fuzzy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
