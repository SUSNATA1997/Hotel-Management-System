-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 07:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldwidehotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `role` varchar(60) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `c_id` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `room_type` varchar(60) NOT NULL,
  `bedding_type` varchar(60) NOT NULL,
  `no_of_rooms` int(60) NOT NULL,
  `meal_plan` varchar(80) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `approved` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`c_id`, `name`, `email`, `phone`, `room_type`, `bedding_type`, `no_of_rooms`, `meal_plan`, `check_in`, `check_out`, `approved`) VALUES
(21, 'Indranuj ', 'indr@nuj123', '8240711685', 'Deluxe Room', 'Single', 2, 'Breakfast', '2023-06-29', '2023-06-30', 1),
(23, 'Indra', 'indra@123', '123', 'Superior Room', 'Double', 1, 'Room only', '2023-06-08', '2023-06-18', 1),
(25, 'Rick', 'r@g.com', '12347890', 'Superior Room', 'Single', 1, 'Room only', '2023-06-29', '2023-06-30', 0),
(26, 'Indranuj Ganguly', 'indr@nuj', '8240711685', 'Deluxe Room', 'Single', 1, 'Room only', '2023-06-09', '2023-06-10', 1),
(27, 'Rick', 'rick@gmail.com', '12347890', 'Guest House', 'Triple', 1, 'Room only', '2023-06-15', '2023-06-30', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
