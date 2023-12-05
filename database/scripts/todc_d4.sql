-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 11:26 AM
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
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` bigint(20) NOT NULL,
  `job_id` bigint(20) DEFAULT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `active` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `job_id`, `sender`, `receiver`, `message`, `name`, `phone`, `attachment`, `type`, `active`, `created_at`, `updated_at`) VALUES
(9, 30, 'codehgl@gmail.com', 'codehgl@gmail.com', NULL, 'Nguyen Van Hau', '0132465789', 'career/30/CV_Nguyen_Van_Hau_dev.pdf', 'career', 0, '2023-12-05 07:08:44', '2023-12-05 07:08:44'),
(10, 36, 'codehgl@gmail.com', 'codehgl@gmail.com', NULL, 'Nguyen Anh Thu', '0132465789', 'career/36/DENGHITAMUNG.pdf', 'career', 0, '2023-12-05 07:12:56', '2023-12-05 07:12:56'),
(15, 36, 'codehgl@outlook.com', 'codehgl@gmail.com', NULL, 'Mobile Dev 1111', '0987654654', 'career/36/CV_Nguyen_Van_Hau_dev (1).pdf', 'career', 0, '2023-12-05 09:01:59', '2023-12-05 09:01:59'),
(16, NULL, 'codehgl@outlook.com', 'codehgl@gmail.com', 'test contact page send mail', 'Nguyen Van Hau', '0123456789', NULL, 'contact', 0, '2023-12-05 09:55:28', '2023-12-05 09:55:28'),
(17, NULL, 'codehgl@outlook.com', 'codehgl@gmail.com', 'test contact page send mail', 'Nguyen Van Hau', '0123456789', NULL, 'contact', 0, '2023-12-05 09:55:37', '2023-12-05 09:55:37'),
(18, NULL, 'codehgl@outlook.com', 'codehgl@gmail.com', 'test contact page send mail', 'Nguyen Van Hau', '0123456789', NULL, 'contact', 0, '2023-12-05 09:55:44', '2023-12-05 09:55:44'),
(19, NULL, 'codehgl@outlook.com', 'codehgl@gmail.com', 'test contact page send mail', 'Nguyen Van Hau', '0123456789', NULL, 'contact', 0, '2023-12-05 09:56:11', '2023-12-05 09:56:11'),
(20, NULL, 'mattroidame@gmail.com', 'codehgl@gmail.com', 'I want to be your partner', 'Nguyen Van Hau', '0321654978', NULL, 'contact', 0, '2023-12-05 10:18:14', '2023-12-05 10:18:14'),
(21, NULL, 'mattroidame@gmail.com', 'codehgl@gmail.com', 'I want to be your partner', 'Nguyen Van Hau', '0321654978', NULL, 'contact', 0, '2023-12-05 10:18:43', '2023-12-05 10:18:43');

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
  `email` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `working_form` varchar(255) DEFAULT NULL,
  `working_type` varchar(255) DEFAULT NULL,
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

INSERT INTO `post` (`id`, `category_id`, `user_id`, `alias`, `title`, `name`, `featured_image`, `email`, `description`, `cell_phone`, `office_phone`, `fax`, `requirement`, `working_form`, `working_type`, `order_num`, `view_num`, `meta_title`, `meta_key`, `meta_desc`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'post1', 'COMPANY MISSION', 'POST 01', 'posts/1/featured_image/6i95J4pyf6B9RxpiL7RgxYmqEfoSMV1SWXDuo0yJ.jpg', NULL, '<p style=\"text-align: left;\"><strong>FIRST POST IN ABOUT CATEGORY</strong></p>\r\n<p style=\"text-align: left;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi commodo faucibus nisl, ac iaculis ante. Etiam et augue lacus. In hendrerit fermentum lacus, in lacinia metus. Nam auctor tristique rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat turpis quis ipsum ultrices tristique. Fusce nisi purus, dapibus ut dolor malesuada, tincidunt bibendum turpis. Cras lacus orci, dignissim et sodales vel, posuere quis libero. Sed vel mauris condimentum, egestas ex vel, imperdiet quam. Duis et volutpat velit.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-11-30 09:33:49', '2023-12-01 07:17:34'),
(8, 2, 1, NULL, 'First Post Products', NULL, 'posts/8/featured_image/RnMqBNabN1CLCmvZXUEUq9b4EuC779mfzcwzIFAo.png', NULL, '<p>aaaaaaa</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 03:18:24', '2023-12-04 02:45:15'),
(10, 2, 1, NULL, 'Products 2', NULL, 'posts/10/featured_image/YBiJTLW7REHSwbCpNy9dyaC7qzBGIZSapnFxhEgZ.jpg', NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 03:26:32', '2023-12-04 03:29:09'),
(18, 1, 1, NULL, 'COMPANY MISSION 2', NULL, 'posts/18/featured_image/SuuGOWoXw479s5ZWjegDjwemE03vSY2CCO3YPF5M.jpg', NULL, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 06:44:45', '2023-12-01 07:24:10'),
(20, 2, 1, NULL, 'Product 3', NULL, 'posts/20/featured_image/2DrGVjYXOgBzx2jPcwACljNHEgrj3gvXAmPKKsiL.jpg', NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 07:36:25', '2023-12-04 03:29:18'),
(21, 3, 1, NULL, 'C.E.O', 'Nguyen Van A', 'posts/21/featured_image/ChkhoZgq4WEZ57j6mDoFgi6BY2itdpa3U23Eu2Y3.png', 'ceo@gmail.com', NULL, '012345978', '0981312212', 'ABC1234567', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 07:51:13', '2023-12-04 03:36:58'),
(23, 7, 1, NULL, 'The standard Lorem Ipsum passage, used since the 1500s', NULL, 'posts/23/featured_image/ysvdo5iGzjXLeiarZ82XZaL92zCzAkcpZyNtxdM6.png', NULL, '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:03:18', '2023-12-01 09:28:42'),
(24, 10, 1, NULL, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', NULL, 'posts/24/featured_image/8subkHGonaHVM3D1vcUG9dXX6U2w25wBxnvEsbMy.jpg', NULL, '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:04:39', '2023-12-04 02:05:58'),
(25, 8, 1, NULL, '1914 translation by H. Rackham', NULL, 'posts/25/featured_image/MTFkpocaAwBzG34e19XOaxANYUM8keIkD9YWg12O.jpg', NULL, '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:17:25', '2023-12-01 09:29:12'),
(26, 7, 1, NULL, 'Trending Post Lorem Ipsum', NULL, 'posts/26/featured_image/lcNwR3eZJstMJqmsiFJYAUusFfbyuUh8gYm3Msv8.jpg', NULL, '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:18:07', '2023-12-04 06:54:55'),
(27, 7, 1, NULL, 'Global Post', NULL, 'posts/27/featured_image/eaJm7YgkZcj1S9OsbG4jJcKn5d9baDwNjhqwean0.jpg', NULL, '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-01 09:19:32', '2023-12-04 02:06:07'),
(29, 3, 1, NULL, 'C.T.O', 'Delin Ber', 'posts/29/featured_image/19ehOyPOYoSN8c9LJ9AvVExv9E8DIEaNOUbw0wk9.jpg', 'cto@todc.com', NULL, '0123465789', '0321654789', 'ABC1234567', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-04 01:42:07', '2023-12-04 03:37:48'),
(30, 11, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'SENIOR MARKETING OPERATOR', NULL, NULL, '<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', NULL, NULL, NULL, '<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', 'Onsite', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 02:00:44', '2023-12-04 02:00:44'),
(31, 15, 1, NULL, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth', 'JUNIOR SALES ASSISTANT', NULL, NULL, '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', NULL, NULL, NULL, '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', 'Onsite', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 02:03:33', '2023-12-04 02:03:42'),
(32, 2, 1, NULL, 'TALENT SEARCHING PATH 1', NULL, 'posts/32/featured_image/vXo7YuMggGpotRyx4cGz7w8hqLXgSqw6iapFqeXM.jpg', NULL, '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariature</p>', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, '2023-12-04 02:08:37', '2023-12-04 03:29:26'),
(33, 13, 1, NULL, 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment,', 'JUNIOR DEVELOPER', NULL, NULL, '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains</p>', NULL, NULL, NULL, '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains</p>', 'Remote', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:26:49', '2023-12-04 08:26:49'),
(34, 12, 1, NULL, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate', 'LEADER ACCOUNT', NULL, NULL, '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditateAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditateAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>', NULL, NULL, NULL, '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditateAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditateAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditateAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>', 'Onsite', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:28:09', '2023-12-04 08:28:17'),
(35, 14, 1, NULL, 'Training for member Training for member Training for member Training for member', 'MARKETING LEADER', NULL, NULL, '<p>non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam liberonon provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero</p>', NULL, NULL, NULL, '<p>non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam liberonon provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam liberonon provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero</p>', 'Onsite', 'Part-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:29:27', '2023-12-04 08:29:27'),
(36, 13, 1, NULL, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,', 'MOBILE DEVELOPER', NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', NULL, NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', 'Onsite', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:49:22', '2023-12-04 08:49:34'),
(37, 13, 1, NULL, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,', 'SOFTWARE ENGINEER', NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', NULL, NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', 'Hybrid', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:50:22', '2023-12-04 08:50:22'),
(38, 13, 1, NULL, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,', 'IT HELPDESK', NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', NULL, NULL, NULL, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,&nbsp;</p>', 'Onsite', 'Full-time', 0, 0, NULL, NULL, NULL, 1, '2023-12-04 08:51:04', '2023-12-04 08:51:04');

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
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `hr_email` varchar(255) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `company_name`, `company_address`, `company_phone`, `company_email`, `hr_email`, `active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'The One Digi Corp', '40 Thiên Phước, Ward 9, Tân Bình Disctrict, Hồ Chí Minh City', '0123456789', 'codehgl@gmail.com', 'hr@todc.com', 1, '2023-12-05 08:14:24', '2023-12-05 02:12:06');

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
(1, 'codehgl@gmail.com', '$2y$12$HyS4mHEUBNkpLGMr.M4fEO1h1IW9WzBAbm9Y13KyLF9ZoaHc3jAqq', 'VAN HAU', 'NGUYEN', 'users/codehgl@gmail.com/avatar/CU8VP7tO0z2iXxhkcXn6NdwpXm8G498nnulGNiwI.png', '0384375658', '2023-11-30', '1', 3, '2023-12-05 09:13:02', 1, '2023-11-30 04:10:29', '2023-12-05 09:13:02');

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
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `setting`
--
ALTER TABLE `setting`
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
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
