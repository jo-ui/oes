-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 01:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(20) NOT NULL,
  `uidAdmin` varchar(30) NOT NULL,
  `emailAdmin` varchar(40) NOT NULL,
  `pwdAdmin` varchar(100) NOT NULL,
  `genderAdmin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `uidAdmin`, `emailAdmin`, `pwdAdmin`, `genderAdmin`) VALUES
(1, 'natan', 'natan@gmail.com', '$2y$10$wjb0.B2VdetKuwF8irjAZOVjvSYo9.9MNM2lJUJNQkospWzfXtNy6', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `idCandidate` int(20) NOT NULL,
  `uidCandidate` varchar(30) NOT NULL,
  `emailCandidate` varchar(40) NOT NULL,
  `pwdCandidate` varchar(100) NOT NULL,
  `genderCandidate` varchar(40) NOT NULL,
  `votesNumber` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`idCandidate`, `uidCandidate`, `emailCandidate`, `pwdCandidate`, `genderCandidate`, `votesNumber`) VALUES
(1, 'lati', 'lati@gmail.com', '$2y$10$/PlFUT4ZzfER7oF9nOyLDuppaq2Zlo1M3LRWm6a6XTLBWIo5mhysm', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `idVoter` int(20) NOT NULL,
  `uidVoter` varchar(30) NOT NULL,
  `emailVoter` varchar(40) NOT NULL,
  `pwdVoter` varchar(100) NOT NULL,
  `genderVoter` varchar(40) NOT NULL,
  `statusVoter` varchar(40) NOT NULL DEFAULT 'unVoter'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`idVoter`, `uidVoter`, `emailVoter`, `pwdVoter`, `genderVoter`, `statusVoter`) VALUES
(1, 'john', 'john@gmail.com', '$2y$10$6/gw14PH/pMhDJkfoVK1rOJMrlkLeAw2poTF0lH9Nz/XW24t3FDzq', 'Male', 'unVoter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`idCandidate`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`idVoter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
