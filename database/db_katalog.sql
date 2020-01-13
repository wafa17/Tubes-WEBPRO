-- -- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: Apr 20, 2019 at 15:51 AM
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_katalog`
--

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
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`no_katalog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `katalog`
  MODIFY `no_katalog` int(50) NOT NULL AUTO_INCREMENT;

--
-- Dumping data for table `jurusan`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
