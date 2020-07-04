-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 02:07 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(23, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Chandra Winata');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_user`, `nama`, `email`, `password`, `aktif`) VALUES
(2, 'Chandra', 'exchan3', 'akatsuki', 1);

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
  `knc_jawaban` varchar(1) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `jawaban`, `aktif`) VALUES
(9, 'Kemampuan untuk merasakan keadaan emosianal orang lain disebut?', 'Sugesti', 'Opini', 'Motivasi', 'Empati', 'd', 'Empati', 'Y'),
(10, 'Ketentuan tersendiri dari suatu perjanjian, yang salah satu pokok atau pasalnya diperluas atau dibatasi?', 'Klorosal', 'Komosal', 'Klausul', 'Kolosal', 'c', 'Klausul', 'Y'),
(11, 'Persamaan dari kata gelisah, bimbang ?', 'Gundah', 'Galau', 'Bingung', 'Khawatir', 'a', 'Gundah', 'Y'),
(12, 'Bagian Peluru yang meletus apabila terantuk ?', 'Ucis', 'Proyektil', 'Primer', 'Selongsong', 'a', 'Ucis', 'Y'),
(13, 'E-.....(Elektronik peNomoran faktur pajak)', 'KTP', 'Money', 'Nofa', 'Learning', 'c', 'Nofa', 'Y'),
(14, 'salah satu istilah dalam fotografi dimana latar belakang foto menjadi blur?', 'Aperture', 'Bokeh', 'Flash', 'Iso', 'b', 'Bokeh', 'Y'),
(15, 'Berikut yang bukan termasuk alat output adalah...?', 'keyboard', 'speaker', 'monitor', 'printer', 'a', 'keyboard', 'Y'),
(16, 'Tanda panah (tanda lain) yang mewakili posisi gerakan mouse disebut dengan...?', 'kursor', 'mouse', 'pointer', 'printer', 'c', 'pointer', 'Y'),
(18, 'Tindakan pembalasan (terhadap negara yang menyulitkan perdagangan)', 'Retorasi', 'Kolerasi', 'Abstraksi', 'Kondensasi', 'a', 'Retorasi', 'Y'),
(19, 'Salah satu perangkat Lunak pengolah kata adalah', 'Ms.Word', 'Winamp', 'CC cleaner', 'Jet audio', 'a', 'Ms.Word', 'Y'),
(20, 'Program yang digunakan untuk disain gambar adalah..?', 'Ms.Exel', 'Media Player', 'Power Point', 'Photoshop', 'd', 'Photoshop', 'N'),
(21, 'Yang bukan termasuk Hadware / Perangkat Keras adalah..', 'CPU', 'Keyboard', 'Ms.Office', 'Printer', 'c', 'Ms.Office', 'N'),
(765, 'wdqwcqc', 'qwqwc', 'q', 'qwxww', 'exef', 'b', 'qwqwc', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
