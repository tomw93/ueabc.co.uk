-- phpMyAdmin SQL Dump
-- version 3.3.1
-- http://www.phpmyadmin.net
--
-- Host: 10.168.1.54
-- Generation Time: Dec 18, 2013 at 10:30 PM
-- Server version: 5.5.28
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ueabccou_ueabc`
--

-- --------------------------------------------------------

--
-- Table structure for table `allumini`
--

CREATE TABLE IF NOT EXISTS `allumini` (
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allumini`
--

INSERT INTO `allumini` (`email`) VALUES
('keilahline@yahoo.co.uk'),
('signup@email.com'),
('tomwilkins93@hotmail.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(200) DEFAULT NULL,
  `userType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `userpassword`, `userType`) VALUES
('charliebeech@ueabc', '0af65876e34821af64d75630419942a9', 'rower'),
('committee@ueabc', 'fec84ed288e1fdd385fd841f989b123d', 'committee'),
('mens@ueabc', '93a944b906cdc969be7203ebe8207ad8', 'mens'),
('test', '098f6bcd4621d373cade4e832627b4f6', 'rower'),
('tomhesse@ueabc', '162acbfbff3ad95c22913bfbbd01ad5c', 'rower'),
('tomwilkins@ueabc', '48b05eb4f9adb73b58b053db99248365', 'admin'),
('womens@ueabc', 'c09b0affe742d54bb7b45e526cef9fda', 'womens');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `imageID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `dateTaken` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`imageID`),
  UNIQUE KEY `imageID` (`imageID`),
  KEY `username_idx` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`imageID`, `username`, `name`, `url`, `dateTaken`, `type`, `approved`) VALUES
(7, 'tomwilkins@ueabc', 'Erg Room', 'the-ergos.jpg', '2013-04-22', 'training', 1),
(8, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta1-2013.jpg', '2013-05-04', 'race', 1),
(9, 'tomwilkins@ueabc', 'Norwich Head 2013', 'NorwichHead1-2013.jpg', '2013-04-22', 'race', 1),
(10, 'tomwilkins@ueabc', 'Coxing', 'Coxing1.jpg', '2013-04-22', 'training', 1),
(11, 'tomwilkins@ueabc', 'Coxing', 'Coxing2.jpg', '2013-04-22', 'training', 1),
(12, 'tomwilkins@ueabc', 'Coxing', 'Coxing3.jpg', '2013-04-22', 'training', 1),
(13, 'tomwilkins@ueabc', 'Coxing', 'Coxing4.jpg', '2013-04-22', 'training', 1),
(14, 'tomwilkins@ueabc', 'Winter Ball', 'WinterBall1-2012.jpg', '2012-12-09', 'socialEvents', 1),
(24, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta2-2013.jpg', '2013-05-04', 'race', 1),
(25, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta3-2013.jpg', '2013-05-04', 'race', 1),
(26, 'tomwilkins@ueabc', 'BUCs Regatta 2013 - Beginner 4', 'BUCSRegatta4-2013.jpg', '2013-05-04', 'race', 1),
(27, 'tomwilkins@ueabc', 'BUCs Regatta 2013 - Beginner 8', 'BUCSRegatta5-2013.jpg', '2013-05-04', 'race', 1),
(28, 'tomwilkins@ueabc', 'BUCs Regatta 2013 - Intermediate 8', 'BUCSRegatta6-2013.jpg', '2013-05-04', 'race', 1),
(29, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta8-2013.jpg', '2013-05-04', 'race', 1),
(30, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta9-2013.jpg', '2013-05-04', 'race', 1),
(31, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta10-2013.jpg', '2013-05-04', 'race', 1),
(33, 'tomwilkins@ueabc', 'Intermediate 4', 'Senior4Training1-2013.jpg', '2013-04-22', 'training', 1),
(34, 'tomwilkins@ueabc', 'Intermediate 4', 'Senior4Training2-2013.jpg', '2013-04-22', 'training', 1),
(35, 'tomwilkins@ueabc', 'Intermediate 4', 'Senior4Training3-2013.jpg', '2013-04-22', 'training', 1),
(36, 'tomwilkins@ueabc', 'Training Camp', 'TrainingCamp1-2013.jpg', '2013-03-25', 'training', 1),
(37, 'tomwilkins@ueabc', 'Training Camp', 'TrainingCamp3-2013.jpg', '2013-03-25', 'training', 1),
(38, 'tomwilkins@ueabc', 'Training Camp', 'TrainingCamp4-2013.jpg', '2013-03-25', 'training', 1),
(39, 'tomwilkins@ueabc', 'Winter Training', 'WinterTraining1.jpg', '2013-01-09', 'training', 1),
(40, 'tomwilkins@ueabc', 'Derby Day', 'DerbyDay1-2013.jpg', '2013-03-13', 'socialEvents', 1),
(41, 'tomwilkins@ueabc', 'Derby Day', 'DerbyDay2-2013.jpg', '2013-03-13', 'socialEvents', 1),
(42, 'tomwilkins@ueabc', 'Derby Day', 'DerbyDay3-2013.jpg', '2013-03-13', 'socialEvents', 1),
(43, 'tomwilkins@ueabc', 'Derby Day', 'DerbyDay4-2013.jpg', '2013-03-13', 'socialEvents', 1),
(44, 'tomwilkins@ueabc', 'Derby Day', 'DerbyDay5-2013.jpg', '2013-03-13', 'socialEvents', 1),
(45, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay1-2012.jpg', '2012-12-01', 'socialEvents', 1),
(46, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay2-2012.jpg', '2012-12-01', 'socialEvents', 1),
(47, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay3-2012.jpg', '2012-12-01', 'socialEvents', 1),
(48, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay4-2012.jpg', '2012-12-01', 'socialEvents', 1),
(49, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay5-2012.jpg', '2012-12-01', 'socialEvents', 1),
(50, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay6-2012.jpg', '2012-12-01', 'socialEvents', 1),
(51, 'tomwilkins@ueabc', 'Allumini Day', 'AlluminiDay7-2012.jpg', '2012-12-01', 'socialEvents', 1),
(53, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta11-2013.jpg', '2013-05-04', 'race', 1),
(54, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta12-2013.jpg', '2013-05-04', 'race', 1),
(55, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta13-2013.jpg', '2013-05-04', 'race', 1),
(56, 'tomwilkins@ueabc', 'BUCs Regatta 2013', 'BUCSRegatta14-2013.jpg', '2013-05-04', 'race', 1),
(57, 'tomwilkins@ueabc', 'Cambridge Winter Head 2012', 'CambridgeWinterHead1-2012.jpg', '2012-11-17', 'race', 1),
(58, 'tomwilkins@ueabc', 'Cambridge Winter Head 2012', 'CambridgeWinterHead2-2012.jpg', '2012-11-17', 'race', 1),
(59, 'tomwilkins@ueabc', 'Cambridge Winter Head 2012', 'CambridgeWinterHead3-2012.jpg', '2012-11-17', 'race', 1),
(60, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta1-2013.jpg', '2013-05-11', 'race', 1),
(61, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta2-2013.jpg', '2013-05-11', 'race', 1),
(62, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta3-2013.jpg', '2013-05-11', 'race', 1),
(63, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta4-2013.jpg', '2013-05-11', 'race', 1),
(64, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta5-2013.jpg', '2013-05-11', 'race', 1),
(65, 'tomwilkins@ueabc', 'Bedford Regatta 2013', 'BedfordRegatta6-2013.jpg', '2013-05-11', 'race', 1),
(66, 'tomwilkins@ueabc', 'Peterborough Regatta 2013', 'Peterborough 2013-1.jpg', '2013-06-01', 'race', 1),
(67, 'tomwilkins@ueabc', 'Peterborough Regatta 2013', 'Peterborough 2013-2.jpg', '2013-06-01', 'race', 1),
(68, 'tomwilkins@ueabc', 'Met Regatta 2013', 'met 2013-1.jpg', '2013-06-01', 'race', 1),
(69, 'tomwilkins@ueabc', 'Met Regatta 2013', 'met 2013-2.jpg', '2013-06-01', 'race', 1),
(70, 'tomwilkins@ueabc', 'Norfolk Sculls - Learn To Row Four', 'NorfolkSculls1-2013.JPG', '2013-11-02', 'race', 1),
(71, 'tomwilkins@ueabc', 'Norfolk Sculls - Learn To Row Four', 'NorfolkSculls2-2013.JPG', '2013-11-02', 'race', 1),
(72, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls3-2013.JPG', '2013-11-02', 'race', 1),
(73, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls4-2013.JPG', '2013-11-02', 'race', 1),
(74, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls5-2013.JPG', '2013-11-02', 'race', 1),
(75, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls6-2013.JPG', '2013-11-02', 'race', 1),
(76, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls7-2013.JPG', '2013-11-02', 'race', 1),
(77, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls8-2013.JPG', '2013-11-02', 'race', 1),
(78, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls9-2013.JPG', '2013-11-02', 'race', 1),
(79, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls10-2013.JPG', '2013-11-02', 'race', 1),
(80, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls11-2013.JPG', '2013-11-02', 'race', 1),
(81, 'tomwilkins@ueabc', 'Norfolk Sculls - Senior Four', 'NorfolkSculls12-2013.JPG', '2013-11-02', 'race', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rower`
--

CREATE TABLE IF NOT EXISTS `rower` (
  `username` varchar(20) NOT NULL,
  `fullName` varchar(30) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rower`
--


-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `videoID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  PRIMARY KEY (`videoID`),
  UNIQUE KEY `videoID` (`videoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoID`, `name`, `url`, `dateAdded`) VALUES
(1, 'Cambridge Winter Head 2nd Beginner 8 2012', 'http://www.youtube.com/embed/TgNQI-ylOSY', '2012-11-17'),
(2, 'Cambridge Winter Head Beginner 8 2012', 'http://www.youtube.com/embed/yBu-i7sHe_Y', '2012-11-17'),
(3, 'Cambridge Winter Head Senior 4 2012', 'http://www.youtube.com/embed/BT2S9U7j8c4', '2012-11-17'),
(4, 'Cambridge Winter Head 2nd Senior 8 2012 ', 'http://www.youtube.com/embed/-5w_ta0esIM', '2012-11-17'),
(5, 'Cambridge Winter Head Senior 8 2012', 'http://www.youtube.com/embed/uXeQRAgqHo8', '2012-11-17'),
(6, 'Bedford Regatta 2013 M NOV 4+', 'http://www.youtube.com/embed/OH6b_2bBMsI', '2013-05-11'),
(7, 'Bedford Regatta 2013 IM3 4+', 'http://www.youtube.com/embed/QQww36vp2y4', '2013-05-11'),
(8, 'Bedford Regatta 2013 NOV 8+', 'http://www.youtube.com/embed/nVNHuJjdypI', '2013-05-11'),
(9, 'Bedford Regatta 2013 NOV 8+ Start', 'http://www.youtube.com/embed/UKiwO_S9a_w', '2013-05-11'),
(10, 'BUCs Head 2013 M Beg 8+', 'http://www.youtube.com/embed/Nr1cTj8Z5QA', '2013-02-16'),
(11, 'BUCs Head 2013 M Int 8+', 'http://www.youtube.com/embed/-QN_ldlnJ9I', '2013-02-16'),
(12, 'BUCs Head 2013 M Int 4+', 'http://www.youtube.com/embed/CX2R051N9nE', '2013-02-16'),
(13, 'Peterborough Regatta 2013 W Nov 4+', 'http://www.youtube.com/embed/b0nbAJUvRhg', '2013-06-01'),
(14, 'Peterborough Regatta 2013 W Nov 8+', 'http://www.youtube.com/embed/H-PUAS14dks', '2013-06-01'),
(15, 'Peterborough Regatta 2013 M IM3 8+', 'http://www.youtube.com/embed/eax0F00Fsys', '2013-06-01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
