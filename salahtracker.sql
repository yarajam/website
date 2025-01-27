-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 09:56 PM
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
-- Database: `salahtracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `january`
--

CREATE TABLE `january` (
  `date` date NOT NULL,
  `fajr` text NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png',
  `duhr` text NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png',
  `asr` text NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png',
  `maghrib` text NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png',
  `isha` text NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png',
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `january`
--

INSERT INTO `january` (`date`, `fajr`, `duhr`, `asr`, `maghrib`, `isha`, `username`) VALUES
('2025-01-17', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam'),
('2025-01-18', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam'),
('2025-01-19', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam'),
('2025-01-20', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam'),
('2025-01-21', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam'),
('2025-01-27', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png', 'yarajam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`, `gender`, `id`) VALUES
('yara abu ammar', 'yarajam', 'yaraabuammar1@gmail.com', '1234', 'Female', 3),
('rama kalabani', 'rama', 'rama@gmail.com', 'rama123', 'Female', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `january`
--
ALTER TABLE `january`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
