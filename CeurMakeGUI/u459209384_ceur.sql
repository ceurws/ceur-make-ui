-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2020 at 06:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u459209384_ceur`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblPwdReset`
--

CREATE TABLE `tblPwdReset` (
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `reset_code` varchar(75) COLLATE utf8_bin NOT NULL DEFAULT '',
  `reset_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `login_type` enum('GOOGLE','FACEBOOK','EMAIL') COLLATE utf8_bin NOT NULL DEFAULT 'EMAIL',
  `auth_id` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email_verification_code` varchar(75) COLLATE utf8_bin NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tblWorkshops`
--

CREATE TABLE `tblWorkshops` (
  `rec_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `json_data` text COLLATE utf8_bin NOT NULL,
  `created_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblPwdReset`
--
ALTER TABLE `tblPwdReset`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tblWorkshops`
--
ALTER TABLE `tblWorkshops`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblWorkshops`
--
ALTER TABLE `tblWorkshops`
  MODIFY `rec_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
