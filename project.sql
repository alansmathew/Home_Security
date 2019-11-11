-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2019 at 03:18 AM
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
(1, 'Secure Alarm System Starter Pack', 'NESH1500', 'Nest Security Base with Built-In Keypad, 85 dB SPL Siren,Includes 2 Tags & 2 Detect Sensors,Motion Detection, Wi-Fi & Bluetooth (BLE) Connectivit,Quiet Open, Nest Pathlight Illumination, Works at Altitudes Up to 10,000 Feet,ncludes: Adhesive strips; Mounting screws; Nest Guard; Quick Start Card; Two Nest Detect sensors (with required CR123 battery included); Two Nest Tags; Two corner mounting brackets; Two flat mounting brackets; Two open/close magnets; User’s Guide', '288.89', 4, '31PEqfQnyIL._AC_.jpg'),
(3, 'SimpliSafe 8 Piece Wireless ', 'SimpliSafe', 'Ready to protect right out of the box. Just plug in the base station, place your sensors, and start protecting your home in minutes - no tools required.,Optional 24/7 professional monitoring with police, fire & medical dispatch starting at 50c/day - No contracts.,Sound the alarm. Pioneering signal burst technology that is powerful enough to cover homes of every size, with up to 1000 ft. range -- no extender needed.,Panic Button instantly triggers the alarm and dispatch police fast - with silent panic option to signal for help discreetly.,Includes: Base Station with built-in 95dB siren, Keypad, 4 Entry Sensors, Motion Sensor, Panic Button, Yard sign, Window security stickers and a Free month of monitoring.', '266.49', 4, '61HWU5sxfaL._AC_SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_images`
--

CREATE TABLE `tbl_item_images` (
  `image_no` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`) VALUES
(3, 'alansmathew', 'Alan@12345'),
(4, 'alan', 'Alan@12345');

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
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_item_images`
--
ALTER TABLE `tbl_item_images`
  MODIFY `image_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
