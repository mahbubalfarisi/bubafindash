-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 12:23 PM
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
-- Table structure for table `mandiris`
--

CREATE TABLE `mandiris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` float NOT NULL,
  `debit` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mandiris`
--

INSERT INTO `mandiris` (`id`, `date`, `description`, `credit`, `debit`, `created_at`, `updated_at`) VALUES
(1, '2019-04-28', 'Transfer from Ibu', 200000, 0, '2019-05-09 03:07:15', '2019-05-09 03:07:15'),
(2, '2019-04-28', 'Withdrawal', 0, 100000, '2019-05-09 03:09:47', '2019-05-09 03:09:47'),
(3, '2019-04-30', 'Payroll', 2807900, 0, '2019-05-09 03:10:34', '2019-05-09 03:10:34'),
(4, '2019-04-30', 'Withdrawal', 0, 100000, '2019-05-09 03:10:56', '2019-05-09 03:10:56'),
(5, '2019-04-30', 'Transfer Fee', 0, 6500, '2019-05-09 03:11:42', '2019-05-09 03:11:42'),
(6, '2019-04-30', 'Transfer to BTPN Jenius', 0, 1200000, '2019-05-09 03:12:27', '2019-05-09 03:12:27'),
(7, '2019-04-30', 'Adiminstration Fee', 0, 3000, '2019-05-09 03:12:51', '2019-05-09 03:12:51'),
(8, '2019-04-30', 'Interest', 6.57, 0, '2019-05-09 03:19:55', '2019-05-09 03:19:55'),
(9, '2019-05-01', 'Withdrawal', 0, 100000, '2019-05-09 03:20:24', '2019-05-09 03:20:24'),
(10, '2019-05-03', 'Withdrawal', 0, 100000, '2019-05-09 03:20:47', '2019-05-09 03:20:47'),
(11, '2019-05-04', 'Withdrawal', 0, 100000, '2019-05-09 03:21:20', '2019-05-09 03:21:20'),
(12, '2019-05-06', 'Withdrawal', 0, 100000, '2019-05-09 03:21:37', '2019-05-09 03:21:37'),
(13, '2019-05-06', 'Autodebet to Tabungan Rencana', 0, 100000, '2019-05-09 03:22:05', '2019-05-09 03:22:05'),
(14, '2019-05-07', 'Transfer from Tokopedia', 74838, 0, '2019-05-09 03:22:33', '2019-05-09 03:22:33'),
(15, '2019-05-09', 'Withdrawal', 0, 100000, '2019-05-09 09:58:42', '2019-05-09 09:58:42'),
(20, '2019-05-11', 'Withdrawal', 0, 100000, '2019-05-12 15:36:56', '2019-05-12 15:36:56'),
(21, '2019-05-12', 'Transfer From Bukalapak', 132312, 0, '2019-05-12 15:37:13', '2019-05-12 15:37:13'),
(22, '2019-05-12', 'Transfer from BTPN Jenius', 450000, 0, '2019-05-12 15:37:30', '2019-05-12 15:37:30'),
(23, '2019-05-12', 'Transfer Fee', 0, 6500, '2019-05-12 15:37:56', '2019-05-12 15:37:56'),
(24, '2019-05-12', 'Transfer to Yenni', 0, 1500000, '2019-05-12 15:38:17', '2019-05-12 15:38:17'),
(25, '2019-05-13', 'Transfer from Ibu', 500000, 0, '2019-05-12 20:58:35', '2019-05-12 20:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mandiris`
--
ALTER TABLE `mandiris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mandiris`
--
ALTER TABLE `mandiris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
