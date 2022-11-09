-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--
CREATE DATABASE IF NOT EXISTS `chatapp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chatapp`;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--
-- Creation: Oct 30, 2022 at 05:43 PM
-- Last update: Nov 09, 2022 at 10:07 AM
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `msg_id` int(255) NOT NULL AUTO_INCREMENT,
  `outgoing_msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `datetimestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `chats`
--

TRUNCATE TABLE `chats`;
--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`msg_id`, `outgoing_msg_id`, `incoming_msg_id`, `message`, `datetimestamp`) VALUES
(1, 1142400451, 1383646038, 'hello  sahil', '2022-11-09 04:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Oct 26, 2022 at 10:43 AM
-- Last update: Nov 09, 2022 at 10:06 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(200) NOT NULL,
  `f_name` varchar(300) NOT NULL,
  `l_name` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `picture` varchar(400) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `f_name`, `l_name`, `email`, `password`, `picture`, `datetime`, `status`) VALUES
(1, 1142400451, 'Ayush', 'Singh', 'ayush@gmail.com', '123456', '1667967415pic.jpeg', '2022-11-09 10:06:22', 'Active Now'),
(2, 1383646038, 'Sahil ', 'Khurseed', 'sahil@gmail.com', '123456', '1667967480Chat2.jpg', '2022-11-09 08:25:24', 'Offline now'),
(3, 1349105658, 'Amit', 'Sharma', 'amit@gmail.com', '123456', '1667967585467086.jpg', '2022-11-09 10:06:53', 'Active Now');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
