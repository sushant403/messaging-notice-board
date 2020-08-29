-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 03:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(4, 'niki@gmail.com', 'Hello', 'user how areyou.....', '2016-06-29 12:07:19'),
(6, 'niki@gmail.com', 'adfdfdfdfd', 'bbbbbbbb', '2016-07-31 15:38:35'),
(7, 'ravi@gmail.com', 'adfdfdfdfd', 'aaaaaaaaaaaaaa', '2016-07-31 15:38:35'),
(8, 'niki@gmail.com', 'Holiday', 'Tomorrow is HOLIDAY', '2020-01-23 16:43:12'),
(9, 'ravi@gmail.com', 'Holiday', 'Tomorrow is HOLIDAY', '2020-01-23 16:43:12'),
(10, 'abhi@gmail.com', 'Holiday', 'Tomorrow is HOLIDAY', '2020-01-23 16:43:12'),
(11, 'sushantpudel@gmail.com', 'Holiday', 'Tomorrow is HOLIDAY', '2020-01-23 16:43:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
