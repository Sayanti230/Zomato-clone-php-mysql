-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 05:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `street_address`, `landmark`, `city`, `state`, `pin`, `contact_number`) VALUES
(1, 3, 'apcar garden', 'electric office', 'asansol', 'west bengal', 713304, 2147483647),
(2, 3, 'apcar garden', 'eveland nursing home', 'asansol', 'west bengal', 713304, 2147483647),
(3, 3, 'Baroaritala,keshtopur.', '206 foot bridge', 'salt lake', 'west bengal', 700101, 2147483647),
(7, 3, 'apcar garden', 'electric offc', 'asansol', 'west bengal', 713304, 2147483647),
(8, 3, 'Baroaritala,keshtopur.', 'asdd', 'salt lake', 'west bengal', 700101, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 3),
(47, 3, 7),
(48, 3, 1),
(49, 3, 8),
(50, 4, 2),
(51, 3, 5),
(52, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(37, 4, 2, 4),
(54, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `status`, `payment_method`, `amount`, `address`) VALUES
('60facd9dcacea', 3, 2021, 0, 'NET BANKING', 309, '0'),
('60fad0f7e05de', 3, 2021, 0, 'UPI', 450, '0'),
('60fc2a4a1ea69', 3, 2021, 0, 'UPI', 1650, '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(21, '60f8197305449', 2, 1),
(22, '60f8197305449', 3, 1),
(34, '60facd9dcacea', 6, 1),
(35, '60fad0f7e05de', 9, 1),
(36, '60fad3b7d2bf3', 2, 1),
(37, '60fc1777b0bd5', 1, 1),
(38, '60fc2622c5029', 9, 2),
(39, '60fc2a4a1ea69', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `delivery` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `bg`, `details`, `price`, `delivery`, `rating`) VALUES
(1, 'Havemore\r\n', 'https://b.zmtcdn.com/data/pictures/chains/2/132/d554d255e253ceedac500264f07dbfca_o2_featured_v2.jpg\r\n', 'North Indian,Biriyani,Beverages', 550, 42, 3.5),
(2, 'Al-Bake', 'https://b.zmtcdn.com/data/dish_photos/c40/beab524d133666374ff2b06555f5ec40.jpg\" class=\"card-img', 'North Indian,Chinese,Mughlai Fast Food', 250, 49, 4.5),
(3, 'Masterchef Kitchen', 'https://b.zmtcdn.com/data/pictures/chains/6/2786/6be684cebe8fe4304ba47cc17db62b9d_o2_featured_v2.jpg', 'North Indian, Mughlai,Kebab ,Fast Food', 150, 41, 3),
(4, 'Keventers', 'https://b.zmtcdn.com/data/pictures/chains/6/1156/680f06e77a393aadeef657ed77e88514_o2_featured_v2.jpg\r\n', 'Beverages ,Desserts, Ice Creams ', 350, 49, 4.5),
(5, 'Samosa Mastero', 'https://b.zmtcdn.com/data/pictures/8/19648398/68e51d109557db5eecb4da168a770221_o2_featured_v2.jpg', 'Junk Food, Fast Food', 50, 20, 2.5),
(6, 'Domino\'s Pizza', 'https://b.zmtcdn.com/data/pictures/chains/7/309387/9f4de40b94bbed29948bbce8258895ca_o2_featured_v2.jpg', 'Italian,spicy Pizza, Fast Food', 309, 40, 4.5),
(7, 'Art of Spices', 'https://b.zmtcdn.com/data/pictures/chains/2/7212/a4f07703e6c1da6735e5917d7b4b2198_o2_featured_v2.jpg', 'Biryani ,Hyderabadi ,Fast food', 450, 62, 4.5),
(8, 'The Yellow Bowl', 'https://b.zmtcdn.com/data/pictures/9/799/d006dc38c620209acef01dd9622cd297_o2_featured_v2.jpg', 'Biryani, Mughlai , Hyderabadi', 309, 40, 4.5),
(9, 'Bengali Sweets', 'https://i.ndtvimg.com/i/2015-08/rasgulla_625x350_61440575963.jpg', 'Bengali Sweets', 100, 32, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Buchii', 'buchii@gmail.com', '012345'),
(2, 'buchuu', 'buchuu@gmail.com', '12345'),
(3, 'Sayanti', 'sayanti@gmail.com', '12345'),
(4, 'swagata', 'swagata@gmail.com', '123456'),
(5, 'mandira', 'mandira@gmail.com', 'man1234'),
(6, 'Kitty', 'kitty@gmail.com', 'kitty1234'),
(7, 'Jojo', 'jojo@gmail.com', 'jojo123456789'),
(8, 'sona', 'sona@gmail.com', 'sona1234'),
(39, 'bebo', 'bebo@gmail.com', 'bebo'),
(40, 'baby', 'baby@gmail.com', 'baby'),
(41, 'chotobaby', 'chotobaby@gmail.com', 'chotobaby'),
(42, 'Baby chonaa', 'babychonaa@gmail.com', 'chonaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
