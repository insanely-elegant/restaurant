-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Apr 27, 2020 at 11:01 PM
=======
-- Generation Time: Apr 22, 2020 at 09:44 PM
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu
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
(3, 'chef', '324', 'asd', 'test@chef.com', 'chef'),
(5, 'Sam Columbi', '4253726169', '', 'samcolumbi@gmail.com', 'chef');

-- --------------------------------------------------------

--
-- Table structure for table `dinertype`
--

CREATE TABLE `dinertype` (
  `dinerid` int(11) NOT NULL,
  `dinername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinertype`
--

INSERT INTO `dinertype` (`dinerid`, `dinername`) VALUES
(1, 'member'),
(2, 'guest'),
(3, 'freediner'),
(4, 'memberguest');

-- --------------------------------------------------------

--
-- Table structure for table `diningdates`
--

CREATE TABLE `diningdates` (
  `id` int(11) NOT NULL,
  `diningdate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diningdates`
--

INSERT INTO `diningdates` (`id`, `diningdate`, `status`) VALUES
(1, '2020-04-20', 'enabled'),
(2, '2020-04-21', 'enabled'),
<<<<<<< HEAD
(3, '2020-04-22', 'enabled'),
(4, '2020-04-29', 'enabled');
=======
(3, '2020-04-22', 'enabled');
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `dishname` text NOT NULL,
  `dishdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `dishname`, `dishdescription`) VALUES
(1, 'Pasta Bologna', 'bolognese with red sauce reduction.'),
(2, 'Chicken Burger', 'Deliciously seasoned 100% chicken breast – from chickens raised without the use of antibiotics – battered and breaded to perfection with toasted wheat crumbs, wheat flour and spices, topped with mouth-watering bacon from pork raised without the use of antibiotics, crisp lettuce, tomato and mayo, served on a toasted 7-grain bun.'),
(3, 'Beef Burger', '100% all natural Black Angus beef. Single and double patties offered for all Burgers.'),
(4, 'Classic Hot Rueben Sandwich', 'with onion rings'),
(5, 'Meat Lasagna', 'With Asiago and Romano Cheese'),
(6, 'Chicken Alfredo over Penne Pasta', 'Juicy grilled chicken is served warm on a bed of fettuccine pasta tossed with broccoli and rich Alfredo sauce and topped with Parmesan cheese.'),
(7, 'Denver Omelette', 'Bacon, Breakfast Potatoes'),
(8, 'Bacon Cheeseburger', 'With Bleu or Cheddar Cheese, French Fries'),
(9, 'Chipotle Burger (V)', 'With French Fries'),
(10, 'Beef Pot Roast', 'Mashed Potatoes and Gravy'),
(11, 'Almond Crusted Cod', 'Most and Flakey');

-- --------------------------------------------------------

--
-- Table structure for table `freediner`
--

CREATE TABLE `freediner` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `roomid` int(50) NOT NULL,
  `room` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `guestno` varchar(255) NOT NULL,
  `isConfirmed` varchar(255) NOT NULL,
  `isCheckedin` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `dinerType` varchar(255) NOT NULL,
  `freedinermealprice` decimal(5,2) NOT NULL,
  `freedinermealtaxpercent` decimal(5,2) NOT NULL,
  `freedinermealtaxvalue` decimal(5,2) NOT NULL,
  `freedinermealtotalprice` decimal(5,2) NOT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `freedinertotal` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freediner`
--

INSERT INTO `freediner` (`id`, `bookingid`, `name`, `dishname`, `roomid`, `room`, `tablename`, `seat`, `guestno`, `isConfirmed`, `isCheckedin`, `diningdate`, `diningtime`, `dinerType`, `freedinermealprice`, `freedinermealtaxpercent`, `freedinermealtaxvalue`, `freedinermealtotalprice`, `grandtotal`, `freedinertotal`) VALUES
(1, 'SGFD2004200001', 'Free Diner', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '6', '4', '4', '', '', '2020-04-20', '11:20:00', 'freediner', '14.00', '0.00', '0.00', '14.00', '56.00', '0.00');

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
(4, 'host', '4444', '45345', 'mariott@host.com', 'host');

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

-- --------------------------------------------------------

--
-- Table structure for table `pickups`
--

CREATE TABLE `pickups` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `condono` varchar(255) NOT NULL,
  `membermealprice` decimal(5,2) NOT NULL,
  `membermealtaxpercent` decimal(5,2) NOT NULL,
  `membermealtaxvalue` decimal(5,2) NOT NULL,
  `membermealtotalprice` decimal(5,2) NOT NULL,
  `dinerType` varchar(255) NOT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `isPickedup` varchar(255) NOT NULL,
  `timestamp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickups`
--

INSERT INTO `pickups` (`id`, `bookingid`, `firstname`, `lastname`, `dishname`, `diningdate`, `diningtime`, `condono`, `membermealprice`, `membermealtaxpercent`, `membermealtaxvalue`, `membermealtotalprice`, `dinerType`, `grandtotal`, `isPickedup`, `timestamp`) VALUES
(1, '', 'John', 'Doe', 'Denver Omelette', '2020-04-20', '00:00:15', 'E302', '14.00', '0.00', '0.00', '14.00', 'Takeout', '14.00', '', NULL),
(2, '', 'John', 'Doe', 'Denver Omelette', '2020-04-20', '00:00:15', 'E302', '14.00', '0.00', '0.00', '14.00', 'Takeout', '14.00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pickupweeklymenu`
--

CREATE TABLE `pickupweeklymenu` (
  `id` int(50) NOT NULL,
  `pickupdate` date NOT NULL,
  `pickuptime` time NOT NULL,
  `dishname1` varchar(255) NOT NULL,
  `dishname2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickupweeklymenu`
--

INSERT INTO `pickupweeklymenu` (`id`, `pickupdate`, `pickuptime`, `dishname1`, `dishname2`, `status`) VALUES
(1, '2020-04-20', '00:00:15', 'Denver Omelette', 'Meat Lasagna', '');

-- --------------------------------------------------------

--
-- Table structure for table `pricingmodels`
--

CREATE TABLE `pricingmodels` (
  `id` int(11) NOT NULL,
  `dinerid` varchar(255) NOT NULL,
  `mealprice` decimal(5,2) NOT NULL,
  `mealtaxpercent` decimal(5,2) NOT NULL,
  `mealtaxvalue` decimal(5,2) NOT NULL,
  `mealtotalprice` decimal(5,2) NOT NULL,
  `datemodified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricingmodels`
--

INSERT INTO `pricingmodels` (`id`, `dinerid`, `mealprice`, `mealtaxpercent`, `mealtaxvalue`, `mealtotalprice`, `datemodified`) VALUES
(1, '1', '14.00', '0.00', '0.00', '14.00', '30-01-2020 10:19:31 AM'),
(2, '2', '17.00', '10.00', '1.70', '18.70', '30-01-2020 10:19:57 AM'),
(3, '3', '0.00', '0.00', '0.00', '0.00', '2020-01-04 13:00:12'),
(4, '4', '14.00', '0.00', '0.00', '14.00', '04/03/2020');

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
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `bookingid`, `firstname`, `lastname`, `dishname`, `roomid`, `room`, `tablename`, `seatid`, `seat`, `diningdate`, `diningtime`, `guestno`, `condono`, `freedinersmealtotalprice`, `isConfirmed`, `isCheckedin`, `dinerType`, `membermealprice`, `membermealtaxpercent`, `membermealtaxvalue`, `membermealtotalprice`, `guestmealprice`, `guestmealtaxpercent`, `guestmealtaxvalue`, `guestmealtotalprice`, `grandtotal`, `memberguestmealprice`, `memberguestmealtaxpercent`, `memberguestmealtaxvalue`, `memberguestmealtotalprice`, `freedinersmealprice`, `freedinersmealtaxpercent`, `freedinersmealtaxvalue`) VALUES
(1, 'SG2004200001', 'John', 'Doe', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '5', 0, '4', '2020-04-20', '11:20:00', '3', 'E302', NULL, '', NULL, 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '56.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(2, 'SG2004200002', 'John', 'Doe', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '3', 0, '1', '2020-04-20', '11:20:00', '0', 'E302', NULL, '', NULL, 'member', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '14.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(3, 'SG2004200003', 'John', 'Doe', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '7', 0, '4', '2020-04-20', '11:20:00', '3', 'E302', NULL, '', NULL, 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '56.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(4, 'SG2004200004', 'John', 'Doe', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '8', 0, '4', '2020-04-20', '11:20:00', '4', 'E302G', NULL, '', NULL, 'guest', NULL, NULL, NULL, NULL, '17.00', '10.00', '1.70', '17.00', '68.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SG2004210001', 'John', 'Doe', 'Meat Lasagna', 1, 'Main Dining Room', '7', 0, '2', '2020-04-21', '08:30:00', '1', 'E302', NULL, '', NULL, 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '28.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `totaltables` varchar(255) NOT NULL,
  `roomavailability` varchar(255) DEFAULT NULL,
  `productimage1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomname`, `totaltables`, `roomavailability`, `productimage1`) VALUES
(1, 'Main Dining Room', '13', '1', 'SG Main Dining Room layout 2420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tablelayout`
--

CREATE TABLE `tablelayout` (
  `id` int(11) NOT NULL,
  `roomid` int(50) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `totalseats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablelayout`
--

INSERT INTO `tablelayout` (`id`, `roomid`, `tablename`, `totalseats`) VALUES
(1, 1, '1', '5'),
(2, 1, '2', '4'),
(3, 1, '3', '4'),
(4, 1, '4', '4'),
(5, 1, '5', '8'),
(6, 1, '6', '4'),
(7, 1, '7', '4'),
(8, 1, '8', '4'),
(9, 1, '9', '4'),
(10, 1, '10', '5'),
(11, 1, '11', '5'),
(12, 1, '13', '4'),
(13, 1, '14', '4');

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
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-18 17:48:21', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-18 17:49:26', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-18 19:54:27', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 14:11:46', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 14:29:47', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 15:03:06', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 15:03:19', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 15:04:11', NULL, 1),
(0, 'E302', NULL, 0x3a3a3100000000000000000000000000, '2020-04-19 15:44:10', NULL, 1),
<<<<<<< HEAD
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-20 15:28:46', NULL, 1),
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-27 19:14:27', NULL, 1);
=======
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-04-20 15:28:46', NULL, 1);
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu

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
(1, 'John', 'Doe', '35', 'E302', 'johndoe@gmail.com', 'E302', '9876543210', '');

-- --------------------------------------------------------

--
-- Table structure for table `weeklymenu`
--

CREATE TABLE `weeklymenu` (
  `id` int(11) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `roomid` int(50) NOT NULL,
  `tableid` int(50) NOT NULL,
  `dishname1` varchar(255) NOT NULL,
  `dishname2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklymenu`
--

<<<<<<< HEAD
INSERT INTO `weeklymenu` (`id`, `diningdate`, `diningtime`, `roomid`, `tableid`, `dishname1`, `dish1_description`, `dishname2`, `dish2_description`) VALUES
(1, '2020-04-29', '14:22:00', 1, 1, 'Chicken Alfredo over Penne Pasta', 'Juicy grilled chicken is served warm on a bed of fettuccine pasta tossed with broccoli and rich Alfredo sauce and topped with Parmesan cheese.', 'Chipotle Burger (V)', 'With French Fries');
=======
INSERT INTO `weeklymenu` (`id`, `diningdate`, `diningtime`, `roomid`, `tableid`, `dishname1`, `dishname2`) VALUES
(1, '2020-04-20', '11:20:00', 1, 1, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(2, '2020-04-20', '11:20:00', 1, 2, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(3, '2020-04-20', '11:20:00', 1, 3, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(4, '2020-04-20', '11:20:00', 1, 4, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(5, '2020-04-20', '11:20:00', 1, 5, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(6, '2020-04-20', '11:20:00', 1, 6, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(7, '2020-04-20', '11:20:00', 1, 7, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(8, '2020-04-20', '11:20:00', 1, 8, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(9, '2020-04-20', '11:20:00', 1, 9, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(10, '2020-04-20', '11:20:00', 1, 10, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(11, '2020-04-20', '11:20:00', 1, 11, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(12, '2020-04-20', '11:20:00', 1, 12, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(13, '2020-04-20', '11:20:00', 1, 13, 'Classic Hot Rueben Sandwich', 'Denver Omelette'),
(14, '2020-04-21', '08:30:00', 1, 6, 'Meat Lasagna', 'Chipotle Burger (V)'),
(15, '2020-04-22', '08:30:00', 1, 6, 'Meat Lasagna', 'Chipotle Burger (V)'),
(16, '2020-04-21', '08:30:00', 1, 7, 'Meat Lasagna', 'Chipotle Burger (V)'),
(17, '2020-04-22', '08:30:00', 1, 7, 'Meat Lasagna', 'Chipotle Burger (V)'),
(18, '2020-04-21', '08:30:00', 1, 8, 'Meat Lasagna', 'Chipotle Burger (V)'),
(19, '2020-04-22', '08:30:00', 1, 8, 'Meat Lasagna', 'Chipotle Burger (V)'),
(20, '2020-04-21', '08:30:00', 1, 11, 'Meat Lasagna', 'Chipotle Burger (V)'),
(21, '2020-04-22', '08:30:00', 1, 11, 'Meat Lasagna', 'Chipotle Burger (V)');
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu

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
-- Indexes for table `dinertype`
--
ALTER TABLE `dinertype`
  ADD PRIMARY KEY (`dinerid`);

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
-- Indexes for table `freediner`
--
ALTER TABLE `freediner`
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
-- Indexes for table `pickups`
--
ALTER TABLE `pickups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickupweeklymenu`
--
ALTER TABLE `pickupweeklymenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricingmodels`
--
ALTER TABLE `pricingmodels`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diningdates`
--
ALTER TABLE `diningdates`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `freediner`
--
ALTER TABLE `freediner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickups`
--
ALTER TABLE `pickups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pickupweeklymenu`
--
ALTER TABLE `pickupweeklymenu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tablelayout`
--
ALTER TABLE `tablelayout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weeklymenu`
--
ALTER TABLE `weeklymenu`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
>>>>>>> parent of f02e0b0... (feat) Add dish description to create weekly menu
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
