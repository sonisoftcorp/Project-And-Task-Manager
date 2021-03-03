-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 11:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonipixels`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `project_description` text NOT NULL,
  `project_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `project_date`) VALUES
(1, 'book cover', 'This project shows how to create a simple book cover', '2020-08-03'),
(2, 'Birthday Batch', 'This project shows how to create a simple birthday batch', '2020-08-06'),
(3, 'Web Banner', 'This project shows how to create a simple Web Banner.', '2020-08-12'),
(4, 'logo', 'This project show how to create a simple logo', '2020-08-27'),
(23, 'flier Design', 'This projects shows how to design a flier from scratch', '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `ptask_id` int(11) UNSIGNED NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `task_owner` varchar(30) NOT NULL,
  `task_info` text NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `ptask_id`, `task_name`, `task_owner`, `task_info`, `deadline`) VALUES
(2, 1, 'Step 1- book Sizing', 'Rex', 'This involves taking the right measurement as regarding the width and height of your design', '2020-08-11'),
(3, 4, 'Step 2 - Apply shape', 'Max', 'This can be done using a shape tool. either triangle, rectangle, square or a circle tool.', '2020-08-10'),
(4, 4, 'Step 2 - Apply shape', 'Max', 'This can be done using a shape tool. either triangle, rectangle, square or a circle tool.', '2020-08-10'),
(5, 4, 'Step 2 - Apply shape', 'Max', 'This can be done using a shape tool. either triangle, rectangle, square or a circle tool.', '2020-08-10'),
(6, 1, 'Step 2 - Apply shape', 'Rex', 'this explains how to give a shape to the object in mind', '2020-08-12'),
(7, 2, 'Step 1- book Sizing', 'Max', 'This involves taking the right measurement as regarding the width and height of your design', '2020-08-19'),
(8, 3, 'Step 1- book Sizing', 'Max', 'This involves taking the right measurement as regarding the width and height of your design', '2020-08-11'),
(9, 2, 'Step 2 - Apply shape', 'Biggy', 'As regrading the shapes, you have to make sure you choose the right one to use.', '2020-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` char(20) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `phone_number`, `email_address`) VALUES
(1, 'crowned prince', '4a7d1ed414474e4033ac29ccb8653d9b', 'prince', 'sunday', '08141629873', 'princesonisoft@gmail.com'),
(2, 'Engr David', '81dc9bdb52d04dc20036dbd8313ed055', 'David', 'Sunday', '08183060562', 'engrdavid@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
