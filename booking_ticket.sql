-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2024 at 03:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(36, 16, 1, 1, '2024-07-29 03:10:10', '2024-07-29 03:10:10'),
(37, 15, 1, 1, '2024-07-29 07:45:37', '2024-07-29 07:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kathleen Crooks DVM', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(2, 'Rusty Wyman', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(3, 'Lonzo Reinger', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(4, 'Orlo Hirthe', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(5, 'Elisabeth Dare', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(6, 'Glennie McCullough', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(7, 'Isaias Leuschke', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(8, 'Samantha Stracke', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(9, 'Dane Schroeder', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(10, 'Adela Heaney', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(11, 'Bryana Nader', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(12, 'Mohammad Kshlerin', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(13, 'Mrs. Magali Kohler III', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(14, 'Adrianna Mosciski', '2024-07-25 00:53:25', '2024-07-25 00:53:25'),
(15, 'Miss Abagail Barrow', '2024-07-25 00:53:25', '2024-07-27 13:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 'kkkk', 1, 'pending', '2024-07-27 16:28:33', '2024-07-27 16:28:33'),
(3, 1, 16, 'ok lắm', 5, 'pending', '2024-07-28 16:22:52', '2024-07-28 16:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reset_token`
--

CREATE TABLE `customer_reset_token` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_20_090239_create_genre_table', 1),
(6, '2024_07_20_090333_create_movie_table', 1),
(7, '2024_07_20_093800_update_genre_table', 1),
(8, '2024_07_20_144231_update_user_table', 1),
(9, '2024_07_21_082012_create_customer_reset_token_table', 1),
(10, '2024_07_21_083834_update_customer_reset_token_table', 1),
(11, '2024_07_23_061433_create_categories_table', 1),
(12, '2024_07_23_061509_create_products_table', 1),
(13, '2024_07_24_163110_create_carts_table', 1),
(14, '2024_07_25_071251_create_orders_table', 1),
(15, '2024_07_25_073726_create_orders_detail_table', 2),
(16, '2024_07_25_084723_update_orders_table', 3),
(18, '2024_07_25_085301_update_orders_table', 4),
(20, '2024_07_25_142829_update_users_table', 5),
(21, '2024_07_27_001329_update_orders_table', 6),
(22, '2024_07_27_224407_create_commenst_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int UNSIGNED NOT NULL,
  `release_date` date NOT NULL,
  `genre_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name_user`, `address`, `total`, `status`, `created_at`, `updated_at`, `phone`, `pay`) VALUES
(17, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 154, 'Cancelled', '2024-07-25 19:54:23', '2024-07-26 05:18:17', '0705644472', 'unpaid'),
(18, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 106, 'Cancelled', '2024-07-26 10:08:55', '2024-07-27 14:36:40', '0705644472', 'unpaid'),
(19, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 18, 'Cancelled', '2024-07-26 17:10:52', '2024-07-27 14:39:34', '0705644472', 'unpaid'),
(20, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 18, 'Pending', '2024-07-26 17:12:09', '2024-07-26 17:12:09', '0705644472', 'unpaid'),
(21, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 18, 'Cancelled', '2024-07-26 17:17:49', '2024-07-27 14:39:42', '0705644472', 'unpaid'),
(22, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 18, 'Pending', '2024-07-26 17:21:13', '2024-07-26 17:21:13', '0705644472', 'unpaid'),
(23, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 85, 'Cancelled', '2024-07-26 17:26:26', '2024-07-27 14:39:24', '0705644472', 'unpaid'),
(24, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 85, 'Cancelled', '2024-07-26 17:29:11', '2024-07-27 14:37:25', '0705644472', 'unpaid'),
(25, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 85, 'Processing', '2024-07-26 17:31:35', '2024-07-26 17:31:35', '0705644472', 'unpaid'),
(26, 1, 'nguyễn thanh lâm', 'Hiệp Hòa', 85, 'Received', '2024-07-26 17:36:49', '2024-07-27 14:38:58', '0705644472', 'paid'),
(27, 1, 'nguyễn thanh lâm', 'Hiệp Hòa - Bắc Giang', 255, 'Cancelled', '2024-07-27 14:31:01', '2024-07-27 14:34:49', '0705644472', 'unpaid'),
(28, 1, 'nguyễn thanh lâm', 'Hiệp Hòa - Bắc Giang', 1998, 'Cancelled', '2024-07-29 03:09:50', '2024-08-01 07:28:30', '0705644472', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(19, 17, 2, 2, 56.00, 112.00, '2024-07-25 19:54:23', '2024-07-25 19:54:23'),
(20, 17, 14, 1, 42.00, 42.00, '2024-07-25 19:54:23', '2024-07-25 19:54:23'),
(21, 18, 13, 1, 23.00, 23.00, '2024-07-26 10:08:55', '2024-07-26 10:08:55'),
(22, 18, 12, 1, 18.00, 18.00, '2024-07-26 10:08:55', '2024-07-26 10:08:55'),
(23, 18, 8, 1, 61.00, 61.00, '2024-07-26 10:08:55', '2024-07-26 10:08:55'),
(24, 18, 11, 1, 4.00, 4.00, '2024-07-26 10:08:55', '2024-07-26 10:08:55'),
(25, 19, 12, 1, 18.00, 18.00, '2024-07-26 17:10:52', '2024-07-26 17:10:52'),
(26, 20, 8, 1, 61.00, 61.00, '2024-07-26 17:12:09', '2024-07-26 17:12:09'),
(27, 21, 6, 1, 77.00, 77.00, '2024-07-26 17:17:50', '2024-07-26 17:17:50'),
(28, 22, 14, 1, 42.00, 42.00, '2024-07-26 17:21:13', '2024-07-26 17:21:13'),
(29, 23, 14, 2, 42.00, 84.00, '2024-07-26 17:26:26', '2024-07-26 17:26:26'),
(30, 24, 14, 1, 42.00, 42.00, '2024-07-26 17:29:11', '2024-07-26 17:29:11'),
(31, 25, 14, 1, 42.00, 42.00, '2024-07-26 17:31:35', '2024-07-26 17:31:35'),
(32, 26, 11, 1, 4.00, 4.00, '2024-07-26 17:36:49', '2024-07-26 17:36:49'),
(33, 27, 3, 23, 11.00, 253.00, '2024-07-27 14:31:01', '2024-07-27 14:31:01'),
(34, 27, 15, 1, 10.00, 10.00, '2024-07-27 14:31:01', '2024-07-27 14:31:01'),
(35, 28, 1, 1, 1.00, 1.00, '2024-07-29 03:09:50', '2024-07-29 03:09:50'),
(36, 28, 13, 1, 23.00, 23.00, '2024-07-29 03:09:50', '2024-07-29 03:09:50'),
(37, 28, 16, 1, 1974.00, 1974.00, '2024-07-29 03:09:50', '2024-07-29 03:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `discount` int UNSIGNED DEFAULT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `discount`, `quantity`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Quần Áo Nam Jor Đan In Chữ Paris Siêu Đẹp - Bộ Quần Áo Cộc Jor Đan Chất Liệu Loly Cá Sấu Thoáng Mát XuHướng Hè', 'image/product/1722181998.jpg', 58.97, 98, 9, 'Deleniti qui quisquam placeat accusamus ut doloribus. Quasi in voluptates culpa alias aspernatur ea ut. Nobis voluptatem totam cum dolorem magni sunt. Aut doloribus consequatur facere quis ad rem.', 13, '2024-07-25 00:53:25', '2024-07-28 15:53:18'),
(2, 'Đồ bộ quần áo hè nam cộc tay phối BBR cực hót Tay Kẻ Vàng unisex nam nữ form rộng oversize chất liệu Cotton HOT 2024', 'image/product/1722181971.jpg', 74.80, 25, 83251477, 'Molestias saepe quas et accusamus nemo eveniet. Odit suscipit veniam cum odit eos similique. Omnis aut soluta tempore consequatur quasi necessitatibus.', 9, '2024-07-25 00:53:25', '2024-07-28 15:52:51'),
(3, 'ÁO KHOÁC GIÓ ĐỘI TUYỂN ĐỨC 2 MÀU TRẮNG-ĐEN HOT NHẤT 2024', 'image/product/1722181933.jpg', 30.40, 65, 17471197, 'Nam recusandae ea quae facilis inventore excepturi natus. Officia aut exercitationem quo dolores omnis. Ipsa velit unde ducimus cum autem.', 12, '2024-07-25 00:53:25', '2024-07-28 15:52:13'),
(4, 'Áo thun MLB NY Cực Hot 2024 Form Unisex Chất Cotton 100% 2 Chiều', 'image/product/1722181893.jpg', 94.72, 66, 395565, 'Reiciendis dolore iusto harum ea voluptatem voluptas. Maxime cum alias tempore illum velit. Et officiis voluptatum nulla corporis officiis nulla. Aliquam dolor vel delectus quia.', 15, '2024-07-25 00:53:25', '2024-07-28 15:51:33'),
(5, 'Áo Thun Nam Nữ FEAR OF GOD FOG ESSENTIALS Tay Ngắn From Rộng Logo In Chất Liệu Cotton 100% Co Giãn Thoáng Mát', 'image/product/1722181870.jpg', 52.48, 60, 803, 'Quidem est voluptate in inventore. Ipsam earum veniam praesentium quisquam aut ab. Autem quisquam tempora rerum pariatur voluptatem reiciendis. Ipsam et mollitia id distinctio. Ea ut assumenda distinctio.', 15, '2024-07-25 00:53:25', '2024-07-28 15:51:10'),
(6, 'Bộ Quần Áo A DI ĐÁT Nam Đức Chất Vải Mặc Siêu Mát . Bộ Thể Thao Nam Đôi Tuyển Đức Cao Cấp', 'image/product/1722181786.jpg', 96.58, 20, 8520, 'Porro et dolore numquam. Consequatur laudantium omnis atque quisquam consectetur sit praesentium. Sed praesentium qui possimus necessitatibus. Ex non temporibus magnam vel et occaecati quod.', 1, '2024-07-25 00:53:25', '2024-07-28 15:49:46'),
(7, 'Áo Thun PORSCHE Nam Nữ, Áo Phông Chất Liệu Cotton 100% Định Lượng 250gsm Form Rộng Basic Dễ Phối Đồ', 'image/product/1722181718.jpg', 56.23, 84, 220187, 'Rerum nihil voluptatem quod nesciunt repellendus. Temporibus esse ullam labore atque ea. Ipsum quam illo aut nulla perspiciatis. Quia at est distinctio nulla nesciunt autem.', 8, '2024-07-25 00:53:25', '2024-07-28 15:48:38'),
(8, 'Áo Phông In Hình Trái Tym Siêu CUTE Áo Phông Cặp Đôi Siêu Hot Hit Mùa Hè Chất Cotton 100% Siêu Thoáng Mát Hot HÈ 2024', 'image/product/1722181672.jpg', 33.69, 37, 73, 'Deserunt sint natus doloremque non nostrum sed vitae. Accusamus quia et aperiam esse deleniti sit id nihil. Fugiat et autem necessitatibus. Non enim omnis vitae qui cumque sit.', 7, '2024-07-25 00:53:25', '2024-07-28 15:47:52'),
(9, 'Áo Thun Nam Nữ Raglan Phối Line Tay Hot Trend Form Rộng Tay Lỡ Unisex Top Cổ Tròn - L2', 'image/product/1722181554.jpg', 99.00, 79, 13266, 'Explicabo sunt nihil officia consequatur sint vitae. Et ullam explicabo sed. Nemo est officia dolorem harum.', 6, '2024-07-25 00:53:25', '2024-07-28 15:45:54'),
(10, 'Áo Thun Adidas Logo Unisex Form Rộng Sọc Tay Phối Màu Đen Trắng, Áo Thun Adidass Nam Nữ Chất Cotton Mát Hotrend 2024', 'image/product/1722181297.jpg', 3.40, 93, 9, 'Commodi reprehenderit in saepe ipsum fugit. Reiciendis esse nihil voluptatem alias.', 7, '2024-07-25 00:53:25', '2024-07-28 15:41:37'),
(11, 'Áo Phông Tay Lỡ Das Thêu Logo 3 Sọc Phối Tay Lệch Màu Xanh Đỏ, Áo Thun Nam Nữ Form Dáng Unisex Boy Phố Dày Dặn Hottrend.', 'image/product/1722181253.jpg', 6.40, 37, 6436301, 'Possimus explicabo consequatur in animi aut nostrum. Voluptate ex doloremque voluptas ad fugiat soluta sint. Quos quia dolorem rerum aperiam alias ut possimus.', 3, '2024-07-25 00:53:25', '2024-07-28 15:40:53'),
(12, 'Quần Short Gió Nam Dsq2 Đen In Chữ Dọc Đùi Phối Dập Vẩy Sơn Trắng Dệt Chữ Dành Cho Anh Em Boy Phố Đi Chơi Đi Biển', 'image/product/1722181224.jpg', 30.83, 43, 54, 'Possimus ut numquam id veritatis. Ea laboriosam quas dignissimos voluptatem saepe id accusantium temporibus. Aperiam enim ut aliquid deserunt velit hic at.', 1, '2024-07-25 00:53:25', '2024-07-28 15:40:24'),
(13, 'Áo Polo Ralph_Lauren Thêu Logo Cao Bồi Siêu Nét Chất Cotton Cá Sấu Cao Cấp. Áo Polo Nam Nữ Ralph_Lauren Hottrend 2024', 'image/product/1722181188.jpg', 26.94, 14, 2849, 'Voluptas ea tempora dolor vel labore eos. Non dolores error impedit accusamus sit quia et. Facilis ut odit similique et aperiam iste quaerat. Optio quibusdam ducimus ad repellendus rem quos.', 5, '2024-07-25 00:53:25', '2024-07-28 15:39:48'),
(14, 'Bộ Cộc Nam Nữ Unisex Hè BBR-LV-NY Đơn Giản Chữ Thêu chất liệu vân gạo dập nổi ở Ngực Chữ Thêu N.Y Cao Cấp', 'image/product/1722181147.jpg', 53.53, 21, 33270424, 'Nulla dicta voluptas repudiandae et ut. Fugit dolorem cupiditate soluta officia enim non. Suscipit autem ipsam voluptatem unde.', 9, '2024-07-25 00:53:25', '2024-07-28 15:39:07'),
(15, 'Bộ Đồ JD Paris Unisex Mùa Hè Kiểu Dáng Mới-Chất Cotton Thun Mát Lên Form Cực Đẹp, Bộ Cộc Hè Nam In Hình Paris New Season', 'image/product/1722181113.jpg', 45.22, 78, 544, 'Et reiciendis consequatur in quia autem ipsam. Quod nostrum rerum veniam esse. Molestias magni rem et placeat magni quia. Doloremque voluptatem sit quidem sit atque earum.', 15, '2024-07-25 00:53:25', '2024-07-28 15:38:33'),
(16, 'Bộ Cộc Nam Chất Vải Cao Cấp Phong Cách Hàn Quốc - Bắt Trend Xu Hướng Thịnh Hành - Form Rộng Cá Tính Thời Trang', 'image/product/1722181058.jpg', 1994.00, 1, 11, 'Et reiciendis consequatur in quia autem ipsam. Quod nostrum rerum veniam esse. Molestias magni rem et placeat magni quia. Doloremque voluptatem sit quidem sit atque earum.', 15, '2024-07-27 13:11:55', '2024-07-28 16:04:57'),
(20, 'Váy Bigsize Nữ Công Sở - VD001', 'image/product/1722438352.jpg', 1994.00, 7, 11, 'kkkkk', 15, '2024-07-31 15:05:24', '2024-07-31 15:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'nguyễn thanh lâm', 'thanhlam200496@gmail.com', '0705644444', 'Hiệp Hòa - Bắc Giang', '2024-07-25 00:53:25', '$2y$10$0ZMWatMvOhjUvAXWTu/fIOZsprhVvt1LadRdOOmA.eIUlW5YpZVxC', 'vtpLEDoXIdKxh3xExHhVIQbQQkhu0eiFSfbZE5Olskqp0AqalD7eqO65FTWo', '2016-10-24 17:00:00', '2024-08-01 07:40:59', 0),
(3, 'Dr. Vicenta Kuhn IV', 'connie39@example.com', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LBoGqEX01f', '1984-02-15 17:00:00', '2002-04-22 17:00:00', 1),
(4, 'Nova Spinka', 'gwilliamson@example.org', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JAmOOiWenM', '1975-02-18 17:00:00', '1986-10-15 17:00:00', 1),
(5, 'Ms. Ayla Macejkovic II', 'rosalind.johns@example.org', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GrQaFFwPaW', '1971-08-22 17:00:00', '1975-09-07 17:00:00', 1),
(6, 'Kaia Keeling', 'emma75@example.com', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ziTiAe4Xsh', '2006-05-01 17:00:00', '2004-04-02 17:00:00', 1),
(7, 'Kole Corwin', 'chet34@example.com', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8js7A4TZc6', '2010-11-04 17:00:00', '2013-03-27 17:00:00', 1),
(8, 'Nadia Williamson', 'kraig.rogahn@example.net', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VULTXwtjru', '2006-05-22 17:00:00', '1977-12-14 17:00:00', 1),
(9, 'Myrna Bode DDS', 'kbode@example.org', NULL, NULL, '2024-07-25 00:53:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PFSfOBvl31', '2004-07-22 17:00:00', '1975-03-21 17:00:00', 1),
(16, 'admin lâm', 'lamntph32661@fpt.edu.vn', NULL, NULL, '2024-07-31 08:02:21', '$2y$10$IYRXhgwlXi5B5eIaH8lA5emsccDKJROQFc6NIZ/NO/vTw83CHNJJ.', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `customer_reset_token`
--
ALTER TABLE `customer_reset_token`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_detail_order_id_foreign` (`order_id`),
  ADD KEY `orders_detail_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
