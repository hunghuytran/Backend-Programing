-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 05 feb 2015 kl 11:52
-- Serverversion: 5.5.41
-- PHP-version: 5.4.36-0+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `johnny`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `produkter2015`
--

CREATE TABLE IF NOT EXISTS `produkter2015` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produkt` varchar(40) NOT NULL,
  `beskrivning` varchar(400) NOT NULL,
  `pris` decimal(10,2) DEFAULT NULL,
  `antal` int(10) DEFAULT NULL,
  `forsaljare` varchar(10) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `plats` varchar(40) DEFAULT NULL,
  `bild` varchar(40) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumpning av Data i tabell `produkter2015`
--

INSERT INTO `produkter2015` (`id`, `produkt`, `beskrivning`, `pris`, `antal`, `forsaljare`, `telefon`, `plats`, `bild`, `datum`) VALUES
(1, 'sparkstötting', 'röd, passar alla från 8 år uppåt, tillverkad 2005, i trä', 15.00, 1, 'johnny', '0405029020', 'Helsingfors', 'stotting.jpg', '2015-01-29'),
(2, 'cykel', 'fin hercykel i hållbar plast, 28 tum', 79.00, 1, 'johnny', '0405029020', 'Helsingfors', 'cykel.jpg', '2015-01-29'),
(10, 'server', 'toppenfin nästan oanvänd', 300.00, 1, 'admin', '0405029020', 'Helsingfors', 's.jpg', '2015-02-05'),
(4, 'laptop', 'Toshiba B456, superbra, svart, 15 tum', 299.00, 1, 'johnny', '0405029020', 'Helsingfors', 'tos.jpg', '2015-01-29'),
(5, 'segelbåt', 'välsliten H-båt, seglen nya', 1500.00, 1, 'johnny', '0405029020', 'Vanda', 'h.jpg', '2015-02-05'),
(8, 'bastu', 'liten och välanvänd stockbastu, 4 * 4 m', 900.00, 1, 'johnny', '0405029020', 'Hangö', 'bastu.jpg', '2015-02-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
