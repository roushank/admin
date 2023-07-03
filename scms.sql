-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2023 at 07:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scms`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `insertData`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertData` (IN `in_userid` VARCHAR(20), IN `in_password` VARCHAR(512), IN `in_username` VARCHAR(40), IN `in_gender` VARCHAR(8), IN `in_mobile` VARCHAR(20), IN `in_email` VARCHAR(20), IN `in_dob` VARCHAR(10), IN `in_joining_date` VARCHAR(10))   BEGIN
INSERT INTO users(username, gender, mobile, email, dob, joining_date, userid) VALUES(in_username,in_gender,in_mobile,in_email,in_dob,in_joining_date,in_userid);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` varchar(20) NOT NULL,
  `streetName` varchar(40) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  KEY `userID` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `streetName`, `state`, `city`, `zipcode`) VALUES
('LM-668', 'Unit No.332, 3rd Floor, Central Tower,', 'Uttar Pradesh', 'Noida', '201301'),
('LM-6681', 'Unit No.332, 3rd Floor, Central Tower,', 'Uttar Pradesh', 'Noida', '201301');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'mayurik', 'roushan99@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'R', 'K', 'Male', '1992-05-28', '+919090909090', 'Nashik', 'young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg', '2018-04-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrolls_to`
--

DROP TABLE IF EXISTS `enrolls_to`;
CREATE TABLE IF NOT EXISTS `enrolls_to` (
  `et_id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(8) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `paid_date` varchar(15) DEFAULT NULL,
  `expire` varchar(15) DEFAULT NULL,
  `renewal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`et_id`) USING BTREE,
  KEY `user_ID` (`uid`) USING BTREE,
  KEY `plan_ID_idx` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `enrolls_to`
--

INSERT INTO `enrolls_to` (`et_id`, `pid`, `uid`, `paid_date`, `expire`, `renewal`) VALUES
(5, 'QVSDJO', 'LM-668', '2023-07-03', '2024-07-03', 'yes'),
(10, 'QVSDJO', 'LM-6681', '2023-07-03', '2024-07-03', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `health_status`
--

DROP TABLE IF EXISTS `health_status`;
CREATE TABLE IF NOT EXISTS `health_status` (
  `hid` int NOT NULL AUTO_INCREMENT,
  `calorie` varchar(8) DEFAULT NULL,
  `height` varchar(8) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `fat` varchar(8) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `uid` varchar(20) NOT NULL,
  PRIMARY KEY (`hid`) USING BTREE,
  KEY `userID_idx` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `health_status`
--

INSERT INTO `health_status` (`hid`, `calorie`, `height`, `weight`, `fat`, `remarks`, `uid`) VALUES
(3, '0', '0', '0', '0', '0', 'LM-668'),
(8, NULL, NULL, NULL, NULL, NULL, 'LM-6681');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `action` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `userid`, `action`, `date`) VALUES
(1, '1529336794', 'User Deleted Succesfully', '2021-07-07 16:10:18'),
(2, '1572760056', 'User Deleted Succesfully', '2021-07-07 16:10:18'),
(3, '1622822786', 'User Deleted Succesfully', '2021-07-07 16:10:18'),
(4, '1688204891', 'Data Inserted Succesfully', '2023-07-01 15:18:49'),
(5, 'LM-668', 'Data Inserted Succesfully', '2023-07-02 16:31:26'),
(6, 'LM-668', 'Data Updated Succesfully', '2023-07-03 12:06:55'),
(7, '1688204891', 'User Deleted Succesfully', '2023-07-03 12:14:52'),
(8, 'LM-668', 'User Deleted Succesfully', '2023-07-03 12:14:56'),
(9, 'LM-668', 'Data Inserted Succesfully', '2023-07-03 12:15:34'),
(10, 'LM-668', 'Data Updated Succesfully', '2023-07-03 12:21:23'),
(11, 'LM-6681', 'Data Inserted Succesfully', '2023-07-03 12:32:55'),
(12, 'LM-6681', 'User Deleted Succesfully', '2023-07-03 12:33:45'),
(13, 'LM-6681', 'Data Inserted Succesfully', '2023-07-03 12:34:18'),
(14, 'LM-6681', 'User Deleted Succesfully', '2023-07-03 12:34:48'),
(15, 'LM-6681', 'Data Inserted Succesfully', '2023-07-03 12:35:32'),
(16, 'LM-6681', 'User Deleted Succesfully', '2023-07-03 12:35:51'),
(17, 'LM-6681', 'Data Inserted Succesfully', '2023-07-03 12:36:29'),
(18, 'LM-6681', 'User Deleted Succesfully', '2023-07-03 12:38:25'),
(19, 'LM-6681', 'Data Inserted Succesfully', '2023-07-03 12:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

DROP TABLE IF EXISTS `manage_website`;
CREATE TABLE IF NOT EXISTS `manage_website` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'RTISC', 'Rtisc', 'admin mayuri Logo.jpg', '', 'INR', 'â‚¹', 'admin mayuri Logo.jpg', 'admin mayuri Logo.jpg', 'MfnlsE1r5E.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `pid` varchar(8) NOT NULL,
  `planName` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `validity` varchar(20) NOT NULL,
  `amount` int NOT NULL,
  `active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`pid`, `planName`, `description`, `validity`, `amount`, `active`) VALUES
('QVSDJO', 'Year', 'just', '12', 50000, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

DROP TABLE IF EXISTS `tbl_email_config`;
CREATE TABLE IF NOT EXISTS `tbl_email_config` (
  `e_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, 'Sender Name will be here', 'mail.gmail.com', 587, 'ndbahlerao91@gmail.com', '123654123', 'tls');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `tname` varchar(45) DEFAULT NULL,
  `day1` varchar(200) DEFAULT NULL,
  `day2` varchar(200) DEFAULT NULL,
  `day3` varchar(200) DEFAULT NULL,
  `day4` varchar(200) DEFAULT NULL,
  `day5` varchar(200) DEFAULT NULL,
  `day6` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tid`, `tname`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`) VALUES
(2, 'Workout', 'Flat bench barbell press - 4 sets of 8-12 reps\r\nIncline dumbell press - 4 sets of 8-12 reps\r\nIncline dumbell flyers - 3 set of 10 reps\r\nCable crossovers - 3 sets of 15 reps\r\nPush-ups - 4sets', 'Flat bench barbell press - 4 sets of 8-12 reps\r\nIncline dumbell press - 4 sets of 8-12 reps\r\nIncline dumbell flyers - 3 set of 10 reps\r\nCable crossovers - 3 sets of 15 reps\r\nPush-ups - 4sets', 'Barbell squats - 4 sets of 8-10 reps\r\nHeck squats - 4 sets of 10 reps\r\nLeg press machine -3 sets of 10 reps', 'Chin-ups - 4 sets of 10 reps\r\nWide grip lat pull-downs - 4 sets of 12 reps\r\nClose grip lat pull downs - 4 set of 12 reps\r\nDumbbell rows - 4 sets of 8-10 reps', 'Double arm dumbbell curls - 4 sets of 10-12 reps\r\nEZ bar curls - 4 sets of 10-12 reps\r\nPreacher curl machine - 4 sets of 12 reps\r\nTriceps rope machine - 4 sets of 15 reps', '60 minute of steady state cardio..');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(512) NOT NULL,
  `username` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` varchar(10) NOT NULL,
  `joining_date` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `username`, `gender`, `mobile`, `email`, `dob`, `joining_date`) VALUES
('LM-668', 'abc', 'Roushan', 'Male', '9006561188', 'abc@abc.com', '2023-07-03', '2023-02-02'),
('LM-6681', 'aaaa', '12 Month', 'Male', '0000000000', 'amit@amit.com', '2001-10-10', '2023-02-02');

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `deleteUser`;
DELIMITER $$
CREATE TRIGGER `deleteUser` BEFORE DELETE ON `users` FOR EACH ROW INSERT INTO logs VALUES(null, OLD.userid, "User Deleted Succesfully", NOW() )
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertUser`;
DELIMITER $$
CREATE TRIGGER `insertUser` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO logs VALUES(null, NEW.userid, "Data Inserted Succesfully", NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateUser`;
DELIMITER $$
CREATE TRIGGER `updateUser` AFTER UPDATE ON `users` FOR EACH ROW INSERT INTO logs VALUES(null, NEW.userid, "Data Updated Succesfully", NOW() )
$$
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `userID` FOREIGN KEY (`id`) REFERENCES `users` (`userid`) ON DELETE CASCADE;

--
-- Constraints for table `enrolls_to`
--
ALTER TABLE `enrolls_to`
  ADD CONSTRAINT `plan_ID` FOREIGN KEY (`pid`) REFERENCES `plan` (`pid`),
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE;

--
-- Constraints for table `health_status`
--
ALTER TABLE `health_status`
  ADD CONSTRAINT `uID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
