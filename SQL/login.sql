-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 12:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_name`, `order_email`) VALUES
(3, '2021-06-22 03:33:18', 'Dharshini Raja', 'dharshiniraja2002@gmail.com'),
(18, '2021-06-30 12:28:25', 'John Doe', 'john@doe.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_items`
--

INSERT INTO `orders_items` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1),
(1, 2, 2),
(3, 1, 1),
(11, 1, 1),
(12, 2, 2),
(13, 2, 2),
(14, 2, 1),
(17, 1, 2),
(18, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_description` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(1, 'Bed', 'bed1.jpg', 'EBANSAL Queen Solid Wood Bed With Storage -(Honey Finish_Brown)   \r\n', '39999'),
(2, 'Dressing Table', 'dtable1.jpg', 'Spacewood Value Dressing Table (Natural Wenge)', '6861'),
(3, 'Sofa Cum Bed', 'scb1.jpg', 'Aart Store High-Density Foam Sofa Cum Bed Furniture Two Seater (Black)\r\n', '10999'),
(4, 'Pillows', 'pillow1.jpg', 'JY Satin Stripes Reliance Microfiber Pillows in White Color Set of  ', '699'),
(5, 'Lamp', 'lamp2.jpg', 'SANDED EDGE - SMARTLY PRICED Metal Floor Lamp, Beige  ', '2990'),
(6, 'Clock', 'clock2.jpg', 'E Deals Abstract Printed Wall Clock 10 Inches Round Shaped Designer Wall Clock ', '1499'),
(7, 'Key Holder', 'key1.jpg', 'Webelkart Premium \"Home\" Keys Wooden Key Holder\r\n', '990'),
(8, 'Screen and Divider', 'cad1.jpg', 'Woodykart Mango Wood Wooden Partition Leaves Design/Room Divider', '7349'),
(9, 'Sofa Set', 'sofa1.jpg', 'Solimo Cartina Fabric 5 seater L shape sofa Set (Grey)', '25499'),
(10, 'Coffee Table', 'coffee table4.jpg', 'DeckUp Dusun Coffee Table (Dark Wenge, Matte Finish)', '2099'),
(11, 'Book Shelf', 'book1.jpg', 'Flexible Bookshelf Display Shelf - Free Style ', '1149'),
(12, 'Bean Bag Chair', 'chair1.jpg', 'Nest Bedding Bean Bag Chair ', '2419');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('dharshini', 'password3000', 'dharshiniraja2002@gmail.com'),
('Yazhini', 'sangamitra', 'star2002dust@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`order_name`),
  ADD KEY `email` (`order_email`),
  ADD KEY `order_date` (`order_date`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
