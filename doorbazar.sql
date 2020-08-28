-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 09:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doorbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_category`
--

CREATE TABLE `branch_category` (
  `branch_category_id` int(100) NOT NULL,
  `branch_category` varchar(250) NOT NULL,
  `global_category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_category`
--

INSERT INTO `branch_category` (`branch_category_id`, `branch_category`, `global_category_id`) VALUES
(8, 'لوازم آشپزخانه', 4),
(9, 'لپ تاپ', 5),
(10, 'گوشی موبایل', 5),
(11, 'تلویزیون', 5),
(12, 'لوازم آشپزخانه', 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `global_category_id` int(100) NOT NULL,
  `branch_category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `global_category_id`, `branch_category_id`) VALUES
(1, 'کیف و لوازم لبتاپ', 5, 9),
(2, 'لپ تاپ های تاشو و جدا شونده', 5, 9),
(3, 'اجاق گاز', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `viewer` int(100) NOT NULL,
  `session` int(100) NOT NULL,
  `good` int(100) NOT NULL,
  `users_counter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`viewer`, `session`, `good`, `users_counter`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `viewer` int(100) NOT NULL,
  `session` int(100) NOT NULL,
  `good` int(100) NOT NULL,
  `users-counter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`viewer`, `session`, `good`, `users-counter`) VALUES
(1, 1, 1, 1),
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `viewer` int(100) NOT NULL,
  `session` int(100) NOT NULL,
  `good` int(100) NOT NULL,
  `users-counter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`viewer`, `session`, `good`, `users-counter`) VALUES
(1, 1, 1, 1),
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `global_category`
--

CREATE TABLE `global_category` (
  `global_category_id` int(100) NOT NULL,
  `global_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `global_category`
--

INSERT INTO `global_category` (`global_category_id`, `global_category`) VALUES
(4, 'لوازم خانگی'),
(5, 'لوازم دیجیتال'),
(6, 'لوازم التحریر');

-- --------------------------------------------------------

--
-- Table structure for table `good`
--

CREATE TABLE `good` (
  `good_id` int(100) NOT NULL,
  `good_name` varchar(200) NOT NULL,
  `good_price` varchar(200) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `seller_name` varchar(200) NOT NULL,
  `del_time` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `global_category_id` int(100) NOT NULL,
  `branch_category_id` int(100) NOT NULL,
  `category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `good`
--

INSERT INTO `good` (`good_id`, `good_name`, `good_price`, `brand_name`, `seller_name`, `del_time`, `description`, `img`, `global_category_id`, `branch_category_id`, `category_id`) VALUES
(1, 'کوله پشتی  فوروارد مدل زیرا مناسب برای لپ تاپ 12 اینچی', '1500000', 'فوروارد', 'آریا شاپ', '2 روز کاری', 'قابلیت حمل لپ تاپ 12 اینچی به همراه قابلیت حمل کتاب دفتر وسایر وسایل ،قابل استفاده برای مصارف روزانه', '', 5, 9, 2),
(2, 'Ideapad 520', '1550000000', 'Lenevo', 'ایران رایانه', '', 'فوق العاده', '', 5, 9, 2),
(3, 'اجاق گاز تکنو  گاز', '2000000', 'تکنو گاز', 'ایران گاز', '', '', '', 4, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `good_id` int(100) NOT NULL,
  `order_num` int(100) NOT NULL,
  `user_address` tinytext NOT NULL,
  `send_time` datetime NOT NULL,
  `subtotal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `orginal_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `orginal_name`) VALUES
(3, 'mahdyabdnia', '123', 'mahdyabdnia@gmail.com', 'حخححخ'),
(4, 'bardian', '888papa113119', 'mahdyand@gmail.com', 'gagdg'),
(5, 'javadborna', '8888', 'javad@gmail.com', 'javadborna'),
(6, 'jaba', '888000', 'jaba@gmail.com', 'java'),
(7, 'gfgfg', 'gfgfgf', 'hadfd@hhghg.vvv', 'fgfgfg'),
(8, 'yytyt', '65656', 'fytyty@ghgh.tyhgh', '656565'),
(9, 'hghgtt', 'tytyty', 'uyyuy@hghg.com', 'ytytyt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_category`
--
ALTER TABLE `branch_category`
  ADD PRIMARY KEY (`branch_category_id`),
  ADD KEY `global_category_id` (`global_category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_ibfk_1` (`global_category_id`),
  ADD KEY `branch_category_id` (`branch_category_id`);

--
-- Indexes for table `global_category`
--
ALTER TABLE `global_category`
  ADD PRIMARY KEY (`global_category_id`);

--
-- Indexes for table `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`good_id`),
  ADD KEY `global_category_id` (`global_category_id`),
  ADD KEY `branch_category_id` (`branch_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_category`
--
ALTER TABLE `branch_category`
  MODIFY `branch_category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `global_category`
--
ALTER TABLE `global_category`
  MODIFY `global_category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `good`
--
ALTER TABLE `good`
  MODIFY `good_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_category`
--
ALTER TABLE `branch_category`
  ADD CONSTRAINT `branch_category_ibfk_1` FOREIGN KEY (`global_category_id`) REFERENCES `global_category` (`global_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`global_category_id`) REFERENCES `global_category` (`global_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`branch_category_id`) REFERENCES `branch_category` (`branch_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `good`
--
ALTER TABLE `good`
  ADD CONSTRAINT `good_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
