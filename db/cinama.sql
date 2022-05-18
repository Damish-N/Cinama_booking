-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 01:40 PM
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
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `type` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `first_name`, `last_name`, `email`, `type`) VALUES
(1, '$2y$10$WbpA9kwzCwqAq3AIlItRieb0hrp5yXDgwpnOLgUYul1MpfJSk1wjS', 'damish', 'nisal', 'admin@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `password`, `first_name`, `last_name`, `email`, `city`, `contact_no`, `type`) VALUES
(1, '$2y$10$5YvJeuRnFcb5LBkjHY/PyePBfR2ty4ysN1/zzSmt3at8UiGrQQ9fy', 'Fresh ', 'World', 'ravinduranaweera@gmail.co', 'Pannipitiya', 3262457, 1),
(2, '$2y$10$ZLv6IiGTZdBLhcnMQHInSuuaAY46p4sMHf11m5VPAxtF6LjElkkTq', 'Fresh ', 'World', 'ravinduranaweera@gmail.co', 'Pannipitiya', 3262457, 1),
(3, '$2y$10$T5I4u3h1O5dy2RChe2UsLe0SZGb.wei/8kbR.pu4OnHERz/SjIqxG', 'Fresh ', 'World', 'ravinduranaweera@gmail.co', 'Pannipitiya', 3262457, 1),
(4, '$2y$10$LTbcHKLn8Dv/e.4/GfPu2efpbIG6ddsA0YOETCL5CiwXXsdimg8ja', '', '', 'salesfreshworldexporters@', '', 0, 1),
(5, '$2y$10$WbpA9kwzCwqAq3AIlItRieb0hrp5yXDgwpnOLgUYul1MpfJSk1wjS', 'Damish', 'Nisal', 'damishnisal100@gmail.com', 'Galle', 776560118, 1);

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
  `language` varchar(255) NOT NULL,
  `on_screening` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `votes` int(5) NOT NULL DEFAULT 1982,
  `imbm` int(2) NOT NULL DEFAULT 5,
  `duration` int(11) DEFAULT 120
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `name`, `release_date`, `director_name`, `language`, `on_screening`, `description`, `url`, `votes`, `imbm`, `duration`) VALUES
(1, 'BIG MAGIC', '2022-05-10', 'Elizabeth Gilbert', 'English', 1, 'Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years.', './image/movies/M1.jpeg', 1982, 5, 2),
(2, 'Ten Thousand Skies Above You', '2022-05-17', 'Claudia Gray', 'English', 1, 'The hunt for each splinter of Paul\'s soul sends Marguerite racing through\n                        a war-torn San Francisco.', './image/movies/M2.jpg', 1982, 5, 2),
(3, 'A Tale For The Time Being', '2022-05-16', 'Ruth Ozeki', 'English', 1, 'In Tokyo, sixteen-year-old Nao has decided there’s only one escape from her aching loneliness and her classmates’ bullying.', './image/movie_1.jpg', 1982, 5, 2),
(4, 'The Great Gatsby', '2022-05-16', 'F.Scott Fitzgerald', 'Tamil', 1, 'The Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme achievement of his career.', './image/M4.jpg', 156, 5, 2),
(5, 'The Trip', '2022-05-04', 'Elizabeth Gilbert', 'Tamil', 1, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', './image/T1.webp', 566, 8, 2),
(6, 'Boot Police', '2022-02-01', 'Ruth Ozeki', 'Tamil', 1, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', './image/T2.jpg', 1982, 9, 2),
(7, 'Batman and Superman', '2022-05-04', 'Ruth Ozeki', 'English', 0, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', './image/T3.jpg', 1982, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `movie_theater`
--

CREATE TABLE `movie_theater` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_theater`
--

INSERT INTO `movie_theater` (`id`, `movie_id`, `theater_id`) VALUES
(1, 7, 1),
(2, 3, 2),
(3, 1, 1),
(6, 5, 1),
(7, 6, 1);

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
  `monday` int(11) NOT NULL,
  `tuesday` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `thursday` int(11) NOT NULL,
  `friday` int(11) NOT NULL,
  `saturday` int(11) NOT NULL,
  `sunday` int(11) NOT NULL,
  `no_of_showing_dates` int(3) NOT NULL DEFAULT 90,
  `date_start` date NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `is_showing` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`schedule_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `no_of_showing_dates`, `date_start`, `movie_id`, `theater_id`, `is_showing`) VALUES
(3, 2, 10, 17, 25, 34, 42, 50, 90, '2022-05-17', 1, 1, 1),
(6, 4, 13, 18, 27, 39, 43, 51, 50, '2022-05-14', 5, 1, 1),
(7, 4, 12, 20, 25, 33, 41, 49, 3, '2022-05-20', 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theater_owner`
--

CREATE TABLE `theater_owner` (
  `theater_id` int(50) NOT NULL,
  `theater_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `contact_no` int(10) NOT NULL,
  `no_balcony_seats` int(5) NOT NULL,
  `no_odc_seats` int(5) NOT NULL,
  `no_of_box` int(5) NOT NULL,
  `open_time` datetime NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_owner`
--

INSERT INTO `theater_owner` (`theater_id`, `theater_name`, `email`, `password`, `location`, `contact_no`, `no_balcony_seats`, `no_odc_seats`, `no_of_box`, `open_time`, `type`) VALUES
(1, 'xd', 'test@gmail.com', '$2y$10$RNVS9IyQ/XwicMClEnyQKuBIcgwMPLat.QFn4Gy4AN1feaZySiJeu', 'vfasd', 6666, 3, 35, 34, '0000-00-00 00:00:00', 0),
(2, 'xd', 'salesfreshworldexporters@gmail.com', '$2y$10$COl679PUbdbJOCRyhn0XmOt.JRD.VAcYTopJxXE5p6HuleRcjpT1.', 'vfasd', 6666, 3, 35, 34, '0000-00-00 00:00:00', 0),
(3, 'xd', 'salesfreshworldexporters@gmail.com', '$2y$10$MfSXOuz79iBl4Eo3tmjZ9eSAXETHhFcVlQiecgeSf6TronNDBWa7G', 'vfasd', 6666, 15, 35, 25, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `no_balcony_seats` int(10) NOT NULL DEFAULT 0,
  `no_odc_seats` int(11) NOT NULL DEFAULT 0,
  `no_of_box` int(11) NOT NULL DEFAULT 0,
  `show_time` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
  ADD KEY `fk_movie_theater_id` (`movie_id`),
  ADD KEY `fk_theater_schedule` (`theater_id`);

--
-- Indexes for table `theater_owner`
--
ALTER TABLE `theater_owner`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `fk_customer` (`customer_id`),
  ADD KEY `fk_movie_ticket` (`movie_id`),
  ADD KEY `fk_theater` (`theater_owner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `day_ schedule`
--
ALTER TABLE `day_ schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movie_theater`
--
ALTER TABLE `movie_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shedule`
--
ALTER TABLE `shedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `theater_owner`
--
ALTER TABLE `theater_owner`
  MODIFY `theater_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `fk_theater_mton` FOREIGN KEY (`theater_id`) REFERENCES `theater_owner` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shedule`
--
ALTER TABLE `shedule`
  ADD CONSTRAINT `fk_movie_theater_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_theater_schedule` FOREIGN KEY (`theater_id`) REFERENCES `theater_owner` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_ticket` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_theater` FOREIGN KEY (`theater_owner`) REFERENCES `theater_owner` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
