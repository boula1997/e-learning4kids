-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 07:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aast`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroom_id` int(11) NOT NULL,
  `classroom_code` varchar(128) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroom_id`, `classroom_code`, `title`, `course_id`, `teacher_id`) VALUES
(1, 'zxy84', 'math term 1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `specialization` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `specialization`) VALUES
(1, 'Math', 'mathmatics'),
(2, 'sience', 'scientific'),
(3, 'History', 'historic'),
(4, 'geography', 'geography'),
(5, 'relign', 'religous');

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
(4, '2021_05_20_054101_create_admins_table', 2),
(5, '2021_05_20_054229_create_writers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `age` varchar(200) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `number_of_children` varchar(15) NOT NULL,
  `relation` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`user_id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `age`, `phone`, `number_of_children`, `relation`) VALUES
(1, 'kirolos', '', 'nessim@gmail.com', NULL, '', NULL, NULL, NULL, 'Ayat-Giza', '', '0114565869', '', 'father'),
(2, 'boula', 'Nolan Obrien', 'tuwuqo@mailinator.com', NULL, '$2y$10$nu7Y3vWgWb08cpdSKR8DOucG7LAcLj6I3Siw1HdcgV6DL/XWDEvKu', NULL, '2021-05-20 08:02:13', '2021-05-20 08:02:13', 'Molestias sed ut por', 'Eu reprehenderit in', '+1 (489) 661-2402', '840', 'Dolores quia ut ex a'),
(3, 'hima', 'boula', 'himaboula@gmail.com', NULL, '$2y$10$xUlxYOliQwvWngil3nYvI.i2Nmoi7x1H9w9NyiMhWnztDNWksJjbG', NULL, '2021-05-24 21:10:25', '2021-05-24 21:10:25', 'cairo', '35', '00000', '2', 'father');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nessimboula@gmail.com', '$2y$10$epgZ8eYiHg.i65i8SobfKebJTtslRXjpMTxZEev0gP3SmqEoRzKAG', '2021-04-25 01:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `term` varchar(128) DEFAULT NULL,
  `personality_type` varchar(128) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `term`, `personality_type`, `parent_id`) VALUES
(1, 'boula', 'nessim', 'boula@gmail.com', NULL, '$2y$10$txiq2cpnYnA9aXJ2ICJFLelesclbkPcY1NhJVdArLyi3fRcPDl/Bq', '', '2021-04-26 20:10:37', '2021-04-26 20:10:37', 'Ayat-Giza', '1', 'genius', 1),
(2, 'kirolos', 'khamis', 'k.k.nashed@gmail.com', NULL, '$2y$10$fsjivHcUFxDqW.qoFz5C/uKpE5M1tnO/Me0ch6.3vPYJkN1xVezd2', NULL, '2021-05-06 10:49:36', '2021-05-06 10:49:36', '65 Mohamed Darwish St., Elzawya Elhamra, Apt. 1', '2', NULL, 0),
(3, 'ibrahim', 'samy', 'ibrahim@gmail.com', NULL, '$2y$10$EfVlt1YqY.SmcoaQ6peQiOpTL2wXxIZduRtXSUc3Uosmh05UT4cte', NULL, '2021-05-06 11:23:22', '2021-05-06 11:23:22', 'cairo', '2', NULL, NULL),
(4, 'Quynn Jones', 'Ali Hensley', 'tizo@mailinator.com', NULL, '$2y$10$vJh6anhPqkQQOa985.FTxeiEzMyxpQt3mWGX3prGvhnUSHM4wXyDO', NULL, '2021-05-19 18:08:01', '2021-05-19 18:08:01', 'Deserunt deleniti om', 'Nisi nobis velit au', NULL, NULL),
(5, 'Kyle Hardy', 'Stephen Espinoza', 'makuruhi@mailinator.com', NULL, '$2y$10$lubx6WuwS.BE0ptbe2BOgeCyaGkqNMXDkIgoyyRjl3YSWH059CUTS', NULL, '2021-05-20 08:04:34', '2021-05-20 08:04:34', 'Quaerat soluta animi', 'Dicta quis eligendi', NULL, NULL),
(6, 'Marah Hickman', 'Channing Leonard', 'niriqeja@mailinator.com', NULL, '$2y$10$V3oaWB5Q6Uy60tZjA2DdduENWZrldHh5ubdMG5qb.BCHS84fkhzaK', NULL, '2021-05-20 08:08:47', '2021-05-20 08:08:47', 'Deserunt dolores har', 'Unde dolor ea quam l', NULL, NULL),
(7, 'Dahlia Salazar', 'Kelsey Owen', 'nehyraget@mailinator.com', NULL, '$2y$10$s0Ys60xAxbgyhCps8N7GdupxZQcpXALUeE4cKWCqxfWnCMGwt0Q2S', NULL, '2021-05-20 08:09:58', '2021-05-20 08:09:58', 'Cumque et sunt volup', 'Occaecat quo est in', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_enrollment`
--

CREATE TABLE `student_enrollment` (
  `student_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `mid_term` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_enrollment`
--

INSERT INTO `student_enrollment` (`student_id`, `classroom_id`, `mid_term`, `final`) VALUES
(1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_post`
--

CREATE TABLE `student_post` (
  `student_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `content` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_post`
--

INSERT INTO `student_post` (`student_id`, `classroom_id`, `content`) VALUES
(1, 1, 'Hi eveybody!');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `age` varchar(100) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `specialization` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `age`, `phone`, `specialization`) VALUES
(1, '', '', 'ahmed@gmail.com', NULL, '', '', NULL, NULL, 'Ayat-Giza', '', '01126785910', 'Math'),
(6, 'Hedwig Macias', 'Karen Marsh', 'xenusopyd@mailinator.com', NULL, '$2y$10$KR0mEcLz16E3uSUPFoPYW.kNXp5D1ddQciqY2m6jFalwxITEzKey2', NULL, '2021-05-20 07:15:23', '2021-05-20 07:15:23', 'Ullam eaque voluptat', 'Consequuntur assumen', '+1 (457) 216-1581', 'At ducimus eaque qu'),
(10, 'Dante Ramos', 'Macaulay Collier', 'puryta@mailinator.com', NULL, '$2y$10$T4EGGZ4tK/Z6WpWO3mZQfeCdgpWxjgySMMdLk9VsJzxU/Q8RvPoL6', NULL, '2021-05-20 10:24:37', '2021-05-20 10:24:37', 'Atque distinctio Te', 'Proident facilis la', '+1 (529) 442-4313', 'Aperiam unde labore'),
(11, 'boo', 'bbbb', 'boo@gmail.com', NULL, '$2y$10$Uvxp6LJQzkI8SWrZNGCdsuU4bIIs4wX4YIMGL0Z1sBWqG8CkeHdAG', NULL, '2021-05-24 21:12:38', '2021-05-24 21:12:38', 'Family Court', '25', '45521125', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_post`
--

CREATE TABLE `teacher_post` (
  `teacher_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `content` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_post`
--

INSERT INTO `teacher_post` (`teacher_id`, `classroom_id`, `content`) VALUES
(1, 1, 'hello students');

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
(1, 'Boula Nessim', 'nessimboula@gmail.com', NULL, '$2y$10$Y.FQT6vqG1DN4Ny1RX/4Z.vROBvTmi.Cpt9LqJFHom1jkmqI1kPGO', NULL, '2021-04-25 01:04:12', '2021-04-25 01:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroom_id`),
  ADD UNIQUE KEY `classroom_code` (`classroom_code`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `student_enrollment`
--
ALTER TABLE `student_enrollment`
  ADD PRIMARY KEY (`student_id`,`classroom_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `student_post`
--
ALTER TABLE `student_post`
  ADD PRIMARY KEY (`student_id`,`classroom_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teacher_post`
--
ALTER TABLE `teacher_post`
  ADD PRIMARY KEY (`teacher_id`,`classroom_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `writers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classroom`
--
ALTER TABLE `classroom`
  ADD CONSTRAINT `classroom_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classroom_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_enrollment`
--
ALTER TABLE `student_enrollment`
  ADD CONSTRAINT `student_enrollment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_enrollment_ibfk_2` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`classroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
