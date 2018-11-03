-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 07:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student01`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `attandance` float DEFAULT NULL,
  `cin` varchar(5) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`attandance`, `cin`, `usn`) VALUES
(99, '15cs4', '1BI16CS187');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `sem` varchar(5) NOT NULL,
  `sec` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`sem`, `sec`) VALUES
('4', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cin` varchar(5) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cin`, `NAME`, `credits`, `sem`) VALUES
('15cs4', 'mpmc', 4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `events_list`
--

CREATE TABLE `events_list` (
  `Event_id` int(11) NOT NULL,
  `Event_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_list`
--

INSERT INTO `events_list` (`Event_id`, `Event_name`) VALUES
(1, 'Field Trip'),
(2, 'Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `test1` float DEFAULT NULL,
  `test2` float DEFAULT NULL,
  `test3` float DEFAULT NULL,
  `finalia` float DEFAULT NULL,
  `cin` varchar(5) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`test1`, `test2`, `test3`, `finalia`, `cin`, `usn`) VALUES
(20, 19, 18, 0, '15cs4', '1BI16CS187');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usn` varchar(10) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`ts`, `usn`, `comments`) VALUES
('2018-10-29 12:29:12', '1BI16CS181', 'hello'),
('2018-10-29 12:33:45', '1BI16CS187', 'hello, lokeshwar. you are awesome &lt;3'),
('2018-10-29 17:19:34', '1BI16CS187', 'hello123'),
('2018-10-29 17:48:21', '1BI16CS187', 'hello123456'),
('2018-10-29 12:36:50', '1BI16CS187', 'hey.....');

-- --------------------------------------------------------

--
-- Table structure for table `participates`
--

CREATE TABLE `participates` (
  `event_id` int(11) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participates`
--

INSERT INTO `participates` (`event_id`, `usn`) VALUES
(1, '1bi16cs187'),
(2, '1BI16CS187');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL,
  `sec` varchar(5) DEFAULT NULL,
  `ssn` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `NAME`, `sem`, `sec`, `ssn`) VALUES
('1bi16cs187', 'lokeshwar', '4', 'c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ssn` varchar(5) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ssn`, `NAME`) VALUES
('1', 'skm');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ssn` varchar(5) NOT NULL,
  `cin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ssn`, `cin`) VALUES
('1', '15cs4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`cin`,`usn`),
  ADD KEY `fk_05` (`usn`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`sem`,`sec`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `fk_01` (`sem`);

--
-- Indexes for table `events_list`
--
ALTER TABLE `events_list`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`cin`,`usn`),
  ADD KEY `fk_07` (`usn`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`usn`,`comments`);

--
-- Indexes for table `participates`
--
ALTER TABLE `participates`
  ADD PRIMARY KEY (`event_id`,`usn`),
  ADD KEY `fk_11` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `fk_02` (`sem`,`sec`),
  ADD KEY `fk_03` (`ssn`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ssn`,`cin`),
  ADD KEY `fk_09` (`cin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_list`
--
ALTER TABLE `events_list`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attandance`
--
ALTER TABLE `attandance`
  ADD CONSTRAINT `fk_04` FOREIGN KEY (`cin`) REFERENCES `course` (`cin`),
  ADD CONSTRAINT `fk_05` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_01` FOREIGN KEY (`sem`) REFERENCES `class` (`sem`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fk_06` FOREIGN KEY (`cin`) REFERENCES `course` (`cin`),
  ADD CONSTRAINT `fk_07` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `participates`
--
ALTER TABLE `participates`
  ADD CONSTRAINT `fk_11` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`),
  ADD CONSTRAINT `fk_12` FOREIGN KEY (`event_id`) REFERENCES `events_list` (`Event_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_02` FOREIGN KEY (`sem`,`sec`) REFERENCES `class` (`sem`, `sec`),
  ADD CONSTRAINT `fk_03` FOREIGN KEY (`ssn`) REFERENCES `teacher` (`ssn`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `fk_08` FOREIGN KEY (`ssn`) REFERENCES `teacher` (`ssn`),
  ADD CONSTRAINT `fk_09` FOREIGN KEY (`cin`) REFERENCES `course` (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
