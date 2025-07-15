-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2025 at 05:19 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `village` varchar(200) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `board` varchar(200) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `divsion` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`id`, `name`, `mobile`, `email`, `dob`, `gender`, `religion`, `category`, `adharno`, `village`, `post`, `police`, `dist`, `state`, `pin`, `degree`, `board`, `pyear`, `divsion`, `department`, `salary`, `image`, `status`, `joining_date`, `password`) VALUES
(1, 'Sovan Majumder', 9083861819, 'sovanr044@gmail.com', '2025-05-09', 'male', 'hindu', 'sc/sc', 111122223333, 'Murshidabad', 'Murshidabad', 'Murshidabad', 'Murshidabad', 'West Bengal', 742149, 'Higher Secondary', 'WB', '2022', '85', 'CSE IOT-BCT ', 30000, '9.jpg', 0, '2025-05-21', '$2y$10$Okow0U3qZNtPdF3OxpcIPOCNEu3JLUsSDyadu4orILyg9wbHenMty'),
(2, 'Sovan Majumder', 9083861819, 'sovanr044@gmail.com', '2025-05-09', 'male', 'hindu', 'sc/sc', 111122223333, 'Murshidabad', 'Murshidabad', 'Murshidabad', 'Murshidabad', 'West Bengal', 742149, 'Higher Secondary', 'WB', '2022', '85', 'CSE IOT-BCT ', 30000, '9.jpg', 0, '2025-05-21', '$2y$10$2mQCqqQ.wXIaz9O7VyGLlezBOLxIjg224LBdWmCe.G8E/tGXcxVVS');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `village` varchar(200) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `board` varchar(200) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `divsion` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hod_attendance`
--

CREATE TABLE `hod_attendance` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hod_salary`
--

CREATE TABLE `hod_salary` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `salary_date` datetime NOT NULL,
  `salary_month` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `village` varchar(200) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `board` varchar(200) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `divsion` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `admission_date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(100) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `does` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `village` varchar(200) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `board` varchar(200) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `divsion` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `mobile`, `email`, `dob`, `gender`, `religion`, `category`, `adharno`, `village`, `post`, `police`, `dist`, `state`, `pin`, `degree`, `board`, `pyear`, `divsion`, `department`, `salary`, `image`, `status`, `joining_date`, `password`) VALUES
(5, 'Sovan Majumder', 9083861819, 'sovanr044@gmail.com', '2025-05-11', 'male', 'hindu', 'OBC', 111122223333, 'Murshidabad', 'Murshidabad', 'Murshidabad', 'Murshidabad', 'West Bengal', 742149, 'Higher Secondary', 'WB', '2022', '85', 'CSE IOT-BCT ', 30000, '1.jpg', 0, '2025-05-13', '$2y$10$dl2kJhoLwxiGevDhAciGr.lGqH7EPqSiIGCS4R7YhtZt1LwnoChDW');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_attendance`
--

CREATE TABLE `teachers_attendance` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers_salary`
--

CREATE TABLE `teachers_salary` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `salary_date` datetime NOT NULL,
  `salary_month` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_attendance`
--
ALTER TABLE `hod_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_salary`
--
ALTER TABLE `hod_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_attendance`
--
ALTER TABLE `teachers_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_salary`
--
ALTER TABLE `teachers_salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hod_attendance`
--
ALTER TABLE `hod_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hod_salary`
--
ALTER TABLE `hod_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers_attendance`
--
ALTER TABLE `teachers_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers_salary`
--
ALTER TABLE `teachers_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
