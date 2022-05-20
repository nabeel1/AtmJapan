-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 10:52 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'adminatmjapan', 'adminatmjapan');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE IF NOT EXISTS `booked` (
`id` int(11) NOT NULL,
  `productstockno` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sessionname` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `productstockno`, `username`, `contact`, `email`, `sessionname`) VALUES
(7, '113937', 'khurram', '03216050408', 'khumi_mks@yahoo.co.uk', 'khurramshahzad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(2, 'khurramshahzad', 'khumimks@gmail.com', '3216050408', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stockno` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `chassisno` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `stockstatus` varchar(50) NOT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `year` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `enginecapacity` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `options` varchar(50) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `stockno`, `make`, `model`, `chassisno`, `color`, `stockstatus`, `remarks`, `year`, `transmission`, `enginecapacity`, `fuel`, `options`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(3, 'HONDA-VEZEL', '116873', 'HONDA', 'VEZEL HYBRID Z	', 'RU3-1122842', 'Pearl', 'AVAILABLE', '', '2016/01', '1', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '9000', 'uploadedcars/vehicles/20160109075615RU3-1122842-1.', 'uploadedcars/vehicles/20160109075615RU3-1122842-2.', 'uploadedcars/vehicles/201601090756153.jpg', 'uploadedcars/vehicles/201601090756154.jpg'),
(4, 'HONDA-VEZEL', '116873', 'HONDA', 'VEZEL HYBRID Z	', 'RU3-1122842', 'Pearl', 'AVAILABLE', '', '2016/01', '0', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '9000', 'uploadedcars/vehicles/201601101000042.jpg', 'uploadedcars/vehicles/20160110100004', 'uploadedcars/vehicles/20160110100004', 'uploadedcars/vehicles/20160110100004'),
(5, 'HONDA-Prius', '116874', 'HONDA', 'Prius	', 'RU3-1122812', 'Pearl', 'AVAILABLE', '', '2016/01', '1', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/201601101004502.jpg', 'uploadedcars/vehicles/20160110100450', 'uploadedcars/vehicles/20160110100450', 'uploadedcars/vehicles/20160110100450'),
(6, 'HONDA-Prius', '116823', 'HONDA', 'Prius	', 'RU3-1122814', 'Pearl', 'AVAILABLE', '', '2016/01', '0', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/201601101008192.jpg', 'uploadedcars/vehicles/20160110100819', 'uploadedcars/vehicles/20160110100819', 'uploadedcars/vehicles/20160110100819'),
(7, '', '', '', '', '', '', '', '', '', '0', '', '', '', '', 'uploadedcars/vehicles/20160110103230CarImage (3).j', 'uploadedcars/vehicles/20160110103230', 'uploadedcars/vehicles/20160110103230', 'uploadedcars/vehicles/20160110103230'),
(8, 'HONDA-Prius', '116873', 'HONDA', 'prius	', 'RU3-1122842', 'Pearl', 'AVAILABLE', '', '2016/01', '1', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '9000', 'uploadedcars/vehicles/201601101045452.jpg', 'uploadedcars/vehicles/201601101045451.jpg', 'uploadedcars/vehicles/201601101045453.jpg', 'uploadedcars/vehicles/20160110104545ZVW50-8003405-'),
(14, ' SUZUKI	-	SPACIA', '116873', 'SUZUKI', 'SPACIA X	', 'RU3-1122812', 'Pearl', 'AVAILABLE', '', '2016/01', '1', '660 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '5000', 'uploadedcars/vehicles/20160110112147MK42S-103238-1.jpg', 'uploadedcars/vehicles/20160110112147MK42S-103238-2.jpg', 'uploadedcars/vehicles/20160110112147', 'uploadedcars/vehicles/20160110112147'),
(15, 'HONDA	-	FIT', '116855', 'HONDA', 'FIT SHUTTLE HYBRID S-S FL', 'GP2-3126426	', 'Wine Red	', 'AVAILABLE', '', '2016/01', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/2016011012480882084_b.jpeg', 'uploadedcars/vehicles/2016011012480882084_d.jpeg', 'uploadedcars/vehicles/2016011012480882084_f.jpeg', 'uploadedcars/vehicles/20160110124808A82084_c.jpeg'),
(16, 'TOYOTA - FIELDER', '116743', 'TOYOTA', 'FIELDER', 'NZE121-0249974', 'Black', 'AVAILABLE', '', '2003/10', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '3000', 'uploadedcars/vehicles/20160110083512NZE121-0249974-1.jpg', 'uploadedcars/vehicles/20160110083512NZE121-0249974-2.jpg', '', ''),
(17, 'NISSAN-BLUEBIRD SYLPHY', '116446', 'NISSAN', 'LUEBIRD SYLPHY 15M FOUR', 'NG11-003321', 'Black', 'AVAILABLE', '', '2006/11', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110083802NG11-003321-1.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-2.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-3.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-4.jpg'),
(18, 'MAZDA-AXELA', '116415', 'MAZDA', 'AXELA', 'BK5P-321005', 'Blue', 'AVAILABLE', '', '2007/12', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '9000', 'uploadedcars/vehicles/20160110084034BK5P-321005-1.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-2.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-3.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-4.jpg'),
(19, 'TOYOTA-FIELDER', '116842', 'TOYOTA', 'FIELDER', 'NZE121-0198574', 'Red', 'AVAILABLE', '', '2003/10', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110084338NZE121-0198574-1.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-2.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-3.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-4.jpg'),
(20, 'NISSAN-SKYLINE', '113934', 'NISSAN', 'SKYLINE 250GT', 'V35-108292', 'Silver', 'AVAILABLE', '', '2006/11', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110084617V35-108292-1.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-2.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-3.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-4.jpg'),
(21, 'NISSAN-MARCH', '113937', 'NISSAN', 'MARCH 12X', 'K13-355196', 'Black', 'AVAILABLE', '', '2006/11', 'Manual', '660 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '5000', 'uploadedcars/vehicles/20160110084755K13-355196-1.jpg', 'uploadedcars/vehicles/20160110084755K13-355196-2.jpg', 'uploadedcars/vehicles/20160110084755K13-355196-3.jpg', 'uploadedcars/vehicles/20160110084755');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
