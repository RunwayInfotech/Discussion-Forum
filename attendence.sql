-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2014 at 02:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendence`
--
CREATE DATABASE IF NOT EXISTS `attendence` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `attendence`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Fname` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `phone_no` int(15) DEFAULT NULL,
  `admin_post` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `Name`, `Fname`, `email`, `phone_no`, `admin_post`) VALUES
(111, 'madhura', 'S.', 'madhura@treewalker.in', 2147483647, 'Lets innovate something today!!');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `answer` longtext NOT NULL,
  `adate` varchar(10) NOT NULL,
  `atime` varchar(10) NOT NULL,
  `likes` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=224 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `q_id`, `employee_id`, `answer`, `adate`, `atime`, `likes`) VALUES
(212, 53, 119, 'Use prepared statements and parameterized queries. These are SQL statements that are sent to and parsed by the database server separately from any parameters. This way it is impossible for an attacker to inject malicious SQL.', '30-05-2014', '12:43:10', 1),
(213, 54, 1, '\r\nTest case 1:\r\n\r\nforeach ($array as $item) {\r\n  echo "$item\\n";\r\n  $array[] = $item;\r\n}\r\nprint_r($array);\r\n\r\n/* Output in loop:    1 2 3 4 5\r\n   $array after loop: 1 2 3 4 5 1 2 3 4 5 */\r\n\r\nThis clearly shows that we are not working directly with the source array - otherwise the loop would continue forever, since we are constantly pushing items onto the array during the loop. But just to be sure this is the case.\r\n\r\n    Test case 2:\r\n\r\nforeach ($array as $key => $item) {\r\n  $array[$key + 1] = $item + 2;\r\n  echo "$item\\n";\r\n}\r\n\r\nprint_r($array);\r\n\r\n/* Output in loop:    1 2 3 4 5\r\n   $array after loop: 1 3 4 5 6 7 */', '30-05-2014', '12:52:31', 1),
(216, 56, 1, 'An even quicker (and dirtier) way to accomplish this is by setting the UILabel''s line break mode to "Clip" and adding a fixed amount of newlines.\r\n\r\nmyLabel.lineBreakMode = UILineBreakModeClip;\r\nmyLabel.text = [displayString stringByAppendingString:"\\n\\n\\n\\n"];\r\n\r\nThis solution won''t work for everyone -- in particular, if you still want to show "..." at the end of your string if it exceeds the number of lines you''re showing, you''ll need to use one of the longer bits of code -- but for a lot of cases this''ll get you what you need.', '31-05-2014', '13:19:42', 0),
(223, 55, 1, 'tableColumns\r\n\r\nnull for all columns as in SELECT * FROM ...\r\nnew String[] { "column1", "column2", ... } for specific columns as in SELECT column1, column2 FROM ... - you can also put complex expressions here:\r\nnew String[] { "(SELECT max(column1) FROM table1) AS max" } would give you a column named max holding the max value of column1\r\nwhereClause\r\n\r\nthe part you put after WHERE without that keyword, e.g. "column1 > 5"\r\nshould include ? for things that are dynamic, e.g. "column1=?" -> see whereArgs', '31-05-2014', '13:31:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `post_by` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `posts` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `event_date` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `event_details` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `best_emp` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `employee_id`, `post_by`, `posts`, `event_date`, `event_details`, `best_emp`) VALUES
(1, 2, 'Anshul', '2013-09-17', '2013-12-31', 'party on the ocassion of rashmi''s birthday', 'ABCXYZ'),
(2, 112, 'rashmi', '2013-12-15', '2013-12-31', 'a small trip to goa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `detail` longtext,
  `date` varchar(15) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `like` int(3) DEFAULT NULL,
  `dislike` int(3) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `employee_id` int(11) NOT NULL,
  `total_leave` int(40) DEFAULT NULL,
  `remaining_leave` int(40) DEFAULT NULL,
  `total_leave_taken` int(40) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leave_record`
--

CREATE TABLE IF NOT EXISTS `leave_record` (
  `emp_id` varchar(200) CHARACTER SET latin1 NOT NULL,
  `total_leave` int(200) DEFAULT NULL,
  `total_cl` int(200) DEFAULT NULL,
  `total_sl` int(200) DEFAULT NULL,
  `cl_taken` int(200) DEFAULT NULL,
  `sl_taken` int(200) DEFAULT NULL,
  `half_day` int(200) DEFAULT NULL,
  `remaining_leave` int(200) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leave_record`
--

INSERT INTO `leave_record` (`emp_id`, `total_leave`, `total_cl`, `total_sl`, `cl_taken`, `sl_taken`, `half_day`, `remaining_leave`) VALUES
('112', 20, 12, 8, 2, 3, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `like_answers`
--

CREATE TABLE IF NOT EXISTS `like_answers` (
  `employee_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `like_status` int(1) NOT NULL,
  PRIMARY KEY (`employee_id`,`id`),
  KEY `fkkk1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like_answers`
--

INSERT INTO `like_answers` (`employee_id`, `id`, `like_status`) VALUES
(1, 212, 0),
(1, 213, 1),
(1, 216, 0),
(1, 223, 0),
(119, 212, 1),
(119, 213, 0),
(119, 216, 0),
(119, 223, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_eid` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `seen_status` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `tag_eid`, `employee_id`, `seen_status`, `qid`) VALUES
(8, 3, 1, 0, 63);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `pLike` int(11) NOT NULL,
  `pDislike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(75) DEFAULT NULL,
  `detail` longtext,
  `pdate` varchar(15) DEFAULT NULL,
  `qtime` varchar(8) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `tag` longtext,
  `reply` int(3) DEFAULT '0',
  `skill` varchar(10) DEFAULT NULL,
  `send_mail` int(1) DEFAULT NULL,
  PRIMARY KEY (`q_id`),
  KEY `FK_Qeid` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `topic`, `detail`, `pdate`, `qtime`, `employee_id`, `status`, `tag`, `reply`, `skill`, `send_mail`) VALUES
(53, 'How can I prevent SQL-injection in PHP?', 'If user input is inserted without modification into an SQL query, then the application becomes vulnerable to SQL injection, like in the following example:\r\n\r\n    $unsafe_variable = $_POST[''user_input'']; \r\n\r\nmysql_query("INSERT INTO `table` (`column`) VALUES (''$unsafe_variable'')");\r\nThat''s because the user can input something like value''); DROP TABLE table;--, and the query becomes:\r\n\r\nINSERT INTO `table` (`column`) VALUES(''value''); DROP TABLE table;--'')\r\n\r\nWhat can be done to prevent this from happening?', '30-05-2014', '12:37:54', 1, 1, 'Abhishek  Kaushal', 1, 'php', 0),
(54, 'How ''foreach'' actually works', 'Let me prefix this by saying that I know what foreach is, does and how to use it. This question concerns how it works under the bonnet, and I don''t want any answers along the lines of "this is how you loop an array with foreach".\r\n\r\nFor a long time I assumed that foreach worked with the array itself. Then I found many references to the fact that it works with a copy of the array, and I have since assumed this to be the end of the story. But I recently got into a discussion on the matter, and after a little experimentation found that this was not in fact 100% true.', '30-05-2014', '12:49:14', 1, 0, 'Avinash Raj', 1, 'php', 0),
(55, 'SQLIteDatabase.query method', 'tableColumns\r\n\r\nnull for all columns as in SELECT * FROM ...\r\nnew String[] { "column1", "column2", ... } for specific columns as in SELECT column1, column2 FROM ... - you can also put complex expressions here:\r\nnew String[] { "(SELECT max(column1) FROM table1) AS max" } would give you a column named max holding the max value of column1\r\nwhereClause', '31-05-2014', '12:03:55', 1, 1, 'Abhishek  Kaushal', 1, 'android', 0),
(56, 'Vertically align text within a UILabel', 'I have a UILabel with space for two lines of text. Sometimes, when the text is too short, this text is displayed in the vertical center of the label.\r\n\r\nHow do I vertically align my text to be always at the top of the UILabel?', '31-05-2014', '12:51:54', 2, 0, 'Avinash Raj', 1, 'ios', 0),
(57, 'adaaa', 'dgfgdf', '12-07-2014', '04:05:31', 2, 0, 'Abhishek  Kaushal', 0, 'php', 1),
(59, 'asd', 'sad', '12-07-2014', '04:19:32', 2, 0, 'Abhishek  Kaushal', 0, 'php', 1),
(60, 'aa', 'sss', '12-07-2014', '04:25:30', 2, 0, 'Abhishek  Kaushal', 0, 'php', 1),
(61, 'asd', 'sadasd', '12-07-2014', '18:15:31', 2, 0, 'Abhishek  Kaushal', 0, 'android', 1),
(62, 'asdad', 'sfs', '12-07-2014', '18:28:25', 3, 0, 'Surjan Negi', 0, 'php', 1),
(63, 'sdfsa', 'asdasd', '12-07-2014', '18:43:19', 1, 0, 'Piyush Bajaj', 0, 'php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE IF NOT EXISTS `registrationdetails` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `joining_date` varchar(10) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sec_email` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `sec_phone_no` int(12) DEFAULT NULL,
  `B_day` varchar(10) DEFAULT NULL,
  `PAN` varchar(20) DEFAULT NULL,
  `device_issued` varchar(30) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `cpass` varchar(20) DEFAULT NULL,
  `no_of_posts` int(10) DEFAULT NULL,
  `score` varchar(10) DEFAULT NULL,
  `php` tinyint(1) DEFAULT NULL,
  `android` tinyint(1) DEFAULT NULL,
  `ios` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `registrationdetails`
--

INSERT INTO `registrationdetails` (`employee_id`, `joining_date`, `fname`, `lname`, `email`, `sec_email`, `address`, `phone_no`, `sec_phone_no`, `B_day`, `PAN`, `device_issued`, `pass`, `cpass`, `no_of_posts`, `score`, `php`, `android`, `ios`) VALUES
(1, '12-01-2011', 'Abhishek ', 'Kaushal', 'AbhishekKaushal@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', NULL, NULL, 1, 1, 0),
(2, NULL, 'Avinash', 'Raj', 'AvinashRaj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', NULL, NULL, 1, 1, 0),
(3, NULL, 'Piyush', 'Bajaj', 'piyushbajaj0704@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', NULL, NULL, 1, 1, 1),
(4, NULL, 'Surjan', 'Negi', 'surjan_negi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', NULL, NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signindetails`
--

CREATE TABLE IF NOT EXISTS `signindetails` (
  `signin_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `fname` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `date` date DEFAULT NULL,
  `signin` varchar(100) DEFAULT NULL,
  `signout` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `totaltime` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`signin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `signindetails`
--

INSERT INTO `signindetails` (`signin_id`, `employee_id`, `fname`, `date`, `signin`, `signout`, `totaltime`) VALUES
(7, 111, 'sgh', '2013-12-09', '2013-12-09 15:59:08', '2014-05-27 21:50:02', '838:59:59.000000'),
(8, 112, 'rashmi', '2013-12-09', '2013-12-09 16:42:40', '2013-12-30 00:29:12', '487:46:32'),
(12, 112, 'rashmi', '2013-12-15', '2013-12-15 11:26:48', '2013-12-30 00:29:12', '349:02:24'),
(13, 111, 'sgh', '2013-12-15', '2013-12-15 11:30:55', '2014-05-27 21:50:02', '838:59:59.000000'),
(14, 2, 'anshul', '2013-12-15', '2013-12-15 12:43:26', NULL, NULL),
(15, 111, 'sgh', '2013-12-29', '2013-12-29 10:23:07', '2014-05-27 21:50:02', '838:59:59.000000'),
(16, 112, 'anshul', '2013-12-29', '2013-12-29 23:45:45', '2013-12-30 00:29:12', '00:43:27'),
(17, 111, 'sgh', '2013-12-30', '2013-12-30 08:24:17', '2014-05-27 21:50:02', '838:59:59.000000'),
(18, 113, 'dnkldv', '2013-12-30', '2013-12-30 08:25:52', '2014-05-30 12:29:30', '838:59:59.000000'),
(19, 113, 'dnkldv', '2014-01-21', '2014-01-21 14:03:07', '2014-05-30 12:29:30', '838:59:59.000000'),
(20, 113, 'dnkldv', '2014-01-22', '2014-01-22 10:04:54', '2014-05-30 12:29:30', '838:59:59.000000'),
(21, 113, 'dnkldv', '2014-01-24', '2014-01-24 13:24:14', '2014-05-30 12:29:30', '838:59:59.000000'),
(22, 113, 'dnkldv', '2014-01-27', '2014-01-27 11:10:14', '2014-05-30 12:29:30', '838:59:59.000000'),
(23, 117, 'vn,f', '2014-01-27', '2014-01-27 18:43:12', '2014-05-28 13:45:07', '838:59:59.000000'),
(24, 244, '', '2014-01-27', '2014-01-27 19:46:09', '2014-01-27 20:02:29', '00:16:20.000000'),
(25, 245, '', '2014-01-27', '2014-01-27 20:03:41', NULL, NULL),
(26, 113, 'dnkldv', '2014-01-28', '2014-01-28 11:51:43', '2014-05-30 12:29:30', '838:59:59.000000'),
(27, 113, 'dnkldv', '2014-01-29', '2014-01-29 11:09:24', '2014-05-30 12:29:30', '838:59:59.000000'),
(28, 113, 'dnkldv', '2014-01-30', '2014-01-30 11:19:58', '2014-05-30 12:29:30', '838:59:59.000000'),
(29, 113, 'Piyush question guy', '2014-01-31', '2014-01-31 10:49:03', '2014-05-30 12:29:30', '838:59:59.000000'),
(30, 113, 'Piyush', '2014-02-01', '2014-02-01 10:46:00', '2014-05-30 12:29:30', '838:59:59.000000'),
(31, 117, 'vn,f', '2014-02-01', '2014-02-01 14:48:22', '2014-05-28 13:45:07', '838:59:59.000000'),
(32, 115, 'surjan', '2014-02-01', '2014-02-01 14:54:23', '2014-05-29 01:30:46', '838:59:59.000000'),
(33, 113, 'Piyush', '2014-02-06', '2014-02-06 16:41:23', '2014-05-30 12:29:30', '838:59:59.000000'),
(34, 113, 'Piyush', '2014-02-09', '2014-02-09 17:44:16', '2014-05-30 12:29:30', '838:59:59.000000'),
(35, 113, 'Piyush', '2014-02-16', '2014-02-16 11:34:36', '2014-05-30 12:29:30', '838:59:59.000000'),
(36, 113, 'Piyush', '2014-02-17', '2014-02-17 22:28:12', '2014-05-30 12:29:30', '838:59:59.000000'),
(37, 113, 'Piyush', '2014-02-22', '2014-02-22 18:06:04', '2014-05-30 12:29:30', '838:59:59.000000'),
(38, 113, 'Piyush', '2014-02-23', '2014-02-23 10:59:51', '2014-05-30 12:29:30', '838:59:59.000000'),
(39, 113, 'Piyush', '2014-02-27', '2014-02-27 11:42:47', '2014-05-30 12:29:30', '838:59:59.000000'),
(40, 113, 'Piyush', '2014-03-03', '2014-03-04 01:48:05', '2014-05-30 12:29:30', '838:59:59.000000'),
(41, 113, 'Piyush', '2014-03-13', '2014-03-14 00:36:50', '2014-05-30 12:29:30', '838:59:59.000000'),
(42, 113, 'Piyush', '2014-03-16', '2014-03-16 20:00:25', '2014-05-30 12:29:30', '838:59:59.000000'),
(43, 113, 'Piyush', '2014-03-18', '2014-03-19 01:50:18', '2014-05-30 12:29:30', '838:59:59.000000'),
(44, 113, 'Piyush', '2014-03-19', '2014-03-19 18:41:05', '2014-05-30 12:29:30', '838:59:59.000000'),
(45, 113, 'Piyush', '2014-03-22', '2014-03-22 22:31:14', '2014-05-30 12:29:30', '838:59:59.000000'),
(46, 113, 'Piyush', '2014-03-23', '2014-03-23 09:01:07', '2014-05-30 12:29:30', '838:59:59.000000'),
(47, 117, 'vn,f', '2014-03-23', '2014-03-24 00:33:48', '2014-05-28 13:45:07', '838:59:59.000000'),
(48, 117, 'vn,f', '2014-05-01', '2014-05-02 00:12:15', '2014-05-28 13:45:07', '637:32:52.000000'),
(49, 113, 'Piyush', '2014-05-01', '2014-05-02 00:12:35', '2014-05-30 12:29:30', '684:16:55.000000'),
(50, 113, 'Piyush', '2014-05-08', '2014-05-09 00:12:30', '2014-05-30 12:29:30', '516:17:00.000000'),
(51, 117, 'vn,f', '2014-05-08', '2014-05-09 02:36:32', '2014-05-28 13:45:07', '467:08:35.000000'),
(52, 115, 'surjan', '2014-05-08', '2014-05-09 02:36:45', '2014-05-29 01:30:46', '478:54:01.000000'),
(53, 115, 'surjan', '2014-05-18', '2014-05-18 12:03:12', '2014-05-29 01:30:46', '253:27:34.000000'),
(54, 115, 'surjan', '2014-05-20', '2014-05-21 02:04:45', '2014-05-29 01:30:46', '191:26:01.000000'),
(55, 115, 'surjan', '2014-05-21', '2014-05-21 16:56:09', '2014-05-29 01:30:46', '176:34:37.000000'),
(56, 117, 'vn,f', '2014-05-21', '2014-05-21 21:37:51', '2014-05-28 13:45:07', '160:07:16.000000'),
(57, 113, 'Piyush', '2014-05-21', '2014-05-21 21:38:09', '2014-05-30 12:29:30', '206:51:21.000000'),
(58, 113, 'Piyush', '2014-05-22', '2014-05-22 11:34:54', '2014-05-30 12:29:30', '192:54:36.000000'),
(59, 113, 'Piyush', '2014-05-23', '2014-05-23 16:30:06', '2014-05-30 12:29:30', '163:59:24.000000'),
(60, 117, 'vn,f', '2014-05-23', '2014-05-23 17:51:07', '2014-05-28 13:45:07', '115:54:00.000000'),
(61, 115, 'surjan', '2014-05-23', '2014-05-23 18:00:54', '2014-05-29 01:30:46', '127:29:52.000000'),
(62, 115, 'surjan', '2014-05-24', '2014-05-24 21:09:51', '2014-05-29 01:30:46', '100:20:55.000000'),
(63, 115, 'surjan', '2014-05-25', '2014-05-25 15:01:19', '2014-05-29 01:30:46', '82:29:27.000000'),
(64, 115, 'surjan', '2014-05-26', '2014-05-26 16:40:10', '2014-05-29 01:30:46', '56:50:36.000000'),
(65, 115, 'surjan', '2014-05-27', '2014-05-27 11:21:15', '2014-05-29 01:30:46', '38:09:31.000000'),
(66, 113, 'Piyush', '2014-05-27', '2014-05-27 17:15:04', '2014-05-30 12:29:30', '67:14:26.000000'),
(67, 117, 'vn,f', '2014-05-27', '2014-05-27 17:18:27', '2014-05-28 13:45:07', '20:26:40.000000'),
(68, 111, 'bkhrg', '2014-05-27', '2014-05-27 21:47:24', '2014-05-27 21:50:02', '00:02:38.000000'),
(69, 113, 'Piyush', '2014-05-28', '2014-05-28 10:45:58', '2014-05-30 12:29:30', '49:43:32.000000'),
(70, 117, 'vn,f', '2014-05-28', '2014-05-28 13:08:27', '2014-05-28 13:45:07', '00:36:40.000000'),
(71, 115, 'surjan', '2014-05-28', '2014-05-28 13:45:10', '2014-05-29 01:30:46', '11:45:36.000000'),
(72, 113, 'Piyush', '2014-05-30', '2014-05-30 12:09:32', '2014-05-30 12:29:30', '00:19:58.000000'),
(73, 1, 'Abhishek ', '2014-05-30', '2014-05-30 12:33:24', '2014-07-12 18:43:53', '838:59:59.000000'),
(74, 119, 'Avinash', '2014-05-30', '2014-05-30 12:42:31', '2014-07-12 18:15:50', '838:59:59.000000'),
(75, 1, 'Abhishek ', '2014-05-31', '2014-05-31 12:00:59', '2014-07-12 18:43:53', '838:59:59.000000'),
(76, 119, 'Avinash', '2014-05-31', '2014-05-31 12:07:41', '2014-07-12 18:15:50', '838:59:59.000000'),
(77, 1, 'Abhishek ', '2014-06-03', '2014-06-03 21:36:14', '2014-07-12 18:43:53', '838:59:59.000000'),
(78, 1, 'Abhishek ', '2014-06-04', '2014-06-04 17:36:46', '2014-07-12 18:43:53', '838:59:59.000000'),
(79, 1, 'Abhishek ', '2014-07-09', '2014-07-09 23:18:03', '2014-07-12 18:43:53', '67:25:50.000000'),
(80, 1, 'Abhishek ', '2014-07-10', '2014-07-10 11:07:39', '2014-07-12 18:43:53', '55:36:14.000000'),
(81, 3, 'Piyush', '2014-07-10', '2014-07-10 13:10:35', '2014-07-12 20:02:32', '54:51:57.000000'),
(82, 119, 'Avinash', '2014-07-10', '2014-07-10 13:10:51', '2014-07-12 18:15:50', '53:04:59.000000'),
(83, 119, 'Avinash', '2014-07-11', '2014-07-11 22:27:35', '2014-07-12 18:15:50', '19:48:15.000000'),
(84, 119, 'Avinash', '2014-07-12', '2014-07-12 15:31:00', '2014-07-12 18:15:50', '02:44:50.000000'),
(85, 1, 'Abhishek ', '2014-07-12', '2014-07-12 16:07:40', '2014-07-12 18:43:53', '02:36:13.000000'),
(86, 3, 'Piyush', '2014-07-12', '2014-07-12 18:17:41', '2014-07-12 20:02:32', '01:44:51.000000'),
(87, 4, 'Surjan', '2014-07-12', '2014-07-12 18:28:47', '2014-07-12 18:36:18', '00:07:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tag_eid`
--

CREATE TABLE IF NOT EXISTS `tag_eid` (
  `employee_id` int(11) NOT NULL,
  `tag_eid` int(11) NOT NULL,
  `dont_tag_status` int(1) NOT NULL,
  PRIMARY KEY (`employee_id`,`tag_eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag_eid`
--

INSERT INTO `tag_eid` (`employee_id`, `tag_eid`, `dont_tag_status`) VALUES
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(3, 1, 0),
(3, 2, 0),
(3, 4, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `question` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idea`
--
ALTER TABLE `idea`
  ADD CONSTRAINT `idea_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `registrationdetails` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_answers`
--
ALTER TABLE `like_answers`
  ADD CONSTRAINT `fkkk1` FOREIGN KEY (`id`) REFERENCES `answer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_Qeid` FOREIGN KEY (`employee_id`) REFERENCES `registrationdetails` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
