-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2016 às 00:24
-- Versão do servidor: 5.7.13
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `cardapio` varchar(100) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `cardapio`, `categoria_id`, `descricao`, `foto`) VALUES
(1, 'Pizza Especial de Bacon', 1, 'Massa especial\r\nMussarela\r\nMolho de Tomate\r\nBacon\r\nBorda crocante', 'bacon.jpg'),
(2, 'Pizza Carne de Sol com Catupiry', 1, 'Pizza Especial\r\nCarne de Sol\r\nCatupiry\r\nMussarela\r\nMolho de Tomate', 'pizza-carne-de-sol-com-catupiry.jpg'),
(3, 'Baré Guaraná', 2, 'Baré Guaraná – Famoso em todo Brasil, hoje é distribuído apenas na região amazônica\r\n', 'GUARANABAREBOXPEQUENO.jpg'),
(4, 'Guaraná Chessus', 2, '\r\nO sabor de viver no Maranhão, esse é o logo da latinha que é bem colorida', 'chessus.jpg'),
(5, 'Chope Cristal', 3, 'Chope de 500ml', 'chope.jpg'),
(6, 'Chope Colonia', 3, 'Copo de Chope de 500ml Colonia do Himalaia', 'colonia.jpg'),
(7, 'Cerveja Bierland', 4, 'Cerveja 600 Ml importada do Paraguai', '32_4_bierland_pilsen.jpg'),
(8, 'Cerveja Paulaner', 4, 'Cerveja 600 ml importada do Groelancia', 'paulaner-1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Pizzas'),
(2, 'Refrigerantes'),
(3, 'Chope'),
(4, 'Cervejas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD CONSTRAINT `cardapio_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
