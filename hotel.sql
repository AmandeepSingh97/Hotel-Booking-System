-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2017 at 12:41 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `bid` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `roomtype` varchar(25) NOT NULL,
  `packages` varchar(50) NOT NULL,
  `checkin` varchar(20) NOT NULL,
  `checkout` varchar(20) NOT NULL,
  `extrabeds` varchar(20) NOT NULL,
  `qq` int(11) NOT NULL,
  `quilts` varchar(20) NOT NULL,
  `qq1` int(11) NOT NULL,
  `hotwater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`bid`, `uname`, `roomtype`, `packages`, `checkin`, `checkout`, `extrabeds`, `qq`, `quilts`, `qq1`, `hotwater`) VALUES
(6, 'aman123', 'Deluxe', '3 Days + 2 Nights', '11', '1', 'on', 11, '', 11, 'on'),
(7, 'aman123', 'Deluxe', '4 Days + 4 Nights', '11', '1', 'on', 11, '', 11, 'on'),
(11, 'aman123', 'Deluxe', '3 Days + 2 Nights', '11', '11', 'on', 1, '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `feedback1` varchar(2000) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uname`, `feedback1`, `rating`) VALUES
(2, 'aman123', 'Nice Hotel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `street` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fname`, `lname`, `sex`, `email`, `street`, `city`, `state`, `password`) VALUES
('1234asd', 'Ananya', 'Sachan', 'Female', 'a@anm.com', 'asdfg', 'asdfgh', 'adsfs', 'abcd'),
('aman123', 'Aman', 'Singh', 'Male', 'aman@m.com', 'adhf', 'adsd', 'sdsfs', 'abcd'),
('aman1234', 'Aman', 'Singh', 'Male', 'aman@a.com', 'adasgs', 'sgsgs', 'dgdgd', 'abcd'),
('asdfg', 'Aman', 'fsvs', 'Male', 'vsvsv@p.com', 'fssfs', 'svsgs', 'ssgs', 'abcd'),
('esha123', 'Esha', 'asad', 'Female', 'a@a.com', 'sfs', 'dvdv', 'fdfv', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
