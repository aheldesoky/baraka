-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2011 at 05:41 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baraka`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(4) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(300) NOT NULL,
  `client_address` varchar(1000) NOT NULL,
  `client_email` varchar(300) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='This table of clients data' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_address`, `client_email`) VALUES
(1, '????? ??????????', '5 el5olafa2', 'nasr_chem@yahoo.com'),
(2, '????? ?????????? 2', 'hjujyuhh', 'nasr_chem2@yahoo.com'),
(3, '????? ?????????? 3', '?????????????', 'nasr_chem3@yahoo.com'),
(4, 'النصر للكيماويات 4', 'اترلاغتعرل', 'nasr_chem4@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `trans_id` int(5) NOT NULL,
  `client_id` int(5) NOT NULL,
  `trans_from` varchar(200) CHARACTER SET latin1 NOT NULL,
  `trans_to` varchar(200) CHARACTER SET latin1 NOT NULL,
  `trans_value` int(10) NOT NULL,
  `trans_expenses` int(10) NOT NULL,
  `tِrans_agent` int(10) NOT NULL,
  `trans_payed` int(10) NOT NULL,
  `trans_date` date NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This table of transports data';

--
-- Dumping data for table `transport`
--


-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE IF NOT EXISTS `truck` (
  `car_id` int(5) NOT NULL,
  `car_no` varchar(10) CHARACTER SET latin1 NOT NULL,
  `car_type` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This table of trucks data';

--
-- Dumping data for table `truck`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(1) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(100) NOT NULL DEFAULT 'Khaled',
  `last_name` varchar(100) NOT NULL DEFAULT 'Khaled',
  `role` enum('normal','super') CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='accounts who have permission to login to the system';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `role`) VALUES
(0, 'ahmed', 'e10adc3949ba59abbe56e057f20f883e', 'Ahmed', 'Eldesouky', 'super');
