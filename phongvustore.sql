-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2021 at 01:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phongvustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `manageOrder`
--

CREATE TABLE `manageOrder` (
  `orderID` varchar(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` float(10,2) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageOrder`
--

INSERT INTO `manageOrder` (`orderID`, `item_name`, `item_price`, `item_quantity`) VALUES
('1018230530', 'Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A', 37990000.00, 1),
('1223168854', 'Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A', 37990000.00, 4),
('1227406578', 'Laptop ACER Nitro 5 AN515-55-72P6 (NH.QBNSV.004) ', 23990000.00, 4),
('1280840171', 'PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060', 52390000.00, 1),
('1711235494', 'Pin Sạc Dự Phòng Remax RPL-15 8.000mAh (Màu Ngẫu Nhiên)', 149000.00, 3),
('1720090669', 'Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A', 37990000.00, 2),
('1794604023', 'PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060', 52390000.00, 3),
('190529458', 'PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060', 52390000.00, 1),
('1914033810', 'Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A', 37990000.00, 1),
('401740994', 'Laptop ACER Nitro 5 AN515-55-72P6 (NH.QBNSV.004) ', 23990000.00, 1),
('579799092', 'Laptop ACER Nitro 5 AN515-55-72P6 (NH.QBNSV.004) ', 23990000.00, 1),
('888853998', 'PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060', 52390000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menunavbar`
--

CREATE TABLE `menunavbar` (
  `id` int(11) NOT NULL,
  `menuproduct` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menunavbar`
--

INSERT INTO `menunavbar` (`id`, `menuproduct`, `url`) VALUES
(1, 'Điện Thoại', '../View/phonepage.php'),
(2, 'Máy Tính Bảng', '../View/padpage.php'),
(3, 'Laptop', '../View/laptoppage.php'),
(4, 'PC', '../View/pcpage.php'),
(5, 'Phụ kiện', '../View/accessoriespage.php');

-- --------------------------------------------------------

--
-- Table structure for table `ordercart`
--

CREATE TABLE `ordercart` (
  `cart` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `IDorder` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordercart`
--

INSERT INTO `ordercart` (`cart`, `fullname`, `email`, `address`, `phone`, `note`, `price`, `IDorder`) VALUES
('210201524 Laptop ACER Nitro 5 AN515-55-72P6 (NH.QBNSV.004)  23990000.00 1', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 23990000, '579799092'),
('210503125 PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060 52390000.00 1', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 128370000, '1720090669'),
('210503125 PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060 52390000.00 1', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 128370000, '1720090669'),
('201000875 Máy tính bảng Apple iPad Air 4 (2020) 10.9 20390000.00 1', 'THI XUAN AI LE', 'thinhldhde150166@fpt.edu.vn', '9544 N Military Trl', '1231251234', '', 44380000, '401740994'),
('201000875 Máy tính bảng Apple iPad Air 4 (2020) 10.9 20390000.00 1', 'THI XUAN AI LE', 'thinhldhde150166@fpt.edu.vn', '9544 N Military Trl', '1231251234', '', 44380000, '401740994'),
('201000662 Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A 37990000.00 4', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 152407000, '1711235494'),
('201000662 Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A 37990000.00 4', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 152407000, '1711235494'),
('210503125 PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060 52390000.00 1', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 52390000, '888853998'),
('200600153 Pin Sạc Dự Phòng Remax RPL-15 8.000mAh (Màu Ngẫu Nhiên) 149000.00 10', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 97450000, '1227406578'),
('200600153 Pin Sạc Dự Phòng Remax RPL-15 8.000mAh (Màu Ngẫu Nhiên) 149000.00 10', 'LE DUY HOANG THINH', 'hoangthinhpro2001@gmail.com', '71 Nguyen Thi Dinh street, Da Nang city, Vietnam', '0378396374', '', 97450000, '1227406578');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `imageProduct` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `productType` varchar(255) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `imageProduct`, `productName`, `description`, `productType`, `price`) VALUES
(200600153, 'https://lh3.googleusercontent.com/c3TdLuvQawTBsJ_xZSQk-6kFDEBqps8imBMHv8f-4SBNzAxym6RGYI6CDMJ4sIMUJqCnUSxs07UawyEeygvk=w500-rw', 'Pin Sạc Dự Phòng Remax RPL-15 8.000mAh (Màu Ngẫu Nhiên)', '- Vỏ nhựa ABS mềm mịn và bền bỉ   - Khả năng tương thích tốt với máy nghe nhạc, máy tính bảng và điện thoại thông minh   - Dung lượng pin 8.000mAh   *Màu ngẫu nhiên ', 'Phụ Kiện', 149000.00),
(201000662, 'https://lh3.googleusercontent.com/rWkJjOt5KAovNHKeoiyrViLwuXm7V7oze5Z9iAW-fxhA3zCQT4svuniAQ-DnZsWC2KUwrvF3GE1EvoHGp-A=w500-rw', 'Điện Thoại Di Động iPhone 12 Pro Max 256GB Pacific Blue MGDF3VN/A', '- Màn hình: 6.7\" Super Retina XDR \r\n- Camera sau: 3x 12MP \r\n- Camera trước: 12MP\r\n- CPU: Apple A14 Bionic \r\n- Bộ nhớ: 256GB - RAM: 6GB - Hệ điều hành: IO', 'Điện Thoại', 37990000.00),
(201000875, 'https://lh3.googleusercontent.com/dNrW9zxXWnI5mSVf5U6H4Of5VeQxDVsDHZsar0IhC1WVTUb74V4gJ4Z6vE4z4jYBHVsHhnSk2T_-ykBrrZVfQGMJYM35aaU=w500-rw', 'Máy tính bảng Apple iPad Air 4 (2020) 10.9\" Wifi 256GB (Vàng Hồng)', '- Màn hình: 10.9\" LED-backlit Multi-Touch display with IPS - Camera sau: 12MP - Camera trước: 7MP - CPU: Apple A14 Bionic - Bộ nhớ: 256GB - Hệ điều hành: IOS', 'Máy Tính Bảng', 20390000.00),
(201100348, 'https://lh3.googleusercontent.com/0Nu8mLfQyJUTEoWr_lzbSJWYy9QIJRPSnDZDRVlHTfx0E793stNSPvdjzFggC5qj0CN19QPvm9Xcf532IBwWbqZJfHAI9XQ=w500-rw', 'Điện Thoại Di Động iPhone 11 64GB (RED) (MHDD3VN/A)', '- Màn hình: 6.1\" Liquid Retina IPS LCD - Camera sau: 2x 12MP - Camera trước: 12MP - CPU: A13 Bionic - Bộ nhớ: 64GB - RAM: 4GB - Hệ điều hành: IOS', 'Điện Thoại', 17490000.00),
(210100061, 'https://lh3.googleusercontent.com/2FmiObbgk0SWsh-K9qXcDyqX5JI8VLZyQsp49m4t7BWePqPD-lrz0zxBeR7NkO3BJ5S0SB76FMk29A16MAtAL38ErN9yOzc=w500-rw', 'Điện thoại di động Samsung Galaxy A12 (4GB/128GB) (Xanh)', '- Màn hình: 6.5\" PLS TFT LCD - Camera sau: 48MP, 5MP, 2x 2MP - Camera trước: 8MP - CPU: MediaTek Helio P35 - Bộ nhớ: 128GB - RAM: 4GB - Hệ điều hành: Android', 'Điện Thoại', 4490000.00),
(210201524, 'https://lh3.googleusercontent.com/EMXkUoicPWHJKNrD28r1WAXkg-yjuQPziEI4_ConEpQQC-fDibOSiIJOr9hU1EDkfUFopVpCFqtyMO0rZ-3YgTaX8xOZA5nG1g=w500-rw', 'Laptop ACER Nitro 5 AN515-55-72P6 (NH.QBNSV.004) ', '- CPU: Intel Core i7-10750H - Màn hình: 15.6\" IPS (1920 x 1080), 144Hz - RAM: 1 x 8GB DDR4 2933MHz - Đồ họa: NVIDIA GeForce GTX 1650 4GB GDDR6 / Intel UHD Graphics - Lưu trữ: 512GB SSD M.2 NVMe /  - 57 Wh Pin liền - Khối lượng: 2.3 kg', 'Laptop', 23990000.00),
(210501414, 'https://lh3.googleusercontent.com/5vwA0fnnG3Fe_iqYWTb11GVB-gz-vgsR6-rp0wl_Tqq2r5y175eH8raaD4LblhaM11JQhKpFUPWOPuee_vTr3C0nJSKaWMwaoA=w500-rw', 'Điện Thoại Di Động Xiaomi Redmi Note 10 (6GB+128G) (Trắng)\r\n', '6.67\", FHD+, IPS LCD, 1080 x 2400 Pixel  48.0 MP + 8.0 MP + 2.0 MP + 2.0 MP  20.0 MP  Snapdragon 860  256 GB', 'Điện Thoại', 5490000.00),
(210503125, 'https://lh3.googleusercontent.com/6AzjvzxFXqdoqfqtLQ_c5b8baJrnEccOZuHl_1HzgnR2z8F2nA0fzJDZQ3J3sCTMFHG32RiqxnB_-yE7V1r1vJdhnoXM5eng=w500-rw', 'PC Phong Vũ Intel Core i7/16GB/500GBSSD/GeForce RTX 3060', '- CPU Intel Comet Lake Core i7-10700F - RAM Kingston HyperX Fury RGB 16GB (2x8GB) DDR4 (3200) - VGA MSI GeForce RTX 3060 GAMING X 12G - PSU MSI MPG A650GF 650W 80 Plus Gold Full Modular - Tản nhiệt nước MSI MAG CORELIQUID 240R', 'PC', 52390000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manageOrder`
--
ALTER TABLE `manageOrder`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `menunavbar`
--
ALTER TABLE `menunavbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordercart`
--
ALTER TABLE `ordercart`
  ADD KEY `IDorder` (`IDorder`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordercart`
--
ALTER TABLE `ordercart`
  ADD CONSTRAINT `ordercart_ibfk_1` FOREIGN KEY (`IDorder`) REFERENCES `manageOrder` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
