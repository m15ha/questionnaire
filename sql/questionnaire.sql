-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2018 at 02:53 PM
-- Server version: 5.7.20
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `issues_accaunted`
--

CREATE TABLE `issues_accaunted` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issues_accaunted`
--

INSERT INTO `issues_accaunted` (`id`, `name`, `timestamp`) VALUES
(1, 'localisation', '2018-04-06 14:58:33'),
(2, 'cost_efficienty', '2018-04-06 14:58:44'),
(3, 'turnaround_time', '2018-04-06 14:58:55'),
(4, 'client_experience', '2018-04-06 14:59:06'),
(5, 'inventory_discrepency', '2018-04-06 14:59:28'),
(6, 'other', '2018-04-06 14:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `issues_accaunted_id`
--

CREATE TABLE `issues_accaunted_id` (
  `id` int(11) NOT NULL,
  `id_main_form` int(10) NOT NULL,
  `id_issues_accaunded` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `main_form`
--

CREATE TABLE `main_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `initial_load_shipped` varchar(2000) NOT NULL,
  `space_requirements` int(10) DEFAULT NULL,
  `issues_accaunted` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_form`
--

INSERT INTO `main_form` (`id`, `name`, `initial_load_shipped`, `space_requirements`, `issues_accaunted`, `timestamp`) VALUES
(1, 'Alex', 'go home', NULL, NULL, '2018-04-06 19:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `space_requirements`
--

CREATE TABLE `space_requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `space_requirements`
--

INSERT INTO `space_requirements` (`id`, `name`, `timestamp`) VALUES
(1, 'by_pallet', '2018-04-06 14:51:51'),
(2, 'by_carton', '2018-04-06 14:51:38'),
(3, 'by_squarefootage', '2018-04-06 14:52:15'),
(4, 'by_sku', '2018-04-06 14:52:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issues_accaunted`
--
ALTER TABLE `issues_accaunted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues_accaunted_id`
--
ALTER TABLE `issues_accaunted_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_form`
--
ALTER TABLE `main_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `space_requirements`
--
ALTER TABLE `space_requirements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issues_accaunted`
--
ALTER TABLE `issues_accaunted`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `issues_accaunted_id`
--
ALTER TABLE `issues_accaunted_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_form`
--
ALTER TABLE `main_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `space_requirements`
--
ALTER TABLE `space_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
