-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2023 at 06:33 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int NOT NULL,
  `kode_diagnosa` varchar(100) NOT NULL,
  `user_id` int NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode`, `nama`, `created_at`, `updated_at`) VALUES
('KG-01', 'Jahitan kusut', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-02', 'Jahitan kendor', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-03', 'Benang mudah putus', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-04', 'Jahitan loncat', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-05', 'Jahitan tidak mengait', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-06', 'Benang mudah lepas', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-07', 'Bahan tidak jalan', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-08', 'Jalan tidak stabil', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-09', 'Bahan rusak', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-10', 'Suara berisik', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-11', 'Sulit memasukkan kain', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-12', 'Jarum patah', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-13', 'Jahitan tidak rapi', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KG-14', 'Sulit menusuk kain', '2023-07-17 06:32:03', '2023-07-17 06:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int NOT NULL,
  `kode_diagnosa` varchar(100) NOT NULL,
  `kode_kerusakan` varchar(10) NOT NULL,
  `nama_kerusakan` varchar(50) NOT NULL,
  `solusi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `solusi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kode`, `nama`, `solusi`, `created_at`, `updated_at`) VALUES
('KK-01', 'Tension kendor', 'Atur tension ke angka normal, yaitu antara 3-5', '2023-07-17 06:32:02', '2023-07-17 06:32:02'),
('KK-02', 'Tension kencang', 'Atur tension ke angka normal, yaitu antara 3-5', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KK-03', 'Jarum bengkok dan terbalik', 'Ganti jarum dengan yang baru dan bagus', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KK-04', 'Jarum tumpul', 'Ganti jarum dengan yang baru dan bagus', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KK-05', 'Gigi tumpul', 'Ganti gigi dan pastikan tidak ada yang terlepas atau longgar', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
('KK-06', 'Gigi rusak', 'Bersihkan dari debu dan percahan kain, jika masih error ganti gigi', '2023-07-17 06:32:03', '2023-07-17 06:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` int NOT NULL,
  `kode_kerusakan` varchar(10) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `kode_kerusakan`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(1, 'KK-01', 'KG-01', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(2, 'KK-01', 'KG-02', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(3, 'KK-01', 'KG-06', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(4, 'KK-02', 'KG-03', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(5, 'KK-02', 'KG-04', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(6, 'KK-02', 'KG-10', '2023-07-17 06:32:03', '2023-07-17 06:32:03'),
(7, 'KK-02', 'KG-11', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(8, 'KK-03', 'KG-04', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(9, 'KK-03', 'KG-05', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(10, 'KK-03', 'KG-12', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(11, 'KK-03', 'KG-13', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(12, 'KK-04', 'KG-04', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(13, 'KK-04', 'KG-09', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(14, 'KK-04', 'KG-14', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(15, 'KK-05', 'KG-07', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(16, 'KK-05', 'KG-09', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(17, 'KK-05', 'KG-10', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(18, 'KK-06', 'KG-07', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(19, 'KK-06', 'KG-08', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(20, 'KK-06', 'KG-10', '2023-07-17 06:32:04', '2023-07-17 06:32:04'),
(21, 'KK-06', 'KG-13', '2023-07-17 06:32:04', '2023-07-17 06:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('Admin','User') NOT NULL DEFAULT 'User',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Hd3YzohLZafjfH1RaYojW.eI5P8RIUCC4GcZE6cfMqIifbjd9msm2', 'Admin', '2023-07-17 06:32:02', '2023-07-17 06:32:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_diagnosa` (`kode_diagnosa`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_diagnosa` (`kode_diagnosa`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kerusakan` (`kode_kerusakan`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode`);

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`kode_diagnosa`) REFERENCES `diagnosa` (`kode_diagnosa`);

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_ibfk_1` FOREIGN KEY (`kode_kerusakan`) REFERENCES `kerusakan` (`kode`),
  ADD CONSTRAINT `pengetahuan_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
