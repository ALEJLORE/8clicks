-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 12:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkwfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appconfig`
--

CREATE TABLE `tbl_appconfig` (
  `id` int(11) NOT NULL,
  `setting` mediumtext NOT NULL,
  `value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--

CREATE TABLE `tbl_bandwidth` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_bw` varchar(255) NOT NULL,
  `rate_down` int(10) UNSIGNED NOT NULL,
  `rate_down_unit` enum('Kbps','Mbps') NOT NULL,
  `rate_up` int(10) UNSIGNED NOT NULL,
  `rate_up_unit` enum('Kbps','Mbps') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `tbl_customers` (
  `id` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `pppoe_password` varchar(45) NOT NULL DEFAULT '',
  `fullname` varchar(45) NOT NULL,
  `address` mediumtext DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT '0',
  `email` varchar(128) NOT NULL DEFAULT '1',
  `balance` decimal(15,2) NOT NULL DEFAULT 0.00 COMMENT 'For Money Deposit',
  `auto_renewal` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Auto renewal from balance',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `tbl_customers_meta` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `meta_key` varchar(64) NOT NULL DEFAULT '',
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `tbl_logs` (
  `id` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `tbl_message` (
  `id` int(10) NOT NULL,
  `from_user` varchar(32) NOT NULL,
  `to_user` varchar(32) NOT NULL,
  `title` varchar(60) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_gateway`
--

CREATE TABLE `tbl_payment_gateway` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `gateway` varchar(32) NOT NULL COMMENT 'xendit | midtrans',
  `gateway_trx_id` varchar(64) NOT NULL DEFAULT '',
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(40) NOT NULL,
  `routers_id` int(11) NOT NULL,
  `routers` varchar(32) NOT NULL,
  `price` varchar(40) NOT NULL,
  `pg_url_payment` varchar(256) NOT NULL DEFAULT '',
  `payment_method` varchar(32) NOT NULL DEFAULT '',
  `payment_channel` varchar(32) NOT NULL DEFAULT '',
  `pg_request` text DEFAULT NULL,
  `pg_paid_response` text DEFAULT NULL,
  `expired_date` datetime DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `paid_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 unpaid 2 paid 3 failed 4 canceled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Table structure for table `tbl_plans`
--

CREATE TABLE `tbl_plans` (
  `id` int(10) NOT NULL,
  `name_plan` varchar(40) NOT NULL,
  `id_bw` int(10) NOT NULL,
  `price` varchar(40) NOT NULL,
  `type` enum('Hotspot','PPPOE') NOT NULL,
  `typebp` enum('Unlimited','Limited') DEFAULT NULL,
  `limit_type` enum('Time_Limit','Data_Limit','Both_Limit') DEFAULT NULL,
  `time_limit` int(10) UNSIGNED DEFAULT NULL,
  `time_unit` enum('Mins','Hrs') DEFAULT NULL,
  `data_limit` int(10) UNSIGNED DEFAULT NULL,
  `data_unit` enum('MB','GB') DEFAULT NULL,
  `validity` int(10) NOT NULL,
  `validity_unit` enum('Mins','Hrs','Days','Months') NOT NULL,
  `shared_users` int(10) DEFAULT NULL,
  `routers` varchar(32) NOT NULL,
  `pool` varchar(40) DEFAULT NULL,
  `pool_expired` varchar(40) DEFAULT '',
  `enabled` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 disabled\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `tbl_pool` (
  `id` int(10) NOT NULL,
  `pool_name` varchar(40) NOT NULL,
  `range_ip` varchar(40) NOT NULL,
  `routers` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_routers`
--

CREATE TABLE `tbl_routers` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `ip_address` varchar(128) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `description` varchar(256) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(10) NOT NULL,
  `invoice` varchar(25) NOT NULL,
  `username` varchar(32) NOT NULL,
  `plan_name` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `recharged_on` date NOT NULL,
  `recharged_time` time NOT NULL DEFAULT '00:00:00',
  `expiration` date NOT NULL,
  `time` time NOT NULL,
  `method` varchar(128) NOT NULL,
  `routers` varchar(32) NOT NULL,
  `type` enum('Hotspot','PPPOE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-
--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `fullname` varchar(45) NOT NULL DEFAULT '',
  `password` mediumtext NOT NULL,
  `user_type` enum('Admin','Sales') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `creationdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `fullname`, `password`, `user_type`, `status`, `last_login`, `creationdate`) VALUES
(1, 'admin', 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'Active', '2023-09-17 17:53:54', '2014-06-23 01:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_recharges`
--

CREATE TABLE `tbl_user_recharges` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `namebp` varchar(40) NOT NULL,
  `recharged_on` date NOT NULL,
  `recharged_time` time NOT NULL DEFAULT '00:00:00',
  `expiration` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `method` varchar(128) NOT NULL,
  `routers` varchar(32) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `id` int(10) NOT NULL,
  `type` enum('Hotspot','PPPOE') NOT NULL,
  `routers` varchar(32) NOT NULL,
  `id_plan` int(10) NOT NULL,
  `code` varchar(55) NOT NULL,
  `user` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--

--
-- Indexes for table `tbl_appconfig`
--
ALTER TABLE `tbl_appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bandwidth`
--
ALTER TABLE `tbl_bandwidth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers_meta`
--
ALTER TABLE `tbl_customers_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_gateway`
--
ALTER TABLE `tbl_payment_gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pool`
--
ALTER TABLE `tbl_pool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_routers`
--
ALTER TABLE `tbl_routers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_recharges`
--
ALTER TABLE `tbl_user_recharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_voucher`
--
ALTER TABLE `tbl_voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appconfig`
--
ALTER TABLE `tbl_appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_bandwidth`
--
ALTER TABLE `tbl_bandwidth`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_customers_meta`
--
ALTER TABLE `tbl_customers_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment_gateway`
--
ALTER TABLE `tbl_payment_gateway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pool`
--
ALTER TABLE `tbl_pool`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_routers`
--
ALTER TABLE `tbl_routers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_recharges`
--
ALTER TABLE `tbl_user_recharges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_voucher`
--
ALTER TABLE `tbl_voucher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
