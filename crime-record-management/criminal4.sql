-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 06:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `criminal4`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimecategory`
--
create database criminal4;
use criminal4;
CREATE TABLE IF NOT EXISTS `crimecategory` (
  `crimecategoryid` int(5) NOT NULL AUTO_INCREMENT,
  `crimecategoryname` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`crimecategoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crimecategory`
--

INSERT INTO `crimecategory` (`crimecategoryid`, `crimecategoryname`, `description`) VALUES
(2, 'ragging', 'misbehaviour');

-- --------------------------------------------------------

--
-- Table structure for table `criminaltransfer`
--

CREATE TABLE IF NOT EXISTS `criminaltransfer` (
  `transferid` int(5) NOT NULL AUTO_INCREMENT,
  `criminalid` int(5) DEFAULT NULL,
  `criminalname` varchar(30) DEFAULT NULL,
  `transferfrom` varchar(30) DEFAULT NULL,
  `transferto` varchar(30) DEFAULT NULL,
  `transferdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`transferid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `criminaltransfer`
--

INSERT INTO `criminaltransfer` (`transferid`, `criminalid`, `criminalname`, `transferfrom`, `transferto`, `transferdate`) VALUES
(2, 1, 'abhimanyu', 'bhopal', 'rewa jail', '2015-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meetingid` int(5) NOT NULL AUTO_INCREMENT,
  `criminalid` int(5) DEFAULT NULL,
  `outsiderid` int(5) DEFAULT NULL,
  `outsidername` varchar(30) DEFAULT NULL,
  `meetingpurpose` varchar(30) DEFAULT NULL,
  `meetingtime` varchar(30) DEFAULT NULL,
  `meetingdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`meetingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meetingid`, `criminalid`, `outsiderid`, `outsidername`, `meetingpurpose`, `meetingtime`, `meetingdate`) VALUES
(1, 1, 1, 'ashok', 'important talk', '02:00', '2015-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `newcriminal`
--

CREATE TABLE IF NOT EXISTS `newcriminal` (
  `criminalid` int(5) NOT NULL AUTO_INCREMENT,
  `criminalname` varchar(30) DEFAULT NULL,
  `cimage` longtext,
  `crimetype` varchar(30) DEFAULT NULL,
  `crimedesc` varchar(30) DEFAULT NULL,
  `crimedate` varchar(30) DEFAULT NULL,
  `crimetime` varchar(30) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `bloodgroup` varchar(30) DEFAULT NULL,
  `retinascan` longtext,
  `dnainformation` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`criminalid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newcriminal`
--

INSERT INTO `newcriminal` (`criminalid`, `criminalname`, `cimage`, `crimetype`, `crimedesc`, `crimedate`, `crimetime`, `nationality`, `address`, `sex`, `contact`, `age`, `bloodgroup`, `retinascan`, `dnainformation`) VALUES
(1, 'bcn', 'criminalsimage/facts.png', 'jdkd', 'mdm', '2015-04-14', '14:01', 'indian', 'ufid', 'male', '93892922', '25', 'A', 'criminalsimage/year-edit.jpg', 'nvcd'),
(2, 'nishant', 'criminalsimage/year-edit.jpg', 'ragging', 'misbehaviour', '2015-04-01', '13:06', 'indian', 'jdd', 'male', '9383902021', '23', 'A', 'criminalsimage/offer.png', 'fmdk');

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE IF NOT EXISTS `siteuser` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `serviceexperience` varchar(30) DEFAULT NULL,
  `servicedescription` varchar(100) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `hintq` varchar(255) DEFAULT NULL,
  `hinta` varchar(255) DEFAULT NULL,
  `emailadd` varchar(50) DEFAULT NULL,
  `smsno` varchar(15) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`username`, `pwd`, `dob`, `serviceexperience`, `servicedescription`, `gender`, `hintq`, `hinta`, `emailadd`, `smsno`, `role`) VALUES
('admin', 'admin', '1989-12-04', '4 Year', 'Administrator', 'male', 'name', 'admin', 'admin@gmail.com', '8602768216', 'admin'),
('cbi', 'cbi', '1990-12-05', '2 Year', 'cbi', 'male', 'name', 'cbi', 'cbiofficer@gmail.com', '9229465037', 'CBI_Officer'),
('officer', 'officer', '1990-12-05', '2 Year', 'Superintendent', 'male', 'name', 'officer', 'officer@gmail.com', '9229465037', 'public'),
('pankaj', 'pankaj', '1990-12-05', '3 Year', 'Superintendent', 'male', 'name', 'pankaj', 'pankaj@gmail.com', '9229465037', 'Jail_SuperIntendent'),
('police', 'police', '1990-12-05', '2 Year', 'Superintendent', 'male', 'name', 'piyush', 'piyush@gmail.com', '9229465037', 'Police_Officers'),
('pradeep', 'pradeep', '1992-04-27', '2 Years', 'mdd', 'male', 'name', 'pradeep', 'p@gmail.com', '75848922', 'CBI_Officer');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `workid` int(5) NOT NULL AUTO_INCREMENT,
  `criminalid` int(5) DEFAULT NULL,
  `criminalname` varchar(30) DEFAULT NULL,
  `workassign` varchar(30) DEFAULT NULL,
  `workstartdate` varchar(30) DEFAULT NULL,
  `salary` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`workid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`workid`, `criminalid`, `criminalname`, `workassign`, `workstartdate`, `salary`) VALUES
(1, 1, 'apoorv', 'labour', '2015-04-07', '3000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
