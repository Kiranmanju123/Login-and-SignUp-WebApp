-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 09:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(6, 'bhanu', 'bhanu@gmail.com', 'kiran', 'bhanu.jpg'),
(7, 'Kiran chinnu', 'kiranmanju98@yahoo.com', '$2y$10$zMQYTJSHXmxz1.hnkD1Mr.i.lKKf2MddLwae1Rcnz4BuomBTvoT2i', ''),
(8, 'Raghavendra KG', 'Raghuraghven@gmail.com', '$2y$10$3C6MWPfJ/.1mUGu6bTWWIOkXFmrR6uFmEdsrR.f/pmUUA10xzJVIC', ''),
(9, 'Virat Kohli', 'viratkolhi@yahoo.com', '$2y$10$2TRJEeohmIBJh/O/5fY8/uW02Zb5OnwyUuq.S0e8DwM6mUjN3agL6', ''),
(10, 'Inchara', 'Incharakiran@yahoo.com', '$2y$10$lbDK0pPqed2FeX9nnzVlwOhUcey/W9GQj.9KrhtMeZR4DmvpwzK76', ''),
(11, 'Manjunath N', 'manjunath@gmail.com', '$2y$10$OaUWMnAOK06N22tW7BvUSO6qUwsDVC7S/Sj7tK4Gc7i.xjVMYsNPG', ''),
(12, 'Kavya M', 'kavya@gmail.com', '$2y$10$va7DPjPUCk9Z25AyIaCfEueUrZL7RbFmRSG7oq0YYW/f4pR0HVXF2', ''),
(13, 'Sharath', 'Sharathraghav@yahoo.com', '$2y$10$gQGngOQ2cDwL6O/LFEJtTuByQn/c/uWDJRVZjaqhCigz1c5f/VZ2K', ''),
(14, 'Ganga', 'Ganga@gmail.com', '$2y$10$dBObXsglfeLRSP9hTyhv8..3tKVLi7tp1vVmOdAU0z4hQPTrSDbZG', ''),
(15, 'gayathri', 'Gayathri@yahoo.com', '$2y$10$0X8QnnOWRjYftmiLRZIypeSbyi.ZdK5mbJc3DexVdSB4xA4TjULRu', ''),
(16, 'Shruthi', 'Shruthi@yahoo.com', '$2y$10$V9n68faI8dG0NUMZ9KtbBO50FmsMbuH62YcO7WvxI8.e3B4W5xzv.', ''),
(17, 'Drakshahini SG', 'dakshayani@gmail.com', '$2y$10$cqJ8vMQOfVkSpc7aOarKPurLyAUt0837LSvk3kYRn8Z81LvI8j2uC', ''),
(18, 'Harshitha', 'harshitha@gmail.com', '$2y$10$/SNZIhv92dQYXaBkVAY06ORnUdzq/noxRIJ0t7Q52DH7oQ2TvlRve', ''),
(19, 'Navya', 'Navya@gmail.com', '$2y$10$e/J0WYytYTnI2v3SRVb7rObUv2udwyN0ohNQPr.PRWHopFMdUzOBu', ''),
(20, 'Kiran chinnu', 'kiranmanju99@yahoo.com', '$2y$10$RQtHh7yKzVs2YDXkiz0sWudiXRxIpKeFBh6YOZde8s/aectrwm1cK', ''),
(21, 'Mysore', 'kiranmanju9@yahoo.com', '$2y$10$7KHf79OipbUtBM4aM6WRieDeBArlyKUpLZAyToNdhpKvLgwxtlZaa', ''),
(22, 'Bhagya', 'Bhagya@gmail.com', '$2y$10$ojPtWtqPYeCHuuCH2UY3De9CrtvM8q6aioj989ZJUE7BdP5xWy72q', ''),
(23, 'alex', 'alex@gmail.com', '$2y$10$rVBDMOPdMkx7BK91sFt5HuyfzNm2EwUhICDldw1RTsQlPY78yz3Lu', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
