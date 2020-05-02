-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 02:18 PM
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
(3, '2020-04-22', 'enabled'),
(4, '2020-04-30', 'enabled'),
(5, '2020-05-01', 'enabled'),
(6, '2020-05-04', 'enabled'),
(7, '2020-05-05', 'enabled'),
(8, '2020-05-06', 'enabled'),
(9, '2020-05-02', 'enabled'),
(10, '2020-05-03', 'enabled'),
(11, '2020-05-07', 'enabled'),
(12, '2020-05-08', 'enabled'),
(13, '2020-05-09', 'enabled'),
(14, '2020-05-10', 'enabled'),
(15, '2020-05-11', 'enabled'),
(16, '2020-05-12', 'enabled'),
(17, '2020-05-13', 'enabled'),
(18, '2020-05-14', 'enabled'),
(19, '2020-05-15', 'enabled'),
(20, '2020-05-16', 'enabled'),
(21, '2020-05-17', 'enabled');

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
(1, 'Pasta Bologna', 'Bolognese with red sauce reduction.'),
(2, 'Chicken Burger', 'Deliciously seasoned 100% chicken breast'),
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
(1, '', 'Duane and Toni', 'DeSalvo', 'Denver Omelette', '2020-04-20', '00:00:15', 'E302', '14.00', '0.00', '0.00', '14.00', 'Takeout', '14.00', '', NULL),
(2, '', 'Duane and Toni', 'DeSalvo', 'Denver Omelette', '2020-04-20', '00:00:15', 'E302', '14.00', '0.00', '0.00', '14.00', 'Takeout', '14.00', '', NULL),
(3, '', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', '2020-05-04', '18:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(4, '', 'Duane and Toni', 'DeSalvo', 'Chicken Burger', '2020-05-05', '20:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(5, '', 'Duane and Toni', 'DeSalvo', 'Meat Lasagna', '2020-05-06', '20:40:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pickupweeklymenu`
--

CREATE TABLE `pickupweeklymenu` (
  `id` int(50) NOT NULL,
  `pickupdate` date NOT NULL,
  `roomid` int(50) NOT NULL,
  `pickuptime` time NOT NULL,
  `dishname1` varchar(255) NOT NULL,
  `dishname2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickupweeklymenu`
--

INSERT INTO `pickupweeklymenu` (`id`, `pickupdate`, `roomid`, `pickuptime`, `dishname1`, `dishname2`, `status`) VALUES
(1, '2020-04-20', 1, '00:00:15', 'Denver Omelette', 'Meat Lasagna', ''),
(2, '2020-05-01', 1, '14:44:00', 'Chicken Burger', 'Classic Hot Rueben Sandwich', ''),
(3, '2020-05-04', 1, '18:00:00', 'Pasta Bologna', 'Beef Burger', ''),
(4, '2020-05-05', 1, '20:00:00', 'Pasta Bologna', 'Chicken Burger', ''),
(5, '2020-05-06', 1, '20:40:00', 'Beef Burger', 'Meat Lasagna', '');

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
(1, 'SG2004200001', 'Duane and Toni', 'DeSalvo', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '5', 0, '4', '2020-04-20', '11:20:00', '3', 'E302', NULL, '', '1', 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '56.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(2, 'SG2004200002', 'Duane and Toni', 'DeSalvo', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '3', 0, '1', '2020-04-20', '11:20:00', '0', 'E302', NULL, '', '1', 'member', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '14.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(3, 'SG2004200003', 'Duane and Toni', 'DeSalvo', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '7', 0, '4', '2020-04-20', '11:20:00', '3', 'E302', NULL, '', '1', 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '56.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(4, 'SG2004200004', 'Duane and Toni', 'DeSalvo', 'Classic Hot Rueben Sandwich', 1, 'Main Dining Room', '8', 0, '4', '2020-04-20', '11:20:00', '4', 'E302G', NULL, '', NULL, 'guest', NULL, NULL, NULL, NULL, '17.00', '10.00', '1.70', '17.00', '68.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SG2004210001', 'Duane and Toni', 'DeSalvo', 'Meat Lasagna', 1, 'Main Dining Room', '7', 0, '2', '2020-04-21', '08:30:00', '1', 'E302', NULL, '', '1', 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '28.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(7, 'SG2005050001', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', 1, 'Main Dining Room', '7', 0, '3', '2020-05-05', '20:00:00', '2', 'E302', NULL, '', '1', 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '42.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(8, 'SG2005050002', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', 1, 'Main Dining Room', '6', 0, '4', '2020-05-05', '20:00:00', '4', 'E302G', NULL, '', NULL, 'guest', NULL, NULL, NULL, NULL, '17.00', '10.00', '1.70', '17.00', '68.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'SG2005060001', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', 1, 'Main Dining Room', '9', 0, '4', '2020-05-06', '21:00:00', '4', 'E302G', NULL, '', NULL, 'guest', NULL, NULL, NULL, NULL, '17.00', '10.00', '1.70', '17.00', '68.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'SG2005050003', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', 1, 'Main Dining Room', '8', 0, '4', '2020-05-05', '21:00:00', '3', 'E302', NULL, '', '1', 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '56.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL),
(11, 'SG2005040001', 'Duane and Toni', 'DeSalvo', 'Pasta Bologna', 1, 'Main Dining Room', '4', 0, '2', '2020-05-04', '21:00:00', '1', 'E302', NULL, '', NULL, 'memberguest', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '28.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL);

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
(0, 'admin', NULL, 0x3a3a3100000000000000000000000000, '2020-05-01 12:48:03', NULL, 1);

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
(1, 'Duane and Toni', 'DeSalvo', '', 'E302', 'duane.desalvo@gmail.com', 'E302', '4254409304', ''),
(2, 'Gary and Carolyn', 'Saaris/Reid', '', 'W102', '', 'W102', '4254436979', ''),
(3, 'Pattricia', 'Brown', '', 'E304', '', 'E304', '4259570626', ''),
(4, 'Blanche', 'Adams', '', 'E208', '', 'E208', '4256441308', ''),
(5, 'Gloria', 'Pong', '', 'E201', '', 'E201', '4256435528', ''),
(6, 'Susan', 'Bailey', '', 'C209', '', 'E209', '4256412050', ''),
(7, 'Colleen', 'Bangert', '', 'E216', '', 'E216', '4254498940', ''),
(8, 'Florence', 'Bannister', '', 'C213', '', 'C213', '4257460116', ''),
(9, 'Cathy', 'Barich', '', 'E103', '', 'E103', '4254433643', ''),
(10, 'Doris', 'Bean', '', 'C114', '', 'C114', '4253789314', ''),
(11, 'Marjorie', 'Benson', '', 'E307', '', 'E307', '4255627921', ''),
(12, 'Faith', 'Bentley', '', 'C313', '', 'C313', '4256410755', ''),
(13, 'Nina and David', 'Bergman/Reigel', '', 'E112', '', 'E112', '4257461168', ''),
(14, 'Jeanie', 'Boddy', '', 'C205', '', 'C205', '4256439256', ''),
(15, 'Barbara', 'Brachtl', '', 'E301', '', 'E301', '2067997667', '');

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

INSERT INTO `weeklymenu` (`id`, `diningdate`, `diningtime`, `roomid`, `tableid`, `dishname1`, `dishname2`) VALUES
(1, '2020-05-02', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(2, '2020-05-02', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(3, '2020-05-02', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(4, '2020-05-02', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(5, '2020-05-02', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(6, '2020-05-02', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(7, '2020-05-02', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(8, '2020-05-02', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(9, '2020-05-02', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(10, '2020-05-02', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(11, '2020-05-02', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(12, '2020-05-02', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(13, '2020-05-02', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(14, '2020-05-03', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(15, '2020-05-04', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(16, '2020-05-05', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(17, '2020-05-03', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(18, '2020-05-04', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(19, '2020-05-05', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(20, '2020-05-03', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(21, '2020-05-04', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(22, '2020-05-05', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(23, '2020-05-03', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(24, '2020-05-04', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(25, '2020-05-05', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(26, '2020-05-03', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(27, '2020-05-04', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(28, '2020-05-05', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(29, '2020-05-03', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(30, '2020-05-04', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(31, '2020-05-05', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(32, '2020-05-03', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(33, '2020-05-04', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(34, '2020-05-05', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(35, '2020-05-03', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(36, '2020-05-04', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(37, '2020-05-05', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(38, '2020-05-03', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(39, '2020-05-04', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(40, '2020-05-05', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(41, '2020-05-03', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(42, '2020-05-04', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(43, '2020-05-05', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(44, '2020-05-03', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(45, '2020-05-04', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(46, '2020-05-05', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(47, '2020-05-03', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(48, '2020-05-04', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(49, '2020-05-05', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(50, '2020-05-03', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(51, '2020-05-04', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(52, '2020-05-05', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(53, '2020-05-06', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(54, '2020-05-07', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(55, '2020-05-08', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(56, '2020-05-09', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(57, '2020-05-10', '19:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(58, '2020-05-06', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(59, '2020-05-07', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(60, '2020-05-08', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(61, '2020-05-09', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(62, '2020-05-10', '19:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(63, '2020-05-06', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(64, '2020-05-07', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(65, '2020-05-08', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(66, '2020-05-09', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(67, '2020-05-10', '19:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(68, '2020-05-06', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(69, '2020-05-07', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(70, '2020-05-08', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(71, '2020-05-09', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(72, '2020-05-10', '19:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(73, '2020-05-06', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(74, '2020-05-07', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(75, '2020-05-08', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(76, '2020-05-09', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(77, '2020-05-10', '19:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(78, '2020-05-06', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(79, '2020-05-07', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(80, '2020-05-08', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(81, '2020-05-09', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(82, '2020-05-10', '19:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(83, '2020-05-06', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(84, '2020-05-07', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(85, '2020-05-08', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(86, '2020-05-09', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(87, '2020-05-10', '19:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(88, '2020-05-06', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(89, '2020-05-07', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(90, '2020-05-08', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(91, '2020-05-09', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(92, '2020-05-10', '19:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(93, '2020-05-06', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(94, '2020-05-07', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(95, '2020-05-08', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(96, '2020-05-09', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(97, '2020-05-10', '19:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(98, '2020-05-06', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(99, '2020-05-07', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(100, '2020-05-08', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(101, '2020-05-09', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(102, '2020-05-10', '19:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(103, '2020-05-06', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(104, '2020-05-07', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(105, '2020-05-08', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(106, '2020-05-09', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(107, '2020-05-10', '19:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(108, '2020-05-06', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(109, '2020-05-07', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(110, '2020-05-08', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(111, '2020-05-09', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(112, '2020-05-10', '19:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(113, '2020-05-06', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(114, '2020-05-07', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(115, '2020-05-08', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(116, '2020-05-09', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(117, '2020-05-10', '19:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(118, '2020-05-11', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(119, '2020-05-12', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(120, '2020-05-13', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(121, '2020-05-14', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(122, '2020-05-15', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(123, '2020-05-16', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(124, '2020-05-17', '19:50:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(125, '2020-05-11', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(126, '2020-05-12', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(127, '2020-05-13', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(128, '2020-05-14', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(129, '2020-05-15', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(130, '2020-05-16', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(131, '2020-05-17', '19:50:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(132, '2020-05-11', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(133, '2020-05-12', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(134, '2020-05-13', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(135, '2020-05-14', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(136, '2020-05-15', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(137, '2020-05-16', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(138, '2020-05-17', '19:50:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(139, '2020-05-11', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(140, '2020-05-12', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(141, '2020-05-13', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(142, '2020-05-14', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(143, '2020-05-15', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(144, '2020-05-16', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(145, '2020-05-17', '19:50:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(146, '2020-05-11', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(147, '2020-05-12', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(148, '2020-05-13', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(149, '2020-05-14', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(150, '2020-05-15', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(151, '2020-05-16', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(152, '2020-05-17', '19:50:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(153, '2020-05-11', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(154, '2020-05-12', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(155, '2020-05-13', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(156, '2020-05-14', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(157, '2020-05-15', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(158, '2020-05-16', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(159, '2020-05-17', '19:50:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(160, '2020-05-11', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(161, '2020-05-12', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(162, '2020-05-13', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(163, '2020-05-14', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(164, '2020-05-15', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(165, '2020-05-16', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(166, '2020-05-17', '19:50:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(167, '2020-05-11', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(168, '2020-05-12', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(169, '2020-05-13', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(170, '2020-05-14', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(171, '2020-05-15', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(172, '2020-05-16', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(173, '2020-05-17', '19:50:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(174, '2020-05-11', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(175, '2020-05-12', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(176, '2020-05-13', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(177, '2020-05-14', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(178, '2020-05-15', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(179, '2020-05-16', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(180, '2020-05-17', '19:50:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(181, '2020-05-11', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(182, '2020-05-12', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(183, '2020-05-13', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(184, '2020-05-14', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(185, '2020-05-15', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(186, '2020-05-16', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(187, '2020-05-17', '19:50:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(188, '2020-05-11', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(189, '2020-05-12', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(190, '2020-05-13', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(191, '2020-05-14', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(192, '2020-05-15', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(193, '2020-05-16', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(194, '2020-05-17', '19:50:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(195, '2020-05-11', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(196, '2020-05-12', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(197, '2020-05-13', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(198, '2020-05-14', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(199, '2020-05-15', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(200, '2020-05-16', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(201, '2020-05-17', '19:50:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(202, '2020-05-11', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(203, '2020-05-12', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(204, '2020-05-13', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(205, '2020-05-14', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(206, '2020-05-15', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(207, '2020-05-16', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(208, '2020-05-17', '19:50:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(209, '2020-05-02', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(210, '2020-05-03', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(211, '2020-05-04', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(212, '2020-05-05', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(213, '2020-05-06', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(214, '2020-05-07', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(215, '2020-05-08', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(216, '2020-05-09', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(217, '2020-05-10', '20:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(218, '2020-05-02', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(219, '2020-05-03', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(220, '2020-05-04', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(221, '2020-05-05', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(222, '2020-05-06', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(223, '2020-05-07', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(224, '2020-05-08', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(225, '2020-05-09', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(226, '2020-05-10', '20:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(227, '2020-05-02', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(228, '2020-05-03', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(229, '2020-05-04', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(230, '2020-05-05', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(231, '2020-05-06', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(232, '2020-05-07', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(233, '2020-05-08', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(234, '2020-05-09', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(235, '2020-05-10', '20:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(236, '2020-05-02', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(237, '2020-05-03', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(238, '2020-05-04', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(239, '2020-05-05', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(240, '2020-05-06', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(241, '2020-05-07', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(242, '2020-05-08', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(243, '2020-05-09', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(244, '2020-05-10', '20:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(245, '2020-05-02', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(246, '2020-05-03', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(247, '2020-05-04', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(248, '2020-05-05', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(249, '2020-05-06', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(250, '2020-05-07', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(251, '2020-05-08', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(252, '2020-05-09', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(253, '2020-05-10', '20:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(254, '2020-05-02', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(255, '2020-05-03', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(256, '2020-05-04', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(257, '2020-05-05', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(258, '2020-05-06', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(259, '2020-05-07', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(260, '2020-05-08', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(261, '2020-05-09', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(262, '2020-05-10', '20:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(263, '2020-05-02', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(264, '2020-05-03', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(265, '2020-05-04', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(266, '2020-05-05', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(267, '2020-05-06', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(268, '2020-05-07', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(269, '2020-05-08', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(270, '2020-05-09', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(271, '2020-05-10', '20:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(272, '2020-05-02', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(273, '2020-05-03', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(274, '2020-05-04', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(275, '2020-05-05', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(276, '2020-05-06', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(277, '2020-05-07', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(278, '2020-05-08', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(279, '2020-05-09', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(280, '2020-05-10', '20:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(281, '2020-05-02', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(282, '2020-05-03', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(283, '2020-05-04', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(284, '2020-05-05', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(285, '2020-05-06', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(286, '2020-05-07', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(287, '2020-05-08', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(288, '2020-05-09', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(289, '2020-05-10', '20:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(290, '2020-05-02', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(291, '2020-05-03', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(292, '2020-05-04', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(293, '2020-05-05', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(294, '2020-05-06', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(295, '2020-05-07', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(296, '2020-05-08', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(297, '2020-05-09', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(298, '2020-05-10', '20:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(299, '2020-05-02', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(300, '2020-05-03', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(301, '2020-05-04', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(302, '2020-05-05', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(303, '2020-05-06', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(304, '2020-05-07', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(305, '2020-05-08', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(306, '2020-05-09', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(307, '2020-05-10', '20:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(308, '2020-05-02', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(309, '2020-05-03', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(310, '2020-05-04', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(311, '2020-05-05', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(312, '2020-05-06', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(313, '2020-05-07', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(314, '2020-05-08', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(315, '2020-05-09', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(316, '2020-05-10', '20:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(317, '2020-05-02', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(318, '2020-05-03', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(319, '2020-05-04', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(320, '2020-05-05', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(321, '2020-05-06', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(322, '2020-05-07', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(323, '2020-05-08', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(324, '2020-05-09', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(325, '2020-05-10', '20:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(326, '2020-05-02', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(327, '2020-05-03', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(328, '2020-05-04', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(329, '2020-05-05', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(330, '2020-05-06', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(331, '2020-05-07', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(332, '2020-05-08', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(333, '2020-05-09', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(334, '2020-05-10', '21:30:00', 1, 1, 'Pasta Bologna', 'Chicken Burger'),
(335, '2020-05-02', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(336, '2020-05-03', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(337, '2020-05-04', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(338, '2020-05-05', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(339, '2020-05-06', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(340, '2020-05-07', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(341, '2020-05-08', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(342, '2020-05-09', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(343, '2020-05-10', '21:30:00', 1, 2, 'Pasta Bologna', 'Chicken Burger'),
(344, '2020-05-02', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(345, '2020-05-03', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(346, '2020-05-04', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(347, '2020-05-05', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(348, '2020-05-06', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(349, '2020-05-07', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(350, '2020-05-08', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(351, '2020-05-09', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(352, '2020-05-10', '21:30:00', 1, 3, 'Pasta Bologna', 'Chicken Burger'),
(353, '2020-05-02', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(354, '2020-05-03', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(355, '2020-05-04', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(356, '2020-05-05', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(357, '2020-05-06', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(358, '2020-05-07', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(359, '2020-05-08', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(360, '2020-05-09', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(361, '2020-05-10', '21:30:00', 1, 4, 'Pasta Bologna', 'Chicken Burger'),
(362, '2020-05-02', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(363, '2020-05-03', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(364, '2020-05-04', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(365, '2020-05-05', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(366, '2020-05-06', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(367, '2020-05-07', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(368, '2020-05-08', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(369, '2020-05-09', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(370, '2020-05-10', '21:30:00', 1, 5, 'Pasta Bologna', 'Chicken Burger'),
(371, '2020-05-02', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(372, '2020-05-03', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(373, '2020-05-04', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(374, '2020-05-05', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(375, '2020-05-06', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(376, '2020-05-07', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(377, '2020-05-08', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(378, '2020-05-09', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(379, '2020-05-10', '21:30:00', 1, 6, 'Pasta Bologna', 'Chicken Burger'),
(380, '2020-05-02', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(381, '2020-05-03', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(382, '2020-05-04', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(383, '2020-05-05', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(384, '2020-05-06', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(385, '2020-05-07', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(386, '2020-05-08', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(387, '2020-05-09', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(388, '2020-05-10', '21:30:00', 1, 7, 'Pasta Bologna', 'Chicken Burger'),
(389, '2020-05-02', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(390, '2020-05-03', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(391, '2020-05-04', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(392, '2020-05-05', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(393, '2020-05-06', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(394, '2020-05-07', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(395, '2020-05-08', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(396, '2020-05-09', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(397, '2020-05-10', '21:30:00', 1, 8, 'Pasta Bologna', 'Chicken Burger'),
(398, '2020-05-02', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(399, '2020-05-03', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(400, '2020-05-04', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(401, '2020-05-05', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(402, '2020-05-06', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(403, '2020-05-07', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(404, '2020-05-08', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(405, '2020-05-09', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(406, '2020-05-10', '21:30:00', 1, 9, 'Pasta Bologna', 'Chicken Burger'),
(407, '2020-05-02', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(408, '2020-05-03', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(409, '2020-05-04', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(410, '2020-05-05', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(411, '2020-05-06', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(412, '2020-05-07', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(413, '2020-05-08', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(414, '2020-05-09', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(415, '2020-05-10', '21:30:00', 1, 10, 'Pasta Bologna', 'Chicken Burger'),
(416, '2020-05-02', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(417, '2020-05-03', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(418, '2020-05-04', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(419, '2020-05-05', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(420, '2020-05-06', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(421, '2020-05-07', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(422, '2020-05-08', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(423, '2020-05-09', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(424, '2020-05-10', '21:30:00', 1, 11, 'Pasta Bologna', 'Chicken Burger'),
(425, '2020-05-02', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(426, '2020-05-03', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(427, '2020-05-04', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(428, '2020-05-05', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(429, '2020-05-06', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(430, '2020-05-07', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(431, '2020-05-08', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(432, '2020-05-09', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(433, '2020-05-10', '21:30:00', 1, 12, 'Pasta Bologna', 'Chicken Burger'),
(434, '2020-05-02', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(435, '2020-05-03', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(436, '2020-05-04', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(437, '2020-05-05', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(438, '2020-05-06', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(439, '2020-05-07', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(440, '2020-05-08', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(441, '2020-05-09', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(442, '2020-05-10', '21:30:00', 1, 13, 'Pasta Bologna', 'Chicken Burger'),
(443, '2020-05-11', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(444, '2020-05-12', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(445, '2020-05-13', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(446, '2020-05-14', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(447, '2020-05-15', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(448, '2020-05-16', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(449, '2020-05-17', '20:40:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(450, '2020-05-11', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(451, '2020-05-12', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(452, '2020-05-13', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(453, '2020-05-14', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(454, '2020-05-15', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(455, '2020-05-16', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(456, '2020-05-17', '20:40:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(457, '2020-05-11', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(458, '2020-05-12', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(459, '2020-05-13', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(460, '2020-05-14', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(461, '2020-05-15', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(462, '2020-05-16', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(463, '2020-05-17', '20:40:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(464, '2020-05-11', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(465, '2020-05-12', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(466, '2020-05-13', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(467, '2020-05-14', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(468, '2020-05-15', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(469, '2020-05-16', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(470, '2020-05-17', '20:40:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(471, '2020-05-11', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(472, '2020-05-12', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(473, '2020-05-13', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(474, '2020-05-14', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(475, '2020-05-15', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(476, '2020-05-16', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(477, '2020-05-17', '20:40:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(478, '2020-05-11', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(479, '2020-05-12', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(480, '2020-05-13', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(481, '2020-05-14', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(482, '2020-05-15', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(483, '2020-05-16', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(484, '2020-05-17', '20:40:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(485, '2020-05-11', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(486, '2020-05-12', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(487, '2020-05-13', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(488, '2020-05-14', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(489, '2020-05-15', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(490, '2020-05-16', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(491, '2020-05-17', '20:40:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(492, '2020-05-11', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(493, '2020-05-12', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(494, '2020-05-13', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(495, '2020-05-14', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(496, '2020-05-15', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(497, '2020-05-16', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(498, '2020-05-17', '20:40:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(499, '2020-05-11', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(500, '2020-05-12', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(501, '2020-05-13', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(502, '2020-05-14', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(503, '2020-05-15', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(504, '2020-05-16', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(505, '2020-05-17', '20:40:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(506, '2020-05-11', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(507, '2020-05-12', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(508, '2020-05-13', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(509, '2020-05-14', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(510, '2020-05-15', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(511, '2020-05-16', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(512, '2020-05-17', '20:40:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(513, '2020-05-11', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(514, '2020-05-12', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(515, '2020-05-13', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(516, '2020-05-14', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(517, '2020-05-15', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(518, '2020-05-16', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(519, '2020-05-17', '20:40:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(520, '2020-05-11', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(521, '2020-05-12', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(522, '2020-05-13', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(523, '2020-05-14', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(524, '2020-05-15', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(525, '2020-05-16', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(526, '2020-05-17', '20:40:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(527, '2020-05-11', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(528, '2020-05-12', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(529, '2020-05-13', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(530, '2020-05-14', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(531, '2020-05-15', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(532, '2020-05-16', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(533, '2020-05-17', '20:40:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(534, '2020-05-11', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(535, '2020-05-12', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(536, '2020-05-13', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(537, '2020-05-14', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(538, '2020-05-15', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(539, '2020-05-16', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(540, '2020-05-17', '21:00:00', 1, 1, 'Beef Burger', 'Meat Lasagna'),
(541, '2020-05-11', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(542, '2020-05-12', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(543, '2020-05-13', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(544, '2020-05-14', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(545, '2020-05-15', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(546, '2020-05-16', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(547, '2020-05-17', '21:00:00', 1, 2, 'Beef Burger', 'Meat Lasagna'),
(548, '2020-05-11', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(549, '2020-05-12', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(550, '2020-05-13', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(551, '2020-05-14', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(552, '2020-05-15', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(553, '2020-05-16', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(554, '2020-05-17', '21:00:00', 1, 3, 'Beef Burger', 'Meat Lasagna'),
(555, '2020-05-11', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(556, '2020-05-12', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(557, '2020-05-13', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(558, '2020-05-14', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(559, '2020-05-15', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(560, '2020-05-16', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(561, '2020-05-17', '21:00:00', 1, 4, 'Beef Burger', 'Meat Lasagna'),
(562, '2020-05-11', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(563, '2020-05-12', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(564, '2020-05-13', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(565, '2020-05-14', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(566, '2020-05-15', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(567, '2020-05-16', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(568, '2020-05-17', '21:00:00', 1, 5, 'Beef Burger', 'Meat Lasagna'),
(569, '2020-05-11', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(570, '2020-05-12', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(571, '2020-05-13', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(572, '2020-05-14', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(573, '2020-05-15', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(574, '2020-05-16', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(575, '2020-05-17', '21:00:00', 1, 6, 'Beef Burger', 'Meat Lasagna'),
(576, '2020-05-11', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(577, '2020-05-12', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(578, '2020-05-13', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(579, '2020-05-14', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(580, '2020-05-15', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(581, '2020-05-16', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(582, '2020-05-17', '21:00:00', 1, 7, 'Beef Burger', 'Meat Lasagna'),
(583, '2020-05-11', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(584, '2020-05-12', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(585, '2020-05-13', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(586, '2020-05-14', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(587, '2020-05-15', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(588, '2020-05-16', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(589, '2020-05-17', '21:00:00', 1, 8, 'Beef Burger', 'Meat Lasagna'),
(590, '2020-05-11', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(591, '2020-05-12', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(592, '2020-05-13', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(593, '2020-05-14', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(594, '2020-05-15', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(595, '2020-05-16', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(596, '2020-05-17', '21:00:00', 1, 9, 'Beef Burger', 'Meat Lasagna'),
(597, '2020-05-11', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(598, '2020-05-12', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(599, '2020-05-13', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(600, '2020-05-14', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(601, '2020-05-15', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(602, '2020-05-16', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(603, '2020-05-17', '21:00:00', 1, 10, 'Beef Burger', 'Meat Lasagna'),
(604, '2020-05-11', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(605, '2020-05-12', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(606, '2020-05-13', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(607, '2020-05-14', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(608, '2020-05-15', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(609, '2020-05-16', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(610, '2020-05-17', '21:00:00', 1, 11, 'Beef Burger', 'Meat Lasagna'),
(611, '2020-05-11', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(612, '2020-05-12', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(613, '2020-05-13', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(614, '2020-05-14', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(615, '2020-05-15', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(616, '2020-05-16', '21:00:00', 1, 12, 'Beef Burger', 'Meat Lasagna'),
(618, '2020-05-11', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(619, '2020-05-12', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(620, '2020-05-13', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(621, '2020-05-14', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(622, '2020-05-15', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(623, '2020-05-16', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna'),
(624, '2020-05-17', '21:00:00', 1, 13, 'Beef Burger', 'Meat Lasagna');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pickupweeklymenu`
--
ALTER TABLE `pickupweeklymenu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weeklymenu`
--
ALTER TABLE `weeklymenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
