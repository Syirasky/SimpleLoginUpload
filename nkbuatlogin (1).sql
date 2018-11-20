-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 09:04 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkbuatlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `examinfo`
--

CREATE TABLE `examinfo` (
  `num` int(11) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `exam_code` varchar(10) NOT NULL,
  `answer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinfo`
--

INSERT INTO `examinfo` (`num`, `subject_id`, `exam_code`, `answer`) VALUES
(90, 'cai', 'Nam', 'ACBADCCADBDDDADDCCAD'),
(92, 'test1', 'test12017', 'ACBADCCADBDDDADDCCAD');

-- --------------------------------------------------------

--
-- Table structure for table `student_score`
--

CREATE TABLE `student_score` (
  `num` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `subject_id` varchar(10) DEFAULT NULL,
  `exam_id` varchar(10) NOT NULL,
  `lecturer_id` varchar(10) NOT NULL,
  `image_name` varchar(150) NOT NULL,
  `score` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_score`
--

INSERT INTO `student_score` (`num`, `student_id`, `subject_id`, `exam_id`, `lecturer_id`, `image_name`, `score`) VALUES
(197, '7171', 'cai', 'Nam', 'lecturerid', 'OMR_1542602106945.jpg', '16\n'),
(198, '0909', 'cai', 'Nam', 'lecturerid', 'OMR_1542602024615.jpg', '17\n'),
(199, '7171', 'cai', 'Nam', 'lecturerid', 'OMR_1542602106945.jpg', '16\n'),
(200, '0909', 'cai', 'Nam', 'lecturerid', 'OMR_1542602024615.jpg', '17\n'),
(201, '01212', 'test1', 'test12017', 'lecturerid', 'OMR_1542643497703.jpg', '16\n'),
(202, '2012222', 'test1', 'test12017', 'lecturerid', 'OMR_1542643526553.jpg', '16\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ahc', 'b59c67bf196a4758191e42f76670ceba', 'hfy@ff.vgj', '2018-09-21 18:12:44', '2018-09-21 18:12:44'),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a.com', '2018-09-22 12:32:23', '2018-09-22 12:32:23'),
(3, 'macleve', 'e10adc3949ba59abbe56e057f20f883e', 'mac96@gmail.con', '2018-09-22 18:39:04', '2018-09-22 18:39:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examinfo`
--
ALTER TABLE `examinfo`
  ADD PRIMARY KEY (`num`),
  ADD UNIQUE KEY `subject_id` (`subject_id`,`exam_code`);

--
-- Indexes for table `student_score`
--
ALTER TABLE `student_score`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examinfo`
--
ALTER TABLE `examinfo`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `student_score`
--
ALTER TABLE `student_score`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
