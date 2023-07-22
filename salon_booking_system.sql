-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 11:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hairstyle` varchar(50) NOT NULL,
  `time` varchar(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `hairstyle`, `time`, `location`, `contact`, `email`) VALUES
(34, ' Jen do', 'Plaiting', '9:54', 'kirinya', '0756432612', 'jen@gmail.com'),
(35, ' martin', 'Plaiting', '5:58', 'kyengera', '0900', 'k@gmail.com'),
(32, ' Shalomk', 'Plaiting', '6:12', 'luzira', '0786', 'kwagalashalom2960@gmail.com'),
(33, ' Nakidde Percy', 'Makeup', '6:30', 'LUZIRA', '0754004559', 'vanpercy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `id`) VALUES
('kwagalashalom2960@gmail.com', '1999128', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salons`
--

CREATE TABLE `salons` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hairstyle` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `charge` float NOT NULL,
  `contact` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salons`
--

INSERT INTO `salons` (`id`, `name`, `hairstyle`, `location`, `charge`, `contact`, `image`) VALUES
(10, 'Shalom Beauty Centre', 'We deal with crochets, pencil, hair washing and bo', 'NALYA', 30000, '07594345678', 'mamapretty_salon - Copy.jpg'),
(11, 'ALPHAT BEAUTY SPA', 'We deal in different hair styles including pencil', 'kireka namgogon', 1400000, '0770957944', 'landing.jpg'),
(14, 'Crimson Beauty Centre', 'we offer a variety of services but we major basica', 'seeta', 30000, '075643267', 'salon.jpg'),
(19, 'Pretty Braidals', 'We do Bride and groom dressing, styling plus makeu', 'Kirinya', 1000000, '0786543218', 'IMG_1767(0).jpg'),
(17, 'Shalom Beauty Centre', 'We offer a variety of different salon services and', 'LUZIRA', 40000, '0759436776', 'landing.jpg'),
(18, 'Jenny Beauty Parlour', 'We deal with crochets, pencil, hair washing and bo', 'kireka', 30000, '0760453219', '8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
