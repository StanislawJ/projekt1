-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2017, 18:45
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

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
  `ID_KUP` int(20) NOT NULL,
  `ID_SPRZ` int(20) NOT NULL,
  `typ` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `kr_op` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `dl_op` varchar(1200) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `cena_pocz` decimal(10,2) NOT NULL,
  `data_zacz` datetime NOT NULL,
  `data_mod` datetime NOT NULL,
  `data_zak` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `auction`
--

INSERT INTO `auction` (`ID_AUK`, `ID_KUP`, `ID_SPRZ`, `typ`, `kategoria`, `kr_op`, `dl_op`, `cena`, `cena_pocz`, `data_zacz`, `data_mod`, `data_zak`) VALUES
(1, 0, 0, 'holenderska', 'fire', 'qwqw', 'qwqwqw', '11.00', '0.00', '2017-11-27 18:39:08', '0000-00-00 00:00:00', '2017-12-04 18:39:08'),
(2, 0, 0, 'klasyczna', 'fire', 'ere', 'eqrerqqr', '100.00', '0.00', '2017-11-27 18:39:36', '0000-00-00 00:00:00', '2017-12-04 18:39:36'),
(3, 0, 0, 'holenderska', 'motory', 'aasdsadas', 'sdsddas', '222.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(4, 0, 0, 'holenderska', 'samochody', 'dfzfzffz', 'zdfdfdf', '122.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(5, 0, 0, 'holenderska', 'whater', 'qweqwe', 'qweeerttyy', '145.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(6, 0, 0, 'klasyczna', 'fire', 'sfd', 'dsfsdfsdfsfd', '10000.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(7, 0, 0, 'klasyczna', 'laptopy', 'fdf', 'dfdfsdfdsgfgsfdg', '234.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(8, 0, 0, 'klasyczna', 'samochody', 'sdsfdfd', 'fgfghhgghzfdf', '456.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(9, 0, 0, 'klasyczna', 'stacjonarne', 'sds', 'sdfghhhhh', '1234.00', '0.00', '2017-11-27 18:41:49', '2017-11-27 18:42:17', '2017-12-04 18:41:49'),
(10, 0, 0, 'klasyczna', 'whater', 'sdsdsd', 'ggggggggggggggggg', '100.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(11, 0, 0, 'licytacja', 'fire', 'zx', 'zzzzzzzzzz', '33.00', '0.00', '2017-11-27 18:41:49', '2017-11-27 18:42:10', '2017-12-04 18:41:49'),
(12, 0, 0, 'licytacja', 'laptopy', 'cvvvb', 'xxxxxxxxxxxxxx', '400.00', '0.00', '2017-11-27 18:41:49', '0000-00-00 00:00:00', '2017-12-04 18:41:49'),
(13, 0, 0, 'licytacja', 'samochody', 'qwwqe', 'rrererer', '321.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(14, 0, 0, 'licytacja', 'stacjonarne', 'fjxfj', 'hjhxfjhfjhxhj', '90.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(15, 0, 0, 'holenderska', 'motory', 'xcfGSFD', 'gffgfgfdfdgfd', '23456.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(16, 0, 0, 'klasyczna', 'whater', 'fgZSGfg', 'gfsfgsffgfg', '19.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(17, 0, 0, 'klasyczna', 'stacjonarne', 'lolo', 'looop', '79.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(18, 0, 0, 'licytacja', 'samochody', 'wersdf', 'weffhyhfy', '67.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(19, 0, 0, 'holenderska', 'fire', 'jhyj', 'hjhj', '999.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(20, 0, 0, 'licytacja', 'laptopy', 'frsdzzfgdfgdf', 'dfhzfdfhdzfgdzfgsdsfsdgfgsdz', '6775.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(21, 0, 0, 'holenderska', 'whater', 'zds', 'qwer', '9.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48'),
(22, 0, 0, 'licytacja', 'motory', 'dsd', 'sdsd', '111.00', '0.00', '2017-11-27 18:44:48', '0000-00-00 00:00:00', '2017-12-04 18:44:48');

--
-- Wyzwalacze `auction`
--
DELIMITER $$
CREATE TRIGGER `dodawanie` BEFORE INSERT ON `auction` FOR EACH ROW BEGIN
SET NEW.data_zacz = now();
SET NEW.data_zak = now() + INTERVAL 7 DAY;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modyfikacja` BEFORE UPDATE ON `auction` FOR EACH ROW BEGIN
SET NEW.data_mod = now();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`kategoria`) VALUES
('elektronika'),
('motoryzacja'),
('pokemony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories_2`
--

CREATE TABLE `categories_2` (
  `pod_kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `kategoria` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `categories_2`
--

INSERT INTO `categories_2` (`pod_kategoria`, `kategoria`) VALUES
('laptopy', 'elektronika'),
('stacjonarne', 'elektronika'),
('motory', 'motoryzacja'),
('samochody', 'motoryzacja'),
('fire', 'pokemony'),
('whater', 'pokemony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy`
--

CREATE TABLE `typy` (
  `typ` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `typy`
--

INSERT INTO `typy` (`typ`) VALUES
('holenderska'),
('klasyczna'),
('licytacja');

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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `login`, `pass`, `name`, `lastname`, `email`, `city`, `street`, `home`, `phone`) VALUES
(1, 'admin', 'admin', '', '', '', '', '', '', 0),
(2, 'bartosz123', 'bartek123', 'bartosz', 'borkowski', 'bor222@op.pl', 'siedlce', 'długa', 'k/54', 123456789),
(3, 'rafal', 'rafal', 'rafal', 'lewy', 'lewy@op.pl', 'siedlce', 'view', '11', 123456789),
(4, 'kamil', 'kamil', 'kamil', 'prawy', 'prawy@op.pl', 'siedlce', 'view', '11', 2147483647);

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
  ADD KEY `ID_SPRZ_fk` (`ID_SPRZ`),
  ADD KEY `ID_KUP_fk` (`ID_KUP`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`kategoria`);

--
-- Indexes for table `categories_2`
--
ALTER TABLE `categories_2`
  ADD PRIMARY KEY (`pod_kategoria`),
  ADD KEY `categories_2_ibfk_1` (`kategoria`);

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
  MODIFY `ID_AUK` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `kategoria_fk` FOREIGN KEY (`kategoria`) REFERENCES `categories_2` (`pod_kategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `typ_fk` FOREIGN KEY (`typ`) REFERENCES `typy` (`typ`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `categories_2`
--
ALTER TABLE `categories_2`
  ADD CONSTRAINT `categories_2_ibfk_1` FOREIGN KEY (`kategoria`) REFERENCES `categories` (`kategoria`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
