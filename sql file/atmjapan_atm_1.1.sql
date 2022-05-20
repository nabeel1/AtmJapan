-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 03:55 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atmjapan_atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminatmjapan@');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE IF NOT EXISTS `booked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productstockno` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sessionname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `productstockno`, `username`, `contact`, `email`, `sessionname`) VALUES
(17, '117167', 'khurram', '923216050408', 'khurram.shahzad094@gmail.com', 'khurram'),
(20, '201605', 'Anwer', '1234567', 'anwer.alvi@gmail.com', 'anwer'),
(21, '201604', 'Anwer', '1234567', 'anwer.alvi@gmail.com', 'anwer'),
(22, '116855', 'Anwer', '1234567', 'anwer.alvi@gmail.com', 'anwer'),
(23, '116415', 'Anwer', '1234567', 'anwer.alvi@gmail.com', 'anwer'),
(24, '116446', 'Autochannel', '1234567', '123456@123.com', 'anwer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(39, 'khurram', 'khurram.shahzad094@gmail.com', '98799b25dba7c794fec286c5ac7cf639', 'allowed'),
(40, 'usman', 'usman@gmail.com', '68e4438718cdea8ead007d74d56a8d72', 'allowed'),
(47, 'ahmad', 'talentedmd@gmail.com', '61243c7b9a4022cb3f8dc3106767ed12', 'not_allowed'),
(48, 'anwer', 'anwer.alvi@gmail.com', '05886b73942e47e4b17259e6de227856', 'allowed');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `stockno` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `chassisno` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `stockstatus` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `enginecapacity` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `options` varchar(50) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `image1` varchar(1500) NOT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `stockno`, `make`, `model`, `chassisno`, `color`, `stockstatus`, `year`, `transmission`, `enginecapacity`, `fuel`, `options`, `price`, `image1`, `image2`, `image3`, `image4`, `status`) VALUES
(15, 'HONDA	-	FIT', '116855', 'HONDA', 'FIT SHUTTLE HYBRID S-S FL', 'GP2-3126426	', 'Wine Red	', 'AVAILABLE', '2016/01', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/2016011012480882084_b.jpeg', 'uploadedcars/vehicles/2016011012480882084_d.jpeg', 'uploadedcars/vehicles/2016011012480882084_f.jpeg', 'uploadedcars/vehicles/20160110124808A82084_c.jpeg', 'booked'),
(16, 'TOYOTA - FIELDER', '116743', 'TOYOTA', 'FIELDER', 'NZE121-0249974', 'Black', 'AVAILABLE', '2003/10', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '3000', 'uploadedcars/vehicles/20160110083512NZE121-0249974-1.jpg', 'uploadedcars/vehicles/20160110083512NZE121-0249974-2.jpg', '', '', 'unbooked'),
(17, 'NISSAN-BLUEBIRD SYLPHY', '116446', 'NISSAN', 'LUEBIRD SYLPHY 15M FOUR', 'NG11-003321', 'Black', 'AVAILABLE', '2006/11', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110083802NG11-003321-1.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-2.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-3.jpg', 'uploadedcars/vehicles/20160110083802NG11-003321-4.jpg', 'booked'),
(18, 'MAZDA-AXELA', '116415', 'MAZDA', 'AXELA', 'BK5P-321005', 'Blue', 'AVAILABLE', '2007/12', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '9000', 'uploadedcars/vehicles/20160110084034BK5P-321005-1.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-2.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-3.jpg', 'uploadedcars/vehicles/20160110084034BK5P-321005-4.jpg', 'booked'),
(19, 'TOYOTA-FIELDER', '116842', 'TOYOTA', 'FIELDER', 'NZE121-0198574', 'Red', 'AVAILABLE', '2003/10', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110084338NZE121-0198574-1.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-2.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-3.jpg', 'uploadedcars/vehicles/20160110084338NZE121-0198574-4.jpg', 'unbooked'),
(20, 'NISSAN-SKYLINE', '113934', 'NISSAN', 'SKYLINE 250GT', 'V35-108292', 'Silver', 'AVAILABLE', '2006/11', 'Automatic', '1,500 CC', 'GASOLINE', 'AC,P/S,P/W,A/W,A/W,ABS,AIR/B', '7000', 'uploadedcars/vehicles/20160110084617V35-108292-1.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-2.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-3.jpg', 'uploadedcars/vehicles/20160110084617V35-108292-4.jpg', 'unbooked'),
(23, 'MERCEDEZ  -  E-CLASS', '117167', 'MERCEDEZ', 'E-CLASS', 'WDD2120542A-061362', 'silver', 'Available', '2009/09', 'Automatic', '3,000 CC', 'GASOLINE', 'AC,P/S,P/W,SR,A/W,A/W,AIR/B', '10000', 'uploadedcars/vehicles/2016011602095101-2014-mercedes-benz-e-class-fd.jpg', 'uploadedcars/vehicles/20160116020951download.jpg', 'uploadedcars/vehicles/20160116020951Mercedes-Benz-E-Class-wide.jpg', 'uploadedcars/vehicles/201601160209512002-2006_Mercedes-Benz_E-Class_(W211)_Elegance_sedan_01.jpg', 'booked'),
(37, 'Toyota Alex', '201601', 'Toyota', 'Alex', '1234567', 'White', 'Available', '2006-01-01', 'Manual', '1500', 'Gas', '', '700,000', 'uploadedcars/vehicles/20160204114305toyota_allex_a1214211690b1835581_orig.jpg', '', '', '', 'unbooked'),
(38, 'TOYOTA-VITZ', '201602', 'Toyota', 'VITZ', '123456', 'SKY BLUE', 'Available', '2005', 'Automatic', '1500', 'GAS', '', '300,000', 'uploadedcars/vehicles/201602080942422005Vitz.jpg', '', '', '', 'unbooked'),
(39, 'TOYOTA ALLION', '201603', 'TOYOTA', 'ALLION', '1234567', 'WHITE', 'Available', '2008', 'Automatic', '1500', 'GAS', '', '500,000', 'uploadedcars/vehicles/201602080944132008Allion1.jpg', '', '', '', 'unbooked'),
(40, 'TOYOTA-AURIS', '201604', 'TOYOTA', 'AURIS', '1234567', 'GREY', 'Available', '2006', 'Manual', '1500', 'GAS', '', '400,000', 'uploadedcars/vehicles/201602080945252006Auris.jpg', '', '', '', 'booked'),
(41, 'TOYOTA-BELTA', '201605', 'TOYOTA', 'BELTA', '1234567', 'GREY', 'Sold', '2008', 'Automatic', '1300', 'GAS', '', '350,000', 'uploadedcars/vehicles/201602080946432008Belta.jpg', '', '', '', 'booked'),
(42, 'TOYOTA PRIUS', '2016001', 'TOYOTA', 'PRIUS', '1234567', 'GREY', 'Available', '2013', 'Automatic', '1800 CC', 'HYBRID', '', '1,000,000', 'uploadedcars/vehicles/201602231059572013Prius.jpg', '', '', '', 'unbooked'),
(43, 'MERCEDES-BENZ', '2016002', 'MERCEDES-BENZ', 'C CLASS', '1234567', 'WHITE', 'Available', '2009', 'Automatic', '1800CC', 'GAS', '', '1,500,000', 'uploadedcars/vehicles/201602241253181.jpg', '', '', '', 'unbooked'),
(44, 'TOYOTA MARK X', '2016003', 'TOYOTA', 'MARK X', '1234567', 'GREY', 'Available', '2007', 'Automatic', '2400CC', 'GAS', '', '500,000', 'uploadedcars/vehicles/201602241254382.jpg', '', '', '', 'unbooked'),
(45, 'MERCEDES-BENZ', '2016004', 'MERCEDES-BENZ', 'E CLASS', '1234567', 'WHITE', 'Available', '2001', 'Automatic', '2600CC', 'GAS', '', '400,000', 'uploadedcars/vehicles/201602241255453.jpg', '', '', '', 'unbooked');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
