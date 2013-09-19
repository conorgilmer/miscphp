-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 03:20 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(6) NOT NULL AUTO_INCREMENT,
  `cinema_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` VALUES(1, 'Savoy');
INSERT INTO `cinema` VALUES(2, 'Screen');
INSERT INTO `cinema` VALUES(3, 'Lighthouse');
INSERT INTO `cinema` VALUES(4, 'UCG');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_x_movies`
--

CREATE TABLE `cinema_x_movies` (
  `cinema_id` int(6) DEFAULT NULL,
  `movie_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema_x_movies`
--

INSERT INTO `cinema_x_movies` VALUES(1, 1);
INSERT INTO `cinema_x_movies` VALUES(1, 2);
INSERT INTO `cinema_x_movies` VALUES(2, 1);
INSERT INTO `cinema_x_movies` VALUES(2, 3);
INSERT INTO `cinema_x_movies` VALUES(3, 3);
INSERT INTO `cinema_x_movies` VALUES(3, 4);
INSERT INTO `cinema_x_movies` VALUES(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(6) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` VALUES(1, 'Rush');
INSERT INTO `movies` VALUES(2, 'Sideways');
INSERT INTO `movies` VALUES(3, 'Karate Kid');
INSERT INTO `movies` VALUES(4, 'Back to the Future');

