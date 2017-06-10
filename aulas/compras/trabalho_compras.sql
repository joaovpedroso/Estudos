-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2016 às 23:47
-- Versão do servidor: 5.7.13
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_compras`
--

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
(1, 'Tablets'),
(2, 'Tvs'),
(3, 'Celulares'),
(4, 'Notebooks');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `categoria_id`, `descricao`, `foto`) VALUES
(1, 'Smartphone Moto G 4 Play DTV Colors Dual Chip Android 6.0 Tela 5\'\' 16GB Câmera 8MP - Preto', 3, 'Smartphone Moto G 4 Play DTV Colors Dual Chip Android 6.0 Tela 5\'\' 16GB Câmera 8MP - Preto\r\nO Smartphone Moto G4 Play DTV Colors foi criado para você que quer registrar tudo o que acontece ao seu redor e, ao mesmo tempo, ter uma velocidade super rápida de internet, associada a uma bateria que dura o dia todo.', '128361278_1GG.png'),
(2, 'Smartphone Samsung Galaxy J7 Duos Dual Chip Android 5.1 Tela 5.5" 16GB 4G Câmera 13MP - Dourado', 3, 'Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.\r\nVerifique com os fabricantes do produto e de seus componentes eventuais limitações à utilização de todos os recursos e funcionalidades.\r\nImagens Meramente Ilustrativas.', '124196148_1GG.jpg'),
(3, 'Tablet Kid Pad Quad Core Android 4.4 Wi-Fi 7 8GB Rosa - Multilaser', 1, 'Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.\r\nVerifique com os fabricantes do produto e de seus componentes eventuais limitações à utilização de todos os recursos e funcionalidades.\r\nImagens Meramente Ilustrativas.', '123418520_1GG.jpg'),
(4, 'Tablet Multilaser M7S 8GB Wi-Fi 7" Android 4.4 Quad Core - Preto', 1, 'Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.\r\nVerifique com os fabricantes do produto e de seus componentes eventuais limitações à utilização de todos os recursos e funcionalidades.\r\nImagens Meramente Ilustrativas.', '125352341_1GG.jpg'),
(5, 'Smart TV LED 32" Samsung UN32J4300AGXZD HD com Conversor Digital 2 HDMI 1 USB Wi-Fi 120Hz (', 2, 'Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.\r\nVerifique com os fabricantes do produto e de seus componentes eventuais limitações à utilização de todos os recursos e funcionalidades.\r\nImagens Meramente Ilustrativas.', '122701411_1GG.png'),
(6, 'Smart TV LED Android 55\'\' Philips 55PUG6700/78 Ultra HD 4K com Conversor Digital 3 HDMI 3 USB Wi-Fi 120Hz Dual Core ', 2, 'Todas as informações divulgadas são de responsabilidade do fabricante/fornecedor.\r\nVerifique com os fabricantes do produto e de seus componentes eventuais limitações à utilização de todos os recursos e funcionalidades.\r\nImagens Meramente Ilustrativas.', '125539405_1GG.png'),
(7, 'Notebook Samsung Expert X40 Intel Core i7 8GB 1TB 2GB Memória Dedicada LED 15,6" Windows 10 Branco', 4, 'Marca	Samsung\r\nModelo	NP270E5K-XW3BR\r\nCor	Branco\r\nPolegadas da Tela	15.6"\r\nSistema Operacional	Windows 10\r\nProcessador	Intel Core i7\r\nModelo Processador	5500U (2.4 GHz até 3.0 GHz)\r\nCache	', '124793591_1GG.jpg'),
(8, 'Notebook Asus X555LF Intel Core i5 6GB (2GB de Memória Dedicada) 1TB 15.6" Windows 10 - Preto', 4, 'Para você que procura um notebook com alta performance e acabamento sofisticado, o Notebook ASUS X555LF é ideal. Perfeito para executar até os aplicativos mais pesados, já que conta com toda a tecnologia da 5ª geração de Processadores Intel - que estão mais rápidos e com melhor eficiência térmica - uma poderosa placa de vídeo NVIDIA GeForce e ainda todas as tecnologias exclusivas da ASUS.\r\n\r\nFoco no usuário\r\nO Asus X555LF é ideal para trabalhar ou se divertir. Além de excelente desempenho em multitarefas, você ouve músicas e assiste filmes com uma incrível qualidade sonora, graças à tecnologia ASUS SonicMaster.\r\n\r\nDesempenho gráfico superior\r\nCom placa de vídeo NVidia GeForce 930M e 2GB de memória dedicada, o equipamento entrega o melhor desempenho em fotos, vídeos ou jogos.\r\n\r\nDiversas opções de conectividade\r\nCom portas USB 3.0, HDMI, VGA e um leitor de cartão 3-em-1 SD/SDHC/SDXC, o Asus X555LF garantem a compatibilidade com uma ampla variedade de dispositivos.\r\n', '124506450_1GG.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
