-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 08:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f80ada3f7815c0c8961233e4cc49f0fa');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(30) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `gambar`) VALUES
(1, 'd&f Jaket pria Bomber with mustard strip - Navy', 189900, 10, 'https://id-test-11.slatic.net/p/11a306f5f738b8c5d78299614846ddfe.jpg_400x400q90.jpg_.webp'),
(2, 'M.RDJ.JAKET - SANDWASH - JAKET SANDWASH BLACK ', 88000, 10, 'https://id-test-11.slatic.net/p/ab54716cbf50a03d4c26f2732e4f06b3.jpg_400x400q90.jpg_.webp'),
(3, '17SEVEN Jaket Bomber Polos Pria Terpopuler', 149000, 10, 'https://id-test-11.slatic.net/p/a5927313930f44fb5c6eb221fb7abfa0.jpg_400x400q90.jpg_.webp'),
(4, 'JAKET PRIA BAHAN JN IMPORT Mala punye', 126000, 10, 'https://id-test-11.slatic.net/p/836887c2898abaa92b1b9de678c2b19b.jpg_400x400q90.jpg_.webp'),
(5, 'Jaket Jeans Denim Hitam Pekat Pria ukuran M-XXL', 86100, 10, 'https://id-live-01.slatic.net/original/2cb6d776b23edc70a80e04e8b0f5c579.jpg_400x400q90.jpg_.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'adilfarizki', 'adil@gmail.com', '$2y$10$PC9kJK6gu9jXXM.tQ6Hw4u0rjerrj1cttFW6FHaJgRX8vv1poO14e'),
(2, 'LarasPradita', 'LarasPradita@gmail.com', '$2y$10$XB.17wfcYit.g.l42YZL9ufyvHaWGDhopPh3aRk17tKu6wJ2Iam2W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
