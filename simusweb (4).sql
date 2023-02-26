-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 12:30 PM
-- Server version: 5.7.20
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simusweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `risk_id` bigint(20) UNSIGNED NOT NULL,
  `date_input` date NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nib` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kbli_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kbli_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_18_011148_create_roles_table', 1),
(7, '2023_02_18_014403_add_role_id_column_to_users_table', 2),
(10, '2023_02_18_040309_create_risks_table', 3),
(11, '2023_02_18_040452_create_datas_table', 3),
(12, '2023_02_20_225055_add_slug_column_to_users_table', 4),
(13, '2023_02_21_135616_change_slug_column_into_nullable_in_users_table', 5),
(16, '2023_02_22_140838_add_soft_delete_column_to_users_table', 6),
(17, '2023_02_23_142910_add_slug_column_to_risks_table', 7);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `risks`
--

CREATE TABLE `risks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `risks`
--

INSERT INTO `risks` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rendah', 'Tingkat risiko \"Rendah\" merupakan tingkat risiko perizinan berusaha berbasis risiko OSS-RBA, yang mana pelaku usaha hanya mendapatkan perizinan berusaha berupa NIB.', 'rendah', NULL, NULL),
(2, 'Menengah Rendah', 'Tingkat risiko \" Menengah Rendah\" merupakan tingkat risiko perizinan berusaha berbasis risiko OSS-RBA, yang mana pelaku usaha mendapatkan perizinan berusaha berupa Nomor Induk Berusaha (NIB) dan Sertifikat Standar (SS) serta terbit otomatis.', 'menengah-rendah', NULL, NULL),
(3, 'Menengah Tinggi', 'Tingkat risiko \" Menengah Tinggi\" merupakan tingkat risiko perizinan berusaha berbasis risiko OSS-RBA, yang mana pelaku usaha mendapatkan perizinan berusaha berupa Nomor Induk Berusaha (NIB) dan Sertifikat Standar (SS) serta terbit dengan persyaratan perizinan yang di upload melalui sistem OSS pada laman https://oss.go.id.', 'menengah-tinggi', NULL, NULL),
(4, 'Tinggi', 'Tingkat risiko \" Tinggi\" merupakan tingkat risiko perizinan berusaha berbasis risiko OSS-RBA, yang mana pelaku usaha mendapatkan perizinan berusaha berupa Nomor Induk Berusaha (NIB) dan Izin serta terbit dengan persyaratan perizinan yang di upload melalui sistem OSS pada laman https://oss.go.id.', 'tinggi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `address`, `created_at`, `updated_at`, `role_id`, `slug`, `deleted_at`) VALUES
(2, 'admin', 'admin', '$2y$10$snBDfyijYm95ZcvPaImwvucwGkvCc8MyefGKX.rm1K/3M1hV2SXQq', '0895350033198', 'Bandar Lampung', NULL, '2023-02-23 15:56:38', 1, 'admin', NULL),
(4, 'Maryatun', 'Pariwisata', '$2y$10$F5RUERkao3EldtZbUOi59uVT0HuZP/n.eOolwG6GALZImrheHN4ly', NULL, '', NULL, NULL, 2, 'pariwisata', NULL),
(5, 'Sapriza', 'Perdagangan', '$2y$10$l6ZiuLn3hzIupRB3nNjRrOV61Ucr.kdqi4zsl154beK7OirE6RC3e', NULL, '', NULL, NULL, 2, 'perdagangan', NULL),
(6, 'Andi', 'Perindustrian', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'perindustrian', NULL),
(7, 'Ria', 'Kesehatan', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'kesehatan', NULL),
(8, 'Ria', 'Pangan', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'pangan', NULL),
(9, 'Ria', 'Pertanian', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'pertanian', NULL),
(10, 'Lia', 'Perhubungan', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'perhubungan', NULL),
(11, 'Lia', 'Ketenagakerjaan', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'ketenagakerjaan', NULL),
(12, 'Andi', 'PUPR', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'pupr', NULL),
(13, 'Maryatun', 'Lingkungan Hidup', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'lingkungan-hidup', NULL),
(14, 'Andi', 'Pendidikan', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, NULL, 2, 'pendidikan', NULL),
(15, 'Sapriza', 'Koperasi', '$2y$10$EiutijAW6ykO4kMi9CRD7egqTEikP.e081q3o4F6fcu.okGT5ES92', NULL, '', NULL, '2023-02-23 04:51:45', 2, 'koperasi', NULL),
(27, 'user super', 'user super', '$2y$10$2H2MeWAsUEUCL5e0Od6oTOtETowOvlpcSXbSbG.5iry47SghgLn9G', '0895350033198', 'asalasalan', '2023-02-21 08:26:16', '2023-02-23 08:38:53', 2, 'user-super', NULL),
(29, 'super admin', 'super admin', '$2y$10$IBrdSh8bLBmY25UGWcNml.ACZep2dAlnXEL7qZu2O5mi11EVnCNX.', NULL, 'asalasalan', '2023-02-21 15:54:43', '2023-02-21 15:54:43', 1, 'super-admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datas_user_id_foreign` (`user_id`),
  ADD KEY `datas_risk_id_foreign` (`risk_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `risks`
--
ALTER TABLE `risks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `risks`
--
ALTER TABLE `risks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datas`
--
ALTER TABLE `datas`
  ADD CONSTRAINT `datas_risk_id_foreign` FOREIGN KEY (`risk_id`) REFERENCES `risks` (`id`),
  ADD CONSTRAINT `datas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
