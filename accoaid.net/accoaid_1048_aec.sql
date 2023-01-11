-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 01:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accoaid_1048_aec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `Password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookingregister`
--

CREATE TABLE IF NOT EXISTS `bookingregister` (
  `BookingID` int(10) NOT NULL AUTO_INCREMENT,
  `BookingDate` date DEFAULT NULL,
  `BookingTime` varchar(20) DEFAULT NULL,
  `VisitingDate` date DEFAULT NULL,
  `VisitingTime` varchar(20) DEFAULT NULL,
  `TID` int(10) DEFAULT NULL,
  `PID` int(10) DEFAULT NULL,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `lessor`
--

CREATE TABLE IF NOT EXISTS `lessor` (
  `LID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(21) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Occupation` varchar(30) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `ProfileImage` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lessor`
--

INSERT INTO `lessor` (`LID`, `Name`, `Gender`, `DOB`, `Address`, `PhoneNo`, `Email`, `Occupation`, `Password`, `ProfileImage`) VALUES
(3, 'lessor1', 'male', '2023-01-09', '', '12345', 'lessor1@gmail.com', 'Official', '1234', NULL),
(4, 'Swaraj Gogoi', 'Male', '2023-01-24', 'Beltola Tiniali', '8426094242', 'sg@gmail.com', '', '1234', NULL),
(5, 'Rushabh Gogoi', 'Male', '2023-01-18', 'Jalukbari', '8473056082', 'rg@gmail.com', '', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `PID` int(10) NOT NULL AUTO_INCREMENT,
  `LID` int(10) DEFAULT NULL,
  `PropertyType` varchar(20) DEFAULT NULL,
  `FirnishedStatus` varchar(30) DEFAULT NULL,
  `Floor` varchar(20) DEFAULT NULL,
  `Rent` double(10,2) DEFAULT NULL,
  `DepositAmount` double(10,2) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Area` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Image` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `TID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(21) DEFAULT NULL,
  `EMail` varchar(30) DEFAULT NULL,
  `CollegeID` varchar(10) NOT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Sem` varchar(10) DEFAULT NULL,
  `RegNo` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `ProfileImage` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`TID`, `Name`, `Gender`, `DOB`, `Address`, `PhoneNo`, `EMail`, `CollegeID`, `Branch`, `Sem`, `RegNo`, `password`, `ProfileImage`) VALUES
(31, 'Rahul Roy', 'Male', '2023-01-03', 'Nayanpur', '8426094242', 'rr@gmail.com', '', '', '', '', '1234', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
