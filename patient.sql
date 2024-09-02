-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 10:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `patient_addedon` datetime NOT NULL,
  `Answers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_firstname`, `patient_lastname`, `patient_email`, `patient_dob`, `patient_gender`, `patient_address`, `patient_phone`, `patient_addedon`, `Answers`) VALUES
(1, 'Umwaliwase', 'Digne', 'umwali@gmail.com', '2022-02-19', 'Female', 'Kicukiro Gikondo', '0789977841', '2022-02-19 21:10:49', 0),
(2, 'Uwera', 'Ange', 'uweraange@gmail.com', '0000-00-00', 'Female', 'KK 737 st', '0789977841', '0000-00-00 00:00:00', 0),
(4, 'Nezerwa', 'Ines', 'umwalidigne@gmail.com', '2022-02-03', 'Female', 'KK 737 st', '+250789977841', '0000-00-00 00:00:00', 0),
(5, 'Nezerwa', 'Ines', 'umwalidigne@gmail.com', '2022-02-03', 'Female', 'KK 737 st', '+250789977841', '0000-00-00 00:00:00', 0),
(6, 'Mugisha', 'Marina', 'mm@gmail.com', '2020-06-16', 'Female', 'KK 737 st', '0789977841', '0000-00-00 00:00:00', 0),
(7, 'Ishimwe ', 'Jonathan', 'ishimwe@gmail.com', '2022-01-30', 'Male', 'KK 737 st', '+250789977841', '0000-00-00 00:00:00', 0),
(8, 'Uwera', 'Divine', 'divine@gmail.com', '2015-02-27', 'Female', 'KK 737 st', '0789977841', '0000-00-00 00:00:00', 7),
(9, 'Kamali ', 'Kalisa', 'kamali@gmail.com', '1998-02-08', 'Male', 'KK 737 st', '+250789977841', '0000-00-00 00:00:00', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
