-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-php-pdo-crud-toets:3306
-- Generation Time: Jan 12, 2023 at 01:06 PM
-- Server version: 10.7.6-MariaDB-1:10.7.6+maria~ubu2004
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `DureAuto`
--

CREATE TABLE `DureAuto` (
  `id` int(11) NOT NULL,
  `merk` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `topsnelheid` smallint(4) DEFAULT NULL,
  `prijs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DureAuto`
--

INSERT INTO `DureAuto` (`id`, `merk`, `model`, `topsnelheid`, `prijs`) VALUES
(1, 'Bugatti', 'La vioture noire', 420, '16500000'),
(3, 'Bugatti', 'EB110', 390, '7500000'),
(4, 'Mercedes-Benz', 'Maybach Exelero', 350, '6700000'),
(5, 'Koenigsegg', 'CCXR Trevita', 401, '4000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DureAuto`
--
ALTER TABLE `DureAuto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DureAuto`
--
ALTER TABLE `DureAuto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
