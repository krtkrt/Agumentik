-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2022 at 10:37 AM
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
-- Database: `vali`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(500) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `customer_pass` varchar(500) NOT NULL,
  `customer_country` varchar(150) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_contact` varchar(233) NOT NULL,
  `customer_address` varchar(222) NOT NULL,
  `customer_image` varchar(122) NOT NULL,
  `created_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `created_data`) VALUES
(1, 'sdfds', 'cbgfh', 'vbngh', 'India', 'fghgh', 'vbnb', ' nbv', 'class.PNG', '2022-11-07 20:05:57'),
(2, 'retry', 'tytry', 'fghg', 'India', 'ghgfh', 'bnb', 'ytryt', 'class2.PNG', '2022-11-07 20:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

DROP TABLE IF EXISTS `data_table`;
CREATE TABLE IF NOT EXISTS `data_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(500) NOT NULL,
  `property_loc` varchar(500) NOT NULL,
  `pro_price` varchar(500) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`id`, `property_name`, `property_loc`, `pro_price`, `file_name`, `created_date`) VALUES
(46, 'Tower4', 'Chennai', '2.3 cr', 'LIC_building,_Chennai.jpg', '2022-11-08 16:03:03'),
(43, 'Tower1', 'Banglore', '4 cr', 'Bangalore.webp', '2022-11-08 16:01:33'),
(44, 'Tower2', 'Hyderabad', '1.2 cr', 'buildinghyd.jpg', '2022-11-08 16:02:09'),
(45, 'Tower3', 'Delhi', '2 cr', 'Noidancrdelhiskyline.jpg', '2022-11-08 16:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

DROP TABLE IF EXISTS `tracker`;
CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(500) NOT NULL,
  `emp_email` varchar(150) NOT NULL,
  `emp_password` varchar(500) NOT NULL,
  `emp_gender` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `emp_name`, `emp_email`, `emp_password`, `emp_gender`, `created_date`) VALUES
(1, 'sample', 'sample@gmail.com', '123', 'female', '2022-11-08 15:24:36'),
(2, 'example', 'example@gmail.com', '1234', 'male', '2022-11-08 15:25:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
