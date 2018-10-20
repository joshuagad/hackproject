-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2018 at 03:01 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(11) NOT NULL auto_increment,
  `status` int(11) NOT NULL,
  `suspect_name` varchar(40) NOT NULL,
  `victim_name` varchar(40) NOT NULL,
  `latitude` decimal(40,0) NOT NULL,
  `longitude` decimal(40,0) NOT NULL,
  `image` varchar(40) NOT NULL,
  `video` varchar(40) NOT NULL,
  `witness_name` varchar(40) NOT NULL,
  `witness_number` int(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY  (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `report`
--

