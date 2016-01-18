-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 07:24 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `1bus`
--

CREATE TABLE IF NOT EXISTS `1bus` (
  `id` int(11) NOT NULL,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1bus`
--

INSERT INTO `1bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `2bus`
--

CREATE TABLE IF NOT EXISTS `2bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `2bus`
--

INSERT INTO `2bus` (`id`, `status`, `state`) VALUES
(2, 'Available', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Booked', 'N'),
(6, 'Booked', 'W'),
(7, 'Booked', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `3bus`
--

CREATE TABLE IF NOT EXISTS `3bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `3bus`
--

INSERT INTO `3bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `4bus`
--

CREATE TABLE IF NOT EXISTS `4bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `4bus`
--

INSERT INTO `4bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Booked', 'N'),
(6, 'Booked', 'W'),
(7, 'Booked', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `5bus`
--

CREATE TABLE IF NOT EXISTS `5bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `5bus`
--

INSERT INTO `5bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Available', 'N'),
(6, 'Booked', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `6bus`
--

CREATE TABLE IF NOT EXISTS `6bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `6bus`
--

INSERT INTO `6bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Booked', 'N'),
(5, 'Available', 'N'),
(6, 'Available', 'W'),
(7, 'Booked', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `7bus`
--

CREATE TABLE IF NOT EXISTS `7bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `7bus`
--

INSERT INTO `7bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Booked', 'N'),
(5, 'Available', 'N'),
(6, 'Booked', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `8bus`
--

CREATE TABLE IF NOT EXISTS `8bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `8bus`
--

INSERT INTO `8bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Available', 'N'),
(6, 'Booked', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `9bus`
--

CREATE TABLE IF NOT EXISTS `9bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `9bus`
--

INSERT INTO `9bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Available', 'N'),
(6, 'Booked', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `10bus`
--

CREATE TABLE IF NOT EXISTS `10bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `10bus`
--

INSERT INTO `10bus` (`id`, `status`, `state`) VALUES
(2, 'Booked', 'N'),
(3, 'Booked', 'W'),
(4, 'Booked', 'N'),
(5, 'Available', 'N'),
(6, 'Available', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'kev', 'pp');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_reg` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `dept_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_reg`, `from_stop`, `to_stop`, `dept_time`, `arrival_time`, `distance`, `fare`) VALUES
(24, 'KCX 222U', 'Nairobi', 'Kampala', '17:00:00', '21:00:00', 1000, 1500),
(1, 'KAZ 890P', 'Mombasa', 'Nairobi', '12:00:00', '16:00:00', 203, 340),
(4, 'KAW 290J', 'Lodwar', 'Juba', '17:00:00', '21:00:00', 203, 340),
(5, 'JAB 290M', 'Kisumu', 'Nairobi', '17:00:00', '21:00:00', 204, 340),
(6, 'KGW 098O', 'Meru ', 'Samburu', '07:00:00', '11:00:00', 203, 340),
(7, 'KDS 678I', 'Nairobi ', 'Masai Mara', '13:00:00', '21:00:00', 143, 240),
(8, 'KJS 876A', 'Mombasa ', 'Masai Mara', '07:00:00', '17:00:00', 1000, 430),
(10, 'KSM 342X', 'Kisumu', 'Mombasa', '09:00:00', '19:00:00', 543, 440);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address` varchar(120) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `dob`, `mobile`, `address`, `pin_code`, `email`, `password`, `reg_date`) VALUES
(19, 'Janet', 'Female', '1993-05-23', '702672922', '11340', 212, 'J342@YAHOO.COM', '9062ff4fb860c9c664ac7380b471f2a44c038238', '2014-08-11'),
(17, 'Kevin', 'Male', '1992-10-21', '702672922', '11340', 3435, 'murimiclerk@gmail.com', '2a757db2b93bf16b75e5949e56c00c6e818661f0', '2014-10-24'),
(18, 'Kevin', 'Male', '1910-02-09', '702672922', '12', 3435, 'Murrrr@hotmail.com', '9a79be611e0267e1d943da0737c6c51be67865a0', '2014-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `destination`) VALUES
(1, 'Nairobi'),
(2, 'Mombasa'),
(3, 'Garrisa'),
(4, 'Kisumu'),
(5, 'Lodwar'),
(6, 'Kampala'),
(7, 'Juba'),
(8, 'Masai Mara'),
(9, 'Samburu'),
(10, 'Meru'),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, 'Machakos');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DRIVER` varchar(30) DEFAULT NULL,
  `BUS_REG` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`ID`, `DRIVER`, `BUS_REG`) VALUES
(1, 'John', 'KCA 320P'),
(2, 'Kevin', 'KAZ 890P'),
(3, 'Boaz', 'KAW 280P');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE IF NOT EXISTS `user_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_reg` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `journey_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `seat_no_booked` int(11) NOT NULL,
  `dept_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `user_id`, `bus_id`, `bus_reg`, `from_stop`, `to_stop`, `journey_date`, `booking_date`, `seat_no_booked`, `dept_time`, `distance`, `fare`) VALUES
(39, 17, 6, '', 'Meru ', 'Samburu', '0000-00-00', '2014-11-14', 7, '07:00:00', 203, '340'),
(38, 17, 6, '', 'Meru ', 'Samburu', '0000-00-00', '2014-11-14', 4, '07:00:00', 203, '340'),
(37, 17, 10, 'KCA 900', 'Kisumu', 'Nairobi', '2014-11-03', '2014-11-18', 1, '17:00:00', 204, '344'),
(36, 17, 4, 'LDWR-JUBA', 'Lodwar', 'Juba', '0000-00-00', '2014-11-06', 4, '17:00:00', 203, '340'),
(35, 17, 4, 'LDWR-JUBA', 'Lodwar', 'Juba', '0000-00-00', '2014-11-06', 7, '17:00:00', 203, '340'),
(40, 17, 10, 'KSM 342X', 'Kisumu', 'Mombasa', '0000-00-00', '2014-11-17', 3, '09:00:00', 543, '440'),
(41, 17, 10, 'KSM 342X', 'Kisumu', 'Mombasa', '0000-00-00', '2014-11-17', 4, '09:00:00', 543, '440'),
(31, 17, 20, 'Ahm-Jpr', 'Ahmedabad', 'Jaipur', '0000-00-00', '2014-10-24', 3, '12:00:00', 533, '448'),
(32, 17, 20, 'Ahm-Jpr', 'Ahmedabad', 'Jaipur', '0000-00-00', '2014-10-24', 4, '12:00:00', 533, '448'),
(33, 17, 17, 'Mumbai-Pune', 'Mumbai', 'Pune', '0000-00-00', '2014-10-28', 3, '09:00:00', 240, '140');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
