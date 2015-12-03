-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2015 at 08:23 PM
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
-- Table structure for table `Annoucments`
--

CREATE TABLE IF NOT EXISTS `Annoucments` (
  `Title` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(2000) NOT NULL,
  PRIMARY KEY (`Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Annoucments`
--

INSERT INTO `Annoucments` (`Title`, `Date`, `Description`) VALUES
('Tonights meeting is cance', '2015-11-24', 'Tonights meeting is cancelled:  \nTuesday Date: 24-11-2015 \nTime: 17:00 to 20:00 Room: \nLTB 8 TOPIC: CYPRUS PROBLEM \nFind below the agenda submitted:  The Cypriot Problem Preferred points around which the discussion can be pivoted  It is the bizonal bicommunal federation the most appropriate form of the solution for our country? If not, what other would be ideal? 2. it can have peaceful coexistence with Turkish Cypriots? 3. What are the causes and who are responsible of the division of our country? Should who are still alive to be punished paradigmatic, despite the lapse of 41 years since the Turkish invasion? 4. Do you agree with the idea of the rotating presidency and the weighted vote?  P.S If there are any non Greek speaker in the room the debate must proceed in English. Hope to see you all there.'),
('Anoiktes 3 thesis', '2015-11-18', 'SU will open job positions (internships full time 3months duration) for ESSEX graduates of 2015. They want the candidate’s names until Monday. I want to promote and make reference for 3 members of our society. So, if you graduated in Essex and you search for an average salary of £20000 (annually) without tax between January and March please inform me at the following email address (vpinternational@essex.ac.uk) with your CV. They need people in specific positions so I don’t know who are going to be accepted. My job is just to promote 3 people. ?'),
('Problem with tagging at FB', '2015-11-29', 'Due to some changes on Facebook there is a problem with tagging. We are really sorry. Till this is fixed you can try this  1. Right click photo directly from your Timeline (it won''t work if you open the photo first and then right click it) 2. Once you''ve right clicked, follow the option to "open link in new window" 3. Tag option should then be on the bottom right of photo once it''s opened in a new window.  It does not work 100% of the time but it doesn''t hurt to try. Sorry again');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
