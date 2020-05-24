-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2020 at 02:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Levis', 1500),
(2, 'Engrp', 800),
(3, 'Nike', 1700),
(4, 'Engrp', 500),
(5, 'Nike', 1300),
(6, 'Levis', 1600),
(7, 'Nike', 1900),
(8, 'Wood Land', 3000),
(9, 'Nike', 1450),
(10, 'Nike', 1000),
(11, 'Reebok', 1500),
(12, 'Notrum', 1300),
(13, 'Liberty', 1500),
(14, 'Clarks', 800),
(15, 'Mochi', 1700),
(16, 'Cat Walk', 500),
(17, 'Regal', 1300),
(18, 'Haute Curry', 1600),
(19, 'Regal', 1900),
(20, 'Cat Walk', 3000),
(21, 'Hush Puppies', 500),
(22, 'Bata', 800),
(23, 'Mochi', 700),
(24, 'First Walk', 500),
(25, 'Shree', 1300),
(26, 'Leathers', 1600),
(27, 'Puppies', 1900),
(28, 'Cry Walk', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'piyush', 'piyush.kashyap2000@gmail.com', '7d7982cc30b26508c71c10836ec12840', '7061310019', 'muz', 'near R.kashram'),
(2, 'Naman', '1806138@kiit.ac.in', '86f500cd7b7d38e5d4ae6cde3920f589', '7061310019', 'Puri', 'odisha');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
