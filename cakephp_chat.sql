-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2014 at 12:55 AM
-- Server version: 5.5.34-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thread_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_by` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `content`, `created`, `updated`, `thread_id`, `user_id`, `deleted`, `created_by`) VALUES
(1, 'hello', '2014-01-02 11:52:51', '2014-01-02 19:21:08', 34, 21, NULL, 'admin'),
(7, 'hello 3', '2014-01-02 12:23:07', '2014-01-02 12:23:07', 34, 21, 1, 'admin'),
(8, 'hello 4', '2014-01-02 12:23:27', '2014-01-02 12:23:27', 34, 21, NULL, 'admin'),
(9, 'Hi i can see you', '2014-01-02 12:29:03', '2014-01-02 12:29:03', 34, 22, NULL, 'admin1'),
(10, 'ok let call user test', '2014-01-02 12:29:27', '2014-01-02 12:29:27', 34, 22, NULL, 'admin1'),
(11, 'ok, Im here. hehe wecan chat but it is not instant! i''ll fix the edit message', '2014-01-02 12:30:11', '2014-01-02 12:30:11', 34, 25, NULL, 'test'),
(12, 'ok, chat now is complete', '2014-01-02 12:32:02', '2014-01-02 12:32:02', 34, 21, 1, 'admin'),
(13, 'chat message is out', '2014-01-02 12:35:23', '2014-01-02 12:35:23', 34, 21, NULL, 'admin'),
(14, 'sadfjk', '2014-01-02 12:55:18', '2014-01-02 12:55:18', 34, 21, NULL, 'admin'),
(15, 'alo', '2014-01-02 12:55:55', '2014-01-02 12:55:55', 36, 21, NULL, 'admin'),
(16, 'cong nghe', '2014-01-02 12:56:31', '2014-01-02 12:56:31', 36, 21, NULL, 'admin'),
(17, 'alo', '2014-01-02 12:56:35', '2014-01-02 12:56:35', 36, 21, NULL, 'admin'),
(18, 'toi day admin', '2014-01-02 12:56:53', '2014-01-02 12:56:53', 36, 25, NULL, 'test'),
(19, 'toi la test', '2014-01-02 12:56:57', '2014-01-02 12:56:57', 36, 25, NULL, 'test'),
(20, ':D', '2014-01-02 12:57:11', '2014-01-02 12:57:11', 36, 25, NULL, 'test'),
(21, 'toi la admin1', '2014-01-02 12:57:29', '2014-01-02 12:57:29', 36, 22, NULL, 'admin1'),
(22, 'toi cung tham gia phong', '2014-01-02 12:57:34', '2014-01-02 12:57:34', 36, 22, NULL, 'admin1'),
(23, 'hello', '2014-01-02 13:29:33', '2014-01-02 13:29:33', 34, 22, NULL, 'admin1'),
(36, 'test', '2014-01-02 15:00:09', '2014-01-02 15:00:09', 36, 26, NULL, 'phund'),
(37, 'skdfg', '2014-01-02 15:02:42', '2014-01-02 15:02:42', 36, 21, NULL, 'admin'),
(38, 'dsgf', '2014-01-02 15:02:45', '2014-01-02 15:02:45', 36, 26, NULL, 'phund'),
(39, 'chat loan len', '2014-01-02 15:48:17', '2014-01-02 15:48:17', 36, 26, NULL, 'phund'),
(40, 'abcxyz', '2014-01-02 15:48:40', '2014-01-02 15:48:40', 36, 21, NULL, 'admin'),
(41, 'toi la phund moi tham gia', '2014-01-02 16:09:16', '2014-01-02 16:09:16', 34, 26, NULL, 'phund'),
(42, 'hello phu nghe ko', '2014-01-02 16:09:45', '2014-01-02 16:09:45', 34, 21, 1, 'admin'),
(43, 'chao admin', '2014-01-02 16:12:48', '2014-01-02 16:12:48', 34, 26, NULL, 'phund'),
(44, 'anh thang 2323dcccccccccccccccccccccc', '2014-01-02 16:37:57', '2014-01-02 18:23:28', 34, 21, NULL, 'admin'),
(45, 'chat tiep', '2014-01-02 16:44:57', '2014-01-02 16:44:57', 34, 21, 1, 'admin'),
(46, 'ok chat tiep day', '2014-01-02 16:46:36', '2014-01-02 16:46:36', 34, 26, NULL, 'phund'),
(50, 'sdfasdf', '2014-01-02 18:24:38', '2014-01-02 18:24:38', 34, 21, NULL, 'admin'),
(51, 'asdfasdfa', '2014-01-02 18:24:41', '2014-01-02 18:24:41', 34, 21, NULL, 'admin'),
(52, 'asdfas', '2014-01-02 18:24:45', '2014-01-02 18:24:45', 34, 21, NULL, 'admin'),
(53, 'hello world 2', '2014-01-02 18:26:14', '2014-01-02 22:29:29', 34, 21, NULL, 'admin'),
(54, 'asdfas', '2014-01-02 18:26:48', '2014-01-02 18:26:48', 34, 26, NULL, 'phund'),
(55, 'hello ba', '2014-01-03 12:47:12', '2014-01-03 12:47:12', 34, 21, 1, 'admin'),
(56, 'hello 2', '2014-01-03 12:47:43', '2014-01-03 12:47:43', 34, 21, NULL, 'admin'),
(57, 'phund test 212', '2014-01-03 13:59:12', '2014-01-03 02:13:09', 36, 21, NULL, 'admin'),
(58, 'let chat new 3', '2014-01-03 14:41:34', '2014-01-03 04:36:41', 36, 21, NULL, 'admin'),
(59, 'ok i know what to do', '2014-01-03 14:41:49', '2014-01-03 14:41:49', 36, 26, NULL, 'phund'),
(60, 'new comment in my chat', '2014-01-03 14:42:07', '2014-01-03 14:42:07', 41, 26, NULL, 'phund'),
(61, 'firt chat', '2014-01-03 14:51:14', '2014-01-03 14:51:14', 42, 21, NULL, 'admin'),
(62, 'cckk is here', '2014-01-03 15:20:19', '2014-01-03 15:20:19', 34, 27, NULL, 'cckk'),
(63, 'first commet in chat', '2014-01-03 15:20:40', '2014-01-03 15:20:40', 34, 27, NULL, 'cckk'),
(64, 'test message 1', '2014-01-03 15:23:43', '2014-01-03 03:23:51', 43, 27, NULL, 'cckk'),
(65, 'ok im here', '2014-01-03 15:34:17', '2014-01-03 15:34:17', 43, 21, NULL, 'admin'),
(66, 'test', '2014-01-03 15:46:11', '2014-01-03 15:46:11', 43, 21, 1, 'admin'),
(67, 'test new 2', '2014-01-03 15:47:11', '2014-01-03 15:47:11', 43, 21, 1, 'admin'),
(68, 'new message', '2014-01-03 15:47:22', '2014-01-03 03:47:48', 43, 21, NULL, 'admin'),
(69, 'ok', '2014-01-03 16:37:05', '2014-01-03 16:37:05', 36, 21, NULL, 'admin'),
(70, 'he llow', '2014-01-03 16:37:10', '2014-01-03 16:37:10', 36, 21, NULL, 'admin'),
(71, 'ok im here', '2014-01-03 16:55:30', '2014-01-03 16:55:30', 36, 26, NULL, 'phund'),
(72, 'im here', '2014-01-03 17:00:44', '2014-01-03 17:00:44', 36, 26, NULL, 'phund'),
(73, 'ok', '2014-01-03 17:00:51', '2014-01-03 17:00:51', 36, 26, NULL, 'phund'),
(74, 'can you create a chat', '2014-01-03 17:02:04', '2014-01-03 17:02:04', 36, 21, NULL, 'admin'),
(75, 'text new', '2014-01-03 17:12:55', '2014-01-03 17:12:55', 34, 26, NULL, 'phund'),
(76, 'new 2', '2014-01-03 17:20:21', '2014-01-03 17:20:21', 34, 26, NULL, 'phund'),
(77, 'hello', '2014-01-03 17:22:31', '2014-01-03 17:22:31', 34, 21, NULL, 'admin'),
(78, 'hi', '2014-01-03 17:22:39', '2014-01-03 17:22:39', 34, 26, NULL, 'phund'),
(79, 'hello', '2014-01-03 17:23:35', '2014-01-03 17:23:35', 34, 26, NULL, 'phund'),
(80, 'hi', '2014-01-03 17:29:57', '2014-01-03 17:29:57', 34, 26, NULL, 'phund'),
(81, 'ohio gozamasu', '2014-01-03 17:31:35', '2014-01-03 17:31:35', 34, 21, NULL, 'admin'),
(82, 'hello', '2014-01-03 17:34:59', '2014-01-03 17:34:59', 34, 26, NULL, 'phund'),
(83, 'hi', '2014-01-03 17:35:32', '2014-01-03 17:35:32', 34, 26, NULL, 'phund'),
(84, 'chat now', '2014-01-03 17:40:14', '2014-01-03 17:40:14', 34, 26, NULL, 'phund'),
(85, 'test ok but not good', '2014-01-03 17:43:12', '2014-01-03 17:43:12', 34, 26, NULL, 'phund'),
(86, 'hello world', '2014-01-03 17:45:36', '2014-01-03 17:45:36', 34, 26, NULL, 'phund');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `threadname` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `threadname`, `user_id`, `created`, `updated`) VALUES
(34, 'admin 2 - created by admin1', 22, '2014-01-01 11:21:21', '2014-01-01 11:21:21'),
(35, 'test - created by admin1', 22, '2014-01-01 11:21:33', '2014-01-01 11:21:33'),
(36, 'demo - created by admin', 21, '2014-01-01 11:21:48', '2014-01-01 11:21:48'),
(37, 'demo1 - created by admin', 21, '2014-01-01 11:21:54', '2014-01-01 11:21:54'),
(38, 'test - created by test', 25, '2014-01-01 11:34:49', '2014-01-01 11:34:49'),
(41, 'Phu chat room - created by phund', 26, '2014-01-02 13:32:38', '2014-01-02 13:32:38'),
(42, 'Cake chat demo 3 - created by admin', 21, '2014-01-03 14:51:01', '2014-01-03 14:51:01'),
(43, 'test - created by cckk', 27, '2014-01-03 15:21:57', '2014-01-03 15:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(21, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com'),
(22, 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com'),
(24, 'admin3', '33aab3c7f01620cade108f488cfd285c0e62c1ec', 'admin@gmail.com'),
(25, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@gmail.com'),
(26, 'phund', '00451a307f75e6cea0e10eea7e812646037ff11d', 'phu@gmail.com'),
(27, 'cckk', '1c2e0285a403f4c973582dec08b98b968d8ece52', 'test@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
