-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 01:46 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT '../HOME1/uploads/profile_pictures/guest/user.jpg',
  `password` varchar(255) NOT NULL,
  `role` enum('Student','Teacher') DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `profile_picture`, `password`, `role`) VALUES
(1, 'jhay', '../HOME1/uploads/profile_picturesjhay/6717b5aa35872_itachi-uchiha-naruto-amoled-black-background-5k-3840x2160-4962.png', '$2y$10$Avk.NEsAV1DAalTxubL3cu09sOtB9MI6KTLcK5K2vvz5hBXiwdEhG', 'Student'),
(2, 'rosalie', '../HOME1/uploads/profile_picturesrosalie/671ba4e27754c_bfa899ab-3f34-47b4-a07f-6afa2a023dd0.jpg', '$2y$10$xzE8uSgqEg8z6hy/Z0Ti.usnPx2FpVl1U9lzcBt0ODrXUjA7lvIuW', 'Student'),
(3, 'chewy', 'user.jpg', '$2y$10$yYluZd1yi4CfENIeLjSaeu6QIexlv245gEPUsRDG68DOeBOku2rpW', 'Student'),
(5, 'chewy1', '../HOME1/uploads/profile_pictureschewy1/671a4f74abdf4_bfa899ab-3f34-47b4-a07f-6afa2a023dd0.jpg', '$2y$10$dU2sh28qe4Urh2JxiRt85ej9iWPApd76cX6.4Rvvwv/nikqe8XefS', 'Student'),
(6, '12', '../HOME1/uploads/profile_pictures/guest/user.jpg', '$2y$10$vZgG2DufVXOiDe/sxWeweOqhsDUq4wvoh8MImYzpfRAgCBntL3MMS', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
