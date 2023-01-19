-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 11:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `postid`, `userid`) VALUES
(3, 1, 1),
(4, 1, 1),
(5, 2, 1),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes_art`
--

CREATE TABLE `likes_art` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid11` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profilephoto` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `photo`, `phone`, `email`, `profilephoto`, `text`, `likes`) VALUES
(1, 'Harshit Saxena', 'IMG_20211118_081951.jpg', '8923369059', 'saxenaharshit0000@gmail.com', 'IMG_20211118_112643.jpg', '', 3),
(2, 'kishan saxena', 'OIP.jpg', '8963332145', 'h@gmail.com', 'download.jpg', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts_art`
--

CREATE TABLE `posts_art` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profilephoto` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_art`
--

INSERT INTO `posts_art` (`id`, `name`, `photo`, `phone`, `email`, `profilephoto`, `text`, `likes`) VALUES
(1, 'kishan saxena', 'a2.jpg', '8963332145', 'h@gmail.com', 'download.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup details`
--

CREATE TABLE `signup details` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup details`
--

INSERT INTO `signup details` (`id`, `name`, `photo`, `phone`, `email`, `password`, `question`, `answer`, `gender`) VALUES
(1, 'Harshit Saxena', 'IMG_20211118_112643.jpg', '8923369059', 'saxenaharshit0000@gmail.com', '123', 'Pet name', 'rockie', 'Male'),
(2, 'kishan saxena', 'download.jpg', '8963332145', 'h@gmail.com', '123456', 'Pet name', 'tiger', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes_art`
--
ALTER TABLE `likes_art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_art`
--
ALTER TABLE `posts_art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup details`
--
ALTER TABLE `signup details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes_art`
--
ALTER TABLE `likes_art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts_art`
--
ALTER TABLE `posts_art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup details`
--
ALTER TABLE `signup details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
