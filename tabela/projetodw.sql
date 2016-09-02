-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2016 at 02:41 AM
-- Server version: 5.5.50-0+deb8u1
-- PHP Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetodw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `body` text NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `name`, `email`, `url`) VALUES
(1, 'Exemplo de texto123456', 'dyegostan', 'dyegostan@gmail.com', 'dyegostan.com.br');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ultimo_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `contador` mediumint(9) NOT NULL DEFAULT '0',
  `email` varchar(40) NOT NULL DEFAULT '0',
  `ban` int(11) NOT NULL DEFAULT '0',
  `ultimo_ip` varchar(100) NOT NULL DEFAULT '0',
  `atual_ip` varchar(100) NOT NULL DEFAULT '0.0.0.0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `registro` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `apelido` varchar(32) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `ultimo_login`, `contador`, `email`, `ban`, `ultimo_ip`, `atual_ip`, `level`, `registro`, `apelido`, `hash`) VALUES
(1, 'test', 'test1', '2016-09-02 00:56:08', 29, 'dyegostan@gmail.com', 0, '192.168.1.1', '0.0.0.0', 1, '0000-00-00 00:00:00', 'dyegostan', '7f67432502437249a1ef3e1574d086a4'),
(2, 'joao', '123', '2016-08-29 00:42:42', 0, '', 0, '0', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(4, 'semperna', '123', '0000-00-00 00:00:00', 0, '0', 0, '0', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(5, 'dyego', '123', '2016-09-02 00:55:56', 8, 'dyego97@hotmail.com', 0, '192.168.1.1', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(6, 'sembraÃ§o', 'asd', '2016-08-29 01:33:52', 1, '0', 0, '192.168.1.189', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(7, 'zangief', 'grab', '2016-08-29 01:40:33', 1, '0', 0, '192.168.1.189', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(9, 'Rashid', 'rashido', '0000-00-00 00:00:00', 0, '0', 0, '0', '0.0.0.0', 0, '2016-08-29 05:45:59', '', ''),
(10, 'romario', '123', '2016-08-29 07:15:16', 1, '0', 0, '179.68.70.102', '0.0.0.0', 0, '2016-08-29 11:12:42', '', ''),
(12, 'Suelando', 'fone1503', '2016-09-01 21:27:49', 4, 'suelandoalves@live.com', 0, '179.177.56.236', '0.0.0.0', 0, '2016-08-29 21:53:32', '', ''),
(16, 'Thrall', '123', '0000-00-00 00:00:00', 0, 'doomhammer@wow.com', 0, '0', '0.0.0.0', 0, '2016-09-02 03:57:17', '', ''),
(17, 'khadgar', '123', '0000-00-00 00:00:00', 0, 'mage@foda.com', 0, '0', '0.0.0.0', 0, '2016-09-02 03:57:44', '', ''),
(19, 'rossi', 'huj', '0000-00-00 00:00:00', 0, '0', 0, '0', '0.0.0.0', 0, '0000-00-00 00:00:00', '', ''),
(20, 'guile', 'asd', '0000-00-00 00:00:00', 0, 'asd@asd', 0, '0', '0.0.0.0', 1, '0000-00-00 00:00:00', 'guillotine', ''),
(21, 'ryu', '', '0000-00-00 00:00:00', 0, '0', 0, '0', '0.0.0.0', 0, '0000-00-00 00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
