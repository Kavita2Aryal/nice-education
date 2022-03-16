-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 08:03 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nice_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `verified`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@niceeducation.com', NULL, '$2y$10$jiPQuIjijM49b70MpYOEPeG1xqyRR9XsBhDMvKDHf.5vPUBOzrdcy', '1647252160avatar.png', 1, 'admin', NULL, '2022-03-14 01:13:54', '2022-03-14 04:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `established_date` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_for_contact_us` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_for_contact_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_welcome_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_acceptance_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_acceptance_description1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_acceptance_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_acceptance_description2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `alternate_email`, `established_date`, `address`, `phone`, `mobile`, `logo`, `fav_icon`, `facebook_url`, `instagram_url`, `linkedin_url`, `whatsapp_number`, `map_url`, `our_mission`, `our_vision`, `title_for_contact_us`, `description_for_contact_us`, `footer_text`, `homepage_welcome_image`, `homepage_banner`, `banner_title`, `sub_text`, `btn_text`, `btn_url`, `visa_acceptance_image1`, `visa_acceptance_description1`, `visa_acceptance_image2`, `visa_acceptance_description2`, `created_at`, `updated_at`) VALUES
(1, 'Nice Education Consultancy', 'info@niceeducation.com.np', 'support@niceeducation.com.np', NULL, 'Dillibazar,Kathmandu', '+977-1-4417471', '9851126739', 'logo-20220314071135-TfB768.png', 'fav-20220302002012-qdv8rw-20220314071135-arBuDx.png', 'https://www.facebook.com/niceeducation', 'https://www.instagram.com/niceeducation', 'https://www.linkedin.com/niceeducation', '9851000715', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.519259460818!2d85.324113!3d27.705557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe97bccd9d1e01ea8!2sNice%20Education%20Consultancy%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1647241686307!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'We strive to make abroad study journey life changing and worthy decision for students throughout the process of career counseling, universities selection and admission, and hassle free visa support services.', 'Nice Education is a specialized educational advising agency dedicated to offering an affordable, high quality test preparation and accurate advising services for students seeking to study in the United States and other study destinations.', NULL, NULL, 'Nice Education Consultancy Pvt. Ltd. is an experienced professional in Abroad Study Field and has vast knowledge in the respected field. If you are here than you are in the most successful consultant.', 'welcome-20220314071735-PBxyf4.PNG', 'homepagebanner-20220314071508-PhpVPZ.PNG', 'Take a Right Step', 'with Nice Education Consultancy', 'Know More', 'http://niceeducation.com.np/?page_id=1543', 'left-20220316070250-Oe4GqQ.jpg', 'Lorem visa acceptance way 1 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 'stu3-20220316070250-V7Fiw5.jpg', 'Lorem visa acceptance way 2 .It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', '2022-03-14 01:13:54', '2022-03-16 01:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hospitality and Tourism', NULL, NULL),
(2, 'Education and Teaching', NULL, NULL),
(3, 'Business and Accountancy', NULL, NULL),
(4, 'Humanities and Social Work', NULL, NULL),
(5, 'Health Science', NULL, NULL),
(6, 'Music and Creative Arts', NULL, NULL),
(7, 'Nursing and Midwifery', NULL, NULL),
(8, 'Justice and Law', NULL, NULL),
(9, 'Digital Media and Information Technology', NULL, NULL),
(10, 'Marine and Environmental Science and some', NULL, NULL),
(11, 'Science and Engineering', NULL, NULL),
(12, 'pathway programs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_requireds`
--

CREATE TABLE `document_requireds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_requireds`
--

INSERT INTO `document_requireds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Passport Copy', NULL, NULL),
(2, 'Standardized Score Reports (GRE/GMAT/SAT)', NULL, NULL),
(3, 'Statement of Purpose (SOPs)', NULL, NULL),
(4, 'SLC and +2 Marksheets and Certificates', NULL, NULL),
(5, 'Recommendation Letters (LORs)', NULL, NULL),
(6, 'Essay (if any)', NULL, NULL),
(7, 'Bachelor Transcripts', NULL, NULL),
(8, 'Financial Documents', NULL, NULL),
(9, 'Resume or CV', NULL, NULL),
(10, 'Language Proficient Test Score (TOFEL/IELTS/PTE)', NULL, NULL),
(11, 'Affidant of support from sponsor', NULL, NULL),
(12, 'Extra certificates (if any)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`question_about`)),
  `preferred_country` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`preferred_country`)),
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Our career counselling experts listen to you.', NULL, NULL),
(2, NULL, 'Then we’ll work out the details.', NULL, NULL),
(3, NULL, 'We’ll also address any visa issues.', NULL, NULL),
(4, NULL, 'We’ll handle the application process.', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_04_075012_create_companies_table', 1),
(6, '2022_02_07_044949_create_admins_table', 1),
(7, '2022_02_08_070838_create_pages_table', 1),
(8, '2022_02_14_075437_create_services_table', 1),
(9, '2022_02_17_054000_create_test_preparations_table', 1),
(10, '2022_02_17_104630_create_test_exams_table', 1),
(11, '2022_02_23_011326_create_preparation_books_table', 1),
(12, '2022_02_23_103841_create_test_preparation_faqs_table', 1),
(13, '2022_02_28_045812_create_study_abroads_table', 1),
(14, '2022_02_28_050156_create_enquiries_table', 1),
(15, '2022_02_28_112129_create_why_us_table', 1),
(16, '2022_02_28_120552_create_teams_table', 1),
(17, '2022_02_28_160940_create_universities_table', 1),
(18, '2022_03_01_042904_create_visa_acceptances_table', 1),
(19, '2022_03_02_101117_create_how_it_works_table', 1),
(20, '2022_03_03_065932_create_document_requireds_table', 1),
(21, '2022_03_04_054129_create_courses_table', 1),
(22, '2022_03_11_090815_create_news_categories_table', 1),
(23, '2022_03_11_090909_create_news_table', 1),
(24, '2022_03_11_091256_create_events_table', 1),
(25, '2022_03_14_065702_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 99,
  `hide` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image`, `title`, `slug`, `section_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about-20220314100622-1AsbXE.jpg', 'About Us', 'about-us', 'Who we are ?', 'Nice Education Consultancy Pvt. Ltd. is an experienced professional in Abroad Study Field and has vast knowledge in the respected field. If you are here than you are in the most successful consultant. From the past history of our company you will know about us. Most of the student and their parents had get satisfaction from us helping students to reach their goals. Nice Education assist students or parents in making educational decisions and giving advice for test preparation, visa preparation documentations etc.', 1, '2022-03-14 01:13:54', '2022-03-14 04:41:59'),
(2, 'logo-20220302002012-nvo6nt-20220314100800-7DbCEK.png', 'Privacy Policy', 'privacy-policy-220314100735', NULL, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, '2022-03-14 04:22:35', '2022-03-14 04:23:00'),
(3, 'logo-20220302002012-nvo6nt-20220314100835-l6FeCH.png', 'Terms & Conditions', 'terms-and-conditions-220314100835', NULL, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, '2022-03-14 04:23:35', '2022-03-14 04:23:35'),
(4, 'logo-20220302002012-nvo6nt-20220314101829-vnZCnc.png', 'Contact Us', 'contact-us-220314101829', 'Schedule an Appointment', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16.2px; text-align: center;\">Please complete this form to talk to an Advisor at Edwise Foundation. You can ask any questions relating to the application process, universities, majors, costs, funding (scholarship, TA/RA), F-1 interview, etc. Please note that we can work with any universities for you as long as you fit in well in respect to your academic interests and financial capacity.</span><br></p>', 1, '2022-03-14 04:33:29', '2022-03-14 04:40:41');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preparation_books`
--

CREATE TABLE `preparation_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_preparation_id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preparation_books`
--

INSERT INTO `preparation_books` (`id`, `test_preparation_id`, `book_title`, `book_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'TOEFL iBT: The Official ETS Study Guide', '<p>This is a best-selling guide that provides users with a range of tips, practice exercises and skill-building methods. This book consists of hundreds of real TOEFL exam question papers, essay topics and practice exercises for all four sections - listening, reading, writing and speaking.<br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59'),
(2, 1, 'Delta\'s Key to the TOEFL iBT: Advanced Skill Practice', '<p>With this book, you will receive an audio CD that contains over 9 hours of audio. With the help of the audio exercises in the CD, you can master the listening section. In addition to this, it also contains 35 units in reading, listening, writing and speaking in the TOEFL iBT format, along with 1200 questions for practice.<br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `bg_colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rgba(158, 214, 255, 0.5)',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `slug`, `title`, `description`, `priority`, `bg_colour`, `status`, `created_at`, `updated_at`) VALUES
(1, 'career-20220314072901-hYBmGT.png', 'Career Counseling', 'career-counseling', 'Schedule an Appointment', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 1, 'rgba(252, 227, 0, 0.26)', 1, NULL, '2022-03-14 01:44:01'),
(2, 'document-20220314073122-HuSjbM.png', 'Documentation Guidance', 'documentation-guidance', 'Documentation Guidance', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 2, 'rgba(206, 90, 90, 0.5)', 1, NULL, '2022-03-14 01:46:22'),
(3, 'travel-20220314073345-5GTzFF.png', 'Travel Assistance', 'travel-arrangement', 'Travel Assistance', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 3, 'rgba(196, 255, 216, 0.5)', 1, NULL, '2022-03-14 01:48:45'),
(4, 'interview-20220314073452-gKIUmj.png', 'Interview Assistance', 'interview-assistance', 'Interview Assistance', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 4, 'rgba(158, 214, 255, 0.5)', 1, NULL, '2022-03-14 01:49:52'),
(5, 'finance-20220314073604-4o82LY.png', 'Finance Assistance', 'finance-assistance', 'Finance Assistance', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 5, 'rgba(162, 242, 124, 0.5)', 1, NULL, '2022-03-14 01:51:04'),
(6, 'visa-20220314073711-DEQyV9.png', 'Visa Guidance', 'visa-assistance', 'Visa Guidance', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 6, 'rgba(252, 227, 0, 0.26)', 1, NULL, '2022-03-14 01:52:11'),
(7, 'visa-20220314073733-psVI9v.png', 'Guidance in College & University Selection', 'college-and-university-selection', 'Guidance in College & University Selection', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 7, 'rgba(206, 90, 90, 0.5)', 1, NULL, '2022-03-14 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `study_abroads`
--

CREATE TABLE `study_abroads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_system_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_system_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_system_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular_course_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular_course_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_required_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_required_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intake_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intake_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_intake_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_intake_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_intake_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_intake_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_visa_section_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_visa_section_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `yellow_section_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_below_yellow_section` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_below_yellow_section` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_below_yellow_section` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_abroads`
--

INSERT INTO `study_abroads` (`id`, `country_name`, `slug`, `why_message`, `welcome_message`, `education_system_title`, `education_system_description`, `education_system_image`, `popular_course_title`, `popular_course_description`, `document_required_title`, `document_required_description`, `intake_title`, `intake_description`, `first_intake_image`, `second_intake_image`, `first_intake_session`, `second_intake_session`, `work_visa_section_title`, `work_visa_section_description`, `yellow_section_content`, `image_below_yellow_section`, `title_below_yellow_section`, `description_below_yellow_section`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 'australia-220314094436', '<p>Australia is an attractive destination for overseas students because of its varied climatic conditions, diverse cultures, friendly and welcoming people and safe environment. Australia’s Higher Education has grown progressively over the last decade and is growing more and more as the days go by. High percentages of students from the Gulf now seek education in Australia-mainly in Sydney, Melbourne and Perth. An Australian qualification will develop you personally and professionally. It is your passport to a well-paid career and a secure future.<br></p>', '<p>Registered Training Organizations (RTOs), Technical and Further Education (TAFE) institutes and some private colleges offers Vocational education and training (VET) courses to cater students so that they can develop skill and knowledge for a specific employment opportunity they want to get into.VET courses cover wide range of courses including hospitality and tourism, construction and engineering, secretarial skills, visual arts, information technology, accounting, nursing and community work.<br></p>', 'Higher Education', '<p>Currently, there are 41 Australian universities, of which 3 are private (Bond, Torrens and Notre Dame) along with Carnegie Mellon, a US based university and University College London, a UK based university both of those international universities have their campuses in Adelaide, South Australia.</p><p>Australian universities along with other higher education providers offer a broad range of programs and courses which include science, humanities, management, health, engineering and law just to name a few. With well designed multi disciplinary courses along with personnel care and graduate employability, Australian institutions position themselves amongst the world’s finest institution.</p>', 'education-20220314094436-3BVz6f.png', 'Popular Courses In AUSTRALIA', '<p>At the moment, Australian institutes offer more than 120 courses under English language for an international student. Some of the popular courses are listed below:<br></p>', 'Documents Required', '<p>Team Nice Education Consultancy understands that students often struggle at the documentation stage of their university application. That is because they do not have complete information regarding the documents required.</p><p>Nice Education offers students a detailed and step-by-step guidance regarding the documents that a student requires for a particular destination and how to get those documents ready for application process.</p>', 'Intakes', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16.2px; text-align: center; background-color: rgb(248, 248, 248);\">Team Nice Education Consultancy understands that students often struggle at the documentation stage of their university application. That is because they do not have complete information regarding the documents required.</span><br></p>', 'in1-20220314094436-IggZYv.png', 'in2-20220314094436-9oVryp.png', 'Feb and March Session', 'June, July and August Session', 'Post Study Work Visa', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16.2px; text-align: center; background-color: rgb(248, 248, 248);\">Team Nice Education Consultancy understands that students often struggle at the documentation stage of their university application. That is because they do not have complete information regarding the documents required.</span><br></p>', '<p>a Bachelor’s or Bachelor’s (honors) degree or</p><p>a Master’s or Master’s by Research degree or</p><p>a Doctoral (PhD) degree</p><p>and have at least two years of academic study completed in Australia in Bachelor’s level study or higher (i.e. Bachelor’s, Master’s or PhD level)</p>', 'office-20220314094436-Pj8IiO.png', 'Feb and March Session', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16.2px; text-align: center; background-color: rgb(248, 248, 248);\">Team Nice Education Consultancy understands that students often struggle at the documentation stage of their university application. That is because they do not have complete information regarding the documents required.</span><br></p>', '2022-03-14 03:59:36', '2022-03-14 03:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `designation`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ceo-20220314101116-5twiVq.png', 'Damodar Sharma', 'Chief Executive Officer (CEO)', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(116, 116, 116); font-family: &quot;PT Sans&quot;; font-size: 15px;\">Dear students and parents,</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(116, 116, 116); font-family: &quot;PT Sans&quot;; font-size: 15px;\">Welcome to Nice Education Consultancy Pvt. Ltd. I am delighted that you are considering Nice Education&nbsp; Nepal’s first and only Limited Company engaged exclusively in Overseas Education. To help you achieve your goals, I have visualized that you need a proper gateway for the road to your overseas education, career, professional life and personal development. In the present environment, quality is paramount and at Nice our standards, facilities and the infrastructure have been designed to meet your needs that are of International Standards.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(116, 116, 116); font-family: &quot;PT Sans&quot;; font-size: 15px;\">I, on behalf of Nice Education&nbsp; take pride in offering you the best of services and career guidance as you look ahead in life for professional studies at an overseas destination. I and my team will assist you in every possible aspect and ensure that from the time you visit our office till you land in a country choice for your Higher Education, you are provided with all the assistance that you require, enabling smooth and hassle-free process for you.</p>', '2022-03-14 04:26:16', '2022-03-14 04:26:16'),
(2, 'md-20220314101258-lrFMbc.png', 'Mr. Bhimsen Baruwal', 'Managing Director', '<p>Dear Students and Parents</p><p><br></p><p>Nice Education Consultancy helps Nepalese students get access to the best study abroad opportunities. A trusted name in the International Education Counseling and a member of The National Education Consultancy Association of Nepal (NECA), Nice represents several TOP RANKING Universities in Australia, New Zealand, UK, USA and Canada.</p><p><br></p><p>We offer top quality test preparation classes and study abroad counseling services. We specialize in placing students in: USA, Australia, New Zealand, UK &amp; Canada. With our expertise in education and immigration, we’re constantly assisting our students with admissions as well as scholarships at foreign institutions. Since our establishment in 2015, with our regular visits to partner institutions overseas, we’ve created a wide, growing network and have a well-respected name within the industry.</p><p><br></p><p>We not only help students with initial processing up until visa decisions, we also assist with your travel arrangements and overseas accommodation. We really do help you and support you in every step of the way. Having classes from professional instructors, students test results have always supported successful documentation for their scholarships and favorable visa decisions.</p>', '2022-03-14 04:27:58', '2022-03-14 04:27:58'),
(3, 'mana-20220314101408-tITRRb.png', 'Kumar Dhalel', 'Manager', '<p>Welcome to Nice Education Consultancy Pvt. Ltd. one of the Nepal’s outstanding professional educational consultation providers.Nice Education specializes consultation for various academic and professional courses in the mentioned countries as per our website. We provide a wide range of education services to the students who aspire to study in their intended country. Our original passion was to establish Nice Education&nbsp; service as a response to students who wish to go abroad for further studies. Over the past few years, we have provided relevant advice to international students to get admission in Universities and Colleges of the referred countries.<br></p>', '2022-03-14 04:29:08', '2022-03-14 04:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `test_exams`
--

CREATE TABLE `test_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_preparation_id` bigint(20) UNSIGNED NOT NULL,
  `exam_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_exams`
--

INSERT INTO `test_exams` (`id`, `test_preparation_id`, `exam_title`, `exam_detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'ETS TOEFL – iBT Test', '<p>The TOEFL-iBT test is the most preferred type, with over 90% of students attempting the test in this internet based format. The TOEFL-iBT test comprises 4 sections, which are: speaking, listening, writing and reading. Students are asked to take up all the sections on a computer equipped with a microphone and camera. Since the iBT test pattern doesn’t have a separate section to examine candidates’ grammar knowledge, the writing section is monitored in detail.<br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59'),
(2, 1, 'ETS TOEFL – PBT (* PBT is not available in Nepal)', '<p>The TOEFL PBT is a paper-based English language test. Students who are not in proximity to internet-based test centres can take up this test. The TOEFL PBT test format is quite different from that of iBT as it also contains a separate essay section. The listening section in the PBT has recordings that are shorter than the IBT’s.<br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `test_preparations`
--

CREATE TABLE `test_preparations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_test_banner.png',
  `overview_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparation_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparation_right_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_left_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_practice_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_practice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaking_practice_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaking_practice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listening_practice_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listening_practice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_practice_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_practice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `format_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading_pattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listening_pattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_pattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaking_pattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_preparations`
--

INSERT INTO `test_preparations` (`id`, `title`, `slug`, `document`, `banner_image`, `overview_title`, `overview_description`, `overview_image`, `preparation_title`, `preparation_description`, `preparation_right_image`, `preparation_left_image`, `reading_practice_title`, `reading_practice`, `speaking_practice_title`, `speaking_practice`, `listening_practice_title`, `listening_practice`, `writing_practice_title`, `writing_practice`, `format_title`, `format_description`, `reading_pattern`, `listening_pattern`, `writing_pattern`, `speaking_pattern`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TOEFL', 'toefl-220314110759', 'dummy-20220314110759-KkGXiw.pdf', 'banner-20220314110759-eVUM5l.png', 'What is TOEFL exam?', '<p>The TOEFL exam is a popular English proficiency test to examine international students’ ability to communicate effectively overseas. The TOEFL exam is widely accepted across 120+ countries, including Australia, New Zealand, Canada, the US and the UK. Students can take up the TOEFL exam in two ways, i.e) TOEFL iBT (internet based exam) and TOEFL PBT (paper based exam).<br></p>', 'left-20220314110759-Vspraj.jpg', 'How to prepare?', '<p>For your TOEFL exam preparation, you can either join a TOEFL coaching class close to you or start preparing on your own as long as you have the necessary resources. However, by joining a coaching centre, you can benefit from the guidance and services of expert TOEFL trainers. With consistent hard work, the average preparation time needed is less than 3 weeks. If you would like to score a high band score, the TOEFL exam preparation time must be at least 2-3 months ahead of the examination.</p><p><br></p>', 'study-20220314110759-cd3Hmo.jpg', 'stu3-20220314110759-5QmUUU.jpg', 'TOEFL Reading Practice Test', 'One of the best ways to prepare for this section is to read regularly. Test takers can read through newspapers, university textbooks, magazines and a wide range of literature to improve their vocabulary. They must also attempt to summarise or draw conclusions from what they read. This will aid them in improving their comprehension skills.', 'TOEFL Speaking Practice Test', 'Test takers can use the vocabulary they gain from the reading exercises. In addition to this, they must focus on improving their grammatical skills, pronunciation, and intonation patterns. Test takers can also prepare on their own on some of the most popular topics under this section.', 'TOEFL Listening Practice Test', 'In this section, the test taker must start practising by listening to a range of audio files, including news reports, songs, movies, documentaries. Creating inferences from the audio will aid in better understanding.', 'TOEFL Writing Practice Test', 'Test takers can make a list of some of the most repeated topics in the writing section. The students can then start the preparation by writing about them. The test takers must introduce a statement for each topic and come up with a suitable evidence-based conclusion.', 'Documents Required', '<p>Team Nice Education Consultancy understands that students often struggle at the documentation stage of their university application. That is because they do not have complete information regarding the documents required.</p><p>Nice Education offers students a detailed and step-by-step guidance regarding the documents that a student requires for a particular destination and how to get those documents ready for application process.</p>', '<div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Question:</h1><p>3 to 5 passages with<br>12 to 14 questions</p></div><div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Time:</h1><p>60 to 100 minutes</p></div>', '<div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Question:</h1><p>3 to 5 passages with<br>12 to 14 questions</p></div><div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Time:</h1><p>60 to 100 minutes</p></div>', '<div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Question:</h1><p>3 to 5 passages with<br>12 to 14 questions</p></div><div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Time:</h1><p>60 to 100 minutes</p></div>', '<div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Question:</h1><p>3 to 5 passages with<br>12 to 14 questions</p></div><div class=\"para\" style=\"margin: 1em 0px; font-family: Poppins, sans-serif; text-align: center;\"><h1 class=\"small--title\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; font-size: 1.2em;\">Time:</h1><p>60 to 100 minutes</p></div>', 1, '2022-03-14 05:22:59', '2022-03-14 05:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `test_preparation_faqs`
--

CREATE TABLE `test_preparation_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('test','study') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'test => test preparation table , study => study country table',
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_preparation_faqs`
--

INSERT INTO `test_preparation_faqs` (`id`, `type`, `type_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'study', 1, 'What are the course fees in Canadian Universities?', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 248, 248);\">You must have a work permit or condition attached to your visa in order to be able to do so.</span><br></p>', '2022-03-14 03:59:36', '2022-03-14 03:59:36'),
(2, 'study', 1, 'Can my dependents work in Australia?', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(248, 248, 248);\">You must have a work permit or condition attached to your visa in order to be able to do so.</span><br></p>', '2022-03-14 03:59:36', '2022-03-14 03:59:36'),
(3, 'test', 1, 'Oquestion 1', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59'),
(4, 'test', 1, 'Question 2', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><br></p>', '2022-03-14 05:22:59', '2022-03-14 05:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `country_id`, `name`, `logo`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Troy University', 'troy-university-logo-20220314074144-r32T9u.png', 1, 1, '2022-03-14 01:56:44', '2022-03-14 01:56:44'),
(2, NULL, 'Sydney City', 'page-1-20220314091755-ogs5co.png', 2, 1, '2022-03-14 03:32:55', '2022-03-14 03:32:55'),
(3, NULL, 'IIBIT', 'iibit-logo4-20220314091832-d7Tfmy.png', 3, 1, '2022-03-14 03:33:32', '2022-03-14 03:33:32'),
(4, NULL, 'WENTWORTH', 'wentworth-20220314091851-VauRON.png', 4, 1, '2022-03-14 03:33:51', '2022-03-14 03:33:51');

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

-- --------------------------------------------------------

--
-- Table structure for table `visa_acceptances`
--

CREATE TABLE `visa_acceptances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_acceptances`
--

INSERT INTO `visa_acceptances` (`id`, `background_image`, `image`, `name`, `country`, `exam_score`, `created_at`, `updated_at`) VALUES
(1, 'aus-20220314095227-D2XgEZ.jpg', 'stu2-20220314095227-dN1H7w.jpg', 'Sarthak Acharya', 'Australia', 'IELTS 8.5', '2022-03-14 04:07:27', '2022-03-14 04:07:27'),
(2, 'america-20220314095319-44IAg7.jpg', 'stu1-20220314095319-hTfxGa.jpg', 'Neelam  Karki', 'Australia', 'SAT 8', '2022-03-14 04:08:19', '2022-03-14 04:08:19'),
(3, 'can-20220314095600-dDG5Nq.jpg', 'stu3-20220314095600-Y2yXLC.jpg', 'Suresh Sharma', 'Australia', 'TOEFL', '2022-03-14 04:11:00', '2022-03-14 04:11:00'),
(4, 'uk-20220314095729-eEPfXg.jpg', 'sneha-20220314095729-OVGsHO.jpg', 'Sheha Koirala', 'Australia', 'IELTS 8.5', '2022-03-14 04:12:29', '2022-03-14 04:12:29'),
(5, 'aus-20220314095839-2Sgocn.jpg', 'vikram-20220314095839-VfJoWm.jpg', 'Pradip Karki', 'Australia', 'SAT 8', '2022-03-14 04:13:39', '2022-03-14 04:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '<svg\n                                    width=\"59\"\n                                    height=\"45\"\n                                    viewBox=\"0 0 59 45\"\n                                    fill=\"none\"\n                                    xmlns=\"http://www.w3.org/2000/svg\"\n                                >\n                                    <path\n                                        d=\"M22.7284 23H36.1375C36.875 23 37.4784 22.55 37.4784 22V16C37.4784 15.45 36.875 15 36.1375 15H22.7284C21.9909 15 21.3875 15.45 21.3875 16V22C21.3875 22.55 21.9909 23 22.7284 23ZM24.0693 17H34.7966V21H24.0693V17ZM9.98977 36V39C9.98977 39.55 9.38636 40 8.64886 40C7.91136 40 7.30795 39.55 7.30795 39V36C7.30795 35.45 7.91136 35 8.64886 35C9.38636 35 9.98977 35.45 9.98977 36ZM9.98977 28V31C9.98977 31.55 9.38636 32 8.64886 32C7.91136 32 7.30795 31.55 7.30795 31V28C7.30795 27.45 7.91136 27 8.64886 27C9.38636 27 9.98977 27.45 9.98977 28ZM58.933 22.95C58.933 22.9 58.933 22.9 58.933 22.85C58.933 22.8 58.933 22.8 58.933 22.75C58.933 22.7 58.933 22.7 58.8659 22.65C58.8659 22.6 58.7989 22.6 58.7989 22.55V22.5L53.4352 15.5C53.4352 15.5 53.4352 15.5 53.4352 15.45C53.4352 15.4 53.3682 15.4 53.3682 15.35L53.3011 15.3L53.2341 15.25L53.167 15.2C53.1 15.2 53.1 15.15 53.033 15.15C52.9659 15.15 52.9659 15.1 52.8989 15.1C52.8318 15.1 52.8318 15.05 52.7648 15.05C52.6977 15.05 52.6977 15.05 52.6307 15C52.5636 15 52.5636 15 52.4966 15C52.4296 15 52.4295 15 52.3625 15C52.3625 15 52.3625 15 52.2955 15H44.183V12H47.5352C48.2727 12 48.8761 11.55 48.8761 11C48.8761 10.45 48.2727 10 47.5352 10H42.842H30.7739V7H42.842C43.5795 7 44.183 6.55 44.183 6V1C44.183 0.45 43.5795 0 42.842 0H29.433C28.6955 0 28.092 0.45 28.092 1V6V10H16.0239H11.3307C10.5932 10 9.98977 10.45 9.98977 11C9.98977 11.55 10.5932 12 11.3307 12H14.683V15H6.6375C6.6375 15 6.6375 15 6.57045 15C6.50341 15 6.50341 15 6.43636 15C6.36932 15 6.36932 15 6.30227 15C6.23523 15 6.23523 15 6.16818 15.05C6.10114 15.05 6.10114 15.05 6.03409 15.1C5.96705 15.1 5.96705 15.15 5.9 15.15C5.83295 15.15 5.83295 15.2 5.76591 15.2C5.69886 15.2 5.69886 15.25 5.69886 15.25C5.63182 15.25 5.63182 15.3 5.63182 15.3L5.56477 15.35C5.56477 15.4 5.49773 15.4 5.49773 15.45C5.49773 15.45 5.49773 15.45 5.49773 15.5L0.134091 22.5V22.55C0.134091 22.6 0.0670454 22.6 0.0670454 22.65C0.0670454 22.7 0.0670455 22.7 0 22.75C0 22.8 0 22.8 0 22.85C0 22.9 0 22.9 0 22.95V23V44C0 44.55 0.603409 45 1.34091 45H16.0909H22.7955H36.2045H42.9091H57.6591C58.3966 45 59 44.55 59 44V23C58.933 23 58.933 22.95 58.933 22.95ZM41.5011 5H30.7739V2H41.5011V5ZM51.4239 17L55.2455 22H44.183V17H51.4239ZM14.683 22H3.55341L7.375 17H14.683V22ZM2.61477 24H14.683V43H2.61477V24ZM17.3648 23V12H41.5011V23V43H37.4784V32C37.4784 28.7 33.858 26 29.433 26C25.008 26 21.3875 28.7 21.3875 32V43H17.3648V23ZM34.5955 31H24.2705C24.8739 29.3 26.9523 28 29.433 28C31.9136 28 33.992 29.3 34.5955 31ZM24.0693 43V33H34.7966V43H24.0693ZM56.2511 43H44.183V24H56.2511V43ZM48.8761 39V36C48.8761 35.45 49.4795 35 50.217 35C50.9545 35 51.558 35.45 51.558 36V39C51.558 39.55 50.9545 40 50.217 40C49.4795 40 48.8761 39.55 48.8761 39ZM48.8761 31V28C48.8761 27.45 49.4795 27 50.217 27C50.9545 27 51.558 27.45 51.558 28V31C51.558 31.55 50.9545 32 50.217 32C49.4795 32 48.8761 31.55 48.8761 31Z\"\n                                        fill=\"black\"\n                                    />\n                                </svg>', 'Expert Personnel', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ', NULL, NULL),
(2, '<svg\n                                    width=\"59\"\n                                    height=\"45\"\n                                    viewBox=\"0 0 59 45\"\n                                    fill=\"none\"\n                                    xmlns=\"http://www.w3.org/2000/svg\"\n                                >\n                                    <path\n                                        d=\"M22.7284 23H36.1375C36.875 23 37.4784 22.55 37.4784 22V16C37.4784 15.45 36.875 15 36.1375 15H22.7284C21.9909 15 21.3875 15.45 21.3875 16V22C21.3875 22.55 21.9909 23 22.7284 23ZM24.0693 17H34.7966V21H24.0693V17ZM9.98977 36V39C9.98977 39.55 9.38636 40 8.64886 40C7.91136 40 7.30795 39.55 7.30795 39V36C7.30795 35.45 7.91136 35 8.64886 35C9.38636 35 9.98977 35.45 9.98977 36ZM9.98977 28V31C9.98977 31.55 9.38636 32 8.64886 32C7.91136 32 7.30795 31.55 7.30795 31V28C7.30795 27.45 7.91136 27 8.64886 27C9.38636 27 9.98977 27.45 9.98977 28ZM58.933 22.95C58.933 22.9 58.933 22.9 58.933 22.85C58.933 22.8 58.933 22.8 58.933 22.75C58.933 22.7 58.933 22.7 58.8659 22.65C58.8659 22.6 58.7989 22.6 58.7989 22.55V22.5L53.4352 15.5C53.4352 15.5 53.4352 15.5 53.4352 15.45C53.4352 15.4 53.3682 15.4 53.3682 15.35L53.3011 15.3L53.2341 15.25L53.167 15.2C53.1 15.2 53.1 15.15 53.033 15.15C52.9659 15.15 52.9659 15.1 52.8989 15.1C52.8318 15.1 52.8318 15.05 52.7648 15.05C52.6977 15.05 52.6977 15.05 52.6307 15C52.5636 15 52.5636 15 52.4966 15C52.4296 15 52.4295 15 52.3625 15C52.3625 15 52.3625 15 52.2955 15H44.183V12H47.5352C48.2727 12 48.8761 11.55 48.8761 11C48.8761 10.45 48.2727 10 47.5352 10H42.842H30.7739V7H42.842C43.5795 7 44.183 6.55 44.183 6V1C44.183 0.45 43.5795 0 42.842 0H29.433C28.6955 0 28.092 0.45 28.092 1V6V10H16.0239H11.3307C10.5932 10 9.98977 10.45 9.98977 11C9.98977 11.55 10.5932 12 11.3307 12H14.683V15H6.6375C6.6375 15 6.6375 15 6.57045 15C6.50341 15 6.50341 15 6.43636 15C6.36932 15 6.36932 15 6.30227 15C6.23523 15 6.23523 15 6.16818 15.05C6.10114 15.05 6.10114 15.05 6.03409 15.1C5.96705 15.1 5.96705 15.15 5.9 15.15C5.83295 15.15 5.83295 15.2 5.76591 15.2C5.69886 15.2 5.69886 15.25 5.69886 15.25C5.63182 15.25 5.63182 15.3 5.63182 15.3L5.56477 15.35C5.56477 15.4 5.49773 15.4 5.49773 15.45C5.49773 15.45 5.49773 15.45 5.49773 15.5L0.134091 22.5V22.55C0.134091 22.6 0.0670454 22.6 0.0670454 22.65C0.0670454 22.7 0.0670455 22.7 0 22.75C0 22.8 0 22.8 0 22.85C0 22.9 0 22.9 0 22.95V23V44C0 44.55 0.603409 45 1.34091 45H16.0909H22.7955H36.2045H42.9091H57.6591C58.3966 45 59 44.55 59 44V23C58.933 23 58.933 22.95 58.933 22.95ZM41.5011 5H30.7739V2H41.5011V5ZM51.4239 17L55.2455 22H44.183V17H51.4239ZM14.683 22H3.55341L7.375 17H14.683V22ZM2.61477 24H14.683V43H2.61477V24ZM17.3648 23V12H41.5011V23V43H37.4784V32C37.4784 28.7 33.858 26 29.433 26C25.008 26 21.3875 28.7 21.3875 32V43H17.3648V23ZM34.5955 31H24.2705C24.8739 29.3 26.9523 28 29.433 28C31.9136 28 33.992 29.3 34.5955 31ZM24.0693 43V33H34.7966V43H24.0693ZM56.2511 43H44.183V24H56.2511V43ZM48.8761 39V36C48.8761 35.45 49.4795 35 50.217 35C50.9545 35 51.558 35.45 51.558 36V39C51.558 39.55 50.9545 40 50.217 40C49.4795 40 48.8761 39.55 48.8761 39ZM48.8761 31V28C48.8761 27.45 49.4795 27 50.217 27C50.9545 27 51.558 27.45 51.558 28V31C51.558 31.55 50.9545 32 50.217 32C49.4795 32 48.8761 31.55 48.8761 31Z\"\n                                        fill=\"black\"\n                                    />\n                                </svg>', 'Top Colleges & Universities', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ', NULL, NULL),
(3, '<svg\n                                    width=\"66\"\n                                    height=\"58\"\n                                    viewBox=\"0 0 66 58\"\n                                    fill=\"none\"\n                                    xmlns=\"http://www.w3.org/2000/svg\"\n                                >\n                                    <path\n                                        d=\"M22.13 42.098C20.3491 41.6545 18.3679 41.1327 16.0896 40.5316C15.0042 40.2456 13.8552 39.9424 12.6338 39.6232C12.4125 39.5656 12.2164 39.4364 12.0763 39.2556C11.9362 39.0749 11.8599 38.8528 11.8594 38.6241V35.7342C14.6576 36.4217 17.0897 37.0652 19.2524 37.6376C19.7275 37.7634 20.1852 37.8844 20.6354 38.003C20.6624 37.3069 20.85 36.6264 21.1836 36.0147C20.7274 35.8945 20.2632 35.7718 19.7804 35.644C17.4831 35.0355 14.8845 34.3482 11.8594 33.6108V21.8533L9.79688 21.1387V38.6241C9.79745 39.3089 10.025 39.9743 10.4439 40.516C10.8628 41.0578 11.4495 41.4454 12.1122 41.6183C13.3317 41.9376 14.4793 42.2402 15.5634 42.5262C18.1873 43.2185 20.4325 43.8103 22.4293 44.2969C22.1906 43.5897 22.089 42.8433 22.13 42.098ZM54.1408 33.6402C53.368 33.8429 52.5209 34.0697 51.6135 34.3131C49.6137 34.8487 47.2547 35.4795 44.8505 36.0743C45.1764 36.6912 45.3542 37.3755 45.3695 38.0731C47.7304 37.4875 50.0686 36.8622 52.1473 36.3052C52.8498 36.117 53.5161 35.9386 54.1408 35.773V38.6619C54.1405 38.886 54.0674 39.104 53.9324 39.2829C53.7975 39.4619 53.608 39.5921 53.3925 39.6539C51.2514 40.2567 47.6214 41.243 43.8704 42.1057C43.9101 42.8469 43.8089 43.5889 43.5722 44.2924C47.3708 43.4406 51.2046 42.4124 53.9515 41.639C54.5991 41.4544 55.169 41.0641 55.5752 40.527C55.9815 39.9899 56.2019 39.3353 56.2033 38.6619V21.1399L54.1408 21.8545V33.6402ZM35.5012 47.9527C35.7326 47.954 35.9629 47.919 36.1835 47.849C36.9204 47.5413 37.5285 46.9884 37.9046 46.2839C38.0556 46.0276 38.2415 45.7935 38.457 45.5885C38.7276 45.4442 39.0171 45.3386 39.317 45.2747C40.0992 45.1413 40.8124 44.745 41.3387 44.1513C41.7485 43.4788 41.9117 42.6849 41.8005 41.9054C41.7699 41.6028 41.7828 41.2974 41.8387 40.9984C41.9684 40.7402 42.1324 40.5007 42.3262 40.2864C42.8942 39.7135 43.2433 38.9596 43.3126 38.1558C43.2433 37.352 42.8942 36.5981 42.3262 36.0252C42.1324 35.8109 41.9684 35.5713 41.8387 35.3131C41.7828 35.0142 41.7699 34.7088 41.8005 34.4062C41.9119 33.6269 41.7488 32.8331 41.3392 32.1608C40.8128 31.5671 40.0996 31.1708 39.3175 31.0373C39.0175 30.9733 38.728 30.8676 38.4574 30.7231C38.2413 30.5182 38.055 30.2839 37.904 30.0272C37.528 29.323 36.9201 28.7703 36.1834 28.4626C35.422 28.2918 34.6252 28.3836 33.9225 28.7229C33.6286 28.8501 33.3179 28.9345 33.0001 28.9737C32.6822 28.9345 32.3716 28.85 32.0776 28.7229C31.375 28.3832 30.5781 28.2915 29.8167 28.4626C29.08 28.7703 28.4722 29.323 28.0961 30.0272C27.945 30.2838 27.7588 30.518 27.5429 30.7231C27.2723 30.8672 26.9829 30.9728 26.6831 31.0368C25.9009 31.1703 25.1876 31.5666 24.6611 32.1603C24.2515 32.8329 24.0883 33.627 24.1997 34.4067C24.23 34.7093 24.217 35.0147 24.1611 35.3136C24.0316 35.5718 23.8676 35.8111 23.6737 36.0252C23.106 36.5983 22.7571 37.3522 22.6875 38.1558C22.7571 38.9594 23.1061 39.7133 23.6737 40.2864C23.8676 40.5004 24.0316 40.7398 24.1611 40.9979C24.217 41.2969 24.23 41.6023 24.1997 41.9049C24.0884 42.6842 24.2514 43.4779 24.6609 44.1503C25.1871 44.7443 25.9004 45.1408 26.6826 45.2742C26.9826 45.3381 27.2722 45.4439 27.5427 45.5885C27.7588 45.7934 27.945 46.0276 28.0958 46.2844C28.472 46.9887 29.0799 47.5414 29.8167 47.849C30.578 48.0205 31.375 47.9288 32.0773 47.5886C32.3714 47.4615 32.6821 47.3771 33.0001 47.3379C33.318 47.3771 33.6286 47.4615 33.9226 47.5886C34.4236 47.8009 34.9578 47.9241 35.5012 47.9527ZM31.3749 45.6494C31.0812 45.7811 30.7668 45.8609 30.4459 45.8851C30.2777 45.8312 30.0053 45.4268 29.8061 45.1312C29.5281 44.665 29.169 44.2523 28.7456 43.9126C28.2831 43.6167 27.7718 43.405 27.2355 43.2871C26.9103 43.2265 26.5998 43.1039 26.3208 42.9261C26.2429 42.6182 26.2225 42.2986 26.2609 41.9834C26.3122 41.436 26.2646 40.8839 26.1204 40.3533C25.9248 39.8536 25.6407 39.3932 25.2818 38.9942C25.0572 38.7153 24.75 38.3325 24.75 38.1558C24.75 37.979 25.0572 37.5963 25.2818 37.3173C25.6407 36.9183 25.9248 36.4579 26.1205 35.9582C26.2646 35.4277 26.3122 34.8755 26.2609 34.3281C26.2226 34.0128 26.2428 33.693 26.3206 33.385C26.5998 33.2073 26.9105 33.0849 27.2358 33.0244C27.7722 32.9065 28.2834 32.6946 28.7459 32.3985C29.1691 32.0589 29.5282 31.6463 29.8061 31.1804C30.0053 30.8848 30.2779 30.4804 30.4459 30.4265C30.4666 30.4211 30.4879 30.4185 30.5093 30.419C30.8067 30.4645 31.0975 30.5462 31.3752 30.6622C31.8908 30.881 32.4407 31.0076 33.0001 31.0363C33.5594 31.0076 34.1094 30.881 34.625 30.6622C34.9183 30.5293 35.2329 30.4495 35.5541 30.4265C35.7222 30.4804 35.9952 30.8848 36.1941 31.1804C36.4721 31.6464 36.8312 32.0589 37.2545 32.3985C37.717 32.6947 38.2282 32.9066 38.7646 33.0244C39.0898 33.085 39.4004 33.2074 39.6796 33.385C39.7574 33.6928 39.7777 34.0124 39.7395 34.3277C39.6879 34.8754 39.7354 35.4279 39.88 35.9587C40.0754 36.4582 40.3595 36.9183 40.7184 37.3168C40.943 37.5963 41.2501 37.979 41.2501 38.1558C41.2501 38.3325 40.943 38.7152 40.7184 38.9947C40.3595 39.3933 40.0754 39.8533 39.88 40.3528C39.7355 40.8835 39.6878 41.4358 39.739 41.9834C39.7775 42.2988 39.7572 42.6186 39.6791 42.9266C39.4 43.1043 39.0894 43.2268 38.7641 43.2876C38.2278 43.4052 37.7165 43.617 37.254 43.9131C36.8311 44.2526 36.4723 44.6649 36.1946 45.1307C35.9952 45.4263 35.7228 45.8312 35.5541 45.8851C35.233 45.8615 34.9185 45.7817 34.625 45.6494C34.1094 45.4306 33.5594 45.304 33.0001 45.2752C32.4406 45.304 31.8906 45.4306 31.3749 45.6494H31.3749Z\"\n                                        fill=\"black\"\n                                    />\n                                    <path\n                                        d=\"M37.125 38.156C37.125 37.3402 36.883 36.5427 36.4297 35.8644C35.9764 35.186 35.3322 34.6574 34.5784 34.3452C33.8247 34.033 32.9953 33.9514 32.1951 34.1105C31.395 34.2697 30.66 34.6626 30.0831 35.2395C29.5062 35.8164 29.1134 36.5514 28.9542 37.3516C28.7951 38.1518 28.8768 38.9812 29.189 39.7349C29.5012 40.4886 30.03 41.1329 30.7083 41.5861C31.3867 42.0394 32.1842 42.2813 33 42.2813C34.0937 42.28 35.1422 41.845 35.9155 41.0716C36.6888 40.2982 37.1238 39.2497 37.125 38.156ZM33 40.2187C32.5921 40.2187 32.1933 40.0977 31.8541 39.8711C31.5148 39.6445 31.2505 39.3223 31.0943 38.9455C30.9382 38.5686 30.8973 38.1538 30.9769 37.7537C31.0565 37.3536 31.2529 36.9861 31.5414 36.6976C31.8298 36.4091 32.1974 36.2127 32.5975 36.1331C32.9976 36.0535 33.4123 36.0943 33.7892 36.2504C34.1661 36.4065 34.4883 36.6709 34.7149 37.0101C34.9416 37.3493 35.0625 37.7481 35.0625 38.156C35.062 38.7029 34.8445 39.2272 34.4578 39.6139C34.0711 40.0006 33.5469 40.2181 33 40.2187V40.2187Z\"\n                                        fill=\"black\"\n                                    />\n                                    <path\n                                        d=\"M64.6827 16.019C65.0648 15.8738 65.3946 15.6172 65.6295 15.2826C65.8643 14.9479 65.9933 14.5505 65.9999 14.1417C66.0064 13.7329 65.8902 13.3316 65.6663 12.9895C65.4423 12.6475 65.1209 12.3805 64.7436 12.2231L34.1726 0.227615C33.4248 -0.0741201 32.5895 -0.0759247 31.8404 0.222578L1.216 12.2397C0.84325 12.4048 0.528397 12.6776 0.311918 13.0231C0.095439 13.3685 -0.0127704 13.7708 0.0012008 14.1783C0.015172 14.5857 0.150685 14.9797 0.390319 15.3095C0.629953 15.6393 0.962755 15.8899 1.34594 16.0291L31.9673 26.6378C32.6361 26.8694 33.3633 26.8694 34.0321 26.6378L59.8129 17.7061V41.0529C57.6099 42.4858 56.8747 48.3213 56.7367 49.6201C56.6896 50.0633 56.7361 50.5115 56.873 50.9357C57.01 51.3599 57.2344 51.7506 57.5318 52.0825C57.821 52.4047 58.1746 52.6626 58.5697 52.8396C58.9647 53.0165 59.3926 53.1086 59.8255 53.1098H61.8628C62.2957 53.1086 62.7235 53.0165 63.1186 52.8396C63.5137 52.6626 63.8673 52.4047 64.1564 52.0825C64.4539 51.7506 64.6783 51.3599 64.8153 50.9357C64.9522 50.5115 64.9986 50.0633 64.9515 49.6201C64.8135 48.3213 64.0784 42.4858 61.8754 41.0529V16.9916L64.6827 16.019ZM62.9001 49.8376C62.9182 49.9932 62.9028 50.1509 62.855 50.3001C62.8073 50.4493 62.7282 50.5866 62.6232 50.7028C62.5282 50.8109 62.4112 50.8975 62.2801 50.9569C62.149 51.0163 62.0068 51.0471 61.8628 51.0472H59.8255C59.6816 51.0471 59.5393 51.0163 59.4082 50.9569C59.2771 50.8975 59.1602 50.8109 59.0652 50.7028C58.9601 50.5866 58.8811 50.4493 58.8333 50.3001C58.7856 50.1509 58.7702 49.9932 58.7882 49.8376C59.181 46.1294 60.2304 43.3255 60.8442 42.8355C61.458 43.3255 62.5073 46.1294 62.9001 49.8376H62.9001ZM33.3561 24.6894C33.125 24.7681 32.8743 24.7679 32.6433 24.6889L2.08159 14.115L32.6063 2.13715C32.7334 2.0851 32.8696 2.05875 33.007 2.05961C33.1444 2.06048 33.2802 2.08854 33.4067 2.14218L63.9002 14.1075L33.3561 24.6894Z\"\n                                        fill=\"black\"\n                                    />\n                                    <path\n                                        d=\"M33.0001 10.8262C30.1816 10.8262 27.3282 11.8887 27.3282 13.9201C27.3282 15.9515 30.1816 17.014 33.0001 17.014C35.8185 17.014 38.672 15.9515 38.672 13.9201C38.672 11.8887 35.8185 10.8262 33.0001 10.8262ZM33.0001 14.9514C30.735 14.9514 29.4821 14.1885 29.3882 13.9412C29.4821 13.6517 30.735 12.8888 33.0001 12.8888C35.2117 12.8888 36.4584 13.6159 36.6035 13.9201C36.4585 14.2242 35.2117 14.9514 33.0001 14.9514V14.9514ZM42.0223 46.323C41.4391 46.7202 40.7923 47.0146 40.1099 47.1936L43.6551 52.16L41.7159 51.9647C41.515 51.9377 41.3107 51.9523 41.1157 52.0074C40.9206 52.0626 40.739 52.1572 40.582 52.2854C40.2953 52.5191 40.1098 52.8545 40.0643 53.2216L39.7365 54.841L36.2059 49.9573C35.9738 49.9958 35.739 50.0153 35.5037 50.0159C34.7814 49.9978 34.0677 49.8536 33.3951 49.5895L38.8639 57.1544C39.0385 57.3896 39.2792 57.5674 39.5553 57.6653C39.8314 57.7632 40.1303 57.7767 40.4141 57.7041C40.6979 57.6316 40.9536 57.4762 41.1488 57.2577C41.3439 57.0393 41.4697 56.7678 41.51 56.4776L41.9979 54.066L44.7437 54.3425C45.0266 54.3805 45.3144 54.3358 45.5724 54.2137C45.8304 54.0916 46.0475 53.8975 46.1975 53.6546C46.3435 53.4167 46.4157 53.1409 46.405 52.862C46.3944 52.5831 46.3013 52.3136 46.1376 52.0875L42.0223 46.323ZM29.7948 49.9563L26.2635 54.841L25.9354 53.2216C25.8905 52.8547 25.7055 52.5195 25.4191 52.2859C25.2618 52.158 25.08 52.0635 24.8849 52.0082C24.6897 51.953 24.4854 51.9381 24.2843 51.9647L22.3454 52.16L25.8907 47.1934C25.2081 47.0144 24.5612 46.72 23.9779 46.3228L19.8693 52.0785C19.7031 52.3048 19.6079 52.5755 19.596 52.8561C19.5841 53.1367 19.6559 53.4145 19.8023 53.6541C19.9517 53.8976 20.1688 54.0924 20.427 54.2146C20.6853 54.3369 20.9735 54.3813 21.2565 54.3425L24.0021 54.066L24.4908 56.4776C24.5479 56.8259 24.7245 57.1434 24.9902 57.3756C25.256 57.6078 25.5943 57.7402 25.947 57.7502C26.1795 57.7504 26.4087 57.6959 26.6162 57.5911C26.8237 57.4863 27.0036 57.3341 27.1414 57.1469L32.6043 49.5907C31.715 49.9529 30.7472 50.0788 29.7948 49.9563Z\"\n                                        fill=\"black\"\n                                    />\n                                </svg>', 'Scholorships', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ', NULL, NULL),
(4, '<svg\n                                    width=\"64\"\n                                    height=\"59\"\n                                    viewBox=\"0 0 64 59\"\n                                    fill=\"none\"\n                                    xmlns=\"http://www.w3.org/2000/svg\"\n                                >\n                                <path\n                                        d=\"M0.713783 26.5592C1.68633 28.2239 3.44014 29.153 5.2394 29.153C6.13524 29.153 7.04339 28.9225 7.87105 28.4373C8.78377 27.9028 9.46956 27.1292 9.90736 26.2443L22.0164 29.4521C21.8453 30.9428 22.128 32.4976 22.9403 33.8896C22.9403 33.8901 22.9403 33.8901 22.9403 33.8901C23.0523 34.0818 23.1822 34.2558 23.3087 34.4331L12.707 44.9525C11.2905 44.2815 9.57787 44.2954 8.12485 45.1455C6.9932 45.8081 6.18638 46.8728 5.85399 48.1439C5.5216 49.414 5.70247 50.7382 6.36441 51.8717C6.36441 51.8721 6.36441 51.8721 6.36441 51.8721C7.02635 53.0061 8.08981 53.8138 9.35781 54.1468C9.77259 54.2554 10.193 54.3094 10.6107 54.3094C11.4705 54.3094 12.3181 54.0808 13.0804 53.6345C14.212 52.9715 15.0189 51.9068 15.3512 50.6367C15.6836 49.3661 15.5018 48.0419 14.8399 46.9079C14.675 46.6254 14.484 46.3679 14.2752 46.1316L24.6391 35.848C25.6125 36.6319 26.7636 37.1392 27.9756 37.3393L25.8012 50.7155C25.3708 50.8081 24.9497 50.9512 24.5587 51.1802C22.5644 52.3483 21.8911 54.9241 23.0568 56.9222C23.8352 58.2559 25.2396 59 26.6819 59C27.3997 59 28.1269 58.815 28.7898 58.4271C30.7842 57.258 31.4575 54.6822 30.2917 52.6846C29.7308 51.7245 28.8322 51.0403 27.7608 50.7518L29.9318 37.3962C30.8999 37.289 31.8612 36.9892 32.7548 36.4658C33.7876 35.861 34.6349 35.0271 35.2442 34.0344L55.6248 39.6001C55.5856 40.4039 55.7744 41.203 56.1897 41.9138C56.7541 42.8823 57.6623 43.5719 58.7456 43.856C59.0989 43.9489 59.4578 43.9949 59.8148 43.9949C60.5487 43.9949 61.2722 43.8 61.9228 43.4192C62.8887 42.8534 63.5781 41.9442 63.8612 40.8595C64.1453 39.7749 63.99 38.6442 63.4247 37.6767C62.8593 36.7091 61.9521 36.0196 60.8697 35.7355C59.7845 35.4504 58.6585 35.606 57.6926 36.1723C57.0434 36.5526 56.534 37.0972 56.174 37.7366L36.0267 32.2347C36.0411 32.1839 36.0606 32.1353 36.074 32.084C36.5354 30.3206 36.3115 28.4895 35.4596 26.8901L45.2467 21.1577C46.0208 22.0896 47.051 22.7662 48.2455 23.08C48.7399 23.2099 49.2418 23.2739 49.7399 23.2739C50.7654 23.2739 51.7768 23.0017 52.685 22.4696C54.0354 21.6785 54.9975 20.4084 55.3933 18.8931C55.7901 17.3778 55.5733 15.7984 54.7835 14.4463C53.1547 11.6561 49.5628 10.7119 46.7739 12.3438C44.2737 13.8093 43.2658 16.8565 44.2614 19.4843L34.3213 25.3062C33.5624 24.5065 32.6336 23.8907 31.5848 23.5107L30.427 9.67984C30.868 9.56737 31.2968 9.39658 31.7009 9.16003C34.037 7.79223 34.8268 4.7749 33.4613 2.43341C32.0938 0.093348 29.0806 -0.696791 26.7453 0.671013C25.6137 1.33405 24.8068 2.39879 24.4744 3.66937C24.1421 4.93995 24.3239 6.26412 24.9858 7.39763C25.6478 8.53115 26.7112 9.33883 27.9792 9.67177C28.1485 9.7163 28.3189 9.74541 28.4893 9.77155L29.6044 23.0924C28.1837 22.9958 26.7683 23.3237 25.5123 24.0593C24.0902 24.892 23.0672 26.1455 22.4936 27.5689L10.4294 24.3731C10.5232 23.3262 10.3156 22.2432 9.74702 21.2687C9.04152 20.0603 7.90799 19.1995 6.55665 18.8447C5.20436 18.4885 3.79525 18.6834 2.58975 19.3901C0.10014 20.848 -0.741725 24.0641 0.713783 26.5588C0.713783 26.5592 0.713783 26.5592 0.713783 26.5592ZM13.4753 50.1439C13.2736 50.9127 12.7859 51.5568 12.1012 51.9575C11.4165 52.3583 10.6182 52.4683 9.8493 52.2672C9.08224 52.0661 8.43924 51.5776 8.03867 50.8918C7.6381 50.2055 7.5292 49.4045 7.72996 48.6362C7.93071 47.8674 8.41841 47.2233 9.10402 46.8226C10.5169 45.9949 12.3389 46.473 13.1656 47.8887C13.5662 48.5745 13.676 49.3756 13.4753 50.1439ZM28.6175 53.6654C29.2434 54.7382 28.8817 56.1221 27.8107 56.75C26.7415 57.377 25.3589 57.0161 24.7311 55.9414C24.1051 54.8681 24.4669 53.4847 25.5379 52.8572C25.8757 52.6591 26.2514 52.5594 26.6318 52.5527C26.6358 52.5527 26.64 52.5537 26.644 52.5537C26.6548 52.5537 26.6643 52.5485 26.675 52.5481C26.8649 52.5485 27.0564 52.5726 27.2453 52.6224C27.8268 52.7747 28.3145 53.1451 28.6175 53.6654ZM57.6301 39.2242C57.7826 38.6413 58.1519 38.1533 58.6718 37.8493C59.0212 37.6444 59.4095 37.5401 59.8044 37.5401C59.9957 37.5401 60.1879 37.5647 60.3782 37.6145C60.9597 37.7673 61.4474 38.1377 61.7504 38.6575C62.0544 39.1777 62.1377 39.7848 61.9853 40.3672C61.8328 40.9496 61.4635 41.4381 60.9436 41.7421C60.4246 42.0462 59.8176 42.1301 59.2371 41.9769C58.6547 41.8242 58.167 41.4538 57.864 40.934C57.864 40.9335 57.864 40.9335 57.864 40.9335C57.561 40.4137 57.4776 39.8066 57.6301 39.2242ZM47.7531 14.0209C48.3724 13.658 49.0514 13.4854 49.7228 13.4854C51.0694 13.4854 52.3819 14.1812 53.1092 15.4271C53.6376 16.3315 53.7825 17.3877 53.5174 18.4008C53.2522 19.4143 52.6092 20.2637 51.7058 20.7925C50.8052 21.3199 49.7493 21.4665 48.737 21.2009C47.7256 20.9353 46.8771 20.2908 46.3497 19.3863C45.2597 17.5196 45.8894 15.1126 47.7531 14.0209ZM26.6601 6.41684C26.2595 5.73104 26.1497 4.93046 26.3504 4.16167C26.5521 3.39334 27.0398 2.7488 27.7245 2.34804C28.1942 2.07249 28.7093 1.94207 29.2188 1.94207C30.2397 1.94207 31.2349 2.46946 31.787 3.41374C32.6128 4.82992 32.1355 6.6554 30.7217 7.483C29.3097 8.31298 27.4877 7.83254 26.6601 6.41684ZM26.4915 25.7364C27.698 25.0302 29.109 24.8357 30.4613 25.1905C31.8135 25.5457 32.9471 26.407 33.6526 27.6159C34.359 28.8248 34.5522 30.2367 34.198 31.5917C33.8429 32.9463 32.9831 34.0817 31.7757 34.7888C29.2832 36.2477 26.072 35.4049 24.6146 32.9093C23.1581 30.4132 24 27.1952 26.4915 25.7364ZM3.56893 21.0671C4.32746 20.6232 5.21194 20.4999 6.06517 20.7238C6.91555 20.9471 7.62863 21.4888 8.07276 22.249C8.98849 23.8189 8.45913 25.8426 6.89188 26.7603C5.32652 27.6785 3.30472 27.1483 2.38804 25.5789C1.47231 24.0086 2.00167 21.9849 3.56893 21.0671Z\"\n                                        fill=\"black\"\n                                />\n                                </svg>', 'Wide Network', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ', NULL, NULL);

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
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_requireds`
--
ALTER TABLE `document_requireds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_slug_unique` (`slug`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `preparation_books`
--
ALTER TABLE `preparation_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_abroads`
--
ALTER TABLE `study_abroads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_exams`
--
ALTER TABLE `test_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_preparations`
--
ALTER TABLE `test_preparations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_preparation_faqs`
--
ALTER TABLE `test_preparation_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visa_acceptances`
--
ALTER TABLE `visa_acceptances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `document_requireds`
--
ALTER TABLE `document_requireds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preparation_books`
--
ALTER TABLE `preparation_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `study_abroads`
--
ALTER TABLE `study_abroads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_exams`
--
ALTER TABLE `test_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_preparations`
--
ALTER TABLE `test_preparations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_preparation_faqs`
--
ALTER TABLE `test_preparation_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visa_acceptances`
--
ALTER TABLE `visa_acceptances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
