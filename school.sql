-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 08-Maio-2022 às 07:01
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` char(1) CHARACTER SET latin1 NOT NULL,
  `telefone` int(11) NOT NULL,
  `bi` varchar(20) CHARACTER SET latin1 NOT NULL,
  `media_final` varchar(10) CHARACTER SET latin1 NOT NULL,
  `antiga_Escola` varchar(50) CHARACTER SET latin1 NOT NULL,
  `curso` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `idade`, `sexo`, `telefone`, `bi`, `media_final`, `antiga_Escola`, `curso`, `estado`) VALUES
(1, 'Chris Alberto', 18, 'M', 945213730, '77777777', '19', 'Jomery', 1, 1),
(2, 'Hernany Simão', 17, 'M', 935925000, '1234', '14', 'ipil', 2, 1),
(3, 'Ludmila de Carvalho', 17, 'F', 923444333, '00000000000000', '16', 'IPIL', 3, 1),
(4, 'Ludmila da Costa', 19, 'F', 974123666, 'cccccccccccccc', '19', 'Escola Nossa senhora dos remedios', 4, 1),
(5, 'Chris Alberto Bem mau', 18, 'M', 945213730, '00000000000000', '20', 'Colegio Jomery', 1, 1),
(6, 'Teste teste', 14, 'M', 12347, 'cccccccccccccc', '14', 'Colegio Jomery', 5, 1),
(7, 'Teste teste', 14, 'M', 12347, 'cccccccccccccc', '14', 'Colegio Jomery', 5, 0),
(8, 'Chris Alberto', 13, 'M', 12347, 'cccccccccccccc', '19', 'Escola Nossa senhora dos remedios', 6, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `curso`) VALUES
(1, 'Informática'),
(2, 'Eletricidade'),
(3, 'Química'),
(4, 'Construção Civil'),
(5, 'Mecânica'),
(6, 'Medicina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(32) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `senha`) VALUES
(1, 'cristianoalberto@gmail.com', '12345'),
(2, 'hernanysimao@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
