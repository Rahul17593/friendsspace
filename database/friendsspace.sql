-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 04:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friendsspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `photoid` int(11) NOT NULL AUTO_INCREMENT,
  `albumpic` varchar(512) NOT NULL,
  `username` varchar(512) NOT NULL,
  `pictext` longtext NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`photoid`, `albumpic`, `username`, `pictext`) VALUES
(20, '1436804089.jpg', 'robin', ' robin pic 1'),
(21, '1436804125.jpg', 'robin', ' robin pic2'),
(22, '1436844808.jpg', 'robin', ' pic3'),
(23, '1436845024.jpg', 'robin', ' pic3');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `feeddate` varchar(20) NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feedid`, `fromuser`, `touser`, `text`, `feeddate`) VALUES
(116, 'robin', 'don', 'hey don,I am robin', '2015-07-13 18:41:39'),
(117, 'don', 'robin', 'hey robin,Donot write on my wall', '2015-07-13 18:44:42'),
(118, 'don', 'robin', 'Have yo watched Jurrasic woric world ?', '2015-07-13 18:45:17'),
(119, 'robin', 'don', 'ok..But Yeah...I have watched jurrasic world. Its good movie', '2015-07-13 18:47:08'),
(120, 'aditi', 'robin', 'hey robin...I am aditi', '2015-07-13 19:37:50'),
(121, 'robin', 'aditi', 'hi aditi...its robin...nice meeting u', '2015-07-13 19:38:56'),
(122, 'robin', 'binod', 'hey binode...its robin...nice to meet u', '2015-07-14 03:22:28'),
(123, 'binod', 'robin', 'hey robin...i am binod...have u seen the new movie ?', '2015-07-14 03:23:58'),
(124, 'robin', 'subir', 'itsme robin', '2015-07-14 04:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `status` enum('waiting','accept','rejected','deleted') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=244 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `fromuser`, `touser`, `status`) VALUES
(238, 'robin', 'don', 'accept'),
(239, 'robin', 'abir', 'waiting'),
(240, 'robin', 'jibon', 'accept'),
(241, 'robin', 'aditi', 'accept'),
(242, 'robin', 'binod', 'accept'),
(243, 'binod', 'don', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `interest` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`interest`) VALUES
('Arts and crafts'),
('Baseball'),
('Basketball'),
('Blogging'),
('Boot camps'),
('Bungee jumping'),
('Church'),
('Circuit training'),
('Computer gaming'),
('Computers'),
('Cooking'),
('Cycling'),
('Dancing'),
('Fishing'),
('Fitness classes'),
('Football'),
('Gardening'),
('Geo-caching'),
('Golf'),
('Group fitness classes'),
('Hockey'),
('Hunting'),
('Jogging'),
('Karate'),
('Kick-boxing'),
('Knitting'),
('Motorcycling'),
('Movies'),
('Music'),
('Nightlife'),
('Parachuting'),
('Photography'),
('Poker'),
('Reading'),
('Running'),
('Scuba diving'),
('Sewing'),
('Singing'),
('Snow Skiing'),
('Soccer'),
('Softball'),
('Tae kwan do'),
('Tennis'),
('Theater'),
('Traveling'),
('Volleyball'),
('Volunteer work'),
('Walking'),
('Waterskiing'),
('Weight-training'),
('Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meeting` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting`) VALUES
('New Friends'),
('Dating'),
('Similar Interest Groups');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(512) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `interests` varchar(5000) NOT NULL,
  `meeting` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `statusmsg` varchar(1000) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `address`, `email`, `username`, `password`, `interests`, `meeting`, `status`, `picture`, `room`, `statusmsg`) VALUES
(173, 'robin', '', 'robin@gmail.com', 'robin', 'robin123', 'Arts and crafts , Baseball , Basketball', 'Dating', 'Single', 'a2.jpg', '1', '      its a sunny morning today                      '),
(174, 'Akash Das', '', 'akash@gmail.com', 'akash', 'panga123', 'Football', 'Dating', 'Single', '1436786066.jpg', '1', ''),
(175, 'Subir pal', '', 'subir@gmail.com', 'subir', 'panga123', 'Blogging', 'New Friends', 'Single', '1436786187.jpg', '1', ''),
(176, 'Palash sen', '', 'palash@yahoo.com', 'palash', 'panga123', 'Church', 'New Friends', 'Single', '1436786262.gif', '1', ''),
(177, 'Abir das', '', 'abir@yahoo.com', 'abir', '12345', 'Golf', 'Similar Interest Groups', 'Married', '1436786308.jpg', '1', ''),
(178, 'Atanu das', '', 'atanu@gmail.com', 'atanu', 'panga123', 'Kick-boxing', 'Dating', 'Single', '1436786361.JPG', '1', ''),
(179, 'tanmay pal', '', 'tanmay@gmail.com', 'tanmay', 'panga123', 'Computers', 'Similar Interest Groups', 'In a Relationship', '1436786419.jpg', '1', ''),
(180, 'Tapas Kalu', '', 'tapas@gmail.com', 'tapas', 'panga123', 'Football', 'New Friends', 'Single', '1436786501.jpg', '1', ''),
(181, 'Debdeep Mallick', '', 'debdeep@tango.com', 'debdeep', 'panga123', 'Tennis', 'New Friends', 'Single', '1436786639.jpg', '1', ''),
(182, 'Binod Surul', '', 'binod@gmail.com', 'binod', 'panga123', 'Blogging', 'New Friends', 'Single', '1436786688.jpg', '1', ''),
(183, 'Sourabh Ghosh', '', 'sourabh@gmail.com', 'sourabh', 'panga123', 'Hunting', 'New Friends', 'Married', '1436786789.jpg', '1', ''),
(184, 'Aditi Sen', '', 'aditi@gmail.com', 'aditi', 'panga123', 'Fishing , Gardening , Group fitness classes , Hunting , Jogging , Knitting , Music , Scuba diving , Singing , Snow Skiing', 'New Friends', 'Single', '1436787184.jpg', '1', ''),
(185, 'Pushpa Pal', '', 'pushpa@gmail.com', 'pushpa', 'panga123', 'Gardening , Kick-boxing , Knitting , Music', 'New Friends', 'In a Relationship', '1436787261.png', '1', ''),
(186, 'Don Shorma', '', 'don@gmail.com', 'don', 'panga123', 'Dancing , Football , Golf , Walking', 'Dating', 'Single', '1436787319.jpg', '1', '              I am don      '),
(187, 'Jibon Kole', '', 'jibon@gmail.com', 'jibon', 'panga123', 'Hunting , Reading , Softball , Tae kwan do , Traveling', 'New Friends', 'Single', '1436787397.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `mstat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`mstat`) VALUES
('Single'),
('Married'),
('In a Relationship');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
