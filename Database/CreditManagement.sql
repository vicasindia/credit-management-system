-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2020 at 11:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CreditManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `s_no` int(11) NOT NULL,
  `sender` varchar(35) NOT NULL,
  `receiver` varchar(35) NOT NULL,
  `txn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`s_no`, `sender`, `receiver`, `txn`) VALUES
(1, 'Vikas', 'Priyam', 10),
(2, 'Priyam', 'Vikas', 11),
(3, 'Priyam', 'Vikas', 11),
(4, 'Vikas', 'Keshav', 111),
(5, 'Vikas', 'Lalit', 21),
(6, 'Ritesh', 'Keshav', 50),
(7, 'Radha', 'Vikas', 100),
(8, 'Ritesh', 'Radha', 210),
(9, 'Ritesh', 'Lalit', 151),
(10, 'Keshav', 'Lalit', 100),
(11, 'Ritesh', 'Lalit', 10),
(12, 'Priyam', 'Ritesh', 10),
(13, 'Vikas', 'Ritesh', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `address`, `credits`) VALUES
(1, 'Vikas', 'vikas@gmail.com', '9876543210', 'Uttar Pradesh', 780),
(2, 'Priyam', 'priyam@gmail.com', '912356780', 'Saharanpur', 478),
(3, 'Keshav', 'keshav@gmail.com', '8123466790', 'Greater NOIDA', 561),
(4, 'Ritesh', 'rts@gmail.com', '7123456890', 'NOIDA', 289),
(5, 'Lalit', 'lalit@linux.com', '7778889990', 'Ghaziabad', 782),
(6, 'Radha', 'rda@gmail.com', '9998887776', 'Delhi', 610),
(7, 'Ankur', 'ankur@gmail.com', '8998899885', 'Gorakhpur', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
