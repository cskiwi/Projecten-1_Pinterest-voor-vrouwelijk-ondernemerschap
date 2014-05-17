
-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2014 at 08:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

set foreign_key_checks=0;

 DROP DATABASE pvvo;

set foreign_key_checks=1;

--
-- Database: `pvvo`
--
CREATE DATABASE IF NOT EXISTS `pvvo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pvvo`;


--
-- Database: `pvvo`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE IF NOT EXISTS `boards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `boards_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 16, 'Littens', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(2, 4, 'Dogs', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(3, 11, 'Photography', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(4, 6, 'Programming', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(5, 20, 'Random', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(6, 1, 'Awesome board', '2014-05-15 11:46:18', '2014-05-15 11:46:18'),
(7, 2, 'Petrik', '2014-05-15 11:48:16', '2014-05-15 11:48:16'),
(8, 2, 'Awesome songs', '2014-05-15 11:52:01', '2014-05-15 11:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `board_tag`
--

CREATE TABLE IF NOT EXISTS `board_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `board_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `board_tag_board_id_index` (`board_id`),
  KEY `board_tag_tag_id_index` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `board_tag`
--

INSERT INTO `board_tag` (`id`, `board_id`, `tag_id`) VALUES
(12, 2, 1),
(13, 2, 2),
(14, 1, 1),
(15, 2, 2),
(16, 3, 3),
(17, 2, 4),
(18, 3, 1),
(19, 5, 1),
(20, 4, 1),
(21, 6, 1),
(22, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `pin_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `comments_id_index` (`id`),
  KEY `comments_user_id_index` (`user_id`),
  KEY `comments_pin_id_index` (`pin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `pin_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_id_index` (`id`),
  KEY `favorites_user_id_index` (`user_id`),
  KEY `favorites_pin_id_index` (`pin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `pin_id`) VALUES
(1, 1, 5),
(2, 1, 7),
(3, 1, 8),
(4, 2, 11),
(5, 2, 10),
(6, 1, 17),
(7, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `board_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `follows_id_index` (`id`),
  KEY `follows_user_id_index` (`user_id`),
  KEY `follows_board_id_index` (`board_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `board_id`) VALUES
(14, 1, 2),
(15, 1, 3),
(16, 1, 4),
(17, 1, 5),
(18, 2, 1),
(19, 2, 2),
(20, 2, 3),
(21, 2, 4),
(22, 2, 5),
(23, 1, 6),
(24, 2, 7),
(26, 1, 7),
(27, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('1_create_users_table', 1),
('4_create_password_reminders_table', 1),
('3_create_pins_table', 1),
('2_create_boards_table', 1),
('4_create_comments_table', 1),
('4_create_favorites_table', 1),
('5_pivot_Follows_table', 1),
('4_create_tag_table', 1),
('5_pivot_board_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE IF NOT EXISTS `pins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `original_id` int(10) unsigned DEFAULT NULL,
  `board_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `imgLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `type` enum('Image','Text','Video','Tutorial','Offer') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pins_user_id_foreign` (`user_id`),
  KEY `pins_board_id_foreign` (`board_id`),
  KEY `pins_original_id_foreign` (`original_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`id`, `user_id`, `original_id`, `board_id`, `title`, `description`, `imgLocation`, `price`, `type`, `created_at`, `updated_at`) VALUES
(1, 15, NULL, 2, 'Wikipedia dog', 'The domestic dog (Canis lupus familiaris)is a subspecies of the gray wolf (Canis lupus), a member of the Canidae family of the mammalian order Carnivora. The term &quot;domestic dog&quot; is generally used for both domesticated and feral varieties. The dog was the first domesticated animaland has been the most widely kept working, hunting, and pet animal in human history.[citation needed] The word &quot;dog&quot; can also refer to the male of a canine species, as opposed to the word &quot;bitch&quot; which refers to the female of the species.', '', 0, 'Text', '2014-04-01 08:00:27', '2014-04-01 08:00:27'),
(2, 5, NULL, 1, 'Animal Foto', '', 'usr_1_pin1.jpg', 0, 'Image', '2014-04-01 08:00:27', '2014-04-01 08:00:27'),
(3, 10, NULL, 1, 'Wikipedia Cat', 'The domestic cat (Felis catus or Felis silvestris catus) is a small, usually furry, domesticated, and carnivorous mammal. It is often called the housecat when kept as an indoor pet, or simply the cat when there is no need to distinguish it from other felids and felines. Cats are often valued by humans for companionship and their ability to hunt vermin and household pests.', '', 0, 'Text', '2014-04-01 08:00:27', '2014-04-01 08:00:27'),
(4, 3, NULL, 1, 'Cat Foto', '', 'usr_1_pin2.jpg', 0, 'Image', '2014-04-01 08:00:27', '2014-04-01 08:00:27'),
(5, 10, NULL, 1, 'Wikipedia Animal', 'Animals are multicellular, eukaryotic organisms of the kingdom Animalia or Metazoa. Their description plan eventually becomes fixed as they develop, although some undergo a process of metamorphosis later on in their lives. Most animals are motile, meaning they can move spontaneously and independently. All animals must ingest other organisms or their products for sustenance (see Heterotroph).', '', 0, 'Text', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(6, 13, NULL, 2, 'Dog Foto', '', 'usr_1_pin3.jpg', 0, 'Image', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(7, 17, NULL, 1, 'Cat Foto', '', 'usr_1_pin4.jpg', 0, 'Image', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(8, 14, NULL, 3, 'Photography Foto', '', '01.jpg', 0, 'Image', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(9, 17, NULL, 3, 'Wikipedia Imagegraphy', 'Photography (see section below for etymology) is the art, science and practice of creating durable images by recording light or other electromagnetic radiation, either chemically by means of a light-sensitive material such as Imagegraphic film, or electronically by means of an image sensor. Typically, a lens is used to focus the light reflected or emitted from objects into a real image on the light-sensitive surface inside a camera during a timed exposure. The result in an electronic image sensor is an electrical charge at each pixel, which is electronically processed and stored in a digital image file for subsequent display or processing.', '', 0, 'Text', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(10, 11, NULL, 5, 'Wikipedia', 'John F. Bolt (1921', '', 0, 'Text', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(11, 12, NULL, 4, 'Wikipedia programming', 'Computer programming (often shortened to programming) is a process that leads from an original formulation of a computing problem to executable programs. It involves activities such as analysis, understanding, and generically solving such problems resulting in an algorithm, verification of requirements of the algorithm including its correctness and its resource consumption, implementation (or coding) of the algorithm in a target programming language, testing, debugging, and maintaining the source code, implementation of the build system and management of derived artefacts such as machine code of computer programs. The algorithm is often only represented in human-parseable form and reasoned about using logic. Source code is written in one or more programming languages (such as C++, C#, Java, Python, Smalltalk, JavaScript, etc.). The purpose of programming is to find a sequence of instructions that will automate performing a specific task or solve a given problem. The process of programming thus often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms and formal logic.', '', 0, 'Text', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(12, 8, NULL, 4, 'Random programming', 'int rand() {  random_seed = random_seed * 1103515245 +12345; <br /> return (unsigned int)(random_seed / 65536) % 32768; }', '', 0, 'Text', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(14, 1, NULL, 6, 'Do we have any crackers', 'Do you?', 'usr_1_pin14.jpg', 0, 'Image', '2014-05-15 11:46:17', '2014-05-15 11:46:17'),
(15, 2, NULL, 7, 'Petriksqd', 'fqfqdgdqgdgdsgsdqqdsfqds', 'usr_2_pin15.jpg', 0, 'Image', '2014-05-15 11:48:15', '2014-05-15 11:48:16'),
(17, 2, NULL, 7, 'Petrik', 'Petrik is spongebob niet.', '', 0, 'Text', '2014-05-15 11:49:11', '2014-05-15 11:49:11'),
(18, 2, NULL, 8, 'The High Kings', '//www.youtube.com/embed/0QdbeM2JWYE?rel=0', '', 0, 'Video', '2014-05-15 11:52:01', '2014-05-15 11:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'Tag 1'),
(2, 'Tag 2'),
(3, 'Tag 3'),
(4, 'Tag 4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `remember_token`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Glenn Latomme', 'cskiwi', '3VwJK8H8dH3U0zQyTnXqWUAyPXtDR6dCpdeUd8mAJ1jeclpboFCRjibydMJR', 'glenn.latomme@gmail.com', '$2y$10$laE.5jnD7tDhqBwag4H9bOz1fpTditkAmiqbEWnL82YALBiFMgRT.', '2014-04-01 08:00:28', '2014-05-14 13:59:14'),
(2, 'Jesse Struyvelt', 'jessestr', 'bFHMtjjhs7AhmPKdtnDPrOqSV4lJ5Vo9qz3fSlV1lvewA57M3k2hDZjDMQNI', 'jstruyvelt@gmail.com', '$2y$10$d8MfQ4j/A4yRBwGhmOUXbejhiyAmsWMVjXo0Pp9fLIofM8J8qKY5u', '2014-04-01 08:00:28', '2014-05-15 11:47:21'),
(3, 'Nicolas VanHulle', 'nicolasvh', NULL, 'Nicolas.VanHulle@gmail.com', '$2y$10$I0AF3jpDop6q51RcelKJ4eyrbavmrAS93rRe2GWmVN6wL50FfBdWi', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(4, 'Dummy User 1', 'dummy1', NULL, 'dummy@test.com', '$2y$10$BdNIIe2sLSfTkV7T8XHnfugbb6sgpyaWmTKUCKtl3pzu7LD1UQfJO', '2014-04-01 08:00:28', '2014-04-01 08:00:28'),
(5, 'Dummy User 2', 'dummy2', NULL, 'dummy@test.com', '$2y$10$64TmIaLUFsb1Y9yUFztiUek4YbM2f7AvLIHzgmg7RhHXldhgDV7K2', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(6, 'Dummy User 3', 'dummy3', NULL, 'dummy@test.com', '$2y$10$fe3k/GOenos6GA0Z4TQHDOA0oqFSVGMKxFqYYpOrDCoMHWjZcrj86', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(7, 'Dummy User 4', 'dummy4', NULL, 'dummy@test.com', '$2y$10$2eE8MB84z.sL7rl3445SnOUyW9UN.J8QIIaxBWJfWOaKH2Pzx5mMO', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(8, '', 'dummy5', NULL, 'dummy@test.com', '$2y$10$IEdsZXVIsjL2eqpLh5D.suf/TZWnrK/rPLkMHUHmbPYgg6OAXkua2', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(9, 'Dummy User 6', 'dummy6', NULL, 'dummy@test.com', '$2y$10$YEjriNOQIka1yPSMLsFs6uRmMRXZwGaldMxvfNOZlZemO6vmB18iC', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(10, 'Dummy User 8', 'dummy7', NULL, 'dummy@test.com', '$2y$10$ASX5E0A3X33R9sQTeXWtsezA8rJJmp9mo8tPlX1hF3AgVniLAtA4q', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(11, 'Dummy User 9', 'dummy9', NULL, 'dummy@test.com', '$2y$10$5EAf.AWHvHplNeNZK8VYtuzv4ik0dTMlOWYrl/GcTO24Q8AW5UKpG', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(12, 'Dummy User 10', 'dummy10', NULL, 'dummy@test.com', '$2y$10$IJud41Sa8bImy0/IDZsKqemwJnTdqXg9/ndMk5ThpXQSfgKEMk/CW', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(13, 'Dummy User 11', 'dummy11', NULL, 'dummy@test.com', '$2y$10$/g4GGbECcSTrq4l26Zf2Ye4L3R8qiTqqRZarVwclRBJOnlY5tkn76', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(14, 'Dummy User 12', 'dummy12', NULL, 'dummy@test.com', '$2y$10$e.ZQUh3r5hn3rOGmHz9DZuCUfPbqG5igmYBbU05QziBxfD3fRbssS', '2014-04-01 08:00:29', '2014-04-01 08:00:29'),
(15, 'Dummy User 13', 'dummy13', NULL, 'dummy@test.com', '$2y$10$yxwrq0FoyB3DzOaUWN3.oe6qpeHZpzWH6oSYfiFKdwFJ.Sr9SRNUO', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(16, 'Dummy User 14', 'dummy15', NULL, 'dummy@test.com', '$2y$10$kqFbJTp/R2bGRSfKYdUyX.NoyxyyUlXNnh/cWULeDhFZoeU1JFaAu', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(17, 'Dummy User 16', 'dummy16', NULL, 'dummy@test.com', '$2y$10$J7IjYWBp7HoDblcRNtdV2uxe0MClY0kr8kf8LZOPHpLZe6BhC2BIS', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(18, 'Dummy User 17', 'dummy17', NULL, 'dummy@test.com', '$2y$10$WJQNEK4gsOOU859l60Oik.4j0IBDxSF.nG4qWkhuklJBYfv2tfn6m', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(19, 'Dummy User 18', 'dummy18', NULL, 'dummy@test.com', '$2y$10$AVAo2cPj7T/ZFrZyCf7akeNWVXXvnlpcv87dtGuvcW/iuQPuvscGu', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(20, 'Dummy User 19', 'dummy19', NULL, 'dummy@test.com', '$2y$10$ecElkX7EeD/A7pLiuYZyZOLA/uGFfoP9bxhiNKIAjX.FjRJ3t88Ny', '2014-04-01 08:00:30', '2014-04-01 08:00:30'),
(22, '', 'sdf', NULL, 'a@a.a', '$2y$10$jWwJ4i0j6lLLQZ8nLXM.eenhGeNFJbEyOdpY4CsVmPd.bCslqaLYi', '2014-04-01 08:01:37', '2014-04-01 08:01:37');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `boards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `board_tag`
--
ALTER TABLE `board_tag`
  ADD CONSTRAINT `board_tag_board_id_foreign` FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`),
  ADD CONSTRAINT `board_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_pin_id_foreign` FOREIGN KEY (`pin_id`) REFERENCES `pins` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_pin_id_foreign` FOREIGN KEY (`pin_id`) REFERENCES `pins` (`id`),
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_board_id_foreign` FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`),
  ADD CONSTRAINT `follows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pins`
--
ALTER TABLE `pins`
  ADD CONSTRAINT `pins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pins_original_id_foreign` FOREIGN KEY (`original_id`) REFERENCES `pins` (`id`),
  ADD CONSTRAINT `pins_board_id_foreign` FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
