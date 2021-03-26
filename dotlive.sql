-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 11:50 AM
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
(15, '1', 'DotLive-Ads884', 'Solar Panel', 'Solar Panel avaiable', 'LKZ_5905.jpg', 'Greatnessabolade@doteightplus.com', '2021-03-12 09:31:56', '2021-03-19 09:31:56', 'A Week', '3000', 'expired', '08103171902', 'https://wa.me/234810311902', 'Abubakar Tafawa Balewa University, Bauchi', '2'),
(16, '1', 'DotLive-Ads874', 'Ads testrun', 'nbxznxnx', 'Build with Babs.jpg', 'Greatnessabolade@doteightplus.com', '2021-03-13 10:51:30', '2021-03-14 10:51:30', 'A Day', '500', 'expired', '08103171902', 'snsnsnxnxnx', 'Abubakar Tafawa Balewa University, Bauchi', '2');

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
(14, '1', 'DotLive-306', 'Self-Contain', 'Build with Babs.jpg', 'sdsdsdsd', 'Abubakar Tafawa Balewa University, Bauchi', 'sxcxcxc', '40000', 'Borehole', 'PHCN', 'Pit Toilet', 'pending', 'Greatnessabolade@doteightplus.com', '08103171902', '0267181815', 'Guaranty Trust Bank Plc'),
(15, '1', 'DotLive-510', 'Room', 'Shows-Like-Friends-Netflix.jpg', 'Ikole', 'Abubakar Tafawa Balewa University, Bauchi', 'IKole hostel now available', '120000', 'Well', 'Solar Station', 'Water Closet', 'pending', 'Greatnessabolade@doteightplus.com', '08103171902', '0267181815', 'Guaranty Trust Bank Plc'),
(16, '1', 'DotLive-52', 'Self-Contain', 'unnamed.jpg', 'Akure', 'Federal University of Technology, Akure', 'Ondo Hills', '19000', 'Borehole', 'PHCN', 'Pit Toilet', 'pending', 'Greatnessabolade@doteightplus.com', '08103171902', '0267181815', 'Guaranty Trust Bank Plc');

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
(19, '1', 'DotLive-306', 'Self-Contain', 'Build with Babs.jpg', '2021-03-13 10:59:26', '2022-03-13', 'doteightinc@outlook.com', '233322', 'DLAPT-202130481394', '40000', 'Greatnessabolade@doteightplus.com', 'pending', 'Sat, Mar 20, 2021'),
(20, '1', 'DotLive-52', 'Self-Contain', 'unnamed.jpg', '2021-03-13 11:26:06', '2022-03-13', 'doteightinc@outlook.com', '233322', 'DLAPT-202174436852', '19000', 'Greatnessabolade@doteightplus.com', 'pending', 'Sat, Mar 20, 2021'),
(21, '1', 'DotLive-510', 'Room', 'Shows-Like-Friends-Netflix.jpg', '2021-03-13 11:35:16', '2022-03-13', 'doteightinc@outlook.com', '233322', 'DLAPT-202131030238', '120000', 'Greatnessabolade@doteightplus.com', 'pending', 'Sat, Mar 20, 2021'),
(22, '1', 'DotLive-306', 'Self-Contain', 'Build with Babs.jpg', '2021-03-13 11:37:42', '2022-03-13', 'doteightinc@outlook.com', '233322', 'DLAPT-202146708038', '40000', 'Greatnessabolade@doteightplus.com', 'pending', 'Sat, Mar 20, 2021'),
(23, '1', 'DotLive-306', 'Self-Contain', 'Build with Babs.jpg', '2021-03-13 11:43:40', '2022-03-13', 'doteightinc@outlook.com', '233322', 'DLAPT-202134866353', '40000', 'Greatnessabolade@doteightplus.com', 'pending', 'Sat, Mar 20, 2021');

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
('1', 27, '8965205', 'doteightinc@outlook.com', '                      \r\n                    \r\n                    ', '2021-03-23 02-58-39pm', 'Open'),
('1', 28, '9017344', 'doteightinc@outlook.com', '\r\n\r\n                    ', '2021-03-23 03-01-01pm', 'Open');

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
(138, '0', 'DSPR-56753', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Sun, Mar 13, 2022</b>', '', '2021-03-13 10:59:26', 'doteightinc@outlook.com', '', 'read'),
(139, '1', 'DSPR-38911', 'Hi there, <br> your apartment with suite number <b>DotLive-306</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-03-13 10:59:26', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(140, '0', 'DSPR-66671', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Sun, Mar 13, 2022</b>', '', '2021-03-13 11:26:06', 'doteightinc@outlook.com', '', 'read'),
(141, '1', 'DSPR-56152', 'Hi there, <br> your apartment with suite number <b>DotLive-52</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-03-13 11:26:06', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(142, '0', 'DSPR-62510', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Sun, Mar 13, 2022</b>', '', '2021-03-13 11:35:16', 'doteightinc@outlook.com', '', 'read'),
(143, '1', 'DSPR-70547', 'Hi there, <br> your apartment with suite number <b>DotLive-510</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-03-13 11:35:16', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(144, '1', 'DSPR-4435', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Sun, Mar 13, 2022</b>', '', '2021-03-13 11:37:42', 'doteightinc@outlook.com', '', 'unread'),
(145, '1', 'DSPR-35723', 'Hi there, <br> your apartment with suite number <b>DotLive-306</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-03-13 11:37:42', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(146, '1', 'DSPR-87131', 'Hi there, <br> you just rented an apartment.<br/>Kindly check your transaction history for details.<br/> Your rent will be due by <b>Sun, Mar 13, 2022</b>', '', '2021-03-13 11:43:40', 'doteightinc@outlook.com', '', 'unread'),
(147, '1', 'DSPR-697', 'Hi there, <br> your apartment with suite number <b>DotLive-306</b> has been scheduled for rentage.<br/>Kindly check your apartment store for details.', '', '2021-03-13 11:43:40', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(148, '1', 'DSPR-22978', 'Hi there, <br> your ad(s) with Ads ID :- <b>DotLive-Ads874</b> and Ads Tagline - <b>Ads testrun</b>  got expired. Kindly check your ads center for details.', '', '2021-03-16 00:00:00', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(149, '1', 'DSPR-31075', 'Hi there, <br> your ad(s) with Ads ID :- <b>DotLive-Ads884</b> and Ads Tagline - <b>Solar Panel</b>  got expired. Kindly check your ads center for details.', '', '2021-03-19 00:00:00', 'Greatnessabolade@doteightplus.com', '', 'unread'),
(150, '1', '', '', '', '0000-00-00 00:00:00', '', '', 'unread'),
(151, '1', '', '', '', '0000-00-00 00:00:00', '', '', 'unread'),
(152, '1', '', '', '', '0000-00-00 00:00:00', '', '', 'unread');

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
(19, 'DotLnd126', '', 'Abolade Greatness', 'Greatnessabolade@doteightplus.com', 'Male', 'd8578edf8458ce06fbc5bb76a58c5ca4', '08103171902', '1', 'landlord', 'Guaranty Trust Bank Plc', '0267181815', '', '', '2021-03-13 10:56:15', '996500', ''),
(20, 'DotL314', '', 'Ronald Samuel', 'doteightinc@outlook.com', 'Male', '53c1df01e11ec01bcf9ced4ccae8c667', '233322', '1', 'user', '', '', '', '', '2021-03-23 09:33:08', '741000', '259000');

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
(23, 'DLADS-202119223381', 'Greatnessabolade@doteightplus.com', '997000', '2021-03-12', 'Ads Payment', 'paid', 'wallet', 'debit'),
(24, 'DLADS-202146307992', 'Greatnessabolade@doteightplus.com', '996500', '2021-03-13', 'Ads Payment', 'paid', 'wallet', 'debit'),
(25, 'DLAPT-202130481394', 'doteightinc@outlook.com', '40000', '2021-03-13 10:59:26', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(26, 'DLAPT-202174436852', 'doteightinc@outlook.com', '19000', '2021-03-13 11:26:06', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(27, 'DLAPT-202131030238', 'doteightinc@outlook.com', '120000', '2021-03-13 11:35:16', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(28, 'DLAPT-202146708038', 'doteightinc@outlook.com', '40000', '2021-03-13 11:37:42', 'Apartment Rent', 'pending', 'wallet', 'debit'),
(29, 'DLAPT-202134866353', 'doteightinc@outlook.com', '40000', '2021-03-13 11:43:40', 'Apartment Rent', 'pending', 'wallet', 'debit');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `support_reply`
--
ALTER TABLE `support_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wallet_his`
--
ALTER TABLE `wallet_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
