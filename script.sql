-- Database: `school`
create database school;

-- --------------------------------------------------------
-- Estrutura da tabela `candidatos`

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 NOT NULL,
  `telefone` int(11) NOT NULL,
  `bi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `media_final` varchar(10) CHARACTER SET utf8 NOT NULL,
  `antiga_escola` varchar(50) CHARACTER SET utf8 NOT NULL,
  `curso` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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
 
