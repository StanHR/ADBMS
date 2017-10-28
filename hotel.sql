-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 07:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `cust_id` varchar(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `dob` date NOT NULL,
  `res_addr` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `aadhar_id` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`cust_id`, `name`, `gender`, `dob`, `res_addr`, `contact`, `email`, `aadhar_id`, `pass`) VALUES
('ghost', 'Harshit', 'Male', '1996-11-16', 'Lodha Heaven, Dombivli (E)', '8452904404', 'harshitrai68@gmail.com', '123412341234', '8542516f8870173d7d1daba1daaaf0a1');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `am_id` varchar(10) NOT NULL,
  `am_name` varchar(16) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`am_id`, `am_name`, `sub_id`, `charge`) VALUES
('am11', 'pool', 's001', 50),
('am12', 'pool', 's002', 50),
('am13', 'pool', 's003', 50),
('am14', 'pool', 's004', 50),
('am21', 'sauna', 's001', 25),
('am24', 'sauna', 's004', 25),
('am31', 'gym', 's001', 100),
('am32', 'gym', 's002', 100),
('am33', 'gym', 's003', 100),
('am34', 'gym', 's004', 100);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `deals_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `discount_val` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`deals_id`, `sub_id`, `discount_val`) VALUES
('d01', 's001', 200),
('d11', 's002', 250),
('d21', 's003', 150),
('d31', 's004', 300);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transac_id` varchar(32) NOT NULL,
  `cust_id` varchar(10) NOT NULL,
  `days_count` int(5) NOT NULL,
  `am_charge` int(5) NOT NULL,
  `room_charge` int(5) NOT NULL,
  `transac_date` date NOT NULL,
  `transac_time` time(6) NOT NULL,
  `deals_id` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `r_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `charge` int(10) NOT NULL,
  `room_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`r_id`, `sub_id`, `room_type`, `charge`, `room_count`) VALUES
('rtdou', 's003', 'double', 1000, 20),
('rtkin', 's001', 'king', 3000, 20),
('rtque', 's002', 'queen', 2000, 20),
('rtsin', 's004', 'single', 500, 20);

-- --------------------------------------------------------

--
-- Table structure for table `stay_details`
--

CREATE TABLE `stay_details` (
  `sr` int(11) NOT NULL,
  `cust_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_count` int(10) NOT NULL,
  `adult_count` int(10) NOT NULL,
  `child_count` int(10) NOT NULL,
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stay_details`
--

INSERT INTO `stay_details` (`sr`, `cust_id`, `sub_id`, `check_in`, `check_out`, `room_count`, `adult_count`, `child_count`, `charge`) VALUES
(5, 'ghost', 's002', '2017-10-17', '2017-10-20', 3, 7, 3, 6000),
(6, 'ghost', 's002', '2017-02-17', '2021-10-17', 5, 5, 0, 5000),
(7, 'ghost', 's001', '2017-10-18', '2017-10-19', 5, 7, 3, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `sublets`
--

CREATE TABLE `sublets` (
  `sub_id` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sublets`
--

INSERT INTO `sublets` (`sub_id`, `city`, `address`, `contact`, `email`) VALUES
('s001', 'Mumbai', 'Opposite of CST Railway Station', '8454512345', 'mum@xyz.com'),
('s002', 'Kolkata', 'Opposite of Kolkata Railway Station', '8454512365', 'kol@xyz.com'),
('s003', 'Delhi', 'Opposite of Delhi Railway Station', '8454512395', 'del@xyz.com'),
('s004', 'Chennai', 'Opposite of Chennai Railway Station', '8562345678', 'che@xyz.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `aadhar_id` (`aadhar_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`am_id`),
  ADD KEY `fk_amn_sub_subid` (`sub_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deals_id`),
  ADD KEY `fk_deals_sub_subid` (`sub_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`transac_id`),
  ADD KEY `fk_pay_cust_custid` (`cust_id`),
  ADD KEY `fk_pay_deals_dealsid` (`deals_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `fk_room_sub_subid` (`sub_id`);

--
-- Indexes for table `stay_details`
--
ALTER TABLE `stay_details`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `sublets`
--
ALTER TABLE `sublets`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stay_details`
--
ALTER TABLE `stay_details`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `fk_amn_sub_subid` FOREIGN KEY (`sub_id`) REFERENCES `sublets` (`sub_id`);

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `fk_deals_sub_subid` FOREIGN KEY (`sub_id`) REFERENCES `sublets` (`sub_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_pay_cust_custid` FOREIGN KEY (`cust_id`) REFERENCES `accounts` (`cust_id`),
  ADD CONSTRAINT `fk_pay_deals_dealsid` FOREIGN KEY (`deals_id`) REFERENCES `deals` (`deals_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
