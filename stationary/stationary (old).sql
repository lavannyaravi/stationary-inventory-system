-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 10:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `items` (
  `itemno` varchar(20) NOT NULL,
  `itemname` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `quant` varchar(10) NOT NULL,
  `issued` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemno`, `itemname`, `description`, `color`, `brand`, `quant`, `issued`) VALUES
('12345', 'abc', 'eraser', 'eraser', 'pen', '76', 0),
('1234556', 'ruler', 'ruler', 'ruler', 'ruler', '88', 0),
('33', '1234', 'Pen', 'something', 'school', '72', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_register`
--

CREATE TABLE `issue_register` (
  `itemno` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `empno` varchar(10) NOT NULL,
  `stud_name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL,
  `admin_user` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`admin_id`, `admin_name`, `department`, `admin_email`, `admin_mobile`, `admin_user`, `admin_password`) VALUES
(3, 'admin', 'MCA', 'admin@gmail.com', '99576652', 'admin', '1234'),
(4, 'Saju', 'MCA', 'saju@gmail.com', '8943522458', 'saju', '1234'),
(5, 'Joseph Zacharia', 'MCA', 'joseph@gmail.com', '7845788512', 'joseph', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_staff`
--

CREATE TABLE `login_staff` (
  `id` int(11) NOT NULL,
  `empno` varchar(10) NOT NULL,
  `staff_name` varchar(40) NOT NULL,
  `class` varchar(10) NOT NULL,
  `staff_user` varchar(40) NOT NULL,
  `staff_password` varchar(40) NOT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_staff`
--

INSERT INTO `login_staff` (`id`, `empno`, `staff_name`, `class`, `staff_user`, `staff_password`, `fine`) VALUES
(7, '362', 'Anjali', 'S3', 'anjali', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `itemno` varchar(20) NOT NULL,
  `itemname` varchar(25) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timedate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `itemno`, `itemname`, `description`, `color`, `brand`, `username`, `quantity`, `status`, `timedate`) VALUES
(3, '1234556', NULL, NULL, NULL, NULL, NULL, 12, 'Pending', '2018-05-12 23:47:24'),
(4, '33', NULL, NULL, NULL, NULL, 'myusername', 1, 'Rejected', '2018-05-13 10:30:53'),
(5, '33', NULL, NULL, NULL, NULL, 'anjali', 1, 'Approved', '2018-05-13 10:31:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `issue_register`
--
ALTER TABLE `issue_register`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `login_staff`
--
ALTER TABLE `login_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login_staff`
--
ALTER TABLE `login_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
