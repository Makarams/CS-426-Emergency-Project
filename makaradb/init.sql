-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2023 at 04:32 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency`
--

-- --------------------------------------------------------

--
-- Table structure for table `crime_reports`
--

DROP TABLE IF EXISTS `crime_reports`;
CREATE TABLE IF NOT EXISTS `crime_reports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `witness` tinyint(1) DEFAULT NULL,
  `urgency` tinyint(1) DEFAULT NULL,
  `isSolve` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fraud_reports`
--

DROP TABLE IF EXISTS `fraud_reports`;
CREATE TABLE IF NOT EXISTS `fraud_reports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fraud_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `emergency_services_contacted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consent` tinyint(1) DEFAULT '0',
  `report_anonymously` tinyint(1) DEFAULT NULL,
  `isSolve` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_department`
--

DROP TABLE IF EXISTS `general_department`;
CREATE TABLE IF NOT EXISTS `general_department` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_specialty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legend_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `general_department_location_id_foreign` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_department`
--

INSERT INTO `general_department` (`id`, `department_name`, `department_specialty`, `department_type`, `legend_symbol`, `phone_number`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'Military Police Headquarter', 'Military', 'Police', 'images/map-marker_1.png', '012345678', 1, NULL, NULL),
(2, 'TEUK LAAK 1 Administrative Police Post', 'Administrative', 'Police', 'images/map-marker_1.png', '016893811', 2, NULL, NULL),
(3, 'Anti-Crime Police Office', 'Anti-Crime', 'Police', 'images/map-marker_1.png', '069449999', 3, NULL, NULL),
(4, 'Pacific Phnom Penh Hospital', 'General', 'Medical', 'images/map-marker_2.png', '011959625', 4, NULL, NULL),
(5, 'Chinese Hengda Womens and Childrens Hospital', 'Womens and Childrens', 'Medical', 'images/map-marker_2.png', '010334422', 5, NULL, NULL),
(6, 'Long Hua Zhong Yi Yuan Polyclinic', 'Polyclinic', 'Medical', 'images/map-marker_2.png', '017997349', 6, NULL, NULL),
(7, 'Grand Star Platinum Fire Station, Phnom Penh, Cambodia', 'Fire station', 'Fire', 'images/map-marker_3.png', '016596789', 7, NULL, NULL),
(8, 'Phnom Penh Municipal Fire Police Brigade', 'Fire station', 'Fire', 'images/map-marker_3.png', '012345678', 8, NULL, NULL),
(9, 'Koh Pich Fire Station', 'Fire station', 'Fire', 'images/map-marker_3.png', '012345678', 9, NULL, NULL),
(10, 'Sensok District Inspectors hand quarter', 'Traffic', 'Police', 'images/map-marker_1.png', '012345678', 10, NULL, NULL),
(11, 'Government Office and Poste Dela Police ADM Phnom Penh Thmey', 'Government', 'Police', 'images/map-marker_1.png', '012670116', 11, NULL, NULL),
(12, 'Poste de la Police ADM Khan Sen Sok', 'General', 'Police', 'images/map-marker_1.png', '012345678', 12, NULL, NULL),
(13, 'Sensok Cambodia China Friendship Referral Hospital', 'Referral', 'Medical', 'images/map-marker_2.png', '012345678', 13, NULL, NULL),
(14, 'Bakong Sensok Polyclinic', 'Polyclinic', 'Medical', 'images/map-marker_2.png', '098900441', 14, NULL, NULL),
(15, 'SENSOK CLINIC', 'Clinic', 'Medical', 'images/map-marker_2.png', '012345678', 15, NULL, NULL),
(16, 'Administrative of Police Post Prek Thmei', 'Administrative', 'Police', 'images/map-marker_1.png', '012345678', 16, NULL, NULL),
(17, 'Cho Ray Phnom Penh Hospital', 'General', 'Medical', 'images/map-marker_2.png', '0236841001', 17, NULL, NULL),
(18, 'CHBAR AMPOV POLYCLINIC', 'Polyclinic', 'Medical', 'images/map-marker_2.png', '023720200', 18, NULL, NULL),
(19, 'SomrithMonika Clinic & Maternity', 'Clinic', 'Medical', 'images/map-marker_2.png', '077899894', 19, NULL, NULL),
(20, 'Orchid Koh Pich Hospital', 'General', 'Medical', 'images/map-marker_2.png', '012322025', 20, NULL, NULL),
(21, 'Élysée KohPich Polyclinic', 'Polyclinic', 'Medical', 'images/map-marker_2.png', '077696949', 21, NULL, NULL),
(22, 'Wat Phnom Police Station', 'General', 'Police', 'images/map-marker_1.png', '012345678', 22, NULL, NULL),
(23, 'Japan Eye Hospital', 'Ophthalmology', 'Medical', 'images/map-marker_2.png', '087465283', 23, NULL, NULL),
(24, 'Calmette Hospital', 'General', 'Medical', 'images/map-marker_2.png', '023426948', 24, NULL, NULL),
(25, 'Preah Ang Duong Hospital', 'General', 'Medical', 'images/map-marker_2.png', '023218875', 25, NULL, NULL),
(26, 'Chroy Changvar Police Inspectorate', 'Federal', 'Police', 'images/map-marker_1.png', '012345678', 26, NULL, NULL),
(27, 'Prek Ta Sek Administrative Police Post', 'Administrative ', 'Police', 'images/map-marker_1.png', '012345678', 27, NULL, NULL),
(28, 'Kaoh Dach Administrative of Police Post', 'Administrative', 'Police', 'images/map-marker_1.png', '012345678', 28, NULL, NULL),
(29, 'La Paix Medical Center', 'Medical Center', 'Medical', 'images/map-marker_2.png', '099852030', 29, NULL, NULL),
(30, 'Sunrise Japan Hospital Phnom Penh', 'General', 'Medical', 'images/map-marker_2.png', '023260152', 30, NULL, NULL),
(31, 'Cambodian Family Clinic F.C.C', 'Clinic', 'Medical', 'images/map-marker_2.png', '010818150', 31, NULL, NULL),
(32, 'Chaom Chau Administrative of Police Post', 'Administrative', 'Police', 'images/map-marker_1.png', '010276841', 32, NULL, NULL),
(33, 'Police Post', 'Civil ', 'Police', 'images/map-marker_1.png', '012345678', 33, NULL, NULL),
(34, 'Kakap II Police Station', 'State', 'Police', 'images/map-marker_1.png', '012345678', 34, NULL, NULL),
(35, 'Hebron Medical Center', 'Medical Center', 'Medical', 'images/map-marker_2.png', '0236336119', 35, NULL, NULL),
(36, 'New Phnom Penh Pediatric Clinic', 'Clinic', 'Medical', 'images/map-marker_2.png', '012345678', 36, NULL, NULL),
(37, 'Rim Sokuntheary Hospital', 'General', 'Medical', 'images/map-marker_2.png', '012345678', 37, NULL, NULL),
(38, 'Kambol District Police Inspectorate', 'Inspectorate', 'Police', 'images/map-marker_1.png', '0888838490', 38, NULL, NULL),
(39, 'Kambol Health Center', 'Health Center', 'Medical', 'images/map-marker_2.png', '012345678', 39, NULL, NULL),
(40, 'Rim Sokunthea Cabinet', 'Cabinet', 'Medical', 'images/map-marker_2.png', '012345678', 40, NULL, NULL),
(41, 'Crime Investigation Department', 'Investigation', 'Police', 'images/map-marker_1.png', '0888003167', 41, NULL, NULL),
(42, 'KHMER -SOVIET FRIENDSHIP HOSPITAL', 'General', 'Medical', 'images/map-marker_2.png', '023217524', 42, NULL, NULL),
(43, 'Khema International Polyclinic', 'Polyclinic', 'Medical', 'images/map-marker_2.png', '098911811', 43, NULL, NULL),
(44, 'Sangkat Police BKK1', 'General', 'Police', 'images/map-marker_1.png', '012345678', 44, NULL, NULL),
(45, 'Police Inspection of Boeung Keng Kang District', 'Inspection', 'Police', 'images/map-marker_1.png', '012475757', 45, NULL, NULL),
(46, 'Poste Dela Police A.D.M Boeung Keng Kang III', 'General', 'Police', 'images/map-marker_1.png', '012931631', 46, NULL, NULL),
(47, 'Mekong Clinic', 'Clinic', 'Medical', 'images/map-marker_2.png', '012345678', 47, NULL, NULL),
(48, 'Police Inspection of Dangkor District', 'Inspection', 'Police', 'images/map-marker_1.png', '0888787198', 48, NULL, NULL),
(49, 'Dangkao Referral Hospital', 'Referral', 'Medical', 'images/map-marker_2.png', '012345678', 49, NULL, NULL),
(50, 'Royal Gendarmerie of Phnom Penh', 'Gendarmerie', 'Police', 'images/map-marker_1.png', '0313556322', 50, NULL, NULL),
(51, 'Orienda International Hospital', 'General', 'Medical', 'images/map-marker_2.png', '023232789', 51, NULL, NULL),
(52, 'Gendarmerie Rusey Keo', 'Gendarmerie', 'Police', 'images/map-marker_1.png', '012345678', 52, NULL, NULL),
(53, 'Prek Pneou Referral Hospital', 'Referral', 'Medical', 'images/map-marker_2.png', '012345678', 53, NULL, NULL),
(54, 'Inspection of Prampey Makara', 'Gendarmerie', 'Police', 'images/map-marker_1.png', '012345678', 54, NULL, NULL),
(55, 'Phnom Penh Municipal Referral Hospital', 'Referral', 'Medical', 'images/map-marker_2.png', '023881612', 55, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_longitude` decimal(9,6) NOT NULL,
  `position_latitude` decimal(9,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`, `address`, `position_longitude`, `position_latitude`, `created_at`, `updated_at`) VALUES
(1, 'Toul Kork', 'HVJX+VW7, National Road 1, Phnom Penh', '104.901479', '11.588825', NULL, NULL),
(2, 'Toul Kork', 'HV8V+2WH, No. 14, St. 259, St 259, Phnom Penh 12156', '104.894701', '11.566475', NULL, NULL),
(3, 'Toul Kork', 'HW52+629, St 230, Phnom Penh', '104.900025', '11.558975', NULL, NULL),
(4, 'Toul Kork', '99 Russian Federation Blvd (110), Phnom Penh', '104.889924', '11.569192', NULL, NULL),
(5, 'Toul Kork', '# 207, Street 182, Sangkat Phsar Depot I, 12153', '104.901425', '11.565240', NULL, NULL),
(6, 'Toul Kork', '155AB Jawaharlal Nehru Blvd (215), Phnom Penh', '104.907348', '11.564315', NULL, NULL),
(7, 'Chbar Ampov', 'Street Polaris, Phnom Penh', '104.957676', '11.526009', NULL, NULL),
(8, 'Sen Sok', 'JVP7+75V, Unnamed Road, Phnom Penh', '104.862592', '11.639606', NULL, NULL),
(9, 'Koh Pich', 'HW2V+52W, Koh Pich St, Phnom Penh', '104.943946', '11.554108', NULL, NULL),
(10, 'Sen Sok', 'HVX7+79W, Phnom Penh', '104.863107', '11.601175', NULL, NULL),
(11, 'Sen Sok', 'HVHH+765, Street 1972, Phnom Penh', '104.879168', '11.581790', NULL, NULL),
(12, 'Sen Sok', 'No 03-4, Str. 1019 (Hanoi), Russei Keo, Street 1972', '104.869726', '11.580949', NULL, NULL),
(13, 'Sen Sok', 'Phnom Penh, Unnamed Road', '104.847947', '11.625966', NULL, NULL),
(14, 'Sen Sok', '135-137 street 1928, Phnom Penh 12411', '104.842283', '11.588973', NULL, NULL),
(15, 'Sen Sok', 'HRHR+4F3, Street 105K, Phnom Penh', '104.841596', '11.582414', NULL, NULL),
(16, 'Chbar Ampov', 'FXM3+5R2, Phnom Penh', '104.955536', '11.486680', NULL, NULL),
(17, 'Chbar Ampov', '1 NR1, Phnom Penh', '104.961227', '11.536739', NULL, NULL),
(18, 'Chbar Ampov', 'GWJQ+GR6, Street 638, Phnom Penh', '104.939700', '11.533768', NULL, NULL),
(19, 'Chbar Ampov', 'NR1, Phnom Penh', '104.961673', '11.540328', NULL, NULL),
(20, 'Koh Pich', 'Yale Road, Phnom Penh 12000', '104.938139', '11.543978', NULL, NULL),
(21, 'Koh Pich', 'GWVQ+84 Phnom Penh', '104.937784', '11.543617', NULL, NULL),
(22, 'Daun Penh', 'HWG9+WVF, Phnom Penh', '104.919723', '11.578596', NULL, NULL),
(23, 'Daun Penh', '8F, No, Central Hospital, 82 Street 154, Phnom Penh 120203', '104.923388', '11.568620', NULL, NULL),
(24, 'Daun Penh', '34 Preah Monivong Blvd (93), Phnom Penh', '104.915045', '11.582885', NULL, NULL),
(25, 'Daun Penh', 'HWCF+M98, Jok Dimitrov Blvd, Phnom Penh', '104.924144', '11.572458', NULL, NULL),
(26, 'Chroy Changvar', 'JWGC+6W3, Unnamed Road, Phnom Penh', '104.922631', '11.630390', NULL, NULL),
(27, 'Chroy Changvar', 'JWH6+XJ4, Phnom Penh', '104.912674', '11.632576', NULL, NULL),
(28, 'Chroy Changvar', 'MXP4+W98, Phnom Penh', '104.956482', '11.690616', NULL, NULL),
(29, 'Chroy Changvar', 'Corner of Aphivath Street, House AP1-1130, 1st floor, Brahma roundabout, distance 950, m 121001', '104.925013', '11.600287', NULL, NULL),
(30, 'Chroy Changvar', '177E, Kola Loum Street (the Bay Road), Group 2, Phum 2, Sangkat, Phnom Penh', '104.931053', '11.581750', NULL, NULL),
(31, 'Chroy Changvar', 'Keo Chenda St, Phnom Penh 12110', '104.933780', '11.589290', NULL, NULL),
(32, 'Porsenchey', 'GRMF+9RH, Phnom Penh', '104.825426', '11.537132', NULL, NULL),
(33, 'Porsenchey', 'HV74+2G8, Phnom Penh', '104.856840', '11.566227', NULL, NULL),
(34, 'Porsenchey', 'HR8R+G97, Phnom Penh', '104.841243', '11.568373', NULL, NULL),
(35, 'Porsenchey', '102 Street 68k, Phnom Penh', '104.839612', '11.563411', NULL, NULL),
(36, 'Porsenchey', 'HR2Q+5GM, Phnom Penh', '104.838397', '11.551994', NULL, NULL),
(37, 'Porsenchey', 'GQFQ+25C, Phnom Penh', '104.789000', '11.524622', NULL, NULL),
(38, 'Kamboul', 'GQM6+R7G, Phnom Penh', '104.760955', '11.537520', NULL, NULL),
(39, 'Kamboul', 'GQFM+866, Phnom Penh', '104.783336', '11.527728', NULL, NULL),
(40, 'Kamboul', '#street42,preyboung,kantouk, Phnom Penh', '104.787807', '11.524484', NULL, NULL),
(41, 'Chamkar Mon', 'GWPG+JR7, CID, Cambodia, Oknha Nhek Tioulong St. (466), Phnom Penh', '104.926499', '11.538120', NULL, NULL),
(42, 'Chamkar Mon', 'Phnom, Yuthapol Khmemarak Phoumin Blvd, Penh 12306', '104.903753', '11.546446', NULL, NULL),
(43, 'Chamkar Mon', '#28, Oknha Chrun You Hak St. (294), Phnom Penh', '104.925554', '11.554692', NULL, NULL),
(44, 'Boeng Keng Kang', 'HW2G+9XF, St 322, Phnom Penh', '104.927307', '11.551881', NULL, NULL),
(45, 'Boeng Keng Kang', '19 St 374, Phnom Penh', '104.909021', '11.548055', NULL, NULL),
(46, 'Boeng Keng Kang', 'No. 238, European Union (St. 143), Phnom Penh 12304', '104.916326', '11.548527', NULL, NULL),
(47, 'Boeng Keng Kang', 'HW2F+FHC, Preah Trasak Paem St. (63), Phnom Penh', '104.924102', '11.552252', NULL, NULL),
(48, 'Dangkao', 'Dangkao Police Station, Phnom Penh', '104.892969', '11.511767', NULL, NULL),
(49, 'Dangkao', 'GV3R+QMJ, Chamkar Doung Street (217), Phnom Penh 12401', '104.892132', '11.505392', NULL, NULL),
(50, 'Mean Chey', 'Phnom Penh Gendarmerie, Veng Sreng Blvd, Phnom Penh', '104.884837', '11.536539', NULL, NULL),
(51, 'Mean Chey', '66, Street 31cc, 3, Phnom Penh 120605', '104.869259', '11.538054', NULL, NULL),
(52, 'Russey Keo', 'Russey Keo Police Office, Phnom Penh', '104.904162', '11.629399', NULL, NULL),
(53, 'Preaek Pnov', 'National Highway 5, Prek Pnov Bridge, 12401', '104.862067', '11.662692', NULL, NULL),
(54, 'Prampi Makara', 'HW76+C6R, Oknha Tep Phan, Phnom Penh', '104.910423', '11.564137', NULL, NULL),
(55, 'Prampi Makara', 'No. 137-139, Czech Republic Blvd (169), corner of Street 134, Phnom Penh 12253', '104.912561', '11.567976', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found_property_reports`
--

DROP TABLE IF EXISTS `lost_and_found_property_reports`;
CREATE TABLE IF NOT EXISTS `lost_and_found_property_reports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contact_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consent` tinyint(1) DEFAULT '0',
  `isSolve` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2023_05_31_045334_create_location_table', 1),
(30, '2023_05_31_045343_create_general_department_table', 1),
(31, '2023_05_31_045400_create_personal_record_table', 1),
(32, '2023_06_16_030451_create_crime_reports_table', 1),
(33, '2023_06_16_030528_create_fraud_reports_table', 1),
(34, '2023_06_16_030559_create_road_traffic_incident_reports_table', 1),
(35, '2023_06_16_030810_create_lost_and_found_property_reports_table', 1),
(36, '2023_06_29_223230_create_tasks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 1, 'API Token', 'f7e30e4fbd9ee3c3d342911d005b41a1c87546c03c28c937e8019ca68d10e204', '[\"*\"]', '2023-07-09 09:00:14', '2023-07-09 08:59:04', '2023-07-09 09:00:14'),
(3, 'App\\Models\\User', 1, 'API Token', '9b2c42dbd1abdce2bb470abbe1c7f16a2abdc7d4458d0b3e47ddea365d4354a5', '[\"*\"]', NULL, '2023-07-09 08:59:32', '2023-07-09 08:59:32'),
(6, 'App\\Models\\User', 1, 'API Token', 'c8c1d6ea42883efc4b45786b42b647c7419053c1a86993f0c34d8b1b33aaf9c0', '[\"*\"]', '2023-07-09 09:02:37', '2023-07-09 09:02:30', '2023-07-09 09:02:37'),
(8, 'App\\Models\\User', 1, 'API Token', '37b4337cdc23776531497f77efbc5d957fcae1377b0ce65eae8bfacf2dd609a9', '[\"*\"]', NULL, '2023-07-09 09:28:57', '2023-07-09 09:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_record`
--

DROP TABLE IF EXISTS `personal_record`;
CREATE TABLE IF NOT EXISTS `personal_record` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `account_id` bigint UNSIGNED DEFAULT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personal_record_account_id_foreign` (`account_id`),
  KEY `personal_record_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_record`
--

INSERT INTO `personal_record` (`id`, `first_name`, `last_name`, `email`, `occupation`, `position`, `phone_number`, `date_of_birth`, `account_id`, `department_id`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'Soth1', 'Kimleng', 'admin@gmail.com', 'IT Support', 'Support', '012 964 520', NULL, 1, NULL, 1, '2023-07-09 09:00:14', '2023-07-09 09:00:14'),
(2, '123', '123', NULL, '123', '123', '123', '2023-06-28', 2, NULL, 1, '2023-07-09 09:01:52', '2023-07-09 09:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `road_traffic_incident_reports`
--

DROP TABLE IF EXISTS `road_traffic_incident_reports`;
CREATE TABLE IF NOT EXISTS `road_traffic_incident_reports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reporter_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_description` text COLLATE utf8mb4_unicode_ci,
  `emergency_assistance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_reporter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consent` tinyint(1) DEFAULT '0',
  `isSolve` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medium',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `permission_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isActive`, `permission_level`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$1m7EMoZDfvMOMM/yJ3DZ.elhCcVgaQ0b8VMMc1w2RqRdB8pvEpZaK', 1, 'Super Admin', NULL, NULL, '2023-07-09 08:57:39', '2023-07-09 08:57:39'),
(2, 'admin', '$2y$10$puI5YMrSW/cDD/VkCYxdxe9IOb.CX1UYvLz08YLH6pW50R2O/GRX2', 1, 'Super Admin', NULL, NULL, '2023-07-09 09:02:09', '2023-07-09 09:02:09');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `general_department`
--
ALTER TABLE `general_department`
  ADD CONSTRAINT `general_department_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal_record`
--
ALTER TABLE `personal_record`
  ADD CONSTRAINT `personal_record_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `personal_record_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `general_department` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
