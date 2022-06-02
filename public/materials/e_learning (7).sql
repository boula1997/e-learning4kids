-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 07:26 PM
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
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroom_id` int(11) NOT NULL,
  `classroom_code` varchar(128) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `content` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroom_id`, `classroom_code`, `title`, `course_id`, `teacher_id`, `content`, `created_at`, `updated_at`) VALUES
(88, 'Kho4NB', 'science 2015', 2, 6, 'defualtImage.png', '2021-07-02 12:15:21', '2021-07-02 12:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comments` varchar(128) DEFAULT NULL,
  `content` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `student_id`, `teacher_id`, `post_id`, `comments`, `content`, `created_at`, `updated_at`) VALUES
(18, 49, NULL, 118, 'lljiolijko', NULL, '2021-07-08 09:48:43', '2021-07-08 09:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `specialization` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `specialization`, `created_at`, `updated_at`) VALUES
(1, 'Math', 'mathmatics', '2021-06-05 21:05:51', NULL),
(2, 'sience', 'scientific', '2021-06-05 21:05:51', NULL),
(3, 'History', 'historic', '2021-06-05 21:05:51', NULL),
(4, 'geography', 'geography', '2021-06-05 21:05:51', NULL),
(5, 'relign', 'religous', '2021-06-05 21:05:51', NULL);

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
(4, '2021_10_12_000000_create_student_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `user_id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `fname` varchar(128) DEFAULT NULL,
  `lname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number_of_children` int(4) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `relation` varchar(128) DEFAULT NULL,
  `photo` varchar(120) DEFAULT NULL,
  `updated_at` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `created_at` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`user_id`, `email`, `fname`, `lname`, `password`, `number_of_children`, `address`, `age`, `phone`, `relation`, `photo`, `updated_at`, `created_at`) VALUES
(1, 'nessim@gmail.com', 'Nessim', '', '', 3, 'Ayat-Giza', 0, '0114565869', 'father', NULL, '2021-05-27 19:40:09', '2021-05-27 19:41:50'),
(2, 'samy@gmail.com', 'Samy', '', '', 3, 'Minya', 0, '025', 'father', NULL, '2021-05-27 19:40:09', '2021-05-27 19:41:50'),
(3, 'khamis@gmail.com', 'khamis', '', '', 3, 'cairo', 0, '565', 'father', NULL, '2021-05-27 19:40:09', '2021-05-27 19:41:50'),
(4, 'mohamed@gmail.com', 'Mohamed', 'hamada', '$2y$10$MjG2s3JDD4ihf3zRDkcVKuEn/3PP9HyQhvD20IxbZez83D3BBwHaK', 4, 'Bamha - El Ayat - Giza', 24, '01126785910', 'parent', NULL, '2021-05-27 17:41:56', '2021-05-27 17:41:56'),
(5, 'nady@gmail.com', 'nady', 'kamal', '$2y$10$KhqV4FMdc1kg/p4hGmkzP.ZtzemtjKBJQdU5d4Ar.YGIG8dfFvUSy', 1, 'Bamha - El Ayat - Giza', 35, '01126785910', 'parent', NULL, '2021-05-31 19:45:03', '2021-05-31 19:45:03'),
(6, 'boula.boula@gmail.com', 'boula', 'boula', '$2y$10$I7KUjzonxSJhJZL9dev5seMw7wj73nBxXitpZ/pfxGDtsVfe54yMy', 3, 'Cairo', 20, '01236654', 'father', NULL, '2021-06-12 05:09:45', '2021-06-12 05:09:45'),
(7, 'essam@gmail.com', 'Essam', 'Nasif', '$2y$10$N4DTaVRKKHuMViL/r2r7I.TRbnkrXBQbyL3QRULnbAPMyZI4dQJ7O', 4, 'Bamha - El Ayat - Giza', 25, '01126785910', 'dad', 'Screenshot (2).png', '2021-07-02 15:03:42', '2021-07-02 15:03:42');

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
  `email` varchar(128) NOT NULL,
  `fname` varchar(128) DEFAULT NULL,
  `lname` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `term` varchar(128) DEFAULT NULL,
  `personality_type` varchar(128) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `photo` varchar(120) DEFAULT NULL,
  `updated_at` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `email`, `fname`, `lname`, `phone`, `address`, `term`, `personality_type`, `parent_id`, `photo`, `updated_at`, `created_at`, `password`) VALUES
(4, 'boula.nessim.soliman@gmail.com', 'boula', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 6, NULL, '2021-05-19 21:13:33', '2021-05-19 21:13:33', 'mmmmmmmm'),
(22, 'emad@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 6, NULL, '2021-05-19 21:32:01', '2021-05-19 21:32:01', 'mmmmmmmm'),
(23, 'ismail@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:34:54', '2021-05-19 21:34:54', 'aaaaaaaa'),
(25, 'ahmed@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:37:09', '2021-05-19 21:37:09', '22222222'),
(26, 'samy@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:38:30', '2021-05-19 21:38:30', 'aaaaaaaa'),
(28, 'm@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:39:43', '2021-05-19 21:39:43', 'mmmmmmmm'),
(29, 'c@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:41:11', '2021-05-19 21:41:11', 'cccccccc'),
(31, 'n@gmail.com', 'eamd', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:42:32', '2021-05-19 21:42:32', 'mmmmmmmm'),
(32, 'y@gmail.com', 'eamd', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:43:45', '2021-05-19 21:43:45', 'aaaaaaaa'),
(33, 'x@gmail.com', 'eamd', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:44:23', '2021-05-19 21:44:23', 'xxxxxxxx'),
(35, 'u@gmail.com', 'eamd', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 21:45:04', '2021-05-19 21:45:04', 'uuuuuuuu'),
(36, 'em@gmail.com', 'emad', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 23:07:03', '2021-05-19 23:07:03', '$2y$10$yffShv2naCJAaWUiggSX0OyWx1kybHnpqRWiiaKZh3v4YZ12k7pDu'),
(37, 'milas@gmail.com', 'melad', 'saad', '', 'ccc', 'ccc', NULL, 1, NULL, '2021-05-19 23:16:16', '2021-05-19 23:16:16', 'cccccccc'),
(38, 'ero@gmail.com', 'boula', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-05-19 23:49:33', '2021-05-19 23:49:33', 'nnnnnnn'),
(39, 'kl@gmail.com', 'boula', 'nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 2, NULL, '2021-05-20 00:11:07', '2021-05-20 00:11:07', 'kkkkkkkk'),
(41, 'ahmedd@gmail.com', 'ahmed', 'ali', '', 'Bamha - El Ayat - Giza', 'jdk', NULL, 1, NULL, '2021-05-20 01:28:45', '2021-05-20 01:28:45', 'kkkkkkkk'),
(42, 'rm@gmail.com', 'rned', 'dddjf', '', 'Bamha - El Ayat - Giza', 'ew', NULL, 1, NULL, '2021-05-20 01:49:46', '2021-05-20 01:49:46', 'nnnnnnnn'),
(43, 'nawal@gmail.com', 'nawal', 'said', '', 'Bamha - El Ayat - Giza', 'jhduqj', NULL, 2, NULL, '2021-05-20 23:04:49', '2021-05-20 23:04:49', '$2y$10$ER.YpwiGe.Z63XoW60kb/unbArFRmc5jWIYe00cQpC3/5fPfcalF.'),
(44, 'kmal@gmail.com', 'jamal', 'kamal', '', 'Bamha - El Ayat - Giza', 'dasdwe', NULL, 1, NULL, '2021-05-20 23:40:57', '2021-05-20 23:40:57', '$2y$10$DSfmH2U/eSEiFHMUVVfonO4LaC/B5ItxKvhbXqqidDEcJOcJ8MhXC'),
(45, 'mohamed@gmail.com', 'Mohamed', 'Hamada', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 2, NULL, '2021-05-27 16:33:49', '2021-05-27 16:33:49', '$2y$10$9xgdoPo7UYkGB1BjlS8ziOOroJAEVZyNVOybgxatroIz4gK6MNYEK'),
(46, 'soliman@gmail.com', 'Boual', 'Nessim', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 5, NULL, '2021-06-02 20:32:07', '2021-06-02 20:32:07', '$2y$10$XaEDvJ/i37Mi4l/nTCfPw.vfdbLt0GYADAhTq7SNg8y6WzobsI02m'),
(47, 'mai@gmail.com', 'mai', 'gamal', '', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-06-03 01:00:27', '2021-06-03 01:00:27', '$2y$10$wXsGHwLXpluL9KqCmDt0Xubh9lFoG3D7VrYXkwxG8Gom3PE2E75ve'),
(48, 'ahmedali@gmail.com', 'ahmed', 'ali', '', 'Bamha - El Ayat - Giza', 'primary', NULL, 2, NULL, '2021-06-10 01:28:41', '2021-06-10 01:28:41', '$2y$10$wXsGHwLXpluL9KqCmDt0Xubh9lFoG3D7VrYXkwxG8Gom3PE2E75ve'),
(49, 'nessimboula@gmail.com', 'Boula', 'Nessim', '01126785910', 'Bamha - El Ayat - Giza', 'primary', NULL, 1, 'Screenshot (2).png', '2021-07-02 15:29:54', '2021-07-01 13:49:19', '$2y$10$hb4pNDOac5c.PuAagOXg3.wXvpSdF7jNk/plUefsYYb40FTqZDVlS'),
(50, 'samyia@gmail.com', 'samy', 'ali', '01126785910', 'Bamha - El Ayat - Giza', 'prep', NULL, 1, NULL, '2021-07-01 21:51:19', '2021-07-01 21:51:19', '$2y$10$yWE2U1SX3bokCEI2rDhLB.faHVAm261AZal7McTuFlCwIJ/Fpl53O'),
(51, 'said@gmail.com', 'Said', 'ahmed', '651615', 'njknjl', 'kjnknj', NULL, 1, 'Screenshot (4).png', '2021-07-02 14:58:42', '2021-07-02 14:58:42', '$2y$10$rxdVRP4FdBGuUv0IFurrXOUAdSh1TZmSsswVWAaS.y3hVqDuMduKG');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `content` varchar(128) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `classroom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` (`id`, `student_id`, `assignment_id`, `content`, `grade`, `created_at`, `updated_at`, `classroom_id`) VALUES
(46, 49, 11, 'IMG20200114141704.jpg', 10, '2021-07-08 11:13:38', '2021-07-08 11:15:13', 88);

-- --------------------------------------------------------

--
-- Table structure for table `student_post`
--

CREATE TABLE `student_post` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `classroom_id` int(11) DEFAULT NULL,
  `post` varchar(128) DEFAULT '',
  `content` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_post`
--

INSERT INTO `student_post` (`id`, `student_id`, `teacher_id`, `classroom_id`, `post`, `content`, `created_at`, `updated_at`) VALUES
(118, NULL, 6, 88, 'Hi my dear students', NULL, '2021-07-03 12:06:34', '2021-07-03 12:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `student_registeration`
--

CREATE TABLE `student_registeration` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `mid_term` varchar(128) DEFAULT NULL,
  `final` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_registeration`
--

INSERT INTO `student_registeration` (`id`, `student_id`, `classroom_id`, `mid_term`, `final`, `created_at`, `updated_at`) VALUES
(58, 49, 88, '30', '70', '2021-07-03 14:36:57', '2021-07-07 03:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `user_id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `fname` varchar(128) DEFAULT NULL,
  `lname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `specialization` varchar(128) DEFAULT NULL,
  `name_of_school` varchar(128) NOT NULL,
  `age` int(4) NOT NULL,
  `photo` varchar(120) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT current_timestamp(),
  `created_at` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_id`, `email`, `fname`, `lname`, `password`, `address`, `phone`, `specialization`, `name_of_school`, `age`, `photo`, `updated_at`, `created_at`) VALUES
(1, 'ahmed@gmail.com', 'Ahmed', '', '', 'Ayat-Giza', '01126785910', 'Math', '', 0, NULL, '2021-05-27 19:12:56', '2021-05-27 19:14:27'),
(2, 'mohamed@gmail.com', 'mohamed', 'hamada', '$2y$10$KEu.CCYUfUzC8cRCAglnVOO74CtdywqyMpnOvUlpX5VRtKPikPfQe', 'Bamha - El Ayat - Giza', '01126785910', 'math', 'school of salah', 24, NULL, '2021-05-27 17:15:55', '2021-05-27 17:15:55'),
(3, 'emad@gmail.com', 'boula', 'nessim', '$2y$10$KkpZA7TWnAWKuCzUdN.SdeCcpIWKVfvp4TmdomgPkthT9Y2svWs2u', 'Bamha - El Ayat - Giza', '01126785910', 'mnm', 'matanya', 28, NULL, '2021-05-27 17:26:46', '2021-05-27 17:26:46'),
(4, 'eman@gmail.com', 'eman', 'ali', '$2y$10$lFE6t7c4LljEBDBfDAMeT.imWVQ/pCo/yIUVpp1hfsvcx5CtaSZFq', 'Bamha - El Ayat - Giza', '01126785910', 'math', 'salah salm', 35, NULL, '2021-05-31 19:42:09', '2021-05-31 19:42:09'),
(5, 'justin@gmail.com', 'justin', 'oliver', '$2y$10$uDQMC4koH8sPGJWtKeyZAeuhlMk0RT1/Vsy3Aa9MgpS/TrksY0Gb.', 'Bamha - El Ayat - Giza', '01126785910', 'math', 'lll', 35, NULL, '2021-06-02 21:03:13', '2021-06-02 21:03:13'),
(6, 'fady@gmail.com', 'fady', 'sobhy', '$2y$10$BvbYwdHw8CNVy/cjbGCc6eSOGzobJE50lvq6jiP3haabgGzLi2OTm', 'kdewlkmfelw', '54', 'kjfkn', 'ejfkjf', 35, 'Screenshot (30).png', '2021-07-03 17:12:25', '2021-06-05 23:43:29'),
(7, 'ali@gmail.com', 'ali', 'mmmmm', '$2y$10$jPOwpYBsaq1PMbwcn2elE.Jxtqxd/H1NbegUJkTJHPwGjZyNzSl5e', 'ali@gmail.com', '2278', 'erfe', 'ali@gmail.com', 44, NULL, '2021-06-05 23:54:53', '2021-06-05 23:54:53'),
(8, 'zewady@gmail.com', 'Ahmed', 'zewady', '$2y$10$24ZzO/bQs475hfAp0FVruuMfEAskOH/pC6vHKJdB6uIxT91sjOR2i', 'Smart village', '01009102320', 'Chemestry', 'matanya', 55, 'Screenshot (4).png', '2021-07-02 15:02:01', '2021-07-02 15:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assignment`
--

CREATE TABLE `teacher_assignment` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `classroom_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `topic` varchar(128) DEFAULT NULL,
  `content` varchar(128) DEFAULT NULL,
  `points` varchar(128) DEFAULT NULL,
  `due` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_assignment`
--

INSERT INTO `teacher_assignment` (`id`, `teacher_id`, `classroom_id`, `title`, `description`, `topic`, `content`, `points`, `due`, `created_at`, `updated_at`) VALUES
(9, 6, 88, 'Assignment 1', 'Research about dynamic numbes', 'Dynamic numbers', 'Iot assignment Boula Nessim 17100677.pdf', '5', '2021-07-07 21:05:00', '2021-07-07 14:05:52', '2021-07-07 14:05:52'),
(11, 6, 88, 'Assignment 2', 'Create code that prints primary numbers', 'primary numbers', '22406536_351810251946094_8191749393955453945_n.jpg', '10', '2021-07-21 19:12:00', '2021-07-08 11:13:16', '2021-07-08 11:13:16');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroom_id`),
  ADD UNIQUE KEY `classroom_code` (`classroom_code`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `post_id` (`post_id`);

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
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`assignment_id`) USING BTREE,
  ADD KEY `assignment_id` (`assignment_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `student_post`
--
ALTER TABLE `student_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `classroom_id` (`classroom_id`),
  ADD KEY `student_post_ibfk_3` (`teacher_id`);

--
-- Indexes for table `student_registeration`
--
ALTER TABLE `student_registeration`
  ADD PRIMARY KEY (`id`,`student_id`,`classroom_id`) USING BTREE,
  ADD UNIQUE KEY `student_id` (`student_id`,`classroom_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `classroom_id` (`classroom_id`);

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
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `student_assignment`
--
ALTER TABLE `student_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student_post`
--
ALTER TABLE `student_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `student_registeration`
--
ALTER TABLE `student_registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `student_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD CONSTRAINT `student_assignment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_assignment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `teacher_assignment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_assignment_ibfk_3` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`classroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_post`
--
ALTER TABLE `student_post`
  ADD CONSTRAINT `student_post_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_post_ibfk_2` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`classroom_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_post_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_registeration`
--
ALTER TABLE `student_registeration`
  ADD CONSTRAINT `student_registeration_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_registeration_ibfk_2` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`classroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  ADD CONSTRAINT `teacher_assignment_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_assignment_ibfk_2` FOREIGN KEY (`classroom_id`) REFERENCES `classroom` (`classroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
