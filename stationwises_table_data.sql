-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 06:09 PM
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
-- Database: `aqm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `stationwises`
--

CREATE TABLE `stationwises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station` int(11) NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pm` double(5,2) NOT NULL,
  `aqi` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stationwises`
--

INSERT INTO `stationwises` (`id`, `district`, `station`, `organization`, `season`, `pm`, `aqi`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, 'PurpleAir', 'Winter', 120.00, 134.00, '2021-08-15 20:58:02', '2021-08-15 20:58:02'),
(2, 'Dhaka', 2, 'White Rose', 'Summer', 80.00, 134.00, '2020-08-08 21:03:26', '2020-08-08 21:03:26'),
(3, 'Dhaka', 3, 'PurpleAir', 'Spring', 85.00, 140.00, '2017-02-15 21:04:45', '2017-02-16 21:04:45'),
(4, 'Rajshahi', 4, 'OpenEnv', 'Winter', 13.00, 20.00, '2018-01-08 21:07:13', '2018-01-08 21:07:13'),
(5, 'Rangpur', 5, 'OpenEnv', 'Autumn', 50.00, 40.00, '2021-10-11 21:09:23', '2021-10-11 21:09:23'),
(6, 'Barishal', 8, 'EPA', 'Autumn', 45.00, 60.00, '2019-05-07 21:11:02', '2019-05-27 21:11:02'),
(7, 'Chittagong', 21, 'EPA', 'Winter', 100.00, 80.00, '2020-06-13 21:24:00', '2020-06-13 21:24:00'),
(8, 'Sylhet', 6, 'OpenEnv', 'Summer', 20.50, 12.00, '2019-08-19 21:28:21', '2019-08-19 21:28:21'),
(9, 'Khulna', 18, 'PurpleAir', 'Spring', 20.00, 30.00, '2018-07-14 21:34:12', '2018-07-14 21:34:12'),
(10, 'Dhaka', 9, 'AirAQ', 'Winter', 12.00, 50.00, '2019-12-04 22:11:24', '2019-12-04 22:11:24'),
(11, 'Dhaka', 10, 'White Rose', 'Spring', 70.00, 120.00, '2018-02-16 22:14:20', '2018-02-15 22:14:20'),
(12, 'Rajshahi', 14, 'PurpleAir', 'Autumn', 50.00, 60.00, '2020-10-15 22:16:44', '2020-10-15 22:16:44'),
(13, 'Rajshahi', 15, 'EPA', 'Summer', 20.00, 45.00, '2019-08-11 22:18:33', '2019-08-10 22:18:33'),
(14, 'Rajshahi', 15, 'PurpleAir', 'Summer', 30.50, 42.40, '2017-05-09 22:19:20', '2017-05-09 22:19:20'),
(15, 'Rajshahi', 16, 'EPA', 'Autumn', 20.00, 26.00, '2021-03-02 22:22:08', '2021-03-08 22:22:08'),
(16, 'Dhaka', 7, 'PurpleAir', 'Winter', 111.00, 130.00, '2021-04-20 22:23:19', '2021-04-20 22:23:19'),
(17, 'Rangpur', 17, 'AirAQ', 'Summer', 15.00, 20.00, '2020-08-22 22:36:06', '2020-08-22 22:36:06'),
(18, 'Rangpur', 18, 'White Rose', 'Spring', 15.50, 17.30, '2019-02-15 22:37:11', '2019-02-15 22:37:11'),
(19, 'Rangpur', 18, 'White Rose', 'Winter', 14.00, 19.00, '2018-01-23 22:39:06', '2018-01-23 22:39:06'),
(20, 'Rangpur', 19, 'EPA', 'Summer', 20.00, 25.00, '2017-05-22 22:42:23', '2017-05-22 22:42:23'),
(21, 'Barishal', 20, 'OpenEnv', 'Winter', 40.00, 50.00, '2017-08-09 22:43:45', '2017-08-09 22:43:45'),
(22, 'Barishal', 21, 'AirAQ', 'Summer', 30.60, 45.50, '2018-05-28 22:44:52', '2018-05-28 22:44:52'),
(23, 'Barishal', 5, 'PurpleAir', 'Autumn', 45.50, 50.00, '2019-08-28 22:44:52', '2019-08-28 22:44:52'),
(24, 'Barishal', 20, 'AirAQ', 'Winter', 43.00, 51.00, '2020-08-08 22:47:51', '2020-08-14 22:47:51'),
(25, 'Barishal', 4, 'OpenEnv', 'Spring', 45.00, 50.00, '2021-05-28 22:44:52', '2021-05-28 22:44:52'),
(26, 'Chittagong', 4, 'White Rose', 'Summer', 70.00, 80.00, '2017-04-09 15:44:47', '2017-04-09 15:44:47'),
(27, 'Chittagong', 11, 'AirAQ', 'Spring', 75.00, 87.40, '2018-04-10 15:45:38', '2018-04-10 15:45:38'),
(28, 'Chittagong', 12, 'PurpleAir', 'Winter', 70.50, 88.70, '2019-11-10 15:45:38', '2019-11-10 15:45:38'),
(31, 'Chittagong', 11, 'AirAQ', 'Summer', 70.00, 80.00, '2017-07-08 15:49:11', '2017-07-08 15:49:11'),
(32, 'Chittagong', 7, 'White Rose', 'Autumn', 75.60, 89.60, '2020-10-08 15:51:20', '2020-10-08 15:51:20'),
(33, 'Chittagong', 14, 'OpenEnv', 'Winter', 78.50, 88.80, '2021-12-17 15:51:20', '2021-12-17 15:51:20'),
(34, 'Sylhet', 17, 'EPA', 'Autumn', 17.60, 20.40, '2017-09-03 20:46:55', '2017-09-03 20:46:55'),
(35, 'Sylhet', 8, 'OpenEnv', 'Winter', 20.00, 25.40, '2018-11-15 15:54:30', '2018-11-15 15:54:30'),
(36, 'Sylhet', 20, 'PurpleAir', 'Summer', 17.60, 27.00, '2019-06-16 15:57:02', '2019-06-16 15:57:02'),
(37, 'Sylhet', 18, 'EPA', 'Summer', 16.00, 22.00, '2020-05-16 15:57:02', '2020-05-16 15:57:02'),
(38, 'Sylhet', 13, 'AirAQ', 'Winter', 20.00, 30.00, '2021-12-17 15:59:55', '2021-12-17 15:59:55'),
(39, 'Khulna', 10, 'EPA', 'Spring', 44.00, 50.00, '2017-04-23 15:59:55', '2017-04-23 15:59:55'),
(40, 'Khulna', 12, 'PurpleAir', 'Autumn', 45.60, 55.00, '2018-07-23 16:02:43', '2018-07-23 16:02:43'),
(41, 'Khulna', 16, 'AirAQ', 'Summer', 47.20, 60.00, '2019-06-24 16:02:43', '2019-06-18 16:02:43'),
(42, 'Khulna', 17, 'PurpleAir', 'Spring', 50.00, 60.50, '2020-02-09 16:05:05', '2020-02-15 16:05:05'),
(43, 'Khulna', 10, 'EPA', 'Autumn', 46.30, 57.00, '2021-09-22 16:05:05', '2021-09-22 16:05:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stationwises`
--
ALTER TABLE `stationwises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stationwises`
--
ALTER TABLE `stationwises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
