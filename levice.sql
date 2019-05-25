-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3310
-- Čas generovania: So 16.Feb 2019, 08:13
-- Verzia serveru: 5.5.59-MariaDB-1ubuntu0.14.04.1
-- Verzia PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `vetvm23a`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `levice`
--

CREATE TABLE `levice` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `photo` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `levice`
--

INSERT INTO `levice` (`id`, `time`, `comment`, `photo`) VALUES
(1, '2015-11-05 14:51:41', 'Stará nemocnica, 90-te roky.', 'levice1'),
(2, '2015-12-05 14:51:41', '', 'levice2'),
(3, '2015-11-05 14:51:45', '', 'levice3'),
(4, '2015-11-05 14:51:45', '', 'levice4'),
(5, '2014-11-05 14:54:07', 'Námestie Šoltésovej, 1992.', 'levice5'),
(6, '2014-11-05 14:54:07', '', 'levice6'),
(7, '2014-11-05 14:57:23', '', 'levice7'),
(8, '2015-04-05 13:57:23', '', 'levice8'),
(9, '2015-05-05 13:59:22', '', 'levice9'),
(10, '2015-12-05 14:59:22', '', 'levice10'),
(11, '2016-01-02 14:45:49', '', 'levice11'),
(12, '2016-01-07 22:06:37', '', 'levice12');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `levice`
--
ALTER TABLE `levice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `levice`
--
ALTER TABLE `levice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
