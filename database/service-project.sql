-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 07:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'vishalsawai17252@gmail.com', '$2y$10$z/Onf/oJwtRD7VlQkdPn3uR7wktuXzIOpKvqmzBbXg7FkKqW6HFlO');

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `subtype` varchar(250) DEFAULT NULL,
  `projectinfo` varchar(550) DEFAULT NULL,
  `datetime` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`id`, `name`, `phone`, `email`, `service`, `subtype`, `projectinfo`, `datetime`) VALUES
(1, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Graphic Design', 'Resume', ' hi', '2023-03-19 09:43:23'),
(2, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'web development', 'common', ' hello', '2023-03-19 09:43:49'),
(3, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Graphic Design', 'Social media post', ' just check', '2023-03-28 11:23:35'),
(4, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'web development', 'common', ' just', '2023-03-28 11:49:31'),
(5, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'graphic designing', 'common', ' just', '2023-03-28 11:55:40'),
(6, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'app development', 'common', ' hi', '2023-03-28 12:14:57'),
(7, 'shri krushn', '9284059973', 'vishalsawai17252@gmail.com', 'graphic designing', 'common', ' hhh', '2023-03-28 12:19:07'),
(8, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'app development', 'common', ' I want Make A IOS App For To HAck Apple Company', '2023-04-03 12:35:18'),
(9, 'Vishal dnyaneshwar Sawai', '962623639110', 'vishalsawai17252@gmail.com', 'Graphic Design', 'Business Card', ' ', '2023-04-03 12:41:27'),
(10, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Graphic Design', 'Advertising post', ' I Want ', '2023-04-03 12:42:06'),
(11, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'graphic designing', 'common', ' hi vishal', '2023-04-03 16:14:43'),
(12, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'web development', 'common', ' j', '2023-04-03 16:27:28'),
(13, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'web development', 'common', ' j', '2023-04-03 16:28:53'),
(14, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Mobile App Development', 'Hybrid apps', ' I want to make', '2023-04-03 16:30:22'),
(15, 'Vishal dnyaneshwar Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'graphic designing', 'common', ' Zale re bo', '2023-04-03 16:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `mailsubcribe`
--

CREATE TABLE `mailsubcribe` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `datetime` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailsubcribe`
--

INSERT INTO `mailsubcribe` (`id`, `email`, `datetime`) VALUES
(1, 'shdn@gmail.com', '2023-03-19 09:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `msg` varchar(450) DEFAULT NULL,
  `datetime` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fname`, `lname`, `phone`, `email`, `msg`, `datetime`) VALUES
(2, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-03-20 13:04:50'),
(3, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-03-20 13:05:20'),
(4, 'Vishal', 'Sawai', '9284059973', 'vishalsawai17252@gmail.com', 'hi', '2023-03-20 13:08:46'),
(5, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hi', '2023-03-20 13:10:55'),
(6, 'Vishal', 'Sawai', '9284059973', 'vishalsawai17252@gmail.com', 'hi', '2023-03-20 13:12:31'),
(7, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hj', '2023-03-20 13:24:44'),
(8, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-03-20 13:25:18'),
(9, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-03-21 19:40:20'),
(10, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'h', '2023-03-21 19:45:57'),
(11, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'j', '2023-03-21 19:48:50'),
(12, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'h', '2023-03-21 19:54:05'),
(13, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-03-28 12:04:25'),
(14, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'jd', '2023-03-28 12:06:06'),
(15, 'Vishal', 'Sawai', '0923639110', 'vishalsawai17252@gmail.com', 'j', '2023-03-28 12:11:45'),
(16, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'ju', '2023-03-28 12:14:36'),
(17, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Hi Vishal Sawai', '2023-04-03 12:17:32'),
(18, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Hi ', '2023-04-03 12:18:33'),
(19, 'Vishal', 'Sawai', '9284059973', 'vishalsawai17252@gmail.com', 'asjdgh', '2023-04-03 12:19:53'),
(20, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hi', '2023-04-03 12:21:01'),
(21, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hi', '2023-04-03 12:24:50'),
(22, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'Bhai tu aaj raat bhar coding karenga kuch bi ho tu karenga tu karega😥😢', '2023-04-03 12:29:54'),
(23, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-04-03 16:03:58'),
(24, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-04-03 16:07:10'),
(25, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'hello', '2023-04-03 16:08:09'),
(26, 'Vishal', 'Sawai', '9623639110', 'vishalsawai17252@gmail.com', 'helloi', '2023-04-03 16:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailsubcribe`
--
ALTER TABLE `mailsubcribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mailsubcribe`
--
ALTER TABLE `mailsubcribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
