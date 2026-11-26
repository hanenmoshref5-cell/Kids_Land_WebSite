-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 01:53 AM
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
-- Database: `kids-land-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `password`) VALUES
(3, 'hanen mushref', '12345'),
(4, 'aisha soufan', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `discounts-prodact`
--

CREATE TABLE `discounts-prodact` (
  `idd` int(25) NOT NULL,
  `prag` varchar(255) NOT NULL,
  `cell` varchar(25) NOT NULL,
  `del` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounts-prodact`
--

INSERT INTO `discounts-prodact` (`idd`, `prag`, `cell`, `del`, `img`, `visible`) VALUES
(1, ' colorful baby stroller', '50$', '150$', 'uploads/img1 150$ 110$.jpeg', 1),
(2, ' colorful baby stroller', '130$', '170$', 'uploads/img2 170$ 130$.jpeg', 1),
(3, ' colorful baby stroller', '120$', '140$', 'uploads/img3 140$ 120$.jpeg', 1),
(4, 'bed for baby', '180$', '200$', 'uploads/img1 200$180$.jpeg', 1),
(5, 'bed for baby', '140$', '190$', 'uploads/img2 190$ 140$.jpeg', 1),
(6, 'bed for baby', '69$', '90$', 'uploads/img3 90$ 60$.jpeg', 1),
(7, 'stove for food', '50$', '60$', 'uploads/img1 60$ 50$.jpeg', 1),
(8, 'stove for food', '60$', '70$', 'uploads/img2 70$ 60$.jpeg', 1),
(9, 'stove for food', '50$', '70$', 'uploads/img3 70$ 50$.jpeg', 1),
(10, 'game children scotter', '20$', '40$', 'uploads/img1 40$ 20$.jpeg', 1),
(12, 'cloths for children', '10$', '20$', 'uploads/img1 20$ 10$.jpeg', 1),
(11, 'game for children', '18$', '30$', 'uploads/img1 30$ 18$.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `md5_pass` varchar(32) NOT NULL,
  `gender` enum('man','women') NOT NULL,
  `birthday` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `md5_pass`, `gender`, `birthday`) VALUES
(1, 'hanen', 'hanen@gmail.com', '12345', '12345', 'women', '12-12-2004'),
(4, 'nada', 'nada@gmail.com', '12345', '$2y$10$XKhEMsZOAtdk..LWyE8BFORsB', 'women', '12-12-2000'),
(10, 'nsreen', 'nsreen@gmail.com', '12345', '$2y$10$qDV3yPCAEZdKCLioD/kS2OVYJ', 'women', '12-12-2003'),
(12, 'loui', 'loui@gmail.com', '12345', '$2y$10$TjP3cMVm8UxXkifT5p1MGO/IC', 'man', '12-12-2005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
