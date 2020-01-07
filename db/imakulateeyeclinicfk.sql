-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 09:17 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imakulateeyeclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `casefiles`
--

CREATE TABLE `casefiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `casehistory` mediumtext COLLATE utf8mb4_unicode_ci,
  `systemic` mediumtext COLLATE utf8mb4_unicode_ci,
  `family` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lasteyeexamination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uvaod6m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uvaos6m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uvaod04m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uvaos04m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinhholetestod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinholetestos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stenopaicdiscod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stenopaicdiscos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avaod6m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avaos6m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avaod04m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avaos04m` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ee` mediumtext COLLATE utf8mb4_unicode_ci,
  `uva6m` mediumtext COLLATE utf8mb4_unicode_ci,
  `ue` mediumtext COLLATE utf8mb4_unicode_ci,
  `ie` mediumtext COLLATE utf8mb4_unicode_ci,
  `prefferedeye` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodpressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodsugar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tonometryod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tonometryos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anaesthetics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autorefractometryod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autorefractometryos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staticretinoscopyod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staticretinoscopyos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjectiveod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjectiveos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staticretinoscopyadd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spectacleprescriptionod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spectacleprescriptionos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `near` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bifocal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vanilux` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typesoflenses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thinnerlenses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antireflectivelenses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photochronic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunglasses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nextappointment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctorsname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additionaltestsandcomments` mediumtext COLLATE utf8mb4_unicode_ci,
  `assessmentplan` mediumtext COLLATE utf8mb4_unicode_ci,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_22_002818_create_patients_table', 1),
(4, '2019_10_23_111436_create_notifications_table', 1),
(5, '2019_10_27_103711_create_relatedfiles_table', 1),
(6, '2019_10_28_145444_create_casefiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternativephonenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nextofkin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirthexceptyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliniccardnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relatedfiles`
--

CREATE TABLE `relatedfiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `record` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imakulateeyeclinic', 'imakulateeyeclinic@gmail.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '5JnL2MUe8QTImh2KaAkq0kPqiXRLm6p3GyP6NPoLLeoNSx2Rnh6qgxjQCVDS', '2019-12-11 19:38:41', '2019-12-11 19:38:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casefiles`
--
ALTER TABLE `casefiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casefiles_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_cliniccardnumber_unique` (`cliniccardnumber`);

--
-- Indexes for table `relatedfiles`
--
ALTER TABLE `relatedfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relatedfiles_patient_id_foreign` (`patient_id`);

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
-- AUTO_INCREMENT for table `casefiles`
--
ALTER TABLE `casefiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relatedfiles`
--
ALTER TABLE `relatedfiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casefiles`
--
ALTER TABLE `casefiles`
  ADD CONSTRAINT `casefiles_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `relatedfiles`
--
ALTER TABLE `relatedfiles`
  ADD CONSTRAINT `relatedfiles_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
