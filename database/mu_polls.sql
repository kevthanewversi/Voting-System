-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2015 at 08:48 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mu_polls`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirants`
--

CREATE TABLE IF NOT EXISTS `aspirants` (
  `chair` varchar(30) NOT NULL,
  `vice_chair` varchar(30) NOT NULL,
  `sec_gen` varchar(30) NOT NULL,
  `ass_sec_gen` varchar(30) NOT NULL,
  `health_director` varchar(30) NOT NULL,
  `catering` varchar(30) NOT NULL,
  `security_acc` varchar(30) NOT NULL,
  `sports_games` varchar(30) NOT NULL,
  `finance` varchar(30) NOT NULL,
  `academics` varchar(30) NOT NULL,
  `entertainment` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirants`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `phone_no` bigint(15) NOT NULL,
  `mpesa` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

