-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 03:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housingsociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_timestamp`) VALUES
(1, 'admin', 'afb4bdc6f403902813299c6bc8c0d608bda9ae51', '2018-12-29 14:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `ccv` int(11) NOT NULL,
  `billing_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `user_id`, `house_number`, `month`, `year`, `amount`, `card_number`, `ccv`, `billing_timestamp`) VALUES
(1, 1, 1, 12, 2018, 150, '4111111111111111', 123, '2018-12-30 14:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `daily_notification`
--

CREATE TABLE `daily_notification` (
  `dn_id` int(11) NOT NULL,
  `dn_title` varchar(255) NOT NULL,
  `dn_message` text NOT NULL,
  `dn_date` varchar(255) NOT NULL,
  `dn_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_notification`
--

INSERT INTO `daily_notification` (`dn_id`, `dn_title`, `dn_message`, `dn_date`, `dn_timestamp`) VALUES
(1, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a <strong>faucibus posuere</strong>, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2018-12-30', '2018-12-30 05:44:50'),
(2, 'Test Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2018-12-30', '2018-12-30 05:45:36'),
(3, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2019-01-01', '2018-12-30 13:32:16'),
(4, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2018-12-31', '2018-12-30 13:32:32'),
(5, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2019-01-02', '2018-12-30 13:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_detail` text NOT NULL,
  `event_startdate` varchar(255) NOT NULL,
  `event_starttime` varchar(255) NOT NULL,
  `event_endtime` varchar(255) NOT NULL,
  `event_enddate` varchar(255) NOT NULL,
  `event_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_detail`, `event_startdate`, `event_starttime`, `event_endtime`, `event_enddate`, `event_timestamp`) VALUES
(1, 'Lorem Ipsum', '<p>Lorem Ipsum</p>\r\n', '2019-01-02', '1:00am', '2:00am', '2019-01-02', '2018-12-30 13:26:35'),
(2, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet leo in erat placerat, ac efficitur enim eleifend. Morbi porta massa arcu, non commodo sapien maximus sit amet. Aenean luctus, ligula a faucibus posuere, urna odio tincidunt dolor, id iaculis nibh lectus in lectus. Aliquam mattis, purus a scelerisque tristique, magna quam auctor nunc, ac convallis mauris dolor ut mauris. Nunc laoreet hendrerit ligula ac convallis. Nullam accumsan eleifend lectus sit amet ultricies. Curabitur risus magna, tempus ut dui a, auctor faucibus nunc. Ut et elementum ex. Nullam id nulla quis diam commodo imperdiet.</p>\r\n', '2018-12-31', '3:30am', '4:30am', '2018-12-31', '2018-12-30 13:33:33'),
(3, 'test', '<p>test</p>\r\n', '2019-01-04', '12:30am', '1:30am', '2019-01-04', '2018-12-30 14:03:07'),
(4, 'TESING12', '<p>dvf</p>\r\n', '2019-01-05', '1:30am', '2:30am', '2019-01-05', '2018-12-30 14:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `eventparticipant`
--

CREATE TABLE `eventparticipant` (
  `ep_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `ep_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventparticipant`
--

INSERT INTO `eventparticipant` (`ep_id`, `user_id`, `event_id`, `ep_timestamp`) VALUES
(1, 2, 1, '2018-12-30 13:29:25'),
(2, 1, 1, '2018-12-30 13:41:38'),
(3, 1, 4, '2018-12-30 14:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_body` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_title`, `post_body`, `post_category`, `post_timestamp`) VALUES
(1, 1, 'test', '<p>test</p>\r\n', 'suggestion', '2018-12-30 06:51:55'),
(2, 1, 'asd', '<p>asd</p>\r\n', 'complaint', '2018-12-30 06:52:21'),
(3, 2, 'test', '<p>test join query</p>\r\n', 'suggestion', '2018-12-30 07:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `house_number` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `first_name`, `last_name`, `house_number`, `phone_number`, `password`, `email`, `created_timestamp`) VALUES
(1, 'vin', 'Vineet', 'Yadav', 1, '9833927251', '73672d5c4773f4525d300699675614231a139d2e', 'vineetyadav.hacker@gmail.com', '2018-12-29 09:32:30'),
(2, 'test', 'test', 'test', 2, '21474836473', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'sdfsdf@gmail.com', '2018-12-29 12:43:44'),
(3, 'vin1', 'Vineet12', 'Yadav12', 1, '9833927251', '73672d5c4773f4525d300699675614231a139d2e', 'vineetyadav.hacker1@gmail.com', '2018-12-29 13:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `daily_notification`
--
ALTER TABLE `daily_notification`
  ADD PRIMARY KEY (`dn_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `eventparticipant`
--
ALTER TABLE `eventparticipant`
  ADD PRIMARY KEY (`ep_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_notification`
--
ALTER TABLE `daily_notification`
  MODIFY `dn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eventparticipant`
--
ALTER TABLE `eventparticipant`
  MODIFY `ep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
