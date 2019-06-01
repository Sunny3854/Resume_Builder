-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 07:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

DROP TABLE IF EXISTS `certification`;
CREATE TABLE `certification` (
  `cid` int(15) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `year` varchar(10) NOT NULL,
  `descrip2` varchar(500) NOT NULL,
  `year2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`cid`, `descrip`, `year`, `descrip2`, `year2`) VALUES
(0, 'aaa', '2016', 'bbb', '2017'),
(1, 'aaa', '2016', 'bbb', '2017'),
(2, 'mmm', '2016', 'nnn', '2017'),
(4, 'aaa', '2016', 'bbb', '2017'),
(3, 'aaa', '2016', 'bbb', '2017'),
(4, 'aaa', '2016', 'bbb', '2017'),
(7, 'aaa', '2016', 'bbb', '2017'),
(7, 'aaa', '2016', 'bbb', '2017'),
(7, 'aaa', '2016', 'bbb', '2017'),
(4, 'mmm', '2016', 'nnn', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

DROP TABLE IF EXISTS `educational_info`;
CREATE TABLE `educational_info` (
  `eid` int(15) NOT NULL,
  `year` varchar(4) NOT NULL,
  `crsename` varchar(25) NOT NULL,
  `instiname` varchar(25) NOT NULL,
  `cgpa` float NOT NULL,
  `year2` varchar(4) NOT NULL,
  `crsename2` varchar(25) NOT NULL,
  `instiname2` varchar(25) NOT NULL,
  `cgpa2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`eid`, `year`, `crsename`, `instiname`, `cgpa`, `year2`, `crsename2`, `instiname2`, `cgpa2`) VALUES
(0, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(1, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(2, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'CU', 5),
(4, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(3, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'CU', 5),
(4, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'CU', 5),
(7, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(7, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(7, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5),
(4, '2018', 'B.E.', 'MEFGI', 8, '2015', 'HSC', 'GTU', 5);

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

DROP TABLE IF EXISTS `objective`;
CREATE TABLE `objective` (
  `oid` int(15) NOT NULL,
  `objec` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

DROP TABLE IF EXISTS `personal_information`;
CREATE TABLE `personal_information` (
  `pid` int(10) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `mobno` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`pid`, `fullname`, `nationality`, `dob`, `mobno`, `email`, `address`) VALUES
(1, 'stuti shah', 'Indian', '2000-01-02', 2147483647, 'stutishah253@gmail.com', 'Rajkot,Gujarat.'),
(2, 'Nadib Hasan', 'Bangladeshi', '1996-01-09', 2147483647, 'nadibhasan786@gmail.com', 'Chittagong, Bangladesh.'),
(4, 'Sunny', 'Indian', '2000-01-02', 2147483647, 'sunny@gmail.com', 'Jamnagar, Gujarat.'),
(3, 'Wasik', 'Bangladeshi', '1996-01-09', 2147483647, 'wasik@gmail.com', 'BD'),
(4, 'Sunny', 'Indian', '1996-01-09', 2147483647, 'sunny@gmail.com', 'Rajkot.'),
(7, 'Harsh', 'Indian', '2000-01-02', 2147483647, 'harsh@gmail.com', 'Gujarat.'),
(7, 'Harsh', 'Indian', '2000-01-02', 2147483647, 'harsh@gmail.com', 'Gujarat.'),
(7, 'Harsh', 'Indian', '2000-01-02', 2147483647, 'harsh@gmail.com', 'Gujarat.'),
(4, 'Sunny Kanakhara', 'Indian', '2000-01-02', 2147483647, 'sunny@gmail.com', 'Jamnagar.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `proid` int(15) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `year` varchar(10) NOT NULL,
  `descrip2` varchar(500) NOT NULL,
  `year2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proid`, `descrip`, `year`, `descrip2`, `year2`) VALUES
(0, 'ppp', '2017', 'ddd', '2018'),
(1, 'ccc', '2017', 'ddd', '2018'),
(2, 'sss', '2017', 'kkk', '2018'),
(4, 'ppp', '2017', 'kkk', '2018'),
(3, 'ccc', '2017', 'ddd', '2018'),
(4, 'ccc', '2017', 'ddd', '2018'),
(7, 'ccc', '2017', 'ddd', '2018'),
(7, 'ccc', '2017', 'ddd', '2018'),
(7, 'ccc', '2017', 'ddd', '2018'),
(4, 'ppp', '2017', 'qqq', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(15) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `cont` int(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `uname`, `pwd`, `cont`, `email`) VALUES
(1, 'stuti', 'shah', 'stuti', '12345678', 2147483647, 'stutishah253@gmail.com'),
(2, 'Nadib', 'Hasan', 'nadib', '12345', 2147483647, 'nadibhasan786@gmail.com'),
(3, 'Wasik', 'Nibraj', 'wasik', '12345', 2147483647, 'wasik@gmail.com'),
(4, 'Sunny', 'khanakara', 'sunny', '78945', 2147483647, 'sunny@gmail.com'),
(5, 'say', 'sib', 'saysamone', '789456', 2147483647, 'say@gmail.com'),
(6, 'sk', 'sk', 'sk', '12345', 2147483647, 'sunny@gmail.com'),
(7, 'harsh', 'bakori', 'harsh', '123456', 2147483647, 'harsh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
