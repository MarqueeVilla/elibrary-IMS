-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2014 at 10:20 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elims`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `username` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `date` text NOT NULL,
  `toAdminName` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Complain` longtext NOT NULL,
  `isRead` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` VALUES('rohit', 'hjhjh', '2014/04/21 11:27:13 am', 'bulle', 'asdf@asdf.com', 'ghghghg', '');
INSERT INTO `complain` VALUES('qwerty', 'This is a serious note', '2014/05/05 8:57:36 pm', 'admin', 'asd@jk.com', 'This project is about sending and receiving complains to the specified admins in the whole organization.', 'yes');
INSERT INTO `complain` VALUES('qwerty', 'Hey', '2014/05/05 8:59:08 pm', 'cnayak', 'cnayak57@gmail.com', 'Hero k cha halkhabar... Sanchai chau :)', 'yes');
INSERT INTO `complain` VALUES('qwerty', 'Hey', '2014/06/04 10:02:43 pm', 'admin', 'asd@jk.com', 'Hey you\r\nThis is really important', 'yes');
INSERT INTO `complain` VALUES('qwerty', 'About Site Addition', '2014/06/07 9:51:01 am', 'admin', 'asd@jk.com', 'Respected Sir,\r\n\r\nThis message is to inform you that a new site must be added in the respective area.\r\n\r\nGeo-Locaiton: Will send you the details in the email attached\r\nLocation:Taplejung\r\nNo. of clients:58\r\nServer Distribution: Windows NT 2002\r\nOrganisation: Taplejung College of Engineering and Management\r\n\r\nYours Sincerely,\r\nHari Bahadur Sherpa\r\nph no: 987874587\r\nEmail Id: hari_bahadursherpa@outlook.com', 'yes');
INSERT INTO `complain` VALUES('qwerty', 'ss', '2014/06/07 10:18:01 am', 'hhh', 'hhh@hhh', 'sdfsdf\r\n', 'no');
INSERT INTO `complain` VALUES('qwerty', 'sdd', '2014/06/07 10:49:27 am', 'admin', 'asd@jk.com', 'sdsadas', 'yes');
INSERT INTO `complain` VALUES('qwerty', 'Sir', '2014/06/11 2:57:17 pm', 'prabin', 'prabingautam@ku.edu.np', 'Hello', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `districtdr`
--

CREATE TABLE `districtdr` (
  `district` varchar(50) NOT NULL,
  `DR` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districtdr`
--

INSERT INTO `districtdr` VALUES('Jhapa', 'EDR');
INSERT INTO `districtdr` VALUES('Ilam', 'EDR');
INSERT INTO `districtdr` VALUES('Panchthar', 'EDR');
INSERT INTO `districtdr` VALUES('Taplejung', 'EDR');
INSERT INTO `districtdr` VALUES('Morang', 'EDR');
INSERT INTO `districtdr` VALUES('Sunsari', 'EDR');
INSERT INTO `districtdr` VALUES('Bhojpur', 'EDR');
INSERT INTO `districtdr` VALUES('Dhankuta', 'EDR');
INSERT INTO `districtdr` VALUES('Terhathum', 'EDR');
INSERT INTO `districtdr` VALUES('Sankhuwasabha', 'EDR');
INSERT INTO `districtdr` VALUES('Saptari', 'EDR');
INSERT INTO `districtdr` VALUES('Siraha', 'EDR');
INSERT INTO `districtdr` VALUES('Udayapur', 'EDR');
INSERT INTO `districtdr` VALUES('Khotang', 'EDR');
INSERT INTO `districtdr` VALUES('Okhaldhunga', 'EDR');
INSERT INTO `districtdr` VALUES('Solukhumbu', 'EDR');
INSERT INTO `districtdr` VALUES('Dhanusa', 'CDR');
INSERT INTO `districtdr` VALUES('Mahottari', 'CDR');
INSERT INTO `districtdr` VALUES('Sarlahi', 'CDR');
INSERT INTO `districtdr` VALUES('Sindhuli', 'CDR');
INSERT INTO `districtdr` VALUES('Ramechhap', 'CDR');
INSERT INTO `districtdr` VALUES('Dolakha', 'CDR');
INSERT INTO `districtdr` VALUES('Bhaktapur', 'CDR');
INSERT INTO `districtdr` VALUES('Dhading', 'CDR');
INSERT INTO `districtdr` VALUES('Kathmandu', 'CDR');
INSERT INTO `districtdr` VALUES('Kavrepalanchok', 'CDR');
INSERT INTO `districtdr` VALUES('Lalitpur', 'CDR');
INSERT INTO `districtdr` VALUES('Nuwakot', 'CDR');
INSERT INTO `districtdr` VALUES('Rasuwa', 'CDR');
INSERT INTO `districtdr` VALUES('Sindhupalchok', 'CDR');
INSERT INTO `districtdr` VALUES('Bara', 'CDR');
INSERT INTO `districtdr` VALUES('Parsa', 'CDR');
INSERT INTO `districtdr` VALUES('Rautahat', 'CDR');
INSERT INTO `districtdr` VALUES('Chitwan', 'CDR');
INSERT INTO `districtdr` VALUES('Makwanpur', 'CDR');
INSERT INTO `districtdr` VALUES('Gorkha', 'WDR');
INSERT INTO `districtdr` VALUES('Kaski', 'WDR');
INSERT INTO `districtdr` VALUES('Lamjung', 'WDR');
INSERT INTO `districtdr` VALUES('Syangja', 'WDR');
INSERT INTO `districtdr` VALUES('Tanahu', 'WDR');
INSERT INTO `districtdr` VALUES('Manang', 'WDR');
INSERT INTO `districtdr` VALUES('Kapilvastu', 'WDR');
INSERT INTO `districtdr` VALUES('Nawalparasi', 'WDR');
INSERT INTO `districtdr` VALUES('Rupandehi', 'WDR');
INSERT INTO `districtdr` VALUES('Arghakhanchi', 'WDR');
INSERT INTO `districtdr` VALUES('Gulmi', 'WDR');
INSERT INTO `districtdr` VALUES('Palpa', 'WDR');
INSERT INTO `districtdr` VALUES('Baglung', 'WDR');
INSERT INTO `districtdr` VALUES('Myagdi', 'WDR');
INSERT INTO `districtdr` VALUES('Parbat', 'WDR');
INSERT INTO `districtdr` VALUES('Mustang', 'WDR');
INSERT INTO `districtdr` VALUES('Dang Deukhuri', 'MWDR');
INSERT INTO `districtdr` VALUES('Pyuthan', 'MWDR');
INSERT INTO `districtdr` VALUES('Rolpa', 'MWDR');
INSERT INTO `districtdr` VALUES('Rukum', 'MWDR');
INSERT INTO `districtdr` VALUES('Salyan', 'MWDR');
INSERT INTO `districtdr` VALUES('Dolpa', 'MWDR');
INSERT INTO `districtdr` VALUES('Humla', 'MWDR');
INSERT INTO `districtdr` VALUES('Jumla', 'MWDR');
INSERT INTO `districtdr` VALUES('Kalikot', 'MWDR');
INSERT INTO `districtdr` VALUES('Mugu', 'MWDR');
INSERT INTO `districtdr` VALUES('Banke', 'MWDR');
INSERT INTO `districtdr` VALUES('Bardiya', 'MWDR');
INSERT INTO `districtdr` VALUES('Surkhet', 'MWDR');
INSERT INTO `districtdr` VALUES('Dailekh', 'MWDR');
INSERT INTO `districtdr` VALUES('Jajarkot', 'MWDR');
INSERT INTO `districtdr` VALUES('Kailali', 'FWDR');
INSERT INTO `districtdr` VALUES('Achham', 'FWDR');
INSERT INTO `districtdr` VALUES('Doti', 'FWDR');
INSERT INTO `districtdr` VALUES('Bajhang', 'FWDR');
INSERT INTO `districtdr` VALUES('Bajura', 'FWDR');
INSERT INTO `districtdr` VALUES('Kanchanpur', 'FWDR');
INSERT INTO `districtdr` VALUES('Dadeldhura', 'FWDR');
INSERT INTO `districtdr` VALUES('Baitadi', 'FWDR');
INSERT INTO `districtdr` VALUES('Darchula', 'FWDR');

-- --------------------------------------------------------

--
-- Table structure for table `elims_users`
--

CREATE TABLE `elims_users` (
  `userName` varchar(50) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elims_users`
--

INSERT INTO `elims_users` VALUES('sysadmin', 'sysadmin', '48a365b4ce1e322a55ae9017f3daf0c0', 'Hey', 'You', 'hhh@hhh.org', 'male', 'can', '4545', 'asdf');
INSERT INTO `elims_users` VALUES('prabinraz', 'sysadmin', '176226b2d51002d2590f048881560569', 'prabin', 'gautam', 'prabingautam@gmail.com', 'male', '111 gm', '6506198408', 'teacher');
INSERT INTO `elims_users` VALUES('testadmin', 'admin', '9283a03246ef2dacdc21a9b137817ec1', 'Test', 'Admin', 'elims@fossnepal.org', 'male', '100 kathmandu', '0123456789', 'volunteer');
INSERT INTO `elims_users` VALUES('testsysadmin', 'sysadmin', 'f6f10eb1377a4e794adb6b3992c7e8e0', 'Test', 'sysadmin', 'elims@fossnepal.org', 'male', '100 kathmandu', '0123456789', 'volunteer');
INSERT INTO `elims_users` VALUES('testuser', 'user', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'Test', 'user', 'elims@fossnepal.org', 'male', '100 kathmandu', '0123456789', 'volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `site_maps`
--

CREATE TABLE `site_maps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `organisationName` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `contactPerson` varchar(255) NOT NULL,
  `contactNumber` varchar(100) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `clientNumber` int(255) NOT NULL,
  `serverDist` varchar(255) NOT NULL,
  `siteAddedBy` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `site_maps`
--

INSERT INTO `site_maps` VALUES(6, 'Kalinchowk', 27.664867, 86.051582, 'Kalinchowk Higher Secondary Schoolq', '', 'Kusang Sherpa', '98185369548', '', '', 50, 'Linux', '');
INSERT INTO `site_maps` VALUES(12, 'Bharatpur Cancer Hospital', 27.678663, 84.430618, 'Cancer hospital', '', 'Dr. Rajendra Baral', '9851045821', 'rajendra.baral@gmail.com', 'Senior Oncologist', 56, 'Windows Server 2003 with SP1', '');
INSERT INTO `site_maps` VALUES(26, 'Chandan Home', 27.005302, 84.870842, 'Home of Chandan', 'Parsa', 'Chandan Nayak', '9841525698', 'cnayak@yahoo.com', 'Senior Engineer, NTC, Parsa', 58, 'Windows Server 2003 with SP1', 'admin');
INSERT INTO `site_maps` VALUES(27, 'Biratnagar', 26.455820, 87.292557, 'Ganesh Lal Mill', 'Morang', 'Sahu Ganesh Lal', '9851052684', 'sahu@gmail.com', 'Head ', 89, 'WIndows NT 2002', 'admin');
INSERT INTO `site_maps` VALUES(29, 'Kathmandu University', 27.617079, 85.539917, 'KU', 'Kavrepalanchok', 'Ram Kantha Makaju', '9851104512', 'rame@ku.edu.np', 'Vice Chancellor', 85, 'Windows Server 2003 with SP1', 'admin');
INSERT INTO `site_maps` VALUES(31, 'Pokara Airport', 28.197927, 84.053993, 'Pokhara Bimansthal', 'Kaski', 'Heor', '8', 'sdf@hasf.com', 'sdf', 85, 'Windows Server 2003 with SP1', 'admin');
INSERT INTO `site_maps` VALUES(33, 'Darchula NP', 30.185495, 80.950356, 'Bhatte House', 'Darchula', 'Abhishek Bhatta', '9808553841', 'abhishek12@yahoo.com', 'Senior Engineer, Darchula Roads Dept.', 88, 'Windows Server 2003 with SP1', 'admin');
