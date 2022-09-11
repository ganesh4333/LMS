-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 12:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdb`
--

CREATE TABLE `bookdb` (
  `id` int(11) NOT NULL,
  `no` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdb`
--

INSERT INTO `bookdb` (`id`, `no`, `name`, `author`, `status`) VALUES
(1, 40001, 'DARK NIGHT', 'JON DE', 1),
(2, 40002, 'C LANGUAGE', 'DENISE', 1),
(3, 40004, 'DBMS', 'SHIVAJI', 1),
(4, 40005, 'shivaji', 'JON DEee', 1),
(5, 105, 'Basic Computer Enigineering', 'R.V.S.Murthy', 1),
(6, 22, 'Shivaji Meenugu', 'SHIVAJI', 1),
(7, 2555, 'GANESH', 'PG', 1),
(8, 8547, 'WD', 'N.NAGABHUSHANAM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booksts`
--

CREATE TABLE `booksts` (
  `id` int(11) NOT NULL,
  `no` int(10) NOT NULL,
  `status` int(5) NOT NULL,
  `pin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksts`
--

INSERT INTO `booksts` (`id`, `no`, `status`, `pin`) VALUES
(1, 40001, 0, '0'),
(2, 40001, 0, '0'),
(3, 40002, 0, '0'),
(4, 40004, 0, '0'),
(5, 40001, 0, '0'),
(6, 40001, 0, '0'),
(7, 40001, 0, '0'),
(8, 40002, 0, '0'),
(9, 40004, 0, '0'),
(10, 40001, 0, '0'),
(11, 40005, 0, '0'),
(12, 40001, 0, '0'),
(13, 40005, 0, '0'),
(14, 40002, 0, '0'),
(15, 40004, 0, '0'),
(16, 105, 0, '0'),
(17, 22, 0, '0'),
(18, 105, 0, '0'),
(19, 40004, 0, '0'),
(20, 40002, 0, '0'),
(21, 2555, 0, '0'),
(22, 2555, 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdb`
--
ALTER TABLE `bookdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booksts`
--
ALTER TABLE `booksts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdb`
--
ALTER TABLE `bookdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booksts`
--
ALTER TABLE `booksts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
