-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 25. Mrz 2023 um 15:01
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE18_CR4_ChristineWeidhofer_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE18_CR4_ChristineWeidhofer_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE18_CR4_ChristineWeidhofer_BigLibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `descr` varchar(250) NOT NULL,
  `author_first` varchar(55) NOT NULL,
  `author_last` varchar(55) NOT NULL,
  `ISBN` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `pub_date` date NOT NULL,
  `pub_name` varchar(55) NOT NULL,
  `pub_city` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `image`, `title`, `descr`, `author_first`, `author_last`, `ISBN`, `type`, `pub_date`, `pub_name`, `pub_city`, `status`) VALUES
(1, 'maus.jpg', 'The Complete Maus', 'Maus is a graphic novel by American cartoonist Art Spiegelman, serialized from 1980 to 1991. It depicts Spiegelman interviewing his father about his experiences as a Polish Jew and Holocaust survivor. ', 'Art', 'Spiegelman', '978-0-679-40641-9', 'Graphic Novel', '2011-10-15', 'Pantheon', 'New York', 'available'),
(3, 'riotgrrrl.jpg', 'Riot Grrrl Revisited', 'Geschichte und Gegenwart einer feministischen Bewegung. »Riot Grrrl Revisited« schreibt die Geschichte des revolutionären Kulturkampfes auf und zeigt, was von der radikalen Bewegung geblieben ist.', 'Katja', 'Peglow (Hg.)', '978-3-931-55547-4', 'Non-Fiction', '2013-02-24', 'Ventil', 'Mainz', 'available'),
(4, 'onasunbeam.jpg', 'On A Sunbeam', 'A science fiction graphic novel by American cartoonist Tillie Walden, the plot follows the development of the protagonist Mia, who joins the crew of the maintenance ship Aktis and attempts to reconnect with a lost love.', 'Tillie', 'Walden', '978-1-250-17813-8', 'Graphic Novel', '2018-10-24', 'First Second', 'New York', 'reserved'),
(5, 'funhome.jpeg', 'Fun Home', 'Fun Home: A Family Tragicomic is a 2006 graphic memoir by the American cartoonist Alison Bechdel. It chronicles the author\'s childhood and youth in rural Pennsylvania, focusing on her complex relationship with her father.', 'Alison', 'Bechdel', '978-0-618-47794-4', 'Graphic Novel', '2006-06-08', 'Houghton Mifflin', 'New York', 'reserved'),
(6, 'ursprungderwelt.jpeg', 'Der Ursprung der Welt', 'In this graphic nonfiction book, drawn in chunky, punky pen, Swedish cartoonist Liv Strömquist traces how different cultures and traditions have shaped women\'s health and beyond.', 'Liv', 'Strömquist', '978-3-945-03456-9', 'Graphic Novel', '2017-08-01', 'avant-verlag', 'Berlin', 'available'),
(7, 'hottopic.jpeg', 'Hot Topic', 'Frauen porträtieren ihre Lebensrealitäten zwischen Abtreibung, Indie-Mutterschaft, Prekariats-Boheme, queerem Coming-of-Age, Schönheitsterror und Exotinnendasein im Musik- und Medienbusiness.', 'Sonja', 'Eismann (Hg.)', '978-3-931-55575-7', 'Non-Fiction', '2008-03-12', 'Ventil', 'Mainz', 'reserved'),
(8, 'girlstothefront.jpeg', 'Girls To The Front', 'The true story of the RIOT GRRRL Revolution - initially born of Marcus\'s concern for the way the history of the movement had been chronicled in media, sidelining the central political concerns and getting it \"wronger and wronger\" as years passed.', 'Sara', 'Marcus', '978-0-061-80636-0', 'Non-Fiction', '2010-06-19', 'Harper Perennial', 'New York', 'available'),
(9, 'tippingthevelvet.webp', 'Tipping The Velvet', '- a historical novel by Sarah Waters. Set in England during the 1890s, it tells a coming of age story about a young woman named Nan who falls in love with a male impersonator and follows her to London.', 'Sarah', 'Waters', '978-1-860-49524-3', 'Novel', '1999-04-16', 'Virago', 'London', 'reserved'),
(10, 'OrangesAreNotTheOnlyFruit.jpg', 'Oranges Are Not The Only Fruit', 'The main character is a young girl named Jeanette, who is adopted by evangelists from the Elim Pentecostal Church. The book depicts religious enthusiasm as an exploration of the power of love.', 'Jeanette', 'Winterson', '0-8021-3516-1', 'Novel', '1985-08-14', 'Pandora Press', 'London', 'available'),
(11, 'valencia.jpeg', 'Valencia', 'Valencia is the fast-paced account of one girl\'s search for love and high times in the drama-filled dyke world of San Francisco\'s Mission District. Through a string of narrative moments, Tea records a year lived in a world of girls.', 'Michelle', 'Tea', '1-58005-035-2', 'Novel', '2000-12-04', 'Seal Press', 'New York', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
