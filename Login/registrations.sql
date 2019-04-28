-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 06:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `tag_no` int(55) NOT NULL,
  `age` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `weight` double NOT NULL,
  `unit` varchar(15) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `name`, `tag_no`, `age`, `gender`, `weight`, `unit`, `dob`) VALUES
(1, 'Tiger', 54353, '22', 'female', 0, '', '0000-00-00'),
(3, 'Lion', 2323, '32', 'female', 43, '', '0044-03-31'),
(4, 'Tiger', 34543, '6month to 1 year', 'male', 54643, '', '3435-03-04'),
(5, 'Tiger', 43543, 'more than 2 year', 'male', 36, 'pound', '0043-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` bigint(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `area` varchar(55) NOT NULL,
  `d_time` varchar(25) NOT NULL,
  `d_timend` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `address`, `area`, `d_time`, `d_timend`) VALUES
(1, 'Tiger', '', 131453234, 'dfgf', 'fgd', '00:00:00', ''),
(2, 'Abdul', 'abdul@gmail.com', 131453234, 'keoratola', 'dhaka1203', '00:00:08', ''),
(6, 'tyujyu', 'abdul@gmail.com', 131453234, 'ytut', 'tyutu', '00:00:08', ''),
(7, 'dfgd', 'jolly@gglink.u', 766565, 'gf', 'gfhfd', '00:00:00', ''),
(8, 'trfgyr', 'rf@rgg', 554, 'ghg', 'ghg', '12:00 AM', ''),
(12, 'selim', 'selimreza@gmail.com', 131453234, 'hgjgj', '', '11:11', '12:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'Rafiq', 'rafiq@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Halim', 'halim@gmail.com', '6e94f6e490ce03ac2304af512f82835f'),
(10, 'selim', 'selimreza@gmail.com', 'a01610228fe998f515a72dd730294d87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
