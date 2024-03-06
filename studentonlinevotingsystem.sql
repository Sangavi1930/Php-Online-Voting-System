-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 09:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentonlinevotingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `administartor`
--

CREATE TABLE `administartor` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administartor`
--

INSERT INTO `administartor` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, '', '', 'james@andrew.com', 'james'),
(2, 'james', 'joseph', 'johnathan@gmail.com', 'james');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `first_name`, `last_name`, `email`, `password`, `position`) VALUES
(1, 'Hillary', 'Hellen', 'Hellen@gmail.com', 'admin', 'Treasurer'),
(2, 'James', 'Anderson', 'james@gmail.com', 'admin', 'Chairperson'),
(3, 'Olivia', 'Isabella', 'Olivia@gmail.com', 'Lilly', 'Secretary'),
(4, 'Keith', 'Pauline', 'Keith@gmail.com', 'keith', 'Vice-Treasurer'),
(5, 'Bryan', 'Loise', 'Loise@gmail.com', 'bryan', 'Secretary'),
(6, 'Jimmy', 'Carter', 'Jimmy@gmail.com', 'jimmy', 'Chairperson'),
(7, 'Florence', 'Derrick', 'Florence@gmail.com', 'florence', 'Vice-Secretary'),
(8, 'James', 'Michael', 'James@gmail.com', 'james', 'Organizing-Secretary'),
(9, 'Fatma', 'Samantha', 'Fatma@gmail.com', 'fatma', 'Treasurer'),
(10, 'George', 'Andrew', 'George@gmail.com', 'george', 'Vice-Treasurer'),
(11, 'Matt', 'Hellen', 'Matt@gmail.com', 'matt', 'Vice-Chairperson'),
(12, 'Pauline', 'Hellen', 'Pauline@gmail.com', 'pauline', 'Class Representative'),
(13, 'Naomi', 'Johnson', 'Naomi@gmail.com', 'naomi', 'Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `admno` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `admno`, `regno`, `email`, `password`) VALUES
(1, 'Maurice', 'Muteti', 'p/129/2017', 'DIT-02-0442/2015', 'maurice@muteti.com', 'admin'),
(2, 'Andrew', 'Leonard', 'p/119/2016', 'DIT-02-0443/2015', 'Andrew@gmail.com', 'andrew'),
(3, 'Ruth', 'Raphael', 'p/118/2016', 'DIT-03-0443/2015', 'ruth@gmail.com', 'ruth');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `Position`) VALUES
(4, 'Chairperson'),
(5, 'Secretary'),
(6, 'Vice-Secretary'),
(7, 'Organizing-Secretary'),
(8, 'Treasurer'),
(9, 'Vice-Treasurer'),
(10, 'Vice-Chairperson'),
(11, 'Class Representative'),
(12, 'Monitor'),
(13, 'Librarian');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `votes_id` int(11) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `votesnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`votes_id`, `Position`, `candidate_id`, `regno`, `votesnumber`) VALUES
(56, 'Chairperson', 2, 'DIT-02-0442/2015', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administartor`
--
ALTER TABLE `administartor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`votes_id`),
  ADD UNIQUE KEY `regno_2` (`regno`),
  ADD KEY `regno` (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administartor`
--
ALTER TABLE `administartor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `votes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `fk_regno` FOREIGN KEY (`regno`) REFERENCES `members` (`regno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
