-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2025 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_fullname` varchar(50) DEFAULT NULL,
  `admin_age` smallint(6) DEFAULT NULL,
  `admin_gendre` varchar(10) DEFAULT NULL,
  `admin_phonenumber` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `id_school` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `note` decimal(4,2) DEFAULT NULL,
  `id_subject` int(11) DEFAULT NULL,
  `id_teacher` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id_school` int(11) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_description` text DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_tel` int(11) DEFAULT NULL,
  `school_email` varchar(255) DEFAULT NULL,
  `school_type` enum('public','private') DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `student_tel` int(11) DEFAULT NULL,
  `student_address` varchar(255) DEFAULT NULL,
  `student_birthday` date DEFAULT NULL,
  `student_genre` varchar(6) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `id_class` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `subject_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `teacher_name` varchar(50) DEFAULT NULL,
  `teacher_birthday` date DEFAULT NULL,
  `teacher_tel` int(11) DEFAULT NULL,
  `teacher_address` varchar(255) DEFAULT NULL,
  `teacher_genre` varchar(6) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_subject`
--

CREATE TABLE `teacher_class_subject` (
  `id_teacher` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` enum('admin','teacher','student','parent') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `user_email`, `user_password`, `user_type`) VALUES
(7, 'yassir', 'yassir@gmail.com', '$2y$10$Zd32NgfF5CvuzT.YNlmLjeT4miaHfCxTIQX7LnkRqHz/zlsVVJ5jy', 'admin'),
(8, 'ahmed', 'ahmed@gmail.com', '$2y$10$1iIg5dcY1hatotpLgG1P4ezoeWvfMgmlc3sIGUCZ54OkMmB1lMZMC', 'admin'),
(9, 'nasr', 'nasr@gmail.com', '$2y$10$S/zWrPg8eY0GyJHKA2KKgeKir4UW1GH/RJ/3KiDBR9gCcNBX2ftVi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_userid` (`id_user`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `id_school` (`id_school`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id_school`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_parent` (`id_parent`),
  ADD KEY `student_ibfk_2` (`id_user`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`id_class`,`id_student`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `teacher_ibfk_1` (`id_user`);

--
-- Indexes for table `teacher_class_subject`
--
ALTER TABLE `teacher_class_subject`
  ADD PRIMARY KEY (`id_teacher`,`id_class`,`id_subject`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_class` (`id_class`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id_school` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`id_school`) REFERENCES `school` (`id_school`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id_subject`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_3` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON UPDATE CASCADE;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_class_subject`
--
ALTER TABLE `teacher_class_subject`
  ADD CONSTRAINT `teacher_class_subject_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id_subject`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_class_subject_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_class_subject_ibfk_3` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
