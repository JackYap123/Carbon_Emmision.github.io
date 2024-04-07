-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-04-07 02:44:16
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
(2, 'video 2', ''),
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
(3, 'Recycling Drive', 'Bring your recyclable materials and contribute to reducing waste in our city.', '2024-05-05', '09:00:00', 'City Recycling Center', 'Green Initiatives Group'),
(4, '1', '11', '2024-03-31', '20:12:00', '123', '3213221'),
(5, '1', '121', '2024-02-28', '22:23:00', '123', '12'),
(6, '123', '123', '2024-03-31', '22:24:00', '123', '123');

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
  `electricity_consumption` int(11) DEFAULT NULL,
  `carbon_itensity` int(11) DEFAULT NULL,
  `food_total` decimal(10,2) DEFAULT 0.00,
  `transport_total` double(10,2) DEFAULT 0.00,
  `Total_KHW` decimal(10,2) DEFAULT NULL,
  `Total_Time_Span` decimal(10,2) DEFAULT NULL,
  `Submit_Time` time DEFAULT NULL,
  `user_Id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `food_carbon_emission`
--

INSERT INTO `food_carbon_emission` (`id`, `diet`, `meat`, `vegetable`, `wasted_food`, `waste`, `car_type`, `car_gas`, `road_type`, `motor_type`, `motor_gas`, `public_transport_type`, `drive_distance`, `electricity_consumption`, `carbon_itensity`, `food_total`, `transport_total`, `Total_KHW`, `Total_Time_Span`, `Submit_Time`, `user_Id`, `date_created`) VALUES
(54, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'LRT', 1, 1, 1, 0.30, 0.06, 1.00, 0.03, '18:22:24', 0, '2024-03-29 00:38:23'),
(55, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:23:01', 0, '2024-03-29 00:38:23'),
(56, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:23:52', 0, '2024-03-29 00:38:23'),
(57, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:25:48', 0, '2024-03-29 00:38:23'),
(58, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 20, 20, 0.30, 3.00, 400.00, 0.67, '18:31:25', 0, '2024-03-29 00:38:23'),
(59, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 40.30, 0.15, 1.00, 0.03, '18:34:47', 0, '2024-03-29 00:38:23'),
(60, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 40.30, 0.15, 1.00, 0.03, '18:35:41', 0, '2024-03-29 00:38:23'),
(61, 'Vegetarian', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 11, 1, 1, 0.30, 1.65, 1.00, 0.03, '18:36:22', 0, '2024-03-29 00:38:23'),
(62, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:37:12', 0, '2024-03-29 00:38:23'),
(63, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:37:57', 2, '2024-03-29 00:38:23'),
(64, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:38:09', 2, '2024-03-29 00:38:23'),
(65, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '18:38:30', 2, '2024-03-29 00:38:23'),
(66, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:41:15', 2, '2024-03-29 16:41:15'),
(67, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:42:55', 2, '2024-03-29 16:42:55'),
(68, 'Vegetarian', 0, 20, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 200, 300, 1, 6.00, 10.00, 300.00, 600.00, '13:06:25', 2, '2024-03-30 05:06:25'),
(70, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 800, 2, 40.30, 3.00, 1600.00, 800.00, '21:20:31', 2, '2024-03-30 13:20:31'),
(71, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 1, 1, 1, 0.30, 0.05, 1.00, 0.03, '21:30:24', 3, '2024-03-30 13:30:24'),
(72, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 1, 1, 0.30, 3.00, 1.00, 0.03, '23:31:43', 2, '2024-03-30 15:31:43'),
(73, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 20, 1, 1, 0.30, 3.00, 1.00, 0.03, '23:32:33', 2, '2024-03-30 15:32:33'),
(79, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2, 1, 1, 0.30, 0.30, 1.00, 0.03, '23:49:24', 2, '2024-03-30 15:49:24'),
(80, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 1, 1, 0.30, 30.00, 1.00, 0.03, '00:25:50', 2, '2024-03-30 16:25:50'),
(81, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 2, 2, 0.30, 30.00, 4.00, 0.07, '00:28:26', 2, '2024-03-30 16:28:26'),
(82, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 2, 2, 0.30, 30.00, 4.00, 0.07, '00:28:43', 2, '2024-03-30 16:28:43'),
(83, 'Vegetarian', 0, 30, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 200, 10, 9.00, 30.00, 2000.00, 6.67, '00:35:45', 2, '2024-03-30 16:35:45'),
(84, 'Vegetarian', 0, 2, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2, 2, 2, 0.60, 0.30, 4.00, 0.07, '00:40:28', 2, '2024-03-30 16:40:28'),
(85, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:41:11', 2, '2024-03-30 16:41:11'),
(86, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:44:52', 2, '2024-03-30 16:44:52'),
(87, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 21, 1, 1, 0.30, 3.15, 1.00, 0.03, '00:45:37', 2, '2024-03-30 16:45:37'),
(88, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 21, 1, 1, 0.30, 3.15, 1.00, 0.03, '00:45:48', 2, '2024-03-30 16:45:48'),
(89, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:50:56', 2, '2024-03-30 16:50:56'),
(90, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:51:54', 2, '2024-03-30 16:51:54'),
(91, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '00:53:32', 2, '2024-03-30 16:53:32'),
(92, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:01:07', 2, '2024-03-30 17:01:07'),
(93, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1001, 1, 1, 0.30, 150.15, 1.00, 0.03, '01:02:10', 2, '2024-03-30 17:02:10'),
(94, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:03:33', 2, '2024-03-30 17:03:33'),
(95, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:04:26', 2, '2024-03-30 17:04:26'),
(96, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:07:12', 2, '2024-03-30 17:07:12'),
(97, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:07:52', 2, '2024-03-30 17:07:52'),
(98, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:08:36', 2, '2024-03-30 17:08:36'),
(99, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:11:49', 2, '2024-03-30 17:11:49'),
(100, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:12:20', 2, '2024-03-30 17:12:20'),
(101, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:12:33', 2, '2024-03-30 17:12:33'),
(102, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:13:01', 2, '2024-03-30 17:13:01'),
(103, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, '01:14:00', 2, '2024-03-30 17:14:00'),
(104, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:24:08'),
(105, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:26:42'),
(106, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:27:09'),
(107, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:28:35'),
(108, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:28:49'),
(109, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:33:02'),
(110, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:36:33'),
(111, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:37:15'),
(112, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:37:48'),
(113, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:37:51'),
(114, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:51:37'),
(115, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:51:51'),
(116, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-30 17:56:03'),
(117, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 20, '2024-03-31 07:47:59'),
(118, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 2, 2, 0.30, 30.00, 4.00, 0.07, NULL, 20, '2024-03-31 07:49:09'),
(119, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 20, '2024-03-31 07:50:09'),
(120, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 13, '2024-03-31 07:51:38'),
(121, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-31 08:18:24'),
(122, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 200, 1, 1, 0.30, 52.00, 1.00, 0.03, NULL, 2, '2024-03-31 09:37:03'),
(123, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'LRT', 1, 1, 1, 0.30, 0.06, 1.00, 0.03, NULL, 2, '2024-03-31 11:38:53'),
(124, 'Vegetarian', 0, 20, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 1000, 111, 11, 6.00, 260.00, 1221.00, 0.34, NULL, 2, '2024-03-31 11:49:00'),
(125, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1, 1, 1, 0.30, 0.15, 1.00, 0.03, NULL, 2, '2024-03-31 13:05:02'),
(127, 'Vegetarian', 0, 2000, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2000, 1000, 62, 600.00, 300.00, 62.00, NULL, NULL, 2, '2024-03-31 15:38:00'),
(128, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 800, 20, 0.30, 30.00, 16.00, NULL, NULL, 2, '2024-03-31 23:32:30'),
(129, 'Vegetarian', 0, 22, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 2000, 800, 90, 6.60, 300.00, 72.00, NULL, NULL, 2, '2024-04-01 01:13:41'),
(130, 'Vegetarian', 0, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 10, 1, 1, 0.30, 1.50, 0.00, NULL, NULL, 2, '2024-04-01 01:43:50'),
(131, 'Vegetarian', 0, 1000, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 1000, 800, 60, 300.00, 150.00, 48.00, NULL, NULL, 2, '2024-04-01 02:33:26'),
(132, 'Omnivore', 100, 50, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'LRT', 100, 1000, 100, 4015.00, 6.00, 100.00, NULL, NULL, 24, '2024-04-01 02:45:32'),
(133, 'Omnivore', 100, 10, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'MRT', 1, 10, 20, 4003.00, 0.05, 0.20, NULL, NULL, 24, '2024-04-01 02:46:08'),
(134, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'LRT', 1, 1, 1, 40.30, 0.06, 0.00, NULL, NULL, 24, '2024-04-01 02:46:28'),
(135, 'Vegetarian', 0, 1, 'No', 0, 'HatchBack', 'Petrol', 'MainRoad', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Please Select Public Transport Type', 200, 100, 60, 0.30, 52.00, 6.00, NULL, NULL, 2, '2024-04-04 21:26:28'),
(136, 'Vegetarian', 0, 2, 'Yes', 20, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 800, 60, 0.60, 30.00, 48.00, NULL, NULL, 2, '2024-04-06 00:39:32'),
(137, 'Omnivore', 1, 1, 'No', 0, 'Please Select Car type', 'Please Select Car Gasoline', 'Please Select Road type', 'Please Select Motor Type', 'Please Select Motor Gasoline', 'Bus', 200, 80, 60, 40.30, 30.00, 4.80, NULL, NULL, 2, '2024-04-06 15:02:41');

-- --------------------------------------------------------

--
-- 表的结构 `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `registrations`
--

INSERT INTO `registrations` (`id`, `event_name`, `user_name`, `user_email`) VALUES
(1, 'Tree Planting Event', 'John Doe', 'john@example.com'),
(2, 'Sustainable Living Workshop', 'Jane Smith', 'jane@example.com'),
(3, 'Recycling Drive', 'Alice Johnson', 'alice@example.com'),
(4, '', '', ''),
(5, '', '', '');

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
(2, 'yap', '12345@gmail.com', 25, '12345', 'Vegetarian', 'Motorcycle', 'Air-Condition'),
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
(13, '13', '13', 13, '13', 'Omnivore', 'Car', 'Fan'),
(14, 'yap', '12345', 21, '1233213', 'Omnivore', 'Car', 'Car'),
(15, '56789', '567890', 56789, '567890', '122', '', '6789'),
(16, '1234', '1234', 1234, '1234', '1234', '1234', '1234'),
(17, '00', '00', 0, '', 'Omnivore', '', 'Fan'),
(18, '123213', '13213', 133312, '13123', 'Omnivore', '', 'Fan'),
(19, '09', '09', 9, '09', 'Omnivore', '', 'Fan'),
(20, '07', '07', 0, '07', 'Omnivore', 'Motorcycle', 'Fan'),
(21, 'yap', '1', 12, '1', 'Omnivore', 'Car', 'Air-Condition'),
(22, 'admin', 'admin@example.com', 21, '10293847', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(23, 'admin', 'admin1@example.com', 22, '123', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(24, 'test', 'test@gmail.com', 1, 'test', 'Omnivore', 'Public-Transport', 'Air-Condition'),
(25, '12345', 'Jack@123456', 123, '123', 'Omnivore', 'Car', 'Fan'),
(26, '12345', '1245423432', 21, '123', 'Omnivore', 'Public-Transport', 'Fan'),
(27, '1221232132', '1256473890', 200, '123', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(28, 'yap', '38913', 132312, '3131231', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(29, '123421', '123123', 3132312, '3123121', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(30, '12', '12', 12, '12', 'Please Select Your Diet', 'Please Select Your Transpotation', 'Please Select Your Transpotation'),
(31, '2131', 'haha@123', 3131, '3131', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(32, '12333', '123@123', 11, 'yap@123', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(33, '12321321', '12323123@123', 13121, '123123', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(34, '123', '1213132@gmail.com', 123213, '213213', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(35, '12312', '3970123@21', 74, '1233231221', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(36, '1233', 'yap@123123', 131, '131332', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(37, '123', '12331231@gmailcom', 12321, '1232123', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(38, '13212', '13231@123', 1232131, '12312332', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(39, '313212', '2112312@123', 3123121, '123333', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation'),
(40, '123312', '12312@gmail.com', 123, '123@Yap1', 'Please Select Your Diet', 'Please Select Your Transportation', 'Please Select Your Transportation');

-- --------------------------------------------------------

--
-- 表的结构 `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `user_interface` varchar(1) NOT NULL,
  `feature_satisfaction` varchar(1) NOT NULL,
  `preferences` varchar(1) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `user_interface`, `feature_satisfaction`, `preferences`, `feedback`) VALUES
(1, '5', '5', '5', 'noob'),
(2, '1', '1', '1', 'trash'),
(3, '3', '3', '3', 'test'),
(4, '3', '4', '4', '111'),
(5, '1', '3', '2', ''),
(6, '2', '3', '3', '');

--
-- 转储表的索引
--

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
-- 表的索引 `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- 表的索引 `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `educational_content`
--
ALTER TABLE `educational_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `food_carbon_emission`
--
ALTER TABLE `food_carbon_emission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- 使用表AUTO_INCREMENT `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用表AUTO_INCREMENT `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
