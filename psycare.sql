-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 01:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `keyy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phonenumber`, `email`, `job`, `age`, `address`, `password`, `image`, `date_time`, `is_active`, `keyy`) VALUES
(1, 'Chronicles', 1234567890, 'chro@gmail.com', 'sembarang', 20, 'jalanin aja dlu', '$2y$10$Cie5l5wuzMPZkHdxB2Pu5.iPgTWvXq4NwQ0AB4asgXR9cfSBg3fze', '', '0000-00-00 00:00:00', 1, 'siapa?'),
(2, 'araaaaaaaaaaaaaaaaaaaaaaan', 1234567890, 'arana@gmail.com', 'gak ada', 20, 'jalan ninjaku', '$2y$10$eY75fCl5JtU3VodyF0l6feppfzw2Ye/e0HPrC.mCtxAto8z1KvI.m', '', '0000-00-00 00:00:00', 1, 'apa?');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `fill` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `creatorProfile` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat_doctor`
--

CREATE TABLE `chat_doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `gender` int(1) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `experience` int(2) NOT NULL,
  `quotes` varchar(255) NOT NULL,
  `dayset` varchar(255) NOT NULL,
  `timeset` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `image`, `age`, `gender`, `phonenumber`, `experience`, `quotes`, `dayset`, `timeset`, `date_time`, `is_active`) VALUES
(12, 'Jelal Mystique Deran', 'jelal@gmail.com', '$2y$10$tBflwt4HTPSJ50d1oLTg4ehZE2CBZJ7BeojkoHwf6cXKpu26ATarC', 'd_62.jpg', 25, 1, 1234567890, 3, 'Life is never flat', '', '', '2021-07-24 06:07:47', 1),
(13, 'Christina Violensia', 'chris@gmail.com', '$2y$10$KuTpPMb.sNi447EqWRVGkeD5RhVHY4GOP2YhPaXCYYSrAW4MIGmcS', 'd_5.jpg', 20, 0, 1234567890, 2, 'Life is never flat', '', '', '2021-07-25 03:07:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `speaker` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `via` int(1) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `speakerProfile` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `descript` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `topic`, `speaker`, `date`, `via`, `price`, `speakerProfile`, `thumbnail`, `descript`) VALUES
(24, 'How to become hero', 'Andi Rifqial Nur', 'Sep, 11 2021', 1, 42000, '', '', 'fsfvstbvst');

-- --------------------------------------------------------

--
-- Table structure for table `eventregister`
--

CREATE TABLE `eventregister` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `testname`, `descript`, `thumbnail`, `link`, `date`) VALUES
(1, 'sembarang coba dulu', 'jnlndclakjdn al ldajeiowj ajfksdcadavsd', 'psytest1.jpg', 'https://facebook.com', '2021-07-24 04:07:28'),
(2, 'SICD Test', 'jnkajd adjnc ajf kajsdn caouj vad advadcd', 'psytest2.jpg', 'https://facebook.com', '2021-07-24 04:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `age`, `gender`, `phonenumber`, `job`, `address`, `date_time`, `is_active`) VALUES
(93, 'wertyuiopasdfghjkl', 'adas@gmail.com', '$2y$10$jgw4RZTMjyT9qoJBXXmMSeOLlDXMOC2CNdnRegYqu2nJ2AmbTs0WK', 'eventcadangan1.jpg', 0, NULL, '', '', '', '2021-07-23 04:07:07', 1),
(94, 'wertyuiopasdfghjkl', 'adas@gmail.com', '$2y$10$jgw4RZTMjyT9qoJBXXmMSeOLlDXMOC2CNdnRegYqu2nJ2AmbTs0WK', 'eventcadangan1.jpg', 0, NULL, '', '', '', '2021-07-23 04:07:51', 1),
(95, 'wertyuiopasdfghjkl', 'adas@gmail.com', '$2y$10$jgw4RZTMjyT9qoJBXXmMSeOLlDXMOC2CNdnRegYqu2nJ2AmbTs0WK', 'eventcadangan1.jpg', 0, NULL, '', '', '', '2021-07-23 04:07:44', 1),
(96, 'Gerald Gamirald', 'gerald@gmail.com', '$2y$10$PvoFiE4LcK8Dllr.maFl1uCqqrQAnCU3A0NL48.z1WlSq1Rmp0LQS', 'eventcadangan1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-07-23 07:07:40', 1),
(97, 'Andi Rifqial Nur', 'andirifqialnur276@gmail.com', '$2y$10$IXWNoj3i1Da8dHlIensdXOSEF3VWTo9gas/EgtE41cR60DtDozufK', 'eventcadangan1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-07-23 09:07:16', 1),
(98, 'Syahrir', 'muhsyahrir005@gmail.com', '$2y$10$Y35/6LmAo.MGmG4nY3xXIe7eeL94fSZAmkOgd6YHVP6/KrSc56uR.', 'eventcadangan1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-07-23 09:07:58', 1),
(99, 'Diana Victoria', 'diana@gmail.com', '$2y$10$NL5rlIShponwVSFZuRrYx.vgRlqDmK8gMakBap1zW8lfQpmCf3Yuu', 'eventcadangan1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-07-24 05:07:39', 1),
(100, 'Xavier Khandwald', 'xav@gmail.com', '$2y$10$19BcJgBnyRP2WLrl59RQreRhsJrlY9wPuvbdxF3v8XVBvt9WTLg76', 'eventcadangan1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-07-24 05:07:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Patient'),
(3, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Dashboard', 'fas fa-fw fa-tachometer-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_doctor`
--
ALTER TABLE `chat_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventregister`
--
ALTER TABLE `eventregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_doctor`
--
ALTER TABLE `chat_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `eventregister`
--
ALTER TABLE `eventregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
