-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2016 às 14:58
-- Versão do servidor: 5.7.13
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculdade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `curso` varchar(150) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `perfil` text NOT NULL,
  `mercado` text NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `curso`, `tipo_id`, `perfil`, `mercado`, `area`) VALUES
(1, 'Curso Superior de Marketing', 1, 'O curso de Marketing forma profissionais aptos a realizar a gestão mercadológica das organizações, através do processo de entender e atender o mercado em um mundo de consumidores cada vez mais exigentes e com grande diversidade de produtos. Este profissional estará apto a utilizar as diversas ferramentas estratégicas de mercado para criar, desenvolver e acompanhar todas as atividades que envolvam essa comunicação.\r\n\r\n', 'É uma profissão com colocação assegurada e perspectivas reais de carreira, já que a atividade de marketing tem interface com todas as ações das organizações.', 'O profissional de marketing pode atuar em departamentos de marketing de pequenas, médias e grandes empresas do setor público e privado, nas áreas comerciais, de serviços e industriais, agências de comunicação e marketing, agências de publicidade e propaganda, empresas de pesquisa, consultoria empresarial.'),
(2, 'Curso Superior de Processos Gerenciais ', 1, 'Este curso forma profissionais aptos a atuar na gestão de pequenas e médias empresas, levando em consideração as mudanças técnico-científicas, habilidades específicas de gestão, valores sociais do conhecimento e novos valores do mundo do trabalho.', 'Há ainda um mercado em franca expansão para quem quer trabalhar como autônomo. Nesse caso, o Tecnólogo em Processos Gerenciais orienta pequenas e médias empresas a gerenciar os negócios.', 'O profissional de Processos Gerenciais - Gestão Empresarial tem diversas oportunidades de atuação, seja em empresas privadas ou estatais, de pequeno, médio e grande portes e órgãos da administração pública.'),
(3, 'Curso Superior de Sistemas para Internet', 1, 'Este profissional atua com tecnologias emergentes como computação móvel, redes sem fio e sistemas distribuídos. Cuidar da implantação, atualização, manutenção e segurança dos sistemas para internet também são suas atribuições.', 'O setor editorial e os provedores de Internet costumam também absorver o tecnólogo em Sistemas para Internet, que pode trabalhar como webdesign e fazer a manutenção de sites de pequenas, médias e grandes empresas.', 'Em função da ampla utilização de tecnologias da informação nas indústrias e empresas de comercialização de produtos e prestadoras de serviços, estas são as principais empregadoras do Professional. O Tecnólogo em Sistemas para Internet também estará apto a iniciar o seu próprio negócio de desenvolvimento e consultoria em aplicações para a Internet.'),
(4, 'WebDev ALFA - Desenvolvimento de Aplicações para Web e Dispositivos Móveis', 2, 'Profissionais da área, formados em Tecnologia em Análise e Desenvolvimento de Sistemas, Tecnologia em Processamento de Dados, Tecnologia em Informática, Tecnologia em Sistemas para Internet, Sistemas de Informação, Ciência da Computação e áreas afins.\r\n\r\n\r\nO Curso de Pós-Graduação em Desenvolvimento de Aplicações para Internet e Dispositivos Móveis conta com professores renomados e atuantes no Mercado de Trabalho como:\r\n\r\n\r\n\r\nElton Luis Minetto, CEO da CodeRockr (Joinville-SC), considerado um dos melhores Desenvolvedores Back-end do País, Zend Framework Evangelist e palestrante do PHP Conference.\r\n\r\nEr Galvão Abbott, presidente da ABRAPHP, Coordenador do PHPConference, Zend Framework Evangelist e profissional PHP há mais de 20 anos.\r\n\r\nAndré Noel, Mestre em Ciência da Computação pela UEM, Programador e Blogger autor do famoso Blog Vida de Programador.\r\n\r\nJean Carlo (Suissa), nome forte no desenvolvimento com JavaScript, Evangelista de novas Tecnologias e Palestrante conhecido nacionalmente.\r\n', 'O Mercado da Área de TI segue aquecido, sendo um dos que mais cresceram nos últimos anos, com mais de 100 mil vagas em aberto. A falta de profissionais qualificados na área, principalmente a de desenvolvedores Front-end, Back-end e de Dispositivos Móveis faz com que o número de Vagas e Salários só aumente.', 'O profissional da Área de Desenvolvimento de Aplicações para Web e Dispositivos Móveis poderá atender tanto no desenvolvimento Front-end de Sites Dinâmicos, como no desenvolvimento Back-end de grandes Sistemas Online e Aplicações para Dispositivos Móveis, uma das áreas mais promissoras da TI.'),
(5, 'MBA em Gestão Estratégica de Pessoas (RH) - Turma 2016', 2, 'Desempenho para atuar em diversas áreas organizacionais, com formação de nível superior, promovendo a compreensão sobre a gestão organizacional, suas mudanças e demandas atuais pautadas na gestão estratégica de pessoas.', 'O grande diferencial competitivo entre as organizações está em atrair e manter talentos. Por esse motivo o perfil desse profissional vem atendendo uma demanda crescente no mercado de trabalho. As empresas estão reconhecendo cada vez mais a importância de ter um profissional que conheça políticas de gestão de pessoas de forma a garantir as metas organizacionais.\r\n\r\n', 'Promover o aperfeiçoamento da gestão de pessoas no contexto de trabalho a partir de suas relações; experiências e recursos instrumentais de interesse às práticas empresariais e cumprimento das metas corporativas e, conseqüente promoção da qualidade de vida no trabalho e dos resultados organizacionais.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'Graduação'),
(2, 'Pós-Graduação');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curso` (`curso`),
  ADD KEY `tipo_id` (`tipo_id`),
  ADD KEY `tipo_id_2` (`tipo_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
