-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Abr-2020 às 10:17
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `horario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `municipio` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id`, `nome`, `municipio`) VALUES
(1, 'JVA', 'CanindÃ©'),
(2, 'EEEP JosÃ© Vidal Alves', 'CanindÃ©');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `disciplina` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `professor` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `escola` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `turma` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `aula` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `diadasemana` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `disciplina`, `professor`, `escola`, `turma`, `aula`, `diadasemana`) VALUES
(2, 'FormaÃ§Ã£o para cidadania', 'Jonas', 'JosÃ© Vidal', '1Âº administraÃ§Ã£o', '1Âº e 2Âº', 'Segunda'),
(3, 'MatemÃ¡tica', 'CristovÃ£o', 'JosÃ© Vidal', '1Âº administraÃ§Ã£o', '3Âº e 4º', 'Segunda'),
(4, 'Espanhol', 'PatrÃ­cia', 'JosÃ© Vidal', '1Âº administraÃ§Ã£o', '5Âº', 'Segunda'),
(5, 'Biologia', 'AnizÃ­a', 'JosÃ© Vidal', '1Âº administraÃ§Ã£o', '6Âº e 7Âº', 'Segunda'),
(6, 'Geografia', 'MoisÃ©s', 'JosÃ© Vidal', '1Âº administraÃ§Ã£o', '8Âº e 9Âº', 'Segunda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `escola` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `serie` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `escola`, `serie`) VALUES
(1, 'AdministraÃ§Ã£o', 'JosÃ© Vidal', '1Âº'),
(2, 'Enfermagem', 'JosÃ© Vidal', '1Âº'),
(3, 'InformÃ¡tica', 'JosÃ© Vidal', '1Âº'),
(4, 'Rede de computadores', 'JosÃ© Vidal', '1Âº'),
(5, 'AgropecuÃ¡ria', 'JosÃ© Vidal', '2Âº'),
(6, 'Enfermagem', 'JosÃ© Vidal', '2Âº'),
(7, 'FinanÃ§as', 'JosÃ© Vidal', '2Âº'),
(8, 'InformÃ¡tica', 'JosÃ© Vidal', '2Âº'),
(9, 'Enfermagem', 'JosÃ© Vidal', '3Âº'),
(10, 'InformÃ¡tica', 'JosÃ© Vidal', '3Âº'),
(11, 'Rede de computadores', 'JosÃ© Vidal', '3Âº'),
(12, 'SeguranÃ§a do trabalho', 'JosÃ© Vidal', '3Âº');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Rafaela', 'rafaela1@gmail.com', '123'),
(2, 'Rafaela', 'rafaela1@gmail.com', '123'),
(3, 'Rafaela', 'rafaela1@gmail.com', '123'),
(4, 'Rafaela', 'rafaela1@gmail.com', '123'),
(5, 'erica', 'erica@gmail.com', '123'),
(6, 'erica', 'erica@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
