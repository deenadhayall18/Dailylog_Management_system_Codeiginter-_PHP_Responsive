-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 11:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailylog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dailylog`
--

CREATE TABLE `tbl_dailylog` (
  `lid` int(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `project` varchar(255) NOT NULL,
  `logdetails` varchar(255) NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dailylog`
--

INSERT INTO `tbl_dailylog` (`lid`, `date`, `project`, `logdetails`, `user`) VALUES
(1, '2018-06-01', 'ww', 'qweqwe', 'Dheena'),
(2, '2018-06-01', 'ww', 'qweqwe', 'Dheena'),
(3, '2018-06-01', 'OIL INDIA ', 'Monitoring the live project', 'Priyan'),
(4, '2018-06-01', 'OIL INDIA ', 'Monitoring the live project', 'priyan'),
(5, '2018-06-01', 'OIL INDIA ', 'Monitoring the live project', 'priyan'),
(6, '2018-06-01', 'ww', 'qweqwe', 'dheena'),
(7, '2018-06-01', 'ww', 'qweqwe', 'dheena'),
(8, '2018-06-01', 'Hfen', 'hdsgfkbhfg', 'dheena'),
(9, '2018-06-01', 'priyan', 'map', 'priyan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'dheena', 'Satvat@123'),
(2, 'priyan', 'Satvat@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `tid` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `task` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`tid`, `date`, `task`, `user`, `status`) VALUES
(1, '2018-06-01', 'ASDSAD', 'dheena', 1),
(5, '2018-06-01', 'test', 'priyan', 0),
(8, '2018-06-01', 'test', 'dheena', 0),
(9, '2018-06-01', 'gyg', 'dheena', 1),
(10, '2018-06-01', 'awewe', 'dheena', 1),
(11, '2018-06-01', 'ewe', 'dheena', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dailylog`
--
ALTER TABLE `tbl_dailylog`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dailylog`
--
ALTER TABLE `tbl_dailylog`
  MODIFY `lid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
