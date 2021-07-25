-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msec`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch1`
--

CREATE TABLE `batch1` (
  `id` int(10) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `sslc` varchar(5) NOT NULL,
  `hsc` varchar(5) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch1`
--

INSERT INTO `batch1` (`id`, `rollno`, `name`, `fathername`, `mothername`, `dob`, `mail`, `schoolname`, `sslc`, `hsc`, `address`) VALUES
(3, '311518104001', 'Aadithya', 'Umasankhar', 'revathi', '11-08-2001', 'adithay@gmail.com', 'kendriya vidyalaya matriculation school', '90', '85', '9-5,arcot road,kodambakkam,chennai-24.'),
(4, '311518104002', 'Abijith', 'ravi', 'rekha', '01-07-2000', 'abijith@gmail.com', 'velammal matriculation higher secondary school', '95', '90', '10,2nd street,tambaram,chennai-70.');

-- --------------------------------------------------------

--
-- Table structure for table `batch1sem1`
--

CREATE TABLE `batch1sem1` (
  `id` int(10) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `attendance` int(10) NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `duration_intern` int(5) NOT NULL,
  `start_intern` varchar(15) NOT NULL,
  `end_intern` varchar(15) NOT NULL,
  `ecube_topic` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `visit_date` varchar(15) NOT NULL,
  `summary_iv` varchar(200) NOT NULL,
  `comm_eng` varchar(5) NOT NULL,
  `math` varchar(5) NOT NULL,
  `eng_phy` varchar(5) NOT NULL,
  `eng_che` varchar(5) NOT NULL,
  `pspp` varchar(5) NOT NULL,
  `eng_gra` varchar(5) NOT NULL,
  `pspplab` varchar(5) NOT NULL,
  `pclab` varchar(5) NOT NULL,
  `gpa` varchar(5) NOT NULL,
  `cgpa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch1sem1`
--

INSERT INTO `batch1sem1` (`id`, `rollno`, `name`, `attendance`, `office_name`, `domain`, `duration_intern`, `start_intern`, `end_intern`, `ecube_topic`, `company_name`, `visit_date`, `summary_iv`, `comm_eng`, `math`, `eng_phy`, `eng_che`, `pspp`, `eng_gra`, `pspplab`, `pclab`, `gpa`, `cgpa`) VALUES
(1, '311518104001', 'Aadithya', 50, 'infosys', 'software developer', 7, '10-11-2019', '17-11-2019', 'Image processing in Agriculture', 'Zoho Corporation ltd', '10-10-2019', 'The industrial visit was based on the work life of the employees in the office and the upcoming products which are available in zoho', 'O', 'U', 'A+', 'O', 'A', 'A+', 'O', 'O', '9.16', '9.16'),
(2, '311518104002', 'Abijith', 50, 'infosys', 'software developer', 7, '10-11-2019', '17-11-2019', 'Bit coin', 'Zoho Corporation ltd', '10-10-2019', 'The industrial visit was based on the work life of the employees in the office and the upcoming products which are available in zoho', 'O', 'A+', 'A+', 'A', 'O', 'A', 'O', 'O', '9.16', '9.16');

-- --------------------------------------------------------

--
-- Table structure for table `batch1sem2`
--

CREATE TABLE `batch1sem2` (
  `id` int(10) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `attendance` int(10) NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `duration_intern` int(5) NOT NULL,
  `start_intern` varchar(15) NOT NULL,
  `end_intern` varchar(15) NOT NULL,
  `ecube_topic` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `visit_date` varchar(15) NOT NULL,
  `summary_iv` varchar(200) NOT NULL,
  `tech_eng` varchar(5) NOT NULL,
  `math` varchar(5) NOT NULL,
  `phy_is` varchar(5) NOT NULL,
  `beeme` varchar(5) NOT NULL,
  `evs` varchar(5) NOT NULL,
  `p_in_c` varchar(5) NOT NULL,
  `eplab` varchar(5) NOT NULL,
  `clab` varchar(5) NOT NULL,
  `gpa` varchar(5) NOT NULL,
  `cgpa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch1sem2`
--

INSERT INTO `batch1sem2` (`id`, `rollno`, `name`, `attendance`, `office_name`, `domain`, `duration_intern`, `start_intern`, `end_intern`, `ecube_topic`, `company_name`, `visit_date`, `summary_iv`, `tech_eng`, `math`, `phy_is`, `beeme`, `evs`, `p_in_c`, `eplab`, `clab`, `gpa`, `cgpa`) VALUES
(1, '311518104001', 'Aadithya', 50, 'tcs', 'software developer', 7, '10-02-2020', '17-02-2020', 'Big Data using ml', 'Cognizant', '10-01-2020', 'We leanred about the company and the atmosphere and working style', 'A', 'B+', 'A+', 'A', 'A+', 'O', 'O', 'O', '8.67', '8.91'),
(2, '311518104002', 'Abijith', 50, 'tcs', 'software developer', 7, '10-02-2020', '17-02-2020', 'Steganography', 'cognizant', '10-01-2020', 'We leanred about the company and the atmosphere and working style', 'O', 'A+', 'A', 'A', 'O', 'O', 'O', 'O', '9.34', '9.26');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `mail_id` varchar(40) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `is_head` int(2) NOT NULL DEFAULT 0,
  `approved` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `user_name`, `mail_id`, `password`, `is_head`, `approved`) VALUES
(1, 'mainuser', 'main@mail.com', 'cacc531d73e13375b32efcce848de14d', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `token` varchar(40) NOT NULL,
  `expiry` datetime NOT NULL,
  `active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `user_name`, `token`, `expiry`, `active`) VALUES
(11, '', '2b95bc0b521a73314e0f083a4576d32e', '2021-07-17 15:50:02', 0),
(15, 'mainuser', '81ede0ccf81d7e93c56f47f6ab23ae7c', '2021-07-17 15:56:22', 1),
(16, 'mainuser', '937cb01c0692c3893a7b224e3ec0865d', '2021-07-17 15:57:22', 0),
(17, 'mainuser', 'db3f8072381c46911787ec6c9a7d2923', '2021-07-17 15:57:33', 0),
(18, 'mainuser', 'f977c423891fcab78dc238c512c9947c', '2021-07-17 20:42:43', 1),
(19, 'mainuser', '36725b309382eb301cdbb9d1a83e8bec', '2021-07-18 15:28:36', 0),
(20, 'mainuser', 'e31998c0188940e3b20f868427ff4ec4', '2021-07-18 15:29:21', 1),
(21, 'mainuser', '00f6adfe1d8ba0dd052cf02cf8941b81', '2021-07-18 15:30:00', 1),
(22, 'mainuser', 'a6742d818be6838039186567656017b0', '2021-07-18 21:34:48', 1),
(23, 'mainuser', '9e3fb463c53e10b5245a426a9d594221', '2021-07-21 17:50:58', 1),
(24, 'mainuser', 'dce1f946c0419347c82872f83742bdbc', '2021-07-22 19:02:44', 1),
(25, 'mainuser', '865fbf9fd679e526da65ef4577e2a381', '2021-07-25 10:13:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch1`
--
ALTER TABLE `batch1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `batch1sem1`
--
ALTER TABLE `batch1sem1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `batch1sem2`
--
ALTER TABLE `batch1sem2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch1`
--
ALTER TABLE `batch1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `batch1sem1`
--
ALTER TABLE `batch1sem1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batch1sem2`
--
ALTER TABLE `batch1sem2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
