-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2024-03-28 17:48:17
-- 服务器版本： 5.7.23
-- PHP 版本： 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `school`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) COLLATE utf8_bin NOT NULL,
  `apassword` varchar(20) COLLATE utf8_bin NOT NULL,
  `aphone` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`adminid`, `aname`, `apassword`, `aphone`) VALUES
(1, 'admin', 'admin', '19912345678'),
(2, 'admin2', 'admin2', '17798765432');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `uemail` varchar(32) CHARACTER SET utf8 NOT NULL,
  `upassword` varchar(32) CHARACTER SET utf8 NOT NULL,
  `uname` varchar(32) CHARACTER SET utf8 NOT NULL,
  `uphone` varchar(32) CHARACTER SET utf8 NOT NULL,
  `uweixin` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `uaddress` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`userid`, `uemail`, `upassword`, `uname`, `uphone`, `uweixin`, `uaddress`) VALUES
(1, '23244421@qq.com', '123456', 'zy', '4758885338', 'zhouyouzy', '广西大学'),
(2, 'sdq@qq.com', '123456', '端午期间', '4758885338', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
