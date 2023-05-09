-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 06:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_token`
--

CREATE TABLE `api_token` (
  `id` int(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `hit_limit` int(255) NOT NULL,
  `hit_counter` int(255) NOT NULL,
  `unique_limit` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_information`
--

CREATE TABLE `c_information` (
  `nid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `b_group` varchar(10) NOT NULL,
  `b_place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_information`
--

INSERT INTO `c_information` (`nid`, `name`, `dob`, `f_name`, `m_name`, `p_address`, `t_address`, `b_group`, `b_place`) VALUES
('3310000000', 'Abdur Rahman', '2003-02-01', 'Malik Rahman', 'Mina Rahman', 'Sylhet,Bangladesh', 'Sylhet,Bangladesh', 'B+', 'Sylhet'),
('3310000001', 'Ahnaf Rahman', '2000-11-11', 'Farhan Rahman', 'Maisha Rahman', 'Sylhet,Bangladesh', '15/46 Ruposhi, Shahi Eidgah, Sylhet', 'O+', 'Sylhet '),
('3310000002', 'Amir Islam', '2000-02-08', 'Rajib Islam', 'Rujina Begum', 'Sylhet,Bangladesh', '15/46 Ruposhi, Shahi Eidgah, Sylhet', 'O+', 'Sylhet '),
('3310000003', 'Tahbhir Khan', '2000-01-01', 'Tanjib Islam', 'Mili Islam', 'Sylhet,Bangladesh', '15/46 Ruposhi, Shahi Eidgah, Sylhet', 'O+', 'Sylhet '),
('3310000004', 'Soumik Datta', '1999-12-01', 'Rana Datta', 'Purobi Rani Datta', 'Moricha, Rajnagor,Moulvibazar', '15/16 Sadipur, Shibgonj, Sylhet', 'O+', 'Sylhet ');

-- --------------------------------------------------------

--
-- Table structure for table `health_info`
--

CREATE TABLE `health_info` (
  `nid` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `b_group` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `nid` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `dr_name` varchar(100) NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `reports` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_token`
--
ALTER TABLE `api_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_information`
--
ALTER TABLE `c_information`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `health_info`
--
ALTER TABLE `health_info`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_token`
--
ALTER TABLE `api_token`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
