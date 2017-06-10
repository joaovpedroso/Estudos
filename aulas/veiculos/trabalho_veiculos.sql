-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2016 às 01:11
-- Versão do servidor: 5.7.13
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'BMW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `modelo`, `marca_id`, `descricao`, `foto`) VALUES
(1, 'HONDA CITY EX 1.5 AT FLEX 2013/2013', 2, 'Controle de som no volante, Trio elétrico, Farol de milha | ATENÇÃO! Devido a grande rotatividade em nosso estoque, se faz necessário a consulta diretamente em nossa loja para certificar de que o veículo ainda se encontra sob nossos cuidados. O valor do anúncio deve ser confirmado, pois o mesmo pode ter sido ajustado em nossa loja e ainda não ter sido modificado neste site. Obrigado pela compreensão.', 'Nga2zb2xZ.jpg'),
(2, 'HONDA CIVIC LXS C-AT 1.8 16V 4P (GG) COMPLETO 2008/2008', 2, 'HONDA CIVIC 1.8 Opcionais Airbag, Alarme, Ar condicionado, Ar quente, Banco com regulagem de altura, CD Player, Desembaçador traseiro, Direção hidráulica, Encosto de cabeça traseiro, Freio ABS, Retrovisores elétricos, Rodas de liga leve, Travas elétricas, Vidros elétricos, Volante com regul', 'cff5141523ab9be79ec20151c814345d.jpg'),
(3, 'TOYOTA COROLLA 2.0 XEI 16V FLEX 4P AUT 2011/2012', 1, 'Carro impecável, Completo, Ar Digital, Banco de Couro, Automático, Câmbio Borboleta, Computador de Bordo, Sensor de Estacionamento, Possui Manual e Chave Reserva. Não Perca esta Grande Oportunidade. ', '9O83yQzDK.jpg'),
(4, 'TOYOTA COROLLA FIELDER XEI 1.8 16V (AUT.) 4P 2008/2009', 1, 'Air bag duplo, Air bag, Alarme, Ar condicionado, Ar digital, Ar quente, Banco do motorista com ajuste de altura, Bancos de couro, Bluetooth, Câmbio automático, Cd player, Computador de bordo, Desembaçador traseiro, Direção hidráulica, Encosto de cabeça traseiro, Farol de neblina, Freios abs', 'En42QKWeX.jpg'),
(5, 'BMW 118I 2.0 16V 4P 2011/2012', 3, 'Alarme, Ar condicionado, Câmbio automático, Direção hidráulica, Rodas de liga leve, Trava elétrica, Vidros elétricos, Air bag duplo, Ar quente, Bancos de couro, Desembaçador traseiro, Freios abs, Retrovisor elétrico', 'Dd16J17No.jpg'),
(6, 'BMW 328IA EXCLUSIVE 2.8 24V N.SERIE 4P 2000/2000', 3, 'arro em excelente estado de conservação todas revisões/manutenções em dia. Carro comigo a 5 anos. Itens trocado em manutenção PREVENTIVA *Todo sistema de Arrefecimento (Revisão dos 100 mil km recomendado BMW)', '4e9cebb8cfac6f21ad4158ce46ff53c6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marca_id` (`marca_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
