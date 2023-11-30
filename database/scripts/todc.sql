-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todc`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `working_form` int(11) DEFAULT NULL,
  `working_type` int(11) DEFAULT NULL,
  `order_num` bigint(20) DEFAULT 0,
  `view_num` bigint(20) DEFAULT 0,
  `meta_title` int(11) DEFAULT NULL,
  `meta_key` int(11) DEFAULT NULL,
  `meta_desc` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `user_id`, `alias`, `title`, `name`, `featured_image`, `description`, `cell_phone`, `office_phone`, `fax`, `requirement`, `working_form`, `working_type`, `order_num`, `view_num`, `meta_title`, `meta_key`, `meta_desc`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'post1', 'EEEE', 'POST 01', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!\r\n										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-11-30 09:33:49', '2023-11-30 10:26:07'),
(2, 1, 1, 'first-post', 'POST 01', NULL, 'abc/post_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-11-30 09:35:25', '2023-11-30 03:34:02'),
(5, 1, 1, NULL, 'Test Post About', NULL, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!\n										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, '2023-11-30 10:14:24', '2023-11-30 10:14:24'),
(6, 1, 1, NULL, 'POST 2', NULL, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-11-30 10:23:56', '2023-11-30 10:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT 0,
  `order_num` bigint(20) DEFAULT 0,
  `alias` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `lang` varchar(255) DEFAULT 'EN',
  `active` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `parent_id`, `user_id`, `order_num`, `alias`, `description`, `name`, `lang`, `active`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 0, 'about-us', 'About us page', 'About us', 'EN', 1, '2023-11-30 09:20:44', '2023-11-30 09:46:49'),
(2, NULL, 0, 0, 'our-products', NULL, 'Our Products', 'EN', 1, '2023-11-30 08:10:58', '2023-11-30 09:48:30'),
(3, NULL, 0, 0, 'our-teams', NULL, 'Teams', 'EN', 1, '2023-11-30 08:11:34', '2023-11-30 09:48:39'),
(4, NULL, 0, 0, 'career', NULL, 'Career', 'EN', 1, '2023-11-30 08:13:57', '2023-11-30 08:14:35'),
(5, NULL, 0, 0, 'welcome', NULL, 'Welcome', 'EN', 1, '2023-11-30 08:17:41', '2023-11-30 08:17:41'),
(6, NULL, 0, 0, 'blogs', NULL, 'Blogs', 'EN', 1, '2023-11-30 08:17:58', '2023-11-30 08:17:58'),
(7, 6, 0, 0, 'blog-global', NULL, 'Global', 'EN', 1, '2023-11-30 08:19:07', '2023-11-30 08:19:07'),
(8, 6, 0, 0, 'blog-local', NULL, 'Local', 'EN', 1, '2023-11-30 09:09:56', '2023-11-30 09:09:56'),
(9, 6, 0, 0, 'blog-trending', NULL, 'Trending', 'EN', 1, '2023-11-30 09:10:54', '2023-11-30 09:10:54'),
(10, 6, 0, 0, 'blog-other', 'Other blogs', 'Other', 'EN', 1, '2023-11-30 09:11:35', '2023-11-30 09:11:35'),
(11, 4, 0, 0, 'career-hr-administrator', 'Career Hr & Admin', 'Hr & Administrator', 'EN', 1, '2023-11-30 09:13:28', '2023-11-30 09:13:28'),
(12, 4, 0, 0, 'career-finance-account', NULL, 'Finance & Accounting', 'EN', 1, '2023-11-30 09:14:27', '2023-11-30 09:14:27'),
(13, 4, 0, 0, 'career-it', NULL, 'IT', 'EN', 1, '2023-11-30 09:15:08', '2023-11-30 09:15:08'),
(14, 4, 0, 0, 'career-marketing', NULL, 'Marketing', 'EN', 1, '2023-11-30 09:15:43', '2023-11-30 09:15:43'),
(15, 4, 0, 0, 'career-sale', NULL, 'Sale', 'EN', 1, '2023-11-30 09:16:15', '2023-11-30 09:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) NOT NULL,
  `last_activity` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`, `avatar`, `phone`, `birthday`, `gender`, `role_id`, `last_activity`, `active`, `created_at`, `updated_at`) VALUES
(1, 'codehgl@gmail.com', '$2y$12$HyS4mHEUBNkpLGMr.M4fEO1h1IW9WzBAbm9Y13KyLF9ZoaHc3jAqq', 'VAN HAU', 'NGUYEN', 'users/codehgl@gmail.com/avatar/CU8VP7tO0z2iXxhkcXn6NdwpXm8G498nnulGNiwI.png', '0384375658', '2023-11-30', '1', 3, '2023-11-30 10:27:20', 1, '2023-11-30 04:10:29', '2023-11-30 10:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
