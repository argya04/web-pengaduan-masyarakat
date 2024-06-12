-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 09:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Super Admin'),
(2, 'Masyarakat', 'Reguler User'),
(3, 'Petugas', 'Middle User'),
(4, 'Polisi', 'Petugas Kepolisian'),
(5, 'Medis', 'Petugas Medis'),
(6, 'Damkar', 'Petugas Pemadam Kebakaran'),
(7, 'Disdikbud', 'Dinas Pendidikan dan Kebudayaan'),
(10, 'Pertamanan', 'Petugas Pertamanan'),
(11, 'Pertanian', 'Petugas Pertanian'),
(14, 'Politik', 'Petugas Politik');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(10, 1),
(11, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 4),
(1, 13),
(1, 20),
(2, 2),
(2, 9),
(2, 17),
(3, 3),
(3, 15),
(3, 16),
(4, 11),
(5, 10),
(5, 14),
(6, 12),
(7, 18),
(10, 21),
(11, 22);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 01:14:05', 1),
(2, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 01:25:52', 1),
(3, '::1', 'adm01', NULL, '2021-12-21 02:34:40', 0),
(4, '::1', 'argya02', NULL, '2021-12-21 02:34:59', 0),
(5, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:38:31', 1),
(6, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:40:47', 1),
(7, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:47:22', 1),
(8, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:47:34', 1),
(9, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:47:54', 1),
(10, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:48:19', 1),
(11, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:48:56', 1),
(12, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:49:02', 1),
(13, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:50:27', 1),
(14, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:51:39', 1),
(15, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:51:45', 1),
(16, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:52:37', 1),
(17, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 02:52:47', 1),
(18, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 02:54:13', 1),
(19, '::1', 'parahmen@gmail.com', 4, '2021-12-21 03:12:42', 1),
(20, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:15:03', 1),
(21, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:15:37', 1),
(22, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:21:46', 1),
(23, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:27:36', 1),
(24, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:33:29', 1),
(25, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:33:38', 1),
(26, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:35:56', 1),
(27, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:36:02', 1),
(28, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:36:36', 1),
(29, '::1', 'parahmen@gmail.com', 4, '2021-12-21 03:41:01', 1),
(30, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:43:48', 1),
(31, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:47:31', 1),
(32, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:48:14', 1),
(33, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:50:12', 1),
(34, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:50:50', 1),
(35, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:51:35', 1),
(36, '::1', 'kitabisa@gmail.com', 3, '2021-12-21 03:53:08', 1),
(37, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:53:38', 1),
(38, '::1', 'argyafalanr@gmail.com', 1, '2021-12-21 03:54:27', 1),
(39, '::1', 'argyafalanr@gmail.com', 1, '2021-12-22 01:55:19', 1),
(40, '::1', 'kitabisa@gmail.com', 3, '2021-12-22 01:56:43', 1),
(41, '::1', 'parahmen@gmail.com', 4, '2021-12-22 01:56:57', 1),
(42, '::1', 'argyafalanr@gmail.com', 1, '2021-12-22 03:10:16', 1),
(43, '::1', 'argyafalanr@gmail.com', 1, '2021-12-22 03:10:27', 1),
(44, '::1', 'argyafalanr@gmail.com', 1, '2021-12-26 23:54:11', 1),
(45, '::1', 'parahmen@gmail.com', 4, '2021-12-26 23:55:05', 1),
(46, '::1', 'kitabisa@gmail.com', 3, '2021-12-26 23:55:34', 1),
(47, '::1', 'kitabisa@gmail.com', 3, '2021-12-26 23:56:53', 1),
(48, '::1', 'argyafalanr@gmail.com', 1, '2021-12-26 23:56:58', 1),
(49, '::1', 'kitabisa@gmail.com', 3, '2021-12-26 23:57:16', 1),
(50, '::1', 'kitabisa@gmail.com', 3, '2021-12-26 23:57:23', 1),
(51, '::1', 'parahmen@gmail.com', 4, '2021-12-26 23:59:06', 1),
(52, '::1', 'argyafalanr@gmail.com', 1, '2021-12-26 23:59:36', 1),
(53, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:00:27', 1),
(54, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:07:12', 1),
(55, '::1', 'parahmen@gmail.com', 4, '2021-12-27 00:08:47', 1),
(56, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:10:59', 1),
(57, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:11:33', 1),
(58, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 00:11:38', 1),
(59, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:18:56', 1),
(60, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:19:00', 1),
(61, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:19:32', 1),
(62, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:20:56', 1),
(63, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:21:06', 1),
(64, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:21:10', 1),
(65, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:25:47', 1),
(66, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 00:25:59', 1),
(67, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 00:27:23', 1),
(68, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:27:32', 1),
(69, '::1', 'parahmen@gmail.com', 4, '2021-12-27 00:27:36', 1),
(70, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:32:13', 1),
(71, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 00:32:59', 1),
(72, '::1', 'parahmen@gmail.com', 4, '2021-12-27 00:34:20', 1),
(73, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 00:34:30', 1),
(74, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 03:41:55', 1),
(75, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 03:41:56', 1),
(76, '::1', 'parahmen@gmail.com', 4, '2021-12-27 03:42:04', 1),
(77, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 03:52:03', 1),
(78, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 03:54:04', 1),
(79, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 03:55:02', 1),
(80, '::1', 'parahmen@gmail.com', 4, '2021-12-27 03:57:04', 1),
(81, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 04:01:09', 1),
(82, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 04:01:33', 1),
(83, '::1', 'parahmen@gmail.com', 4, '2021-12-27 04:02:56', 1),
(84, '::1', 'parahmen@gmail.com', 4, '2021-12-27 06:53:58', 1),
(85, '::1', 'parahmen@gmail.com', 4, '2021-12-27 07:02:58', 1),
(86, '::1', 'parahmen@gmail.com', 4, '2021-12-27 07:03:02', 1),
(87, '::1', 'parahmen@gmail.com', 4, '2021-12-27 07:31:29', 1),
(88, '::1', 'parahmen@gmail.com', 4, '2021-12-27 07:31:38', 1),
(89, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:03:28', 1),
(90, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:03:42', 1),
(91, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:05:07', 1),
(92, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:06:06', 1),
(93, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 20:06:13', 1),
(94, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:06:20', 1),
(95, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:07:50', 1),
(96, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 20:08:19', 1),
(97, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:08:27', 1),
(98, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:09:42', 1),
(99, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:09:48', 1),
(100, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:10:50', 1),
(101, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:11:47', 1),
(102, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:12:16', 1),
(103, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:14:58', 1),
(104, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:15:02', 1),
(105, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:21:20', 1),
(106, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:23:28', 1),
(107, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:25:35', 1),
(108, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:26:00', 1),
(109, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:33:28', 1),
(110, '::1', 'kitabisa@gmail.com', 3, '2021-12-27 20:36:14', 1),
(111, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:39:42', 1),
(112, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:46:41', 1),
(113, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:48:47', 1),
(114, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:51:37', 1),
(115, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:55:16', 1),
(116, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:56:40', 1),
(117, '::1', 'parahmen@gmail.com', 4, '2021-12-27 20:58:13', 1),
(118, '::1', 'argyafalanr@gmail.com', 1, '2021-12-27 20:59:35', 1),
(119, '::1', 'parahmen@gmail.com', 4, '2021-12-28 02:06:44', 1),
(120, '::1', 'argyafalanr@gmail.com', 1, '2021-12-28 02:06:45', 1),
(121, '::1', 'parahmen@gmail.com', 4, '2021-12-28 02:06:51', 1),
(122, '::1', 'parahmen@gmail.com', 4, '2021-12-29 22:33:21', 1),
(123, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:33:42', 1),
(124, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:33:57', 1),
(125, '::1', 'kitabisa@gmail.com', 3, '2021-12-29 22:34:24', 1),
(126, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:37:59', 1),
(127, '::1', 'parahmen@gmail.com', 4, '2021-12-29 22:38:53', 1),
(128, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:39:27', 1),
(129, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:43:34', 1),
(130, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 22:43:50', 1),
(131, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:06:07', 1),
(132, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:10:50', 1),
(133, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:11:21', 1),
(134, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:16:32', 1),
(135, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:16:44', 1),
(136, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:17:12', 1),
(137, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:25:57', 1),
(138, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:26:52', 1),
(139, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:27:27', 1),
(140, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:31:22', 1),
(141, '::1', 'argyafalanr@gmail.com', 1, '2021-12-29 23:31:37', 1),
(142, '::1', 'kitabisa@gmail.com', 3, '2021-12-29 23:32:06', 1),
(143, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:32:15', 1),
(144, '::1', 'parahmen@gmail.com', 4, '2021-12-29 23:39:38', 1),
(145, '::1', 'kitabisa@gmail.com', 3, '2021-12-30 01:20:15', 1),
(146, '::1', 'kitabisa@gmail.com', 3, '2021-12-30 01:27:19', 1),
(147, '::1', 'kitabisa@gmail.com', 3, '2021-12-30 23:44:51', 1),
(148, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 00:01:48', 1),
(149, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 00:01:57', 1),
(150, '::1', 'argyafalanr@gmail.com', 1, '2021-12-31 01:19:28', 1),
(151, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 01:38:28', 1),
(152, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 01:46:54', 1),
(153, '::1', 'parahmen@gmail.com', 4, '2021-12-31 01:52:18', 1),
(154, '::1', 'argyafalanr@gmail.com', 1, '2021-12-31 01:52:22', 1),
(155, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 01:52:50', 1),
(156, '::1', 'argyafalanr@gmail.com', 1, '2021-12-31 02:06:45', 1),
(157, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 02:32:59', 1),
(158, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 02:33:29', 1),
(159, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 23:27:09', 1),
(160, '::1', 'argyafalanr@gmail.com', 1, '2021-12-31 23:30:58', 1),
(161, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 23:34:48', 1),
(162, '::1', 'argyafalanr@gmail.com', 1, '2021-12-31 23:38:50', 1),
(163, '::1', 'kitabisa@gmail.com', 3, '2021-12-31 23:40:01', 1),
(164, '::1', 'argya_02', NULL, '2022-01-03 21:16:31', 0),
(165, '::1', 'akunadmin144@gmail.com', 5, '2022-01-03 21:20:04', 1),
(166, '::1', 'argya02', NULL, '2022-01-03 21:21:52', 0),
(167, '::1', 'kitabisa@gmail.com', 3, '2022-01-03 21:25:07', 1),
(168, '::1', 'akunadmin144@gmail.com', 5, '2022-01-03 21:25:17', 1),
(169, '::1', 'kangadmin', NULL, '2022-01-03 21:26:41', 0),
(170, '::1', 'argya02', NULL, '2022-01-03 21:27:07', 0),
(171, '::1', 'kitabisa@gmail.com', 3, '2022-01-03 21:27:07', 1),
(172, '::1', 'argya02', NULL, '2022-01-03 21:27:15', 0),
(173, '::1', 'argyafalanr@gmail.com', 1, '2022-01-03 21:27:26', 1),
(174, '::1', 'masyarakat01', NULL, '2022-01-03 21:27:42', 0),
(175, '::1', 'masyarakat01', NULL, '2022-01-03 21:28:16', 0),
(176, '::1', 'masyarakat01', NULL, '2022-01-03 21:28:31', 0),
(177, '::1', 'masyarakat01', NULL, '2022-01-03 21:28:48', 0),
(178, '::1', 'masyarakat01', NULL, '2022-01-03 21:29:16', 0),
(179, '::1', 'masyarakat01', NULL, '2022-01-03 21:29:29', 0),
(180, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-03 21:30:22', 1),
(181, '::1', 'kitabisa@gmail.com', 3, '2022-01-03 22:48:32', 1),
(182, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-03 22:48:52', 1),
(183, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-04 01:11:18', 1),
(184, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-04 01:13:34', 1),
(185, '::1', 'kitabisa@gmail.com', 3, '2022-01-04 03:27:06', 1),
(186, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-04 03:34:15', 1),
(187, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-05 19:31:59', 1),
(188, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-05 19:32:19', 1),
(189, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-05 20:06:12', 1),
(190, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-05 20:33:04', 1),
(191, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-05 20:33:13', 1),
(192, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-06 10:30:25', 1),
(193, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-06 10:30:37', 1),
(194, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-06 14:51:30', 1),
(195, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 12:05:31', 1),
(196, '::1', 'kitabisa@gmail.com', 3, '2022-01-11 14:21:59', 1),
(197, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 14:36:19', 1),
(198, '::1', 'kitabisa@gmail.com', 3, '2022-01-11 15:43:47', 1),
(199, '::1', 'argyafalanr@gmail.com', 1, '2022-01-11 16:32:36', 1),
(200, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 16:56:05', 1),
(201, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-11 17:13:56', 1),
(202, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 17:14:17', 1),
(203, '::1', 'argyafalanr@gmail.com', 1, '2022-01-11 19:30:26', 1),
(204, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 19:30:27', 1),
(205, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-11 22:33:37', 1),
(206, '::1', 'argyafalanr@gmail.com', 1, '2022-01-11 22:34:01', 1),
(207, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-11 23:02:06', 1),
(208, '::1', 'argyafalanr@gmail.com', 1, '2022-01-11 23:03:04', 1),
(209, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-11 23:47:37', 1),
(210, '::1', 'argyafalanr@gmail.com', 1, '2022-01-12 00:03:26', 1),
(211, '::1', 'argyafalanr@gmail.com', 1, '2022-01-12 07:15:21', 1),
(212, '::1', 'kitabisa@gmail.com', 3, '2022-01-12 08:45:19', 1),
(213, '::1', 'ayamgoreng', NULL, '2022-01-13 22:06:28', 0),
(214, '::1', 'ayamgoreng', NULL, '2022-01-13 22:06:31', 0),
(215, '::1', 'ayamgoreng', NULL, '2022-01-13 22:06:37', 0),
(216, '::1', 'argyafalanr@gmail.com', 1, '2022-01-13 22:06:40', 1),
(217, '::1', 'argyafalanr@gmail.com', 1, '2022-01-13 22:06:45', 1),
(218, '::1', 'ayamgoreng', NULL, '2022-01-13 22:07:10', 0),
(219, '::1', 'argyafalanr@gmail.com', 1, '2022-01-13 22:07:21', 1),
(220, '::1', 'ayamgoreng', NULL, '2022-01-13 22:07:37', 0),
(221, '::1', 'kitabisa@gmail.com', 3, '2022-01-13 22:08:46', 1),
(222, '::1', 'argyafalanr@gmail.com', 1, '2022-01-13 22:12:03', 1),
(223, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-14 01:54:35', 1),
(224, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-14 18:29:50', 1),
(225, '::1', 'argyafalanr@gmail.com', 1, '2022-01-14 18:31:02', 1),
(226, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-14 19:47:33', 1),
(227, '::1', 'kitabisa@gmail.com', 3, '2022-01-14 19:57:15', 1),
(228, '::1', 'kitabisa@gmail.com', 3, '2022-01-14 20:55:49', 1),
(229, '::1', 'argyafalanr@gmail.com', 1, '2022-01-14 20:55:54', 1),
(230, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-14 20:56:30', 1),
(231, '::1', 'kitabisa@gmail.com', 3, '2022-01-14 21:20:30', 1),
(232, '::1', 'argyafalanr@gmail.com', 1, '2022-01-14 21:21:05', 1),
(233, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-14 21:21:12', 1),
(234, '::1', 'kitabisa@gmail.com', 3, '2022-01-14 21:21:52', 1),
(235, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 00:07:44', 1),
(236, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 00:09:34', 1),
(237, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 00:10:15', 1),
(238, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 06:48:53', 1),
(239, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 07:58:36', 1),
(240, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 08:03:04', 1),
(241, '::1', 'akunmasyarakat02@gmail.com', 6, '2022-01-15 08:09:00', 1),
(242, '::1', 'argyafalanr@gmail.com', 1, '2022-01-15 08:10:51', 1),
(243, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 08:10:56', 1),
(244, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 08:18:18', 1),
(245, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 08:26:31', 1),
(246, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 08:27:37', 1),
(247, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 09:26:18', 1),
(248, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 09:26:52', 1),
(249, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 11:36:46', 1),
(250, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 11:37:19', 1),
(251, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 11:38:25', 1),
(252, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 12:22:31', 1),
(253, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 12:22:51', 1),
(254, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 12:23:40', 1),
(255, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 12:23:57', 1),
(256, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 12:48:50', 1),
(257, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 12:51:21', 1),
(258, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 12:59:24', 1),
(259, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 13:00:04', 1),
(260, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-15 13:46:29', 1),
(261, '::1', 'kitabisa@gmail.com', 3, '2022-01-15 13:47:31', 1),
(262, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 06:17:04', 1),
(263, '::1', 'argyafalanr@gmail.com', 1, '2022-01-16 07:16:26', 1),
(264, '::1', 'argyafalanr@gmail.com', 1, '2022-01-16 07:28:02', 1),
(265, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 07:34:59', 1),
(266, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 12:55:45', 1),
(267, '::1', 'argyafalanr1@gmail.com', 8, '2022-01-16 13:13:55', 1),
(268, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 13:16:57', 1),
(269, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 17:11:00', 1),
(270, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 17:11:50', 1),
(271, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 17:21:15', 1),
(272, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 17:23:13', 1),
(273, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-16 18:13:44', 1),
(274, '::1', 'akunadmin2@gmail.com', 10, '2022-01-16 18:15:57', 1),
(275, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 18:16:14', 1),
(276, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 18:19:43', 1),
(277, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 18:20:28', 1),
(278, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 18:47:40', 1),
(279, '::1', 'kitabisa@gmail.com', 3, '2022-01-16 18:48:09', 1),
(280, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 18:56:35', 1),
(281, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-16 18:56:55', 1),
(282, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 19:00:06', 1),
(283, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 21:21:27', 1),
(284, '::1', 'akunmasyarakat01@gmail.com', 7, '2022-01-16 21:21:35', 1),
(285, '::1', 'petugas', NULL, '2022-01-24 06:51:50', 0),
(286, '::1', 'petugas', NULL, '2022-01-24 06:51:56', 0),
(287, '::1', 'petugas', NULL, '2022-01-24 06:52:03', 0),
(288, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-24 06:52:10', 1),
(289, '::1', 'akunadmin2@gmail.com', 10, '2022-01-24 07:23:05', 1),
(290, '::1', 'masyarakat001', NULL, '2022-01-24 10:20:40', 0),
(291, '::1', 'masyarakat02', NULL, '2022-01-24 10:21:10', 0),
(292, '::1', 'masyarakat02', NULL, '2022-01-24 10:21:30', 0),
(293, '::1', 'masyarakat02', NULL, '2022-01-24 10:21:44', 0),
(294, '::1', 'masyarakat02', NULL, '2022-01-24 10:21:58', 0),
(295, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-01-24 10:22:44', 1),
(296, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-01-24 10:28:52', 1),
(297, '::1', 'akunadmin2@gmail.com', 10, '2022-01-24 10:28:56', 1),
(298, '::1', 'masyarakat001', NULL, '2022-01-24 11:11:12', 0),
(299, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-01-24 11:11:15', 1),
(300, '::1', 'petugas', NULL, '2022-01-24 15:57:50', 0),
(301, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-24 15:57:55', 1),
(302, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-01-24 15:59:44', 1),
(303, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-24 16:00:52', 1),
(304, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-01-24 16:08:11', 1),
(305, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-24 16:08:57', 1),
(306, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-24 19:21:30', 1),
(307, '::1', 'akunpetugas2@gmail.com', 9, '2022-01-31 22:49:04', 1),
(308, '::1', 'akunadmin2@gmail.com', 10, '2022-01-31 22:49:18', 1),
(309, '::1', 'akunadmin2@gmail.com', 10, '2022-02-01 21:55:37', 1),
(310, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-01 21:56:04', 1),
(311, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-01 23:05:01', 1),
(312, '::1', 'kitabisa@gmail.com', 3, '2022-02-02 00:27:43', 1),
(313, '::1', 'masyarakat001', NULL, '2022-02-02 00:48:39', 0),
(314, '::1', 'ayamgoreng', NULL, '2022-02-02 00:48:50', 0),
(315, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-02 00:48:58', 1),
(316, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-02 00:49:03', 1),
(317, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-02 00:50:29', 1),
(318, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-02 09:55:11', 1),
(319, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-02 10:05:46', 1),
(320, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-02 10:07:28', 1),
(321, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-05 19:05:27', 1),
(322, '::1', 'akunadmin2@gmail.com', 10, '2022-02-05 19:08:43', 1),
(323, '::1', 'petugas', NULL, '2022-02-05 19:12:46', 0),
(324, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-05 19:12:50', 1),
(325, '::1', 'akunadmin2@gmail.com', 10, '2022-02-05 19:36:15', 1),
(326, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-05 19:49:31', 1),
(327, '::1', 'akunadmin2@gmail.com', 10, '2022-02-05 22:40:03', 1),
(328, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-05 22:43:31', 1),
(329, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-05 23:06:53', 1),
(330, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-05 23:09:18', 1),
(331, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-05 23:12:22', 1),
(332, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-05 23:55:50', 1),
(333, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-06 10:32:20', 1),
(334, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-06 11:10:26', 1),
(335, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-06 11:11:44', 1),
(336, '::1', 'kitabisa@gmail.com', 3, '2022-02-06 12:59:27', 1),
(337, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-06 13:07:31', 1),
(338, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-06 17:50:44', 1),
(339, '::1', 'akunadmin2@gmail.com', 10, '2022-02-06 17:53:29', 1),
(340, '::1', 'akunadmin2@gmail.com', 10, '2022-02-08 14:19:11', 1),
(341, '::1', 'ginger', NULL, '2022-02-08 14:19:43', 0),
(342, '::1', 'ginger', NULL, '2022-02-08 14:19:57', 0),
(343, '::1', 'akunadmin2@gmail.com', 10, '2022-02-08 20:42:10', 1),
(344, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 07:54:53', 1),
(345, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 08:04:00', 1),
(346, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 08:04:56', 1),
(347, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-09 08:30:20', 1),
(348, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-09 08:31:01', 1),
(349, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 08:32:48', 1),
(350, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-09 09:19:26', 1),
(351, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 09:21:38', 1),
(352, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 15:09:34', 1),
(353, '::1', 'akunadmin2@gmail.com', 10, '2022-02-09 20:21:40', 1),
(354, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 07:15:34', 1),
(355, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 08:43:11', 1),
(356, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 17:14:33', 1),
(357, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 17:53:03', 1),
(358, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 17:53:18', 1),
(359, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 17:58:43', 1),
(360, '::1', 'akunadmin2@gmail.com', 10, '2022-02-10 20:06:19', 1),
(361, '::1', 'petugas', NULL, '2022-02-11 07:48:33', 0),
(362, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-11 07:48:37', 1),
(363, '::1', 'akunadmin2@gmail.com', 10, '2022-02-11 09:48:35', 1),
(364, '::1', 'akunadmin2@gmail.com', 10, '2022-02-11 19:23:02', 1),
(365, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 09:38:07', 1),
(366, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-12 09:44:33', 1),
(367, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 09:45:51', 1),
(368, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 15:53:51', 1),
(369, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 18:32:15', 1),
(370, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 18:32:51', 1),
(371, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-12 18:33:03', 1),
(372, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 18:36:36', 1),
(373, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 18:36:44', 1),
(374, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-12 18:37:10', 1),
(375, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 18:37:25', 1),
(376, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 18:39:50', 1),
(377, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 18:40:01', 1),
(378, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-12 19:36:38', 1),
(379, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 19:39:12', 1),
(380, '::1', 'akunadmin2@gmail.com', 10, '2022-02-12 23:41:40', 1),
(381, '::1', 'masyarakat001', NULL, '2022-02-12 23:42:07', 0),
(382, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-12 23:42:12', 1),
(383, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 09:43:53', 1),
(384, '::1', 'masyarakat001', NULL, '2022-02-13 11:41:51', 0),
(385, '::1', 'masyarakat001', NULL, '2022-02-13 11:42:04', 0),
(386, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 11:42:06', 1),
(387, '::1', 'inimasyarakat@gmail.com', 12, '2022-02-13 11:43:27', 1),
(388, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 11:57:10', 1),
(389, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 12:00:57', 1),
(390, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 12:47:26', 1),
(391, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 12:48:34', 1),
(392, '::1', 'inimasyarakat@gmail.com', 12, '2022-02-13 13:22:10', 1),
(393, '::1', 'akunmasyarakat03@gmail.com', 11, '2022-02-13 14:00:47', 1),
(394, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-13 14:09:01', 1),
(395, '::1', 'akunpetugas2@gmail.com', 9, '2022-02-13 23:48:58', 1),
(396, '::1', 'akunadmin2@gmail.com', 10, '2022-02-13 23:49:26', 1),
(397, '::1', 'akunadmin2@gmail.com', 10, '2022-02-13 23:50:23', 1),
(398, '::1', 'akunadmin2@gmail.com', 10, '2022-02-13 23:54:58', 1),
(399, '::1', 'admin02', NULL, '2022-02-14 00:20:52', 0),
(400, '::1', 'dasdadada', NULL, '2022-02-14 00:46:38', 0),
(401, '::1', 'akunadmin2@gmail.com', 10, '2022-02-14 00:54:30', 1),
(402, '::1', 'akunadmin2@gmail.com', 10, '2022-02-14 00:54:39', 1),
(403, '::1', 'akunadmin2@gmail.com', 10, '2022-02-14 01:31:55', 1),
(404, '::1', 'akunmasyarakat04@gmail.com', 13, '2022-02-14 01:40:45', 1),
(405, '::1', 'akunmasyarakat05@gmail.com', 14, '2022-02-14 01:45:33', 1),
(406, '::1', 'masyarakat06', NULL, '2022-02-14 06:45:09', 0),
(407, '::1', 'masyarakat06', NULL, '2022-02-14 06:45:22', 0),
(408, '::1', 'akunmasyarakat05@gmail.com', 14, '2022-02-14 06:45:24', 1),
(409, '::1', 'masyarakat06', NULL, '2022-02-14 06:45:37', 0),
(410, '::1', 'akunmasyarakat06@gmail.com', 15, '2022-02-14 06:45:57', 1),
(411, '::1', 'masyarakat07@gmail.com', NULL, '2022-02-14 06:51:32', 0),
(412, '::1', 'masyarakat07@gmail.com', NULL, '2022-02-14 06:51:46', 0),
(413, '::1', 'akunmasyarakat05@gmail.com', 14, '2022-02-14 06:52:50', 1),
(414, '::1', 'masyarakat055', NULL, '2022-02-14 06:53:57', 0),
(415, '::1', 'akunmasyarakat05@gmail.com', 14, '2022-02-14 06:54:02', 1),
(416, '::1', 'admin@gmail.com', 1, '2022-02-14 07:59:17', 1),
(417, '::1', 'admin@gmail.com', 1, '2022-02-14 08:00:22', 1),
(418, '::1', 'admin@gmail.com', 1, '2022-02-14 08:04:04', 1),
(419, '::1', 'admin@gmail.com', 1, '2022-02-14 08:04:43', 1),
(420, '::1', 'nofal1313@gmail.com', 2, '2022-02-14 08:08:03', 1),
(421, '::1', 'herman0101@gmail.com', 3, '2022-02-14 08:11:09', 1),
(422, '::1', 'mikhayla0101@gmail.com', 4, '2022-02-14 08:14:27', 1),
(423, '::1', 'admin@gmail.com', 1, '2022-02-14 08:28:35', 1),
(424, '::1', 'mikhayla', NULL, '2022-02-14 08:57:42', 0),
(425, '::1', 'mikhayla0101@gmail.com', 4, '2022-02-14 08:58:02', 1),
(426, '::1', 'nofal1313@gmail.com', 2, '2022-02-14 08:59:05', 1),
(427, '::1', 'herman0101@gmail.com', 3, '2022-02-14 09:17:38', 1),
(428, '::1', 'nofal1313@gmail.com', 2, '2022-02-14 09:24:27', 1),
(429, '::1', 'herman0101@gmail.com', 3, '2022-02-14 09:52:06', 1),
(430, '::1', 'nofal1313@gmail.com', 2, '2022-02-14 09:55:58', 1),
(431, '::1', 'herman0101@gmail.com', 3, '2022-02-14 10:58:03', 1),
(432, '::1', 'admin@gmail.com', 1, '2022-02-14 16:23:35', 1),
(433, '::1', 'admin@gmail.com', 1, '2022-02-14 16:24:49', 1),
(434, '::1', 'herman0101@gmail.com', 3, '2022-02-14 16:51:01', 1),
(435, '::1', 'nofal1313@gmail.com', 2, '2022-02-14 17:03:41', 1),
(436, '::1', 'herman0101@gmail.com', 3, '2022-02-14 22:22:36', 1),
(437, '::1', 'herman0101@gmail.com', 3, '2022-02-14 22:22:56', 1),
(438, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 00:39:20', 1),
(439, '::1', 'herman0101@gmail.com', 3, '2022-02-15 07:29:54', 1),
(440, '::1', 'masyarakat', NULL, '2022-02-15 08:22:53', 0),
(441, '::1', 'nofal', NULL, '2022-02-15 08:23:04', 0),
(442, '::1', 'nofal', NULL, '2022-02-15 08:23:20', 0),
(443, '::1', 'nofal', NULL, '2022-02-15 08:24:05', 0),
(444, '::1', 'nofal', NULL, '2022-02-15 08:25:12', 0),
(445, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 08:49:06', 1),
(446, '::1', 'herman0101@gmail.com', 3, '2022-02-15 08:49:20', 1),
(447, '::1', 'herman0101@gmail.com', 3, '2022-02-15 08:56:27', 1),
(448, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:02:32', 1),
(449, '::1', 'petugas', NULL, '2022-02-15 09:03:08', 0),
(450, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:03:18', 1),
(451, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:03:56', 1),
(452, '::1', 'petugas', NULL, '2022-02-15 09:07:02', 0),
(453, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:07:16', 1),
(454, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:07:41', 1),
(455, '::1', 'admin@gmail.com', 1, '2022-02-15 09:08:33', 1),
(456, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:08:45', 1),
(457, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:08:46', 1),
(458, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:09:33', 1),
(459, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:10:27', 1),
(460, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:10:39', 1),
(461, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:12:04', 1),
(462, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:15:41', 1),
(463, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:16:09', 1),
(464, '::1', 'admin@gmail.com', 1, '2022-02-15 09:22:04', 1),
(465, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:41:10', 1),
(466, '::1', 'admin@gmail.com', 1, '2022-02-15 09:45:18', 1),
(467, '::1', 'admin@gmail.com', 1, '2022-02-15 09:45:20', 1),
(468, '::1', 'admin@gmail.com', 1, '2022-02-15 09:45:20', 1),
(469, '::1', 'admin@gmail.com', 1, '2022-02-15 09:45:21', 1),
(470, '::1', 'admin@gmail.com', 1, '2022-02-15 09:46:03', 1),
(471, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:46:24', 1),
(472, '::1', 'admin@gmail.com', 1, '2022-02-15 09:46:39', 1),
(473, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 09:51:06', 1),
(474, '::1', 'herman0101@gmail.com', 3, '2022-02-15 09:54:26', 1),
(475, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 10:11:57', 1),
(476, '::1', 'admin@gmail.com', 1, '2022-02-15 10:17:26', 1),
(477, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-15 10:24:20', 1),
(478, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-15 10:49:46', 1),
(479, '::1', 'petugas', NULL, '2022-02-15 10:50:10', 0),
(480, '::1', 'herman0101@gmail.com', 3, '2022-02-15 10:50:46', 1),
(481, '::1', 'admin@gmail.com', 1, '2022-02-15 11:52:58', 1),
(482, '::1', 'indah0101@gmail.com', 6, '2022-02-15 11:57:58', 1),
(483, '::1', 'petugas', NULL, '2022-02-15 12:01:08', 0),
(484, '::1', 'petugas', NULL, '2022-02-15 12:01:18', 0),
(485, '::1', 'herman0101@gmail.com', 3, '2022-02-15 12:01:38', 1),
(486, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-15 12:18:52', 1),
(487, '::1', 'nofal', NULL, '2022-02-15 12:26:10', 0),
(488, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 12:26:21', 1),
(489, '::1', 'admin@gmail.com', 1, '2022-02-15 14:14:57', 1),
(490, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 15:34:09', 1),
(491, '::1', 'admin', NULL, '2022-02-15 15:34:39', 0),
(492, '::1', 'admin@gmail.com', 1, '2022-02-15 15:34:48', 1),
(493, '::1', 'herman0101@gmail.com', 3, '2022-02-15 16:33:19', 1),
(494, '::1', 'herman0101@gmail.com', 3, '2022-02-15 19:04:21', 1),
(495, '::1', 'herman0101@gmail.com', 3, '2022-02-15 19:05:00', 1),
(496, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 19:41:01', 1),
(497, '::1', 'herman0101@gmail.com', 3, '2022-02-15 19:41:29', 1),
(498, '::1', 'admin@gmail.com', 1, '2022-02-15 19:50:41', 1),
(499, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-15 19:57:38', 1),
(500, '::1', 'admin@gmail.com', 1, '2022-02-15 20:01:01', 1),
(501, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 20:01:20', 1),
(502, '::1', 'herman0101@gmail.com', 3, '2022-02-15 20:30:53', 1),
(503, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 20:31:40', 1),
(504, '::1', 'admin@gmail.com', 1, '2022-02-15 20:33:03', 1),
(505, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 20:33:56', 1),
(506, '::1', 'admin@gmail.com', 1, '2022-02-15 21:23:45', 1),
(507, '::1', 'herman0101@gmail.com', 3, '2022-02-15 21:24:52', 1),
(508, '::1', 'admin@gmail.com', 1, '2022-02-15 21:42:11', 1),
(509, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:20:00', 1),
(510, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:24:19', 1),
(511, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:25:35', 1),
(512, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:26:26', 1),
(513, '::1', 'admin@gmail.com', 1, '2022-02-15 23:27:27', 1),
(514, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:28:52', 1),
(515, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-15 23:29:16', 1),
(516, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:29:32', 1),
(517, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:31:37', 1),
(518, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:37:01', 1),
(519, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:37:55', 1),
(520, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:39:26', 1),
(521, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:40:57', 1),
(522, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:41:12', 1),
(523, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:42:00', 1),
(524, '::1', 'herman0101@gmail.com', 3, '2022-02-15 23:42:58', 1),
(525, '::1', 'nofal1313@gmail.com', 2, '2022-02-15 23:44:03', 1),
(526, '::1', 'herman0101@gmail.com', 3, '2022-02-16 00:09:35', 1),
(527, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 00:10:22', 1),
(528, '::1', 'petugas', NULL, '2022-02-16 00:27:26', 0),
(529, '::1', 'herman0101@gmail.com', 3, '2022-02-16 00:27:36', 1),
(530, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 07:46:01', 1),
(531, '::1', 'herman0101@gmail.com', 3, '2022-02-16 07:49:13', 1),
(532, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 07:52:43', 1),
(533, '::1', 'herman0101@gmail.com', 3, '2022-02-16 08:35:51', 1),
(534, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 08:59:01', 1),
(535, '::1', 'herman0101@gmail.com', 3, '2022-02-16 09:00:47', 1),
(536, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 09:26:03', 1),
(537, '::1', 'herman0101@gmail.com', 3, '2022-02-16 09:44:21', 1),
(538, '::1', 'masyarakat', NULL, '2022-02-16 10:47:07', 0),
(539, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 10:47:22', 1),
(540, '::1', 'herman0101@gmail.com', 3, '2022-02-16 10:50:37', 1),
(541, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 10:52:45', 1),
(542, '::1', 'masyarakat', NULL, '2022-02-16 11:14:00', 0),
(543, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 11:14:11', 1),
(544, '::1', 'herman0101@gmail.com', 3, '2022-02-16 13:37:47', 1),
(545, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 13:45:05', 1),
(546, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 14:02:25', 1),
(547, '::1', 'herman0101@gmail.com', 3, '2022-02-16 14:06:58', 1),
(548, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 14:13:22', 1),
(549, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 14:14:28', 1),
(550, '::1', 'admin@gmail.com', 1, '2022-02-16 14:15:14', 1),
(551, '::1', 'herman0101@gmail.com', 3, '2022-02-16 14:36:18', 1),
(552, '::1', 'akunmasyarakat02@gmail.com', 5, '2022-02-16 14:36:29', 1),
(553, '::1', 'admin@gmail.com', 1, '2022-02-16 14:37:10', 1),
(554, '::1', 'nofal1313@gmail.com', 2, '2022-02-16 20:51:48', 1),
(555, '::1', 'admin@gmail.com', 1, '2022-02-16 21:57:48', 1),
(556, '::1', 'herman0101@gmail.com', 3, '2022-02-16 22:04:16', 1),
(557, '::1', 'admin@gmail.com', 1, '2022-02-16 22:05:28', 1),
(558, '::1', 'admin@gmail.com', 1, '2022-02-16 22:09:03', 1),
(559, '::1', 'herman0101@gmail.com', 3, '2022-02-16 23:23:32', 1),
(560, '::1', 'admin@gmail.com', 1, '2022-02-17 12:26:50', 1),
(561, '::1', 'admin@gmail.com', 1, '2022-02-17 12:55:44', 1),
(562, '::1', 'admin@gmail.com', 1, '2022-02-17 15:48:36', 1),
(563, '::1', 'admin@gmail.com', 1, '2022-02-17 16:37:39', 1),
(564, '::1', 'daniel', NULL, '2022-02-17 16:42:46', 0),
(565, '::1', 'daniel', NULL, '2022-02-17 16:43:03', 0),
(566, '::1', 'daniel@gmail.com', 7, '2022-02-17 16:45:56', 1),
(567, '::1', 'daniel@gmail.com', 9, '2022-02-17 16:56:29', 1),
(568, '::1', 'daniel@gmail.com', 9, '2022-02-17 18:07:53', 1),
(569, '::1', 'herman0101@gmail.com', 3, '2022-02-17 18:35:44', 1),
(570, '::1', 'daniel@gmail.com', 9, '2022-02-17 18:37:48', 1),
(571, '::1', 'herman0101@gmail.com', 3, '2022-02-17 21:33:33', 1),
(572, '::1', 'daniel@gmail.com', 9, '2022-02-18 08:04:56', 1),
(573, '::1', 'daniel@gmail.com', 9, '2022-02-18 08:05:24', 1),
(574, '::1', 'admin@gmail.com', 1, '2022-02-18 09:31:15', 1),
(575, '::1', 'daniel@gmail.com', 9, '2022-02-18 09:33:20', 1),
(576, '::1', 'daniel@gmail.com', 9, '2022-02-18 14:53:17', 1),
(577, '::1', 'herman0101@gmail.com', 3, '2022-02-18 20:13:22', 1),
(578, '::1', 'daniel@gmail.com', 9, '2022-02-18 20:16:12', 1),
(579, '::1', 'herman0101@gmail.com', 3, '2022-02-18 20:19:46', 1),
(580, '::1', 'herman0101@gmail.com', 3, '2022-02-19 07:46:37', 1),
(581, '::1', 'admin@gmail.com', 1, '2022-02-19 07:48:33', 1),
(582, '::1', 'masyarakat', NULL, '2022-02-19 13:29:15', 0),
(583, '::1', 'daniel@gmail.com', 9, '2022-02-19 13:29:23', 1),
(584, '::1', 'masyarakat02', NULL, '2022-02-19 13:32:43', 0),
(585, '::1', 'masyarakat02', NULL, '2022-02-19 13:32:59', 0),
(586, '::1', 'nofal1313@gmail.com', 2, '2022-02-19 13:33:25', 1),
(587, '::1', 'nofal1313@gmail.com', 2, '2022-02-19 16:49:58', 1),
(588, '::1', 'admin@gmail.com', 1, '2022-02-19 20:48:01', 1),
(589, '::1', 'masyarakat02', NULL, '2022-02-19 21:01:17', 0),
(590, '::1', 'daniel@gmail.com', 9, '2022-02-19 21:01:25', 1),
(591, '::1', 'herman0101@gmail.com', 3, '2022-02-19 21:02:59', 1),
(592, '::1', 'admin@gmail.com', 1, '2022-02-19 21:38:22', 1),
(593, '::1', 'daniel@gmail.com', 9, '2022-02-19 23:15:47', 1),
(594, '::1', 'masyarakat02', NULL, '2022-02-20 00:08:32', 0),
(595, '::1', 'daniel@gmail.com', 9, '2022-02-20 00:08:41', 1),
(596, '::1', 'daniel@gmail.com', 9, '2022-02-20 01:21:46', 1),
(597, '::1', 'herman0101@gmail.com', 3, '2022-02-20 01:37:43', 1),
(598, '::1', 'daniel@gmail.com', 9, '2022-02-20 02:10:18', 1),
(599, '::1', 'admin@gmail.com', 1, '2022-02-20 10:07:15', 1),
(600, '::1', 'herman0101@gmail.com', 3, '2022-02-20 10:50:25', 1),
(601, '::1', 'admin@gmail.com', 1, '2022-02-20 11:00:28', 1),
(602, '::1', 'herman0101@gmail.com', 3, '2022-02-20 11:01:26', 1),
(603, '::1', 'daniel@gmail.com', 9, '2022-02-20 11:20:47', 1),
(604, '::1', 'medis@gmail.com', 10, '2022-02-20 11:29:02', 1),
(605, '::1', 'polisi@gmail.com', 11, '2022-02-20 11:33:20', 1),
(606, '::1', 'medis@gmail.com', 10, '2022-02-20 11:37:28', 1),
(607, '::1', 'medis@gmail.com', 10, '2022-02-20 11:42:19', 1),
(608, '::1', 'polisi@gmail.com', 11, '2022-02-20 11:46:59', 1),
(609, '::1', 'damkar@gmail.com', 12, '2022-02-20 11:47:27', 1),
(610, '::1', 'medis@gmail.com', 10, '2022-02-20 12:35:07', 1),
(611, '::1', 'herman0101@gmail.com', 3, '2022-02-20 12:43:53', 1),
(612, '::1', 'daniel@gmail.com', 9, '2022-02-20 12:44:15', 1),
(613, '::1', 'herman0101@gmail.com', 3, '2022-02-20 12:44:46', 1),
(614, '::1', 'daniel@gmail.com', 9, '2022-02-20 12:45:12', 1),
(615, '::1', 'herman0101@gmail.com', 3, '2022-02-20 12:45:35', 1),
(616, '::1', 'daniel@gmail.com', 9, '2022-02-20 12:50:55', 1),
(617, '::1', 'medis@gmail.com', 10, '2022-02-20 13:02:47', 1),
(618, '::1', 'herman0101@gmail.com', 3, '2022-02-20 13:04:10', 1),
(619, '::1', 'medis@gmail.com', 10, '2022-02-20 13:05:30', 1),
(620, '::1', 'polisi@gmail.com', 11, '2022-02-20 13:17:58', 1),
(621, '::1', 'damkar@gmail.com', 12, '2022-02-20 13:32:43', 1),
(622, '::1', 'medis@gmail.com', 10, '2022-02-20 13:36:35', 1),
(623, '::1', 'medis@gmail.com', 10, '2022-02-20 14:27:10', 1),
(624, '::1', 'admin@gmail.com', 1, '2022-02-20 15:43:15', 1),
(625, '::1', 'medis@gmail.com', 10, '2022-02-20 15:48:23', 1),
(626, '::1', 'herman0101@gmail.com', 3, '2022-02-20 16:01:29', 1),
(627, '::1', 'masyarakat02', NULL, '2022-02-20 16:08:13', 0),
(628, '::1', 'masyarakat', NULL, '2022-02-20 16:08:23', 0),
(629, '::1', 'nofal1313@gmail.com', 2, '2022-02-20 16:09:30', 1),
(630, '::1', 'medis@gmail.com', 10, '2022-02-20 19:42:51', 1),
(631, '::1', 'medis@gmail.com', 10, '2022-02-20 21:38:40', 1),
(632, '::1', 'polisi@gmail.com', 11, '2022-02-20 22:39:34', 1),
(633, '::1', 'damkar@gmail.com', 12, '2022-02-20 22:53:34', 1),
(634, '::1', 'medis@gmail.com', 10, '2022-02-21 09:35:08', 1),
(635, '::1', 'admin@gmail.com', 1, '2022-02-21 09:43:52', 1),
(636, '::1', 'daniel@gmail.com', 9, '2022-02-21 10:06:09', 1),
(637, '::1', 'damkar@gmail.com', 12, '2022-02-21 10:36:41', 1),
(638, '::1', 'herman0101@gmail.com', 3, '2022-02-21 10:36:55', 1),
(639, '::1', 'daniel@gmail.com', 9, '2022-02-21 11:59:13', 1),
(640, '::1', 'daniel@gmail.com', 9, '2022-02-21 12:35:42', 1),
(641, '::1', 'medis@gmail.com', 10, '2022-02-21 13:23:19', 1),
(642, '::1', 'daniel@gmail.com', 9, '2022-02-21 13:27:55', 1),
(643, '::1', 'medis@gmail.com', 10, '2022-02-21 13:35:53', 1),
(644, '::1', 'herman0101@gmail.com', 3, '2022-02-21 13:38:42', 1),
(645, '::1', 'medis@gmail.com', 10, '2022-02-21 13:40:20', 1),
(646, '::1', 'medis@gmail.com', 10, '2022-02-21 13:44:41', 1),
(647, '::1', 'damkar@gmail.com', 12, '2022-02-21 13:45:59', 1),
(648, '::1', 'nofal1313@gmail.com', 2, '2022-02-21 13:47:58', 1),
(649, '::1', 'herman0101@gmail.com', 3, '2022-02-21 13:58:06', 1),
(650, '::1', 'nofal1313@gmail.com', 2, '2022-02-21 14:02:06', 1),
(651, '::1', 'nofal1313@gmail.com', 2, '2022-02-21 14:02:32', 1),
(652, '::1', 'herman0101@gmail.com', 3, '2022-02-21 14:03:16', 1),
(653, '::1', 'damkar@gmail.com', 12, '2022-02-21 14:04:02', 1),
(654, '::1', 'daniel@gmail.com', 9, '2022-02-21 14:42:40', 1),
(655, '::1', 'nofal1313@gmail.com', 2, '2022-02-21 14:43:19', 1),
(656, '::1', 'herman0101@gmail.com', 3, '2022-02-21 14:47:27', 1),
(657, '::1', 'polisi@gmail.com', 11, '2022-02-21 14:49:52', 1),
(658, '::1', 'nofal1313@gmail.com', 2, '2022-02-21 14:58:27', 1),
(659, '::1', 'admin@gmail.com', 1, '2022-02-21 19:16:32', 1),
(660, '::1', 'admin@gmail.com', 1, '2022-02-21 21:49:22', 1),
(661, '::1', 'masyarakat', NULL, '2022-02-22 07:38:47', 0),
(662, '::1', 'daniel@gmail.com', 9, '2022-02-22 07:38:57', 1),
(663, '::1', 'admin@gmail.com', 1, '2022-02-22 07:51:12', 1),
(664, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 08:07:55', 1),
(665, '::1', 'herman0101@gmail.com', 3, '2022-02-22 08:16:20', 1),
(666, '::1', 'polisi@gmail.com', 11, '2022-02-22 08:16:40', 1),
(667, '::1', 'polisi@gmail.com', 11, '2022-02-22 08:19:34', 1),
(668, '::1', 'admin@gmail.com', 1, '2022-02-22 08:24:18', 1),
(669, '::1', 'admin@gmail.com', 1, '2022-02-22 08:34:41', 1),
(670, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 08:55:51', 1),
(671, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 09:09:49', 1),
(672, '::1', 'herman0101@gmail.com', 3, '2022-02-22 09:26:22', 1),
(673, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 09:36:08', 1),
(674, '::1', 'admin@gmail.com', 1, '2022-02-22 10:42:01', 1),
(675, '::1', 'petugas02@gmail.com', 15, '2022-02-22 11:52:41', 1),
(676, '::1', 'medis02@gmail.com', 14, '2022-02-22 11:52:53', 1),
(677, '::1', 'admin02@gmail.com', 13, '2022-02-22 11:53:05', 1),
(678, '::1', 'admin@gmail.com', 1, '2022-02-22 15:49:32', 1),
(679, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 18:02:07', 1),
(680, '::1', 'daniel@gmail.com', 9, '2022-02-22 18:12:01', 1),
(681, '::1', 'herman0101@gmail.com', 3, '2022-02-22 18:14:25', 1),
(682, '::1', 'medis@gmail.com', 10, '2022-02-22 18:19:37', 1),
(683, '::1', 'damkar@gmail.com', 12, '2022-02-22 18:35:04', 1),
(684, '::1', 'daniel@gmail.com', 9, '2022-02-22 18:39:21', 1),
(685, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 18:39:58', 1),
(686, '::1', 'daniel@gmail.com', 9, '2022-02-22 21:40:25', 1),
(687, '::1', 'nofal1313@gmail.com', 2, '2022-02-22 21:48:08', 1),
(688, '::1', 'herman0101@gmail.com', 3, '2022-02-22 21:55:49', 1),
(689, '::1', 'medis@gmail.com', 10, '2022-02-22 22:12:11', 1),
(690, '::1', 'admin@gmail.com', 1, '2022-02-22 22:16:34', 1),
(691, '::1', 'daniel@gmail.com', 9, '2022-02-22 23:24:21', 1),
(692, '::1', 'admin@gmail.com', 1, '2022-02-22 23:25:10', 1),
(693, '::1', 'herman0101@gmail.com', 3, '2022-02-22 23:29:37', 1),
(694, '::1', 'daniel@gmail.com', 9, '2022-02-22 23:30:48', 1),
(695, '::1', 'admin@gmail.com', 1, '2022-02-22 23:34:34', 1),
(696, '::1', 'admin@gmail.com', 1, '2022-02-22 23:38:43', 1),
(697, '::1', 'medis@gmail.com', 10, '2022-02-22 23:40:22', 1),
(698, '::1', 'polisi@gmail.com', 11, '2022-02-22 23:40:35', 1),
(699, '::1', 'admin@gmail.com', 1, '2022-02-23 07:26:11', 1),
(700, '::1', 'admin@gmail.com', 1, '2022-02-23 08:49:32', 1),
(701, '::1', 'nofal1313@gmail.com', 2, '2022-02-23 09:04:53', 1),
(702, '::1', 'herman0101@gmail.com', 3, '2022-02-23 09:06:22', 1),
(703, '::1', 'medis@gmail.com', 10, '2022-02-23 09:07:19', 1),
(704, '::1', 'admin@gmail.com', 1, '2022-02-23 09:08:22', 1),
(705, '::1', 'herman0101@gmail.com', 3, '2022-02-23 09:18:41', 1),
(706, '::1', 'herman0101@gmail.com', 3, '2022-02-23 09:51:55', 1),
(707, '::1', 'herman0101@gmail.com', 3, '2022-02-23 14:11:31', 1),
(708, '::1', 'admin@gmail.com', 1, '2022-02-23 14:32:08', 1),
(709, '::1', 'nofal1313@gmail.com', 2, '2022-02-23 18:25:00', 1),
(710, '::1', 'herman0101@gmail.com', 3, '2022-02-23 18:32:02', 1),
(711, '::1', 'admin@gmail.com', 1, '2022-02-23 18:38:58', 1),
(712, '::1', 'herman0101@gmail.com', 3, '2022-02-23 18:43:54', 1),
(713, '::1', 'kesehatan', NULL, '2022-02-23 18:57:43', 0),
(714, '::1', 'medis@gmail.com', 10, '2022-02-23 18:57:57', 1),
(715, '::1', 'polisi@gmail.com', 11, '2022-02-23 18:59:08', 1),
(716, '::1', 'admin@gmail.com', 1, '2022-02-23 19:36:39', 1),
(717, '::1', 'herman0101@gmail.com', 3, '2022-02-24 15:36:20', 1),
(718, '::1', 'nofal1313@gmail.com', 2, '2022-02-24 15:40:53', 1),
(719, '::1', 'nofal1313@gmail.com', 2, '2022-02-24 15:41:20', 1),
(720, '::1', 'admin@gmail.com', 1, '2022-02-24 15:44:31', 1),
(721, '::1', 'medis@gmail.com', 10, '2022-02-24 16:05:38', 1),
(722, '::1', 'polisi@gmail.com', 11, '2022-02-24 16:08:33', 1),
(723, '::1', 'damkar@gmail.com', 12, '2022-02-24 16:09:13', 1),
(724, '::1', 'admin@gmail.com', 1, '2022-02-24 16:10:59', 1),
(725, '::1', 'herman0101@gmail.com', 3, '2022-02-24 16:24:20', 1),
(726, '::1', 'herman0101@gmail.com', 3, '2022-02-24 16:31:39', 1),
(727, '::1', 'daniel@gmail.com', 9, '2022-02-24 16:36:54', 1),
(728, '::1', 'medis@gmail.com', 10, '2022-02-24 16:44:19', 1),
(729, '::1', 'herman0101@gmail.com', 3, '2022-02-24 16:58:01', 1),
(730, '::1', 'admin@gmail.com', 1, '2022-02-24 19:37:22', 1),
(731, '::1', 'herman0101@gmail.com', 3, '2022-02-24 19:45:06', 1),
(732, '::1', 'admin@gmail.com', 1, '2022-02-24 19:56:13', 1),
(733, '::1', 'herman0101@gmail.com', 3, '2022-02-24 20:35:23', 1),
(734, '::1', 'admin@gmail.com', 1, '2022-02-24 21:09:48', 1),
(735, '::1', 'herman0101@gmail.com', 3, '2022-02-24 22:11:45', 1),
(736, '::1', 'daniel@gmail.com', 9, '2022-02-24 22:20:49', 1),
(737, '::1', 'herman0101@gmail.com', 3, '2022-02-24 22:21:09', 1),
(738, '::1', 'daniel@gmail.com', 9, '2022-02-24 22:22:17', 1),
(739, '::1', 'herman0101@gmail.com', 3, '2022-02-24 22:22:40', 1),
(740, '::1', 'nofal1313@gmail.com', 2, '2022-02-24 22:23:30', 1),
(741, '::1', 'herman0101@gmail.com', 3, '2022-02-24 22:23:50', 1),
(742, '::1', 'daniel@gmail.com', 9, '2022-02-24 22:24:39', 1),
(743, '::1', 'herman0101@gmail.com', 3, '2022-02-24 22:25:00', 1),
(744, '::1', 'medis@gmail.com', 10, '2022-02-24 23:20:12', 1),
(745, '::1', 'nofal1313@gmail.com', 2, '2022-02-24 23:30:07', 1),
(746, '::1', 'daniel@gmail.com', 9, '2022-02-24 23:50:52', 1),
(747, '::1', 'herman0101@gmail.com', 3, '2022-02-25 00:00:09', 1),
(748, '::1', 'medis@gmail.com', 10, '2022-02-25 00:02:08', 1),
(749, '::1', 'polisi@gmail.com', 11, '2022-02-25 00:04:34', 1),
(750, '::1', 'damkar@gmail.com', 12, '2022-02-25 00:06:27', 1),
(751, '::1', 'admin@gmail.com', 1, '2022-02-25 00:08:38', 1),
(752, '::1', 'nofal1313@gmail.com', 2, '2022-02-25 00:12:45', 1),
(753, '::1', 'daniel@gmail.com', 9, '2022-02-25 00:14:29', 1),
(754, '::1', 'admin@gmail.com', 1, '2022-02-25 00:15:33', 1),
(755, '::1', 'medis@gmail.com', 10, '2022-02-25 00:39:28', 1),
(756, '::1', 'admin@gmail.com', 1, '2022-02-25 00:40:02', 1),
(757, '::1', 'daniel@gmail.com', 9, '2022-02-25 00:44:21', 1),
(758, '::1', 'nofal1313@gmail.com', 2, '2022-02-25 00:44:33', 1),
(759, '::1', 'polisi@gmail.com', 11, '2022-02-25 00:44:44', 1),
(760, '::1', 'damkar@gmail.com', 12, '2022-02-25 00:44:56', 1),
(761, '::1', 'medis@gmail.com', 10, '2022-02-25 07:48:35', 1),
(762, '::1', 'damkar@gmail.com', 12, '2022-02-25 07:51:04', 1),
(763, '::1', 'polisi@gmail.com', 11, '2022-02-25 07:52:50', 1),
(764, '::1', 'medis@gmail.com', 10, '2022-02-25 08:12:03', 1),
(765, '::1', 'damkar@gmail.com', 12, '2022-02-25 08:44:35', 1),
(766, '::1', 'polisi@gmail.com', 11, '2022-02-25 08:56:15', 1),
(767, '::1', 'admin@gmail.com', 1, '2022-02-25 09:00:46', 1),
(768, '::1', 'damkar@gmail.com', 12, '2022-02-25 09:22:17', 1),
(769, '::1', 'polisi@gmail.com', 11, '2022-02-25 09:32:54', 1),
(770, '::1', 'medis@gmail.com', 10, '2022-02-25 09:33:04', 1),
(771, '::1', 'damkar@gmail.com', 12, '2022-02-25 09:33:12', 1),
(772, '::1', 'daniel@gmail.com', 9, '2022-02-25 09:33:22', 1),
(773, '::1', 'admin@gmail.com', 1, '2022-02-25 09:36:26', 1),
(774, '::1', 'admin@gmail.com', 1, '2022-02-25 09:50:41', 1),
(775, '::1', 'herman0101@gmail.com', 3, '2022-02-25 10:09:45', 1),
(776, '::1', 'herman0101@gmail.com', 3, '2022-02-25 10:28:48', 1),
(777, '::1', 'medis@gmail.com', 10, '2022-02-25 10:54:07', 1),
(778, '::1', 'medis@gmail.com', 10, '2022-02-25 13:26:31', 1),
(779, '::1', 'admin@gmail.com', 1, '2022-02-25 13:26:58', 1),
(780, '::1', 'admin@gmail.com', 1, '2022-02-25 13:27:49', 1),
(781, '::1', 'nofal1313@gmail.com', 2, '2022-02-25 13:32:09', 1);
INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(782, '::1', 'admin@gmail.com', 1, '2022-02-25 13:37:23', 1),
(783, '::1', 'herman0101@gmail.com', 3, '2022-02-25 13:40:11', 1),
(784, '::1', 'admin@gmail.com', 1, '2022-02-25 13:44:00', 1),
(785, '::1', 'nofal1313@gmail.com', 2, '2022-02-25 13:55:21', 1),
(786, '::1', 'medis@gmail.com', 10, '2022-02-25 13:59:51', 1),
(787, '::1', 'polisi@gmail.com', 11, '2022-02-25 14:00:50', 1),
(788, '::1', 'polisi@gmail.com', 11, '2022-02-25 14:10:48', 1),
(789, '::1', 'admin@gmail.com', 1, '2022-02-25 14:16:09', 1),
(790, '::1', 'daniel@gmail.com', 9, '2022-02-25 14:17:50', 1),
(791, '::1', 'admin@gmail.com', 1, '2022-02-25 15:05:25', 1),
(792, '::1', 'nofal1313@gmail.com', 2, '2022-02-25 15:18:11', 1),
(793, '::1', 'daniel@gmail.com', 9, '2022-02-25 20:49:02', 1),
(794, '::1', 'herman0101@gmail.com', 3, '2022-02-25 20:57:02', 1),
(795, '::1', 'medis@gmail.com', 10, '2022-02-25 20:58:08', 1),
(796, '::1', 'polisi@gmail.com', 11, '2022-02-25 20:58:28', 1),
(797, '::1', 'damkar@gmail.com', 12, '2022-02-25 21:06:18', 1),
(798, '::1', 'admin@gmail.com', 1, '2022-02-25 21:11:46', 1),
(799, '::1', 'admin@gmail.com', 1, '2022-02-26 07:32:39', 1),
(800, '::1', 'medis@gmail.com', 10, '2022-02-26 07:36:01', 1),
(801, '::1', 'damkar@gmail.com', 12, '2022-02-26 07:36:38', 1),
(802, '::1', 'polisi@gmail.com', 11, '2022-02-26 07:37:24', 1),
(803, '::1', 'daniel@gmail.com', 9, '2022-02-26 07:39:16', 1),
(804, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 08:31:31', 1),
(805, '::1', 'herman0101@gmail.com', 3, '2022-02-26 08:32:34', 1),
(806, '::1', 'damkar@gmail.com', 12, '2022-02-26 08:33:15', 1),
(807, '::1', 'polisi@gmail.com', 11, '2022-02-26 08:33:30', 1),
(808, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 08:34:38', 1),
(809, '::1', 'admin@gmail.com', 1, '2022-02-26 08:35:10', 1),
(810, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 08:40:23', 1),
(811, '::1', 'admin@gmail.com', 1, '2022-02-26 08:52:27', 1),
(812, '::1', 'disdikbud@gmai.com', 18, '2022-02-26 08:54:30', 1),
(813, '::1', 'disdikbud@gmai.com', 18, '2022-02-26 08:57:01', 1),
(814, '::1', 'disdikbud@gmai.com', 18, '2022-02-26 08:58:01', 1),
(815, '::1', 'herman0101@gmail.com', 3, '2022-02-26 08:59:55', 1),
(816, '::1', 'disdikbud@gmai.com', 18, '2022-02-26 09:00:26', 1),
(817, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 09:04:18', 1),
(818, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 09:11:26', 1),
(819, '::1', 'herman0101@gmail.com', 3, '2022-02-26 09:12:03', 1),
(820, '::1', 'medis@gmail.com', 10, '2022-02-26 09:12:25', 1),
(821, '::1', 'admin@gmail.com', 1, '2022-02-26 09:12:53', 1),
(822, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 09:13:25', 1),
(823, '::1', 'admin@gmail.com', 1, '2022-02-26 09:14:15', 1),
(824, '::1', 'admin@gmail.com', 1, '2022-02-26 09:15:12', 1),
(825, '::1', 'pertamanan@gmail.com', 19, '2022-02-26 09:16:34', 1),
(826, '::1', 'admin@gmail.com', 1, '2022-02-26 09:39:46', 1),
(827, '::1', 'admin@gmail.com', 1, '2022-02-26 09:39:47', 1),
(828, '::1', 'masyarakat03@gmail.com', 17, '2022-02-26 09:41:00', 1),
(829, '::1', 'admin@gmail.com', 1, '2022-02-26 10:32:07', 1),
(830, '::1', 'medis@gmail.com', 10, '2022-02-26 10:33:23', 1),
(831, '::1', 'admin@gmail.com', 1, '2022-02-26 10:57:25', 1),
(832, '::1', 'admin@gmail.com', 1, '2022-02-26 12:47:08', 1),
(833, '::1', 'daniel@gmail.com', 9, '2022-02-26 13:54:53', 1),
(834, '::1', 'herman0101@gmail.com', 3, '2022-02-26 14:00:33', 1),
(835, '::1', 'medis@gmail.com', 10, '2022-02-26 14:25:17', 1),
(836, '::1', 'herman0101@gmail.com', 3, '2022-02-26 14:33:12', 1),
(837, '::1', 'damkar@gmail.com', 12, '2022-02-26 14:45:30', 1),
(838, '::1', 'medis@gmail.com', 10, '2022-02-26 14:46:40', 1),
(839, '::1', 'damkar@gmail.com', 12, '2022-02-26 14:48:34', 1),
(840, '::1', 'admin@gmail.com', 1, '2022-02-26 15:16:24', 1),
(841, '::1', 'medis@gmail.com', 10, '2022-02-26 16:49:54', 1),
(842, '::1', 'damkar@gmail.com', 12, '2022-02-26 17:18:48', 1),
(843, '::1', 'daniel@gmail.com', 9, '2022-02-26 20:36:29', 1),
(844, '::1', 'daniel@gmail.com', 9, '2022-02-26 20:36:40', 1),
(845, '::1', 'nofal1313@gmail.com', 2, '2022-02-26 20:41:06', 1),
(846, '::1', 'daniel@gmail.com', 9, '2022-02-26 20:49:30', 1),
(847, '::1', 'daniel@gmail.com', 9, '2022-02-26 21:06:22', 1),
(848, '::1', 'herman0101@gmail.com', 3, '2022-02-26 21:07:03', 1),
(849, '::1', 'medis@gmail.com', 10, '2022-02-26 21:09:47', 1),
(850, '::1', 'herman0101@gmail.com', 3, '2022-02-26 21:14:41', 1),
(851, '::1', 'herman0101@gmail.com', 3, '2022-02-26 21:14:57', 1),
(852, '::1', 'medis@gmail.com', 10, '2022-02-26 21:15:09', 1),
(853, '::1', 'admin@gmail.com', 1, '2022-02-26 21:18:42', 1),
(854, '::1', 'medis@gmail.com', 10, '2022-02-26 21:21:28', 1),
(855, '::1', 'damkar@gmail.com', 12, '2022-02-26 21:27:09', 1),
(856, '::1', 'daniel@gmail.com', 9, '2022-02-26 21:30:19', 1),
(857, '::1', 'admin@gmail.com', 1, '2022-02-26 21:32:15', 1),
(858, '::1', 'medis@gmail.com', 10, '2022-02-26 21:33:48', 1),
(859, '::1', 'damkar@gmail.com', 12, '2022-02-26 21:35:53', 1),
(860, '::1', 'medis@gmail.com', 10, '2022-02-26 21:46:23', 1),
(861, '::1', 'polisi@gmail.com', 11, '2022-02-26 21:46:41', 1),
(862, '::1', 'admin@gmail.com', 1, '2022-02-26 22:11:29', 1),
(863, '::1', 'admin@gmail.com', 1, '2022-02-27 15:51:17', 1),
(864, '::1', 'admin@gmail.com', 1, '2022-02-27 19:07:40', 1),
(865, '::1', 'medis@gmail.com', 10, '2022-02-27 20:05:04', 1),
(866, '::1', 'medis@gmail.com', 10, '2022-02-27 20:06:58', 1),
(867, '::1', 'damkar@gmail.com', 12, '2022-02-27 20:07:15', 1),
(868, '::1', 'admin@gmail.com', 1, '2022-02-27 20:07:35', 1),
(869, '::1', 'medis@gmail.com', 10, '2022-02-27 20:14:17', 1),
(870, '::1', 'polisi@gmail.com', 11, '2022-02-27 20:14:41', 1),
(871, '::1', 'daniel@gmail.com', 9, '2022-02-27 20:15:07', 1),
(872, '::1', 'admin@gmail.com', 1, '2022-02-27 20:16:38', 1),
(873, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 20:18:03', 1),
(874, '::1', 'medis@gmail.com', 10, '2022-02-27 20:24:51', 1),
(875, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 20:35:48', 1),
(876, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 20:36:40', 1),
(877, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 20:50:41', 1),
(878, '::1', 'daniel@gmail.com', 9, '2022-02-27 21:17:29', 1),
(879, '::1', 'daniel@gmail.com', 9, '2022-02-27 21:17:42', 1),
(880, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 21:18:00', 1),
(881, '::1', 'admin@gmail.com', 1, '2022-02-27 21:25:40', 1),
(882, '::1', 'pertanian@gmail.com', 22, '2022-02-27 21:28:09', 1),
(883, '::1', 'herman0101@gmail.com', 3, '2022-02-27 22:14:43', 1),
(884, '::1', 'daniel@gmail.com', 9, '2022-02-27 22:15:11', 1),
(885, '::1', 'herman0101@gmail.com', 3, '2022-02-27 22:16:00', 1),
(886, '::1', 'pertamanan@gmail.com', 21, '2022-02-27 22:16:28', 1),
(887, '::1', 'pertanian@gmail.com', 22, '2022-02-27 22:20:04', 1),
(888, '::1', 'daniel@gmail.com', 9, '2022-02-27 22:27:59', 1),
(889, '::1', 'daniel@gmail.com', 9, '2022-02-28 09:10:43', 1),
(890, '::1', 'pertamanan@gmail.com', 21, '2022-02-28 09:14:37', 1),
(891, '::1', 'admin@gmail.com', 1, '2022-03-03 07:46:21', 1),
(892, '::1', 'disdikbud@gmai.com', 18, '2022-03-03 10:14:02', 1),
(893, '::1', 'damkar@gmail.com', 12, '2022-03-03 10:15:42', 1),
(894, '::1', 'polisi@gmail.com', 11, '2022-03-03 10:16:01', 1),
(895, '::1', 'medis@gmail.com', 10, '2022-03-03 10:16:46', 1),
(896, '::1', 'nofal1313@gmail.com', 2, '2022-03-03 10:17:07', 1),
(897, '::1', 'herman0101@gmail.com', 3, '2022-03-03 10:27:33', 1),
(898, '::1', 'medis@gmail.com', 10, '2022-03-03 10:29:27', 1),
(899, '::1', 'nofal1313@gmail.com', 2, '2022-03-03 10:31:58', 1),
(900, '::1', 'medis@gmail.com', 10, '2022-03-03 10:35:45', 1),
(901, '::1', 'nofal1313@gmail.com', 2, '2022-03-03 10:42:45', 1),
(902, '::1', 'herman0101@gmail.com', 3, '2022-03-03 11:03:17', 1),
(903, '::1', 'admin@gmail.com', 1, '2022-03-03 11:20:58', 1),
(904, '::1', 'admin@gmail.com', 1, '2022-03-03 11:22:09', 1),
(905, '::1', 'nofal1313@gmail.com', 2, '2022-03-03 11:23:35', 1),
(906, '::1', 'herman0101@gmail.com', 3, '2022-03-03 11:24:17', 1),
(907, '::1', 'dinsos', NULL, '2022-03-03 11:24:44', 0),
(908, '::1', 'dinsos@gmail.com', 23, '2022-03-03 11:25:05', 1),
(909, '::1', 'dinsos@gmail.com', 23, '2022-03-03 11:28:56', 1),
(910, '::1', 'admin@gmail.com', 1, '2022-03-04 22:20:10', 1),
(911, '::1', 'dinsos', NULL, '2022-03-04 22:30:41', 0),
(912, '::1', 'admin@gmail.com', 1, '2022-03-04 22:31:08', 1),
(913, '::1', 'daniel@gmail.com', 9, '2022-03-04 22:40:29', 1),
(914, '::1', 'herman0101@gmail.com', 3, '2022-03-04 22:41:42', 1),
(915, '::1', 'politik@gmail.com', 24, '2022-03-04 23:16:14', 1),
(916, '::1', 'nofal1313@gmail.com', 2, '2022-03-05 00:20:53', 1),
(917, '::1', 'daniel@gmail.com', 9, '2022-03-05 00:31:56', 1),
(918, '::1', 'herman0101@gmail.com', 3, '2022-03-05 00:32:19', 1),
(919, '::1', 'politik@gmail.com', 24, '2022-03-05 00:32:45', 1),
(920, '::1', 'admin@gmail.com', 1, '2022-03-05 09:28:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'kategorial', 'Untuk Petugas Kategorial');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kriminal'),
(2, 'Kesehatan'),
(3, 'Kebakaran'),
(5, 'Pendidikan'),
(7, 'Pertamanan'),
(8, 'Pertanian'),
(11, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `kat_group`
--

CREATE TABLE `kat_group` (
  `id_kat` int(11) NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kat_group`
--

INSERT INTO `kat_group` (`id_kat`, `group_id`, `kategori_id`) VALUES
(3, 4, 1),
(4, 5, 2),
(1, 6, 3),
(2, 7, 5),
(5, 10, 7),
(6, 11, 8),
(9, 14, 11);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1640062541, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8 NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_laporan` varchar(50) NOT NULL,
  `isi_laporan` varchar(500) NOT NULL,
  `no_telepon` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_pengaduan` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `username`, `nik`, `id_kategori`, `judul_laporan`, `isi_laporan`, `no_telepon`, `foto`, `tgl_pengaduan`, `status`) VALUES
(78, 'daniel', '3674040202012000', 3, 'asddvcsc', 'scscvwedsacd', '08124946985', 'Vaksin_massal_4-web_4.jpg', '2022-02-26 13:55:47', 'selesai'),
(79, 'daniel', '3674040202012000', 2, 'wadasd', 'asfdvwdfrvw', '08124946985', 'kebakaran.jpeg', '2022-02-26 13:56:59', 'selesai'),
(80, 'daniel', '3674040202012000', 2, 'jsojoipisd', 'ihcuvbyweukf', '08124946985', 'kesehatan 1.jpg', '2022-02-26 13:57:12', 'proses'),
(81, 'daniel', '3674040202012000', 1, 'jasjcihwef', 'jklhsdifywei', '08124946985', 'kebakaran.jpeg', '2022-02-26 13:57:24', 'verifikasi'),
(82, 'daniel', '3674040202012000', 3, 'kpasoijujivwe', 'uiqwduoywef', '08124946985', 'hjasuhd.jpeg', '2022-02-26 13:59:20', 'proses'),
(83, 'daniel', '3674040202012000', 3, 'wqdwefwdc', 'sacdsfwe', '08124946985', 'jambret.jpg', '2022-02-26 13:59:33', 'verifikasi'),
(84, 'daniel', '3674040202012000', 5, 'ajhsad', 'jbbjhsbdqdq', '08124946985', 'Vaksin_massal_4-web_4.jpg', '2022-02-26 13:59:51', 'verifikasi'),
(85, 'daniel', '3674040202012000', 5, 'sjkdsahoiew', 'sjkihsbiwe', '08124946985', 'begalll.jpg', '2022-02-26 14:00:04', 'proses'),
(86, 'daniel', '3674040202012000', 7, 'iofdijofkldaf', 'jhfwehifhwefbww', '08124946985', 'begalll.jpg', '2022-02-27 22:15:30', 'proses'),
(87, 'daniel', '3674040202012000', 8, 'asjhdbhjsadbwqjd', 'jghsddsjghd', '08124946985', 'kesehatan 1.jpg', '2022-02-27 22:15:44', 'verifikasi'),
(88, 'daniel', '3674040202012000', 1, 'sdqwdqwd', 'sdqdwqdwqdqd', '08124946985', 'kebakaran.jpeg', '2022-02-27 22:34:23', 'verifikasi'),
(89, 'daniel', '3674040202012000', 2, 'sadsadsadsafcd', 'asdsadasdasdsa', '08124946985', 'ditangkep.jpeg', '2022-02-27 22:35:18', 'verifikasi'),
(90, 'daniel', '3674040202012000', 3, 'sadsadsadsafcd', 'asdsadasdasdsa', '08124946985', 'ditangkep.jpeg', '2022-02-27 22:35:18', 'verifikasi'),
(91, 'nofal', '3674040206160008', 2, 'Laporan Kesehatann', 'testinggg buat laporan kesehatannn', '081496306343', 'p.jpg', '2022-03-03 10:26:14', 'selesai'),
(92, 'nofal', '3674040206160008', 2, 'asmbdashckjq', 'asndsahkdbeckj', '081496306343', 'kesehatan 1.jpg', '2022-03-03 10:26:38', 'selesai'),
(93, 'nofal', '3674040206160008', 2, 'aksnkasjcbwipdn', 'ashjcc ,j jqj 9099', '081496306343', 'Vaksin_massal_4-web_4.jpg', '2022-03-03 10:26:58', 'verifikasi'),
(94, 'nofal', '3674040206160008', 2, 'akjsdndbn', 'hkbdnoujdksd', '081496306343', 'kesehatan 1.jpg', '2022-03-03 10:27:16', 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_ditolak`
--

CREATE TABLE `pengaduan_ditolak` (
  `id_ditolak` int(11) UNSIGNED NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `id_petugas` int(11) UNSIGNED NOT NULL,
  `alasan` text NOT NULL,
  `tgl_ditolak` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan_ditolak`
--

INSERT INTO `pengaduan_ditolak` (`id_ditolak`, `id_pengaduan`, `id_petugas`, `alasan`, `tgl_ditolak`) VALUES
(21, 94, 3, 'spam doang loe woyy', '2022-03-03 10:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` datetime NOT NULL,
  `isi_tanggapan` varchar(400) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_petugas` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `isi_tanggapan`, `foto`, `id_petugas`) VALUES
(54, 79, '2022-02-26 21:35:33', 'testignnngng', 'kebakaran.jpeg', 10),
(55, 78, '2022-02-26 21:39:29', 'idnajkda', 'hjasuhd.jpeg', 12),
(56, 92, '2022-03-03 10:41:23', 'testinggg tanggapan kesehatan 1', 'hjasuhd.jpeg', 10),
(57, 91, '2022-03-03 10:42:01', 'testing tanggapan kesehatan 2', 'kebakaran.jpeg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telepon` varchar(17) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'profile.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `alamat`, `tgl_lahir`, `no_telepon`, `email`, `username`, `user_img`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '3674040206040002', 'Argya Falan Rifqi', 'Jalan Kedaung No. 25, Tanggerang Selatan', '2004-04-02', '081496724916', 'admin@gmail.com', 'admin', 'profile.svg', '$2y$04$Ae4DYxOVpqT2tFVVwT0CTempM2eDZKJuwlJgGyaG3Zr11WP/qMY0u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-14 07:58:56', '2022-03-05 09:28:48', NULL),
(2, '3674040206160008', 'Nofal Yuliawan', 'Jalan Melati No. 15, Jakarta Selatan', '2004-06-14', '081496306343', 'nofal1313@gmail.com', 'nofal', 'profile.svg', '$2y$04$xF2V8bCWxVBX/zrFF/9aY.yHp99anYZ3NWd49Nsn/wyaXIZf4.m3m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-14 08:07:52', '2022-03-05 00:20:53', NULL),
(3, '3674040216020007', 'Herman Darmawan', 'Jalan Kenangan No.18, Tanggerang Selatan', '2003-09-14', '081395930257', 'herman0101@gmail.com', 'petugas', 'profile.svg', '$2y$04$tfsar0EN0ydgACJarYu1veq81SymkS5YJ9ylzZycfOxgUuMG.6SXC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-14 08:10:56', '2022-03-05 00:32:19', NULL),
(4, '3674040204200008', 'Mikhayla Hasya ', 'Jalan Permata No. 20, Tanggerang Selatan', '2002-12-14', '081386230697', 'mikhayla0101@gmail.com', 'admin02', 'profile.svg', '$2y$04$UmKJfHONB6rOcGui18vJaOBR8lrv1eonZSbFsrE30p2dhyNRJPVG6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-14 08:14:00', '2022-02-14 08:58:02', NULL),
(9, '3674040202012000', 'Danielle Chairdar Humam', 'Pamulang', '2007-02-17', '08124946985', 'daniel@gmail.com', 'daniel', 'profile.svg', '$2y$04$e3wjyMo5xkZ.u4oxu0t1.OXKnR0y5u.vqBzqzGhhkVCDHvsKPVudm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-17 16:56:09', '2022-03-05 00:31:56', NULL),
(10, '3674040203210004', 'Zanuar Hilman', 'Ciputat', '2022-02-20', '01289498329', 'medis@gmail.com', 'medis', 'profile.svg', '$2y$04$8NjlCQFUh5d10EGAAjS3VOUzKLMKuINMEVMV614v2/hAQzGWXv4nO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-20 01:16:08', '2022-03-03 10:35:45', NULL),
(11, '3674066808090001', 'Hilmi Alfaridzi', 'Jl Permata No. 14', '2006-12-08', '08187499344556', 'polisi@gmail.com', 'polisi', 'profile.svg', '$2y$04$SgRu.WYACuo1hz8EcNziCufXjAaXwrqTL43/4OeIGwjisd/1FYPEK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-20 01:17:54', '2022-03-03 10:16:01', NULL),
(12, '3674066808190002', 'Dinar Candy', 'Jl Musyawarah', '2000-11-30', '081874895342934', 'damkar@gmail.com', 'damkar', 'profile.svg', '$2y$04$pZZLUEdcadf0pptNYfSBgO6g8WEa1BHq10k73gceI3Zv9ShDGzBHW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-20 01:19:44', '2022-03-03 10:15:42', NULL),
(13, '3674040708160003', 'Rafi Al Rasyid', 'Pamulang', '2002-06-22', '018749812941', 'admin02@gmail.com', 'admin2', 'profile.svg', '$2y$04$by8UxTwqPltn7T5r1iI1fO2kowEdnBaNzZ4oUQaD6H0jKtko2c0MW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-22 11:53:05', NULL),
(14, '3674040203990003', 'Danur Yanto', 'Ciputat', '2002-02-22', '018393243545', 'medis02@gmail.com', 'medis2', 'profile.svg', '$2y$04$qfhBuuCxcFW895y2x/0VzuS9y2nE8a/7I7mf/xfgJBYZLZZrkX/nu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-22 11:52:53', NULL),
(15, '3674040606530002', 'Supriyadi Jono', 'Kedaung', '2000-06-22', '081684328752', 'petugas02@gmail.com', 'petugas2', 'profile.svg', '$2y$04$M3Zgqiq4tADjFCxWH/o9IOwwTCevoNvQsD58Lc0iemGfETUdWKY5q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-22 11:52:41', NULL),
(16, '3674040226610008', 'Jinora Seyy', 'Bandung', '2005-10-24', '0817648736455', 'petugas03@gmail.com', 'petugas3', 'profile.svg', '$2y$04$2ZHx7ewBvn.hnNeSZTFeMOZhRs1pDrI7jwVEuN6V1v//EFpqrnRbK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-24 04:02:28', NULL, NULL),
(17, '367402757368374', 'Nita', 'Kedaung', '2008-10-26', '08178241224', 'masyarakat03@gmail.com', 'nita', 'profile.svg', '$2y$04$8gWR1HKCl1U9JR.7Z8TEyei9dJWbBL/P3kcjqTNrtO34snmkjsrpa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-26 08:31:22', '2022-02-26 09:41:00', NULL),
(18, '3674027573890372', 'Fahri ', 'Jl Ciputat', '2003-07-26', '0812463271838', 'disdikbud@gmai.com', 'disdikbud', 'profile.svg', '$2y$04$nih.zX/.FHCByQxSSvzcLuaGubwcaoXEZPyOZ8myfEwytBOwexDIm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-26 08:53:45', '2022-03-03 10:14:02', NULL),
(20, '367406457368362', 'Jordi Onsu', 'Jl Keramat No 12', '2003-03-26', '0812776432423', 'admin03@gmail.com', 'admin03', 'profile.svg', '$2y$04$3mXbS.4fVWEFGhsEN8420ubsey313Bc2qEE3Kksx6v/GLhG1BUn9e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-26 10:14:22', NULL, NULL),
(21, '367702757368375', 'Dhiya ', 'Jl Kermat', '2022-02-16', '081248387412934', 'pertamanan@gmail.com', 'pertamanan', 'profile.svg', '$2y$04$gCpDtp0.K7.IbOPJTdZiVOlNKtWmBDZ.gzAVC3MmyMB8RdYNxzLvK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-27 08:17:48', '2022-02-28 09:14:37', NULL),
(22, '367902757368372', 'Jono Bin Suep ', 'JL Melati No.12', '2002-01-09', '08128487232', 'pertanian@gmail.com', 'pertanian', 'profile.svg', '$2y$04$nXniH8hjefh86JdgZfz5Pu7drefC.ogbtmn/0N.hhcbfucy2bwL/.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-27 09:27:56', '2022-02-27 22:20:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `group_id_user_id` (`group_id`,`user_id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selector` (`selector`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`),
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kat_group`
--
ALTER TABLE `kat_group`
  ADD PRIMARY KEY (`id_kat`),
  ADD KEY `group_id` (`group_id`,`kategori_id`),
  ADD KEY `kategori_ibfk` (`kategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `kategori` (`id_kategori`),
  ADD KEY `no_telepon` (`no_telepon`),
  ADD KEY `nik_masyarakat` (`nik`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pengaduan_ditolak`
--
ALTER TABLE `pengaduan_ditolak`
  ADD PRIMARY KEY (`id_ditolak`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `no_telepon` (`no_telepon`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=921;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kat_group`
--
ALTER TABLE `kat_group`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `pengaduan_ditolak`
--
ALTER TABLE `pengaduan_ditolak`
  MODIFY `id_ditolak` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kat_group`
--
ALTER TABLE `kat_group`
  ADD CONSTRAINT `group_ibfk` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_ibfk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_4` FOREIGN KEY (`no_telepon`) REFERENCES `users` (`no_telepon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_5` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan_ditolak`
--
ALTER TABLE `pengaduan_ditolak`
  ADD CONSTRAINT `pengaduan_ditolak_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ditolak_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
