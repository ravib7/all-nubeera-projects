-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2020 at 06:43 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingnubeera`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` int DEFAULT NULL,
  `font_awesome_class` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date_added`, `last_modified`, `font_awesome_class`, `thumbnail`) VALUES
(1, 'Analytics ', NULL, NULL, 'far fa-chart-bar', 'category-thumbnail.png'),
(2, 'Artificail Intelligance', NULL, NULL, NULL, NULL),
(3, 'Data Science', NULL, NULL, NULL, NULL),
(4, 'Machine Learning', NULL, NULL, NULL, NULL),
(5, 'Automation', NULL, NULL, NULL, NULL),
(6, 'Natural Language Processing', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int UNSIGNED NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date_added` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `outcomes` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `course_language` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `duration` double DEFAULT NULL,
  `section` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `requirements` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `price` double DEFAULT NULL,
  `discount_flag` int DEFAULT '0',
  `discounted_price` int DEFAULT NULL,
  `level` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'courseImages/nubeera.jpg',
  `video_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` int DEFAULT NULL,
  `visibility` int DEFAULT NULL,
  `is_top_course` int DEFAULT '0',
  `is_admin` int DEFAULT NULL,
  `target` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_free_course` int DEFAULT NULL,
  `redeem_code` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructor_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `short_description`, `description`, `outcomes`, `course_language`, `category_id`, `user_id`, `duration`, `section`, `requirements`, `price`, `discount_flag`, `discounted_price`, `level`, `thumbnail`, `video_url`, `date_added`, `last_modified`, `visibility`, `is_top_course`, `is_admin`, `target`, `is_free_course`, `redeem_code`, `instructor_id`) VALUES
(2, 'Artificial Intelligence', 'This course will take you from beginner to pro in AI', 'Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. The term may also be applied to any machine that exhibits traits associated with a human mind such as learning and problem-solving', 'After completing this course you will be able to di AI programming using python and to create AI agents by your own.', 'English', 1, 1, 1, 'section1\r\nsection2\r\nsection3', 'Computer\r\nProgramming knowledge\r\n', 6000, 0, 0, 'Beginner', 'courseImages/nubeera.jpg', NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, 1),
(17, 'DevOps', 'DevOps is a set of practices that combines software development and IT operations', 'DevOps Engineer works with developers and the IT staff to oversee the code releases. They are either developers who get interested in deployment and network operations or sysadmins who have a passion for scripting and coding and move into the development side where they can improve the planning of test and deployment.', 'Master Continuous Integration, Continuous Deployment, Continuous Delivery, Configuration Management and Continuous Monitoring. Become an expert on technologies such as GIT. Maven, Chef, Puppet & more. Automate and increase the speed of productivity with reliability.', 'English', 5, 0, 30, NULL, 'System Requirements: AWS Account(Bank Card) \r\nPrerequisites: Linux Background, SQL, Scripting, Hardware Knowledge ', 6000, 0, NULL, 'Advanced', 'courseImages/devops.jpg', NULL, NULL, NULL, NULL, 0, NULL, 'Some knowledge about daily Ops activities, most of the cases, basic knowledge of AWS and Linux Basics. ', NULL, NULL, 1),
(20, 'Python', NULL, NULL, 'ML Algorithms', NULL, 4, 0, NULL, NULL, 'Basic Knowledge', 0, 0, 0, NULL, 'courseImages/nubeera.jpg', NULL, NULL, NULL, NULL, 0, NULL, 'Basic Knowledge of Python', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrol`
--

CREATE TABLE `enrol` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `course_id` int UNSIGNED DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrol`
--

INSERT INTO `enrol` (`id`, `user_id`, `course_id`, `date_added`) VALUES
(2, 1, 2, NULL),
(6, 1, 2, '2020-08-12 06:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `exam_score`
--

CREATE TABLE `exam_score` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `course_id` int UNSIGNED DEFAULT NULL,
  `marks` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(400) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobile1` varchar(50) NOT NULL,
  `mobile2` varchar(50) NOT NULL,
  `accountnumber` varchar(260) NOT NULL,
  `BankName` varchar(200) NOT NULL,
  `IFSC` varchar(100) NOT NULL,
  `branchName` varchar(200) NOT NULL,
  `branchcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `full_name`, `email`, `password`, `address`, `city`, `state`, `country`, `mobile1`, `mobile2`, `accountnumber`, `BankName`, `IFSC`, `branchName`, `branchcode`) VALUES
(1, 'Mujahed', 'mujahed@nubeera.com', '12345678', 'Aurangabad', 'Aurangabad', 'Maharashtra', 'India', '2123433454', '3212345456', '454545454545122', 'HDFC', 'HDFC22222', 'Gold Gym', '222222'),
(4, 'instr1', 'instr@instr.com', '', '123345433', '243434343', 'heaven', 'hell', 'amidst', 'land', 'nubeera', '33412', '93u3', '4jdj9', '3242');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `video_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `orders` int NOT NULL DEFAULT '0',
  `section_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `duration`, `course_id`, `video_type`, `video_url`, `lesson_type`, `attachment`, `attachment_type`, `summary`, `orders`, `section_id`) VALUES
(2, 'Class 01 - Course Introduction', '27:43', 17, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(3, 'Class 02 - Virtual box Installation (VM Ware)', '84:14', 17, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(6, 'Class 03 - EC2', '72:30', 17, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL),
(7, 'Class 04 - AWS Console Setup', '54:28', 17, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(8, 'Class 05 - Cloud Environment', '63:52', 17, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL),
(9, 'Class 06 - Linux Commands', '56:42', 17, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL),
(10, 'Class 07 - Virtualization', '65:49', 17, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL),
(11, 'Class 08 - DNS and IP address', '60:37', 17, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL),
(12, 'Class 09 - Introduction on GIT on Windows', '87:05', 17, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL),
(13, 'Class 10 - Git commands', '110:00', 17, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL),
(14, 'Class 11 - Git commands', '43:30', 17, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL),
(15, 'Class 12 - Git Commands', '64:02', 17, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL),
(22, 'Class 13 - GIT Commands, Collaboration with GIT Repository (Part 01)', '119:37', 17, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL),
(23, 'Class 13 - GIT Commands, Collaboration with GIT Repository (Part 02)', '8:27', 17, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL),
(24, 'Class 14 - GIT Branching Commands', '67:41', 17, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL),
(25, 'Class 15 - Git Special Files and Purpose', '36:16', 17, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL),
(26, 'Class 16 - QNA Topic on Git', '71:56', 17, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL),
(27, 'Class 17 - GitHub Ticketing Tool and GitHub Documentation', '65:19', 17, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int UNSIGNED NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `number_of_options` int DEFAULT NULL,
  `options` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `correct_answers` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `order` int NOT NULL DEFAULT '0',
  `course_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int NOT NULL,
  `lesson_id` int UNSIGNED DEFAULT NULL,
  `course_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int UNSIGNED NOT NULL,
  `rating` double DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `course_id` int UNSIGNED DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` int DEFAULT NULL,
  `review` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'student'),
(4, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` int UNSIGNED DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userpassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int UNSIGNED DEFAULT NULL,
  `verification_code` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_verified` int DEFAULT '0',
  `gender` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `userpassword`, `role_id`, `verification_code`, `is_verified`, `gender`, `date_added`) VALUES
(1, 'Balchandra', 'Samleti', 'admin@example.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, NULL, 1, NULL, '2020-08-12 06:42:42'),
(2, 'Balchandra', 'Samleti', 'balsamleti@gmail.com', '06bee75ae29918ea489895091d45c6dd1cf6ab7e', 2, '4b61de367009f1f62d100b6bbe61c313', 0, NULL, '2020-08-12 06:42:42'),
(3, 'User1', 'Samelti', 'user@example.com', '12dea96fec20593566ab75692c9949596833adc9', 2, '4cb9155100f5cef037e5460ae1249407', 0, NULL, '2020-08-12 06:42:42'),
(4, 'new', 'asd', 'new@gmail.com', '$2y$10$u2xQQ2U36gohQ940P1Qw8OtNdrY33XEsGt8mnwOA1KyjQBIYSSluK', NULL, NULL, 0, NULL, '2020-08-12 06:42:42'),
(5, 'check', 'ch', 'che@gmail.com', '$2y$10$i/e6qFif9x45kjU6qgd37eGBI2qNUHrClNaHZBbIsLpnAMQmsnaiu', NULL, NULL, 0, NULL, '2020-08-12 06:42:42'),
(33, 'Testing', 'Testing', 'tempbalsamleti@gmail.com', '$2y$10$ZJWNViMJo/GaG5.ktQRVJ.ZdXgbZIXblQwvkYz.2yZUUSkLPofRFa', NULL, '$2y$10$x4JI6j7Qfk5uKM7zra4z.OaR57HwLUdgzwEpm5SCjC2gTr8AeN4Hq', 1, NULL, '2020-08-12 06:42:42'),
(35, 'Shreyash', 'Pawar', 'shreyashpawar1999@gmail.com', '$2y$10$H/bWrDSrcXFGfu9TnfoOnu5RXHyHGb6pHca6nZCo0/P6i9vGEvvg.', NULL, '$2y$10$EjgoqKbAubNR39ayp79W8un8t9TJMfz8JI.4sXrfs.7tc3smOSKqC', 1, NULL, '2020-08-12 06:42:42'),
(36, 'Sakib', 'Patel', 'sakibpatel191@gmail.com', '$2y$10$ULJJYG4EU7f0lQGCDxzrqOhtN7UTV7mWxocPYJSOkIsLMAAkFhnJ.', NULL, '$2y$10$MrWni5ClDezaQSdgdKl9guHqmHQyFckCp21DJZA4n9GCvtzeIeRlG', 1, NULL, '2020-08-12 06:42:42'),
(40, 'Balchandra', 'Samleti', 'balsamleti@telegmail.com', '$2y$10$6O5M.VKpjN3Sume9dNfFBewuhE7WS2QOq9be6pumYJ8RY0oS17Ryq', NULL, '$2y$10$D4z5horbuAtBTTBrc4fOneLI/.Or4UnmBqxUNkrdp0j7hFo/AX5Y2', 1, NULL, '2020-08-12 06:42:42'),
(42, 'Balchandra', 'Samleti', 'crsamleti@gmail.com', '$2y$10$thgpH2tF/8AsmALbVm8Sve0kYHPYxanQ8KxdBoi1SpZRzckavuUT2', NULL, '$2y$10$HlUttFSIJD3jczWX7TacHudW4nMkRc5n696injCHrLRnE8kwzL/x.', 0, NULL, '2020-08-12 06:42:42'),
(43, 'Sakib', 'Patel', 'tamimpatel150@gmail.com', '$2y$10$6gLUK4WSPTjbKQGgZ4YxfevfuipidrreZaV/0zePKnwVxOo0.kiai', NULL, '$2y$10$06eLvfo53g7MtJmZQ4/tvuum0YYJsxaOJycQpnc9hFypq61rRoa1S', 1, NULL, '2020-08-12 06:42:42'),
(44, 'Mujahed', 'Hussaini', 'mujahed.trainer@gmail.com', '$2y$10$D6Zj8DSfXovhjP8pzhWWRef9NbyTqQh2LJdRvJi.yeC.9mwIFksL6', NULL, '$2y$10$RPZQNHTFRmxyzC606lpVkOn5g9vWFSZB47LvUygfAWS6Q1B2P74d.', 1, NULL, '2020-08-12 06:42:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `enrol`
--
ALTER TABLE `enrol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `exam_score`
--
ALTER TABLE `exam_score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enrol`
--
ALTER TABLE `enrol`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exam_score`
--
ALTER TABLE `exam_score`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`);

--
-- Constraints for table `enrol`
--
ALTER TABLE `enrol`
  ADD CONSTRAINT `enrol_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `enrol_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `exam_score`
--
ALTER TABLE `exam_score`
  ADD CONSTRAINT `exam_score_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `exam_score_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `quiz_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lesson` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
