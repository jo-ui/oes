-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`) VALUES
(1, 'President', 'Dagne', 'Seifu', '3rd Year', 'Male', 'upload/male3.jpg'),
(2, 'President', 'Latera', 'Tesfaye', '3rd Year', 'Male', 'upload/male3.jpg'),
(3, 'President', 'lemi', 'guta', '4th Year', 'Male', 'upload/male3.jpg'),
(4, 'President', 'Nathanan', 'Amsalu', '3rd Year', 'Male', 'upload/male3.jpg'),
(5, 'President', 'Etsegenet', 'meskelu', '3rd Year', 'Female', 'upload/female3.jpg'),
(6, 'President', 'yohannes', 'Beneberu', '3rd Year', 'Male', 'upload/male3.jpg'),
(7, 'Vice President for Internal Affairs', 'Haile', 'b', '1st Year', 'Male', 'upload/male3.jpg'),
(8, 'Vice President for Internal Affairs', 'jj', 'n', '1st Year', 'Male', 'upload/male3.jpg'),
(9, 'Vice President for External Affairs', 'ruta', 'g', '4th Year', 'Female', 'upload/female3.jpg'),
(10, 'Secretary', 'blen', 't', '1st Year', 'Female', 'upload/female3.jpg'),
(11, 'Secretary', 'tinsae', 'g', '2nd Year', 'Male', 'upload/male3.jpg'),
(12, 'Vice President for External Affairs', 'Abrham', 'L', '1st Year', 'Male', 'upload/male3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'Yohannes', 'Beneberu');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `password`, `firstname`, `lastname`, `year_level`, `status`, `account`) VALUES
(1, 5646, 'tM7dBy2h', 'Haile', 'Gemechu', '3rd Year', 'Voted', 'Active'),
(2, 55, 'xOZLZhK1', 'Helen', 'Demeke', '4th Year', 'Voted', 'Active'),
(3, 1235, 'tZiv2Vih', 'abc', 'xyz', '1st Year', 'Voted', 'Active'),
(4, 5050, 'il3qbmXV', 'chala', 'Bekele', '2nd Year', 'Voted', 'Active'),
(5, 1234, 'E5vw1kgz', 'hailu', 'ferew', '3rd Year', 'Voted', 'Active'),
(6, 5678, '9dvts4Us', 'tamiru', 'shiferaw', '3rd Year', 'Unvoted', 'Active'),
(7, 2583, 'haEmzrDg', 'biruk', 'G', '3rd Year', 'Unvoted', 'Active'),
(8, 6325, 'yr0PI8cZ', 'nati', 'Demeke', '3rd Year', 'Unvoted', 'Active'),
(9, 3215, 'TgYAwOEj', 'naol', 'abera', '3rd Year', 'Unvoted', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(1, '1', '2'),
(2, '', '2'),
(3, '', '2'),
(4, '2', '2'),
(5, '', '2'),
(6, '', '2'),
(7, '', '2'),
(8, '', '2'),
(9, '', '2'),
(10, '', '2'),
(11, '', '2'),
(12, '1', '1'),
(13, '', '1'),
(14, '', '1'),
(15, '', '1'),
(16, '', '1'),
(17, '', '1'),
(18, '', '1'),
(19, '', '1'),
(20, '', '1'),
(21, '', '1'),
(22, '', '1'),
(23, '1', '3'),
(24, '', '3'),
(25, '', '3'),
(26, '2', '3'),
(27, '', '3'),
(28, '', '3'),
(29, '', '3'),
(30, '', '3'),
(31, '', '3'),
(32, '', '3'),
(33, '', '3'),
(34, '6', '4'),
(35, '8', '4'),
(36, '12', '4'),
(37, '10', '4'),
(38, '', '4'),
(39, '', '4'),
(40, '', '4'),
(41, '', '4'),
(42, '', '4'),
(43, '', '4'),
(44, '', '4'),
(45, '5', '5'),
(46, '8', '5'),
(47, '12', '5'),
(48, '11', '5'),
(49, '', '5'),
(50, '', '5'),
(51, '', '5'),
(52, '', '5'),
(53, '', '5'),
(54, '', '5'),
(55, '', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
