-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 08:46 AM
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
(2, 'araaaaaaaaaaaaaaaaaaaaaaan', 1234567890, 'arana@gmail.com', 'gak ada', 20, 'jalan ninjaku', '$2y$10$eY75fCl5JtU3VodyF0l6feppfzw2Ye/e0HPrC.mCtxAto8z1KvI.m', '', '0000-00-00 00:00:00', 1, 'apa?'),
(3, 'afavvs', 121432345, 'adas@gmail.com', '1fsdj aksvsc', NULL, 'acacdcsvsc', '$2y$10$GNGrSOeVvJX72JKNWEYKTu/rAxgkF881kiArxX/6fFHVb3Vm148SK', '', '0000-00-00 00:00:00', 1, 'apa');

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
-- Table structure for table `chatted`
--

CREATE TABLE `chatted` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatted`
--

INSERT INTO `chatted` (`id`, `name`, `email`, `date_time`) VALUES
(1, 'Andi Rifqial Nur', 'andirifqialnur276@gmail.com', '2021-07-31 05:07:00'),
(2, 'sembarang', 'sembarang@gmail.com', '2021-08-02 12:08:00'),
(3, 'afdfvvvvvvvvd', 'asu@gmail.com', '2021-08-02 12:08:00'),
(4, 'csafavd  rfs fwegf', 'danm@gmail.com', '2021-08-02 12:08:00'),
(5, 'dfsrvdfv', 'as@gmail.com', '2021-08-02 06:08:00');

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `id_user` int(3) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `experience` int(2) NOT NULL,
  `quotes` varchar(255) NOT NULL,
  `dayset` varchar(255) NOT NULL,
  `timeset` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `id_user`, `name`, `email`, `password`, `image`, `age`, `phonenumber`, `experience`, `quotes`, `dayset`, `timeset`, `price`, `address`, `date_time`, `is_active`) VALUES
(19, NULL, 'Fransisca Olivia', 'frans@gmail.com', '$2y$10$Fc0ispVqAomPyJJu6.67Fu8.N7p2B6nPbF3/ZAkfDfh4EEMlsDnwO', 'pexels-thisisengineering-3861976.jpg', 24, 2147483647, 3, 'cweeeeeeewcwf c', 'mon - wed', '08:00 - 12:00', 32000, 'dadafcad', '2021-07-31 08:07:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `id_user` int(3) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `speaker` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `via` int(1) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `speakerProfile` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `descript` varchar(255) DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `id_user`, `topic`, `speaker`, `date`, `via`, `price`, `speakerProfile`, `thumbnail`, `descript`, `time`) VALUES
(31, NULL, 'Gemilang mu', 'aran', '2022-11-23', 1, 20000, 'p_5.jpg', 'event5_(2).jpg', 'This event is blablabla\r\n', '09:30:00'),
(32, NULL, 'How to become hero', 'Venesa Feronica', '2021-08-27', 0, 20000, 'pexels-chokniti-khongchum-2280547.jpg', 'p_2.jpg', 'event ini  bertujuan agar anda tidak lagi malas-malasan dalam keseharian.', '09:00:00'),
(33, NULL, 'sembarang', 'sembarang', '2021-08-25', 0, 20000, 'd_31.jpg', 'pexels-min-an-752831.jpg', 'Sembarang', '09:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `eventregister`
--

CREATE TABLE `eventregister` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `quantity` int(1) DEFAULT NULL
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
(2, 'SICD Test', 'jnkajd adjnc ajf kajsdn caouj vad advadcd', 'psytest2.jpg', 'https://facebook.com', '2021-07-24 04:07:39'),
(3, 'IQ Test', 'sembarang', 'pexels-fauxels-3183197.jpg', 'https://facebook.com', '2021-08-02 07:08:05');

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
  `phonenumber` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `age`, `phonenumber`, `job`, `address`, `date_time`, `is_active`) VALUES
(101, 'Andi Rifqial', 'andirifqialnur276@gmail.com', '$2y$10$Y589tEhY9160TgS9Y2H7LOGUIM2WKWcEIMchD6liU9oik3hN62Th6', 'pexels-pixabay-236302.jpg', 23, '09812049', 'smebaknf', 'saelkdmlakmfakldcecvsx', '2021-07-26 02:07:41', 1),
(111, 'Daniel Khanwald Nicholas', 'dan@gmail.com', '$2y$10$xAXsq5tg1Y1o7P/PsDOyU.zVrXNTc2fdij7IQaabo3Yu6bL20RG16', 'pexels-ali-arapoğlu-26520881.jpg', 21, '085263563381', 'smebarang', '', '2021-07-31 01:07:15', 1);

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
-- Indexes for table `chatted`
--
ALTER TABLE `chatted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_doctor`
--
ALTER TABLE `chat_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `eventregister`
--
ALTER TABLE `eventregister`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatted`
--
ALTER TABLE `chatted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat_doctor`
--
ALTER TABLE `chat_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `eventregister`
--
ALTER TABLE `eventregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `eventregister`
--
ALTER TABLE `eventregister`
  ADD CONSTRAINT `eventregister_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
