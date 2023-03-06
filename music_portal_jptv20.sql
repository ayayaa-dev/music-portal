-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 27 2023 г., 08:51
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `music_portal_jptv20`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`, `picture`, `release_date`, `artist_id`) VALUES
(1, 'Am', 'null', '2013-09-09', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `artists`
--

INSERT INTO `artists` (`id`, `name`, `picture`, `description`) VALUES
(1, 'Arctic Monkeys', 'null', 'Arctic Monkeys are an English rock band formed in Sheffield in 2002. The group consists of Alex Turner (lead vocals, guitar, keyboards), Jamie Cook (guitar, keyboards), Nick O\'Malley (bass guitar, backing vocals), and Matt Helders (drums, backing vocals).');

-- --------------------------------------------------------

--
-- Структура таблицы `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `time`, `album_id`) VALUES
(1, 'Do I Wanna Know?', '4:31', 1),
(2, 'R U Mine?', '3:21', 1),
(3, 'One for the Road\"', '3:26', 1),
(4, 'Arabella', '3:27', 1),
(5, 'I Want It All', '3:04', 1),
(6, 'No.1 Party Anthem', '4:03', 1),
(7, 'Mad Sounds', '3:35', 1),
(8, 'Fireside', '3:01', 1),
(9, 'Why\'d You Only Call Me When You\'re High?', '2:41', 1),
(10, 'Snap Out of It', '3:12', 1),
(11, 'Knee Socks', '4:17', 1),
(12, 'I Wanna Be Yours', '3:04', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `role`) VALUES
(1, 'admin@test.com', 'admin', 'admin', 'admin'),
(2, 'user@test.com', 'user', 'user', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_album_artist` (`artist_id`);

--
-- Индексы таблицы `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_track_album` (`album_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `FK_album_artist` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

--
-- Ограничения внешнего ключа таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `FK_track_album` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
