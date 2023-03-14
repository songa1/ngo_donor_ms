-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 06:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nongov_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(50) DEFAULT NULL,
  `ngo_address` varchar(50) DEFAULT NULL,
  `ngo_phone` varchar(15) DEFAULT NULL,
  `ngo_email` varchar(50) DEFAULT NULL,
  `ngo_url` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `ngo_name`, `ngo_address`, `ngo_phone`, `ngo_email`, `ngo_url`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Compassion', 'Kigali-Rwanda', '078908737', 'com@gmail.com', 'com.com', '2023-01-23 12:45:56', 1, NULL, NULL),
(16, 'Compassion International', 'Kigali', '0735938789', 'roots@email.com', 'https://roots.com', NULL, NULL, NULL, NULL),
(17, 'Roots Rwanda', 'Kigali', '0735938789', 'roots@email.com', 'https://roots.com', NULL, 8, NULL, NULL),
(18, 'Save The Children', 'Kigali', '0735938789', 'save@children.com', 'https://roots.com', NULL, 9, NULL, NULL),
(19, 'Save The Children', 'Kigali', '0735938789', 'save@children.com', 'https://roots.com', NULL, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_beneficiaries`
--

CREATE TABLE `ngo_beneficiaries` (
  `beneficiary_id` int(11) NOT NULL,
  `beneficiary_name` varchar(200) DEFAULT NULL,
  `beneficiary_dob` date DEFAULT NULL,
  `beneficiary_occupation` varchar(200) DEFAULT NULL,
  `beneficiary_phone` varchar(20) DEFAULT NULL,
  `beneficiary_email` varchar(30) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_beneficiaries`
--

INSERT INTO `ngo_beneficiaries` (`beneficiary_id`, `beneficiary_name`, `beneficiary_dob`, `beneficiary_occupation`, `beneficiary_phone`, `beneficiary_email`, `ngo_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Gahama Bonifas', '2023-03-24', 'Student', '0783838383q', 'gahama@email.com', 17, NULL, NULL, NULL, NULL),
(2, 'Karema Jean', '2023-03-24', 'Farmer', '0783838383', 'karema@gmail.com', 17, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_benfun`
--

CREATE TABLE `ngo_benfun` (
  `benfun_id` int(11) NOT NULL,
  `beneficiary_id` int(11) DEFAULT NULL,
  `fund_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_donors`
--

CREATE TABLE `ngo_donors` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(30) DEFAULT NULL,
  `donor_email` varchar(50) DEFAULT NULL,
  `donor_phone` varchar(20) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_employees`
--

CREATE TABLE `ngo_employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `employee_email` varchar(100) DEFAULT NULL,
  `employee_phone` varchar(15) DEFAULT NULL,
  `employee_dob` date DEFAULT NULL,
  `employee_password` varchar(100) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_employees`
--

INSERT INTO `ngo_employees` (`employee_id`, `employee_name`, `employee_email`, `employee_phone`, `employee_dob`, `employee_password`, `ngo_id`, `role_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(8, 'Cishahayo Songa Achille', 'songachille@g.d', '0735938789', '2023-03-26', 'password', 17, 1, NULL, NULL, NULL, NULL),
(9, 'Cishahayo ', 'songachille@g.d', '0735938789', '2023-03-26', 'password', 19, 1, NULL, NULL, NULL, NULL),
(10, 'Gatarayiha Marcel', 'garata@gmail.com', '07890000', '2023-03-17', 'pass', 17, 3, NULL, NULL, NULL, NULL),
(11, 'Gatarayiha Marcel', 'garata@gmail.com', '07890000', '2023-03-17', 'pass', 17, 3, NULL, NULL, NULL, NULL),
(12, 'Munana Emmanuel', 'munana@email.com', '078937373', '2023-03-16', 'pass', 17, 3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_funds`
--

CREATE TABLE `ngo_funds` (
  `fund_id` int(11) NOT NULL,
  `fund_donor` int(11) DEFAULT NULL,
  `fund_amount` int(11) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `fund_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_funtype`
--

CREATE TABLE `ngo_funtype` (
  `funtype_id` int(11) NOT NULL,
  `type_name` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_roles`
--

CREATE TABLE `ngo_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_roles`
--

INSERT INTO `ngo_roles` (`role_id`, `role_name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Administrator', '2023-03-02 06:54:17', 1, '2023-03-02 06:54:17', 1),
(2, 'NGO Admin', '2023-03-04 16:53:21', 8, '2023-03-04 16:53:21', 8),
(3, 'Employee', '2023-03-04 16:53:49', 8, '2023-03-04 16:53:49', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `ngo_beneficiaries`
--
ALTER TABLE `ngo_beneficiaries`
  ADD PRIMARY KEY (`beneficiary_id`),
  ADD KEY `ngoid` (`ngo_id`);

--
-- Indexes for table `ngo_benfun`
--
ALTER TABLE `ngo_benfun`
  ADD PRIMARY KEY (`benfun_id`),
  ADD KEY `ben_funds` (`beneficiary_id`),
  ADD KEY `funds_ben` (`fund_id`);

--
-- Indexes for table `ngo_donors`
--
ALTER TABLE `ngo_donors`
  ADD PRIMARY KEY (`donor_id`),
  ADD KEY `ngo` (`ngo_id`);

--
-- Indexes for table `ngo_employees`
--
ALTER TABLE `ngo_employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `ngo_funds`
--
ALTER TABLE `ngo_funds`
  ADD PRIMARY KEY (`fund_id`),
  ADD KEY `ngo__id` (`ngo_id`),
  ADD KEY `fund_donor` (`fund_donor`),
  ADD KEY `fund_type` (`fund_type`);

--
-- Indexes for table `ngo_funtype`
--
ALTER TABLE `ngo_funtype`
  ADD PRIMARY KEY (`funtype_id`);

--
-- Indexes for table `ngo_roles`
--
ALTER TABLE `ngo_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ngo_beneficiaries`
--
ALTER TABLE `ngo_beneficiaries`
  MODIFY `beneficiary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngo_benfun`
--
ALTER TABLE `ngo_benfun`
  MODIFY `benfun_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_donors`
--
ALTER TABLE `ngo_donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_employees`
--
ALTER TABLE `ngo_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ngo_funds`
--
ALTER TABLE `ngo_funds`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_funtype`
--
ALTER TABLE `ngo_funtype`
  MODIFY `funtype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_roles`
--
ALTER TABLE `ngo_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ngo_beneficiaries`
--
ALTER TABLE `ngo_beneficiaries`
  ADD CONSTRAINT `ngoid` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);

--
-- Constraints for table `ngo_benfun`
--
ALTER TABLE `ngo_benfun`
  ADD CONSTRAINT `ben_funds` FOREIGN KEY (`beneficiary_id`) REFERENCES `ngo_beneficiaries` (`beneficiary_id`),
  ADD CONSTRAINT `funds_ben` FOREIGN KEY (`fund_id`) REFERENCES `ngo_funds` (`fund_id`);

--
-- Constraints for table `ngo_donors`
--
ALTER TABLE `ngo_donors`
  ADD CONSTRAINT `ngo` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);

--
-- Constraints for table `ngo_employees`
--
ALTER TABLE `ngo_employees`
  ADD CONSTRAINT `ngo_id` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`),
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `ngo_roles` (`role_id`);

--
-- Constraints for table `ngo_funds`
--
ALTER TABLE `ngo_funds`
  ADD CONSTRAINT `fund_donor` FOREIGN KEY (`fund_donor`) REFERENCES `ngo_donors` (`donor_id`),
  ADD CONSTRAINT `fund_type` FOREIGN KEY (`fund_type`) REFERENCES `ngo_funtype` (`funtype_id`),
  ADD CONSTRAINT `ngo__id` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
