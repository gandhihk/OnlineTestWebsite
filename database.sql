-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2018 at 01:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

CREATE TABLE `Answers` (
  `number` int(11) NOT NULL,
  `division` varchar(1) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `correct_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Answers`
--

INSERT INTO `Answers` (`number`, `division`, `subject`, `correct_answer`) VALUES
(1, 'A', 'AOA', 2),
(2, 'A', 'AOA', 1),
(3, 'A', 'AOA', 2),
(1, 'B', 'AOA', 1),
(2, 'B', 'AOA', 3),
(3, 'B', 'AOA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `password`) VALUES
(1, 'faculty1', 'faculty1'),
(2, 'faculty2', 'faculty2');

-- --------------------------------------------------------

--
-- Table structure for table `Options`
--

CREATE TABLE `Options` (
  `number` int(11) NOT NULL,
  `option_number` int(11) NOT NULL,
  `division` varchar(1) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `answers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Options`
--

INSERT INTO `Options` (`number`, `option_number`, `division`, `subject`, `answers`) VALUES
(1, 1, 'A', 'AOA', 'T(n) = O(n^2)'),
(1, 2, 'A', 'AOA', 'T(n) = O(nlogn)'),
(1, 3, 'A', 'AOA', 'T(n) = O(logn)'),
(2, 1, 'A', 'AOA', 'T(n) = O(logn)'),
(2, 2, 'A', 'AOA', 'T(n) = O(n)'),
(2, 3, 'A', 'AOA', 'T(n) = O(nlogn)'),
(3, 1, 'A', 'AOA', 'T(n) = O(logn)'),
(3, 2, 'A', 'AOA', 'T(n) = O(nlogn)'),
(3, 3, 'A', 'AOA', 'T(n) = O(n^2)'),
(1, 1, 'B', 'AOA', 'T(n) = O(logn)'),
(1, 2, 'B', 'AOA', 'T(n) = O(nlogn)'),
(1, 3, 'B', 'AOA', 'T(n) = O(n^2)'),
(2, 1, 'B', 'AOA', 'T(n) = O(nlogn)'),
(2, 2, 'B', 'AOA', 'T(n) = O(logn)'),
(2, 3, 'B', 'AOA', 'T(n) = O(n)'),
(3, 1, 'B', 'AOA', 'T(n) = O(logn)'),
(3, 2, 'B', 'AOA', 'T(n) = O(n^3)'),
(3, 3, 'B', 'AOA', 'T(n) = O(nlogn)');

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `number` int(11) NOT NULL,
  `division` varchar(1) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `quests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`number`, `division`, `subject`, `quests`) VALUES
(1, 'B', 'AOA', 'Mark the time complexity of Selection Sort.'),
(2, 'B', 'AOA', 'Mark the time complexity of Merge Sort (Worst Case).'),
(3, 'B', 'AOA', 'Mark the time complexity of Quick Sort (Average Case).'),
(1, 'A', 'AOA', 'Mark the time complexity of Merge Sort.'),
(2, 'A', 'AOA', 'Mark the time complexity of Binary Search.'),
(3, 'A', 'AOA', 'Mark the time complexity of Quick Sort(Best Case).');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `q1` varchar(1) NOT NULL,
  `q2` varchar(1) NOT NULL,
  `q3` varchar(1) NOT NULL,
  `q4` varchar(1) NOT NULL,
  `q5` varchar(1) NOT NULL,
  `q6` varchar(1) NOT NULL,
  `q7` varchar(1) NOT NULL,
  `q8` varchar(1) NOT NULL,
  `q9` varchar(1) NOT NULL,
  `q10` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Record of each student of any division and on any subject ';

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `division`) VALUES
(1, 'student1', 'student1', 'A'),
(2, 'student2', 'student2', 'B'),
(16, 'student3', 'student3', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
