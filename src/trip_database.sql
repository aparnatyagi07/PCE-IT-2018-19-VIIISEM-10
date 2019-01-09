-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 06:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_trips`
--

-- --------------------------------------------------------

--
-- Table structure for table `palaces`
--

CREATE TABLE IF NOT EXISTS `palaces` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `mode` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `palaces`
--

INSERT INTO `palaces` (`id`, `title`, `image`, `type`, `mode`) VALUES
(1, 'Pahalgam, Jammu & Kashmir', 'p1.jpg', 1, 1),
(2, 'Munnar, Kerala', 'p2.jpg', 1, 1),
(3, 'Shillong, Meghalaya', 'p3.jpg', 1, 1),
(4, 'Kodaikanal, Tamil Nadu', 'p4.jpg', 1, 1),
(5, 'Mount Abu, Rajasthan', 'p5.jpg', 1, 1),
(6, 'Ooty, Tamil Nadu', 'p6.jpg', 1, 1),
(7, 'Champawat, Uttarakhand', 'p7.jpg', 1, 1),
(8, 'Manali, Himachal Pradesh', 'p8.jpg', 1, 1),
(9, 'Gulmarg, Jammu & Kashmir', 'p9.jpg', 1, 1),
(10, 'Keylong, Himachal Pradesh', 'p10.jpg', 1, 1),
(11, 'Khandala, Maharashtra', 'p11.jpg', 1, 1),
(12, 'Pushkar, Rajasthan', 'p12.jpg', 2, 1),
(13, 'Jaisalmer, Rajasthan', 'p13.jpg', 2, 1),
(14, 'Jodhpur, Rajasthan', 'p14.jpg', 2, 1),
(15, 'Bhuj, Gujarat', 'p15.jpg', 2, 1),
(16, 'Spiti, Himachal Pradesh', 'p16.jpg', 2, 1),
(17, 'Leh and Ladakh', 'p17.jpg', 2, 1),
(18, 'Spiti Valley,  Himachal Pradesh', 'p18.jpg', 4, 1),
(19, 'The Taj Mahal, Agra, Uttar Pradesh', 'p19.jpg', 4, 1),
(20, 'Kumarakom, Kerala', 'p20.jpg', 4, 1),
(21, 'Kodagu (Coorg), Karnataka', 'p21.jpg', 4, 1),
(22, 'Puducherry, Tamil Nadu', 'p22.jpg', 4, 1),
(23, 'Darjeeling, West Bengal', 'p23.jpg', 4, 1),
(24, 'Agonda beach- Goa', 'p24.jpg', 5, 1),
(25, 'Cavelossim Beach- Goa', 'p25.jpg', 5, 1),
(26, 'Mandrem Beach- North Goa', 'p26.jpg', 5, 1),
(27, 'Puri Beach- Orissa', 'p27.jpg', 5, 1),
(28, '5', 'p28.jpg', 0, 1),
(29, 'Yarada Beach, Visakhapatnam- Andhra Pradesh', 'p29.jpg', 5, 1),
(30, 'Dhanushkodi Beach, Ramesawaram- Tamil Nadu', 'p30.jpg', 5, 1),
(31, 'Muzhappilangad Drive in Beach, Kannur- Kerala', 'p31.jpg', 5, 1),
(32, 'Ramakrishna Beach, Visakhapatnam- Andhra Pradesh', 'p32.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mode` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `mode`) VALUES
(1, 'Neeraj Kumar', '9865326598', 'nkk@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palaces`
--
ALTER TABLE `palaces`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palaces`
--
ALTER TABLE `palaces`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
