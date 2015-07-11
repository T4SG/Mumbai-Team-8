-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 06:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dmbi_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
`id` int(5) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actress` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `genre`, `actor`, `actress`, `rating`) VALUES
(1, 'Horror', 'Hrithik Roshan', 'Katrina Kaif', 'Hit'),
(2, 'Horror', 'Hrithik Roshan', 'Katrina Kaif', 'Hit'),
(3, 'Horror', 'Hrithik Roshan', 'Katrina Kaif', 'Hit'),
(4, 'Comedy', 'Hrithik Roshan', 'Katrina Kaif', 'Hit'),
(5, 'Comedy', 'Sharukh Khan', 'Vidya Balan', 'Hit'),
(6, 'Thriller', 'Aamir Khan', 'Anushka Sharma', 'Hit'),
(7, 'Comedy', 'Aamir Khan', 'Anushka Sharma', 'Flop'),
(8, 'Comedy', 'Sharukh Khan', 'Anushka Sharma', 'Flop'),
(9, 'Comedy', 'Sharukh Khan', 'Deepika Padukone', 'Hit'),
(10, 'Romance', 'Aamir Khan', 'Deepika Padukone', 'Flop'),
(11, 'Romance', 'Sharukh Khan', 'Deepika Padukone', 'Flop'),
(12, 'Romance', 'Aamir Khan', 'Anushka Sharma', 'Hit'),
(13, 'Romance', 'Sharukh Khan', 'Kareena Kapoor', 'Flop'),
(14, 'Romance', 'Sharukh Khan', 'Vidya Balan', 'Flop'),
(15, 'Romance', 'Aamir Khan', 'Kareena Kapoor', 'Hit'),
(16, 'Romance', 'Hrithik Roshan', 'Kareena Kapoor', 'Flop'),
(17, 'Romance', 'Sharukh Khan', 'Kareena Kapoor', 'Flop'),
(18, 'Romance', 'Salman Khan', 'Kareena Kapoor', 'Flop'),
(19, 'Romance', 'Ranbir Kapoor', 'Kareena Kapoor', 'Flop'),
(20, 'Romance', 'Ranbir Kapoor', 'Kareena Kapoor', 'Flop'),
(21, 'Romance', 'Ranbir Kapoor', 'Kareena Kapoor', 'Flop'),
(22, 'Romance', 'Hrithik Roshan', 'Kareena Kapoor', 'Flop'),
(23, 'Romance', 'Ranbir Kapoor', 'Kareena Kapoor', 'Hit'),
(24, 'Romance', 'Salman Khan', 'Kareena Kapoor', 'Hit'),
(25, 'Romance', 'Aamir Khan', 'Kareena Kapoor', 'Hit'),
(26, 'Romance', 'Aamir Khan', 'Kareena Kapoor', 'Hit'),
(27, 'Romance', 'Hrithik Roshan', 'Kareena Kapoor', 'Hit'),
(28, 'Romance', 'Salman Khan', 'Kareena Kapoor', 'Flop'),
(29, 'Romance', 'Salman Khan', 'Kareena Kapoor', 'Hit'),
(30, 'Romance', 'Salman Khan', 'Kareena Kapoor', 'Hit'),
(31, 'Horror', 'Sharukh Khan', 'Anushka Sharma', 'Flop'),
(32, 'Horror', 'Sharukh Khan', 'Anushka Sharma', 'Hit'),
(33, 'Horror', 'Sharukh Khan', 'Anushka Sharma', 'Hit'),
(34, 'Thriller', 'Sharukh Khan', 'Deepika Padukone', 'Flop'),
(35, 'Comedy', 'Sharukh Khan', 'Vidya Balan', 'Hit'),
(36, 'Comedy', 'Sharukh Khan', 'Deepika Padukone', 'Flop'),
(37, 'Comedy', 'Sharukh Khan', 'Katrina Kaif', 'Flop'),
(38, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Hit'),
(39, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Hit'),
(40, 'Thriller', 'Aamir Khan', 'Deepika Padukone', 'Hit'),
(41, 'Thriller', 'Aamir Khan', 'Anushka Sharma', 'Hit'),
(42, 'Thriller', 'Salman Khan', 'Deepika Padukone', 'Hit'),
(43, 'Comedy', 'Hrithik Roshan', 'Deepika Padukone', 'Hit'),
(44, 'Comedy', 'Hrithik Roshan', 'Deepika Padukone', 'Hit'),
(45, 'Comedy', 'Hrithik Roshan', 'Kareena Kapoor', 'Flop'),
(46, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Hit'),
(47, 'Horror', 'Ranbir Kapoor', 'Vidya Balan', 'Flop'),
(48, 'Thriller', 'Sharukh Khan', 'Anushka Sharma', 'Hit'),
(49, 'Thriller', 'Salman Khan', 'Anushka Sharma', 'Flop'),
(50, 'Thriller', 'Ranbir Kapoor', 'Anushka Sharma', 'Hit'),
(51, 'Thriller', 'Ranbir Kapoor', 'Deepika Padukone', 'Flop'),
(52, 'Thriller', 'Ranbir Kapoor', 'Katrina Kaif', 'Hit'),
(53, 'Thriller', 'Ranbir Kapoor', 'Vidya Balan', 'Flop'),
(54, 'Thriller', 'Sharukh Khan', 'Kareena Kapoor', 'Hit'),
(55, 'Thriller', 'Sharukh Khan', 'Anushka Sharma', 'Hit'),
(56, 'Horror', 'Sharukh Khan', 'Anushka Sharma', 'Hit'),
(57, 'Horror', 'Salman Khan', 'Anushka Sharma', 'Flop'),
(58, 'Horror', 'Salman Khan', 'Anushka Sharma', 'Flop'),
(59, 'Romance', 'Salman Khan', 'Anushka Sharma', 'Flop'),
(60, 'Romance', 'Hrithik Roshan', 'Anushka Sharma', 'Flop'),
(61, 'Romance', 'Ranbir Kapoor', 'Anushka Sharma', 'Flop'),
(62, 'Romance', 'Sharukh Khan', 'Anushka Sharma', 'Flop'),
(63, 'Thriller', 'Aamir Khan', 'Anushka Sharma', 'Flop'),
(64, 'Romance', 'Aamir Khan', 'Anushka Sharma', 'Flop'),
(65, 'Comedy', 'Hrithik Roshan', 'Anushka Sharma', 'Flop'),
(66, 'Horror', 'Ranbir Kapoor', 'Anushka Sharma', 'Flop'),
(67, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Flop'),
(68, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Flop'),
(69, 'Comedy', 'Salman Khan', 'Katrina Kaif', 'Flop'),
(70, 'Comedy', 'Aamir Khan', 'Deepika Padukone', 'Flop'),
(71, 'Comedy', 'Aamir Khan', 'Anushka Sharma', 'Flop'),
(72, 'Comedy', 'Aamir Khan', 'Deepika Padukone', 'Flop'),
(73, 'Comedy', 'Salman Khan', 'Deepika Padukone', 'Hit'),
(74, 'Comedy', 'Salman Khan', 'Deepika Padukone', 'Flop'),
(75, 'Horror', 'Salman Khan', 'Katrina Kaif', 'Hit'),
(76, 'Horror', 'Salman Khan', 'Katrina Kaif', 'Hit'),
(77, 'Horror', 'Salman Khan', 'Vidya Balan', 'Hit'),
(78, 'Comedy', 'Ranbir Kapoor', 'Katrina Kaif', 'Hit'),
(79, 'Comedy', 'Ranbir Kapoor', 'Vidya Balan', 'Hit'),
(80, 'Comedy', 'Aamir Khan', 'Vidya Balan', 'Hit'),
(81, 'Thriller', 'Sharukh Khan', 'Vidya Balan', 'Hit'),
(82, 'Thriller', 'Aamir Khan', 'Vidya Balan', 'Hit'),
(83, 'Thriller', 'Hrithik Roshan', 'Vidya Balan', 'Hit'),
(84, 'Horror', 'Hrithik Roshan', 'Vidya Balan', 'Hit'),
(85, 'Horror', 'Aamir Khan', 'Vidya Balan', 'Flop'),
(86, 'Horror', 'Aamir Khan', 'Vidya Balan', 'Flop'),
(87, 'Romance', 'Ranbir Kapoor', 'Vidya Balan', 'Flop'),
(88, 'Thriller', 'Ranbir Kapoor', 'Vidya Balan', 'Flop'),
(89, 'Horror', 'Aamir Khan', 'Vidya Balan', 'Flop'),
(90, 'Romance', 'Aamir Khan', 'Vidya Balan', 'Hit'),
(91, 'Comedy', 'Aamir Khan', 'Vidya Balan', 'Flop'),
(92, 'Comedy', 'Sharukh Khan', 'Vidya Balan', 'Flop'),
(93, 'Comedy', 'Aamir Khan', 'Vidya Balan', 'Flop'),
(94, 'Comedy', 'Aamir Khan', 'Kareena Kapoor', 'Flop'),
(95, 'Comedy', 'Hrithik Roshan', 'Vidya Balan', 'Flop'),
(96, 'Romance', 'Hrithik Roshan', 'Katrina Kaif', 'Flop'),
(97, 'Thriller', 'Hrithik Roshan', 'Katrina Kaif', 'Flop'),
(98, 'Thriller', 'Hrithik Roshan', 'Katrina Kaif', 'Hit'),
(99, 'Thriller', 'Hrithik Roshan', 'Vidya Balan', 'Hit'),
(100, 'Comedy', 'Aamir Khan', 'Kareena Kapoor', 'Hit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
