-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 07:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_car`
--

CREATE TABLE `book_car` (
  `id` int(4) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pincode` int(7) NOT NULL,
  `address` text NOT NULL,
  `total_days` int(4) NOT NULL,
  `total_price` varchar(7) NOT NULL,
  `pickup_date` varchar(10) NOT NULL,
  `drop_date` varchar(10) NOT NULL,
  `pickup_location` varchar(20) NOT NULL,
  `drop_location` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `userId` int(5) NOT NULL,
  `carId` int(5) NOT NULL,
  `driver` varchar(25) NOT NULL DEFAULT 'none',
  `status` varchar(10) NOT NULL DEFAULT 'scheduled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_car`
--

INSERT INTO `book_car` (`id`, `fname`, `lname`, `email`, `phone`, `state`, `pincode`, `address`, `total_days`, `total_price`, `pickup_date`, `drop_date`, `pickup_location`, `drop_location`, `payment_status`, `userId`, `carId`, `driver`, `status`) VALUES
(1, 'Demo', 'Demo', 'demo@gamil.com', '9564534534', 'Demo', 64544, 'Demo', 9, '1800', '20-Mar-202', '29-Mar-202', 'Demo0', 'Demo', 'complete', 1, 3, 'Hiten Joshi', 'Cancel'),
(2, 'da', 'da', 'darshan@gmail.com', '7871255454', 'da', 2836, 'dadad', 9, '2250', '21-Mar-202', '30-Mar-202', 'da', 'da', 'complete', 1, 2, 'Vinay Chauhan', 'Ontrip'),
(3, 'Demo', 'Demo', 'hj201812@gmail.com', '6574545454', 'demo', 356415, 'Demoi', 2, '400', '27-Mar-202', '29-Mar-202', 'Demo ', 'Demo', 'pending', 1, 3, 'none', 'scheduled');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(4) NOT NULL,
  `description` text NOT NULL,
  `body` varchar(30) NOT NULL,
  `seat` varchar(3) NOT NULL,
  `doors` int(2) NOT NULL,
  `luggage` varchar(7) NOT NULL,
  `fuel_type` varchar(30) NOT NULL,
  `engine` varchar(15) NOT NULL,
  `year` int(4) NOT NULL,
  `mileage` int(4) NOT NULL,
  `drive` varchar(20) NOT NULL,
  `image` varchar(25) DEFAULT NULL,
  `color` varchar(15) NOT NULL,
  `transmission` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `description`, `body`, `seat`, `doors`, `luggage`, `fuel_type`, `engine`, `year`, `mileage`, `drive`, `image`, `color`, `transmission`) VALUES
(1, 'Skoda', 300, 'Skoda Rapid is a 5 seater Sedan with the last recorded price of Rs. 6.99 - 14.25 Lakh. It is available in 27 variants', 'Sedan', '5', 4, '3000', 'disal', '1500', 2021, 15, '2WD', 'upload/skoda.jpg', 'Red', 'Manual'),
(2, 'Chevrolet Silverado', 250, 'The Chevrolet Silverado has 1 Petrol Engine on offer. The Petrol engine is 1498 cc . It is available with Manual transmission.Depending upon the variant and fuel type the Silverado has a mileage of 17.4 kmpl . The Silverado is a seater 1 cylinder car.', 'Pickup Truck', '4', 4, '2,280 ', 'Petrol', '1498', 2019, 17, '2WD', 'upload/car1.jpg', 'black', 'Manual'),
(3, 'Swift', 200, 'Maruti Suzuki New Swift is available in 9 exciting colours, 4 trims - Lxi, Vxi, Zxi, & Zxi+, and a 1.2L Dualjet Petrol Engine that offers the best-in-class ...', 'Sedan', '4', 4, '2800', 'CNG or Petrol', '1197', 2021, 23, '2WD', 'upload/swift.jpg', 'Red', 'Manual'),
(4, 'Tata Nexon', 300, 'Tata Nexon, a 5 seater Compact SUV', 'Sedan', '5', 4, '3000', 'Petrol & Diesel', '1497', 2023, 20, '2WD', 'upload/tatanexon.jpg', 'Daytona Grey', 'Manual'),
(5, 'Ferrari', 600, 'Ferrari cars are built at the 165,000 square-metre (16.5-hectare) Maranello factory, and they are generally seen as a symbol of speed, luxury and wealth.', 'Sports', '2', 2, '200', 'Disal', '2992', 2020, 12, 'RWD', 'upload/ferrari.jpg', 'Yellow', 'Manual'),
(6, 'Eco', 150, 'Eeco is a unique combination of comfort and utility car in India', 'Sedan', '7', 4, 'Extrena', 'CNG or Petrol', '1197', 2019, 20, '2WD', 'upload/echo.jpg', 'White', 'Manual'),
(7, 'Tavera', 250, 'Tavera car is useful for long drive and for family and big space Really car is awesome And likely is car are awesome fantastic and really useful car ', 'Sedan', '7', 4, '2800', 'Petrol & Diesel', '1999', 2016, 22, '2WD', 'upload/tavera.jpg', 'Red', 'Manual'),
(8, 'Baleno', 220, 'The New NEXA Baleno by Maruti Suzuki is a premium hatchback. A work of art inspired by the future, the design language is exclusively crafted to match the ...', 'Sedan', '4', 4, '2800', 'CNG or Petrol', '1197', 2022, 20, '2WD', 'upload/baleno.jpg', 'Blue', 'Manual'),
(9, 'Thar', 350, ' Mahindra has showcased the electric version of the Thar in South Africa, namely the Thar.e. You can also check out the image gallery of electric Thar vs ICE ', 'Sedan', '4', 4, '2800', 'Petrol & Diesel', '2184', 2023, 15, '2WD', 'upload/thar.jpg', 'Black', 'Manual'),
(10, 'Audi Q8', 360, 'the cheapest model which is A4 and the price of most expensive model, which is RS Q8 starts ', 'Sedan', '4', 4, '2800', 'Petrol & Diesel', '2995', 2022, 15, 'RWD', 'upload/audi.jpg', 'White', 'Manual'),
(11, 'Honda Accord', 700, 'The Honda Accord, a symbol of reliability and sophistication, is a top choice for those seeking a well-rounded sedan. With a sleek exterior, spacious interior, and advanced safety features, the Accord offers a comfortable and secure driving experience. The 2.4L 4-cylinder engine strikes a balance between fuel efficiency and performance, making it an ideal choice for daily commutes and long journeys.', 'Sedan', '5', 4, '16 cubi', 'Gasoline', ' 2.4L 4-cylinde', 2022, 30, 'FWD', 'upload/Honda.jpg', 'White', 'Automatic'),
(13, 'Toyota RAV4', 650, 'The Toyota RAV4, a reliable and versatile SUV, is designed to meet the needs of modern families and adventurers alike. Combining a spacious interior with a fuel-efficient hybrid engine, the RAV4 offers both comfort and eco-friendly performance. With its intelligent all-wheel-drive system, advanced safety features, and ample cargo space, this SUV is well-suited for both urban commuting and off-road explorations.', 'SUV', '5', 4, '37 cubi', 'Hybrid', '2.5L 4-cylinder', 2021, 25, 'AWD', 'upload/toyota.jpeg', 'Black', 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Vinay', 'vinay16@gmail.com', '7871255454', 'Testing'),
(2, 'kartik', 'kartikbhatt1902@gmail.com', '9723429548', 'help'),
(3, 'Darshan', 'darshan@gmail.com', '9499863523', 'contect me');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(3) NOT NULL,
  `d_name` varchar(25) NOT NULL,
  `d_email` varchar(30) NOT NULL,
  `d_phone` varchar(10) NOT NULL,
  `d_licence` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `d_name`, `d_email`, `d_phone`, `d_licence`, `status`) VALUES
(1, 'Hiten Joshi', 'joshih153@gmail.com', '9786345363', 'upload/licence.jpg', 'approved'),
(2, 'Vinay Chauhan', 'chauhanvinay857@gmail.com', '7996545541', 'upload/licence.jpg', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(3) NOT NULL,
  `stars` int(1) NOT NULL,
  `feedback` text NOT NULL,
  `book_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `stars`, `feedback`, `book_id`) VALUES
(1, 3, 'Nice Ride', 1),
(2, 5, 'Super Ride', 3),
(3, 5, 'goog services', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `mobile`, `password`) VALUES
(1, 'Nikhil', 'nick@gmail.com', 'nick2002', '9152545757', '4ba29b9f9e5732ed33761840f4ba6c53'),
(2, 'Vinay Chauhan', 'vinay@gmail.com', 'vinay123', '8461336434', '78ffb54cea01b365797d0b883eba44fc'),
(3, 'nick', 'nick2@gmail.com', 'nick2', '8461336434', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'harsh', 'harsh14@gmail.com', 'harsh12', '7871255454', '6074c6aa3488f3c2dddff2a7ca821aab'),
(5, 'Harsh Joshi', 'hj201812@gmail.com', 'harsh04', '7043832256', 'b8b4b727d6f5d1b61fff7be687f7970f'),
(6, 'Testing ', 'Testing@gmail.com', 'teting', '9794512452', 'e14c05f0dc27e6be1fc127abaf474a59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_car`
--
ALTER TABLE `book_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_car`
--
ALTER TABLE `book_car`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
