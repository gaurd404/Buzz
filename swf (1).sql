-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 07:11 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swf`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `answer_text` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `question_id`, `time`, `answer_text`, `user_name`) VALUES
(1, 1, '2017-10-31 18:30:00', 'i don''t know', 'monika_97'),
(2, 3, '2017-11-15 04:26:28', 'i don''t know', 'shweta-479'),
(3, 5, '2017-11-15 04:26:32', 'i dont know', 'monika_97'),
(4, 1, '2017-11-15 13:43:05', 'ffrnufivnuinvuunurnuureoiuer', 'shweta'),
(5, 1, '2017-11-15 13:43:05', 'kfrfiuerbuuberugbyubv', 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `board_id` int(11) NOT NULL AUTO_INCREMENT,
  `board_name` varchar(50) NOT NULL,
  PRIMARY KEY (`board_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_id`, `board_name`) VALUES
(1, 'JACK'),
(2, 'BECBE');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `chapter_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comprises_of`
--

CREATE TABLE IF NOT EXISTS `comprises_of` (
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downvote_ans`
--

CREATE TABLE IF NOT EXISTS `downvote_ans` (
  `downvote_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `downvote_by` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`downvote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `mentor_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `followed_by` varchar(100) NOT NULL,
  PRIMARY KEY (`follow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `followed_by`
--

CREATE TABLE IF NOT EXISTS `followed_by` (
  `Username` varchar(30) NOT NULL,
  `Follower` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow_person`
--

CREATE TABLE IF NOT EXISTS `follow_person` (
  `Username` varchar(30) NOT NULL,
  `Following_Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_person`
--

INSERT INTO `follow_person` (`Username`, `Following_Username`) VALUES
('37', '52');

-- --------------------------------------------------------

--
-- Table structure for table `interested_sub_details`
--

CREATE TABLE IF NOT EXISTS `interested_sub_details` (
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_sub_details`
--

INSERT INTO `interested_sub_details` (`student_id`, `subject_id`) VALUES
(36, 1),
(36, 2),
(36, 3),
(36, 4),
(11, 1),
(11, 2),
(13, 1),
(13, 2),
(14, 2),
(14, 1),
(15, 1),
(15, 3),
(13, 4),
(13, 1),
(17, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE IF NOT EXISTS `mentor` (
  `mentor_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `board_id` int(11) NOT NULL,
  `Points` int(10) NOT NULL,
  PRIMARY KEY (`mentor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`mentor_id`, `person_id`, `username`, `board_id`, `Points`) VALUES
(2, 0, 'shweta', 1, 0),
(3, 38, '', 1, 0),
(4, 39, '', 1, 0),
(5, 40, '', 1, 0),
(6, 41, '', 1, 0),
(7, 42, '', 1, 0),
(8, 43, '', 1, 0),
(9, 44, '', 1, 0),
(10, 45, '', 1, 0),
(11, 38, '', 1, 0),
(12, 39, '', 1, 0),
(13, 40, '', 1, 0),
(14, 41, '', 1, 0),
(15, 42, '', 1, 0),
(16, 43, '', 1, 0),
(17, 44, '', 1, 0),
(18, 45, '', 1, 0),
(19, 46, '', 1, 0),
(20, 47, '', 1, 0),
(21, 38, '', 1, 0),
(22, 39, '', 1, 0),
(23, 40, '', 1, 0),
(24, 41, '', 1, 0),
(25, 42, '', 1, 0),
(26, 43, '', 1, 0),
(27, 44, '', 1, 0),
(28, 45, '', 1, 0),
(29, 46, '', 1, 0),
(30, 47, '', 1, 0),
(31, 48, '', 1, 0),
(32, 49, '', 1, 0),
(33, 0, 'hey', 1, 0),
(34, 0, 'hey', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `nid` int(2) NOT NULL,
  `Notification` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `Notification`, `Username`) VALUES
(1, 'Gaurav upvoted your answer', 'shweta'),
(1, 'Gaurav upvoted your answer', 'shweta'),
(2, 'Gaurav followed you', 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `notification_type`
--

CREATE TABLE IF NOT EXISTS `notification_type` (
  `nid` int(2) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_type`
--

INSERT INTO `notification_type` (`nid`, `Type`) VALUES
(1, 'Upvote'),
(2, 'Follow'),
(3, 'Request');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `name`, `dob`, `gender`, `email`, `mobile_no`, `address`, `type`, `board`, `class`, `password`) VALUES
(35, 'shweta', '2017-11-01', 'female', 'shwetakumari877@gmail.com', 44444, 'bfdg', 'Student', '', 0, '123456789'),
(37, 'shweta', '2017-11-03', 'female', 'shweta@gmail.com', 888, 'hello', 'Mentor', '', 0, '123456789'),
(51, 'shweta', '2017-11-09', 'female', 'jhfsd@gmail.com', 0, '', 'Mentor', '', 0, '123456789'),
(52, 'shweta', '2017-11-08', 'female', 'ritu@gmail.com', 44444, 'gfgfgf', 'Student', '', 0, '987654321'),
(53, 'helo', '2017-11-14', 'female', 'heee@gmail.com', 123, 'hdjdedde', 'Student', '', 0, '123456789'),
(54, 'akash', '2017-11-08', 'male', 'akash@gmail.com', 123456789, 'mumbai', 'Student', '', 0, '987654321'),
(55, 'mohit', '2017-11-14', 'male', 'mohit@gmail.com', 999999, 'mumbai', 'Student', '', 0, '555555555'),
(56, 'hey', '2017-11-14', 'female', 'shwetakumari877@gmail.com', 123456789, 'vdhebde', 'Mentor', '', 0, '789456123'),
(57, 'Monika', '2017-11-14', 'Female', 'MONIKA@gmail.com', 2147483647, 'pdpu', 'Student', 'JACK', 9, '123587496'),
(58, 'kriti', '2017-11-14', 'Female', 'kriti@gmail.com', 123654789, 'pdpu', 'Student', 'JACK', 9, '4444444'),
(59, 'Gaurav Dawar', '2017-11-16', 'male', 'gauravd999@gmail.com', 2147483647, 'dbyufvbvbfvb', 'Student', 'CBSE', 11, 'ghhbibb');

-- --------------------------------------------------------

--
-- Table structure for table `question_ans`
--

CREATE TABLE IF NOT EXISTS `question_ans` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_text` text NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Subject` int(20) NOT NULL,
  `Tags` int(20) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question_ans`
--

INSERT INTO `question_ans` (`question_id`, `question_text`, `User_name`, `Subject`, `Tags`) VALUES
(1, 'What is nitroamine?', 'monika_97', 3, 1),
(3, 'What are the elements in p-block?', 'shweta_479', 3, 2),
(5, 'What is math?', 'shweta', 2, 3),
(6, 'What is 1 Dyne?', 'mk', 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question_report`
--

CREATE TABLE IF NOT EXISTS `question_report` (
  `question_report_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`question_report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `report_answer`
--

CREATE TABLE IF NOT EXISTS `report_answer` (
  `report_ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `question_id` int(11) NOT NULL,
  `report_by` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`report_ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `board_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `Points` int(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `person_id`, `username`, `board_id`, `class_id`, `Points`) VALUES
(5, 44, 'lo', 1, 9, 1500),
(6, 45, 'mk', 1, 9, 3548),
(7, 46, 'mnhk', 1, 9, 2345),
(8, 47, 'ert', 1, 9, 165),
(9, 51, 'hggf', 1, 9, 348),
(10, 53, 'asf', 1, 9, 456),
(11, 52, 'shweta', 1, 9, 628),
(13, 35, 'shweta', 1, 9, 364),
(14, 54, 'akash', 1, 10, 987),
(15, 55, 'mohit', 1, 11, 248),
(16, 57, 'Monika', 1, 9, 0),
(17, 58, 'kriti', 1, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`) VALUES
(1, 'BIO'),
(2, 'MATH'),
(3, 'CHEM'),
(4, 'HINDI'),
(5, 'SST'),
(6, 'URDU'),
(7, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `Tag_Id` int(3) NOT NULL,
  `Tag` varchar(10) NOT NULL,
  `Subject_Id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`Tag_Id`, `Tag`, `Subject_Id`) VALUES
(1, 'Organic', 3),
(2, 'Inorganic', 3),
(3, 'Calculus', 2),
(4, 'Human_Body', 1),
(5, 'Force', 7);

-- --------------------------------------------------------

--
-- Table structure for table `upvote_ans`
--

CREATE TABLE IF NOT EXISTS `upvote_ans` (
  `upvote_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `upvote_by` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`upvote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
