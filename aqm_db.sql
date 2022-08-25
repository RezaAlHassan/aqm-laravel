-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 07:19 PM
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
-- Table structure for table `bpm_fours`
--

CREATE TABLE `bpm_fours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` int(11) NOT NULL,
  `maximum` double(5,2) NOT NULL,
  `upper` double(5,2) NOT NULL,
  `median` double(5,2) NOT NULL,
  `lower` double(5,2) NOT NULL,
  `minimum` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bpse_fives`
--

CREATE TABLE `bpse_fives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `season` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` double(5,2) NOT NULL,
  `upper` double(5,2) NOT NULL,
  `median` double(5,2) NOT NULL,
  `lower` double(5,2) NOT NULL,
  `minimum` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bpst_threes`
--

CREATE TABLE `bpst_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station` int(11) NOT NULL,
  `maximum` double(5,2) NOT NULL,
  `upper` double(5,2) NOT NULL,
  `median` double(5,2) NOT NULL,
  `lower` double(5,2) NOT NULL,
  `minimum` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bylc_twos`
--

CREATE TABLE `bylc_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dhaka` double(5,2) NOT NULL,
  `rajshahi` double(5,2) NOT NULL,
  `sylhet` double(5,2) NOT NULL,
  `rangpur` double(5,2) NOT NULL,
  `chittagong` double(5,2) NOT NULL,
  `khulna` double(5,2) NOT NULL,
  `barishal` double(5,2) NOT NULL,
  `average` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` int(11) NOT NULL,
  `rain` int(11) NOT NULL,
  `windspeed` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `cloud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visbility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `district`, `temperature`, `rain`, `windspeed`, `humidity`, `cloud`, `visbility`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 25, 50, 12, 40, 'Cloudy', 'Foggy', '2022-08-14 17:47:02', '2022-08-14 17:47:02'),
(2, 'Dhaka', 26, 15, 3, 60, 'Clear', 'Clear', '2022-08-07 17:47:39', '2022-08-07 17:47:39'),
(3, 'Rangpur ', 26, 50, 3, 40, 'Clear', 'Moderate', '2022-08-14 17:49:40', '2022-08-14 17:49:40'),
(4, 'Rajshahi', 22, 50, 3, 40, 'Rainy', 'Low', '2022-08-15 17:48:36', '2022-08-15 17:48:36'),
(5, 'Chittagong', 21, 15, 10, 60, 'Partly Cloudy', 'Clear', '2022-08-23 17:50:41', '2022-08-23 17:50:41'),
(6, 'Barishal', 26, 23, 5, 10, 'Clear', 'Low', '2022-08-15 17:51:55', '2022-08-15 17:51:55'),
(7, 'Khulna', 27, 10, 2, 3, 'Dark Clouds', 'Clear', '2022-08-16 17:53:39', '2022-08-16 17:53:39'),
(8, 'Sylhet', 20, 50, 10, 20, 'Cloudy', 'Moderate', '2022-08-16 17:54:56', '2022-08-16 17:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mdlc_ones`
--

CREATE TABLE `mdlc_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aqi` double(5,2) NOT NULL,
  `pm` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(47, '2014_10_12_000000_create_users_table', 1),
(48, '2014_10_12_100000_create_password_resets_table', 1),
(49, '2019_08_19_000000_create_failed_jobs_table', 1),
(50, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(51, '2022_08_03_154838_create_mdlc_ones_table', 1),
(52, '2022_08_03_154944_create_bylc_twos_table', 1),
(53, '2022_08_03_155009_create_bpst_threes_table', 1),
(54, '2022_08_03_155042_create_bpm_fours_table', 1),
(55, '2022_08_03_155101_create_bpse_fives_table', 1),
(56, '2022_08_15_164138_create_dashboards_table', 1),
(57, '2022_08_15_200209_create_stationwises_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(43, 'Khulna', 10, 'EPA', 'Autumn', 46.30, 57.00, '2021-09-22 16:05:05', '2021-09-22 16:05:05'),
(44, 'Dhaka', 1, 'OpenEnv', 'Spring', 110.00, 120.00, '2020-08-15 16:11:09', '2020-08-15 16:11:09'),
(45, 'Barishal', 1, 'EPA', 'Winter', 100.00, 102.00, '2019-04-23 16:11:09', '2019-04-23 16:11:09'),
(46, 'Khulna', 2, 'EPA', 'Summer', 40.00, 45.00, '2020-08-23 16:14:25', '2020-08-23 16:14:25'),
(47, 'Chittagong', 2, 'AirAQ', 'Winter', 70.00, 75.00, '2017-11-10 16:14:58', '2017-11-14 17:31:02'),
(48, 'Barishal', 3, 'OpenEnv', 'Autumn', 33.00, 37.00, '2021-08-09 16:16:03', '2021-08-15 16:16:03'),
(49, 'Rangpur', 3, 'PurpleAir', 'Summer', 12.60, 19.60, '2020-03-22 16:17:44', '2020-03-22 16:17:44'),
(50, 'Rangpur', 6, 'OpenAQ', 'Summer', 20.80, 43.00, '2017-08-15 16:20:13', '2017-08-15 16:20:13'),
(51, 'Rajshahi', 6, 'PurpleAir', 'Spring', 30.00, 43.00, '2018-02-21 16:21:12', '2018-02-21 16:21:12'),
(52, 'Khulna', 7, 'PurpleAir', 'Winter', 46.30, 50.00, '2019-10-22 16:21:12', '2019-10-01 16:21:12'),
(53, 'Barishal', 9, 'White Rose', 'Summer', 60.00, 65.00, '2021-07-08 16:23:08', '2021-07-07 16:23:08'),
(54, 'Dhaka', 8, 'AirAQ', 'Autumn', 120.00, 137.00, '2021-08-15 16:24:28', '2021-08-15 16:24:28'),
(55, 'Khulna', 9, 'OpenEnv', 'Winter', 47.00, 65.00, '2021-05-22 16:24:28', '2021-05-22 16:24:28'),
(56, 'Sylhet', 11, 'OpenEnv', 'Winter', 12.00, 19.00, '2020-12-15 16:26:21', '2020-12-15 16:26:21'),
(57, 'Sylhet', 12, 'EPA', 'Summer', 10.00, 20.00, '2017-05-29 16:26:21', '2017-05-29 16:26:21'),
(58, 'Chittagong', 13, 'AirAQ', 'Autumn', 70.00, 80.00, '2020-01-16 16:30:17', '2020-01-22 16:30:17'),
(59, 'Rangpur', 13, 'White Rose', 'Spring', 19.00, 36.00, '2019-01-15 16:30:17', '2019-01-15 16:30:17'),
(60, 'Dhaka', 12, 'White Rose', 'Summer', 70.00, 110.00, '2020-03-16 16:52:18', '2020-03-16 16:52:18'),
(61, 'Sylhet', 5, 'AirAQ', 'Winter', 12.09, 22.00, '2020-04-23 16:52:18', '2020-04-23 16:52:18'),
(62, 'Barishal', 14, 'OpenEnv', 'Spring', 40.00, 55.00, '2021-03-22 16:54:13', '2021-03-22 16:54:13'),
(63, 'Chittagong', 15, 'EPA', 'Summer', 60.00, 70.00, '2021-08-22 16:54:13', '2021-08-22 16:54:13'),
(64, 'Khulna', 15, 'AirAQ', 'Summer', 22.00, 33.00, '2018-07-09 16:56:20', '2018-07-09 16:56:20'),
(65, 'Barishal', 19, 'PurpleAir', 'Summer', 47.20, 66.00, '2018-09-09 16:56:20', '2018-09-09 16:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `location`, `about_me`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reza', 'rezahasan1198@gmail.com', '$2y$10$7lByaz4dTkVPaCHjc4us7eBBU83JuOJNnUzsDmnHouSdAjs6McT6e', NULL, NULL, NULL, NULL, '2022-08-15 11:43:29', '2022-08-15 11:43:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpm_fours`
--
ALTER TABLE `bpm_fours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpse_fives`
--
ALTER TABLE `bpse_fives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpst_threes`
--
ALTER TABLE `bpst_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bylc_twos`
--
ALTER TABLE `bylc_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mdlc_ones`
--
ALTER TABLE `mdlc_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stationwises`
--
ALTER TABLE `stationwises`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bpm_fours`
--
ALTER TABLE `bpm_fours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bpse_fives`
--
ALTER TABLE `bpse_fives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bpst_threes`
--
ALTER TABLE `bpst_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bylc_twos`
--
ALTER TABLE `bylc_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mdlc_ones`
--
ALTER TABLE `mdlc_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stationwises`
--
ALTER TABLE `stationwises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
