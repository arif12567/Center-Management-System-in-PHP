-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cms
CREATE DATABASE IF NOT EXISTS `cms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cms`;

-- Dumping structure for table cms.add_course
CREATE TABLE IF NOT EXISTS `add_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.add_course: ~5 rows (approximately)
/*!40000 ALTER TABLE `add_course` DISABLE KEYS */;
REPLACE INTO `add_course` (`course_id`, `subject_name`, `time`, `status`) VALUES
	(13, 'English', '2022-11-11 18:45:29', 1),
	(14, 'Computer', '2022-11-11 18:45:42', 1),
	(15, 'Urdu', '2022-11-11 18:45:58', 1),
	(16, 'Web Development', '2022-11-11 18:46:07', 1),
	(17, 'Sindhi', '2022-11-11 18:46:14', 1);
/*!40000 ALTER TABLE `add_course` ENABLE KEYS */;

-- Dumping structure for table cms.add_student
CREATE TABLE IF NOT EXISTS `add_student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `st` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.add_student: ~5 rows (approximately)
/*!40000 ALTER TABLE `add_student` DISABLE KEYS */;
REPLACE INTO `add_student` (`student_id`, `name`, `fname`, `caste`, `address`, `subject`, `teacher`, `st`, `status`) VALUES
	(7, 'Lal ', 'Shah Jab', 'Brohi', 'Karachi', 'Computer', 'Khaliq', '2022-11-11 18:49:17', 3),
	(8, 'Khair Jan', 'Naseer', 'Khoso', 'Jamshoro', 'Sindhi', 'Hakeem', '2022-11-11 18:50:07', 3),
	(9, 'Rehman', 'Khan lala', 'Brohi', 'Karachi', 'English', 'Adnan', '2022-11-11 18:50:49', 3),
	(10, 'Shamsher', 'Dil Murad', 'Magsi', 'Hyderabad', 'Urdu', 'Asghar', '2022-11-11 18:51:19', 3),
	(11, 'Saleem', 'Numaan', 'Rajput', 'Hyderabad', 'Web Development', 'Najeeb', '2022-11-11 18:51:51', 3);
/*!40000 ALTER TABLE `add_student` ENABLE KEYS */;

-- Dumping structure for table cms.add_teacher
CREATE TABLE IF NOT EXISTS `add_teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.add_teacher: ~5 rows (approximately)
/*!40000 ALTER TABLE `add_teacher` DISABLE KEYS */;
REPLACE INTO `add_teacher` (`teacher_id`, `name`, `caste`, `address`, `cnic`, `subject`, `time`, `status`) VALUES
	(10, 'Khaliq', 'Brohi', 'Shahdadkkot', '4434455534343', 'Computer', '2022-11-11 18:47:06', 2),
	(11, 'Adnan', 'Magsi', 'Karachi', '4434455534343', 'English', '2022-11-11 18:47:26', 2),
	(12, 'Hakeem', 'Khoso', 'Jamshoro', '4434455534343', 'Sindhi', '2022-11-11 18:47:52', 2),
	(13, 'Asghar', 'Magsi', 'Karachi', '4434455534343', 'Urdu', '2022-11-11 18:48:16', 2),
	(14, 'Najeeb', 'Mangel', 'Karachi', '4434455534343', 'Web Development', '2022-11-11 18:48:48', 2);
/*!40000 ALTER TABLE `add_teacher` ENABLE KEYS */;

-- Dumping structure for table cms.registrationform
CREATE TABLE IF NOT EXISTS `registrationform` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cms.registrationform: ~1 rows (approximately)
/*!40000 ALTER TABLE `registrationform` DISABLE KEYS */;
REPLACE INTO `registrationform` (`user_id`, `name`, `email`, `password`, `c_password`, `ts`, `status`) VALUES
	(0, 'A Khaliq Brohi', 'admin@gmail.com', '1234', '1234', '2020-12-06 05:43:32', 1);
/*!40000 ALTER TABLE `registrationform` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
