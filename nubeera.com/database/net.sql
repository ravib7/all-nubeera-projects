-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 04:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `net`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `AnsId_PK` int(11) NOT NULL,
  `QId_FK` int(11) DEFAULT NULL,
  `AnsOptionType` varchar(200) DEFAULT NULL,
  `AnsA` varchar(200) DEFAULT NULL,
  `AnsB` varchar(200) DEFAULT NULL,
  `AnsC` varchar(200) DEFAULT NULL,
  `AnsD` varchar(200) DEFAULT NULL,
  `CorrectAns` varchar(200) DEFAULT NULL,
  `AnsExplanation` varchar(200) NOT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`AnsId_PK`, `QId_FK`, `AnsOptionType`, `AnsA`, `AnsB`, `AnsC`, `AnsD`, `CorrectAns`, `AnsExplanation`, `IsActive`) VALUES
(1, 1, 'radio', 'for loop', 'while loop', 'do-while loop', 'None of the above', 'do-while loop', 'do-while loop is not used as loop in Python.', 1),
(2, 2, 'radio', '2', '3', '1', '0', '2', 'The loop will run 2 times.', 1),
(3, 3, 'radio', 'if a>=2 ', ' if (a >= 2)', 'if (a => 22)', 'if a >= 22', ' if a>=2', 'If statment always ended with colon (:).', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `ChapId_PK` int(11) NOT NULL,
  `CourseId_FK` int(11) DEFAULT NULL,
  `ChapTitle` varchar(200) DEFAULT NULL,
  `ChapDescription` varchar(200) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`ChapId_PK`, `CourseId_FK`, `ChapTitle`, `ChapDescription`, `IsActive`) VALUES
(1, 1, 'Statements', 'Statements and types', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CId_PK` int(11) NOT NULL,
  `TechId_FK` int(11) DEFAULT NULL,
  `CCode` varchar(200) DEFAULT NULL,
  `CName` varchar(200) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CId_PK`, `TechId_FK`, `CCode`, `CName`, `IsActive`) VALUES
(1, 1, 'Python', 'Python Basics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QId_PK` int(11) NOT NULL,
  `TopicId_FK` int(11) DEFAULT NULL,
  `QTitle` varchar(200) DEFAULT NULL,
  `QDescription` varchar(200) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QId_PK`, `TopicId_FK`, `QTitle`, `QDescription`, `IsActive`) VALUES
(1, 1, 'Find Loop', 'Which of the following is not used as loop in Python?', 1),
(2, 1, 'Find Output', 'How many times will the loop run?\r\n<pre>\r\ni=2\r\n\r\nwhile(i>0):\r\n\r\n    i=i-1\r\n</pre>', 1),
(3, 1, 'Find If', 'Which one of the following is a valid Python if statement :', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `TechId_PK` int(255) NOT NULL,
  `TechCategory` varchar(255) NOT NULL,
  `TechName` varchar(255) NOT NULL,
  `IsActive` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`TechId_PK`, `TechCategory`, `TechName`, `IsActive`) VALUES
(1, 'Development', 'Programming', 1),
(2, 'Cloud', 'Admin', 0),
(3, 'Big Data', 'Spark', 1),
(6, 'Analytics', 'Data Science', 1),
(7, 'ABCD', 'ABCD', 1),
(8, 'Test', 'Test', 1),
(9, 'Test', 'Test', 1),
(11, 'Test from admin panel', 'with not active status', 0),
(13, 'ABCD', 'ABCD', 0);


-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `TopicId_PK` int(11) NOT NULL,
  `TChapId_FK` int(11) DEFAULT NULL,
  `Topic_Description` varchar(200) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`TopicId_PK`, `TChapId_FK`, `Topic_Description`, `IsActive`) VALUES
(1, 1, 'Conditional Statements', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

REATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'prakash', 'raje', 'prakash.raje7@gmail.com', '$2y$10$GbUZguidU8DS9WnWjtHHqecTPGwdfv0MxrBiNqVdZWipMRZpNet5i'),
(2, 'akash', 'raje', 'akash@gmail.com', '$2y$10$KPXCiLmrsJtna0oVGUuZVeZvHZRroVzAzmFyMXj6c2jQIoeCWQTYO'),
(3, 'amar', 'kumar', 'amar@gmail.com', '$2y$10$.YEz3Ns8H14.4HCnRDAEmOt3GQuDWa4DFrquqp6s27E0xSXYwp/XW'),
(5, 'Mujahed', 'Hussaini', 'admin@gmail.com', '$2y$10$Unvvnc3mf8gKg9XJSVbCqOqsmYWCDa0CvtqE7oOQNhCd3qSawrz8.'),
(6, 'SMH_Home', 'asdf', 'mujahed.trainer@gmail.com', '$2y$10$GeLZsV6EbD9ZoqFYgvXi2O4E0y1vOzqf3KLms3xyVpKDWRsi/vLca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`AnsId_PK`),
  ADD KEY `QId_FK` (`QId_FK`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`ChapId_PK`),
  ADD KEY `CourseId_FK` (`CourseId_FK`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CId_PK`),
  ADD KEY `CMId_FK` (`TechId_FK`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QId_PK`),
  ADD KEY `TopicId_FK` (`TopicId_FK`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`TechId_PK`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicId_PK`),
  ADD KEY `TChapId_FK` (`TChapId_FK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `AnsId_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `ChapId_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CId_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QId_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `TechId_PK` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `TopicId_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`QId_FK`) REFERENCES `questions` (`QId_PK`);

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`CourseId_FK`) REFERENCES `courses` (`CId_PK`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`TechId_FK`) REFERENCES `technology` (`TechId_PK`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`TopicId_FK`) REFERENCES `topics` (`TopicId_PK`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`TChapId_FK`) REFERENCES `chapters` (`ChapId_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
