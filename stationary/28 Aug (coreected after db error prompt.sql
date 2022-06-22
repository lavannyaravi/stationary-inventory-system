-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2018 at 02:48 AM
-- Server version: 5.6.40
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationary`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemno` varchar(20) NOT NULL,
  `itemname` varchar(25) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timedate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `itemno`, `itemname`, `description`, `color`, `brand`, `username`, `quantity`, `status`, `timedate`) VALUES
(3, '1234556', NULL, NULL, NULL, NULL, NULL, 12, 'Pending', '2018-05-12 23:47:24'),
(4, '33', NULL, NULL, NULL, NULL, 'myusername', 1, 'Rejected', '2018-05-13 10:30:53'),
(5, '33', NULL, NULL, NULL, NULL, 'anjali', 1, 'Approved', '2018-05-13 10:31:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
