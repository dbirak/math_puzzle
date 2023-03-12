-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lut 2022, 15:04
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `math_puzzle`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_5x5_1-4`
--

CREATE TABLE `tabela_5x5_1-4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_5x5_1-9`
--

CREATE TABLE `tabela_5x5_1-9` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_5x5_1-19`
--

CREATE TABLE `tabela_5x5_1-19` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_6x6_1-4`
--

CREATE TABLE `tabela_6x6_1-4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_6x6_1-9`
--

CREATE TABLE `tabela_6x6_1-9` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_6x6_1-19`
--

CREATE TABLE `tabela_6x6_1-19` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_7x7_1-4`
--

CREATE TABLE `tabela_7x7_1-4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_7x7_1-9`
--

CREATE TABLE `tabela_7x7_1-9` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_7x7_1-19`
--

CREATE TABLE `tabela_7x7_1-19` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_8x8_1-4`
--

CREATE TABLE `tabela_8x8_1-4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_8x8_1-9`
--

CREATE TABLE `tabela_8x8_1-9` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_8x8_1-19`
--

CREATE TABLE `tabela_8x8_1-19` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tabela_5x5_1-4`
--
ALTER TABLE `tabela_5x5_1-4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_5x5_1-9`
--
ALTER TABLE `tabela_5x5_1-9`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_5x5_1-19`
--
ALTER TABLE `tabela_5x5_1-19`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_6x6_1-4`
--
ALTER TABLE `tabela_6x6_1-4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_6x6_1-9`
--
ALTER TABLE `tabela_6x6_1-9`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_6x6_1-19`
--
ALTER TABLE `tabela_6x6_1-19`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_7x7_1-4`
--
ALTER TABLE `tabela_7x7_1-4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_7x7_1-9`
--
ALTER TABLE `tabela_7x7_1-9`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_7x7_1-19`
--
ALTER TABLE `tabela_7x7_1-19`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_8x8_1-4`
--
ALTER TABLE `tabela_8x8_1-4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_8x8_1-9`
--
ALTER TABLE `tabela_8x8_1-9`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tabela_8x8_1-19`
--
ALTER TABLE `tabela_8x8_1-19`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `tabela_5x5_1-4`
--
ALTER TABLE `tabela_5x5_1-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_5x5_1-9`
--
ALTER TABLE `tabela_5x5_1-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_5x5_1-19`
--
ALTER TABLE `tabela_5x5_1-19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_6x6_1-4`
--
ALTER TABLE `tabela_6x6_1-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_6x6_1-9`
--
ALTER TABLE `tabela_6x6_1-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_6x6_1-19`
--
ALTER TABLE `tabela_6x6_1-19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_7x7_1-4`
--
ALTER TABLE `tabela_7x7_1-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_7x7_1-9`
--
ALTER TABLE `tabela_7x7_1-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_7x7_1-19`
--
ALTER TABLE `tabela_7x7_1-19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_8x8_1-4`
--
ALTER TABLE `tabela_8x8_1-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_8x8_1-9`
--
ALTER TABLE `tabela_8x8_1-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tabela_8x8_1-19`
--
ALTER TABLE `tabela_8x8_1-19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
