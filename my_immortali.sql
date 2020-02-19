-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2020 alle 12:41
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_immortali`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `nickname`) VALUES
(1, 'Nicolas Baldassarri', 'Mannaro'),
(2, 'Alessandro Di Francia', 'Alex17'),
(3, 'Marco Liguori', 'Marcolig88'),
(4, 'EmiBo', 'EmiBo'),
(5, 'Manuel', 'Jimmisquab'),
(6, 'Dany_Fiz', 'Fizban'),
(7, 'Matteo Sartori', 'Sagittarius A*'),
(8, 'Eduardo', 'Lord Ed'),
(9, 'Luigi Tramontano', 'Luigiti92'),
(10, 'Stich 07', 'Stich07'),
(11, 'Loris // Jester', 'Jester'),
(12, 'Alice Severi', 'Aradia'),
(13, 'christopher pedenzini', 'Topher'),
(41, 'Fabio', 'F'),
(15, 'Adriano', 'Maledetto'),
(16, 'Andrea Sette', 'Targarien'),
(17, 'roma', 'Roma'),
(18, 'Powerhouse', 'Powerhouse'),
(19, 'Masked', 'Scarymark'),
(20, 'Paolo', 'JohnDeere'),
(21, 'Lo Zio Enzo', '**Zio*Sbam**'),
(22, 'Riccardo', 'Rikkardo'),
(23, 'Civi', 'Civi'),
(51, 'Andrea Golinucci', 'Golo'),
(25, 'Valerio Pavelish', 'Pavelish'),
(26, 'Marco Rai92', 'Rainone92'),
(27, 'Simone Del Giudice', 'Simo'),
(28, 'RaZ1eL', 'Raziel'),
(29, 'Yes_Jeca_Admin', 'Jeca'),
(30, 'Matteo Mariani', 'Assopigliatutto'),
(31, 'Lucio(lordsilver)2.0', 'Lordsilver'),
(32, 'Sax', 'Sax'),
(33, '#sasa#', 'O'' President'),
(34, 'Monkey Man', 'MikeroggerIT'),
(35, 'fanemx', 'Fanemx'),
(36, 'Ago76', 'Ago76'),
(44, 'Giovanni Ficco', 'Jf'),
(38, 'weirdtoad', 'Weirdtoad'),
(39, 'Claudio', 'Raucedine'),
(40, 'Acidflash Uppela', 'Uppela'),
(42, 'Sacha', 'Sushikill'),
(43, 'akkran', 'Akkran'),
(45, 'Bls', 'Tespacco'),
(46, 'Ade (Andrea)', 'Ade2507'),
(47, 'Doom', 'Doom'),
(48, 'vito val.', 'Acido'),
(49, 'Massimiliano Cannarisi', 'varuniteam'),
(50, 'Simo', 'Gbr Mone'),
(52, 'federica perna', 'federicansky'),
(53, 'Mack83', 'Mack83'),
(54, 'Federico Zuin', 'Refedus-two'),
(55, 'Jakkol', 'Jakkol'),
(56, 'Olly92', 'Grimilde'),
(57, 'Francesco', 'Kalthorion'),
(58, 'Edo', 'Edo'),
(59, 'Luigi Curatola', 'LochNesS'),
(60, 'Matteo Diano', 'Diano'),
(61, 'Gasoline Hardcore Petrol ', 'Gasoline '),
(62, 'Claudio', 'EmperorClaudius'),
(63, 'Ihor', 'Wrecking Demon'),
(64, 'Leben', 'Leben'),
(65, 'Leben', 'Leben');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
