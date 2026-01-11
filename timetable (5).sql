-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 03:48 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ce`
--

CREATE TABLE `ce` (
  `fid` varchar(30) DEFAULT NULL,
  `cid` varchar(30) DEFAULT NULL,
  `slot` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ce`
--

INSERT INTO `ce` (`fid`, `cid`, `slot`, `id`) VALUES
('1001', 'CE-101', '1', 1),
('1001', 'CE-301', '9', 2),
('1001', 'CE-501', '17', 3),
('1001', 'CE-102', '25', 4),
('1002', 'CE-401', '11', 5),
('1002', 'CE-404', '19', 6),
('1002', 'CE-601', '27', 7),
('1002', 'CE-201', '3', 8),
('1003', 'CE-103', '2', 9),
('1003', 'CE-302', '10', 10),
('1003', 'CE-502', '18', 11),
('1003', 'CE-304', '26', 12),
('1004', 'CE-202', '4', 13),
('1004', 'CE-403', '12', 14),
('1004', 'CE-602', '20', 15),
('1004', 'CE-603', '28', 16),
('1005', 'CE-104', '5', 17),
('1005', 'CE-303', '13', 18),
('1005', 'CE-503', '21', 19),
('1005', 'CE-504', '29', 20),
('1006', 'CE-203', '6', 21),
('1006', 'CE-402', '14', 22),
('1006', 'CE-604', '22', 23),
('1006', 'CE-405', '30', 24),
('1007', 'CE-105', '7', 25),
('1007', 'CE-305', '15', 26),
('1007', 'CE-106', '23', 27),
('1007', 'CE-306', '31', 28),
('1008', 'CE-206', '16', 29),
('1006', 'CE-406', '24', 30),
('1008', 'CE-205', '32', 31),
('1008', 'CE-204', '8', 32);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` varchar(20) NOT NULL,
  `strength` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `strength`, `status`) VALUES
('', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `pass` varchar(10) DEFAULT '12345',
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `pass`, `name`, `email`, `contact`, `photo`) VALUES
(1001, '12345', '12345', 'chiragm12@gmail.com', '9898989898', 'upload_fp/f_4.png'),
(1002, '12345', 'Kumudrini Prajapati', 'kumudp123@gmail.com', '9898989898', 'upload_fp/f_2.png'),
(1003, '12345', 'Dhara Wagh', 'dharawagh12@gmail.com', '9898989898', 'upload_fp/f_11.jpg'),
(1004, '12345', 'Manisha Chaudhari', 'manisha123@gmail.com', '9898989898', 'upload_fp/f_8.jpg'),
(1005, '12345', 'Nrupesh Shah', 'nrupesh12@gmail.com', '9898989898', 'upload_fp/f_14.png'),
(1006, '12345', 'Ami Prajapati', 'amiprajapati@gmail.com', '7878788788', 'upload_fp/f_2.png'),
(1007, '12345', 'Shraddha Thakker', 'shraddhat23@yahoo.in', '1234567891', 'upload_fp/f_9.png'),
(1008, '12345', 'Vipul Chauhan', 'vipulchauhan45@gmail.com', '8989898998', 'upload_fp/f_13.png'),
(1009, '12345', 'Punit Sadwadkar', 'punitsadswadkar67@gmail.com', '7856734512', 'upload_fp/f_10.jpg'),
(1010, '12345', 'Komal Patel', 'komalpatel12@gmail.com', '9845123671', 'upload_fp/f_6.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `msg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `mobile`, `email`, `address`, `msg`) VALUES
('Test', '9898989898', 'abc@gmail.com', 'Lko', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `fid` varchar(30) DEFAULT NULL,
  `cid` varchar(30) DEFAULT NULL,
  `slot` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`fid`, `cid`, `slot`, `id`) VALUES
('1001', 'IT-101', '1', 12),
('1001', 'IT-301', '2', 13),
('1001', 'IT-501', '3', 14),
('1001', 'IT-304', '4', 15),
('1002', 'IT-201', '9', 16),
('1002', 'IT-401', '10', 17),
('1002', 'IT-601', '11', 18),
('1002', 'IT-205', '12', 19),
('1003', 'IT-102', '5', 20),
('1003', 'IT-302', '6', 21),
('1003', 'IT-502', '7', 22),
('1004', 'IT-202', '21', 23),
('1004', 'IT-402', '22', 24),
('1004', 'IT-602', '23', 25),
('1004', 'IT-206', '24', 26),
('1005', 'IT-104', '17', 27),
('1005', 'IT-303', '18', 28),
('1005', 'IT-503', '19', 29),
('1005', 'IT-105', '20', 30),
('1006', 'IT-203', '25', 31),
('1006', 'IT-404', '26', 32),
('1006', 'IT-405', '27', 33),
('1006', 'IT-406', '28', 34),
('1007', 'IT-305', '13', 35),
('1007', 'IT-106', '14', 36),
('1007', 'IT-306', '15', 37),
('1007', 'IT-604', '16', 38),
('1003', 'IT-603', '48', 39);

-- --------------------------------------------------------

--
-- Table structure for table `newstable`
--

CREATE TABLE `newstable` (
  `newsid` int(11) NOT NULL,
  `news` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstable`
--

INSERT INTO `newstable` (`newsid`, `news`, `description`) VALUES
(2, 'welcome to gpg', 'Goverment Polytechnic gandhinagae sec26'),
(3, 'Welcome to CE', 'CE deparment welcome all new student'),
(4, 'Welcome to IT', 'Welcome to all IT students'),
(5, 'semester 6 exam', '9 feb 2021');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(12) DEFAULT NULL,
  `cpass` varchar(12) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `division` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uname`, `pass`, `cpass`, `name`, `gender`, `mobile`, `address`, `status`, `sem`, `course`, `photo`, `division`) VALUES
('aayushi', '123', '123', 'shah aayushi', 'Female', '788889666', 'Bayad', 'Allowed', '1', 'CE', 'uploadss/s_10.jpg', 'B'),
('anita', '123', '123', 'anita bhala', 'female', '4354892123', 'gandhinagar', 'Allowed', '5', 'CE', 'uploadss/s_10.jpg', 'B'),
('anokhi', '123', '123', 'anokhi bhala', 'female', '4354892123', 'gandhinagar', 'Allowed', '2', 'IT', 'uploadss/s_10.jpg', 'B'),
('arayan ', '123', '123', 'arayan zubair', 'male', '901657676', 'surat', 'Allowed', '3', 'CE', 'uploadss/s_8.jpg', 'B'),
('Ashim', '123', '123', 'Ashim zinai', 'male', '676764446', 'mumbai', 'Allowed', '5', 'IT', 'uploadss/s_4.png', 'A'),
('ayush', '123', '123', 'patel ayush', 'male', '909087865', 'ahemdabad', 'Allowed', '2', 'IT', 'uploadss/s_2.jpg', 'A'),
('bhim', '123', '123', 'bhim permar ', 'Male', '8899452311', 'surat', 'Allowed', '6', 'CE', 'uploadss/s_8.jpg', 'A'),
('bhuvnesh', '123', '123', 'Bhuvnesh permar', 'Male', '902324354', 'disha', 'Allowed', '1', 'IT', 'uploadss/s_7.jpg', 'A'),
('deep', '123', '123', 'Deep Waghel', 'Male', '4349898977', 'rajkot', 'Allowed', '2', 'CE', 'uploadss/s_8.jpg', 'A'),
('devansh', '123', '123', 'devansh takker', 'Male', '8899452311', 'surat', 'Allowed', '6', 'IT', 'uploadss/s_8.jpg', 'A'),
('Dhara', '123', '123', 'pandiya dhara', 'female', '909012233', 'sec 22', 'Allowed', '2', 'CE', 'uploadss/s_3.jpg', 'B'),
('Dharmesh', '123', '123', 'dharmesh soni', 'male', '457686999', 'rajkot', 'Allowed', '4', 'IT', 'uploadss/s_5.jpg', 'A'),
('dish', '123', '123', 'dish permar', 'Female', '9090006541', 'rajkot', 'Allowed', '1', 'CE', 'uploadss/s_10.jpg', 'A'),
('esha', '123', '123', 'esha vashi', 'Female', '5665467689', 'Bayad', 'Allowed', '5', 'CE', 'uploadss/s_11.jpg', 'A'),
('falaz', '123', '123', 'falaz zubair', 'Male', '909090909', 'xyz', 'Disallowed', '4', 'IT', 'uploadss/s_6.png', 'A'),
('foram', '123', '123', 'Teli foram', 'Female', '5612345671', 'sec 30 gandhinagar', 'Allowed', '1', 'CE', 'uploadss/s_5.jpg', 'B'),
('Ganesh', '123', '123', 'Ganesh shah', 'Male', '556609908', 'surat', 'Allowed', '1', 'IT', 'uploadss/s_2.jpg', 'A'),
('gautam ', '123', '123', 'Gohil Gautam', 'male', '909076676', 'surat', 'Allowed', '2', 'CE', 'uploadss/s_8.jpg', 'A'),
('gita', '123', '123', 'gita gohil', 'Female', '8899452311', 'ahemdabad', 'Allowed', '2', 'IT', 'uploadss/s_10.jpg', 'B'),
('hina', '123', '123', 'hina khan', 'female', '7787875476', 'maheshana', 'Allowed', '2', 'CE', 'uploadss/s_9.jpg', 'B'),
('hiral', '123', '123', 'hiral patel', 'female', '7856424334', 'mansha', 'Allowed', '6', 'CE', 'uploadss/s_6.png', 'B'),
('hitesh', '123', '123', 'hitesh vihol', 'male', '63789878', 'vishnagar', 'Allowed', '3', 'CE', 'uploadss/s_8.jpg', 'A'),
('janvi', '123', '123', 'Prajapati Jahnavi', 'Female', '9887946656', 'sec 25 gandhinagar', 'Allowed', '1', 'CE', 'uploadss/s_3.jpg', 'B'),
('jitendra', '123', '123', 'jitendra nishal', 'male', '354656887', 'bhuj', 'Allowed', '3', 'CE', 'uploadss/s_2.jpg', 'B'),
('Jiyana', '123', '123', 'jiyana patel', 'female', '7856424334', 'mansha', 'Allowed', '5', 'CE', 'uploadss/s_3.jpg', 'A'),
('kartik', '123', '123', 'kartik goinka', 'Male', '9078756456', 'gandhinagar', 'Allowed', '3', 'IT', 'uploadss/s_4.png', 'B'),
('komal', '123', '123', 'komal kotak', 'Female', '8976764521', 'surat', 'Allowed', '3', 'IT', 'uploadss/s_11.jpg', 'A'),
('krish', '123', '123', 'krish sondagar', 'Male', '8899452311', 'surat', 'Allowed', '6', 'IT', 'uploadss/s_2.jpg', 'B'),
('krisha', '123', '123', 'krisha rajput', 'Female', '901123445', 'veraval', 'Allowed', '5', 'IT', 'uploadss/s_10.jpg', 'A'),
('kunal', '123', '123', 'kunal shah', 'Female', '901123445', 'veraval', 'Allowed', '4', 'CE', 'uploadss/s_8.jpg', 'A'),
('leeza', '123', '123', 'leeza pithadiya', 'Female', '909007812', 'rajkot', 'Allowed', '4', 'CE', 'uploadss/s_3.jpg', 'A'),
('lihan', '123', '123', 'lihan zinai', 'male', '676764446', 'mumbai', 'Allowed', '4', 'CE', 'uploadss/s_7.jpg', 'B'),
('lila', '123', '123', 'lila lez', 'Female', '6676767', 'mmm', 'Allowed', '5', 'IT', 'uploadss/s_10.jpg', 'B'),
('mahek', '123', '123', 'Mahek gajjar', 'Female', '8899452311', 'rajkot', 'Allowed', '1', 'CE', 'uploadss/s_6.png', 'A'),
('mahesh', '123', '123', 'mahesh permar', 'male', '78787855', 'disha', 'Allowed', '4', 'CE', 'uploadss/s_7.jpg', 'B'),
('manali', '123', '123', 'manali gajjar', 'Female', '901256667', 'palanpur', 'Allowed', '3', 'CE', 'uploadss/s_9.jpg', 'A'),
('manisha', '123', '123', 'Manisha Patel', 'Female', '909003446', 'gandhinagar', 'Allowed', '1', 'IT', 'uploadss/s_10.jpg', 'A'),
('Mayur', '123', '123', 'Mayur raj', 'Male', '8899452311', 'surat', 'Allowed', '6', 'IT', 'uploadss/s_2.jpg', 'A'),
('mihir', '123', '123', 'mihir nishal', 'male', '354656887', 'bhuj', 'Allowed', '5', 'IT', 'uploadss/s_4.png', 'B'),
('montu', '123', '123', 'Montu sonil', 'male', '672323268', 'gondal', 'Allowed', '4', 'IT', 'uploadss/s_8.jpg', 'B'),
('niddhi', '123', '123', 'Prajapati niddhi', 'Female', '9887946656', 'sec 25 gandhinagar', 'Allowed', '5', 'IT', 'uploadss/s_9.jpg', 'B'),
('nisha', '123', '123', 'Nisha patel', 'Female', '8976764521', 'Mansha', 'Allowed', '1', 'IT', 'uploadss/s_8.jpg', 'B'),
('nishant', '123', '123', 'nishant shapra', 'male', '99966666', 'vadodra', 'Allowed', '4', 'IT', 'uploadss/s_2.jpg', 'B'),
('nita', '123', '123', 'nita zubair', 'Female', '5612345671', 'gondal', 'Allowed', '2', 'CE', 'uploadss/s_10.jpg', 'A'),
('nitasha', '123', '123', 'nitasha gisha', 'Female', '888988865', 'jamnagar', 'Allowed', '3', 'CE', 'uploadss/s_11.jpg', 'A'),
('nitesh', '123', '123', 'nitesh patel', 'male', '562456887', 'junagadh', 'Allowed', '4', 'CE', 'uploadss/s_7.jpg', 'B'),
('prafula', '123', '123', 'prafula nandoriya', 'Female', '5612345671', 'gondal', 'Allowed', '3', 'IT', 'uploadss/s_5.jpg', 'A'),
('prita', '123', '123', 'prita arora', 'Female', '34343434', 'mumbai', 'Allowed', '3', 'CE', 'uploadss/s_10.jpg', 'A'),
('priya', '123', '123', 'priya prajapati', 'female', '872122454', 'mansha', 'Allowed', '2', 'IT', 'uploadss/s_6.png', 'B'),
('priyanshi', '123', '123', 'priyanshi prajapati', 'female', '872122454', 'mansha', 'Allowed', '3', 'IT', 'uploadss/s_3.jpg', 'B'),
('Rajdeep', '123', '123', 'rajdeep gohil', 'Male', '8899452311', 'surat', 'Allowed', '6', 'CE', 'uploadss/s_5.jpg', 'B'),
('raju', '123', '123', 'Raju Rajan', 'Male', '9078756456', 'gandhinagar', 'Allowed', '1', 'IT', 'uploadss/s_7.jpg', 'B'),
('rishi', '123', '123', 'rishi vihol', 'male', '63789878', 'vishnagar', 'Allowed', '5', 'IT', 'uploadss/s_7.jpg', 'B'),
('rohan', '123', '123', 'Thakor Rohan', 'Male', '909007812', 'Bayad', 'Allowed', '3', 'IT', 'uploadss/s_8.jpg', 'B'),
('rohit', '123', '123', 'Thakor Rohit', 'Male', '909007812', 'Bayad', 'Allowed', '1', 'CE', 'uploadss/s_2.jpg', 'A'),
('rubina', '123', '123', 'rubina dalik', 'Female', '888988865', 'jamnagar', 'Allowed', '3', 'IT', 'uploadss/s_11.jpg', 'A'),
('ruhi', '123', '123', 'ruhi prajapati', 'female', '454709986', 'mumbai', 'Allowed', '3', 'CE', 'uploadss/s_6.png', 'B'),
('sammy', '123', '123', 'sammy rajput', 'Male', '8899452311', 'surat', 'Allowed', '6', 'CE', 'uploadss/s_4.png', 'B'),
('shaurya ', '123', '123', 'shaurya sabraval', 'male', '9012453423', 'mumbai', 'Allowed', '2', 'IT', 'uploadss/s_8.jpg', 'B'),
('shizuka', '123', '123', 'shizuka', 'female', '908887676', 'vadodra', 'Allowed', '4', 'IT', 'uploadss/s_3.jpg', 'B'),
('sonakshi', '123', '123', 'sonakshi patel', 'female', '7856424334', 'mansha', 'Allowed', '6', 'IT', 'uploadss/s_10.jpg', 'A'),
('tejash', '123', '123', 'tejash zubair', 'male', '901657676', 'surat', 'Allowed', '5', 'CE', 'uploadss/s_7.jpg', 'B'),
('tina', '123', '123', 'tina gada', 'female', '576909089', 'gandhinagar', 'Allowed', '4', 'IT', 'uploadss/s_11.jpg', 'A'),
('ushi', '123', '123', 'ushi', 'female', '90434535', 'ahemdabad', 'Allowed', '4', 'CE', 'uploadss/s_6.png', 'A'),
('vishal ', '123', '123', 'vishal mehra', 'male', '66433246', 'junagadh', 'Allowed', '2', 'IT', 'uploadss/s_4.png', 'A'),
('vishva', '123', '123', 'vishava vashi', 'Female', '5665467689', 'Bayad', 'Allowed', '1', 'IT', 'uploadss/s_10.jpg', 'B'),
('vishvaba', '123', '123', 'vishvaba netal', 'Female', '909007812', 'rajkot', 'Allowed', '6', 'IT', 'uploadss/s_6.png', 'B'),
('viyana', '123', '123', 'viyana zala', 'Female', '909007812', 'rajkot', 'Allowed', '6', 'IT', 'uploadss/s_3.jpg', 'B'),
('wish', '123', '123', 'shah wish', 'Female', '788889666', 'Bayad', 'Allowed', '5', 'CE', 'uploadss/s_9.jpg', 'B'),
('yashvi ', '123', '123', 'yashvi patel', 'female', '7856424334', 'mansha', 'Allowed', '2', 'CE', 'uploadss/s_10.jpg', 'B'),
('yeshraj', '123', '123', 'yeshraj rajput', 'Male', '8899452311', 'surat', 'Allowed', '6', 'CE', 'uploadss/s_2.jpg', 'A'),
('yogesh', '123', '123', 'yogesh ', 'Male', '8899452311', 'surat', 'Allowed', '4', 'IT', 'uploadss/s_4.png', 'A'),
('yuvraj', '123', '123', 'yurraj ', 'Male', '8899452311', 'surat', 'Allowed', '5', 'CE', 'uploadss/s_2.jpg', 'A'),
('zoya', '123', '123', 'zoya pithadiya', 'Female', '909007812', 'rajkot', 'Allowed', '5', 'IT', 'uploadss/s_5.jpg', 'A'),
('zoyaba', '123', '123', 'zoyaba zala', 'Female', '909007812', 'rajkot', 'Allowed', '6', 'CE', 'uploadss/s_11.jpg', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `subj_ce`
--

CREATE TABLE `subj_ce` (
  `sid` varchar(11) NOT NULL,
  `sname` varchar(80) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subj_ce`
--

INSERT INTO `subj_ce` (`sid`, `sname`, `sem`) VALUES
('CE-101', 'Basic Mathematics', '1'),
('CE-102', 'English', '1'),
('CE-103', 'Environment Conservation and Harzard Management', '1'),
('CE-104', 'Computer programming', '1'),
('CE-105', 'Fundamental of Digital Electronics', '1'),
('CE-106', 'Fundamental of Computer Application', '1'),
('CE-201', 'Advanced Mathematics(Group1)', '2'),
('CE-202', 'Basic Physics(Group-2)', '2'),
('CE-203', 'Basic Electronics', '2'),
('CE-204', 'Advanced Computer Programming', '2'),
('CE-205', 'Static Web Page Designing', '2'),
('CE-206', 'Contributor Personality development', '2'),
('CE-301', 'Operating System', '3'),
('CE-302', 'Programming C++', '3'),
('CE-303', 'Database Management System ', '3'),
('CE-304', 'Data Structure', '3'),
('CE-305', 'Microprocessor & Assembly Language Programming', '3'),
('CE-306', 'os (lab)', '3'),
('CE-401', 'Advanced Database Management System ', '4'),
('CE-402 ', 'Computer Networks', '4'),
('CE-403', '.Net Programming', '4'),
('CE-404', 'Computer Organization And Architecture', '4'),
('CE-405', 'Web Development Tools', '4'),
('CE-406', 'Fundamental of Software Development', '4'),
('CE-501', 'Dynamic Web Page Development', '5'),
('CE-502', 'Java Programming', '5'),
('CE-503', 'Computer And Network Services', '5'),
('CE-504', 'Computer Maintenance and Trouble Shooting', '5'),
('CE-601', 'Advanced Java Programming', '6'),
('CE-602', 'Network Management And Administration ', '6'),
('CE-603', 'Mobile Computing And  Application Development', '6'),
('CE-604', 'Profssional Practice Using Database', '6');

-- --------------------------------------------------------

--
-- Table structure for table `subj_it`
--

CREATE TABLE `subj_it` (
  `sid` varchar(11) NOT NULL,
  `sname` varchar(80) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subj_it`
--

INSERT INTO `subj_it` (`sid`, `sname`, `sem`) VALUES
('IT-101', 'Basic Mathematics', '1'),
('IT-102', 'English', '1'),
('IT-103', 'Environment Conservation and Harzard Management', '1'),
('IT-104', 'Computer programming', '1'),
('IT-105', 'Fundamental of Digital Electronics', '1'),
('IT-106', 'Maths lab', '1'),
('IT-201', 'Basic Physics(Group-2)', '2'),
('IT-202', 'Advanced Mathematics(Group1)', '2'),
('IT-203', 'Basic Electronics', '2'),
('IT-204', 'Static Web Page Designing', '2'),
('IT-205', 'Contribitor Personality development', '2'),
('IT-206', 'CPD', '2'),
('IT-301', 'Operating System', '3'),
('IT-302', 'Programming C++', '3'),
('IT-303', 'Database Management System ', '3'),
('IT-304', 'Data Structure', '3'),
('IT-305', 'Microprocessor & Assembly Language Programming', '3'),
('IT-306', 'ACP(lab)', '3'),
('IT-401', 'Advanced Database Management System ', '4'),
('IT-402', 'Computer Networks', '4'),
('IT-403', '.Net Programming', '4'),
('IT-404', 'Computer Organization And Architecture', '4'),
('IT-405', 'Web Development Tools', '4'),
('IT-406', 'Fundamental of Software Development', '4'),
('IT-501', 'Computer Maintenance and Trouble Shooting', '5'),
('IT-502', 'Dynamic Web Page Development', '5'),
('IT-503', 'Java Programming', '5'),
('IT-504', 'Computer And Network Services', '5'),
('IT-601', 'Advanced Java Programming', '6'),
('IT-602', 'Dynamic Web Page With Scripting Language', '6'),
('IT-603', 'Advanced Web Technology', '6'),
('IT-604', 'Project lab', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ce`
--
ALTER TABLE `ce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstable`
--
ALTER TABLE `newstable`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `subj_ce`
--
ALTER TABLE `subj_ce`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subj_it`
--
ALTER TABLE `subj_it`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ce`
--
ALTER TABLE `ce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `it`
--
ALTER TABLE `it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `newstable`
--
ALTER TABLE `newstable`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
