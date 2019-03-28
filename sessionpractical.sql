-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2018 at 12:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `AOAAnswers`
--

CREATE TABLE `AOAAnswers` (
  `id` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AOAAnswers`
--

INSERT INTO `AOAAnswers` (`id`, `answer`, `ansid`) VALUES
(1, 'Recurrence is T(n) = T(n-2) + O(n) and time complexity is O(n^2)', 1),
(1, 'Recurrence is T(n) = T(n-1) + O(n) and time complexity is O(n^2)', 2),
(1, 'Recurrence is T(n) = 2T(n/2) + O(n) and time complexity is O(nLogn)', 3),
(1, 'Recurrence is T(n) = T(n/10) + T(9n/10) + O(n) and time complexity is O(nLogn)', 4),
(2, 'O(n^2 Logn)', 1),
(2, 'O(n^2)', 2),
(2, 'O(n Logn Logn)', 3),
(2, 'O(nLogn)', 4),
(3, '(15^10) * n + 12099', 1),
(3, 'n^1.98', 2),
(3, 'n^3 / (sqrt(n))', 3),
(3, '(2^20) * n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `AOAQuestions`
--

CREATE TABLE `AOAQuestions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AOAQuestions`
--

INSERT INTO `AOAQuestions` (`id`, `question`, `ansid`) VALUES
(1, 'What is recurrence for worst case of QuickSort and what is the time complexity in Worst case?', 2),
(2, 'If O(n) algorithm is given that finds median of an unsorted array. Consider a QuickSort implementation where we first find median using the above algorithm, then use median as pivot. What will be the worst case time complexity of this modified QuickSort?', 4),
(3, 'Which of the following is not O(n^2)?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `DBMSAnswers`
--

CREATE TABLE `DBMSAnswers` (
  `id` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DBMSAnswers`
--

INSERT INTO `DBMSAnswers` (`id`, `answer`, `ansid`) VALUES
(2, 'DML(Data Manipulation Langauge)', 1),
(2, 'DDL(Data Definition Langauge)', 2),
(2, 'Query', 3),
(2, 'Relational Schema ', 4),
(3, 'Fixed, equal', 1),
(3, 'Equal, variable', 2),
(3, 'Fixed, variable', 3),
(3, 'Variable, equal', 4),
(1, 'Tables', 1),
(1, 'Fields', 2),
(1, 'Records', 3),
(1, 'Keys', 4);

-- --------------------------------------------------------

--
-- Table structure for table `DBMSQuestions`
--

CREATE TABLE `DBMSQuestions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DBMSQuestions`
--

INSERT INTO `DBMSQuestions` (`id`, `question`, `ansid`) VALUES
(1, 'A relational database consists of a collection of ?', 1),
(2, 'Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from, and modify tuples in the database ? ', 1),
(3, ' The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character. ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `DCNAnswers`
--

CREATE TABLE `DCNAnswers` (
  `id` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DCNAnswers`
--

INSERT INTO `DCNAnswers` (`id`, `answer`, `ansid`) VALUES
(3, 'error and diagnostic functions', 1),
(3, 'addressing', 2),
(3, 'forwarding', 3),
(3, 'none of the mentioned', 4),
(2, 'framing', 1),
(2, 'error control', 2),
(2, 'flow control', 3),
(2, 'channel coding', 4),
(1, 'mechanical specifications of electrical connectors and cables', 1),
(1, 'electrical specification of transmission line signal level', 2),
(1, 'specification for IR over optical fiber', 3),
(1, 'all of the mentioned', 4);

-- --------------------------------------------------------

--
-- Table structure for table `DCNQuestions`
--

CREATE TABLE `DCNQuestions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DCNQuestions`
--

INSERT INTO `DCNQuestions` (`id`, `question`, `ansid`) VALUES
(1, 'physical layer provides', 4),
(2, 'Which one of the following task is not done by data link layer?', 4),
(3, 'ICMP is primarily used for', 1);

-- --------------------------------------------------------

--
-- Table structure for table `DSAnswers`
--

CREATE TABLE `DSAnswers` (
  `id` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DSAnswers`
--

INSERT INTO `DSAnswers` (`id`, `answer`, `ansid`) VALUES
(3, '6, 1', 1),
(3, '5, 7', 2),
(3, '3,2', 3),
(3, '1, 5', 4),
(1, 'Insertion Sort', 1),
(1, 'Quick Sort', 2),
(1, 'Heap Sort', 3),
(1, 'Merge Sort', 4),
(2, 'log 2 n', 1),
(2, 'n/2', 2),
(2, 'log 2n -1', 3),
(2, 'n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `DSQuestions`
--

CREATE TABLE `DSQuestions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DSQuestions`
--

INSERT INTO `DSQuestions` (`id`, `question`, `ansid`) VALUES
(1, 'Which of the following sorting algorithms can be used to sort a random linked list with minimum time complexity?', 4),
(2, 'In the worst case, the number of comparisons needed to search a singly linked list of length n for a given element is?', 4),
(3, 'The following postfix expression with single digit operands is evaluated using a stack:\r\n\r\n              8 2 3 ^ / 2 3 * + 5 1 * - \r\n\r\nNote that ^ is the exponentiation operator. The top two elements of the stack after the first * is evaluated are:', 1);

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
(1, 'admin', 'password'),
(2, 'harsh', 'technical'),
(3, 'ishan', ''),
(4, 'ishan', ''),
(5, 'ishan', ''),
(6, 'john', 'letmein');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'harsh', 'technical'),
(3, 'ishan', ''),
(4, 'ishan', ''),
(5, 'ishan', ''),
(6, 'john', 'letmein'),
(7, 'marty', 'stepp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AOAQuestions`
--
ALTER TABLE `AOAQuestions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `DBMSQuestions`
--
ALTER TABLE `DBMSQuestions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `DCNQuestions`
--
ALTER TABLE `DCNQuestions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `DSQuestions`
--
ALTER TABLE `DSQuestions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
