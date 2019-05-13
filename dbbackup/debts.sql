-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 12:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buba-findash`
--

-- --------------------------------------------------------

--
-- Table structure for table `debts`
--

CREATE TABLE `debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `debts`
--

INSERT INTO `debts` (`id`, `purpose`, `creditor`, `amount`, `remaining`, `created_at`, `updated_at`) VALUES
(10, 'Pinjam', 'Kichan', 200000, 200000, '2019-05-04 12:47:14', '2019-05-04 12:51:14'),
(11, 'Pinjam', 'Kichan', 50000, 50000, '2019-05-04 12:51:31', '2019-05-04 12:51:31'),
(12, 'Pinjam', 'Kichan', 50000, 50000, '2019-05-04 12:51:43', '2019-05-04 12:51:43'),
(13, 'Pinjam', 'Mbah', 30000, 30000, '2019-05-04 12:51:59', '2019-05-04 12:51:59'),
(14, 'Pinjam', 'Cahatfood', 60000, 60000, '2019-05-04 12:52:12', '2019-05-04 12:52:12'),
(15, 'Pinjam', 'Kichan', 180000, 180000, '2019-05-04 12:52:28', '2019-05-04 12:52:28'),
(16, 'Pinjam', 'Kichan', 120000, 120000, '2019-05-04 12:52:43', '2019-05-04 12:52:43'),
(17, 'Pinjam', 'Kichan', 100000, 100000, '2019-05-04 12:53:45', '2019-05-04 12:53:45'),
(18, 'Pinjam', 'Kichan', 330000, 330000, '2019-05-04 12:54:05', '2019-05-04 12:54:05'),
(19, 'Pinjam', 'Kichan', 420000, 420000, '2019-05-04 12:54:23', '2019-05-04 12:54:23'),
(20, 'Pinjam', 'Kichan', 250000, 250000, '2019-05-04 12:54:38', '2019-05-04 12:54:38'),
(21, 'Pinjam', 'Bude Lia', 2000000, 2000000, '2019-05-04 12:54:53', '2019-05-04 12:54:53'),
(22, 'Bayar Minuman', 'Asti', 30000, 30000, '2019-05-04 12:55:25', '2019-05-04 12:55:25'),
(23, 'Pinjam', 'Kichan', 400000, 400000, '2019-05-04 12:56:21', '2019-05-04 12:56:21'),
(25, 'Beli Game Human: Fall Flat', 'Adhly', 116000, 116000, '2019-05-09 09:55:29', '2019-05-09 09:55:29'),
(26, 'Pinjam', 'ATM', 200000, 200000, '2019-05-12 15:31:25', '2019-05-12 15:31:25'),
(27, 'Pinjam', 'There', 250000, 250000, '2019-05-12 15:31:43', '2019-05-12 15:31:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debts`
--
ALTER TABLE `debts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `debts`
--
ALTER TABLE `debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
