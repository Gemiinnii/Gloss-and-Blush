-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 08:43 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_glossandblush`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Uncategorized'),
(2, 'Makeup'),
(3, 'Bath & Body'),
(4, 'Nails'),
(5, 'Hair');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `description`, `category_id`, `price`, `image`, `quantity`, `created_at`) VALUES
(2, 'mac foundation', '', 2, 200, 'm1.jpg', 4, '2018-03-10 05:30:41'),
(5, 'mac lipstick', '', 2, 1500, 'm2.jpg', 4, '2018-03-10 05:30:41'),
(6, 'loreal highlighter', '', 2, 2500, 'm3.jpg', 6, '2018-03-10 05:30:41'),
(7, 'gr lipstick', '', 2, 1000, 'm4.jpg', 6, '2018-03-10 05:30:41'),
(8, 'mac contour', '', 2, 2000, 'm5.jpg', 2, '2018-03-10 05:30:41'),
(9, 'lush bath bombs', '', 3, 500, 'bb1.jpg', 20, '2018-03-10 05:30:41'),
(10, 'nivea shower gel', '', 3, 2500, 'bb2.jpg', 20, '2018-03-10 05:30:41'),
(11, 'tresemme conditioner', '', 3, 4000, 'bb3.jpg', 4, '2018-03-10 05:30:41'),
(12, 'argan oil conditioner', '', 3, 2500, 'bb4.jpg', 5, '2018-03-10 05:30:41'),
(13, 'care conditioners', '', 3, 2000, 'bb5.jpg', 5, '2018-03-10 05:30:41'),
(14, 'essence nailpaint', '', 4, 300, 'n1.jpg', 30, '2018-03-10 05:30:41'),
(15, 'cutex nailpaint', '', 4, 250, 'n2.jpg', 20, '2018-03-10 05:30:41'),
(17, 'Test item', 'test descriptio', 5, 6739, 'test_bb4.jpg', 78, '2018-03-10 05:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 for user, 1 for admin',
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `user_type`, `phone`) VALUES
(1, 'admin', 'admin', 1, 15431),
(2, 'dpsa', 'dpsa', 0, 0),
(5, 'bbk', 'bbk', 0, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
