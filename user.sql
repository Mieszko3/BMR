-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Czas generowania: 06 Cze 2023, 07:40
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
-- Baza danych: `uzytkownicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `email`, `passwordHash`) VALUES
(1, 'mieszkoksu@gmail.com', '$argon2i$v=19$m=16,t=2,p=1$YWZnYWZzZGdhc2Zn$AQp9NvHM5R0htePJph1O3g'),
(2, 'acorton1@shinystat.com', 'mYNK8p1t'),
(3, 'npickworth2@yellowpages.com', 'yeTBCcVG'),
(4, 'emcpartling3@issuu.com', 'tBOGM8HjyQ'),
(5, 'cwraighte4@delicious.com', 'YSUGGw10cNRa'),
(6, 'wcosby5@baidu.com', 'DLkcJp'),
(7, 'ablay6@hhs.gov', '9pi1Wof'),
(8, 'mkeenan7@huffingtonpost.com', 'kPUjNMqGA'),
(9, 'dbaudinelli8@spiegel.de', 'e1CSUj'),
(10, 'imckeon9@senate.gov', '1CSz0l9551'),
(11, 'maylinga@abc.net.au', 'rk7ARcEcXzO4'),
(12, 'bfallb@ezinearticles.com', '2RxZtaUvF0J'),
(13, 'ocadorec@macromedia.com', 'MByaDKT1'),
(14, 'pdegoixd@cnet.com', 'vUaHlU8500'),
(15, 'gjenkene@reference.com', 'k1bYRUuvryWq'),
(16, 'mboickf@si.edu', 'UyoXpqGt'),
(17, 'aewbankeg@whitehouse.gov', 'awDlcSVM'),
(18, 'criggsh@howstuffworks.com', 'XpMEkfuCJT'),
(19, 'oblamphini@nsw.gov.au', 'bKBrznDof1'),
(20, 'rcrebbinj@geocities.jp', 'lldCvQi'),
(21, 'mgutierrezk@chron.com', 'Bkl2JqkMh'),
(22, 'asimcol@networksolutions.com', 'c51ylFsGNJTj'),
(23, 'cjahnm@slashdot.org', 'giNrMIxDP3C'),
(24, 'lcovingtonn@harvard.edu', 'eMKidIp'),
(25, 'vbowdidgeo@pen.io', 'pLapjEc'),
(26, 'ksoutherillp@huffingtonpost.com', 'avgpVpF'),
(27, 'mieszkoksu1@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RXkzdmlnNjF2U3UzS1dnaA$jd8oP6RC4kcov/PlgCYZ89mYaKtVsT38Y4zuiM+BVgY'),
(28, '123@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eWsvdzJJOWg3RXV6VlY0eA$1rW79LlJ6QF4zxJpDKxwhgjf1BLnnKY2MzrEq1ENd4E'),
(29, '1234@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YkNoOGlZTUpBa1gvSkRDcQ$Lv3+JnZk5vO4RW3wF1boBL9B0LnpQ04DcR+YrkaVtew'),
(30, 'ccardenosat@wikispaces.com', 'A1cwzQvDl'),
(31, 'wdowglassu@cocolog-nifty.com', 'r1VCBQK2s'),
(32, 'dsideyv@photobucket.com', 'thx15c4E'),
(33, 'clepinew@facebook.com', 'uxhR1hVw3'),
(34, 'bgheorghescux@csmonitor.com', 'NJe9P97'),
(35, 'eskryney@sourceforge.net', 'MQ5EjahWEv'),
(36, 'sstandevenz@go.com', 'OUVwNZ'),
(37, 'kbraddick10@npr.org', '1anARh6mk'),
(38, 'lkentwell11@independent.co.uk', '9jJEgXg'),
(39, 'cstenner12@vimeo.com', 'h0NwuWUO0l6'),
(40, 'rburde13@indiatimes.com', 'VghBlBsQS'),
(41, 'drookwell14@t-online.de', 'yLzBZFc2f6'),
(42, 'tkock15@comsenz.com', 'HQGC51'),
(43, 'abutfield16@twitpic.com', 'yFcYj7HFkk'),
(44, '123213@f.pl', '$argon2i$v=19$m=65536,t=4,p=1$STZuTTBBaXR3ZG42T3UxQw$gaRCQPo20DnFuAgZlcpI+zGzei5+0eUtHRW78WEtOG8'),
(45, 'ldollimore18@marriott.com', 'tjbc6ple'),
(46, 'bnorwood19@ucoz.com', 'iJq3Yp3y16m'),
(47, 'athornewell1a@chron.com', 'nt2MJdqLjsmb'),
(48, '124214@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UHlMZHM5eGNoNTVFQnF5TA$h03GuHGaamkyXsUixIcDnT/mOCMjC8FWKo3bSlZ9ehU'),
(49, 'wtuttiett1c@macromedia.com', 'EdK3bh'),
(50, 'nlawlie1d@1688.com', '6Ws9dsa4F'),
(51, 'ausherwood1e@japanpost.jp', 'Y1jD4CimJw3'),
(52, 'mieszko@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$djFGN2drQzFJMFcvOWh4bw$LiMvyJGf8CpFIiuWVqTn67ZvQwA6nwNUfFpTQDFadq8');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
