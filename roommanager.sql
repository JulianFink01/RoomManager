-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Dez 2019 um 14:20
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `roommanager`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `code`
--

CREATE TABLE `code` (
  `code` varchar(4) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `code`
--

INSERT INTO `code` (`code`, `id`) VALUES
('0730', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gotcode`
--

CREATE TABLE `gotcode` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `datum` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gotcode`
--

INSERT INTO `gotcode` (`id`, `userId`, `datum`) VALUES
(16, 1, '2019-12-02 08:41:23'),
(17, 1, '2019-12-02 12:33:43'),
(18, 8, '2019-12-02 13:10:04'),
(19, 1, '2019-12-02 13:10:15'),
(20, 8, '2019-12-02 13:12:01');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `vorname` varchar(40) DEFAULT NULL,
  `nachname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `passwort` varchar(250) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `profilepicture` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `vorname`, `nachname`, `email`, `passwort`, `username`, `admin`, `profilepicture`) VALUES
(1, 'Julian', 'Fink', 'julianfink01@gmail.com', '0eae14838751a78f6d0429264b923c3d', 'FinJul', 1, 'IMG_9440.jpg'),
(8, 'Julian', 'Fink', 'julianfink01@gmail.com', '0eae14838751a78f6d0429264b923c3d', 'Testacc', 0, '_FNK3274.jpg'),
(9, 'Armin', 'Gross', 'julianfink01@gmail.com', '0eae14838751a78f6d0429264b923c3d', 'woss', 0, 'default.png');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `gotcode`
--
ALTER TABLE `gotcode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `gotcode`
--
ALTER TABLE `gotcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `gotcode`
--
ALTER TABLE `gotcode`
  ADD CONSTRAINT `gotcode_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
