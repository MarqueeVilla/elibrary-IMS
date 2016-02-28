
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `complain` (
  `username` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `Complain` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `complain` (`username`, `subject`, `Complain`) VALUES
('rohit', 'Computer maintainance', 'The computer is damaged here. Maintenance has not arrived yet   '),
('gaurav', 'Hardware Maintainence', 'The hardware of computer at NASA college is not working properly');


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

INSERT INTO `elims_users` (`userName`, `userType`, `password`, `firstName`, `lastName`, `email`, `gender`, `location`, `phoneNumber`, `profession`) VALUES
('cnayak', 'admin', 'fec5dac976266dec3abf5321723cd643', 'Chandan', 'Nayak', 'cnayak57@gmail.com', 'male', 'Dhulikhel', '9818640096', 'Student'),
('gaurav', 'user', '29be54a52396750258d886abc5417fda', 'Gaurav ', 'Thapa', 'gt@gmail.com', 'male', 'Dhulikhel', '9849365861', 'Student'),
('manil', 'sysadmin', 'f22e0f3c00e7a3573f9a5f1ec0c1d7c5', 'Manil', 'Shrestha', 'coolmanil@yahoo.com', 'male', 'Dhulikhel', '9845610555', 'Student'),
('rohit', 'user', '2d235ace000a3ad85f590e321c89bb99', 'Rohit', 'Shrestha', 'cnayak2547@gmail.com', 'male', 'Dhulikhel', '9819855555', 'Student');

