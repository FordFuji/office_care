-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10 มี.ค. 2023 เมื่อ 01:48 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.26-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_office_care`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `image_right_index`
--

CREATE TABLE `image_right_index` (
  `image_right_index_id` int(11) NOT NULL,
  `image_right_index_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_right_index_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `image_right_index`
--

INSERT INTO `image_right_index` (`image_right_index_id`, `image_right_index_image`, `image_right_index_datetime_update`) VALUES
(1, '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_right_index`
--
ALTER TABLE `image_right_index`
  ADD PRIMARY KEY (`image_right_index_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_right_index`
--
ALTER TABLE `image_right_index`
  MODIFY `image_right_index_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
