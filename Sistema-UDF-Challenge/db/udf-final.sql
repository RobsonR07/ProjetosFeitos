-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 03:07
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
-- Database: `udf-challenge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) NOT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `senha_aluno` varchar(32) NOT NULL,
  `curso_aluno` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `senha_aluno`, `curso_aluno`) VALUES
(19910622, 'Robson Ribeiro', 'robson.robygol@gmail.com', '69727fef27a967e0f67cfece8fd225b8', 'AnÃ¡lise E Desenvolvimento De Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `code`
--

CREATE TABLE `code` (
  `id_Code` int(11) NOT NULL,
  `Code_ForRegister` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `code`
--

INSERT INTO `code` (`id_Code`, `Code_ForRegister`) VALUES
(3, 'SBBR-2584-PHPS-1379-C0D3-3ND');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desafiogeral`
--

CREATE TABLE `desafiogeral` (
  `id_desafio` int(11) NOT NULL,
  `prazo_desafio` date NOT NULL,
  `descricao_desafio` text NOT NULL,
  `linguagem_desafio` varchar(40) NOT NULL,
  `dificuldade_desafio` varchar(40) NOT NULL,
  `professor_id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome_professor` varchar(255) NOT NULL,
  `email_professor` varchar(255) NOT NULL,
  `senha_professor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `email_professor`, `senha_professor`) VALUES
(2, 'Robson Ribeiro', 'robson.robygol@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostadesafio`
--

CREATE TABLE `respostadesafio` (
  `id_resposta` int(10) UNSIGNED NOT NULL,
  `desafio_id_desafio` int(10) UNSIGNED NOT NULL,
  `aluno_id_aluno` int(10) UNSIGNED NOT NULL,
  `resposta_desafio` text,
  `data_resposta` date DEFAULT NULL,
  `correcao_resposta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id_Code`);

--
-- Indexes for table `desafiogeral`
--
ALTER TABLE `desafiogeral`
  ADD PRIMARY KEY (`id_desafio`,`professor_id_professor`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `respostadesafio`
--
ALTER TABLE `respostadesafio`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `respostadesafio_FKIndex1` (`desafio_id_desafio`),
  ADD KEY `respostadesafio_FKIndex2` (`aluno_id_aluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desafiogeral`
--
ALTER TABLE `desafiogeral`
  MODIFY `id_desafio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `respostadesafio`
--
ALTER TABLE `respostadesafio`
  MODIFY `id_resposta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
