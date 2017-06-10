-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 06:50 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.4-14+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categoria_UNIQUE` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Ação'),
(7, 'Comédia'),
(6, 'Ficção'),
(4, 'Suspense'),
(3, 'Terror');

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(45) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classe_UNIQUE` (`classe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`id`, `classe`, `valor`) VALUES
(1, 'Lançamentos 24 Horas', 15),
(2, 'Promoção', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` char(14) NOT NULL,
  `datanascimento` date NOT NULL,
  `telefone` varchar(17) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `datanascimento`, `telefone`) VALUES
(2, 'Arnaldo Ishwarzeneguer', 'aish@gmail.com', '123.456.789-00', '1967-10-12', '(44) 9990-12345'),
(3, 'Silvestre Estalone', 'silvestre@gmail.com', '123.456.123-44', '1979-12-09', '(44) 9871-71234'),
(4, 'Escalete Diorransson', 'escarlete@gmail.com', '999.999.999-99', '1980-12-01', '(44) 9876-12345'),
(5, 'Diogo Vanderlão', 'dioguinho@gmail.com', '121.212.121-21', '1993-05-07', '(44) 1234-56781');

-- --------------------------------------------------------

--
-- Table structure for table `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `original` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `sinopse` text NOT NULL,
  `imagem` varchar(20) NOT NULL,
  `ativo` enum('Sim','Não') NOT NULL,
  `classe_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_filme_classe_idx` (`classe_id`),
  KEY `fk_filme_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `filme`
--

INSERT INTO `filme` (`id`, `titulo`, `original`, `ano`, `sinopse`, `imagem`, `ativo`, `classe_id`, `categoria_id`) VALUES
(3, 'Guardiões da Galáxia', 'Guardians of the Galaxy', 2014, 'Na trama, o piloto americano Peter Quill se vê alvo de uma caçada quando ele rouba um objeto desejado pelo alien da raça kree Ronan, o Acusador. O humano acaba se juntando a um grupo de renegados alienígenas - Rocket Raccoon, Groot, Drax - O Destruidor e Gamora -, formando os Guardiões da Galáxia.', '1486640941', 'Sim', 2, 1),
(4, 'Rogue One', 'Rogue One', 2016, 'A trama se passa antes do Episódio IV: Uma Nova Esperança e trata da tentativa de roubo dos planos da Estrela da Morte. Um grupo de pilotos enfrenta a missão de suas vidas ao tentar buscar o projeto da arma espacial; não haverá jedis no filme.', '1486641934', 'Sim', 1, 6),
(5, 'O Homem nas Trevas', 'Don''t Breath', 2016, 'Um trio de assaltantes planeja um roubo na casa de um homem cego, imaginando que têm o plano perfeito. Mas eles estão errados.', '1486641987', 'Sim', 2, 4),
(6, 'Batman Vs Superman', 'Batman Vs Superman', 2016, 'Batman Vs Superman - A Origem da Justiça (Batman vs Superman: Dawn of Justice) é título do filme que unirá Batman (Ben Affleck) e Superman (Henry Cavill) nos cinemas, com estreia prevista para 24 de março de 2016.\r\n\r\nEm Batman Vs Superman - A Origem da Justiça também serão mostrados Lex Luthor (Jesse Einsenberg), Mulher-Maravilha (Gal Dadot), Flash (Ezra Miller), Ciborgue (Ray Fisher) e Aquaman (Jason Momoa).\r\n\r\nCom a união de todos esses personagens, Batman vs Superman - A Origem da Justiça promete ser o embrião da Liga da Justiça, grupo de heróis da DC Comics.', '1486642064', 'Sim', 1, 1),
(7, 'Vingadores - A Era de Ultron', 'Vingadores Age of Ultron', 2015, 'Quando Tony Stark (Robert Downey Jr.) tenta alavancar um programa de paz virtual, as coisas dão errado e os maiores heróis da Terra enfrentam o teste definitivo enquanto o destino do planeta está em jogo. Quando o vilanesco Ultron (James Spader) surge, cabe aos Vingadores impedi-lo de concluir os seus planos terríveis. Para tanto, logo surgem alianças inesperadas que abrem caminho para uma aventura global épica e única.', '1486642171', 'Sim', 2, 1),
(8, 'Dr. Estranho', 'Dr Strange', 2016, 'Criado oficialmente pelo roteirista Stan Lee e pelo desenhista Steve Ditko, Stephen Vincent Strange, o Doutor Estranho, apareceu pela primeira vez em Strange Tales #110, de julho de 1963. Inicialmente apresentado como um "mestre da magia negra", Strange assumiu dez anos depois, com a morte de seu mestre, o título de Mago Supremo; desde então, é conhecido como o personagem mais poderoso do universo mágico e místico da Marvel Comics.', '1486642221', 'Sim', 1, 1),
(9, 'Centopéia Humana', 'Human Centipede', 2011, 'A coprodução entre Holanda e Reino Unido, escrita e dirigida por Tom Six, acompanha um cientista que captura cobaias - de preferência, turistas desavisadas - para um experimento singular: interligar seus sistemas digestivos para criar a centopeia humana do título.\r\n\r\nO filme pode ser o primeiro de uma trilogia ou uma série (daí seu título oficial, The Human Centipede (First Sequence)) e estreia no dia 30 de abril nos EUA, tanto em cinemas em Nova York quanto em vídeo on demand. Depois disso, vai para o mercado de filmes no Festival de Cannes a partir de 12 de maio, onde pode ser negociado com mais territórios.', '1486642354', 'Sim', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `filme_locacao`
--

CREATE TABLE IF NOT EXISTS `filme_locacao` (
  `filme_id` int(11) NOT NULL,
  `locacao_id` int(11) NOT NULL,
  `datadevolucao` date NOT NULL,
  `valor` double NOT NULL,
  `status` enum('Locado','Devolvido') NOT NULL,
  `devolucao` date DEFAULT NULL,
  PRIMARY KEY (`filme_id`,`locacao_id`),
  KEY `fk_filme_has_locacao_locacao1_idx` (`locacao_id`),
  KEY `fk_filme_has_locacao_filme1_idx` (`filme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filme_locacao`
--

INSERT INTO `filme_locacao` (`filme_id`, `locacao_id`, `datadevolucao`, `valor`, `status`, `devolucao`) VALUES
(3, 3, '2017-02-11', 5, 'Devolvido', '2017-02-10'),
(3, 4, '2017-02-12', 5, 'Locado', '0000-00-00'),
(4, 4, '2017-02-13', 15, 'Locado', '0000-00-00'),
(6, 3, '2017-02-11', 15, 'Devolvido', '2017-02-15'),
(6, 6, '2017-02-17', 15, 'Locado', '0000-00-00'),
(7, 4, '2017-02-11', 5, 'Locado', '0000-00-00'),
(8, 3, '2017-02-11', 15, 'Devolvido', '2017-02-15'),
(9, 1, '2017-02-15', 5, 'Devolvido', '2017-02-16'),
(9, 6, '2017-02-17', 5, 'Locado', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `locacao`
--

CREATE TABLE IF NOT EXISTS `locacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `status` enum('Pago','A Pagar') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_locacao_cliente1_idx` (`cliente_id`),
  KEY `fk_locacao_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `locacao`
--

INSERT INTO `locacao` (`id`, `data`, `cliente_id`, `status`, `usuario_id`) VALUES
(1, '0000-00-00', 2, 'A Pagar', 1),
(2, '0000-00-00', 2, 'A Pagar', 1),
(3, '2017-02-10', 2, 'Pago', 1),
(4, '2017-02-10', 4, 'A Pagar', 1),
(5, '2017-02-15', 4, 'Pago', 1),
(6, '2017-02-16', 5, 'A Pagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` enum('Sim','Não') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `login`, `senha`, `ativo`) VALUES
(1, 'Anderson Burnes', 'burnes@professorburnes.com', 'burnes', '81dc9bdb52d04dc20036dbd8313ed055', 'Sim');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filme_classe` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `filme_locacao`
--
ALTER TABLE `filme_locacao`
  ADD CONSTRAINT `fk_filme_has_locacao_filme1` FOREIGN KEY (`filme_id`) REFERENCES `filme` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filme_has_locacao_locacao1` FOREIGN KEY (`locacao_id`) REFERENCES `locacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `locacao`
--
ALTER TABLE `locacao`
  ADD CONSTRAINT `fk_locacao_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_locacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
