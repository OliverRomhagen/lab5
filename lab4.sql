-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 09:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(10) NOT NULL,
  `title` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `author` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `onloan` int(1) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `borrowerid` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `onloan`, `duedate`, `borrowerid`) VALUES
(4423, 'Hunger Games', 'Suzanne Collins', 1, NULL, NULL),
(7532, 'The Book Thief', 'Markus Zuzak', 1, NULL, NULL),
(3322, 'Wordpress For You', 'Johan Kohlin', 1, NULL, NULL),
(1224, 'PHP Life', 'Jasmin Jakupovic', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `userpass` varchar(41) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `userpass`) VALUES
('ollie', '481902ec14eaf3fcfec6be82bd6a63b972ac517f'),
('olga', '403926033d001b5279df37cbbe5287b7c7c267fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
