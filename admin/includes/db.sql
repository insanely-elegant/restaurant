-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2020 at 09:01 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

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
(1, '2020-05-19', 'enabled'),
(2, '2020-05-20', 'enabled'),
(3, '2020-05-21', 'enabled'),
(4, '2020-05-22', 'enabled'),
(5, '2020-05-23', 'enabled'),
(7, '2020-06-09', 'enabled'),
(8, '2020-06-10', 'enabled'),
(9, '2020-06-11', 'enabled'),
(10, '2020-06-12', 'enabled'),
(11, '2020-06-13', 'enabled'),
(12, '2020-06-16', 'enabled'),
(13, '2020-06-17', 'enabled'),
(14, '2020-06-18', 'enabled'),
(15, '2020-06-19', 'enabled'),
(16, '2020-06-20', 'enabled'),
(17, '2020-06-23', 'enabled'),
(18, '2020-06-24', 'enabled'),
(19, '2020-06-25', 'enabled'),
(20, '2020-06-26', 'enabled'),
(21, '2020-06-27', 'enabled'),
(22, '2020-06-30', 'enabled'),
(23, '2020-07-01', 'enabled'),
(24, '2020-06-02', 'enabled'),
(25, '2020-07-02', 'enabled'),
(26, '2020-07-03', 'enabled'),
(27, '2020-07-04', 'enabled');

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
(5, 'Meat Lasagna ( With Cheese )', 'With Asiago and Romano Cheese'),
(6, 'Chicken Alfredo over Penne Pasta', 'Juicy grilled chicken is served warm on a bed of fettuccine pasta with Parmesan cheese.'),
(7, 'Denver Omelette', 'Bacon, Breakfast Potatoes'),
(8, 'Bacon Cheeseburger', 'With Bleu or Cheddar Cheese, French Fries'),
(9, 'Chipotle Burger (V)', 'With French Fries'),
(10, 'Beef Pot Roast', 'Mashed Potatoes and Gravy'),
(11, 'Almond Crusted Cod', 'Most and Flakey'),
(12, 'Cranberry Glazed Pork Tenderloin', ''),
(13, 'Roast Pork Tender Loin', 'With Carmalized Onions'),
(14, 'Baked Salmon', 'Pretzel Coated'),
(15, 'Shrimp Scampi', 'Over Fettucine'),
(16, 'Famous Beechers Mac n Cheese', 'W/Aged White Cheddar'),
(17, 'BBQ Chicken Breast', ''),
(18, 'Parmesan Chicken', 'Panko and Romano Cheese Crust'),
(19, 'Salisbury Steak', ''),
(20, 'Chicken Marsala', ''),
(21, 'Holiday Observed', ''),
(22, 'Meat Lasagna ( Regular )', 'Garlic Bread'),
(23, 'Chicken Drumsticks', 'Mango Glazed'),
(25, 'Caprese Pasta (V)', 'Cherry Tomatoes, onions, Garlic, Fresh Basil'),
(26, 'Shrimp Louie Salad', 'With Eggs, Tomatoes, Olives, 1000 Island Dressing'),
(27, 'Tuna Melt', 'Sour Dough, Pickles, swiss, Fries'),
(28, 'Classic Shepherd\'s Pie', ''),
(29, 'Shrimp Tempura', 'Ponzu Dipping Sauce, Crispy spring Roll'),
(30, 'Chicken Picata', 'Lemon, Onions, Capers'),
(31, 'Flat Iron Steak', 'Flame Broiled'),
(32, 'Tender Pork Medallions w Mushroom Sauce', 'w Mushroom Sauce'),
(33, 'Soy and Ginger Salmon', ''),
(34, 'General Tso\'s Chicken', ''),
(35, 'Pecan Crusted Cod', ''),
(36, 'Chicken Enchiladas', ''),
(37, 'Filet Mignon', ''),
(38, ' Dungeness Crab Cakes', ''),
(39, 'Pulled BBQ Pork Sandwich', 'With Fries'),
(40, 'Bean & Veggie Bowl (V)', 'w/ Tomatoes, Avocados, Garbanzos, \r\nOnions, Asparagus, Mushrooms'),
(41, 'Pappardelle Pasta (V)', 'W Sundried ,Tomatoes, Broccoli,\r\nAsparagus, mushrooms, Onions'),
(42, 'Stuffed Cabbage Rolls', 'w/Seasoned Beef and Tomato Sauce'),
(43, 'Teriyaki Chicken', 'Crispy Won-Tons'),
(44, 'Grilled BBQ Salmon', ''),
(45, 'Meatloaf', 'w/mashed potatoes'),
(46, 'Eggplant Parmesan with Fettucine (V)', ''),
(47, 'Chicken Parmesan with Fettuccine', ''),
(48, 'Roast Pork Loin', 'Cranberry and Hazelnut'),
(49, 'Citrus Tilapia', 'Southwest Style'),
(50, 'Smoked Turkey Sandwich', 'w/Cheddar & Pesto'),
(51, 'Fish Soft Tacos', 'w/Grilled Mahi Mahi'),
(52, 'Seared Flounder', 'Tortilla Crusted'),
(53, 'Lemon Herb Chicken', 'Bone-in Breast'),
(54, 'Grilled Salmon', 'Smoked Paprika Rub'),
(55, 'Pasta LaVegentarian (V)', 'with Seasonal Local Vegetables,\r\nGarlic & Extra Virgin Olive Oil'),
(56, 'Coconut Shrimp', 'Veggie Spring Roll'),
(57, 'Cobb Salad', 'w/Chicken, Bacon, Eggs, Avocado,\r\nTomatoes, and Bleu Cheese'),
(58, 'Spaghetti', 'with Meat Sauce'),
(59, 'Stuffed Sole', 'w/Crab and Scallop'),
(60, 'Happy 4th Of July Cheeseburger', 'Salads, Ice Cream'),
(61, 'Happy 4th of July Jumbo Hot Dog', 'Salads, Ice Cream');

-- --------------------------------------------------------

--
-- Table structure for table `freediner`
--

CREATE TABLE `freediner` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `staffname` varchar(255) NOT NULL DEFAULT 'Unknown Free Diner',
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
  `orderType` varchar(255) NOT NULL,
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

INSERT INTO `freediner` (`id`, `bookingid`, `name`, `staffname`, `dishname`, `roomid`, `room`, `tablename`, `seat`, `guestno`, `isConfirmed`, `isCheckedin`, `diningdate`, `diningtime`, `dinerType`, `orderType`, `freedinermealprice`, `freedinermealtaxpercent`, `freedinermealtaxvalue`, `freedinermealtotalprice`, `grandtotal`, `freedinertotal`) VALUES
(3, '', 'Free Diner', 'Brittany Mudariki', 'Soy and Ginger Salmon', 0, '', '', '1', '1', '', '', '2020-06-17', '17:30:00', 'freediner', 'takeout', '14.00', '0.00', '0.00', '14.00', '14.00', '0.00'),
(4, '', 'Free Diner', 'Brittany Mudariki', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', 0, '', '', '1', '1', '', '', '2020-06-19', '17:30:00', 'freediner', 'takeout', '14.00', '0.00', '0.00', '14.00', '14.00', '0.00'),
(5, '', 'Free Diner', 'Brittany Mudariki', 'Teriyaki Chicken', 0, '', '', '1', '1', '', '', '2020-06-23', '00:17:30', 'freediner', 'takeout', '14.00', '0.00', '0.00', '14.00', '14.00', '0.00'),
(6, '', 'Free Diner', 'Brittany Mudariki', 'Grilled BBQ Salmon', 0, '', '', '1', '1', '', '', '2020-06-24', '00:17:30', 'freediner', 'takeout', '14.00', '0.00', '0.00', '14.00', '14.00', '0.00'),
(8, '', 'Free Diner', 'Brittany Mudariki', 'Citrus Tilapia', 0, '', '', '1', '1', '', '', '2020-06-26', '00:17:30', 'freediner', 'takeout', '14.00', '0.00', '0.00', '14.00', '14.00', '0.00');

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
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `username`, `password`, `firstname`) VALUES
(1, 'PM02F', 'PM02F', 'Brittany');

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
(1, '', 'Duane and Toni', 'DeSalvo', 'Famous Beechers Mac n Cheese', '2020-05-19', '17:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(2, '', 'Duane and Toni', 'DeSalvo', 'Roast Pork Tender Loin', '2020-05-19', '17:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(3, '', 'Jean', 'Myre', 'Roast Pork Tender Loin', '2020-05-19', '17:00:00', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(4, '', 'Jean', 'Myre', 'Famous Beechers Mac n Cheese', '2020-05-19', '17:00:00', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(5, '', 'Margie', 'Lindstrom', 'Roast Pork Tender Loin', '2020-05-19', '17:00:00', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(6, '', 'Art', 'Shrumm', 'Famous Beechers Mac n Cheese', '2020-05-19', '17:00:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(7, '', 'Art', 'Shrumm', 'Baked Salmon', '2020-05-20', '17:00:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(8, '', 'Art', 'Shrumm', 'Salisbury Steak', '2020-05-22', '17:00:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(9, '', 'Margie', 'Lindstrom', 'Salisbury Steak', '2020-05-22', '17:00:00', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(10, '', 'Virginia', 'Hamrick', 'Famous Beechers Mac n Cheese', '2020-05-19', '17:00:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(11, '', 'Virginia', 'Hamrick', 'Baked Salmon', '2020-05-20', '17:00:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(12, '', 'Virginia', 'Hamrick', 'Baked Salmon', '2020-05-20', '17:00:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(13, '', 'Virginia', 'Hamrick', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(14, '', 'Virginia', 'Hamrick', 'Chicken Marsala', '2020-05-22', '17:00:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(15, '', 'Jim', 'Ganley', 'Famous Beechers Mac n Cheese', '2020-05-19', '17:00:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(16, '', 'Jim', 'Ganley', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(17, '', 'Jim', 'Ganley', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(18, '', 'Jim', 'Ganley', 'Salisbury Steak', '2020-05-22', '17:00:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(19, '', 'Jim', 'Ganley', 'Chicken Marsala', '2020-05-22', '17:00:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(20, '', 'Duane and Toni', 'DeSalvo', 'Baked Salmon', '2020-05-20', '17:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(21, '', 'Duane and Toni', 'DeSalvo', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(22, '', 'Duane and Toni', 'DeSalvo', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(23, '', 'Cathy', 'Barich', 'Baked Salmon', '2020-05-20', '17:00:00', 'E103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(24, '', 'Jacqueline', 'Alten', 'Baked Salmon', '2020-05-20', '17:00:00', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(25, '', 'Jacqueline', 'Alten', 'Salisbury Steak', '2020-05-22', '17:00:00', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(26, '', 'Julie', 'Dey', 'Roast Pork Tender Loin', '2020-05-19', '17:00:00', 'E214', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(27, '', 'Pattricia', 'Brown', 'Baked Salmon', '2020-05-20', '17:00:00', 'E304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(28, '', 'Jack and Margrethe', 'Mickel', 'Baked Salmon', '2020-05-20', '17:00:00', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(29, '', 'Pat and Phil', 'Eisenhauer', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(30, '', 'Dick and Darlean', 'Hanner', 'Baked Salmon', '2020-05-20', '17:00:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(31, '', 'Dick and Darlean', 'Hanner', 'Baked Salmon', '2020-05-20', '17:00:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(32, '', 'May', 'Liming', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'C113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(33, '', 'Florence', 'Bannister', 'Baked Salmon', '2020-05-20', '17:00:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(34, '', 'Jimbay and Yeedeh', 'Loh', 'Baked Salmon', '2020-05-20', '17:00:00', 'E212', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(35, '', 'Skip', 'Dockstader', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(36, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Baked Salmon', '2020-05-20', '17:00:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(37, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Baked Salmon', '2020-05-20', '17:00:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(38, '', 'Nina and David', 'Bergman/Reigel', 'Baked Salmon', '2020-05-20', '17:00:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(39, '', 'John and Jean', 'Horsfall', 'Baked Salmon', '2020-05-20', '17:00:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(40, '', 'John and Jean', 'Horsfall', 'Baked Salmon', '2020-05-20', '17:00:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(41, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Baked Salmon', '2020-05-20', '17:00:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(42, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Baked Salmon', '2020-05-20', '17:00:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(43, '', 'Nancy', 'Koning', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(44, '', 'Blanche', 'Adams', 'Baked Salmon', '2020-05-20', '17:00:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(45, '', 'Ruth', 'Shigley', 'Baked Salmon', '2020-05-20', '17:00:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(46, '', 'John and Isa Maria', 'Murray', 'Baked Salmon', '2020-05-20', '17:00:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(47, '', 'John and Isa Maria', 'Murray', 'Baked Salmon', '2020-05-20', '17:00:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(48, '', 'Roselyn', 'Olson', 'Baked Salmon', '2020-05-20', '17:00:00', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(49, '', 'Roberta', 'Dawson', 'Baked Salmon', '2020-05-20', '17:00:00', 'E207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(50, '', 'Igor and Delores', 'Washetko', 'Baked Salmon', '2020-05-20', '17:00:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(51, '', 'Igor and Delores', 'Washetko', 'BBQ Chicken Breast', '2020-05-20', '17:00:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(52, '', 'May', 'Liming', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(53, '', 'Karl and Faith', 'Thunemann', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(54, '', 'Karl and Faith', 'Thunemann', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(55, '', 'Florence', 'Bannister', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(56, '', 'Jack and Mary', 'Stumph', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'C112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(57, '', 'Skip', 'Dockstader', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(58, '', 'Phyllis', 'Soubier', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(59, '', 'Jeanie', 'Boddy', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'C205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(60, '', 'Nina and David', 'Bergman/Reigel', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(61, '', 'John and Jean', 'Horsfall', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(62, '', 'Helen', 'Jaspen', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(63, '', 'Dick and Carole', 'Kite', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(64, '', 'Dick and Carole', 'Kite', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'W106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(65, '', 'Marlene', 'Livingston', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(66, '', 'Iris', 'Snow', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W201', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(67, '', 'Hal and Susan', 'David', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(68, '', 'Hal and Susan', 'David', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(69, '', 'Nancy', 'Koning', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(70, '', 'Blanche', 'Adams', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(71, '', 'Ruth', 'Shigley', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(72, '', 'Roselyn', 'Olson', 'Parmesan Chicken', '2020-05-21', '17:00:00', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(73, '', 'Don and Anne', 'Magai', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(74, '', 'Don and Anne', 'Magai', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(75, '', 'Igor and Delores', 'Washetko', 'Shrimp Scampi', '2020-05-21', '17:00:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(76, '', 'Duane and Toni', 'DeSalvo', 'Chicken Drumsticks', '2020-06-09', '05:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(77, '', 'Duane and Toni', 'DeSalvo', 'Meat Lasagna', '2020-06-09', '05:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(78, '', 'Igor and Delores', 'Washetko', 'Chicken Drumsticks', '2020-06-09', '05:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(79, '', 'Art', 'Shrumm', 'Chicken Drumsticks', '2020-06-09', '05:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(80, '', 'Jim', 'Ganley', 'Meat Lasagna', '2020-06-09', '05:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(81, '', 'Jacqueline', 'Alten', 'Meat Lasagna', '2020-06-09', '05:30:00', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(82, '', 'Igor and Delores', 'Washetko', 'Grilled Salmon', '2020-06-10', '05:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(83, '', 'Art', 'Shrumm', 'Grilled Salmon', '2020-06-10', '05:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(84, '', 'Duane and Toni', 'DeSalvo', 'Grilled Salmon', '2020-06-10', '05:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(85, '', 'Jean', 'Myre', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(86, '', 'Carloyn', 'Van', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(87, '', 'Carloyn', 'Van', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(88, '', 'Art', 'Shrumm', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(89, '', 'Martin', 'Matyas', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(90, '', 'Virginia', 'Hamrick', 'Pappardelle Pasta (V)', '2020-06-16', '17:30:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(91, '', 'John and Jean', 'Horsfall', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(92, '', 'Duane and Toni', 'DeSalvo', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(93, '', 'Ruth', 'Shigley', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(94, '', 'Igor and Delores', 'Washetko', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(95, '', 'Julie', 'Dey', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E214', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(96, '', 'Suzanne', 'Tessaro', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(97, '', 'Carl and Linda', 'Schmidt', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(98, '', 'Carl and Linda', 'Schmidt', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(99, '', 'Jack and Mary', 'Stumph', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'C112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(100, '', 'Nancy', 'Koning', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(101, '', 'Carloyn', 'Van', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(102, '', 'Carloyn', 'Van', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(103, '', 'Virginia', 'Hamrick', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(104, '', 'John and Jean', 'Horsfall', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(105, '', 'John and Jean', 'Horsfall', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(108, '', 'Karen', 'Morgan', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'E108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(109, '', 'Duane and Toni', 'DeSalvo', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(110, '', 'Iris', 'Watson', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(111, '', 'John and Isa Maria', 'Murray', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(112, '', 'John and Isa Maria', 'Murray', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(113, '', 'Dick and Darlean', 'Hanner', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(114, '', 'Dick and Darlean', 'Hanner', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(115, '', 'Ruth', 'Shigley', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(116, '', 'Jack and Margrethe', 'Mickel', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(117, '', 'Jack and Margrethe', 'Mickel', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(118, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(119, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(120, '', 'Pattricia', 'Brown', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(122, '', 'Pat and Phil', 'Eisenhauer', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(123, '', 'Pat and Phil', 'Eisenhauer', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(124, '', 'Igor and Delores', 'Washetko', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(125, '', 'Hal and Susan', 'David', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(126, '', 'Hal and Susan', 'David', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(127, '', 'Suzanne', 'Tessaro', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(128, '', 'Nancy', 'Koning', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(129, '', 'Florence', 'Bannister', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(130, '', 'Florence', 'Bannister', 'Pappardelle Pasta (V)', '2020-06-16', '17:30:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(131, '', 'Carloyn', 'Van', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(132, '', 'Carloyn', 'Van', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(133, '', 'Duane and Toni', 'DeSalvo', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(134, '', 'Virginia', 'Hamrick', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(135, '', 'John and Jean', 'Horsfall', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(136, '', 'John and Jean', 'Horsfall', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(137, '', 'Art', 'Shrumm', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(138, '', 'Ruth', 'Shigley', 'Chicken Enchiladas', '2020-06-18', '17:30:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(139, '', 'Igor and Delores', 'Washetko', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(140, '', 'Florence', 'Bannister', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(141, '', 'Jean', 'Myre', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(142, '', 'Karen', 'Morgan', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(143, '', 'Melodye', 'Gold', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(144, '', 'Iris', 'Watson', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(145, '', 'Nancy', 'Koning', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(146, '', 'Carloyn', 'Van', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(147, '', 'Carloyn', 'Van', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(148, '', 'Art', 'Shrumm', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(149, '', 'Martin', 'Matyas', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(150, '', 'Virginia', 'Hamrick', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(151, '', 'Jim', 'Ganley', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(152, '', 'Jacqueline', 'Alten', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(154, '', 'Jacqueline', 'Alten', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(155, '', 'John and Jean', 'Horsfall', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(156, '', 'Helen', 'Jaspen', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(157, '', 'Marge', 'Higson', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E209', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(158, '', 'Phyllis', 'Soubier', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(159, '', 'Duane and Toni', 'DeSalvo', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(160, '', 'Duane and Toni', 'DeSalvo', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(161, '', 'Jan and Gary', 'Brandt/Marshall', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(162, '', 'Jan and Gary', 'Brandt/Marshall', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(163, '', 'Jeanie', 'Boddy', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(164, '', 'Jeanie', 'Boddy', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(165, '', 'Gloria', 'Pong', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E201', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(166, '', 'John and Isa Maria', 'Murray', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(167, '', 'John and Isa Maria', 'Murray', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(168, '', 'Dick and Darlean', 'Hanner', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(169, '', 'Dick and Darlean', 'Hanner', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(170, '', 'Ruth', 'Shigley', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(171, '', 'Jack and Margrethe', 'Mickel', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(172, '', 'Jack and Margrethe', 'Mickel', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(173, '', 'Pattricia', 'Brown', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(174, '', 'Pat and Phil', 'Eisenhauer', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(175, '', 'Pat and Phil', 'Eisenhauer', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(176, '', 'Bob and Sylvia', 'Anderson', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(177, '', 'Bob and Sylvia', 'Anderson', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(178, '', 'John and Kathy', 'Chan/Kwok', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(179, '', 'John and Kathy', 'Chan/Kwok', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(180, '', 'John and Kathy', 'Chan/Kwok', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(181, '', 'Igor and Delores', 'Washetko', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(182, '', 'Marlene', 'Livingston', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(183, '', 'Yoshi', 'Dahl', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(184, '', 'Yoshi', 'Dahl', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(185, '', 'Karl and Faith', 'Thunemann', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(186, '', 'Karl and Faith', 'Thunemann', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(187, '', 'Hal and Susan', 'David', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(188, '', 'Hal and Susan', 'David', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(189, '', 'May', 'Liming', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(190, '', 'Suzanne', 'Tessaro', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(191, '', 'Susan', 'Bailey', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C209', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(192, '', 'Gayle', 'Knoepfler', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(193, '', 'Donna', 'Schneider', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E305', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(194, '', 'Donna', 'Schneider', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E305', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(195, '', 'Carl and Linda', 'Schmidt', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(196, '', 'Carl and Linda', 'Schmidt', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(197, '', 'Jack and Mary', 'Stumph', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(198, '', 'Jack and Mary', 'Stumph', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(199, '', 'Mary', 'May', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E309', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(200, '', 'Bill and Sue', 'Absher/Caruso', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(201, '', 'Bill and Sue', 'Absher/Caruso', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(202, '', 'Florence', 'Bannister', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(203, '', 'Roberta', 'Dawson', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(204, '', 'Carloyn', 'Van', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(205, '', 'Carloyn', 'Van', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(206, '', 'Art', 'Shrumm', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(207, '', 'Virginia', 'Hamrick', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(208, '', 'Duane and Toni', 'DeSalvo', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(209, '', 'John and Jean', 'Horsfall', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(210, '', 'John and Jean', 'Horsfall', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(213, '', 'Ruth', 'Shigley', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(214, '', 'Hal and Susan', 'David', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(215, '', 'Hal and Susan', 'David', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(216, '', 'Jack and Mary', 'Stumph', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'C112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(217, '', 'Florence', 'Bannister', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(218, '', 'Lynne', 'Nierman', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(219, '', 'Skip', 'Dockstader', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(220, '', 'Skip', 'Dockstader', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(221, '', 'Skip', 'Dockstader', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(222, '', 'Skip', 'Dockstader', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(223, '', 'Skip', 'Dockstader', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(224, '', 'Cathy', 'Barich', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(225, '', 'Nina and David', 'Bergman/Reigel', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(226, '', 'Nina and David', 'Bergman/Reigel', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(227, '', 'Gary and Carolyn', 'Saaris/Reid', 'Pappardelle Pasta (V)', '2020-06-16', '17:30:00', 'W102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(228, '', 'Roselyn', 'Olson', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(229, '', 'Jim', 'Ganley', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(230, '', 'Don and Anne', 'Magai', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(231, '', 'Don and Anne', 'Magai', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(232, '', 'John and Kathy', 'Chan/Kwok', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(233, '', 'John and Kathy', 'Chan/Kwok', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(234, '', 'John and Kathy', 'Chan/Kwok', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(235, '', 'John and Kathy', 'Chan/Kwok', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(236, '', 'John and Kathy', 'Chan/Kwok', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(237, '', 'Jim', 'Ganley', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(238, '', 'Marge', 'Qualls', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W209', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(239, '', 'Jimbay and Yeedeh', 'Loh', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E212', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(240, '', 'Margie', 'Lindstrom', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(241, '', 'Nina and David', 'Bergman/Reigel', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(242, '', 'Jim', 'Ganley', 'Chicken Enchiladas', '2020-06-18', '17:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(243, '', 'Nina and David', 'Bergman/Reigel', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(244, '', 'Nina and David', 'Bergman/Reigel', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(245, '', 'Nina and David', 'Bergman/Reigel', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(246, '', 'Don and Anne', 'Magai', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(247, '', 'Don and Anne', 'Magai', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(248, '', 'Jimbay and Yeedeh', 'Loh', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E212', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(249, '', 'Margie', 'Lindstrom', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(250, '', 'Blanche', 'Adams', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(251, '', 'Blanche', 'Adams', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(252, '', 'Nina and David', 'Bergman/Reigel', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(253, '', 'Gary and Carolyn', 'Saaris/Reid', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'W102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(254, '', 'Gary and Carolyn', 'Saaris/Reid', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'W102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(255, '', 'Roselyn', 'Olson', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(256, '', 'Blanche', 'Adams', 'Tender Pork Medallions w Mushroom Sauce', '2020-06-16', '17:30:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(257, '', 'Blanche', 'Adams', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(258, '', 'Phyllis', 'Soubier', 'General Tso\\\'s Chicken', '2020-06-17', '17:30:00', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(259, '', 'Jeanie', 'Boddy', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(260, '', 'Thomas', 'Lew', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'W302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(261, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(262, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(263, '', 'Eli and Jane ', 'Cohen', 'Soy and Ginger Salmon', '2020-06-17', '17:30:00', 'E116', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(264, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Chicken Enchiladas', '2020-06-18', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(265, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Chicken Enchiladas', '2020-06-18', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(266, '', 'Laurie and Barbara', 'Scott', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C309', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(267, '', 'Laurie and Barbara', 'Scott', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C309', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(268, '', 'Nancy', 'Harsh', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'C303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(269, '', 'Martha', 'Simon', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(270, '', 'Colleen', 'Bangert', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E216', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(271, '', 'Colleen', 'Bangert', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E216', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(272, '', 'Dick and Carole', 'Kite', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(273, '', 'Dick and Carole', 'Kite', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'W106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(274, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(275, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(276, '', 'Nancy', 'Harsh', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(277, '', 'Martha', 'Simon', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'E205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(278, '', 'Jim', 'Ganley', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(279, '', 'Iris', 'Snow', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'W201', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(280, '', 'Roberta', 'Dawson', 'Pecan Crusted Cod', '2020-06-18', '17:30:00', 'E207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(281, '', 'Faith and Laura', 'Bentley', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'C313', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(282, '', 'Faith and Laura', 'Bentley', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'C313', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(283, '', 'Marilyn', 'Duvall', 'Father\\\'s Day Dinner- Filet Mignon', '2020-06-19', '17:30:00', 'W208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(284, '', 'Mildred', 'Roth', 'Father\\\'s Day Dinner- Dungeness Crab Cakes', '2020-06-19', '17:30:00', 'E310', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(285, '', 'Gayle', 'Knoepfler', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'E303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(286, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(287, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Bean & Veggie Bowl (V)', '2020-06-20', '17:30:00', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(288, '', 'Tom and Vernie', 'Hiatt', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(289, '', 'Tom and Vernie', 'Hiatt', 'Pulled BBQ Pork Sandwich', '2020-06-20', '17:30:00', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(290, '', 'Dick and Darlean', 'Hanner', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(291, '', 'Dick and Darlean', 'Hanner', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(292, '', 'Carloyn', 'Van', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(293, '', 'Carloyn', 'Van', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(294, '', 'Nancy', 'Hughes', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E315', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(295, '', 'Jim', 'Ganley', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(296, '', 'Duane and Toni', 'DeSalvo', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(297, '', 'Roselyn', 'Olson', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(298, '', 'Florence', 'Bannister', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(299, '', 'Tom and Vernie', 'Hiatt', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(300, '', 'Tom and Vernie', 'Hiatt', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(301, '', 'Jack and Margrethe', 'Mickel', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(302, '', 'Jack and Margrethe', 'Mickel', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(303, '', 'Phyllis', 'Soubier', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(304, '', 'Jeanie', 'Boddy', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(305, '', 'John and Jean', 'Horsfall', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(306, '', 'Jacqueline', 'Alten', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(307, '', 'Virginia', 'Hamrick', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(308, '', 'Martin', 'Matyas', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'W207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(309, '', 'Art', 'Shrumm', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(310, '', 'Bob and Sylvia', 'Anderson', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(311, '', 'Bob and Sylvia', 'Anderson', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(312, '', 'Nina and David', 'Bergman/Reigel', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(313, '', 'Margie', 'Lindstrom', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(314, '', 'Skip', 'Dockstader', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(315, '', 'Don and Anne', 'Magai', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(316, '', 'Don and Anne', 'Magai', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(317, '', 'Roberta', 'Dawson', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'E207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(318, '', 'Ruth', 'Shigley', 'Teriyaki Chicken', '2020-06-23', '00:17:30', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(319, '', 'Suzanne', 'Tessaro', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(320, '', 'Igor and Delores', 'Washetko', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(321, '', 'Nancy', 'Koning', 'Stuffed Cabbage Rolls', '2020-06-23', '00:17:30', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(322, '', 'Pat and Phil', 'Eisenhauer', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(323, '', 'Pat and Phil', 'Eisenhauer', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(324, '', 'Julie', 'Dey', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E214', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(325, '', 'Art', 'Shrumm', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(326, '', 'Virginia', 'Hamrick', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(327, '', 'John and Jean', 'Horsfall', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(328, '', 'John and Jean', 'Horsfall', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL);
INSERT INTO `pickups` (`id`, `bookingid`, `firstname`, `lastname`, `dishname`, `diningdate`, `diningtime`, `condono`, `membermealprice`, `membermealtaxpercent`, `membermealtaxvalue`, `membermealtotalprice`, `dinerType`, `grandtotal`, `isPickedup`, `timestamp`) VALUES
(329, '', 'Helen', 'Jaspen', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(330, '', 'Helen', 'Jaspen', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(331, '', 'Helen', 'Jaspen', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E306', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(332, '', 'Dick and Darlean', 'Hanner', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(333, '', 'Dick and Darlean', 'Hanner', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(334, '', 'Carloyn', 'Van', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(335, '', 'Carloyn', 'Van', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(336, '', 'Duane and Toni', 'DeSalvo', 'Meatloaf', '2020-06-24', '00:17:30', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(337, '', 'John and Kathy', 'Chan/Kwok', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(338, '', 'John and Kathy', 'Chan/Kwok', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(339, '', 'John and Kathy', 'Chan/Kwok', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(340, '', 'John and Kathy', 'Chan/Kwok', 'Meatloaf', '2020-06-24', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(341, '', 'John and Kathy', 'Chan/Kwok', 'Meatloaf', '2020-06-24', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(342, '', 'Jim', 'Ganley', 'Meatloaf', '2020-06-24', '00:17:30', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(343, '', 'Roselyn', 'Olson', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(344, '', 'Cathy', 'Barich', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(345, '', 'Florence', 'Bannister', 'Meatloaf', '2020-06-24', '00:17:30', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(346, '', 'Pattricia', 'Brown', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(347, '', 'Phyllis', 'Soubier', 'Meatloaf', '2020-06-24', '00:17:30', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(348, '', 'Nina and David', 'Bergman/Reigel', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(349, '', 'Marge', 'Qualls', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'W209', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(350, '', 'Skip', 'Dockstader', 'Meatloaf', '2020-06-24', '00:17:30', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(351, '', 'Jimbay and Yeedeh', 'Loh', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E212', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(352, '', 'Ruth', 'Shigley', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(353, '', 'Suzanne', 'Tessaro', 'Meatloaf', '2020-06-24', '00:17:30', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(354, '', 'Igor and Delores', 'Washetko', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(355, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(356, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(357, '', 'Karl and Faith', 'Thunemann', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(358, '', 'Karl and Faith', 'Thunemann', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(370, '', 'Jean', 'Myre', 'Meatloaf', '2020-06-24', '00:17:30', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(371, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(372, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(373, '', 'Blanche', 'Adams', 'Grilled BBQ Salmon', '2020-06-24', '00:17:30', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(374, '', 'Blanche', 'Adams', 'Meatloaf', '2020-06-24', '00:17:30', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(375, '', 'Virginia', 'Hamrick', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(376, '', 'Bobby', 'Holcomb', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'W105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(377, '', 'John and Jean', 'Horsfall', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(378, '', 'Carloyn', 'Van', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(379, '', 'Carloyn', 'Van', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(380, '', 'Duane and Toni', 'DeSalvo', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(381, '', 'Duane and Toni', 'DeSalvo', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(382, '', 'Jim', 'Ganley', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(383, '', 'Florence', 'Bannister', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(384, '', 'Hal and Susan', 'David', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(385, '', 'Hal and Susan', 'David', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(386, '', 'Hal and Susan', 'David', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(387, '', 'Nina and David', 'Bergman/Reigel', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(388, '', 'Skip', 'Dockstader', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(389, '', 'Roberta', 'Dawson', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'E207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(390, '', 'Ruth', 'Shigley', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(391, '', 'Igor and Delores', 'Washetko', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'C304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(392, '', 'Nancy', 'Koning', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(393, '', 'Jack and Margrethe', 'Mickel', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(394, '', 'Jack and Margrethe', 'Mickel', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(395, '', 'Gayle', 'Knoepfler', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'E303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(396, '', 'Ruth and Tim', 'Russell', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(400, '', 'Hal and Susan', 'David', 'Eggplant Parmesan with Fettucine (V)', '2020-06-25', '00:17:30', 'E104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(401, '', 'Ruth and Tim', 'Russell', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(402, '', 'Ruth and Tim', 'Russell', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(403, '', 'Ruth and Tim', 'Russell', 'Chicken Parmesan with Fettuccine', '2020-06-25', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(406, '', 'Pat and Phil', 'Eisenhauer', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(407, '', 'Pat and Phil', 'Eisenhauer', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E312', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(408, '', 'Art', 'Shrumm', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(409, '', 'Martin', 'Matyas', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W207', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(410, '', 'Virginia', 'Hamrick', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(411, '', 'Jacqueline', 'Alten', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(412, '', 'John and Jean', 'Horsfall', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(413, '', 'John and Jean', 'Horsfall', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(414, '', 'Dick and Darlean', 'Hanner', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(415, '', 'Dick and Darlean', 'Hanner', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E102', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(416, '', 'Carloyn', 'Van', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(417, '', 'Carloyn', 'Van', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(418, '', 'John and Kathy', 'Chan/Kwok', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(419, '', 'John and Kathy', 'Chan/Kwok', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(420, '', 'John and Kathy', 'Chan/Kwok', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(421, '', 'Delpha', 'Jorgensen', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(422, '', 'Jim', 'Ganley', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(423, '', 'Florence', 'Bannister', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(424, '', 'Susan', 'Bailey', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C209', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(425, '', 'Nina and David', 'Bergman/Reigel', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(426, '', 'Margie', 'Lindstrom', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E210', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(427, '', 'Skip', 'Dockstader', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E107', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(428, '', 'Don and Anne', 'Magai', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(429, '', 'Don and Anne', 'Magai', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'W308', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(430, '', 'Jimbay and Yeedeh', 'Loh', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'E212', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(431, '', 'Pattricia', 'Brown', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E304', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(432, '', 'Ruth', 'Shigley', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(433, '', 'Suzanne', 'Tessaro', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W203', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(434, '', 'Nancy', 'Koning', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C106', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(435, '', 'Karl and Faith', 'Thunemann', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(436, '', 'Karl and Faith', 'Thunemann', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E202', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(437, '', 'Sue', 'Sampson', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(438, '', 'Blanche', 'Adams', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'E208', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(439, '', 'Ruth and Tim', 'Russell', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(440, '', 'Ruth and Tim', 'Russell', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(441, '', 'Ruth and Tim', 'Russell', 'Citrus Tilapia', '2020-06-26', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(442, '', 'Iris', 'Snow', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W201', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(443, '', 'Thomas', 'Lew', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(444, '', 'Tom and Vernie', 'Hiatt', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(445, '', 'Tom and Vernie', 'Hiatt', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'W104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(446, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(447, '', 'Lynn and Gary', 'McGlocklin/Sandberg', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C211', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(448, '', 'May', 'Liming', 'Roast Pork Loin', '2020-06-26', '00:17:30', 'C113', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(451, '', 'Art', 'Shrumm', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(452, '', 'Virginia', 'Hamrick', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'C110', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(453, '', 'John and Jean', 'Horsfall', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'C204', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(454, '', 'Carloyn', 'Van', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(455, '', 'Carloyn', 'Van', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'W205', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(456, '', 'Duane and Toni', 'DeSalvo', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'E302', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(457, '', 'Nina and David', 'Bergman/Reigel', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'E112', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(458, '', 'John and Kathy', 'Chan/Kwok', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'C104', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(459, '', 'Jim', 'Ganley', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'W103', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(460, '', 'Roselyn', 'Olson', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E206', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(461, '', 'Florence', 'Bannister', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'C213', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(462, '', 'Ruth', 'Shigley', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'W311', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(463, '', 'Jean', 'Myre', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'C105', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(464, '', 'Marlene', 'Livingston', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'W109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(465, '', 'Gayle', 'Knoepfler', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(466, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(467, '', 'Carol and David', 'ZumBrunnen/Tauscheck', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E109', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(468, '', 'Carl and Linda', 'Schmidt', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(469, '', 'Carl and Linda', 'Schmidt', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'W303', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(470, '', 'Ruth and Tim', 'Russell', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(471, '', 'Ruth and Tim', 'Russell', 'Smoked Turkey Sandwich', '2020-06-27', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(472, '', 'Ruth and Tim', 'Russell', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'C108', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL),
(473, '', 'Phyllis', 'Soubier', 'Fish Soft Tacos', '2020-06-27', '00:17:30', 'E314', '14.00', '0.00', '0.00', '14.00', '', '14.00', '', NULL);

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
(1, '2020-05-20', 1, '17:00:00', 'Baked Salmon', 'BBQ Chicken Breast', ''),
(2, '2020-05-21', 1, '17:00:00', 'Shrimp Scampi', 'Parmesan Chicken', ''),
(6, '2020-05-19', 1, '17:00:00', 'Roast Pork Tender Loin', 'Famous Beechers Mac n Cheese', ''),
(7, '2020-05-22', 1, '17:00:00', 'Salisbury Steak', 'Chicken Marsala', ''),
(8, '2020-05-23', 1, '17:00:00', 'Holiday Observed', 'Holiday Observed', ''),
(10, '2020-06-09', 1, '05:30:00', 'Meat Lasagna ( With Cheese )', 'Chicken Drumsticks', ''),
(11, '2020-06-10', 1, '05:30:00', 'Grilled Salmon', 'Caprese Pasta (V)', ''),
(12, '2020-06-11', 1, '05:30:00', 'Shrimp Louie Salad', 'Tuna Melt', ''),
(13, '2020-06-12', 1, '05:30:00', 'Classic Shepherd\'s Pie', 'Shrimp Tempura', ''),
(14, '2020-06-13', 1, '05:30:00', 'Chicken Picata', 'Flat Iron Steak', ''),
(22, '2020-06-16', 1, '17:30:00', 'Tender Pork Medallions w Mushroom Sauce', 'Pappardelle Pasta (V)', ''),
(23, '2020-06-17', 1, '17:30:00', 'Soy and Ginger Salmon', 'General Tso\'s Chicken', ''),
(24, '2020-06-18', 1, '17:30:00', 'Pecan Crusted Cod', 'Chicken Enchiladas', ''),
(25, '2020-06-19', 1, '17:30:00', 'Father\'s Day Dinner- Filet Mignon', 'Father\'s Day Dinner- Dungeness Crab Cakes', ''),
(26, '2020-06-20', 1, '17:30:00', 'Pulled BBQ Pork Sandwich', 'Bean & Veggie Bowl (V)', ''),
(28, '2020-06-24', 1, '00:17:30', 'Grilled BBQ Salmon', 'Meatloaf', ''),
(29, '2020-06-25', 1, '00:17:30', 'Eggplant Parmesan with Fettucine (V)', 'Chicken Parmesan with Fettuccine', ''),
(30, '2020-06-26', 1, '00:17:30', 'Roast Pork Loin', 'Citrus Tilapia', ''),
(31, '2020-06-27', 1, '00:17:30', 'Smoked Turkey Sandwich', 'Fish Soft Tacos', ''),
(33, '2020-06-23', 1, '00:17:30', 'Stuffed Cabbage Rolls', 'Teriyaki Chicken', '');

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
(3, 'SG2007020001', 'Duane and Toni', 'DeSalvo', 'Coconut Shrimp', 1, 'Main Dining Room', '1', 0, '1', '2020-07-02', '17:10:00', '1', 'E302G', NULL, '', NULL, 'guest', NULL, NULL, NULL, NULL, '17.00', '10.00', '1.70', '17.00', '17.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'SG2007020002', 'Duane and Toni', 'DeSalvo', 'Cobb Salad', 1, 'Main Dining Room', '1', 0, '1', '2020-07-02', '17:10:00', '0', 'E302', NULL, '', NULL, 'member', '0.00', '0.00', '0.00', '14.00', NULL, NULL, NULL, NULL, '14.00', '14.00', '0.00', '0.00', '14.00', NULL, NULL, NULL);

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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(55) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altcontactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `age`, `unitno`, `email`, `password`, `contactno`, `altcontactno`) VALUES
(1, 'Brittany', 'Mudariki', '', 'PM02F', '', 'PM02F', '', '');

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
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `unitno`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(0, 'admin', NULL, 0x312e32322e3136342e31373600000000, '2020-05-17 05:09:06', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 05:37:27', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 05:38:28', NULL, 1),
(0, 'C105', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:34:46', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:36:15', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:37:04', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:38:53', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:40:37', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:43:43', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:48:18', NULL, 1),
(0, 'E103', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:50:26', NULL, 1),
(0, 'W204', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:51:12', NULL, 1),
(0, 'E214', NULL, 0x32342e31372e3138332e353600000000, '2020-05-17 19:52:36', NULL, 1),
(0, 'E302', NULL, 0x3230382e38342e3135352e3231350000, '2020-05-18 11:27:40', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:43:21', NULL, 1),
(0, 'W309', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:43:32', NULL, 1),
(0, 'E304', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:46:16', NULL, 1),
(0, 'C312', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:47:00', NULL, 1),
(0, 'E312', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:47:43', NULL, 1),
(0, 'E102', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:48:30', NULL, 1),
(0, 'C113', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:49:47', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:50:19', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:50:58', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:51:28', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:51:58', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:52:45', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:53:21', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:54:02', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:54:52', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:55:31', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:56:05', NULL, 1),
(0, 'W306', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:56:42', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:57:28', NULL, 1),
(0, 'E207', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:57:59', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 04:58:29', NULL, 1),
(0, 'C113', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:06:22', NULL, 1),
(0, 'E202', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:07:17', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:08:06', NULL, 1),
(0, 'C112', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:08:43', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:09:26', NULL, 1),
(0, 'E314', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:09:58', NULL, 1),
(0, 'C205', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:10:34', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:11:26', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:12:02', NULL, 1),
(0, 'E306', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:12:42', NULL, 1),
(0, 'W106', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:13:57', NULL, 1),
(0, 'W109', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:14:49', NULL, 1),
(0, 'W201', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:16:48', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:17:26', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:18:14', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:18:51', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:19:21', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:19:53', NULL, 1),
(0, 'W308', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:20:30', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-05-19 05:21:24', NULL, 1),
(0, 'E302', NULL, 0x3137302e3133302e322e323531000000, '2020-05-20 14:49:38', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-05-23 04:09:04', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-06 02:53:51', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:36:34', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:39:06', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:39:37', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:40:33', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:41:15', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:42:33', NULL, 1),
(0, 'W204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:43:23', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:44:02', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:44:38', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-07 19:45:44', NULL, 1),
(0, 'w103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-08 03:12:18', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-08 03:13:28', NULL, 1),
(0, '', NULL, 0x312e32322e3136362e32353200000000, '2020-06-09 02:20:10', NULL, 0),
(0, 'admin', NULL, 0x312e32322e3136362e32353200000000, '2020-06-09 02:20:19', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-14 05:51:52', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-14 05:55:53', NULL, 1),
(0, 'C105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:31:39', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:32:23', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:33:14', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:33:50', NULL, 1),
(0, 'W207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:34:08', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:43:39', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:44:16', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:45:04', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:45:51', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:46:26', NULL, 1),
(0, 'E214', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:47:01', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:47:25', NULL, 1),
(0, 'W303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:47:55', NULL, 1),
(0, 'C112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:49:03', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:49:27', NULL, 1),
(0, 'E108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:50:06', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:53:16', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:54:05', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:54:35', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 00:55:16', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 01:00:50', NULL, 1),
(0, 'E108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:28:33', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:29:01', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:30:50', NULL, 1),
(0, 'E105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:31:39', NULL, 1),
(0, 'W306', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:32:17', NULL, 1),
(0, 'E102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:33:03', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:34:41', NULL, 1),
(0, 'C312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:35:40', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:36:38', NULL, 1),
(0, 'E304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:38:19', NULL, 1),
(0, 'E312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:40:55', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:42:35', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:43:22', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:44:18', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:44:54', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:45:23', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:48:02', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:48:45', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:49:11', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:49:47', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:50:37', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:51:04', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:51:31', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:52:16', NULL, 1),
(0, 'C105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:56:55', NULL, 1),
(0, 'E108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 01:57:25', NULL, 1),
(0, 'C202', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:06:02', NULL, 1),
(0, 'E105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:06:34', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:07:03', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:07:30', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:08:09', NULL, 1),
(0, 'W207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:10:16', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:10:43', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:11:14', NULL, 1),
(0, 'W204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:11:46', NULL, 1),
(0, 'W204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:12:24', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:17:29', NULL, 1),
(0, 'E306', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:18:10', NULL, 1),
(0, 'E209', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:19:21', NULL, 1),
(0, 'E314', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:19:52', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:20:17', NULL, 1),
(0, 'C311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:20:53', NULL, 1),
(0, 'C205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:21:40', NULL, 1),
(0, 'E201', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:22:26', NULL, 1),
(0, 'W306', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:23:02', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 02:26:28', NULL, 1),
(0, 'E102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 02:26:32', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 02:34:10', NULL, 1),
(0, '', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 02:35:24', NULL, 0),
(0, 'admin', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 02:35:29', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 02:36:53', NULL, 1),
(0, 'admin', NULL, 0x312e32322e3136342e31313800000000, '2020-06-15 03:30:55', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 03:56:52', NULL, 1),
(0, 'C312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 03:58:34', NULL, 1),
(0, 'E304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:02:21', NULL, 1),
(0, 'E312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:02:57', NULL, 1),
(0, 'E113', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:04:00', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:04:42', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:06:19', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:07:16', NULL, 1),
(0, 'W109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:08:04', NULL, 1),
(0, 'C306', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:09:19', NULL, 1),
(0, 'E202', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:10:08', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:10:59', NULL, 1),
(0, 'C113', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:12:12', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:12:39', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:13:18', NULL, 1),
(0, 'C209', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:15:36', NULL, 1),
(0, 'E303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:16:04', NULL, 1),
(0, 'E305', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:16:32', NULL, 1),
(0, 'W303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:18:00', NULL, 1),
(0, 'C112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:18:40', NULL, 1),
(0, 'E309', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:19:36', NULL, 1),
(0, 'W108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:20:48', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:21:30', NULL, 1),
(0, 'E207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 04:21:57', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:41:58', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:42:45', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:43:16', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:43:43', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:44:11', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:45:28', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:46:01', NULL, 1),
(0, 'C112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:47:05', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 05:47:33', NULL, 1),
(0, 'C208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 06:08:49', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 06:53:59', NULL, 1),
(0, 'E103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 06:57:01', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 17:19:59', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 17:20:48', NULL, 1),
(0, 'W102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:23:16', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:23:49', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:24:15', NULL, 1),
(0, 'W308', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:24:40', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:34:18', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:36:25', NULL, 1),
(0, 'W209', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:37:03', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:39:36', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:40:23', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:42:33', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-15 23:43:02', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:26:03', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:27:12', NULL, 1),
(0, 'W308', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:28:17', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:28:57', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:29:34', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:30:01', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:31:30', NULL, 1),
(0, 'W102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:32:12', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:32:49', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 01:35:03', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136372e33380000000000, '2020-06-16 07:54:22', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 18:21:34', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136352e32370000000000, '2020-06-16 18:24:34', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136352e32370000000000, '2020-06-16 18:34:55', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-16 18:37:04', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136352e32370000000000, '2020-06-16 21:14:20', NULL, 1),
(0, 'admin', NULL, 0x312e32322e3136352e32370000000000, '2020-06-16 22:56:24', NULL, 1),
(0, 'admin', NULL, 0x312e32322e3136352e32370000000000, '2020-06-16 23:59:41', NULL, 1),
(0, 'admin', NULL, 0x312e32322e3136352e32370000000000, '2020-06-17 00:08:35', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:27:47', NULL, 1),
(0, 'E314', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:28:21', NULL, 1),
(0, 'C205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:28:55', NULL, 1),
(0, 'W302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:29:23', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:29:48', NULL, 1),
(0, 'E116', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:30:31', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:34:22', NULL, 1),
(0, 'C309', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:35:17', NULL, 1),
(0, 'C303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:36:08', NULL, 1),
(0, 'E205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:36:47', NULL, 1),
(0, 'E216', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:56:05', NULL, 1),
(0, 'W106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:56:54', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:57:41', NULL, 1),
(0, 'C303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:58:21', NULL, 1),
(0, 'E205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 03:58:55', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-17 04:05:05', NULL, 1),
(0, 'W201', NULL, 0x32342e31372e3138332e353600000000, '2020-06-18 01:45:30', NULL, 1),
(0, 'E207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-18 01:46:36', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136362e31320000000000, '2020-06-18 08:34:02', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136362e31320000000000, '2020-06-18 08:50:20', NULL, 1),
(0, 'E313', NULL, 0x32342e31372e3138332e353600000000, '2020-06-18 20:24:42', NULL, 1),
(0, 'C313', NULL, 0x32342e31372e3138332e353600000000, '2020-06-18 20:24:53', NULL, 1),
(0, 'E302', NULL, 0x3133372e39372e32392e323238000000, '2020-06-18 22:37:20', NULL, 1),
(0, 'W208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-19 01:32:06', NULL, 1),
(0, 'E310', NULL, 0x32342e31372e3138332e353600000000, '2020-06-19 01:47:13', NULL, 1),
(0, 'E303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-20 01:52:32', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-20 01:53:07', NULL, 1),
(0, 'W104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-20 02:01:32', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-21 05:54:07', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-21 06:11:30', NULL, 1),
(0, 'admin', NULL, 0x37332e3130392e36302e313732000000, '2020-06-21 23:22:08', NULL, 1),
(0, 'E102', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:41:55', NULL, 1),
(0, 'W205', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:42:51', NULL, 1),
(0, 'E315', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:43:35', NULL, 1),
(0, 'W103', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:44:06', NULL, 1),
(0, 'E302', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:44:38', NULL, 1),
(0, 'E206', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:45:09', NULL, 1),
(0, 'C213', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:45:41', NULL, 1),
(0, 'C213', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:45:53', NULL, 1),
(0, 'admin', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:46:41', NULL, 1),
(0, 'C213', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:47:14', NULL, 1),
(0, 'W104', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:47:51', NULL, 1),
(0, 'C312', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:48:44', NULL, 1),
(0, 'E314', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:49:30', NULL, 1),
(0, 'C205', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:49:58', NULL, 1),
(0, 'C204', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:55:37', NULL, 1),
(0, 'W204', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:56:15', NULL, 1),
(0, 'C110', NULL, 0x37332e3130392e36332e313200000000, '2020-06-22 13:56:40', NULL, 1),
(0, '', NULL, 0x312e32322e3136372e31303800000000, '2020-06-22 14:03:16', NULL, 0),
(0, 'admin', NULL, 0x312e32322e3136372e31303800000000, '2020-06-22 14:03:20', NULL, 1),
(0, 'admin', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:03:59', NULL, 1),
(0, 'C110', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:04:14', NULL, 1),
(0, 'W207', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:04:41', NULL, 1),
(0, 'E311', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:05:05', NULL, 1),
(0, 'E113', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:05:30', NULL, 1),
(0, 'admin', NULL, 0x37332e3130392e36312e340000000000, '2020-06-22 14:06:10', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:28:50', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:29:24', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:29:59', NULL, 1),
(0, 'W308', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:30:26', NULL, 1),
(0, 'E207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:31:09', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:31:31', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:31:58', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:32:20', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:35:43', NULL, 1),
(0, 'E312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:48:25', NULL, 1),
(0, 'E214', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:49:17', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:49:51', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:50:27', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:50:55', NULL, 1),
(0, 'E306', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:51:46', NULL, 1),
(0, 'E102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:53:26', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:54:14', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:54:54', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:55:21', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:58:08', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:58:37', NULL, 1),
(0, 'E103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:59:09', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-22 23:59:38', NULL, 1),
(0, 'E304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:01:10', NULL, 1),
(0, 'E314', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:01:35', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:02:02', NULL, 1),
(0, 'W209', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:02:29', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:03:01', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:03:34', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:03:58', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:04:24', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:04:49', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 00:05:18', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 04:05:26', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 04:06:06', NULL, 1),
(0, 'E202', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 04:06:23', NULL, 1),
(0, 'e302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 04:07:08', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 05:34:15', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 14:45:00', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:53:44', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:53:57', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:54:40', NULL, 1),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:57:03', NULL, 0),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:57:15', NULL, 0),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:57:32', NULL, 0),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 16:58:51', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36000000000000, '2020-06-23 16:59:39', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36000000000000, '2020-06-23 17:15:28', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36000000000000, '2020-06-23 17:16:33', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:16:44', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:17:57', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:19:17', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36000000000000, '2020-06-23 17:20:00', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:20:10', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:22:18', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 17:23:18', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 20:27:53', NULL, 1),
(0, 'E302', NULL, 0x37332e3130392e36302e313336000000, '2020-06-23 20:57:20', NULL, 1),
(0, 'E302', NULL, 0x37332e3130392e36302e313336000000, '2020-06-23 21:10:42', NULL, 1),
(0, 'E302', NULL, 0x37332e3130392e36302e313336000000, '2020-06-23 21:13:51', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-23 21:41:25', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36000000000000, '2020-06-23 21:48:25', NULL, 1),
(0, 'C105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 01:22:46', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 01:23:52', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 01:24:39', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 15:46:27', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 15:46:43', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:46:44', NULL, 1),
(0, 'W105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:47:09', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:47:35', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:48:01', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:48:39', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:49:15', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:49:38', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:50:04', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:52:23', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:52:49', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:53:16', NULL, 1),
(0, 'E207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:53:44', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:54:07', NULL, 1),
(0, 'C304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:54:36', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:55:02', NULL, 1),
(0, 'C312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:55:26', NULL, 1),
(0, 'E303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:56:01', NULL, 1),
(0, 'C108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 19:56:29', NULL, 1),
(0, 'E104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 20:02:23', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-24 21:11:04', NULL, 1),
(0, 'PM02F ', NULL, 0x312e32322e3136342e36340000000000, '2020-06-24 23:25:16', NULL, 1),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 00:28:58', NULL, 0),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 00:29:12', NULL, 0),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 00:29:24', NULL, 0),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 01:50:59', NULL, 1),
(0, 'C108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 02:55:15', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 06:00:43', NULL, 1),
(0, 'PM02F', NULL, 0x312e32322e3136342e36340000000000, '2020-06-25 07:27:03', NULL, 1),
(0, '', NULL, 0x312e32322e3136342e36340000000000, '2020-06-25 07:29:51', NULL, 0),
(0, 'PM02F', NULL, 0x312e32322e3136342e36340000000000, '2020-06-25 07:30:02', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e36340000000000, '2020-06-25 07:30:33', NULL, 1),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 07:47:14', NULL, 0),
(0, '', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 07:47:33', NULL, 0),
(0, 'PM02F', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 07:48:37', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 07:56:00', NULL, 1),
(0, 'E302', NULL, 0x3133372e39372e3232342e3232380000, '2020-06-25 07:56:55', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 09:16:29', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 15:04:27', NULL, 1),
(0, 'E312', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:30:55', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:31:54', NULL, 1),
(0, 'W207', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:32:26', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:32:51', NULL, 1),
(0, 'W204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:33:27', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:33:50', NULL, 1),
(0, 'E102', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:34:31', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:35:07', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:36:24', NULL, 1),
(0, 'E204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:37:11', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:37:32', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:38:08', NULL, 1),
(0, 'C209', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:38:34', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:38:56', NULL, 1),
(0, 'E210', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:39:23', NULL, 1),
(0, 'E107', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:39:49', NULL, 1),
(0, 'W308', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:40:17', NULL, 1),
(0, 'E212', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:40:59', NULL, 1),
(0, 'E304', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:41:27', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:41:57', NULL, 1),
(0, 'W203', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:42:21', NULL, 1),
(0, 'C106', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:42:47', NULL, 1),
(0, 'E202', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:43:08', NULL, 1),
(0, 'C109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:43:44', NULL, 1),
(0, 'E208', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:44:37', NULL, 1),
(0, 'C108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:45:05', NULL, 1),
(0, 'W201', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:45:54', NULL, 1),
(0, 'W302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:46:19', NULL, 1),
(0, 'W104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:46:43', NULL, 1),
(0, 'C211', NULL, 0x32342e31372e3138332e353600000000, '2020-06-25 22:47:22', NULL, 1),
(0, 'C113', NULL, 0x32342e31372e3138332e353600000000, '2020-06-26 02:15:13', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136372e31373000000000, '2020-06-26 14:45:18', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136372e31373000000000, '2020-06-26 14:48:55', NULL, 1),
(0, 'E312', NULL, 0x312e32322e3136372e31373000000000, '2020-06-26 15:04:26', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-26 15:25:50', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-26 19:37:57', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-26 21:43:36', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 00:50:57', NULL, 1),
(0, 'E311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:10:45', NULL, 1),
(0, 'C110', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:11:14', NULL, 1),
(0, 'C204', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:11:40', NULL, 1),
(0, 'W205', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:12:13', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:12:57', NULL, 1),
(0, 'E112', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:13:29', NULL, 1),
(0, 'C104', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:13:54', NULL, 1),
(0, 'W103', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:14:23', NULL, 1),
(0, 'E206', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:14:56', NULL, 1),
(0, 'C213', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:15:23', NULL, 1),
(0, 'W311', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:17:13', NULL, 1),
(0, 'C105', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:17:37', NULL, 1),
(0, 'W109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:18:02', NULL, 1),
(0, 'E303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:18:25', NULL, 1),
(0, 'E109', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:18:50', NULL, 1),
(0, 'W303', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:19:31', NULL, 1),
(0, 'C108', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:20:19', NULL, 1),
(0, 'E314', NULL, 0x32342e31372e3138332e353600000000, '2020-06-27 03:21:21', NULL, 1),
(0, 'E302', NULL, 0x312e32322e3136342e31333300000000, '2020-06-27 10:13:28', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-06-28 03:18:13', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-29 04:06:21', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-29 23:09:32', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-06-30 06:28:20', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-07-01 21:25:02', NULL, 1),
(0, 'E302', NULL, 0x32342e31372e3138332e353600000000, '2020-07-01 21:28:51', NULL, 1),
(0, 'admin', NULL, 0x32342e31372e3138332e353600000000, '2020-07-10 07:07:28', NULL, 1),
(0, 'admin', NULL, 0x34332e3234372e3135382e3734000000, '2020-07-17 20:38:20', NULL, 1);

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
(2, 'Gary and Carolyn', 'Saaris/Reid', '', 'W102', 'garcar@gmail.com', 'W102', '4254436979', ''),
(3, 'Pattricia', 'Brown', '', 'E304', '', 'E304', '4259570626', ''),
(4, 'Blanche', 'Adams', '', 'E208', '', 'E208', '4256441308', ''),
(5, 'Gloria', 'Pong', '', 'E201', '', 'E201', '4256435528', ''),
(6, 'Susan', 'Bailey', '', 'C209', '', 'C209', '4256412050', ''),
(7, 'Colleen', 'Bangert', '', 'E216', '', 'E216', '4254498940', ''),
(8, 'Florence', 'Bannister', '', 'C213', '', 'C213', '4257460116', ''),
(9, 'Cathy', 'Barich', '', 'E103', '', 'E103', '4254433643', ''),
(10, 'Doris', 'Bean', '', 'C114', '', 'C114', '4253789314', ''),
(11, 'Marjorie', 'Benson', '', 'E307', '', 'E307', '4255627921', ''),
(12, 'Faith and Laura', 'Bentley', '', 'C313', '', 'C313', '4256410755', ''),
(13, 'Nina and David', 'Bergman/Reigel', '', 'E112', '', 'E112', '4257461168', ''),
(14, 'Jeanie', 'Boddy', '', 'C205', '', 'C205', '4256439256', ''),
(15, 'Barbara', 'Brachtl', '', 'E301', '', 'E301', '2067997667', ''),
(16, 'Karmela', 'Zorich', '', 'E101', '', 'E101', '4254293484', ''),
(17, 'Dick and Darlean', 'Hanner', '', 'E102', '', 'E102', '4252239810', ''),
(18, 'Hal and Susan', 'David', '', 'E104', '', 'E104', '6504640050', ''),
(19, 'Iris', 'Watson', '', 'E106', '', 'e106', '4256981191', ''),
(20, 'Skip', 'Dockstader', '', 'E107', '', 'e107', '4255624064', ''),
(21, 'Karen', 'Morgan', '', 'E108', '', 'E108', '2062359725', ''),
(22, 'Carol and David', 'ZumBrunnen/Tauscheck', '', 'E109', '', 'E109', '4259570614', ''),
(23, 'Pairu', 'Chen', '', 'E110', '', 'E110', '2062889160', ''),
(24, 'Linda', 'Sandaas', '', 'E111', '', 'E111', '4256383770', ''),
(25, 'Bob and Sylvia', 'Anderson', '', 'E113', '', 'E113', '4256981668', ''),
(26, 'Jenny', 'Simons', '', 'E114', '', 'E114', '4255188028', ''),
(27, 'David', 'Lingenfelter', '', 'E115', '', 'E115', '4256417861', ''),
(28, 'Eli and Jane ', 'Cohen', '', 'E116', '', 'E116', '4254408701', ''),
(29, 'Karl and Faith', 'Thunemann', '', 'E202', '', 'E202', '4255028343', ''),
(30, 'Arlene and Hamid', 'Watson/Veiseh', '', 'E203', '', 'E203', '4257469733', ''),
(31, 'Delpha', 'Jorgensen', '', 'E204', '', 'E204', '4257462994', ''),
(32, 'Martha', 'Simon', '', 'E205', '', 'E205', '4254498755', ''),
(33, 'Roselyn', 'Olson', '', 'E206', '', 'E206', '4254458207', ''),
(34, 'Roberta', 'Dawson', '', 'E207', '', 'E207', '4256432956', ''),
(35, 'Margie', 'Lindstrom', '', 'E210', '', 'E210', '4257477016', ''),
(36, 'Jimbay and Yeedeh', 'Loh', '', 'E212', '', 'E212', '9143207024', ''),
(37, 'Darlene and Floyd', 'Fredlund/Else', '', 'E213', '', 'E213', '4256419648', ''),
(38, 'Julie', 'Dey', '', 'E214', '', 'E214', '6156187893', ''),
(39, 'Cindi and John', 'Paris', '', 'E215', '', 'E215', '4259418876', ''),
(40, 'Gayle', 'Knoepfler', '', 'E303', '', 'E303', '4254548078', ''),
(41, 'Donna', 'Schneider', '', 'E305', '', 'E305', '4257470251', ''),
(42, 'Helen', 'Jaspen', '', 'E306', '', 'E306', '4258650816', ''),
(43, 'Gloria', 'Carlock', '', 'E308', '', 'E308', '2533803443', ''),
(44, 'Mary', 'May', '', 'E309', '', 'E309', '4257467446', ''),
(45, 'Mildred', 'Roth', '', 'E310', '', 'E310', '4255052453', ''),
(46, 'Art', 'Shrumm', '', 'E311', '', 'E311', '4257477608', ''),
(47, 'Pat and Phil', 'Eisenhauer', '', 'E312', '', 'E312', '4256796649', ''),
(48, 'Tracie', 'Hamlin', '', 'E313', '', 'E313', '2062002816', ''),
(49, 'Phyllis', 'Soubier', '', 'E314', '', 'E314', '4255622972', ''),
(50, 'Nancy', 'Hughes', '', 'E315', '', 'E315', '4257468222', ''),
(51, 'Kai', 'Chiu', '', 'E316', '', 'E316', '4259414552', ''),
(52, 'Patti', 'Wallace', '', 'W101', '', 'W101', '4254296713', ''),
(53, 'Jim', 'Ganley', '', 'W103', '', 'W103', '4254296899', ''),
(54, 'Tom and Vernie', 'Hiatt', '', 'W104', '', 'W104', '5753173447', ''),
(55, 'Bobby', 'Holcomb', '', 'W105', '', 'W105', '4257471493', ''),
(56, 'Dick and Carole', 'Kite', '', 'W106', '', 'W106', '4256981391', ''),
(57, 'Ann and Bill', 'Carlstrom', '', 'W107', '', 'W107', '2064985238', ''),
(58, 'Bill and Sue', 'Absher/Caruso', '', 'W108', '', 'W108', '4254545036', ''),
(59, 'Marlene', 'Livingston', '', 'W109', '', 'W109', '4257462378', ''),
(60, 'Shirley', 'Roberts', '', 'W110', '', 'W110', '4252419425', ''),
(61, 'Janice', 'Hanlon', '', 'W111', '', 'W111', '4257462175', ''),
(62, 'Lassie', 'Jordan', '', 'W202', '', 'W202', '4259419103', ''),
(63, 'Suzanne', 'Tessaro', '', 'W203', '', 'W203', '4254448381', ''),
(64, 'Jacqueline', 'Alten', '', 'W204', '', 'W204', '4257474906', ''),
(65, 'Carloyn', 'Van', '', 'W205', '', 'W205', '2065500811', ''),
(66, 'Lee', 'Philpott', '', 'W206', '', 'W206', '2068192734', ''),
(67, 'Martin', 'Matyas', '', 'W207', '', 'W207', '4257476657', ''),
(68, 'Marilyn', 'Duvall', '', 'W208', '', 'W208', '4252235794', ''),
(69, 'Marge', 'Qualls', '', 'W209', '', 'W209', '4258987867', ''),
(70, 'Rita', 'Togut', '', 'W210', '', 'W210', '4255622859', ''),
(71, 'Donna', 'Duncan', '', 'W211', '', 'W211', '6608641456', ''),
(72, 'Joy', 'Carey', '', 'W301', '', 'W301', '2069545546', ''),
(73, 'Thomas', 'Lew', '', 'W302', '', 'W302', '4254553767', ''),
(74, 'Carl and Linda', 'Schmidt', '', 'W303', '', 'W303', '2063480204', ''),
(75, 'Regina', 'Rouse', '', 'W305', '', 'W305', '4134585293', ''),
(76, 'John and Isa Maria', 'Murray', '', 'W306', '', 'W306', '4256981298', ''),
(77, 'Marianne', 'Lee', '', 'W307', '', 'W307', '7024821131', ''),
(78, 'Don and Anne', 'Magai', '', 'W308', '', 'W308', '4254293299', ''),
(79, 'Marjorie', 'Lindstrom', '', 'W309', '', 'W309', '4255622926', ''),
(80, 'Judy', 'Corwin', '', 'W310', '', 'W310', '4255184126', ''),
(81, 'Ruth', 'Shigley', '', 'W311', '', 'W311', '4254509583', ''),
(82, 'Dianxun and Yong Ling', 'Wang/Cheng', '', 'C101', '', 'C101', '4255919838', ''),
(83, 'Carolyn', 'Haessly', '', 'C102', '', 'C102', '4258307686', ''),
(84, 'Virginia', 'Seaton', '', 'C103', '', 'C103', '4257467085', ''),
(85, 'John and Kathy', 'Chan/Kwok', '', 'C104', '', 'C104', '2065654029', ''),
(86, 'Jean', 'Myre', '', 'C105', '', 'C105', '4257470575', ''),
(87, 'Nancy', 'Koning', '', 'C106', '', 'C106', '4256413948', ''),
(88, 'Phyllis', 'Edwards', '', 'C107', '', 'C107', '4256413948', ''),
(89, 'Ruth and Tim', 'Russell', '', 'C108', '', 'C108', '4256813461', ''),
(90, 'Sue', 'Sampson', '', 'C109', '', 'C109', '4256447198', ''),
(91, 'Virginia', 'Hamrick', '', 'C110', '', 'C110', '4255626002', ''),
(92, 'Carlotta', 'Esmoris', '', 'C111', '', 'C111', '4256439970', ''),
(93, 'Jack and Mary', 'Stumph', '', 'C112', '', 'C112', '4256410388', ''),
(94, 'May', 'Liming', '', 'C113', '', 'C113', '4257471869', ''),
(95, 'Wanda', 'Hokenson', '', 'C201', '', 'C201', '4256432735', ''),
(96, 'Melodye', 'Gold', '', 'C202', '', 'C202', '4254179262', ''),
(97, 'John and Jean', 'Horsfall', '', 'C204', '', 'C204', '4254546236', ''),
(98, 'Karen', 'Candland', '', 'C206', '', 'C206', '2067724442', ''),
(99, 'Barbara', 'Landes', '', 'C207', '', 'C207', '4254552698', ''),
(100, 'Carl and Myra', 'Wittenberg', '', 'C210', '', 'C210', '4256413118', ''),
(101, 'Lynn and Gary', 'McGlocklin/Sandberg', '', 'C211', '', 'C211', '4254547183', '2066794946'),
(102, 'Barbara and Chris', 'Murel', '', 'C212', '', 'C212', '4257460705', ''),
(103, 'Gail', 'Harshman', '', 'C214', '', 'C214', '4256442012', ''),
(104, 'Harry and Ling', 'Liu', '', 'C301', '', 'C301', '2066189396', ''),
(105, 'Nancy', 'Harsh', '', 'C303', '', 'C303', '4257475157', ''),
(106, 'Igor and Delores', 'Washetko', '', 'C304', '', 'C304', '4252216342', ''),
(107, 'Shinko', 'Oshimo', '', 'C305', '', 'C305', '4255620989', ''),
(108, 'Yoshi', 'Dahl', '', 'C306', '', 'C306', '4256981484', ''),
(109, 'Linda', 'Fulsaas', '', 'C307', '', 'C307', '', ''),
(110, 'Guey Yun', 'Chen', '', 'C308', '', 'C308', '3606749444', ''),
(111, 'Laurie and Barbara', 'Scott', '', 'C309', '', 'C309', '4256410745', ''),
(112, 'Jan and Gary', 'Brandt/Marshall', '', 'C311', '', 'C311', '4256419560', ''),
(113, 'Jack and Margrethe', 'Mickel', '', 'C312', '', 'C312', '4257470176', ''),
(114, 'Sophia', 'Chen Su', '', 'C314', '', 'C314', '4256284836', ''),
(115, 'Iris', 'Snow', '', 'W201', '', 'W201', '4254293760', ''),
(116, 'Lynne', 'Nierman', '', 'C208', 'lynnemnierman@gmail.com', 'C208', '4256810395', ''),
(117, 'Iris', 'Watson', '', 'E105', '', 'E105', '', ''),
(118, 'Marge', 'Higson', '', 'E209', '', 'E209', '', '');

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
(1, '2020-06-30', '17:10:00', 1, 1, 'Seared Flounder', 'Lemon Herb Chicken'),
(6, '2020-06-30', '17:10:00', 1, 6, 'Seared Flounder', 'Lemon Herb Chicken'),
(11, '2020-06-30', '17:20:00', 1, 4, 'Seared Flounder', 'Lemon Herb Chicken'),
(12, '2020-06-30', '17:20:00', 1, 13, 'Seared Flounder', 'Lemon Herb Chicken'),
(13, '2020-06-30', '17:30:00', 1, 7, 'Seared Flounder', 'Lemon Herb Chicken'),
(14, '2020-06-30', '17:30:00', 1, 10, 'Seared Flounder', 'Lemon Herb Chicken'),
(15, '2020-06-30', '17:40:00', 1, 8, 'Seared Flounder', 'Lemon Herb Chicken'),
(16, '2020-06-30', '17:40:00', 1, 11, 'Seared Flounder', 'Lemon Herb Chicken'),
(17, '2020-06-30', '05:50:00', 1, 9, 'Seared Flounder', 'Lemon Herb Chicken'),
(18, '2020-06-30', '05:50:00', 1, 12, 'Seared Flounder', 'Lemon Herb Chicken'),
(19, '2020-06-30', '18:00:00', 1, 2, 'Seared Flounder', 'Lemon Herb Chicken'),
(20, '2020-06-30', '18:00:00', 1, 5, 'Seared Flounder', 'Lemon Herb Chicken'),
(21, '2020-07-01', '17:10:00', 1, 1, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(22, '2020-07-01', '17:10:00', 1, 6, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(23, '2020-07-01', '17:20:00', 1, 4, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(24, '2020-07-01', '17:20:00', 1, 13, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(25, '2020-07-01', '17:30:00', 1, 7, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(26, '2020-07-01', '17:30:00', 1, 10, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(27, '2020-07-01', '17:40:00', 1, 8, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(28, '2020-07-01', '17:40:00', 1, 11, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(29, '2020-07-01', '17:50:00', 1, 9, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(30, '2020-07-01', '17:50:00', 1, 12, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(31, '2020-07-01', '18:00:00', 1, 2, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(32, '2020-07-01', '18:00:00', 1, 5, 'Grilled Salmon', 'Pasta LaVegentarian (V)'),
(33, '2020-07-02', '17:10:00', 1, 1, 'Coconut Shrimp', 'Cobb Salad'),
(34, '2020-07-02', '17:10:00', 1, 6, 'Coconut Shrimp', 'Cobb Salad'),
(35, '2020-07-02', '17:20:00', 1, 4, 'Coconut Shrimp', 'Cobb Salad'),
(36, '2020-07-02', '17:20:00', 1, 13, 'Coconut Shrimp', 'Cobb Salad'),
(37, '2020-07-02', '17:30:00', 1, 7, 'Coconut Shrimp', 'Cobb Salad'),
(38, '2020-07-02', '17:30:00', 1, 10, 'Coconut Shrimp', 'Cobb Salad'),
(39, '2020-07-02', '17:40:00', 1, 8, 'Coconut Shrimp', 'Cobb Salad'),
(40, '2020-07-02', '17:40:00', 1, 11, 'Coconut Shrimp', 'Cobb Salad'),
(41, '2020-07-02', '17:50:00', 1, 9, 'Coconut Shrimp', 'Cobb Salad'),
(42, '2020-07-02', '17:50:00', 1, 12, 'Coconut Shrimp', 'Cobb Salad'),
(43, '2020-07-02', '18:00:00', 1, 2, 'Coconut Shrimp', 'Cobb Salad'),
(44, '2020-07-02', '18:00:00', 1, 5, 'Coconut Shrimp', 'Cobb Salad'),
(45, '2020-07-03', '17:10:00', 1, 1, 'Spaghetti', 'Stuffed Sole'),
(46, '2020-07-03', '17:10:00', 1, 6, 'Spaghetti', 'Stuffed Sole'),
(47, '2020-07-03', '17:20:00', 1, 4, 'Spaghetti', 'Stuffed Sole'),
(48, '2020-07-03', '17:20:00', 1, 13, 'Spaghetti', 'Stuffed Sole'),
(49, '2020-07-03', '17:30:00', 1, 7, 'Spaghetti', 'Stuffed Sole'),
(50, '2020-07-03', '17:30:00', 1, 10, 'Spaghetti', 'Stuffed Sole'),
(51, '2020-07-03', '17:40:00', 1, 8, 'Spaghetti', 'Stuffed Sole'),
(52, '2020-07-03', '17:40:00', 1, 11, 'Spaghetti', 'Stuffed Sole'),
(53, '2020-07-03', '17:50:00', 1, 9, 'Spaghetti', 'Stuffed Sole'),
(54, '2020-07-03', '17:50:00', 1, 12, 'Spaghetti', 'Stuffed Sole'),
(55, '2020-07-03', '18:00:00', 1, 2, 'Spaghetti', 'Stuffed Sole'),
(56, '2020-07-03', '18:00:00', 1, 5, 'Spaghetti', 'Stuffed Sole'),
(57, '2020-07-04', '17:10:00', 1, 1, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(58, '2020-07-04', '17:10:00', 1, 6, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(59, '2020-07-04', '17:20:00', 1, 4, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(60, '2020-07-04', '17:20:00', 1, 13, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(61, '2020-07-04', '17:30:00', 1, 7, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(62, '2020-07-04', '17:30:00', 1, 10, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(63, '2020-07-04', '17:40:00', 1, 8, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(64, '2020-07-04', '17:40:00', 1, 11, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(65, '2020-07-04', '17:50:00', 1, 9, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(66, '2020-07-04', '17:50:00', 1, 12, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(67, '2020-07-04', '18:00:00', 1, 2, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog'),
(68, '2020-07-04', '18:00:00', 1, 5, 'Happy 4th Of July Cheeseburger', 'Happy 4th of July Jumbo Hot Dog');

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
-- Indexes for table `management`
--
ALTER TABLE `management`
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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `freediner`
--
ALTER TABLE `freediner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickups`
--
ALTER TABLE `pickups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT for table `pickupweeklymenu`
--
ALTER TABLE `pickupweeklymenu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tablelayout`
--
ALTER TABLE `tablelayout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `weeklymenu`
--
ALTER TABLE `weeklymenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
