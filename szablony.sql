-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Czas generowania: 06 Cze 2023, 07:39
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szablony`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szablony`
--

CREATE TABLE `szablony` (
  `ID` int(11) NOT NULL,
  `Imię` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Wiek` int(100) NOT NULL,
  `Klasa` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `szablony`
--

INSERT INTO `szablony` (`ID`, `Imię`, `Nazwisko`, `Wiek`, `Klasa`, `Img`) VALUES
(1, 'Leonidas', 'Midas', 18, '1I', 'C:\\xampp\\htdocs\\test'),
(2, 'Honorata', 'Kamieniołom', 19, '4Ep', 'C:\\xampp\\htdocs\\test'),
(3, 'Józefina', 'Kopytko', 19, '4I', 'C:\\xampp\\htdocs\\test'),
(4, 'Zygfryd', 'Szczebrzeszyński', 18, '3G', 'C:\\xampp\\htdocs\\test'),
(5, 'Korneliusz', 'Zbereźnik', 16, '2T', 'C:\\xampp\\htdocs\\test'),
(6, 'Genowefa', 'Afewoneg', 18, '3A', 'C:\\xampp\\htdocs\\test'),
(7, 'Stefan', 'Moczypościel', 19, '4Ip', 'C:\\xampp\\htdocs\\test'),
(8, 'Kalina', 'Zesłupska', 17, '2E', 'C:\\xampp\\htdocs\\test'),
(9, 'Abraham', 'Tesla', 19, '4E', 'C:\\xampp\\htdocs\\test'),
(10, 'Grażyna', 'Ześląska', 18, '4Ep', 'C:\\xampp\\htdocs\\test'),
(11, 'Goliat', 'Skrępowany', 20, '4Tg', 'C:\\xampp\\htdocs\\test'),
(12, 'Monika', 'Zciągnika', 19, '4A', 'C:\\xampp\\htdocs\\test');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `szablony`
--
ALTER TABLE `szablony`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `szablony`
--
ALTER TABLE `szablony`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
