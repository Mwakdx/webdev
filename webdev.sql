-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 10:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(155) NOT NULL,
  `Last_Name` varchar(155) NOT NULL,
  `Gender` varchar(155) NOT NULL,
  `Nationality` varchar(155) NOT NULL,
  `Email` varchar(155) NOT NULL,
  `Username` varchar(155) NOT NULL,
  `Password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`ID`, `First_Name`, `Last_Name`, `Gender`, `Nationality`, `Email`, `Username`, `Password`) VALUES
(3, 'Mark Hamill', 'Salahuddin', 'Male', 'Filipino', 'pilar@gmail.com', 'Mark', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'Mark Hamill', 'Salahuddin', 'Male', 'Filipino', 'communications@pczc.edu.ph', 'Marks', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
