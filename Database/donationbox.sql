-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 10:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donationbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dis_id` int(11) NOT NULL,
  `dis_name` varchar(100) NOT NULL,
  `div_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `dis_name`, `div_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Gazipur', 1),
(3, 'Munshiganj', 1),
(4, 'Narayanganj', 1),
(5, 'Tangail', 1),
(6, 'Chittangong', 2),
(7, 'Comilla', 2),
(8, 'Cox\'s Bazr', 2),
(9, 'Feni', 2),
(10, 'Khulna', 3),
(11, 'Bagerhat', 3),
(12, 'Jessore', 3),
(13, 'Barishal', 4),
(14, 'Bhola', 4),
(15, 'Barguna', 4);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `div_id` int(11) NOT NULL,
  `div_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `div_name`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Khulna'),
(4, 'Barishal'),
(5, 'Rajshahi'),
(6, 'Rangpur'),
(7, 'Mymensingh'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `process_food`
--

CREATE TABLE `process_food` (
  `volu_email` varchar(100) NOT NULL,
  `p_food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process_food`
--

INSERT INTO `process_food` (`volu_email`, `p_food_id`) VALUES
('asdcvfb@fghj.', 1),
('v@gmail.com', 2),
('v@gmail.com', 2),
('v@gmail.com', 2),
('raju@gmail.com', 8),
('testno1@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `tha_id` int(11) NOT NULL,
  `tha_name` varchar(100) NOT NULL,
  `dis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`tha_id`, `tha_name`, `dis_id`) VALUES
(1, 'Khilkhet', 1),
(2, 'Badda', 1),
(3, 'Kapasia', 2),
(4, 'Kaliganj', 2),
(5, 'nikunjo', 1),
(6, 'kuril', 1),
(7, 'bonani', 1),
(8, 'gulsan', 1),
(9, 'mirpur', 1),
(10, 'uttara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_food_donation`
--

CREATE TABLE `user_food_donation` (
  `user_email` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `food_quantity` varchar(100) NOT NULL,
  `food_quantity_a` varchar(100) NOT NULL,
  `food_ddate` varchar(100) NOT NULL,
  `food_edate` varchar(100) NOT NULL,
  `food_location` varchar(100) NOT NULL,
  `food_pic` varchar(100) NOT NULL,
  `food_validation_type` varchar(100) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_food_donation`
--

INSERT INTO `user_food_donation` (`user_email`, `food_name`, `food_type`, `food_quantity`, `food_quantity_a`, `food_ddate`, `food_edate`, `food_location`, `food_pic`, `food_validation_type`, `food_id`) VALUES
('', 'egg', 'other', '5', 'piece', '2018-12-15', '2018-12-22', 'kuratoli', '../user_donate_food/defult_food.jpg', 'p', 1),
('test1@gmail.com', 'bread', 'other', '5', 'piece', '2018-12-15', '2018-12-22', 'kuratoli', '../user_donate_food/defult_food.jpg', 'p', 2),
('test1@gmail.com', 'milk', 'other', '5', 'piece', '2018-12-15', '2018-12-22', 'kuratoli', '../user_donate_food/1544854301.jpg', 'un', 3),
('test1@gmail.com', 'bread', 'dry', '5', 'piece', '2018-12-15', '2018-12-22', 'kuratoli', '../user_donate_food/defult_food.jpg', 'r', 4),
('test1@gmail.com', 'bread', 'dry', '10', 'piece', '2018-12-15', '2018-12-20', 'nikunjo', '../user_donate_food/defult_food.jpg', 'r', 5),
('limon@gmail.com', 'egg', 'dry', '10', 'piece', '2018-12-15', '2018-12-28', 'dhaka', '../user_donate_food/defult_food.jpg', 'r', 6),
('test1@gmail.com', 'egg', 'dry', '10', 'piece', '2018-12-16', '2018-12-30', 'dhaka', '../user_donate_food/defult_food.jpg', 'r', 7),
('medha@gmail.com', 'rice', 'dry', '50', 'kg', '2018-12-18', '2018-12-31', 'bonani', '../user_donate_food/defult_food.jpg', 'p', 8),
('xyz@gmail.com', 'egg', 'dry', '100', 'piece', '2018-12-18', '2018-12-27', 'kuratoli', '../user_donate_food/defult_food.jpg', 'p', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_money_donation`
--

CREATE TABLE `user_money_donation` (
  `user_email` varchar(100) NOT NULL,
  `money_ddate` varchar(100) NOT NULL,
  `money_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_money_donation`
--

INSERT INTO `user_money_donation` (`user_email`, `money_ddate`, `money_amount`) VALUES
('test1@gmail.com', '2018-12-15', 500),
('test1@gmail.com', '2018-12-15', 500),
('limon@gmail.com', '2018-12-15', 1000),
('xyz@gmail.com', '2018-12-18', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_pic` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_name`, `user_email`, `user_phone`, `user_pass`, `user_pic`, `user_type`) VALUES
('abc', 'abc@gmal.com', 1223334, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('enon', 'esafayet@gmail.com', 1711260969, 'bae88efa207f0350d3332890a7628fce', '../user_profile_photo/defult_user.png', 'user'),
('jahal', 'jahal@gmail.com', 2147483647, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('jahid', 'jahid@gmail.com', 112324355, '25d55ad283aa400af464', 'user_profile_photo/defult_user.png', 'user'),
('limon', 'limon@gmail.com', 1959304837, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('medha', 'medha@gmail.com', 2147483647, '5e8667a439c68f5145dd2fcbecf02209', '../user_profile_photo/1545106235.png', 'user'),
('rahim', 'rahim@gmail.com', 1711260969, '123456789', 'user_profile_photo/defult_user.png', 'user'),
('safa', 'safa@gmail.com', 134567653, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('safiq', 'safiq@gmail.com', 12345678, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('sakib', 'sakib11@gmail.com', 123456678, '25d55ad283aa400af464', 'user_profile_photo/defult_user.png', 'user'),
('sakib', 'sakib@gmail.com', 123456678, '25f9e794323b453885f5', 'user_profile_photo/defult_user.png', 'user'),
('sedrftvghj', 'sxdcfvghb@g.', 1243567, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user'),
('test1', 'test1@gmail.com', 123456789, '5e8667a439c68f5145dd2fcbecf02209', '../user_profile_photo/1544882514.png', 'user'),
('test', 'test@gmail.com', 235678222, '25d55ad283aa400af464', 'user_profile_photo/defult_user.png', 'user'),
('xyz', 'xyz@gmail.com', 124567888, '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_profile`
--

CREATE TABLE `volunteer_profile` (
  `v_firstname` varchar(100) NOT NULL,
  `v_lastname` varchar(100) NOT NULL,
  `v_email` varchar(100) NOT NULL,
  `v_institution` varchar(100) NOT NULL,
  `v_division` varchar(100) NOT NULL,
  `v_district` varchar(100) NOT NULL,
  `v_location` varchar(100) NOT NULL,
  `v_bdate` varchar(100) NOT NULL,
  `v_gender` varchar(100) NOT NULL,
  `v_time` varchar(100) NOT NULL,
  `v_phone` varchar(100) NOT NULL,
  `v_pass` varchar(100) NOT NULL,
  `v_pic` varchar(100) NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `v_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_profile`
--

INSERT INTO `volunteer_profile` (`v_firstname`, `v_lastname`, `v_email`, `v_institution`, `v_division`, `v_district`, `v_location`, `v_bdate`, `v_gender`, `v_time`, `v_phone`, `v_pass`, `v_pic`, `v_type`, `v_status`) VALUES
('dfv', 'dfg', 'abc@gmail.com', 'asd', '1', '2', '1', '2018-1-1', 'male', 'first', '1234', '25d55ad283aa400af464c76d713c07ad\r\n', '', 'volunteer', 'active'),
('erthyy', 'asdfvb', 'asdcvfb@fghj.', 'asdfg', '1', '1', '1', '2018-12-20', 'female', 'first', '123456', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('kalam', 'isas', 'kalam@gmail.com', 'aiub', '1', '1', '10', '2018-12-03', 'male', 'third', '123456', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('mina', 'islam', 'mina@gmail.com', 'aiub', '1', '1', '8', '2018-12-02', 'female', 'first', '23456789', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'unactive'),
('raju', 'rahman', 'raju@gmail.com', 'buet', '1', '1', '7', '2018-12-01', 'male', 'second', '0246723456543', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('test', 'no1', 'testno1@gmail.com', 'aiub', '1', '2', '1', '2018-2-2', 'male', 'first', '1234567', '1234567', '', 'volunteer', 'active'),
('test', 'test', 'testno3@gmail.com', 'nsu', '1', '2', '3', '2018-12-03', 'male', 'first', '12345678', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'unactive'),
('volunteer', '12', 'v@gmail.com', 'aiub', '1', '1', '2', '2018-12-09', 'male', 'first', '12345678978', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('test', 'test', 'vtest12@gmail.com', 'aiub', '1', '1', '1', '2018-12-20', 'male', 'second', '123456765432', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('test', 'test', 'vtest1@gmail.com', 'aiub', '1', '2', '3', '2018-12-20', 'male', 'second', '123456765432', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active'),
('t', 'test', 'vtest@gmail.com', 'aiub', '1', '1', '1', '2018-12-20', 'male', 'second', '123456765432', '25d55ad283aa400af464c76d713c07ad', '../user_profile_photo/defult_user.png', 'volunteer', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`div_id`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`tha_id`);

--
-- Indexes for table `user_food_donation`
--
ALTER TABLE `user_food_donation`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `volunteer_profile`
--
ALTER TABLE `volunteer_profile`
  ADD PRIMARY KEY (`v_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `div_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `tha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_food_donation`
--
ALTER TABLE `user_food_donation`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
