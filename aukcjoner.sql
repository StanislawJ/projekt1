-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Paź 2017, 21:22
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aukcjoner`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auction`
--

CREATE TABLE `auction` (
  `ID_AUK` int(20) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `ID_KUP` int(20) NOT NULL,
  `ID_SPRZ` int(20) NOT NULL,
  `ID_ZDJ` int(15) NOT NULL,
  `typ` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `data_zacz` date NOT NULL,
  `kr_op` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `dl_op` varchar(1200) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `cena_pocz` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photos`
--

CREATE TABLE `photos` (
  `ID_ZDJ` int(15) NOT NULL,
  `zd_1` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zd_2` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zd_3` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zd_4` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zd_5` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zd_6` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy`
--

CREATE TABLE `typy` (
  `typ` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `street` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `home` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `phone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`ID_AUK`),
  ADD KEY `kategoria_fk` (`kategoria`),
  ADD KEY `typ_fk` (`typ`),
  ADD KEY `ID_ZDJ_fk` (`ID_ZDJ`),
  ADD KEY `ID_SPRZ_fk` (`ID_SPRZ`),
  ADD KEY `ID_KUP_fk` (`ID_KUP`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`kategoria`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID_ZDJ`);

--
-- Indexes for table `typy`
--
ALTER TABLE `typy`
  ADD PRIMARY KEY (`typ`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `auction`
--
ALTER TABLE `auction`
  MODIFY `ID_AUK` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `photos`
--
ALTER TABLE `photos`
  MODIFY `ID_ZDJ` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `ID_KUP_fk` FOREIGN KEY (`ID_KUP`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_SPRZ_fk` FOREIGN KEY (`ID_SPRZ`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_ZDJ_fk` FOREIGN KEY (`ID_ZDJ`) REFERENCES `photos` (`ID_ZDJ`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kategoria_fk` FOREIGN KEY (`kategoria`) REFERENCES `categories` (`kategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `typ_fk` FOREIGN KEY (`typ`) REFERENCES `typy` (`typ`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
