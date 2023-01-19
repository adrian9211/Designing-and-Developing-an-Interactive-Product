-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Gru 2022, 20:43
-- Wersja serwera: 10.6.9-MariaDB
-- Wersja PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `Limelight-Cinema`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movies`
--

CREATE TABLE `movies` (
  `MovieID` int(20) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Category` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Age restricted` char(1) NOT NULL,
  `Display time 1` time DEFAULT NULL,
  `Display time 2` time DEFAULT NULL,
  `Display time 3` time DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `Stock` int(6) NOT NULL,
  `Rating` int(5) NOT NULL DEFAULT 5,
  `Likes` int(100) NOT NULL,
  `Length` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Zrzut danych tabeli `movies`
--

INSERT INTO `movies` (`MovieID`, `Title`, `Description`, `Category`, `Type`, `Age restricted`, `Display time 1`, `Display time 2`, `Display time 3`, `file_name`, `uploaded_on`, `Stock`, `Rating`, `Likes`, `Length`) VALUES
(2, 'The colony', 'Set in the distant future, a female astronaut, shipwrecked on the long-decimated Earth, must decide the fate of the wasteland\'s remaining populace.', 16, 'Action, Adventure, Sci-Fi', 'Y', '17:00:00', '19:00:00', '21:30:02', 'colony.png', '2022-10-06 07:38:24', 1, 5, 0, '94'),
(4, 'Land 2021', 'A bereaved woman seeks out a new life, off the grid in Wyoming.', 16, 'Adventure, Drama', 'Y', '15:00:00', '16:10:00', '18:30:00', 'land.png', '0000-00-00 00:00:00', 100, 5, 0, '89'),
(6, 'House of Gucci', 'When Patrizia Reggiani, an outsider from humble beginnings, marries into the Gucci family, her unbridled ambition begins to unravel their legacy and triggers a reckless spiral of betrayal, decadence, revenge, and ultimately...murder.', 16, 'Biography, Crime, Drama', 'Y', '15:40:00', '16:30:00', '21:00:00', 'Guccijpg.png', '2022-10-06 12:43:09', 100, 4, 0, '168'),
(9, 'Black Friday', 'A group of toy store employees must protect each other from a horde of parasite infected shoppers.', 16, 'Comedy, Horror', 'Y', '14:00:00', '17:30:00', '18:50:00', 'Black_Friday!_film_poster.png', '2022-10-06 12:53:33', 100, 5, 0, '84'),
(11, 'Wrath of Man', 'The plot follows H, a cold and mysterious character working at a cash truck company responsible for moving hundreds of millions of dollars around Los Angeles each week.', 16, 'Action, Crime, Thriller', 'Y', '15:00:00', '17:00:00', '19:00:00', 'wrath-man.png', '2022-10-06 13:43:32', 120, 4, 1, '119'),
(13, 'Spider-Man: No Way Home', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 15, 'Action, Adventure, Fantasy', 'Y', '15:45:00', '17:30:00', '20:50:00', 'spider-man.png', '2022-10-06 13:46:47', 120, 5, 0, '158'),
(18, 'Strange World', 'An incredible family must get past their differences to save a strange world full of danger and surprises.', 3, 'Adventure Family Animation', 'N', '12:00:00', '19:00:00', '19:30:00', 'Strange World.png', NULL, 120, 5, 100, '90'),
(19, 'Railway Children', 'Follow a group of children who are evacuated to a Yorkshire village during the Second World War, where they encounter a young soldier who, like them, is far away from home.', 3, 'Adventure, Family, Sequel', 'N', '11:00:00', '17:30:00', '18:50:00', 'Railway Children Movie.png', NULL, 120, 5, 100, '84'),
(20, 'Scrooge: A Christmas Carol', 'A supernatural, time-travelling, musical adaptation of Charles Dickens\'s cult Christmas story', 3, 'Animation, Adventure, Comedy', 'N', '12:00:00', '17:30:00', '18:30:00', 'Scrooge A Christmas Carol Movie.png', NULL, 120, 5, 100, '89'),
(23, 'Roald Dahl\'s Matilda the Musical', 'An adaptation of the Tony and Olivier award-winning musical. Matilda tells the story of an extraordinary girl who, armed with a sharp mind and a vivid imagination, dares to take a stand to change her story with miraculous results.', 3, 'Family, Musical, Kids', 'N', '12:00:00', '15:10:00', '18:50:00', 'Roald.png', NULL, 120, 5, 100, '157'),
(24, 'Diary of a Wimpy Kid: Rodrick Rules', 'A new school year, his brother Rodrick teases him over and over and over and over again. Will Greg manage to get along with him? Or will a secret ruin everything?', 3, 'Animation, Comedy', 'N', '12:10:00', '13:45:00', '15:45:00', 'Diary of a Wimpy Kid Rodrick Rules Movie.png', NULL, 130, 5, 100, '74'),
(25, 'Puss in Boots: The Last Wish', 'Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.', 3, 'Animation, Adventure, Comedy', 'N', '12:15:00', '15:10:00', '18:50:00', 'Puss in Boots The Last Wish Movie.png', NULL, 120, 5, 100, '70');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_subbed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Zrzut danych tabeli `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date_subbed`) VALUES
(1, 'adrian9211@gmail.com', '2022-12-06 14:44:49'),
(2, 'adrian0809all@gmail.com', '2022-12-06 14:59:57'),
(3, 'margaritka1231@gmail.com', '2022-12-06 15:16:28'),
(4, 'admin3@gma.com', '2022-12-06 15:36:50'),
(5, 'alex@gmail.com', '2022-12-08 20:06:37'),
(6, 'alex2@amazon.com', '2022-12-08 20:12:35'),
(7, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 20:13:49'),
(8, 'don@amazo.com', '2022-12-08 20:16:42'),
(9, 'adrian921111@gmail.com', '2022-12-08 20:28:52'),
(10, 'ec202188711@edinburghcollege.ac.uk', '2022-12-08 20:31:13'),
(11, 'adr@gmail.com', '2022-12-08 20:33:59'),
(12, 'adrian92141@gmail.com', '2022-12-08 20:35:43'),
(13, 'sds1@gmail.com', '2022-12-08 20:37:08'),
(14, 'adrian921134@gmail.com', '2022-12-08 20:40:54'),
(15, 'adrian9211@gmail.com', '2022-12-08 20:42:27'),
(16, 'ffrr@gh.com', '2022-12-08 21:12:11'),
(17, 'ec20218877@gmail.com', '2022-12-08 21:12:36'),
(18, 'margaritka12313@gmail.com', '2022-12-08 21:15:00'),
(19, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:42'),
(20, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:43'),
(21, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:43'),
(22, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:43'),
(23, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:43'),
(24, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:43'),
(25, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:44'),
(26, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:44'),
(27, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:44'),
(28, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:44'),
(29, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:44'),
(30, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:45'),
(31, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:45'),
(32, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:45'),
(33, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:45'),
(34, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:45'),
(35, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:46'),
(36, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:46'),
(37, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:46'),
(38, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:46'),
(39, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:46'),
(40, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:47'),
(41, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:47'),
(42, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:47'),
(43, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:47'),
(44, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:47'),
(45, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:48'),
(46, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:48'),
(47, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:48'),
(48, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:48'),
(49, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:48'),
(50, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:49'),
(51, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:49'),
(52, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:49'),
(53, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:49'),
(54, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:49'),
(55, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(56, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(57, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(58, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(59, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(60, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:50'),
(61, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:51'),
(62, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:51'),
(63, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:51'),
(64, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:51'),
(65, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:51'),
(66, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:52'),
(67, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:52'),
(68, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:52'),
(69, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:52'),
(70, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:52'),
(71, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:53'),
(72, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:53'),
(73, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:53'),
(74, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:53'),
(75, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:53'),
(76, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:54'),
(77, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:54'),
(78, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:54'),
(79, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:54'),
(80, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:55'),
(81, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:55'),
(82, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:55'),
(83, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:55'),
(84, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:56'),
(85, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:56'),
(86, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:56'),
(87, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:56'),
(88, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:56'),
(89, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:57'),
(90, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:57'),
(91, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:57'),
(92, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:57'),
(93, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:58'),
(94, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:58'),
(95, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:58'),
(96, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:58'),
(97, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:59'),
(98, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:59'),
(99, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:59'),
(100, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:59'),
(101, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:17:59'),
(102, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:00'),
(103, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:00'),
(104, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:00'),
(105, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:00'),
(106, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:01'),
(107, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:01'),
(108, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:01'),
(109, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:02'),
(110, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:02'),
(111, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:02'),
(112, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:02'),
(113, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:02'),
(114, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:03'),
(115, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:03'),
(116, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:03'),
(117, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:03'),
(118, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:04'),
(119, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:04'),
(120, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:04'),
(121, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:04'),
(122, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:05'),
(123, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:05'),
(124, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:05'),
(125, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:05'),
(126, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:06'),
(127, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:06'),
(128, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:06'),
(129, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:06'),
(130, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:06'),
(131, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:07'),
(132, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:07'),
(133, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:07'),
(134, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:07'),
(135, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:08'),
(136, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:08'),
(137, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:08'),
(138, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:08'),
(139, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:09'),
(140, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:09'),
(141, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:09'),
(142, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:09'),
(143, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:09'),
(144, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:10'),
(145, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:10'),
(146, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:10'),
(147, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:10'),
(148, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:11'),
(149, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:11'),
(150, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:11'),
(151, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:11'),
(152, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:11'),
(153, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:12'),
(154, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:12'),
(155, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:12'),
(156, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:12'),
(157, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:13'),
(158, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:13'),
(159, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:13'),
(160, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:13'),
(161, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:13'),
(162, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:14'),
(163, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:14'),
(164, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:14'),
(165, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:14'),
(166, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:15'),
(167, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:15'),
(168, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:15'),
(169, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:15'),
(170, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:15'),
(171, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:16'),
(172, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:16'),
(173, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:16'),
(174, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:17'),
(175, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:17'),
(176, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:17'),
(177, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:17'),
(178, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:18'),
(179, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:18'),
(180, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:18'),
(181, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:18'),
(182, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:18'),
(183, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:19'),
(184, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:19'),
(185, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:19'),
(186, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:19'),
(187, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:20'),
(188, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:20'),
(189, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:20'),
(190, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:20'),
(191, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:21'),
(192, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:21'),
(193, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:21'),
(194, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:21'),
(195, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:22'),
(196, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:22'),
(197, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:22'),
(198, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:22'),
(199, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:23'),
(200, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:23'),
(201, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:23'),
(202, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:23'),
(203, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:24'),
(204, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:24'),
(205, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:24'),
(206, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:24'),
(207, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:25'),
(208, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:25'),
(209, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:25'),
(210, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:25'),
(211, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:25'),
(212, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:26'),
(213, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:26'),
(214, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:26'),
(215, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:26'),
(216, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:27'),
(217, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:27'),
(218, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:27'),
(219, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:27'),
(220, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:28'),
(221, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:28'),
(222, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:28'),
(223, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:28'),
(224, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:29'),
(225, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:29'),
(226, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:29'),
(227, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:29'),
(228, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:30'),
(229, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:30'),
(230, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:30'),
(231, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:30'),
(232, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:31'),
(233, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:31'),
(234, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:31'),
(235, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:31'),
(236, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:31'),
(237, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:32'),
(238, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:32'),
(239, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:32'),
(240, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:32'),
(241, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:33'),
(242, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:33'),
(243, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:33'),
(244, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:33'),
(245, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:34'),
(246, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:34'),
(247, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:34'),
(248, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:34'),
(249, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:34'),
(250, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:35'),
(251, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:35'),
(252, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:35'),
(253, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:35'),
(254, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:36'),
(255, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:36'),
(256, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:36'),
(257, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:36'),
(258, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:37'),
(259, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:37'),
(260, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:37'),
(261, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:37'),
(262, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:38'),
(263, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:38'),
(264, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:38'),
(265, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:38'),
(266, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:39'),
(267, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:39'),
(268, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:39'),
(269, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:39'),
(270, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:39'),
(271, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:40'),
(272, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:40'),
(273, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:40'),
(274, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:40'),
(275, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:41'),
(276, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:41'),
(277, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:41'),
(278, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:41'),
(279, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:42'),
(280, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:42'),
(281, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:42'),
(282, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:42'),
(283, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:42'),
(284, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:43'),
(285, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:43'),
(286, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:43'),
(287, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:43'),
(288, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:43'),
(289, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:44'),
(290, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:44'),
(291, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:44'),
(292, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:44'),
(293, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:45'),
(294, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:45'),
(295, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:45'),
(296, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:45'),
(297, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:45'),
(298, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:46'),
(299, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:46'),
(300, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:46'),
(301, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:46'),
(302, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:47'),
(303, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:47'),
(304, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:47'),
(305, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:47'),
(306, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:47'),
(307, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:48'),
(308, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:48'),
(309, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:48'),
(310, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:48'),
(311, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:48'),
(312, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:49'),
(313, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:49'),
(314, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:49'),
(315, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:49'),
(316, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:50'),
(317, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:50'),
(318, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:50'),
(319, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:51'),
(320, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:51'),
(321, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:51'),
(322, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:51'),
(323, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:52'),
(324, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:52'),
(325, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:52'),
(326, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:52'),
(327, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:53'),
(328, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:53'),
(329, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:53'),
(330, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:53'),
(331, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:54'),
(332, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:54'),
(333, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:55'),
(334, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:55'),
(335, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:56'),
(336, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:56'),
(337, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:56'),
(338, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:56'),
(339, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:57'),
(340, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:57'),
(341, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:57'),
(342, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:57'),
(343, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:58'),
(344, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:58'),
(345, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:58'),
(346, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:58'),
(347, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:59'),
(348, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:59'),
(349, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:18:59'),
(350, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:00'),
(351, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:00'),
(352, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:00'),
(353, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:00'),
(354, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:01'),
(355, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:01'),
(356, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:01'),
(357, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:02'),
(358, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:02'),
(359, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:02'),
(360, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:02'),
(361, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:03'),
(362, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:03'),
(363, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:03'),
(364, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:03'),
(365, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:04'),
(366, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:04'),
(367, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:04'),
(368, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:04'),
(369, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:05'),
(370, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:05'),
(371, 'ec2021887@edinburghcollege.ac.uk', '2022-12-08 21:19:05'),
(372, 'adrian0809alddl@gmail.com', '2022-12-09 10:20:15'),
(373, 'ec202188755@edinburghcollege.ac.uk', '2022-12-09 10:29:59'),
(374, 'adrian9211ddr@gmail.com', '2022-12-09 10:30:17'),
(375, 'ec202188722@gmail.com', '2022-12-09 10:50:25'),
(376, 'ec202188722@gmail.com', '2022-12-09 10:50:45'),
(377, 'ec202188722@gmail.com', '2022-12-09 10:51:58'),
(378, 'ec202188722@gmail.com', '2022-12-09 10:52:00'),
(379, 'margaritka1231ff@gmail.com', '2022-12-09 10:53:00'),
(380, 'ec2021887dddd@fdf.vp', '2022-12-09 10:55:10'),
(381, 'ec2021887ddrdd@fdf.vp', '2022-12-09 10:55:26'),
(382, 'ec2021887rrerr@gfgf.pl', '2022-12-09 11:00:57'),
(383, 'margaritka1231d@gmail.com', '2022-12-09 11:02:50'),
(384, 'jack.anderson@aol.com', '2022-12-09 11:31:16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` int(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Privileges` char(1) DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `FirstName`, `Surname`, `DOB`, `Privileges`) VALUES
(14, 'admin', 'test1', 'Adrian', 'Nykielaa', '0000-00-00', ''),
(15, 'admin2', 'DcSwt@S%rY^5', 'Margarita', 'Nykiel', '1910-01-10', 'A'),
(16, '3dddfd', 'fdfdf', 'dfdf', 'dfdf', '0000-00-00', 'C'),
(27, 'ggfddd', 'fgfgdd', 'fgfgdddd', 'gfgffdfdd', '0000-00-00', 'C'),
(35, 'fdfd', 'fdfd', 'fdfd', 'fdff', '0000-00-00', 'C'),
(38, 'Last', 'secret', 'Allibaba', 'Thomas', '0000-00-00', 'C'),
(39, 'Lastr', 'secretr', 'Allibabar', 'Thomasr', '0000-00-00', ''),
(40, 'adrian', 'test', 'Adrianhjhj', 'Nykielhjhj', '0000-00-00', ''),
(42, 'Second', 'ssdfdf', 'Dan', 'Tim', '1976-01-03', ''),
(56, 'Last', 'secret', 'Allibaba', 'Thomas', '0000-00-00', ''),
(58, 'First', 'ssdfdffdf', 'Dan', 'Thomas', '0000-00-00', ''),
(59, 'First', 'ssdfdffdf', 'Dan', 'Thomas', '2022-09-15', ''),
(60, 'as', 'as', 'as', 'as', '2015-09-27', ''),
(61, 'as2', 'as2', 'as2', 'as2', '1990-02-11', ''),
(62, 'admin3', 'admin3', 'Adrian', 'N', '1934-01-10', ''),
(64, 'admin5', 'admin5', 'Margarita', 'nykiel', '1938-02-12', ''),
(65, 'admin6', 'admin6', 'Margarita', 'nykiel', '1990-02-12', ''),
(66, 'aass', 'secret', 'Margarita', 'Thomas', '1934-01-10', 'C'),
(70, 'User', 'user', 'User', 'Standard', '2010-01-10', 'C'),
(71, 'admin1', 'admin1', 'admin1', 'admin1', '2022-09-27', 'C'),
(73, 'Mery11', 'Mery11', '', 'Nykiel', '2002-12-31', 'C'),
(74, 'adrian9211', 'adrian9211', 'Adrian', 'Nykiel', '1996-02-07', 'C'),
(75, '3dddfd', 'secret', 'Margarita', 'Thomas', '1978-02-12', 'C'),
(76, 'newuser', 'newuser', 'New', 'Account', '2005-12-29', 'C'),
(77, 'Adrianq', 'Adrianq', 'Adrianq', 'Nykielq', '2022-11-30', 'C'),
(78, 'Jack', 'JackA', 'Jack', 'Anderson', '1986-10-11', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indeksy dla tabeli `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `movies`
--
ALTER TABLE `movies`
  MODIFY `MovieID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
