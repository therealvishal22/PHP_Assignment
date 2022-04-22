-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 12:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testcheckbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkbox1`
--

CREATE TABLE `checkbox1` (
  `id1` int(11) NOT NULL,
  `checkbox1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkbox1`
--

INSERT INTO `checkbox1` (`id1`, `checkbox1`) VALUES
(8, 'checkbox5');

-- --------------------------------------------------------

--
-- Table structure for table `checkbox2`
--

CREATE TABLE `checkbox2` (
  `id2` int(11) NOT NULL,
  `checkbox2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkbox2`
--

INSERT INTO `checkbox2` (`id2`, `checkbox2`) VALUES
(1, 'checkbox1'),
(6, 'checkbox4'),
(7, 'checkbox2'),
(8, 'checkbox3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkbox1`
--
ALTER TABLE `checkbox1`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `checkbox2`
--
ALTER TABLE `checkbox2`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkbox1`
--
ALTER TABLE `checkbox1`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkbox2`
--
ALTER TABLE `checkbox2`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
