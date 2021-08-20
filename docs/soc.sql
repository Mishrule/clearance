-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 05:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `staff_number` int(20) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `staff_password` varchar(250) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_gender` varchar(250) NOT NULL,
  `staff_contact` varchar(250) NOT NULL,
  `access_level` varchar(250) NOT NULL,
  `registered_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`staff_number`, `staff_id`, `staff_password`, `staff_name`, `staff_email`, `staff_gender`, `staff_contact`, `access_level`, `registered_date`) VALUES
(1, 'Administrator', 'Administrator', 'Administrator', 'Admin@gmail.com', 'Male', '0245185004', 'admin', 'August-20-2021 15:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(200) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `clearance_type` varchar(250) NOT NULL,
  `clearance_status` varchar(250) NOT NULL,
  `year_group` varchar(20) NOT NULL,
  `requested_date` varchar(250) NOT NULL,
  `approved_date` varchar(250) NOT NULL,
  `approved_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(20) NOT NULL,
  `departmant_name` varchar(250) NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(20) NOT NULL,
  `hall_name` varchar(250) NOT NULL,
  `created_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(20) NOT NULL,
  `student_index` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_password` varchar(250) NOT NULL,
  `student_email` varchar(250) NOT NULL,
  `student_gender` varchar(250) NOT NULL,
  `student_contact` varchar(250) NOT NULL,
  `student_department` varchar(250) NOT NULL,
  `student_hall` varchar(250) NOT NULL,
  `student_yeargroup` varchar(250) NOT NULL,
  `student_image` varchar(250) NOT NULL,
  `registered_date` varchar(250) NOT NULL,
  `access_level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yeargroup`
--

CREATE TABLE `yeargroup` (
  `year_id` int(20) NOT NULL,
  `years_year` varchar(250) NOT NULL,
  `created_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`staff_number`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `departmant_name` (`departmant_name`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`),
  ADD UNIQUE KEY `hall_name` (`hall_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_index` (`student_index`);

--
-- Indexes for table `yeargroup`
--
ALTER TABLE `yeargroup`
  ADD PRIMARY KEY (`year_id`),
  ADD UNIQUE KEY `years_year` (`years_year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `staff_number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clearance_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yeargroup`
--
ALTER TABLE `yeargroup`
  MODIFY `year_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
