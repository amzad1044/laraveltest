-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 05:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltest`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_02_135557_create_posts_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `section` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `type`, `status`, `section`, `image`, `created_at`, `updated_at`) VALUES
(3, 'This is post', 'this is body of post', 1, 1, 2, 'image/animal-animal-photography-big-cat-145939.jpg', '2020-07-02 09:30:08', '2020-07-03 03:16:14'),
(4, 'Video one', 'https://www.youtube.com/embed/8S6kk_z6i_M', 0, 1, 1, 'image/black glasses wood white.jpg', '2020-07-02 09:32:13', '2020-07-02 10:41:30'),
(5, 'post two', 'hellow from post', 1, 0, 2, 'image/headphones_books_education_121501_1600x1200.jpg', '2020-07-02 09:59:31', '2020-07-02 10:40:26'),
(6, 'Zayan malik', 'https://www.youtube.com/embed/hZ2t-_EOkoQ', 0, 1, 1, 'image/speedometer_arrow_speed_127222_1280x1024.jpg', '2020-07-02 23:45:43', '2020-07-02 23:45:43'),
(7, 'Post three', 'A quick brown fox jumps over the lazy dog.', 1, 1, 1, 'image/9a39678a97dc9cc8ef8ef00e774f1962.jpg', '2020-07-02 23:46:44', '2020-07-02 23:46:44'),
(8, 'Post four', 'A quick brown fox jumps over the lazy dog.', 1, 0, 2, 'image/10.jpg', '2020-07-02 23:48:07', '2020-07-03 03:15:42'),
(9, 'Video three', 'https://www.youtube.com/embed/4rZwI2doNAs', 0, 0, 2, 'image/50_Cent-wallpaper-4401647.jpg', '2020-07-02 23:50:12', '2020-07-03 03:15:39'),
(10, 'Video four', 'https://www.youtube.com/embed/pbaIh61gWEo', 0, 1, 1, 'image/0115.jpg', '2020-07-02 23:57:45', '2020-07-02 23:57:45'),
(11, 'post five', 'A quick brown fox jumps over the lazy dog.', 1, 0, 1, 'image/6283784-Broken-heart-girl-picking-rose-petals-in-black-and-white-except-the-rose-Stock-Photo.jpg', '2020-07-03 02:57:24', '2020-07-03 03:15:50'),
(12, 'post six', 'A quick brown fox jumps over the lazy dog.', 1, 0, 1, 'image/6968014-yamaha-r15-v2.jpg', '2020-07-03 03:00:08', '2020-07-03 03:00:08'),
(13, 'video five', 'https://www.youtube.com/embed/fid8KfKp7tY', 0, 1, 2, 'image/11411918_822384471184903_7287448198135559521_o.jpg', '2020-07-03 03:00:31', '2020-07-03 03:09:14'),
(14, 'video seven', 'https://www.youtube.com/embed/Ac25eYbaN-4', 0, 1, 1, 'image/11165119_798582063565144_5709195648881393294_o.jpg', '2020-07-03 03:10:16', '2020-07-03 03:15:53');

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
(1, 'foisal', 'foisal@gmail.com', NULL, '$2y$10$vVN.JtN6DWYgXaegdkx7p.z/NYK0hPb5rUlxBc5amU8.kvSbpgNsq', NULL, '2020-07-02 03:03:29', '2020-07-02 03:03:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
