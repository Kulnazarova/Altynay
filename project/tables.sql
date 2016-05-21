-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 13:12
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tables`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
`ID` int(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `IMAGE` varchar(300) NOT NULL,
  `ABOUT` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `coffee`
--

INSERT INTO `coffee` (`ID`, `NAME`, `TYPE`, `IMAGE`, `ABOUT`) VALUES
(1, 'ESPRESSO', 'COFFEE', 'espress.png', 'The most " fast" , a rich and invigorating drink of coffee. The risk of being easily broken gives it a special delicacy and exclusivity. Just put your trust in the skill of our baristas'),
(4, 'AMERICANO', 'COFFEE', 'amer.png', 'Saturated and invigorating drink can be diluted with hot water in any proportion.From 60 to 120 ml of hot water - and it turns out the real American discovery . Less strong and concentrated, but still the same taste .');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`ID` int(10) NOT NULL,
  `IMAGE` varchar(300) NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`ID`, `IMAGE`, `NAME`) VALUES
(1, 'tea2.png', 'tea2'),
(2, 'tea4.png', 'tea4'),
(3, 'tea.png', 'tea'),
(4, 'tea1.png', 'tea1'),
(5, 'tea6.png', 'tea6'),
(6, 'tea3.png', 'tea3');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`ID`, `NAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN', '888'),
(10, 'Altynay', 'altynay', '888'),
(11, 'Altynay', 'aa', '88'),
(12, 'yasinn', 'yasin', '7878'),
(13, 'altynay', 'assd', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
