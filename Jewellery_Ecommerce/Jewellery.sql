-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 08:09 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Total_Amount` int(100) NOT NULL,
  `Card_Name` varchar(100) NOT NULL,
  `Card_Number` varchar(16) NOT NULL,
  `Pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`First_Name`, `Last_Name`, `Address`, `Zip`, `Phone`, `Total_Amount`, `Card_Name`, `Card_Number`, `Pin`) VALUES
('Manali', 'Mane', '50 Court House Place', '07306', 1512637171, 70, 'mm', '1221897382168126', 123),
('Meena', 'Thiyagarajan', '395 summit avenue', '07306', 1234567890, 100, 'Meena', '12839230980498', 456);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `User_Id` varchar(100) NOT NULL,
  `Jewel_Id` int(10) NOT NULL,
  `Jewel_Name` varchar(50) NOT NULL,
  `Jewel_Price` int(10) NOT NULL,
  `Quantity` int(2) NOT NULL,
  `Total` int(10) NOT NULL,
  `Active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Jewel_Id` int(20) NOT NULL,
  `Jewel_Name` varchar(50) NOT NULL,
  `Jewel_price` int(20) NOT NULL,
  `Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Jewel_Id`, `Jewel_Name`, `Jewel_price`, `Image`) VALUES
(101, 'Diamond Ring', 300, 'images/ring.png'),
(102, 'Platinum Ring', 250, 'images/platinum_ring.png'),
(103, 'Gold Ring', 100, 'images/gold ring.png'),
(104, 'Diamond Necklace', 120, 'images/diamond_necklace.jpg'),
(105, 'Platinum Necklace', 200, 'images/platinum_necklace.jpg'),
(106, '24-Karat Necklace', 120, 'images/24_carat necklace.jpg'),
(107, '24-Karat Bangles', 150, 'images/gold_bangles.png'),
(108, 'Platinum Bangles', 125, 'images/bangles.png'),
(109, 'Diamond Bangles', 110, 'images/diamond_bangles.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `UserID` int(20) NOT NULL,
  `User_Name` varchar(10) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`UserID`, `User_Name`, `First_Name`, `Last_Name`, `Password`, `Email`, `Mobile_Number`) VALUES
(123, 'MM', 'Manali', 'Mane', '1234', 'manemanali20@gmail.com', 1512637171),
(456, 'MT', 'Meena', 'Thiyagarajan', '5678', 'meenalochini1805@gmail.com', 1237647834);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`First_Name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Jewel_Id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
