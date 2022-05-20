-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 06:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'saad', 'saad@gmail.com', 3315252525, 'saad');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bookno` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookno`, `category`, `name`, `author`, `price`, `image`) VALUES
(1, 'bk01', 'Action & Adventure', 'Gai-Jin', 'James Clavell', 10, '1614138632_actionlist1.jpg'),
(2, 'bk02', 'Action & Adventure', 'Bitterroot', 'James Lee Burke', 11, '1614138695_actionlist2.jpg'),
(3, 'bk03', 'Action & Adventure', 'City Of The Dead', 'Herbert LiRberman', 12, '1614138762_actionlist3.jpg'),
(4, 'bk04', 'Action & Adventure', 'On Ice A Thriller', 'David Ramus', 10, '1614138832_actionlist4.jpg'),
(5, 'bk05', 'Action & Adventure', 'Redline', 'Drake', 9, '1614138894_actionlist5.jpg'),
(6, 'bk06', 'Action & Adventure', 'Dog Walker', 'Kizzier Heath', 13, '1614138939_actionlist6.jpg'),
(7, 'bk07', 'Calssic', 'Dombey & Son', 'charles dickens', 8, '1614139225_classiclist1.jpg'),
(8, 'bk08', 'Calssic', 'The Ingolds Legends', 'Thomas Ingolds', 7, '1614139365_classicscategory27.jpg'),
(9, 'bk09', 'Calssic', 'Selected Poetry Of W.H. Auden', 'W.H. Auden', 21, '1614139706_classiclist3.jpg'),
(10, 'bk10', 'Calssic', 'Elbow Room', 'Oliverst John Gogarty', 4, '1614139782_classiclist4.jpg'),
(13, 'bk11', 'Calssic', 'A Tale Of Two Citis', 'Dickens Charless', 13, '1614401159_classiclist5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `mobilenumber`, `password`, `confirmpassword`, `address`, `method`) VALUES
(7, 'zain', 'ali', 'zain@gmail.com', 3315252525, 'zain', 'zain', '', ''),
(9, 'Ali', 'Hussan', 'ali@gmail.com', 3339999999, 'ali', 'ali', 'h#1 St#2, Islamabad Pakistan', 'Cash On Delivery'),
(12, '', '', '', 0, '', '', '', ''),
(13, '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `customername` varchar(20) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customerid`, `customername`, `feedback`) VALUES
(1, 9, '', 'good one.'),
(2, 9, '', 'good one.'),
(3, 9, '', 'good one.'),
(4, 9, '', 'good one.'),
(5, 9, '', 'ok'),
(6, 9, 'qqq', 'good'),
(7, 7, 'zain', 'fine.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `date` date NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderstatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerid`, `date`, `bookname`, `price`, `quantity`, `orderstatus`) VALUES
(5, 7, '2021-02-25', 'Redline ', 9, 0, '1'),
(6, 7, '2021-02-25', 'City Of The Dead ', 12, 0, '1'),
(86, 9, '2021-02-25', 'Gai-Jin ', 10, 0, ''),
(87, 7, '2021-02-25', 'Gai-Jin ', 10, 0, ''),
(88, 9, '2021-02-26', 'Bitterroot ', 11, 0, 'appeoved'),
(89, 9, '2021-02-26', 'Dog Walker ', 13, 0, 'canceled'),
(90, 7, '2021-02-26', 'City Of The Dead ', 12, 0, 'delivered'),
(91, 7, '2021-02-26', 'City Of The Dead ', 12, 0, 'canceled'),
(92, 7, '2021-02-26', 'City Of The Dead ', 12, 0, 'delivered'),
(93, 7, '2021-02-27', 'On Ice A Thriller ', 10, 0, 'appeoved'),
(98, 9, '2021-02-27', 'The Ingolds Legends ', 7, 0, 'appeoved'),
(99, 9, '2021-02-27', 'Selected Poetry Of W', 21, 0, 'appeoved'),
(100, 9, '2021-02-27', 'Elbow Room ', 4, 0, 'appeoved'),
(101, 9, '2021-02-27', 'Bitterroot ', 11, 0, ''),
(102, 9, '2021-02-27', 'City Of The Dead ', 12, 0, ''),
(103, 9, '2021-02-27', 'Dombey & Son ', 8, 0, ''),
(104, 9, '2021-02-27', 'The Ingolds Legends ', 7, 0, ''),
(105, 9, '2021-02-27', 'Selected Poetry Of W', 21, 0, ''),
(106, 9, '2021-02-27', 'Elbow Room ', 4, 0, ''),
(107, 9, '2021-02-27', 'A Tale Of Two Citis ', 13, 0, ''),
(108, 9, '2021-02-27', 'The Dark Is Rising ', 11, 0, ''),
(109, 7, '2021-03-02', 'A Tale Of Two Citis ', 13, 0, 'appeoved'),
(110, 7, '2021-03-02', 'Elbow Room ', 4, 0, ''),
(111, 7, '2021-03-02', 'Dombey & Son ', 8, 0, ''),
(112, 9, '2021-03-03', 'A Tale Of Two Citis ', 13, 0, 'appeoved'),
(113, 9, '2021-03-03', 'Elbow Room ', 4, 0, 'appeoved'),
(114, 9, '2021-03-03', 'Dombey & Son ', 8, 0, ''),
(115, 9, '2021-03-03', 'Gai-Jin ', 10, 0, ''),
(116, 9, '2021-03-03', 'Bitterroot ', 11, 0, ''),
(117, 9, '2021-03-03', 'The Ingolds Legends ', 7, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `bookname`, `price`, `quantity`, `category`) VALUES
(1, '2', 0, 0, ''),
(2, '2', 0, 0, ''),
(3, '2', 0, 0, ''),
(4, 'abc', 2, 10, ''),
(5, 'abc', 2, 10, ''),
(6, 'abc', 2, 10, ''),
(7, 'abc', 2, 10, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
