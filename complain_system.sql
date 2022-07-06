-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2022 at 07:59 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain system`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Comp_ID` int(11) NOT NULL,
  `Comp_Description` varchar(255) NOT NULL,
  `Comp_Progress` varchar(255) NOT NULL,
  `Comp_Status` varchar(255) NOT NULL,
  `Comp_Type` varchar(255) NOT NULL,
  `Item_No` varchar(25) NOT NULL,
  `Feedback_Action` varchar(255) NOT NULL,
  `Staff_ID` int(11) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `Cust_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `Cust_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Cust_Username` varchar(50) NOT NULL,
  `Cust_Password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cust_PhoneNo` varchar(20) NOT NULL,
  `Cust_Address` varchar(255) NOT NULL,
  `Cust_Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Cust_Name`, `Cust_Username`, `Cust_Password`, `created_at`, `Cust_PhoneNo`, `Cust_Address`, `Cust_Email`) VALUES
(1, '', 'izzat', '$2y$10$5bwJzoP1fiDajSWNkwgYw.jMeVQj5VnEpdS.FiXiEy9EVIESdnSoK', '2022-06-16 03:31:59', '', '', ''),
(2, '', 'dyy', '$2y$10$xMVRzsfgIbHw02tiOOy74u7jMCLg8bAHiKUQyqGCBDJ3ql8G.T7JW', '2022-06-18 14:35:55', '', '', ''),
(3, '', 'Fauzi', '$2y$10$MTBguzI9qAVXZ9Ap.qgigew8IpYjh0KClkptuHAtGOz4zbYOsmTNu', '2022-06-18 14:54:34', '', '', ''),
(4, '', 'zanariah21', '$2y$10$xXByNHK2fiVCKhK61yJ2xuX6Ny/fBnJT0Oze.seUG5Ed/cve1qZx6', '2022-06-19 16:20:16', '', '', ''),
(5, '', 'dolahsalleh', '$2y$10$8TbQW/rv//c1FbHRvQnvsuFzRfbSiRpsw.HZNOI0VcEoabkqhgDlC', '2022-06-22 01:35:59', '', '', ''),
(6, '', 'syukri', '$2y$10$8xzEcXYiQCNyYAKQ/Fxwsus7PA14ALePgl7PgxjmFqfoIUKAJ24Cq', '2022-06-22 01:36:24', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(255) NOT NULL,
  `Dept_Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(10) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Staff_PhoneNo` varchar(20) NOT NULL,
  `Staff_Address` varchar(255) NOT NULL,
  `Staff_Email` varchar(255) NOT NULL,
  `Staff_Password` varchar(15) NOT NULL,
  `Staff_HireDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `Staff_Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Staff_PhoneNo`, `Staff_Address`, `Staff_Email`, `Staff_Password`, `Staff_HireDate`, `Staff_Username`) VALUES
(1, '', '', '', '', 'admin', '2022-06-05 12:19:38.000000', 'admin'),
(2, '', '', '', '', 'admin2', '2022-06-05 12:19:38.000000', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Comp_ID`),
  ADD UNIQUE KEY `Staff_ID` (`Staff_ID`,`Dept_ID`,`Cust_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Comp_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
