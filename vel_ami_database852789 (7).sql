-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 11:00 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vel_ami_database852789`
--

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_admin`
--

CREATE TABLE `vel_ami_admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_admin`
--

INSERT INTO `vel_ami_admin` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `created_at`) VALUES
(2, 'test', 'test', 'test@gmail.com', 'test', '4028a0e356acc947fcd2bfbf00cef11e128d484a', ''),
(3, 'tesat', 'tesat', 'antoniocanillas91@gmail.com', 'test', '4028a0e356acc947fcd2bfbf00cef11e128d484a', ''),
(6, 'Antonio', 'Canillas', 'antoniocanillas91@gmail.com', 'rtet', 'fca5a946c4ae27df043427e7a56e20f7b5e3344e', ''),
(7, 'sadf', 'sadf', 'asdfasdf@sdfsdf', 'asdf', 'e3bfefac763882f82a67fc0cdc42d284ad01d36a', ''),
(8, 'test', 'tes', 'test@gmail.com', 'test', '4028a0e356acc947fcd2bfbf00cef11e128d484a', '');

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_categories`
--

CREATE TABLE `vel_ami_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_categories`
--

INSERT INTO `vel_ami_categories` (`id`, `category`, `icon`) VALUES
(1, ' Automotive &amp; Motorcycles', 'fafa'),
(3, 'Babies &amp; Kids', '');

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_location`
--

CREATE TABLE `vel_ami_location` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_location`
--

INSERT INTO `vel_ami_location` (`id`, `location`) VALUES
(2, 'Talisay City, Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_products`
--

CREATE TABLE `vel_ami_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_products`
--

INSERT INTO `vel_ami_products` (`id`, `product_name`, `category`, `location`, `price`, `description`, `user_id`, `created_date`) VALUES
(7, 'test', '1', '2', '3', '234', 1, '05-12-2019 / 06:32:06'),
(8, 'ddd', '1', '2', '324324', '32', 1, '05-12-2019 / 06:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_shops`
--

CREATE TABLE `vel_ami_shops` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_shops`
--

INSERT INTO `vel_ami_shops` (`id`, `user_id`, `shop_name`, `image`) VALUES
(1, 6, 'test', 'istockphoto-518697927-1024x1024.jpg'),
(2, 1, 'testtt', 'istockphoto-518697927-1024x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_super_admin`
--

CREATE TABLE `vel_ami_super_admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vel_ami_user`
--

CREATE TABLE `vel_ami_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vel_ami_user`
--

INSERT INTO `vel_ami_user` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `image`) VALUES
(1, 'Antonio', 'Canillas', 'antoniocanillas91@gmail.com', '09204299511', '4028a0e356acc947fcd2bfbf00cef11e128d484a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vel_ami_admin`
--
ALTER TABLE `vel_ami_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_categories`
--
ALTER TABLE `vel_ami_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_location`
--
ALTER TABLE `vel_ami_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_products`
--
ALTER TABLE `vel_ami_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_shops`
--
ALTER TABLE `vel_ami_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_super_admin`
--
ALTER TABLE `vel_ami_super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vel_ami_user`
--
ALTER TABLE `vel_ami_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vel_ami_admin`
--
ALTER TABLE `vel_ami_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vel_ami_categories`
--
ALTER TABLE `vel_ami_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vel_ami_location`
--
ALTER TABLE `vel_ami_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vel_ami_products`
--
ALTER TABLE `vel_ami_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vel_ami_shops`
--
ALTER TABLE `vel_ami_shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vel_ami_super_admin`
--
ALTER TABLE `vel_ami_super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vel_ami_user`
--
ALTER TABLE `vel_ami_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
