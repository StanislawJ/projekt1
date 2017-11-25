-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lis 2017, 14:12
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.8

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
  `data_zacz` date NOT NULL,
  `kr_op` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `dl_op` varchar(1200) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `cena_pocz` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `auction`
--

INSERT INTO `auction` (`ID_AUK`, `ID_KUP`, `ID_SPRZ`, `typ`, `kategoria`, `data_zacz`, `kr_op`, `dl_op`, `cena`, `cena_pocz`) VALUES
(5, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(6, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(7, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(8, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(9, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(10, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(11, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(12, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(13, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(14, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(15, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(16, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(17, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(18, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(19, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(20, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(21, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(22, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(23, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(24, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(25, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(26, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(27, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(28, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(29, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(30, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(31, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(32, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(33, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(34, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(35, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(36, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(37, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(38, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(39, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(40, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(41, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(42, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(43, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(44, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(45, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(46, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(47, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(48, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(49, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(50, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(51, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(52, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(53, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(54, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(55, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(56, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(57, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(58, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(59, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(60, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(61, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(62, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(63, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(64, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(65, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(66, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(67, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(68, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(69, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(70, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(71, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(72, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(73, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(74, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(75, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(76, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(77, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(78, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(79, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(80, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(81, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(82, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(83, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(84, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(85, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(86, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(87, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(88, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(89, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(90, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(91, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(92, 0, 2, 'klasyczna', 'motory', '0000-00-00', 'niema', 'ma dużo ', '10000.00', '0.00'),
(93, 0, 2, 'licytacja', 'laptopy', '0000-00-00', 'asdf', 'asdfasdfasdfa', '59959.00', '0.00'),
(94, 1, 2, 'klasyczna', 'laptopy', '2017-11-15', 'asdasdasdaa sdasdasdaasd asdasdaasdasdasdaa sdasdasdaasdasdasdaas dasdasdaasdasdasda asdasdasdaasdas dasdaasdasdasdaasdasda sdaasdasdasdaasdasdasdaaaa', 'asdfasdfasdfasfasfasfasfasfasdfasdf00000000000000000000000000000000000000000000000000', '5000.00', '0.00'),
(95, 0, 0, 'klasyczna', 'samochody', '2017-11-19', 'boruś', 'asdfasdfasdfasdf', '5888.00', '667.00'),
(96, 0, 0, 'licytacja', 'stacjonarne', '0000-00-00', 'pok', 'asdfas', '58888.00', '999.00');

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
(2, 'bartosz123', 'bartek123', 'bartosz', 'borkowski', 'bor222@op.pl', 'siedlce', 'długa', 'k/54', 123456789);

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
  MODIFY `ID_AUK` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
