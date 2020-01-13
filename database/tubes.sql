-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 05:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nama_instutisi` varchar(30) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`email`, `password`, `nama_lengkap`, `nama_instutisi`, `no_hp`) VALUES
('wafazahida@gmail.com', '123456', 'wafa', 'ada', 1234567),
('wafazahida@gmail.com', 'adaaaa', 'wafa', 'ada', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
('1', 'wafazahida', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `no_katalog` int(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `judul_katalog` varchar(500) NOT NULL,
  `pengarang` varchar(500) NOT NULL,
  `penerbit` varchar(500) NOT NULL,
  `tahunterbit` year(4) NOT NULL,
  `subjek` varchar(500) NOT NULL,
  `jenis_katalog` varchar(500) NOT NULL,
  `jml_koleksi` int(30) NOT NULL,
  `lokasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`no_katalog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `no_katalog` int(50) NOT NULL AUTO_INCREMENT;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`judul_katalog`, `pengarang`, `penerbit`, `tahunterbit`, `subjek`, `jenis_katalog`, `jml_koleksi`, `lokasi`) VALUES
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    
    ('CANTIK ITU LUKA', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'novel', 'fiksi', 5, 'Gedung FKB Lantai 4'),
    ('CANTIK ITU LUKA', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'novel', 'fiksi', 5, 'Gedung FKB Lantai 4'),
    ('CANTIK ITU LUKA', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'novel', 'fiksi', 5, 'Gedung FKB Lantai 4'),
    ('CANTIK ITU LUKA', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'novel', 'fiksi', 5, 'Gedung FKB Lantai 4'),
    ('CANTIK ITU LUKA', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 'novel', 'fiksi', 5, 'Gedung FKB Lantai 4'),

    ('BUMI DAN ALIEN', 'Sultantantan', 'Coretan Pena', '2018', 'novel', 'fiksi', 3, 'Gedung FIT Lantai 1'),
    ('BUMI DAN ALIEN', 'Sultantantan', 'Coretan Pena', '2018', 'novel', 'fiksi', 3, 'Gedung FIT Lantai 1'),
    ('BUMI DAN ALIEN', 'Sultantantan', 'Coretan Pena', '2018', 'novel', 'fiksi', 3, 'Gedung FIT Lantai 1'),
    ('BUMI DAN ALIEN', 'Sultantantan', 'Coretan Pena', '2018', 'novel', 'fiksi', 3, 'Gedung FIT Lantai 1'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4'),
    ('ADA APA DENGAN CINTA', 'Melly Goeslaw', 'Musik Jaya', '2002', 'lagu jadul', 'Romansa', 10, 'Gedung FIK Lantai 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
