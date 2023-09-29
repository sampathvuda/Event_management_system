-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 03:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `date` date NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `no_of_guests` int(11) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `lights` varchar(30) NOT NULL,
  `flowers` varchar(30) NOT NULL,
  `stage` varchar(30) NOT NULL,
  `dance` varchar(30) NOT NULL,
  `music` varchar(30) NOT NULL,
  `cartoon` varchar(30) NOT NULL,
  `dr_no` varchar(255) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `amount_paid` bigint(20) NOT NULL,
  `total_amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`date`, `user_name`, `no_of_guests`, `event_type`, `food`, `lights`, `flowers`, `stage`, `dance`, `music`, `cartoon`, `dr_no`, `hall_name`, `amount_paid`, `total_amount`) VALUES
('2022-12-10', 'mohit51', 55, 'birthday', 'non-veg', 'YES', 'NO', 'YES', 'NO', 'NO', 'YES', '24-5-5', 's convension', 23000, 83000),
('2022-12-12', 'mohit51', 175, 'engagement', 'non-veg', 'YES', 'YES', 'YES', 'YES', 'YES', 'NO', '1-12-123', 'mohan function hall', 30000, 185000),
('2022-12-25', 'bala_06', 200, 'engagement', 'veg', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '1-56/02', 'vizag convection', 200000, 170000),
('2022-12-31', 'sampathvuda789', 100, 'marriage', 'non-veg', 'NO', 'YES', 'NO', 'NO', 'NO', 'YES', '24-5-5', 's convension', 20000, 95000),
('2023-01-01', 'mohit51', 100, 'birthday', 'veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '24-5-5', 's convension', 20000, 60000),
('2023-01-02', 'sampathvuda789', 175, 'birthday', 'veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '24-5-5', 's convension', 20000, 90000),
('2023-01-06', 'mohit51', 100, 'engagement', 'veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '1-12-23', 'svn lake palace', 24500, 60000),
('2023-01-27', 'mohit51', 55, 'birthday', 'non-veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '24-5-5', 's convension', 20000, 53000),
('2023-05-26', 'sam79', 55, 'marriage', 'veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '24-5-5', 's convension', 20000, 42000),
('2023-05-31', 'sam79', 100, 'marriage', 'non-veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '1-12-23', 'svn lake palace', 20000, 80000),
('2023-06-22', 'sam79', 55, 'birthday', 'non-veg', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', '1-12-23', 'svn lake palace', 123456, 78000),
('2023-07-14', 'sam79', 55, 'marriage', 'veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '1-56/02', 'vizag convection', 20000, 42000),
('2023-12-10', 'sam79', 50, 'birthday', 'non-veg', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', '1-12-23', 'svn lake palace', 20000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_name`, `work`, `salary`) VALUES
('john23', 'chef', 10000),
('ramu13', 'dance', 10000),
('sai123', 'dance', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_of_user` varchar(10) DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `phone_number`, `password`, `name`, `type_of_user`) VALUES
('bala_06', 6789054678, 'xxx', 'balasri', 'customer'),
('bhas123', 6304044657, '1234', 'bhaskar', 'customer'),
('i.mayeeboyina', 8374246465, 'ammananna', 'srimayee boyina', 'customer'),
('john23', 6304044657, 'john32', 'john', 'staff'),
('mohit51', 1234567809, 'mohit@123', 'mohit', 'customer'),
('pppp', 8099614161, 'Hyma@01!coco-cola', 'ppppppp', 'customer'),
('pravallika yerra', 6304044657, 'sampi@10', 'pravallika61', 'customer'),
('ramu13', 6778890178, 'ramu31', 'ramu', 'staff'),
('sai123', 8088516151, 'sai99', 'sai kumar', 'staff'),
('sam79', 7386060487, 'sam79', 'sampath', 'customer'),
('sampathvuda', 6305487934, 'Sampath@789', 'Vuda Sampath', 'admin'),
('sampathvuda789', 6305487934, 'Sampath@789', 'vuda sampath', 'customer'),
('sasi', 6302931859, 'sasi', 'sasi', 'customer'),
('vasudha_mb', 6304044657, 'vassu', 'vasudha', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `dr_no` varchar(255) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`dr_no`, `hall_name`, `city`) VALUES
('1-12-123', 'mohan function hall', 'vizag'),
('1-12-23', 'svn lake palace', 'vizianagaram'),
('1-56/02', 'vizag convection', 'vizag'),
('24-5-5', 's convension', 'vizianagaram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`date`),
  ADD KEY `dr_no` (`dr_no`,`hall_name`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_name`,`work`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`dr_no`,`hall_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`dr_no`,`hall_name`) REFERENCES `venue` (`dr_no`, `hall_name`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
