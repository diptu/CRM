-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2018 at 11:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Drink'),
(2, 'Fruits'),
(3, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `email` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`email`, `item`) VALUES
('k@gmail.com', 'Fried Rice'),
('k@gmail.com', 'Chicken fry'),
('k@gmail.com', 'Biriyani');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`title`, `detail`, `id`, `created_at`, `updated_at`) VALUES
('Cocacola drinks', 'It is harmful....', 1, '2018-11-26 01:40:13', '0000-00-00 00:00:00'),
('drink', 'healthy', 2, '2018-11-26 00:48:28', '0000-00-00 00:00:00'),
('Pizza', 'It is so cheesy and tasty.', 3, '2018-11-26 00:49:15', '0000-00-00 00:00:00'),
('Mojo', 'Bad product', 4, '2018-11-26 00:50:07', '0000-00-00 00:00:00'),
('Cocacola drinks', 'It is tasty but harmful.', 6, '2018-12-11 11:05:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `buying_price` double NOT NULL,
  `selling_price` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit`, `buying_price`, `selling_price`, `category_id`, `created_at`) VALUES
(1, 'Mojo', 'Pices', 13, 18, 1, '2018-11-25 04:35:38'),
(2, 'Apple', 'kg', 60, 80, 2, '2018-11-25 04:36:58'),
(3, 'HP-Pro-book', 'Pieces', 35000, 43000, 3, '2018-11-25 08:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` text,
  `suggestion` text,
  `bio` longtext,
  `profile_pic` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `email`, `contact`, `address`, `suggestion`, `bio`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 'Sanchita', 'Bhowmik', 't@gmail.com', '0988', 'Dhaka', '', NULL, 'uploads/project_pic.jpg', '2018-12-11 07:56:32', '0000-00-00 00:00:00'),
(2, 'sanchita', 'roy', 'corporate@gmail.com', '8776', 'dhaka', '', 'sdaf', NULL, '2017-12-11 08:01:42', '0000-00-00 00:00:00'),
(3, 'new', 'customer', 'diptunazmulalam@gmail.com', '1', 'dacca bangladesh', '', '', 'uploads/Screenshot from 2018-12-04 01-16-57.png', '2018-12-17 10:14:18', '0000-00-00 00:00:00'),
(4, 'new', '1', '1@c.cafda', '', '', '', 'Tolat jark', NULL, '2018-12-17 10:14:28', '0000-00-00 00:00:00'),
(5, 'sanchita', 'tomaly', 'tomaly@cse.edu', '', '', '', NULL, NULL, '2017-12-11 09:56:30', '0000-00-00 00:00:00'),
(6, 'new', 'tomaly', 'ideator@gmail.comfsadf', '', '', '', NULL, NULL, '2017-12-11 09:59:11', '0000-00-00 00:00:00'),
(7, 'sanchita', 'tomaly', 'as@sdafdsa.fdasfas', '', '', '', NULL, NULL, '2018-12-11 10:01:09', '0000-00-00 00:00:00'),
(8, 'new', 'sadf', 'asdf@gmail.comdfa', '', '', '', NULL, NULL, '2018-12-11 10:04:34', '0000-00-00 00:00:00'),
(9, '1', '2', 'n@m.com', '', '', '', NULL, NULL, '2018-12-10 18:00:00', '0000-00-00 00:00:00'),
(10, '1', 'tomaly', 'afsdfasdf@dgfsgf', '', '', '', NULL, NULL, '2018-12-11 10:08:00', '0000-00-00 00:00:00'),
(11, 'sanchita', 'tomaly', 'nazmul.diptu@northsouth.edu', '', '', '', NULL, NULL, '2018-12-11 12:15:02', '0000-00-00 00:00:00'),
(12, 'sanchita', 'tomaly', 'San@m.com', '', '', '', NULL, NULL, '2016-12-17 07:15:51', '0000-00-00 00:00:00'),
(13, 'Abrahar ', 'Linkan', 'abraham@linkan.com', '01678', 'dacca bangladesh', '', NULL, NULL, '2018-12-17 07:44:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `warehouse_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1000),
(2, 1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `address`, `email`, `created_at`, `updated_at`) VALUES
(9, 'Nahid', '0987', 'Sylhe', 'n@gmail.com', '2018-12-17 10:08:37', '0000-00-00 00:00:00'),
(10, 'Sanchita', '019878', 'Dhaka', 'k@gmail.com', '2018-12-11 10:52:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `type`) VALUES
(1, 't@gmail.com', '00000000', 'admin'),
(2, 'corporate@gmail.com', '0987654321', 'customer'),
(4, 'diptunazmulalam@gmail.com', '12345678', 'customer'),
(6, '1@c.cafda', '12345678', 'customer'),
(7, 'tomaly@cse.edu', '12345678', 'customer'),
(9, 'ideator@gmail.comfsadf', '1', 'customer'),
(11, 'as@sdafdsa.fdasfas', 'fasdf', 'customer'),
(14, 'asdf@gmail.comdfa', '12345678', 'customer'),
(15, 'n@m.com', '1', 'customer'),
(19, 'afsdfasdf@dgfsgf', 'adf', 'customer'),
(20, 'nazmul.diptu@northsouth.edu', '12345678', 'customer'),
(21, 'San@m.com', '12345678', 'customer'),
(22, 'abraham@linkan.com', '12345678', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `address`) VALUES
(1, 'The Liquor Store Dacca', 'Bangladesh, Dhaka Division, Dhaka'),
(2, 'Warehouse Fashion Ltd', 'London');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_warehouse_id` (`warehouse_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
