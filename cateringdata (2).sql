-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 02:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `num_pax` int(5) NOT NULL,
  `event_date` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `event_time` varchar(25) NOT NULL,
  `budget` int(3) NOT NULL,
  `occasion` varchar(50) NOT NULL,
  `promo_code` int(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subscribe` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `special_req` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `contact_person`, `contact_no`, `num_pax`, `event_date`, `location`, `event_time`, `budget`, `occasion`, `promo_code`, `address`, `subscribe`, `company_name`, `email`, `special_req`) VALUES
(1, 'Najwa', 1234567890, 50, '2024-01-26', 'Dewan JKKK', '03:27', 7, 'Family Gathering', 123, 'Nibong Tebal', 'yes', 'none', 'najwa@gmail.com', 'none'),
(2, 'Nana Nini', 175423689, 500, '2024-02-02', 'Outdoor', '15:35', 6, 'Wedding', 12, 'Ampang', 'Yes', 'None', 'nana@gmail.com', 'PA System'),
(3, 'Nabilah', 111234567, 55, '2024-02-10', 'Hall', '09:30', 10, 'Annual Dinner', 0, 'Jalan Ipoh', 'Yes', 'Nabilah Enterprise', 'nabilah@gmail.com', 'Karaoke'),
(4, 'Dalia', 175423689, 35, '2024-02-03', 'Outdoor', '08:40', 6, 'Family Gathering', 12345, 'Ampang', 'Yes', 'None', 'dee@gmail.com', 'None'),
(5, 'Dalia', 175423689, 35, '2024-02-03', 'Outdoor', '08:40', 6, 'Family Gathering', 12345, 'Ampang', '', 'None', 'dee@gmail.com', ''),
(6, 'Najwa', 111234567, 10, '2024-01-26', 'Dewan JKKK', '03:46', 50, 'Family Gathering', 555, 'Nibong Tebal', 'yes', 'none', 'najwa@gmail.com', 'no'),
(7, 'Najwa', 175423689, 0, '', 'Outdoor', '', 10, 'Wedding', 25, 'Nibong Tebal', '', 'none', 'najwa@gmail.com', ''),
(8, 'Najwa', 175423689, 0, '2024-01-26', 'Outdoor', '', 10, 'Wedding', 25, 'Nibong Tebal', '', 'none', 'najwa@gmail.com', ''),
(9, 'Najwa', 175423689, 550, '2024-01-26', 'Outdoor', '03:48', 10, 'Wedding', 25, 'Nibong Tebal', 'yes', 'none', 'najwa@gmail.com', 'no'),
(10, 'Nana Nini', 175423689, 554, '2024-01-26', 'Hall', '03:53', 5, 'Wedding', 555, 'Ampang', 'yes', 'Nabilah Enterprise', 'nana@gmail.com', 'none'),
(11, 'Nana Nini', 111234567, 36, '2024-01-27', 'Hall', '08:36', 50, 'Wedding', 22, 'Ampang', 'njm', 'None', 'nana@gmail.com', 'mk'),
(12, '', 1112345678, 10, '2024-01-19', '', '11:40', 50, '', 0, '', '', '', '', ''),
(13, 'Najwa', 1234567890, 10, '2024-01-17', 'Dewan JKKK', '11:48', 10, 'Family Gathering', 0, 'Ampang', 'vfgfdg', 'none', 'najwa@gmail.com', 'gfdgfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
