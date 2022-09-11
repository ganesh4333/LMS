-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 08:01 AM
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
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no` int(20) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `no`, `author`) VALUES
(1, 'Basic Computer Enigineering', 105, 'dr.shankar'),
(2, 'telidhu', 422, 'marchipoya');

-- --------------------------------------------------------

--
-- Table structure for table `libt`
--

CREATE TABLE `libt` (
  `id` int(11) NOT NULL,
  `Std_PIN` varchar(20) NOT NULL,
  `Std_NAME` varchar(25) NOT NULL,
  `Book_NAME` varchar(50) NOT NULL,
  `Book_BUNDLE_NO` int(20) NOT NULL,
  `Book_AUTHOR` varchar(25) NOT NULL,
  `DATE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libt`
--

INSERT INTO `libt` (`id`, `Std_PIN`, `Std_NAME`, `Book_NAME`, `Book_BUNDLE_NO`, `Book_AUTHOR`, `DATE`) VALUES
(8, '422', 'clownster', 'dark night', 1432, 'shivajim', '2019-02-07 '),
(9, '422', 'shivaji', 'c', 521235, 'joker man', '2019-02-07 '),
(12, '420', 'akasa ramanna', 'tom and jerry', 1432, 'asa', '2019-02-11 '),
(14, '8', 'go', 'ffffff', 952, 'v.v.s', '2019-02-11 '),
(15, '11221211221', '111', 'smlfsjkfjshfsdhf', 0, 'dgfggd', '2019-02-11 '),
(16, '208', 'rebelstar', 'rebelism', 549, 'prabhas', '2019-02-11 '),
(17, '209', 'asd', 'query', 123, 'me', '2019-02-11 '),
(18, '549', 'prabhas', 'rebelstarbiograpjy', 208, 'sasikumar', '2019-02-11 '),
(19, '17101-cm-209', 'sidhu', 'royal', 549, 'sasikumar', '2019-02-11 '),
(20, 'SIDHU', 'DASDADAS', 'DAADADDDS', 0, 'AD', '2019-02-11 '),
(21, '17101-CM-213', 'dhanush reddy', 'srinivas varthanthi', 420, 'clownsterqueen', '2019-02-12 '),
(22, '17101-CM-210', 'shivaji', 'dark night', 521235, 'Book_AUTHOR', '2019-02-14 '),
(23, '123', 'sfr', 'telidhu', 234, 'marchipoyaa', '2019-02-14 ');

-- --------------------------------------------------------

--
-- Table structure for table `new_books`
--

CREATE TABLE `new_books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no` int(20) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_books`
--

INSERT INTO `new_books` (`id`, `name`, `no`, `author`) VALUES
(1, 'C LANGUAGE', 521235, 'DENNES'),
(2, 'DBMS', 521236, ''),
(3, 'Basic Computer Enigineering', 105, 'dr.shankar'),
(4, 'c languages', 106, 'hramin Chowdary'),
(5, 'c languages', 106, 'Bhramin Chowdary'),
(6, 'English', 101, 'Joshana'),
(7, 'Maths', 102, 'R.V.S.Murthy');

-- --------------------------------------------------------

--
-- Table structure for table `std_users`
--

CREATE TABLE `std_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `trn_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_users`
--

INSERT INTO `std_users` (`id`, `email`, `username`, `password`, `trn_date`) VALUES
(12, 'aaaa@gmail.com', 'aaa', '74b87337454200d4d33f80c4663dc5e5', '2019-02-11 07:34:17'),
(13, 'ksudaykumar2000@gmail.com', 's', '202cb962ac59075b964b07152d234b70', '2019-02-11 07:42:58'),
(14, 'infosree@dr.com', 'come', 'ffbe932b8e944cf9f91e19cbec5afc33', '2019-02-11 07:43:47'),
(15, 'shivaji@dr.com', 'shivaji', '202cb962ac59075b964b07152d234b70', '2019-02-12 10:32:16'),
(16, 'infosree@dr.com', 'come', '9df62e693988eb4e1e1444ece0578579', '2019-02-12 10:32:22'),
(17, 'aa@gmail.com', 'a', '202cb962ac59075b964b07152d234b70', '2019-02-14 07:32:45'),
(18, 'infosree@dr.com', 'come', '14a94f28a65062c268c5d0fe98454196', '2019-02-14 07:32:50'),
(19, 'dhanushreddy897@gmail.com', 'dhanush', '2fcafe5942f2c2d5cb37601b32d094ad', '2019-02-14 07:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `text`, `date`) VALUES
(1, 'PHP Global Variables - Superglobals\r\nSeveral predefined variables in PHP are \"superglobals\", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.\r\n\r\nThe PHP superglobal variables are:\r\n\r\n$GLOBALS\r\n$_SERVER\r\n$_REQUEST\r\n$_POST\r\n$_GET\r\n$_FILES\r\n$_ENV\r\n$_COOKIE\r\n$_SESSION\r\nThis chapter will explain some of the superglobals, and the rest will be explained in later chapters.\r\n\r\n', '2019-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(30, 'sree', 'infosree@dr.com', '77963b7a931377ad4ab5ad6a9cd718aa', '2019-02-11 07:34:59'),
(31, 'aaa', 'aaaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5', '2019-02-11 07:35:02'),
(32, 'a', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2019-02-11 07:35:30'),
(33, 'a', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2019-02-11 07:35:34'),
(34, 'a', 'fefwef@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2019-02-11 07:35:53'),
(35, 'aw', 'fefwef@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2019-02-11 07:36:05'),
(36, 'awd', 'fefwef@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2019-02-11 07:36:26'),
(37, 'come', 'rrr@gmail.com', 'c4efd5020cb49b9d3257ffa0fbccc0ae', '2019-02-11 07:36:49'),
(38, 'edw', 'ew@gm.c', '437599f1ea3514f8969f161a6606ce18', '2019-02-11 07:39:20'),
(39, 'come', 'dhanushreddy897@gmail.com', 'ffbe932b8e944cf9f91e19cbec5afc33', '2019-02-11 07:43:14'),
(40, 'shivaji', 'shivaji@dr.com', '202cb962ac59075b964b07152d234b70', '2019-02-12 11:06:31'),
(41, 'dhanush', 'dhanushreddy897@gmail.com', 'e1ab97b17d99a8ba78f87abbaa77afad', '2019-02-12 11:31:49'),
(42, 'come', 'infosree@dr.com', '9f6e6800cfae7749eb6c486619254b9c', '2019-02-14 07:13:53'),
(43, 'dhanush', 'dhanushreddy897@gmail.com', '2fcafe5942f2c2d5cb37601b32d094ad', '2019-02-14 07:38:21'),
(44, 'a', 'aa@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-02-14 07:38:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libt`
--
ALTER TABLE `libt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_books`
--
ALTER TABLE `new_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_users`
--
ALTER TABLE `std_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `libt`
--
ALTER TABLE `libt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `new_books`
--
ALTER TABLE `new_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `std_users`
--
ALTER TABLE `std_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
