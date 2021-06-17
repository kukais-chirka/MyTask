-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 03:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `Task_ID` int(11) NOT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `MotivationText` varchar(100) NOT NULL,
  `isUrgent` tinyint(1) NOT NULL DEFAULT 0,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Task_ID`, `isDone`, `Title`, `Description`, `MotivationText`, `isUrgent`, `createdDate`) VALUES
(1, 1, 'Homework', 'Do my algerbas homework', 'YOU CAN DO IT!!', 1, '2021-06-17 13:23:18'),
(5, 0, 'Build a house', 'Build a house for my future children and wife', 'Come on, you can do it!', 1, '2021-06-17 09:47:03'),
(13, 1, 'Finish Printful Task', '0', 'You will have the time! Just do it and go with flow', 1, '2021-06-17 13:23:57'),
(15, 1, 'Buy a gift for mom', 'Mom wanted a great son, I believe the gift is already gotten', 'ha-ha', 1, '2021-06-17 13:25:04'),
(21, 0, 'Be nice', '0', '0', 0, '2021-06-17 12:40:22'),
(22, 0, 'Be a better person!', 'Start by getting up in the morning with smile!\\nPlan your day.', '0', 0, '2021-06-17 13:36:48'),
(23, 0, 'Get a Job in web developing', ':)', 'If not this time, maybe next time', 1, '2021-06-17 13:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Task_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `Task_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
