-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houserent`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_24_060846_create_services_table', 2),
(5, '2020_05_24_062443_create_services_table', 3),
(6, '2020_05_24_071608_create_services_table', 4),
(7, '2020_05_24_101955_create_people_table', 5),
(8, '2020_05_24_130511_create_people_table', 6),
(9, '2020_05_24_142619_add_floors_to_users', 7),
(10, '2020_05_24_182001_create_people_table', 8),
(11, '2020_05_25_152204_create_payments_table', 9),
(12, '2020_05_26_052311_create_payment_logs_table', 10),
(13, '2020_05_26_140048_add_payment_status_to_people', 11),
(14, '2020_05_26_160157_add_payment_status_to_people', 12);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) NOT NULL,
  `payment_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `people_id`, `payment_services`, `payment_money`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '50', '2020-05-27 01:00:35', '2020-05-27 01:00:51'),
(2, 1, '2', '500', '2020-05-27 01:00:35', '2020-05-27 01:00:51'),
(3, 1, '3', '3000', '2020-05-27 01:00:35', '2020-05-27 01:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) NOT NULL,
  `payment_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_logs`
--

INSERT INTO `payment_logs` (`id`, `people_id`, `payment_services`, `payment_money`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '50', '2020-05-27 01:00:35', NULL),
(2, 1, '2', '500', '2020-05-27 01:00:35', NULL),
(3, 1, '3', '1000', '2020-05-27 01:00:35', NULL),
(4, 1, '1', '50', '2020-05-27 01:00:35', NULL),
(5, 1, '2', '500', '2020-05-27 01:00:35', NULL),
(6, 1, '3', '1000', '2020-05-27 01:00:35', NULL),
(7, 1, '1', '50', '2020-05-27 01:00:51', NULL),
(8, 1, '2', '500', '2020-05-27 01:00:51', NULL),
(9, 1, '3', '3000', '2020-05-27 01:00:51', NULL),
(10, 1, '1', '50', '2020-05-27 01:00:51', NULL),
(11, 1, '2', '500', '2020-05-27 01:00:51', NULL),
(12, 1, '3', '3000', '2020-05-27 01:00:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_contact_other` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_home_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_designation` int(11) NOT NULL,
  `people_total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `people_selected_room` int(11) NOT NULL,
  `people_selected_floor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `full_payment_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `people_name`, `people_contact`, `people_contact_other`, `people_home_address`, `people_designation`, `people_total`, `user_id`, `people_selected_room`, `people_selected_floor`, `created_at`, `updated_at`, `payment_status`, `full_payment_status`) VALUES
(1, 'Joe', '9800000000', '9800000000', 'Ramechhap', 1, 5, 1, 1, 1, '2020-05-27 00:53:42', '2020-05-27 01:00:51', 1, 1),
(2, 'Sam', '9800000000', '9800000000', 'Kathmandu', 0, 1, 1, 2, 1, '2020-05-27 00:57:34', '2020-05-27 00:57:34', 0, 0),
(3, 'John', '9800000000', '9800000000', 'Bhaktapur', 2, 3, 1, 3, 1, '2020-05-27 00:58:18', '2020-05-27 00:58:18', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_money` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_money`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Water', 50, 1, '2020-05-27 00:54:57', '2020-05-27 00:54:57'),
(2, 'Wifi', 500, 1, '2020-05-27 00:55:12', '2020-05-27 00:55:12'),
(3, 'Monthly', 3000, 1, '2020-05-27 00:55:27', '2020-05-27 00:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_floors` int(11) NOT NULL,
  `total_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `total_floors`, `total_rooms`) VALUES
(1, 'TheMrDhiraj', 'dhiraj@houserent.com', NULL, '$2y$10$mni.2wfoQzscXV35VE8TT.XvTz2C900D4RkIZSecpzONzZCmq/5Ny', 'x9BEQgQ72jAfpBqKXJna8pdhWJIhdV5WEwsuipW8YKndiL6eCuPvUgIJrBWc', '2020-05-23 11:14:36', '2020-05-27 00:49:06', 2, 8),
(2, 'User', 'user@houserent.com', NULL, '$2y$10$mni.2wfoQzscXV35VE8TT.XvTz2C900D4RkIZSecpzONzZCmq/5Ny', 'C7WuBYN2TDIWxaxWCw3LP5RDtsNTDbujg9k3qFKONrs51Lrce0vIBErTI08n', '2020-05-23 11:16:17', '2020-05-23 11:16:17', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
