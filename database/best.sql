-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 10:18 AM
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
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `c` int(1) NOT NULL,
  `TA` int(11) NOT NULL,
  `MA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`c`, `TA`, `MA`) VALUES
(1, 1000, 2500);

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
(2019, 4, 35557),
(2019, 5, 35920),
(2019, 6, 36146);

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
(2, 0),
(3, 0),
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `emp_id` int(11) NOT NULL,
  `basic_pay` int(11) NOT NULL,
  `HRA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`emp_id`, `basic_pay`, `HRA`) VALUES
(2, 15000, 0),
(3, 25000, 1),
(4, 31000, 1);

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
(1, 'Elon', 'Musk', 'IT', 48, 9999988888, '2019-07-03', '1971-06-28', 'M', 'tesla@elonmusk.com', 3, 'President'),
(2, 'Mike', 'Tysonsss', 'ACCOUNTS', 39, 1123456789, '2026-12-12', '1980-01-01', 'M', 'mikety@', 2, 'Engineer'),
(3, 'Aaditya', 'Rane', 'ACCOUNTS', 20, 9969966942, '2019-01-10', '1998-10-10', 'M', 'raneaaditya@gogoanime.com', 2, 'Software Developer'),
(4, 'John', 'Doe', 'EDP', 20, 1234567891, '2019-11-10', '1998-10-10', 'M', 'jdoe@hi.com', 1, 'DB admin');

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
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('jdoe', '827ccb0eea8a706c4c34a16891f84e7b', 4),
('mikey', '18126e7bd3f84b3f3e4df094def5b7de', 2),
('otako', 'e10adc3949ba59abbe56e057f20f883e', 3);

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
(1, 2, 1, 2019, 15000, 20944, 0, 1000, 2000, 0, 4313, 34630),
(9, 2, 4, 2019, 15000, 18433, 0, 1000, 2500, 0, 4012, 30421),
(6, 2, 5, 2019, 15000, 4355, 0, 1000, 2500, 0, 2323, 8435),
(8, 2, 6, 2019, 15000, 30315, 0, 1000, 2500, 0, 5438, 48377),
(2, 3, 1, 2019, 25000, 24434, 5081, 1000, 2000, 0, 5932, 51583),
(3, 3, 2, 2019, 25000, 26879, 5625, 1000, 2000, 0, 6225, 54278),
(4, 3, 3, 2019, 25000, 1176, 242, 1000, 2000, 0, 3141, 26277),
(10, 3, 4, 2019, 25000, 24578, 5000, 1000, 2500, 0, 5949, 43795),
(5, 3, 5, 2019, 25000, 7258, 1452, 1000, 2000, 0, 3871, 12677),
(7, 3, 6, 2019, 25000, 16420, 3250, 1000, 2500, 0, 4970, 29033);

--
-- Indexes for dumped tables
--

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
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
