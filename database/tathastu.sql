-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 11:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tathastu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  ` fname` varchar(3000) NOT NULL,
  `mname` varchar(3000) NOT NULL,
  `lname` varchar(3000) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Profession` varchar(1000) NOT NULL,
  `PAN` bigint(12) NOT NULL,
  `Adhaar` bigint(12) NOT NULL,
  `Height` int(5) NOT NULL,
  `Weight` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `healthagents`
--

CREATE TABLE `healthagents` (
  `Fname` varchar(3000) NOT NULL,
  `Mname` varchar(3000) NOT NULL,
  `Lname` varchar(3000) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(3000) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Qualification` varchar(1000) NOT NULL,
  `PAN` bigint(12) NOT NULL,
  `Adhaar` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lifeagents`
--

CREATE TABLE `lifeagents` (
  `Fname` varchar(3000) NOT NULL,
  `Mname` varchar(3000) NOT NULL,
  `Lname` varchar(3000) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(3000) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Qualification` varchar(1000) NOT NULL,
  `PAN` bigint(12) NOT NULL,
  `Adhaar` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
