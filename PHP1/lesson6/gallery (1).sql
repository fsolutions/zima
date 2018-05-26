-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2018 г., 17:17
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feed`
--

CREATE TABLE `feed` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feed`
--

INSERT INTO `feed` (`id`, `name`, `text`) VALUES
(0, '', ''),
(0, 'Vladimi', 'Privet kak dela'),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, 'Vladimir', 'poka'),
(126, 'Vladimir', '123'),
(126, 'Vladimir ', 'privet kak dela'),
(120, 'Julia', 'Not bad'),
(120, 'Julia', 'Cool'),
(120, 'Julia', 'Cool'),
(120, 'Julia', 'Cool'),
(120, 'Julia', 'Cool'),
(0, '', ''),
(120, 'Julia', 'Cool 1'),
(120, 'Julia', 'Cool 1'),
(126, 'Vladimir', 'Privet poka'),
(118, 'Privet', 'kak dela'),
(122, 'Anton', 'cool van');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `min` text NOT NULL,
  `max` text NOT NULL,
  `rate` int(11) NOT NULL,
  `been` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`, `min`, `max`, `rate`, `been`) VALUES
(115, 'VW Beetle Ragtop', 45.99, '', 'img/die9.jpg', 78, 1),
(116, 'VW Kafer House', 72.99, '', 'img/die8.jpg', 2, 1),
(117, 'VW Kafer ', 39.99, '', 'img/die7.jpg', 0, 0),
(119, 'VW T2 Westfalia', 43.99, '', 'img/die5.jpg', 38, 1),
(120, 'VW Beetle Been', 49.99, '', 'img/die4.jpg', 35, 0),
(121, 'VW Kafer ', 35.99, '', 'img/die3.jpg', 8, 0),
(122, 'VW T1', 58, '', 'img/die2.jpg', 15, 0),
(123, 'VW Kafer 1938', 35, '', 'img/die12.jpg', 2, 1),
(124, 'VW T3 California', 59, '', 'img/die11.jpg', 2, 1),
(125, 'VW Kafer Pickup', 39, '', 'img/die10.jpg', 0, 0),
(126, 'VW Kafer Post', 49, '', 'img/die1.jpg', 60, 1),
(127, 'VW Golf 5', 34, '', 'img/5a299bc29cb90.jpg', 2, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
