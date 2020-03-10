-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 08 2020 г., 18:41
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practdbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `author` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `title`, `author`, `text`) VALUES
(46, 'Hello World      ', 'Fraiy', 'здарова мир!'),
(47, 'Hello World      ', 'Nero', 'Чё как!?'),
(48, 'Тёмная материя      ', 'Nero', 'наука крутая');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `author` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `text`, `author`) VALUES
(4, 'Hello World', '2020-03-07', 'Goodbye World!', 'Fraiy'),
(27, 'МИД Китая не считает нужным извиняться за распространение коронавируса', '2020-03-07', 'Представитель МИД Китая Чжао Лицзянь заявил, что в стране не видят оснований для каких-либо оправданий за распространение в мире нового коронавируса, впервые обнаруженного в китайском городе Ухань.', 'Nero'),
(37, 'Тёмная материя', '2020-03-07', 'Тёмная мате́рия в астрономии и космологии, а также в теоретической физике — гипотетическая форма материи, не участвующая в электромагнитном взаимодействии и поэтому недоступная прямому наблюдению. Составляет порядка четверти массы-энергии Вселенной и проявляется только в гравитационном взаимодействии. Понятие тёмной материи введеноПерейти к разделу «#История» для теоретического объяснения проблемы скрытой массы в эффектах аномально высокой скорости вращения внешних областей галактик и гравитационного линзирования (в них задействовано вещество, масса которого намного превышает массу обычной видимой материи); среди прочих предложенныхПерейти к разделу «#Альтернативные теории» оно наиболее удовлетворительно.  Состав и природа тёмной материи на настоящий момент неизвестны. В рамках общепринятой космологической модели наиболее вероятной считается модель холодной тёмной материиПерейти к разделу «#Холодная тёмная материя». Наиболее вероятные кандидаты на роль частиц тёмной материи — вимпыПерейти к разделу «#Суперсимметричные частицы». Несмотря на активные поиски, экспериментально они пока не обнаруженыПерейти к разделу «#Физическое обнаружение гипотетических частиц тёмной материи».', 'Fraiy');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) NOT NULL,
  `Year` date NOT NULL,
  `Project` text CHARACTER SET utf8mb4 NOT NULL,
  `Description` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `Year`, `Project`, `Description`) VALUES
(45, '2020-03-12', 'umbrellartwet', 'academy'),
(46, '2020-03-12', 'Р.Ы.Б.Аweqqwe', 'sadadasda'),
(47, '2020-03-12', 'мышка', 'фвыфыfdsf');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` text CHARACTER SET utf8 NOT NULL,
  `email` text NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `role` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `role`) VALUES
(15, 'admin', 'admin@admin.com', '461175429561a394ce2c22b3ec879389', 'admin'),
(16, 'Fraiy', 'Fraiy@Fraiy.com', 'f0866ecec48b263d2c297fc65c4a8bad', 'admin'),
(18, 'user', 'user@user.com', '4489feb1f748dfc2eb799284951819e4', 'user'),
(20, 'Nero', 'Nero@Nero.com', 'f0866ecec48b263d2c297fc65c4a8bad', 'user'),
(23, 'Kate', 'Kate@gmail.com', '6a15b35e7494cc374c96f7154c259994', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
