-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 05:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_user`, `nama`, `email`, `alamat`) VALUES
(30, 'Chandra', 'exchan3@gmail.com', 'jakarta'),
(31, 'karsum', 'karsum86@gmail.com', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `jawaban`, `aktif`) VALUES
(9, 'User atau Operator Komputer dalam Istilah Komputer disebut dengan..?', 'Brainware', 'Fireware', 'Software', 'Hardware', 'a', 'Brainware', 'Y'),
(10, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', 'Central Processing Unit', 'Y'),
(11, 'Jaringan dari elemen-elemen yang saling berhubungan adalah ?', 'pentium ', 'instal', 'system', 'data', 'c', 'System', 'Y'),
(12, 'Berikut merupakan elemen-elemen sistem komputer kecuali...?', 'Fireware', 'Brainware', 'Software', 'Hadware', 'a', 'Fireware', 'Y'),
(13, 'Program yang berisi perinta-perintah / perangkat lunak disebut...?', 'Pentium', 'Brainware', 'Hardware', 'software', 'd', 'Software', 'Y'),
(14, 'Proses memasukkan dan memasang software ke dalam komputer disebut...?', 'data', 'instal', 'loading', 'online', 'b', 'Instal', 'Y'),
(15, 'Berikut yang bukan termasuk alat output adalah...?', 'keyboard', 'speaker', 'monitor', 'printer', 'a', 'Keyboard', 'Y'),
(16, 'Tanda panah (tanda lain) yang mewakili posisi gerakan mouse disebut dengan...?', 'kursor', 'mouse', 'pointer', 'printer', 'c', 'Pointer', 'Y'),
(18, 'USB merupakan singkatan dari', 'universal serial buss', 'unit serial bus', 'Universal Serial Bus', 'Unit serial booster', 'c', 'Universal Serial Bus', 'Y'),
(19, 'Salah satu perangkat Lunak pengolah kata adalah', 'Ms.Word', 'Winamp', 'CC cleaner', 'Jet audio', 'a', 'Ms.Word', 'Y'),
(20, 'Program yang digunakan untuk disain gambar adalah..?', 'Ms.Exel', 'Media Player', 'Power Point', 'Photoshop', 'd', 'Photoshop', 'N'),
(21, 'Yang bukan termasuk Hadware / Perangkat Keras adalah..', 'CPU', 'Keyboard', 'Ms.Office', 'Printer', 'c', 'Ms.Office', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
