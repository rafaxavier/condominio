-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/04/2019 às 12:47
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- Versão do PHP: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `condominio`
--

CREATE TABLE `condominio` (
  `id_condominio` int(11) NOT NULL,
  `data` date NOT NULL,
  `copasa` double NOT NULL,
  `cemig` double NOT NULL,
  `tarifa` double NOT NULL,
  `limpeza` double NOT NULL,
  `outros` double NOT NULL,
  `qtde_morador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Fazendo dump de dados para tabela `condominio`
--

INSERT INTO `condominio` (`id_condominio`, `data`, `copasa`, `cemig`, `tarifa`, `limpeza`, `outros`, `qtde_morador`) VALUES
(1, '2018-12-12', 199.22, 10.23, 34, 57, 32, 8),
(2, '2018-08-21', 45.6, 33.1, 23, 53, 24, 6),
(3, '2018-11-02', 22, 183.32, 32, 63, 25, 7),
(4, '2019-09-13', 30, 12, 21, 23, 45, 5),
(5, '2019-05-22', 23, 53, 13, 45, 43, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `condominio`
--
ALTER TABLE `condominio`
  ADD PRIMARY KEY (`id_condominio`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `condominio`
--
ALTER TABLE `condominio`
  MODIFY `id_condominio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
