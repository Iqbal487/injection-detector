-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 07:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `injection`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `pass_word` varchar(30) NOT NULL,
  `Cell_no` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `pass_word`, `Cell_no`, `address`, `status`) VALUES
(1, 'iqbal', '123444', '017999002234', 'kh', 'ACTIVE'),
(2, 'sakib', '8898933', '017999002234', 'kh', 'ACTIVE'),
(3, 'MD x', '8898933', '017999002234', 'kh', 'ACTIVE'),
(4, 'MD y', '8898933', '017999002234', 'kh', 'ACTIVE'),
(5, 'MD e', '8898933', '017999002234', 'kh', 'ACTIVE'),
(6, 'MD ey', '8898933', '017999002234', 'kh', 'ACTIVE'),
(7, 'MD ey', '8898933', '017999002234', 'kh', 'ACTIVE'),
(8, 'MD se', '8898933', '017999002234', 'kh', 'ACTIVE'),
(9, 'MD tey', '8898933', '017999002234', 'kh', 'ACTIVE'),
(10, 'MD wewy', '8898933', '017999002234', 'kh', 'ACTIVE'),
(11, 'MD eew', '8898933', '017999002234', 'kh', 'ACTIVE'),
(12, 'MD eewey', '8898933', '017999002234', 'kh', 'ACTIVE'),
(13, 'MD yewe', '8898933', '017999002234', 'kh', 'ACTIVE'),
(14, 'MD eewe', '8898933', '017999002234', 'kh', 'ACTIVE'),
(15, 'rafiq', '123444', '017999002234', 'kh', 'ACTIVE'),
(16, 'ere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(17, 'MD rere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(18, 'MD sdsds', '8898933', '017999002234', 'kh', 'ACTIVE'),
(19, 'MD dsdsd', '8898933', '017999002234', 'kh', 'ACTIVE'),
(20, 'MD dsd', '8898933', '017999002234', 'kh', 'ACTIVE'),
(21, 'MD s', '8898933', '017999002234', 'kh', 'ACTIVE'),
(22, 'MD serewre', '8898933', '017999002234', 'kh', 'ACTIVE'),
(23, 'MD ere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(24, 'MD rere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(25, 'MD rere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(26, 'MD rere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(27, 'MD rere', '8898933', '017999002234', 'kh', 'ACTIVE'),
(28, 'MD erer', '8898933', '017999002234', 'kh', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
