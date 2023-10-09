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
-- Dumping data for table `tbl_appconfig`
--

INSERT INTO `tbl_appconfig` (`id`, `setting`, `value`) VALUES
(1, 'CompanyName', 'TKSSC'),
(2, 'currency_code', 'PHP'),
(3, 'language', 'english'),
(4, 'show-logo', '1'),
(5, 'nstyle', 'blue'),
(6, 'timezone', 'Asia/Manila'),
(7, 'dec_point', '.'),
(8, 'thousands_sep', ','),
(9, 'rtl', '0'),
(10, 'address', 'Caloocan City'),
(11, 'phone', '639760517164'),
(12, 'date_format', 'd M Y'),
(13, 'note', 'Thank you...'),
(14, 'country_code_phone', '63'),
(15, 'payment_gateway', 'xendit'),
(16, 'http_proxy', ''),
(17, 'http_proxyauth', ''),
(18, 'CompanyFooter', 'TKSSC'),
(19, 'disable_voucher', 'no'),
(20, 'enable_balance', 'yes'),
(21, 'allow_balance_transfer', 'yes'),
(22, 'minimum_transfer', '10'),
(23, 'telegram_bot', '6661779585:AAEudGvMJEzVouJWVn-9imCJ8qrb35P7Yds'),
(24, 'telegram_target_id', '6336134031'),
(25, 'sms_url', ''),
(26, 'wa_url', ''),
(27, 'user_notification_expired', 'sms'),
(28, 'user_notification_reminder', 'sms'),
(29, 'user_notification_payment', 'sms'),
(30, 'tawkto', ''),
(31, 'radius_mode', '0'),
(32, 'xendit_secret_key', 'xnd_production_Gm9UG4xhzIfGc5zFtEZONr0YFGfd9qa4HMvtyKpHF527FYuPFUewKT25LdaV7x8'),
(33, 'xendit_verification_token', 'v4P9dJEFux8OcB5g2HUyC2JLombIKGjYtHQkUZXiEeQsnELd'),
(34, 'xendit_channel', 'CREDIT_CARD,PERMATA,BNI,BRI,MANDIRI,BCA,BSI,DD_BRI,DD_BCA_KLIKPAY,ALFAMART,INDOMARET,OVO,DANA,LINKAJA,SHOPEEPAY,QRIS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bandwidth`
--

CREATE TABLE `tbl_bandwidth` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_bw` varchar(255) NOT NULL,
  `rate_down` int(10) UNSIGNED NOT NULL,
  `rate_down_unit` enum('Kbps','Mbps') NOT NULL,
  `rate_up` int(10) UNSIGNED NOT NULL,
  `rate_up_unit` enum('Kbps','Mbps') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bandwidth`
--

INSERT INTO `tbl_bandwidth` (`id`, `name_bw`, `rate_down`, `rate_down_unit`, `rate_up`, `rate_up_unit`) VALUES
(6, '30MBPS', 35, 'Mbps', 35, 'Mbps');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

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

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `username`, `password`, `pppoe_password`, `fullname`, `address`, `phonenumber`, `email`, `balance`, `auto_renewal`, `created_at`, `last_login`) VALUES
(18, '639207554400', '1234', '', 'Alejandre Loresca', 'Caloocan City', '639207554400', 'alexanderloresca39@gmail.com', '0.00', 1, '2023-09-17 09:38:05', '2023-09-17 17:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers_meta`
--

CREATE TABLE `tbl_customers_meta` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `meta_key` varchar(64) NOT NULL DEFAULT '',
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `date`, `type`, `description`, `userid`, `ip`) VALUES
(26, '2023-09-17 14:57:50', 'User', '639760517164 Login Successful', 2, '127.0.0.1'),
(27, '2023-09-17 15:02:26', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(28, '2023-09-17 15:19:28', 'Admin', '[admin]: Recharge user1 [1D][PHP 15]', 1, '127.0.0.1'),
(29, '2023-09-17 15:24:37', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(30, '2023-09-17 15:24:46', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(31, '2023-09-17 15:25:17', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(32, '2023-09-17 15:25:50', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(33, '2023-09-17 15:41:16', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(34, '2023-09-17 15:45:26', 'User', '639207554400 Failed Login', 0, '127.0.0.1'),
(35, '2023-09-17 15:45:35', 'User', '639207554400 Login Successful', 17, '127.0.0.1'),
(36, '2023-09-17 16:07:17', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(37, '2023-09-17 16:10:35', 'User', '639207554400 Login Successful', 17, '127.0.0.1'),
(38, '2023-09-17 16:11:07', 'User', '639207554400 Login Successful', 17, '127.0.0.1'),
(39, '2023-09-17 16:14:49', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(40, '2023-09-17 16:23:18', 'User', '639207554400 Login Successful', 17, '127.0.0.1'),
(41, '2023-09-17 16:35:09', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(42, '2023-09-17 16:42:55', 'Admin', '[admin]: Settings Saved Successfully', 1, '127.0.0.1'),
(43, '2023-09-17 16:53:03', 'Admin', '[admin]: Delete Plan for Customer   [][PHP 0]', 1, '127.0.0.1'),
(44, '2023-09-17 16:53:06', 'Admin', '[admin]: Delete Plan for Customer   [][PHP 0]', 1, '127.0.0.1'),
(45, '2023-09-17 16:53:08', 'Admin', '[admin]: Delete Plan for Customer   [][PHP 0]', 1, '127.0.0.1'),
(46, '2023-09-17 17:38:44', 'User', '639207554400 Login Successful', 18, '127.0.0.1'),
(47, '2023-09-17 17:40:14', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(48, '2023-09-17 17:42:10', 'User', '639207554400 Login Successful', 18, '127.0.0.1'),
(49, '2023-09-17 17:45:42', 'Admin', 'admin Login Successful', 1, '127.0.0.1'),
(50, '2023-09-17 17:53:54', 'Admin', 'admin Login Successful', 1, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

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
-- Dumping data for table `tbl_payment_gateway`
--

INSERT INTO `tbl_payment_gateway` (`id`, `username`, `gateway`, `gateway_trx_id`, `plan_id`, `plan_name`, `routers_id`, `routers`, `price`, `pg_url_payment`, `payment_method`, `payment_channel`, `pg_request`, `pg_paid_response`, `expired_date`, `created_date`, `paid_date`, `status`) VALUES
(1, '639207554400', 'xendit', '6506aee9c539e263bfd05d6e', 3, '1W', 1, 'TKHOTSPOT', '50', 'https://checkout.xendit.co/v2/6506aee9c539e263bfd05d6e', 'EWALLET', 'GCASH', '{\"id\":\"6506aee9c539e263bfd05d6e\",\"external_id\":\"1\",\"user_id\":\"62529137806b4714df3c8548\",\"status\":\"PENDING\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":50,\"description\":\"1W\",\"expiry_date\":\"2023-09-18T07:46:49.656Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506aee9c539e263bfd05d6e\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/1\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/1\\/check\",\"created\":\"2023-09-17T07:46:50.358Z\",\"updated\":\"2023-09-17T07:46:50.358Z\",\"currency\":\"PHP\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '{\"id\":\"6506aee9c539e263bfd05d6e\",\"external_id\":\"1\",\"user_id\":\"62529137806b4714df3c8548\",\"payment_method\":\"EWALLET\",\"status\":\"PAID\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":50,\"paid_amount\":50,\"paid_at\":\"2023-09-17T07:47:21.084Z\",\"description\":\"1W\",\"expiry_date\":\"2023-09-18T07:46:49.656Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506aee9c539e263bfd05d6e\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/1\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/1\\/check\",\"created\":\"2023-09-17T07:46:50.358Z\",\"updated\":\"2023-09-17T07:49:01.308Z\",\"currency\":\"PHP\",\"payment_channel\":\"GCASH\",\"payment_id\":\"ewc_1b552eff-d8e0-4db1-8aa6-a798876fc55d\",\"payment_method_id\":\"pm-daf3983d-765f-4ea4-b4b1-a5cc0e20afd7\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '2023-09-18 15:46:49', '2023-09-17 15:46:47', '2023-09-17 15:49:01', 2),
(2, '639207554400', 'xendit', '6506b7e7b74512744fb017bb', 1, '1H', 1, 'TKHOTSPOT', '10', 'https://checkout.xendit.co/v2/6506b7e7b74512744fb017bb', 'EWALLET', 'GCASH', '{\"id\":\"6506b7e7b74512744fb017bb\",\"external_id\":\"2\",\"user_id\":\"62529137806b4714df3c8548\",\"status\":\"PENDING\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":10,\"description\":\"1H\",\"expiry_date\":\"2023-09-18T08:25:11.578Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506b7e7b74512744fb017bb\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/2\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/2\\/check\",\"created\":\"2023-09-17T08:25:12.132Z\",\"updated\":\"2023-09-17T08:25:12.132Z\",\"currency\":\"PHP\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '{\"id\":\"6506b7e7b74512744fb017bb\",\"external_id\":\"2\",\"user_id\":\"62529137806b4714df3c8548\",\"payment_method\":\"EWALLET\",\"status\":\"PAID\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":10,\"paid_amount\":10,\"paid_at\":\"2023-09-17T08:25:22.367Z\",\"description\":\"1H\",\"expiry_date\":\"2023-09-18T08:25:11.578Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506b7e7b74512744fb017bb\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/2\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/2\\/check\",\"created\":\"2023-09-17T08:25:12.132Z\",\"updated\":\"2023-09-17T08:27:54.922Z\",\"currency\":\"PHP\",\"payment_channel\":\"GCASH\",\"payment_id\":\"ewc_5291ca80-8468-4672-8481-b10fbebcb4ae\",\"payment_method_id\":\"pm-cc494153-fe7f-4137-ac7a-572c66ce0459\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '2023-09-18 16:25:11', '2023-09-17 16:25:09', '2023-09-17 16:27:54', 2),
(3, '639207554400', 'xendit', '6506ca0006ce3f877a506f8a', 23, 'TKHOTSPOT', 1, 'TKHOTSPOT', '10', 'https://checkout.xendit.co/v2/6506ca0006ce3f877a506f8a', 'EWALLET', 'GCASH', '{\"id\":\"6506ca0006ce3f877a506f8a\",\"external_id\":\"3\",\"user_id\":\"62529137806b4714df3c8548\",\"status\":\"PENDING\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":10,\"description\":\"TKHOTSPOT\",\"expiry_date\":\"2023-09-18T09:42:24.684Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506ca0006ce3f877a506f8a\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/3\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/3\\/check\",\"created\":\"2023-09-17T09:42:25.425Z\",\"updated\":\"2023-09-17T09:42:25.425Z\",\"currency\":\"PHP\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '{\"id\":\"6506ca0006ce3f877a506f8a\",\"external_id\":\"3\",\"user_id\":\"62529137806b4714df3c8548\",\"payment_method\":\"EWALLET\",\"status\":\"PAID\",\"merchant_name\":\"TKSSC\",\"merchant_profile_picture_url\":\"https:\\/\\/xnd-merchant-logos.s3.amazonaws.com\\/business\\/production\\/62529137806b4714df3c8548-1649578883482.jpeg\",\"amount\":10,\"paid_amount\":10,\"paid_at\":\"2023-09-17T09:42:36.466Z\",\"description\":\"TKHOTSPOT\",\"expiry_date\":\"2023-09-18T09:42:24.684Z\",\"invoice_url\":\"https:\\/\\/checkout.xendit.co\\/v2\\/6506ca0006ce3f877a506f8a\",\"available_banks\":[],\"available_retail_outlets\":[{\"retail_outlet_name\":\"7ELEVEN\"},{\"retail_outlet_name\":\"CEBUANA\"}],\"available_ewallets\":[{\"ewallet_type\":\"PAYMAYA\"},{\"ewallet_type\":\"GRABPAY\"},{\"ewallet_type\":\"GCASH\"}],\"available_qr_codes\":[],\"available_direct_debits\":[{\"direct_debit_type\":\"DD_BPI\"},{\"direct_debit_type\":\"DD_UBP\"},{\"direct_debit_type\":\"DD_RCBC\"}],\"available_paylaters\":[],\"should_exclude_credit_card\":false,\"should_send_email\":false,\"success_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/3\\/check\",\"failure_redirect_url\":\"http:\\/\\/tkpisowifi.net\\/index.php?_route=order\\/view\\/3\\/check\",\"created\":\"2023-09-17T09:42:25.425Z\",\"updated\":\"2023-09-17T09:43:46.857Z\",\"currency\":\"PHP\",\"payment_channel\":\"GCASH\",\"payment_id\":\"ewc_79e1fab7-00dd-4f28-b951-9f0b51312446\",\"payment_method_id\":\"pm-35c49070-d546-4f53-9360-d345b59cf6d7\",\"customer\":{\"mobile_number\":\"+639207554400\"},\"customer_notification_preference\":{\"invoice_created\":[\"whatsapp\",\"sms\"],\"invoice_reminder\":[\"whatsapp\",\"sms\"],\"invoice_paid\":[\"whatsapp\",\"sms\"],\"invoice_expired\":[\"whatsapp\",\"sms\"]}}', '2023-09-18 17:42:24', '2023-09-17 17:42:22', '2023-09-17 17:43:46', 2);

-- --------------------------------------------------------

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

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `name_plan`, `id_bw`, `price`, `type`, `typebp`, `limit_type`, `time_limit`, `time_unit`, `data_limit`, `data_unit`, `validity`, `validity_unit`, `shared_users`, `routers`, `pool`, `pool_expired`, `enabled`) VALUES
(23, 'TKHOTSPOT', 6, '10', 'Hotspot', 'Unlimited', 'Time_Limit', 0, 'Hrs', 0, 'MB', 1, 'Days', 1, 'TKHOTSPOT', NULL, 'TKHOTSPOT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pool`
--

CREATE TABLE `tbl_pool` (
  `id` int(10) NOT NULL,
  `pool_name` varchar(40) NOT NULL,
  `range_ip` varchar(40) NOT NULL,
  `routers` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pool`
--

INSERT INTO `tbl_pool` (`id`, `pool_name`, `range_ip`, `routers`) VALUES
(1, 'TKHOTSPOT', '10.5.50.2-10.5.50.254', 'TKHOTSPOT'),
(2, 'TKPPPOE-POOL', '192.168.7.2-192.168.7.254', 'TKPPPOE-TGP');

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

--
-- Dumping data for table `tbl_routers`
--

INSERT INTO `tbl_routers` (`id`, `name`, `ip_address`, `username`, `password`, `description`, `enabled`) VALUES
(1, 'TKHOTSPOT', '192.168.3.247:8728', 'admin', 'Newpa55w0rd@tkssc', 'TKHOTSPOT', 1),
(3, 'TKHOTSPOT-GR3 DIRECT', '10.5.50.1:8728', 'admin', 'Newpa55w0rd@tkssc', 'TKHOTSPOT-GR3 DIRECT', 1);

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

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `invoice`, `username`, `plan_name`, `price`, `recharged_on`, `recharged_time`, `expiration`, `time`, `method`, `routers`, `type`) VALUES
(5, 'INV-35966', '639207554400', 'TKHOTSPOT', '10', '2023-09-17', '17:44:04', '2023-09-18', '17:44:04', 'xendit - GCASH', 'TKHOTSPOT', 'Hotspot');

-- --------------------------------------------------------

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

--
-- Dumping data for table `tbl_user_recharges`
--

INSERT INTO `tbl_user_recharges` (`id`, `customer_id`, `username`, `plan_id`, `namebp`, `recharged_on`, `recharged_time`, `expiration`, `time`, `status`, `method`, `routers`, `type`) VALUES
(4, 18, '639207554400', 23, 'TKHOTSPOT', '2023-09-17', '17:44:04', '2023-09-18', '17:44:04', 'on', 'xendit - GCASH', 'TKHOTSPOT', 'Hotspot');

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
-- Dumping data for table `tbl_voucher`
--

INSERT INTO `tbl_voucher` (`id`, `type`, `routers`, `id_plan`, `code`, `user`, `status`) VALUES
(23, 'Hotspot', 'TKHOTSPOT', 23, '15A86C6651BE', '0', '0'),
(24, 'Hotspot', 'TKHOTSPOT', 23, 'A3A5EA5D969F', '0', '0'),
(25, 'Hotspot', 'TKHOTSPOT', 23, 'C85C4C32DAD5', '0', '0'),
(26, 'Hotspot', 'TKHOTSPOT', 23, '26E27DC313FF', '0', '0'),
(27, 'Hotspot', 'TKHOTSPOT', 23, '07885CE4D08A', '0', '0'),
(28, 'Hotspot', 'TKHOTSPOT', 23, 'B62368FCEBF5', '0', '0'),
(29, 'Hotspot', 'TKHOTSPOT', 23, 'E6E112C600D3', '0', '0'),
(30, 'Hotspot', 'TKHOTSPOT', 23, 'EC2E52DA7785', '0', '0'),
(31, 'Hotspot', 'TKHOTSPOT', 23, 'D6953E547075', '0', '0'),
(32, 'Hotspot', 'TKHOTSPOT', 23, '898EE35DE1DC', '0', '0');

--
-- Indexes for dumped tables
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
