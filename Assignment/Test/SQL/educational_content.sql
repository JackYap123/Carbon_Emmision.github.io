-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 09:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbon_emmision`
--

-- --------------------------------------------------------

--
-- Table structure for table `educational_content`
--

CREATE TABLE `educational_content` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_content`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educational_content`
--
ALTER TABLE `educational_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educational_content`
--
ALTER TABLE `educational_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
