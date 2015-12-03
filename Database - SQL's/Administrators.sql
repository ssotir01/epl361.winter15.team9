-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2015 at 08:24 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essex-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administrators`
--

CREATE TABLE IF NOT EXISTS `Administrators` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `E-mail` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Name` (`Name`),
  KEY `Surname` (`Surname`),
  KEY `Username` (`Username`),
  KEY `Password` (`Password`),
  KEY `E-mail` (`E-mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Administrators`
--

INSERT INTO `Administrators` (`ID`, `Name`, `Surname`, `Username`, `Password`, `E-mail`) VALUES
(1, 'Nikos', 'Nikolaou', 'u1', '1234', 'nn@gmail.com'),
(2, 'Nikos', 'N', 'u1', '1234', 'nn@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
