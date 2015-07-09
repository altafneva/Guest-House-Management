-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 02:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `cust_id` (`cust_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_id`, `room_id`, `checkin`, `checkout`) VALUES
(1, 20, 6, '2015-07-09 16:46:00', '2015-07-11 16:46:00'),
(2, 21, 1, '2015-07-09 16:54:00', '2015-07-16 16:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) NOT NULL,
  `cust_tel` bigint(20) NOT NULL,
  `cust_address` varchar(50) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  `extra_bed` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cust_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `cust_tel`, `cust_address`, `room_id`, `checkin`, `checkout`, `Status`, `extra_bed`) VALUES
(3, 'Altaf', 9825820068, 'ahmedabd', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'false', ''),
(4, 'Nayan', 9173395016, 'Nikol', 1, '0000-00-00 00:00:00', NULL, 'false', ''),
(5, 'uihaksj', 9825820068, 'kjhsd', 1, '2015-02-07 08:57:48', NULL, 'false', ''),
(6, 'mok', 92985555, 'ahm', 1, '2015-02-07 09:05:49', '2015-02-07 09:10:07', 'false', ''),
(7, 'nas', 9825820068, 'jsdh', 1, '2015-02-07 09:18:48', '2015-02-07 09:18:58', 'false', ''),
(8, 'hgj', 9173395016, 'hgj', 1, '2015-02-07 09:19:14', '2015-02-07 09:19:23', 'false', ''),
(9, 'jfkdx', 12121212, 'JSFJS', 1, '2015-04-07 01:41:18', '2015-04-07 01:41:30', 'false', ''),
(10, 'sefef', 12345, 'dfsdf', 1, '2015-04-07 02:10:20', '2015-04-07 02:12:32', 'false', ''),
(11, 'efsdfsdf', 0, 'sdfdsfsdf', 2, '2015-04-07 02:23:02', '2015-04-07 02:23:15', 'false', ''),
(12, 'dfsddgfddgfdg', 0, 'gfdgfd', 2, '2015-04-07 02:55:05', '0000-00-00 00:00:00', 'false', ''),
(13, 'dfsddgfddgfdg', 3244234324, 'gfdgfd', 2, '2015-04-07 02:55:14', '0000-00-00 00:00:00', 'false', ''),
(14, 'Altaf Husain', 9898989898, 'Asadsadasdsad', 5, '2015-07-06 16:00:00', '0000-00-00 00:00:00', 'false', ''),
(16, 'Dhar', 981298918, 'sdskjad', 2, '2015-07-07 16:41:00', NULL, 'true', '2'),
(20, 'Altaf', 9898787878, 'dsadasdjsakldasldjald', NULL, NULL, NULL, '', NULL),
(21, 'Nishit Shah', 8989898989, 'RTO', NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE IF NOT EXISTS `tbl_room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_status` varchar(50) NOT NULL,
  `bed_type` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_no`, `room_type`, `room_status`, `bed_type`) VALUES
(1, 101, 'AC', 'true', 'DOUBLE'),
(2, 102, 'NON-AC', 'true', 'TRIPLE'),
(3, 103, 'NON-AC', 'true', 'FOUR'),
(4, 104, 'NON-AC', 'false', 'TRIPLE'),
(5, 105, 'AC', 'false', 'FOUR'),
(6, 106, 'AC', 'false', 'FOUR'),
(7, 107, 'NON-AC', 'true', 'DOUBLE'),
(8, 108, 'NON-AC', 'false', 'DOUBLE'),
(9, 109, 'NON-AC', 'false', 'FOUR'),
(10, 110, 'AC', 'false', 'FOUR'),
(11, 111, 'NON-AC', 'false', 'FOUR'),
(12, 112, 'AC', 'true', 'DOUBLE'),
(13, 113, 'AC', 'true', 'FOUR'),
(14, 114, 'AC', 'true', 'FOUR'),
(15, 115, 'NON-AC', 'true', 'FOUR');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
