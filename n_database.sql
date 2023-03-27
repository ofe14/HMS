-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` varchar(10) NOT NULL,
  `registration-date` date NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `d.o.b` date NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(11) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `phone.no` varchar(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `next of kin` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal.code` varchar(10) NOT NULL,
  `state` varchar(11) NOT NULL,
  `m.address` varchar(100) NOT NULL,
  `m.postal.code` varchar(10) NOT NULL,
  `m.state` varchar(11) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `registration-date`, `firstname`, `middlename`, `surname`, `d.o.b`, `age`, `gender`, `marital`, `occupation`, `nationality`, `phone.no`, `mail`, `next of kin`, `phone`, `address`, `postal.code`, `state`, `m.address`, `m.postal.code`, `m.state`, `payment`) VALUES
('122ASDA', '2023-03-16', 'OFEORITSE', 'FAVOUR', 'AMITEYE', '2002-10-14', '20', 'MALE', 'MARRIED', 'PROGRAMMER', 'NIGERIAN', '09122072401', 'ofeoritseamiteye03@gmail.com', 'AMITEYE LOUIS', '09122072401', 'NO 38 ERIKOWA STREET,EGBOKODO ,WARRI', '330102', 'DELTA', 'NO 38 ERIKOWA STREET,EGBOKODO ,WARRI', '330102', 'DELTA', 'CASH'),
('125DDCC', '2023-03-26', 'AYEORITSE', 'DOROTHY', 'OYEMAMI', '2004-09-20', '18', 'FEMALE', 'MARRIED', 'SOFTWARE-ENGINEER', 'NIGERIAN', '09159139693', 'ayeoyemami@gmail.com', 'AMITEYE', '09122072401', 'NO 39,ELIZABETH STREET,OPP ISAIAH ROAD,WARRI', '330102', 'DELTA', 'NO 38 ERIKOWA STREET,EGBOKODO ,WARRI', '330102', 'DELTA', 'INSURANCE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'AMO14', '1234mab'),
(3, 'Amiteye.ofeoritse', 'mynameisofe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
