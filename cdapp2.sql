-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 06:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdapp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(350) DEFAULT NULL,
  `title` varchar(350) DEFAULT NULL,
  `short_description` varchar(350) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `industry` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `name`, `page_id`, `image`, `title`, `short_description`, `link`, `service`, `sub_category`, `industry`, `created_at`, `updated_at`) VALUES
(7, 'case study 1', 18, 'imaeg2.jpg', 'asdfas', 'dfasfdas', NULL, 1, 1, 3, '2021-12-27 04:44:57', '2021-12-27 04:44:57'),
(8, 'slider 1', 18, 'image4.jpg', 'asdfas', 'dfasfasdf', 'testing', 1, 2, 1, '2021-12-27 04:48:15', '2021-12-27 04:48:15'),
(9, 'slider 1', 18, 'image1.jpg', 'asdfasd', 'fasdfasdf', NULL, 1, 3, 2, '2021-12-27 04:48:15', '2021-12-27 04:48:15'),
(10, 'slider 1', 18, 'image3.jpg', 'sdfaf', 'asdfads', NULL, 1, 1, 3, '2021-12-27 04:48:15', '2021-12-27 04:48:15'),
(11, 'case study 2', 2, 'No-image-found.jpg', 'asdfas', 'dfasfdasfd', NULL, 1, 1, 2, '2021-12-27 04:54:18', '2021-12-27 04:54:18'),
(12, 'case study 2', 2, 'password.png', 'sfdasdf', 'asdfasd', NULL, 2, 2, 2, '2021-12-27 04:54:18', '2021-12-27 04:54:18'),
(13, 'case study 1', NULL, 'password.png', 'asdfasdfas', 'fasdfasdfas', NULL, 1, 1, 1, '2021-12-30 15:03:45', '2021-12-30 15:03:45'),
(14, 'case study 1', NULL, 'No-image-found.jpg', 'asdf asd fasdf', 's fsdaffsd', NULL, 1, 5, 3, '2021-12-30 15:03:45', '2021-12-30 15:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `child_menus`
--

CREATE TABLE `child_menus` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `featured_service` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_menus`
--

INSERT INTO `child_menus` (`id`, `menu_id`, `item_name`, `item_link`, `sorting`, `featured_service`, `created_at`, `updated_at`) VALUES
(1, '1', 'Logo Design', 'logo_design', NULL, 'yes', '2021-07-24 16:19:15', '2021-07-24 16:19:15'),
(2, '1', 'Graphic Design', 'graphic-design', NULL, NULL, '2021-07-24 16:19:24', '2021-07-24 16:19:24'),
(3, '1', 'Brochures', 'brouchers', NULL, NULL, '2021-07-24 16:19:32', '2021-07-24 16:19:32'),
(4, '1', 'Presentations', 'presentations', NULL, NULL, '2021-07-24 16:19:42', '2021-07-24 16:19:42'),
(5, '2', 'Product Design', 'product-design', NULL, NULL, '2021-07-24 16:20:15', '2021-07-24 16:20:15'),
(6, '2', 'Websites', 'websites', NULL, NULL, '2021-07-24 16:20:22', '2021-07-24 16:20:22'),
(7, '2', 'Mobile Apps', 'mobile-apps', NULL, NULL, '2021-07-24 16:20:29', '2021-07-24 16:20:29'),
(8, '2', 'Support', 'support', NULL, NULL, '2021-07-24 16:20:36', '2021-07-24 16:20:36'),
(9, '3', 'Videography', 'videography', NULL, NULL, '2021-07-24 16:20:50', '2021-07-24 16:20:50'),
(10, '3', 'Photography', 'photography', NULL, NULL, '2021-07-24 16:20:58', '2021-07-24 16:20:58'),
(11, '3', '3D Animation\r\n', '3d-animation', NULL, NULL, '2021-07-24 16:21:06', '2021-07-24 16:21:06'),
(12, '3', '2D Animation\r\n', '2d-animation', NULL, NULL, '2021-07-24 16:21:14', '2021-07-24 16:21:14'),
(13, '4', 'Digital Marketing', 'digital-marketing', NULL, NULL, '2021-07-24 16:21:29', '2021-07-24 16:21:29'),
(14, '4', 'Social Media Marketing', 'social-media-marketing', NULL, NULL, '2021-07-24 16:21:35', '2021-07-24 16:21:35'),
(15, '4', 'Consultancy', 'consultancy', NULL, NULL, '2021-07-24 16:21:42', '2021-07-24 16:21:42'),
(16, '5', 'Design Services', 'design-services', NULL, NULL, '2021-07-24 16:23:52', '2021-07-24 16:23:52'),
(17, '5', 'Website & Mobile Apps', 'website-and-mobile-apps', NULL, NULL, '2021-07-24 16:23:57', '2021-07-24 16:23:57'),
(18, '5', 'Videos & Photography', NULL, NULL, NULL, '2021-07-24 16:24:03', '2021-07-24 16:24:03'),
(19, '5', '3D & 2D Animation', NULL, NULL, NULL, '2021-07-24 16:24:10', '2021-07-24 16:24:10'),
(20, '5', 'Consultancy Services', NULL, NULL, NULL, '2021-07-24 16:24:15', '2021-07-24 16:24:15'),
(21, '5', 'Digital Marketing\r\n', NULL, NULL, NULL, '2021-07-24 16:24:23', '2021-07-24 16:24:23'),
(22, '6', 'Agency', NULL, NULL, NULL, '2021-07-24 16:24:51', '2021-07-24 16:24:51'),
(23, '6', 'Services', NULL, NULL, NULL, '2021-07-24 16:24:57', '2021-07-24 16:24:57'),
(24, '6', 'Industries', NULL, NULL, NULL, '2021-07-24 16:25:09', '2021-07-24 16:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `clientandparterimage`
--

CREATE TABLE `clientandparterimage` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientandparterimage`
--

INSERT INTO `clientandparterimage` (`id`, `page_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(9, 18, 'Home Section 1', 'team-1.jpg', '2021-12-28 12:44:53', '2021-12-28 12:44:53'),
(10, 18, 'Home Section 1', 'ftp_access.png', '2021-12-28 12:44:53', '2021-12-28 12:44:53'),
(11, NULL, 'client group 8', 'image4.jpg', '2021-12-30 15:07:21', '2021-12-30 15:07:21'),
(12, NULL, 'client group 8', 'image1.jpg', '2021-12-30 15:07:21', '2021-12-30 15:07:21'),
(13, NULL, 'client group 8', 'imaeg2.jpg', '2021-12-30 15:07:21', '2021-12-30 15:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `component_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `component_id`, `title`, `body`, `link`, `image1`, `image2`, `image3`, `button_text`, `button_link`, `video`, `created_at`, `updated_at`) VALUES
(7, 10, 'Shapoorji Pollonji', '<p>Infographics, Company Profile &amp; Video</p>', NULL, '1627061156m.jpg', '1627061156l.jpg', NULL, 'Construction', 'branding-sevices', NULL, '2021-07-23 12:25:56', '2021-07-24 16:58:14'),
(8, 10, 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1627072636m.jpg', '1627072636l.jpg', NULL, 'Construction', 'test', NULL, '2021-07-23 15:37:16', '2021-07-23 15:37:16'),
(9, 10, 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1627072798m.jpg', '1627072798l.jpg', NULL, 'Construction', 'Test', NULL, '2021-07-23 15:39:58', '2021-07-23 15:39:58'),
(10, 10, 'Test', 'This is a testing mesage', NULL, '1627076190m.jpg', '1627076190l.jpg', NULL, 'tes', 'stes', NULL, '2021-07-23 16:36:30', '2021-07-23 16:36:30'),
(11, 14, '-', '-', NULL, '1627117442m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:02', '2021-07-24 04:04:02'),
(12, 14, '-', '-', NULL, '1627117460m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:20', '2021-07-24 04:04:20'),
(13, 14, '-', '-', NULL, '1627117471m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:31', '2021-07-24 04:04:31'),
(14, 14, '-', '-', NULL, '1627118082m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:14:42', '2021-07-24 04:14:42'),
(15, 14, '-', '-', NULL, '1627118094m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:14:54', '2021-07-24 04:14:54'),
(16, 14, '-', '-', NULL, '1627118144m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:15:44', '2021-07-24 04:15:44'),
(17, 6, 'FMCG', '-', NULL, '1627118375m.jpg', '', NULL, '-', 'work', NULL, '2021-07-24 04:19:35', '2021-07-24 04:25:23'),
(18, 6, 'Construction', '-', NULL, '1627118396m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:19:56', '2021-07-24 04:19:56'),
(19, 6, 'Gold Trading', '-', NULL, '1627118419m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:20:19', '2021-07-24 04:20:19'),
(20, 6, 'Interior', '-', NULL, '1627118440m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:20:40', '2021-07-24 04:20:40'),
(21, 6, 'FMCG', '-', NULL, '1627118478m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:21:18', '2021-07-24 04:21:18'),
(22, 6, 'FMCG', '-', NULL, '1627118502m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:21:42', '2021-07-24 04:21:42'),
(23, 15, 'Hello this is a testing message', '<p>-</p>', NULL, '1627120496m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:54:56', '2021-07-24 05:08:01'),
(24, 15, 'Rebranding of Alhamad Switchgear by Creat...', '<p>-</p>', NULL, '1627120529m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:55:29', '2021-07-24 04:55:29'),
(25, 15, 'Rebranding of Alhamad Switchgear by Creat...', '<p>-</p>', NULL, '1627120557m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:55:57', '2021-07-24 04:55:57'),
(26, 12, 'CreativeDrop Agency', '<p>Designing, Branding &amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:42:14', '2021-07-26 05:26:12'),
(27, 12, 'Creative Agency', '<p>Designing, Branding &amp;amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:43:42', '2021-07-26 04:43:42'),
(28, 12, 'Creative Agency', '<p>Designing, Branding &amp;amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:44:10', '2021-07-26 04:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobsold`
--

CREATE TABLE `failed_jobsold` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_sections`
--

CREATE TABLE `footer_sections` (
  `id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `menu` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_sections`
--

INSERT INTO `footer_sections` (`id`, `section_id`, `name`, `menu`, `link`, `created_at`, `updated_at`) VALUES
(2, 1, 'Agency', 'asfd', 'asdfas', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(3, 1, 'Agency', 'dfasdf', 'sdfs', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(4, 1, 'Agency', 'fasd', 'fasfs', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(5, 2, 'Services', 'asdfasd', 'fasf', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(6, 2, 'Services', 'asdfas', 'fasdf', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(7, 2, 'Services', 'asdfa', 'sdfasdf', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(8, 3, 'Industries', 'asdfasf', 'fasdf', '2022-01-03 04:41:54', '2022-01-03 04:41:54'),
(9, 3, 'Industries', 'asdfasd', 'sdf', '2022-01-03 04:41:54', '2022-01-03 04:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `header_menu`
--

CREATE TABLE `header_menu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_menu`
--

INSERT INTO `header_menu` (`id`, `item_name`, `item_link`, `created_at`, `updated_at`) VALUES
(1, 'Work', 'Active', '2021-07-17 02:35:39', '2021-07-17 02:35:39'),
(2, 'Designs', 'Active', '2021-07-17 02:35:46', '2021-07-17 02:35:46'),
(3, 'Web & App', 'Active', '2021-07-17 02:36:00', '2021-07-17 02:36:00'),
(4, 'Videos', 'Active', '2021-07-17 02:36:08', '2021-07-17 02:36:08'),
(5, 'Marketing', 'Active', '2021-07-17 02:36:17', '2021-07-17 02:36:17'),
(6, 'Contact Us', 'Active', '2021-07-17 02:36:28', '2021-07-17 02:36:28'),
(7, 'Agency', 'Active', '2021-07-17 02:36:37', '2021-07-17 02:36:37'),
(8, 'Insight', 'Active', '2021-07-17 02:36:50', '2021-07-17 02:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `page_id`, `service_id`, `sub_category_id`, `name`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(2, 5, NULL, NULL, 'section 1', 'sport', 'sport', 'ad7ebec7-a6dc-4fa6-afe0-a5122b39b3cd.jpg', '2021-12-14 11:42:09', '2021-12-14 11:42:09'),
(3, 18, NULL, NULL, 'section 1', 'IT Field', 'itfield', 'No-image-found.jpg', '2021-12-18 05:30:33', '2021-12-18 05:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_component`
--

CREATE TABLE `master_component` (
  `id` int(11) NOT NULL,
  `component_name` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_component`
--

INSERT INTO `master_component` (`id`, `component_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Header', '2021-07-23 15:24:39', NULL, NULL),
(2, 'Header Menu', '2021-07-23 15:24:44', NULL, NULL),
(3, 'Footer', '2021-07-23 15:25:08', NULL, NULL),
(4, 'Full-Footer', '2021-07-23 15:25:18', NULL, '2021-07-26 10:31:28'),
(5, 'Center-Black-Box', '2021-07-23 15:26:16', NULL, NULL),
(6, 'Creative-Slider', '2021-07-23 15:26:43', NULL, NULL),
(7, 'Discuss-Block', '2021-07-23 15:27:03', NULL, NULL),
(8, 'Get-A-Quote-Block', '2021-07-23 15:27:32', NULL, '2021-07-26 10:31:57'),
(9, 'Meet-Creative-Block', '2021-07-23 15:28:09', NULL, NULL),
(10, 'Portfolio-Block', '2021-07-23 15:28:35', NULL, NULL),
(11, 'Service-Block', '2021-07-23 15:28:51', NULL, NULL),
(12, 'Slider', '2021-07-23 15:29:04', NULL, NULL),
(13, 'Tile-Block', '2021-07-23 15:29:23', NULL, NULL),
(14, 'Partners', '2021-07-23 15:29:48', NULL, NULL),
(15, 'News & Opinions', '2021-07-24 09:48:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `sorting`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Designs', 'designs', 1, NULL, '2021-07-24 16:17:30', '2021-07-24 16:17:30'),
(2, 'Web & Apps', 'webapps', NULL, NULL, '2021-07-24 16:17:38', '2021-07-24 16:17:38'),
(3, 'Videos', 'videos', NULL, NULL, '2021-07-24 16:17:48', '2021-07-24 16:17:48'),
(4, 'Marketing', 'marketing', NULL, NULL, '2021-07-24 16:17:58', '2021-07-24 16:17:58'),
(5, 'Services', 'servicesblock', NULL, NULL, '2021-07-24 16:18:21', '2021-07-24 16:18:21'),
(6, 'Footer Menu', '#', NULL, NULL, '2021-07-24 16:18:27', '2021-07-24 16:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrationsold`
--

CREATE TABLE `migrationsold` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrationsold`
--

INSERT INTO `migrationsold` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_and_opinions`
--

CREATE TABLE `news_and_opinions` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_and_opinions`
--

INSERT INTO `news_and_opinions` (`id`, `image`, `page_id`, `name`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'No-image-found.jpg', 18, 'section 1', 'Rebranding123', 'Short123', 'link123', '2021-12-18 12:34:33', '2021-12-18 12:34:33'),
(2, 'dashboard.png', 18, 'section 1', 'testing news title', 'Testing news Description', 'link_new', '2021-12-18 12:36:53', '2021-12-18 12:36:53'),
(4, 'image4.jpg', NULL, 'section 1', 'Rebranding123', 'Short123', 'asdfas fdaf', '2021-12-30 15:07:34', '2021-12-30 15:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` varchar(1000) DEFAULT NULL,
  `status` enum('Published','Unpublished','Deleted') DEFAULT 'Unpublished',
  `meta_keyword` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `design_menu` enum('N','Y') DEFAULT 'N',
  `user_id` int(11) DEFAULT NULL,
  `section1` varchar(100) DEFAULT NULL,
  `section2` varchar(100) DEFAULT NULL,
  `section3` varchar(100) DEFAULT NULL,
  `section4` varchar(100) DEFAULT NULL,
  `section5` varchar(100) DEFAULT NULL,
  `section6` varchar(100) DEFAULT NULL,
  `section7` varchar(100) DEFAULT NULL,
  `section8` varchar(100) DEFAULT NULL,
  `section9` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `section_1_type` varchar(100) DEFAULT NULL,
  `section_2_type` varchar(100) DEFAULT NULL,
  `section_3_type` varchar(100) DEFAULT NULL,
  `section_4_type` varchar(100) DEFAULT NULL,
  `section_5_type` varchar(100) DEFAULT NULL,
  `section_6_type` varchar(100) DEFAULT NULL,
  `section_7_type` varchar(100) DEFAULT NULL,
  `section_8_type` varchar(100) DEFAULT NULL,
  `section_9_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `body`, `image`, `slug`, `status`, `meta_keyword`, `meta_desc`, `design_menu`, `user_id`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `created_at`, `updated_at`, `section_1_type`, `section_2_type`, `section_3_type`, `section_4_type`, `section_5_type`, `section_6_type`, `section_7_type`, `section_8_type`, `section_9_type`) VALUES
(24, 'Home', NULL, NULL, 'home', 'Published', 'meta keyword for home page', 'meta description for home page', 'N', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-30 20:02:54', '2021-12-30 20:02:54', 'slider 1', 'testing title', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'logo_design', NULL, NULL, 'logo_design', 'Published', NULL, 'logo_design meta description', 'N', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-31 12:43:35', '2021-12-31 12:43:35', 'slider 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'work', NULL, NULL, 'work', 'Published', NULL, 'meta description for work', 'N', NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-31 14:55:25', '2021-12-31 14:55:25', 'one', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'agency', NULL, NULL, 'agency', 'Published', 'meta keywords', 'agency', 'N', NULL, '1', '2', '4', '2', '16', '8', '10', '11', '13', '2022-01-02 07:38:09', '2022-01-02 07:38:09', 'slider 1', 'checking', 'case study 1', 'testing title', 'section 2', 'section 1', 'section 1', 'section 8', 'section 1');

-- --------------------------------------------------------

--
-- Table structure for table `page_section`
--

CREATE TABLE `page_section` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_section`
--

INSERT INTO `page_section` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Slider', NULL, NULL),
(2, 'Video', NULL, NULL),
(3, 'Team', NULL, NULL),
(4, 'Case Study', NULL, NULL),
(5, 'Services', NULL, NULL),
(6, 'Clients', NULL, NULL),
(7, 'Industries', NULL, NULL),
(8, 'News and Opinions', NULL, NULL),
(9, 'Meeting Sections', NULL, NULL),
(10, 'Para Style 1', NULL, NULL),
(11, 'Para Style 2', NULL, NULL),
(12, 'Para Style 3', NULL, NULL),
(13, 'Para Style 4', NULL, NULL),
(14, 'Para Style 5', NULL, NULL),
(15, 'Section 15', NULL, NULL),
(16, 'Section 16', NULL, NULL),
(17, 'Section 17', NULL, NULL),
(18, 'Section 18', NULL, NULL),
(19, NULL, NULL, NULL),
(20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `para_style_1`
--

CREATE TABLE `para_style_1` (
  `id` int(11) NOT NULL,
  `page_id` text DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_1`
--

INSERT INTO `para_style_1` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(6, '11', 'section 1', 'imaeg2.jpg', 'asdfasd', 'fasdfasdf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(7, '11', 'section 1', 'image3.jpg', 'asdfasdf', 'asdffas', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(8, '11', 'section 1', 'image1.jpg', 'dfsdfsdf', 'asdfadf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(9, '11', 'section 1', 'image4.jpg', 'afasdfasd', 'sdfasf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(10, NULL, 'section 8', 'image3.jpg', 'asdfasd', 'fasdfasdfasdfasdfas', NULL, '2021-12-30 15:11:32', '2021-12-30 15:11:32'),
(11, NULL, 'section 8', 'image4.jpg', 'asdfasf', 'asfdaf', NULL, '2021-12-30 15:11:32', '2021-12-30 15:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_2`
--

CREATE TABLE `para_style_2` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `paragraph` varchar(150) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  `flex_row_reverse` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_2`
--

INSERT INTO `para_style_2` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `flex_row_reverse`, `created_at`, `updated_at`) VALUES
(4, 18, 'section 1', 'imaeg2.jpg', 'adfa', 'sasdfasdfa', NULL, 'flex_row_reverse', '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(5, 18, 'section 1', 'image1.jpg', 'sfdafsd', 'afsdf', NULL, NULL, '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(6, 18, 'section 1', 'image3.jpg', 'afadf', 'safasdf', NULL, 'flex_row_reverse', '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(7, 18, 'section 1', 'image4.jpg', 'asdfasd', 'fasff', NULL, NULL, '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(8, NULL, 'section 8', 'image1.jpg', 'asdfasdf', 'd sfasf asfasdf', NULL, 'flex_row_reverse', '2021-12-30 15:12:03', '2021-12-30 15:12:03'),
(9, NULL, 'section 8', 'image4.jpg', 'asfa sfas', 'fasfasf', NULL, NULL, '2021-12-30 15:12:03', '2021-12-30 15:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_3`
--

CREATE TABLE `para_style_3` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(550) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_3`
--

INSERT INTO `para_style_3` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(5, 18, 'section 1', 'imaeg2.jpg', 'asdfasdf', 'safasf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(6, 18, 'section 1', 'image1.jpg', 'asdfasfa', 'sdfasfas', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(7, 18, 'section 1', 'image3.jpg', 'fasfas', 'fdasfdf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(8, 18, 'section 1', 'image4.jpg', 'dfdasff', 'asdfasdf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(9, NULL, 'section 8', 'image4.jpg', 'asdfa sdfas dfas', 'f asfasdff', NULL, '2021-12-30 15:12:28', '2021-12-30 15:12:28'),
(10, NULL, 'section 8', 'image1.jpg', 'as dfasdf', 'f asdf', NULL, '2021-12-30 15:12:28', '2021-12-30 15:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_4`
--

CREATE TABLE `para_style_4` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_4`
--

INSERT INTO `para_style_4` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(5, 18, 'section 1', NULL, 'asdfasdf', 'asdfasdf', NULL, '2021-12-28 16:48:10', '2021-12-28 16:48:10'),
(6, 18, 'section 1', NULL, 'sadfasdfa', 'sadfasdfa', NULL, '2021-12-28 16:48:10', '2021-12-28 16:48:10'),
(7, NULL, 'section 8', NULL, 'asdfsda fsdfsf', NULL, NULL, '2021-12-30 15:12:47', '2021-12-30 15:12:47'),
(8, NULL, 'section 8', NULL, 'as fsf asfasdf', NULL, NULL, '2021-12-30 15:12:47', '2021-12-30 15:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_5`
--

CREATE TABLE `para_style_5` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `para_left` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `heading` varchar(250) DEFAULT NULL,
  `text_left` varchar(250) DEFAULT NULL,
  `text_right` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_5`
--

INSERT INTO `para_style_5` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `para_left`, `link`, `created_at`, `updated_at`, `heading`, `text_left`, `text_right`) VALUES
(5, 18, 'Section 1', NULL, NULL, NULL, NULL, NULL, '2021-12-28 17:11:11', '2021-12-28 17:11:11', 'asdfasd', 'fasdfasdfasd', 'fasdfasdf'),
(6, 18, 'Section 1', NULL, NULL, NULL, NULL, NULL, '2021-12-28 17:11:11', '2021-12-28 17:11:11', 'asdfasdfas', 'sdaf', 'fasdfasfafsd'),
(8, 18, 'Section 1', NULL, NULL, NULL, NULL, NULL, '2021-12-28 17:11:11', '2021-12-28 17:11:11', 'asdfasdfa', 'sfasdfasd', 'fasdfaf'),
(9, NULL, 'section 9', NULL, NULL, NULL, NULL, NULL, '2021-12-30 15:13:06', '2021-12-30 15:13:06', 'asdf asdf', 'safasfsf', 'sdfsdfdsfasf'),
(10, NULL, 'section 9', NULL, NULL, NULL, NULL, NULL, '2021-12-30 15:13:06', '2021-12-30 15:13:06', 'safdasd', 'fasdfasdfa', 'sdfdas');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `page_id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(4, 'section 1', 18, 'asdfasdfasd', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(5, 'section 1', 18, 'fasdfasd', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(6, 'section 1', 18, 'asdfasdfa', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(7, 'section 1', 18, 'sdfasdfasdfas', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(8, 'section 1', 18, 'dfadsfsdf', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(9, 'request group 8', NULL, 'asdfa sdfasdf', NULL, '2021-12-30 15:08:04', '2021-12-30 15:08:04'),
(10, 'request group 8', NULL, 'safsaf', NULL, '2021-12-30 15:08:04', '2021-12-30 15:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `section_15`
--

CREATE TABLE `section_15` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `heading1` varchar(150) DEFAULT NULL,
  `heading2` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_15`
--

INSERT INTO `section_15` (`id`, `page_id`, `name`, `heading1`, `heading2`, `image`, `text`, `created_at`, `updated_at`) VALUES
(2, 18, 'section 1', NULL, NULL, 'image4.jpg', 'dasfdasdfasf', '2021-12-28 21:17:30', '2021-12-28 21:17:30'),
(3, 18, 'section 2', NULL, NULL, 'email1.png', 'Get a Corporate Identity for your organization', '2021-12-28 21:20:40', '2021-12-28 21:20:40'),
(4, NULL, 'section 9', NULL, NULL, 'image4.jpg', 'sadf asdf asfa fas', '2021-12-30 15:13:37', '2021-12-30 15:13:37'),
(5, NULL, 'section 9', NULL, NULL, 'image1.jpg', 'fdsf asfdasdfa', '2021-12-30 15:13:37', '2021-12-30 15:13:37'),
(7, NULL, 'Vehicle Branding Design', 'Vehicle Branding Design', 'Corporate Identity is actually the corporate image for every business', 'No-image-found.jpg', 'Make a Brand Manual for your organization', '2021-12-31 08:07:06', '2021-12-31 08:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `section_16`
--

CREATE TABLE `section_16` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `heading1` varchar(150) DEFAULT NULL,
  `heading2` varchar(150) DEFAULT NULL,
  `heading` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_16`
--

INSERT INTO `section_16` (`id`, `page_id`, `image`, `name`, `text`, `heading1`, `heading2`, `heading`, `created_at`, `updated_at`) VALUES
(2, 18, 'image1.jpg', 'section 1', 'asdfas', NULL, NULL, NULL, '2021-12-28 21:39:24', '2021-12-28 21:39:24'),
(3, 18, 'image4.jpg', 'section 1', 'asfdasfafsd', NULL, NULL, NULL, '2021-12-28 21:39:24', '2021-12-28 21:39:24'),
(4, 18, 'No-image-found.jpg', 'section 1', 'asdfasdf', NULL, NULL, 'sadfasdf', '2021-12-28 21:45:09', '2021-12-28 21:45:09'),
(6, 18, 'No-image-found.jpg', 'section 2', 'dfasfd', NULL, NULL, 'sdfasdfa', '2021-12-28 21:45:09', '2021-12-28 21:45:09'),
(7, NULL, 'image1.jpg', 'section 9', 'asdf asdfas', NULL, NULL, 'dfas fsdf', '2021-12-30 15:14:05', '2021-12-30 15:14:05'),
(8, NULL, 'imaeg2.jpg', 'section 9', 'adsfasfs', NULL, NULL, 'f asfsfdasdf', '2021-12-30 15:14:05', '2021-12-30 15:14:05'),
(9, NULL, 'image4.jpg', 'section 9', 'asfddfs', NULL, NULL, 'fasfsf a', '2021-12-30 15:14:05', '2021-12-30 15:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `section_17`
--

CREATE TABLE `section_17` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_17`
--

INSERT INTO `section_17` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'One', NULL, NULL, 'We are logo design agency in Dubai with special expertise in logo design', NULL, '2021-12-31 06:13:38', '2021-12-31 06:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `section_18`
--

CREATE TABLE `section_18` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `headingone` varchar(150) DEFAULT NULL,
  `headingtwo` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_18`
--

INSERT INTO `section_18` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `headingone`, `headingtwo`, `link`, `created_at`, `updated_at`) VALUES
(5, NULL, 'Logo Design 2', 'No-image-found.jpg', NULL, NULL, 'Logo Design 2', 'Corporate Design', NULL, '2021-12-31 12:06:26', '2021-12-31 12:06:26'),
(7, NULL, 'corporate 2', 'No-image-found.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(8, NULL, 'corporate 2', 'imaeg2.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(9, NULL, 'corporate 2', 'image3.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(10, NULL, 'corporate 2', 'image4.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `section_19`
--

CREATE TABLE `section_19` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(1000) DEFAULT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `google_tag_manager` text DEFAULT NULL,
  `facebook_pixel` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `slug`, `meta_desc`, `meta_keyword`, `google_tag_manager`, `facebook_pixel`, `created_at`, `updated_at`) VALUES
(1, 'school management system AQS School Software - School Management System - School Management ERP', NULL, 'school management system AQS is an online multipurpose School Management that has spent over a decade working to improve Educational institutions performance and has greatly been successful to establish absolute credibility All-in-One School/ College/ University Management Software Automate every task, Generate incisive reports, Take real time decisions having key data at your fingertips free trial free demo', 'school management system School Management Software, School Management System, School ERP software, school ERP system, School Management System Software, School ERP system software eschools eschool aqsschool coaching software college software', '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n		<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-48410382-1\"></script>\r\n		<script>\r\n		  window.dataLayer = window.dataLayer || [];\r\n		  function gtag(){dataLayer.push(arguments);}\r\n		  gtag(\'js\', new Date());\r\n\r\n		  gtag(\'config\', \'UA-48410382-1\');\r\n		</script>', '<!-- Facebook Pixel Code -->\r\n    <script>\r\n    !function(f,b,e,v,n,t,s)\r\n    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n    n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n    n.queue=[];t=b.createElement(e);t.async=!0;\r\n    t.src=v;s=b.getElementsByTagName(e)[0];\r\n    s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n    \'https://connect.facebook.net/en_US/fbevents.js\');\r\n    fbq(\'init\', \'1941241149368816\');\r\n    fbq(\'track\', \'PageView\');\r\n    </script>\r\n    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n    src=\"https://www.facebook.com/tr?id=1941241149368816&ev=PageView&noscript=1\"\r\n    /></noscript>\r\n    <!-- End Facebook Pixel Code -->', '2021-07-26 05:47:32', '2021-07-26 00:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `page_url`, `page_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'STMP', 'Email Setting', NULL, '2021-07-26 05:05:22', NULL),
(2, NULL, 'File Manager', NULL, '2021-07-26 05:05:44', NULL),
(3, NULL, 'Logo & Images', NULL, '2021-07-26 05:05:46', NULL),
(4, 'SOCIAL', 'Social Links', NULL, '2021-07-26 05:05:56', NULL),
(5, 'SEO', 'SEO Setting', NULL, '2021-07-26 05:06:04', NULL),
(6, NULL, 'Languages', NULL, '2021-07-26 05:06:11', NULL),
(7, NULL, 'Plugins', NULL, '2021-07-26 05:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `page_id` varchar(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `image` varchar(260) DEFAULT NULL,
  `text1` varchar(250) DEFAULT NULL,
  `text2` varchar(260) DEFAULT NULL,
  `contact_button_link` varchar(125) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `page_id`, `name`, `image`, `text1`, `text2`, `contact_button_link`, `status`, `created_at`, `updated_at`) VALUES
(17, '18', 'slider 1', 'password.png', 'heading 2', 'heading 3', 'button link', 'active', '2021-12-27 04:06:40', '2021-12-27 04:06:40'),
(18, '18', 'slider 1', 'No-image-found.jpg', 'heading 3', 'heading 4', 'Button Link', NULL, '2021-12-27 04:06:40', '2021-12-27 04:06:40'),
(19, '18', 'slider 2', 'imaeg2.jpg', 'testing', 'testing4', 'link', 'active', '2021-12-27 04:14:58', '2021-12-27 04:14:58'),
(20, '18', 'slider 2', 'image3.jpg', 'testing3', 'checking', 'link', NULL, '2021-12-27 04:14:58', '2021-12-27 04:14:58'),
(21, '18', 'slider 2', 'image4.jpg', 'testing4', 'testing4', 'link', NULL, '2021-12-27 04:14:58', '2021-12-27 04:14:58'),
(22, '18', 'slider 3', 'image3.jpg', 'asdfasd', 'fasdfas', 'dfasfasdf', 'active', '2021-12-30 11:03:09', '2021-12-30 11:03:09'),
(23, '18', 'slider 3', 'image4.jpg', 'dfsadfass', 'dfsafasd', 'fadsf', NULL, '2021-12-30 11:03:09', '2021-12-30 11:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `fb` text DEFAULT NULL,
  `insta` text DEFAULT NULL,
  `linedin` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `fb`, `insta`, `linedin`, `twitter`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'https://web.facebook.com/aqsschoolsoft?_rdc=1&_rdr', 'https://www.instagram.com/aqsschoolsoft/', 'https://www.linkedin.com/company/73985845', 'https://twitter.com/aqsschoolsoft', 'Dubai', 'Fortune Tower, Cluster C, Jumeirah Lake Towers,\r\nDubai - United Arab Emirates', '2021-07-26 06:41:37', '2021-07-26 01:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `name`, `link`, `created_at`, `updated_at`) VALUES
(2, 'instagram.png', 'Instagram', 'https://instagram.com', '2022-01-03 03:51:40', '2022-01-03 03:51:40'),
(3, 'linkedin.png', 'Linkedin', 'https://linkedin.com', '2022-01-03 03:51:40', '2022-01-03 03:51:40'),
(4, 'fb_icon.png', 'Facebook', 'https://facebook.com', '2022-01-03 04:05:38', '2022-01-03 04:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `stmp`
--

CREATE TABLE `stmp` (
  `id` int(11) NOT NULL,
  `host` text DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `encpt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stmp`
--

INSERT INTO `stmp` (`id`, `host`, `username`, `password`, `port`, `encpt`, `created_at`, `updated_at`) VALUES
(1, 'mail.aqsschoolsoft.com', 'support@aqsschoolsoft.com', 'TH(_f-$7?=}~', '465', 'SSL', '2021-07-26 06:29:33', '2021-07-26 01:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_menus`
--

CREATE TABLE `sub_child_menus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `child_menu_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_child_menus`
--

INSERT INTO `sub_child_menus` (`id`, `menu_id`, `child_menu_id`, `item_name`, `item_link`, `sorting`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Logo Design', 'logo_design', NULL, '2021-07-24 12:07:43', '2021-07-24 12:07:43'),
(2, NULL, 1, 'Corporate Branding', 'corporate-identity', NULL, '2021-07-24 12:08:29', '2021-07-24 12:08:29'),
(3, NULL, 1, 'Brand Guideline Book', 'brand-guildeline-book', NULL, '2021-07-24 12:08:38', '2021-07-24 12:08:38'),
(4, NULL, 1, 'Brand Packaging Design', 'packaging-design', NULL, '2021-07-24 12:08:56', '2021-07-24 12:08:56'),
(5, NULL, 1, 'Uniform Branding', 'uniform-branding', NULL, '2021-07-24 12:09:04', '2021-07-24 12:09:04'),
(6, NULL, 1, 'Vehicle Branding', 'vehicle-branding', NULL, '2021-07-24 12:09:17', '2021-07-24 12:09:17'),
(7, NULL, 2, 'Creative Ads Design', '#', NULL, '2021-07-24 12:20:03', '2021-07-24 12:20:03'),
(8, NULL, 2, 'Magazine Ads', '#', NULL, '2021-07-24 12:25:57', '2021-07-24 12:25:57'),
(9, NULL, 2, 'Banner Design', '#', NULL, '2021-07-24 12:26:06', '2021-07-24 12:26:06'),
(10, NULL, 2, 'Animated Banner', '#', NULL, '2021-07-24 12:26:16', '2021-07-24 12:26:16'),
(11, NULL, 2, 'Billboard Design', '#', NULL, '2021-07-24 12:26:29', '2021-07-24 12:26:29'),
(12, NULL, 2, 'Signage Design', '#', NULL, '2021-07-24 12:26:40', '2021-07-24 12:26:40'),
(13, NULL, 2, 'Menu Design', '#', NULL, '2021-07-24 12:26:48', '2021-07-24 12:26:48'),
(14, NULL, 2, 'Infographics Design', '#', NULL, '2021-07-24 12:26:58', '2021-07-24 12:26:58'),
(15, NULL, 2, 'Stand Design', '#', NULL, '2021-07-24 12:27:07', '2021-07-24 12:27:07'),
(16, NULL, 3, 'Company Profile Design', NULL, NULL, '2021-07-24 14:23:01', '2021-07-24 14:23:01'),
(17, NULL, 3, 'Brochure Design', NULL, NULL, '2021-07-24 14:23:12', '2021-07-24 14:23:12'),
(18, NULL, 3, 'Catague Design', NULL, NULL, '2021-07-24 14:23:23', '2021-07-24 14:23:23'),
(19, NULL, 3, 'Menu Booklet', NULL, NULL, '2021-07-24 14:23:33', '2021-07-24 14:23:33'),
(20, NULL, 3, 'Pre-Qualification Design', NULL, NULL, '2021-07-24 14:23:44', '2021-07-24 14:23:44'),
(21, NULL, 3, 'Folder Design', NULL, NULL, '2021-07-24 14:23:53', '2021-07-24 14:23:53'),
(22, NULL, 3, 'Flyer Design', NULL, NULL, '2021-07-24 14:24:04', '2021-07-24 14:24:04'),
(23, NULL, 4, 'Business Presentation', NULL, NULL, '2021-07-24 14:24:54', '2021-07-24 14:24:54'),
(24, NULL, 4, 'Sales Presentation', NULL, NULL, '2021-07-24 14:25:03', '2021-07-24 14:25:03'),
(25, NULL, 4, 'Conference Presentation', NULL, NULL, '2021-07-24 14:25:13', '2021-07-24 14:25:13'),
(26, NULL, 4, 'Investment Presentation', NULL, NULL, '2021-07-24 14:25:23', '2021-07-24 14:25:23'),
(27, NULL, 4, 'Seminar Presentation', NULL, NULL, '2021-07-24 14:25:33', '2021-07-24 14:25:33'),
(28, NULL, 4, 'Creative Presentation', NULL, NULL, '2021-07-24 14:25:43', '2021-07-24 14:25:43'),
(29, NULL, 4, 'Product Presentation', NULL, NULL, '2021-07-24 14:25:53', '2021-07-24 14:25:53'),
(30, NULL, 5, 'Product Strategy', NULL, NULL, '2021-07-24 14:29:27', '2021-07-24 14:29:27'),
(31, NULL, 5, 'UI and UX Design', NULL, NULL, '2021-07-24 14:29:37', '2021-07-24 14:29:37'),
(32, NULL, 5, 'Front-end Development', NULL, NULL, '2021-07-24 14:29:46', '2021-07-24 14:29:46'),
(33, NULL, 5, 'Back-end Development', NULL, NULL, '2021-07-24 14:29:56', '2021-07-24 14:29:56'),
(34, NULL, 5, 'QA', NULL, NULL, '2021-07-24 14:30:02', '2021-07-24 14:30:02'),
(35, NULL, 6, 'Corporate Website', NULL, NULL, '2021-07-24 14:30:16', '2021-07-24 14:30:16'),
(36, NULL, 6, 'Product Website', NULL, NULL, '2021-07-24 14:30:26', '2021-07-24 14:30:26'),
(37, NULL, 6, 'Promot Website', NULL, NULL, '2021-07-24 14:30:36', '2021-07-24 14:30:36'),
(38, NULL, 6, 'Landing Pages', NULL, NULL, '2021-07-24 14:30:45', '2021-07-24 14:30:45'),
(39, NULL, 6, 'eCommerce Website', NULL, NULL, '2021-07-24 14:30:55', '2021-07-24 14:30:55'),
(40, NULL, 6, 'eCommerce Marketplace', NULL, NULL, '2021-07-24 14:31:04', '2021-07-24 14:31:04'),
(41, NULL, 6, 'Cloud Softwares', NULL, NULL, '2021-07-24 14:31:14', '2021-07-24 14:31:14'),
(42, NULL, 6, 'Online Portals', NULL, NULL, '2021-07-24 14:31:25', '2021-07-24 14:31:25'),
(43, NULL, 7, 'Android Apps', NULL, NULL, '2021-07-24 14:31:40', '2021-07-24 14:31:40'),
(44, NULL, 7, 'iOS Apps', NULL, NULL, '2021-07-24 14:31:49', '2021-07-24 14:31:49'),
(45, NULL, 7, 'Flutter Apps', NULL, NULL, '2021-07-24 14:31:58', '2021-07-24 14:31:58'),
(46, NULL, 7, 'Native Apps', NULL, NULL, '2021-07-24 14:32:09', '2021-07-24 14:32:09'),
(47, NULL, 8, 'Web Hosting', NULL, NULL, '2021-07-24 14:32:22', '2021-07-24 14:32:22'),
(48, NULL, 8, 'Email Service', NULL, NULL, '2021-07-24 14:32:30', '2021-07-24 14:32:30'),
(49, NULL, 8, 'Technical Support', NULL, NULL, '2021-07-24 14:32:41', '2021-07-24 14:32:41'),
(50, NULL, 8, 'Web & App Maintenance', NULL, NULL, '2021-07-24 14:32:50', '2021-07-24 14:32:50'),
(51, NULL, 8, 'Server Maintenance', NULL, NULL, '2021-07-24 14:33:00', '2021-07-24 14:33:00'),
(52, NULL, 9, 'Corporate Videos', NULL, NULL, '2021-07-24 14:34:32', '2021-07-24 14:34:32'),
(53, NULL, 9, 'Presentation Videos', NULL, NULL, '2021-07-24 14:34:43', '2021-07-24 14:34:43'),
(54, NULL, 9, 'Process Videos', NULL, NULL, '2021-07-24 14:34:52', '2021-07-24 14:34:52'),
(55, NULL, 9, 'Project Videos', NULL, NULL, '2021-07-24 14:35:02', '2021-07-24 14:35:02'),
(56, NULL, 9, 'Social Media Videos', NULL, NULL, '2021-07-24 14:35:11', '2021-07-24 14:35:11'),
(57, NULL, 9, 'Marketing Videos', NULL, NULL, '2021-07-24 14:35:21', '2021-07-24 14:35:21'),
(58, NULL, 10, 'Corporate Photography', NULL, NULL, '2021-07-24 14:35:35', '2021-07-24 14:35:35'),
(59, NULL, 10, 'Products Photography', NULL, NULL, '2021-07-24 14:35:45', '2021-07-24 14:35:45'),
(60, NULL, 10, 'Location Photography', NULL, NULL, '2021-07-24 14:35:54', '2021-07-24 14:35:54'),
(61, NULL, 10, 'Menu or Food Photography', NULL, NULL, '2021-07-24 14:36:03', '2021-07-24 14:36:03'),
(62, NULL, 10, 'Restaurant Photography', NULL, NULL, '2021-07-24 14:36:20', '2021-07-24 14:36:20'),
(63, NULL, 10, 'Team Photography', NULL, NULL, '2021-07-24 14:36:29', '2021-07-24 14:36:29'),
(64, NULL, 10, 'Creative Photography', NULL, NULL, '2021-07-24 14:36:38', '2021-07-24 14:36:38'),
(65, NULL, 11, 'Architecture Animation', NULL, NULL, '2021-07-24 14:37:07', '2021-07-24 14:37:07'),
(66, NULL, 11, 'Products 3D Videos', NULL, NULL, '2021-07-24 14:37:17', '2021-07-24 14:37:17'),
(67, NULL, 11, '3D Safety Induction Videos', NULL, NULL, '2021-07-24 14:37:26', '2021-07-24 14:37:26'),
(68, NULL, 11, '3D Animated Videos', NULL, NULL, '2021-07-24 14:37:35', '2021-07-24 14:37:35'),
(69, NULL, 11, 'Project 3D Videos', NULL, NULL, '2021-07-24 14:37:44', '2021-07-24 14:37:44'),
(70, NULL, 11, '3D Character Animation Videos', NULL, NULL, '2021-07-24 14:37:54', '2021-07-24 14:37:54'),
(71, NULL, 11, '3D Interior Modelling', NULL, NULL, '2021-07-24 14:38:03', '2021-07-24 14:38:03'),
(72, NULL, 12, 'Motion Graphics Videos', 'Motion Graphics Videos', NULL, '2021-07-24 14:38:17', '2021-07-24 14:38:17'),
(73, NULL, 12, 'Explainer Videos', NULL, NULL, '2021-07-24 14:38:27', '2021-07-24 14:38:27'),
(74, NULL, 12, 'Cartoon Animated Videos', NULL, NULL, '2021-07-24 14:38:36', '2021-07-24 14:38:36'),
(75, NULL, 12, '2D Presentation Videos', NULL, NULL, '2021-07-24 14:38:45', '2021-07-24 14:38:45'),
(76, NULL, 12, 'Animated Marketing Videos', NULL, NULL, '2021-07-24 14:38:53', '2021-07-24 14:38:53'),
(77, NULL, 13, 'Content Markeing', NULL, NULL, '2021-07-24 14:40:43', '2021-07-24 14:40:43'),
(78, NULL, 13, 'Search Engine Optimization (SEO)', NULL, NULL, '2021-07-24 14:41:00', '2021-07-24 14:41:00'),
(79, NULL, 13, 'Search Engine Markeing (SEM)', NULL, NULL, '2021-07-24 14:41:10', '2021-07-24 14:41:10'),
(80, NULL, 13, 'Google AdWords', NULL, NULL, '2021-07-24 14:41:20', '2021-07-24 14:41:20'),
(81, NULL, 13, 'Email Marketing', NULL, NULL, '2021-07-24 14:41:29', '2021-07-24 14:41:29'),
(82, NULL, 13, 'Landing Pages', NULL, NULL, '2021-07-24 14:41:37', '2021-07-24 14:41:37'),
(83, NULL, 13, 'Lead Generation', NULL, NULL, '2021-07-24 14:41:48', '2021-07-24 14:41:48'),
(84, NULL, 14, 'Social Media Management', NULL, NULL, '2021-07-24 14:42:02', '2021-07-24 14:42:02'),
(85, NULL, 14, 'Video Marketing', NULL, NULL, '2021-07-24 14:42:12', '2021-07-24 14:42:12'),
(86, NULL, 14, 'Pay-Per-Click Advertising (PPC)', NULL, NULL, '2021-07-24 14:42:22', '2021-07-24 14:42:22'),
(87, NULL, 14, 'YouTube Marketing', NULL, NULL, '2021-07-24 14:42:32', '2021-07-24 14:42:32'),
(88, NULL, 14, 'Personal Promotion', NULL, NULL, '2021-07-24 14:42:40', '2021-07-24 14:42:40'),
(89, NULL, 14, 'F&B Marketing', NULL, NULL, '2021-07-24 14:42:49', '2021-07-24 14:42:49'),
(90, NULL, 15, 'Marketing Plans & Strategy', NULL, NULL, '2021-07-24 14:43:04', '2021-07-24 14:43:04'),
(91, NULL, 15, 'Digital Marketing Strategy', NULL, NULL, '2021-07-24 14:43:15', '2021-07-24 14:43:15'),
(92, NULL, 15, 'eCommerce Consultancy', NULL, NULL, '2021-07-24 14:43:24', '2021-07-24 14:43:24'),
(93, NULL, 15, 'Marketing Consultancy', NULL, NULL, '2021-07-24 14:43:33', '2021-07-24 14:43:33'),
(94, NULL, 15, 'Creative Consultancy', NULL, NULL, '2021-07-24 14:43:42', '2021-07-24 14:43:42'),
(95, NULL, 15, 'Business Plans', NULL, NULL, '2021-07-24 14:43:51', '2021-07-24 14:43:51'),
(96, NULL, 16, 'Logo & Branding', NULL, NULL, '2021-07-24 14:48:08', '2021-07-24 14:48:08'),
(97, NULL, 16, 'Graphic Design', NULL, NULL, '2021-07-24 14:48:16', '2021-07-24 14:48:16'),
(98, NULL, 16, 'Creative Ads', NULL, NULL, '2021-07-24 14:48:24', '2021-07-24 14:48:24'),
(99, NULL, 16, 'Brochures', NULL, NULL, '2021-07-24 14:48:32', '2021-07-24 14:48:32'),
(100, NULL, 16, 'Presentations', NULL, NULL, '2021-07-24 14:48:38', '2021-07-24 14:48:38'),
(101, NULL, 17, 'Website Design', NULL, NULL, '2021-07-24 14:48:49', '2021-07-24 14:48:49'),
(102, NULL, 17, 'UI / UX Desgin', NULL, NULL, '2021-07-24 14:48:59', '2021-07-24 14:48:59'),
(103, NULL, 17, 'Mobile Apps', NULL, NULL, '2021-07-24 14:49:09', '2021-07-24 14:49:09'),
(104, NULL, 17, 'Cloud Softwares', NULL, NULL, '2021-07-24 14:49:19', '2021-07-24 14:49:19'),
(105, NULL, 17, 'eCommerce Experts', NULL, NULL, '2021-07-24 14:49:25', '2021-07-24 14:49:25'),
(106, NULL, 18, 'Corporate Videos', NULL, NULL, '2021-07-24 14:49:39', '2021-07-24 14:49:39'),
(107, NULL, 18, 'Presentation Videos', NULL, NULL, '2021-07-24 14:49:47', '2021-07-24 14:49:47'),
(108, NULL, 18, 'Products Photography', NULL, NULL, '2021-07-24 14:49:53', '2021-07-24 14:49:53'),
(109, NULL, 18, 'Food Photography', NULL, NULL, '2021-07-24 14:50:00', '2021-07-24 14:50:00'),
(110, NULL, 18, 'Marketing Videos', NULL, NULL, '2021-07-24 14:50:08', '2021-07-24 14:50:08'),
(111, NULL, 19, '3D Architecture Videos', NULL, NULL, '2021-07-24 14:50:21', '2021-07-24 14:50:21'),
(112, NULL, 19, '3D Modelling & Animation', NULL, NULL, '2021-07-24 14:50:29', '2021-07-24 14:50:29'),
(113, NULL, 19, 'Explainer Videos', NULL, NULL, '2021-07-24 14:50:35', '2021-07-24 14:50:35'),
(114, NULL, 19, 'Products Modelling', NULL, NULL, '2021-07-24 14:50:41', '2021-07-24 14:50:41'),
(115, NULL, 19, 'Safety Induction Videos', NULL, NULL, '2021-07-24 14:50:48', '2021-07-24 14:50:48'),
(116, NULL, 20, 'Marketing Strategies', NULL, NULL, '2021-07-24 14:50:59', '2021-07-24 14:50:59'),
(117, NULL, 20, 'Business Plans', NULL, NULL, '2021-07-24 14:51:06', '2021-07-24 14:51:06'),
(118, NULL, 20, 'eCommerce Consultancy', NULL, NULL, '2021-07-24 14:51:13', '2021-07-24 14:51:13'),
(119, NULL, 20, 'Marketing Consultancy', NULL, NULL, '2021-07-24 14:51:20', '2021-07-24 14:51:20'),
(120, NULL, 20, 'Creative Consultancy', NULL, NULL, '2021-07-24 14:51:27', '2021-07-24 14:51:27'),
(121, NULL, 21, 'Social Media Marketing', NULL, NULL, '2021-07-24 14:51:50', '2021-07-24 14:51:50'),
(122, NULL, 21, 'Google Ads', NULL, NULL, '2021-07-24 14:51:52', '2021-07-24 14:51:52'),
(123, NULL, 21, 'Google SEO', NULL, NULL, '2021-07-24 14:51:58', '2021-07-24 14:51:58'),
(124, NULL, 21, 'Video Marketing', NULL, NULL, '2021-07-24 14:52:04', '2021-07-24 14:52:04'),
(125, NULL, 21, 'PPC Management', NULL, NULL, '2021-07-24 14:52:13', '2021-07-24 14:52:13'),
(126, NULL, 22, 'Leadership', NULL, NULL, '2021-07-24 15:00:57', '2021-07-24 15:00:57'),
(127, NULL, 22, 'Overview', NULL, NULL, '2021-07-24 15:01:04', '2021-07-24 15:01:04'),
(128, NULL, 22, 'Services', NULL, NULL, '2021-07-24 15:01:09', '2021-07-24 15:01:09'),
(129, NULL, 23, 'Design Services', NULL, NULL, '2021-07-24 15:01:21', '2021-07-24 15:01:21'),
(130, NULL, 23, 'Websites & mobile Apps', NULL, NULL, '2021-07-24 15:01:28', '2021-07-24 15:01:28'),
(131, NULL, 23, 'Videos & photography', NULL, NULL, '2021-07-24 15:01:35', '2021-07-24 15:01:35'),
(132, NULL, 23, '3D & 2D Animation', NULL, NULL, '2021-07-24 15:01:41', '2021-07-24 15:01:41'),
(133, NULL, 23, 'Digital Marketing', NULL, NULL, '2021-07-24 15:01:47', '2021-07-24 15:01:47'),
(134, NULL, 23, 'Consultancy Services', NULL, NULL, '2021-07-24 15:01:54', '2021-07-24 15:01:54'),
(135, NULL, 24, 'FMCG', NULL, NULL, '2021-07-24 15:02:06', '2021-07-24 15:02:06'),
(136, NULL, 24, 'F&B', NULL, NULL, '2021-07-24 15:02:13', '2021-07-24 15:02:13'),
(137, NULL, 24, 'Industrial', NULL, NULL, '2021-07-24 15:02:19', '2021-07-24 15:02:19'),
(138, NULL, 24, 'Technology', NULL, NULL, '2021-07-24 15:02:26', '2021-07-24 15:02:26'),
(139, NULL, 24, 'Government', NULL, NULL, '2021-07-24 15:02:33', '2021-07-24 15:02:33'),
(140, NULL, 24, 'Aviation', NULL, NULL, '2021-07-24 15:02:38', '2021-07-24 15:02:38'),
(141, NULL, 24, 'Finance', NULL, NULL, '2021-07-24 15:02:44', '2021-07-24 15:02:44'),
(142, NULL, 24, 'Trading', NULL, NULL, '2021-07-24 15:02:49', '2021-07-24 15:02:49'),
(146, 5, 23, 'services1', 'services1', NULL, '2021-12-11 12:10:58', NULL),
(147, 1, 1, 'testing_logo_design1', 'testing_logo_design1', NULL, '2021-12-11 12:13:28', NULL),
(148, 1, 1, 'newSubChildNav', 'newSubChildNav', NULL, '2021-12-11 15:49:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `section_name` varchar(160) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `section_name`, `page_id`, `image`, `designation`, `name`, `created_at`, `updated_at`) VALUES
(9, 'team group 8', NULL, 'password.png', 'fasf asfd', 'asdf asdf asdfasf as', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(10, 'team group 8', NULL, 'image3.jpg', 'asdsad', 'asfdafd fas d', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(11, 'team group 8', NULL, 'image1.jpg', 'asd fasdf', 'saf sdff', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(12, 'team group 2', NULL, 'image4.jpg', 'Awan', 'UR', '2021-12-30 20:15:06', '2021-12-30 20:15:06'),
(13, 'team group 2', NULL, 'image3.jpg', 'asfasfdsa', 'sdfsdfasf asf', '2021-12-30 20:15:06', '2021-12-30 20:15:06'),
(14, 'team group 2', NULL, 'imaeg2.jpg', 'asfasfdsa', 'asdfasdfas', '2021-12-30 20:15:06', '2021-12-30 20:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'testing@gmail.com', NULL, '$2y$10$ng8db.p3mvuJmbFAo5wDD.0AA0nHZdc1utbKv1lYGi8Z2hAJJEU4O', NULL, '2021-12-08 11:38:44', '2021-12-08 11:38:44'),
(2, 'testing', 'testing@test.com', NULL, '$2y$10$iRR8Juuu5BGvgxLl5o/GQ.sCme7plQd4Hd3ZLvyia.dBnUNB2CXl6', NULL, '2021-12-09 00:36:40', '2021-12-09 00:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `usersold`
--

CREATE TABLE `usersold` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersold`
--

INSERT INTO `usersold` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AQ', 'jqsystech@gmail.com', NULL, '$2y$10$hAlPi8yWt4LOD1NVJ3INcuIBvIfqTYqIv2zyyashoKzvxu.JWN3Ra', NULL, '2021-07-08 00:49:35', '2021-07-08 00:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `video_title` varchar(120) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `video_link` varchar(150) DEFAULT NULL,
  `contact_button_link` varchar(150) DEFAULT NULL,
  `button_label` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video_title`, `page_id`, `video_link`, `contact_button_link`, `button_label`, `created_at`, `updated_at`) VALUES
(1, 'video 2', 'testing title', 8, 'https://www.youtube.com/embed/KzblyWzXF5Q', 'https://youtu.be/nLbC1Y-nmqs', 'Contact us', '2021-12-13 05:32:05', '2021-12-13 05:32:05'),
(2, 'video 1', 'checking', 7, 'https://www.youtube.com/embed/KzblyWzXF5Q', 'button', 'meeting', '2021-12-13 12:26:03', '2021-12-13 12:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_menus`
--
ALTER TABLE `child_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientandparterimage`
--
ALTER TABLE `clientandparterimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobsold`
--
ALTER TABLE `failed_jobsold`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_sections`
--
ALTER TABLE `footer_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_menu`
--
ALTER TABLE `header_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_component`
--
ALTER TABLE `master_component`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrationsold`
--
ALTER TABLE `migrationsold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_opinions`
--
ALTER TABLE `news_and_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_section`
--
ALTER TABLE `page_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_1`
--
ALTER TABLE `para_style_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_2`
--
ALTER TABLE `para_style_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_3`
--
ALTER TABLE `para_style_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_4`
--
ALTER TABLE `para_style_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_5`
--
ALTER TABLE `para_style_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_15`
--
ALTER TABLE `section_15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_16`
--
ALTER TABLE `section_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_17`
--
ALTER TABLE `section_17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_18`
--
ALTER TABLE `section_18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stmp`
--
ALTER TABLE `stmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_child_menus`
--
ALTER TABLE `sub_child_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersold`
--
ALTER TABLE `usersold`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `child_menus`
--
ALTER TABLE `child_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `clientandparterimage`
--
ALTER TABLE `clientandparterimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobsold`
--
ALTER TABLE `failed_jobsold`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_sections`
--
ALTER TABLE `footer_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header_menu`
--
ALTER TABLE `header_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_component`
--
ALTER TABLE `master_component`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrationsold`
--
ALTER TABLE `migrationsold`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_and_opinions`
--
ALTER TABLE `news_and_opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `page_section`
--
ALTER TABLE `page_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `para_style_1`
--
ALTER TABLE `para_style_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `para_style_2`
--
ALTER TABLE `para_style_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `para_style_3`
--
ALTER TABLE `para_style_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `para_style_4`
--
ALTER TABLE `para_style_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `para_style_5`
--
ALTER TABLE `para_style_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section_15`
--
ALTER TABLE `section_15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section_16`
--
ALTER TABLE `section_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_17`
--
ALTER TABLE `section_17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_18`
--
ALTER TABLE `section_18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stmp`
--
ALTER TABLE `stmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_child_menus`
--
ALTER TABLE `sub_child_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usersold`
--
ALTER TABLE `usersold`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
