-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 08:40 AM
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
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `applying_for` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Year_Passout` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id`, `Name`, `applying_for`, `Qualification`, `Year_Passout`) VALUES
(4, 'teja', 'manager', 'btech', 2023),
(5, 'Mourya Deepak', 'CEO', 'Masters', 2023),
(6, 'Amarnath', 'Python Developer', 'M tech', 2022),
(7, 'Mallik', 'php developer', 'M tech', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `id` int(100) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Job_Description` varchar(100) NOT NULL,
  `Skills` varchar(100) NOT NULL,
  `CTC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`id`, `Company_Name`, `Position`, `Job_Description`, `Skills`, `CTC`) VALUES
(4, 'Google', 'CEO', 'Need Skilled CEO with Experience of 15 years.', 'Python, C, Java, DATA BASE, Php, Html, CSS', '5LPA'),
(6, 'TCS', 'HR', 'Need skilled person with experience of 10 years.', 'C, Python', '12 LPA'),
(7, 'Microsoft', 'HR', 'Need skilled person with experience', 'Java', '5LPA'),
(8, 'Teja Consultencies', 'Python Developer', 'Need skilled person with experience of 10 years.', 'C, Python', '100 LPA'),
(9, '1stop', 'php developer', 'Need skilled person with experience of 5 years', 'C, Python, php', '5LPA');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `Full Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone Number` bigint(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Full Name`, `Email`, `Phone Number`, `Password`) VALUES
(13, 'G Amarnath', 'gamarnath_ece190470@mgit.ac.in', 9912120506, 'Amar@22'),
(14, 'Reema Rani V', 'vreema@gmail.com', 9999111122, '123456'),
(15, 'Teja Vardhan', 'amarnathgoundra@gmail.com', 6789453312, 'Teja'),
(17, 'J Sai Mallik', 'sai@gmail.com', 9994445556, 'qqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
