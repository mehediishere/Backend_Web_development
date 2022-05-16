-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 06:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`) VALUES
(1, 'user 01', 'user01@mail.com'),
(2, 'user 02', 'user02@mail.com'),
(3, 'user 03', 'user03@mail.com'),
(4, 'user 04', 'user04@mail.com'),
(5, 'user 05', 'user05@mail.com'),
(6, 'user 06', 'user06@mail.com'),
(7, 'user 07', 'user07@mail.com'),
(8, 'user 08', 'user08@mail.com'),
(9, 'user 09', 'user09@mail.com'),
(10, 'user 10', 'user10@mail.com'),
(11, 'user 11', 'user11@mail.com'),
(12, 'user 12', 'user12@mail.com'),
(13, 'user 13', 'user13@mail.com'),
(14, 'user 14', 'user14@mail.com'),
(15, 'user 15', 'user15@mail.com'),
(16, 'user 16', 'user16@mail.com'),
(17, 'user 17', 'user17@mail.com'),
(18, 'user 18', 'user18@mail.com'),
(19, 'user 19', 'user19@mail.com'),
(20, 'user 20', 'user20@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `images`) VALUES
(1, 'product 1', 'mobile.jpg'),
(2, 'product 1', 'scaler.jpg'),
(3, 'product 1', 'moister.jpg'),
(4, 'Ohim', 'smiling-1280975_1920.jpg'),
(5, 'Ohim', '7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
