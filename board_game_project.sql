-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `board_game_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment` datetime NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `booked` tinyint(1) NOT NULL,
  `guest_id` bigint(20) UNSIGNED DEFAULT NULL,
  `board_game_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_of_players` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment`, `employee_id`, `booked`, `guest_id`, `board_game_id`, `number_of_players`, `created_at`, `updated_at`) VALUES
(1, '2024-05-06 07:54:20', 1, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(2, '2024-04-25 17:24:37', 15, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(3, '2024-05-03 05:44:38', 16, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(4, '2024-04-25 23:20:29', 9, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(5, '2024-04-27 01:38:37', 17, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(6, '2024-05-08 23:49:30', 6, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(7, '2024-05-08 00:03:41', 16, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(8, '2024-05-03 04:24:39', 13, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(9, '2024-05-09 08:07:50', 3, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(10, '2024-05-06 14:47:21', 9, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(11, '2024-05-03 14:01:27', 8, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(12, '2024-05-06 17:24:37', 9, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(13, '2024-05-02 04:07:35', 17, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(14, '2024-04-28 03:44:37', 11, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(15, '2024-04-30 15:56:00', 3, 0, NULL, NULL, NULL, '2024-04-25 13:43:34', '2024-04-25 13:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `board_games`
--

CREATE TABLE `board_games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_name` varchar(200) NOT NULL,
  `min_players` int(11) NOT NULL,
  `max_players` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_games`
--

INSERT INTO `board_games` (`id`, `bg_name`, `min_players`, `max_players`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Terraforming Mars', 2, 9, 'Autem consequuntur aperiam nesciunt maiores natus et. Et et et et fugiat voluptas. Molestias repellat totam sint repellendus autem.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(2, 'Gaia Project', 1, 7, 'Possimus sed vel neque nemo sed dignissimos id. Earum delectus animi hic aliquam repellendus. Quia sint velit eum aut rerum quo in. Aut repellendus qui ut saepe modi dignissimos quia.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(3, 'Arnak', 1, 10, 'Consequatur quia odit aut aut hic itaque perspiciatis. Molestiae magnam voluptatem unde dolorem aut explicabo.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(4, 'Everdell', 2, 9, 'Dolore et aut modi non atque eaque adipisci. Aut totam ipsum temporibus neque quis. Assumenda incidunt suscipit deserunt sequi. Ut quas quidem voluptatem totam amet.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(5, 'Civilization', 1, 5, 'Inventore quia esse quis aperiam. Odio voluptas omnis omnis modi. Deserunt fugiat ea quaerat qui. Magnam et et a commodi aliquam provident quas quia.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(6, 'Scythe', 2, 8, 'Quibusdam consequuntur reiciendis culpa ea ipsam. Ipsa fugit omnis aut debitis ullam. Sapiente amet enim vero dolorem esse nostrum velit.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(7, 'Brass: Birmingham', 1, 10, 'Et iste dolorem alias rerum corrupti ipsam dicta. Porro natus et non non quidem corrupti. Culpa odit qui cupiditate eum nihil sit incidunt.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(8, 'On Mars', 1, 8, 'Ut odio reprehenderit aliquam magni et deleniti rerum. Voluptatem quisquam minima vel aut.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(9, 'Azul', 1, 8, 'Est et sit a molestias recusandae. Rerum rem provident in dolor corporis. Veritatis exercitationem itaque nihil. Quia quam expedita est maxime delectus.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(10, 'Ticket to Ride', 1, 9, 'Quos atque fuga vero consequatur. Animi voluptate est mollitia voluptatem molestiae vitae temporibus. Nihil est dolorum sequi doloremque nulla sapiente esse.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(11, 'Wingspan', 2, 10, 'Blanditiis ratione nostrum perferendis eius qui. Deserunt sint et totam eius dolorem sint. Inventore enim quam doloribus est. Dolorem in nemo quod optio sunt modi.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(12, 'Dune: Imperium', 1, 10, 'Illum eligendi non eum et consequatur unde quibusdam. Repellat iusto qui expedita et sint. Nostrum quo non expedita aut amet et aut.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(13, 'Lisboa', 1, 10, 'Et molestiae quam dolorum tempore ab debitis. Velit ut culpa optio. Expedita sint dignissimos ut officia quos. Assumenda voluptas sunt facilis labore.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(14, 'Viticulture', 1, 4, 'Incidunt sint quaerat dolorem quae reiciendis. Voluptatem omnis voluptatem necessitatibus adipisci illo repellat blanditiis. Eius odio sapiente vel dolor facilis amet beatae tenetur. Non sed et omnis et omnis tenetur et.', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(15, 'Great Western Trail', 2, 8, 'Atque est aliquid est veniam quisquam laboriosam. Pariatur labore magni reprehenderit quo. Eos aspernatur molestiae eum. Reprehenderit velit ut explicabo omnis aut.', '2024-04-25 13:43:34', '2024-04-25 13:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_email` varchar(200) NOT NULL,
  `e_password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `e_name`, `e_email`, `e_password`, `created_at`, `updated_at`) VALUES
(1, 'Mac Haag', 'hwolff@hotmail.com', 'R27_qh', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(2, 'Prof. Rodrick Farrell Jr.', 'hansen.reyes@schaden.com', 'MlS5Shcn', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(3, 'Jazlyn Metz', 'wmitchell@gmail.com', 'r>$Pi.?Mr310XU3Z4P^', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(4, 'Dr. Buddy Herzog Sr.', 'oceane.kuhn@hotmail.com', 'zQehd!\\ROf=', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(5, 'Krystel Heidenreich', 'frederic.kuhlman@hayes.com', 'cQ,#g5', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(6, 'Muriel Runolfsson', 'elena09@yahoo.com', '&\'Ke1`72Z', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(7, 'Kraig Price', 'torphy.frederick@hotmail.com', 'APOg:H4yNEjoJ<l}WU', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(8, 'Gregoria Barrows', 'davon10@hotmail.com', 'WHb`O\\NA-', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(9, 'Ms. Aniyah Homenick Jr.', 'finn.witting@yahoo.com', '>}S[Q}(\'\"?!', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(10, 'Ines Botsford', 'dkoch@gmail.com', '^^y^i>RM3Q-$g*)x', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(11, 'Mr. Braeden Hickle', 'jmccullough@nolan.biz', 'KX>%+Y_&v_CM[a', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(12, 'Linnie Langworth', 'stewart92@hotmail.com', 'F#m)r9{\".Gof', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(13, 'Marilie Williamson', 'onie91@tillman.com', 'p5ZO8(@2{w:', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(14, 'Miss Dortha Quigley', 'dskiles@yahoo.com', 'l8;#n9[%DYu[tdK', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(15, 'Roderick Simonis', 'helmer29@gmail.com', 'M%9zLlFf<BV,5Xp[98PS', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(16, 'Teszt Elek', 'teszt@gkn.com', '$2y$12$lbcMYCzGWvJOXMg.dOTcSuSkvXMnL9QSb3A34GZQJvPs4gbYX9iSK', '2024-04-25 13:43:34', '2024-04-25 13:43:34'),
(17, 'Admin Admin', 'admin@gkn.com', '$2y$12$.wWu6Y9qbsBIZV49QW7xT.7hNQ/IPxCi6MZ.mO4qt29hlIknUktrq', '2024-04-25 13:43:34', '2024-04-25 13:43:34');

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
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `g_username` varchar(100) NOT NULL,
  `g_password` varchar(100) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `g_email` varchar(200) NOT NULL,
  `g_phone_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `g_username`, `g_password`, `g_name`, `g_email`, `g_phone_number`, `created_at`, `updated_at`) VALUES
(1, 'vincenza73', 'Tk*\'/pmK<~=]f6q+M9', 'Dee Labadie II', 'rosanna.bode@yahoo.com', '+15059651561', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(2, 'beatty.nick', 'Bo0p+mx\"]B4', 'Miss Clarissa Collier IV', 'donnie02@gmail.com', '508.484.0164', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(3, 'morar.karen', ',U|<yu4', 'Fernando Kozey', 'adolphus.casper@mcglynn.com', '+18169505191', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(4, 'pagac.alexys', 'RoN)=:+^ks[k+47<v>%+', 'Kamryn Runte', 'lueilwitz.maximillia@gmail.com', '+1-502-302-7516', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(5, 'alvera.parker', 'dYd?kzVbl[lc,zsF&9', 'Dr. Krystina Harber', 'damore.fidel@hotmail.com', '475.423.8505', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(6, 'xblock', '=38CzWA.+Z!<#+^29O8i', 'Isac Walker', 'annie38@hayes.com', '612-760-2730', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(7, 'alexanne47', '\'o^`<mf[C', 'Ms. Vivienne DuBuque', 'rice.joesph@hegmann.com', '+1-414-497-5789', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(8, 'wisozk.jasper', 'MOE5=\"NPB`', 'Lavonne Wiza', 'ziemann.kyler@yahoo.com', '+1-803-210-8375', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(9, 'lubowitz.keyshawn', '.vtB0HRw;bih', 'Jillian Treutel', 'khyatt@gmail.com', '1-681-477-3103', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(10, 'cormier.kari', '~`O-6Kqjk*3_InKLU', 'Salvador Block', 'elisa.mohr@gulgowski.com', '+1-508-893-6525', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(11, 'albin18', 'Z~n#Qa,%H', 'Brandi Collier', 'irwin84@yahoo.com', '(352) 334-8247', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(12, 'jermey.fritsch', '._K6<WTE.5)KP`]gbAd', 'Prof. Kelsie Herzog', 'kenyon.hoppe@schneider.org', '(210) 566-4768', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(13, 'richard02', '+vUa$V.N-ceieiV3w)C:', 'Ms. Roberta Littel DDS', 'deon.beier@yahoo.com', '+1.430.589.2078', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(14, 'hill.orin', ';-jeCPW)x', 'Prof. Houston Boehm Sr.', 'dubuque.monserrate@yahoo.com', '+1-941-258-6568', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(15, 'shanny92', 'H)O+!mLm=', 'Lenora Shields', 'finn33@legros.info', '440.778.3320', '2024-04-25 13:43:33', '2024-04-25 13:43:33'),
(16, 'gipszjakab', '$2y$12$yafsgqGE44rTKl3ciZwaLu9GvUT8t3P4Kr8P7YAzgdQZAgveXGx.S', 'Gipsz Jakab', 'gipsz@gipsz.hu', '063012345678', '2024-04-25 13:43:33', '2024-04-25 13:43:33');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_26_094034_create_guests_table', 1),
(5, '2024_02_26_132124_create_board_games_table', 1),
(6, '2024_02_28_185516_create_employees_table', 1),
(7, '2024_02_28_210233_create_appointments_table', 1);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_employee_id_foreign` (`employee_id`),
  ADD KEY `appointments_guest_id_foreign` (`guest_id`),
  ADD KEY `appointments_board_game_id_foreign` (`board_game_id`);

--
-- Indexes for table `board_games`
--
ALTER TABLE `board_games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `board_games_bg_name_unique` (`bg_name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_e_email_unique` (`e_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guests_g_username_unique` (`g_username`),
  ADD UNIQUE KEY `guests_g_email_unique` (`g_email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `board_games`
--
ALTER TABLE `board_games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_board_game_id_foreign` FOREIGN KEY (`board_game_id`) REFERENCES `board_games` (`id`),
  ADD CONSTRAINT `appointments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `appointments_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
