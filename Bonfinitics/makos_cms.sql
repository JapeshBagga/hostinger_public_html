-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 05:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makos_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assign_id` int(10) NOT NULL,
  `assign_name` varchar(500) NOT NULL,
  `assign_subject` varchar(100) NOT NULL,
  `assign_data` mediumtext NOT NULL,
  `assign_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `atd_id` int(10) NOT NULL,
  `atd_type` varchar(100) NOT NULL,
  `atd_faculty_name` varchar(100) NOT NULL,
  `atd_student_name` varchar(100) NOT NULL,
  `atd_dept` varchar(100) NOT NULL,
  `atd_subject` varchar(100) NOT NULL,
  `atd_timing` varchar(20) NOT NULL,
  `atd_present_days` varchar(5) NOT NULL,
  `atd_absent_days` varchar(5) NOT NULL,
  `atd_total_days` varchar(5) NOT NULL,
  `atd_date` varchar(25) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atd_id`, `atd_type`, `atd_faculty_name`, `atd_student_name`, `atd_dept`, `atd_subject`, `atd_timing`, `atd_present_days`, `atd_absent_days`, `atd_total_days`, `atd_date`, `user_id`) VALUES
(1, 'faculty', 'Abcd', '', 'IT', 'C', '10 AM', '5', '1', '6', '23 Jul 2021', 0),
(2, 'student', '', 'Abcde', 'IT', 'C', '10 AM', '5', '1', '6', '23 Jul 2021', 0),
(3, 'faculty', 'Shyam', '', 'IT', 'C', '10 AM', '5', '1', '6', '23 Jul 2021', 0),
(12, 'faculty', 'Manish Patel', '', 'IT', 'C', '', '1', '0', '1', '24 Jul 2021', 2),
(13, 'faculty', 'Japesh Bagga', '', 'IT', 'C', '', '1', '0', '1', '25 Jul 2021', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_code` varchar(20) NOT NULL,
  `dept_hod` varchar(100) NOT NULL,
  `dept_email` varchar(100) NOT NULL,
  `dept_phone` varchar(15) NOT NULL,
  `no_of_sem` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_code`, `dept_hod`, `dept_email`, `dept_phone`, `no_of_sem`) VALUES
(1, 'IT', '4737', 'Shiva', 'shiva@gmail.com', '234517890', '8'),
(2, 'CSE', '5766', 'Rakesh', 'rakesh@gmail.com', '894156545', '8'),
(6, 'ME', '2355', 'Arun', 'test@gmail.com', '255554345', '8');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(10) NOT NULL,
  `exam_subject` varchar(100) NOT NULL,
  `exam_name` varchar(500) NOT NULL,
  `exam_data` mediumtext NOT NULL,
  `exam_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `prf_id` int(10) NOT NULL,
  `prf_name` varchar(100) NOT NULL,
  `prf_address` varchar(500) NOT NULL,
  `prf_joining_date` varchar(20) NOT NULL,
  `prf_email` varchar(100) NOT NULL,
  `prf_dept` varchar(100) NOT NULL,
  `prf_gender` varchar(10) NOT NULL,
  `prf_image` varchar(100) NOT NULL,
  `prf_dob` varchar(20) NOT NULL,
  `prf_contact` varchar(15) NOT NULL,
  `prf_country` varchar(100) NOT NULL,
  `prf_state` varchar(100) NOT NULL,
  `prf_city` varchar(100) NOT NULL,
  `prf_latest_qualification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`prf_id`, `prf_name`, `prf_address`, `prf_joining_date`, `prf_email`, `prf_dept`, `prf_gender`, `prf_image`, `prf_dob`, `prf_contact`, `prf_country`, `prf_state`, `prf_city`, `prf_latest_qualification`) VALUES
(5, 'Arun', 'Dau para', '576777', 'vvv@gmail.com', 'ME', 'Male', 'files/60f91460151bc7.60907753.jpg', '09.07.2021', '7777', 'India', 'Punjab', 'Surat', 'MBBS - MD'),
(8, 'Akash Patel', 'Dau para', '576777', 'vvv@gmail.com', 'CSE', 'Male', 'files/60fa26ed7e01c8.32843259.jpg', '08.07.2021', '7777', 'India', 'Punjab', 'Surat', 'B.Com Computer Aided'),
(9, 'Deva Patel', 'Dau para', '576777', 'vvv@gmail.com', 'CSE', 'Male', 'files/60fab180b94717.02426254.jpg', '10.07.2021', '7777', 'India', 'Punjab', 'Surat', 'B.Tech - Information Technology'),
(10, 'Shyam', 'Dau para', '576777', 'vvv@gmail.com', 'ME', 'Male', 'files/60fab22a00dd56.71718169.jpg', '03.07.2021', '7777', 'India', 'Punjab', 'Surat', 'BCA - Software');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(10) NOT NULL,
  `quiz_name` varchar(100) NOT NULL,
  `quiz_subject` varchar(100) NOT NULL,
  `quiz_question` mediumtext NOT NULL,
  `quiz_opt1` mediumtext NOT NULL,
  `quiz_opt2` mediumtext NOT NULL,
  `quiz_opt3` mediumtext NOT NULL,
  `quiz_opt4` mediumtext NOT NULL,
  `quiz_correct_opt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(10) NOT NULL,
  `st_first_name` varchar(100) NOT NULL,
  `st_last_name` varchar(100) NOT NULL,
  `st_father_name` varchar(100) NOT NULL,
  `st_mother_name` varchar(100) NOT NULL,
  `st_roll_no` varchar(20) NOT NULL,
  `st_email` varchar(100) NOT NULL,
  `st_dept` varchar(100) NOT NULL,
  `st_session` varchar(50) NOT NULL,
  `st_image` varchar(100) NOT NULL,
  `st_applicant_status` varchar(20) NOT NULL,
  `st_dob` varchar(20) NOT NULL,
  `st_mobile_no` varchar(15) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_address` varchar(500) NOT NULL,
  `st_country` varchar(100) NOT NULL,
  `st_state` varchar(100) NOT NULL,
  `st_city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_first_name`, `st_last_name`, `st_father_name`, `st_mother_name`, `st_roll_no`, `st_email`, `st_dept`, `st_session`, `st_image`, `st_applicant_status`, `st_dob`, `st_mobile_no`, `st_gender`, `st_address`, `st_country`, `st_state`, `st_city`) VALUES
(1, 'Manish', 'Patel', 'Mr. Dayaram Patel', 'Mrs. Lila Patel', '09', 'mk@gmail.com', 'IT', '2018-22', '', 'Success', '17/03/199', '4556777778', 'Male', 'Raipur, Chhattisgarh', 'India', 'Chhattisgarh', 'Raipur'),
(2, 'Japesh', 'Bagga', 'Great', 'Great', '666', 'jp@gmail.com', 'IT', '2018-22', 'files/60f9225ae8d9e4.15549815.jpg', 'Enrolled', '334444', '66666', 'Male', 'Dau para', 'India', 'Punjab', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(10) NOT NULL,
  `subject_code` int(20) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  `subject_dept` varchar(100) NOT NULL,
  `subject_semester` varchar(8) NOT NULL,
  `subject_professor` varchar(220) NOT NULL,
  `credits` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `subject_student` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`, `subject_dept`, `subject_semester`, `subject_professor`, `credits`, `type`, `subject_student`) VALUES
(1, 123456, 'C Programming', 'IT', '3', 'Semester', 3, 'Theory', '20'),
(2, 981234, 'Java', 'IT', '8', 'Semester', 3, 'Theory', '50'),
(3, 123457, 'Python', 'IT', '8', 'Semester', 4, 'Theory', '86');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `tt_id` int(10) NOT NULL,
  `tt_dept` varchar(100) NOT NULL,
  `tt_subject` varchar(100) NOT NULL,
  `tt_day` varchar(50) NOT NULL,
  `tt_timing` varchar(50) NOT NULL,
  `tt_date` varchar(50) NOT NULL,
  `tt_room` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`tt_id`, `tt_dept`, `tt_subject`, `tt_day`, `tt_timing`, `tt_date`, `tt_room`) VALUES
(1, 'IT', 'AI', 'Monday', '10 AM-12 PM', '23-07-21', '5'),
(2, 'IT', 'Java', 'Tuesday', '10 AM-12 PM', '24-07-21', '5'),
(3, 'IT', 'Python', 'Wednesday', '10 AM-12 PM', '25-07-21', '5'),
(4, 'IT', 'PLSQL', 'Thursday', '10 AM-12 PM', '26-07-21', '5'),
(5, 'IT', 'ML', 'Friday', '10 AM-12 PM', '27-07-21', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `user_dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `mobile_no`, `user_dob`) VALUES
(1, 'Akash', 'Patel', 'admin@makos.com', 'admin123', 'admin', '1234567890', ''),
(2, 'Japesh', 'Bagga', 'hod@makos.com', 'hod123', 'hod', '1234567890', ''),
(3, 'Manish', 'Patel', 'professor@makos.com', 'professor123', 'professor', '1234567890', ''),
(4, 'Akash', 'Patel', 'student@makos.com', 'student123', 'student', '1234567890', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`atd_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`prf_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_roll_no` (`st_roll_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `atd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `prf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `tt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
