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
-- Table structure for table `pnotices`
--

CREATE TABLE `pnotices` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `notice` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `teacher_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnotices`
--

INSERT INTO `pnotices` (`id`, `name`, `notice`, `date`, `teacher_name`) VALUES
(2, 'Robi', 'I will be late', '2020-04-08', 'Ratul'),
(3, 'Tanvir', 'I am out of city', '2020-04-08', 'Ratul'),
(4, 'Ayon', 'I will be on time', '2020-05-08', 'Robert'),
(5, 'Gin', 'I am feeling sick today', '2020-05-13', 'Ratul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pnotices`
--
ALTER TABLE `pnotices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pnotices`
--
ALTER TABLE `pnotices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
