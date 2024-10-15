-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2024 at 05:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int NOT NULL,
  `User_Name` varchar(16) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `User_Name`, `Password`) VALUES
(1, 'Dilthara', 'Dil2001'),
(2, 'Nipuni', 'Nipu@123'),
(3, 'Sulana', 'Sula@123');

-- --------------------------------------------------------

--
-- Table structure for table `bidder`
--

CREATE TABLE `bidder` (
  `BidderID` int NOT NULL,
  `First_Name` varchar(16) NOT NULL,
  `Last_Name` varchar(16) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Telephone` int NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `acc_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bidder`
--

INSERT INTO `bidder` (`BidderID`, `First_Name`, `Last_Name`, `Password`, `Address`, `Telephone`, `Email`, `UserName`, `acc_type`) VALUES
(2, 'Silva', 'malindu', 'Silva@12', 'No.8/45, Silver Lane, Negombo, 11500', 767845684, 'silva@gmail.com', 'Silva1', ''),
(4, 'rihan', 'senrith', 'Rihan@12', 'galle', 132654782, 'rihan@gmail.com', 'rihan', 'bidder'),
(7, 's', 'f', 'rihan@12', 'bfb', 535534534, 'svsvs@gmail.com', 'senrith', '');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `BidID` int NOT NULL,
  `ItemID` varchar(6) NOT NULL,
  `BidderID` varchar(6) NOT NULL,
  `Bid_Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`BidID`, `ItemID`, `BidderID`, `Bid_Price`) VALUES
(6, '2', '1', '1000'),
(8, '5', '1', '1500'),
(10, '3', '1', '1000'),
(21, '30', '1', '20000'),
(22, '27', '1', '20000'),
(25, '30', '4', '5000000'),
(33, '1', '6', '1000'),
(34, '31', '6', '5000'),
(35, '26', '4', '200000'),
(38, '26', '4', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int NOT NULL,
  `BidderID` int NOT NULL,
  `ItemID` int NOT NULL,
  `BidID` int NOT NULL,
  `Bid_Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `BidderID`, `ItemID`, `BidID`, `Bid_Price`) VALUES
(2, 2, 2, 2, '2500'),
(12, 3, 3, 3, '3500'),
(13, 2, 2, 2, '2500'),
(15, 3, 5, 5, '2300'),
(16, 1, 35, 20, '5000'),
(17, 1, 28, 19, '20000'),
(18, 1, 29, 18, '8000'),
(24, 1, 1, 9, '5000'),
(27, 4, 26, 26, '3000000'),
(28, 4, 28, 36, '50000000'),
(29, 4, 2, 37, '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Qusestions_Number` int NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Qusestions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemID` int NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `SBP` varchar(10) NOT NULL,
  `End_Date` date NOT NULL,
  `SellerID` int NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `Item_Name`, `Description`, `SBP`, `End_Date`, `SellerID`, `Image`, `Type`) VALUES
(1, 'Fashion Hoop Earrings ', 'Fashion Hoop Earrings 925 Silver Jewelry for Women Cubic Zircon Gifts Earrings', '100', '2023-06-30', 1, 'https://ae01.alicdn.com/kf/H36564b94f7174169a5339aa17c591af7b.jpg', 'jew'),
(2, 'Hoop Sleeper Ring  Earrings ', '2PC Surgical Steel Huggie Hoop Sleeper Ring  Earrings Lip Ear Nose Body Piercing', '200', '2023-06-30', 2, 'https://objktsjewelry.com/cdn/shop/products/DSC0717_600x.jpg?v=1639820351', 'jew'),
(3, 'Zircon Stone Cartilage Earring', 'Zircon Stone Cartilage Earring Conch Tragus Helix Cartilage Piercing Ear Stud', '300', '2023-06-30', 3, 'https://www.whpjewellers.in/images/products/DERD22015962_1.jpg', 'jew'),
(4, 'Stud Drop Earrings', 'Gorgeous Ruby Stud Drop Earrings Women 925 Silver Wedding Jewelry Cubic Zirconia', '500', '2023-06-30', 2, 'https://www.pascoes.co.nz/content/products/sterling-silver-cz-flower-earrings-1621177-139108.jpg', 'jew'),
(5, 'Tassel Earrings Drop Dangle', 'Silver Crystal Tassel Earrings Drop Dangle Women Wedding Jewellery A Pair\r\n', '800', '2023-06-30', 1, 'https://spaces.nyjcdn.com/images/products/00/558-cttw-fancy-long-diamond-dangle-earrings-in-white-gold-10981-130.jpg', 'jew'),
(26, 'Sofa Bed Sleeper', 'Hot Sofa Bed Sectional Sofa Bed Sleeper Sofa for Living Room Furniture Blue\r\n', '10000', '2023-06-30', 1, 'https://st4.depositphotos.com/13426218/22034/i/450/depositphotos_220349418-stock-photo-modern-blue-suede-couch-sofa.jpg', 'fun'),
(27, 'Sofa Bed Folding Arm Chair', 'Convertible Sofa Bed Folding Arm Chair Sleeper Leisure Recliner Lounge Couch bed', '5000', '2023-06-30', 1, 'https://i.pinimg.com/550x/f2/49/bd/f249bdb10b204b38e90f8a1d3939bafd.jpg', 'fun'),
(28, '2019 BMW 5 Series', 'Powerful performance, elegant design, and impeccable luxury in a sleek black sedan.', '100000', '2023-06-30', 2, 'https://imgd.aeplcdn.com/664x374/cw/ec/26911/BMW-5-Series-Right-Front-Three-Quarter-101056.jpg?wm=0&q=75', 'vehi'),
(29, '2018 Jeep Wrangler Unlimited', 'Conquer any terrain with confidence in this rugged Firecracker Red off-road SUV', '200000', '2023-06-30', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRliM83J63U2hYYFQ6N7U8Il5eODyyN5EgNYRAvRoruuW5sMH_LmESPoD8FxVJhLNgF9Ao&usqp=CAU', 'vehi'),
(30, 'Men\'s Watch', 'Men\'s Watch Wrist Watches New Waterproof Man Luxury Stainless Steel Luminous Day', '5000', '2023-06-30', 1, 'https://c4.wallpaperflare.com/wallpaper/273/448/872/clock-detail-jewelry-luxury-wallpaper-preview.jpg', 'watch'),
(31, 'Women\'s Watch', 'Women Fashion Bracelet Watch Ladies Stainless Steel Analog Quartz Wrist Watches', '4000', '2023-06-30', 2, 'https://img.freepik.com/premium-photo/luxury-watches-isolated-white-background-with-clipping-path-gold-watch-women-man-watches-female-male-watches_262663-610.jpg?w=2000', 'watch'),
(32, 'Vintage Victorian-era pocket watch', 'Exquisite craftsmanship and intricate details in a timeless timepiece.', '8000', '2023-06-30', 3, 'https://i.pinimg.com/originals/cb/2a/7a/cb2a7aac682558d2f044c8ca67d18a10.jpg', 'atiq'),
(33, 'Antique French Renaissance dining table', 'Elegant carved woodwork and ornate design for a touch of opulence in your home.', '20000', '2023-06-30', 4, 'https://a.1stdibscdn.com/antique-quartersawn-oak-french-renaissance-revival-dining-table-library-desk-for-sale/f_53432/f_298851821659981503034/f_29885182_1659981504668_bg_processed.jpg?width=768', 'atiq'),
(34, 'Apple MacBook Pro', 'Unleash your creativity with blazing-fast performance and stunning Retina display ', '40000', '2023-06-30', 3, 'https://istyle.mk/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/a/macbook_pro_13_in_space_gray_pdp_image_position-2__wwen_7_1_2.jpg', 'elec'),
(41, 'rx8', 'best car ', '2000 000', '2023-06-28', 2, 'https://imageio.forbes.com/specials-images/imageserve/5d35eacaf1176b0008974b54/2020-Chevrolet-Corvette-Stingray/0x0.jpg?format=jpg&crop=4560,2565,x790,y784,safe&width=960', 'vehi');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Method` varchar(5) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `BidderID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Amount`, `Payment_Date`, `Method`, `Address`, `BidderID`) VALUES
(1, '1500', '2023-06-05', 'COD', 'No.8/12, Senanayake Mawatha, Kaluthara, 12000', '1'),
(2, '2500', '2023-06-05', 'OP', 'No.8/45, Silver Lane, Negombo, 11500', '2'),
(3, '3500', '2023-06-05', 'COD', 'No.1/962, Sri Dharmarama Road, Sri Jayawardenepura, 10100', '3'),
(4, '4700', '2023-02-04', 'COD', 'No.123, Lake Road-Kurunegala-Sri Lanka-60000', '1'),
(17, '7500', '2023-02-04', 'COD', 'No.123, Lake Road-Kurunegala-Sri Lanka-60000', '1'),
(41, '2000000', '2023-02-04', 'COD', 'Galle-Galle-sl-02135', '4');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SellerID` int NOT NULL,
  `First_Name` varchar(16) NOT NULL,
  `Last_Name` varchar(16) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Telephone` int NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`SellerID`, `First_Name`, `Last_Name`, `Password`, `Address`, `Telephone`, `Email`, `UserName`) VALUES
(1, 'Kamal ', 'Samantha ', 'Kamal@12', 'No.56/2, Silverine Park, Galle, 80000', 747456123, 'kamal@gmail.com ', 'Kamal1'),
(2, 'Madura', 'Dimantha', 'Madura@1', 'No.9/7, Church Street, Negombo, 11500', 767845684, 'madura@gmail.com', 'Madura1'),
(3, 'Sakuni', 'Sansala', 'Sakuni@1', 'No.36/8, Deans Road, Malabe, 10115', 787456128, 'sakuni@gmail.com', 'Sakuni1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `bidder`
--
ALTER TABLE `bidder`
  ADD PRIMARY KEY (`BidderID`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`BidID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Qusestions_Number`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SellerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bidder`
--
ALTER TABLE `bidder`
  MODIFY `BidderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `BidID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Qusestions_Number` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SellerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
