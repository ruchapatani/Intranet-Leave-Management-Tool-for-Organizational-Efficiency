-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 06:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sl_no` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `date_of_applying` date DEFAULT NULL,
  `leave_starting` date DEFAULT NULL,
  `leave_ending` date DEFAULT NULL,
  `no_days` int(11) DEFAULT NULL,
  `type_of_leave` enum('Casual Leave','On Official Duty','Comp Off','Sick Leave','Maternity/Paternity') DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sl_no`, `emp_id`, `emp_name`, `date_of_applying`, `leave_starting`, `leave_ending`, `no_days`, `type_of_leave`, `reason`) VALUES
(1, 1, 'Rucha', '2019-09-26', '2019-09-27', '2019-09-28', 2, 'Casual Leave', 'Family Visit'),
(2, 4, 'Saiprasad', '2019-09-10', '2019-09-16', '2019-09-19', 4, 'On Official Duty', 'part of Rec.team'),
(3, 3, 'Tina', '2019-09-24', '2019-09-27', '2019-09-29', 3, 'Sick Leave', 'Dengue'),
(4, 2, 'Ved', '2019-09-24', '2019-09-25', '2019-09-25', 1, 'Comp Off', 'Earned Leave'),
(5, 5, 'Sarvesh', '2019-09-26', '2019-10-01', '2019-09-07', 7, 'Maternity/Paternity', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `emp_password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `emp_old_password` varchar(20) DEFAULT NULL,
  `emp_newpassword` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `emp_name` varchar(20) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_password` varchar(20) DEFAULT NULL,
  `emp_contact` varchar(20) DEFAULT NULL,
  `emp_city` varchar(20) DEFAULT NULL,
  `emp_address` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`emp_name`, `emp_id`, `emp_email`, `emp_password`, `emp_contact`, `emp_city`, `emp_address`) VALUES
('Rucha', 1, 'rucha@gmail.com', '123Hi', '8105191060', 'Bangalore', 'Kormangala 560068'),
('Ved', 2, 'ved@gmail.com', '456hello', '9611666513', 'Ahmedabad', 'maninagar - Gujarat'),
('Tina', 3, 'tina@gmail.com', '789hi', '9663315876', 'Kochi', 'Kerala'),
('Saiprasad', 4, 'saiprasad@gmail.com', 'hi123', '9945974181', 'Bangalore', 'whitefield 560029'),
('Sarvesh', 5, 'sarvesh@gmail.com', 'hello456', '9987657896', 'Gulbarga', '#404/2 , 18th cross , mani layouts, Gulbarga ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
