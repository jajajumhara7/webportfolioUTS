-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 08:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(9) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabel Artikel';

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`) VALUES
(1, 'Internet Of Things', 'Internet of things adalah suatu konsep atau program dimana sebuah objek memiliki kemampuan untuk mentransmisikan atau mengirimkan data melalui jaringan tanpa menggunakan bantuan perangkat komputer dan manusia. Internet of things atau sering disebut dengan IoT saat ini mengalami banyak perkembangan...'),
(2, 'Fiber Optic', 'Serat optik adalah saluran transmisi atau sejenis kabel yang terbuat dari kaca atau plastik yang sangat halus dan lebih kecil dari sehelai rambut, dan dapat digunakan untuk mentransmisikan sinyal cahaya dari suatu tempat ke tempat lain. Sumber cahaya yang digunakan biasanya adalah laser atau LED...'),
(3, 'Cisco Router', 'Cisco adalah peralatan utama yang banyak digunakan pada Jaringan Area Luas atau Wide Area Network (WAN). Dengan cisco router, informasi dapat diteruskan ke alamat-alamat yang berjauhan dan berada di jaringan computer yang berlainan. Yang bertujuan untuk dapat meneruskan paket data dari suatu LAN ke LAN lainnya, Cisco router menggunakan tabel dan protocol routing yang berfungsi untuk mengatur lalu lintas data...');

-- --------------------------------------------------------

--
-- Table structure for table `experienced`
--

CREATE TABLE `experienced` (
  `id` int(3) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experienced`
--

INSERT INTO `experienced` (`id`, `judul`, `isi`) VALUES
(3, 'Project Engineer', '-Install & labeling ODP.\r\n\r\n-Termination of Optical Termination Box(OTB) & Closure.\r\n\r\n-Install, Active & Maintenance Multiservice Access Router/Manageble & Unmanageble Switch.\r\n\r\n-Instal, active & maintenance OLT (GPON).\r\n-Instal & maintenance for active device power backup (UPS) & Socket terminal (PDU).\r\n-Doing cable management at wallmounted/close/open rack.\r\n-Determine PON Technology (EPON/GPON).\r\n-Make link budget.\r\n-Migration metro switch Nortel 1Gb/s to Metro‐E switch Huawei 10Gb/s technology.\r\n-Development Metro‐E GPON building, apartement & enterprise.\r\n-Development FTTH & FTTB GPON.\r\n-Integration Switch Metro‐E & Mini OLT GPON.\r\n-Acceptance test procedure site GPON infrastucture.\r\n-Commisioning the GPON infrastructure'),
(4, 'Network Engineer', '-Installation cctv hikvision in toll road.\r\n-Service and maintenance all cctv in Jagorawi toll road.\r\n-Installation and maintenance Virtual Message Sign.\r\n-Maintenance monitoring center at Jasamarga Head Office.\r\n-Material requirements budget submission.\r\n-Data backup.\r\n-Report monthly.'),
(5, 'Field Engineer', '-LAN cable installation.\r\n-Install and setting Ipphone.\r\n-Install and pointing radio cambium.\r\n-Install and setting cctv in office.');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(3) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `judul`, `isi`) VALUES
(1, 'ABOUT', 'Hi, My name is Jaja Jumhara, i\'m currently work as Project Engineer at PT Supra Primatama Nusantara (Biznet) in Jakarta.\r\n\r\nI can work under pressure, i hava a sence of responsibility, ability to work with team mates or individual.\r\n\r\nExperienced in Fiber Technology, IoT system, Install and service Network, and Software Development .');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experienced`
--
ALTER TABLE `experienced`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experienced`
--
ALTER TABLE `experienced`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
