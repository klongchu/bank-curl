-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2016 at 10:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2016_w18_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `admin_company` int(11) NOT NULL,
  `supplier_company` int(11) NOT NULL,
  `class_price` int(10) NOT NULL,
  `class_user` int(10) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `nick_name` varchar(80) NOT NULL,
  `owner` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `company`, `status`, `admin_company`, `supplier_company`, `class_price`, `class_user`, `full_name`, `nick_name`, `owner`) VALUES
(1, 'admin', 'admin', 'Admin', 0, 0, 0, 0, 1, 'Admin', 'Admin', 0),
(2, 'test123456', 'test123456', 'test', 1, 0, 0, 0, 2, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id` int(10) NOT NULL,
  `bank_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bank_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bank_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bank_partner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `ip` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `balance` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(10) NOT NULL,
  `bank_id` int(10) NOT NULL,
  `ip` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `balance` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history_bank`
--

CREATE TABLE `tbl_history_bank` (
  `id` int(10) NOT NULL,
  `bank_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bank_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bank_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bank_partner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `ip` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `balance` double NOT NULL,
  `bank_id` int(10) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webconfig`
--

CREATE TABLE `tbl_webconfig` (
  `id` int(6) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dev_by` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title_member` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_search` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `title_search_des` text COLLATE utf8_unicode_ci NOT NULL,
  `amount_per_day` int(10) NOT NULL DEFAULT '30',
  `topup_50` int(10) NOT NULL DEFAULT '500',
  `topup_90` int(10) NOT NULL DEFAULT '900',
  `topup_150` int(10) NOT NULL DEFAULT '1500',
  `topup_300` int(10) NOT NULL DEFAULT '3000',
  `topup_500` int(10) NOT NULL DEFAULT '5000',
  `topup_1000` int(10) NOT NULL DEFAULT '10000',
  `title_bar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_add` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_post` text COLLATE utf8_unicode_ci NOT NULL,
  `webstats` text COLLATE utf8_unicode_ci NOT NULL,
  `title_type` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `title_descript` text COLLATE utf8_unicode_ci NOT NULL,
  `fav` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title_vip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_top` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `vip_rule` text COLLATE utf8_unicode_ci NOT NULL,
  `start_open` datetime NOT NULL,
  `sms_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sms_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sms_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sms_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_webconfig`
--

INSERT INTO `tbl_webconfig` (`id`, `title`, `keyword`, `description`, `icon`, `about`, `contact`, `phone`, `email`, `facebook`, `google`, `twitter`, `dev_by`, `logo`, `title_member`, `title_search`, `title_search_des`, `amount_per_day`, `topup_50`, `topup_90`, `topup_150`, `topup_300`, `topup_500`, `topup_1000`, `title_bar`, `title_add`, `title_post`, `webstats`, `title_type`, `title_descript`, `fav`, `title_vip`, `title_top`, `vip_rule`, `start_open`, `sms_username`, `sms_password`, `sms_type`, `sms_title`) VALUES
(1, 'Checker Bankings', 'Checker Bankings', 'Checker Bankings', 'icon', '', '', '', '', '', '', '', 'Checker Bankings', '1.png', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '1.ico', '', '', '', '0000-00-00 00:00:00', 'aa', 'aa', 'premium', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history_bank`
--
ALTER TABLE `tbl_history_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webconfig`
--
ALTER TABLE `tbl_webconfig`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_history_bank`
--
ALTER TABLE `tbl_history_bank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_webconfig`
--
ALTER TABLE `tbl_webconfig`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
