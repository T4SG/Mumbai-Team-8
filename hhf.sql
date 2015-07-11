-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 04:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hhf`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `username` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`username`, `pid`, `srno`, `email`, `name`) VALUES
('testdonor', 0, 1, 'testdonor@mail.com', 'test donor'),
('testdonor1', 0, 2, 'testdonor1@gmail.com', 'test donor1'),
('testdonor', 0, 3, 'testdonor@mail.com', 'test donor'),
('testdonor1', 0, 4, 'testdonor1@gmail.com', 'test donor1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('testdonor', 'testdonor', 'donor'),
('testdonor1', 'testdonor1', 'donor'),
('testhff', 'testhff', 'hff'),
('testpartner', 'testpartner', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `monthupdate`
--

CREATE TABLE IF NOT EXISTS `monthupdate` (
  `sr` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) NOT NULL,
  `comments` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  `complete` int(11) NOT NULL,
  `phaseid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
  `phaseid` int(11) NOT NULL AUTO_INCREMENT,
  `phase` varchar(20) NOT NULL,
  PRIMARY KEY (`phaseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`phaseid`, `phase`) VALUES
(1, 'site preparation'),
(2, 'soil preparation'),
(3, 'Reinforced concrete'),
(4, 'Concrete bed layer'),
(5, 'Brick walls '),
(6, 'Finishes – Walls'),
(7, 'Plaque install'),
(8, 'External walls paint'),
(9, 'Reinforced concrete '),
(10, 'Finishes – Walls '),
(11, 'Finishes - Ceilings '),
(12, 'Finishes - Floor'),
(13, 'Doors - Carpentry'),
(14, 'Finishes - Windows '),
(15, 'Locksmith work '),
(16, 'Glass for windows'),
(17, 'Internal Painting '),
(18, 'Electrical work '),
(19, 'Electrical appliance'),
(20, 'Sink and water plumb');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `country' varchar(20) NOT NULL,
  `projecttype' varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `budget` decimal(10,0) NOT NULL,
  `budgetsecured' decimal(10,0) NOT NULL.
  `contactperson` varchar(20) NOT NULL,
  `cpmobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quickupdate`
--

CREATE TABLE IF NOT EXISTS `quickupdate` (
  `pid` int(11) NOT NULL,
  `description` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  `username` varchar(20) NOT NULL,
  `needb` varchar(3) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
