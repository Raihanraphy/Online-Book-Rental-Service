-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `470_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Name`, `Type`) VALUES
('tintin', 'Adenture'),
('A.P. bio', 'Science'),
('Fundatmental of Phys', 'Science'),
('Angels & Demons', 'Fiction'),
('Deciption Point', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`First_Name`, `Last_Name`, `User_Name`, `Email`, `Password`) VALUES
('raihan', 'rahman', 'rr0123', 'raihan@hmail.com', 'raphy'),
('Raihan', 'Rahman', 'Abcd', 'raihanraphy@gmail.com', 'QWER'),
('Raihan', 'Rahman', 'FGHJ', 'raihanraphy@gmail.com', 'ERTY'),
('Raihan', 'Rahman', 'hhtkkk ', 'raihanraphy@gmail.com', 'RTYU'),
('Raihan', 'Rahman', 'j', 'raihanraphy@gmail.com', 'j'),
('Raihan', 'Rahman', 'j', 'raihanraphy@gmail.com', 'j'),
('Raihan', 'Rahman', 'j', 'raihanraphy@gmail.com', 'j'),
('Raihan', 'Rahman', 'j', 'raihanraphy@gmail.com', 'j'),
('Raihan', 'Rahman', 'j', 'raihanraphy@gmail.com', 'j'),
('Raihan', 'Rahman', 'you', 'raihanraphy@gmail.com', 'yout'),
('Raihan', 'Rahman', 'yout', 'raihanraphy@gmail.com', 'yout');

-- --------------------------------------------------------

--
-- Table structure for table `request_queue_list`
--

CREATE TABLE `request_queue_list` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_queue_list`
--

INSERT INTO `request_queue_list` (`Name`, `Email`) VALUES
('tintin', 'raihanraphy@gmail.com'),
('Angels & Demon', 'raihanraphy@gmail.com'),
('Angels & Demon', 'raihanraphy@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
