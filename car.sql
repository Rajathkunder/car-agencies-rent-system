-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 11:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` varchar(30) NOT NULL,
  `name` varchar(33) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `phone`, `password`) VALUES
('rr', 'rr', '99', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `model` varchar(30) NOT NULL,
  `number` varchar(33) NOT NULL,
  `capacity` varchar(33) NOT NULL,
  `rent` varchar(33) NOT NULL,
  `agency` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `booked_by` varchar(30) NOT NULL,
  `start_date` varchar(33) NOT NULL,
  `totaldays` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`model`, `number`, `capacity`, `rent`, `agency`, `status`, `booked_by`, `start_date`, `totaldays`) VALUES
('ggg', '111', '11', '122', '', 'booked', 'ww', '02/01/2023', 'option1'),
('suzuki800', '2323fg', '122', '50000', '', 'available', '', '', ''),
('eee', '444', '333', '122', 'rr', 'booked', 'ww', '01/11/2023', '5'),
('rajathkunder', '555', '5555', '5555', 'rr', 'available', '', '', ''),
('ggg', '666', '55', '1234', '', 'available', '', '', ''),
('ghk', 'cfyj', '34', 'xfy', '', 'available', '', '', ''),
('ehf', 'ed', '1', 'eth', '', 'available', '', '', ''),
('erg', 'erg', '1', 'erwg', 'rr', 'available', '', '', ''),
('rajath', 'ggg', '1', 'gg', '', 'available', '', '', ''),
('hondasuv3', 'ha34f', '99', '2000', '', 'available', '', '', ''),
('maruthi800', 'ka08bh22', '100', '10000', '', 'available', '', '', ''),
('tat233', 'ka08h2', '444', '12000', 'rr', 'available', '', '', ''),
('toyota34', 'ka23g56', '200', '5000', 'rr', 'available', '', '', ''),
('suzuki898', 'ka31fd', '300', '6000', '', 'available', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `address` varchar(33) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `address`, `phone`, `password`) VALUES
('ww', 'ww', '9606611499', 'ww');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
