-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 01:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasaysayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `active_users`
--

INSERT INTO `active_users` (`id`, `user_id`, `last_activity`) VALUES
(1, 0, '2024-11-08 22:58:51'),
(2, 0, '2024-11-08 22:59:51'),
(3, 0, '2024-11-08 23:00:51'),
(4, 0, '2024-11-08 23:01:51'),
(5, 0, '2024-11-08 23:02:51'),
(6, 0, '2024-11-08 23:03:51'),
(7, 0, '2024-11-08 23:04:51'),
(8, 0, '2024-11-08 23:05:51'),
(9, 0, '2024-11-08 23:06:51'),
(10, 0, '2024-11-08 23:07:51'),
(11, 0, '2024-11-08 23:08:51'),
(12, 0, '2024-11-08 23:09:51'),
(13, 0, '2024-11-08 23:10:51'),
(14, 0, '2024-11-08 23:11:51'),
(15, 0, '2024-11-08 23:12:51'),
(16, 0, '2024-11-08 23:13:51'),
(17, 0, '2024-11-08 23:14:51'),
(18, 0, '2024-11-08 23:15:51'),
(19, 0, '2024-11-08 23:16:51'),
(20, 0, '2024-11-08 23:17:51'),
(21, 0, '2024-11-08 23:18:51'),
(22, 0, '2024-11-08 23:19:51'),
(23, 0, '2024-11-08 23:20:51'),
(24, 0, '2024-11-08 23:21:51'),
(25, 0, '2024-11-08 23:22:51'),
(26, 0, '2024-11-09 14:29:58'),
(27, 0, '2024-11-09 17:08:46'),
(28, 2, '2024-11-09 17:31:10'),
(29, 2, '2024-11-09 17:31:15'),
(30, 2, '2024-11-09 17:31:20'),
(31, 2, '2024-11-09 17:31:25'),
(32, 2, '2024-11-09 17:31:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_users`
--
ALTER TABLE `active_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
