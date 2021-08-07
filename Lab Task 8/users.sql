-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 11:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Birth_date` int(2) NOT NULL,
  `Birth_month` int(2) NOT NULL,
  `Birth_year` int(4) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Username`, `Password`, `Gender`, `Birth_date`, `Birth_month`, `Birth_year`, `User_type`, `Dept`, `ID`, `Photo`) VALUES
('Ankur Saha', '18-37913-2@student.aiub.edu', 'Ankur', '12345678@', 'Male', 31, 7, 1996, 'Student', 'CSE', '18379132', 'MyPic.jpg'),
('Emon Al Mamun', 'emonmamun@gmail.com', 'Emon', '12345678@', 'Male', 1, 1, 1998, 'Student', 'CSE', '001234', 'Emon.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
