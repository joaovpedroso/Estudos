-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2016 às 23:59
-- Versão do servidor: 5.7.13
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_noticias`
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
(1, 'Política'),
(2, 'Polícia'),
(3, 'Esportes'),
(4, 'Entretenimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `noticia` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `categoria_id`, `noticia`, `foto`) VALUES
(1, 'PF suspeita que codinome ‘Amigo’ em planilhas da Odebrecht seja de Lula\r\n\r\n', 1, 'SÃO PAULO — A Polícia Federal suspeita que o codinome “Amigo” presente nas planilhas encontradas na Odebrecht é relacionado ao ex-presidente Luiz Inácio Lula da Silva. Segundo a instituição, o codinome “Amigo” aparece como beneficiário de R$ 8 milhões debitados do saldo do que chamou de “conta-corrente da propina” da empreiteira com o PT, a planilha da conta Italiano. O codinome aparece ainda na planilha da conta Paulistinha, que listava remessas em dinheiro feitas pela empreiteira em São Paulo, com a “saída” de R$ 300 mil em 30 de outubro de 2014.\r\n\r\nLeia mais sobre esse assunto em http://oglobo.globo.com/brasil/pf-suspeita-que-codinome-amigo-em-planilhas-da-odebrecht-seja-de-lula-20346273#ixzz4O2f4CMpp \r\n© 1996 - 2016. Todos direitos reservados a Infoglobo Comunicação e Participações S.A. Este material não pode ser publicado, transmitido por broadcast, reescrito ou redistribuído sem autorização. ', 'amigo-paulistinha.jpg'),
(2, 'Delatores da Lava-Jato confirmam propina a ex-dirigentes da Eletronuclear\r\n', 1, 'RIO — Quatro delatores da Lava-Jato confirmaram, em depoimento nesta segunda-feira, pagamento de propina a ex-dirigentes da Eletronuclear no âmbito das obras da usina nuclear de Angra 3. Rogério Nora de Sá, Clóvis Primo, Flávio Barra e Gustavo Botelho são ex-executivos da Andrade Gutierrez, empresa responsável pela construção da usina.\r\n\r\nPrimeiro a depor, Rogério Nora disse que o acerto era de pagamento de 1% para diretoria da Eletronuclear e 1% para o então presidente da empresa, Othon Silva. PT e PMDB ficariam com 2%. Esse acerto foi feito, segundo ele, com Othon Silva. Nora declarou, no entanto, não saber quais eram os integrantes da diretoria que receberiam a propina. De acordo com ele, quem passou a gerenciar o assunto foi Clóvis Primo. Rogério Nora foi perguntado por que pagava a propina e respondeu que tratava-se de uma espécie de acordo de cavalheiros para que houvesse esforços de que não haveria problema nas obras.\r\n', 'Othon.jpg'),
(3, 'PM rebate nota do Timão e chama organizadas de "verdadeira gangue"', 2, 'Uma confusão envolvendo torcedores e policiais militares marcou o empate entre Flamengo e Corinthians, por 2 a 2, no Maracanã. O jogo que marcou a reabertura do Maior do Mundo terminou com 67 pessoas detidas. Destes, 31 ainda estão sob custódia da Polícia Civil e serão encaminhados para uma audiência que decidirá o futuro dos torcedores. O comandante do Grupamento Especial de Policiamento em Estádios (Gepe) da Polícia Militar do Rio, major Sílvio Luiz, atendeu a imprensa nesta segunda-feira, em Deodoro. Ele respondeu a nota oficial emitida pelo Corinthians criticando as ações.\r\n\r\n- A Policia Militar atuou de forma técnica. Já é praxe mantermos a torcida do time visitante dentro do estádio enquanto ocorre o escoamento dos torcedores do clube local. É lógico que num jogo com mais de 60 mil pessoas, esse tempo de espera vai ser maior. Neste momento, a Polícia Militar aproveitou para através das imagens que foram colhidas, identificar os agressores ao policiamento e todos os envolvidos na confusão. As pessoas que não estavam na caravana, como mulheres e crianças, foram liberadas antes, como as imagens deixam claro. Trabalhamos para separar essas pessoas dos torcedores das caravanas da torcida organizada - afirmou.', 'o_49Zv64s.jpg'),
(4, 'Restauração polêmica no Canadá deixa imagem de menino Jesus com aparência de Maggie Simpson', 2, 'Uma estátua do menino Jesus ao lado de uma igreja no Canadá chamou a atenção dos fiéis após passar por uma restauração.\r\nA cabeça da estátua desapareceu do cemitério da igreja de Sainte-Anne des Pins, em Sudbury, no ano passado. Uma artista local fez uma escultura para substituir a peça usando argila da região, que tem uma cor de terra mais clara.\r\nApós a rede canadense CBC divulgar a história, internautas começaram a comparar a escultura com a personagem Maggie Simpson, filha do casal Homer e Marge no desenho Os Simpsons.\r\n"É a Maggie Simpson!", escreveu Andre Proulx, um dos muitos que apontaram semelhança com a personagem e também com Lisa Simpson, irmã de Maggie no desenho.', 'maggie.jpg'),
(5, 'Cereto pede punição ao Corinthians por briga de torcida no Maracanã', 3, 'Antes do jogo contra o Flamengo, no Maracanã, parte da torcida do Corinthians presente no estádio se envolveu em uma briga com a polícia militar do Rio de Janeiro e, por isso, 31 pessoas foram detidas e presas, após o empate em 2 a 2. Para Carlos Cereto, as medidas de punição adotadas até agora se mostraram ineficazes no combate à violência e o poder público deveria passar a punir o clube pelo qual essas pessoas torcem. O jornalista ainda criticou a nota oficial publicada pelo Corinthians sobre o caso e o comportamento "protetor" da diretoria com os torcedores brigões (assista ao vídeo).\r\n- Até outro dia, o diretor de futebol do Corinthians era assessor de imprensa da principal torcida organizada do clube. Isso dá para ter uma ideia de como a torcida organizada manda no Corinthians. E é esse mesmo clube que pagou advogados para tirar os bandidos que mataram o torcedor boliviano em Oruro. Aliás, mesmos torcedores que foram identificados na briga em Brasília, no jogo contra o Vasco. São recorrentes, são sempre os mesmos que estão nas brigas e as mesmas cenas que afastam o torcedor do bem do estádio - disse Carlos Cereto, antes de completar.', 'torcida2.jpg'),
(6, 'Griezmann, Suárez e Messi são eleitos os melhores em festa do Espanhol', 3, 'No dia em que entrou na lista dos 30 finalistas da Bola de Ouro, Antoine Griezmann acabou premiado pelo seu desempenho no último Campeonato Espanhol. O craque francês do Atlético de Madrid foi o grande vencedor da festa de gala organizada por La Liga no Palácio do Congresso de Valência, nesta segunda-feira, ao ser eleito o melhor jogador e também o jogador da torcida.\r\n\r\nO uruguaio Luis Suárez e o argentino Lionel Messi, do Barcelona, também receberam prêmios – o primeiro como o “mais completo” (La Liga World Player), em votação aberta na página oficial de La Liga; e o segundo como melhor atacante através dos votos dos capitães de cada um dos 20 clubes. Cristiano Ronaldo, do Real Madrid, e Neymar, do Barça, não concorreram entre os finalistas.', 'cvj8czrxeaaaah3.jpg'),
(7, 'Lista traz oito novos games viciantes para jogar em todo lugar', 4, 'Pokémon Shuffle\r\nPokémon Go é um game extremamente divertido, mas requer algum tempo e também andar pela cidade para funcionar bem. Pokémon Shuffle é diferente, apesar de usar a mesma temática com os monstros de bolso. Aqui, o importante é formar conjuntos de Pokémon para somar pontos e capturar novas criaturas.', 'pkmnstop-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
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
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
