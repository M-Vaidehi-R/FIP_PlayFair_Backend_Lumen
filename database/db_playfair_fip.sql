-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2023 at 03:31 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='user details from newsletter sign up';

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `status_id`, `created_at`, `updated_at`) VALUES
(3, 'volunteer3', 'volunteer3@gmail.com', 2, '2023-04-11 16:01:48', '2023-04-11 16:01:48'),
(4, 'tonya', 'to@gmail.com', 2, '2023-04-11 16:06:42', '2023-04-11 16:06:42'),
(9, 'volunteerone', 'volunteer1@gmail.com', 1, '2023-04-12 03:30:57', '2023-04-12 03:30:57');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COMMENT='User table contains info through volunteer/contact form';

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `fname`, `lname`, `email`, `phone`, `status_id`, `created_at`, `updated_at`) VALUES
(24, 'Sherine', 'ss', 'sherinemceween@gmail.com', '1234567890', 2, '2023-04-11 18:45:28', '2023-04-11 20:45:10'),
(25, 'Mamatha Vaidehi', 'Ramesh', 'mamathavaidehi@gmail.com', '5488811932', 1, '2023-04-11 22:41:07', '2023-04-11 22:41:07'),
(27, 'Ruby', 'Raam', 'rr@gmail.com', '0987654321', 2, '2023-04-12 03:23:46', '2023-04-12 03:23:46'),
(28, 'Josh', 'Jerrod', 'josh@gmail.com', '1234352897', 2, '2023-04-12 03:24:44', '2023-04-12 03:24:44'),
(29, 'volunteer', 'one', 'volunteer1@gmail.com', '0987654321', 1, '2023-04-12 03:25:44', '2023-04-12 03:26:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
