-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 03:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `foto_produk` text DEFAULT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `stok_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(13, 'Lenovo Legion 5 Pro Gaming', '16000000', 'Popular_Lenovo_Legion_5_Pro_gaming_laptop_with_RTX_3070_drops_to_US_1099_for_Black_Friday_-_-removebg-preview.png', 'with RTX 3070, Black Friday', '45'),
(14, 'ASUS - ROG Zephyrus G14 14', '27000000', 'ASUS_-_ROG_Zephyrus_G14_14__Gaming_Laptop_-_AMD_Ryzen_9_-_16GB_Memory_-_NVIDIA_GeForce_RTX_2060_-_1TB_SSD_-_Moonlight_White-removebg-preview.png', 'AMD Ryzen 9 - NVIDIA GeForce RTX 2060 - Moonlight White', '45'),
(15, 'Razer Blade 15 Base', '18000000', 'Razer_Blade_15_Base_-_15_6__4K_OLED_Gaming_Laptop_-_Intel_Core_i7_-_NVIDIA_GeForce_RTX_2070_-_512GB_SSD_-_16GB_Memory_-_Mercury_White-removebg-preview.png', 'Intel Core i7 - NVIDIA GeForce RTX 2070 - Mercury White', '45'),
(17, 'Asus’ ROG Zephyrus Duo 15', '30000000', 'Asus’ ROG Zephyrus Duo 15 is a gaming laptop with two screens.png', 'Gaming laptop with two screens', '45'),
(19, 'iGlaze for MacBook Air 13', '20000000', 'Moshi_-_iGlaze_for_MacBook_Air_13__Thunderbolt_3_USB-C__-_Clear-removebg-preview.png', 'Thunderbolt 3/USB-C - Clear', '45');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `status` enum('proses','dikirim','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `name`, `alamat`, `no_hp`, `nama_produk`, `harga_produk`, `subtotal`, `foto_produk`, `status`) VALUES
(19, 'Shakyla Ananda Ramadanti', 'Petamburan 1', '085735362', 'iGlaze for MacBook Air 13', '20000000', '100000000', 'Moshi_-_iGlaze_for_MacBook_Air_13__Thunderbolt_3_USB-C__-_Clear-removebg-preview.png', 'dikirim'),
(20, 'Shakyla Ananda Ramadanti', 'Petamburan 1', '087355245', 'Asus’ ROG Zephyrus Duo 15', '30000000', '150000000', 'Asus’ ROG Zephyrus Duo 15 is a gaming laptop with two screens.png', 'dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `roles` enum('Admin','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `password`, `roles`) VALUES
(1, 'juju', 'Arjuna Prasetya', '123', 'Admin'),
(2, 'kylala', 'Shakyla Ananda Ramadanti', '123', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
