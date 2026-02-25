-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 06:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`class_id`, `class_name`) VALUES
(1, 'fyit'),
(2, 'syit');

-- --------------------------------------------------------

--
-- Table structure for table `complain_details`
--

CREATE TABLE `complain_details` (
  `complain_id` int(11) NOT NULL,
  `complain_title` varchar(40) NOT NULL,
  `stud_enroll` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `complain_type` varchar(40) NOT NULL,
  `complain_date` date NOT NULL,
  `complain_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain_details`
--

INSERT INTO `complain_details` (`complain_id`, `complain_title`, `stud_enroll`, `class_id`, `complain_type`, `complain_date`, `complain_status`) VALUES
(1, 'teching', 1, 1, 'teching', '2023-11-02', 'pending'),
(2, 'about reserch', 1, 1, 'reserch', '2023-11-02', 'completes');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stud_enroll` int(11) NOT NULL,
  `stud_email` varchar(40) NOT NULL,
  `stud_name` varchar(40) NOT NULL,
  `stud_contact` bigint(40) NOT NULL,
  `class_id` int(11) NOT NULL,
  `stud_fee` int(20) NOT NULL,
  `date_of_admission` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stud_enroll`, `stud_email`, `stud_name`, `stud_contact`, `class_id`, `stud_fee`, `date_of_admission`, `password`, `profile_file`) VALUES
(1, 'mina12@gmail.com', 'Mina', 37598375897, 1, 19500, '2023-11-15', 'mina123456', 'badri.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `complain_details`
--
ALTER TABLE `complain_details`
  ADD PRIMARY KEY (`complain_id`),
  ADD KEY `stud_enroll` (`stud_enroll`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stud_enroll`),
  ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_details`
--
ALTER TABLE `class_details`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain_details`
--
ALTER TABLE `complain_details`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `stud_enroll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain_details`
--
ALTER TABLE `complain_details`
  ADD CONSTRAINT `complain_details_ibfk_1` FOREIGN KEY (`stud_enroll`) REFERENCES `student_details` (`stud_enroll`),
  ADD CONSTRAINT `complain_details_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class_details` (`class_id`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_details` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
