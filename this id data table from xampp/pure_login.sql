-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 08:03 PM
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
-- Database: `pure_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(3) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'opurbo7', 'opurbo');

-- --------------------------------------------------------

--
-- Table structure for table `mainadmin`
--

CREATE TABLE `mainadmin` (
  `ID` int(11) NOT NULL,
  `username_main` varchar(30) NOT NULL,
  `password_main` varchar(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainadmin`
--

INSERT INTO `mainadmin` (`ID`, `username_main`, `password_main`, `time`) VALUES
(1, 'opurbo', 'opurbo', '0000-00-00 00:00:00'),
(2, 'nahid', 'nahid', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(100) NOT NULL,
  `Product_NAME` varchar(100) NOT NULL,
  `Product_Price` varchar(100) NOT NULL,
  `product-qty` varchar(11) NOT NULL,
  `Product_Image` varchar(100) NOT NULL,
  `Product_Catagory` varchar(100) NOT NULL,
  `Product_DEC` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_NAME`, `Product_Price`, `product-qty`, `Product_Image`, `Product_Catagory`, `Product_DEC`) VALUES
(13, 'শসা', '10', '10', './img2/product(9).jpg', 'Men', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(14, 'করোলা', '20', '20', './img2/product(2).jpg', 'Men', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(15, 'বাঁধাকপি', '10', '10', './img2/product(3).jpg', 'Men', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(16, 'পেঁয়াজ', '70', '70', './img2/product(4).jpg', 'Men', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(17, 'চাল', '45', '45', './img2/product(5).jpg', 'Men', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(20, 'গাঁজর', '20', '20', './img2/catagory-3.jpg', 'সবজি', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(21, 'টমেটো', '30', '30', './img2/product(8).jpg', 'সবজি', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। '),
(22, 'ধান', '29', '29', './img2/product(7).jpg', 'শস্য', 'এটি একদম খাঁটি দেশি ফসল ।  একদম ১০০ ভাগ ফরমালিন বা কেমিক্যাল মুক্ত। পণ্যটি আপনি সরাসরি আমার কাছ নিতে পারবেন। কোনো অতিরিক্ত দামের প্রয়োজন নেই। ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `password`, `address`, `phone`, `Date`) VALUES
(2, 'Opurbo', 'opurboujjol@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Jamalpur, Jamalpur', 1920172104, '2021-02-03 22:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mainadmin`
--
ALTER TABLE `mainadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mainadmin`
--
ALTER TABLE `mainadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
