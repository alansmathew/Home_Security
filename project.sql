-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 10:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_seller_name` varchar(30) NOT NULL,
  `item_discription` varchar(2000) NOT NULL,
  `item_cost` decimal(7,2) NOT NULL,
  `item_rating` int(5) NOT NULL,
  `item_main_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_id`, `item_name`, `item_seller_name`, `item_discription`, `item_cost`, `item_rating`, `item_main_image`) VALUES
(5, 'SimpliSafe 8 Piece Wireless Home Security System', 'SimpliSafe', 'Ready to protect right out of the box. Just plug in the base station, place your sensors, and start protecting your home in minutes - no tools required.Optional 24/7 professional monitoring with police, fire & medical dispatch starting at 50c/day - No contracts.Sound the alarm. Pioneering signal burst technology that is powerful enough to cover homes of every size, with up to 1000 ft. range -- no extender needed.Panic Button instantly triggers the alarm and dispatch police fast - with silent panic option to signal for help discreetly.', '262.10', 4, '61HWU5sxfaL._AC_SL1500_.jpg'),
(6, 'Secure Alarm System Starter Pack - White', 'NESH1500', 'Nest Security Base with Built-In Keypad, 85 dB SPL Siren Includes 2 Tags & 2 Detect Sensors Motion Detection, Wi-Fi & Bluetooth (BLE) Connectivit.Quiet Open, Nest Pathlight Illumination, Works at Altitudes Up to 10,000 Feet', '285.00', 4, '31PEqfQnyIL._AC_.jpg'),
(7, 'Wireless Rechargeable Battery Powered WiFi Camera,', 'ZUMIMALL', 'RECHARGEABLE & LONG STANDBY TIME: This rechargeable camera comes with a 6000mAh battery that lasts up to 2 â€“ 5 months when fully charged so that you donâ€™t have to worry about continuously charging it(Tips: FULLY CHARGE when use it for first time). EASY TO INSTALL & USE: This wire-free battery powered outdoor security camera takes less than 5 minutes to set up without having to use any complicated tools. It comes with a magnetic bracket screw and double-sided adhesive tape allowing you to install it. anywhere you want. WIRELESS & CORDLESS: When we say our indoor/outdoor surveillance camera is totally wireless, we mean it. There are no wires involved whether itâ€™s watching the streams or installing it. Our rechargeable security camera is powered by a built-in rechargeable battery that allows you to place it indoors and outdoors without worrying about annoying wires. (ONLY COMPATIBLE with 2.4G WiFi router)', '79.99', 5, '51f5gfmmkjL._AC_SL1200_.jpg'),
(8, 'Arlo Pro 2 Wireless Home Security Camera System', 'Arlo Technologies, Inc', '00 percent Wire free Free of power cords and wiring hassles 1080p HD High quality video with sharper and brighter details Flexible Powering Options Use wire free, plugged in. Rechargeable battery Weatherproof Pro cameras are weatherproof so you can place them anywhere indoors and out 7 Days of Free Cloud Recordings Pro comes with recurring 7 day free cloud recordings. Live stream or view recorded video and audio for up to 7 days', '282.49', 5, '51C39xi4-OL._AC_SL1000_.jpg'),
(9, 'Ring Alarm 5 Piece Kit â€“ Home Security System', 'Ring', 'Ring Alarm puts whole-home security at your fingertips. Get alerts on your smart phone when doors or windows open or motion is detected. Optional 24/7 professional monitoring is just $10/month. No long-term contracts or cancellation fees. Manage Ring Alarm and other Ring productsâ€”including Ring Doorbellâ€”with the Ring app. Customize Ring Alarm for your needs. Add components at any time for whole home protection.', '199.00', 4, '71wCBizPK8L._SL1500_.jpg'),
(10, 'All-new Blink XT2 Outdoor/Indoor Smart Security Camera', 'Blink Home Security', 'Extended battery life â€“ 2 year battery life on two AA lithium batteries with a combination of two-way talk, live view, and motion recording. Double the usage of the XT on a single set of batteries when recording video. 2-way audio â€“ Talk to visitors through the Blink app on your smartphone or tablet.Customizable motion detection â€“ Use activity zones to choose where motion is detected so you receive the alerts that matter. Free cloud storage â€“ Keep hundreds of clips stored up to a year with no monthly fees or service contract required.', '99.99', 5, '51bRtmWNBbL._SL1000_.jpg'),
(11, 'AKASO Wireless Outdoor Security Camera, WiFi', 'AKASO', 'Easy Setup and Installï¼š100% Wire-Free, the wireless security camera is powered by solar panel or rechargeable battery, 2 kinds of brackets, 3 installation methods, IP65 Waterproof, you can put it anywhere you want with 5-minute installation! Privacy Does Matter: The recording of the outdoor indoor security camera can be only read via your personal account logging in App, even if the camera or Micro SD card is stolen, no one could read it without the account information anyway.', '99.99', 2, '61qaVJRdh+L._AC_SL1000_.jpg'),
(12, 'Redpol Home WiFi Smart Wireless Security', 'Redpol', 'Material: ABS Viewing Angle: 166Â° PIR: Support Night-vision: Support Feature: Keep an eye on your home and speak with visitors, all can from a remote location. Record wide-angle high-definition video: Maintain a view of your homeâ€˜s entrance for optimal security. You also can view all the history records of the device at APP play back function.', '109.33', 1, '51bBHCnihLL._AC_SL1050_.jpg'),
(13, 'Kami Home Security Camera System 1080p HD', 'Kami', 'More for less: get advanced AI features right out-of-the-box: person detection, activity zones, rich notifications, crying baby alert. No subscription required! 360 Degree rotation: an entire room, from one location. Mount it on a surface or on the ceiling, The Kami indoor camera gives you more control over what you want to see in your room. Smart alerts: sophisticated Algorithms means smarter alerts. With ai-based detection of humans, pets and Abnormal Sound, you only get alerted when it actually matters.', '98.98', 3, '61omge43WxL._AC_SL1500_.jpg'),
(14, 'Reolink Go [US Version] 1080p 3G/4G LTe', 'REOLINK', '4G-LTE and 3G GSM Network Connectivity - Reolink Go, supports 3G and 4G-LTE Networks and IP65 certified weatherproof and rechargeable battery or solar powered. An ideal 100% wire-free mobile HD 4g security camera for indoors and outdoors without internet access,such as hotels and campers, rv and trailers, trails and hunting, workplace and warehouse security, farms and ranch ect. Rechargeable Battery and Solar Panel Powered - The reolink security camera can be charged by universal 5V 2A phone adapter and reolink solar panel for continuous power (No power adapter or solor panel packed in).', '239.99', 3, '51+E67hNrJL._AC_SL1000_.jpg'),
(15, 'REOLINK Argus PT 1080p HD Solar/Rechargeable', 'REOLINK', 'Solar/Rechargeable Battery-Powered: Argus PT comes with a long-lasting but non-removeable rechargeable battery. Self-powered, so it can work without power cables and run well during a blackout. As the name implies, this is rechargeable with Reolink solar panel. No need to plug into power ever. Will run 24/7, 365 days a year with eco-friendly charging from the sun. (Power adapters and Reolink Solar Panels are sold separately). 1080p Full HD and Starlight Night Vision: Reolink Argus PT delivers exceptional visual performance backed by a 2-megapixel CMOS sensor, capturing quite clearer and smoother videos than 720p cameras. Even at night, with advanced starlight technology, it can see through the dark up to 33 feet in very low light conditions. Under the keen eye of this wire-free battery-operated camera, crimes have nowhere to hide.', '139.99', 3, '51XgLjrrQzL._AC_SL1000_.jpg'),
(16, 'REOLINK Rechargeable Battery/Solar Powered Security', 'REOLINK', 'Work with Alexa & Google Assistant (Alexa device sold separately): Works with Amazon Alexa/ Echo Spot/ Echo Show/ Google Assistant â€“ View your live video with a simple voice command, Argus 2 is now part of your smart home security system. Cordless Installing & Independently Work: Powered by a rechargeable battery, this wireless camera does not need to make holes on your wall. Neat and easy installing indoor or outdoor will save your money to pay for professional installers. No need of base station, the Wi-Fi IP camera can work with 2.4G Wi-Fi router directly without additional device. All setup can be done on the FREE Reolink app by following its easy voice instructions.', '184.99', 3, '516J2i0289L._AC_SL1000_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_images`
--

CREATE TABLE `tbl_item_images` (
  `image_no` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_images`
--

INSERT INTO `tbl_item_images` (`image_no`, `item_id`, `image_name`) VALUES
(2, 5, '61h+0WgULlL._AC_SL1500_.jpg'),
(3, 5, '61mcugNQugL._AC_SL1500_.jpg'),
(4, 5, '71Hou2D4guL._AC_SL1500_.jpg'),
(5, 5, '616H+QRdO+L._AC_SL1500_.jpg'),
(6, 6, '31KmWbQnV1L._AC_.jpg'),
(7, 6, '31XMu1nBqHL._AC_SL1000_.jpg'),
(8, 6, '51d9P+uVYuL._AC_SL1500_.jpg'),
(9, 6, '318ezMEmD2L._AC_.jpg'),
(10, 7, '61+tg-a4scL._AC_SL1200_.jpg'),
(11, 7, '61C-c9F1JPL._AC_SL1200_.jpg'),
(12, 7, '61vjlKGCyzL._AC_SL1200_.jpg'),
(13, 7, '719EnE5GJfL._AC_SL1200_.jpg'),
(14, 8, '71DULICBooL._AC_SL1500_.jpg'),
(15, 8, '81-jE2tMauL._AC_SL1500_.jpg'),
(16, 8, '81AubvVydWL._AC_SL1500_.jpg'),
(17, 8, '81rnDkPDtvL._AC_SL1500_.jpg'),
(18, 9, '51rdTMUam2L._SL1000_.jpg'),
(19, 9, '81yC7Tjh7TL._SL1500_.jpg'),
(20, 9, '91q5IxhzEpL._SL1500_.jpg'),
(21, 9, '91YJvcP4oEL._SL1500_.jpg'),
(22, 10, '51GnVRbaxXL._SL1000_.jpg'),
(23, 10, '51USMLS4cbL._SL1000_.jpg'),
(24, 10, '616y+uThD5L._SL1000_.jpg'),
(25, 10, '5181iOT5Z1L._SL1000_.jpg'),
(26, 11, '61iQtdvDLWL._AC_SL1000_.jpg'),
(27, 11, '51zb+p5JdJL._AC_SL1000_.jpg'),
(28, 11, '61TuAyJUZgL._AC_SL1000_.jpg'),
(29, 11, '61w5cLJelAL._AC_SL1000_.jpg'),
(30, 12, '51DX2RU5QUL._AC_SL1050_.jpg'),
(31, 12, '51eY3w4xf5L._AC_SL1050_.jpg'),
(32, 12, '61Nmdl4EmpL._AC_SL1050_.jpg'),
(33, 12, '61pw4BST-JL._AC_SL1050_.jpg'),
(34, 13, '51idzqKJ7rL._AC_SL1000_.jpg'),
(35, 13, '51Mp0T2rGKL._AC_SL1000_.jpg'),
(36, 13, '818T5DFCZ0L._AC_SL1500_.jpg'),
(37, 13, '913QnG2sf1L._AC_SL1500_.jpg'),
(38, 14, '51l+p7IQuAL._AC_SL1000_.jpg'),
(39, 14, '51SAH1mFU8L._AC_SL1000_.jpg'),
(40, 14, '61FGdkNCM6L._AC_SL1000_.jpg'),
(41, 14, '71-gaibp0FL._AC_SL1000_.jpg'),
(42, 15, '51rciKT6CML._AC_SL1000_.jpg'),
(43, 15, '61Be62eqPML._AC_SL1000_.jpg'),
(44, 15, '61tYdvxP6KL._AC_SL1000_.jpg'),
(45, 15, '71-ZdIhH1iL._AC_SL1000_.jpg'),
(46, 16, '61itFDOKl-L._AC_SL1000_.jpg'),
(47, 16, '51NcR29cdrL._AC_SL1000_.jpg'),
(48, 16, '61w+BIRkhBL._AC_SL1000_.jpg'),
(49, 16, '61LMKghUZwL._AC_SL1000_.jpg'),
(50, 17, ''),
(51, 17, ''),
(52, 17, ''),
(53, 17, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `status`) VALUES
(3, 'alansmathew', 'Alan@12345', 1),
(4, 'alan', 'Alan@12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `pid` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`pid`, `reg_id`, `item_id`) VALUES
(60, 3, 9),
(61, 3, 7),
(62, 3, 8),
(63, 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg_id`, `login_id`, `name`, `email`) VALUES
(2, 3, 'alan', 'alansmathew@icloud.com'),
(3, 4, 'alan', 'alansmathew@icloud.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `w_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`w_id`, `reg_id`, `item_id`) VALUES
(1, 3, 11),
(2, 3, 8),
(3, 3, 13),
(4, 3, 9),
(5, 3, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_item_images`
--
ALTER TABLE `tbl_item_images`
  ADD PRIMARY KEY (`image_no`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_item_images`
--
ALTER TABLE `tbl_item_images`
  MODIFY `image_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
