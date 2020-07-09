-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 11:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyleave`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `id_no` int(100) NOT NULL,
  `emp_no` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `doa` datetime(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `photo` varbinary(1000) NOT NULL,
  `emp_role` varchar(255) NOT NULL DEFAULT 'employee',
  `leave_status` varchar(255) NOT NULL DEFAULT 'At Work'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`firstname`, `lastname`, `nationality`, `id_no`, `emp_no`, `gender`, `doa`, `email`, `tel_no`, `department`, `password`, `job_title`, `photo`, `emp_role`, `leave_status`) VALUES
('sarah', 'cheb', 'SWEDISH', 1000, 1000, 'MALE', '0000-00-00 00:00:00.000000', 'SARAHCHEBET41@GMAIL.COM', 722134567, 'sawawa', '1234', 'sweeper', '', 'employee', 'At Work'),
('claire', 'munyole', 'kenyan', 8888, 1001, 'female', '2012-12-12 00:00:00.000000', 'munyolec@gmail.com', 718892704, 'IT', '123', 'programmer', '', 'admin', 'At Work'),
('janet', 'wanjiku', 'kenyan', 7678, 2223, 'female', '2012-12-12 00:00:00.000000', 'jw@gmail.com', 43242423, 'IT', '1234', 'programmer', '', 'employee', 'At Work'),
('judith', 'ngugi', 'kenyan', 9999999, 2226, 'female', '0000-00-00 00:00:00.000000', 'jngugi@gmail.com', 711111111, 'IT', '2015', 'Database Admin', '', 'employee', 'At Work'),
('john', 'doe', 'kenyan', 777777, 2227, 'male', '0000-00-00 00:00:00.000000', 'jd@yahoo.com', 723456789, 'Finance', '098', 'accountant', '', 'employee', 'At Work'),
('jane', 'doe', 'brazilian', 1242325, 2231, 'female', '0000-00-00 00:00:00.000000', 'jd@gmail.com', 2147483647, 'Finance', '098', 'cleaner', '', 'employee', 'At Work'),
('harry', 'sam', 'kenyan', 7686, 2232, 'male', '0000-00-00 00:00:00.000000', 'hs@gmail.com', 724567890, 'sales', '456', 'marketer', '', 'employee', 'At Work');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_no`),
  ADD UNIQUE KEY `Id_number` (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2233;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
