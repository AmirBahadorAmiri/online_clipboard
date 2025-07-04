-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2025 at 12:51 PM
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
-- Database: `amirbaha_clipboard_manager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clipboard_manager_tb`
--

CREATE TABLE `clipboard_manager_tb` (
  `clip_id` int(11) NOT NULL,
  `clip_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clipboard_manager_tb`
--

INSERT INTO `clipboard_manager_tb` (`clip_id`, `clip_text`) VALUES
(1, 'salam'),
(22, 'salam/newlsalam'),
(23, 'salam\r\nsalam'),
(24, 'salam\r\nsalam'),
(25, 'sdsds'),
(26, 'sdsds<br>sdsds<br>sdsds'),
(27, 'salam 27<br>salam 27<br>salam 27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clipboard_manager_tb`
--
ALTER TABLE `clipboard_manager_tb`
  ADD PRIMARY KEY (`clip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clipboard_manager_tb`
--
ALTER TABLE `clipboard_manager_tb`
  MODIFY `clip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
