-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2020 г., 13:38
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tobgame_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `type` int(50) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enemy_id` int(11) NOT NULL,
  `round_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rounds`
--

CREATE TABLE `rounds` (
  `id` int(11) NOT NULL,
  `status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `max_players` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rounds`
--

INSERT INTO `rounds` (`id`, `status`, `date_start`, `date_end`, `score`, `max_players`, `owner`, `name`) VALUES
(6, 'Wait for players', '15 April 2020 ', '15 April 2020 ', 10000, 25, 1, ''),
(7, 'Wait for players', '15 April 2020 ', '15 April 2020 ', 10000, 25, 1, ''),
(8, 'Wait for players', '15 April 2020 ', '15 April 2020 ', 10000, 25, 1, ''),
(9, 'Wait for players', '15 April 2020 ', '15 April 2020 ', 10000, 25, 1, 'вапвап'),
(10, 'Wait for players', '17 April 2020 ', '17 April 2020 ', 1000, 25, 1, 'Room456');

-- --------------------------------------------------------

--
-- Структура таблицы `round_user`
--

CREATE TABLE `round_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `round_id` int(11) NOT NULL,
  `bricks` int(11) NOT NULL,
  `roof` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `floor_fix` int(11) NOT NULL,
  `shells` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `round_user`
--

INSERT INTO `round_user` (`id`, `user_id`, `round_id`, `bricks`, `roof`, `floor`, `floor_fix`, `shells`) VALUES
(3, 1, 6, 100, 0, 120, 1, 0),
(4, 1, 7, 100, 0, 120, 1, 0),
(5, 1, 8, 100, 0, 120, 1, 0),
(9, 1, 9, 100, 0, 120, 1, 1),
(10, 2, 9, 120, 1, 20, 15, 100),
(11, 1, 10, 100, 0, 125, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `login`, `password`, `role`) VALUES
(1, 'testerer', 'testerer', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user'),
(2, 'testerer2', 'testerer2', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `round_id` (`round_id`),
  ADD KEY `enemy_id` (`enemy_id`);

--
-- Индексы таблицы `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `round_user`
--
ALTER TABLE `round_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `round_id` (`round_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rounds`
--
ALTER TABLE `rounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `round_user`
--
ALTER TABLE `round_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`round_id`) REFERENCES `rounds` (`id`),
  ADD CONSTRAINT `logs_ibfk_3` FOREIGN KEY (`enemy_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `round_user`
--
ALTER TABLE `round_user`
  ADD CONSTRAINT `round_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `round_user_ibfk_2` FOREIGN KEY (`round_id`) REFERENCES `rounds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
