-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2012 at 09:39 PM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Телефоны'),
(2, 0, 'Планшеты'),
(3, 1, 'Телефоны  Samsung'),
(4, 1, 'Телефоны Apple'),
(5, 2, 'Планшеты Apple'),
(9, 2, 'Планшеты Acer'),
(12, 2, 'Планшеты Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_payment` datetime DEFAULT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date_created`, `date_payment`, `date_modification`, `status`, `comment`, `user_ip`) VALUES
(1, 23, '2012-01-08 11:46:15', NULL, '2012-01-22 15:58:12', 1, 'id пользователя: 23<br />\n					Имя: qwe<br />\n					Тел: qwe<br />\n					Адрес: qwewe', '127.0.0.1'),
(2, 27, '2012-01-08 21:33:37', '2012-01-21 00:00:00', '2012-01-22 15:58:06', 1, 'id пользователя: 27<br />\n					Имя: sdf<br />\n					Тел: fg<br />\n					Адрес: sdf', '127.0.0.1'),
(3, 24, '2012-01-22 13:50:23', '2012-01-22 00:00:00', '2012-01-22 10:19:23', 1, 'id пользователя: 24<br />\n					Имя: sdf<br />\n					Тел: gg<br />\n					Адрес: hhddfgdfg', '127.0.0.1'),
(4, 24, '2012-02-13 22:04:23', NULL, '2012-02-13 18:04:24', 0, 'id пользователя: 24<br />\n					Имя: sdfsd<br />\n					Тел: 3324234<br />\n					Адрес: gdfgdfg fgdf dfgdf ', '127.0.0.1'),
(5, 24, '2012-02-13 22:12:20', NULL, '2012-02-13 18:12:20', 0, 'id пользователя: 24<br />\n					Имя: sdfsd<br />\n					Тел: 3324234<br />\n					Адрес: gdfgdfg fgdf dfgdf ', '127.0.0.1'),
(6, 24, '2012-02-18 15:53:53', NULL, '2012-02-18 11:53:53', 0, 'id пользователя: 24<br />\n					Имя: sdfsd<br />\n					Тел: 3324234<br />\n					Адрес: gdfgdfg fgdf dfgdf ', '127.0.0.1'),
(7, 24, '2012-02-18 20:58:14', NULL, '2012-02-18 16:58:14', 0, 'id пользователя: 24<br />\n					Имя: sdfsd<br />\n					Тел: 3324234<br />\n					Адрес: gdfgdfg fgdf dfgdf ', '127.0.0.1'),
(8, 24, '2012-02-19 12:34:00', NULL, '2012-02-19 08:34:00', 0, 'id пользователя: 24<br />\n					Имя: sdfsd<br />\n					Тел: 3324234<br />\n					Адрес: gdfgdfg fgdf dfgdf ', '127.0.0.1'),
(9, 31, '2012-02-21 21:13:59', NULL, '2012-02-21 17:13:59', 0, 'id пользователя: 31<br />\n					Имя: dfdf<br />\n					Тел: gggg<br />\n					Адрес: dgdfgdfgdfgdfgdfg', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 3, 'GT-C3560', '                        <p>Закругленные углы и окантовка  вносят стильный штрих в минималистичный дизайн телефона. Металлическая отделка смотрится  элегантно и современно. А благодаря небольшим размерам С3560 удобно лежит в руке и легко помещается в кармане.</p>\n<br />\n\n<p>Спецификации:</p>\n<ul><li>Стандарты сети GSM и EDGE : GSM (850/900/1800/1900)</li><li>Стандарт сети 3G : N/A</li><li>Стандарт сети CDMA : N/A</li><li>TD-SCDMA Band : N/A</li></ul>\n                    ', 3000, '1.png', 1),
(3, 3, 'GT-E2600', '<p>Тонкий и изящный дизайн телефона E2600? широкий экран и пользовательский интерфейс Paragon UX обеспечивают удобство и комфорт в использовании.  Телефон оснащен интуитивно-понятным пользовательским интерфейсом.  </p>\n<br />\n<p>Спецификации:</p>\n<ul><li>850 / 900 / 1800 / 1900 МГц GSM &amp; EDGE Band</li><li>GPRS Network&amp;Data: 850 / 900 / 1800 / 1900</li><li>EDGE Network&amp;Data: 850 / 900 / 1800 / 1900</li><li>фирменная</li><li>Интернет браузерr ( NetFront 4.2)</li><li>JAVA™ SUN CLDC HotSpot Implementation 1.1 (MIDP 2.0) Platform</li><li>SAR 0,45 Вт./кг.</li></ul>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2600ZKASER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2600ZKASER</a>', 5000, '3.png', 1),
(2, 3, 'S5570 Galaxy mini', 'Платформа\n850/900/1800/1900 МГц\nДиапазон 900/2100 МГц\nAndroid 2.2 OS\nИнтернет браузер (Android Browser)\nФизические характеристики\nВес трубки 106,6 г.\nРазмеры трубки: 110,4 x 60,6 x 12,1 мм', 7000, '2.png', 1),
(4, 3, 'E2530 La Fleur', '                        <ul><li>850/900/1800/1900 МГц</li><li>GPRS класс 12</li><li>EDGE Class12(только RX)</li><li>Proprietary (MMP) OS</li><li>Интернет браузер</li><li>MIDP 2,1 / CLDC 1.1</li></ul>\n\n<ul><li>Вес трубки 86 г.</li><li>Размеры трубки: 94.4 x 47.2 x 17.4 мм</li></ul>\n\n<ul><li>Стандартная батарея: до 800 мАч</li><li>До 680 мин. в режиме разговора</li></ul>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2530SRFSER">\nhttp://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2530SRFSER</a>\n                    ', 6000, '4.png', 1),
(5, 3, 'S3350 Chat 335', '<p>Samsung Ch@t 335 — самый тонкий QWERTY-телефон на современном рынке, чья толщина составляет всего 11,9&nbsp;мм. Обтекаемый корпус с хромированным покрытием придает модели изысканный классический вид. 2,4-дюймовый LQVGA дисплей идеально подходит для просмотра снимков и чтения длинных сообщений.</p>\n<br />\n<p>Благодаря новой, улучшенной QWERTY-клавиатуре набор текста становится еще более быстрым и удобным, как при печати на ПК. Есть возможность настраивать горячие клавиши для часто используемых приложений (например, A для будильника и т.п.).</p>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-S3350HKASER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-S3350HKASER</a>', 10000, '5.png', 1),
(6, 3, 'S5380 La Fleur Wave Y', 'Стандарты сети 850/900/1800/1900MHz GSM&EDGE Band\nСтандарты сети: 900/2100МГц 3G\nПоддерживаемые 3G: GPRS Network&Data :850/900/1800/1900 (Slave)\nEDGE Network&Data: стандарты сетей: 850/900/1800/1900 (Master)\nNetwork&Data (3G): HSDPA 7,2Мбит/с.\nBada 2.0\nБраузер Dolfin Browser 3.0\nПлатформа SUN CLDC 1.1\nЗначение SAR: 0,797мВт./г.\n', 12000, '6.png', 1),
(7, 3, 'I9001 Galaxy S Plus', 'Платформа\n850 / 900 / 1800 / 1900 МГц\nGPRS Class12\nEDGE Class12\nИнтернет браузер (Android Browser)\nДисплей\nРазрешение дисплея 480 x 800 WVGA\n<br />\n<br />\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-smart/GT-I9001HKDSER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-smart/GT-I9001HKDSER</a>', 11000, '7.png', 1),
(8, 3, 'I8350 Omnia W', 'Windows Phone 7.5 Mango\nGSM&EDGE 850 / 900 / 1,800 / 1,900 МГц\n3G 900 / 2,100 MГц\nGPRS: Класс 12\nEDGE: Класс 12\nHSDPA 14.4 / HSUPA 5.76 Мбит/с\nInternet Explorer 9\n', 15000, '8.png', 1),
(11, 4, 'iPhone 3GS', 'Широкоформатный дисплей Multi-Touch с диагональю 3,5 дюйма\nРазрешение 480 x 320 пикселей (163 пикселя/дюйм)\nОлеофобное покрытие, препятствующее появлению отпечатков пальцев\nПоддержка одновременного отображения нескольких языков и наборов символов\n<br /><br />\n<a href="http://www.apple.com/ru/iphone/iphone-3gs/specs.html">http://www.apple.com/ru/iphone/iphone-3gs/specs.html</a>', 20000, '11.PNG', 1),
(12, 4, 'iPhone 4S', '                                                Поддержка международных сетей\nUMTS/HSDPA/HSUPA (850, 900, 1900, 2100 МГц); \nGSM/EDGE (850, 900, 1800, 1900 МГц)\nCDMA EV-DO Rev. A (800, 1900 МГц)3\n802.11b/g/n Wi-Fi (802.11n только 2,4 ГГц)\nБеспроводная технология Bluetooth 4.0\n<br /><br />\n<a href="http://www.apple.com/ru/iphone/specs.html">http://www.apple.com/ru/iphone/specs.html</a>\n                    \n                    ', 25000, '12.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `order_id`, `product_id`, `price`, `amount`) VALUES
(2, 1, 2, 13, 1),
(3, 2, 2, 13, 1),
(4, 3, 2, 13, 1),
(5, 4, 4, 13, 1),
(6, 5, 7, 16, 1),
(7, 6, 4, 6000, 1),
(8, 7, 1, 12, 1),
(9, 8, 1, 3000, 1),
(10, 9, 1, 3000, 2),
(11, 9, 7, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `name`, `phone`, `adress`) VALUES
(13, 'fdfdf', '4297f44b13955235245b2497399d7a93', '', '', ''),
(14, 'undefined', '5e543256c480ac577d30f76f9120eb74', '', '', ''),
(15, 'ggggg', '4297f44b13955235245b2497399d7a93', '', '', ''),
(16, 'vvvv', '4297f44b13955235245b2497399d7a93', '', '', ''),
(17, '<script>alert(''1'')</script>', '4297f44b13955235245b2497399d7a93', '', '', ''),
(18, '&lt;script&gt;alert(''1d2'')&lt;/script&gt;', '4297f44b13955235245b2497399d7a93', '', '', ''),
(19, 'fghfgh', '4297f44b13955235245b2497399d7a93', '', '', ''),
(20, 'sdfsdf', '4297f44b13955235245b2497399d7a93', '', '', ''),
(21, 'ggggggg3', '4297f44b13955235245b2497399d7a93', '', '', ''),
(22, 'vvxcvxcv', '4297f44b13955235245b2497399d7a93', '', '', ''),
(23, 'qwe', 'efe6398127928f1b2e9ef3207fb82663', '', '', ''),
(24, 'mrkwon@yandex.ru', '4297f44b13955235245b2497399d7a93', 'sdfsd', '3324234', 'gdfgdfg fgdf dfgdf '),
(25, 'mrkwon2@yandex.ru', '4297f44b13955235245b2497399d7a93', '', '', ''),
(26, 'fsdfsdf', '4297f44b13955235245b2497399d7a93', 'fsfsf', 'fsdfggggggg', 'gdfgdgggssss'),
(27, 'asd@asd.ru', '4297f44b13955235245b2497399d7a93', 'sdf', 'fg', 'sdf'),
(28, 'zxc', '4297f44b13955235245b2497399d7a93', '1', '2', '3'),
(29, 'q123123123', '4297f44b13955235245b2497399d7a93', '', '', ''),
(30, 'fdfdsf', '4297f44b13955235245b2497399d7a93', '', '', ''),
(31, 'fffgfg', '4297f44b13955235245b2497399d7a93', 'dfdf', 'gggg', 'dgdfgdfgdfgdfgdfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
