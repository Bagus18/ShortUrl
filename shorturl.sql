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
  `last_number` bigint(20) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorturl_settings`
--

INSERT INTO `shorturl_settings` (`last_number`) VALUES
(146),
(146);

-- --------------------------------------------------------

--
-- Table structure for table `shorturl_urls`
--

CREATE TABLE IF NOT EXISTS `shorturl_urls` (
  `id` int(10) unsigned NOT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `alias` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `st` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorturl_urls`
--

INSERT INTO `shorturl_urls` (`id`, `url`, `code`, `alias`, `date_added`, `st`) VALUES
(1, 'https://github.com/CollageTomato/ShortUrl', 'src', '', '2017-12-03 19:45:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorturl_settings`
--
ALTER TABLE `shorturl_settings`
  ADD KEY `last_number` (`last_number`);

--
-- Indexes for table `shorturl_urls`
--
ALTER TABLE `shorturl_urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `alias` (`alias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shorturl_urls`
--
ALTER TABLE `shorturl_urls`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
