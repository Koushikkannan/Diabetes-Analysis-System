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
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `username`, `password`, `phone`, `email`, `gender`, `comment`) VALUES
('D Kannan', 'kannan', 'kannan', '918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('kannan', 'kannan98', 'Anhdh7@gdg', '918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('kanna2', 'kannan1', 'Ahhdh5%77', '917200711397', 'kannan.dakm@gmail.com', 'male', ''),
('koushik', 'koushik', 'koushik', '+918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('koushik', 'koushik', 'koushik', '+918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('koushik1', 'koushik1', 'koushik1', '', '', '', ''),
('koushik2', 'koushik2', 'koushik2', '', '', '', ''),
('kanna', 'kannan', '73n1g86h', '917200711397', 'kannan.dakm@gmail.com', 'male', 'gerge');
