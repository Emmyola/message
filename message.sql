-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2020 at 05:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_message`
--

DROP TABLE IF EXISTS `post_message`;
CREATE TABLE IF NOT EXISTS `post_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(225) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_message`
--

INSERT INTO `post_message` (`id`, `roles`, `comment`) VALUES
(10, 'Field Staff', '   me and you'),
(11, 'Head Q. Staff', 'Wishing you a season filled with warm moments and cherished memories. Warmest thoughts and Best wishes for a wonderful Holiday and a very Happy New Year. Holiday Greetings and Best wishes for a New Year of Happiness in a World of Peace. The gift of love, the gift of peace, the gift of happinessâ€¦                    '),
(12, 'Head Q. Staff', '  Wishing you a season filled with warm moments and cherished memories. Warmest thoughts and Best wishes for a wonderful Holiday and a very Happy New Year. Holiday Greetings and Best wishes for a New Year of Happiness in a World of Peace. The gift of love, the gift of peace, the gift of happinessâ€¦                  '),
(13, 'Head Q. Staff', '  automation login system with sessions'),
(14, 'Field Staff', '           automation login system with sessions         '),
(15, 'Field Staff', 'you are welcome');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
