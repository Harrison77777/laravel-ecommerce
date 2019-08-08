-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 07:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '1' COMMENT '1 for super admin | 2 for admin | 3 for author',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `phone_no`, `password`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'harrison', 'ermhroy@gmail.com', '123456789123', '$2y$10$Du0Co15ldYnAKnlK/6tkS.c9yBnXsg8t6jm4I7Vx6TE8IfPcmV4au', NULL, 1, NULL, '2019-05-25 20:24:31', '2019-05-25 20:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(4, 'Samsung', '2019-07-05 07:19:34', '2019-07-05 07:19:34'),
(5, 'Xiaomi', '2019-07-05 07:19:42', '2019-07-05 07:19:42'),
(6, 'Lg', '2019-07-05 07:19:50', '2019-07-05 07:19:50'),
(7, 'Iphone', '2019-07-05 07:20:07', '2019-07-05 07:20:07'),
(8, 'Vivo', '2019-07-05 07:20:21', '2019-07-05 07:20:21'),
(9, 'Raj Lokkin Juealers', '2019-07-05 07:54:12', '2019-07-05 07:54:12'),
(10, 'Apple', '2019-07-05 08:01:12', '2019-07-05 08:01:12'),
(11, 'Non-brands', '2019-07-05 08:07:13', '2019-07-05 08:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `banner`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 'Electronics', 'electronics', '5d1ef62bd340d.jpg', NULL, '2019-07-05 07:03:07', '2019-07-05 07:03:07'),
(13, 'Mobile', 'mobile', '5d1ef6ed472ad.jpg', 12, '2019-07-05 07:06:21', '2019-07-05 07:06:21'),
(14, 'Garments', 'garments', '5d1ef796e4c78.png', NULL, '2019-07-05 07:09:10', '2019-07-05 07:09:10'),
(15, 'T-shirt', 't-shirt', '5d1ef7e0bfb3e.jpg', 14, '2019-07-05 07:10:24', '2019-07-05 07:10:24'),
(16, 'Air conditioner', 'air-conditioner', '5d1ef8e163090.jpg', 12, '2019-07-05 07:13:04', '2019-07-05 07:14:41'),
(17, 'Jewellary', 'jewellary', '5d1ef9d6ddaed.png', NULL, '2019-07-05 07:17:05', '2019-07-05 07:18:46'),
(18, 'Watch', 'watch', '5d1f039c217c6.png', 12, '2019-07-05 08:00:28', '2019-07-05 08:00:28'),
(19, 'Bags', 'bags', '5d1f04f56540a.jpg', NULL, '2019-07-05 08:06:13', '2019-07-05 08:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"21db70977540129ebb4f8f6f16d250b6492b5c0afc831e90bd9eed6de351d233\\\";s:2:\\\"id\\\";s:36:\\\"4763e618-71a4-4415-9bd4-9c4d3d6cdfef\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559586529, 1559586529),
(2, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"ddcfed51df91b3e260b31d6d9d6718a813a2cbe6a0a93566e3dcb9cc48fa0df4\\\";s:2:\\\"id\\\";s:36:\\\"0721f17a-e5ac-4d93-a22f-24298db1c23f\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559586539, 1559586539),
(3, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"372a628d35f9a58a677f447259aea979cc865588289903ad450044a31957a05a\\\";s:2:\\\"id\\\";s:36:\\\"ea70acde-fb4e-49f2-8ce2-fc91b102e4a2\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559586561, 1559586561),
(4, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"85b8b67785982fa8daaf15a29e0fc9e214d2e3c1b283ced33f99ced784e2be0e\\\";s:2:\\\"id\\\";s:36:\\\"0a2af315-d829-4e97-84e5-4835af6533ad\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559592588, 1559592588),
(5, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"8d0c0b85e294dd4073d77aa9f1412b8f0ddad609cc6d53e32f7fb9bc3f8008e0\\\";s:2:\\\"id\\\";s:36:\\\"37af2e94-6980-4233-a158-aa4ad1456188\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559593796, 1559593796),
(6, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"71bb4ffcab13a7903bcec27a2395ee4b131b229464ab16b6ba5f270d52d250a0\\\";s:2:\\\"id\\\";s:36:\\\"f6d3071d-aab5-4df3-904e-e30c41dc0bfd\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559594149, 1559594149),
(7, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"0dcdf4d8d00888fd22606752d734639719423a4aa911ef1678f285d6f8017e8b\\\";s:2:\\\"id\\\";s:36:\\\"f61c874c-f56f-484c-845e-fa9b6b8d5a78\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559595336, 1559595336),
(8, 'default', '{\"displayName\":\"App\\\\Notifications\\\\AdminPasswordResetNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":11:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:13:\\\"App\\\\AdminUser\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:48:\\\"App\\\\Notifications\\\\AdminPasswordResetNotification\\\":9:{s:5:\\\"token\\\";s:64:\\\"aa8061aecd393e2b923f373900c5cb6472c73861076cf636ae1a472a47500078\\\";s:2:\\\"id\\\";s:36:\\\"8d868846-12ff-433f-85e9-f1e3137795c4\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1559595343, 1559595343);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `slogan`, `logo`, `created_at`, `updated_at`) VALUES
(4, '.', '5d22ce58c3428.jpg', '2019-05-21 08:06:20', '2019-07-08 05:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_07_180333_create_password_resets_table', 1),
(2, '2019_05_07_180619_create_categories_table', 1),
(3, '2019_05_07_181047_create_products_table', 1),
(4, '2019_05_09_222329_create_brands_table', 1),
(6, '2019_05_10_142059_create_product_images_table', 1),
(15, '2019_05_16_132818_create_users_table', 2),
(17, '2019_05_10_141544_create_carts_table', 4),
(19, '2019_05_19_131303_create_orders_table', 5),
(20, '2019_05_23_143742_create_slides_table', 6),
(21, '2019_05_25_193846_create_admin_users_table', 7),
(22, '2019_05_27_114350_create_logos_table', 8),
(23, '2019_05_28_012029_create_seos_table', 9),
(24, '2019_05_31_023334_create_jobs_table', 10),
(25, '2019_06_04_172718_create_social_media_links_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `payment_method`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `created_at`, `updated_at`) VALUES
(1, 8, '127.0.0.1', 'Harrison Roy', '1234567894125', 'M.pasa (utter) Bonickpara', 'ermhroy@gmail.com', 'Cash_on_dalivari', NULL, 1, 1, 1, '2019-05-28 17:24:05', '2019-06-25 23:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ermhroy@gmail.com', '$2y$10$ydmAj4NnPaHadH8PpqnPpucvHdO7WKAHONM1UkGWTGEkvvN.7ZkAe', '2019-06-03 21:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `stock` tinyint(4) NOT NULL DEFAULT '1',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `slug`, `description`, `status`, `stock`, `active`, `price`, `sale_price`, `created_at`, `updated_at`) VALUES
(4, 13, 7, 'Iphone xs', 'iphone-xs', 'This is Iphone xs. Made in china.', 2, 1, 1, '100000.00', '120000.00', '2019-07-05 07:25:48', '2019-07-05 07:25:48'),
(5, 13, 4, 'Samsung Galaxy s10 5G', 'samsung-galaxy-s10-5g', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">This is Samsung Galaxy s10. Made in Korea.</span></font>', 2, 1, 1, '90000.00', '100000.00', '2019-07-05 07:36:58', '2019-07-05 07:36:58'),
(6, 13, 4, 'Samsung s9', 'samsung-s9', 'This is samsung s9. Made in Korea.', 2, 1, 1, '70000.00', '75000.00', '2019-07-05 07:38:48', '2019-07-05 07:38:48'),
(7, 13, 4, 'Samsung s10 4G', 'samsung-s10-4g', 'This is&nbsp;Samsung s10 4G. Made in Korea.', 2, 1, 1, '80000.00', '85000.00', '2019-07-05 07:40:45', '2019-07-05 07:40:45'),
(8, 13, 8, 'Vivo y9i', 'vivo-y9i', 'This is Vivo y9i. Made in china.', 2, 1, 1, '14000.00', '14500.00', '2019-07-05 07:43:21', '2019-07-05 07:43:21'),
(10, 13, 5, 'Xiaomi mi 9T', 'xiaomi-mi-9t', 'This is Xiaomi flagship phone. Made in China.', 2, 1, 1, '37000.00', '37500.00', '2019-07-05 07:49:52', '2019-07-05 07:49:52'),
(11, 17, 9, 'Ear jewellary gold', 'ear-jewellary-gold', 'This is ear jewellary. Made in Bangladesh.', 1, 1, 1, '50000.00', '60000.00', '2019-07-05 07:55:54', '2019-07-05 07:55:54'),
(12, 17, 9, 'Ear jewellary gold Shape', 'ear-jewellary-gold-shape', 'This is&nbsp;Ear jewellary gold Shape. Made in Bangladesh.', 1, 1, 1, '45000.00', '55000.00', '2019-07-05 07:57:39', '2019-07-05 07:57:39'),
(13, 17, 9, 'Gold Ring', 'gold-ring', 'This is a Ring. Made in Bangladesh.', 1, 1, 1, '25000.00', '25000.00', '2019-07-05 07:58:50', '2019-07-05 07:58:50'),
(14, 18, 10, 'Apple Watch 1', 'apple-watch-1', 'This is apple watch. Made in China.', 3, 1, 1, '65000.00', '65000.00', '2019-07-05 08:02:30', '2019-07-05 08:02:30'),
(15, 19, 11, 'Bag long', 'bag-long', 'This is a long bag. Made in China.', 3, 1, 1, '1500.00', '1700.00', '2019-07-05 08:08:21', '2019-07-05 08:08:21'),
(16, 19, 11, 'Traveling Bag', 'traveling-bag', 'This is a traveling bag. Made in China.', 3, 1, 1, '3000.00', '3200.00', '2019-07-05 08:09:46', '2019-07-05 08:09:46'),
(17, 19, 11, 'Adventure bag', 'adventure-bag', 'This is a adventure bag. Made in China.', 3, 1, 1, '4500.00', '5000.00', '2019-07-05 08:11:24', '2019-07-05 08:11:24'),
(20, 14, 11, 'T-shirt', 't-shirt', 'This is a&nbsp;T-shirt. Made in Bangladesh.', 0, 1, 1, '200.00', '250.00', '2019-07-06 06:00:16', '2019-07-06 06:00:16'),
(21, 13, 5, 'Xiaomi redmin note 7', 'xiaomi-redmin-note-7', '<div style=\"font-family: Arial, Verdana; font-size: 10pt;\"><span style=\"font-size: 10pt;\">Ram: 3 GB,</span></div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\">Camera: 12 MP,</div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\">Color: Blue, Red, Green,</div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\">Bluetooth: 5.0,</div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\">Chipset:&nbsp;<span style=\"background-color: rgb(250, 250, 250); font-family: Arimo, Arial; font-size: 14px;\">Qualcomm SDM660 Snapdragon 660 (14 nm),</span></div><div style=\"\"><font face=\"Arimo, Arial\"><span style=\"font-size: 14px; background-color: rgb(250, 250, 250);\">CPU:&nbsp;</span></font><span style=\"background-color: rgb(250, 250, 250); font-family: Arimo, Arial; font-size: 14px;\">Octa-core (4x2.2 GHz Kryo 260 &amp; 4x1.8 GHz Kryo 260),</span></div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\"><span style=\"font-family: Arimo, Arial; font-size: 14px; background-color: rgb(250, 250, 250);\">GPU: Adreno 512,</span></div><div style=\"font-family: Arial, Verdana; font-size: 10pt;\"><span style=\"font-family: Arimo, Arial; font-size: 14px; background-color: rgb(250, 250, 250);\">USB: 2.0, Type-C 1.0 reversible connector</span></div>', 0, 1, 1, '15500.00', '16000.00', '2019-07-08 04:53:31', '2019-07-08 04:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 4, '5d1efb7cecbb8.jpg', '2019-07-05 07:25:48', '2019-07-05 07:25:48'),
(11, 5, '5d1efe1a12c79.png', '2019-07-05 07:36:58', '2019-07-05 07:36:58'),
(12, 6, '5d1efe883a547.jpg', '2019-07-05 07:38:48', '2019-07-05 07:38:48'),
(13, 7, '5d1efefdf056a.png', '2019-07-05 07:40:45', '2019-07-05 07:40:45'),
(14, 8, '5d1eff990d376.png', '2019-07-05 07:43:21', '2019-07-05 07:43:21'),
(16, 10, '5d1f0120dc5b2.jpg', '2019-07-05 07:49:52', '2019-07-05 07:49:52'),
(17, 11, '5d1f028ac4c79.gif', '2019-07-05 07:55:54', '2019-07-05 07:55:54'),
(18, 12, '5d1f02f38148d.jpg', '2019-07-05 07:57:39', '2019-07-05 07:57:39'),
(19, 13, '5d1f033a66ec8.jpg', '2019-07-05 07:58:50', '2019-07-05 07:58:50'),
(20, 14, '5d1f0416c72d0.jpg', '2019-07-05 08:02:30', '2019-07-05 08:02:30'),
(21, 15, '5d1f0575791ad.jpg', '2019-07-05 08:08:21', '2019-07-05 08:08:21'),
(22, 16, '5d1f05ca2e76f.jpg', '2019-07-05 08:09:46', '2019-07-05 08:09:46'),
(23, 17, '5d1f062c37722.jpg', '2019-07-05 08:11:24', '2019-07-05 08:11:24'),
(26, 20, '5d2038f07a213.jpg', '2019-07-06 06:00:16', '2019-07-06 06:00:16'),
(27, 21, '5d22cc4b30027.jpg', '2019-07-08 04:53:31', '2019-07-08 04:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `author`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Harrison', 'This is a portfolio website. which is created for practice purpose. This a e-commerce website.', '2019-05-21 08:06:20', '2019-05-28 14:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Slide 2', '5ce67b8f833dd.jpg', '2019-05-23 10:53:03', '2019-05-23 10:53:03'),
(5, 'Slide 3', '5ce67b9b83769.jpg', '2019-05-23 10:53:15', '2019-05-23 10:53:15'),
(6, 'Slide 3', '5ced6bd0ae3bb.jpg', '2019-05-28 17:11:44', '2019-05-28 17:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media_links`
--

INSERT INTO `social_media_links` (`id`, `name`, `link`, `logo`, `created_at`, `updated_at`) VALUES
(3, 'facebook link', '//www.facebook.com/', '5cf6a89e0af72.png', '2019-06-04 17:13:28', '2019-06-04 17:21:34'),
(4, 'twitter link', 'https://twitter.com/', '5cf6ac1ce0cd1.png', '2019-06-04 17:36:28', '2019-06-04 17:36:28'),
(5, 'linkedIn link', 'https://www.linkedin.com/', '5cf6adadcffaf.png', '2019-06-04 17:43:09', '2019-06-04 17:43:09'),
(6, 'pinterest link', 'https://www.pinterest.com/', '5cf6ae8cabac5.png', '2019-06-04 17:46:52', '2019-06-04 17:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone_no`, `division`, `district`, `status`, `zip_code`, `ip_address`, `shipping_address`, `street_address`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Harrison Roy', 'ermhroy@gmail.com', '$2y$10$Hbkd1Y8fRtTtyt86Y2NIP.0F28boiJ.plZwY82WmIgfZnOylbefSK', 1234567894125, 'Khulna Edited', 'Khulna City', '1', '92003', '127.0.0.1', 'M.pasa (utter) Bonickpara', 'B.para Main Road', NULL, NULL, '2019-05-17 13:29:28', '2019-05-21 08:28:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`),
  ADD UNIQUE KEY `admin_users_phone_no_unique` (`phone_no`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_media_links_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
