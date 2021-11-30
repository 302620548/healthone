-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 12:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'Crosstrainer', 'categories/crosstrainer.jpg'),
(2, 'Hometrainer', 'categories/hometrainer.jpg'),
(3, 'Loopband', 'categories/loopband.jpg'),
(4, 'Roeitrainer', 'categories/roeitrainer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `time`) VALUES
(5, 'Maandag', '07:00 - 20:00'),
(6, 'Dinsdag', '08:00 - 20:00'),
(7, 'Woensdag', '07:00 - 20:00'),
(8, 'Donderdag', '08:00 - 20:00'),
(9, 'Vrijdag', '07:00 - 20:30'),
(10, 'Zaterdag', '08:00 - 17:00'),
(11, 'Zondag', '08:00 - 13:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'Crosstrainer 1', 'categories/crosstrainer/cr1.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(2, 'Crosstrainer 2', 'categories/crosstrainer/cr2.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(3, 'Crosstrainer 3', 'categories/crosstrainer/cr3.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(4, 'Crosstrainer 4', 'categories/crosstrainer/cr4.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(5, 'Crosstrainer 5', 'categories/crosstrainer/cr5.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(6, 'Crosstrainer 6', 'categories/crosstrainer/cr6.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(7, 'Hometrainer 1', 'categories/hometrainer/ht1.jpg', 'Train op een van de meest effectieve manieren', 2),
(8, 'Hometrainer 2', 'categories/hometrainer/ht2.jpg', 'Train op een van de meest effectieve manieren', 2),
(9, 'Hometrainer 3', 'categories/hometrainer/ht3.jpg', 'Train op een van de meest effectieve manieren', 2),
(10, 'Loopband 1', 'categories/Loopband/lb1.jpg', 'Train op een van de meest effectieve manieren', 3),
(11, 'Loopband 2', 'categories/loopband/lb2.jpg', 'Train op een van de meest effectieve manieren', 3),
(12, 'roeitrainer 1', 'categories/roeitrainer/rb1.jpg', 'Train op een van de meest effectieve manieren', 4),
(13, 'roeitrainer 2', 'categories/roeitrainer/rb2.jpg', 'Train op een van de meest effectieve manieren', 4),
(14, 'roeitrainer 3', 'categories/roeitrainer/rb3.jpg', 'Train op een van de meest effectieve manieren', 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `name`, `date`, `description`, `stars`, `product_id`) VALUES
(6, 1, 'dwqdw', '0000-00-00', 'dwqwq', 3, 1),
(7, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(8, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(9, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(10, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(11, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(12, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(13, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(14, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(15, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(16, 1, 'Hallo', '0000-00-00', 'Super tof!', 4, 1),
(17, 1, 'Hallo', '2021-11-25', 'Super tof!', 4, 1),
(18, 1, 'Botveon', '2021-12-01', 'Werkt super!', 5, 1),
(19, 1, 'Botveon', '2021-12-01', 'Werkt super!', 5, 1),
(20, 1, 'Jeff', '2021-12-01', 'Werkt mega goed!', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Role` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `Role`) VALUES
(1, 'test@hotmail.com', 'test', 'test', 'test', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `stars` (`stars`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
