-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 03:02 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 06:03:50', '2019-12-05 06:03:50'),
(2, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 06:04:55', '2019-12-05 06:04:55'),
(3, 'Gurvir Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 07:55:45', '2019-12-05 07:55:45'),
(4, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 07:59:57', '2019-12-05 07:59:57'),
(5, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 08:00:24', '2019-12-05 08:00:24'),
(6, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 08:01:02', '2019-12-05 08:01:02'),
(7, 'Gurvir Singh Tarlok Singh Bhogal', '6822564149', 'gurvirbhogal10@gmail.com', '2019-12-05 08:01:37', '2019-12-05 08:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `edus`
--

CREATE TABLE `edus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edus`
--

INSERT INTO `edus` (`id`, `degree`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Master of Science in computer science', 'COMPUTER SCIENCE MS WITH 4.0', 'MAY 2021', NULL, '2019-12-05 03:55:05'),
(2, 'BE', 'Computer Engineering', 'Aug 19', '2019-12-04 10:29:14', '2019-12-04 10:29:14'),
(3, 'Christ Academy', 'Junior College', 'Feb 15', '2019-12-04 10:33:45', '2019-12-04 10:33:45');

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
-- Table structure for table `hire_mes`
--

CREATE TABLE `hire_mes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hire_mes`
--

INSERT INTO `hire_mes` (`id`, `price`, `services`, `contact`, `created_at`, `updated_at`) VALUES
(1, '908072', 'xyz, uli, vuz, klm', 'CONTACT ME', NULL, '2019-12-04 09:31:57'),
(4, '70000000', 'xyz, and mentoring and something else', 'CONTACT ME', '2019-12-04 09:48:59', '2019-12-05 03:58:08'),
(7, '98172490', 'lkjashdfihsdfkkjjashdflkj', 'KJASHGLKJASFHD', '2019-12-05 03:58:20', '2019-12-05 03:58:54');

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
(4, '2019_11_30_070813_create_skills_table', 2),
(5, '2019_11_30_231409_create_signups_table', 3),
(6, '2019_12_02_211740_create_contacts_table', 4),
(7, '2019_12_03_201633_create_portfolios_table', 5),
(8, '2019_12_04_010807_create_edus_table', 6),
(9, '2019_12_04_022220_create_hire_mes_table', 7);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `description`, `position`, `created_at`, `updated_at`) VALUES
(4, 'app2.png', 'this is a test2', 'this is a tese', '2019-12-05 07:24:07', '2019-12-05 07:34:16'),
(7, 'app1.jpg', 'I am a full stack developer at this company. This is a test for input.', 'dfdsfdsfsd', '2019-12-05 07:45:54', '2019-12-05 07:47:27'),
(8, 'app1.jpg', 'this is a demo', 'jhasfd', '2019-12-05 07:46:01', '2019-12-05 07:53:19'),
(9, 'app1.jpg', 'I am a full stack developer at this company. This is a test for input.', 'kjashdf', '2019-12-05 07:46:11', '2019-12-05 07:46:11'),
(10, 'app.png', 'I am a full stack developer at this company. This is a test for input.', 'dfdsfdsfsd', '2019-12-05 07:46:19', '2019-12-05 07:46:19'),
(11, 'app.png', 'I am a full stack developer at this company. This is a test for input.', 'dfdsfdsfsd', '2019-12-05 07:46:25', '2019-12-05 07:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Gurvir Singh Tarlok Singh', 'Bhogal', 'gurvirbhogal10@gmail.com', 'asd', '6822564149', 'asd', '2019-12-01 06:08:33', '2019-12-01 06:08:33'),
(2, 'Gurvir Singh Tarlok Singh', 'Bhogal', 'gurvirbhogal0@gmail.com', '345345345', '6822564149', 'gurvir', '2019-12-01 07:00:14', '2019-12-01 07:00:14'),
(3, 'Gurvir Singh Tarlok Singh', 'Bhogal', 'gurvirbhogal10@gmail.co', '567765567', '6822564149', 'asdfasd', '2019-12-01 07:01:13', '2019-12-01 07:01:13'),
(4, 'XYZ', 'uli', 'moremihir.18@gmail.com', 'kjAFD', '8888888888', 'asdfasd', '2019-12-04 12:33:01', '2019-12-04 12:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_acquired` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `description`, `date_acquired`, `created_at`, `updated_at`) VALUES
(1, 'Full Stack developer', 'I am a full stack developer at this company. This is a test for input.', 'feb 2019', '2019-12-05 03:29:29', '2019-12-05 03:29:29'),
(2, 'this is a test', 'f;AOSDJFKDSHFKDSASALK', 'JASHDFLJK', '2019-12-05 03:30:08', '2019-12-05 03:47:59');

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
  `role` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gurvir Singh Tarlok Singh Bhogal', 'gurvirbhogal10@gmail.com', NULL, '$2y$10$s7Tw1hWwwrLfsiqoKZU69OEwY1bZOYRgC2RW/NT.4tMQacyQAdnL2', 'admin', NULL, '2019-12-05 04:04:19', '2019-12-05 04:04:19'),
(2, 'Gurvir Singh Tarlok Singh Bhogal', 'gurvirbhogal@gmail.com', NULL, '$2y$10$6G7gGs2ATTorQQsuIgiJ9..0VL2soqngpm4fv1sRQZ9Sgq044TXhq', 'no', NULL, '2019-12-05 04:57:25', '2019-12-05 04:57:25'),
(3, 'Gurvir Singh Tarlok Singh Bhogal', 'gurvirbhogal5@gmail.com', NULL, '$2y$10$yUlz46w5wCXFFg9O8Z2nY.ZqCBQjCjNtoyJ.ImIMSFys8eXZ14F7K', NULL, NULL, '2019-12-05 07:54:28', '2019-12-05 07:54:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edus`
--
ALTER TABLE `edus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_mes`
--
ALTER TABLE `hire_mes`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edus`
--
ALTER TABLE `edus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hire_mes`
--
ALTER TABLE `hire_mes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
