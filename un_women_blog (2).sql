-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 11:09 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `un_women_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int NOT NULL,
  `userid1` int NOT NULL,
  `postid2` int NOT NULL,
  `comment` longtext,
  `publisheddate` timestamp NULL DEFAULT NULL,
  `updateddate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `userid1`, `postid2`, `comment`, `publisheddate`, `updateddate`) VALUES
(11, 1, 79, 'Porcha is the best', NULL, NULL),
(12, 18, 75, 'Ich liebe BMW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id1` int NOT NULL,
  `user_id` int NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_content` longtext,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id1`, `user_id`, `post_title`, `post_content`, `post_date`, `updated_date`) VALUES
(61, 15, 'My goal', 'is to be full stack', '2022-03-29 17:22:05', '2022-03-29 17:22:05'),
(62, 15, 'My goal', 'is to be full stack', '2022-03-29 17:22:09', '2022-03-29 17:22:09'),
(63, 18, 'Aunti dodo', 'we miss you', '2022-03-31 16:10:29', '2022-03-31 16:10:29'),
(64, 18, 'Aunti dodo', 'we miss you', '2022-03-31 16:10:29', '2022-03-31 16:10:29'),
(65, 3, 'bella', 'i adore u', '2022-03-29 18:08:59', '2022-03-29 18:08:59'),
(66, 3, 'bella', 'i adore u', '2022-03-29 18:08:59', '2022-03-29 18:08:59'),
(75, 8, 'Audi', 'wir lieben Autos', '2022-03-30 15:15:16', '2022-03-30 15:15:16'),
(76, 8, 'Audi', 'wir lieben Autos', '2022-03-30 15:15:21', '2022-03-30 15:15:21'),
(77, 8, 'Audi', 'wir lieben Autos', '2022-03-30 15:39:18', '2022-03-30 15:39:18'),
(78, 8, 'Audi', 'wir lieben Autos', '2022-03-30 15:42:20', '2022-03-30 15:42:20'),
(79, 8, 'Audi', 'wir lieben Autos', '2022-03-30 15:42:54', '2022-03-30 15:42:54'),
(80, 2, 'Liverpool ', 'is the best', '2022-03-31 10:56:18', '2022-03-31 10:56:18'),
(81, 2, 'Liverpool ', 'is the best', '2022-03-31 10:56:18', '2022-03-31 10:56:18'),
(82, 2, 'Liverpool ', 'is the best', '2022-03-31 10:56:18', '2022-03-31 10:56:18'),
(90, 2, 'Liverpool ', 'is the best', '2022-03-31 10:56:18', '2022-03-31 10:56:18'),
(91, 2, 'Liverpool ', 'is the best', '2022-03-31 10:56:18', '2022-03-31 10:56:18'),
(92, 16, 'London', 'I love london', '2022-03-31 16:36:36', '2022-03-31 16:36:36'),
(97, 10, 'Paris', 'my favorite distinction ', '2022-04-02 18:50:28', '2022-04-02 18:50:28'),
(98, 10, 'Paris', 'my favorite distinction ', '2022-04-02 18:50:34', '2022-04-02 18:50:34'),
(99, 4, 'ZIZI', 'I love u', '2022-04-03 14:15:27', '2022-04-03 14:15:27'),
(100, 4, 'ZIZI', 'I love u', '2022-04-03 14:15:32', '2022-04-03 14:15:32'),
(102, 1, 'Lara', 'we miss you', '2022-04-04 20:38:34', '2022-04-04 20:38:34'),
(103, 1, 'Lara', 'come back we miss you', '2022-04-04 20:38:46', '2022-04-04 20:38:46'),
(104, 1, 'Lara', 'come back we miss you', '2022-04-04 20:40:19', '2022-04-04 20:40:19'),
(105, 1, 'Lara', 'come back we miss you', '2022-04-04 20:40:41', '2022-04-04 20:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `address`, `email`, `password`, `created_at`, `updated_at`, `lastlogin`) VALUES
(1, 'Dona', 'Metwally', 'Cairo', 'dona@gmail.com', '123', '2022-03-30 19:38:03', '2022-03-30 19:38:03', '2022-03-30 19:38:03'),
(2, 'Magdy', 'Ahmed', 'Cairo', 'Magdy@gmail.com', 'magdy', '2022-03-30 15:54:14', '2022-03-30 15:54:14', '2022-03-30 15:54:14'),
(3, 'Moataz', 'Ahmed', 'Liwan', 'Mizo@gmail.com', '0102', '2022-03-26 07:59:02', '2022-03-26 07:59:02', '2022-03-26 07:59:02'),
(4, 'zidan', 'ahmed', 'emirates', 'zidan@gmail.com', 'zidan', '2022-03-30 14:08:00', '2022-03-30 14:08:00', '2022-03-30 14:08:00'),
(5, 'Ahmed', 'Magdy', 'Cairo', 'ahmed@gmail.com', '123', '2022-03-22 15:16:08', '2022-03-22 15:16:08', '2022-03-22 15:16:08'),
(6, 'Ahmed', 'Magdy', 'Cairo', 'ahmed@gmail.com', '123', '2022-03-22 15:16:40', '2022-03-22 15:16:40', '2022-03-22 15:16:40'),
(7, 'Injy', 'Mohamed', 'Luxor', 'injy@gmail.com', '12345', '2022-03-22 15:59:17', '2022-03-22 15:59:17', '2022-03-22 15:59:17'),
(8, 'Lucas', 'Kern', 'Berlin', 'lucas@gmail.com', 'lucas', '2022-03-22 15:57:57', '2022-03-22 15:57:57', '2022-03-22 15:57:57'),
(9, 'Martino', 'Müller', 'Berlin', 'martino@gmail.com', 'martino', '2022-03-23 07:10:30', '2022-03-23 07:10:30', '2022-03-23 07:10:30'),
(10, 'Samar', 'Ghaly', 'München', 'Samar@gmail.com', 'samar', '2022-03-23 07:11:10', '2022-03-23 07:11:10', '2022-03-23 07:11:10'),
(11, 'Ahmed', 'Mostafa', 'Fujairah', 'ahmed@gmail.com', 'ahmed', '2022-03-23 07:13:03', '2022-03-23 07:13:03', '2022-03-23 07:13:03'),
(15, 'aballah', 'said', 'Cairo', 'aballah@gmail.com', '123', '2022-03-25 21:09:32', '2022-03-25 21:09:32', '2022-03-25 21:09:32'),
(16, 'Ghaly', 'Mohamed', 'london', 'ghaly@gmail.com', '123', '2022-03-25 21:17:57', '2022-03-25 21:17:57', '2022-03-25 21:17:57'),
(17, 'zizi', 'elhusseiny', 'Cairo', 'zizi@gmail.com', '1234', '2022-03-28 18:22:13', '2022-03-28 18:22:13', '2022-03-28 18:22:13'),
(18, 'Isabella', 'Moataz', 'Dubailand', 'isabella@gmail.com', 'bella', '2022-03-29 17:23:10', '2022-03-29 17:23:10', '2022-03-29 17:23:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `userid1` (`userid1`),
  ADD KEY `postid2` (`postid2`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id1`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userid1`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postid2`) REFERENCES `posts` (`post_id1`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
