-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 01:47 PM
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
(23, 'mainuser', '9e3fb463c53e10b5245a426a9d594221', '2021-07-21 17:50:58', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batch1sem1`
--
ALTER TABLE `batch1sem1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
