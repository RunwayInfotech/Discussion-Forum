-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 09:19 PM
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
(111, 'madhura', 'xyz', 'madhura@treewalker.in', 2147483647, 'dkfhaeriufoiewrfnlk');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `q_id`, `employee_id`, `answer`, `adate`, `atime`, `likes`) VALUES
(1, 1, 113, 'The following contributors should be recognized for the impact they have made and/or continue to make by adding content to the manual: Bill Abt, Jouni Ahto, Alexander Aulbach, Daniel Beckham, Stig Bakken, Nilgün Belma Bugüner, Jesus M. Castagnetto, Ron Chmara, Sean Coates, John Coggeshall, Simone Cortesi, Peter Cowburn, Daniel Egeberg, Markus Fischer, Wez Furlong, Sara Golemon, Rui Hirokawa, Brad House, Pierre-Alain Joye, Etienne Kneuss, Moriyoshi Koizumi, Rasmus Lerdorf, Andrew Lindeman, Stanislav Malyshev, Justin Martin, Rafael Martinez, Rick McGuire, Moacir de Oliveira Miranda Júnior, Kalle Sommer Nielsen, Yasuo Ohgaki, Richard.', '12/1/2013', '12:12', 0),
(3, 1, 116, 'here are no user contributed notes for this page.', '01/12/2014', '11:45', 0),
(17, 4, 117, ' bgnjhyngtrnngfng', '01-02-2014', '13:50', 0),
(18, 3, 117, ' cwd', '01-02-2014', '13:57', 0),
(19, 1, 113, ' hbtdbtrh', '06-02-2014', '19:27', 0),
(20, 16, 113, ' dcvdv', '06-02-2014', '19:49', 0),
(21, 11, 113, ' dsvdvsdv', '06-02-2014', '19:50', 0),
(22, 2, 113, ' fewfewf', '06-02-2014', '19:52', 0),
(23, 2, 113, ' dvdv', '06-02-2014', '19:53', 0),
(24, 10, 113, ' wefwef', '06-02-2014', '19:53', 0),
(25, 10, 113, ' gnftnt', '04-03-2014', '01:48', 0),
(26, 1, 113, ' gjdgggggggggggggggggggggggggggggggggggggggggggggggggggggg', '19-03-2014', '18:41', 0),
(27, 1, 113, ' sdwqdd', '23-03-2014', '11:55', 0),
(28, 1, 113, ' sdwqdd', '23-03-2014', '11:56', 0),
(29, 1, 113, ' sdwqddxcws', '23-03-2014', '11:59', 0),
(30, 1, 113, ' k', '23-03-2014', '12:05', 0),
(31, 1, 113, ' k', '23-03-2014', '12:06', 0),
(32, 1, 113, ' dfg', '23-03-2014', '17:17', 0),
(33, 1, 113, ' fwfe', '24-03-2014', '00:32', 0),
(34, 1, 113, ' fwfe', '24-03-2014', '00:33', 0),
(35, 1, 117, ' dwdq', '24-03-2014', '00:34', 0),
(36, 1, 117, ' dwqd', '24-03-2014', '00:40', 0),
(37, 1, 117, ' wdqd', '24-03-2014', '00:41', 0),
(38, 1, 117, ' qwe', '24-03-2014', '00:42', 0),
(39, 1, 117, ' wdqd', '24-03-2014', '00:42', 0),
(40, 1, 117, ' wefdewfw', '24-03-2014', '00:48', 0),
(41, 1, 113, ' rg', '02-05-2014', '00:13', 0),
(42, 2, 113, ' ngnfnf', '09-05-2014', '00:39', 0),
(49, 1, 115, ' sac', '09-05-2014', '03:19', 0),
(50, 1, 115, ' faf', '09-05-2014', '03:19', 0),
(51, 1, 115, ' A succession of South Indian dynasties, the Western Gangas, the Cholas, and the Hoysalas ruled the present region of Bangalore until in 1537 CE, Kempé Gowdā — a feudatory ruler under the Vijayanagara Empire — established a mud fort considered to be the foundation of modern Bangalore. Following transitory occupation by the Marāthās and Mughals, the city remained under the Mysore Kingdom. It later passed into the hands of Hyder Ali and hisIn word processing and desktop publisWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averageWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averageWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averageWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averageWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averageWidows and orphans occur when the first line of a paragraph is the last line in a column or page, or when the last line of a paragraph is the first line of a new column or page.\n\nProfessionally printed material in English typically does not indent the first paragraph, but indents those that follow. For example, Robert Bringhurst states that we should "Set opening paragraphs flush left."[4] Bringhurst explains as follows.\n\n"The function of a paragraph is to mark a pause, setting the paragraph apart from what precedes it. If a paragraph is preceded by a title or subhead, the indent is superfluous and can therefore be omitted."[4]\n\nThe Elements of Typographic Style states that "at least one en [space]" should be used to indent paragraphs after the first,[4] noting that that is the "practical minimum".[5] An em space is the most commonly used paragraph indent.[5] Miles Tinker, in his book Legibility of Print, concluded that indenting the first line of paragraphs increases readability by 7%, on the averagehing, a hard return or paragraph break indicates a new paragraph, to be distinguished from the soft return at the end of a line internal to a paragraph. This distinction allows word wrap to automatically re-flow text as it is edited, without losing paragraph breaks. The software may apply vertical whitespace or indenting at paragraph breaks, depending on the selected style.How such documented are actually stored depends on the file format. For example, HTML uses the tag as a paragraph container. In plaintext files, there are two common formats. Pre-formatted text will have a newline at the end of every physical line, and two newlines at the end of a paragraph, creating a blank line. An alternative is to only put newlines at the end of each paragraph, and leave word wrapping up to the application that displays or processes the text (if it is even necessary). son Tipu Sultan, and was captured b', '09-05-2014', '03:23', 0),
(52, 32, 115, ' asdasd', '21-05-2014', '21:19', 0),
(53, 32, 115, ' asd', '21-05-2014', '21:20', 0),
(54, 32, 115, ' asd', '21-05-2014', '21:20', 0),
(55, 32, 115, ' asd', '21-05-2014', '21:20', 0),
(56, 2, 115, ' sad', '21-05-2014', '21:21', 0),
(57, 2, 115, ' <html>sdfsg<html>', '21-05-2014', '21:21', 0),
(58, 2, 115, ' <html>fsdg</htmdl>', '21-05-2014', '21:21', 0),
(59, 2, 115, ' <html>piyush', '21-05-2014', '21:22', 0),
(60, 1, 113, ' sdfsd', '23-05-2014', '17:46', 0),
(61, 1, 113, ' asda', '23-05-2014', '17:47', 0),
(62, 1, 113, ' asda', '23-05-2014', '17:48', 0),
(63, 1, 113, ' asda', '23-05-2014', '17:48', 0);

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
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `q_id` int(11) NOT NULL,
  `like` int(3) DEFAULT NULL,
  `dislike` int(3) DEFAULT NULL,
  `count` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `like_answer`
--

CREATE TABLE IF NOT EXISTS `like_answer` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `like_answer`
--

INSERT INTO `like_answer` (`lid`, `employee_id`, `id`, `status`) VALUES
(1, 113, 1, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `topic`, `detail`, `pdate`, `qtime`, `employee_id`, `status`, `tag`, `reply`, `skill`, `send_mail`) VALUES
(1, 'Zend Framework Installation', 'Zend Technologies provides a PHP stack, Zend Server (or Zend Server Community Edition), which is advertised to be optimized for running Zend Framework applications. Zend Server includes Zend Framework in its installers, along with PHP and all required extensions. According to Zend Technologies, Zend Server provides improved performance for PHP and especially Zend Framework applications through opcode acceleration and several caching capabilities, and includes application monitoring anddiagnostics', '12/11/2013', '14:00', 113, 1, NULL, 0, 'php', 1),
(2, 'A new major version has been under.', NULL, '4/4/2014', '3:56', 115, 0, NULL, 2, 'php', NULL),
(3, 'Android is an operating system .', 'Android is an operating system based on the Linux kernel,[12] and designed primarily for touchscreen mobile devices such as smartphones and tablet computers. Initially developed by Android, Inc., which Google backed financially and later bought in 2005,[13] Android was unveiled in 2007 along with the founding of the Open Handset Alliance: a consortium of hardware, software, and telecommunication companies devoted to advancing open standards for mobile devices', '12/12/2013', '3:22', 113, 0, NULL, 3, 'android', NULL),
(4, 'ios rocks really ??', 'ios is very good in terms of UI ', '11/1/2012', '05:56', 117, 0, NULL, 1, 'ios', NULL),
(5, 'fewf', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(6, 'fewf', 'efew', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(7, 'fewf', 'efew', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(8, 'fewf', 'efew', '29-01-2014', '18:39:', 0, 0, NULL, NULL, NULL, NULL),
(9, 'dwwqd', 'dwqdwq', '29-01-2014', '18:40:49', 113, 0, NULL, 0, 'php', NULL),
(10, 'greg', 'rgeg', '29-01-2014', '18:46:38', 113, 0, NULL, 0, 'php', NULL),
(11, 'ewqfd', 'fewfew', '29-01-2014', '18:59:45', 113, 0, NULL, 0, 'php', NULL),
(12, 'polo', 'fefew', '29-01-2014', '19:00:00', 113, 0, NULL, 0, 'android', NULL),
(13, 'helo', 'wqwq', '29-01-2014', '19:01:13', 113, 0, NULL, 0, 'ios', NULL),
(14, '', '', '29-01-2014', '19:12:07', 113, 0, NULL, 0, 'ios', NULL),
(16, 'This is piyush bajaj live from php', 'vdsvfds vg\n', '06-02-2014', '19:35', 113, 0, '', 0, 'php', NULL),
(17, 'sdfsdf', 'safdaaf', '18-05-2014', '12:08', 115, 0, 'Piyush Bajaj', 0, 'php', 1),
(18, 'asd', 'asdasd', '18-05-2014', '12:35', 115, 0, '', 0, 'php', 0),
(19, 'sad', 'ad', '18-05-2014', '12:42', 115, 0, 'asd', 0, 'php', 0),
(20, 'code', '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">\r\n<html>\r\n<head>\r\n    <title>Test Embedded textareas</title>\r\n</head>\r\n<body>\r\n    <form method="POST">\r\n        <textarea>\r\n            Outside Textarea\r\n            &lt;textarea&gt;Inside Textarea&lt;/textarea&gt;\r\n        </textarea>\r\n        <input type="submit" value="Submit" />\r\n    </form>\r\n</body>\r\n</html>', '18-05-2014', '14:21', 115, 0, 'Piyush Bajaj', 0, 'php', 0),
(21, 'hello', 'How to change code ereg to preg_match\n\ncode 1 :\n\n$protocol = ''(http://|https://)'';\n$allowed = ''([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'';\n$regex = "^". $protocol . ''('' . $allowed . ''{1,63}\\.)+''. ''[a-z]'' . ''{2,6}'';\nif(eregi($regex, $url) == true){ return true; }else{ return false; }\ncode 2 :\n\n while(!ereg("[a-zA-Z0-9]", $char))\n        {\n            if($char == $lchar) { continue; }\n            $char = chr(rand(48,90));\n        }', '21-05-2014', '03:15', 115, 0, 'surjan negi', 0, 'php', 0),
(23, 'qwdq', '$(function(){\r\n    var $sfield = $(''#location_search'').autocomplete({\r\n        source: function(request, response){\r\n            var url = "<?php echo site_url(''autocomplete/control_areas''); ?>";\r\n              $.post(url, {data:request.term}, function(data){\r\n                response($.map(data, function(countries) {\r\n                    return {\r\n                        value: countries.name_en\r\n                    };\r\n                }));\r\n              }, "json");  \r\n        },\r\n        minLength: 2,\r\n        autofocus: true\r\n    });\r\n});', '21-05-2014', '17:07', 115, 0, '', 0, 'php', 0),
(24, 'ad', '    $(function(){\n    var $sfield = $(''#location_search'').autocomplete({\n        source: function(request, response){\n            var url = "<?php echo site_url(''autocomplete/control_areas''); ?>";\n              $.post(url, {data:request.term}, function(data){\n                response($.map(data, function(countries) {\n                    return {\n                        value: countries.name_en\n                    };\n                }));\n              }, "json");  \n        },\n        minLength: 2,\n        autofocus: true\n    });\n});', '21-05-2014', '17:16', 115, 0, '', 0, 'php', 0),
(25, '<?php ?>', '<?php ?>', '21-05-2014', '17:17', 115, 0, '', 0, 'php', 0),
(26, '  <html> fdf</html>', '    <html> fdf</html>', '21-05-2014', '17:20', 115, 0, '', 0, 'php', 0),
(31, '<html>ds</htyml>', '    <html>ds</htyml> esfsef', '21-05-2014', '17:54', 115, 0, '', 0, 'php', 0),
(32, 'adawdawdaw', '    $(function(){\r\n    var $sfield = $(''#location_search'').autocomplete({\r\n        source: function(request, response){\r\n            var url = "<?php echo site_url(''autocomplete/control_areas''); ?>";\r\n              $.post(url, {data:request.term}, function(data){\r\n                response($.map(data, function(countries) {\r\n                    return {\r\n                        value: countries.name_en\r\n                    };\r\n                }));\r\n              }, "json");  \r\n        },\r\n        minLength: 2,\r\n        autofocus: true\r\n    });\r\n});\r\ncontroller:\r\n\r\nfunction control_areas(){\r\n    $this->load->model(''autocomplete_model'');\r\n    $term = $this->input->get(''term'', TRUE);\r\n    $countries = $this->autocomplete_model->get_areas($term);\r\n    echo json_encode($countries);\r\n}\r\nmodel:\r\n\r\nfunction get_areas($term){\r\n    $this->db->where(''name_en'', $term);\r\n    $query = $this->db->get(''countries'');\r\n    return $query->result(); \r\n}', '21-05-2014', '19:19', 115, 0, '', 0, 'php', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `registrationdetails`
--

INSERT INTO `registrationdetails` (`employee_id`, `joining_date`, `fname`, `lname`, `email`, `sec_email`, `address`, `phone_no`, `sec_phone_no`, `B_day`, `PAN`, `device_issued`, `pass`, `cpass`, `no_of_posts`, `score`, `php`, `android`, `ios`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '244', '244', NULL, NULL, 1, 1, 1),
(111, 'rashmi', 'bkhrg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', 0, '', 0, 0, 0),
(113, 'ndjvndv', 'Piyush', 'Bajaj', 'piyushbajaj0704@gmail.com', 'mvfv', 'vmfv', '4546', 445656, '1990-12-09', NULL, NULL, '123', '123', 0, '', 1, 1, 1),
(115, 'j;ogkjstgh', 'surjan', 'negi', 'mnbklgjb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '115', '115', 0, '', 1, 0, 1),
(116, ',nhlkbjb', 'Alpana', 'Chawla', 'nbft', 'b,g', 'bm', NULL, NULL, NULL, NULL, NULL, '116', '116', 0, '', 0, 0, 0),
(117, 'mnb,bn', 'vn,f', ',mfnb', 'mfnb', ' mfnb', NULL, NULL, NULL, NULL, NULL, NULL, '117', '117', 0, '', 1, 0, 1),
(226, NULL, NULL, NULL, 'rahul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(228, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(231, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(236, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(238, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0),
(243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1),
(245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '245', '245', NULL, NULL, 0, 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `signindetails`
--

INSERT INTO `signindetails` (`signin_id`, `employee_id`, `fname`, `date`, `signin`, `signout`, `totaltime`) VALUES
(7, 111, 'sgh', '2013-12-09', '2013-12-09 15:59:08', '2013-12-30 08:25:12', '496:26:04'),
(8, 112, 'rashmi', '2013-12-09', '2013-12-09 16:42:40', '2013-12-30 00:29:12', '487:46:32'),
(12, 112, 'rashmi', '2013-12-15', '2013-12-15 11:26:48', '2013-12-30 00:29:12', '349:02:24'),
(13, 111, 'sgh', '2013-12-15', '2013-12-15 11:30:55', '2013-12-30 08:25:12', '356:54:17'),
(14, 2, 'anshul', '2013-12-15', '2013-12-15 12:43:26', NULL, NULL),
(15, 111, 'sgh', '2013-12-29', '2013-12-29 10:23:07', '2013-12-30 08:25:12', '22:02:05'),
(16, 112, 'anshul', '2013-12-29', '2013-12-29 23:45:45', '2013-12-30 00:29:12', '00:43:27'),
(17, 111, 'sgh', '2013-12-30', '2013-12-30 08:24:17', '2013-12-30 08:25:12', '00:00:55'),
(18, 113, 'dnkldv', '2013-12-30', '2013-12-30 08:25:52', '2014-05-23 17:51:27', '838:59:59.000000'),
(19, 113, 'dnkldv', '2014-01-21', '2014-01-21 14:03:07', '2014-05-23 17:51:27', '838:59:59.000000'),
(20, 113, 'dnkldv', '2014-01-22', '2014-01-22 10:04:54', '2014-05-23 17:51:27', '838:59:59.000000'),
(21, 113, 'dnkldv', '2014-01-24', '2014-01-24 13:24:14', '2014-05-23 17:51:27', '838:59:59.000000'),
(22, 113, 'dnkldv', '2014-01-27', '2014-01-27 11:10:14', '2014-05-23 17:51:27', '838:59:59.000000'),
(23, 117, 'vn,f', '2014-01-27', '2014-01-27 18:43:12', '2014-05-23 18:00:52', '838:59:59.000000'),
(24, 244, '', '2014-01-27', '2014-01-27 19:46:09', '2014-01-27 20:02:29', '00:16:20.000000'),
(25, 245, '', '2014-01-27', '2014-01-27 20:03:41', NULL, NULL),
(26, 113, 'dnkldv', '2014-01-28', '2014-01-28 11:51:43', '2014-05-23 17:51:27', '838:59:59.000000'),
(27, 113, 'dnkldv', '2014-01-29', '2014-01-29 11:09:24', '2014-05-23 17:51:27', '838:59:59.000000'),
(28, 113, 'dnkldv', '2014-01-30', '2014-01-30 11:19:58', '2014-05-23 17:51:27', '838:59:59.000000'),
(29, 113, 'Piyush question guy', '2014-01-31', '2014-01-31 10:49:03', '2014-05-23 17:51:27', '838:59:59.000000'),
(30, 113, 'Piyush', '2014-02-01', '2014-02-01 10:46:00', '2014-05-23 17:51:27', '838:59:59.000000'),
(31, 117, 'vn,f', '2014-02-01', '2014-02-01 14:48:22', '2014-05-23 18:00:52', '838:59:59.000000'),
(32, 115, 'surjan', '2014-02-01', '2014-02-01 14:54:23', '2014-05-21 21:37:46', '838:59:59.000000'),
(33, 113, 'Piyush', '2014-02-06', '2014-02-06 16:41:23', '2014-05-23 17:51:27', '838:59:59.000000'),
(34, 113, 'Piyush', '2014-02-09', '2014-02-09 17:44:16', '2014-05-23 17:51:27', '838:59:59.000000'),
(35, 113, 'Piyush', '2014-02-16', '2014-02-16 11:34:36', '2014-05-23 17:51:27', '838:59:59.000000'),
(36, 113, 'Piyush', '2014-02-17', '2014-02-17 22:28:12', '2014-05-23 17:51:27', '838:59:59.000000'),
(37, 113, 'Piyush', '2014-02-22', '2014-02-22 18:06:04', '2014-05-23 17:51:27', '838:59:59.000000'),
(38, 113, 'Piyush', '2014-02-23', '2014-02-23 10:59:51', '2014-05-23 17:51:27', '838:59:59.000000'),
(39, 113, 'Piyush', '2014-02-27', '2014-02-27 11:42:47', '2014-05-23 17:51:27', '838:59:59.000000'),
(40, 113, 'Piyush', '2014-03-03', '2014-03-04 01:48:05', '2014-05-23 17:51:27', '838:59:59.000000'),
(41, 113, 'Piyush', '2014-03-13', '2014-03-14 00:36:50', '2014-05-23 17:51:27', '838:59:59.000000'),
(42, 113, 'Piyush', '2014-03-16', '2014-03-16 20:00:25', '2014-05-23 17:51:27', '838:59:59.000000'),
(43, 113, 'Piyush', '2014-03-18', '2014-03-19 01:50:18', '2014-05-23 17:51:27', '838:59:59.000000'),
(44, 113, 'Piyush', '2014-03-19', '2014-03-19 18:41:05', '2014-05-23 17:51:27', '838:59:59.000000'),
(45, 113, 'Piyush', '2014-03-22', '2014-03-22 22:31:14', '2014-05-23 17:51:27', '838:59:59.000000'),
(46, 113, 'Piyush', '2014-03-23', '2014-03-23 09:01:07', '2014-05-23 17:51:27', '838:59:59.000000'),
(47, 117, 'vn,f', '2014-03-23', '2014-03-24 00:33:48', '2014-05-23 18:00:52', '838:59:59.000000'),
(48, 117, 'vn,f', '2014-05-01', '2014-05-02 00:12:15', '2014-05-23 18:00:52', '521:48:37.000000'),
(49, 113, 'Piyush', '2014-05-01', '2014-05-02 00:12:35', '2014-05-23 17:51:27', '521:38:52.000000'),
(50, 113, 'Piyush', '2014-05-08', '2014-05-09 00:12:30', '2014-05-23 17:51:27', '353:38:57.000000'),
(51, 117, 'vn,f', '2014-05-08', '2014-05-09 02:36:32', '2014-05-23 18:00:52', '351:24:20.000000'),
(52, 115, 'surjan', '2014-05-08', '2014-05-09 02:36:45', '2014-05-21 21:37:46', '307:01:01.000000'),
(53, 115, 'surjan', '2014-05-18', '2014-05-18 12:03:12', '2014-05-21 21:37:46', '81:34:34.000000'),
(54, 115, 'surjan', '2014-05-20', '2014-05-21 02:04:45', '2014-05-21 21:37:46', '19:33:01.000000'),
(55, 115, 'surjan', '2014-05-21', '2014-05-21 16:56:09', '2014-05-21 21:37:46', '04:41:37.000000'),
(56, 117, 'vn,f', '2014-05-21', '2014-05-21 21:37:51', '2014-05-23 18:00:52', '44:23:01.000000'),
(57, 113, 'Piyush', '2014-05-21', '2014-05-21 21:38:09', '2014-05-23 17:51:27', '44:13:18.000000'),
(58, 113, 'Piyush', '2014-05-22', '2014-05-22 11:34:54', '2014-05-23 17:51:27', '30:16:33.000000'),
(59, 113, 'Piyush', '2014-05-23', '2014-05-23 16:30:06', '2014-05-23 17:51:27', '01:21:21.000000'),
(60, 117, 'vn,f', '2014-05-23', '2014-05-23 17:51:07', '2014-05-23 18:00:52', '00:09:45.000000'),
(61, 115, 'surjan', '2014-05-23', '2014-05-23 18:00:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voting_count`
--

CREATE TABLE IF NOT EXISTS `voting_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_content_id` varchar(100) NOT NULL,
  `vote_up` int(11) NOT NULL,
  `vote_down` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `question` (`q_id`);

--
-- Constraints for table `idea`
--
ALTER TABLE `idea`
  ADD CONSTRAINT `idea_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `registrationdetails` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_Qeid` FOREIGN KEY (`employee_id`) REFERENCES `registrationdetails` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `technoholix`
--
CREATE DATABASE IF NOT EXISTS `technoholix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `technoholix`;

-- --------------------------------------------------------

--
-- Table structure for table `temp_members`
--

CREATE TABLE IF NOT EXISTS `temp_members` (
  `code` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `paid` varchar(10) NOT NULL,
  UNIQUE KEY `usn` (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_members`
--

INSERT INTO `temp_members` (`code`, `name`, `email`, `phone`, `usn`, `semester`, `paid`) VALUES
('035f25565fb5c428955e6f950bbc250d', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi11cs074', 'te', 'Not Paid'),
('65f63389e9ec6bf843fce2dc56e2e087', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi11cs0q', 'te', 'Not Paid'),
('a714847da75321f168c3225c9aca8660', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi11cas0q', 'te', 'Not Paid'),
('c29ebac07b5118b5d2a34676fb8bb06e', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi11s0q', 'te', 'Not Paid'),
('49e8d85e3345c8116244c9c217d45317', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi1a1s0q', 'te', 'Not Paid'),
('f94a66dee6f96b7b4f9e69fdd441b4b3', 'Piyush Bajaj', 'technoholixbit@gmail.com', '4', '1bi1qa1s0q', 'te', 'Not Paid'),
('d208a6b0cb6428f4bb1cd674a5887cfa', 'Piyush Bajaj', 'piyushbajaj0704@gmail.com', '1', 'weew', 'er', 'Not Paid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
