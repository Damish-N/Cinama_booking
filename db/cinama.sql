-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2022 at 09:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinama`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `day_ schedule`
--

CREATE TABLE `day_ schedule` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `1_slot` int(11) NOT NULL,
  `2_slot` int(11) NOT NULL,
  `3_slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day_ schedule`
--

INSERT INTO `day_ schedule` (`id`, `day`, `1_slot`, `2_slot`, `3_slot`) VALUES
(1, 'mon', 0, 0, 0),
(2, 'mon', 0, 0, 1),
(3, 'mon', 0, 1, 0),
(4, 'mon', 1, 0, 0),
(5, 'mon', 0, 1, 1),
(6, 'mon', 1, 0, 1),
(7, 'mon', 1, 1, 0),
(8, 'mon', 1, 1, 1),
(9, 'tue', 0, 0, 0),
(10, 'tue', 0, 0, 1),
(11, 'tue', 0, 1, 0),
(12, 'tue', 1, 0, 0),
(13, 'tue', 0, 1, 1),
(14, 'tue', 1, 0, 1),
(15, 'tue', 1, 1, 0),
(16, 'tue', 1, 1, 1),
(17, 'wed', 0, 0, 0),
(18, 'wed', 0, 0, 1),
(19, 'wed', 0, 1, 0),
(20, 'wed', 1, 0, 0),
(21, 'wed', 0, 1, 1),
(22, 'wed', 1, 0, 1),
(23, 'wed', 1, 1, 0),
(24, 'wed', 1, 1, 1),
(25, 'thu', 0, 0, 0),
(26, 'thu', 0, 0, 1),
(27, 'thu', 0, 1, 0),
(28, 'thu', 1, 0, 0),
(29, 'thu', 0, 1, 1),
(30, 'thu', 1, 0, 1),
(31, 'thu', 1, 1, 0),
(32, 'thu', 1, 1, 1),
(33, 'fri', 0, 0, 0),
(34, 'fri', 0, 0, 1),
(35, 'fri', 0, 1, 0),
(36, 'fri', 1, 0, 0),
(37, 'fri', 0, 1, 1),
(38, 'fri', 1, 0, 1),
(39, 'fri', 1, 1, 0),
(40, 'fri', 1, 1, 1),
(41, 'sat', 0, 0, 0),
(42, 'sat', 0, 0, 1),
(43, 'sat', 0, 1, 0),
(44, 'sat', 1, 0, 0),
(45, 'sat', 0, 1, 1),
(46, 'sat', 1, 0, 1),
(47, 'sat', 1, 1, 0),
(48, 'sat', 1, 1, 1),
(49, 'sun', 0, 0, 0),
(50, 'sun', 0, 0, 1),
(51, 'sun', 0, 1, 0),
(52, 'sun', 1, 0, 0),
(53, 'sun', 0, 1, 1),
(54, 'sun', 1, 0, 1),
(55, 'sun', 1, 1, 0),
(56, 'sun', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `director_name` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_theater`
--

CREATE TABLE `movie_theater` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

CREATE TABLE `shedule` (
  `schedule_id` int(11) NOT NULL,
  `date_allocation_type` int(2) NOT NULL,
  `no_of_showing_dates` int(3) NOT NULL DEFAULT 90,
  `date_start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theater_owner`
--

CREATE TABLE `theater_owner` (
  `manager_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `no_balcony_seats` int(5) NOT NULL,
  `no_odc_seats` int(5) NOT NULL,
  `no_of_box` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `seat_no` int(10) NOT NULL,
  `show_time` date NOT NULL,
  `show_end_time` date NOT NULL,
  `show_date` date NOT NULL,
  `ticket_type` int(2) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `theater_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `day_ schedule`
--
ALTER TABLE `day_ schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_theater`
--
ALTER TABLE `movie_theater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movie_mton` (`movie_id`),
  ADD KEY `fk_theater_mton` (`theater_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `fk_shedule_id` (`date_allocation_type`);

--
-- Indexes for table `theater_owner`
--
ALTER TABLE `theater_owner`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `fk_customer` (`customer_id`),
  ADD KEY `fk_movie_ticket` (`movie_id`),
  ADD KEY `fk_payment` (`payment_id`),
  ADD KEY `fk_theater` (`theater_owner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day_ schedule`
--
ALTER TABLE `day_ schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie_theater`
--
ALTER TABLE `movie_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shedule`
--
ALTER TABLE `shedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theater_owner`
--
ALTER TABLE `theater_owner`
  MODIFY `manager_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_theater`
--
ALTER TABLE `movie_theater`
  ADD CONSTRAINT `fk_movie_mton` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_theater_mton` FOREIGN KEY (`theater_id`) REFERENCES `theater_owner` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shedule`
--
ALTER TABLE `shedule`
  ADD CONSTRAINT `fk_shedule_id` FOREIGN KEY (`date_allocation_type`) REFERENCES `shedule` (`schedule_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_ticket` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_theater` FOREIGN KEY (`theater_owner`) REFERENCES `theater_owner` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
