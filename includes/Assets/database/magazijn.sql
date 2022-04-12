-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 apr 2022 om 13:03
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazijn`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `titel`) VALUES
(1, 'Elektronica'),
(2, 'Leermiddelen'),
(3, 'Overig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `hasborrowed` tinyint(4) NOT NULL,
  `itemsborrowed` varchar(32) DEFAULT NULL,
  `returndate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(255) NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `expirationdate` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `statusmessage` varchar(2000) NOT NULL,
  `updateremail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `requests`
--

INSERT INTO `requests` (`id`, `useremail`, `itemid`, `itemname`, `quantity`, `description`, `expirationdate`, `status`, `statusmessage`, `updateremail`) VALUES
(1, 'info@joranvanerk.nl', 61, 'Oplader', 2, 'Ik heb deze oplader nodig voor mijn telefoon.', '24-03-2022', '0', '', ''),
(2, 'info@joranvanerk.nl', 291, 'Oortjes', 1, 'Graag deze oortjes voor tijdens het hardlopen', '27-03-2022', '0', '', ''),
(3, 'info@joranvanerk.nl', 185, 'Laptop', 3, 'Graag een laptop voor tijdens de vergadering', '26-03-2022', '1', 'Goedgekeurd, succes met de laptop', 'info@joranvanerk.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(45) NOT NULL,
  `totalstock` int(4) NOT NULL,
  `totalavailability` int(4) DEFAULT NULL,
  `cat` varchar(32) NOT NULL DEFAULT 'overig',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `itemname_UNIQUE` (`itemname`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `stock`
--

INSERT INTO `stock` (`id`, `itemname`, `totalstock`, `totalavailability`, `cat`) VALUES
(2, 'Laptop', 4, 1, 'overig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `permissions` int(1) NOT NULL,
  `timestamp` varchar(32) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE KEY `idusers_UNIQUE` (`idusers`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `password_UNIQUE` (`password`),
  UNIQUE KEY `mail_UNIQUE` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`, `mail`, `permissions`, `timestamp`) VALUES
(1, 'Joran', '$2y$10$cskxa3s4Z9U9lla/OtQdf.kfHmtFLaoveXiYKQu3kxLf4BNA5RqFa', 'info@joranvanerk.nl', 0, '22-02-2022 15:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
