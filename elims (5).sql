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

CREATE TABLE IF NOT EXISTS `complain` (
  `username` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `date` text NOT NULL,
  `toAdminName` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Complain` longtext NOT NULL,
  `isRead` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`username`, `subject`, `date`, `toAdminName`, `email`, `Complain`, `isRead`) VALUES
('rohit', 'hjhjh', '2014/04/21 11:27:13 am', 'bulle', 'asdf@asdf.com', 'ghghghg', ''),
('qwerty', 'This is a serious note', '2014/05/05 8:57:36 pm', 'admin', 'asd@jk.com', 'This project is about sending and receiving complains to the specified admins in the whole organization.', 'yes'),
('qwerty', 'Hey', '2014/05/05 8:59:08 pm', 'cnayak', 'cnayak57@gmail.com', 'Hero k cha halkhabar... Sanchai chau :)', 'yes'),
('qwerty', 'Hey', '2014/06/04 10:02:43 pm', 'admin', 'asd@jk.com', 'Hey you\r\nThis is really important', 'yes'),
('qwerty', 'About Site Addition', '2014/06/07 9:51:01 am', 'admin', 'asd@jk.com', 'Respected Sir,\r\n\r\nThis message is to inform you that a new site must be added in the respective area.\r\n\r\nGeo-Locaiton: Will send you the details in the email attached\r\nLocation:Taplejung\r\nNo. of clients:58\r\nServer Distribution: Windows NT 2002\r\nOrganisation: Taplejung College of Engineering and Management\r\n\r\nYours Sincerely,\r\nHari Bahadur Sherpa\r\nph no: 987874587\r\nEmail Id: hari_bahadursherpa@outlook.com', 'yes'),
('qwerty', 'ss', '2014/06/07 10:18:01 am', 'hhh', 'hhh@hhh', 'sdfsdf\r\n', 'no'),
('qwerty', 'sdd', '2014/06/07 10:49:27 am', 'admin', 'asd@jk.com', 'sdsadas', 'yes'),
('qwerty', 'Sir', '2014/06/11 2:57:17 pm', 'prabin', 'prabingautam@ku.edu.np', 'Hello', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `districtdr`
--

CREATE TABLE IF NOT EXISTS `districtdr` (
  `district` varchar(50) NOT NULL,
  `DR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districtdr`
--

INSERT INTO `districtdr` (`district`, `DR`) VALUES
('Jhapa', 'EDR'),
('Ilam', 'EDR'),
('Panchthar', 'EDR'),
('Taplejung', 'EDR'),
('Morang', 'EDR'),
('Sunsari', 'EDR'),
('Bhojpur', 'EDR'),
('Dhankuta', 'EDR'),
('Terhathum', 'EDR'),
('Sankhuwasabha', 'EDR'),
('Saptari', 'EDR'),
('Siraha', 'EDR'),
('Udayapur', 'EDR'),
('Khotang', 'EDR'),
('Okhaldhunga', 'EDR'),
('Solukhumbu', 'EDR'),
('Dhanusa', 'CDR'),
('Mahottari', 'CDR'),
('Sarlahi', 'CDR'),
('Sindhuli', 'CDR'),
('Ramechhap', 'CDR'),
('Dolakha', 'CDR'),
('Bhaktapur', 'CDR'),
('Dhading', 'CDR'),
('Kathmandu', 'CDR'),
('Kavrepalanchok', 'CDR'),
('Lalitpur', 'CDR'),
('Nuwakot', 'CDR'),
('Rasuwa', 'CDR'),
('Sindhupalchok', 'CDR'),
('Bara', 'CDR'),
('Parsa', 'CDR'),
('Rautahat', 'CDR'),
('Chitwan', 'CDR'),
('Makwanpur', 'CDR'),
('Gorkha', 'WDR'),
('Kaski', 'WDR'),
('Lamjung', 'WDR'),
('Syangja', 'WDR'),
('Tanahu', 'WDR'),
('Manang', 'WDR'),
('Kapilvastu', 'WDR'),
('Nawalparasi', 'WDR'),
('Rupandehi', 'WDR'),
('Arghakhanchi', 'WDR'),
('Gulmi', 'WDR'),
('Palpa', 'WDR'),
('Baglung', 'WDR'),
('Myagdi', 'WDR'),
('Parbat', 'WDR'),
('Mustang', 'WDR'),
('Dang Deukhuri', 'MWDR'),
('Pyuthan', 'MWDR'),
('Rolpa', 'MWDR'),
('Rukum', 'MWDR'),
('Salyan', 'MWDR'),
('Dolpa', 'MWDR'),
('Humla', 'MWDR'),
('Jumla', 'MWDR'),
('Kalikot', 'MWDR'),
('Mugu', 'MWDR'),
('Banke', 'MWDR'),
('Bardiya', 'MWDR'),
('Surkhet', 'MWDR'),
('Dailekh', 'MWDR'),
('Jajarkot', 'MWDR'),
('Kailali', 'FWDR'),
('Achham', 'FWDR'),
('Doti', 'FWDR'),
('Bajhang', 'FWDR'),
('Bajura', 'FWDR'),
('Kanchanpur', 'FWDR'),
('Dadeldhura', 'FWDR'),
('Baitadi', 'FWDR'),
('Darchula', 'FWDR');

-- --------------------------------------------------------

--
-- Table structure for table `elims_users`
--

CREATE TABLE IF NOT EXISTS `elims_users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elims_users`
--

INSERT INTO `elims_users` (`userName`, `userType`, `password`, `firstName`, `lastName`, `email`, `gender`, `location`, `phoneNumber`, `profession`) VALUES
('', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', ''),
('1234', 'sysadmin', '81dc9bdb52d04dc20036dbd8313ed055', 'asdf', 'asdf', 'asdf@asdf.com', 'male', 'sdf', '1212', 'asdf'),
('a', 'sysadmin', '0cc175b9c0f1b6a831c399e269772661', 'a', 'aa', 'asd@jk.com', 'male', 'adfadf', 'a', 'a'),
('aaaa', 'sysadmin', '74b87337454200d4d33f80c4663dc5e5', 'gaurav', 'thapa', 'asdfasdfasdf', 'male', 'asdfsdf', '46545454', 'asdad'),
('aaoao', 'user', 'b0d08f08e50a9d2d1e716f33a60d0594', 'asdasd', 'sssq', 'sth.rohit@gmail.com', 'male', 'asdfasdf', 'sss', 'sss'),
('aashish', 'user', '79eb66f8a05dd1dc74457e54c7f81721', 'Aashish', 'Dahal', '', '', '', '87', ''),
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Manil', 'Dai', 'asd@jk.com', 'male', 'jkj', '12312sd', 'jkj'),
('asd', 'sysadmin', '0cc175b9c0f1b6a831c399e269772661', 'asdf', 'asdf', 'asd@jk.com', 'male', 'as', '123', 'ZDF'),
('asd1', 'user', '7815696ecbf1c96e6894b779456d330e', 'asd', 'asd', 'asd@jk.com', 'male', 'asd', 'asd', 'asad'),
('asdf', 'sysadmin', '912ec803b2ce49e4a541068d495ab570', 'manil', 'asdf', 'asdf@asdf.com', 'male', 'asedf', '454545', 'asdf'),
('asdfasdf', 'user', '6a204bd89f3c8348afd5c77c717a097a', 'asdfasdf', 'asdfasdf', 'asdf@asdf.com', 'male', 'asdf', 'aasdf', 'asdf'),
('asdfff', 'admin', '912ec803b2ce49e4a541068d495ab570', 'asdasd', 'asdf', 'asdf@fasd', 'male', 'asdfasdf', '444', 'asdf'),
('bulle', 'admin', '21b12a2e1f594ee2d038e301fb7c2ca1', 'Abhirvav', 'Pokharel', 'asdf@asdf.com', 'male', 'asdf', '4545', 'asdf'),
('cnayak', 'admin', 'fec5dac976266dec3abf5321723cd643', 'Chandan', 'Nayak', 'cnayak57@gmail.com', 'male', 'Dhulikhel', '9818640096', 'Student'),
('gaurav', 'user', '29be54a52396750258d886abc5417fda', 'Gaurav ', 'Thapa', 'gt@gmail.com', 'male', 'Dhulikhel', '9849365861', 'Student'),
('hhh', 'admin', 'a3aca2964e72000eea4c56cb341002a4', 'awsw', 'asd', 'hhh@hhh', 'male', 'hhh', '555', 'hhh'),
('kjhkjhjk', 'admin', '74b87337454200d4d33f80c4663dc5e5', 'asdfasdf', 'kjhkjhaf', 'sth.rohit@gmail.com', 'male', 'sfsd', '76677', 'asdfaf'),
('lll', 'sysadmin', 'bf083d4ab960620b645557217dd59a49', 'lll', 'llll', 'jaksdjf@yahoo.com', 'male', 'pppp', '45454', 'asdf'),
('manil', 'sysadmin', 'f22e0f3c00e7a3573f9a5f1ec0c1d7c5', 'Manil', 'Shrestha', 'coolmanil@yahoo.com', 'male', 'Dhulikhel', '9845610555', 'Student'),
('manildon', 'sysadmin', '21232f297a57a5a743894a0e4a801fc3', 'Manil Shrestha', 'Shrestha', 'asd@jk.com', 'male', 'asdf', 'asdfas', 'asdf'),
('mnl', 'user', '036e0b74955355a53662986b3243cc4d', 'Manil', 'Shrestha', 'manil.shrestha2011@gmail.com', 'male', 'Dhulikhel', '9808553841', 'Student'),
('neeschal', 'sysadmin', '79eb66f8a05dd1dc74457e54c7f81721', 'Neeschal', 'Dahal', 'neeschal@yahoo.com', 'male', 'Nala', '984152684', 'Student'),
('prabin', 'admin', '125a77f1085bf9c374f91aee6912863c', 'Prabin', 'Gautam', 'prabingautam@ku.edu.np', 'male', 'Kathmandu', '98511256985', 'Full-time Lecturer, Kathmandu University'),
('qwer', 'admin', '962012d09b8170d912f0669f6d7d9d07', 'qwerty', 'qwerty', 'manil.shrestha2011@gmail.com', 'male', '1212', '12', 'sdf'),
('qwerty', 'user', '962012d09b8170d912f0669f6d7d9d07', 'qwerty', 'qwerty', 'qwer@qwer.fom', 'male', 'qwer', '45645', 'qwer'),
('rohit', 'user', '2d235ace000a3ad85f590e321c89bb99', 'Rohit', 'Shrestha', 'cnayak2547@gmail.com', 'male', 'Dhulikhel', '9819855555', 'Student'),
('sasin', 'user', '42129f6947c434282873dd8adb301e1e', 'Sasin', 'Chand Pradhan', 'sasin9@yahoo.com', 'male', 'Bansbari', '4545454', 'Student'),
('sasin1', 'user', '912ec803b2ce49e4a541068d495ab570', 'Sasin', 'Pradhan', 'asdf@asdf.com', 'male', 'asd', '9841523658', 'asdf'),
('shradha', 'user', '202cb962ac59075b964b07152d234b70', 'Shradha', 'Basnet', 'shradha.basnet35@gmail.com', 'female', 'Biratnagar', '9842361947', 'Student'),
('sss', 'user', '9f6e6800cfae7749eb6c486619254b9c', 'asdasd', 'sssq', 'sth.rohit@gmail.com', 'male', 'asdfasdf', 'sss', 'sss'),
('sysadmin', 'sysadmin', '48a365b4ce1e322a55ae9017f3daf0c0', 'Hey', 'You', 'hhh@hhh.org', 'male', 'can', '4545', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `site_maps`
--

CREATE TABLE IF NOT EXISTS `site_maps` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `site_maps`
--

INSERT INTO `site_maps` (`id`, `name`, `latitude`, `longitude`, `organisationName`, `district`, `contactPerson`, `contactNumber`, `contactEmail`, `designation`, `clientNumber`, `serverDist`, `siteAddedBy`) VALUES
(6, 'Kalinchowk', 27.664867, 86.051582, 'Kalinchowk Higher Secondary Schoolq', '', 'Kusang Sherpa', '98185369548', '', '', 50, 'Linux', ''),
(12, 'Bharatpur Cancer Hospital', 27.678663, 84.430618, 'Cancer hospital', '', 'Dr. Rajendra Baral', '9851045821', 'rajendra.baral@gmail.com', 'Senior Oncologist', 56, 'Windows Server 2003 with SP1', ''),
(26, 'Chandan Home', 27.005302, 84.870842, 'Home of Chandan', 'Parsa', 'Chandan Nayak', '9841525698', 'cnayak@yahoo.com', 'Senior Engineer, NTC, Parsa', 58, 'Windows Server 2003 with SP1', 'admin'),
(27, 'Biratnagar', 26.455820, 87.292557, 'Ganesh Lal Mill', 'Morang', 'Sahu Ganesh Lal', '9851052684', 'sahu@gmail.com', 'Head ', 89, 'WIndows NT 2002', 'admin'),
(29, 'Kathmandu University', 27.617079, 85.539917, 'KU', 'Kavrepalanchok', 'Ram Kantha Makaju', '9851104512', 'rame@ku.edu.np', 'Vice Chancellor', 85, 'Windows Server 2003 with SP1', 'admin'),
(31, 'Pokara Airport', 28.197927, 84.053993, 'Pokhara Bimansthal', 'Kaski', 'Heor', '8', 'sdf@hasf.com', 'sdf', 85, 'Windows Server 2003 with SP1', 'admin'),
(33, 'Darchula NP', 30.185495, 80.950356, 'Bhatte House', 'Darchula', 'Abhishek Bhatta', '9808553841', 'abhishek12@yahoo.com', 'Senior Engineer, Darchula Roads Dept.', 88, 'Windows Server 2003 with SP1', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
