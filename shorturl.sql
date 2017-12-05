-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2017 at 07:55 PM
-- Server version: 10.0.17-MariaDB-log
-- PHP Version: 5.4.41

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorturl_settings`
--

CREATE TABLE IF NOT EXISTS `shorturl_settings` ( 
  `last_number` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `last_number` (`last_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorturl_settings`
--

INSERT INTO `shorturl_settings` (`last_number`) VALUES
(145),
(145);

-- --------------------------------------------------------

--
-- Table structure for table `shorturl_urls`
--
CREATE TABLE IF NOT EXISTS `shorturl_urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `alias` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `st` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
