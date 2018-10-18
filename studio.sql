-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 01:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `OpeningTime` time DEFAULT NULL,
  `ClosingTime` time DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` binary(1) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`Id`, `Name`, `OpeningTime`, `ClosingTime`, `Date`, `Status`, `UserId`, `updated_at`, `created_at`) VALUES
(4, 'A', '14:01:00', '15:01:00', '2018-10-17', NULL, 1, '2018-10-17 15:48:25', '2018-10-17 15:15:14'),
(5, 'B', '15:03:00', '16:03:00', '2018-10-17', NULL, 1, '2018-10-17 15:51:50', '2018-10-17 15:51:30'),
(6, 'C', '16:00:00', '17:00:00', '2018-10-17', NULL, 2, '2018-10-17 18:00:33', '2018-10-17 15:55:19'),
(12, 'C', '18:00:00', '19:00:00', '2018-10-17', NULL, 2, '2018-10-17 18:31:36', '2018-10-17 18:30:18'),
(13, 'D', NULL, NULL, NULL, NULL, NULL, '2018-10-17 18:37:37', '2018-10-17 18:37:37'),
(14, 'C', '16:01:00', '17:01:00', '2018-10-18', NULL, 2, '2018-10-18 11:27:53', '2018-10-18 11:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lalit', 'lalit@gmail.com', '$2y$10$hLi.RtxPHg0VSiMR0kcn..m4xSizB3K9gXt8fvmY8QuWjfMGSCPze', 'kxwy3HjyuaDs9Y3ZiyQJpL7n00m3zjswXSv9J1VFHzpVAtcqV2j2q6NRg7PN', '2018-10-17 10:07:12', '2018-10-17 10:07:12'),
(2, 'Abc', 'abc@gmail.com', '$2y$10$TBc6LMTlej28CHHC8KkTUOneMqA3554sbrDcO3F5QI3uJT3Cb4HSi', NULL, '2018-10-17 12:10:16', '2018-10-17 12:10:16'),
(3, 'Abc1', 'abc1@gmail.com', '$2y$10$xtamC.0W9u1m6px719RH6OYqejdf/1.J6L89brgkWsnBK86N0Op.u', '5viMboQaBiwjNjVH4r7o8AGuMaCbbsjGyxegQO8IBZMat4LqAJRZlUwHfurd', '2018-10-18 05:45:31', '2018-10-18 05:45:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
