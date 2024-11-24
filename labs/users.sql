-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 03:06 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `area_code` text NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `username`, `email`, `password`, `address`, `city`, `province`, `area_code`, `user_id`) VALUES
('Ben', 'Kam', 'ben Kam', 'ben.kam@algomau.ca', '$2y$10$N1IkaGTcgzi8jMgauGswROFsusT2JFejZUCIQcvXBFIJmx3BZRD2.', '44 victoriaville road', 'brampton', 'Alberta', 'L6X f6h', 1),
('abc', 'abc', 'abc', 'abc@gmail.com', '$2y$10$HXKpt0gPxPXfx2I6tSSjQukWkFsbA1PhBd7B1Q1vYlbhfzkrBXz2m', '1234 main street', 'brampton', 'Manitoba', 'L6X 5P3', 2),
('abc', 'abc', 'abc', 'abc@gmail.com', '$2y$10$mv87z9Hw.KrIRTkp8Whk/.H9PgNe5dF8rln/5QA7Bi2EOHowX5q9i', '1234 main street', 'brampton', 'Alberta', 'L6X 5P3', 3),
('my', 'my', 'my', 'my@gmail.com', '$2y$10$P9ubr4h5nDc4cuyP/pUNsOzVkynQjgdCUdYSXPjuitcurWvIk7ZDC', '123 main street', 'brampton', 'Alberta', 'L6X 5P3', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;