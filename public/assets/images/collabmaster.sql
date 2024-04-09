-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collabmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'team.collabmaster@gmail.com', '$2y$10$2BJzCQnKBd7urQtidPzuj.6P6SLl7hD4jXegXpseq8GJgoeglsjW2', NULL, '2024-02-29 09:56:59', '2024-02-29 09:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `assigns`
--

CREATE TABLE `assigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subadmin_id` int(10) UNSIGNED DEFAULT NULL,
  `assign` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `cover_photo` varchar(225) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `website` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `tiktok` varchar(225) DEFAULT NULL,
  `youtube` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `familiarity` varchar(255) DEFAULT NULL,
  `platforms` varchar(255) DEFAULT NULL,
  `need` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `genderOption` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `industry`, `cover_photo`, `location`, `description`, `website`, `instagram`, `tiktok`, `youtube`, `twitter`, `categories`, `familiarity`, `platforms`, `need`, `content`, `genderOption`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Agency', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Health and Fitness', 'new', 'User Generated Content,YouTube', 'Promotion on Social Media', '0-5', 'Under $1,000', 1, '2024-02-26 04:54:12', '2024-02-26 04:54:12'),
(2, 'Agency', NULL, 'mumbai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam temporibus officiis eveniet eligendi sint assumenda nam rerum quidem? Obcaecati iure repellendus in provident accusamus excepturi consequatur eius suscipit et officia?', NULL, NULL, NULL, NULL, NULL, 'Beauty,Travel', 'new', 'Instagram,User Generated Content', 'Promotion on Social Media', '0-5', 'Under $1,000', 14, '2024-03-04 08:58:28', '2024-03-21 10:37:32'),
(3, 'E-commerce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beauty,Health and Fitness,Entrepreneur and Business', 'occasionally', 'YouTube', 'Promotion on Social Media', '10-20', '$5,000 - $10,000', 16, '2024-03-19 08:02:38', '2024-03-19 08:02:38'),
(4, 'Brick & Mortar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Travel,Food and Drink', 'new', 'Instagram,User Generated Content', 'User Generated Content', '0-5', '$50,000+', 17, '2024-03-19 08:24:25', '2024-03-19 08:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `instagram_username` varchar(255) DEFAULT NULL,
  `tiktok_username` varchar(255) DEFAULT NULL,
  `youtube_username` varchar(255) DEFAULT NULL,
  `twitter_username` varchar(255) DEFAULT NULL,
  `product_summary` varchar(255) DEFAULT NULL,
  `content_type_0` varchar(255) DEFAULT NULL,
  `quantity_0` varchar(255) DEFAULT NULL,
  `duration_0` varchar(255) DEFAULT NULL,
  `duration_unit_0` varchar(255) DEFAULT NULL,
  `requirement_description_0` varchar(255) DEFAULT NULL,
  `quantity_1` varchar(255) DEFAULT NULL,
  `duration_1` varchar(255) DEFAULT NULL,
  `duration_unit_1` varchar(255) DEFAULT NULL,
  `requirement_description_1` varchar(255) DEFAULT NULL,
  `genderOption` varchar(255) DEFAULT NULL,
  `genderOption_2` varchar(255) DEFAULT NULL,
  `genderOption_3` varchar(255) DEFAULT NULL,
  `genderOption_4` varchar(255) DEFAULT NULL,
  `product_cost` varchar(255) DEFAULT NULL,
  `genderOption_5` varchar(255) DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `genderOption_6` varchar(255) DEFAULT NULL,
  `mentions` varchar(255) DEFAULT NULL,
  `img_files` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `content_1` varchar(255) DEFAULT NULL,
  `content_2` varchar(255) DEFAULT NULL,
  `content_3` varchar(255) DEFAULT NULL,
  `content_4` varchar(255) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `file_list_objs` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sender` text DEFAULT NULL,
  `receiver` text DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('44001b38-3f1a-4a17-91a8-7666853a9f93', 11, 14, 'HI lisa hrere', NULL, 0, '2024-03-04 12:50:08', '2024-03-04 12:50:08'),
('68f18762-3aec-4aa0-9a1b-5dcbee2212c5', 11, 14, 'Lisa here', NULL, 0, '2024-03-04 09:04:04', '2024-03-04 09:04:04'),
('8bdc2ae7-9b5a-46ca-baf2-4bfede2c58f1', 11, 11, '😃', NULL, 1, '2024-03-04 09:09:50', '2024-03-04 09:10:49'),
('a2e22458-809f-44de-8f6b-fe991cef8cba', 11, 14, 'HI', NULL, 0, '2024-03-04 09:04:00', '2024-03-04 09:04:00'),
('d0e90e3b-1d2a-4edc-b63a-84d3a402b306', 11, 11, 'hi', NULL, 1, '2024-03-04 09:11:23', '2024-03-04 09:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genderOption` varchar(255) DEFAULT NULL,
  `instagram_username` varchar(255) DEFAULT NULL,
  `instagram_followers` varchar(255) DEFAULT NULL,
  `tiktok_username` varchar(255) DEFAULT NULL,
  `youtube_username` varchar(255) DEFAULT NULL,
  `twitter_username` varchar(255) DEFAULT NULL,
  `twitch_username` varchar(255) DEFAULT NULL,
  `amazon_storefront` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `platform` varchar(225) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `img_1` varchar(255) DEFAULT NULL,
  `img_2` varchar(255) DEFAULT NULL,
  `img_3` varchar(255) DEFAULT NULL,
  `img_4` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`id`, `location`, `bio`, `description`, `genderOption`, `instagram_username`, `instagram_followers`, `tiktok_username`, `youtube_username`, `twitter_username`, `twitch_username`, `amazon_storefront`, `website`, `categories`, `platform`, `file_path`, `img_1`, `img_2`, `img_3`, `img_4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'New Dehli', 'Lifestyle content creator with versatile feed!', '2020 has taught me that pivoting is everything & I have been working to perfect the art of maintaining a versatile feed for times where certain content, ie. travel, may not be as possible. I’m very happy to be able to share many aspects of my life with my followers, from fitness to food to fashion, etc.', 'Female', 'Chanté Cowx', '2k', NULL, NULL, NULL, NULL, NULL, NULL, 'Lifestyle,Fashion,Beauty', 'Instagram', '16208308714039428.webp', '16208308715683057.webp', '16208308717209542.webp', '1620830871854314.webp', '1620830871992653.webp', '1', '2024-02-26 09:55:32', '2024-02-26 09:55:32'),
(5, 'Uttar Pradesh', 'Pro Tennis Athlete', 'I am a professional tennis player, highest ranked #3 in the world. As a world-class athlete, I take my job as a role model seriously and thrive to inspire greatness to all my followers. I am passionate about tennis, fitness, travel, healthy lifestyle, but above all, I love engaging with my fans and helping them live their best and most joyful life.', 'Female', 'Elina Svitolina', '1m-5m', NULL, NULL, NULL, NULL, NULL, NULL, 'Lifestyle,Fashion,Beauty', 'TikTok', '16344476226030376.webp', '16344491845100536.webp', '1634447623386975.webp', '16344476234784734.webp', '16344476235476263.webp', '6', '2024-02-28 06:55:56', '2024-02-28 06:55:56'),
(6, 'Mharashta', 'Pharmacist with a passion for fashion, beauty and travel.', 'I’m a fashion, beauty and lifestyle influencer based in London.', 'Female', NULL, NULL, NULL, 'Salma Masrour', NULL, NULL, NULL, NULL, 'Model,Art & Photography,Comedy & Entertainment', 'YouTube', '1615815784785841.webp', '16158157849524524.webp', '16158157852713072.webp', '16158157856057186.webp', '16158157858986552.webp', '10', '2024-02-28 10:32:13', '2024-02-28 10:32:13'),
(7, 'Kolkatta', 'Mom Lifestyle Blogger', 'Lisa a St. Louis boy mom blogger influencer with a passion for home decor, DIY projects, mom style, as well as every day mom life. She loves sharing products and tips with other moms! On her pages, she shares her experience and “know- how” in DIY projects, baby raising & nurturing, plus her favorite home products and routines! She absolutely loves the mom and homemaker lifestyle and would love to create content and share your brand!!', 'Female', 'Lisa Michelle', '5m-10m', NULL, NULL, NULL, NULL, NULL, NULL, 'Comedy & Entertainment,Family & Children,Adventure & Outdoors', 'User Generated Content', '16058225400046244.webp', '16058225402103086.webp', '16880973139391596.webp', '1642276817463803.webp', '1688097314134746.webp', '11', '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(8, 'Mumbai', 'Ninjawarrior champion and professional parkour athlete', 'I am Simon, two times ninjawarrior champion and professional parkour athlete. I specialise in creating viral sports chalenges as well as content in stunning landscapes. My audience (+340k followers) loves watching me jumping over cars, building pyramids of energy cans, or flipping in new appearel off cliffs or inside fancy hotels. That\'s why I already helped trusted brands in this niche to promote their businesses. Toyota, Hugo Boss, Insta360 or Red Bull have already booked me to showcase their offers in a unique way. Here are some examples: Toyota: https://www.instagram.com/p/CcGU84ljEzL/?hl=de Insta360: https://www.instagram.com/p/CgM-Z_qjqmu/?hl=de Energy beverage: https://www.instagram.com/p/CTKpcPsDsF2/?hl=de', 'Male', NULL, NULL, NULL, 'Simon Brunner', NULL, NULL, NULL, NULL, 'Model,Music & Dance,Adventure & Outdoors', 'User Generated Content', '1690282572028726.webp', '16902825717709184.webp', '16902825720960205.webp', '16902825722800684.webp', '16902825722800684.webp', '12', '2024-02-29 10:59:06', '2024-02-29 10:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `heading`, `body`, `created_at`, `updated_at`) VALUES
(1, 'New Sing Up', 'Hello Admin,\r\n\r\nA new {{ $user->role }},  just signed up to Collabmaster.', '2024-03-20 10:47:49', '2024-03-20 10:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(96, '2014_10_12_000000_create_users_table', 1),
(97, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(98, '2019_08_19_000000_create_failed_jobs_table', 1),
(99, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(100, '2024_02_13_162819_create_campaigns_table', 1),
(101, '2024_02_15_113207_create_brands_table', 1),
(102, '2024_02_15_145925_create_creators_table', 1),
(103, '2024_02_22_140712_create_packages_table', 1),
(104, '2024_02_24_081512_create_admins_table', 1),
(105, '2024_02_24_092339_create_sub_admins_table', 1),
(106, '2024_02_24_102842_create_assigns_table', 1),
(107, '2024_02_24_135336_create_abouts_table', 2),
(108, '2024_03_01_160023_create_orders_table', 2),
(109, '2024_03_03_140057_create_staff_table', 2),
(110, '2024_03_04_052004_create_offers_table', 2),
(111, '2024_03_04_999999_add_active_status_to_users', 2),
(112, '2024_03_04_999999_add_avatar_to_users', 2),
(113, '2024_03_04_999999_add_dark_mode_to_users', 2),
(114, '2024_03_04_999999_add_messenger_color_to_users', 2),
(115, '2024_03_04_999999_create_chatify_favorites_table', 2),
(116, '2024_03_04_999999_create_chatify_messages_table', 2),
(117, '2024_03_04_162810_create_chats_table', 3),
(118, '2024_03_04_170415_create_messages_table', 4),
(120, '2024_03_20_153209_create_email_templates_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `package_category` varchar(255) NOT NULL,
  `package_title` varchar(255) NOT NULL,
  `package_description` text NOT NULL,
  `package_price` int(11) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `instagram_username` varchar(255) DEFAULT NULL,
  `tiktok_username` varchar(255) DEFAULT NULL,
  `youtube_username` varchar(255) DEFAULT NULL,
  `twitter_username` varchar(255) DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `creator_id`, `package_category`, `package_title`, `package_description`, `package_price`, `website`, `instagram_username`, `tiktok_username`, `youtube_username`, `twitter_username`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 11, 'tiktok', 'Tiktok Video', 'We have seen your content and wanna hire you, please get back to us when you see this. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt dolorum commodi atque quo quidem voluptatum a quaerat. Saepe ipsum dicta ratione optio non laborum ut quaerat dolore, minima numquam eius.', 800, 'collabmaster.com', 'bR5feMcOF2', 'g8xQ0dT9L9', 'fhakaeRlGl', '8doAIYJYH6', 14, '2024-03-04 09:02:33', '2024-03-04 09:02:33'),
(2, 6, 'tiktok', 'Tiktok Video', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt dolorum commodi atque quo quidem voluptatum a quaerat. Saepe ipsum dicta ratione optio non laborum ut quaerat dolore, minima numquam eius.', 1600, 'bcom', NULL, NULL, NULL, NULL, 14, '2024-03-04 09:33:48', '2024-03-04 09:33:48'),
(3, 11, 'ugc', 'Tiktok Video', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt repellat nam enim est, minima esse eveniet distinctio eius dolore libero, et quia autem blanditiis fuga fugit illum, illo suscipit odit!', 800, 'site', NULL, NULL, NULL, NULL, 14, '2024-03-04 12:48:39', '2024-03-04 12:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `creator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `package_content_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` enum('Case On Delivery') NOT NULL DEFAULT 'Case On Delivery',
  `conformation_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `package_id`, `creator_id`, `full_name`, `address`, `description`, `package_content_type`, `price`, `status`, `conformation_status`, `created_at`, `updated_at`) VALUES
(1, 17, 1, 1, 'My Name', 'address', 'message', 'Instagram Photo Feed Post', '231.00', 'Case On Delivery', 'Accepted', '2024-03-21 04:44:26', '2024-03-21 05:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_content_type_` varchar(255) NOT NULL,
  `package_quantity_` varchar(255) DEFAULT NULL,
  `package_duration_` varchar(255) DEFAULT NULL,
  `package_duration_unit_` varchar(255) DEFAULT NULL,
  `package_price_` varchar(255) DEFAULT NULL,
  `package_description_` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_content_type_`, `package_quantity_`, `package_duration_`, `package_duration_unit_`, `package_price_`, `package_description_`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Instagram Photo Feed Post', '1', NULL, 'Seconds', '210', '1 feed post, 1 story (1-3 story frames)', 1, '2024-02-26 09:55:32', '2024-02-26 09:55:32'),
(2, 'Instagram Photo Feed Post', '2', NULL, 'Seconds', '350', '2 feed posts, 2 story posts (1-3 story frames each)', 1, '2024-02-26 09:55:32', '2024-02-26 09:55:32'),
(3, 'UGC Product Photo', '3', NULL, 'Seconds', '150', 'I will provide a minimum of 3 high quality photos including your product which can be used for your own social media & marketing. Please note this does not including posting to my personal social media feeds.', 1, '2024-02-26 09:55:32', '2024-02-26 09:55:32'),
(4, 'Instagram Photo Feed Post', '1', NULL, 'Seconds', '1700', NULL, 6, '2024-02-28 06:55:56', '2024-02-28 06:55:56'),
(5, 'Instagram Photo Feed Post', '1', NULL, 'Seconds', '1500', 'Open to discussing various options to make the post as good and efficient as possible.', 6, '2024-02-28 06:55:56', '2024-02-28 06:55:56'),
(6, 'YouTube Video', '1', NULL, 'Seconds', '1000', NULL, 10, '2024-02-28 10:32:13', '2024-02-28 10:32:13'),
(7, 'Instagram Photo Feed Post', '1', NULL, 'Seconds', '750', '1 Featured Feed Static Post & 2 Instagram Story Slides:\r\n-Brand will provide the product.\r\n-Product will be featured on Lisa Michelle Blog\'s Instagram page.', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(8, 'Instagram Reel', '1', NULL, 'Seconds', '950', '1 Featured Feed Reel & 2 Instagram Story Slides:\r\n-Brand will provide the product.\r\n-Product will be featured on Lisa Michelle Blog\'s Instagram page.', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(9, 'Instagram Photo Feed Post', '2', NULL, 'Seconds', '1100', '2 Featured Feed Static Posts & 2 Instagram Story Features:\r\n-Brand will provide the product(s).\r\n-Product will be featured on Lisa Michelle Blog\'s Instagram page.\r\n-Product will be featured twice on Lisa Michelle Blog\'s Instagram Stories over the course of 6-8 weeks.', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(10, 'Instagram Reel', '2', NULL, 'Seconds', '1600', '2 Featured Feed Reels + Post 2 Instagram Story Features:\r\n-Brand will provide the product(s).\r\n-Product will be featured on Lisa Michelle Blog\'s Instagram page.\r\n-Product will be featured twice on Lisa Michelle Blog\'s Instagram Stories over the course of 6-8 weeks.', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(11, 'UGC Product Photo', '5', NULL, 'Seconds', '350', 'Look Book of 5 Product Photos\r\n-brand will provide product\r\n-brand can provide shot list\r\n-photos can be taken in several different locations and/or settings\r\n-influencer will provide edited and raw footage to brand', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(12, 'UGC Testimonial/Review', '1', NULL, 'Seconds', '450', '1 UGC Testimonial Video (30-60 seconds) -Brand will provide product -can request music and/or voice over/captions', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(13, 'UGC Product Video', '1', '30', 'Seconds', '450', '1 UGC Product Video ranging from 30-60 seconds. -brand will provide product -can be with or without captions -can include music or voice over', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(14, 'UGC Unboxing', '1', NULL, 'Seconds', '450', '1 UGC Unboxing Video (30-60 seconds) -Brand will provide product -can request music and/or voice over/captions', 11, '2024-02-28 10:49:36', '2024-02-28 10:49:36'),
(15, 'Instagram Story', '1', NULL, 'Seconds', '800', 'A fun or spectacular video of me doing viral stunts while promoting your products with subtitles. All content will be sent to you prior to posting.', 12, '2024-02-29 10:59:06', '2024-02-29 10:59:06'),
(16, 'Instagram Photo Feed Post', '1', NULL, 'Seconds', '1900', NULL, 12, '2024-02-29 10:59:06', '2024-02-29 10:59:06'),
(17, 'Instagram Reel', '1', NULL, 'Seconds', '2900', 'A fun or spectacular video of me doing viral stunts while promoting your products featuring a trending song. All content will be sent to you prior to posting.', 12, '2024-02-29 10:59:06', '2024-02-29 10:59:06'),
(18, 'UGC Product Video', '1', NULL, 'Seconds', '1290', 'A high quality video featuring your product with 3x free correction loop.', 12, '2024-02-29 10:59:06', '2024-02-29 10:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subadmin_id` int(10) UNSIGNED DEFAULT NULL,
  `permission` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_admins`
--

CREATE TABLE `sub_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'http://127.0.0.1:8000/assets/images/user.png',
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `found_us` varchar(255) DEFAULT NULL,
  `role` enum('admin','brand','creator') NOT NULL,
  `verificaton_token` varchar(255) NOT NULL,
  `status` enum('Active','DeActive') NOT NULL DEFAULT 'DeActive',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `brand_name`, `email`, `provider_id`, `avatar`, `phone_number`, `password`, `is_verified`, `found_us`, `role`, `verificaton_token`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `active_status`, `dark_mode`, `messenger_color`) VALUES
(1, 'Chanté Cowx', 'Hannah Chanté Cowx', NULL, 'david.brandboosters@gmail.com', NULL, 'assets/images/user.png', '9120864657', '$2y$10$NTraOUW68DOTwXAeHSTrXesud5rzTD06.PlsWOWXOarbOPLDx8BCC', 1, 'Friend/Colleague', 'creator', '719373', 'Active', '2024-02-26 04:53:23', NULL, '2024-02-26 04:52:50', '2024-02-29 11:06:07', 0, 0, NULL),
(6, 'Elina', 'Elina Svitolina', NULL, 'ylzyeax609@coachnutrio.com', NULL, 'assets/images/user.png', '72764428080', '$2y$10$cwDLySMG1o4dQqd.s4vJsOeCZWPbJhLS/mqlOcyNB5tM8GWt0WNfe', 1, NULL, 'creator', '820845', 'Active', '2024-02-28 06:38:32', NULL, '2024-02-28 06:37:36', '2024-02-29 12:23:21', 0, 0, NULL),
(10, 'Salma', 'Salma Masrour', NULL, 'vgypwza481@museumpi.com', NULL, 'assets/images/user.png', '72764428081', '$2y$10$IMBCZt6OD4pOD0tuF42K3OFuOUIKA.5dNIbTj3m9VPlV4aCfm.ig2', 1, NULL, 'creator', '542486', 'Active', '2024-02-28 10:26:39', NULL, '2024-02-28 10:25:49', '2024-02-29 12:26:40', 0, 0, NULL),
(11, 'Lisa', 'Lisa Michelle', NULL, 'lugxpgc747@aweso.icu', NULL, '0e2d1935-0216-47f9-bdf0-542423cf4851.jpg', '72764428089', '$2y$10$aF//2AxDzAkX0/KWkMN52uvosIqkWq6ISYgJu6nmzzVfPti0Xj6MK', 1, NULL, 'creator', '294794', 'Active', '2024-02-28 10:39:09', NULL, '2024-02-28 10:38:36', '2024-03-04 12:49:56', 0, 0, NULL),
(12, 'Simon', 'Simon Brunner', NULL, 'fjcltca096@owmail.net', NULL, 'assets/images/user.png', '7276442808', '$2y$10$F.BXheHkynaRvsZRa1VZqeJJb5j9LmkYIIdAnSMvR2aLRNtYXSUa.', 1, NULL, 'creator', '085150', 'Active', '2024-02-29 10:53:48', NULL, '2024-02-29 10:53:19', '2024-02-29 10:59:00', 0, 0, NULL),
(13, 'Selma ', 'Selma Aalam', NULL, 'glroety367@aweso.icu', NULL, 'assets/images/user.png', NULL, '$2y$10$oMfSFMf1Lo/M1lrs5MeAzuLv1z7o3cdjfZoG6z3WA7URWQ1rz8EVO', 0, NULL, 'creator', '813276', 'Active', NULL, NULL, '2024-02-29 11:31:13', '2024-02-29 11:31:13', 0, 0, NULL),
(14, 'Shanzay', 'Shanzay Sheikh', 'Brand Boosters Global', 'vwpvfjp915@aweso.icu', NULL, 'http://127.0.0.1:8000/assets/images/user.png', NULL, '$2y$10$rEjNty/DwBJgaw4pi1kvJOs5sp1JBQ.tRtK/fIAbca5kSPz8pqq6S', 0, 'Friend/Colleague', 'brand', '719985', 'Active', '2024-03-04 08:57:46', NULL, '2024-03-04 08:57:02', '2024-03-04 08:57:46', 0, 0, NULL),
(15, 'Shahzaib', 'Shahzaib', 'BBGlobal', 'shahzaiblsbu@gmail.com', NULL, 'http://127.0.0.1:8000/assets/images/user.png', NULL, '$2y$10$r1RXHn.7g9JsaduIdmUQ/OzHfVvcre89C35JkVU/3La44vUZOQmtm', 0, 'YouTube', 'brand', '091274', 'DeActive', '2024-03-05 10:35:45', NULL, '2024-03-05 10:34:45', '2024-03-05 10:35:45', 0, 0, NULL),
(16, NULL, 'smtp', 'smtp', 'vvbbfbc675@aweso.icu', NULL, 'http://127.0.0.1:8000/assets/images/user.png', NULL, '$2y$10$6dBct/k4TT2seV4QqzWk9uVpH6.OB2eM/5F7D429KUUphVFhrnD.u', 0, 'Friend/Colleague', 'brand', '105943', 'DeActive', '2024-03-19 08:01:39', NULL, '2024-03-19 08:00:53', '2024-03-19 08:01:39', 0, 0, NULL),
(17, NULL, 'steve', 'BBglobal', 'stee.brandboosters@gmail.com', NULL, 'http://127.0.0.1:8000/assets/images/user.png', NULL, '$2y$10$qGXOmEWVe4cKia5rCCIJg.T.4nODTAg6g7rF/rD4x4CByK1VvVIwW', 0, 'Friend/Colleague', 'brand', '315770', 'Active', '2024-03-19 08:06:53', NULL, '2024-03-19 08:06:25', '2024-03-19 08:06:53', 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigns`
--
ALTER TABLE `assigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigns_subadmin_id_foreign` (`subadmin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_user_id_foreign` (`user_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_user_id_foreign` (`user_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_creator_id_foreign` (`creator_id`),
  ADD KEY `chats_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creators`
--
ALTER TABLE `creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_creator_id_foreign` (`creator_id`),
  ADD KEY `offers_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_package_id_foreign` (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packages_user_id_foreign` (`user_id`);

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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_subadmin_id_foreign` (`subadmin_id`);

--
-- Indexes for table `sub_admins`
--
ALTER TABLE `sub_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`name`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assigns`
--
ALTER TABLE `assigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creators`
--
ALTER TABLE `creators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_admins`
--
ALTER TABLE `sub_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assigns`
--
ALTER TABLE `assigns`
  ADD CONSTRAINT `assigns_subadmin_id_foreign` FOREIGN KEY (`subadmin_id`) REFERENCES `sub_admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chats_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `offers_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_subadmin_id_foreign` FOREIGN KEY (`subadmin_id`) REFERENCES `sub_admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
