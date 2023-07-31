-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 05:57 PM
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
-- Database: `abdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` bigint(20) NOT NULL,
  `Type` text NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `State_Province` text NOT NULL,
  `Postal_ZipCode` int(5) NOT NULL,
  `Country` text NOT NULL,
  `CH_Name` varchar(20) NOT NULL,
  `C_Number` int(16) NOT NULL,
  `Expiry` date NOT NULL,
  `CVC` int(4) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Type`, `First_Name`, `Last_Name`, `Email`, `Password`, `Address1`, `Address2`, `City`, `State_Province`, `Postal_ZipCode`, `Country`, `CH_Name`, `C_Number`, `Expiry`, `CVC`, `Status`) VALUES
(1, 'cus', 'Dushmani', 'Amarakoon', 'dush@gmail.com', 'Cool1', '\"West\", Nuwaraeliya Rd, Nugathalawa.', '', 'Nuwaraeliya', 'Uva', 2434, 'Sri Lanka', '', 2147483647, '2022-01-27', 101, 0),
(2, 'ad', 'Ariana', 'Cooper', 'arianafan@yahoo.com', 'aFan22', '70D, Baker street, Washington', '30B, Winter lane, Washington', 'Caseero', 'Dublin', 5001, 'Ireland', '', 2147483647, '2023-02-02', 255, 0),
(7, 'cus', 'ww', 'd', 'u@my.com', '12Queen', 'ncjidjeid', '', 'uuu', 'uva', 1234, 'Brazil', 'www', 2147483647, '2021-10-06', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(4) NOT NULL,
  `Full_name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contact_no` char(10) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Full_name`, `Email`, `Contact_no`, `Description`) VALUES
(15, 'SITHANGA RASHMIKA', 'sithanga1231@gmail.com', '0769854552', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ITN` int(5) NOT NULL,
  `Item_no` varchar(15) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Category` varchar(60) NOT NULL,
  `Price` float NOT NULL,
  `Item_quantity` int(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ITN`, `Item_no`, `Item_Name`, `Category`, `Price`, `Item_quantity`, `Image`, `Description`) VALUES
(43, 'bf4500', 't shirt', 'Kids', 2500, 25, './itemimages/t shirt_add2.jpg', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Item_code` varchar(10) NOT NULL,
  `Item_color` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Item_code`, `Item_color`, `Quantity`) VALUES
('A214', 'Blue', 10),
('B144', 'green', 12);

-- --------------------------------------------------------

--
-- Table structure for table `returnitem`
--

CREATE TABLE `returnitem` (
  `Item_Code` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returnitem`
--

INSERT INTO `returnitem` (`Item_Code`, `quantity`, `Reason`) VALUES
('B21', 4, 'I do not like it.'),
('V12', 10, 'mn asa naaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `follower` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `follower`) VALUES
('ID100', 'SITHANGA', 0),
('ID101', 'RASHMIKA', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ITN`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Item_code`);

--
-- Indexes for table `returnitem`
--
ALTER TABLE `returnitem`
  ADD PRIMARY KEY (`Item_Code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ITN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
