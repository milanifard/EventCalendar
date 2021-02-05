-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2021 at 12:17 PM
-- Server version: 5.7.28
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_create_event`
--

DROP TABLE IF EXISTS `calendar_create_event`;
CREATE TABLE IF NOT EXISTS `calendar_create_event` (
  `create_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`create_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_days`
--

DROP TABLE IF EXISTS `calendar_days`;
CREATE TABLE IF NOT EXISTS `calendar_days` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_completeDate` date DEFAULT NULL,
  `day_specifiedMonth` int(11) DEFAULT NULL,
  `day_specifiedYear` int(11) DEFAULT NULL,
  `day_specifiedDay` int(11) DEFAULT NULL,
  `day_isHoliday` int(11) DEFAULT '0',
  `day_event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

DROP TABLE IF EXISTS `calendar_events`;
CREATE TABLE IF NOT EXISTS `calendar_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `event_type` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `event_description` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_priority` int(11) DEFAULT '2',
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_documents`
--

DROP TABLE IF EXISTS `calendar_event_documents`;
CREATE TABLE IF NOT EXISTS `calendar_event_documents` (
  `event_id` int(11) DEFAULT NULL,
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_content` mediumblob,
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_tasks`
--

DROP TABLE IF EXISTS `calendar_tasks`;
CREATE TABLE IF NOT EXISTS `calendar_tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_title` varchar(45) COLLATE utf8_persian_ci DEFAULT 'No_title',
  `task_description` varchar(100) COLLATE utf8_persian_ci DEFAULT 'No description',
  `task_specified_user_id` int(11) NOT NULL,
  `task_specified_event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_users`
--

DROP TABLE IF EXISTS `calendar_users`;
CREATE TABLE IF NOT EXISTS `calendar_users` (
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
