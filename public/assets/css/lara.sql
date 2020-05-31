-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 09:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danish', 'danish@gmail.com', NULL, 'Admin', '$2y$10$GKJKvqfgFzQvpXbZFiXfbuF0OqK1LqCMX6cdJHK6Ovhr3Xg/beinW', NULL, '2019-11-13 01:16:11', '2019-11-13 01:16:11'),
(2, 'Danish', 'admin@gmail.com', NULL, 'Admin', '$2y$10$EYM50wudAoLbOVPEJJGoQuEZ9aVjJrUQEui/FxBldpskyXMS47Yfi', 'neB4AQEAtl2lP2cgkh1ZVFdAkPSei23o59ZBjVtjYVF00sa1ZDmBmRLK7Ctt', '2019-11-13 01:20:32', '2019-11-13 01:20:32');

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
(19, '2019_10_29_164308_create_options_table', 1),
(20, '2019_10_29_205627_create_options_table', 2),
(38, '2014_10_12_000000_create_users_table', 3),
(39, '2014_10_12_100000_create_password_resets_table', 3),
(40, '2019_10_29_113645_create_subjects_table', 3),
(41, '2019_10_29_115448_create_questions_table', 3),
(42, '2019_10_29_210413_create_options_table', 3),
(43, '2019_11_11_170309_create_user_login_table', 3),
(44, '2019_11_13_041712_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Matthew Sanders', '2019-11-13 01:26:54', '2019-11-13 01:26:54', NULL),
(2, 1, 'Nyssa Lott', '2019-11-13 01:26:54', '2019-11-13 01:26:54', NULL),
(3, 1, 'Cheyenne Stein', '2019-11-13 01:26:54', '2019-11-13 01:26:54', NULL),
(4, 1, 'Noah Hatfield', '2019-11-13 01:26:54', '2019-11-13 01:26:54', NULL),
(5, 2, 'Orlando Vaughn', '2019-11-13 01:50:25', '2019-11-13 01:50:25', NULL),
(6, 2, 'Conan Saunders', '2019-11-13 01:50:26', '2019-11-13 01:50:26', NULL),
(7, 2, 'Alexander Emerson', '2019-11-13 01:50:26', '2019-11-13 01:50:26', NULL),
(8, 2, 'Indigo Valencia', '2019-11-13 01:50:26', '2019-11-13 01:50:26', NULL),
(9, 2, 'Adrienne Tillman', '2019-11-13 01:56:08', '2019-11-13 01:56:08', NULL),
(10, 2, 'Ivy Gibson', '2019-11-13 01:56:08', '2019-11-13 01:56:08', NULL),
(11, 2, 'Amber Johnston', '2019-11-13 01:56:08', '2019-11-13 01:56:08', NULL),
(12, 2, 'Bradley Dawson', '2019-11-13 01:56:08', '2019-11-13 01:56:08', NULL),
(13, 4, 'Carter Guerra', '2019-11-13 01:59:40', '2019-11-13 01:59:40', NULL),
(14, 4, 'Harlan Thomas', '2019-11-13 01:59:40', '2019-11-13 01:59:40', NULL),
(15, 4, 'Magee Burris', '2019-11-13 01:59:40', '2019-11-13 01:59:40', NULL),
(16, 4, 'Adara Chavez', '2019-11-13 01:59:40', '2019-11-13 01:59:40', NULL);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED DEFAULT NULL,
  `question_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_time` int(10) UNSIGNED DEFAULT NULL,
  `question_type` int(10) UNSIGNED DEFAULT NULL,
  `question_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question_name`, `question_time`, `question_type`, `question_answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Illiana Massey', NULL, 2, 'Voluptatem ea sit m', '2019-11-13 01:26:33', '2019-11-13 01:26:33', NULL),
(2, 1, 'Phelan Huff', NULL, 2, 'Omnis ipsam ipsam ni', '2019-11-13 01:49:57', '2019-11-13 01:49:57', NULL),
(3, 2, 'Devin Wilkerson', NULL, 3, 'Ad minima repellendu', '2019-11-13 01:55:53', '2019-11-13 01:55:53', NULL),
(4, 3, 'Rina Cunningham', NULL, 2, 'Cum laboris duis eli', '2019-11-13 01:59:16', '2019-11-13 01:59:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_test_time` int(11) DEFAULT NULL,
  `total_questions` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `user_id`, `subject_name`, `subject_author`, `subject_test_time`, `total_questions`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Cameron Mcfarland', 'Eos aut excepturi qu', 57, 11, '2019-11-13 01:26:10', '2019-11-13 01:26:10', NULL),
(2, NULL, 'Amal Brock', 'Provident unde veni', 2, 88, '2019-11-13 01:49:45', '2019-11-13 01:49:45', NULL),
(3, NULL, 'physics', 'Rerum non aute ut al', 12, 1, '2019-11-13 01:58:54', '2019-11-13 01:58:54', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maggie Richardson', 'winofomyfa@mailinator.net', NULL, '$2y$10$anV9.1tgF4G4XO.7XM.7YuJZvCM0/Yc/9fIeAKz.1a7ipAI6pw0Ue', NULL, '2019-11-12 23:38:50', '2019-11-12 23:38:50'),
(2, 'Keely Contreras', 'kuxyfuwopu@mailinator.net', NULL, '$2y$10$m9TyhLACdq9Zv8.WuQJyjO1hfGZRODw0wB5qCxeuavf0BoI0lPDKu', NULL, '2019-11-13 01:44:19', '2019-11-13 01:44:19'),
(3, 'Lillith Copeland', 'sijujaru@mailinator.net', NULL, '$2y$10$GY9151YocGMZzMvDDWb3hO9l6eM.VlO87qC.3OkUX4X2OsPmn2G16', NULL, '2019-11-13 01:50:56', '2019-11-13 01:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_login_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
