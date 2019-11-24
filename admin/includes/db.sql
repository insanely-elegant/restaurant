-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 12:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `chefname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `chefname`, `contactno`, `altcontactno`, `email`, `password`) VALUES
(1, 'Test1', '423', '2345', 'asfd@asd.com', '123123123'),
(3, 'Asd', '324', 'asd', 'asd@asdc.g', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `diningdates`
--

CREATE TABLE `diningdates` (
  `id` int(11) NOT NULL,
  `diningdate` datetime NOT NULL,
  `diningtime` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diningdates`
--

INSERT INTO `diningdates` (`id`, `diningdate`, `diningtime`, `status`) VALUES
(12, '2019-02-02 19:21:00', '00:00:00', 'enabled'),
(13, '2019-02-01 14:55:00', '00:00:00', 'disabled'),
(14, '2019-11-14 21:58:00', '00:00:00', 'enabled'),
(15, '2019-11-13 17:08:00', '00:00:00', 'enabled');

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
(35, 'Apple Pie', 'Cheese Pie!');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `hostname`, `contactno`, `altcontactno`, `email`, `password`) VALUES
(4, 'host', '4444', '45345', '3sdf@asd.com', 'host');

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
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `guestno` varchar(255) NOT NULL,
  `condono` varchar(255) NOT NULL,
  `isConfirmed` varchar(255) NOT NULL,
  `isCheckedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `bookingid`, `firstname`, `lastname`, `room`, `tablename`, `seat`, `timestamp`, `guestno`, `condono`, `isConfirmed`, `isCheckedin`) VALUES
(1, '1234', 'Akash', 'Kumar', 'GameRoom', 'A2', '2', '2019-11-28 12:30:00.491000', '5', '605', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomname`) VALUES
(1, 'Dining Room');

-- --------------------------------------------------------

--
-- Table structure for table `tablelayout`
--

CREATE TABLE `tablelayout` (
  `id` int(11) NOT NULL,
  `roomid` int(50) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `totaltables` varchar(255) NOT NULL,
  `tableavailability` varchar(255) NOT NULL,
  `productimage1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-10-23 15:57:23', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:33:52', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:33:59', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:34:47', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:35:14', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:35:28', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:35:34', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:37:43', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 17:38:44', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 19:24:40', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 19:24:51', NULL, 0),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-02 19:26:55', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-04 18:17:50', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-06 20:03:39', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-07 00:43:44', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-10 18:09:09', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-12 04:23:40', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-19 19:08:50', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-21 20:29:54', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-23 18:41:19', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 15:11:07', NULL, 1),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 23:01:18', NULL, 0),
(0, '', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 23:01:26', NULL, 0),
(0, 'host', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 23:02:26', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 23:08:36', NULL, 1),
(0, 'host', NULL, 0x3a3a3100000000000000000000000000, '2019-11-24 23:18:56', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `age`, `unitno`, `email`, `password`, `contactno`, `altcontactno`) VALUES
(1, 'Duane', 'DeSalvo', '55', 'E302', 'duane.desalvo@gmail.com', 'typicalpassword', '306065801', '507064834'),
(3, 'Asd', 'test', '34', 'E302A', '234234@asd.com', 'asdasdasd', '234234234234', '234234234234234');

-- --------------------------------------------------------

--
-- Table structure for table `weeklymenu`
--

CREATE TABLE `weeklymenu` (
  `id` int(11) NOT NULL,
  `diningdatetime` datetime NOT NULL,
  `dishname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklymenu`
--

INSERT INTO `weeklymenu` (`id`, `diningdatetime`, `dishname`) VALUES
(8, '2019-11-07 18:30:00', 'Bread Basket'),
(13, '2019-11-14 21:58:00', 'Apple Pie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diningdates`
--
ALTER TABLE `diningdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablelayout`
--
ALTER TABLE `tablelayout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeklymenu`
--
ALTER TABLE `weeklymenu`
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
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diningdates`
--
ALTER TABLE `diningdates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tablelayout`
--
ALTER TABLE `tablelayout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weeklymenu`
--
ALTER TABLE `weeklymenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
