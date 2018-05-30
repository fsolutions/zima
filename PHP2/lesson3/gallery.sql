-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2018 г., 13:17
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
-- Структура таблицы `pics`
--

CREATE TABLE `pics` (
  `id` int(10) UNSIGNED NOT NULL,
  `min` text NOT NULL,
  `max` text NOT NULL,
  `size` double NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pics`
--

INSERT INTO `pics` (`id`, `min`, `max`, `size`, `rate`) VALUES
(115, '', 'img/die9.jpg', 115021, 6),
(116, '', 'img/die8.jpg', 70594, 0),
(117, '', 'img/die7.jpg', 13582, 0),
(118, '', 'img/die6.jpg', 31260, 33),
(119, '', 'img/die5.jpg', 168587, 0),
(120, '', 'img/die4.jpg', 64544, 13),
(121, '', 'img/die3.jpg', 115637, 0),
(122, '', 'img/die2.jpg', 47400, 0),
(123, '', 'img/die12.jpg', 25921, 0),
(124, '', 'img/die11.jpg', 19098, 0),
(125, '', 'img/die10.jpg', 32778, 0),
(126, '', 'img/die1.jpg', 78433, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
