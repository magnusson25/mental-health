-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 06:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentalhealth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_position` varchar(255) NOT NULL,
  `doctor_contact` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_position`, `doctor_contact`, `doctor_email`, `doctor_password`) VALUES
(3, 'Hillarie Jane', 'Therapist Case Manager', '+250789977841', 'hilarie@yahoo.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(4, 'Kanyamahanga Jean', 'Therapist Clinician Case Manager', '0782834983', 'jean@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(5, 'Didas Gasana', 'Therapist Clinician Case Manager', '0789977841', 'gasana@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(9, 'Mwiza Adeline', 'Clinician Clinical Supervisor Nursing Director', '+250789977841', 'mwiza@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(13, 'Mwiza Adeline', 'Clinician Clinical Supervisor Nursing Director', '+250789977841', 'mwiza@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_firstname` varchar(200) NOT NULL,
  `patient_lastname` varchar(200) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `patient_dob` date NOT NULL,
  `patient_gender` enum('Male','Female','Other') DEFAULT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_phone` varchar(30) NOT NULL,
  `doctor_postion` text NOT NULL,
  `contact_method` text NOT NULL,
  `patient_addedon` datetime NOT NULL,
  `Answers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_firstname`, `patient_lastname`, `patient_email`, `patient_dob`, `patient_gender`, `patient_address`, `patient_phone`, `doctor_postion`, `contact_method`, `patient_addedon`, `Answers`) VALUES
(1, 'Umwaliwase', 'Digne', 'umwali@gmail.com', '2022-02-19', 'Female', 'Kicukiro Gikondo', '0789977841', '', '', '2022-02-19 21:10:49', ''),
(2, 'Uwera', 'Ange', 'uweraange@gmail.com', '0000-00-00', 'Female', 'KK 737 st', '0789977841', '', '', '0000-00-00 00:00:00', ''),
(4, 'Nezerwa', 'Ines', 'umwalidigne@gmail.com', '2022-02-03', 'Female', 'KK 737 st', '+250789977841', '', '', '0000-00-00 00:00:00', ''),
(5, 'Nezerwa', 'Ines', 'umwalidigne@gmail.com', '2022-02-03', 'Female', 'KK 737 st', '+250789977841', '', '', '0000-00-00 00:00:00', ''),
(6, 'Mugisha', 'Marina', 'mm@gmail.com', '2020-06-16', 'Female', 'KK 737 st', '0789977841', '', '', '0000-00-00 00:00:00', ''),
(7, 'magnusson', 'emma', 'emmy@gmail.com', '2000-02-23', 'Male', 'kicukiro', '0787233376', '', '', '0000-00-00 00:00:00', '7'),
(8, 'ted', 'gy', 'emmats55@gmail.com', '2022-03-11', 'Male', 'kicukiro', '0787233376', '', '', '0000-00-00 00:00:00', '5'),
(9, 'philb', 'ndziey', 'ndzphilbert@gmail.com', '2023-01-01', 'Male', 'kigali', '0785300822', '', 'mail', '0000-00-00 00:00:00', '3'),
(10, 'emmem', 'hjhjc', 'cdc@gmai.com', '2023-01-01', 'Male', 'cdsc', '232323', 'Clinician Clinical Supervisor Nursing Director', 'mail', '0000-00-00 00:00:00', '6'),
(11, 'cjsnj', 'ncjdjn', 'csdc@gmai.com', '2023-01-01', 'Female', 'cnsdcjk', '3526563', 'Therapist Case Manager', 'call', '0000-00-00 00:00:00', '5'),
(12, 'emma', 'emmanuel', 'emmats@gmail.com', '2000-02-12', 'Male', 'kicukiro', '0897877867', 'Clinician Clinical Supervisor Nursing Director', 'mail', '0000-00-00 00:00:00', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `LOG_ID` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `LOGIN_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LOGOUT_TIME` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`LOG_ID`, `email`, `LOGIN_TIME`, `LOGOUT_TIME`) VALUES
(408, 'kaneza@gmail.com', '2022-02-23 20:44:42', '11-03-2022 09:44:02 AM'),
(409, 'mwiza@gmail.com', '2022-02-24 05:30:47', '11-03-2022 06:10:20 AM'),
(410, 'kaneza@gmail.com', '2022-02-28 06:58:27', '11-03-2022 09:44:02 AM'),
(411, 'mwiza@gmail.com', '2022-02-28 07:04:44', '11-03-2022 06:10:20 AM'),
(412, 'mwiza@gmail.com', '2022-03-11 13:29:11', '11-03-2022 06:10:20 AM'),
(413, 'mwiza@gmail.com', '2022-03-11 13:59:55', '11-03-2022 06:10:20 AM'),
(414, 'mwiza@gmail.com', '2022-03-11 14:03:10', '11-03-2022 06:10:20 AM'),
(415, 'emmy@gmail.com', '2022-03-11 14:10:54', ''),
(416, 'mwiza@gmail.com', '2022-03-11 14:13:32', ''),
(417, 'mwiza@gmail.com', '2022-03-11 15:05:00', ''),
(418, 'kaneza@gmail.com', '2022-03-11 15:05:21', '11-03-2022 09:44:02 AM'),
(419, 'kaneza@gmail.com', '2022-03-11 15:11:01', '11-03-2022 09:44:02 AM'),
(420, 'kaneza@gmail.com', '2022-03-11 17:42:25', '11-03-2022 09:44:02 AM');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Doctor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `fullname`, `position`, `email`, `phone`, `password`, `user_type`) VALUES
(3, 'Mugisha Marina', '', 'mugisha@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'Admin'),
(4, 'Umwaliwase Digne', '', 'umwali@gmail.com', '0789977841', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'User'),
(6, 'uwera Kaneza', '', 'kaneza@gmail.com', '0789977841', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Admin'),
(8, 'Esther Tuyizere', '', 'uweraaline@gmail.com', '0789977841', '*191F255A169AAE0FBB1EF4B72C0F6E21DBD4C550', 'User'),
(9, 'Emmy', 'Therapist Case Manager', 'emmy@gmail.com', '0787233376', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'User'),
(11, 'Mwiza Adeline', 'Clinician Clinical Supervisor Nursing Director', 'mwiza@gmail.com', '+250789977841', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`LOG_ID`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `LOG_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
