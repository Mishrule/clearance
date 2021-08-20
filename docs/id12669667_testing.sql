-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 05:22 PM
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
(1, 'st001', '1', 'Mish', 'st@gmail.com', 'Male', '0258456321', 'admin', 'April-23-2021 13:51:05'),
(3, 'st002', '1', 'Financial', 'st2@gmail.com', 'Male', '0254586541', 'Financial Clearance (Including SRC)', 'April-24-2021 13:39:21'),
(4, 'st003', '1', 'Department', 'st@gmail.com', 'Male', '325865412', 'Department Clearance (Departmental Dues)', 'April-24-2021 14:18:13'),
(5, 'st004', '1', 'Hall', 'hall@gmail.com', 'Male', '0215478541', 'Hall Clearance', 'April-24-2021 14:50:52'),
(6, 'st005', '1', 'Library', 'library@gmail.com', 'Male', '0254785412', 'Library Clearance (Lost of Books)', 'April-24-2021 14:51:38');

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
  `approved_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `student_id`, `student_name`, `clearance_type`, `clearance_status`, `year_group`, `requested_date`, `approved_date`) VALUES
(1, '5151040001', 'Bismark Teye', 'Financial Clearance (Including SRC)', 'Approved', '2021', 'April-19-2021 12:19:51', 'April-24-2021 14:02:00'),
(2, '5151040001', 'Bismark Teye', 'Department Clearance (Departmental Dues)', 'Approved', '2021', 'April-19-2021 12:32:41', 'April-24-2021 14:49:29'),
(3, '5151040001', 'Bismark Teye', 'Library Clearance (Lost of Books)', 'Approved', '2021', 'April-19-2021 12:41:22', 'April-24-2021 15:02:12'),
(4, '5151040001', 'Bismark Teye', 'Hall Clearance', 'Approved', '2021', 'April-19-2021 12:48:13', 'April-24-2021 15:19:37'),
(5, '5151040001', 'Bismark Teye', 'Financial Clearance (Including SRC)', 'Approved', '2021', 'April-20-2021 09:08:41', 'April-24-2021 14:10:17'),
(6, '5151040001', 'Bismark Teye', 'Financial Clearance (Including SRC)', 'Approved', '2021', 'April-20-2021 09:11:31', 'April-24-2021 13:21:27'),
(8, '5151040002', 'Arthur Fred', 'Financial Clearance (Including SRC)', 'Approved', '2021', 'April-22-2021 10:27:49', 'April-24-2021 13:26:43'),
(9, '5151040002', 'Arthur Fred', 'Department Clearance (Departmental Dues)', 'Pending', '2021', 'April-22-2021 10:29:17', ''),
(10, '5151040002', 'Arthur Fred', 'Library Clearance (Lost of Books)', 'Pending', '2021', 'April-22-2021 10:30:52', ''),
(11, '5151040002', 'Arthur Fred', 'Hall Clearance', 'Pending', '2021', 'April-22-2021 10:31:04', ''),
(12, '5151040002', 'Arthur Fred', 'Financial Clearance (Including SRC)', 'Approved', '2021', 'April-23-2021 19:16:36', 'April-24-2021 13:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(20) NOT NULL,
  `departmant_name` varchar(250) NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `departmant_name`, `created_date`) VALUES
(1, 'Information Technology', 'April-17-2021 14:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `financial_clearance`
--

CREATE TABLE `financial_clearance` (
  `finance_id` int(20) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `request_status` varchar(250) NOT NULL,
  `date_requested` varchar(250) NOT NULL
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

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `created_date`) VALUES
(1, 'Opoku Ware', 'April-17-2021 12:44:26'),
(2, 'Authonomy', 'April-17-2021 12:47:18'),
(3, 'Atwima', 'April-17-2021 12:50:32');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_index`, `student_name`, `student_password`, `student_email`, `student_gender`, `student_contact`, `student_department`, `student_hall`, `student_yeargroup`, `student_image`, `registered_date`, `access_level`) VALUES
(1, '5151040001', 'Bismark Teye', '1', 'bis@gmail.com', 'Male', '0255855585', '1', '1', '3', 'IMG_20190619_120153 (3).jpg', 'April-17-2021 22:06:39', 'student'),
(2, '5151040002', 'Arthur Fred', '1', 'fred@gmail.com', 'Male', '0245585558', 'Information Technology', 'Authonomy', '2021', 'IMG-20170610-WA0011.jpg', 'April-22-2021 08:57:18', 'student');

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
-- Dumping data for table `yeargroup`
--

INSERT INTO `yeargroup` (`year_id`, `years_year`, `created_date`) VALUES
(2, '', 'April-17-2021 15:43:17'),
(3, '2021', 'April-17-2021 15:51:46'),
(5, '2022', 'April-17-2021 15:55:38');

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
-- Indexes for table `financial_clearance`
--
ALTER TABLE `financial_clearance`
  ADD PRIMARY KEY (`finance_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

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
  MODIFY `staff_number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clearance_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `financial_clearance`
--
ALTER TABLE `financial_clearance`
  MODIFY `finance_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yeargroup`
--
ALTER TABLE `yeargroup`
  MODIFY `year_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
