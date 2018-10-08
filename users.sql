-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2018 at 02:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`, `admin_email`) VALUES
(1, 'admin', 'admin', ''),
(2, 'spockula', 'spockula', 'oprextra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `VerificationStatus` tinyint(1) NOT NULL DEFAULT '0',
  `DisplayName` varchar(255) NOT NULL,
  `AccountNumber` int(20) NOT NULL,
  `BankName` varchar(125) NOT NULL,
  `ActivationStatus` tinyint(1) NOT NULL DEFAULT '0',
  `BlockStatus` tinyint(1) NOT NULL DEFAULT '0',
  `EntryDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Password`, `UserEmail`, `VerificationStatus`, `DisplayName`, `AccountNumber`, `BankName`, `ActivationStatus`, `BlockStatus`, `EntryDate`) VALUES
(1, 'spockula', 'spockula', 'chinedukogu@gmail.com', 0, '', 0, '', 0, 0, '0000-00-00 00:00:00'),
(2, 'oragon', 'spockula', 'oprextra@gmail.com', 0, '', 0, '', 0, 0, '0000-00-00 00:00:00'),
(3, 'oragonics', 'spocks', 'spockula@yahoo.com', 0, '', 0, '', 0, 0, '0000-00-00 00:00:00'),
(4, 'chinedu', 'fffuyfhy', 'www.spockula@yahoo.com', 0, 'spockula', 908080, '', 0, 0, '0000-00-00 00:00:00'),
(5, 'chinedu', '', 'oprextra@gmail.com', 0, 'spockula', 908080, '', 0, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
