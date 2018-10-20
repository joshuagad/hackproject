-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2018 at 07:27 AM
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
  `latitude` varchar(40) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `video` varchar(40) NOT NULL,
  `witness_name` varchar(40) NOT NULL,
  `witness_email` varchar(40) NOT NULL,
  `witness_number` int(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY  (`report_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `status`, `suspect_name`, `victim_name`, `latitude`, `longitude`, `image`, `video`, `witness_name`, `witness_email`, `witness_number`, `message`) VALUES
(1, 0, 'kljlksdfjlk', 'lkjfdslkj', '14.690016', '121.118535', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(2, 0, 'kljlksdfjlk', 'lkjfdslkj', '14.678392', '121.038919', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(3, 0, 'kljlksdfjlk', 'lkjfdslkj', '14.555647', '121.078313', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(4, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(5, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(6, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(7, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(8, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(9, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(10, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(11, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(12, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(13, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(14, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(15, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(16, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(17, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf'),
(18, 0, 'kljlksdfjlk', 'lkjfdslkj', '0', '0', '', '', 'asdflkj', 'djsflkj@gmail.com', 2147483647, 'ldkjflksjf');
