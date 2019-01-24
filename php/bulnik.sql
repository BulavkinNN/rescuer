-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Січ 24 2019 р., 15:47
-- Версія сервера: 10.1.37-MariaDB-2.cba
-- Версія PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `bulnik`
--

-- --------------------------------------------------------

--
-- Структура таблиці `history_repair`
--

CREATE TABLE `history_repair` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `machine` text NOT NULL,
  `problem` varchar(200) NOT NULL,
  `cause` varchar(300) NOT NULL,
  `decision` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='history of all repair machines';

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `history_repair`
--
ALTER TABLE `history_repair`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
