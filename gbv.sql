-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 11:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbv`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `fullName` varchar(225) NOT NULL,
  `age` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contactnum` varchar(225) NOT NULL,
  `paddress` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullName`, `age`, `email`, `contactnum`, `paddress`, `comment`) VALUES
(1, 'Gerald Macherechedze', 23, 'mobilegerald1@gmail.com', '0835912270', '10 Bentley place Dawn park', 'Hellow'),
(2, 'Teagan Tshikuvhe', 21, 'sililocom640@gmail.com', '0649044829', 'Bramfontain', 'rape'),
(3, 'Brendon Chiriga', 22, 'brendonchiriga@gmail.com', '0649044829', '24 First Street, UJ', ''),
(4, 'Mathebula Ashley', 22, 'mathebula.ak@455gmail.com', '0649044829', '31 caroline street', ''),
(5, 'Amos Tategulu', 23, 'amostatezz@gmail.com', '0649044829', 'home', ''),
(7, 'helloworld', 100, 'world@gmail.com', '011011011', 'World', ''),
(8, 'helloworld', 100, 'world@gmail.com', '011011011', 'world', ''),
(9, 'helloworld', 383464648, 'world@gmail.com', '0649044829', 'world', ''),
(11, 'gerald', 12, '10101@gmail.com', '0835912270', '10101', 'Assult'),
(12, 'gerald', 12, '10101@gmail.com', '0835912270', '10101', 'Assult'),
(13, 'gerald', 12, '10101@gmail.com', '0835912270', '10101', 'Assult'),
(14, 'hjjsd', 0, 'sajs@gmail.com', 'cnds', 'dsd', 'sdd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Gerald', '0835912270'),
(2, 'Teagan', 'Zili5@*#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
