-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 04:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzapoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminName` varchar(25) NOT NULL,
  `adminEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminName`, `adminEmail`) VALUES
('testadmin', 'admintest@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `employeeName` varchar(20) NOT NULL,
  `employeeEmail` varchar(30) NOT NULL,
  `employeeHours` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `employeeName`, `employeeEmail`, `employeeHours`) VALUES
(1, 'employee1', 'employee1@test.com', 20),
(2, 'employee2', 'employee2@test.com', 25),
(3, 'testemployee', 'test@employee.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `orderID` int(11) NOT NULL,
  `orderText` varchar(8000) NOT NULL,
  `orderDate` datetime NOT NULL,
  `orderAddress` varchar(100) NOT NULL,
  `orderPrice` decimal(10,0) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`orderID`, `orderText`, `orderDate`, `orderAddress`, `orderPrice`, `phone`) VALUES
(1, ' 1x Pizza Margarita,  1x Pizza Mix,  1x Pizza Speciale', '2022-01-11 14:24:47', 'jna 12 gostivar 1230', '561', '75000000'),
(4, ' 1x Pizza Margarita,  1x Pizza Mix,  1x Pizza Speciale', '2022-01-12 14:41:02', 'balindoslka br147 Gostivar 1230', '660', '70244212'),
(5, ' 3x Pizza Mix,  1x Pizza Salamino,  1x Pizza Eggplant,  1x Sprite,  5x Bravo', '2022-01-12 15:41:24', '12313212 123123 1231', '1540', '12313123'),
(6, ' 1x Pizza Margarita', '2022-01-12 15:54:26', '123 123 123', '200', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `productID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `sessionID` int(11) NOT NULL,
  `totalPrice` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productDesc` text NOT NULL,
  `productCategory` varchar(15) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL,
  `productPhoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productDesc`, `productCategory`, `productPrice`, `productPhoto`) VALUES
(1, 'Pizza Margarita', 'Tomato sauce / mozzarella cheese /yellow x`cheese', 'Pizza', '200', 'img-01.jpg'),
(2, 'Pizza Mix', 'tomato sauce / mozzarella cheese /yellow cheese / Bosnian sausage / beef prosciutto / mushrooms', 'Pizza', '220', 'gallery-img-06.jpg'),
(3, 'Pizza Salamino', 'Tomato sauce / mozzarella cheese /yellow cheese / beef kulen', 'Pizza', '220', 'img-033.jpg'),
(4, 'Pide / Pide Mix', 'Pide with cheese/Pide mix', 'Pide', '120', 'img-04.jpg'),
(5, 'Lahmacun', 'Minced meat, vegetables and herbs', 'Lahmachun', '100', 'img-05.jpg'),
(6, 'Pizza Oliva', 'Pizza with olives', 'Pizza', '130', 'img-06.jpg'),
(7, 'Pizza Vege', 'Tomato sauce / mozzarella cheese /yellow cheese/zucchini/eggplant/olive/ peppers/spinach', 'Pizza', '220', 'img-07.jpg'),
(8, 'Pizza zucchini', 'Tomato sauce / mozzarella cheese /yellow cheese/zucchini', 'Pizza', '220', 'img-023.jpg'),
(9, 'Pizza Tuna', 'Pica tuna and onion', 'Pizza', '230', 'img-099.jpg'),
(10, 'Pizza Eggplant', 'Tomato sauce/mozzarella cheese/yellow cheese/eggplant', 'Pizza', '240', 'img-10.jpg'),
(11, 'Pizza Speciale', 'Tomato sauce/mozzarella cheese/yellow cheese/zucchini/tuna/fresh cheese/onion/garlic', 'Pizza', '240', 'img-11.jpg'),
(12, 'Coca-Cola', 'Coca-Cola', 'Drinks', '70', 'cocacola.jpg'),
(13, 'Fanta', 'Fanta', 'Drinks', '70', 'fanta.jpg'),
(14, 'Sprite', 'Sprite', 'Drinks', '70', 'sprite.jpg'),
(15, 'Bravo', 'Bravo', 'Drinks', '70', 'bravo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userSubLevel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userPassword`, `userEmail`, `userSubLevel`) VALUES
(6, 'test5', 'e3d704f3542b44a621ebed70dc0efe13', 'test5@test.com', 2),
(7, 'kekw', '333bac057792d4d419dba9bad8afe0d5', 'Kekw@kekw.com', 0),
(8, 'testadmin', '9283a03246ef2dacdc21a9b137817ec1', 'admintest@test.com', 2),
(11, 'employee1', '03a395eaf1edb673e0f99c7ca8eb156a', 'employee1@test.com', 0),
(12, 'employee2', 'af74a83ae0d5777401f86af4df941e98', 'employee2@test.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminName`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
