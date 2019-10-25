-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 06:10 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silverglen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `unitno`, `email`, `password`, `username`, `contactno`, `altcontactno`) VALUES
(1, 'Duane', 'DeSalvo', 'E302', 'duane.desalvo@gmail.com', 'admin', 'admin', '306065801', '507064834');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `dishdescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `dishname`, `dishdescription`) VALUES
(34, 'Bread Basket', 'Varied collection of breads.Includes Baguettes,Brown,white,bread sticks'),
(35, 'Apple Pie', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `primarydishid` int(50) NOT NULL,
  `seconddishid` int(50) NOT NULL,
  `dishdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `primarydishid`, `seconddishid`, `dishdate`) VALUES
(1, 1, 2, '10/18/2019'),
(2, 2, 3, '10/19/2019'),
(3, 1, 4, '10/20/2019'),
(4, 3, 6, '10/21/2019'),
(5, 2, 1, '10/22/2019'),
(6, 4, 6, '10/23/2019');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `unitno`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:17:14', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:19:10', NULL, 0),
(0, 'asd', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:40:18', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:40:22', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:40:25', NULL, 0),
(0, 't', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:44:49', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:44:52', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:45:04', NULL, 0),
(0, 'asss', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:45:33', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:48:42', NULL, 1),
(0, 'asd', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:48:52', NULL, 0),
(0, 'asd', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:48:56', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:48:59', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:50:51', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 20:51:17', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:00:49', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:00:54', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:01:24', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:03:10', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:15:55', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:53:55', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 21:54:22', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-13 22:28:05', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-14 00:23:07', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-14 01:38:46', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-14 01:39:05', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 13:31:50', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 13:31:57', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 16:04:00', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 16:05:09', NULL, 0),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 16:12:36', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 16:23:46', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-17 19:51:38', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 13:03:27', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 14:36:42', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 15:53:38', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 15:54:46', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 15:55:09', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 15:57:20', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 15:59:45', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 16:03:12', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-18 16:33:32', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-19 16:30:49', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-19 18:58:32', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 20:10:06', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:43:19', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:43:26', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:43:58', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:44:06', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:59:41', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 22:59:58', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:00:13', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:00:16', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:00:19', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:00:52', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:00:55', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-21 23:08:24', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-22 16:22:21', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-23 15:57:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `unitno`, `email`, `password`, `contactno`, `altcontactno`) VALUES
(1, 'Duane', 'DeSalvo', 'E302', 'duane.desalvo@gmail.com', 'typicalpassword', '306065801', '507064834');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
