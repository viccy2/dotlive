-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `ads_id` text NOT NULL,
  `tagline` text NOT NULL,
  `descrip` text NOT NULL,
  `file` text NOT NULL,
  `user` text NOT NULL,
  `date` datetime NOT NULL,
  `duration` text NOT NULL,
  `price` text NOT NULL,
  `session` text NOT NULL,
  `tel` text NOT NULL,
  `link` text NOT NULL,
  `target` text NOT NULL,
  `click` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `sn`, `ads_id`, `tagline`, `descrip`, `file`, `user`, `date`, `duration`, `price`, `session`, `tel`, `link`, `target`, `click`) VALUES
(7, '1', 'DotLive-Ads207', 'Solar Panel', 'Get cheap solar panel to power your home 24/7 for just NGN25,000', 'dot.jpg', 'doteightinc@outlook.com', '2021-01-01 11:04:51', 'A Day', '500', 'active', '355353', 'https://doteightplus.com/contact', 'Ekiti', '');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `apt` text NOT NULL,
  `apartment` text NOT NULL,
  `pix` text NOT NULL,
  `location` text NOT NULL,
  `state` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `water` text NOT NULL,
  `power` text NOT NULL,
  `status` text NOT NULL,
  `uploader` text NOT NULL,
  `tel` text NOT NULL,
  `acct` text NOT NULL,
  `bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`id`, `sn`, `apt`, `apartment`, `pix`, `location`, `state`, `description`, `price`, `water`, `power`, `status`, `uploader`, `tel`, `acct`, `bank`) VALUES
(7, '1', 'DotLive-61', 'Self-Contain', '1.jpg', 'Ikole', 'Abuja', 'no more hustle jawe', '40000', 'Borehole', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(8, '1', 'DotLive-39', 'Self-Contain', '2.jpg', 'Ikole', 'Abuja', 'rooms are available', '87000', 'Borehole', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(9, '1', 'DotLive-672', 'Self-Contain', '3.jpg', 'Ikole', 'Abuja', 'rooms are available', '40000', 'Borehole', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(11, '1', 'DotLive-994', 'Room', 'Untitled-1.jpg', 'Ikole', 'Abuja', 'rooms are available', '30000', 'Well', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(12, '1', 'DotLive-555', 'Family House', 'dotmonday.jpg', 'ilaro', 'Abuja', 'rooms are available', '15000', 'Borehole', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(13, '1', 'DotLive-322', 'Self-Contain', '83659836_1087393674939014_491341522768232448_o.jpg', 'Benue', 'Benue', 'more rooms are available', '23000', 'Borehole', 'PHCN', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `apt` text NOT NULL,
  `paydate` datetime NOT NULL,
  `tenantmail` text NOT NULL,
  `tenanttel` text NOT NULL,
  `tranref` text NOT NULL,
  `price` text NOT NULL,
  `uploader` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `sn` text NOT NULL,
  `id` int(11) NOT NULL,
  `SupportRef` text NOT NULL,
  `Username` text NOT NULL,
  `Msg` text NOT NULL,
  `Datesent` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`sn`, `id`, `SupportRef`, `Username`, `Msg`, `Datesent`, `Status`) VALUES
('1', 26, '3898928', 'doteightinc@outlook.com', 'hey', '2020-12-28 02-36-45pm', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `support_reply`
--

CREATE TABLE `support_reply` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `ref` text NOT NULL,
  `msg` text NOT NULL,
  `other` text NOT NULL,
  `date` datetime NOT NULL,
  `usname` text NOT NULL,
  `via` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sn` int(11) NOT NULL,
  `id` text NOT NULL,
  `agtbiz` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `pword` text NOT NULL,
  `tel` text NOT NULL,
  `active` text NOT NULL,
  `category` text NOT NULL,
  `bank` text NOT NULL,
  `acct` text NOT NULL,
  `nin` text NOT NULL,
  `activator` text NOT NULL,
  `lstseen` datetime NOT NULL,
  `wallet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `id`, `agtbiz`, `name`, `email`, `gender`, `pword`, `tel`, `active`, `category`, `bank`, `acct`, `nin`, `activator`, `lstseen`, `wallet`) VALUES
(5, 'DotL428', '', 'Abolade Greatness ', 'Greatnessabolade@gmail.com', 'Male', '87756e68785221e15693852f107146ef', '08103171902', '1', 'user', '', '', '', 'a1eb6dcad421ecacca8671d7c5e1e4c6', '2020-12-30 12:29:57', ''),
(8, 'DotLnd92', '', 'Dot EightInc', 'doteightinc@outlook.com', 'Male', '4ae5250f21b670fda063e10bddc230a0', '355353', '1', 'landlord', 'Polaris Bank Limited', '0267181815', 'verified', 'f9df6080f7da4baaf1a91b6ad56c3226', '2020-12-29 11:58:10', '700'),
(9, 'DotLnd153', 'Dot Housing', 'Dot EightInc', 'doteightinc@outlook.co', 'Male', '53c1df01e11ec01bcf9ced4ccae8c667', '5657755', '1', 'agent', 'Keystone Bank Limited', '0267181815', '', '475bed278ab59a6cf9f31fed6835ac2b', '2020-12-30 12:21:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_his`
--

CREATE TABLE `wallet_his` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `amt` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_reply`
--
ALTER TABLE `support_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `wallet_his`
--
ALTER TABLE `wallet_his`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `support_reply`
--
ALTER TABLE `support_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallet_his`
--
ALTER TABLE `wallet_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
