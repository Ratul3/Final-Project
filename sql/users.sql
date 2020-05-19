-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 05:36 PM
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
  `fname` varchar(50) NOT NULL,
  `nname` varchar(50) NOT NULL,
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

INSERT INTO `users` (`id`, `fname`, `nname`, `password`, `email`, `type`, `picsource`, `gender`, `education`) VALUES
(18, 'john doe', 'john', '12345', 'john@gmail.com', 'student', '../views/upload/', 'M', 'hsc'),
(19, 'iftekhar rifat', 'rifat', '12345', 'rifat@gmail.com', 'student', '../views/upload/', 'M', 'bsc'),
(20, 'bj saad', 'bj', '12345', 'sad@gmail.com', 'student', '../views/upload/', 'M', 'ssc'),
(23, 'Ratul Rayhan', 'Ratul', '123456', 'ratulrayhan201@gmail.com', 'teacher', '../views/upload/IMG_20200313_012852.jpg', 'M', 'bsc'),
(24, 'Robert Pattinson', 'Robert', '654321', 'robert@gmail.com', 'teacher', '../views/upload/11988607_10153104308911778_561824965723703670_n.png', 'M', 'bsc'),
(25, 'Zlatan Ibrahimovic', 'Zlatan', '123654', 'zlatan@gmail.com', 'teacher', '../views/upload/gNEX1XxYLXZ4SNYFSVYvfnKW.jpeg', 'M', 'bsc'),
(26, 'Rimon RR', 'Rimon', '012345', 'rimon@gmail.com', 'tp', '../views/upload/page.jpg', 'M', 'hsc'),
(27, 'Rasel IE', 'Imon', '234567', 'rimon@gmail.com', 'tp', '../views/upload/ace.jpg', 'M', 'bsc'),
(28, 'Limon YA', 'Limon', '765432', 'limon@gmail.com', 'tp', '../views/upload/son_goku_super_saiyan_god_super_saiyan_by_dark_crawler_d8zkljz-fullview.png', 'M', 'ssc');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
