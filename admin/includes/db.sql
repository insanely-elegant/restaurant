-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 11:31 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u306375126_silverglen`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `roomid` int(50) NOT NULL,
  `room` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `seatid` int(50) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `guestno` varchar(255) NOT NULL,
  `condono` varchar(255) NOT NULL,
  `freedinersmealtotalprice` decimal(5,2) DEFAULT NULL,
  `isConfirmed` varchar(255) NOT NULL,
  `isCheckedin` varchar(255) DEFAULT NULL,
  `dinerType` varchar(255) NOT NULL,
  `membermealprice` decimal(5,2) DEFAULT NULL,
  `membermealtaxpercent` decimal(5,2) DEFAULT NULL,
  `membermealtaxvalue` decimal(5,2) DEFAULT NULL,
  `membermealtotalprice` decimal(5,2) DEFAULT NULL,
  `guestmealprice` decimal(5,2) DEFAULT NULL,
  `guestmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `guestmealtaxvalue` decimal(5,2) DEFAULT NULL,
  `guestmealtotalprice` decimal(5,2) DEFAULT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `memberguestmealprice` decimal(5,2) DEFAULT NULL,
  `memberguestmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `memberguestmealtaxvalue` decimal(5,2) DEFAULT NULL,
  `memberguestmealtotalprice` decimal(5,2) DEFAULT NULL,
  `freedinersmealprice` decimal(5,2) DEFAULT NULL,
  `freedinersmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `freedinersmealtaxvalue` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
