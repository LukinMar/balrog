-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Abr-2019 às 07:34
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balrog`
--
CREATE DATABASE IF NOT EXISTS `balrog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `balrog`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `monstros`
--

CREATE TABLE `monstros` (
  `nome` varchar(50) DEFAULT NULL,
  `ataquebase` int(11) NOT NULL,
  `defesabase` int(11) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `monstros`
--

INSERT INTO `monstros` (`nome`, `ataquebase`, `defesabase`, `descricao`, `id`) VALUES
('AcromÃ¢ntula', 2500, 2150, 'A acromÃ¢ntula Ã© uma aranha monstruosa de oito olhos e dotada de fala humana. Possui pelos negros e grossos que lhe cobrem o corpo; as pernas tem uma envergadura que pode abranger atÃ© quatro metros e meio; as pinÃ§as produzem um estalo distinto quando ela se excita ou se irrita. A acromÃ¢ntula Ã© carnÃ­vora e prefere presas de grande porte.', 1),
('Balrog', 10000, 10000, 'Um demÃ´nio do mundo antigo, servo de Melkor.', 2),
('Black Annis', 200, 200, '\r\nSe alimenta de ovelhas e crianÃ§as sem distinÃ§Ã£o. Quando consegue pegar um pequeno garoto ou garota, ela tinge sua pele e a usa em torno de sua cintura, formando uma espÃ©cie de cinto macabro.', 3),
('CÃ©rbero', 3500, 1000, 'Monstruoso cÃ£o de 3 cabeÃ§as que guarda a entrada do mundo inferior. Deixando as almas entrarem, mas jamais saÃ­rem.', 4),
('Erumpente', 3000, 2150, 'Um animal africano, cinzento, de grande porte e forÃ§a. A distÃ¢ncia, esse bicho, que pesa atÃ© uma tonelada, pode ser confundido com um rinoceronte. Tem uni couro grosso que repele a maioria dos feitiÃ§os e maldiÃ§Ãµes, um chifre afiado sobre o nariz e um grande rabo que lembra uma corda. Seu chifre pode perfurar qualquer coisa desde pele atÃ© metal e contÃ©m uma secreÃ§Ã£o fluida que faz a coisa ou pessoa injetada explodir.', 5),
('Esfinge', 4000, 5000, 'A esfinge egÃ­pcia tem cabeÃ§a humana e corpo de leÃ£o. HÃ¡ mais de mil anos ela Ã© usada para guardar tesouros e seus esconderijos secretos. InteligentÃ­ssima, essa criatura tem prazer em inventar charadas e quebra-cabeÃ§as. Em geral, a esfinge sÃ³ se torna perigosa quando aquilo que estÃ¡ guardando Ã© ameaÃ§ado.', 6),
('FÃªnix', 500, 250, 'PÃ¡ssaro de cor vermelha e porte de cisne, com um longo rabo, bico e garras dourados. Vive por longos anos e tem a capacidade de se regenerar ,quando chega a hora de sua morte entra auto-combustÃ£o e, passado algum tempo, renasce das prÃ³prias cinzas.', 7),
('Gnomo', 250, 250, 'O gnomo Ã© uma praga comum em jardins, e Ã© encontrado por toda a Europa e AmÃ©rica do Norte. Pode atingir trinta centÃ­metros de altura, tem uma cabeÃ§a desproporcionalmente grande e dura e pÃ©s ossudos.', 8),
('Graphorn', 1750, 2000, 'Encontrado nas regiÃµes montanhosas da Europa. Animal de grande porte, pÃºrpura-acÃ­nzentado e provido de corcova, o arpÃ©u tem dois chifres muito longos e afiados, caminha sobre enormes pÃ©s de quatro dedos e tem uma natureza extremamente agressiva.', 9),
('Grifo', 2500, 2000, 'O grifo Ã© originÃ¡rio da GrÃ©cia e tem as pernas dianteiras e uma grande cabeÃ§a de Ã¡guia, mas o corpo e as pernas traseiras de leÃ£o.', 10),
('Hidra', 3450, 6000, 'Hidra tem corpo de dragÃ£o e vÃ¡rias cabeÃ§as de serpente. Se uma cabeÃ§a Ã© cortada, crescem duas em seu lugar.\r\nA Hidra Ã© tÃ£o venenosa que mata os homens apenas com o seu hÃ¡lito e depois os comia.', 11),
('Hipocampo', 2800, 1500, 'OriginÃ¡rio da GrÃ©cia, o hipocampo tem a cabeÃ§a e os quartos dianteiros de cavalo e o rabo e os quartos traseiros de um peixe gigantesco.', 12),
('Hipogrifo', 3500, 3000, 'Nativo da Europa, embora seja atualmente encontrado no mundo inteiro. Tem a cabeÃ§a de uma enorme Ã¡guia e o corpo de cavalo.', 13),
('Hungarian Horntail', 5000, 5000, 'Com fama de ser a mais perigosa das raÃ§as de dragÃ£o, o Hungarian Horntail tem escamas pretas e uma aparÃªncia de lagarto. Seus olhos sÃ£o amarelos, os chifres cor de bronze tal como os cornos que cobrem o seu longo rabo. O alcance das labaredas alcanÃ§a 15 metros. O Hungarian Horntail se alimenta de cabras, carneiros e, sempre que possÃ­vel, de humanos.', 14),
('Kraken', 2000, 1500, 'Uma espÃ©cie de lula, que ameaÃ§a os navios. Costuma ter o tamanho de uma ilha e 100 tentÃ¡culos.', 15),
('LestrÃ­gones', 3000, 3000, 'Gigantes canibais raivosos.', 16),
('Lobisomem', 2600, 1800, 'Um homem que pode se transformar em lobo ou em algo semelhante a um lobo em noites de lua cheia, sÃ³ voltando Ã  forma humana ao amanhecer. Os humanos somente se transformam em lobisomens quando sÃ£o mordidos.', 17),
('Manticora', 2650, 1250, 'PerigosÃ­ssimo animal grego com cabeÃ§a humana, corpo de leÃ£o e rabo de escorpiÃ£o. TÃ£o feroz quanto a quimera e igualmente rara, a manticora tem fama de cantar baixinho enquanto devora a presa. Sua mordida pode causar morte instantÃ¢nea.', 18),
('Naga', 2000, 2300, '\r\nSerpentes-dragÃ£o gigantescas, que sÃ£o capazes de se transformar em seres humanos quando convir. As criaturas sÃ£o consideradas semi-deuses, divindades dos mares, e sÃ£o por vezes representados com vÃ¡rias cabeÃ§as.', 19),
('Occamy', 3500, 3000, 'Encontrado no Extremo Oriente e na Ãndia. Esse bÃ­pede emplumado, com asas e corpo de serpente, pode alcanÃ§ar o comprimento de quatro metros e meio. Alimenta-se principalmente de ratos e aves. O occamy Ã© agressivo com todos que se aproximam dele, especialmente quando se trata de defender seus ovos cujas cascas sÃ£o feitas da prata mais pura e maleÃ¡vel.', 20),
('Quimera', 1500, 1750, 'Um monstro grego raro com cabeÃ§a de leÃ£o, corpo de bode e rabo de dragÃ£o. Feroz e sanguinÃ¡ria, ela Ã© extremamente perigosa.', 21),
('Sleipnir', 1000, 560, 'Cavalo de 8 patas conhecido como o mais veloz do universo, podendo cavalgar na terra, na Ã¡gua ou no ar. Sleipnir tambÃ©m consegue chegar ao reino dos mortos.', 22),
('TestrÃ¡lios', 2000, 1200, 'Um misto de vÃ¡rios animais em um sÃ³, os TestrÃ¡lios tem o corpo de um cavalo, asas como a de um dragÃ£o e escamas. Normalmente se alimentam de carne, fresca ou podre, e sÃ£o atraÃ­dos pelo cheiro de sangue. Apenas as pessoas que jÃ¡ presenciaram a morte de perto podem vÃª-los.', 23),
('Troll', 3000, 1500, 'Ã‰ uma criatura temÃ­vel que atinge mais de trÃªs metros e meio de altura e pesa mais de uma tonelada. NotÃ¡vel por sua forÃ§a igualmente prodigiosa e sua pouca inteligÃªncia, esse animal Ã© muitas vezes violento e imprevisÃ­vel.', 24),
('UnicÃ³rnio', 2500, 1500, 'Quando adulto Ã© um cavalo branco puro, dotado de um chifre. O chifre, o sangue e o pelo do unicÃ³rnio tem propriedades excepcionalmente mÃ¡gicas.', 26),
('123123123123', 123, 123, '123123123', 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `acesso` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`, `acesso`, `id`, `email`) VALUES
('root', '1234', 1, 1, 'root@email.com'),
('user', '1234', 0, 2, 'user@email.com'),
('root1', '', 1, 3, 'root1@email.com'),
('user1', '', 0, 4, 'user1@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monstros`
--
ALTER TABLE `monstros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monstros`
--
ALTER TABLE `monstros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
