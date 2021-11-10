-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 08:45 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `level` int(9) NOT NULL,
  `Atak` int(9) NOT NULL,
  `Zycie` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`name`, `pass`, `level`, `Atak`, `Zycie`) VALUES
('koks', '0a8a32b6556a26b05469336a0d4980c4ed3b8a93ac1785e3916eaf672519be28', 41, 235, 470),
('Test', '0a8a32b6556a26b05469336a0d4980c4ed3b8a93ac1785e3916eaf672519be28', 27, 205, 410);

-- --------------------------------------------------------

--
-- Table structure for table `wrogowie`
--

CREATE TABLE `wrogowie` (
  `ID` int(64) NOT NULL,
  `Nazwa` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `Poziom` varchar(9) COLLATE utf8_polish_ci NOT NULL,
  `Atak` int(9) NOT NULL,
  `Zycie` int(9) NOT NULL,
  `img` varchar(64) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `wrogowie`
--

INSERT INTO `wrogowie` (`ID`, `Nazwa`, `Poziom`, `Atak`, `Zycie`, `img`) VALUES
(1, 'Wilk', '1', 5, 20, 'wilk.png'),
(2, 'Guziec', '1', 3, 20, 'guziec.png'),
(3, 'Lis', '1', 7, 15, 'lis.png'),
(4, 'Kot', '2', 10, 50, 'kot.png'),
(5, 'Gazownik Adolf', '2', 12, 70, 'adolf.png'),
(6, 'Grzegorz beztlenowiec', '3', 15, 30, 'grzegorz.png'),
(7, 'Kapturnik', '1', 5, 15, 'kapturnik.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wrogowie`
--
ALTER TABLE `wrogowie`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wrogowie`
--
ALTER TABLE `wrogowie`
  MODIFY `ID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
