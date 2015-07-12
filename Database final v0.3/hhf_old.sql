-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2015 at 04:40 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `quickupdate`
--

INSERT INTO `quickupdate` (`sr`, `pid`, `description`, `image`, `username`, `needb`, `timestamp`) VALUES
(1, 1, 'base at place', 'img-upload/ground', 'testpartner', 'no', '2015-06-01 18:56:11'),
(2, 1, 'base is built.thanks to the donors:).everyone is excited.', 'img-upload/base1', 'testpartner', 'no', '2015-06-08 19:22:17'),
(3, 1, 'community helping.getting everone together', 'img-upload/community', 'testpartner', 'no', '2015-06-15 19:24:48'),
(4, 1, 'children helping all.excited', 'img-upload/helping', 'testpartner', 'no', '2015-06-22 18:30:00'),
(5, 1, 'partially bricks placed', 'img-upload/brick-placed', 'testpartner', 'no', '2015-06-25 18:30:00'),
(6, 1, 'ground floor built. internal construction yet to be done', 'img-upload/house', 'testpartner', 'no', '2015-07-12 02:38:48'),
(7, 1, 'children excited <3', 'img-upload/childrenhappy', 'testdonor', 'no', '2015-07-12 02:39:55'),
(8, 1, 'everything at place :)', 'img-upload/built', 'testpartner', 'no', '2015-07-12 02:39:43'),
(9, 1, 'all children coming together to build playground', 'img-upload/gettingall', 'testpartner', 'no', '2015-07-12 02:39:36'),
(10, 1, 'its finally done', 'img-upload/playground', 'testpartner', 'no', '2015-07-12 02:39:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quickupdate`
--
ALTER TABLE `quickupdate`
 ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quickupdate`
--
ALTER TABLE `quickupdate`
MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
