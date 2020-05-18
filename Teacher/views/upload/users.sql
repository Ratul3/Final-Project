-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 01:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `picsource` varchar(350) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`, `picsource`, `gender`, `education`) VALUES
(2, 'Rayhan', '654321', 'rayhan20@gmail.com', 'Teacher', 'upload/page.jpg', 'Male', 'SSC,HSC,BSC'),
(3, 'Rakib', '345216', 'rakib@gmail.com', 'Student', 'upload/ace.jpg', 'Male', 'SSC'),
(4, 'Arnob', '876321', 'arnob@mail.com', 'Teacher', 'upload/87453329_149013722970166_1539358064623222784_n.jpg', 'Male', 'SSC,HSC,BSC'),
(10, 'Emon', '123456', 'emon@aiub.edu', 'Student', 'upload/page.jpg', 'Male', 'SSC,HSC'),
(12, 'Ratul', '123456', 'ratulrayhan201@gmail.com', 'Teacher', 'upload/IMG_20200313_012852.jpg', 'Male', 'SSC,HSC,BSC'),
(13, 'Shovon', '222222', 'shovon@gmail.com', 'Student', 'upload/17b9c600a7e9dee573e008b165556555.jpg', 'Male', 'SSC'),
(14, 'Robert', '123456', 'robert@gmail.com', 'Teacher', 'upload/11988607_10153104308911778_561824965723703670_n.png', 'Male', 'SSC,HSC,BSC'),
(15, 'Zlatan', '012345', 'zlatan@gmail.com', 'Teacher', '../views/upload/gNEX1XxYLXZ4SNYFSVYvfnKW.jpeg', 'Male', 'SSC,HSC,BSC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
