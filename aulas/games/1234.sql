-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Nov-2016 às 18:47
-- Versão do servidor: 5.5.31
-- versão do PHP: 5.4.4-14+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `1234`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Ação'),
(2, 'Esportes'),
(3, 'Luta'),
(4, 'Tiro'),
(5, 'RPG'),
(6, 'Estratégia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `foto` varchar(15) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_foto_jogo1_idx` (`jogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`id`, `descricao`, `foto`, `jogo_id`) VALUES
(2, 'Fifa 2016', 'fi1.png', 1),
(3, 'Fifa 2016', 'fi2.png', 1),
(4, 'Fifa 2016', 'fi3.png', 1),
(5, 'Smash Bros.', 'sb1.png', 10),
(6, 'Smash Bros.', 'sb2.png', 10),
(7, 'Destiny', 'd1.png', 4),
(8, 'Destiny', 'd2.png', 4),
(9, 'Super Mario Maker', 'mm1.png', 6),
(10, 'Faça suas fases', 'mm2.png', 6),
(11, 'Mass Effect', 'me1.png', 7),
(12, 'Mass Effect', 'me2.png', 7),
(13, 'Need for Speed', 'nfe1.png', 3),
(14, 'Need for Speed', 'nfe2.png', 3),
(15, 'Street Fighter', 'sf1.png', 8),
(16, 'Street Fighter', 'sf2.png', 8),
(17, 'Dishonored', 'dis1.png', 9),
(18, 'Dishonored', 'dis2.png', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE IF NOT EXISTS `jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `categoria_id`, `descricao`) VALUES
(1, 'Fifa 16', 2, 'The FIFA series is considered the pinnacle of video game football, with each iteration showcasing gains in its portrayal of the world?s most popular sport. From a realistic physics engine that gives the ball a real sense of being to its unparalleled presentation, FIFA delivers the goods in a way no other football series can. With this in mind, all eyes are on FIFA 16, which features a plethora of improvements that expand upon the proven formula.\r\n\r\nWith FIFA 16, EA Sports plans to rework key aspects of the game to provide more innovation to a series that, if left alone, could become stale given increasing competition from Konami?s Pro Evolution Soccer. This year?s effort focuses mainly on balancing the game even further, especially after some criticism that last year?s version focused too much on attacking.\r\n\r\nNow you will notice an improvement in defensive sets and movement, with midfield play a particular focus for your AI. If you anticipate a player cutting through a gap in the middle, you will see this player make a proactive run without you needing to command him or her manually. Of course you can always rely on manual commands, but it?s great when you see the action on the field play out as intended.'),
(2, 'Star Wars Battlefront', 6, 'Pre-order Star Wars Battlefront and on December 1st, 2015, be among the first players to experience the Battle of Jakku*, the pivotal moment when the New Republic confronted key Imperial holdouts on a remote desert planet.\r\n\r\nTaking place in the aftermath of the Rebel victory in the Battle of Endor, players will experience the events that created the massive, battle-scarred landscape of Jakku shown in Star Wars™: The Force Awakens™. Players who pre-order Star Wars Battlefront can fight the battle one week early. All other players will get access to this content on December 8th, 2015.\r\n'),
(3, 'Need for Speed', 2, 'The new Need for Speed introduces compelling and innovative gameplay through Five Ways to Play – Speed, Style, Build, Crew, and Outlaw. \r\n\r\nEach drives your Need for Speed game through an interconnected narrative. Built around five real world automotive icons, each of whom is a hero of today’s car culture, they will inspire the player to experience all Five Ways to Play. Earn their respect and build your reputation on your journey to become the ultimate icon.'),
(4, 'Destiny: The Taken King', 5, 'Delve into the Destiny universe and become legend as you carve out your own legendary story in the battle for mankind.\r\n\r\nDestiny is a shooter at heart and combines action and adventure gameplay to create a new evolution in storytelling, gaming and entertainment. Create and customise your character, and build your own legend with each deadly enemy you defeat in a variety of gameplay modes, a unique multiplayer experience, and new social features.\r\n\r\nWith 20 million Guardians already out there, team up and take down anyone foolish enough to stand in your way as you battle to save mankind. Work together in Raids or take each other down in the Crucible, Destiny gives you the ability to forge your own legend in an immersive, challenging, and dangerous universe.\r\n\r\n- See more at: http://www.game.co.uk/webapp/wcs/stores/servlet/HubArticleView?hubId=208291&articleId=208292&catalogId=10201&langId=44&storeId=10151&merchname-_-search-_-header-_-Destiny#sthash.c0LKjkYz.dpuf'),
(5, 'Disney Infinity 3.0', 6, 'Push your Disney Infinity 3.0 experience to the limits with the Toy Box Takeover Expansion Game Piece preorder bonus!\r\n\r\nJoin up with your favourite characters and take on a whole host of enemies across five themed worlds. Enlist characters from across the Disney, Disney•Pixar, Marvel and Star Wars™ universes and take your Disney Infinity 3.0 experience to the next level.\r\n'),
(6, 'Super Mario Maker', 5, 'Super Mario Maker gives you an unlimited number of levels to play, designed by Nintendo and players from all around the world.\r\n\r\nThere are already dozens of sample courses that will be playable right away and the number of courses will only grow as the community begins creating and sharing their own designs. Super Mario Maker is a Mario game that will never end!\r\n'),
(7, 'Mass Effect 3', 4, 'Go weapons-hot in a fully immersive sci-fi epic that reacts to every decision you make!\r\n\r\nNot everyone will survive. An ancient alien race, known only as “Reapers”, has launched an all-out invasion leaving nothing but a trail of destruction in their wake. Earth has been taken, the galaxy is on the verge of total annihilation, and you are the only one who can stop them.\r\n\r\nThe price of failure is extinction. You are Commander Shephard, a character that you can forge in your own image. You determine how events play out, which planets to explore, and whom to form alliances with as you rally a force to eliminate the Reaper threat once and for all.'),
(8, 'Street Fighter V', 3, 'The legendary fighting franchise returns with Street Fighter V! Powered by Unreal Engine 4 technology, stunning visuals depict the next generation of World Warriors in unprecedented detail, while exciting and accessible battle mechanics deliver endless fighting fun that both beginners and veterans can enjoy. Challenge friends online, or compete for fame and glory on the Capcom Pro Tour. '),
(9, 'Dishonored 2', 1, 'Pre-order Dishonored 2 and receive the Imperial Assassin''s Pack. \r\n\r\nIncludes:\r\nDuelist''s Luck Bonecharm\r\nVoid Favor Bonecharm\r\n"Goodbye, Karnaca" Lore Book\r\nAntique Serkonan Guitar\r\n500 Coins\r\n\r\n\r\nThe Assassins - Play as Emily Kaldwin or Corvo Attano, each with their own sets of powers. Neutralise your enemies in stealth or eliminate using your weapons or powers\r\n\r\nSupernatural Powers - Choose from nearly infinite combinations of violence, nonlethal combat, powers and weapons to accomplish your objectives.\r\n\r\nImaginative World - Karnaca, The Jewel of The South, is a character in its own right, rich with story, architecture and eclectic characters.\r\n\r\nEpic Missions - Take on signature missions, such as the Dust District, ravaged by dust storms and warring factions, and a madman’s mansion made of shifting walls, deadly traps and clockwork soldiers. '),
(10, 'Super Smash Bros.', 3, 'Bring all your favourite Nintendo characters together in Super Smash Bros. for the Wii U.\r\nExperience the beauty of Super Smash Bros. for Wii U in stunning HD, a first for the series.\r\nBattle with a host of fan favourites, including Greninja, Zero Suit Samus, Sheik, Yoshi and Charizard.\r\nJump into the arena with friends or random players with online play modes "For Fun" and "For Glory".\r\nCustomise move sets when playing locally or online with friends for the first time ever.'),
(11, 'Mario Kart 8', 2, 'Join all your favourite characters from the Mario franchise as you race through exciting tracks from all around the Mushroom Kingdom.\r\nTurn the race on its head with the new antigravity feature which allows for never-imagined racing circuit designs.\r\nTake the race online in challenging 12-player online competitive play.\r\nShare all your highlights and best moments with Mario Kart TV\r\nFor the first time ever, race in HD with the first entry from the Mario Kart franchise on the Wii U.'),
(12, 'Pokken Tournament', 5, 'A collaboration between The Pokémon Company and BANDAI Namco Entertainment, Pokkén Tournament is a new fighting game that lets players use their favourite Pokémon characters to battle it out in fighting arenas. \r\n\r\nThose who purchase the first production run version of the game will also receive a special Shadow Mewtwo amiibo card, which can be tapped to the Wii U GamePad controller to unlock the Shadow Mewtwo playable character in the game.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `resumo` varchar(250) DEFAULT NULL,
  `texto` text,
  `jogo_id` int(11) NOT NULL,
  `foto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noticia_jogo1_idx` (`jogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `data`, `resumo`, `texto`, `jogo_id`, `foto`) VALUES
(3, 'Dishonored 2 Collector''s Edition Unboxing', '2016-11-08', 'This episode of GAME Unwraps sees us chill out in the beautiful Bethesda offices to have a gander at the super limited Dishonored 2 Collector''s Edition, including an impressive array of awesome extras.', 'After being made a cracking cup of tea (in a Nuka World cup, no less!) we were ready to tuck into this box of delights like a kid at gaming-fuelled Christmas.\r\n\r\nIn addition to getting a physical copy of the highly-awaited game bundled in with all these goodies, feast your eyes on what else lies within...\r\n\r\n''Legacy'' Metal Case\r\n\r\nExclusive to the Dishonored 2 Collector''s Edition, the limited-edition metal case is decorated with the portraits of Emily and Corvo, the leading characters you can choose to play from in Dishonored 2, dressed in their assassin attire. Emily graces the front, steeped in shadows and donning her regal cowl on the lower half of her face, her brown eyes observing you with silent assurance. The opposite side reveals the mask of Corvo Attano, shielding his true face from view. The case keeps your disc safe and sound whilst looking awesome displayed in your games collection.', 9, 'a1.jpg'),
(4, 'Mass Effect: Andromeda gets a new cinematic trailer', '2016-11-08', 'BioWare has ever so slightly pulled the curtain back on the hotly-anticipated Mass Effect: Andromeda with the release of a new cinematic trailer.', 'BioWare has ever so slightly pulled the curtain back on the hotly-anticipated Mass Effect: Andromeda with the release of a new cinematic trailer.t doesn''t give us a lot of new information, but it does tease the new villainous alien race. From previous leaks, they would be named the Khet, or Kett.\r\n\r\nIn Andromeda, players can play as either Sarah or Scott Ryder. Their father, Alec Ryder, is an N7 operative, as Commander Shepard was in the previous Mass Effect games.\r\n\r\nMeanwhile, the loyalty mission system from Mass Effect 2 returns in Andromeda. Loyalty missions helped you learn more about with squadmates and meaningfully changed the story, so it''s great to see them come back.\r\n\r\nIn light of this new Mass Effect: Andromeda information, you can now play the original trilogy on Xbox One through backwards compatibility. And you can pre-order our GAME exclusive Collector''s Edition which comes with a remote control Nomad!', 7, 'n2.jpg'),
(5, 'Akuma is coming to Street Fighter 5', '2016-11-08', 'Fan favourite fighting game character Akuma is coming to Street Fighter 5. Capcom teased Akuma''s introduction as a playable character in Street Fighter 5 after the conclusion of the Red Bull Battlegrounds Capcom Pro Tour tournament in Seattle.', 'Fan favourite fighting game character Akuma is coming to Street Fighter 5. Capcom teased Akuma''s introduction as a playable character in Street Fighter 5 after the conclusion of the Red Bull Battlegrounds Capcom Pro Tour tournament in Seattle.\r\n\r\nStreet Fighter V - Akuma Teased\r\nThe teaser did not show much, but we did catch a glimpse at Akuma''s trademark Raging Demon attack. And we also saw kanji scrawled on Akuma''s back, similar to the way it has appeared in Street Fighter games down the years. But the kanji in Street Fighter 5 is unlike that in Street Fighter 4. In fact, it''s the same as appeared on the back of Shin Akuma in Capcom vs. SNK 2. It translates loosely to "god like".\r\n\r\nPlayers have speculated this indicates that Akuma''s V-Trigger will see him transform into Shin Akuma. Exciting! Either way, it won''t be long before we find out more. Capcom said Akuma will be playable in Street Fighter 5 in early December at Sony''s PlayStation Experience event.', 8, 'n3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE IF NOT EXISTS `plataforma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(1, 'X-Box 360'),
(2, 'X-Box One'),
(3, 'Playstation 3'),
(4, 'Playstation 4'),
(5, 'Nintendo Wi U');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma_jogo`
--

CREATE TABLE IF NOT EXISTS `plataforma_jogo` (
  `plataforma_id` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `foto` varchar(15) NOT NULL,
  PRIMARY KEY (`plataforma_id`,`jogo_id`),
  KEY `fk_produtora_has_jogo_jogo1_idx` (`jogo_id`),
  KEY `fk_produtora_has_jogo_produtora1_idx` (`plataforma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `plataforma_jogo`
--

INSERT INTO `plataforma_jogo` (`plataforma_id`, `jogo_id`, `foto`) VALUES
(1, 7, '1.png'),
(2, 1, '4.png'),
(2, 3, '21.png'),
(2, 4, '13.png'),
(2, 9, '19.png'),
(3, 7, '24.png'),
(4, 1, '7.png'),
(4, 3, '22.png'),
(4, 4, '14.png'),
(4, 8, '18.png'),
(4, 9, '20.png'),
(5, 6, '17.png'),
(5, 7, '15.png'),
(5, 10, '5.png'),
(5, 11, '6.png'),
(5, 12, '23.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'Steve Jobs', 'steve@jobs.com.br', 'steve', '27a06a9e3d5e7f67eb604a39536208c9');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_jogo1` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticia_jogo1` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `plataforma_jogo`
--
ALTER TABLE `plataforma_jogo`
  ADD CONSTRAINT `fk_produtora_has_jogo_jogo1` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produtora_has_jogo_produtora1` FOREIGN KEY (`plataforma_id`) REFERENCES `plataforma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
