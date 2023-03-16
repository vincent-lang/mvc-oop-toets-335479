-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 16 mrt 2023 om 13:28
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Vulkaan`
--

DROP TABLE IF EXISTS `Vulkaan`;
CREATE TABLE IF NOT EXISTS `Vulkaan` (
  `Id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Naam` varchar(200) NOT NULL,
  `Hoogte` smallint(6) NOT NULL,
  `Land` varchar(200) NOT NULL,
  `JaarLaatsteUitbarsting` varchar(4) NOT NULL,
  `AantalSlachtoffers` tinyint(3) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Vulkaan`
--

INSERT INTO `Vulkaan` (`Id`, `Naam`, `Hoogte`, `Land`, `JaarLaatsteUitbarsting`, `AantalSlachtoffers`) VALUES
(1, 'Eyjafjallajökul', 1666, 'IJsland', '2010', 1),
(2, 'Vesuvius', 1281, 'Italië', '1944', 26),
(3, 'Sakurajima', 1117, 'Japan', '2012', 2),
(4, 'Merapi', 2910, 'Indonesië', '2020', 5),
(5, 'Nyiragongo', 3470, 'Democratische republiek Congo', '2021', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
