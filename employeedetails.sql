/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.1.36-community-log : Database - employeedetails
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`employeedetails` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `employeedetails`;

/*Table structure for table `administrator` */

DROP TABLE IF EXISTS `administrator`;

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_no` int(15) DEFAULT NULL,
  `admin_post` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

/*Data for the table `administrator` */

insert  into `administrator`(`admin_id`,`Name`,`Fname`,`email`,`phone_no`,`admin_post`) values (111,'madhura','xyz','madhura@treewalker.in',2147483647,'dkfhaeriufoiewrfnlk');

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `post_by` varchar(100) DEFAULT NULL,
  `posts` varchar(50) DEFAULT NULL,
  `event_date` varchar(50) DEFAULT NULL,
  `event_details` varchar(600) DEFAULT NULL,
  `best_emp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `event` */

insert  into `event`(`event_id`,`employee_id`,`post_by`,`posts`,`event_date`,`event_details`,`best_emp`) values (1,2,'Anshul','2013-09-17','2013-12-31','party on the ocassion of rashmi\'s birthday','ABCXYZ'),(2,112,'rashmi','2013-12-15','2013-12-31','a small trip to goa',NULL);

/*Table structure for table `leave` */

DROP TABLE IF EXISTS `leave`;

CREATE TABLE `leave` (
  `employee_id` int(11) NOT NULL,
  `total_leave` int(40) DEFAULT NULL,
  `remaining_leave` int(40) DEFAULT NULL,
  `total_leave_taken` int(40) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `leave` */

/*Table structure for table `leave_record` */

DROP TABLE IF EXISTS `leave_record`;

CREATE TABLE `leave_record` (
  `emp_id` varchar(200) NOT NULL,
  `total_leave` int(200) DEFAULT NULL,
  `total_cl` int(200) DEFAULT NULL,
  `total_sl` int(200) DEFAULT NULL,
  `cl_taken` int(200) DEFAULT NULL,
  `sl_taken` int(200) DEFAULT NULL,
  `half_day` int(200) DEFAULT NULL,
  `remaining_leave` int(200) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `leave_record` */

insert  into `leave_record`(`emp_id`,`total_leave`,`total_cl`,`total_sl`,`cl_taken`,`sl_taken`,`half_day`,`remaining_leave`) values ('112',20,12,8,2,3,1,15);

/*Table structure for table `registrationdetails` */

DROP TABLE IF EXISTS `registrationdetails`;

CREATE TABLE `registrationdetails` (
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
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

/*Data for the table `registrationdetails` */

insert  into `registrationdetails`(`employee_id`,`joining_date`,`fname`,`lname`,`email`,`sec_email`,`address`,`phone_no`,`sec_phone_no`,`B_day`,`PAN`,`device_issued`,`pass`,`cpass`) values (111,'rashmi','bkhrg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'123'),(113,'ndjvndv','dnkldv','nkfnv','vmmffv','mvfv','vmfv','4546',445656,'1990-12-09',NULL,NULL,'123','123'),(116,',nhlkbjb','mnk.b','m bn,m','nbg,t','b,g','bm',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,'j;ogkjstgh','mnks','m.lmb','mnbklgjb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(117,'mnb,bn','vn,f',',mfnb','mfnb',' mfnb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `signindetails` */

DROP TABLE IF EXISTS `signindetails`;

CREATE TABLE `signindetails` (
  `signin_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `signin` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `signout` varchar(100) DEFAULT NULL,
  `totaltime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`signin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `signindetails` */

insert  into `signindetails`(`signin_id`,`employee_id`,`fname`,`date`,`signin`,`signout`,`totaltime`) values (8,112,'rashmi','2013-12-09','2013-12-09 16:42:40','2013-12-30 00:29:12','487:46:32'),(7,111,'sgh','2013-12-09','2013-12-09 15:59:08','2013-12-30 08:25:12','496:26:04'),(15,111,'sgh','2013-12-29','2013-12-29 10:23:07','2013-12-30 08:25:12','22:02:05'),(14,2,'anshul','2013-12-15','2013-12-15 12:43:26',NULL,NULL),(13,111,'sgh','2013-12-15','2013-12-15 11:30:55','2013-12-30 08:25:12','356:54:17'),(12,112,'rashmi','2013-12-15','2013-12-15 11:26:48','2013-12-30 00:29:12','349:02:24'),(16,112,'anshul','2013-12-29','2013-12-29 23:45:45','2013-12-30 00:29:12','00:43:27'),(17,111,'sgh','2013-12-30','2013-12-30 08:24:17','2013-12-30 08:25:12','00:00:55'),(18,113,'dnkldv','2013-12-30','2013-12-30 08:25:52','2013-12-30 08:30:43','00:04:51');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
