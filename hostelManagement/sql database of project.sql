-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 05:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE DATABASE hostel;
USE hostel;
--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('siddhi4701@gmail.com', 'sidd4701hi'),
('siddhiighodake@gmail.com', 'siddhi123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `message`) VALUES
(1, 'ABC', 'abc@gmail.com', '4', 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `passward` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomallocate`
--

CREATE TABLE `roomallocate` (
  `sname` varchar(40) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `roomno` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomallocate`
--

INSERT INTO `roomallocate` (`sname`, `sid`, `roomno`, `date`) VALUES
('siddhi', '1', 101, '0000-00-00'),
('parth', '2', 102, '0000-00-00'),
('nitya', '3', 103, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `room_allocation`
--

CREATE TABLE `room_allocation` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_allocation`
--

INSERT INTO `room_allocation` (`id`, `student_name`, `student_id`, `room_number`, `created_at`) VALUES
(6, 'sayali', '2', '105', '2025-03-17 16:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `room_bookings`
--

CREATE TABLE `room_bookings` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_bookings`
--

INSERT INTO `room_bookings` (`id`, `sname`, `room_type`, `price`, `room_number`, `created_at`) VALUES
(1, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:01:58'),
(2, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:02:07'),
(3, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:02:10'),
(4, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:02:11'),
(5, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:02:13'),
(6, '', 'Single Room', 2000, '106', '2025-03-17 16:04:11'),
(7, '', 'Double Room', 2200, '102', '2025-03-17 16:09:18'),
(8, '', 'Double Room', 2200, '102', '2025-03-17 16:09:20'),
(9, '', 'Double Room', 2200, '102', '2025-03-17 16:09:25'),
(10, '', 'Double Room', 2200, '102', '2025-03-17 16:12:37'),
(11, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:12:39'),
(12, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:12:40'),
(13, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:12:43'),
(14, '', 'Double Room', 2200, '102', '2025-03-17 16:12:44'),
(15, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:15:31'),
(16, '', 'Dormitory Room', 1500, '101', '2025-03-17 16:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'tejalpadwal@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `room_allocation`
--
ALTER TABLE `room_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_allocation`
--
ALTER TABLE `room_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_bookings`
--
ALTER TABLE `room_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
