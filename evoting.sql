-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 05:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--
CREATE DATABASE IF NOT EXISTS `evoting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evoting`;

-- --------------------------------------------------------

--
-- Table structure for table `goverment_users`
--

CREATE TABLE `goverment_users` (
  `gu_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goverment_users`
--

INSERT INTO `goverment_users` (`gu_id`, `name`, `email`, `username`, `password`, `created`) VALUES
(1, 'rockin', 'rockin@rockin.com', 'rockin', '123', '2017-04-26 16:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `governorship_candidates`
--

CREATE TABLE `governorship_candidates` (
  `gc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(50) NOT NULL,
  `party` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `governorship_votes`
--

CREATE TABLE `governorship_votes` (
  `gv_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(50) NOT NULL,
  `party` varchar(100) NOT NULL,
  `v_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presidential_votes`
--

CREATE TABLE `presidential_votes` (
  `pv_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(50) NOT NULL,
  `party` varchar(100) NOT NULL,
  `v_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presidential_candidates`
--

CREATE TABLE `presidential_candidates` (
  `pc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(50) NOT NULL,
  `party` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `v_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `age` int(3) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `election_district` varchar(20) NOT NULL,
  `election_id` bigint(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gvoted` int(2) NOT NULL,
  `pvoted` int(2) NOT NULL,
  `approved` int(2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`v_id`, `firstname`, `lastname`, `sex`, `age`, `address1`, `address2`, `state`, `country`, `phone`, `email`, `election_district`, `election_id`, `occupation`, `username`, `password`, `gvoted`, `pvoted`, `approved`, `created`) VALUES
(1, 'Rockin', 'MAT', 'Male', 21, 'asdfghg', ';lkjhj', 'TN', 'India', 9025923103, 'mat@mat.com', 'mdu', 123456789, 'Student', 'mat', '123', 1, 1, 1, '2017-04-26 15:21:34'),
(2, 'Rockin', 'MAT', 'Male', 21, '123456789', '123456789', 'TN', 'India', 9025923103, 'rockin#mat.com', 'mdu', 123456789, 'teacher', 'rockin', '123', 1, 1, 1, '2017-04-27 03:43:47');

-- --------------------------------------------------------