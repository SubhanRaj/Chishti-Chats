-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:18 PM
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
-- Database: `chishti_chats`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'magni', 'voluptates-voluptatibus-laboriosam-rerum-dolorem', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(2, 'cum', 'iure-ratione-numquam-excepturi-consequuntur', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(3, 'dolorum', 'illo-eius-occaecati-cumque-in-tenetur-cum', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(4, 'natus', 'voluptatem-quas-vel-quasi-nemo-nobis-exercitationem', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(5, 'et', 'quia-quis-voluptatem-ut-minima-doloremque-veritatis', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(6, 'quidem', 'enim-quasi-reprehenderit-amet-beatae-aliquam-possimus-eligendi', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(7, 'eveniet', 'dolor-odit-quia-dignissimos-nisi-adipisci-et-in', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(8, 'culpa', 'alias-maiores-nostrum-enim-voluptatem-pariatur-necessitatibus', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(9, 'itaque', 'repudiandae-rerum-eos-omnis-repellat-eum-distinctio', '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '04DE64DB56111381', 18, 'sdfds', '2023-11-21 13:37:11', '2023-11-21 13:37:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
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
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_email` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `role`, `user_id`, `email`, `phone`, `password`, `two_fa_email`, `two_fa_phone`, `created_at`, `updated_at`) VALUES
(2, 'ADMIN', '123443', 'admin@gmail.com', '123456789', '$2y$10$Z0JhIN84CCP5q1cCAdv5tuzKN.Ocnz3/lkIruWjZFurlbPcknglbW', 'NO', ' NO', '2022-11-27 23:47:05', '2022-11-27 23:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `img_name`, `title`, `caption`, `alt`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(419, '175c6c45783096.webp', NULL, NULL, NULL, NULL, NULL, '2023-11-17 12:05:40', '2023-11-17 12:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_topic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_img_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js_schema` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_16_000000_create_users_table', 1),
(3, '2023_11_16_000001_create_password_reset_tokens_table', 1),
(4, '2023_11_16_000002_create_failed_jobs_table', 1),
(5, '2023_11_16_000004_create_categories_table', 1),
(6, '2023_11_16_000005_create_posts_table', 1),
(7, '2023_11_16_000006_create_comments_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[{"file_id":"419"}]',
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `content`, `file`, `tags`, `short_des`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 8, 'Voluptatem sed modi ut.', 'ipsa-modi-officiis-eligendi-incidunt-quia-dolorum-excepturi', 'Et beatae aliquam blanditiis. Beatae et autem fugiat labore quod. Magni quia culpa ullam qui itaque.', '[{\"file_id\":\"419\"}]', 'est omnis sit', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(2, '6', 7, 'Est est quos et.', 'ut-et-asperiores-consequatur-aspernatur-itaque-eum-sunt', 'Rerum aspernatur quod et porro. At corrupti quo nostrum voluptate eligendi. Consequuntur qui odio minima et pariatur.', '[{\"file_id\":\"419\"}]', 'eos quae voluptatem', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(3, '9', 1, 'Quam et modi non.', 'culpa-unde-placeat-doloribus-sint-vel-aut-incidunt', 'Ut eligendi quas cum error ut eveniet dolore consequatur. Dolores sint ut quia voluptates. Voluptas alias et sed adipisci.', '[{\"file_id\":\"419\"}]', 'praesentium sunt est', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(4, '1', 7, 'Nihil dicta aut fuga.', 'quaerat-mollitia-sapiente-ea-voluptate', 'Accusamus aut sed eos ipsam repudiandae. Et repellat voluptatum iste aspernatur est rem.', '[{\"file_id\":\"419\"}]', 'magnam aliquam ratione', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(5, '6', 5, 'Qui sit qui eos harum.', 'et-nemo-ullam-qui-aut-qui-suscipit', 'Laudantium in non laudantium vero molestias iste. Quia ut voluptatum aut voluptatem commodi excepturi. Qui velit qui enim dignissimos ipsam non.', '[{\"file_id\":\"419\"}]', 'consequatur eius et', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(6, '4', 8, 'Atque odio et ea.', 'itaque-alias-possimus-dolorem-architecto-esse-aspernatur-at-impedit', 'Et odio nam modi pariatur architecto. Fugiat molestiae id est culpa consequatur. Non pariatur impedit qui et quia expedita et ut.', '[{\"file_id\":\"419\"}]', 'autem eum tempore', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(7, '1', 1, 'Sequi hic ab ut.', 'delectus-id-at-voluptas-ea', 'Et dolorum et tempore. Repellat at commodi distinctio ducimus. Quibusdam dolore harum praesentium placeat. Molestiae magnam ipsa dolore laudantium expedita quasi. Natus et et ea voluptas saepe quam.', '[{\"file_id\":\"419\"}]', 'magnam rerum quia', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(8, '5', 5, 'Quia autem aut alias.', 'iusto-voluptatibus-est-labore-dolore', 'Et voluptatibus cum distinctio atque. Ut et et harum voluptas laboriosam excepturi ut.', '[{\"file_id\":\"419\"}]', 'repellat repellat illo', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(9, '8', 9, 'Voluptatem eum in quae.', 'et-laboriosam-veniam-dolores-ipsum', 'Corporis eligendi aut vel iste. Rerum cupiditate dolor veritatis sed voluptatem. Libero assumenda et quia ipsam dolorum cumque. Et numquam sit ad et.', '[{\"file_id\":\"419\"}]', 'veritatis assumenda sint', NULL, '2023-11-20 09:05:51', '2023-11-20 09:05:51', NULL),
(10, '4', 6, 'Vitae ex est eius.', 'modi-dolorem-dicta-voluptatem-quis', '&lt;p&gt;Et voluptate deleniti aut ducimus autem maxime perspiciatis est. Ut iure ut voluptatem et aut magni ad. Vel veniam et voluptas similique voluptatem.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', 'adipisci recusandae ab', 'tst', '2023-11-20 09:05:51', '2023-11-20 10:29:56', NULL),
(11, 'Admin', 6, 'testing', 'testsdfsd', '&lt;p&gt;test&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'test', '2023-11-20 10:12:42', '2023-11-20 12:35:18', NULL),
(12, 'Admin', 4, 'sdtsdf', 'sdfsdf', '&lt;p&gt;sdf&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'sdf', '2023-11-20 12:52:39', '2023-11-20 12:52:39', NULL),
(18, '04DE64DB56111381', 8, 'Lorem ipsum dolor sit ametsddfsd', 'lorem-ipsum-dolor-sit-ametsddfsd', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus ut aut dolores possimus impedit adipisci ea explicabo molestias vero ullam, fuga, odit rem, aliquam quibusdam illo? Non dolores eligendi eos sed dolorem impedit qui assumenda porro at sapiente facilis nisi cupiditate, soluta reiciendis sit ullam praesentium. Voluptatem temporibus asperiores atque nostrum, optio quis, distinctio obcaecati maiores maxime vitae unde? Accusamus fuga ad amet ullam dolorem doloribus non in repellat officia aliquam accusantium quia quasi a totam culpa ab, iure vitae corrupti obcaecati nemo odio numquam id repellendus? Reiciendis veniam enim illo dolorum officia neque a repellendus commodi aut, quibusdam assumenda, obcaecati dignissimos veritatis repudiandae et excepturi aperiam fuga itaque. Iste architecto eveniet, harum id ratione velit excepturi necessitatibus minima unde, pariatur qui nostrum optio maiores nemo dignissimos amet earum eum impedit perferendis fugit facilis laboriosam, vitae debitis? Doloremque, explicabo. Vero perspiciatis fuga cumque odio. Ratione doloribus sequi, voluptatibus excepturi distinctio nam porro accusamus consequatur officiis eos eveniet! Asperiores, perferendis. Ratione doloribus nihil quibusdam soluta recusandae? Ratione velit facere fugit quaerat quis laudantium quia excepturi quos voluptatum, nemo voluptatibus quisquam ipsam, dolor, ab nostrum ipsum nisi a aut recusandae temporibus quam enim! Optio ipsum ipsa totam mollitia perferendis molestias ab.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta in ducimus quasi, eius architecto blanditiis dolorem sit consequuntur recusandae perferendis!', '2023-11-21 12:29:41', '2023-11-21 12:45:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(7, 7, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(8, 6, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(9, 9, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(10, 8, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(11, 10, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(12, 4, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(13, 7, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39'),
(14, 6, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39'),
(15, 9, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'web development', 'web-development', '2023-03-23 11:24:23', '2023-03-23 11:24:23'),
(5, 'web development tutorial', 'web-development-tutorial', '2023-03-23 11:24:41', '2023-03-23 11:24:41'),
(6, 'html', 'html', '2023-03-23 11:24:53', '2023-03-23 11:24:53'),
(7, 'css', 'css', '2023-03-23 11:25:02', '2023-03-23 11:25:02'),
(8, 'php', 'php', '2023-03-23 11:25:07', '2023-03-23 11:25:07'),
(9, 'laravel', 'laravel', '2023-03-23 11:25:20', '2023-03-23 11:25:20'),
(10, 'social media marketing', 'social-media-marketing', '2023-03-25 13:36:03', '2023-03-25 13:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text DEFAULT NULL,
  `avtar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `user_id`, `name`, `email`, `phone`, `address`, `avtar`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user', '04DE64DB56111381', 'Vaibhav Goswami', 'goswamivaibhav72@gmail.com', '07518445857', 'Singh Vila, Ali Nagar sunehra, near new deep tant house, Lucknow', NULL, '$2y$12$VkN7sjEpFktdUhOi53Y6BuWV5VjZVFh0rRpxHjaR.imEq6itTNA02', 'tZgtDSV8j9VwxfJAHuZ0pSGTUaVmIQEo', '1', '2023-11-21 10:03:47', '2023-11-21 11:31:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_unique` (`tag`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
