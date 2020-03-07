-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 03:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `adddress` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `adddress`, `sex`) VALUES
('ad-01', 'Admin', 'abcd', 0, '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `uploader` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`uploader`, `subject`, `date`, `details`) VALUES
('Admin', 'TEST', '2019-04-24', '	Tested'),
('Admin', 'TESTING 2', '2019-04-24', '	Tested twice\r\n'),
('Sweety Buragohain', 'ABC', '2019-04-24', '	abc'),
('Sweety Buragohain', 'TEST3', '2019-04-24', '	fcghsajkld;ajhdvgahoid;jabh,jdkoajbkhdfkjaojfbhj,sajoifj.kakf;ja.kbfl;aj.bkfjoa.bkfoiaj.kbfjak.bfjakl.jfjai;jk.fbajf.kbhaifk.hbaofkjaipfhbauihkfoilj.kbfjlakh.bfiaophfuiphfhiuapfipajofa'),
('Rimon Sarmah', 'EXAM ALERT', '2019-04-24', 'Exams are going to be held soon. Study Well.	'),
('Admin', 'SURAJ IS COMING', '2019-04-26', '	Hello everyne. This is to inform you that Suraj Sarma is coming to the campus.'),
('Sweety Buragohain', 'ABCD', '2019-04-26', '	FGHI'),
('Rimon Sarmah', 'EXAM NOTICE', '2019-04-26', '	Exams are going to be held from 13'),
('Admin', 'HOLIDAY', '2019-04-28', 'Good Friday	');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `stream` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `roomno` varchar(20) NOT NULL,
  `timing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`stream`, `subject`, `date`, `roomno`, `timing`) VALUES
('CSE', 'PHP', '2019-05-04', '34-101', '12:00 Pm to 01:30 PM'),
('CSE', 'Python', '2018-05-18', '33-110', '12:30 PM to 4:30 PM'),
('CSE', 'Python', '2019-04-26', '34-202', '9-12'),
('CSE', 'Java', '2019-04-26', '33-101', '12:00 to 1:30'),
('CSE', 'Node JS', '2019-04-30', '33-101', '1-2');

-- --------------------------------------------------------

--
-- Table structure for table `examinar`
--

CREATE TABLE `examinar` (
  `id` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `desig` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinar`
--

INSERT INTO `examinar` (`id`, `name`, `desig`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('ex-01', 'Rimon Sarmah', 'Examinar', 'abcd', 123, 'rimonsarmahjnv@gmail.com', '1999-12-04', '2018-12-12', 'Assam', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `subject`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('fc-03', 'Sweety Buragohain', 0, 'abcd', '9867453623', 'swty2@gmail.com', '1988-12-01', '2018-12-01', 'Jorhat', 'Female'),
('fc-04', 'Rahul Doley', 0, 'abcd', '7002828442', 'rahul@gmail.com', '1987-02-11', '2019-04-25', 'Lakhimpur', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `importantdates`
--

CREATE TABLE `importantdates` (
  `Subject` varchar(400) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importantdates`
--

INSERT INTO `importantdates` (`Subject`, `date`) VALUES
('PHP Hackathon', '2019-04-26'),
('Code Warrior', '2019-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `leavetable`
--

CREATE TABLE `leavetable` (
  `leaveid` int(11) NOT NULL,
  `facultyid` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `span` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`leaveid`, `facultyid`, `name`, `date`, `span`, `status`) VALUES
(1, 'fc-03', 'Sweety Buragohain', '2019-04-30', 'Full Day', 'Approved'),
(2, 'fc-03', 'Sweety Buragohain', '2019-05-23', 'Full Day', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `studentid` varchar(30) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `examname` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `date` date NOT NULL,
  `company` varchar(60) NOT NULL,
  `cutoff` int(11) NOT NULL,
  `stream` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`date`, `company`, `cutoff`, `stream`) VALUES
('2019-05-01', 'Microsoft', 8, 'CSE, ECE'),
('2019-12-01', 'Google', 8, 'CSE'),
('0000-00-00', 'Apple Inc.', 8, 'CSE'),
('0000-00-00', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `day` varchar(40) NOT NULL,
  `quote` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`day`, `quote`) VALUES
('Thursday', 'Honesty is The Best Policy'),
('Friday', '“Yesterday is history, tomorrow is a mystery, today is a gift of God, which is why we call it the present.” '),
('Saturday', '“The opposite of love is not hate, it\'s indifference. The opposite of art is not ugliness, it\'s indifference. The opposite of faith is not heresy, it\'s indifference. And the opposite of life is not de'),
('Sunday', '“There is no greater agony than bearing an untold story inside you.” '),
('Monday', '“When one door of happiness closes, another opens; but often we look so long at the closed door that we do not see the one which has been opened for us.” '),
('Tuesday', '“Success is not final, failure is not fatal: it is the courage to continue that counts.” '),
('Wednesday', '“You may say I\'m a dreamer, but I\'m not the only one. I hope someday you\'ll join us. And the world will live as one.” ');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` varchar(40) NOT NULL,
  `term` int(11) NOT NULL,
  `cgpa` int(11) NOT NULL,
  `attendance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `term`, `cgpa`, `attendance`) VALUES
('1', 1, 9, '91'),
('1', 2, 8, '95%'),
('1', 3, 10, '95%'),
('stu-13', 1, 8, '96%');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `stream`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('1', 'Lucky Jangra', 'CSE Hons', 'abcd', 2147483647, 'lucky@gmail.com', '1999-12-13', '2018-08-02', 'Haryana', 'Male'),
('stu-13', 'Shivraj Kumar Singh', 'CSE', 'abcd', 2147483647, 'swapnilkumar973@gmail.com', '2019-04-15', '2018-07-28', 'Patna, Bihar', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `roomno` varchar(15) NOT NULL,
  `timing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `subject`, `roomno`, `timing`) VALUES
('Monday', 'Programming 1', '33-501', '9:00 AM to 10:00 AM'),
('Monday', 'Pyhton', '33-410', '10:00 AM to 11:00 AM'),
('Monday', 'PHP', '37-605', '1:00 PM to 2:00 PM'),
('Tuesday', 'Java', '37-708', '1:00 PM to 2:00PM'),
('Tuesday', 'Java', '37-708', '2:00 PM to 3:00 PM'),
('Wednesday', 'C++', '33-101', '03:00 PM 04-00 PM'),
('Wednesday', 'C++', '33-101', '04:00 PM to 05:00 PM'),
('Thursday', 'C', '37-202', '09:00 AM to 10:00 AM'),
('Thursday', 'Java', '37-101', '02:00 PM to 03:00 PM'),
('Friday', 'Physics', '30-101', '09:00 AM 10:00 AM'),
('Friday', 'C++', '33-209', '03:00 PM to 04:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('ad-01', 'abcd', 'admin'),
('fc-03', 'abcd', 'faculty'),
('1', 'abcd', 'student'),
('stu-03', 'abcd', 'student'),
('ex-01', 'abcd', 'examinar'),
('', '', ''),
('std-04', 'abcd', 'student'),
('stu-06', 'abcd', 'student'),
('stu-10', 'abcd', 'student'),
('fc-04', 'abcd', 'faculty'),
('stu-13', 'abcd', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leavetable`
--
ALTER TABLE `leavetable`
  ADD PRIMARY KEY (`leaveid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leavetable`
--
ALTER TABLE `leavetable`
  MODIFY `leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
