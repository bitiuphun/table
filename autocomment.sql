-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2022 at 05:01 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocomment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comments` int(11) NOT NULL AUTO_INCREMENT,
  `id_comment_group` int(11) NOT NULL,
  `content_cm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_comments`),
  KEY `FK_id_comment_group` (`id_comment_group`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comments`, `id_comment_group`, `content_cm`) VALUES
(3, 2, 'okee'),
(4, 2, 'ddddddddd'),
(5, 2, 'adasdsa'),
(6, 1, 'hay quá lalalala');

-- --------------------------------------------------------

--
-- Table structure for table `comment_group`
--

DROP TABLE IF EXISTS `comment_group`;
CREATE TABLE IF NOT EXISTS `comment_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment_group`
--

INSERT INTO `comment_group` (`id`, `ngaytao`) VALUES
(1, '2022-06-03 10:50:42'),
(2, '2022-06-06 08:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tags_group` int(11) NOT NULL,
  PRIMARY KEY (`id_tags`),
  KEY `FK_id_tags` (`id_tags_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tags`, `content`, `id_tags_group`) VALUES
(2, 'HAHA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refresh_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaythem` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `jj` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `refresh_token`, `ngaythem`, `user_id`) VALUES
('nguyenquantung2001@gmail.com', '1//0eAl06BiYvX-5CgYIARAAGA4SNwF-L9IreQ-nMYD4Ps1l8hd9JXJ9V_xri1asoXcSMREFj_y2vc5AzwEZxIPabOawSDDkA-0vhVU', '2022-06-06 11:57:51', 2),
('tungproghe@gmail.com', '1//0eb5NR2Nc3bJKCgYIARAAGA4SNwF-L9IrwQIUfU1NNy8UXp4ezOYpHPkl-h7o5LjgFNL_oJjtwns_YD2klq1NPSZkn6p815IpYnc', '2022-06-07 11:45:19', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_id_comment_group` FOREIGN KEY (`id_comment_group`) REFERENCES `comment_group` (`id`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `FK_id_tags` FOREIGN KEY (`id_tags_group`) REFERENCES `comment_group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
