-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 14 2020 г., 14:31
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `insta`
--

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_inst` int(11) UNSIGNED DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `text` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profiles`
--

INSERT INTO `profiles` (`id`, `id_inst`, `username`, `text`, `link`, `created_time`) VALUES
(117, 1547627005, 'beingsalmankhan', 'Logon this is the logo of PRDP, matlab Prem Ratan Dhan Payo. Coming this Diwali', 'https://instagram.com/p/6zeBG2H1oH/', 1440501087),
(118, 23275345, 'carinstagram', 'Novitec Rosso\nfollow @Cars @Cars @Cars @Cars | Photographer @cars.of.munich |', 'https://instagram.com/p/6zay6yBWhr/', 1440499397),
(119, 4890736, 'linkinpark', 'Before / After - Rybnik tonight. #TheHuntingPartyTour', 'https://instagram.com/p/6ze2yyi4eV/', 1440501526),
(120, 7563629, 'sert_mehmet', '#marmaris #dhotel #Turkey', 'https://instagram.com/p/6zS1b4OLoe/', 1440495224),
(121, 194146115, 'jiffpom', 'jiff💙', 'https://instagram.com/p/6zfwHMEXBY/', 1440501996);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
