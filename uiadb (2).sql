-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 أغسطس 2022 الساعة 09:42
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiadb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `CourseNum` int(20) NOT NULL,
  `CourseID` varchar(50) NOT NULL,
  `CourseName` enum('EA*','EAA','EAB','EBA','EBB','E1A','E1B','E2A','E2B','E2C','E2D','E3A','E3B','E4A','E4B','E5A','E5B','E6A','E6B','FA*','FAA','FAB','FBA','FBB','F1A','F1B','F2A','F2B','F2C','F2D','F3A','F3B','EConvA','EConvB','EConvC','EConvD','FConvA','FConvB','FConvC','FConvD','EWsA','EWsB','EWsC','EWsD','FWsA','FWsB','FWsC','FWsD','GramDA','GramDB','GramDC','GramDD','TpA','TpB','TpC','TpD','BusinessCA','BusinessCB','BusinessCC','BusinessCD','TranA','TranB','TranC','TranD','Word','Excel','PowerPoint','Access','OutLook','PhotographyFB','photoEditingFB','APAStyleEditing','ICS','CVW','EFEN','EFM','EFB','EFL') CHARACTER SET utf8 NOT NULL,
  `CouresHour` int(20) NOT NULL,
  `Description` text NOT NULL,
  `CouresPhoto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `register`
--

CREATE TABLE `register` (
  `StudentName` varchar(50) NOT NULL,
  `Age` date NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `CourseName` enum('EA*','EAA','EAB','EBA','EBB','E1A','E1B','E2A','E2B','E2C','E2D','E3A','E3B','E4A','E4B','E5A','E5B','E6A','E6B','FA*','FAA','FAB','FBA','FBB','F1A','F1B','F2A','F2B','F2C','F2D','F3A','F3B','EConvA','EConvB','EConvC','EConvD','FConvA','FConvB','FConvC','FConvD','EWsA','EWsB','EWsC','EWsD','FWsA','FWsB','FWsC','FWsD','GramDA','GramDB','GramDC','GramDD','TpA','TpB','TpC','TpD','BusinessCA','BusinessCB','BusinessCC','BusinessCD','TranA','TranB','TranC','TranD','Word','Excel','PowerPoint','Access','OutLook','PhotographyFB','photoEditingFB','APAStyleEditing','ICS','CVW','EFEN','EFM','EFB','EFL') NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SenderName` varchar(50) NOT NULL,
  `RemittanceVoucherNumber` int(50) NOT NULL,
  `TransferVoucherImage` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `uia_student`
--

CREATE TABLE `uia_student` (
  `StudentNum` int(15) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `Age` date NOT NULL,
  `Education` enum('Primary School','Middle School','High School','Academic') NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `CountryOfResidence` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `uia_student`
--

INSERT INTO `uia_student` (`StudentNum`, `StudentID`, `StudentName`, `Age`, `Education`, `Gender`, `PhoneNumber`, `Nationality`, `CountryOfResidence`, `Email`, `created_at`) VALUES
(26, 'UIA211092326', 'Asmaa', '2001-11-11', 'Primary School', 'Male', 666666555, 'yemeni', 'ksa', 'amirakahtanaaa11@gmail.com', '2022-08-15 22:32:17'),
(27, 'UIA211090927', 'asdsd', '2002-02-22', 'Primary School', 'Male', 55246832544, 'britch', 'korea', 'sdsdfdgf@gmail.com', '2022-08-15 22:32:17'),
(29, 'UIA211074429', 'amat', '2222-02-22', 'High School', 'Male', 6666667, 'korean', 'korea', 'amirakahtanaaa118@gmail.com', '2022-08-15 22:32:17'),
(30, 'UIA21104530', 'amira kahtan', '1111-11-11', 'Primary School', 'Male', 552468325, 'yemeni', 'ksa', 'sdsdfdgf@gmail.com', '2022-08-15 22:32:17'),
(32, 'UIA211091932', 'Asmaabu', '1111-11-11', 'Primary School', 'Male', 55246832544, 'yemeni', 'ksa', 'amirakahtan1@gmail.com', '2022-08-15 22:32:17'),
(33, 'UIA202257133', 'Amira Bumadyan Mohammed Kahtan', '2001-12-12', 'Academic', 'Female', 735739042, 'yemeni', 'ksa', 'amirakahtanwww@gmail.com', '2022-08-15 22:32:17'),
(38, 'UIA20221534538', 'amirassssssss', '2000-11-11', 'Academic', 'Female', 66666644443, 'yemeni', 'ksa', 'amirakahtan123@gmail.com', '2022-08-15 22:32:17'),
(40, 'UIA20220828240', 'Bu-madyan Kahtan', '2000-12-12', 'Academic', 'Male', 552468324, 'yemeni', 'ksa', 'amirakahtan21@gmail.com', '2022-08-16 20:55:06');

-- --------------------------------------------------------

--
-- بنية الجدول `uia_teacher`
--

CREATE TABLE `uia_teacher` (
  `TeacherNum` int(15) NOT NULL,
  `TeacherID` varchar(50) NOT NULL,
  `TeacherName` varchar(50) NOT NULL,
  `Age` date NOT NULL,
  `Education` enum('Primary School','Middle School','High School','Academic') NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Phone_Number` bigint(15) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `CountryOfResidence` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `uia_teacher`
--

INSERT INTO `uia_teacher` (`TeacherNum`, `TeacherID`, `TeacherName`, `Age`, `Education`, `Gender`, `Phone_Number`, `Nationality`, `CountryOfResidence`, `Email`) VALUES
(2, 'UIA21203902', 'Bu-madyan Kahtan', '1974-11-11', 'Academic', 'Male', 552468325, 'yemeni', 'ksa', 'amirakahtan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseNum`),
  ADD UNIQUE KEY `CourseName` (`CourseName`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `StudentName` (`StudentName`),
  ADD UNIQUE KEY `CourseName` (`CourseName`);

--
-- Indexes for table `uia_student`
--
ALTER TABLE `uia_student`
  ADD PRIMARY KEY (`StudentNum`),
  ADD UNIQUE KEY `StudentID` (`StudentID`),
  ADD UNIQUE KEY `StudentName` (`StudentName`);

--
-- Indexes for table `uia_teacher`
--
ALTER TABLE `uia_teacher`
  ADD PRIMARY KEY (`TeacherNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseNum` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uia_student`
--
ALTER TABLE `uia_student`
  MODIFY `StudentNum` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `uia_teacher`
--
ALTER TABLE `uia_teacher`
  MODIFY `TeacherNum` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`StudentName`) REFERENCES `uia_student` (`StudentName`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `uia_student` (`StudentID`),
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`CourseName`) REFERENCES `courses` (`CourseName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
