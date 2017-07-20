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
-- Table structure for table `details1`
--

CREATE TABLE IF NOT EXISTS `details1` (
  `thirsty` int(2) NOT NULL,
  `urination` int(2) NOT NULL,
  `hunger` int(2) NOT NULL,
  `loss` int(2) NOT NULL,
  `weight` int(2) NOT NULL,
  `fluctuation` int(2) NOT NULL,
  `vision` int(2) NOT NULL,
  `fatigue` int(2) NOT NULL,
  `drinking` int(2) NOT NULL,
  `infection` int(2) NOT NULL,
  `gender` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details1`
--

