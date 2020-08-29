-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 12:17 PM
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
-- Database: `alpha_enigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `message` char(255) CHARACTER SET latin1 NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`, `created_on`) VALUES
(44, 'Sushant Poudel', 'This is the 300th test for the chat system, created by <b>Sushant</b>', '2020-01-05 22:00:34'),
(45, 'Sushant Poudel', 'Maybe I got it right??', '2020-01-05 22:01:16'),
(46, 'Sushant Poudel', 'Nope!', '2020-01-05 22:01:21'),
(47, 'nitikabhatta0901@gmail.com', 'Maybe Now?', '2020-01-05 22:01:57'),
(48, 'dthapa007@gmail.com', 'E-mail is showing instead of name? <i> hmm, interesting </i>', '2020-01-05 22:03:01'),
(49, '', 'Okay guys gotta go', '2020-01-05 22:03:36'),
(50, '', 'yes?', '2020-01-05 22:04:09'),
(51, '', 'phone?', '2020-01-05 22:04:29'),
(52, 'dthapa007@gmail.com', 'Nope email it is', '2020-01-05 22:04:45'),
(53, 'sushantpaudel@gmail.com', 'Heloooooooooooooooooooooooooo', '2020-01-05 22:05:50'),
(54, 'sushantpaudel@gmail.com', 'yeah its hard', '2020-01-05 22:06:08'),
(55, 'sushantpaudel@gmail.com', '!', '2020-01-05 22:06:10'),
(56, 'sushantpaudel@gmail.com', ',', '2020-01-05 22:06:12'),
(57, 'sushantpaudel@gmail.com', 'Testing 324th', '2020-01-05 22:06:34'),
(58, 'nitikabhatta0901@gmail.com', 'Final Testing for the Night!', '2020-01-05 22:21:12'),
(59, 'nitikabhatta0901@gmail.com', 'hmm', '2020-01-05 22:31:24'),
(60, 'nitikabhatta0901@gmail.com', 'hello', '2020-01-05 22:35:20'),
(61, 'dthapa007@gmail.com', 'Good Night', '2020-01-05 22:36:13'),
(62, 'nitikabhatta0901@gmail.com', 'Bye! See ya all tomorrow', '2020-01-05 23:12:34'),
(63, 'sushantpaudel@gmail.com', 'Good Night guys <3', '2020-01-05 23:12:51'),
(64, 'sushantpaudel@gmail.com', 'Hello next day test', '2020-01-06 01:55:07'),
(65, 'liam@gmail.com', 'Hello from Australia', '2020-01-06 12:03:37'),
(66, 'sushantpaudel@gmail.com', 'Hey #visitnepal2020', '2020-01-06 12:06:25'),
(67, 'liam@gmail.com', 'Sure Will! After the wildfire here ends! R.I.P all half billion animals', '2020-01-06 13:17:14'),
(68, 'sushantpaudel@gmail.com', 'R.I.P', '2020-01-06 13:19:10'),
(69, 'liam@gmail.com', 'everything will be fine', '2020-01-06 13:19:20'),
(70, 'sushantpaudel@gmail.com', 'Hope! Take Care man!', '2020-01-06 15:25:39'),
(71, 'nitikabhatta0901@gmail.com', 'Koalas ??', '2020-01-06 15:33:18'),
(72, 'nitikabhatta0901@gmail.com', '??', '2020-01-06 15:33:32'),
(73, 'kathford@edu', 'R.I.P koalas and other innocent animals.', '2020-01-06 15:46:19'),
(74, 'kathford@edu', 'Kindly Collect your monthly fee receipt!', '2020-01-06 15:46:44'),
(75, 'kathford@edu', '#saveanimals #visitnepal2020', '2020-01-06 15:47:31'),
(76, 'kathford@edu', '?', '2020-01-06 15:47:51'),
(77, 'kathford@edu', '†', '2020-01-06 15:48:16'),
(78, 'test@t', 'Last Test for Assurance', '2020-01-06 16:28:03'),
(79, 'test@t', 'can Non-user send message?', '2020-01-06 16:31:10'),
(80, 'sushantpaudel@gmail.com', 'Good to go!', '2020-01-06 22:24:11'),
(81, 'dthapa007@gmail.com', 'Hello all', '2020-01-07 10:38:25'),
(82, 'dthapa007@gmail.com', '100 maa 100', '2020-01-07 10:43:36'),
(83, 'sushantpaudel@gmail.com', 'Photo hatau', '2020-01-07 10:43:57'),
(84, 'family@fam', 'padha sab jana', '2020-01-07 11:28:50'),
(85, 'nitikabhatta0901@gmail.com', '??', '2020-01-07 14:52:47'),
(86, 'nitikabhatta0901@gmail.com', 'heyyy', '2020-01-07 15:38:50'),
(87, 'sushantpaudel@gmail.com', 'All good?', '2020-01-08 07:59:04'),
(88, 'nishant@gmail.com', 'Im good', '2020-01-08 08:48:09'),
(89, 'sushantpaudel@gmail.com', 'Okayy', '2020-01-08 08:48:29'),
(90, 'sushantpaudel@gmail.com', 'Writing Project Proposal!', '2020-01-09 19:38:01'),
(91, 'sushantpaudel@gmail.com', 'Managing few things !', '2020-01-09 19:45:16'),
(92, 'sushantpaudel@gmail.com', 'Web Tech mini project Completed!', '2020-01-09 19:45:28'),
(93, 'sushantpaudel@gmail.com', 'C-Programming mini project completed', '2020-01-09 19:45:44'),
(94, 'dthapa007@gmail.com', 'How man?', '2020-01-09 19:49:56'),
(95, 'dthapa007@gmail.com', 'Even my login screen is not ready', '2020-01-09 19:50:13'),
(96, 'dthapa007@gmail.com', 'hya keii gardina mah aaba', '2020-01-09 19:50:20'),
(97, 'sushantpaudel@gmail.com', 'you can do it bro, sajilo xa', '2020-01-09 19:50:34'),
(98, 'sushantpaudel@gmail.com', 'voli sikaidinxu mah', '2020-01-09 19:50:52'),
(99, 'dthapa007@gmail.com', 'okay!', '2020-01-09 19:51:00'),
(100, 'dthapa007@gmail.com', 'movie herxu aaba', '2020-01-09 19:51:10'),
(101, 'sushantpaudel@gmail.com', 'OKay broo', '2020-01-09 19:51:24'),
(102, 'nitikabhatta0901@gmail.com', 'Hey', '2020-01-14 17:01:50'),
(103, 'sushantpaudel@gmail.com', 'Hello after 4days of break', '2020-01-18 14:09:22'),
(104, 'sushantpaudel@gmail.com', 'Hello after 4days of break', '2020-01-18 14:09:24'),
(105, 'sushantpaudel@gmail.com', 'Australia in a relief now', '2020-01-18 14:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `regid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `gender`, `mobile`, `image`, `regid`) VALUES
(65, 'Nitika Bhatta', 'nitikabhatta0901@gmail.com', 'a012869311d64a44b5a0d567cd20de04', 'f', 9869986741, 'IMG_20190628_122126.jpg', '2020-01-04 20:54:13'),
(76, 'Sushant Poudel', 'sushantpaudel@gmail.com', 'a012869311d64a44b5a0d567cd20de04', 'm', 9860489494, 'IMG_20190526_143705_991.jpg', '2020-01-08 07:58:15'),
(77, 'Nishant Panta', 'nishant@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', 984567954, '23cbcd24af6982e6e9e78bcb79de0b7e.jpg', '2020-01-08 08:47:37'),
(78, 'Dibesh Thapa', 'dthapa007@gmail.com', '202cb962ac59075b964b07152d234b70', 'm', 9815200699, '00000PORTRAIT_00000_20190525122327418.jpg', '2020-01-09 19:43:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `user` ADD FULLTEXT KEY `name_2` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
