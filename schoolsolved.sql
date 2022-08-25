-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 09:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolsolved`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale` int(100) NOT NULL,
  `addDate` datetime DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `details`, `price`, `sale`, `addDate`, `updateDate`) VALUES
(1, '/image/pic-6.jpg', 'Every Client Matters', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, '2021-08-22 05:23:00'),
(4, '/image/pic-7.jpg', 'Approdable Packages', 'We focus on ergonomics and meeting you....', '16.48', 0, NULL, '2021-08-22 05:25:00'),
(5, '/image/pic-8.jpg', 'Watch our Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(6, '/image/pic-9.jpg', 'Our Popular Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(7, '/image/pic-10.jpg', 'Every Client Matters', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(8, '/image/pic-11.jpg', 'Approdable Packages', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(9, '/image/pic-12.jpg', 'Watch our Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(10, '/image/pic-13.jpg', 'Our Popular Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(11, '/image/pic-14.jpg', 'Every Client Matters', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(12, '/image/pic-15.jpg', 'Approdable Packages', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(13, '/image/pic-16.jpg', 'Watch our Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(14, '/image/pic-17.jpg', 'Our Popular Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(15, '/image/pic-18.jpg', 'Every Client Matters', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(16, '/image/pic-19.jpg', 'Approdable Packages', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(17, '/image/pic-20.jpg', 'Watch our CoursesWatch our Courses', 'We focus on ergonomics and meeting you....', '16.48', 25, NULL, NULL),
(18, '/image/pic-21.jpg', 'Our Popular Courses', 'We focus on ergonomics and meeting you....', '16.48', 15, NULL, '2021-08-22 04:01:00'),
(20, '/image/pic-4.jpg', 'Every Client Matters', 'We focus on ergonomics and meeting you....', '16.48', 0, NULL, NULL),
(21, '/image/pic-2.jpg', 'Our Popular Courses', 'We focus on ergonomics and meeting you....', '16.48', 0, '2021-08-22 04:19:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `message` varchar(255) NOT NULL,
  `publishDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `fullname`, `email`, `phone`, `message`, `publishDate`) VALUES
(1, 'sasasasasfddfdf', 'enail@website.com', '(555) 555 3333', 'lbnlkvfdfdnbblckldkfjldff', '0000-00-00 00:00:00'),
(2, 'sasasasasfddfdf', 'hahaha@website.com', '(555) 555 5555', 'dsssssssssssssssssssssssssdddddddddddd', '0000-00-00 00:00:00'),
(3, 'hakuna matata', 'enail@website.com', '(555) 555 4444', 'HAKUNA MATATA what a wonderful phrase', '2023-08-22 11:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(225) NOT NULL,
  `lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `role`, `lastlogin`) VALUES
(1, 'just_example', 'example', 'itis', 'hahaha@website.com', '$2y$10$6t.Sr.RwHycTQdSWnI1jjeSxjHRS5jEp8vhpNIU9944Q8WQaeu9wa', 'admin', '2023-08-22 04:10:00'),
(2, 'example2', 'aaaa', 'bbbb', 'mail2@website.com', '$2y$10$YURvXrQP/Ett6zpQ835KFedX/5VtrC1HLAsOKk1hnbwG659Hx7w7y', 'editor', '0000-00-00 00:00:00'),
(8, 'John', 'Doe', 'Doe', 'john.doe@example.com', '$2y$10$K/LaGr5/ox7gEKsXbX5EsejhnkcuRNIfQfWDnbNiTMLzwXGlCt4Mq', 'editor', '2023-08-22 11:35:00'),
(11, 'abc', 'def', 'ghi', 'klmnopqrst@example.com', '$2y$10$zzXt472FifmPpIvmW4QJfeH5VD8PeCYesE3bTVRAo/Qlb71Bhfgxm', 'editor', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
