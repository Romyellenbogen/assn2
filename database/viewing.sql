-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 10:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viewing`
--

-- --------------------------------------------------------

--
-- Table structure for table `myviewing`
--

CREATE TABLE `myviewing` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(280) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `medium` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `review` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myviewing`
--

INSERT INTO `myviewing` (`id`, `name`, `title`, `genre`, `medium`, `rate`, `review`) VALUES
(1, 'Romy', 'Killing Eve', 'Drama', 'Hulu', 4, 'Sandra Oh is great!'),
(3, 'Romy', 'Great British Baking Show', 'Other', 'Netflix', 3, 'Everyone is so nice on the show'),
(4, 'Hunter', 'Love Island', 'Romance', 'Hulu', 5, 'It\\\'s an incredible stupid reality TV show'),
(5, 'Romy', 'Sex Education', 'Comedy', 'Netflix', 5, 'Very bright and well done, touches on a lot of interesting issues'),
(6, 'Romy', 'Lady Bird', 'Drama', 'Amazon Prime', 5, 'One of my favorite movies'),
(7, 'Romy', 'The Night Of', 'Drama', 'HBO', 5, 'Riz Ahmed\\\'s performance is award worthy'),
(8, 'Romy', 'Derry Girls', 'Comedy', 'Netflix', 3, 'Cute, light show'),
(9, 'Romy', 'That 70s Show', 'Comedy', 'Netflix', 4, 'It\\\'s fun to see the historical references and bond between friends'),
(10, 'Romy', 'The Good Place', 'Comedy', 'Cable', 3, 'Clever twists, clever dialogue  '),
(11, 'Romy', 'Veep', 'Comedy', 'HBO', 5, 'Feels like it could be real life, whether that\\\'s good or bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myviewing`
--
ALTER TABLE `myviewing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myviewing`
--
ALTER TABLE `myviewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
