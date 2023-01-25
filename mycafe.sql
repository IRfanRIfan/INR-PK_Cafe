-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 02:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_menu`
--

CREATE TABLE `data_menu` (
  `nama_menu` varchar(35) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tersedia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_menu`
--

INSERT INTO `data_menu` (`nama_menu`, `gambar`, `harga`, `tersedia`) VALUES
('', '.jpg', 22222, 1),
('cane', 'cappuccino.jpg', 9000, 1),
('espreso', 'espreso.jpg', 8000, 1),
('lotto', 'latte.jpg', 1000, 0),
('rani', 'rani.jpg', 9000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `id_order` int(11) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `nama_pesanan` varchar(35) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `waktu_pemesanan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pesanan`
--

INSERT INTO `data_pesanan` (`id_order`, `nama_pelanggan`, `nama_pesanan`, `no_meja`, `waktu_pemesanan`) VALUES
(59, 'rani', 'rani', 2, '2023-01-13 02:16:10'),
(61, 'dadi', 'cane', 1, '2023-01-13 02:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_riwayat`
--

CREATE TABLE `data_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `waktu_bayar` datetime DEFAULT NULL,
  `bayaran` int(11) NOT NULL,
  `nama_pesanan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_riwayat`
--

INSERT INTO `data_riwayat` (`id_riwayat`, `id_order`, `nama_pelanggan`, `waktu_bayar`, `bayaran`, `nama_pesanan`) VALUES
(22, 54, 'Rossi', '2023-01-12 15:26:34', 20000, 'Hot Milo'),
(23, 55, 'gani', '2023-01-13 00:11:00', 9, 'Cappuccino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_menu`
--
ALTER TABLE `data_menu`
  ADD PRIMARY KEY (`nama_menu`);

--
-- Indexes for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `no_meja` (`no_meja`),
  ADD KEY `nama_pesanan` (`nama_pesanan`);

--
-- Indexes for table `data_riwayat`
--
ALTER TABLE `data_riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `nama_pesanan` (`nama_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `data_riwayat`
--
ALTER TABLE `data_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD CONSTRAINT `data_pesanan_ibfk_1` FOREIGN KEY (`nama_pesanan`) REFERENCES `data_menu` (`nama_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
