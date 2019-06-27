
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: mysql-003.isqsolutions.com
-- Generation Time: Jun 19, 2019 at 10:39 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarayajade`
--

-- --------------------------------------------------------

--
-- Table structure for table `rtp2k`
--

CREATE TABLE IF NOT EXISTS `rtp2k` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `sNum` varchar(50) NOT NULL,
  `a1` varchar(1) DEFAULT NULL,
  `a2` varchar(70) DEFAULT NULL,
  `howhearother` varchar(255) DEFAULT NULL,
  `a3` varchar(1) DEFAULT NULL,
  `a4` varchar(1) DEFAULT NULL,
  `reasonother` varchar(255) DEFAULT NULL,
  `a5` text,
  `subscribed` varchar(3) DEFAULT NULL,
  `signupDate` datetime NOT NULL,
  `day1` varchar(1) DEFAULT NULL,
  `day2` varchar(1) DEFAULT NULL,
  `day4` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rtp2k`
--

INSERT INTO `rtp2k` (`id`, `firstName`, `lastName`, `emailAddress`, `sNum`, `a1`, `a2`, `howhearother`, `a3`, `a4`, `reasonother`, `a5`, `subscribed`, `signupDate`, `day1`, `day2`, `day4`) VALUES
(1, 'allen', 'gaynor', 'theallengaynor@gmail.com', '683979746198248103985236247119125246299', 'a', 'e, f, g, n, o', 'Other means', '8', 'e', 'I am afraid of clowns', 'With some creative roster work, the Florida Panthers could be the ideal landing spot for Panarin and Bobrovsky and go from close to the playoffs to real contenders.\r\n\r\nPanarin and Bobrovsky played together with the Blue Jackets for two seasons and are hitting free agency at the same time.', 'yes', '2019-06-18 00:00:00', 'y', 'y', 'y'),
(2, 'allen', 'gaynor', 'theallengaynor2@gmail.com', '621969443396778103375453614659125229799', 'b', 'c, h, m', '', '6', 'c', '', '5', 'no', '2019-06-18 00:00:00', 'n', 'n', 'y'),
(3, 'allen', 'gaynor', 'theallengaynor3@gmail.com', '622187965431497103778456484229125234532', 'b', 'c, h, m', '', '6', 'c', '', '5', 'no', '2019-06-18 00:00:00', 'y', 'n', 'n'),
(4, 'allen', 'gaynor', 'theallengaynor5@gmail.com', '491544232614279665253413532694534632', 'c', '', '', '7', 'b', '', '', 'yes', '2019-06-18 00:00:00', 'n', 'n', 'n'),
(5, 'allen', 'gaynor', 'theallengaynor6@gmail.com', '512738495244633665844267624154536668252', 'c', '', '', '7', 'b', '', '54656565', 'yes', '2019-06-18 00:00:00', 'n', 'y', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
