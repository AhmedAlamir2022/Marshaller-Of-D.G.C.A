-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 08:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marshaller`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `contact`, `address`, `country`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Mubarak Alrumaidheen', 'admin123@gmail.com', NULL, '$2y$10$8gN64ngpZ52wMaTcDmCRLuhIzug3qo3hlMIVkdPBHqKo/siWwBki.', 'Mubarak Alrumaidheen', '87961259', 'Kwuit - Alahmady', 'Kwuit', 'Alahmady', '2023-02-03 07:30:01', '2023-04-12 09:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `contact`, `gender`, `nationality`, `bloodtype`, `address`, `country`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Mubark Ali', 'mubarkali@gmail.com', NULL, '$2y$10$ylPRCUH4ScJVv6VY3cElVOX0SR0AYyWg/759ZT3LW7ooHVY2CbLI2', 'Mubark_ALi', '56328794', 'Male', 'Kuwaiti', 'O+', 'Kwuit / Ahmady', 'Kwuit', 'Ahmady', NULL, '2023-02-10 06:23:40', '2023-03-27 09:06:10'),
(4, 'Ali Khaled', 'alikhaled@gmail.com', NULL, '$2y$10$5mxbT3G3DSxgC/dHVDMrdOTnlvLiHqVZwRKnIrYQz1VufkIDpiMxa', 'Ali_Khaled', '84957849', 'Male', 'Kuwaiti', 'AB+', 'Kuwait - Salmiya', 'Kuwait', 'Salmiya', NULL, '2023-02-11 04:44:03', '2023-03-27 09:04:39'),
(5, 'Motazz Maher', 'motazz@gmail.com', NULL, '$2y$10$9R55E4K04s5xPYId22d2JuVznM61nrdii31HJHZRD4xkwxK2XK58O', 'Motazz_Maher', '58749214', 'Male', 'Kuwaiti', 'B+', 'Kwuit - Kwuit', 'Kwuit', 'Kwuit', NULL, '2023-03-27 09:07:47', NULL),
(6, 'Maged Maher', 'maged@gmail.com', NULL, '$2y$10$XCUqAya/sazAz3S51zQQVOhXIZGt5ilZ3R1qeNFtL0vdrJt47.p6m', 'Maged_Maher', '52639874', 'Male', 'Kuwaiti', 'A+', 'Kwuit - Salmiya', 'Kwuit', 'Salmiya', NULL, '2023-03-27 09:09:53', NULL),
(8, 'Ahmed Alamir', 'ahmedalamir@gmail.com', NULL, '$2y$10$rwnV8BQKJINylH/LTGZNP.wy5ThIt.eAuPQRoTHtX.eq927OzUVoS', 'ahmedalamir', '01012921224', 'Male', 'Egyptian', 'AB+', 'Egypt - Cairo', 'Egypt', 'Cairo', NULL, '2023-04-23 07:10:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE IF NOT EXISTS `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `title`, `gallery_image`, `created_at`, `updated_at`) VALUES
(3, 'Image 2', 'upload/1757523772748165.png', '2023-02-11 06:48:02', NULL),
(4, 'Image 3', 'upload/1757523788540018.png', '2023-02-11 06:48:17', NULL),
(5, 'Image 4', 'upload/1757523802006962.png', '2023-02-11 06:48:30', NULL),
(6, 'Image 5', 'upload/1757523812880177.png', '2023-02-11 06:48:41', NULL),
(7, 'Image 6', 'upload/1757523826756172.png', '2023-02-11 06:48:54', NULL),
(8, 'Image 7', 'upload/1757523844274028.png', '2023-02-11 06:49:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_03_071703_create_admins_table', 2),
(6, '2023_02_09_110643_create_nationalities_table', 3),
(7, '2023_02_09_113149_create_type__bloods_table', 4),
(8, '2023_02_09_130635_create_employees_table', 5),
(9, '2023_02_10_090323_create_plans_table', 6),
(10, '2023_02_11_082226_create_gallaries_table', 7),
(11, '2023_02_11_085703_create_contacts_table', 8),
(12, '2023_02_11_092503_create_quieries_table', 9),
(13, '2023_03_27_123423_create_privacies_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE IF NOT EXISTS `nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=739 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(493, 'Afghan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(494, 'Albanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(495, 'Aland Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(496, 'Algerian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(497, 'American Samoan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(498, 'Andorran', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(499, 'Angolan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(500, 'Anguillan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(501, 'Antarctican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(502, 'Antiguan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(503, 'Argentinian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(504, 'Armenian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(505, 'Aruban', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(506, 'Australian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(507, 'Austrian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(508, 'Azerbaijani', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(509, 'Bahamian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(510, 'Bahraini', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(511, 'Bangladeshi', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(512, 'Barbadian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(513, 'Belarusian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(514, 'Belgian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(515, 'Belizean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(516, 'Beninese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(517, 'Saint Barthelmian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(518, 'Bermudan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(519, 'Bhutanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(520, 'Bolivian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(521, 'Bosnian / Herzegovinian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(522, 'Botswanan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(523, 'Bouvetian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(524, 'Brazilian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(525, 'British Indian Ocean Territory', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(526, 'Bruneian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(527, 'Bulgarian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(528, 'Burkinabe', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(529, 'Burundian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(530, 'Cambodian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(531, 'Cameroonian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(532, 'Canadian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(533, 'Cape Verdean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(534, 'Caymanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(535, 'Central African', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(536, 'Chadian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(537, 'Chilean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(538, 'Chinese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(539, 'Christmas Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(540, 'Cocos Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(541, 'Colombian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(542, 'Comorian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(543, 'Congolese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(544, 'Cook Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(545, 'Costa Rican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(546, 'Croatian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(547, 'Cuban', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(548, 'Cypriot', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(549, 'Curacian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(550, 'Czech', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(551, 'Danish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(552, 'Djiboutian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(553, 'Dominican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(554, 'Dominican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(555, 'Ecuadorian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(556, 'Egyptian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(557, 'Salvadoran', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(558, 'Equatorial Guinean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(559, 'Eritrean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(560, 'Estonian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(561, 'Ethiopian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(562, 'Falkland Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(563, 'Faroese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(564, 'Fijian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(565, 'Finnish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(566, 'French', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(567, 'French Guianese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(568, 'French Polynesian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(569, 'French', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(570, 'Gabonese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(571, 'Gambian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(572, 'Georgian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(573, 'German', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(574, 'Ghanaian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(575, 'Gibraltar', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(576, 'Guernsian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(577, 'Greek', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(578, 'Greenlandic', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(579, 'Grenadian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(580, 'Guadeloupe', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(581, 'Guamanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(582, 'Guatemalan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(583, 'Guinean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(584, 'Guinea-Bissauan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(585, 'Guyanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(586, 'Haitian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(587, 'Heard and Mc Donald Islanders', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(588, 'Honduran', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(589, 'Hongkongese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(590, 'Hungarian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(591, 'Icelandic', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(592, 'Indian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(593, 'Manx', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(594, 'Indonesian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(595, 'Iranian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(596, 'Iraqi', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(597, 'Irish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(598, 'Italian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(599, 'Ivory Coastian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(600, 'Jersian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(601, 'Jamaican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(602, 'Japanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(603, 'Jordanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(604, 'Kazakh', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(605, 'Kenyan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(606, 'I-Kiribati', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(607, 'North Korean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(608, 'South Korean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(609, 'Kosovar', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(610, 'Kuwaiti', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(611, 'Kyrgyzstani', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(612, 'Laotian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(613, 'Latvian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(614, 'Lebanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(615, 'Basotho', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(616, 'Liberian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(617, 'Libyan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(618, 'Liechtenstein', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(619, 'Lithuanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(620, 'Luxembourger', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(621, 'Sri Lankian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(622, 'Macanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(623, 'Macedonian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(624, 'Malagasy', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(625, 'Malawian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(626, 'Malaysian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(627, 'Maldivian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(628, 'Malian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(629, 'Maltese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(630, 'Marshallese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(631, 'Martiniquais', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(632, 'Mauritanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(633, 'Mauritian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(634, 'Mahoran', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(635, 'Mexican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(636, 'Micronesian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(637, 'Moldovan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(638, 'Monacan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(639, 'Mongolian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(640, 'Montenegrin', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(641, 'Montserratian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(642, 'Moroccan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(643, 'Mozambican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(644, 'Myanmarian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(645, 'Namibian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(646, 'Nauruan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(647, 'Nepalese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(648, 'Dutch', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(649, 'Dutch Antilier', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(650, 'New Caledonian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(651, 'New Zealander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(652, 'Nicaraguan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(653, 'Nigerien', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(654, 'Nigerian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(655, 'Niuean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(656, 'Norfolk Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(657, 'Northern Marianan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(658, 'Norwegian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(659, 'Omani', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(660, 'Pakistani', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(661, 'Palauan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(662, 'Palestinian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(663, 'Panamanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(664, 'Papua New Guinean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(665, 'Paraguayan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(666, 'Peruvian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(667, 'Filipino', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(668, 'Pitcairn Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(669, 'Polish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(670, 'Portuguese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(671, 'Puerto Rican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(672, 'Qatari', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(673, 'Reunionese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(674, 'Romanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(675, 'Russian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(676, 'Rwandan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(677, 'Kittitian/Nevisian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(678, 'St. Martian(French)', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(679, 'St. Martian(Dutch)', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(680, 'St. Pierre and Miquelon', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(681, 'Saint Vincent and the Grenadines', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(682, 'Samoan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(683, 'Sammarinese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(684, 'Sao Tomean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(685, 'Saudi Arabian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(686, 'Senegalese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(687, 'Serbian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(688, 'Seychellois', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(689, 'Sierra Leonean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(690, 'Singaporean', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(691, 'Slovak', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(692, 'Slovenian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(693, 'Solomon Island', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(694, 'Somali', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(695, 'South African', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(696, 'South Georgia and the South Sandwich', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(697, 'South Sudanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(698, 'Spanish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(699, 'St. Helenian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(700, 'Sudanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(701, 'Surinamese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(702, 'Svalbardian/Jan Mayenian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(703, 'Swazi', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(704, 'Swedish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(705, 'Swiss', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(706, 'Syrian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(707, 'Taiwanese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(708, 'Tajikistani', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(709, 'Tanzanian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(710, 'Thai', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(711, 'Timor-Lestian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(712, 'Togolese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(713, 'Tokelaian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(714, 'Tongan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(715, 'Trinidadian/Tobagonian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(716, 'Tunisian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(717, 'Turkish', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(718, 'Turkmen', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(719, 'Turks and Caicos Islands', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(720, 'Tuvaluan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(721, 'Ugandan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(722, 'Ukrainian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(723, 'Emirati', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(724, 'British', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(725, 'American', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(726, 'US Minor Outlying Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(727, 'Uruguayan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(728, 'Uzbek', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(729, 'Vanuatuan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(730, 'Venezuelan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(731, 'Vietnamese', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(732, 'American Virgin Islander', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(733, 'Vatican', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(734, 'Wallisian/Futunan', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(735, 'Sahrawian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(736, 'Yemeni', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(737, 'Zambian', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(738, 'Zimbabwean', '2023-02-09 09:33:43', '2023-02-09 09:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

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

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `airline_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airplane_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `airplane_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plans_employee_id_foreign` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `airline_company`, `flight_number`, `airplane_type`, `gate`, `time`, `arrival`, `employee_id`, `airplane_reg`, `notes`, `created_at`, `updated_at`) VALUES
(4, 'HKU', '524', '854', '854', '12:30', 'HUY', 4, '80K', 'No Notes', '2023-02-12 05:52:41', NULL),
(5, 'JZR', '406', '320', '134', '05:15', 'COK', 6, '5k', 'No Notes', '2023-03-27 09:34:39', NULL),
(7, 'THY', '770', '320', '138', '05:35', 'OSS', 8, '7k', 'No Notes', '2023-03-27 10:10:17', NULL),
(8, 'BAW', '157', '787', '5', '06:10', 'LHR', 6, '5K', 'No Notes', '2023-03-27 10:11:22', NULL),
(9, 'kAC', '204', '330', '56', '07:00', 'lHE', 3, '2K', 'No Notes', '2023-03-27 10:12:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE IF NOT EXISTS `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Data Controller', 'Dolor semper amet, sed phasellus, leo velit quis cras vitae ipsum auctor, et cenas ultrices rhoncus. A tellus vel dis. Magna ad facilisi vestibulum, sagittis imper amet ultricies eu, hac egestas ante amet dis dui. Velit integer, tellus ac proin faucibus morbi era ultrices odio, scelerisaccumsan. Id ptem mi phasellus massa ac, adipiscinalesuada sollicitudin donec fusce. In ac lorem, quis eu eros numquam vestilum, ac curabitur quam sed non hendrerit. Sed duis, nec felis aliquam. Sit ut dapibus in donec vitae,purus et, tincidunt egestas phasellus et curabitur massa erat\r\n\r\nA Quibus Propter Discendi Cupiditatem Esse Peragratas.\r\nMperiemus. Atque His De Rebus Et Splendida\r\nNihilne Te Delectat Umquam Te Igitur, Torquate', '2023-03-27 10:46:30', '2023-03-27 10:55:34'),
(3, 'Cookies Data', 'Montes sed, pharetra ut vestibulum vitae. Commodo vel sagittis lacus ut, orci eu risus, tincidunt maecenas vitae libero placerat porttitor quis, tellus malesuada inceptos lacinia, etiam non sed. Curabitur lacus, a ullamcorper mi aenean ligula ligula torquent, aperiam eget donec, adipiscing amet. Sagittis arcu et cotetuer pharetra eget eleifend, sem suscipit, sagittis sagittis pharetradolor.wisi sit consequat nulla eu, ipsum nisl et porttitor wisi, tincidunt pellentesque magnis magna massa. Sapien molestie vestibulum, vestibulum nisl hac nibh fermentum, arcu sit eros justo sodales quis a, accumsan consequat faucibus tincidunt et urna consectetuer, maecenas justo turpis urna. Venenatis non sed cursus ipsum duis amet', '2023-03-27 10:52:51', NULL),
(4, 'How To We Collect Data', 'Felis proin scelerisque auctor, neque massa facilisis quam euismod tincidunt, eu quis quam nulla dolor ligula vestibulum. Cras proin tellus nonummy fusce proin at, sed augue suspendisse urna, urna recusandae vitae dolor, proident mi ipsum ut vivamus. Fames ut nonummy, hendrerit nulla. Ipsum augue auctor montes aliquid phasellus, massa integer scelerisque etiam proin, hendrerit est nullam, dui facilisi elit malesuada. Mauris leo vel euismod tempus vehicula feugiat, euismod ipsum suspendisse aptent non tempus urna, sollicitudin praesent nunc, vehicula placerat wisi justo velit velit, maecenas velit quisque dignissim. Amet risus leo montes, velit arcu et commodo ut quis aliquam.', '2023-03-27 10:55:50', NULL),
(5, 'Why Do We Collect This Data?', 'Temporibus at ac iaculis curabitur aenean, nam magna diam aliquam magnam hac, vitae tortor aliquam, vestibulum dolor urna elit mauris. Imperdiet ea, metus convallis arcu mi faucibus tristique nec, erat vel placerat nullam wisi aliquam, mi tempor sit. Rutrum eros magna ante nec nonummy, pede suscipit massa massa fusce at vitae. Volutpat pretium.Lorem ipsum dolor sit amet, hendrerit nisl tincidunt, condimentum faucibus hendrerit sed ac, nam in erat arcu eu, purus maecenas, nulla turpis elit in. Ut mauris ut sed at,ligula eget suspendisse in quam egestas eget. Natoque duis in, wisi id id donec, tellus rutrum proin. A neque ad, sed eu. Nulla mollis duis ultricies sollicitudin, elit vel vestibulum quis, nisl sed quam.\r\n\r\nA Quibus Propter Discendi Cupiditatem Esse Peragratas.\r\nMperiemus. Atque His De Rebus Et Splendida\r\nNihilne Te Delectat Umquam Te Igitur, Torquate', '2023-03-27 10:56:04', NULL),
(6, 'Service Terms & Condition', 'Suspendisse, et vehicula, sed justo scelerisque wisi morbi, scelerisque eu mauris est. Bibendum sodales tincidunt ipsum, at pretium mauris mauris mauris sithula, mauris orci est eu, montes enim mattis eu pharetra duis, adipiscing sit nullglortis risus. Diam donec ridiculus, odio nulla mauris, convallis metus etiam conubia vel mattis elit. Netus felis, aliquam tincidunt. Nec vel rerum turpis per donec mauris, adipiscing viverra rutrum, interdum quis nunc dictum mauris malesuada urna, vel velit quisque accumsan.', '2023-03-27 10:56:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quieries`
--

CREATE TABLE IF NOT EXISTS `quieries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quieries`
--

INSERT INTO `quieries` (`id`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Kwuit - Kwuit', '85974859', 'MubarakAlrumaidheen@gmail.com', '2023-02-11 09:25:56', '2023-03-27 12:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `type__bloods`
--

CREATE TABLE IF NOT EXISTS `type__bloods` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type__bloods`
--

INSERT INTO `type__bloods` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'O-', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(2, 'O+', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(3, 'A+', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(4, 'A-', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(5, 'B+', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(6, 'B-', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(7, 'AB+', '2023-02-09 09:33:43', '2023-02-09 09:33:43'),
(8, 'AB-', '2023-02-09 09:33:43', '2023-02-09 09:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodtype` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `contact`, `gender`, `nationality`, `bloodtype`, `address`, `country`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Alamir', 'alamir521@gmail.com', NULL, '$2y$10$1Bv.0K3cL7f9.pS9gKJzkueiL4HiWjFn38ziN3haMXVQdajS4Pz32', '', '', '', '', '', '', '', '', 'lTfcL2IxC5QBHpjJ2zzubTc2ovO5cT82rYqQrKB4O8ByPm1QL48UGitcwmsI', '2023-02-03 05:10:35', '2023-02-03 05:10:35'),
(2, 'Ahmed Alamir', 'ahmed521@gmail.com', NULL, '$2y$10$RScZjvfjlQ/rHS1iDjfiquqi7mfPGS0yhz8gKZwUXelqpzcVmLJqy', '', '', '', '', '', '', '', '', NULL, '2023-02-09 10:49:20', '2023-02-09 10:49:20'),
(3, 'Mostafa Mohamed', 'mostafa521@gmail.com', NULL, '$2y$10$FYL/9yg512wIMgiIPwIiYObJNu703lDTu3ur2MlieCB9AB5.jscuq', '', '', '', '', '', '', '', '', NULL, '2023-02-09 10:52:56', '2023-02-09 10:52:56'),
(4, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', NULL, '$2y$10$pEtpW6Nqw/1OEYMvpE1Xt.s98M8olhUwdIqygVWgaiE6EMnuBWe8m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 10:58:04', '2023-02-09 10:58:04');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
