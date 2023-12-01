-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 11:04 AM
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
(1, 1, 1, 'post1', 'COMPANY MISSION', 'POST 01', 'posts/1/featured_image/6i95J4pyf6B9RxpiL7RgxYmqEfoSMV1SWXDuo0yJ.jpg', '<p style=\"text-align: left;\"><strong>FIRST POST IN ABOUT CATEGORY</strong></p>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi commodo faucibus nisl, ac iaculis ante. Etiam et augue lacus. In hendrerit fermentum lacus, in lacinia metus. Nam auctor tristique rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat turpis quis ipsum ultrices tristique. Fusce nisi purus, dapibus ut dolor malesuada, tincidunt bibendum turpis. Cras lacus orci, dignissim et sodales vel, posuere quis libero. Sed vel mauris condimentum, egestas ex vel, imperdiet quam. Duis et volutpat velit.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-11-30 09:33:49', '2023-12-01 07:17:34'),
(8, 2, 1, NULL, 'First Post Products', NULL, 'posts//featured_image/0CbFmF8Zbuu7vCaIfwTbBuCGMTiXENW9vXGkpcxT.jpg', '<p>aaaaaaa</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 03:18:24', '2023-12-01 03:18:24'),
(10, 2, 1, NULL, 'Products 2', NULL, 'posts//featured_image/3BWQgot0LYKrJCZI8jm5pY2KtowZJNp72fHIG5vF.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, '2023-12-01 03:26:32', '2023-12-01 03:26:32'),
(18, 1, 1, NULL, 'COMPANY MISSION 2', NULL, 'posts/18/featured_image/SuuGOWoXw479s5ZWjegDjwemE03vSY2CCO3YPF5M.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 06:44:45', '2023-12-01 07:24:10'),
(20, 2, 1, NULL, 'Product 3', NULL, 'posts/20/featured_image/2DrGVjYXOgBzx2jPcwACljNHEgrj3gvXAmPKKsiL.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 07:36:25', '2023-12-01 08:04:50'),
(21, 3, 1, NULL, 'C.E.O', 'Kevin Nguyen', 'posts//featured_image/QtqCs2cegLsxq2g9kXooFWDKNDhdfb8S23wjodCS.png', NULL, '012345978', '0981312212', 'ABC1234567', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 07:51:13', '2023-12-01 08:03:04'),
(23, 7, 1, NULL, 'The standard Lorem Ipsum passage, used since the 1500s', NULL, 'posts/23/featured_image/ysvdo5iGzjXLeiarZ82XZaL92zCzAkcpZyNtxdM6.png', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:03:18', '2023-12-01 09:28:42'),
(24, 10, 1, NULL, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', NULL, 'posts/24/featured_image/8subkHGonaHVM3D1vcUG9dXX6U2w25wBxnvEsbMy.jpg', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, '2023-12-01 09:04:39', '2023-12-01 09:28:58'),
(25, 8, 1, NULL, '1914 translation by H. Rackham', NULL, 'posts/25/featured_image/MTFkpocaAwBzG34e19XOaxANYUM8keIkD9YWg12O.jpg', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:17:25', '2023-12-01 09:29:12'),
(26, 9, 1, NULL, 'Trending Post Lorem Ipsum', NULL, 'posts/26/featured_image/lcNwR3eZJstMJqmsiFJYAUusFfbyuUh8gYm3Msv8.jpg', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:18:07', '2023-12-01 09:29:28'),
(27, 7, 1, NULL, 'Global Post', NULL, 'posts/27/featured_image/eaJm7YgkZcj1S9OsbG4jJcKn5d9baDwNjhqwean0.jpg', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, '2023-12-01 09:19:32', '2023-12-01 09:27:34');

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
(1, 'codehgl@gmail.com', '$2y$12$HyS4mHEUBNkpLGMr.M4fEO1h1IW9WzBAbm9Y13KyLF9ZoaHc3jAqq', 'VAN HAU', 'NGUYEN', 'users/codehgl@gmail.com/avatar/CU8VP7tO0z2iXxhkcXn6NdwpXm8G498nnulGNiwI.png', '0384375658', '2023-11-30', '1', 3, '2023-12-01 10:03:13', 1, '2023-11-30 04:10:29', '2023-12-01 10:03:13');

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
