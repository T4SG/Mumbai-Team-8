-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 10:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
`srno` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `type` varchar(20) NOT NULL
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
  `image` varchar(40) NOT NULL,
  `complete` int(11) NOT NULL,
  `phaseid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthupdate`
--

INSERT INTO `monthupdate` (`sr`, `timestamp`, `username`, `comments`, `image`, `complete`, `phaseid`, `pid`) VALUES
(1, '2015-07-11 12:38:42', 'abcdefgh', 'No comments', 'img/src', 123, 1, 1),
(2, '2015-07-11 13:22:34', 'xyzfg', 'No comments', 'img/src', 345, 2, 2),
(3, '2015-07-11 13:22:59', '3', 'No Comments', 'img/src', 789, 3, 3),
(4, '2015-07-11 13:23:30', '4', 'No comments', 'img/src', 890, 4, 4),
(5, '2015-07-11 13:23:56', 'uiop', 'No comments', 'img/src', 567, 5, 5),
(6, '2015-07-11 13:24:18', 'poiu', 'No comments', 'img/src', 1234, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
`sr` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
`phaseid` int(11) NOT NULL,
  `phase` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `budget` decimal(10,0) NOT NULL,
  `contactperson` varchar(20) NOT NULL,
  `cpmobile` varchar(10) NOT NULL,
  `currentprogress` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `projecttype` varchar(20) NOT NULL,
  `urgency` varchar(20) NOT NULL,
  `moreExpected` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `startdate`, `enddate`, `budget`, `contactperson`, `cpmobile`, `currentprogress`, `country`, `projecttype`, `urgency`, `moreExpected`) VALUES
(1, 'ABC', '10-07-2015', '10-12-2015', '10000', 'X', '9898989898', 30, 'Nepal', 'Nursery', 'Medium', 20000),
(2, 'XYZ', '10-01-2015', '10-08-2015', '20000', 'Y', '8989898989', 1, 'bhutan', 'nursery', 'medium', 30000),
(3, 'PQR', '10-02-2015', '10-09-2014', '40000', 'Z', '7878787878', 100, 'South Africa', 'Nursery', 'medium', 0),
(4, 'QWER', '10-01-2015', '10-08-2015', '80000', 'U', '6767676767', 40, 'Sri Lanka', 'Nursery', 'medium', 9000),
(5, 'YUI', '10-07-2015', '10-09-2015', '9000', 'I', '1212121212', 60, 'Columbia', 'Nursery', 'Medium', 20000),
(6, 'NMO', '10-07-2015', '10-09-2015', '10000', 'P', '4545454545', 10, 'Japan', 'Nursery', 'medium', 8080);

-- --------------------------------------------------------

--
-- Table structure for table `quickupdate`
--

CREATE TABLE IF NOT EXISTS `quickupdate` (
`sr` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `description` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `username` varchar(20) NOT NULL,
  `needb` varchar(3) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickupdate`
--

INSERT INTO `quickupdate` (`sr`, `pid`, `description`, `image`, `username`, `needb`, `timestamp`) VALUES
(1, 1, 'base at place', 'img-upload/ground', 'testpartner', 'no', '2015-06-01 18:56:11'),
(2, 1, 'base is built.thanks to the donors:).everyone is excited.', 'img-upload/base1', 'testpartner', 'no', '2015-06-08 19:22:17'),
(3, 1, 'community helping.getting everone together', 'img-upload/community', 'testpartner', 'no', '2015-06-15 19:24:48'),
(4, 1, 'children helping all.excited', 'img-upload/helping', 'testpartner', 'no', '2015-06-22 18:30:00'),
(5, 1, 'partially bricks placed', 'img-upload/brick-placed', 'testpartner', 'no', '2015-06-25 18:30:00'),
(6, 1, 'ground floor built. internal construction yet to be done', 'image-upload/house', 'testpartner', 'no', '2015-06-30 18:30:00'),
(7, 1, 'children excited <3', 'image-upload/childrenhappy', 'testdonor', 'no', '2015-07-15 18:30:00'),
(8, 1, 'everything at place :)', 'image-upload/built', 'testpartner', 'no', '2015-07-08 18:30:00'),
(9, 1, 'all children coming together to build playground', 'image-upload/gettingall', 'testpartner', 'no', '2015-07-09 18:30:00'),
(10, 1, 'its finally done', 'image-upload/playground', 'testpartner', 'no', '2015-07-10 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
 ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `monthupdate`
--
ALTER TABLE `monthupdate`
 ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
 ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
 ADD PRIMARY KEY (`phaseid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quickupdate`
--
ALTER TABLE `quickupdate`
 ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
MODIFY `phaseid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `quickupdate`
--
ALTER TABLE `quickupdate`
MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
