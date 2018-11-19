-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 04:03 PM
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
  `cin` varchar(7) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`attandance`, `cin`, `usn`) VALUES
(83, '15CS31', '1BI17CS001'),
(81, '15CS31', '1BI17CS108'),
(92, '15CS31', '1BI17CS143'),
(87, '15CS31', '1BI17CS160'),
(81, '15CS31', '1BI17CS169'),
(87, '15CS31', '1BI17CS173'),
(90, '15CS31', '1BI17CS181'),
(82, '15CS32', '1BI17CS001'),
(84, '15CS32', '1BI17CS108'),
(83, '15CS32', '1BI17CS143'),
(90, '15CS32', '1BI17CS160'),
(85, '15CS32', '1BI17CS169'),
(90, '15CS32', '1BI17CS173'),
(90, '15CS32', '1BI17CS181'),
(91, '15CS33', '1BI17CS001'),
(85, '15CS33', '1BI17CS108'),
(91, '15CS33', '1BI17CS143'),
(91, '15CS33', '1BI17CS160'),
(83, '15CS33', '1BI17CS169'),
(89, '15CS33', '1BI17CS173'),
(80, '15CS33', '1BI17CS181'),
(82, '15CS34', '1BI17CS001'),
(86, '15CS34', '1BI17CS108'),
(83, '15CS34', '1BI17CS143'),
(92, '15CS34', '1BI17CS160'),
(82, '15CS34', '1BI17CS169'),
(86, '15CS34', '1BI17CS173'),
(85, '15CS34', '1BI17CS181'),
(84, '15CS35', '1BI17CS001'),
(82, '15CS35', '1BI17CS108'),
(89, '15CS35', '1BI17CS143'),
(88, '15CS35', '1BI17CS160'),
(84, '15CS35', '1BI17CS169'),
(85, '15CS35', '1BI17CS173'),
(86, '15CS35', '1BI17CS181'),
(81, '15CS36', '1BI17CS001'),
(83, '15CS36', '1BI17CS108'),
(88, '15CS36', '1BI17CS143'),
(89, '15CS36', '1BI17CS160'),
(84, '15CS36', '1BI17CS173'),
(87, '15CS36', '1BI17CS181'),
(81, '15CS51', '1BI16CS002'),
(82, '15CS51', '1BI16CS003'),
(83, '15CS51', '1BI16CS004'),
(84, '15CS51', '1BI16CS005'),
(84, '15CS51', '1BI16CS006'),
(85, '15CS51', '1BI16CS007'),
(86, '15CS51', '1BI16CS008'),
(87, '15CS51', '1BI16CS009'),
(88, '15CS51', '1BI16CS187'),
(89, '15CS52', '1BI16CS002'),
(90, '15CS52', '1BI16CS003'),
(91, '15CS52', '1BI16CS004'),
(92, '15CS52', '1BI16CS005'),
(93, '15CS52', '1BI16CS006'),
(94, '15CS52', '1BI16CS007'),
(81, '15CS52', '1BI16CS008'),
(82, '15CS52', '1BI16CS009'),
(83, '15CS52', '1BI16CS187'),
(84, '15CS53', '1BI16CS002'),
(85, '15CS53', '1BI16CS003'),
(86, '15CS53', '1BI16CS004'),
(88, '15CS53', '1BI16CS005'),
(89, '15CS53', '1BI16CS006'),
(90, '15CS53', '1BI16CS007'),
(82, '15CS53', '1BI16CS008'),
(83, '15CS53', '1BI16CS009'),
(84, '15CS53', '1BI16CS187'),
(83, '15CS54', '1BI16CS002'),
(84, '15CS54', '1BI16CS003'),
(85, '15CS54', '1BI16CS004'),
(86, '15CS54', '1BI16CS005'),
(82, '15CS54', '1BI16CS006'),
(83, '15CS54', '1BI16CS007'),
(84, '15CS54', '1BI16CS008'),
(85, '15CS54', '1BI16CS009'),
(81, '15CS54', '1BI16CS187'),
(82, '15CS55', '1BI16CS002'),
(83, '15CS55', '1BI16CS003'),
(84, '15CS55', '1BI16CS004'),
(85, '15CS55', '1BI16CS005'),
(86, '15CS55', '1BI16CS006'),
(87, '15CS55', '1BI16CS007'),
(82, '15CS55', '1BI16CS008'),
(83, '15CS55', '1BI16CS009'),
(88, '15CS55', '1BI16CS187'),
(87, '15CS56', '1BI16CS002'),
(88, '15CS56', '1BI16CS003'),
(89, '15CS56', '1BI16CS004'),
(90, '15CS56', '1BI16CS005'),
(91, '15CS56', '1BI16CS006'),
(92, '15CS56', '1BI16CS007'),
(93, '15CS56', '1BI16CS008'),
(92, '15CS56', '1BI16CS009'),
(84, '15CS56', '1BI16CS187'),
(88, '15CS71', '1BI15CS010'),
(86, '15CS71', '1BI15CS011'),
(88, '15CS71', '1BI15CS012'),
(82, '15CS71', '1BI15CS013'),
(83, '15CS71', '1BI15CS014'),
(84, '15CS71', '1BI15CS015'),
(87, '15CS71', '1BI15CS016'),
(88, '15CS72', '1BI15CS010'),
(87, '15CS72', '1BI15CS011'),
(86, '15CS72', '1BI15CS012'),
(81, '15CS72', '1BI15CS013'),
(83, '15CS72', '1BI15CS014'),
(89, '15CS72', '1BI15CS015'),
(87, '15CS72', '1BI15CS016'),
(87, '15CS73', '1BI15CS010'),
(90, '15CS73', '1BI15CS011'),
(88, '15CS73', '1BI15CS012'),
(86, '15CS73', '1BI15CS013'),
(88, '15CS73', '1BI15CS014'),
(85, '15CS73', '1BI15CS015'),
(90, '15CS73', '1BI15CS016'),
(87, '15CS74', '1BI15CS010'),
(88, '15CS74', '1BI15CS011'),
(81, '15CS74', '1BI15CS012'),
(85, '15CS74', '1BI15CS013'),
(82, '15CS74', '1BI15CS014'),
(86, '15CS74', '1BI15CS015'),
(88, '15CS74', '1BI15CS016');

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
('3', 'A'),
('3', 'B'),
('4', 'A'),
('4', 'C'),
('5', 'A'),
('5', 'B'),
('5', 'C'),
('6', 'A'),
('6', 'B'),
('7', 'A'),
('7', 'B'),
('8', 'A'),
('8', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cin` varchar(7) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cin`, `NAME`, `credits`, `sem`) VALUES
('15CS31', 'DAA', 4, '3'),
('15CS32', 'USP', 4, '3'),
('15CS33', 'DMS', 4, '3'),
('15CS34', 'CO', 4, '3'),
('15CS35', 'ADE', 4, '3'),
('15CS36', 'M3', 4, '3'),
('15CS41', 'SE', 4, '4'),
('15CS42', 'DC', 4, '4'),
('15CS43', 'ADA', 4, '4'),
('15CS44', 'MPMC', 4, '4'),
('15CS45', 'M4', 4, '4'),
('15CS46', 'OOC', 4, '7'),
('15CS51', 'DBMS', 4, '5'),
('15CS52', 'AJAVA', 4, '5'),
('15CS53', '.NET', 4, '5'),
('15CS54', 'CN', 4, '5'),
('15CS55', 'ME', 4, '5'),
('15CS56', 'ATCI', 4, '5'),
('15CS61', 'CNS', 4, '6'),
('15CS62', 'CG', 4, '6'),
('15CS63', 'SS&CD', 4, '6'),
('15CS64', 'OS', 4, '6'),
('15CS65', 'FS', 4, '6'),
('15CS66', 'ST', 4, '6'),
('15CS71', 'WT', 4, '7'),
('15CS72', 'ACA', 4, '7'),
('15CS73', 'CCA', 4, '7'),
('15CS74', 'ML', 4, '7');

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
  `cin` varchar(7) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`test1`, `test2`, `test3`, `finalia`, `cin`, `usn`) VALUES
(20, 12, 10, 0, '15CS31', '1BI17CS001'),
(20, 12, 10, 0, '15CS31', '1BI17CS108'),
(20, 12, 10, 0, '15CS31', '1BI17CS143'),
(20, 12, 10, 0, '15CS31', '1BI17CS160'),
(20, 12, 10, 0, '15CS31', '1BI17CS169'),
(20, 12, 10, 0, '15CS31', '1BI17CS173'),
(20, 12, 10, 0, '15CS31', '1BI17CS181'),
(20, 12, 12, 0, '15CS32', '1BI17CS001'),
(20, 20, 20, 0, '15CS32', '1BI17CS108'),
(12, 12, 12, 0, '15CS32', '1BI17CS143'),
(20, 20, 20, 0, '15CS32', '1BI17CS160'),
(17, 15, 12, 0, '15CS32', '1BI17CS169'),
(12, 12, 12, 0, '15CS32', '1BI17CS173'),
(20, 12, 12, 0, '15CS32', '1BI17CS181'),
(12, 12, 12, 0, '15CS33', '1BI17CS001'),
(17, 15, 12, 0, '15CS33', '1BI17CS108'),
(20, 12, 12, 0, '15CS33', '1BI17CS143'),
(17, 15, 12, 0, '15CS33', '1BI17CS160'),
(12, 12, 12, 0, '15CS33', '1BI17CS169'),
(20, 12, 12, 0, '15CS33', '1BI17CS173'),
(12, 12, 12, 0, '15CS33', '1BI17CS181'),
(20, 20, 20, 0, '15CS34', '1BI17CS001'),
(12, 12, 12, 0, '15CS34', '1BI17CS108'),
(12, 12, 12, 0, '15CS34', '1BI17CS143'),
(12, 12, 12, 0, '15CS34', '1BI17CS160'),
(20, 12, 12, 0, '15CS34', '1BI17CS169'),
(12, 12, 12, 0, '15CS34', '1BI17CS173'),
(20, 20, 20, 0, '15CS34', '1BI17CS181'),
(17, 15, 12, 0, '15CS35', '1BI17CS001'),
(20, 12, 12, 0, '15CS35', '1BI17CS108'),
(20, 20, 20, 0, '15CS35', '1BI17CS143'),
(20, 12, 12, 0, '15CS35', '1BI17CS160'),
(20, 20, 20, 0, '15CS35', '1BI17CS169'),
(20, 20, 20, 0, '15CS35', '1BI17CS173'),
(17, 15, 12, 0, '15CS35', '1BI17CS181'),
(12, 12, 12, 0, '15CS36', '1BI17CS001'),
(12, 12, 12, 0, '15CS36', '1BI17CS108'),
(17, 15, 12, 0, '15CS36', '1BI17CS143'),
(12, 12, 12, 0, '15CS36', '1BI17CS160'),
(12, 12, 12, 0, '15CS36', '1BI17CS169'),
(17, 15, 12, 0, '15CS36', '1BI17CS173'),
(12, 12, 12, 0, '15CS36', '1BI17CS181'),
(20, 18, 16, 0, '15CS51', '1BI16CS002'),
(20, 18, 18, 0, '15CS51', '1BI16CS003'),
(18, 18, 18, 0, '15CS51', '1BI16CS004'),
(20, 20, 20, 0, '15CS51', '1BI16CS005'),
(17, 15, 18, 0, '15CS51', '1BI16CS006'),
(18, 18, 18, 0, '15CS51', '1BI16CS007'),
(20, 20, 20, 0, '15CS51', '1BI16CS008'),
(17, 15, 18, 0, '15CS51', '1BI16CS009'),
(20, 19, 0, 0, '15CS51', '1BI16CS187'),
(19, 16, 16, 0, '15CS52', '1BI16CS002'),
(19, 16, 16, 0, '15CS52', '1BI16CS003'),
(16, 16, 16, 0, '15CS52', '1BI16CS004'),
(19, 19, 19, 0, '15CS52', '1BI16CS005'),
(17, 16, 16, 0, '15CS52', '1BI16CS006'),
(16, 16, 16, 0, '15CS52', '1BI16CS007'),
(19, 19, 19, 0, '15CS52', '1BI16CS008'),
(17, 16, 16, 0, '15CS52', '1BI16CS009'),
(19, 19, 0, 0, '15CS52', '1BI16CS187'),
(19, 14, 16, 0, '15CS53', '1BI16CS002'),
(14, 16, 16, 0, '15CS53', '1BI16CS003'),
(16, 16, 16, 0, '15CS53', '1BI16CS004'),
(15, 19, 14, 0, '15CS53', '1BI16CS005'),
(17, 13, 16, 0, '15CS53', '1BI16CS006'),
(16, 16, 12, 0, '15CS53', '1BI16CS007'),
(10, 17, 19, 0, '15CS53', '1BI16CS008'),
(17, 16, 16, 0, '15CS53', '1BI16CS009'),
(20, 18, 0, 0, '15CS53', '1BI16CS187'),
(20, 18, 16, 0, '15CS54', '1BI16CS002'),
(20, 18, 17, 0, '15CS54', '1BI16CS003'),
(18, 19, 18, 0, '15CS54', '1BI16CS004'),
(20, 20, 0, 0, '15CS54', '1BI16CS005'),
(17, 15, 18, 0, '15CS54', '1BI16CS006'),
(18, 19, 18, 0, '15CS54', '1BI16CS007'),
(20, 20, 20, 0, '15CS54', '1BI16CS008'),
(17, 15, 18, 0, '15CS54', '1BI16CS009'),
(18, 17, 0, 0, '15CS54', '1BI16CS187'),
(20, 16, 16, 0, '15CS55', '1BI16CS002'),
(20, 16, 16, 0, '15CS55', '1BI16CS003'),
(16, 10, 16, 0, '15CS55', '1BI16CS004'),
(19, 19, 19, 0, '15CS55', '1BI16CS005'),
(10, 16, 16, 0, '15CS55', '1BI16CS006'),
(16, 16, 16, 0, '15CS55', '1BI16CS007'),
(19, 19, 0, 0, '15CS55', '1BI16CS008'),
(14, 16, 16, 0, '15CS55', '1BI16CS009'),
(17, 18, 16, 0, '15CS55', '1BI16CS187'),
(19, 14, 18, 0, '15CS56', '1BI16CS002'),
(14, 16, 16, 0, '15CS56', '1BI16CS003'),
(16, 17, 16, 0, '15CS56', '1BI16CS004'),
(18, 17, 14, 0, '15CS56', '1BI16CS005'),
(17, 13, 16, 0, '15CS56', '1BI16CS006'),
(16, 16, 12, 0, '15CS56', '1BI16CS007'),
(10, 17, 19, 0, '15CS56', '1BI16CS008'),
(17, 16, 17, 0, '15CS56', '1BI16CS009'),
(20, 19, 0, 0, '15CS56', '1BI16CS187'),
(20, 18, 16, 0, '15CS71', '1BI15CS010'),
(20, 18, 18, 0, '15CS71', '1BI15CS011'),
(18, 18, 18, 0, '15CS71', '1BI15CS012'),
(20, 20, 20, 0, '15CS71', '1BI15CS013'),
(17, 15, 18, 0, '15CS71', '1BI15CS014'),
(18, 18, 18, 0, '15CS71', '1BI15CS015'),
(18, 18, 18, 0, '15CS71', '1BI15CS016'),
(17, 18, 16, 0, '15CS72', '1BI15CS010'),
(16, 18, 18, 0, '15CS72', '1BI15CS011'),
(19, 18, 18, 0, '15CS72', '1BI15CS012'),
(10, 20, 20, 0, '15CS72', '1BI15CS013'),
(17, 15, 18, 0, '15CS72', '1BI15CS014'),
(17, 16, 18, 0, '15CS72', '1BI15CS015'),
(18, 18, 0, 0, '15CS72', '1BI15CS016'),
(17, 17, 16, 0, '15CS73', '1BI15CS010'),
(16, 16, 19, 0, '15CS73', '1BI15CS011'),
(19, 16, 18, 0, '15CS73', '1BI15CS012'),
(15, 20, 17, 0, '15CS73', '1BI15CS013'),
(17, 15, 18, 0, '15CS73', '1BI15CS014'),
(15, 16, 17, 0, '15CS73', '1BI15CS015'),
(18, 16, 0, 0, '15CS73', '1BI15CS016'),
(17, 18, 16, 0, '15CS74', '1BI15CS010'),
(16, 15, 17, 0, '15CS74', '1BI15CS011'),
(12, 18, 18, 0, '15CS74', '1BI15CS012'),
(13, 14, 0, 0, '15CS74', '1BI15CS013'),
(14, 15, 8, 0, '15CS74', '1BI15CS014'),
(16, 18, 8, 0, '15CS74', '1BI15CS015'),
(17, 16, 10, 0, '15CS74', '1BI15CS016');

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
('2018-11-07 17:19:34', '1BI16CS001', 'YOU NEED TO ATTEND CLASS'),
('2018-11-07 17:20:45', '1BI16CS108', 'YOU NEED TO ATTEND CLASS'),
('2018-11-08 17:01:55', '1BI16CS143', 'NEED TO GET BETTER'),
('2018-11-09 17:24:55', '1BI16CS160', 'FOCUS ON WHAT MATTERS'),
('2018-11-18 17:24:55', '1BI16CS169', 'YOU CAN DO IT'),
('2018-11-28 17:27:55', '1BI16CS173', 'COME ON GIVE YOUR BEST'),
('2018-11-29 17:05:55', '1BI16CS181', 'YOUR THE BEST AT WHAT YOU DO');

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
(1, '1BI16CS187'),
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
('1BI15CS010', 'SHAMITH', '7', 'A', 'CSE06'),
('1BI15CS011', 'AMITH', '7', 'B', 'CSE06'),
('1BI15CS012', 'APEKSHA', '7', 'B', 'CSE06'),
('1BI15CS013', 'SAMYUKTA', '7', 'A', 'CSE07'),
('1BI15CS014', 'AAMIR', '7', 'A', 'CSE07'),
('1BI15CS015', 'JEESHAN', '7', 'B', 'CSE07'),
('1BI15CS016', 'RAVI', '7', 'B', 'CSE07'),
('1BI16CS002', 'RANJAN', '5', 'A', 'CSE03'),
('1BI16CS003', 'PAVAN', '5', 'A', 'CSE04'),
('1BI16CS004', 'NANDINI', '5', 'B', 'CSE04'),
('1BI16CS005', 'ABJINI', '5', 'C', 'CSE03'),
('1BI16CS006', 'DARSHAN', '5', 'C', 'CSE05'),
('1BI16CS007', 'ASHRAY', '5', 'C', 'CSE05'),
('1BI16CS008', 'SPOORTHI', '5', 'B', 'CSE04'),
('1BI16CS009', 'VARUN', '5', 'A', 'CSE05'),
('1BI16CS187', 'LOKESHWAR', '5', 'C', 'CSE05'),
('1BI17CS001', 'ABHILASH', '3', 'B', 'CSE02'),
('1BI17CS108', 'SONAL', '3', 'B', 'CSE03'),
('1BI17CS143', 'SIMRAN', '3', 'B', 'CSE01'),
('1BI17CS160', 'JATU', '3', 'A', 'CSE02'),
('1BI17CS169', 'TASHAN', '3', 'A', 'CSE02'),
('1BI17CS173', 'VADIRAJA', '3', 'B', 'CSE01'),
('1BI17CS181', 'VISHVESHWARA', '3', 'A', 'CSE01');

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
('CSE01', 'RAMESH'),
('CSE02', 'SURESH'),
('CSE03', 'AJAY'),
('CSE04', 'ADARSH'),
('CSE05', 'SPARSH'),
('CSE06', 'SUCHITRA'),
('CSE07', 'NIHIRIKA');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ssn` varchar(5) NOT NULL,
  `cin` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ssn`, `cin`) VALUES
('CSE01', '15CS31'),
('CSE01', '15CS51'),
('CSE01', '15CS61'),
('CSE02', '15CS32'),
('CSE02', '15CS42'),
('CSE02', '15CS52'),
('CSE02', '15CS62'),
('CSE02', '15CS72'),
('CSE03', '15CS33'),
('CSE03', '15CS43'),
('CSE03', '15CS63'),
('CSE03', '15CS73'),
('CSE04', '15CS34'),
('CSE04', '15CS44'),
('CSE04', '15CS54'),
('CSE04', '15CS64'),
('CSE04', '15CS74'),
('CSE05', '15CS35'),
('CSE05', '15CS45'),
('CSE05', '15CS55'),
('CSE05', '15CS65'),
('CSE06', '15CS36'),
('CSE06', '15CS46'),
('CSE06', '15CS56'),
('CSE06', '15CS66'),
('CSE07', '15CS41'),
('CSE07', '15CS53'),
('CSE07', '15CS71');

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
