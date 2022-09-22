-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 10:11 AM
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
(11, 'terema', 'Bagé', '53999999999', 'TECNOLOGIA'),
(12, 'ponto com Informática', 'Bagé', '5332455678', 'Ramo de Tecnologia'),
(13, 'eletro concertos', 'Bagé rs', '53999999999', 'empresa de concertos'),
(14, 'LTDA CONCERTOS', 'Santa Maria', '5553218767', 'LTDA CONCERTOS'),
(15, '', '', '', ''),
(16, 'feluc', 'bagé ', '539998765', 'empresa do segmento de cftv');

-- --------------------------------------------------------

--
-- Table structure for table `lancamento`
--

CREATE TABLE `lancamento` (
  `codCadastro` int NOT NULL,
  `dataInicialCadastro` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `dataFinalCadastro` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `situacaoCadastro` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `obsCadastro` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `produto_codProd` int NOT NULL,
  `nomeAutorizado` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nomeLiberacao` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `empresaServico_codEmpresa` int NOT NULL,
  `pessoa_codPessoa` int NOT NULL,
  `dataBaixa` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `statusMaterial` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lancamento`
--

INSERT INTO `lancamento` (`codCadastro`, `dataInicialCadastro`, `dataFinalCadastro`, `situacaoCadastro`, `obsCadastro`, `produto_codProd`, `nomeAutorizado`, `nomeLiberacao`, `empresaServico_codEmpresa`, `pessoa_codPessoa`, `dataBaixa`, `statusMaterial`) VALUES
(149, '2022-09-08', '2022-09-18', 'Emprestado', 'teste', 12, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(150, '2022-09-08', '2022-09-18', 'Encaminhado para concerto', 'teste25', 25, 'Camila', 'Isabel', 5, 4, '16/09/22', 'I'),
(151, '2022-09-01', '2022-09-08', 'Emprestado', 'notebook emprestado', 29, 'Camila', 'Isabel', 1, 3, '12/09/22', 'I'),
(152, '2022-09-09', '2022-09-19', 'Emprestado', 'teste', 47, 'Camila', 'Isabel', 1, 3, '11/09/22', 'I'),
(153, '2022-09-09', '2022-09-19', 'Emprestado', 'teste', 48, 'Camila', 'Isabel', 1, 4, '09/09/22', 'I'),
(154, '2022-09-09', '2022-09-19', 'Emprestado', 'teste111', 111, 'Camila', 'Isabel', 1, 2, '09/09/22', 'I'),
(155, '2022-09-09', '2022-09-19', 'Emprestado', 'teste', 1111, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(156, '2022-09-11', '2022-09-16', 'Emprestado', 'teste', 50, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(157, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 49, 'Oliveira', 'Isabel', 1, 2, '20/09/22', 'I'),
(158, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 51, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(159, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 58, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(160, '2022-09-11', '2022-09-14', 'Emprestado', 'teste', 57, 'Camila', 'Isabel', 1, 3, '11/09/22', 'I'),
(161, '2022-09-11', '2022-09-14', 'Emprestado', 'teste', 67, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(162, '2022-09-11', '2022-09-11', 'Encaminhado para concerto', 'teste', 73, 'Camila', 'Isabel', 5, 2, '11/09/22', 'I'),
(163, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 12, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(164, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 12, 'Camila', 'Isabel', 8, 2, '11/09/22', 'I'),
(165, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 12, 'Camila', 'Isabel', 5, 2, '11/09/22', 'I'),
(166, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 47, 'Camila', 'Isabel', 5, 2, '11/09/22', 'I'),
(167, '2022-09-11', '2022-09-14', 'Emprestado', 'teste', 12, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(168, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 12, 'Camila', 'Isabel', 5, 2, '11/09/22', 'I'),
(169, '2022-09-11', '2022-09-15', 'Emprestado', 'teste12', 12, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(170, '2022-09-16', '2022-09-15', 'Encaminhado para concerto', 'encaminhado para concerto', 51, 'Camila', 'Isabel', 5, 2, '11/09/22', 'I'),
(171, '2022-09-11', '2022-09-15', 'Emprestado', 'emprestado para Sergio', 51, 'Camila', 'Isabel', 1, 4, '11/09/22', 'I'),
(172, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 51, 'Camila', 'Isabel', 1, 3, '11/09/22', 'I'),
(173, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 51, 'Camila', 'Isabel', 1, 3, '11/09/22', 'I'),
(174, '2022-09-11', '2022-09-15', 'Emprestado', 'TESTE', 51, 'Camila', 'Isabel', 1, 1, '11/09/22', 'I'),
(175, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 52, 'Camila', 'Isabel', 5, 3, '11/09/22', 'I'),
(176, '2022-09-11', '2022-09-15', 'Emprestado', 'erewr', 51, 'Camila', 'Isabel', 1, 1, '11/09/22', 'I'),
(177, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 51, 'Camila', 'Isabel', 8, 3, '11/09/22', 'I'),
(178, '2022-09-15', '2022-09-14', 'Emprestado', 'teste', 51, 'Camila', 'Isabel', 1, 2, '11/09/22', 'I'),
(179, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 51, 'Oliveira', 'Isabel', 13, 2, '11/09/22', 'I'),
(180, '2022-09-11', '2022-09-15', 'Encaminhado para concerto', 'teste', 51, 'Camila', 'Camila', 7, 2, '11/09/22', 'I'),
(181, '2022-09-11', '2022-09-15', 'Emprestado', 'teste', 51, 'Oliveira', 'Isabel', 1, 2, '11/09/22', 'I'),
(182, '2022-09-12', '2022-09-16', 'Encaminhado para concerto', 'teste', 15, 'Oliveira', 'Isabel', 12, 3, '12/09/22', 'I'),
(183, '2022-09-12', '2022-09-12', 'Encaminhado para concerto', 'RWERWE', 63, 'Camila', 'Isabel', 12, 3, '12/09/22', 'I'),
(184, '2022-09-12', '2022-09-14', 'Encaminhado para concerto', 'RERWE', 64, 'Camila', 'Isabel', 5, 3, '12/09/22', 'I'),
(185, '2022-09-13', '2022-09-15', 'Encaminhado para concerto', 'RWERWERW', 68, 'Camila', 'Isabel', 13, 1, '12/09/22', 'I'),
(186, '2022-09-12', '2022-09-16', 'Definitivo', 'XSDSD', 69, 'Camila', 'Camila', 1, 3, '2022-12-09', 'I'),
(187, '2022-09-12', '2022-09-14', 'Emprestado', 'TESTE', 70, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(188, '2022-09-12', '2022-09-12', 'Encaminhado para concerto', 'EWEQWE', 71, 'Camila', 'Isabel', 11, 3, '12/09/22', 'I'),
(189, '2022-09-12', '2022-09-15', 'Emprestado', 'EE32E', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(190, '2022-09-12', '2022-09-15', 'Emprestado', '32323', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(191, '2022-09-12', '2022-09-15', 'Encaminhado para concerto', 'EE23E', 71, 'Camila', 'Isabel', 12, 2, '12/09/22', 'I'),
(192, '2022-09-12', '2022-09-15', 'Emprestado', 'E2E2', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(193, '2022-09-12', '2022-09-14', 'Emprestado', 'e23e32e', 71, 'Oliveira', 'Camila', 1, 2, '12/09/22', 'I'),
(194, '2022-09-12', '2022-09-15', 'Encaminhado para concerto', 'ewqewqwe', 72, 'Camila', 'Isabel', 11, 2, '12/09/22', 'I'),
(195, '2022-09-12', '2022-09-15', 'Emprestado', 'sdasdasda', 74, 'Oliveira', 'Isabel', 1, 2, '12/09/22', 'I'),
(196, '2022-09-12', '2022-09-15', 'Emprestado', 'dadasdad', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(197, '2022-09-12', '2022-08-15', 'Emprestado', 'ewqeqwe', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(198, '2022-09-12', '2022-09-15', 'Emprestado', 'ddsfsdfs', 71, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(199, '2022-09-12', '2022-09-15', 'Encaminhado para concerto', 'teste', 330, 'Camila', 'Isabel', 13, 3, '2022-12-09', 'I'),
(200, '2022-09-12', '2022-09-15', 'Emprestado', 'ccdscscd', 71, 'Oliveira', 'Isabel', 1, 2, '12/09/22', 'I'),
(201, '2022-09-12', '2022-09-15', 'Emprestado', 'dwdwd', 15, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(202, '2022-09-12', '2022-09-15', 'Encaminhado para concerto', 'sxsxsx', 25, 'Camila', 'Camila', 5, 2, '16/09/22', 'I'),
(203, '2022-09-12', '2022-09-17', 'Encaminhado para concerto', 'teste', 25, 'Camila', 'Isabel', 5, 3, '16/09/22', 'I'),
(204, '2022-09-12', '2022-09-11', 'Emprestado', 'rerewr', 15, 'Camila', 'Isabel', 1, 2, '12/09/22', 'I'),
(205, '2022-09-12', '2022-09-16', 'Encaminhado para concerto', 'ENVIADO PARA CONCERTOS', 123, 'Camila', 'Isabel', 14, 6, '12/09/22', 'I'),
(206, '2022-09-12', '2022-09-22', 'Encaminhado para concerto', 'teste', 25, 'Camila', 'Isabel', 12, 2, '16/09/22', 'I'),
(207, '2022-09-13', '2022-09-17', 'Encaminhado para concerto', 'teste', 200, 'Camila', 'Isabel', 5, 2, '13/09/22', 'I'),
(208, '2022-09-13', '2022-09-17', 'Encaminhado para concerto', 'teste', 500, 'Oliveira', 'Isabel', 5, 4, '13/09/22', 'I'),
(209, '2022-09-13', '2022-09-23', 'Emprestado', 'fonte emprestimo', 203, 'Camila', 'Isabel', 1, 2, NULL, 'A'),
(210, '2022-09-13', '2022-09-19', 'Encaminhado para concerto', 'teste', 403, 'Camila', 'Isabel', 13, 2, '13/09/22', 'I'),
(211, '2022-09-13', '2022-09-18', 'Encaminhado para concerto', 'Equipamento Enviado para concerto. ', 601, 'Camila', 'Isabel', 7, 1, '13/09/22', 'I'),
(212, '2022-09-13', '2022-09-22', 'Encaminhado para concerto', 'Fonte enviada para concerto.', 605, 'Camila', 'Isabel', 5, 3, '14/09/22', 'I'),
(213, '2022-09-14', '2022-09-24', 'Emprestado', 'emprestado para Amanda', 333, 'Camila', 'Isabel', 1, 3, '14/09/22', 'I'),
(214, '2022-09-14', '2022-09-24', 'Emprestado', 'teste', 654, 'Camila', 'Isabel', 1, 2, '14/09/22', 'I'),
(215, '2022-09-15', '2022-09-24', 'Emprestado', 'realizado a saída de 10 peças de andaime. ', 1001, 'Tati', 'Isabel', 1, 6, '15/09/22', 'I'),
(216, '2022-09-16', '2022-09-25', 'Encaminhado para concerto', 'encaminhado produto para concerto. ', 145, 'Camila', 'Isabel', 16, 7, '16/09/22', 'I'),
(217, '2022-09-17', '2022-09-17', 'Emprestado', 'Gggvv', 111, 'Camila', 'Isabel', 1, 2, NULL, 'A'),
(218, '2022-09-19', '2022-09-29', 'Encaminhado para concerto', 'teste', 223, 'Camila', 'Isabel', 16, 3, '19/09/22', 'I'),
(219, '2022-09-20', '2022-09-24', 'Emprestado', 'Gwgwg', 49, 'Camila', 'Isabel', 1, 4, '20/09/22', 'I'),
(220, '2022-09-19', '2022-09-20', 'Emprestado', 'Teste', 48, 'Camila', 'Isabel', 1, 4, NULL, 'A'),
(221, '2022-09-20', '2022-09-30', 'Emprestado', 'Ffffd', 51, 'Camila', 'Isabel', 1, 2, NULL, 'A');

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

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`codLogin`, `pessoa_codPessoa`, `userLogin`, `senhaLogin`) VALUES
(2, 1, 'fabio', '6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9'),
(3, 2, 'teste', 'e10adc3949ba59abbe56e057f20f883e');

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
(3, '718.357.899-27', 'Amanda Jéssica Liz da Costa', '53999876543'),
(4, '173.193.649-48', 'Sérgio Igor Rodrigues', '53999763451'),
(6, '392.474.917-54', 'Theo Raul Filipe Lopes', '5344554545'),
(7, '282.859.015-13', 'Bianca Tereza Pereira', '539998976');

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
(15, 'controle', 'intelbras'),
(25, 'Radio', 'Radio Ubiquiti'),
(27, 'Rodo', 'Rodo'),
(29, 'notebook', 'notebook HP'),
(45, 'caneta', 'caneta bik'),
(46, 'tinta', 'tinta rener'),
(47, 'tinta spray', 'spray'),
(48, 'tabua', 'tabua'),
(49, 'cano', 'cano pvc'),
(50, 'vassoura', 'vassoura'),
(51, 'canaleta', 'pvc'),
(52, 'cera', 'liquida'),
(53, 'tabuleiro', 'tabuleiro'),
(54, 'colher', 'colher'),
(55, 'talher', 'talher'),
(56, 'linha', 'linha'),
(57, 'caixas', 'caixas'),
(58, 'televisao', 'televisao'),
(59, 'teste3', 'teste3'),
(60, 'teste4', 'teste4'),
(61, 'teste5', 'teste6'),
(62, 'fone ', 'fone de ouvido'),
(63, 'teste6', 'teste6'),
(64, 'teste7', 'teste7'),
(67, 'teste7', 'teste7'),
(68, 'teste8', 'teste8'),
(69, 'teste8', 'teste8'),
(70, 'teste10', 'teste10'),
(71, 'teste11', 'teste11'),
(72, 'teste12', 'teste12'),
(73, 'teste13', 'teste13'),
(74, 'teste14', 'teste14'),
(80, 'Impressora', 'HP Smart'),
(81, 'Fonte Notebook', 'Fonte de Notebook'),
(90, 'HF Externo', 'HD Externo'),
(91, 'teste91', 'teste91'),
(92, 'camera Speed Dome', 'Intelbras 2030'),
(99, 'Roteador ', 'wirelles'),
(100, 'Nobreak', 'marca NHS'),
(101, 'placa Solar', 'Placa Solar'),
(102, 'Maquina de cortar grama', 'makita'),
(103, 'caneca', 'caneca para tomar'),
(104, 'cabo de rede', 'cabo de rede'),
(105, 'monitor', 'monitor'),
(106, 'cabo dois pares', 'cabo dois pares'),
(107, 'relogio', 'relogio'),
(109, 'maleta', 'maleta'),
(110, 'teste110', 'teste110'),
(111, 'bateria', '12 V intelbras'),
(112, 'teste112', 'teste112'),
(113, 'Radio', 'Rádio DXNET'),
(114, 'bateria radio', 'bateria radio'),
(115, 'antena parabolica', 'antena parabolica'),
(116, 'alcool gel', 'alcool gel'),
(117, 'teste117', 'teste117'),
(118, 'teste118', 'teste118'),
(119, 'teste119', 'teste119'),
(120, 'teste120', 'teste120'),
(121, 'teste121', 'teste121'),
(122, 'teste122', 'teste122'),
(123, 'FECHADURA', 'FECHADURA'),
(127, 'teste127', 'teste127'),
(128, 'teste128', 'teste128'),
(145, 'mouse sem fio', 'mouse sem fio dell'),
(200, 'Pneu', 'Pneu Saveiro 7364'),
(203, 'fonte notebook', 'Fonte Notebook HP'),
(222, 'Antena', 'Enge'),
(223, 'telefone', 'telefone de mesa'),
(330, 'cortador de grama', 'cortador de grama'),
(333, 'teste333', 'teste333'),
(403, 'radio', 'radio'),
(490, 'pincel', 'pintura'),
(500, 'Cadeira', 'Cadeira de escritório '),
(601, 'Roteador ', 'Roteador action 2001'),
(605, 'Fonte 12 V', 'Fonte 12 V intelbras'),
(654, 'fonte', 'fonte'),
(666, 'camera IP', 'bullet intelbras'),
(777, 'mesa', 'mesa'),
(1001, 'andaimes', 'peças de andaime'),
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
  MODIFY `codEmpresa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `codCadastro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `codLogin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `codPessoa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
