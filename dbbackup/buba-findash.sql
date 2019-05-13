-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 12:21 PM
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
-- Table structure for table `cashes`
--

CREATE TABLE `cashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cashes`
--

INSERT INTO `cashes` (`id`, `date`, `description`, `credit`, `debit`, `created_at`, `updated_at`) VALUES
(3, '2019-04-01', 'Remaining Balance', 435000, 0, '2019-05-11 12:53:31', '2019-05-11 12:53:31'),
(4, '2019-04-01', 'From Ibu', 30000, 0, '2019-05-11 12:53:59', '2019-05-11 12:53:59'),
(5, '2019-04-02', 'GrabBike', 0, 20000, '2019-05-11 12:54:34', '2019-05-11 12:54:34'),
(6, '2019-04-02', 'GrabBike', 0, 22000, '2019-05-11 12:54:56', '2019-05-11 12:54:56'),
(7, '2019-04-02', 'Top-Up OVO', 0, 28000, '2019-05-11 12:55:37', '2019-05-11 12:55:37'),
(8, '2019-04-02', 'Littlest Pet Shop Hungry Pets (3)', 0, 150000, '2019-05-11 12:56:23', '2019-05-11 12:56:23'),
(9, '2019-04-02', 'Lost Kitties Blind (2)', 0, 100000, '2019-05-11 12:58:06', '2019-05-11 12:58:06'),
(10, '2019-04-02', 'Num Noms Smooshcakes S', 0, 120000, '2019-05-11 12:58:46', '2019-05-11 12:58:46'),
(11, '2019-04-02', 'Plastic Bag', 0, 500, '2019-05-11 12:59:22', '2019-05-11 12:59:22'),
(12, '2019-04-02', 'MRT Single Trip Card', 0, 18000, '2019-05-11 12:59:54', '2019-05-11 12:59:54'),
(13, '2019-04-02', 'Refund MRT Single Trip Card', 15000, 0, '2019-05-11 13:00:31', '2019-05-11 13:00:31'),
(14, '2019-04-02', 'GrabBike', 0, 15000, '2019-05-11 13:00:56', '2019-05-11 13:00:56'),
(15, '2019-04-02', 'Withdrawal BTPN Jenius', 50000, 0, '2019-05-11 13:01:42', '2019-05-11 13:01:42'),
(16, '2019-04-02', 'Aqua Air Mineral 600ml', 0, 7000, '2019-05-11 13:02:23', '2019-05-11 13:02:23'),
(17, '2019-04-02', 'Aqua Air Mineral 600ml', 0, 6000, '2019-05-11 13:02:48', '2019-05-11 13:02:48'),
(18, '2019-04-02', 'Lost', 0, 500, '2019-05-11 13:03:04', '2019-05-11 13:03:04'),
(19, '2019-04-04', 'From Mbah', 28000, 0, '2019-05-11 13:03:30', '2019-05-11 13:03:30'),
(20, '2019-04-05', 'Teh Pucuk Harum 500ml', 0, 6000, '2019-05-11 13:04:18', '2019-05-11 13:04:18'),
(21, '2019-04-05', 'Lifebuoy Lemon Fresh 110g', 0, 5100, '2019-05-11 13:05:01', '2019-05-11 13:05:01'),
(22, '2019-04-05', 'Formula Sikat Gigi', 0, 15200, '2019-05-11 13:05:28', '2019-05-11 13:05:28'),
(23, '2019-04-07', 'Pertalite', 0, 10000, '2019-05-11 13:05:55', '2019-05-11 13:05:55'),
(24, '2019-04-09', 'Pertalite', 0, 10000, '2019-05-11 13:06:22', '2019-05-11 13:06:22'),
(25, '2019-04-11', 'From Bapak', 50000, 0, '2019-05-11 13:06:57', '2019-05-11 13:06:57'),
(26, '2019-04-11', 'From Mbah', 20000, 0, '2019-05-11 13:07:25', '2019-05-11 13:07:25'),
(27, '2019-04-11', 'Chocolate Float Burger King', 0, 12000, '2019-05-11 13:08:04', '2019-05-11 13:08:04'),
(28, '2019-04-11', 'Top-Up Funworld', 0, 20000, '2019-05-11 13:08:36', '2019-05-11 13:08:36'),
(29, '2019-04-11', 'Teh Pucuk Harum 500ml', 0, 5200, '2019-05-11 13:09:01', '2019-05-11 13:09:01'),
(30, '2019-04-11', 'Loan from Bude Lia', 2000000, 0, '2019-05-11 13:09:29', '2019-05-11 13:09:29'),
(31, '2019-04-11', 'Transfer to BTPN Jenius', 0, 500000, '2019-05-11 13:10:48', '2019-05-11 13:10:48'),
(32, '2019-04-11', 'From Mbah', 250000, 0, '2019-05-11 13:13:23', '2019-05-11 13:13:23'),
(33, '2019-04-11', 'From Bapak', 100000, 0, '2019-05-11 13:13:41', '2019-05-11 13:13:41'),
(34, '2019-04-11', 'Transfer to BTPN Jenius', 0, 500000, '2019-05-11 13:14:18', '2019-05-11 13:14:18'),
(35, '2019-04-12', 'Aqua Air Mineral 600ml', 0, 6000, '2019-05-11 13:14:41', '2019-05-11 13:14:41'),
(36, '2019-04-12', 'Aqua Air Mineral 600ml', 0, 5000, '2019-05-11 13:15:13', '2019-05-11 13:15:13'),
(37, '2019-04-12', 'Top-Up Telkomsel', 0, 102000, '2019-05-11 13:15:51', '2019-05-11 13:15:51'),
(38, '2019-04-12', 'Mortgage', 0, 1000000, '2019-05-11 13:16:16', '2019-05-11 13:16:16'),
(39, '2019-04-12', 'Key Fee', 0, 100000, '2019-05-11 13:16:42', '2019-05-11 13:16:42'),
(40, '2019-04-12', 'Charity', 0, 3500, '2019-05-11 13:17:10', '2019-05-11 13:17:10'),
(41, '2019-04-12', 'Nasi + Sayur Kangkung + Telur Dadar + Es Teh Manis', 0, 14000, '2019-05-11 13:17:51', '2019-05-11 13:17:51'),
(42, '2019-04-12', 'Teh Pucuk Harum 350ml', 0, 3600, '2019-05-11 13:20:38', '2019-05-11 13:20:38'),
(43, '2019-04-12', 'Pepsodent Act Whitening 75g', 0, 8700, '2019-05-11 13:22:18', '2019-05-11 13:22:18'),
(44, '2019-04-12', 'Dettol Lasting Fresh 105g', 0, 7200, '2019-05-11 13:22:53', '2019-05-11 13:22:53'),
(45, '2019-04-12', 'Wetz Greentea Wet Tissue 10 Sheets', 0, 5900, '2019-05-11 16:58:14', '2019-05-11 16:58:14'),
(46, '2019-04-12', 'MyRoti Pisang Cokelat', 0, 4500, '2019-05-11 16:58:49', '2019-05-11 16:58:49'),
(47, '2019-04-12', 'MyRoti Pisang Susu', 0, 4500, '2019-05-11 16:59:24', '2019-05-11 16:59:24'),
(48, '2019-04-12', 'Antangin Mint (4)', 0, 14400, '2019-05-11 17:00:28', '2019-05-11 17:00:28'),
(49, '2019-04-12', 'Plastic Bag', 0, 200, '2019-05-11 17:00:53', '2019-05-11 17:00:53'),
(50, '2019-04-12', 'Nasi + Kikil + Ati Ampela Usus (2)', 0, 24000, '2019-05-11 17:01:31', '2019-05-11 17:01:31'),
(51, '2019-04-13', 'Baso Oboy', 0, 13000, '2019-05-11 17:02:09', '2019-05-11 17:02:09'),
(52, '2019-04-13', 'Tehbotol Sosro', 0, 4000, '2019-05-11 17:02:38', '2019-05-11 17:02:38'),
(53, '2019-04-13', 'GrabBike', 0, 14000, '2019-05-11 17:03:03', '2019-05-11 17:03:03'),
(54, '2019-04-13', 'Flower Bouquet', 0, 15000, '2019-05-11 17:04:03', '2019-05-11 17:04:03'),
(55, '2019-04-13', 'Withdrawal BTPN Jenius', 100000, 0, '2019-05-11 17:05:33', '2019-05-11 17:05:33'),
(56, '2019-04-14', 'Seblak SR', 0, 11000, '2019-05-11 17:06:15', '2019-05-11 17:06:15'),
(57, '2019-04-14', 'Tehbotol Sosro 500ml', 0, 6500, '2019-05-11 17:07:13', '2019-05-11 17:07:13'),
(58, '2019-04-14', 'Aqua Air Mineral 600ml', 0, 3000, '2019-05-11 17:08:02', '2019-05-11 17:08:02'),
(59, '2019-04-14', 'Pay Loan to Kamal', 0, 10000, '2019-05-11 17:09:02', '2019-05-11 17:09:02'),
(60, '2019-04-14', 'Motorcycle Parking Fee', 0, 1000, '2019-05-11 17:10:21', '2019-05-11 17:10:21'),
(61, '2019-04-14', 'Go-Ride', 0, 10000, '2019-05-11 17:10:53', '2019-05-11 17:10:53'),
(62, '2019-04-15', 'Nasi + Sayur Kangkung + Telur Dadar', 0, 13000, '2019-05-11 17:12:26', '2019-05-11 17:12:26'),
(63, '2019-04-15', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-11 17:13:00', '2019-05-11 17:13:00'),
(64, '2019-04-15', 'Nasi + Sayur Kangkung + Telur Ceplok', 0, 10000, '2019-05-11 17:14:14', '2019-05-11 17:14:14'),
(65, '2019-04-15', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-11 17:14:47', '2019-05-11 17:14:47'),
(66, '2019-04-16', 'Nasi + Sayur Daun Pepaya + Ikan Cakalang', 0, 16000, '2019-05-11 17:16:44', '2019-05-11 17:16:44'),
(67, '2019-04-16', 'Kopiko 78 Degrees Caramel Frappe 240ml', 0, 6000, '2019-05-11 17:18:23', '2019-05-11 17:18:23'),
(68, '2019-04-16', 'Nasi Goreng', 0, 12000, '2019-05-11 17:20:22', '2019-05-11 17:20:22'),
(69, '2019-04-16', 'Withdrawal BTPN Jenius', 100000, 0, '2019-05-11 17:20:50', '2019-05-11 17:20:50'),
(70, '2019-04-16', 'Vit Air Mineral 1.5L (2)', 0, 10000, '2019-05-11 17:21:33', '2019-05-11 17:21:33'),
(71, '2019-04-16', 'Alfamidi Travel Tissue', 0, 5300, '2019-05-11 17:22:20', '2019-05-11 17:22:20'),
(72, '2019-04-16', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-11 17:22:47', '2019-05-11 17:22:47'),
(73, '2019-04-16', 'Plastic Bag', 0, 200, '2019-05-11 17:23:10', '2019-05-11 17:23:10'),
(74, '2019-04-17', 'Nasi + Sayur Kangkung + Telur Dadar + GoodDay Moccachino', 0, 15000, '2019-05-11 17:24:31', '2019-05-11 17:24:31'),
(75, '2019-04-17', 'Go-Ride', 0, 18000, '2019-05-11 17:25:05', '2019-05-11 17:25:05'),
(76, '2019-04-17', 'Aqua Air Mineral 600ml', 0, 3200, '2019-05-11 17:25:27', '2019-05-11 17:25:27'),
(77, '2019-04-18', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-11 17:25:54', '2019-05-11 17:25:54'),
(78, '2019-04-18', 'Aqua Air Mineral 600ml', 0, 3000, '2019-05-11 17:26:11', '2019-05-11 17:26:11'),
(79, '2019-04-18', 'Nasi + Sayur Tahu + Tahu Goreng + Tempe Bacem', 0, 8000, '2019-05-11 17:27:53', '2019-05-11 17:27:53'),
(80, '2019-04-18', 'Mie Ayam + Estee', 0, 20000, '2019-05-11 17:28:22', '2019-05-11 17:28:22'),
(81, '2019-04-18', 'Toilet Fee', 0, 2000, '2019-05-11 17:28:51', '2019-05-11 17:28:51'),
(82, '2019-04-19', 'From Ibu', 100, 0, '2019-05-11 17:29:13', '2019-05-11 17:29:13'),
(83, '2019-04-19', 'Baso Slank', 0, 15000, '2019-05-11 17:29:40', '2019-05-11 17:29:40'),
(84, '2019-04-20', 'From Mbah', 200000, 0, '2019-05-11 17:30:54', '2019-05-11 17:30:54'),
(85, '2019-04-20', 'Haircut', 0, 12000, '2019-05-11 17:31:22', '2019-05-11 17:31:22'),
(86, '2019-04-20', 'From Mbah Mo', 100000, 0, '2019-05-11 17:31:49', '2019-05-11 17:31:49'),
(87, '2019-04-20', 'From Tante Yanti', 50000, 0, '2019-05-11 17:32:15', '2019-05-11 17:32:15'),
(88, '2019-04-20', 'Teh Pucuk Harum 500ml', 0, 6000, '2019-05-11 17:32:45', '2019-05-11 17:32:45'),
(89, '2019-04-20', 'Aqua Air Mineral 600ml', 0, 3500, '2019-05-11 17:33:45', '2019-05-11 17:33:45'),
(90, '2019-04-20', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-11 17:34:01', '2019-05-11 17:34:01'),
(91, '2019-04-21', 'Nasi + Sayur Kangkung + Usus + Indocafe Coffeemix', 0, 15000, '2019-05-12 14:14:05', '2019-05-12 14:14:05'),
(92, '2019-04-21', 'Plastic Bag', 0, 200, '2019-05-12 14:14:29', '2019-05-12 14:14:29'),
(93, '2019-04-21', 'Indomie Rasa Soto Mie (4)', 0, 9600, '2019-05-12 14:15:07', '2019-05-12 14:15:07'),
(94, '2019-04-21', 'Promag 12s', 0, 8500, '2019-05-12 14:15:35', '2019-05-12 14:15:35'),
(95, '2019-04-21', 'Teh Pucuk Harum 500ml', 0, 6700, '2019-05-12 14:16:44', '2019-05-12 14:16:44'),
(96, '2019-04-21', 'Vit Air Mineral 1.5L (2)', 0, 7800, '2019-05-12 14:17:22', '2019-05-12 14:17:22'),
(97, '2019-04-21', 'Nasi Goreng', 0, 12000, '2019-05-12 14:17:57', '2019-05-12 14:17:57'),
(98, '2019-04-22', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-12 14:18:21', '2019-05-12 14:18:21'),
(99, '2019-04-22', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 14:18:46', '2019-05-12 14:18:46'),
(100, '2019-04-22', 'Nasi + Sayur Bayam + Telur Rebus + Bakwan Jagung', 0, 13000, '2019-05-12 14:19:40', '2019-05-12 14:19:40'),
(101, '2019-04-22', 'Sari Roti Sandwich Cokelat', 0, 4500, '2019-05-12 14:20:10', '2019-05-12 14:20:10'),
(102, '2019-04-22', 'Kopiko 78 Degrees Caramel Frappe', 0, 6000, '2019-05-12 14:20:33', '2019-05-12 14:20:33'),
(103, '2019-04-22', 'Nasi + Sayur Tempe + Telur Ceplok', 0, 10000, '2019-05-12 14:21:15', '2019-05-12 14:21:15'),
(104, '2019-04-23', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-12 14:21:46', '2019-05-12 14:21:46'),
(105, '2019-04-23', 'Nasi + Soto Ayam', 0, 13000, '2019-05-12 14:22:20', '2019-05-12 14:22:20'),
(106, '2019-04-23', 'Aqua Air Mineral 240ml', 0, 1000, '2019-05-12 14:22:47', '2019-05-12 14:22:47'),
(107, '2019-04-23', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 14:23:27', '2019-05-12 14:23:27'),
(108, '2019-04-23', 'Nasi Goreng', 0, 12000, '2019-05-12 14:23:44', '2019-05-12 14:23:44'),
(109, '2019-04-24', 'Sari Roti Sandwich Keju', 0, 4500, '2019-05-12 14:24:12', '2019-05-12 14:24:12'),
(110, '2019-04-24', 'Insto Cool', 0, 15000, '2019-05-12 14:25:04', '2019-05-12 14:25:04'),
(111, '2019-04-24', 'Nasi + Soto Ayam', 0, 13000, '2019-05-12 14:25:27', '2019-05-12 14:25:27'),
(112, '2019-04-24', 'Good Day Moccachino', 0, 6000, '2019-05-12 14:25:52', '2019-05-12 14:25:52'),
(113, '2019-04-24', 'Teh Pucuk Harum 350ml', 0, 6000, '2019-05-12 14:26:20', '2019-05-12 14:26:20'),
(114, '2019-04-24', 'Top-Up OVO', 0, 30000, '2019-05-12 14:26:45', '2019-05-12 14:26:45'),
(115, '2019-04-24', 'Nasi Goreng', 0, 12000, '2019-05-12 14:27:03', '2019-05-12 14:27:03'),
(116, '2019-04-25', 'Sari Roti Cokelat', 0, 4500, '2019-05-12 15:07:35', '2019-05-12 15:07:35'),
(117, '2019-04-25', 'Nasi + Sayur Bayam + Telur Dadar + Tempe Goreng', 0, 8000, '2019-05-12 15:08:11', '2019-05-12 15:08:11'),
(118, '2019-04-25', 'Teh Pucuk Harum 350ml', 0, 6000, '2019-05-12 15:08:32', '2019-05-12 15:08:32'),
(119, '2019-04-25', 'Nasi Goreng', 0, 12000, '2019-05-12 15:08:50', '2019-05-12 15:08:50'),
(120, '2019-04-26', 'Nasi Kuning', 0, 5000, '2019-05-12 15:09:21', '2019-05-12 15:09:21'),
(121, '2019-04-26', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 15:09:51', '2019-05-12 15:09:51'),
(122, '2019-04-26', 'Nasi + Soto Ayam', 0, 13000, '2019-05-12 15:10:11', '2019-05-12 15:10:11'),
(123, '2019-04-26', 'Good Day Moccachino', 0, 6000, '2019-05-12 15:10:29', '2019-05-12 15:10:29'),
(124, '2019-04-26', 'Le Minerale Air Mineral 600ml', 0, 3500, '2019-05-12 15:10:52', '2019-05-12 15:10:52'),
(125, '2019-04-26', 'Ades Air Mineral 1500ml', 0, 6200, '2019-05-12 15:11:20', '2019-05-12 15:11:20'),
(126, '2019-04-26', 'Teh Pucuk Harum 500ml', 0, 7000, '2019-05-12 15:11:39', '2019-05-12 15:11:39'),
(127, '2019-04-26', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-12 15:11:56', '2019-05-12 15:11:56'),
(128, '2019-04-27', 'Withdrawal BTPN Jenius', 100000, 0, '2019-05-12 15:12:19', '2019-05-12 15:12:19'),
(129, '2019-04-27', 'Nasi + Sayur Kangkung + Telur Dadar', 0, 10000, '2019-05-12 15:12:49', '2019-05-12 15:12:49'),
(130, '2019-04-27', 'Nasi Goreng', 0, 12000, '2019-05-12 15:13:09', '2019-05-12 15:13:09'),
(131, '2019-04-28', 'Nasi + Sayur Kangkung + Telur Dadar', 0, 10000, '2019-05-12 15:13:36', '2019-05-12 15:13:36'),
(132, '2019-04-28', 'Vit Air Mineral 1.5L', 0, 4900, '2019-05-12 15:13:55', '2019-05-12 15:13:55'),
(133, '2019-04-28', 'Aqua Air Mineral 600ml', 0, 3600, '2019-05-12 15:14:17', '2019-05-12 15:14:17'),
(134, '2019-04-28', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 15:14:40', '2019-05-12 15:14:40'),
(135, '2019-04-28', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-12 15:15:09', '2019-05-12 15:15:09'),
(136, '2019-04-28', 'Plastic Bag', 0, 200, '2019-05-12 15:15:22', '2019-05-12 15:15:22'),
(137, '2019-04-28', 'Charity', 0, 300, '2019-05-12 15:15:43', '2019-05-12 15:15:43'),
(138, '2019-04-28', 'Nasi + Sayur Kangkung + Kerang', 0, 10000, '2019-05-12 15:16:05', '2019-05-12 15:16:05'),
(139, '2019-04-28', 'Withdrawal Mandiri', 100000, 0, '2019-05-12 15:16:29', '2019-05-12 15:16:29'),
(140, '2019-04-28', 'Plastic Bag', 0, 200, '2019-05-12 15:16:52', '2019-05-12 15:16:52'),
(141, '2019-04-28', 'Dove Total Damage Repair Shampoo', 0, 17900, '2019-05-12 15:17:21', '2019-05-12 15:17:21'),
(142, '2019-04-28', 'Milo Cokelat 190ml', 0, 5100, '2019-05-12 15:17:47', '2019-05-12 15:17:47'),
(143, '2019-04-29', 'Tolak Angin (2)', 0, 6000, '2019-05-12 15:18:14', '2019-05-12 15:18:14'),
(144, '2019-04-29', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 15:18:32', '2019-05-12 15:18:32'),
(145, '2019-04-29', 'Nasi + Sayur Bayam + Tahu Penyet + Telur Dadar', 0, 10000, '2019-05-12 15:19:21', '2019-05-12 15:19:21'),
(146, '2019-04-29', 'Es Teh Manis', 0, 4000, '2019-05-12 15:19:43', '2019-05-12 15:19:43'),
(147, '2019-04-29', 'Dirham', 0, 1000, '2019-05-12 15:20:07', '2019-05-12 15:20:07'),
(148, '2019-04-29', 'Gorengan', 0, 5000, '2019-05-12 15:20:24', '2019-05-12 15:20:24'),
(149, '2019-04-29', 'Laundry Express 2kg', 0, 32000, '2019-05-12 15:20:48', '2019-05-12 15:20:48'),
(150, '2019-04-29', 'Nasi Goreng', 0, 12000, '2019-05-12 15:21:18', '2019-05-12 15:21:18'),
(151, '2019-04-30', 'Sari Roti Sandwich Cokelat', 0, 4500, '2019-05-12 15:23:40', '2019-05-12 15:23:40'),
(152, '2019-04-30', 'Sari Roti Dorayaki Cokelat', 0, 5000, '2019-05-12 15:24:10', '2019-05-12 15:24:10'),
(153, '2019-04-30', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 15:24:26', '2019-05-12 15:24:26'),
(154, '2019-04-30', 'Spotify Premium Family', 0, 14000, '2019-05-12 15:24:53', '2019-05-12 15:24:53'),
(155, '2019-04-30', 'Nasi + Sayur Bayam + Bandeng Presto', 0, 12000, '2019-05-12 15:25:19', '2019-05-12 15:25:19'),
(156, '2019-04-30', 'Es Teh Manis', 0, 4000, '2019-05-12 15:25:38', '2019-05-12 15:25:38'),
(157, '2019-04-30', 'Charity', 0, 1300, '2019-05-12 15:25:56', '2019-05-12 15:25:56'),
(158, '2019-04-30', 'Withdrawal Mandiri', 100000, 0, '2019-05-12 15:26:16', '2019-05-12 15:26:16'),
(159, '2019-04-30', 'Teh Pucuk Harum 350ml', 0, 4000, '2019-05-12 15:26:36', '2019-05-12 15:26:36'),
(160, '2019-04-30', 'Go-Ride', 0, 20000, '2019-05-12 15:26:50', '2019-05-12 15:26:50'),
(161, '2019-04-30', 'Top-Up Funworld', 0, 20000, '2019-05-12 15:27:19', '2019-05-12 15:27:19'),
(162, '2019-05-01', 'Nasi + Sayur Kangkung + Telur Dadar', 0, 10000, '2019-05-12 15:27:57', '2019-05-12 15:27:57'),
(163, '2019-05-01', 'Withdrawal Mandiri', 100000, 0, '2019-05-12 15:28:14', '2019-05-12 15:28:14'),
(164, '2019-05-01', 'Indomaret Air Mineral 1500ml (2)', 0, 9000, '2019-05-12 15:28:51', '2019-05-12 15:28:51'),
(165, '2019-05-01', 'Sari Roti Sandwich Cokelat (2)', 0, 9000, '2019-05-12 15:29:16', '2019-05-12 15:29:16'),
(166, '2019-05-01', 'Teh Pucuk Harum 500ml', 0, 6000, '2019-05-12 15:29:46', '2019-05-12 15:29:46'),
(167, '2019-05-01', 'Indomaret Ankle Shock', 0, 25900, '2019-05-12 15:30:13', '2019-05-12 15:30:13'),
(168, '2019-05-01', 'Indomaret Stationary Tape 1x72', 0, 10500, '2019-05-12 15:30:46', '2019-05-12 15:30:46'),
(169, '2019-05-01', 'Nasi Goreng', 0, 12000, '2019-05-12 15:31:01', '2019-05-12 15:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `cryptos`
--

CREATE TABLE `cryptos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `balance` double(8,4) NOT NULL,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cryptos`
--

INSERT INTO `cryptos` (`id`, `date`, `balance`, `value`, `created_at`, `updated_at`) VALUES
(1, '2018-05-24', 0.0020, 17847.00, '2019-05-12 20:25:31', '2019-05-12 20:25:31');

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

-- --------------------------------------------------------

--
-- Table structure for table `flexis`
--

CREATE TABLE `flexis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `debit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gopays`
--

CREATE TABLE `gopays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `debit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jeniuses`
--

CREATE TABLE `jeniuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `debit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkajas`
--

CREATE TABLE `linkajas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `debit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_05_04_173411_create_debts_table', 1),
(13, '2019_05_09_090646_create_mandiris_table', 1),
(14, '2019_05_11_193052_create_cashes_table', 1),
(15, '2019_05_13_021336_create_cryptos_table', 1),
(16, '2019_05_13_023159_create_cryptos_table', 2),
(17, '2019_05_13_024034_create_cryptos_table', 3),
(18, '2019_05_13_044438_create_wallets_table', 4),
(19, '2019_05_13_060005_create_ovos_table', 5),
(20, '2019_05_13_062024_create_jeniuses_table', 6),
(21, '2019_05_13_063210_create_flexis_table', 7),
(22, '2019_05_13_064747_create_linkajas_table', 8),
(23, '2019_05_13_065710_create_gopays_table', 9),
(24, '2019_05_13_091855_create_mtrs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mtrs`
--

CREATE TABLE `mtrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `credit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ovos`
--

CREATE TABLE `ovos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `debit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashes`
--
ALTER TABLE `cashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptos`
--
ALTER TABLE `cryptos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debts`
--
ALTER TABLE `debts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flexis`
--
ALTER TABLE `flexis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gopays`
--
ALTER TABLE `gopays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeniuses`
--
ALTER TABLE `jeniuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkajas`
--
ALTER TABLE `linkajas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandiris`
--
ALTER TABLE `mandiris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtrs`
--
ALTER TABLE `mtrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ovos`
--
ALTER TABLE `ovos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashes`
--
ALTER TABLE `cashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `cryptos`
--
ALTER TABLE `cryptos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `debts`
--
ALTER TABLE `debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `flexis`
--
ALTER TABLE `flexis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gopays`
--
ALTER TABLE `gopays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeniuses`
--
ALTER TABLE `jeniuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkajas`
--
ALTER TABLE `linkajas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mandiris`
--
ALTER TABLE `mandiris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mtrs`
--
ALTER TABLE `mtrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ovos`
--
ALTER TABLE `ovos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
