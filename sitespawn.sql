-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2019 at 12:16 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitespawn`
--

-- --------------------------------------------------------

--
-- Table structure for table `spawnsimages`
--

CREATE TABLE `spawnsimages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spawnsimages`
--

INSERT INTO `spawnsimages` (`id`, `title`, `link`) VALUES
(1, 'Tilted Towers', '<img src="assets/images/Tilted_Towers.png">'),
(2, 'Paradise Palms', '<img src="assets/images/Paradise_Palms.png">'),
(3, 'Salty Springs', '<img src="assets/images/Salty_Springs.png">'),
(4, 'Pleasent Park', '<img src="assets/images/Pleasant_Park.png">'),
(5, 'Retail Row', '<img src="assets/images/Retail_Row.png">');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spawnsimages`
--
ALTER TABLE `spawnsimages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spawnsimages`
--
ALTER TABLE `spawnsimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
