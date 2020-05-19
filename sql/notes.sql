-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 05:35 PM
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
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `file` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `teacher_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `name`, `file`, `date`, `teacher_name`) VALUES
(1, 'Tanvir', 'upload/Literature Reveiw_JSW_evolution.pdf', '2020-04-17', 'Ratul'),
(2, 'Arnob', 'upload/2.pdf', '2020-04-17', 'Ratul'),
(3, 'Robi', 'upload/3.pdf', '2020-04-17', 'Robert'),
(4, 'Lilou', 'upload/WEBTECH FINAL TERM EVALUATION NOTICE -F.pdf', '2020-05-08', 'Robert'),
(5, 'Leo', 'upload/Finished Project Report - Final Term - Fall 19-20(1).docx', '2020-05-10', 'Ratul'),
(6, 'Gin', 'upload/users.sql', '2020-05-13', 'Ratul'),
(7, 'john', 'upload/First&Follow.docx', '2020-05-16', 'Ratul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
