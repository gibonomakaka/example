-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2017 г., 12:07
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clothes_shop`
--
CREATE DATABASE IF NOT EXISTS `clothes_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clothes_shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Куртки зимние', 1, 1),
(2, 'Куртки демисезонные', 2, 1),
(3, 'Ветровки', 3, 1),
(4, 'Толстовки', 4, 1),
(5, 'Пуховики', 5, 1),
(7, 'Рубашки', 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`, `sex`) VALUES
(35, 'Куртка зимняя', 1, 2343847, 1000, 1, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 1, 1, 1, 'женская'),
(36, 'Куртка демисезонная', 2, 2028027, 760, 1, 'Caprice', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 1, 1, 'мужская'),
(37, 'Куртка демисезонная', 2, 2019487, 1000, 1, 'Camel', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 1, 1, 'женская'),
(38, 'Куртка демисезонная', 2, 1953212, 900, 0, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 0, 1, 'мужская'),
(39, 'Куртка зимняя', 1, 1602042, 1100, 1, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.1.2 кг / черный', 1, 0, 1, 'мужская'),
(40, 'Ветровка', 3, 2028367, 430, 1, 'Caprice', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 1, 1, 'женская'),
(41, 'Ветровка', 3, 1129365, 780, 1, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.обеспечивается sAmoled экраном с функцией оптимизации под отображаемое изображение и окружение. Яркий 10.5” экран в ультратонком корпусе весом 467 г порадует вас высоким уровнем портативности. Работа станет проще вместе с Hancom Office и удаленным доступом к вашему ПК. E-Meeting и WebEx – отличные помощники для проведения встреч, когда вы находитесь вне офиса. Надежно храните ваши данные благодаря сканеру отпечатка пальцев.', 1, 1, 1, 'женская'),
(42, 'Ветровка', 3, 1128670, 640, 1, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.Wi-Fi 802.11 a/b/g/n/ac / основная камера 8 Мп, фронтальная 2.1 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / 294 г / белый', 0, 0, 1, 'мужская'),
(43, 'Толстовка', 4, 683364, 310, 1, 'Caprice', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 0, 1, 'женская'),
(44, 'Толстовка', 4, 355025, 250, 0, 'Caprice', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 1, 0, 1, 'женская'),
(45, 'Пуховик', 5, 1563832, 2000, 1, 'Caprice', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 0, 0, 1, 'мужская'),
(46, 'Пуховик', 5, 7321210, 1800, 1, 'Braggart', '/css/images/big1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac lorem sit amet erat venenatis porta. Pellentesque ultricies neque nec eros fringilla, vitae euismod massa posuere. Nullam volutpat, nisl efficitur convallis bibendum, turpis nunc ullamcorper metus, a iaculis sapien sem a est. Maecenas ac vestibulum ex. Nullam interdum quis mi ut venenatis.', 1, 0, 1, 'мужская');

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(2, 'maxud', '12345678900', 'привезти в субботу', 6, '2017-01-19 08:37:59', '{"34":2,"35":1,"44":1,"46":1}', 1),
(3, 'Максим', '0688892189', '', 6, '2017-02-06 11:10:54', '{"43":1,"34":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', ''),
(4, 'Виктор', 'viktor@gmail.com', '222222', ''),
(5, 'Сергей', 'serg@mail.com', '111111', ''),
(6, 'Максим', 'ciremunsi@gmail.com', '777777', 'admin'),
(7, 'Захар', 'zahar@gmail.com', '777777', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
