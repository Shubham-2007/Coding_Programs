-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_accno` varchar(256) NOT NULL,
  `mobile_no` varchar(256) NOT NULL,
  `user_amount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_id`, `user_first`, `user_last`, `user_accno`, `mobile_no`, `user_amount`) VALUES
(48, 'binit', 'fofariya', '65', '87546927838', '4436'),
(49, 'flsf', 'nn', '65566', '21', '242'),
(50, 'grmkldgm', 'dgmkm', '32', '15', '54'),
(51, 'grmkldgm', 'dgmkm', '32', '15', '54'),
(52, 'sfknjk', 'nnvnj', '5432', '', '54'),
(53, 'dmedf', 'nnn23', '2', '', '34'),
(54, 'hgfd', 'nbv', '65', '', '456789'),
(55, 'nbrgh', 'sdfgh', '65', '2345', '432'),
(56, 'nbrgh', 'sdfgh', '65', '2345', '432'),
(57, 'nbrgh', 'sdfgh', '65', '2345', '432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
