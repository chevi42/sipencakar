-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 10:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsipencakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama`, `foto`, `akses`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin.png', 'Administrator'),
(2, 'hrd@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Nandi irpan Supandi', 'default.png', 'HRD'),
(26, 'bagas.fajar82@yahoo.co.id', '21232f297a57a5a743894a0e4a801fc3', 'bagas fajar j', 'default.png', 'Pelamar'),
(27, 'nandi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'nandi', 'default.png', 'Pelamar');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(30) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `nilai1`, `nilai2`, `nilai3`, `nilai4`) VALUES
(1, 'Amat Baik', 1, 1, 2, 4),
(2, 'Baik', 3, 2, 3, 3),
(3, 'Cukup', 1, 3, 3, 2),
(4, 'Kurang', 4, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_psikotest`
--

CREATE TABLE `hasil_psikotest` (
  `id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL DEFAULT 0,
  `nilai_akumulasi` double NOT NULL DEFAULT 0,
  `alternatif_grade` char(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_psikotest`
--

INSERT INTO `hasil_psikotest` (`id`, `id_pelamar`, `id_lowongan`, `nilai_akumulasi`, `alternatif_grade`, `status`) VALUES
(1, 4, 4, 30, 'Amat Baik', 'LULUS TEST');

-- --------------------------------------------------------

--
-- Table structure for table `hrd`
--

CREATE TABLE `hrd` (
  `id_hrd` int(11) NOT NULL,
  `nik` varchar(50) CHARACTER SET utf32 NOT NULL DEFAULT '',
  `nama` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `jenis_kelamin` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf32 DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrd`
--

INSERT INTO `hrd` (`id_hrd`, `nik`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(1, '18110047', 'Nandi irpan Supandi', 'L', 'Bojong Buah', '123456', 'admin@admin.com'),
(4, 'K123', 'Bagas Fajar', 'L', 'Jl. Bojong kunci Rt 01Rw 03', '123456', 'admin@admin.com'),
(5, '12313', 'ABCD', 'L', '-', '123456', 'abcd@yahoo.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL,
  `keterangan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `keterangan`) VALUES
(1, 'C1', 3, 'Apakah jenis test sudah sesuai untuk pelamar'),
(2, 'C2', 3, 'Saya mengetahui bahwa dalam pelaksanaan proses rekrutmen perusahaan mengumumkan melalui media massa'),
(3, 'C3', 3, 'Perekrutan karyawan dilaksanakan untuk mengisi jabatan yang kosong.'),
(4, 'C4', 3, 'Pelamar mengikuti test online yang telah disiapkan ?'),
(5, 'C5', 3, 'Pelamar melakukan tes wawancara'),
(6, 'C6', 3, 'Pelamar mempunyai catatan kesehatan yang baik.'),
(7, 'C7', 3, 'Pelamar harus mempunyai pengalaman kerja minimal 1 tahun'),
(8, 'C8', 3, 'Persyaratan prosedur rekrutmen di kantor ini suda cukup jelas.'),
(9, 'C9', 3, 'Pewawancara dapat memahami persyaratan jabatan yang dibutuhkan'),
(10, 'C10', 3, 'Keputusan penerimaan suda sesuai dengan persyaratan yang ada');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `lowongan`, `status`) VALUES
(1, 'General  Manager', 0),
(2, 'IT', 0),
(6, 'Kasir', 1),
(11, 'IT Support', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `nilai_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_admin`, `id_kriteria`, `id_pelamar`, `id_periode`, `nilai_karyawan`) VALUES
(1, 1, 1, 3, 1, 1),
(2, 1, 2, 3, 1, 2),
(3, 1, 3, 3, 1, 4),
(4, 1, 4, 3, 1, 3),
(5, 1, 5, 3, 1, 1),
(6, 1, 6, 3, 1, 2),
(7, 1, 7, 3, 1, 3),
(8, 1, 8, 3, 1, 4),
(9, 1, 9, 3, 1, 3),
(10, 1, 10, 3, 1, 3),
(11, 1, 1, 1, 1, 1),
(12, 1, 2, 1, 1, 3),
(13, 1, 3, 1, 1, 2),
(14, 1, 4, 1, 1, 1),
(15, 1, 5, 1, 1, 1),
(16, 1, 6, 1, 1, 4),
(17, 1, 7, 1, 1, 3),
(18, 1, 8, 1, 1, 2),
(19, 1, 9, 1, 1, 1),
(20, 1, 10, 1, 1, 2),
(21, 1, 1, 4, 1, 1),
(22, 1, 2, 4, 1, 2),
(23, 1, 3, 4, 1, 3),
(24, 1, 4, 4, 1, 4),
(25, 1, 5, 4, 1, 1),
(26, 1, 6, 4, 1, 2),
(27, 1, 7, 4, 1, 2),
(28, 1, 8, 4, 1, 4),
(29, 1, 9, 4, 1, 3),
(30, 1, 10, 4, 1, 2),
(31, 1, 1, 5, 1, 2),
(32, 1, 2, 5, 1, 3),
(33, 1, 3, 5, 1, 4),
(34, 1, 4, 5, 1, 3),
(35, 1, 5, 5, 1, 2),
(36, 1, 6, 5, 1, 3),
(37, 1, 7, 5, 1, 4),
(38, 1, 8, 5, 1, 3),
(39, 1, 9, 5, 1, 2),
(40, 1, 10, 5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jenis_pelamar` varchar(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_lowongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `nama_pelamar`, `nik`, `jenis_pelamar`, `alamat`, `no_hp`, `email`, `id_lowongan`) VALUES
(1, 'Siti Fatimah', '18110030', 'P', 'Kp. Cilampeni Rt 01 Rw 06 Ds. CIlampeni Kec. Katapang Kab. Bandung', '098975465', 'sitiftmhhhhhh@gmail.com', 1),
(3, 'nandi', '18110029', 'L', 'kp. cimahi leuwigajah', '09877543', 'nandi@gmail.com', 2),
(4, 'bagas fajar j', 'K123', 'L', 'Jl. Bojong kunci Rt 01Rw 03', '123456', 'bagas.fajar82@yahoo.co.id', 4);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `normalisasi` double NOT NULL,
  `terbobot` double NOT NULL,
  `nilai_akhir` double NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_nilai`, `id_alternatif`, `nilai`, `normalisasi`, `terbobot`, `nilai_akhir`, `rank`) VALUES
(41, 11, 1, 1, 0.192, 0.576, 0.308, 2),
(42, 12, 1, 2, 0.417, 1.251, 0.308, 2),
(43, 13, 1, 1, 0.209, 0.627, 0.308, 2),
(44, 14, 1, 1, 0.192, 0.576, 0.308, 2),
(45, 15, 1, 1, 0.192, 0.576, 0.308, 2),
(46, 16, 1, 4, 0.73, 2.19, 0.308, 2),
(47, 17, 1, 2, 0.417, 1.251, 0.308, 2),
(48, 18, 1, 1, 0.209, 0.627, 0.308, 2),
(49, 19, 1, 1, 0.192, 0.576, 0.308, 2),
(50, 20, 1, 1, 0.209, 0.627, 0.308, 2),
(51, 11, 2, 3, 0.577, 1.731, 0.662, 2),
(52, 12, 2, 3, 0.626, 1.878, 0.662, 2),
(53, 13, 2, 2, 0.417, 1.251, 0.662, 2),
(54, 14, 2, 3, 0.577, 1.731, 0.662, 2),
(55, 15, 2, 3, 0.577, 1.731, 0.662, 2),
(56, 16, 2, 3, 0.548, 1.644, 0.662, 2),
(57, 17, 2, 3, 0.626, 1.878, 0.662, 2),
(58, 18, 2, 2, 0.417, 1.251, 0.662, 2),
(59, 19, 2, 3, 0.577, 1.731, 0.662, 2),
(60, 20, 2, 2, 0.417, 1.251, 0.662, 2),
(61, 11, 3, 1, 0.192, 0.576, 0.439, 2),
(62, 12, 3, 3, 0.626, 1.878, 0.439, 2),
(63, 13, 3, 3, 0.626, 1.878, 0.439, 2),
(64, 14, 3, 1, 0.192, 0.576, 0.439, 2),
(65, 15, 3, 1, 0.192, 0.576, 0.439, 2),
(66, 16, 3, 2, 0.365, 1.095, 0.439, 2),
(67, 17, 3, 3, 0.626, 1.878, 0.439, 2),
(68, 18, 3, 3, 0.626, 1.878, 0.439, 2),
(69, 19, 3, 1, 0.192, 0.576, 0.439, 2),
(70, 20, 3, 3, 0.626, 1.878, 0.439, 2),
(71, 11, 4, 4, 0.77, 2.31, 0.629, 2),
(72, 12, 4, 1, 0.209, 0.627, 0.629, 2),
(73, 13, 4, 3, 0.626, 1.878, 0.629, 2),
(74, 14, 4, 4, 0.77, 2.31, 0.629, 2),
(75, 15, 4, 4, 0.77, 2.31, 0.629, 2),
(76, 16, 4, 1, 0.183, 0.549, 0.629, 2),
(77, 17, 4, 1, 0.209, 0.627, 0.629, 2),
(78, 18, 4, 3, 0.626, 1.878, 0.629, 2),
(79, 19, 4, 4, 0.77, 2.31, 0.629, 2),
(80, 20, 4, 3, 0.626, 1.878, 0.629, 2),
(81, 1, 1, 1, 0.192, 0.576, 0.446, 2),
(82, 2, 1, 1, 0.209, 0.627, 0.446, 2),
(83, 3, 1, 4, 0.73, 2.19, 0.446, 2),
(84, 4, 1, 2, 0.417, 1.251, 0.446, 2),
(85, 5, 1, 1, 0.192, 0.576, 0.446, 2),
(86, 6, 1, 1, 0.209, 0.627, 0.446, 2),
(87, 7, 1, 2, 0.417, 1.251, 0.446, 2),
(88, 8, 1, 4, 0.73, 2.19, 0.446, 2),
(89, 9, 1, 2, 0.417, 1.251, 0.446, 2),
(90, 10, 1, 2, 0.417, 1.251, 0.446, 2),
(91, 1, 2, 3, 0.577, 1.731, 0.708, 2),
(92, 2, 2, 2, 0.417, 1.251, 0.708, 2),
(93, 3, 2, 3, 0.548, 1.644, 0.708, 2),
(94, 4, 2, 3, 0.626, 1.878, 0.708, 2),
(95, 5, 2, 3, 0.577, 1.731, 0.708, 2),
(96, 6, 2, 2, 0.417, 1.251, 0.708, 2),
(97, 7, 2, 3, 0.626, 1.878, 0.708, 2),
(98, 8, 2, 3, 0.548, 1.644, 0.708, 2),
(99, 9, 2, 3, 0.626, 1.878, 0.708, 2),
(100, 10, 2, 3, 0.626, 1.878, 0.708, 2),
(101, 1, 3, 1, 0.192, 0.576, 0.521, 2),
(102, 2, 3, 3, 0.626, 1.878, 0.521, 2),
(103, 3, 3, 2, 0.365, 1.095, 0.521, 2),
(104, 4, 3, 3, 0.626, 1.878, 0.521, 2),
(105, 5, 3, 1, 0.192, 0.576, 0.521, 2),
(106, 6, 3, 3, 0.626, 1.878, 0.521, 2),
(107, 7, 3, 3, 0.626, 1.878, 0.521, 2),
(108, 8, 3, 2, 0.365, 1.095, 0.521, 2),
(109, 9, 3, 3, 0.626, 1.878, 0.521, 2),
(110, 10, 3, 3, 0.626, 1.878, 0.521, 2),
(111, 1, 4, 4, 0.77, 2.31, 0.47, 2),
(112, 2, 4, 3, 0.626, 1.878, 0.47, 2),
(113, 3, 4, 1, 0.183, 0.549, 0.47, 2),
(114, 4, 4, 1, 0.209, 0.627, 0.47, 2),
(115, 5, 4, 4, 0.77, 2.31, 0.47, 2),
(116, 6, 4, 3, 0.626, 1.878, 0.47, 2),
(117, 7, 4, 1, 0.209, 0.627, 0.47, 2),
(118, 8, 4, 1, 0.183, 0.549, 0.47, 2),
(119, 9, 4, 1, 0.209, 0.627, 0.47, 2),
(120, 10, 4, 1, 0.209, 0.627, 0.47, 2),
(121, 31, 1, 1, 0.209, 0.627, 0.485, 3),
(122, 32, 1, 2, 0.417, 1.251, 0.485, 3),
(123, 33, 1, 4, 0.73, 2.19, 0.485, 3),
(124, 34, 1, 2, 0.417, 1.251, 0.485, 3),
(125, 35, 1, 1, 0.209, 0.627, 0.485, 3),
(126, 36, 1, 2, 0.417, 1.251, 0.485, 3),
(127, 37, 1, 4, 0.73, 2.19, 0.485, 3),
(128, 38, 1, 2, 0.417, 1.251, 0.485, 3),
(129, 39, 1, 1, 0.209, 0.627, 0.485, 3),
(130, 40, 1, 1, 0.209, 0.627, 0.485, 3),
(131, 31, 2, 2, 0.417, 1.251, 0.685, 3),
(132, 32, 2, 3, 0.626, 1.878, 0.685, 3),
(133, 33, 2, 3, 0.548, 1.644, 0.685, 3),
(134, 34, 2, 3, 0.626, 1.878, 0.685, 3),
(135, 35, 2, 2, 0.417, 1.251, 0.685, 3),
(136, 36, 2, 3, 0.626, 1.878, 0.685, 3),
(137, 37, 2, 3, 0.548, 1.644, 0.685, 3),
(138, 38, 2, 3, 0.626, 1.878, 0.685, 3),
(139, 39, 2, 2, 0.417, 1.251, 0.685, 3),
(140, 40, 2, 2, 0.417, 1.251, 0.685, 3),
(141, 31, 3, 3, 0.626, 1.878, 0.7, 3),
(142, 32, 3, 3, 0.626, 1.878, 0.7, 3),
(143, 33, 3, 2, 0.365, 1.095, 0.7, 3),
(144, 34, 3, 3, 0.626, 1.878, 0.7, 3),
(145, 35, 3, 3, 0.626, 1.878, 0.7, 3),
(146, 36, 3, 3, 0.626, 1.878, 0.7, 3),
(147, 37, 3, 2, 0.365, 1.095, 0.7, 3),
(148, 38, 3, 3, 0.626, 1.878, 0.7, 3),
(149, 39, 3, 3, 0.626, 1.878, 0.7, 3),
(150, 40, 3, 3, 0.626, 1.878, 0.7, 3),
(151, 31, 4, 3, 0.626, 1.878, 0.423, 3),
(152, 32, 4, 1, 0.209, 0.627, 0.423, 3),
(153, 33, 4, 1, 0.183, 0.549, 0.423, 3),
(154, 34, 4, 1, 0.209, 0.627, 0.423, 3),
(155, 35, 4, 3, 0.626, 1.878, 0.423, 3),
(156, 36, 4, 1, 0.209, 0.627, 0.423, 3),
(157, 37, 4, 1, 0.183, 0.549, 0.423, 3),
(158, 38, 4, 1, 0.209, 0.627, 0.423, 3),
(159, 39, 4, 3, 0.626, 1.878, 0.423, 3),
(160, 40, 4, 3, 0.626, 1.878, 0.423, 3);

-- --------------------------------------------------------

--
-- Table structure for table `soal_psikotest`
--

CREATE TABLE `soal_psikotest` (
  `id_soal` int(1) NOT NULL,
  `soal` varchar(200) NOT NULL DEFAULT '0',
  `bobot` varchar(200) NOT NULL DEFAULT '0',
  `jawaban` varchar(200) NOT NULL DEFAULT '0',
  `id_option1` char(1) NOT NULL DEFAULT 'A',
  `option1` varchar(50) NOT NULL,
  `id_option2` char(1) NOT NULL DEFAULT 'B',
  `option2` varchar(200) NOT NULL,
  `id_option3` char(1) NOT NULL DEFAULT 'C',
  `option3` varchar(200) NOT NULL,
  `id_option4` char(1) NOT NULL DEFAULT 'D',
  `option4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal_psikotest`
--

INSERT INTO `soal_psikotest` (`id_soal`, `soal`, `bobot`, `jawaban`, `id_option1`, `option1`, `id_option2`, `option2`, `id_option3`, `option3`, `id_option4`, `option4`) VALUES
(1, 'Jika 1 + 4 =5, 2 + 5 =12, dan 3 + 6 =21 maka 8 + 11 =?', '3', 'A', 'A', '96', 'B', '-', 'C', '-', 'D', '-'),
(2, 'jari dengan tangan ibarat daun dengan ?\r\n', '3', 'A', 'A', 'ranting', 'B', '-', 'C', '-', 'D', '-'),
(3, 'setengah dari seperempat dari 4000 adalah?\r\n', '3', 'A', 'A', '500', 'B', '-', 'C', '-', 'D', '-'),
(4, 'berapa 20% dari 30.000\r\n', '3', 'A', 'A', '6000', 'B', '-', 'C', '-', 'D', '-'),
(5, '4 - 7 - 12 - 15 - 20 =?\r\n', '3', 'A', 'A', '23', 'B', '-', 'C', '-', 'D', '-'),
(6, '(persamaan kata) insomnia =?\r\n', '3', 'A', 'A', 'Tidak bisa tidur', 'B', '-', 'C', '-', 'D', '-'),
(7, 'bongsor = ?\r\n', '3', 'A', 'A', 'kerdil', 'B', '-', 'C', '-', 'D', '-'),
(8, 'diketahui balok dengan ukuran (12 x 10 x 8) berapa luas balok seluruhnya\r\n', '3', 'A', 'A', '592', 'B', '-', 'C', '-', 'D', '-'),
(9, 'anda ikut berlomba. Anda menyalip orang di posisi no 2. berapa posisi sekrang', '3', 'A', 'A', '2', 'B', '-', 'C', '-', 'D', '-'),
(10, 'hari apa kemarin kalau lusa hari kamis\r\n', '3', 'A', 'A', 'senin', 'B', '-', 'C', '-', 'D', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `hasil_psikotest`
--
ALTER TABLE `hasil_psikotest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrd`
--
ALTER TABLE `hrd`
  ADD PRIMARY KEY (`id_hrd`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`) USING BTREE;

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`,`id_lowongan`) USING BTREE;

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `soal_psikotest`
--
ALTER TABLE `soal_psikotest`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hasil_psikotest`
--
ALTER TABLE `hasil_psikotest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrd`
--
ALTER TABLE `hrd`
  MODIFY `id_hrd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `soal_psikotest`
--
ALTER TABLE `soal_psikotest`
  MODIFY `id_soal` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
