-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 13 2016 г., 01:29
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mvc_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1250 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'Patriarch Kirill (left) and Pope Francis embrace\r\nPope in historic Russia church talks', '2016-02-12 23:36:03', 'Pope Francis and Russian Orthodox Patriarch Kirill have called for restored Christian unity between the two churches at historic talks in Cuba.', 'Pope Francis and Russian Orthodox Patriarch Kirill have called for restored Christian unity between the two churches at historic talks in Cuba.\r\nThe meeting was the first between a Pope and a Russian Church head since the Western and Eastern branches of Christianity split in the 11th Century.\r\nIn a joint declaration, they also urged the world to protect Christians from persecution in the Middle East.\r\nThe two-hour talks were held at Havana airport.\r\nThey took place during Pope Francis''s stopover on his way to Mexico. Patriarch Kirill is visiting Cuba, Brazil and Paraguay.\r\n''Churches ravaged''\r\nThe two leaders embraced and kissed each other at the start of the meeting on Friday.\r\n"I''m happy to greet you', 'Panibrat', '/images/1.jpg', 'sport?'),
(2, 'Patriarch Kirill (left) and Pope Francis embrace\r\nPope in historic Russia church talks', '2016-02-12 23:36:23', 'Pope Francis and Russian Orthodox Patriarch Kirill have called for restored Christian unity between the two churches at historic talks in Cuba.', 'Pope Francis and Russian Orthodox Patriarch Kirill have called for restored Christian unity between the two churches at historic talks in Cuba.\r\nThe meeting was the first between a Pope and a Russian Church head since the Western and Eastern branches of Christianity split in the 11th Century.\r\nIn a joint declaration, they also urged the world to protect Christians from persecution in the Middle East.\r\nThe two-hour talks were held at Havana airport.\r\nThey took place during Pope Francis''s stopover on his way to Mexico. Patriarch Kirill is visiting Cuba, Brazil and Paraguay.\r\n''Churches ravaged''\r\nThe two leaders embraced and kissed each other at the start of the meeting on Friday.\r\n"I''m happy to greet you', 'Panibrat', '/images/1.jpg', 'sport?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
