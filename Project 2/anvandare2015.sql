-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 05 feb 2015 kl 11:51
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
-- Tabellstruktur `anvandare2015`
--

CREATE TABLE IF NOT EXISTS `anvandare2015` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `anvandarnamn` varchar(40) NOT NULL,
  `losenord` varchar(128) NOT NULL,
  `epost` varchar(40) NOT NULL,
  `fornamn` varchar(20) NOT NULL,
  `slaktnamn` varchar(40) NOT NULL,
  `telefonnr` varchar(20) NOT NULL,
  `registrering` date NOT NULL,
  `senaste` date NOT NULL,
  `roll` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumpning av Data i tabell `anvandare2015`
--

INSERT INTO `anvandare2015` (`id`, `anvandarnamn`, `losenord`, `epost`, `fornamn`, `slaktnamn`, `telefonnr`, `registrering`, `senaste`, `roll`, `status`, `ip`) VALUES
(4, 'olle', '14da397fd89e1fb12ff8068ba1d2e249ed607f721803104331ad162531aef413', 'olle@hem.com', 'Olle', 'Karlsson', '3453453535', '2015-02-05', '2015-02-05', 'saljare', 'god', '2001:708:170:300::f894:7552'),
(5, 'ville', '14da397fd89e1fb12ff8068ba1d2e249ed607f721803104331ad162531aef413', 'ville@hem.fi', 'Ville', 'Vilenius', '25343353', '2015-02-05', '2015-02-05', 'saljare', 'god', '2001:708:170:300::f894:7552'),
(6, 'johnny', 'd808cfd66215b9ca25d0d02778e1931c7055e2a21bde4a695b9df4ab522ff3cf', 'johnny@arcada.fi', 'Johnny', 'Biström', '0405029020', '2015-02-05', '2015-02-05', 'admin', 'god', '2001:708:170:300::f894:7552'),
(7, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'johnny@arcada.fi', 'Johnny', 'Biström', '0405029020', '2015-02-05', '2015-02-05', 'saljare', 'god', '2001:708:170:300::f894:7552');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
