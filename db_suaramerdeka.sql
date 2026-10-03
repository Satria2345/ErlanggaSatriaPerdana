-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2025 at 05:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suaramerdeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  'username' VARCHAR(50) NOT NULL,
  'password' VARCHAR(255) NOT NULL
  `judul` varchar(50) NOT NULL,
  `tanggaluploud` varchar(8) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isiberita` varchar(500) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, 'username', 'pasword', `judul`, `tanggaluploud`, `gambar`, `isiberita`, `kategori`) VALUES
(1, 'Nasi megono', '28/12/20', 'megono.jpg', 'megono adalah makanan khas terkenal di pekalongan terbuat dari nangka muda,dipadukan dengan nasi hangat, tempe mendongan dan tahu', 'kuliner'),
(2, 'lupis', '28/12/20', 'lupis.jpg', 'Lupis Krapyak adalah makanan tradisional khas Pekalongan, khususnya dari Kelurahan Krapyak, yang terkenal dengan tradisi unik Lopis Raksasa saat perayaan Syawalan (hari ke-8 setelah Idul Fitri), melambangkan kemenangan dan kebersamaan dengan membagikan lopis ketan raksasa secara gratis yang disajikan dengan kelapa parut dan sirup gula merah (kinca). Tradisi ini menarik ribuan orang untuk silaturahmi, menikmati lopis raksasa, dan mencari berkah, serta telah diakui sebagai Warisan Budaya Tak Benda', 'kuliner'),
(3, 'soto tauco', '28/12/20', 'soto tauco', 'Soto Tauto adalah soto khas Pekalongan, Jawa Tengah, yang terkenal dengan kuah uniknya karena menggunakan tauco (fermentasi kedelai) sebagai bumbu utama, memberikan rasa gurih dan sedikit manis yang berbeda dari soto lain, biasanya disajikan dengan daging sapi atau ayam, bihun, tauge, dan taburan daun bawang serta bawang goreng, serta sering kali ditambahkan kecap manis dan sambal untuk memperkaya rasa. Nama \"Tauto\" berasal dari gabungan kata \"Tauco\" dan \"Soto\"', 'kuliner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
