-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 04:16 PM
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
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `gender1` varchar(2) NOT NULL,
  `urination` varchar(2) NOT NULL,
  `hunger` varchar(2) NOT NULL,
  `loss` varchar(2) NOT NULL,
  `weight` varchar(2) NOT NULL,
  `fluctuation` varchar(2) NOT NULL,
  `vision` varchar(2) NOT NULL,
  `fatigue` varchar(2) NOT NULL,
  `drinking` varchar(2) NOT NULL,
  `infection` varchar(2) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`gender1`, `urination`, `hunger`, `loss`, `weight`, `fluctuation`, `vision`, `fatigue`, `drinking`, `infection`, `gender`) VALUES
('1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1'),
('1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1'),
('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
