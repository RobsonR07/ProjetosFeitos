-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2018 às 20:56
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `id_client` int(10) UNSIGNED NOT NULL,
  `nome_client` varchar(80) DEFAULT NULL,
  `cpf_client` varchar(24) DEFAULT NULL,
  `cep_client` varchar(10) DEFAULT NULL,
  `endereco_client` varchar(80) DEFAULT NULL,
  `cidade_client` varchar(40) DEFAULT NULL,
  `uf_client` char(2) DEFAULT NULL,
  `numero_client` char(4) DEFAULT NULL,
  `complemento_client` varchar(20) DEFAULT NULL,
  `telefone_client` varchar(24) DEFAULT NULL,
  `senha_client` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id_client`, `nome_client`, `cpf_client`, `cep_client`, `endereco_client`, `cidade_client`, `uf_client`, `numero_client`, `complemento_client`, `telefone_client`, `senha_client`) VALUES
(1, 'Robson Ribeiro', '062.517.171-30', '71070-010', 'QE 38 Conjunto A', 'BrasÃ­lia', 'DF', '67', '', '(61) 99342-6942', '8f53e82e508c96115551317048cba97e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cobertura`
--

CREATE TABLE `cobertura` (
  `id_cobertura` int(10) UNSIGNED NOT NULL,
  `sabor_cobertura` varchar(40) DEFAULT NULL,
  `opcionais_cobertura` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cobertura`
--

INSERT INTO `cobertura` (`id_cobertura`, `sabor_cobertura`, `opcionais_cobertura`) VALUES
(2, 'Sem Cobertura', 'Sem Opcionais'),
(3, 'Chocolate ', 'Com Granulado'),
(4, 'Chantily', 'Com Morango');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(10) UNSIGNED NOT NULL,
  `nome_funcionario` varchar(40) DEFAULT NULL,
  `cpf_funcionario` varchar(24) NOT NULL,
  `cargo_funcionario` varchar(40) DEFAULT NULL,
  `sexo_funcionario` varchar(2) DEFAULT NULL,
  `senha_funcionario` varchar(32) DEFAULT NULL,
  `cep_funcionario` varchar(15) DEFAULT NULL,
  `endereco_funcionario` varchar(255) DEFAULT NULL,
  `cidade_funcionario` varchar(40) DEFAULT NULL,
  `uf_funcionario` char(2) DEFAULT NULL,
  `telefone_funcionario` varchar(20) DEFAULT NULL,
  `numero_funcionario` int(10) NOT NULL,
  `complemento_funcionario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `cpf_funcionario`, `cargo_funcionario`, `sexo_funcionario`, `senha_funcionario`, `cep_funcionario`, `endereco_funcionario`, `cidade_funcionario`, `uf_funcionario`, `telefone_funcionario`, `numero_funcionario`, `complemento_funcionario`) VALUES
(19, 'Robson', '062.517.171-30', 'Chef', 'M', '202cb962ac59075b964b07152d234b70', '71070-010', 'QE 38 Conjunto A', 'BrasÃ­lia', 'DF', '(61) 99342-6942', 67, '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionariocurriculo`
--

CREATE TABLE `funcionariocurriculo` (
  `id_curriculo` int(10) UNSIGNED NOT NULL,
  `nome_funcionario` varchar(40) DEFAULT NULL,
  `cpf_funcionario` varchar(24) NOT NULL,
  `cargo_funcionario` varchar(40) DEFAULT NULL,
  `sexo_funcionario` char(2) DEFAULT NULL,
  `senha_funcionario` varchar(32) DEFAULT NULL,
  `cep_funcionario` varchar(15) DEFAULT NULL,
  `endereco_funcionario` varchar(255) DEFAULT NULL,
  `numero_funcionario` int(8) NOT NULL,
  `complemento_funcionario` varchar(40) NOT NULL,
  `cidade_funcionario` varchar(40) DEFAULT NULL,
  `uf_funcionario` char(2) DEFAULT NULL,
  `telefone_funcionario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `sabor_id_sabor` int(10) UNSIGNED NOT NULL,
  `cobertura_id_cobertura` int(10) UNSIGNED NOT NULL,
  `recheio_id_recheio` int(10) UNSIGNED NOT NULL,
  `client_id_client` int(10) UNSIGNED NOT NULL,
  `peso_pedido` int(11) DEFAULT NULL,
  `forma_pedido` varchar(40) DEFAULT NULL,
  `dataentrega_pedido` date DEFAULT NULL,
  `data_pedido` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recheio`
--

CREATE TABLE `recheio` (
  `id_recheio` int(10) UNSIGNED NOT NULL,
  `sabor_recheio` varchar(40) DEFAULT NULL,
  `opcionais_recheio` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recheio`
--

INSERT INTO `recheio` (`id_recheio`, `sabor_recheio`, `opcionais_recheio`) VALUES
(2, 'Sem Recheio', 'Sem Opcionais'),
(3, 'Chocolate', 'Com PedaÃ§os de Chocolate'),
(4, 'Caramelho', 'Sem Opcional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sabor`
--

CREATE TABLE `sabor` (
  `id_sabor` int(10) UNSIGNED NOT NULL,
  `nome_sabor` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sabor`
--

INSERT INTO `sabor` (`id_sabor`, `nome_sabor`) VALUES
(1, 'Cenoura'),
(2, 'Chocolate'),
(3, 'Cenoura'),
(4, 'Baunilha'),
(5, 'Laranja'),
(6, 'Chocolate Branco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `cobertura`
--
ALTER TABLE `cobertura`
  ADD PRIMARY KEY (`id_cobertura`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `funcionariocurriculo`
--
ALTER TABLE `funcionariocurriculo`
  ADD PRIMARY KEY (`id_curriculo`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedido_FKIndex1` (`client_id_client`),
  ADD KEY `pedido_FKIndex2` (`recheio_id_recheio`),
  ADD KEY `pedido_FKIndex3` (`cobertura_id_cobertura`),
  ADD KEY `pedido_FKIndex4` (`sabor_id_sabor`);

--
-- Indexes for table `recheio`
--
ALTER TABLE `recheio`
  ADD PRIMARY KEY (`id_recheio`);

--
-- Indexes for table `sabor`
--
ALTER TABLE `sabor`
  ADD PRIMARY KEY (`id_sabor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cobertura`
--
ALTER TABLE `cobertura`
  MODIFY `id_cobertura` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `funcionariocurriculo`
--
ALTER TABLE `funcionariocurriculo`
  MODIFY `id_curriculo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `recheio`
--
ALTER TABLE `recheio`
  MODIFY `id_recheio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sabor`
--
ALTER TABLE `sabor`
  MODIFY `id_sabor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
