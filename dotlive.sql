-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 05:40 AM
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
  `expiry` datetime NOT NULL,
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

INSERT INTO `ads` (`id`, `sn`, `ads_id`, `tagline`, `descrip`, `file`, `user`, `date`, `expiry`, `duration`, `price`, `session`, `tel`, `link`, `target`, `click`) VALUES
(10, '1', 'DotLive-Ads799', 'Solar Panel', 'Get cheap solar for just NGN25,000', 'compl.jpg', 'doteightinc@outlook.com', '2021-01-04 12:14:13', '2021-01-06 12:14:13', 'A Day', '500', 'expired', '355353', 'https://doteightplus.com/contact', 'Abubakar Tafawa Balewa University, Bauchi', '0'),
(11, '1', 'DotLive-Ads369', 'Vintage Homes', 'We decorate the interior space of your room', 'dotmonday.jpg', 'doteightinc@outlook.com', '2021-01-04 01:05:23', '2021-01-06 01:05:23', 'A Day', '500', 'expired', '355353', 'https://doteightplus.com/contact', 'Abubakar Tafawa Balewa University, Bauchi', '0'),
(14, '1', 'DotLive-Ads467', 'Vintage Homes', 'vintage home at your service', 'dotmonday.jpg', 'doteightinc@outlook.com', '2021-01-04 02:21:49', '2021-02-04 02:21:49', 'A Month', '14000', 'expired', '355353', 'https://doteightplus.com/contact', 'Abubakar Tafawa Balewa University, Bauchi', '1');

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
  `toilet` text NOT NULL,
  `status` text NOT NULL,
  `uploader` text NOT NULL,
  `tel` text NOT NULL,
  `acct` text NOT NULL,
  `bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`id`, `sn`, `apt`, `apartment`, `pix`, `location`, `state`, `description`, `price`, `water`, `power`, `toilet`, `status`, `uploader`, `tel`, `acct`, `bank`) VALUES
(7, '1', 'DotLive-61', 'Self-Contain', '1.jpg', 'Ikole', 'Abubakar Tafawa Balewa University, Bauchi', 'no more hustle jawe', '40000', 'Borehole', 'PHCN', 'Pit Toilet', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(8, '1', 'DotLive-39', 'Self-Contain', 'dd-Recovered.jpg', 'Ikole', 'Abubakar Tafawa Balewa University, Bauchi', 'rooms are available', '87000', 'Borehole', 'PHCN', 'Public Toilet', 'pending', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(9, '1', 'DotLive-672', 'Self-Contain', '3.jpg', 'Ikole', 'Abuja', 'rooms are available', '40000', 'Borehole', 'PHCN', 'Pit Toilet', 'pending', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(11, '1', 'DotLive-994', 'Room', 'Untitled-1.jpg', 'Ikole', 'Abuja', 'rooms are available', '30000', 'Well', 'PHCN', 'Pit Toilet', 'available', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited'),
(12, '1', 'DotLive-555', 'Family House', 'dotmonday.jpg', 'ilaro', 'Ekiti', 'rooms are available', '15000', 'Borehole', 'PHCN', 'Pit Toilet', 'pending', 'doteightinc@outlook.com', '355353', '0267181815', 'Polaris Bank Limited');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `apt` text NOT NULL,
  `type` text NOT NULL,
  `pix` text NOT NULL,
  `paydate` datetime NOT NULL,
  `expiry` text NOT NULL,
  `tenantmail` text NOT NULL,
  `tenanttel` text NOT NULL,
  `tranref` text NOT NULL,
  `price` text NOT NULL,
  `uploader` text NOT NULL,
  `status` text NOT NULL,
  `pendlimit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `sn`, `apt`, `type`, `pix`, `paydate`, `expiry`, `tenantmail`, `tenanttel`, `tranref`, `price`, `uploader`, `status`, `pendlimit`) VALUES
(16, '1', 'DotLive-555', 'Family House', 'dotmonday.jpg', '2021-01-10 07:27:11', '2022-01-10', 'Greatnessabolade@gmail.com', '03232323', 'DLAPT-20217529079', '15000', 'doteightinc@outlook.com', 'pending', 'Sun, Jan 17, 2021'),
(17, '1', 'DotLive-672', 'Self-Contain', '3.jpg', '2021-01-11 05:48:21', '2022-01-11', 'Greatnessabolade@gmail.com', '03232323', 'DLAPT-202112734220', '40000', 'doteightinc@outlook.com', 'pending', 'Mon, Jan 18, 2021'),
(18, '1', 'DotLive-39', 'Self-Contain', 'dd-Recovered.jpg', '2021-01-11 06:02:05', '2022-01-11', 'Greatnessabolade@gmail.com', '03232323', 'DLAPT-202120031344', '87000', 'doteightinc@outlook.com', 'pending', 'Mon, Jan 18, 2021');

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

--
-- Dumping data for table `support_reply`
--

INSERT INTO `support_reply` (`id`, `sn`, `ref`, `msg`, `other`, `date`, `usname`, `via`, `status`) VALUES
(132, '0', 'DSPR-44786', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Mon, Jan 10, 2022</b>', '', '2021-01-10 07:27:11', 'Greatnessabolade@gmail.com', '', 'read'),
(133, '0', 'DSPR-53971', 'Hi there, <br> your apartment with suite number <b>DotLive-555</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-01-10 07:27:11', 'doteightinc@outlook.com', '', 'read'),
(134, '0', 'DSPR-80046', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Tue, Jan 11, 2022</b>', '', '2021-01-11 05:48:21', 'Greatnessabolade@gmail.com', '', 'read'),
(135, '1', 'DSPR-63640', 'Hi there, <br> your apartment with suite number <b>DotLive-672</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-01-11 05:48:21', 'doteightinc@outlook.com', '', 'unread'),
(136, '0', 'DSPR-17303', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Tue, Jan 11, 2022</b>', '', '2021-01-11 06:02:05', 'Greatnessabolade@gmail.com', '', 'read'),
(137, '1', 'DSPR-58138', 'Hi there, <br> your apartment with suite number <b>DotLive-39</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-01-11 06:02:05', 'doteightinc@outlook.com', '', 'unread');

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
  `wallet` text NOT NULL,
  `tempwallet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `id`, `agtbiz`, `name`, `email`, `gender`, `pword`, `tel`, `active`, `category`, `bank`, `acct`, `nin`, `activator`, `lstseen`, `wallet`, `tempwallet`) VALUES
(11, 'DotLnd366', '', 'Abolade Greatness', 'doteightinc@outlook.com', 'Male', '548b8a698396d01a24b4a85518075673', '6464644', '1', 'landlord', 'Guaranty Trust Bank Plc', '0267181815', '', '', '2021-01-08 06:45:47', '283000', '187000'),
(15, 'DotL38', '', 'Abolade Greatness', 'Greatnessabolade@gmail.com', 'Male', '5668eca6cce28dbd64d888303dd7fb60', '03232323', '1', 'user', '', '', '', '', '0000-00-00 00:00:00', '236000', '244000'),
(17, 'DotAgt596', 'DotEightPlus', 'Abolade Greatness', 'Greatnessabolade@gmail.co', 'Male', '5668eca6cce28dbd64d888303dd7fb60', '03232323', '1', 'agent', 'Guaranty Trust Bank Plc', '0267181815', '', '', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_his`
--

CREATE TABLE `wallet_his` (
  `id` int(11) NOT NULL,
  `transref` text NOT NULL,
  `user` text NOT NULL,
  `amt` text NOT NULL,
  `date` text NOT NULL,
  `details` text NOT NULL,
  `status` text NOT NULL,
  `mode` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet_his`
--

INSERT INTO `wallet_his` (`id`, `transref`, `user`, `amt`, `date`, `details`, `status`, `mode`, `type`) VALUES
(20, 'DLAPT-20217529079', 'Greatnessabolade@gmail.com', '15000', '2021-01-10 07:27:11', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(21, 'DLAPT-202112734220', 'Greatnessabolade@gmail.com', '40000', '2021-01-11 05:48:21', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(22, 'DLAPT-202120031344', 'Greatnessabolade@gmail.com', '87000', '2021-01-11 06:02:05', 'Apartment Rent', 'pending', 'wallet', 'debit');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `support_reply`
--
ALTER TABLE `support_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wallet_his`
--
ALTER TABLE `wallet_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
