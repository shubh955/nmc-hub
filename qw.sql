-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 02:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qw`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `retypepassword` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `areasqft` varchar(50) NOT NULL,
  `taxnumber` varchar(100) NOT NULL,
  `floornumber` varchar(10) NOT NULL,
  `waternumber` varchar(50) NOT NULL,
  `electricnumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facing` varchar(150) NOT NULL,
  `aadhar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `retypepassword`, `email`, `mobile`, `areasqft`, `taxnumber`, `floornumber`, `waternumber`, `electricnumber`, `address`, `facing`, `aadhar`) VALUES
('nmc', 'nmc@123', 'nmc@123', 'nmc@gmail.com', '9876543210', '', '', '', '', '', '', '', ''),
('ankush kure', '9403011642', '9403011642', 'ankush@gmail.com', '9403011642', '1800', '345678', '89', '98765', '5556233', 'mahal nagpur', 'south-west', '888999555'),
('Adarsh Jais', 'adarsh123', 'adarsh123', 'adarsh@gmail.com', '9595096538', '2000', '1000020000', '3', '1200013000', '2200033000', 'old nandanvan layout', 'North-East', '1234-1234-1234-1'),
('Sanchit Gupta', 'sanchit123', 'sanchit123', 'sanchit@yahoo.com', '8236632252', '1500', '1000030000', '2', '1200014000', '2200044000', 'Tukdoji Putla', 'East', '4569-1234-1234-1'),
('Yash Khobragade', 'yash123', 'yash123', 'yash@gmail.com', '7122565255', '1600', '1000040000', '94', '1300014000', '3300044000', 'shanti nagar', 'North-West', '4567-1234-1234-1'),
('Shubham Thakre', 'shubham123', 'shubham123', 'shubham@gmail.com', '8265478985', '1200', '1000050000', '78', '1300015000', '3300055000', 'Futala lake', 'south-west', '7894-1234-1234-1'),
('Samiksha Yerpude', 'samiksha123', 'samiksha123', 'samiksha@gmail.com', '6845257412', '1600', '1000060000', '94', '1300016000', '3300066000', 'old nandanvan layout', 'south-west', '6547-1234-1234-1'),
('rakesh', 'rakesh123', 'rakesh123', 'rakesh@gmail.com', '9876543210', '1700', '5678923', '56', '4526781', '678529', 'near anandam main office karnalbag mahal,nagpur', 'south-west', '444555667211'),
('komal kure', '123456789', '123456789', 'komalkure@gmail.com', '9595096539', '1200', '55555', '85', '66666', '77777', 'kure ji ka havelii', 'east', '62621762'),
('urvi', '123', '123', 'urvi@gmail.com', '1234512323', '1200', '55555', '56', '4526781', '67890', 'sdasd', 'west', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
