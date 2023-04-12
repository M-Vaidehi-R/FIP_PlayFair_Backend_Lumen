-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2023 at 02:25 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_playfair_fip`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'each user unique id',
  `name` varchar(200) NOT NULL COMMENT 'user sign up name',
  `email` varchar(250) NOT NULL COMMENT 'user email id',
  `status_id` int(11) DEFAULT '2',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='user details from newsletter sign up';

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Mamatha Vaidehi Ramesh', 'mamathavaidehi@gmail.com', 2, '2023-04-11 14:03:44', '2023-04-11 14:03:44'),
(2, 'NS', 'ns@gmail.com', 2, '2023-04-11 14:08:33', '2023-04-11 14:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Volunteer'),
(3, 'Newsletter_sign_up');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'each user will have their own id''s',
  `fname` varchar(250) NOT NULL COMMENT 'user name goes here',
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'user email id',
  `phone` varchar(20) NOT NULL,
  `status_id` int(11) DEFAULT '2',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='User table contains info through volunteer/contact form';

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `fname`, `lname`, `email`, `phone`, `status_id`, `created_at`, `updated_at`) VALUES
(20, 'Mamatha Vaidehi', 'Ramesh', 'mamathavaidehi@gmail.com', '5488811932', 2, '2023-04-11 13:30:54', '2023-04-11 13:30:54'),
(19, 'Mamatha Vaidehi', 'Ramesh', 'mamathavaidehi@gmail.com', '5488811932', 2, '2023-04-11 13:28:35', '2023-04-11 13:28:35'),
(18, 'volunteer1', 'huhu', 'volunteer1@gmail.com', '1234567890', 1, '2023-04-11 12:22:37', '2023-04-11 12:22:37'),
(21, 'Mamatha Vaidehi', 'Ramesh', 'mamathavaidehi@gmail.com', '5488811932', 2, '2023-04-11 13:31:15', '2023-04-11 13:31:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
