-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2022 at 06:05 PM
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
-- Table structure for table `empresaServico`
--

CREATE TABLE `empresaServico` (
  `codEmpresa` int NOT NULL,
  `nomeEmpresa` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `descEmpresa` varchar(80) COLLATE latin1_general_ci DEFAULT NULL,
  `cidadeEmpresa` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `telEmpresa` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `empresaServico`
--

INSERT INTO `empresaServico` (`codEmpresa`, `nomeEmpresa`, `descEmpresa`, `cidadeEmpresa`, `telEmpresa`) VALUES
(1, '', '', '', ''),
(2, 'yiuyuyui', 'yiyuiy', 'yuiyui', 'yuiyiu'),
(3, 'yiuyuyui', 'yiyuiy', 'yuiyui', 'yuiyiu'),
(4, 'teste', 'teste', 'teste', 'teste'),
(5, 'MPE', 'Santa Maria', '(55)9878788768', 'Empresa de tecnologia'),
(6, 'teter', 'teter', 'tere', 'teter'),
(7, 'teste2', 'teste2', 'teste2', 'teste2'),
(8, 'werwe', 'rwerwe', 'rewre', 'wrwrwe'),
(9, 'barrica', 'Brasilia', '554444444', 'Barrica eletronicos'),
(10, 'rwerwe', 'Santa Catarina', '5565444', 'rwerwe'),
(11, 'terema', 'Bagé', '53999999999', 'TECNOLOGIA');

-- --------------------------------------------------------

--
-- Table structure for table `lancamento`
--

CREATE TABLE `lancamento` (
  `codCadastro` int NOT NULL,
  `dataInicialCadastro` date NOT NULL,
  `dataFinalCadastro` date NOT NULL,
  `situacaoCadastro` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `obsCadastro` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `produto_codProd` int NOT NULL,
  `nomeAutorizado` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nomeLiberacao` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `empresaServico_codEmpresa` int NOT NULL,
  `pessoa_codPessoa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lancamento`
--

INSERT INTO `lancamento` (`codCadastro`, `dataInicialCadastro`, `dataFinalCadastro`, `situacaoCadastro`, `obsCadastro`, `produto_codProd`, `nomeAutorizado`, `nomeLiberacao`, `empresaServico_codEmpresa`, `pessoa_codPessoa`) VALUES
(85, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 666, 'Sandro', 'Isabel', 1, 1),
(86, '2022-09-03', '2022-09-05', 'Emprestado', 'teste', 222, 'Oliveira', 'Isabel', 1, 1),
(87, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 490, 'Camila', 'Isabel', 1, 3),
(88, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 2023, 'Camila', 'isabel', 1, 2),
(89, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 2727, 'Camila', 'isabel', 1, 3),
(93, '2022-09-02', '2022-09-02', 'Encaminhado para Conserto', 'teste', 29, 'Camila', 'Isabel', 1, 2),
(94, '2022-09-01', '2022-09-02', 'Encaminhado para Conserto', 'teste', 1111, 'Camila', 'Isabel', 1, 3),
(95, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 12, 'Tati', 'Isabel', 5, 2),
(96, '2022-09-01', '2022-09-03', 'Encaminhado para Conserto', 'teste', 111, 'Camila', 'Isabel', 11, 3),
(97, '2022-09-02', '2022-09-02', 'Emprestado', 'teste', 777, 'Camila', 'Isabel', 1, 2),
(98, '2022-09-02', '2022-09-02', 'Definitivo', 'enviado para ser instalado', 49, 'Oliveira', 'Isabel', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `codLogin` int NOT NULL,
  `pessoa_codPessoa` int NOT NULL,
  `userLogin` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `senhaLogin` varchar(45) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(2, '345', 'fred', '809809'),
(3, '718.357.899-27', 'Amanda Jéssica Liz da Costa', '53999876543');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `codProd` int NOT NULL,
  `nomeProd` varchar(100) COLLATE latin1_german1_ci DEFAULT NULL,
  `descProd` varchar(200) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`codProd`, `nomeProd`, `descProd`) VALUES
(12, 'RWRWRE', 'WERW'),
(29, 'notebook', 'notebook HP'),
(49, 'cano', 'cano pvc'),
(111, 'bateria', '12 V intelbras'),
(222, 'Antena', 'Enge'),
(490, 'pincel', 'pintura'),
(666, 'camera IP', 'bullet intelbras'),
(777, 'mesa', 'mesa'),
(1111, 'rack', 'rack metalico cor preto'),
(2023, 'estabilizador', 'estabilizador mhc'),
(2727, 'mesa', 'mesa de jantar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresaServico`
--
ALTER TABLE `empresaServico`
  ADD PRIMARY KEY (`codEmpresa`);

--
-- Indexes for table `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`codCadastro`,`produto_codProd`,`empresaServico_codEmpresa`,`pessoa_codPessoa`),
  ADD KEY `fk_lancamento_produto1_idx` (`produto_codProd`),
  ADD KEY `fk_lancamento_empresaServico1_idx` (`empresaServico_codEmpresa`),
  ADD KEY `fk_lancamento_pessoa1_idx` (`pessoa_codPessoa`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`codLogin`,`pessoa_codPessoa`),
  ADD UNIQUE KEY `userLogin_UNIQUE` (`userLogin`),
  ADD UNIQUE KEY `senhaLogin_UNIQUE` (`senhaLogin`),
  ADD KEY `fk_login_pessoa1_idx` (`pessoa_codPessoa`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`codPessoa`),
  ADD UNIQUE KEY `cpfPessoa_UNIQUE` (`cpfPessoa`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresaServico`
--
ALTER TABLE `empresaServico`
  MODIFY `codEmpresa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `codCadastro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `codLogin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `codPessoa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lancamento`
--
ALTER TABLE `lancamento`
  ADD CONSTRAINT `fk_lancamento_empresaServico1` FOREIGN KEY (`empresaServico_codEmpresa`) REFERENCES `empresaServico` (`codEmpresa`),
  ADD CONSTRAINT `fk_lancamento_pessoa1` FOREIGN KEY (`pessoa_codPessoa`) REFERENCES `pessoa` (`codPessoa`),
  ADD CONSTRAINT `fk_lancamento_produto1` FOREIGN KEY (`produto_codProd`) REFERENCES `produto` (`codProd`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_pessoa1` FOREIGN KEY (`pessoa_codPessoa`) REFERENCES `pessoa` (`codPessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
