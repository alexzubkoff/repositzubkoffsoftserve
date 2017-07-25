-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 25 2017 г., 14:52
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zubkov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Pets`
--

CREATE TABLE IF NOT EXISTS `Pets` (
  `pet_id` int(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(255) NOT NULL,
  `fluffiness` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Pets`
--

INSERT INTO `Pets` (`pet_id`, `type`, `name`, `color`, `price`, `fluffiness`) VALUES
(1, 'Dog', 'Jack', 'grey', 100, 0),
(2, 'Hamster', 'Hamster', 'white', 5, 1),
(3, 'Cat', 'Lisa', 'white', 10, 1),
(4, 'Dog', 'Laika', 'black', 150, 0),
(5, 'Cat', 'Luisa', 'black', 13, 1),
(6, 'Hamster', 'Hamster', 'brown', 7, 1),
(7, 'Cat', 'LuLu', 'black', 130, 1),
(8, 'Cat', 'Barsik', 'grey', 100, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
