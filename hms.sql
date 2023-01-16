-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 07:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_room`
--

CREATE TABLE `tbl_book_room` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `book_isConfirm` text NOT NULL DEFAULT 'Pending',
  `book_date` text NOT NULL DEFAULT current_timestamp(),
  `payment_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book_room`
--

INSERT INTO `tbl_book_room` (`book_id`, `user_id`, `room_id`, `book_isConfirm`, `book_date`, `payment_method`) VALUES
(2, 5, 15, 'Confirmed', '1999-02-11', ''),
(3, 6, 13, 'Confirmed', '1990-02-08', ''),
(5, 5, 14, 'Confirmed', '1976-09-25', ''),
(7, 6, 14, 'Confirmed', '2017-04-11', ''),
(8, 8, 22, 'Cancelled', '2020-08-31', 'paypal'),
(9, 8, 23, 'Cancelled', '1970-01-12', 'gcash'),
(10, 8, 20, 'Pending', '2023-01-03', 'gcash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `room_number` text NOT NULL,
  `room_name` text NOT NULL,
  `room_price` text NOT NULL,
  `room_img` text NOT NULL,
  `room_status` text NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_number`, `room_name`, `room_price`, `room_img`, `room_status`) VALUES
(19, '225', 'Kylynn Gallegos', '354', '01.jpg', 'Available'),
(22, '27', 'Florence Oneil', '723', '03.jpg', 'Available'),
(23, '511', 'Ulysses Cross', '691', '01.jpg', 'Available'),
(24, '452', 'Bruce Cote', '594', 'banner_bg.jpg', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `created_at` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email`, `password`, `first_name`, `last_name`, `created_at`) VALUES
(2, 'foluw@mailinator.com', 'Pa$$w0rd!', 'Janna', 'Singleton', '2023-01-11 18:55:01'),
(4, 'wemoz@mailinator.com', 'Pa$$w0rd!', 'Erich', 'Mcmahon', '2023-01-11 18:55:01'),
(5, 'cuhi@mailinator.com', 'Pa$$w0rd!', 'Brandon', 'Taylor', '2023-01-11 18:55:01'),
(6, 'raxexuzal@mailinator.com', 'Pa$$w0rd!', 'Emily', 'Rich', '2023-01-11 18:55:01'),
(8, 'ortegacanillo76@gmail.com', 'asd', 'Scott', 'Drake', '2023-01-13 00:29:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_book_room`
--
ALTER TABLE `tbl_book_room`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `tbl_book_room_fk1` (`room_id`),
  ADD KEY `tbl_book_room_fk0` (`user_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_book_room`
--
ALTER TABLE `tbl_book_room`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book_room`
--
ALTER TABLE `tbl_book_room`
  ADD CONSTRAINT `tbl_book_room_fk0` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
