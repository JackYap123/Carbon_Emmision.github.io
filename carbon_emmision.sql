-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-03-25 08:37:34
-- 服务器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `carbon_emmision`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `food_carbon_emission`
--

CREATE TABLE `food_carbon_emission` (
  `id` int(11) NOT NULL,
  `diet` varchar(50) DEFAULT NULL,
  `meat` int(11) DEFAULT NULL,
  `vegetable` int(11) DEFAULT NULL,
  `wasted_food` enum('Yes','No') DEFAULT NULL,
  `waste` int(11) DEFAULT NULL,
  `car_type` varchar(50) DEFAULT NULL,
  `car_gas` varchar(50) DEFAULT NULL,
  `road_type` varchar(50) DEFAULT NULL,
  `motor_type` varchar(50) DEFAULT NULL,
  `motor_gas` varchar(50) DEFAULT NULL,
  `public_transport_type` varchar(50) DEFAULT NULL,
  `drive_distance` int(11) DEFAULT NULL,
  `average_kwh` int(11) DEFAULT NULL,
  `time_span_months` int(11) DEFAULT NULL,
  `carbon_intensity` int(11) DEFAULT NULL,
  `food_total` decimal(10,2) DEFAULT 0.00,
  `transport_total` double(10,2) DEFAULT 0.00,
  `Total_KHW` decimal(10,2) DEFAULT NULL,
  `Total_Time_Span` decimal(10,2) DEFAULT NULL,
  `Total_Time_Span_Month` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `food_carbon_emission`
--

INSERT INTO `food_carbon_emission` (`id`, `diet`, `meat`, `vegetable`, `wasted_food`, `waste`, `car_type`, `car_gas`, `road_type`, `motor_type`, `motor_gas`, `public_transport_type`, `drive_distance`, `average_kwh`, `time_span_months`, `carbon_intensity`, `food_total`, `transport_total`, `Total_KHW`, `Total_Time_Span`, `Total_Time_Span_Month`) VALUES
(26, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL),
(27, 'Vegetarian', 0, 80, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 1, 1, 1, 24.00, 0.00, NULL, NULL, NULL),
(28, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL),
(29, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL),
(30, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL),
(31, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 0, 1, 1, 1, 0.30, 0.00, NULL, NULL, NULL),
(32, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 80, 0, 0, 0, 0.30, 20.80, NULL, NULL, NULL),
(33, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 40.30, 12000.00, NULL, NULL, NULL),
(34, 'Vegetarian', 0, 80, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 24.00, 12.00, NULL, NULL, NULL),
(35, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 8, 8, 8, 40.30, 12.00, 64.00, 512.00, 64.00),
(36, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'AC-motor', 'Synthetic-Oil', 'Please Select Public Transport Type', 20, 1, 1, 1, 0.30, 5.20, 1.00, 1.00, 1.00),
(37, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 80, 1, 1, 1, 0.30, 4.00, 1.00, 1.00, 1.00),
(38, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 1, 1, 1, 1, 40.30, 0.05, 1.00, 1.00, 1.00),
(39, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 1.00, 1.00);

-- --------------------------------------------------------

--
-- 表的结构 `food_data`
--

CREATE TABLE `food_data` (
  `id` int(11) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `meat_grams` int(11) DEFAULT NULL,
  `vegetable_grams` int(11) DEFAULT NULL,
  `wasted_food` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `MESSAGE` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Email`, `Age`, `Password`) VALUES
(1, 'yap', 'yapfongkiat53@gmail.com', 21, '2011'),
(2, 'gay', '12345@gmail.com', 25, '12345'),
(3, '123', '123', 22, '123'),
(4, '123312', '12232', 12321, '123213'),
(5, 'ioe', '2222', 213, '123'),
(6, '123', 'sadoid@123', 12, '2111'),
(7, 'ads', 'dasda', 21, 'eqeweqewq'),
(8, 'b2100346', '123@gmail.com', 21, '123'),
(9, 'yap', 'jack@123', 21, '123');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 表的索引 `food_carbon_emission`
--
ALTER TABLE `food_carbon_emission`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `food_data`
--
ALTER TABLE `food_data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `food_carbon_emission`
--
ALTER TABLE `food_carbon_emission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用表AUTO_INCREMENT `food_data`
--
ALTER TABLE `food_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 限制导出的表
--

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
