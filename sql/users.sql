-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 04:41 PM
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
-- Database: `spellsizzle`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rate` int(11) NOT NULL DEFAULT 1000,
  `image` varchar(255) DEFAULT 'https://st3.depositphotos.com/6672868/14655/v/450/depositphotos_146556543-stock-illustration-user-profile-symbol.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `rate`, `image`) VALUES
(8, 'nuwanthadias@gmail.com', 'admin', '693cfed9dd8adf7c63afbf53cf3a8043', 2000, 'https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZnVubnklMjBhbmltYWx8ZW58MHx8MHx8&w=1000&q=80'),
(9, 'nuwanthadias01@gmail.com', 'nuwanthapasindhu', '693cfed9dd8adf7c63afbf53cf3a8043', 1010, 'https://play-lh.googleusercontent.com/SZpyRU_FB9qpQsO8uXRrQcC1RZ-HFvqzmB2aaJ-QdK-PA_Rg-bx90onXgHUcwZpg18k'),
(10, 'nuwanthadias02@gmail.com', 'nuwanthapasindhu02', '693cfed9dd8adf7c63afbf53cf3a8043', 1015, 'https://images.theconversation.com/files/438138/original/file-20211216-25-1hu3e65.jpg?ixlib=rb-1.1.0&rect=42%2C0%2C4715%2C3126&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
