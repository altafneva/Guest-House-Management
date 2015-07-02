-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 03:55 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) NOT NULL,
  `cust_tel` bigint(20) NOT NULL,
  `cust_address` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`cust_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `cust_tel`, `cust_address`, `room_id`, `checkin`, `checkout`, `Status`) VALUES
(1, 'Nishit', 9825820068, 'ahm', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'false'),
(2, 'Dharmil', 9825820068, 'shha', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'false'),
(3, 'Altaf', 9825820068, 'ahmedabd', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'false'),
(4, 'Nayan', 9173395016, 'Nikol', 1, '0000-00-00 00:00:00', NULL, 'false'),
(5, 'uihaksj', 9825820068, 'kjhsd', 1, '2015-02-07 08:57:48', NULL, 'false'),
(6, 'mok', 92985555, 'ahm', 1, '2015-02-07 09:05:49', '2015-02-07 09:10:07', 'false'),
(7, 'nas', 9825820068, 'jsdh', 1, '2015-02-07 09:18:48', '2015-02-07 09:18:58', 'false'),
(8, 'hgj', 9173395016, 'hgj', 1, '2015-02-07 09:19:14', '2015-02-07 09:19:23', 'false');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`);
