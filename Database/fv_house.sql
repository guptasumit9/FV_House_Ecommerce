-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fv_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Descriptoin` varchar(100) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `M_Price` int(10) NOT NULL,
  `Img_file` varchar(100) NOT NULL,
  `Page` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Name`, `Descriptoin`, `Quantity`, `Price`, `M_Price`, `Img_file`, `Page`) VALUES
(48, 'Tomato', 'fresh Tomato', '1 kg', 50, 60, 'tometo.jpg', 2),
(49, 'Cauliflower', 'fresh Cauliflower', '0.5 to 0.6', 40, 50, 'cauliflower.jpg', 2),
(52, 'Brinjal', 'fresh Brinjal', '0.5  kg', 30, 35, 'brinjal.png', 2),
(53, 'Cucumber', 'fresh Cucumber', '0.5 kg', 30, 38, 'cucumber.jpg', 2),
(54, 'Carrot', 'fresh carrot', '0.5 kg', 30, 41, 'carrot.jpg', 2),
(55, 'Orange', 'fresh Orange', '1kg', 80, 100, 'orange.jpg', 1),
(56, 'Mango', 'fresh Mango', '1kg', 150, 200, 'mango.jpg', 1),
(57, 'Banana', 'fresh Banana', '12 pic', 50, 60, 'banana.jpg', 1),
(59, 'Apple', 'fresh apple', '1kg', 200, 240, 'apple.jpg', 1),
(60, 'Spinach', 'fresh Spinach', '200gm', 20, 28, 'spinach.jpg', 3),
(61, 'Coriander', 'fresh Coriander', '100gm', 12, 20, 'coriander.jpg', 3),
(62, 'Mint', 'fresh mint', '100gm', 10, 15, 'mint.jpg', 3),
(63, 'spring onion', 'fresh spring onion', '100gm', 15, 20, 'spring-onion.jpg', 3),
(64, 'Red Capsicum', 'fresh Red Capsicum', '250gm', 50, 70, 'red capsikam.jpg', 4),
(65, 'Fruit basket', 'fresh all fruits', '6kg', 800, 1500, 'images_2.jpg', 7),
(66, 'Fruit basket', 'all fresh fruits  ', '7.5 kg', 1000, 1600, 'images_3.jpg', 7),
(67, 'Fruit basket(4kg)', 'all fresh fruits  ', '4 kg', 800, 1200, 'images_2.jpg', 7),
(68, 'apple', 'fresh apple', '3kg', 30, 66, 'fruit.jpg', 1),
(69, 'Sumit gupta', 'houg', '3kg', 988, 88, 'cabbage.jpg', 8),
(70, 'Sumit gupta', 'boug', '1kg', 988, 33, 'IMG/cabbage.jpg', 1),
(72, 'qqq', 'houg', '1kg', 30, 66, 'gis1.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `Email`, `Number`, `Password`) VALUES
(30, 'deva', 'deva@gmail.com', 123456, '$2y$10$KnwsTcGQdx5DkUVksFLM9uzf0Te8fqf4.QOqQksDcff'),
(32, 'sumit', 'sumit@gmail.com', 123, '$2y$10$ico821jOirM33oj7P21douZRQBdiKtrKxNGQxcYwuu4'),
(33, 'c@gmail.com', 'c@gmail.com', 123456, '$2y$10$RNG3D0UNZper1YXrvfrBhu7rfuqN6HDNifz.V3TErSq'),
(35, 's', 's@gmail.com', 123456, '$2y$10$NixwROBGn5VLVBupvqxMF.uehUjt1auZ/dv56WZnuzL'),
(36, 'sumit', 'sumit1@gmail.com', 123456, '$2y$10$AiBr2wLrWBS2aGJ4Zum2tOgJVt0iNXl62LPCWYh4zmL'),
(37, 'rahul', 'rahul@gmail.com', 12, '12'),
(38, 'sumit', 'sumit2@gmail.com', 123456, '$2y$10$sAxQrLxv88FAr8/ctyGwSe8sKb6/v0iuLmyMLfwJU/0'),
(39, 's', 'ab@gmail.com', 123456, '$2y$10$Z8DAiFL2yyg8JIk1dCTqYu8m75IybYjdYxZOSiOMzbv'),
(40, 'sumit', 'sumit4@gmail.com', 123456, '12'),
(41, 'deva', 'deva1@gmail.com', 1234567890, '12'),
(42, 'sumit', 'sumit111@gmail.com', 123456, '12'),
(43, 'deva bhai', 'devabhai@gmail.com', 1234567890, '12'),
(44, 'gupta', 'gupta@gmai.com', 1234567890, '12'),
(45, 'sumit', 'sumit1234@gmail.com', 1234567890, '12'),
(46, 'sumit', 'sumit123@gmai.com', 1234567890, '12'),
(47, 'Suraj', 'guptasuraj5@gmail.com', 2147483647, 'Suraj123'),
(48, 'Suraj ', 'guptasuraj34@gmail.com', 1234567890, '1'),
(49, 'Sumit', 'Sumit27464@gmail.com', 9082, '1234'),
(51, 'sumit', 'sumit1209@gmail.com', 123456, ''),
(52, 'sumit', 'sumit1234567sdfvbnm@gmail.com', 123456, '12'),
(53, 'sumit', 'sumit1234edfv@gmail.com', 123456, '12'),
(54, 's', 'ab1209@gmail.com', 123456, '123'),
(55, 'sumit', 'sumit1230@gmail.com', 123456, '12'),
(56, 'user1', 'user1@gmail.com', 123456, '12'),
(57, 'Sumit', 'user2@gmail.com', 123456, '12'),
(58, 'kjb,mbnvc', 'jbdcx', 0, '123'),
(59, 'sumit', 'sumitgupta6896@gmail.com', 2147483647, '1');

-- --------------------------------------------------------

--
-- Table structure for table `rough_product`
--

CREATE TABLE `rough_product` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Descriptoin` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `Price` int(50) NOT NULL,
  `M_Price` int(50) NOT NULL,
  `Img_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartsdatails`
--

CREATE TABLE `tbl_cartsdatails` (
  `Cid` int(11) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `ProductID` varchar(10) NOT NULL,
  `Quantity` varchar(20) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cartsdatails`
--

INSERT INTO `tbl_cartsdatails` (`Cid`, `UserID`, `ProductID`, `Quantity`, `CreatedDate`) VALUES
(8, 'user1', '68', '50', '2022-10-16 10:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Email` (`Email`,`Password`);

--
-- Indexes for table `rough_product`
--
ALTER TABLE `rough_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cartsdatails`
--
ALTER TABLE `tbl_cartsdatails`
  ADD PRIMARY KEY (`Cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `rough_product`
--
ALTER TABLE `rough_product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cartsdatails`
--
ALTER TABLE `tbl_cartsdatails`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
