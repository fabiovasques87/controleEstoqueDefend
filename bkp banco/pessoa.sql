-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2022 at 07:11 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle-estoque`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `codPessoa` int NOT NULL,
  `cpfPessoa` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `nomePessoa` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `telefonePessoa` varchar(45) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`codPessoa`, `cpfPessoa`, `nomePessoa`, `telefonePessoa`) VALUES
(1, '02041884070', 'Fábio Vasques', '999367651'),
(8, '03053728079', 'Adao Marlon Jardin Martins', '53999999999'),
(9, '03875885074', 'Dariel Mota', '53999999999'),
(10, '03806293058', 'Douglas Chaves Caldas', '53999999999'),
(11, '00457545003', 'Fernando Prestes Cardoso', '53999999999'),
(12, '01175274089', 'Jean Lotuffo Trassante', '53999999999'),
(13, '82447713053', 'Luiz Eduardo Soares Goncalves', '53999999999'),
(14, '01973183048', 'Luiz Fabricio Nunes Goulart', '53999999999'),
(15, '03871111074', 'Mateus Soares Silva', '53999999999'),
(16, '05326878097', 'Rafael Stol Vieira', '53999999999'),
(17, '04531815033', 'Rayan de Lima Costa', '53999999999'),
(18, '04346822096', 'Shelton Antonio Figueiredo', '53999999999'),
(19, '93532180049', 'Valdemir Oliveira', '53999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`codPessoa`),
  ADD UNIQUE KEY `cpfPessoa_UNIQUE` (`cpfPessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `codPessoa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
