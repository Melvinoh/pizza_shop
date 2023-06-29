-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 01:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `_id` varchar(10) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `url_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`_id`, `cat_name`, `url_img`) VALUES
('Gl_pz3', 'gulten_free-pz', 'pizza1.jpg'),
('Si_pz5', 'sicilian_pz', 'pizza2.jpg'),
('Sp_pz6', 'speciality_pz', 'pizza10.jpeg'),
('St_pz2', 'Stuffed_crust', 'pizza11.jpeg'),
('Th_pz1', 'thin_crust-pz', 'pizza22.jpeg'),
('Vg_pz4', 'Vegan_pz', 'pizza21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tb`
--

CREATE TABLE `invoice_tb` (
  `_id` varchar(10) NOT NULL,
  `userin_id` varchar(20) NOT NULL,
  `orders_id` varchar(10) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items-tb`
--

CREATE TABLE `items-tb` (
  `_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `qty` int(30) NOT NULL DEFAULT 0,
  `description` varchar(30) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `url_img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items-tb`
--

INSERT INTO `items-tb` (`_id`, `name`, `category_id`, `qty`, `description`, `price`, `url_img`) VALUES
('ba8', 'Barbecue Pizza', 'Th_pz1', 30, 'fantastic bbq', 1200, 'pizza1.jpg'),
('BBQ4', 'BBQ Chicken', 'Sp_pz6', 20, 'fantastic bbq', 1500, 'pizza20.jpeg'),
('Ch7', 'Chicago Deep Dish', 'Sp_pz6', 20, 'chcago classic one', 1300, 'pizza3.jpeg'),
('De11', 'Dessert Pizza', 'Vg_pz4', 20, 'dessertpiza', 1800, 'pizza10.jpeg'),
('Fo9', 'Four Cheese Pizza', 'Sp_pz6', 30, 'cheezi lacious', 2500, 'pizza9.jpeg'),
('mar1', 'Margherita', 'Th_pz1', 0, 'marghetita', 1400, 'pizza11.jpeg'),
('pe10', 'Pesto Pizza', 'Th_pz1', 10, 'pesto is such nice', 1700, 'pizza22.jpeg'),
('pep2', 'Pepperoni', 'Vg_pz4', 0, 'peperoni pizza', 1670, 'pizza11.jpeg'),
('ph12', 'Philly ', 'Vg_pz4', 50, 'philly ymmy wooow!', 1660, 'pizzachoma.jpeg'),
('Si5', 'Sicilian', 'Si_pz5', 25, 'pizzalicious  yuumyy', 1550, 'pizzasalad.jpeg'),
('Si_pz5', 'Meat Lover\'s', 'Si_pz5', 30, 'meat lover ndio hii', 1780, 'pizzapng.png'),
('Sp_pz6', 'Chicago Deep Dish', 'Sp_pz6', 20, 'what about a taste', 1250, 'pizza13.jpeg'),
('ve3', 'Vegetarian', 'Vg_pz4', 20, 'cake pozza here it is', 1350, 'pizza14.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders-tb`
--

CREATE TABLE `orders-tb` (
  `customer_id` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `items` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `invoice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_tb`
--

CREATE TABLE `orders_tb` (
  `_id` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `qty` int(6) NOT NULL,
  `Totalprice` int(6) NOT NULL,
  `address` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `second_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `profile_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `invoice_tb`
--
ALTER TABLE `invoice_tb`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `items-tb`
--
ALTER TABLE `items-tb`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `orders-tb`
--
ALTER TABLE `orders-tb`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders_tb`
--
ALTER TABLE `orders_tb`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
