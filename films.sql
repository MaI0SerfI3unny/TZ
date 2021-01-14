-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Січ 14 2021 р., 17:22
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `films`
--

-- --------------------------------------------------------

--
-- Структура таблиці `films`
--

CREATE TABLE `films` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(100) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `actors` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `films`
--

INSERT INTO `films` (`id`, `name`, `year`, `format`, `actors`) VALUES
(681, 'Blazing Saddles', 1968, 'DVD', 'Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith'),
(682, 'Casablanca', 1970, 'DVD', 'Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
(684, 'Butch Cassidy and the Sundance Kid', 1950, 'VHS', 'James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
(685, 'The Sting', 2007, 'VHS', 'Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `films`
--
ALTER TABLE `films`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=770;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
