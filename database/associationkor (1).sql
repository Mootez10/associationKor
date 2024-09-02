-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 02 sep. 2024 à 22:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `associationkor`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrations`
--

CREATE TABLE `administrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `memberPicture` varchar(255) DEFAULT NULL,
  `memberName` varchar(255) DEFAULT NULL,
  `memberPost` varchar(255) DEFAULT NULL,
  `memberWork` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administrations`
--

INSERT INTO `administrations` (`id`, `title`, `memberPicture`, `memberName`, `memberPost`, `memberWork`, `created_at`, `updated_at`) VALUES
(1, 'الهيئة المديرة 2023 --> 2026', 'mootez.jpg', 'معتز ', 'نائب الكاتب العام ', 'مهندس إعلامية', '2024-08-20 08:24:29', '2024-08-29 14:47:23'),
(4, NULL, 'hamdi.jpg', 'حمدي الشوك', 'الكاتب العام', 'قاضي', '2024-08-20 08:41:13', '2024-08-20 08:46:54'),
(5, NULL, 'na2ebra2is.jpg', 'أيوب عوينتي', 'نائب الرئيس', 'مهندس إعلامية', '2024-08-20 08:41:25', '2024-08-20 08:47:59'),
(6, NULL, 'ra2is.jpg', 'محمد بن عبدالله', 'رئيس الجمعية', 'موظف إداري', '2024-08-20 08:41:37', '2024-08-20 08:49:16'),
(7, NULL, 'hssine.jpg', 'محمد بن حسين', 'أمين المال', 'مهندس ميكانيكي', '2024-08-20 08:42:00', '2024-08-20 08:51:03'),
(8, NULL, 'haythem.jpg', 'هيثم الزين', 'نائب أمين المال', 'مهندس إعلامية', '2024-08-20 08:43:19', '2024-08-20 08:52:22'),
(9, NULL, 'tesnim.jpg', 'تسنيم مشماش', 'عضوة', 'طالبة', '2024-08-21 21:13:45', '2024-08-21 21:13:45'),
(10, NULL, 'cyrine.jpg', 'سيرين مشماش', 'عضوة', 'مهندسة إعلامية', '2024-08-21 21:15:17', '2024-08-21 21:15:17');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1725116905),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1725116905;', 1725116905),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1724949703),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1724949703;', 1724949703);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `calenders`
--

CREATE TABLE `calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `start_at` varchar(255) NOT NULL,
  `end_at` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `calenders`
--

INSERT INTO `calenders` (`id`, `title`, `color`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(19, 'إملاء جماعي فهرية بنخصيب', '#ebd96f', '2024-08-19 07:00:00', '2024-08-19 08:30:00', '2024-08-19 06:03:16', '2024-08-19 06:03:16'),
(20, 'إملاء جماعي راضية مشماش', '#ebdb7c', '2024-08-19 16:00:00', '2024-08-19 19:30:00', '2024-08-19 06:04:45', '2024-08-19 06:04:45'),
(21, 'إملاء جماعي نعيمة الحامي', '#e8d97f', '2024-08-19 17:00:00', '2024-08-19 19:00:00', '2024-08-19 06:05:38', '2024-08-19 06:05:38'),
(22, 'إملاء جماعي محمد عادل معيزة', '#e2eb72', '2024-08-20 19:00:00', '2024-08-20 20:30:00', '2024-08-19 06:06:51', '2024-08-19 06:06:51'),
(23, 'إملاء جماعي نعيمة الحامي', '#dded6d', '2024-08-21 07:00:00', '2024-08-21 08:30:00', '2024-08-19 06:13:04', '2024-08-19 06:13:04'),
(24, 'إملاء جماعي حمدي الشوك', '#d8e86a', '2024-08-21 07:30:00', '2024-08-21 09:30:00', '2024-08-19 06:13:54', '2024-08-19 06:13:54'),
(25, 'إملاء جماعي فهرية بنخصيب', '#e6f76e', '2024-08-21 09:30:00', '2024-08-21 11:00:00', '2024-08-19 06:14:49', '2024-08-19 06:14:49'),
(26, 'إملاء جماعي سعيدة العوني', '#e5f76c', '2024-08-21 17:00:00', '2024-08-21 18:30:00', '2024-08-19 06:15:46', '2024-08-19 06:15:46'),
(27, 'إملاء جماعي نعيمة الحامي', '#f2e871', '2024-08-22 07:00:00', '2024-08-22 08:30:00', '2024-08-19 06:16:48', '2024-08-19 06:16:48'),
(28, 'إملاء جماعي راضية مشماش', '#f0e673', '2024-08-22 16:00:00', '2024-08-22 19:30:00', '2024-08-19 06:18:05', '2024-08-19 06:18:05'),
(29, 'إملاء جماعي فراس عوينتي', '#ebe171', '2024-08-22 17:00:00', '2024-08-22 19:00:00', '2024-08-19 06:19:10', '2024-08-19 06:19:10'),
(30, 'إملاء جماعي راضية مشماش', '#e8d06d', '2024-08-23 08:00:00', '2024-08-23 10:00:00', '2024-08-19 06:21:56', '2024-08-19 06:21:56'),
(31, 'إملاء جماعي محمد عادل معيزة', '#edd471', '2024-08-23 19:00:00', '2024-08-23 20:30:00', '2024-08-19 06:22:27', '2024-08-19 06:22:27'),
(32, 'إملاء جماعي حمدي الشوك', '#ede36d', '2024-08-24 07:30:00', '2024-08-24 09:30:00', '2024-08-19 06:23:53', '2024-08-19 06:23:53'),
(33, 'إملاء جماعي هيثم الزين', '#e8de6b', '2024-08-24 09:30:00', '2024-08-24 10:30:00', '2024-08-19 06:24:38', '2024-08-19 06:24:38'),
(34, 'إملاء جماعي فراس عوينتي', '#e6dc69', '2024-08-24 19:00:00', '2024-08-24 20:30:00', '2024-08-19 06:25:03', '2024-08-19 06:25:03'),
(35, 'فردي حمدي الشوك', '#11f011', '2024-08-20 08:30:00', '2024-08-20 10:00:00', '2024-08-19 06:26:49', '2024-08-19 06:26:49'),
(36, 'فردي فادي دقاز', '#11f011', '2024-08-20 16:00:00', '2024-08-20 19:30:00', '2024-08-19 06:28:41', '2024-08-19 06:28:41'),
(37, 'فردي لمياء سالم', '#11f011', '2024-08-20 16:00:00', '2024-08-20 18:00:00', '2024-08-19 06:29:42', '2024-08-19 06:29:42'),
(38, 'فردي حمدي الشوك', '#11f011', '2024-08-21 09:30:00', '2024-08-21 10:00:00', '2024-08-19 06:31:31', '2024-08-19 06:31:31'),
(39, 'فردي فادي دقاز', '#11f011', '2024-08-22 16:00:00', '2024-08-22 19:00:00', '2024-08-19 06:32:22', '2024-08-19 06:32:22'),
(40, 'فردي فادي دقاز', '#11f011', '2024-08-23 10:30:00', '2024-08-23 12:30:00', '2024-08-19 06:33:15', '2024-08-19 06:33:15'),
(41, 'فردي حمدي الشوك', '#11f011', '2024-08-24 09:30:00', '2024-08-24 10:30:00', '2024-08-19 06:34:06', '2024-08-19 06:34:06'),
(42, 'فردي فادي دقاز', '#11f011', '2024-08-24 16:30:00', '2024-08-24 19:00:00', '2024-08-19 06:35:13', '2024-08-19 06:35:13'),
(43, 'فردي لمياء سالم', '#11f011', '2024-08-24 16:00:00', '2024-08-24 17:30:00', '2024-08-19 06:35:57', '2024-08-19 06:35:57'),
(44, 'الماهر حمدي الشوك', '#d41808', '2024-08-21 18:30:00', '2024-08-21 20:30:00', '2024-08-19 06:37:25', '2024-08-19 06:37:25'),
(45, 'الماهر هيثم الزين', '#d41808', '2024-08-21 18:00:00', '2024-08-21 20:00:00', '2024-08-19 06:38:24', '2024-08-19 06:38:24'),
(46, 'الماهر حمدي الشوك', '#d41808', '2024-08-24 10:30:00', '2024-08-24 12:30:00', '2024-08-19 06:39:25', '2024-08-19 06:39:25'),
(47, 'الماهر هيثم الزين', '#d41808', '2024-08-24 10:30:00', '2024-08-24 12:30:00', '2024-08-19 06:39:47', '2024-08-19 06:39:47'),
(48, 'الماهر هيثم الزين', '#d41808', '2024-08-25 08:30:00', '2024-08-25 10:30:00', '2024-08-19 06:40:18', '2024-08-19 06:40:18'),
(49, 'ملة رجالية', '#27eb18', '2024-08-06 10:00:00', '2024-08-06 12:00:00', '2024-08-21 22:03:44', '2024-08-21 22:03:44'),
(50, 'الماهر هيثم الزين', '#e00d0d', '2024-08-02 12:00:00', '2024-08-02 14:00:00', '2024-08-21 22:04:15', '2024-08-21 22:04:15'),
(51, 'فردي فادي دقاز', '#1ce813', '2024-08-30 16:00:00', '2024-08-30 18:00:00', '2024-08-21 22:04:43', '2024-08-21 22:04:43');

-- --------------------------------------------------------

--
-- Structure de la table `config_homes`
--

CREATE TABLE `config_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `banner2` varchar(255) DEFAULT NULL,
  `nameSourra` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `descAssociation` varchar(500) DEFAULT NULL,
  `activities` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `service_item_icon` varchar(255) DEFAULT NULL,
  `service_item_title` varchar(255) DEFAULT NULL,
  `service_item_desc` varchar(255) DEFAULT NULL,
  `upcoming_events` varchar(255) DEFAULT NULL,
  `upcoming_event_banner` varchar(255) DEFAULT NULL,
  `upcoming_event_title` varchar(255) DEFAULT NULL,
  `upcoming_event_datetime` varchar(255) DEFAULT NULL,
  `upcoming_event_descp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `config_homes`
--

INSERT INTO `config_homes` (`id`, `banner`, `banner2`, `nameSourra`, `logo`, `descAssociation`, `activities`, `services`, `service_item_icon`, `service_item_title`, `service_item_desc`, `upcoming_events`, `upcoming_event_banner`, `upcoming_event_title`, `upcoming_event_datetime`, `upcoming_event_descp`, `created_at`, `updated_at`) VALUES
(3, 'shp2-1.png', 'logo2.png', 'سورة البروج الأية 22', 'logo.png', 'الفرع المحلي عمر بن الخطاب بدار شعبان الفهري ينشط تحت اشراف الفرع الجهوي بنابل التابع للرابطة الوطنية للقرآن الكريم بالجمهورية التونسية منذ سنة 2011  يهدف اساسا الى نشر تعاليم الاسلام و تنمية الحس الأخلاقي لدى الناشئة الى جانب السعي الى بناء شخصية متوازنة و سوية  كما الفرع على مجموعة من الأهداف تتمثل رأسا في :', NULL, 'خدمتنا', NULL, 'تعلم القران', 'helllloooo', NULL, 'dawra.jpg', 'دورة في أساسيات التزكية', '10/10/2024 12:00 صباحا الى 02:00 مساء', 'إعداد و تقديم الاستاذ المهندس الشيخ هيثم الامام', '2024-08-08 09:55:57', '2024-08-20 08:12:25');

-- --------------------------------------------------------

--
-- Structure de la table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(20, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'dZ', 'sa', '2024-08-15 21:39:55', '2024-08-15 21:39:55'),
(21, 'mouhamed', 23546846, 'mootezaouinti@gmail.com', 'fazefaz', 'hffd', '2024-08-15 21:53:32', '2024-08-15 21:53:32'),
(22, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'qsd', 'qsd', '2024-08-15 21:54:21', '2024-08-15 21:54:21'),
(23, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'sfe', 'fqsd', '2024-08-15 21:55:49', '2024-08-15 21:55:49'),
(24, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'qsd', 'dqs', '2024-08-15 21:56:33', '2024-08-15 21:56:33'),
(25, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fazefaz', 'zaedazd', '2024-08-15 21:57:11', '2024-08-15 21:57:11'),
(26, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'acz', 'qfe', '2024-08-19 10:18:00', '2024-08-19 10:18:00'),
(27, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'sfs', 'sef', '2024-08-19 10:20:44', '2024-08-19 10:20:44'),
(28, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'sef', 'see', '2024-08-19 10:22:47', '2024-08-19 10:22:47'),
(29, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fazefaz', 'xsq', '2024-08-19 10:23:42', '2024-08-19 10:23:42'),
(30, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fazefaz', 'dzf', '2024-08-19 10:25:28', '2024-08-19 10:25:28'),
(31, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'dcsdc', 'dsfsdf', '2024-08-19 10:39:57', '2024-08-19 10:39:57'),
(32, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fazefaz', 'sdfsdfs', '2024-08-19 10:41:36', '2024-08-19 10:41:36'),
(33, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fazefaz', 'sdqdqs', '2024-08-19 10:42:50', '2024-08-19 10:42:50'),
(34, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'fdgdg', 'gdfgd', '2024-08-19 10:43:23', '2024-08-19 10:43:23'),
(35, 'Mootez Aouinti', 65656565, 'mootezaouinti@gmail.com', 'ddddd', 'dddd', '2024-08-19 10:48:57', '2024-08-19 10:48:57'),
(36, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'eeee', 'eeee', '2024-08-19 10:50:42', '2024-08-19 10:50:42'),
(37, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'eeee', 'eeee', '2024-08-19 10:51:48', '2024-08-19 10:51:48'),
(38, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'zezz', 'zzzz', '2024-08-19 10:53:05', '2024-08-19 10:53:05'),
(39, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'ddd', 'ddd', '2024-08-20 07:51:54', '2024-08-20 07:51:54'),
(41, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'kihjj', 'yjgyyjh', '2024-08-26 09:00:14', '2024-08-26 09:00:14'),
(42, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'kkk', 'kkk', '2024-08-29 12:16:46', '2024-08-29 12:16:46'),
(43, 'Mootez Aouinti', 26414032, 'mootezaouinti@gmail.com', 'aaaaa', 'aaaa', '2024-08-29 14:32:00', '2024-08-29 14:32:00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `IDCart` int(11) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `name`, `phone`, `IDCart`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'mootez', 26414032, 9872441, '01J3FHQQF7ZMZVDQ66RA5VV3BW.jpg', '2024-07-23 08:21:03', '2024-07-23 08:21:03'),
(3, 'Dorra', 92456701, 19872441, '01J41K7AA90CE60Y64TFJ1MJ9A.jpg', '2024-07-30 08:33:23', '2024-07-30 08:33:23');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `name`, `lieu`, `date`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(3, 'إفتتاح البرنامج الصيفي', 'جمعية عمر إبن الخطاب', '2024-08-22', 'saifi.jpg', 'أيام : الاثنين، الثلاثاء ، الخميس , الأعمار إبتداءً من 6 سنوات', '2024-08-19 11:12:02', '2024-08-19 11:12:02'),
(4, 'دورة في أساسيات التزكية و فقه الصلاة', 'جمعية عمر إبن الخطاب', '2024-08-23', 'dawra.jpg', 'من يوم الخميس إلى يوم الأحد', '2024-08-19 11:14:11', '2024-08-20 08:54:23'),
(5, 'تشويق الحجاج', 'جمعية عمر إبن الخطاب', '2024-07-15', 'tachwik.jpg', '15 جويلية إبتداءً من الساعة التاسعة ليلاً', '2024-08-20 08:56:18', '2024-08-20 08:56:18'),
(7, 'إفتتاح البرنامج الصيفي', 'rdterte', '2024-07-29', 'event-img2-2.jpg', 'أيام : الاثنين، الثلاثاء ، الخميس , الأعمار إبتداءً من 6 سنوات', '2024-08-29 14:40:47', '2024-08-29 14:40:47');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `feuille_revisions`
--

CREATE TABLE `feuille_revisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `feuille_revisions`
--

INSERT INTO `feuille_revisions` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(1, '10 احزاب', '01J5VP385ABJ704SRYADJFE3G1.jpg', NULL, '2024-08-21 21:59:32'),
(3, '2 حزب', '01J5VP2BQZBT5ENR15R10JGJRQ.jpg', '2024-07-30 08:26:29', '2024-08-21 21:59:03');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_07_18_134517_create_customers_table', 2),
(9, '2024_07_19_084540_add_usertype_to_users_table', 3),
(10, '2024_07_23_084020_create_etudiants_table', 4),
(11, '2024_07_23_092334_create_etudiants_table', 5),
(12, '2024_07_23_100844_create_etudiants_table', 6),
(13, '2024_07_23_104116_create_evenements_table', 7),
(14, '2024_07_23_115349_create_feuille_revisions_table', 8),
(15, '2024_08_05_113738_create_config_homes_table', 9),
(16, '2024_08_06_130740_create_set_headers_table', 10),
(17, '2024_08_08_124001_create_set_headers_table', 11),
(18, '2024_08_09_234833_create_set_footers_table', 12),
(19, '2024_08_11_235323_create_contact_messages_table', 13),
(20, '2024_08_12_001649_create_messages_table', 14),
(21, '2024_08_12_003930_create_messages_table', 15),
(22, '2024_08_12_010142_create_contact_messages_table', 16),
(23, '2024_08_17_145135_create_calenders_table', 17),
(24, '2024_08_20_101402_create_administrations_table', 18),
(27, '2024_08_20_112705_create_teachers_table', 19),
(28, '2024_08_20_150505_create_teacher_level1s_table', 20),
(29, '2024_08_20_155451_create_set_contacts_table', 21),
(30, '2024_08_20_234717_create_teacher_level2s_table', 22),
(31, '2024_08_21_003212_create_teacher_level3s_table', 23),
(32, '2024_08_21_005607_create_teacher_level4s_table', 24),
(33, '2024_08_21_005805_create_teacher_level5s_table', 25),
(34, '2024_08_21_010735_create_set_events_table', 26);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4Zg1drS6ZhSJKOlnOx3eIZJyIlEWyePBpjW5Z6j8', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoia3JyYk5vNlJWN2RpMlFCVnFieHZXS1JSbnBhakp3WlZPck8wc3BLdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkMkdFQkRTTS84Si5xZWQ4YVd1WDJiT29xMGtzbUhPQU40ckh2R293a21YOWdPSmQ2cnN1Ni4iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1724950498),
('qIDJn6Uods1J7UwWVtjEZoAO2xIzs7oonZ0Uh4bT', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaEg4UHZnYkNFYnJyOEd1WjNjRkxxTDF1c0FRTjEyYTVVWXBYWGZKZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ldmVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkMkdFQkRTTS84Si5xZWQ4YVd1WDJiT29xMGtzbUhPQU40ckh2R293a21YOWdPSmQ2cnN1Ni4iO30=', 1725121757);

-- --------------------------------------------------------

--
-- Structure de la table `set_contacts`
--

CREATE TABLE `set_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon1` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `icon2` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `icon3` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `set_contacts`
--

INSERT INTO `set_contacts` (`id`, `icon1`, `title1`, `location`, `email`, `icon2`, `title2`, `phone1`, `phone2`, `icon3`, `title3`, `email1`, `email2`, `created_at`, `updated_at`) VALUES
(1, NULL, 'موقعنا', 'نابل دار شعبان الفهري', 'www.omarbnkhattab.com', NULL, 'إتصل بنا', '21855445', '26414032', NULL, 'أرسل إلينا', 'www.omarbnkhattab.com', 'www.omarkhattab55.com', '2024-08-20 14:10:06', '2024-08-26 10:14:28');

-- --------------------------------------------------------

--
-- Structure de la table `set_events`
--

CREATE TABLE `set_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `set_events`
--

INSERT INTO `set_events` (`id`, `picture`, `title`, `description`, `location`, `date`, `created_at`, `updated_at`) VALUES
(2, 'saifi.jpg', 'الهيئة المديرة 2023 --> 2026', 'أيام : الاثنين، الثلاثاء ، الخميس , الأعمار إبتداءً من 6 سنوات', 'نابل دار شعبان الفهري', '17/07/2024', '2024-08-21 09:51:39', '2024-08-21 09:51:39'),
(3, 'dawra.jpg', 'الهيئة المديرة 2023 --> 2026', 'أيام : الاثنين، الثلاثاء ، الخميس , الأعمار إبتداءً من 6 سنوات', 'نابل دار شعبان الفهري', '17/07/2024', '2024-08-21 09:57:42', '2024-08-21 10:00:42'),
(4, 'dawra.jpg', 'الهيئة المديرة 2023 --> 2026', 'أيام : الاثنين، الثلاثاء ، الخميس , الأعمار إبتداءً من 6 سنوات', 'نابل دار شعبان الفهري', '17/07/2024', '2024-08-26 08:58:43', '2024-08-26 08:58:43');

-- --------------------------------------------------------

--
-- Structure de la table `set_footers`
--

CREATE TABLE `set_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `descAssociation` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `field1` varchar(255) DEFAULT NULL,
  `field2` varchar(255) DEFAULT NULL,
  `field3` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `field4` varchar(255) DEFAULT NULL,
  `field5` varchar(255) DEFAULT NULL,
  `field6` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `field7` varchar(255) DEFAULT NULL,
  `field8` varchar(255) DEFAULT NULL,
  `field9` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `set_footers`
--

INSERT INTO `set_footers` (`id`, `logo`, `descAssociation`, `title1`, `field1`, `field2`, `field3`, `title2`, `field4`, `field5`, `field6`, `title3`, `field7`, `field8`, `field9`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'بقوم الجمعية بتقديم دروس و محاضرات لتطوير مستوى الطلاب منها مثلا دورة في أساسيات التزكية و فقه الصلاة لسيدي علي النوري و غيرها من الدورات و المحاضرات الأخرى', 'روابط سريعة', 'الصفحة الرئيسية', 'المدرسين', 'أحداث', 'روابط سريعة', 'معلومات عنا', 'إتصل بنا', 'نابل دار شعبان الفهري الراقوبة', 'معلومات الاتصال', '21855445', 'www.omarkhattab.com', NULL, '2024-08-10 10:48:28', '2024-08-10 12:09:29');

-- --------------------------------------------------------

--
-- Structure de la table `set_headers`
--

CREATE TABLE `set_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `field1` varchar(255) DEFAULT NULL,
  `field2` varchar(255) DEFAULT NULL,
  `field3` varchar(255) DEFAULT NULL,
  `field4` varchar(255) DEFAULT NULL,
  `field5` varchar(255) DEFAULT NULL,
  `field6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `set_headers`
--

INSERT INTO `set_headers` (`id`, `logo`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'الصفحة الرئيسية', 'المدرسين', 'أحداث', 'معلومات عنا', 'إتصل بنا', NULL, '2024-08-08 11:42:38', '2024-08-10 11:57:03');

-- --------------------------------------------------------

--
-- Structure de la table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teachers`
--

INSERT INTO `teachers` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'sirine.jpg', 'سيرين المؤدب', 'تلميذة', '2024-08-20 10:27:18', '2024-08-20 12:50:35'),
(2, 'malek.jpg', 'ملاك بلحاج', 'طالبة', '2024-08-20 12:22:32', '2024-08-20 12:22:32'),
(3, 'hamdi.jpg', 'حمدي الشوك', 'قاضي', '2024-08-20 12:25:51', '2024-08-20 12:49:13');

-- --------------------------------------------------------

--
-- Structure de la table `teacher_level1s`
--

CREATE TABLE `teacher_level1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher_level1s`
--

INSERT INTO `teacher_level1s` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'ines.jpg', 'إيناس قاسم', 'طالبة', '2024-08-20 13:42:18', '2024-08-20 13:42:18'),
(2, 'selsebil.jpg', 'سلسبيل بن حميدة', 'طالبة', '2024-08-20 13:43:09', '2024-08-20 13:43:09'),
(3, 'haythem.jpg', 'هيثم الزين', 'مهندس إعلامية', '2024-08-20 13:43:31', '2024-08-20 13:43:31');

-- --------------------------------------------------------

--
-- Structure de la table `teacher_level2s`
--

CREATE TABLE `teacher_level2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher_level2s`
--

INSERT INTO `teacher_level2s` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'hamdi.jpg', 'حمدي الشوك', 'قاضي', '2024-08-20 21:55:57', '2024-08-20 21:55:57'),
(2, 'aymen.jpg', 'أيمن بعطوط', 'مهندس ', '2024-08-20 22:00:35', '2024-08-20 22:00:35'),
(3, 'sirine.jpg', 'سيرين المؤدب', 'تلميذة', '2024-08-20 22:01:07', '2024-08-20 22:01:07'),
(4, 'zaineb.jpg', 'زينب كوتي', 'تلميذة', '2024-08-20 22:02:37', '2024-08-20 22:02:37'),
(5, 'imen.jpg', 'إيمان بلحاج حميدة', 'تلميذة', '2024-08-20 22:05:32', '2024-08-20 22:05:32'),
(6, 'makram.jpg', 'مكرم قارة', 'مهندس إعلامية', '2024-08-20 22:06:07', '2024-08-20 22:06:07'),
(7, 'douaa.jpg', 'دعاء التبيني', 'طالبة', '2024-08-20 22:07:10', '2024-08-20 22:07:10'),
(8, 'fadi.jpg', 'فادي دقاز', 'طالب', '2024-08-20 22:24:30', '2024-08-20 22:24:30'),
(9, 'dorra.jpg', 'درة نصير', 'طالبة', '2024-08-20 22:28:04', '2024-08-20 22:28:04'),
(10, 'amine.jpg', 'محمد أمين مشماش', 'مهندس إعلامية', '2024-08-21 10:25:36', '2024-08-21 10:25:36'),
(11, 'selsebil.jpg', 'سلسبيل بن حميدة', 'مهندسة إعلامية', '2024-08-21 10:26:21', '2024-08-21 10:26:21'),
(12, 'haythem.jpg', 'هيثم الزين', 'مهندس إعلامية', '2024-08-21 10:26:50', '2024-08-21 10:26:50');

-- --------------------------------------------------------

--
-- Structure de la table `teacher_level3s`
--

CREATE TABLE `teacher_level3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher_level3s`
--

INSERT INTO `teacher_level3s` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'firas.jpg', 'فراس عوينتي', 'مهندس إعلامية', '2024-08-20 22:38:19', '2024-08-20 22:38:19'),
(2, 'tesnim.jpg', 'تسنيم مشماش', 'طالبة', '2024-08-20 22:38:46', '2024-08-20 22:38:46'),
(3, 'hamdi.jpg', 'حمدي الشوك', 'قاضي', '2024-08-20 22:39:19', '2024-08-21 10:19:37'),
(4, 'radhia.jpg', 'راضية مشماش', 'معلمة', '2024-08-21 10:20:05', '2024-08-21 10:20:05'),
(5, 'samia.jpg', 'سامية بن فرج', 'معلمة', '2024-08-21 10:20:39', '2024-08-21 10:20:39');

-- --------------------------------------------------------

--
-- Structure de la table `teacher_level4s`
--

CREATE TABLE `teacher_level4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher_level4s`
--

INSERT INTO `teacher_level4s` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'hssine.jpg', 'محمد بن حسين', 'مهندس ميكانيكي', '2024-08-20 23:01:01', '2024-08-21 10:18:25'),
(2, 'adel.jpg', 'محمد عادل معيزة', 'موظف', '2024-08-21 10:03:41', '2024-08-21 10:03:41');

-- --------------------------------------------------------

--
-- Structure de la table `teacher_level5s`
--

CREATE TABLE `teacher_level5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher_level5s`
--

INSERT INTO `teacher_level5s` (`id`, `picture`, `name`, `job`, `created_at`, `updated_at`) VALUES
(2, 'samia.jpg', 'سامية بن فرج', 'معلمة', '2024-08-21 10:08:34', '2024-08-21 10:08:34'),
(3, 'naima.jpg', 'نعيمة الحامي', 'معلمة', '2024-08-21 10:11:15', '2024-08-21 10:11:15'),
(4, 'houda.jpg', 'هدى قعلول', 'معلمة', '2024-08-21 10:12:35', '2024-08-21 10:12:35'),
(5, 'leila.jpg', 'ليلى عيسى العروس', 'معلمة', '2024-08-21 10:14:11', '2024-08-21 10:14:11'),
(6, 'radhia.jpg', 'راضية مشماش', 'معلمة', '2024-08-21 10:15:10', '2024-08-21 10:15:10'),
(7, 'hamdi.jpg', 'حمدي الشوك', 'قاضي', '2024-08-21 10:15:42', '2024-08-21 10:15:42');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$2GEBDSM/8J.qed8aWuX2bOoq0ksmHOAN4rHvGowkmX9gOJd6rsu6.', NULL, '2024-07-20 23:58:48', '2024-07-20 23:58:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `calenders`
--
ALTER TABLE `calenders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `config_homes`
--
ALTER TABLE `config_homes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `feuille_revisions`
--
ALTER TABLE `feuille_revisions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `set_contacts`
--
ALTER TABLE `set_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `set_events`
--
ALTER TABLE `set_events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `set_footers`
--
ALTER TABLE `set_footers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `set_headers`
--
ALTER TABLE `set_headers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_level1s`
--
ALTER TABLE `teacher_level1s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_level2s`
--
ALTER TABLE `teacher_level2s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_level3s`
--
ALTER TABLE `teacher_level3s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_level4s`
--
ALTER TABLE `teacher_level4s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_level5s`
--
ALTER TABLE `teacher_level5s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `calenders`
--
ALTER TABLE `calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `config_homes`
--
ALTER TABLE `config_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feuille_revisions`
--
ALTER TABLE `feuille_revisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `set_contacts`
--
ALTER TABLE `set_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `set_events`
--
ALTER TABLE `set_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `set_footers`
--
ALTER TABLE `set_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `set_headers`
--
ALTER TABLE `set_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `teacher_level1s`
--
ALTER TABLE `teacher_level1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `teacher_level2s`
--
ALTER TABLE `teacher_level2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `teacher_level3s`
--
ALTER TABLE `teacher_level3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `teacher_level4s`
--
ALTER TABLE `teacher_level4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `teacher_level5s`
--
ALTER TABLE `teacher_level5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
