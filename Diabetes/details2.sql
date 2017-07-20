-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 04:17 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diabetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `details2`
--

CREATE TABLE IF NOT EXISTS `details2` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `thirsty` varchar(5) NOT NULL,
  `urination` varchar(5) NOT NULL,
  `hunger` varchar(5) NOT NULL,
  `loss` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `fluctuation` varchar(5) NOT NULL,
  `vision` varchar(5) NOT NULL,
  `fatigue` varchar(5) NOT NULL,
  `drinking` varchar(5) NOT NULL,
  `infection` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details2`
--

INSERT INTO `details2` (`name`, `gender`, `thirsty`, `urination`, `hunger`, `loss`, `weight`, `fluctuation`, `vision`, `fatigue`, `drinking`, `infection`) VALUES
('kannan', 'male', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'no');
