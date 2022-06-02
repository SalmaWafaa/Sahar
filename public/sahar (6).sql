-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 12:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahar`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `Att_ID` int(30) NOT NULL,
  `Product_ID` int(30) NOT NULL,
  `color_ID` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`Att_ID`, `Product_ID`, `color_ID`) VALUES
(15, 34, 1),
(16, 34, 2),
(17, 35, 1),
(18, 35, 2),
(19, 36, 1),
(20, 36, 2),
(21, 1, 1),
(22, 2, 2),
(23, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `attributesquality`
--

CREATE TABLE `attributesquality` (
  `AttID` int(40) NOT NULL,
  `p_ID` int(40) NOT NULL,
  `q_ID` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attributesquality`
--

INSERT INTO `attributesquality` (`AttID`, `p_ID`, `q_ID`) VALUES
(1, 35, 2),
(2, 36, 1),
(3, 36, 2),
(4, 1, 1),
(5, 2, 2),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(100) NOT NULL,
  `CatName` varchar(100) NOT NULL,
  `CatImage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `CatName`, `CatImage`) VALUES
(1, 'Cablesss', ''),
(2, 'PowerBanks', 'PowerBank.jpg'),
(3, 'chargers', 'charger.jpg'),
(4, 'Earphones', 'Earphone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `cID` int(30) NOT NULL,
  `color` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`cID`, `color`) VALUES
(1, 'black'),
(2, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `Id` int(200) NOT NULL,
  `dateSent` date NOT NULL,
  `UserEmail` varchar(200) NOT NULL,
  `UserID` int(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `PicID` int(200) NOT NULL,
  `PicName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`PicID`, `PicName`) VALUES
(1, 'SQ1.jpg'),
(2, 'SQ2.jpg'),
(3, 'SQ3.jpg'),
(4, 'SQ4.jpg'),
(5, 'SQ5.jpg'),
(6, 'SQ6.jpg'),
(7, 'SQ7.jpg'),
(8, 'SQ8.jpg'),
(9, 'SQ9.jpg'),
(10, 'SQ10.jpg'),
(11, 'SQ11.jpg'),
(12, 'SQ6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Offer_ID` int(22) NOT NULL,
  `Product_ID` int(20) NOT NULL,
  `OfferName` varchar(99) NOT NULL,
  `Offerimage` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNumb` int(200) NOT NULL,
  `productID` int(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `paymentType` varchar(200) NOT NULL,
  `shippingFees` int(200) NOT NULL,
  `MobileNumb` int(200) NOT NULL,
  `Total` int(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNumb`, `productID`, `Quantity`, `Address`, `ID`, `paymentType`, `shippingFees`, `MobileNumb`, `Total`, `Date`) VALUES
(1, 6, 3, 'new cairo', 8, 'cash', 40, 111111111, 100, '2022-05-26'),
(2, 6, 3, 'new cairo', 8, 'cash', 40, 111111111, 100, '2022-05-24'),
(3, 14, 3, 'Madinty', 9, 'cash', 50, 3333333, 700, '2022-05-27'),
(4, 14, 5, 'new cairo', 10, 'visa', 60, 1234567892, 6, '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `Pages_ID` int(20) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Email_Contact` varchar(50) NOT NULL,
  `Mobile_contact` int(30) NOT NULL,
  `Store_contact` int(25) NOT NULL,
  `Mission` varchar(300) NOT NULL,
  `Vision` varchar(300) NOT NULL,
  `WhoWeAre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(200) NOT NULL,
  `ProductImage` varchar(200) NOT NULL,
  `Product_Image2` varchar(300) NOT NULL,
  `Product_Image3` varchar(300) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Price` int(200) NOT NULL,
  `Rate` decimal(10,0) NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `About` varchar(1000) NOT NULL,
  `PCondition` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductImage`, `Product_Image2`, `Product_Image3`, `ProductName`, `Description`, `Quantity`, `Price`, `Rate`, `Cat_ID`, `Date`, `About`, `PCondition`) VALUES
(1, '61kmQh3EiBL._SX342_.jpg', '71IE9dLBduL._AC_SL1500_-768x1009.jpg', '619EU2ge5aL._AC_SS450_.jpg', 'ANKER FAST CHARGING', 'LONG LASTING CABLE C TO C 51004002606-V02', 5, 400, '0', 1, '2022-06-01', 'The Anker Advantage: Join the 50 million+ powered by our leading technology.\r\nEnhanced Durability: Improved construction techniques and materials make a cable that lasts 12× longer.\r\nUniversal Compatibility: Designed to work flawlessly with any device that uses a USB-C port.\r\nFast Sync & Charge: Supports fast charging up to 15W (3A/5V) and data transfer speeds up to 480Mbps. (Not compatible with Power Delivery)\r\nWhat You Get: 2 × Premium Nylon-Braided USB-A to USB-C Charger Cable (6ft), welcome guide, a lifetime warranty, and our friendly customer service', 'none'),
(2, 'C:/xamppp/htdocs/sahar/app/views/images/', 'C:/xamppp/htdocs/sahar/app/views/images/', 'C:/xamppp/htdocs/sahar/app/views/images/', 'xxxxx', 'hhhhhhh', 8, 8, '0', 4, '2022-06-02', 'kkkkkkkkkkkkkkk', 'llll'),
(3, '61r3c4xV-kL._AC_UL600_SR600600_-e1627241343885.jpg', '1615786735_492677-800x583-1.jpg', 'b8544509-86c6-4934-a319-eebf7d311ca6.__CR00970600_PT0_SX970_V1___-768x475.jpg', 'POWREOLOGY Car Mount Wireless Charger', '【STRONG AND GENTLE AUTOMATIC CLAMPING MOTION】Just place your phone on the mount, the clamps automatically stats to close and hold your phone. Auto-clamping arms on both sides enable you to handle your smartphone with handsfree. When you touch any side of both arms, they are open and you can gently pick out your smartphone with no pressure. This function, the smartphone which don’t support wireless', 100, 10000, '0', 3, '2022-06-02', '【MAX 15W SUPER FAST WIRELESS CHARGING】 Have you forgotten to charge your phone sometimes? Don’t worry, Max 15W Fast Charger is waiting for you! Officially certified Qi fast-charging intelligently identifies and charges your smartphone. 15W Charging Speed is 1.5 times faster than normal charging. Max 15W/10W Fast Charging is available for Samsung S10/S9/S8/S7/S6/Note 10/10+, Max 7.5W Fast Charging is available for iPhone 11/11 Pro/11 Pro Max/XS MAX/XS/XR/X/8/8+, 5W for Other Qi enabled phones.\r\n【ARMS ALIVE ON TURN OFF STATUS】 Normally when the power is gone, automatic clamping mount is not working.But REDBEAN Charger has built-in capacitor in it so even if your car’s power is gone, It makes clamping mount still stays working, It means you can just touch the button and when the arms are unlocked, you can pick up the phoone! You may feel not easy to find this SPECIAL function out of 15W wireless car chargers. That’s the reason you can take this!\r\n【ANY MOUNTING WITH 360 FREE ROTATING】 REDB', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `Quality_ID` int(30) NOT NULL,
  `value` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`Quality_ID`, `value`) VALUES
(1, 'Original'),
(2, 'HighCopy');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(200) NOT NULL,
  `UserId` int(200) NOT NULL,
  `Date` date NOT NULL,
  `ProductID` int(200) NOT NULL,
  `Review` varchar(200) NOT NULL,
  `Rate` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `user_Type_ID` int(60) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Mobile` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_Type_ID`, `FirstName`, `LastName`, `Email`, `password`, `Address`, `Mobile`) VALUES
(8, 2, 'Yassoo', 'Kandil', 'kandil@gmail.com', '$2y$10$oww8Zy7wPWCt4rxpBvwh/uzCbz7hnH9.mZ/cUZ8ZdJolBRbmFxbde', 'new cairo', 2147483647),
(9, 2, 'Salma', 'Osama', 'salma@gmail.com', 'salma123?', 'madinty', 333333),
(10, 2, 'Rasha', 'Gouda', 'Rasha@gmail.com', '$2y$10$R/PWZDUGj1cFwmLSxXCYaOPzU1qYqCeNU.4D/PVcMFFpmug3qPceC', 'new cairo', 1234567892),
(11, 1, 'Rogina', 'Michelle', 'Rogina@gmail.com', '$2y$10$lU7J4VZP2LNnTt2ZOf4JfeIHG81mH0qlydlVemb/rnNd2QKLwMTYa', 'masr el gedeeda', 1234567891);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `TypeID` int(11) NOT NULL,
  `TypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`TypeID`, `TypeName`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`Att_ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `color_ID` (`color_ID`);

--
-- Indexes for table `attributesquality`
--
ALTER TABLE `attributesquality`
  ADD PRIMARY KEY (`AttID`),
  ADD KEY `p_ID` (`p_ID`),
  ADD KEY `q_ID` (`q_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`PicID`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`Offer_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNumb`),
  ADD KEY `productID` (`productID`),
  ADD KEY `IDofClient` (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`Quality_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_Type_ID` (`user_Type_ID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`TypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `Att_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `attributesquality`
--
ALTER TABLE `attributesquality`
  MODIFY `AttID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `cID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `PicID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `Offer_ID` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNumb` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `Quality_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `attributes_ibfk_4` FOREIGN KEY (`color_ID`) REFERENCES `color` (`cID`);

--
-- Constraints for table `attributesquality`
--
ALTER TABLE `attributesquality`
  ADD CONSTRAINT `attributesquality_ibfk_1` FOREIGN KEY (`q_ID`) REFERENCES `quality` (`Quality_ID`),
  ADD CONSTRAINT `attributesquality_ibfk_2` FOREIGN KEY (`p_ID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD CONSTRAINT `contacttable_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`catID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_Type_ID`) REFERENCES `usertype` (`TypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
