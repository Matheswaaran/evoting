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

-- --------------------------------------------------------

--
-- Table structure for table `governorship_candidates`
--

CREATE TABLE `governorship_candidates` (
  `gc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(22) NOT NULL,
  `party` varchar(22) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `governorship_votes`
--

CREATE TABLE `governorship_votes` (
  `gv_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(22) NOT NULL,
  `party` varchar(22) NOT NULL,
  `v_id` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presidential_votes`
--

CREATE TABLE `presidential_votes` (
  `pv_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(29) NOT NULL,
  `party` varchar(6) NOT NULL,
  `v_id` varchar(19) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presidential_candidates`
--

CREATE TABLE `presidential_candidates` (
  `pc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cand_name` varchar(29) NOT NULL,
  `party` varchar(6) NOT NULL,
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------