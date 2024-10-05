-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2021 at 06:20 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nubeera`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

DROP TABLE IF EXISTS `badges`;
CREATE TABLE IF NOT EXISTS `badges` (
  `badgeid_pk` int(11) NOT NULL,
  `badgename` varchar(200) NOT NULL,
  `totalpoints` int(11) NOT NULL,
  `benefits` varchar(500) NOT NULL,
  PRIMARY KEY (`badgeid_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `ChaptersIdPk` int(11) NOT NULL,
  `CourseIdFk` int(11) NOT NULL,
  `Chaptername` varchar(200) NOT NULL,
  `ChapterLevel` int(11) NOT NULL,
  `ChapterStatus` int(11) NOT NULL,
  PRIMARY KEY (`ChaptersIdPk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `CourseId_Pk` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Code` varchar(50) NOT NULL,
  `CourseFullName` varchar(200) NOT NULL,
  `DurationInHrs` int(100) NOT NULL,
  `TotalFeesInRs` int(200) NOT NULL,
  `CourseLevel` varchar(200) NOT NULL,
  `CourseActive` varchar(50) NOT NULL,
  PRIMARY KEY (`CourseId_Pk`),
  KEY `CourseId_Pk` (`CourseId_Pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursesubscribe`
--

DROP TABLE IF EXISTS `coursesubscribe`;
CREATE TABLE IF NOT EXISTS `coursesubscribe` (
  `CourseSubscribeId_Pk` int(11) NOT NULL,
  `CourseId_Fk` int(11) NOT NULL,
  `StudentId_Fk` int(11) NOT NULL,
  `SubscribtionType` varchar(100) NOT NULL,
  `CoupanApplied` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`CourseSubscribeId_Pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feesdetails`
--

DROP TABLE IF EXISTS `feesdetails`;
CREATE TABLE IF NOT EXISTS `feesdetails` (
  `FeesDetailID_pk` int(100) NOT NULL AUTO_INCREMENT,
  `RegistrationId_Fk` int(100) NOT NULL,
  `PaidFeesInRs` int(100) NOT NULL,
  `PaidDateInUTC` varchar(200) NOT NULL,
  `FeesMode` varchar(200) NOT NULL,
  `TransactionID` varchar(400) NOT NULL,
  PRIMARY KEY (`FeesDetailID_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materialdetails`
--

DROP TABLE IF EXISTS `materialdetails`;
CREATE TABLE IF NOT EXISTS `materialdetails` (
  `MaterialId_pk` int(100) NOT NULL AUTO_INCREMENT,
  `MaterialType` varchar(200) NOT NULL,
  `Mode` varchar(200) NOT NULL,
  `MaterialURL` varchar(1000) NOT NULL,
  `CourseId_Fk` int(100) NOT NULL,
  `IsActive` varchar(200) NOT NULL,
  PRIMARY KEY (`MaterialId_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `QuestionBank`
--

DROP TABLE IF EXISTS `QuestionBank`;
CREATE TABLE IF NOT EXISTS `QuestionBank` (
  `QuestionBankId_Pk` int(11) NOT NULL,
  `CourseId_fk` int(11) NOT NULL,
  `ChapId_fk` int(11) NOT NULL,
  `TopicId_fk` int(11) NOT NULL,
  `QuestionType` varchar(100) NOT NULL,
  `QuestionDetail` varchar(255) NOT NULL,
  `AnswerDetail` varchar(255) NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `OptionE` varchar(255) NOT NULL,
  `OptionF` varchar(255) NOT NULL,
  `QBStatus` int(10) NOT NULL,
  PRIMARY KEY (`QuestionBankId_Pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `RegId` int(100) NOT NULL AUTO_INCREMENT,
  `UserType` varchar(200) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `MobileNum` varchar(25) NOT NULL,
  `EmailUserName` varchar(20) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'InActive',
  `online` varchar(50) NOT NULL,
  PRIMARY KEY (`RegId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

DROP TABLE IF EXISTS `technology`;
CREATE TABLE IF NOT EXISTS `technology` (
  `TechId_PK` int(255) NOT NULL AUTO_INCREMENT,
  `TechCategory` varchar(255) NOT NULL,
  `TechName` varchar(255) NOT NULL,
  `IsActive` int(255) NOT NULL,
  PRIMARY KEY (`TechId_PK`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`TechId_PK`, `TechCategory`, `TechName`, `IsActive`) VALUES
(1, 'Development', 'Programming', 1),
(2, 'Cloud', 'Cloud Administrator', 1),
(3, 'Big Data', 'Spark', 1),
(6, 'Analytics', 'Data Science', 1),
(7, 'Automation', 'DevOps', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topicid_pk` int(11) NOT NULL,
  `chapId_fk` int(11) NOT NULL,
  `topicname` varchar(200) NOT NULL,
  `topicLevel` int(11) NOT NULL,
  `topicstatus` int(11) NOT NULL,
  `topicmarks` int(11) NOT NULL,
  `topicdurationinMin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'prakash', 'raje', 'prakash.raje7@gmail.com', '$2y$10$GbUZguidU8DS9WnWjtHHqecTPGwdfv0MxrBiNqVdZWipMRZpNet5i'),
(2, 'akash', 'raje', 'akash@gmail.com', '$2y$10$KPXCiLmrsJtna0oVGUuZVeZvHZRroVzAzmFyMXj6c2jQIoeCWQTYO'),
(3, 'amar', 'kumar', 'amar@gmail.com', '$2y$10$.YEz3Ns8H14.4HCnRDAEmOt3GQuDWa4DFrquqp6s27E0xSXYwp/XW'),
(5, 'Mujahed', 'Hussaini', 'admin@gmail.com', '$2y$10$Unvvnc3mf8gKg9XJSVbCqOqsmYWCDa0CvtqE7oOQNhCd3qSawrz8.'),
(6, 'SMH_Home', 'asdf', 'mujahed.trainer@gmail.com', '$2y$10$GeLZsV6EbD9ZoqFYgvXi2O4E0y1vOzqf3KLms3xyVpKDWRsi/vLca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




/**************DBCC Queries*************/
INSERT INTO `courses`(`TechId_FK`, `CCode`, `CName`, `IsActive`) VALUES (2,'AWS','AWS Administrator',1);
INSERT INTO `coursesubscribe`(`CourseId_Fk`, `UserId_Fk`, `SubscribtionType`, `CoupanApplied`, `Status`) VALUES (2,5,'Texceed','Shakir',1);
INSERT INTO `materialdetails`(`CourseId_Fk`, `MaterialType`, `Mode`, `MaterialURL`, `IsActive`) VALUES (2,'Video','Online','https://youtu.be/WcjlOymgwRg',1)


SELECT ID FROM USERS WHERE EMAIL='admin@gmail.com';

SELECT CourseId_Fk FROM coursesubscribe WHERE UserId_Fk=ID