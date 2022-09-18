-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2022 at 05:52 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `cname`, `email`, `number`, `address`, `country`, `city`, `state`, `zip`, `password`) VALUES
(1, '1', '2', '3', '4', '5', 'my name is zz', 'bangladesh', '5', '6', '7', '8'),
(2, 'Rafiul Hasan', 'Tonmoy', 'Virtual-Generation', 'rhtonmoyhd@gmail.com', '+8801629051870', 'Uttara 10, Kamarpara', 'bangladesh', 'Uttara', 'Dhaka', '1230', '12345'),
(3, 'Rafiul Hasan', 'Tonmoy', 'Virtual-Generation', 'rhtonmoyhd@gmail.com', '+8801629051870', 'Uttara 10, Kamarpara', 'bangladesh', 'Uttara', 'Dhaka', '1230', '12345'),
(4, 'Rafiul Hasan', 'Tonmoy', 'Virtual-Generation', 'rhtonmoyhd@gmail.com', '+8801629051870', 'Uttara 10, Kamarpara', 'bangladesh', 'Uttara', 'Dhaka', '1230', '12345'),
(5, 'a', 'a', 'a', 'a', 'a', 'a', 'bangladesh', 'a', 'a', 'a', 'a'),
(6, 's', 's', 's', 's', 's', 's', 'bangladesh', 's', 's', 's', 's'),
(7, 's', 's', 's', 's', 's', 's', 'bangladesh', 's', 's', 's', 's'),
(8, 's', 's', 's', 's', 's', 's', 'bangladesh', 's', 's', 's', 's'),
(9, 's', 's', 's', 's', 's', 's', 'bangladesh', 's', 's', 's', 's'),
(10, 's', 's', 's', 's', 's', 's', 'bangladesh', 's', 's', 's', 's');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
