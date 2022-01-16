-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 01:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad-campaign`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `link` varchar(100) NOT NULL,
  `media_no` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `title`, `detail`, `link`, `media_no`, `uid`, `status`) VALUES
(1, 'my first add to be live', 'hi this is my first add which is live now', 'https://www.ranchigymkhanaclub.com/', '9128427271642277584', 2, 1),
(2, 'my second campaign', 'hi this is my first add which is live now', 'https://www.ranchigymkhanaclub.com/', '2914353351642327267', 2, 0),
(3, 'this is my facebook campaign', 'hi this is my first add which is live now', 'https://www.ranchigymkhanaclub.com/', '2509449691642327441', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cover_media`
--

CREATE TABLE `cover_media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `media_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cover_media`
--

INSERT INTO `cover_media` (`id`, `file_name`, `media_number`) VALUES
(1, '16422776941556714272aw4.png', '9128427271642277584'),
(2, '16423273081335543304james-union.jpeg', '2914353351642327267'),
(3, '16423274627507189952Capture.PNG', '2509449691642327441');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `media_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'CST'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ADM'),
(2, 'User', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'CST'),
(3, 'user2', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 'CST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_media`
--
ALTER TABLE `cover_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cover_media`
--
ALTER TABLE `cover_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
