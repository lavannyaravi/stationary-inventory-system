-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2018 at 10:41 AM
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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `itemno` varchar(20) NOT NULL,
  `ItemName` varchar(25) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `Colour` varchar(100) NOT NULL,
  `quant` varchar(10) NOT NULL,
  `issued` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemno`, `ItemName`, `Description`, `brand`, `Colour`, `quant`, `issued`) VALUES
('133', 'Cartridge ', '35A Laserjet', 'hp', 'Black', '239', 0),
('134', 'A4 Paper', '70g size', 'Double A', 'white', '698', 0),
('135', 'A4 Paper', '100g size', 'Double A', 'colourful', '480', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_register`
--

DROP TABLE IF EXISTS `issue_register`;
CREATE TABLE IF NOT EXISTS `issue_register` (
  `itemno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `empno` varchar(10) NOT NULL,
  `stud_name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `rdate` date NOT NULL,
  PRIMARY KEY (`itemno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

DROP TABLE IF EXISTS `login_admin`;
CREATE TABLE IF NOT EXISTS `login_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL,
  `admin_user` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`admin_id`, `admin_name`, `department`, `admin_email`, `admin_mobile`, `admin_user`, `admin_password`) VALUES
(1, 'admin', 'administrator fskkp', 'admin@gmail.com', '99576652', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_staff`
--

DROP TABLE IF EXISTS `login_staff`;
CREATE TABLE IF NOT EXISTS `login_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empno` varchar(10) NOT NULL,
  `staff_name` varchar(40) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `staff_user` varchar(40) NOT NULL,
  `staff_password` varchar(40) NOT NULL,
  `fine` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_staff`
--

INSERT INTO `login_staff` (`id`, `empno`, `staff_name`, `dept`, `staff_user`, `staff_password`, `fine`) VALUES
(1, '201812', 'lavannya', 'IT', 'lavannya', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemno` varchar(20) NOT NULL,
  `ItemName` varchar(25) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `Colour` varchar(100) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timedate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
