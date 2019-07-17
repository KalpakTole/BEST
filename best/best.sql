-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 11:33 AM
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
-- Database: `best`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `emp_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `days_worked` float NOT NULL,
  `working_days` int(11) NOT NULL,
  `attendance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daindex`
--

CREATE TABLE `daindex` (
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `DA_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daindex`
--

INSERT INTO `daindex` (`year`, `month`, `DA_index`) VALUES
(2019, 1, 35098),
(2019, 2, 34965),
(2019, 3, 35325),
(2019, 4, 35556),
(2019, 5, 35920),
(2019, 6, 36146),
(2019, 7, 36980),
(2019, 8, 37750),
(2019, 9, 37977),
(2019, 10, 38050),
(2019, 11, 38432),
(2019, 12, 38864);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `emp_id` int(11) NOT NULL,
  `LIC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`emp_id`, `LIC`) VALUES
(1, 1000),
(34, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `emp_id` int(11) NOT NULL,
  `basic_pay` int(11) NOT NULL,
  `HRA` int(11) NOT NULL,
  `TA` int(11) NOT NULL,
  `MA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`emp_id`, `basic_pay`, `HRA`, `TA`, `MA`) VALUES
(1, 20000, 0, 0, 0),
(2, 152000, 0, 0, 0),
(61, 500, 0, 0, 0),
(555556, 5000, 0, 0, 0),
(54, 20000, 0, 0, 0),
(999, 0, 0, 0, 0),
(34, 10000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `gender` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privilege` int(11) NOT NULL,
  `desig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `first_name`, `last_name`, `department`, `age`, `mob`, `doj`, `dob`, `gender`, `email`, `privilege`, `desig`) VALUES
(0, 'kalpak', 'asdf', 'Project Manager', 20, 9876543211, '2019-12-12', '1998-12-12', 'M', 'dhana9036@gmail.com', 0, 'Data Analyst'),
(1, 'Dhananjay', 'Nikalje', 'Sub Leader', 20, 1231231231, '2019-12-12', '1998-12-12', 'F', 'dhana9036@gmail.com', 1, 'DB admin'),
(2, 'kalpak', 'asdf', 'EDP', 64, 1231231121, '2019-12-12', '1954-12-12', 'F', 'kjhkj', 0, 'Software Tester'),
(3, 'Naruto', 'Uzumaki', 'Developer', 20, 9876543211, '2001-05-10', '1998-10-10', 'M', 'naruget@hiddenleaf.com', 1, 'Director'),
(5, 'kalpak', 'asdf', 'Project Manager', 20, 9876543211, '2019-12-12', '1998-12-12', 'M', 'dhana9036@gmail.com', 0, 'President'),
(34, 'Arsh', 'Jamadar', 'EDP', 4, 7485963625, '2050-02-20', '2015-01-01', 'F', 'arshsci@gmail.com', 2, 'Software Developer'),
(54, 'gaara', 'sand', 'EDP', 5, 555555, '2016-02-01', '2014-01-01', 'M', 'dharma1298kn@gmail.com', 0, 'Software Developer'),
(61, 'orochi', 'maru', 'TRAFFIC', 140, 5, '2018-01-01', '1879-02-01', 'M', 'oreo@snakelover.com', 0, 'Vice President'),
(111, 'cxxxxxxxxxxxcx', 'Nikalje', 'Project Manager', 20, 9876543211, '1199-05-15', '1998-12-12', 'M', 'dhana9036@gmail.com', 0, 'Data Analyst'),
(999, 'Sasuke', 'Uchiha', 'ACCOUNTS', 797, 9876543211, '2019-12-12', '1222-01-01', 'M', 'abs@1231', 0, 'DB admin'),
(555556, 'kabuto', 'chasma', 'EDP', 0, 100, '0004-04-04', '2019-01-01', 'M', 'abs@12311', 0, 'Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(500) NOT NULL,
  `emp_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `emp_id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 2),
('amateratsu', 'efe6398127928f1b2e9ef3207fb82663', 999),
('arsh_16', 'e6d927b58c0b3d54caee6dc87b7f4922', 34),
('disha', '43b90920409618f188bfc6923f16b9fa', 1),
('manager', '827ccb0eea8a706c4c34a16891f84e7b', 3),
('snake', '123123', 61);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sr_no` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `basic_pay` int(11) NOT NULL,
  `DA` int(11) NOT NULL,
  `HRA` int(11) NOT NULL,
  `TA` int(11) NOT NULL,
  `MA` int(11) NOT NULL,
  `LIC` int(11) NOT NULL,
  `PF` int(11) NOT NULL,
  `netsal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sr_no`, `emp_id`, `month`, `year`, `basic_pay`, `DA`, `HRA`, `TA`, `MA`, `LIC`, `PF`, `netsal`) VALUES
(1, 1, 1, 2019, 20000, 28856, 0, 0, 0, 1000, 5863, 41993),
(2, 1, 6, 2019, 20000, 30315, 0, 0, 0, 1000, 6038, 43277),
(3, 34, 1, 2019, 10000, 9774, 0, 0, 0, 2500, 2373, 14901);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `eid` (`emp_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`emp_id`,`month`,`year`),
  ADD UNIQUE KEY `TransactionNo` (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee_details` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
