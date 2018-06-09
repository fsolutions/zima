-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2018 г., 13:40
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
-- Структура таблицы `buy`
--

CREATE TABLE `buy` (
  `count` int(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `col` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buy`
--

INSERT INTO `buy` (`count`, `number`, `login`, `name`, `id`, `col`, `first_name`, `last_name`, `email`, `phone`, `date`) VALUES
(16, '1', 'zima2', 'VW T1', '122', 1, '', '', '', '', '05.14.18'),
(17, '1', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(18, '1', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(19, '2', 'zima2', 'VW T1', '122', 1, '', '', '', '', '05.14.18'),
(20, '2', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(21, '2', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(22, '3', 'zima2', 'VW T1', '122', 1, '', '', '', '', '05.14.18'),
(23, '3', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(24, '3', 'zima2', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(25, '4', 'zima', 'VW Kafer Pickup', '125', 1, '', '', '', '', '05.14.18'),
(26, '4', 'zima', 'VW Kafer Pickup', '125', 1, '', '', '', '', '05.14.18'),
(27, '4', 'zima', 'VW T3 California', '124', 1, '', '', '', '', '05.14.18'),
(28, '5', '400', 'VW Beetle Been', '120', 1, '', '', '', '', '05.14.18'),
(29, '6', '930', 'VW Kafer 1938', '123', 1, '', '', '', '', '05.14.18'),
(30, '7', '972', 'VW T1', '122', 1, '', '', '', '', '05.14.18'),
(31, '7', '972', 'VW Kafer ', '121', 1, '', '', '', '', '05.14.18'),
(32, '8', '551', 'VW Beetle Been', '120', 1, '', '', '', '', '05.14.18'),
(33, '8', '551', 'VW T3 California', '124', 1, '', '', '', '', '05.14.18'),
(34, '8', '551', 'VW Kafer ', '117', 1, '', '', '', '', '05.14.18'),
(35, '9', '234', 'VW Kafer 1938', '123', 1, '', '', '', '', '05.14.18'),
(36, '9', '234', 'VW Kafer ', '121', 1, '', '', '', '', '05.14.18'),
(37, '10', '219', 'VW Beetle Ragtop', '115', 1, '', '', '', '', '05.14.18'),
(38, '10', '234', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(39, '10', '234', 'VW T2 Westfalia', '119', 1, 'Vladimir', 'vladimirovich', 'irbis78@yandex.ru', '9167797676', '05.14.18'),
(40, '10', '234', 'VW T2 Westfalia', '119', 1, '', '', '', '', '05.14.18'),
(41, '10', 'zima', 'VW Beetle Been', '120', 1, '', '', '', '', '05.14.18');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `login` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `price` float NOT NULL,
  `col` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`login`, `name`, `id`, `price`, `col`) VALUES
('426', 'VW Beetle Been', 120, 49.99, 1),
('717', 'VW Kafer 1938', 123, 35, 1),
('357', 'VW T1', 122, 58, 1);

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
(122, 'Anton', 'cool van'),
(126, 'Мухаббат', 'Привет'),
(127, 'VW Fun', 'Very best'),
(126, 'dokdred', 'Хамаши с кадыками'),
(0, '4444', '99999');

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
(115, 'VW Beetle Ragtop', 45.99, '', 'img/die9.jpg', 128, 0),
(116, 'VW Kafer House', 72.99, '', 'img/die8.jpg', 2, 0),
(117, 'VW Kafer ', 39.99, '', 'img/die7.jpg', 14, 0),
(119, 'VW T2 Westfalia', 43.99, '', 'img/die5.jpg', 114, 0),
(120, 'VW Beetle Been', 49.99, '', 'img/die4.jpg', 83, 0),
(121, 'VW Kafer ', 35.99, '', 'img/die3.jpg', 32, -1),
(122, 'VW T1', 58, '', 'img/die2.jpg', 75, -1),
(123, 'VW Kafer 1938', 35, '', 'img/die12.jpg', 34, 0),
(124, 'VW T3 California', 59, '', 'img/die11.jpg', 56, 0),
(125, 'VW Kafer Pickup', 39, '', 'img/die10.jpg', 52, 1),
(126, 'VW Kafer Post', 49, '', 'img/die1.jpg', 190, 0),
(127, 'VW Golf 5', 34, '', 'img/5a299bc29cb90.jpg', 12, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(30) NOT NULL,
  `admin` int(1) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `admin`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
('', 0, '', '', '', '', ''),
('4444', 0, '', '', '', '33333', '0'),
('igorgo271', 0, 'Vladimir', 'vladimirovich', 'irbis78@yandex.ru', '', '9167797676'),
('irbis78', 0, 'Vladimir', 'vladimirovich', 'irbis78@yandex.ru', '14129092', '2147483647'),
('irbis78@ya.ru', 0, 'Vladimir', 'vladimirovich', 'irbis78@yandex.ru', '14129092', '9167797676'),
('zima', 0, 'Vladimir', 'vladimirovich', '', '14129092', '0'),
('zima2', 1, 'Vladimir', 'vladimirovich', 'irbis78@yandex.ru', '1', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`count`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`(10));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buy`
--
ALTER TABLE `buy`
  MODIFY `count` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
