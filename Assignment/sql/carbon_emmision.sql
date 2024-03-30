-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-03-30 03:08:20
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
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(14, '21', '1221', 1),
(15, '1213123', '1323213', 1);

-- --------------------------------------------------------

--
-- 表的结构 `daily_logs`
--

CREATE TABLE `daily_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `transportation_mode` varchar(50) DEFAULT NULL,
  `energy_usage` decimal(10,2) DEFAULT NULL,
  `meals` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `educational_content`
--

CREATE TABLE `educational_content` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `educational_content`
--

INSERT INTO `educational_content` (`id`, `type`, `url`) VALUES
(1, 'video 1', 'https://www.youtube.com/embed/8q7_aV8eLUE?si=VquoCRB6K4OyeJaf'),
(2, 'video 2', 'https://www.youtube.com/embed/fStmxIfwXeI?si=HgyqEqTNABSmyKfM'),
(3, 'article 1', 'https://www.climate.gov/news-features/understanding-climate/climate-change-atmospheric-carbon-dioxide'),
(4, 'article 2', 'https://www.nationalgeographic.com/environment/article/greenhouse-gases'),
(5, 'infographics 1', 'https://www.easel.ly/blog/wp-content/uploads/2019/06/carbon-dioxide-emissions-whats-the-current-situation-like.png'),
(6, 'infographic 2', 'https://www.easel.ly/blog/wp-content/uploads/2019/06/Infographic-How-Your-Daily-Activities-Impact-the-Planet.jpg'),
(7, 'video 1', 'https://www.youtube.com/embed/OasbYWF4_S8?si=chRL8ApR7QvNyqzE'),
(8, 'video 2', 'https://www.youtube.com/embed/AOvcW8l3RzE?si=fRUfoVHv71J1eZxx'),
(9, 'article 1', 'https://www.eastman.com/en/media-center/news-stories/2023/reduce-reuse-recycle-principle-1-circular-economy'),
(10, 'article 2', 'https://pantheonchemical.com/reduce-reuse-recycle/'),
(11, 'infographic 1', 'https://i.pinimg.com/564x/2e/a9/88/2ea98809b559d37901a2adc3735e23dc.jpg'),
(12, 'infographic 2', 'https://www.integrativenutrition.com/sites/default/files/des772_updatedearthdayinfographic_rgb_0.jpg'),
(13, 'video 1', 'https://www.youtube.com/embed/NB-A205XLDk?si=rUn2PsuxNlvjbqAW'),
(14, 'video 2', 'https://www.youtube.com/embed/s1Bq615xX0Y?si=e2Q2lD7kdmESdkEv'),
(15, 'article 1', 'https://www.greenmatch.co.uk/blog/2020/03/how-to-save-energy-at-home'),
(16, 'article 2', 'https://www.sciencedirect.com/science/article/abs/pii/S0160791X22002068'),
(17, 'infographic 1', 'https://temporarypowersolutionsuk.files.wordpress.com/2016/09/tps-infographic-feb-2018.jpg'),
(18, 'infographic 2', 'https://s3.amazonaws.com/cms.ipressroom.com/352/files/201810/energy+tips+for+college+students.png'),
(19, 'video 1', 'https://www.youtube.com/embed/rByHiqc0K9k?si=ZcOGMvJujMwc87_9'),
(20, 'video 2', 'https://www.youtube.com/embed/KdiA12KeSL0?si=Tm12WaKuOlYXxhpw'),
(21, 'article 1', 'https://www.greeneatz.com/foods-carbon-footprint.html'),
(22, 'article 2', 'https://uwo.ca/se/thrive/blog/2020/9_ways_to_reduce_your_carbon_footprint.html'),
(23, 'infographic 1', 'https://chscommunicator.com/wp-content/uploads/2017/03/Reduce-Your-Carbon-Footprint.jpg'),
(24, 'infographic 2', 'https://www.integrativenutrition.com/sites/default/files/des772_updatedearthdayinfographic_rgb_0.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `organizer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `time`, `location`, `organizer`) VALUES
(1, 'Tree Planting Event', 'Join us in planting trees to help the environment and beautify our community.', '2024-04-15', '10:00:00', 'City Park', 'Green Earth Society'),
(2, 'Sustainable Living Workshop', 'Learn about sustainable living practices and how you can reduce your carbon footprint.', '2024-04-20', '14:00:00', 'Community Center', 'Eco-Friendly Living Association'),
(3, 'Recycling Drive', 'Bring your recyclable materials and contribute to reducing waste in our city.', '2024-05-05', '09:00:00', 'City Recycling Center', 'Green Initiatives Group');

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
  `Total_Time_Span_Month` decimal(10,2) DEFAULT NULL,
  `Submit_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_Id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `food_carbon_emission`
--

INSERT INTO `food_carbon_emission` (`id`, `diet`, `meat`, `vegetable`, `wasted_food`, `waste`, `car_type`, `car_gas`, `road_type`, `motor_type`, `motor_gas`, `public_transport_type`, `drive_distance`, `average_kwh`, `time_span_months`, `carbon_intensity`, `food_total`, `transport_total`, `Total_KHW`, `Total_Time_Span`, `Total_Time_Span_Month`, `Submit_Time`, `user_Id`, `date_created`) VALUES
(26, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(27, 'Vegetarian', 0, 80, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 1, 1, 1, 24.00, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(28, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(29, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(30, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 0.30, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(31, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 0, 1, 1, 1, 0.30, 0.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(32, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 80, 0, 0, 0, 0.30, 20.80, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(33, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 40.30, 12000.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(34, 'Vegetarian', 0, 80, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 0, 0, 0, 24.00, 12.00, NULL, NULL, NULL, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(35, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 80, 8, 8, 8, 40.30, 12.00, 64.00, 512.00, 64.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(36, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'AC-motor', 'Synthetic-Oil', 'Please Select Public Transport Type', 20, 1, 1, 1, 0.30, 5.20, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(37, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 80, 1, 1, 1, 0.30, 4.00, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(38, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 1, 1, 1, 1, 40.30, 0.05, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(39, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(40, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 1, 1, 1, 1, 0.30, 0.26, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(41, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 1, 1, 1, 1, 0.30, 0.26, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(42, 'Omnivore', 2, 2, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2, 2, 2, 2, 80.60, 0.30, 4.00, 8.00, 4.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(43, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 1, 1, 1, 1, 0.30, 0.05, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(44, 'Vegetarian', 0, 2, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 2, 2, 2, 0.60, 3.00, 4.00, 8.00, 4.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(45, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2, 1, 1, 1, 0.30, 0.30, 1.00, 1.00, 1.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(46, 'Vegetarian', 0, 2, 'No', 0, 'Sedan', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 80, 80, 4, 65, 0.60, 35.20, 320.00, 20800.00, 5200.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(47, 'Omnivore', 200, 80, 'Yes', 20, 'HatchBack', 'Petrol', 'highWay', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 200, 700, 8, 60, 8024.00, 52.00, 5600.00, 336000.00, 42000.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(48, 'Omnivore', 200, 80, 'Yes', 20, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 200, 100, 8, 6, 8024.00, 52.00, 800.00, 4800.00, 600.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(49, 'Omnivore', 20, 20, 'Yes', 20, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 200, 300, 6, 60, 806.00, 52.00, 1800.00, 108000.00, 18000.00, '2024-03-27 05:36:33', 0, '2024-03-29 00:38:23'),
(50, 'Omnivore', 2, 2, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 20, 800, 1, 80, 80.60, 1.00, 800.00, 2133.33, 2133.33, '2024-03-27 05:39:43', 0, '2024-03-29 00:38:23'),
(51, 'Vegetarian', 0, 80, 'No', 0, 'Sedan', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 800, 800, 20, 60, 24.00, 352.00, 16000.00, 80.00, 1600.00, '2024-03-27 05:44:20', 0, '2024-03-29 00:38:23'),
(52, 'Omnivore', 20, 20, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 20, 80, 80, 80, 806.00, 5.20, 6400.00, 2.67, 213.33, '2024-03-28 10:18:02', 0, '2024-03-29 00:38:23'),
(53, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 40.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:21:57', 0, '2024-03-29 00:38:23'),
(54, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'LRT', 1, 1, 1, 1, 0.30, 0.06, 1.00, 0.03, 0.03, '2024-03-28 10:22:24', 0, '2024-03-29 00:38:23'),
(55, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:23:01', 0, '2024-03-29 00:38:23'),
(56, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:23:52', 0, '2024-03-29 00:38:23'),
(57, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:25:48', 0, '2024-03-29 00:38:23'),
(58, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 20, 20, 20, 0.30, 3.00, 400.00, 0.67, 13.33, '2024-03-28 10:31:25', 0, '2024-03-29 00:38:23'),
(59, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 40.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:34:47', 0, '2024-03-29 00:38:23'),
(60, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 40.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:35:41', 0, '2024-03-29 00:38:23'),
(61, 'Vegetarian', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 11, 1, 1, 1, 0.30, 1.65, 1.00, 0.03, 0.03, '2024-03-28 10:36:22', 0, '2024-03-29 00:38:23'),
(62, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:37:12', 0, '2024-03-29 00:38:23'),
(63, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:37:57', 2, '2024-03-29 00:38:23'),
(64, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:38:09', 2, '2024-03-29 00:38:23'),
(65, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-28 10:38:30', 2, '2024-03-29 00:38:23'),
(66, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-29 16:41:15', 2, '2024-03-29 16:41:15'),
(67, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 1, 0.30, 0.15, 1.00, 0.03, 0.03, '2024-03-29 16:42:55', 2, '2024-03-29 16:42:55');

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
  `user_Id` int(11) NOT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Food` varchar(250) NOT NULL,
  `Commuting_Method` varchar(250) NOT NULL,
  `Energy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_Id`, `UserName`, `Email`, `Age`, `Password`, `Food`, `Commuting_Method`, `Energy`) VALUES
(1, 'yap', 'yapfongkiat53@gmail.com', 21, '2011', '', '', ''),
(2, 'gay', '12345@gmail.com', 25, '12345', '', '', ''),
(3, '123', '123', 22, '123', '', '', ''),
(4, '123312', '12232', 12321, '123213', '', '', ''),
(5, 'ioe', '2222', 213, '123', '', '', ''),
(6, '123', 'sadoid@123', 12, '2111', '', '', ''),
(7, 'ads', 'dasda', 21, 'eqeweqewq', '', '', ''),
(8, 'b2100346', '123@gmail.com', 21, '123', '', '', ''),
(9, 'yap', 'jack@123', 21, '123', '', '', ''),
(10, '12345@gmail.com', 'yap', 1212, '7890123456', '', '', ''),
(11, 'yap', '6849243', 21, '8912321', '', '', ''),
(12, 'yap', 'yap4@gmail.com', 21, '12345', 'egg', '', 'Air-condition'),
(13, '13', '13', 13, '13', '13', '13', '13'),
(14, 'yap', '12345', 21, '1233213', 'Omnivore', 'Car', 'Car'),
(15, '56789', '567890', 56789, '567890', '122', '', '6789'),
(16, '1234', '1234', 1234, '1234', '1234', '1234', '1234'),
(17, '00', '00', 0, '', 'Omnivore', '', 'Fan'),
(18, '123213', '13213', 133312, '13123', 'Omnivore', '', 'Fan'),
(19, '09', '09', 9, '09', 'Omnivore', '', 'Fan'),
(20, '07', '07', 0, '07', 'Omnivore', 'Motorcycle', 'Fan');

--
-- 转储表的索引
--

--
-- 表的索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- 表的索引 `daily_logs`
--
ALTER TABLE `daily_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- 表的索引 `educational_content`
--
ALTER TABLE `educational_content`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `daily_logs`
--
ALTER TABLE `daily_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `educational_content`
--
ALTER TABLE `educational_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `food_carbon_emission`
--
ALTER TABLE `food_carbon_emission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 限制导出的表
--

--
-- 限制表 `daily_logs`
--
ALTER TABLE `daily_logs`
  ADD CONSTRAINT `daily_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_Id`);

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
