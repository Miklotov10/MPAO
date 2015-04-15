-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 12, 2015 at 09:44 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ateneo`
--
CREATE DATABASE IF NOT EXISTS `ateneo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ateneo`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `token` varchar(45) NOT NULL,
  `address` varchar(160) NOT NULL,
  `mobile_number` varchar(45) NOT NULL,
  `telephone_number` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `token`, `address`, `mobile_number`, `telephone_number`, `city_id`, `user_id`, `created`, `modified`) VALUES
(1, 'Melvin', 'T', 'Aquino', 'melvin.aquino@ymail.com', '', '3C Eaglerock Apartment, Road 18 Ext.', '09995970638', '09995970638', 2, 13, '2015-04-12 15:12:57', '2015-04-12 15:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(76, NULL, NULL, NULL, 'controllers', 1, 330),
(77, 76, NULL, NULL, 'Activities', 2, 17),
(78, 77, NULL, NULL, 'admin_index', 3, 4),
(79, 77, NULL, NULL, 'admin_view', 5, 6),
(80, 77, NULL, NULL, 'admin_add', 7, 8),
(81, 77, NULL, NULL, 'admin_edit', 9, 10),
(82, 77, NULL, NULL, 'admin_delete', 11, 12),
(84, 76, NULL, NULL, 'Groups', 18, 33),
(85, 84, NULL, NULL, 'admin_index', 19, 20),
(86, 84, NULL, NULL, 'admin_view', 21, 22),
(87, 84, NULL, NULL, 'admin_add', 23, 24),
(88, 84, NULL, NULL, 'admin_edit', 25, 26),
(89, 84, NULL, NULL, 'admin_delete', 27, 28),
(98, 76, NULL, NULL, 'LookupTypes', 34, 49),
(99, 98, NULL, NULL, 'admin_index', 35, 36),
(100, 98, NULL, NULL, 'admin_view', 37, 38),
(101, 98, NULL, NULL, 'admin_add', 39, 40),
(102, 98, NULL, NULL, 'admin_edit', 41, 42),
(103, 98, NULL, NULL, 'admin_delete', 43, 44),
(105, 76, NULL, NULL, 'Lookups', 50, 65),
(106, 105, NULL, NULL, 'admin_index', 51, 52),
(107, 105, NULL, NULL, 'admin_view', 53, 54),
(108, 105, NULL, NULL, 'admin_add', 55, 56),
(109, 105, NULL, NULL, 'admin_edit', 57, 58),
(110, 105, NULL, NULL, 'admin_delete', 59, 60),
(112, 76, NULL, NULL, 'Pages', 66, 73),
(113, 112, NULL, NULL, 'display', 67, 68),
(115, 76, NULL, NULL, 'Users', 74, 107),
(116, 115, NULL, NULL, 'login', 75, 76),
(117, 115, NULL, NULL, 'logout', 77, 78),
(118, 115, NULL, NULL, 'index', 79, 80),
(119, 115, NULL, NULL, 'view', 81, 82),
(120, 115, NULL, NULL, 'add', 83, 84),
(121, 115, NULL, NULL, 'edit', 85, 86),
(122, 115, NULL, NULL, 'delete', 87, 88),
(123, 115, NULL, NULL, 'admin_index', 89, 90),
(124, 115, NULL, NULL, 'admin_view', 91, 92),
(125, 115, NULL, NULL, 'admin_add', 93, 94),
(126, 115, NULL, NULL, 'admin_edit', 95, 96),
(127, 115, NULL, NULL, 'admin_delete', 97, 98),
(130, 76, NULL, NULL, 'DebugKit', 110, 121),
(131, 130, NULL, NULL, 'ToolbarAccess', 111, 120),
(132, 131, NULL, NULL, 'history_state', 112, 113),
(133, 131, NULL, NULL, 'sql_explain', 114, 115),
(135, 76, NULL, NULL, 'FullCalendar', 122, 167),
(136, 135, NULL, NULL, 'EventTypes', 123, 138),
(137, 136, NULL, NULL, 'index', 124, 125),
(138, 136, NULL, NULL, 'view', 126, 127),
(139, 136, NULL, NULL, 'add', 128, 129),
(140, 136, NULL, NULL, 'edit', 130, 131),
(141, 136, NULL, NULL, 'delete', 132, 133),
(143, 135, NULL, NULL, 'Events', 139, 158),
(144, 143, NULL, NULL, 'index', 140, 141),
(145, 143, NULL, NULL, 'view', 142, 143),
(146, 143, NULL, NULL, 'add', 144, 145),
(147, 143, NULL, NULL, 'edit', 146, 147),
(148, 143, NULL, NULL, 'delete', 148, 149),
(149, 143, NULL, NULL, 'feed', 150, 151),
(150, 143, NULL, NULL, 'update', 152, 153),
(152, 135, NULL, NULL, 'FullCalendar', 159, 166),
(153, 152, NULL, NULL, 'index', 160, 161),
(155, 115, NULL, NULL, 'initDB', 101, 102),
(164, 77, NULL, NULL, 'isAuthorized', 15, 16),
(165, 84, NULL, NULL, 'isAuthorized', 31, 32),
(167, 98, NULL, NULL, 'isAuthorized', 47, 48),
(168, 105, NULL, NULL, 'isAuthorized', 63, 64),
(169, 112, NULL, NULL, 'isAuthorized', 71, 72),
(170, 115, NULL, NULL, 'isAuthorized', 103, 104),
(171, 76, NULL, NULL, 'AclExtras', 168, 169),
(172, 131, NULL, NULL, 'isAuthorized', 118, 119),
(173, 136, NULL, NULL, 'isAuthorized', 136, 137),
(174, 143, NULL, NULL, 'isAuthorized', 156, 157),
(175, 152, NULL, NULL, 'isAuthorized', 164, 165),
(176, 76, NULL, NULL, 'Accounts', 170, 193),
(177, 176, NULL, NULL, 'index', 171, 172),
(178, 176, NULL, NULL, 'view', 173, 174),
(179, 176, NULL, NULL, 'add', 175, 176),
(180, 176, NULL, NULL, 'edit', 177, 178),
(181, 176, NULL, NULL, 'delete', 179, 180),
(182, 176, NULL, NULL, 'admin_index', 181, 182),
(183, 176, NULL, NULL, 'admin_view', 183, 184),
(184, 176, NULL, NULL, 'admin_add', 185, 186),
(185, 176, NULL, NULL, 'admin_edit', 187, 188),
(186, 176, NULL, NULL, 'admin_delete', 189, 190),
(187, 176, NULL, NULL, 'isAuthorized', 191, 192),
(188, 76, NULL, NULL, 'Cities', 194, 207),
(189, 188, NULL, NULL, 'admin_index', 195, 196),
(190, 188, NULL, NULL, 'admin_view', 197, 198),
(191, 188, NULL, NULL, 'admin_add', 199, 200),
(192, 188, NULL, NULL, 'admin_edit', 201, 202),
(193, 188, NULL, NULL, 'admin_delete', 203, 204),
(194, 188, NULL, NULL, 'isAuthorized', 205, 206),
(195, 76, NULL, NULL, 'Facilities', 208, 221),
(196, 195, NULL, NULL, 'admin_index', 209, 210),
(197, 195, NULL, NULL, 'admin_view', 211, 212),
(198, 195, NULL, NULL, 'admin_add', 213, 214),
(199, 195, NULL, NULL, 'admin_edit', 215, 216),
(200, 195, NULL, NULL, 'admin_delete', 217, 218),
(201, 195, NULL, NULL, 'isAuthorized', 219, 220),
(202, 76, NULL, NULL, 'FacilityTypes', 222, 235),
(203, 202, NULL, NULL, 'admin_index', 223, 224),
(204, 202, NULL, NULL, 'admin_view', 225, 226),
(205, 202, NULL, NULL, 'admin_add', 227, 228),
(206, 202, NULL, NULL, 'admin_edit', 229, 230),
(207, 202, NULL, NULL, 'admin_delete', 231, 232),
(208, 202, NULL, NULL, 'isAuthorized', 233, 234),
(209, 76, NULL, NULL, 'Genders', 236, 249),
(210, 209, NULL, NULL, 'admin_index', 237, 238),
(211, 209, NULL, NULL, 'admin_view', 239, 240),
(212, 209, NULL, NULL, 'admin_add', 241, 242),
(213, 209, NULL, NULL, 'admin_edit', 243, 244),
(214, 209, NULL, NULL, 'admin_delete', 245, 246),
(215, 209, NULL, NULL, 'isAuthorized', 247, 248),
(216, 76, NULL, NULL, 'RentalPromos', 250, 263),
(217, 216, NULL, NULL, 'admin_index', 251, 252),
(218, 216, NULL, NULL, 'admin_view', 253, 254),
(219, 216, NULL, NULL, 'admin_add', 255, 256),
(220, 216, NULL, NULL, 'admin_edit', 257, 258),
(221, 216, NULL, NULL, 'admin_delete', 259, 260),
(222, 216, NULL, NULL, 'isAuthorized', 261, 262),
(223, 76, NULL, NULL, 'RentalRequirements', 264, 277),
(224, 223, NULL, NULL, 'admin_index', 265, 266),
(225, 223, NULL, NULL, 'admin_view', 267, 268),
(226, 223, NULL, NULL, 'admin_add', 269, 270),
(227, 223, NULL, NULL, 'admin_edit', 271, 272),
(228, 223, NULL, NULL, 'admin_delete', 273, 274),
(229, 223, NULL, NULL, 'isAuthorized', 275, 276),
(230, 76, NULL, NULL, 'Reservations', 278, 301),
(231, 230, NULL, NULL, 'index', 279, 280),
(232, 230, NULL, NULL, 'view', 281, 282),
(233, 230, NULL, NULL, 'add', 283, 284),
(234, 230, NULL, NULL, 'edit', 285, 286),
(235, 230, NULL, NULL, 'delete', 287, 288),
(236, 230, NULL, NULL, 'admin_index', 289, 290),
(237, 230, NULL, NULL, 'admin_view', 291, 292),
(238, 230, NULL, NULL, 'admin_add', 293, 294),
(239, 230, NULL, NULL, 'admin_edit', 295, 296),
(240, 230, NULL, NULL, 'admin_delete', 297, 298),
(241, 230, NULL, NULL, 'isAuthorized', 299, 300),
(242, 76, NULL, NULL, 'Spaces', 302, 315),
(243, 242, NULL, NULL, 'admin_index', 303, 304),
(244, 242, NULL, NULL, 'admin_view', 305, 306),
(245, 242, NULL, NULL, 'admin_add', 307, 308),
(246, 242, NULL, NULL, 'admin_edit', 309, 310),
(247, 242, NULL, NULL, 'admin_delete', 311, 312),
(248, 242, NULL, NULL, 'isAuthorized', 313, 314),
(249, 76, NULL, NULL, 'RateTypes', 316, 329),
(250, 249, NULL, NULL, 'admin_index', 317, 318),
(251, 249, NULL, NULL, 'admin_view', 319, 320),
(252, 249, NULL, NULL, 'admin_add', 321, 322),
(253, 249, NULL, NULL, 'admin_edit', 323, 324),
(254, 249, NULL, NULL, 'admin_delete', 325, 326),
(255, 249, NULL, NULL, 'isAuthorized', 327, 328),
(256, NULL, NULL, NULL, 'controllers', 331, 332),
(257, 115, NULL, NULL, 'add_sample', 105, 106);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Uht tayo', 'uht', '2015-04-01 18:56:47', '2015-04-01 18:56:58'),
(2, 'Uht tonight', 'Uht tonight', '2015-04-02 12:56:26', '2015-04-02 12:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(7, NULL, 'group', 1, NULL, 1, 2),
(8, NULL, 'group', 2, NULL, 3, 4),
(9, NULL, 'group', 3, NULL, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 7, 76, '1', '1', '1', '1'),
(2, 7, 117, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `charge_types`
--

DROP TABLE IF EXISTS `charge_types`;
CREATE TABLE `charge_types` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created`, `modified`) VALUES
(1, '', NULL, NULL),
(2, 'Quezon City', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_type_id`, `title`, `details`, `start`, `end`, `all_day`, `status`, `active`, `created`, `modified`) VALUES
(1, 1, 'Management Meeting', 'Blah blah blah', '2015-04-04 12:49:00', '2015-04-05 12:49:00', 1, 'Rescheduled', 1, '2015-04-03', '2015-04-03'),
(2, 2, 'party', 'party', '2015-04-04 22:06:00', '2015-04-10 03:06:00', 0, 'Scheduled', 1, '2015-04-04', '2015-04-09'),
(3, 2, '123', 'qqweqa asdada asdasdasd', '2015-04-12 10:26:00', '2015-04-14 10:26:00', 0, 'Confirmed', 1, '2015-04-09', '2015-04-09'),
(4, 1, 'meeting 2', 'meeting 2', '2015-04-13 10:27:00', '2015-04-14 10:27:00', 1, 'Scheduled', 1, '2015-04-09', '2015-04-09'),
(5, 3, 'Main church mass', 'mass 1', '2015-04-14 10:31:00', '2015-04-14 11:31:00', 0, 'Scheduled', 1, '2015-04-09', '2015-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

DROP TABLE IF EXISTS `event_types`;
CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `color`) VALUES
(1, 'Meeting', 'Blue'),
(2, 'Party', 'Red'),
(3, 'Mass', 'Purple');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `facility_type_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `description`, `facility_type_id`, `created`, `modified`) VALUES
(6, 'Main Church', 'Main Church', 1, '2015-04-04 03:47:13', '2015-04-04 03:47:13'),
(7, 'Chapel 1', 'Chapel 1', 1, '2015-04-04 03:47:26', '2015-04-04 03:47:26'),
(8, 'Chapel 2', 'Chapel 2', 1, '2015-04-04 03:47:37', '2015-04-04 03:47:37'),
(9, 'Theatre', 'Theatre', 3, '2015-04-04 03:47:54', '2015-04-04 03:47:54'),
(10, 'Room 204 A/C', 'Room 204 Aircon', 2, '2015-04-04 03:49:02', '2015-04-12 16:04:03'),
(11, 'Room 204', 'Non-Aircon Non-A/C', 2, '2015-04-04 03:49:15', '2015-04-12 16:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `facility_types`
--

DROP TABLE IF EXISTS `facility_types`;
CREATE TABLE `facility_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facility_types`
--

INSERT INTO `facility_types` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Church (GESU)', 'Church (Main/Chapel1/Chapel2)', '2015-04-03 18:22:32', '2015-04-04 03:25:11'),
(2, 'Rooms (JPOLLOCK)', 'Rooms', '2015-04-03 18:22:40', '2015-04-04 03:25:44'),
(3, 'Theatre (IRWIN)', 'Theatre(Event/Rehearsal)', '2015-04-03 18:22:46', '2015-04-04 03:29:02'),
(4, 'Ateneo Court', 'Basketball Court', '2015-04-08 13:37:16', '2015-04-08 13:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrators', '2015-04-03 13:58:52', '2015-04-03 13:58:52'),
(2, 'Managers', '2015-04-03 13:58:58', '2015-04-03 13:58:58'),
(3, 'Users', '2015-04-03 13:59:04', '2015-04-03 13:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `lookups`
--

DROP TABLE IF EXISTS `lookups`;
CREATE TABLE `lookups` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `lookup_type_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lookups`
--

INSERT INTO `lookups` (`id`, `name`, `description`, `lookup_type_id`, `created`, `modified`) VALUES
(1, 'Cancelled', 'Cancelled', 1, '2015-04-02 12:54:16', '2015-04-02 12:54:16'),
(2, 'Pending', 'Pending', 1, '2015-04-02 12:54:33', '2015-04-02 12:54:33'),
(3, 'Confirmed', 'Confirmed', 1, '2015-04-02 12:54:44', '2015-04-02 12:54:44'),
(4, 'Male', '', 4, '2015-04-03 16:24:54', '2015-04-03 16:24:54'),
(5, 'Female', '', 4, '2015-04-03 16:25:15', '2015-04-03 16:25:15'),
(6, 'Both', '', 4, '2015-04-03 16:25:25', '2015-04-03 16:25:25'),
(7, 'Hours', 'Per Hour Charging', 7, '2015-04-12 16:08:51', '2015-04-12 16:08:51'),
(8, 'Person', 'Per Person Charging', 7, '2015-04-12 16:09:13', '2015-04-12 16:09:13'),
(9, 'Days', 'Per Day Charging', 7, '2015-04-12 16:09:31', '2015-04-12 16:09:31'),
(10, 'Head', 'Per Head', 8, '2015-04-12 16:49:05', '2015-04-12 16:49:05'),
(11, 'Hour', 'Per Hour', 8, '2015-04-12 16:49:47', '2015-04-12 16:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_types`
--

DROP TABLE IF EXISTS `lookup_types`;
CREATE TABLE `lookup_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lookup_types`
--

INSERT INTO `lookup_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Reservation Status', '2015-04-02 12:52:54', '2015-04-02 12:55:17'),
(2, 'Spaces', '2015-04-02 12:53:10', '2015-04-02 12:53:10'),
(3, 'Rooms', '2015-04-02 12:53:17', '2015-04-02 12:53:17'),
(4, 'Gender', '2015-04-03 16:20:05', '2015-04-03 16:20:05'),
(5, 'Facilities', '2015-04-03 16:20:13', '2015-04-03 16:20:13'),
(6, 'Activities', '2015-04-03 16:20:22', '2015-04-03 16:20:22'),
(7, 'References', '2015-04-03 16:20:57', '2015-04-03 16:20:57'),
(8, 'Rate Types', '2015-04-03 16:21:22', '2015-04-03 16:21:22'),
(9, 'Promos', '2015-04-03 16:21:28', '2015-04-03 16:21:28'),
(10, 'Status', '2015-04-03 16:22:14', '2015-04-03 16:22:14'),
(11, 'Requirements', '2015-04-03 16:22:28', '2015-04-03 16:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `rental_promos`
--

DROP TABLE IF EXISTS `rental_promos`;
CREATE TABLE `rental_promos` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `rate_type_id` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `aircon` tinyint(1) NOT NULL,
  `aircon_count` int(11) NOT NULL,
  `aircon_cost` double NOT NULL,
  `aircon_succeeding_count` int(11) NOT NULL,
  `aircon_succeeding_cost` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental_promos`
--

INSERT INTO `rental_promos` (`id`, `facility_id`, `space_id`, `rate_type_id`, `reference_id`, `aircon`, `aircon_count`, `aircon_cost`, `aircon_succeeding_count`, `aircon_succeeding_cost`, `created`, `modified`) VALUES
(1, 6, 1, 1, 1, 1, 2, 200, 1, 10, '2015-04-12 16:39:38', '2015-04-12 16:39:38'),
(2, 7, 1, 1, 1, 1, 1, 100, 1, 10, '2015-04-12 17:22:04', '2015-04-12 17:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `rental_requirements`
--

DROP TABLE IF EXISTS `rental_requirements`;
CREATE TABLE `rental_requirements` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` double NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental_requirements`
--

INSERT INTO `rental_requirements` (`id`, `name`, `price`, `unit_type_id`, `facility_id`, `created`, `modified`) VALUES
(1, 'Microphone', 1000, 1, 10, '2015-04-12 16:37:30', '2015-04-12 16:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `position` varchar(32) NOT NULL,
  `mobile_number` varchar(32) NOT NULL,
  `telephone_number` varchar(32) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city_id` int(11) NOT NULL,
  `authorized_person` varchar(64) NOT NULL,
  `organizer` varchar(128) NOT NULL,
  `activity_date` date NOT NULL,
  `activity_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `event_id` int(11) unsigned NOT NULL,
  `headcount` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `position`, `mobile_number`, `telephone_number`, `address`, `city_id`, `authorized_person`, `organizer`, `activity_date`, `activity_id`, `facility_id`, `status_id`, `account_id`, `event_id`, `headcount`, `created`, `modified`) VALUES
(1, 'asdasdsa', 'melvin.aquino@ymail.com', 'asdasd', '09995970638', '09995970638', 'asdasd', 2, 'sdasdasdÂ§', 'Melvin T Aquino', '2015-04-15', 1, 10, 2, 0, 0, 10, '2015-04-12 16:18:44', '2015-04-12 16:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

DROP TABLE IF EXISTS `spaces`;
CREATE TABLE `spaces` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `male_count` int(11) NOT NULL,
  `female_count` int(11) NOT NULL,
  `total_count` int(11) NOT NULL,
  `other_facility` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` (`id`, `name`, `facility_id`, `gender_id`, `male_count`, `female_count`, `total_count`, `other_facility`, `created`, `modified`) VALUES
(1, 'Space 101', 1, 6, 45, 45, 90, 1, '2015-04-03 18:42:29', '2015-04-04 03:42:54'),
(2, 'Room 204 No aircon', 10, 6, 10, 10, 20, 1, '2015-04-05 17:31:37', '2015-04-05 17:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'miklotov', 'cc48899ee029bd39d242bc59beb345c65929695f', 1, '2015-04-03 14:05:09', '2015-04-03 14:05:09'),
(2, 'manager', '9111e5ce29e2beb70826258fb85af07cf0ea62cf', 2, '2015-04-03 14:06:07', '2015-04-03 14:06:07'),
(3, 'user', '13a19586a4470289a9c8c42f240cfd13e3c115cf', 3, '2015-04-03 14:06:15', '2015-04-03 14:06:15'),
(6, 'shelvin', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:39:50', '2015-04-12 07:39:50'),
(7, 'miklotovjr', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:41:51', '2015-04-12 07:41:51'),
(8, 'dddddd', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:44:21', '2015-04-12 07:44:21'),
(9, 'shelvinjr', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:49:03', '2015-04-12 07:49:03'),
(10, 'mikjr', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:51:08', '2015-04-12 07:51:08'),
(11, 'miklotov1', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:53:23', '2015-04-12 07:53:23'),
(12, 'wafu', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 07:55:36', '2015-04-12 07:55:36'),
(13, 'monai', 'cc48899ee029bd39d242bc59beb345c65929695f', 3, '2015-04-12 15:12:57', '2015-04-12 15:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`), ADD KEY `idx_acos_lft_rght` (`lft`,`rght`), ADD KEY `idx_acos_alias` (`alias`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`), ADD KEY `idx_aros_lft_rght` (`lft`,`rght`), ADD KEY `idx_aros_alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`), ADD KEY `idx_aco_id` (`aco_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_types`
--
ALTER TABLE `facility_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookups`
--
ALTER TABLE `lookups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_types`
--
ALTER TABLE `lookup_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_promos`
--
ALTER TABLE `rental_promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_requirements`
--
ALTER TABLE `rental_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `facility_types`
--
ALTER TABLE `facility_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lookups`
--
ALTER TABLE `lookups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lookup_types`
--
ALTER TABLE `lookup_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rental_promos`
--
ALTER TABLE `rental_promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rental_requirements`
--
ALTER TABLE `rental_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
