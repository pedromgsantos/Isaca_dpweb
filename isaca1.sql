-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2024 às 19:00
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `isaca1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `eventoId` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `email` varchar(250) DEFAULT '0',
  `mensagem` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `eventoId`, `email`, `mensagem`, `date`) VALUES
(1, 3, 'psoares@iscac.pt', 'Palestras e seminários muitio interessantes, com uma excelente organização. Recomendo vivamente a todos os que se preocupam com o seu bem estrar.', '2024-07-23'),
(2, 3, '', 'Não gostei nada, foi uma autêntica vergonha. A organização falhou em muitos aspectos. Enormes filas para participar em qualquer uma das atividades.', '2024-08-10'),
(4, 2, 'Anónimo', 'para de olhar para o meu computador', '2024-12-10'),
(6, 2, 'Anónimo', 'asdasd', '2024-12-10'),
(7, 2, 'Anónimo', '123', '2024-12-10'),
(8, 2, 'Anónimo', 'Ótima iniciativa! Tema muito interessante e cada vez mais atual.', '2024-12-10'),
(9, 11, 'acalheiros@iscac.pt', 'Gostei muito, adoro coisas verdes', '2024-12-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(128) NOT NULL,
  `data` date DEFAULT NULL,
  `descricao` varchar(256) DEFAULT NULL,
  `texto` text DEFAULT '',
  `imagem` varchar(128) DEFAULT NULL,
  `visivel` tinyint(1) DEFAULT 1,
  `eventbrite_code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `data`, `descricao`, `texto`, `imagem`, `visivel`, `eventbrite_code`) VALUES
(2, '9ª Conferência Internacional ISACA Lisbon Chapter', '2024-11-22', 'Conferência com o tema \"Reshaping the Future\" - AI-driven, Audit, Risk and Security', 'Esta conferência explora o impacto da inteligência artificial nos campos de auditoria, gestão de riscos e segurança. O evento reúne especialistas e profissionais para discutir como a IA está transformando esses setores, abordando inovações, desafios e oportunidades. Com foco em temas como automação de processos, prevenção de fraudes, segurança cibernética e governança tecnológica, a conferência promove reflexões sobre o uso responsável da IA para construir um futuro mais eficiente e seguro.', 'Conferencia2024.jpg', 1, ''),
(10, 'Inteligência Artificial no Serviço Público', '2025-05-09', 'A conferência \"IA no Serviço Público\" explora o uso da inteligência artificial para modernizar e inovar a gestão pública.', 'O evento aborda temas como automação de processos, análise de dados para tomada de decisão, atendimento ao cidadão e melhoria da eficiência operacional. Também são debatidos os desafios éticos, a privacidade dos dados e a inclusão tecnológica, com o objetivo de explorar como a IA pode promover uma gestão mais eficiente, acessível e transparente. A conferência é uma oportunidade para compartilhar conhecimentos e boas práticas, impulsionando a inovação no setor público.', 'AI.jpeg', 1, ''),
(11, 'Green IT', '2025-12-02', 'A conferência sobre Green IT debate como a tecnologia pode promover sustentabilidade e reduzir impactos ambientais.', 'A conferência sobre Green IT explora como a tecnologia da informação pode contribuir para a sustentabilidade ambiental e a redução do impacto ecológico. O evento aborda temas como eficiência energética em data centers, práticas de TI sustentável, economia circular no setor tecnológico e a adoção de soluções digitais que promovam a responsabilidade ambiental. Reunindo especialistas, gestores e pesquisadores, a conferência visa debater estratégias para alinhar inovação tecnológica com práticas ecológicas, fomentando um futuro mais sustentável para empresas e governos.', 'GREENIT.jpeg', 1, '<div id=\"eventbrite-widget-container-1111573760039\"></div>\r\n\r\n<script src=\"https://www.eventbrite.com/static/widgets/eb_widgets.js\"></script>\r\n\r\n<script type=\"text/javascript\">\r\n    var exampleCallback = function() {\r\n        console.log(\'Encomenda concluída!\');\r\n    };\r\n\r\n    window.EBWidgets.createWidget({\r\n        // Required\r\n        widgetType: \'checkout\',\r\n        eventId: \'1111573760039\',\r\n        iframeContainerId: \'eventbrite-widget-container-1111573760039\',\r\n\r\n        // Optional\r\n        iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided\r\n        onOrderComplete: exampleCallback  // Method called when an order has successfully completed\r\n    });\r\n</script>'),
(12, 'Digital Leaders of Tomorrow', '2023-06-02', 'Futureproofing your career in the age of AI', 'O Digital Leaders of Tomorrow é um seminário que ocorre anualmente na Coimbra Business School.\r\n\r\nNum mundo cada vez mais moldado pela Inteligência Artificial, preparar a sua carreira para o futuro é mais importante do que nunca. Esta sessão inovadora irá explorar estratégias essenciais para se adaptar, destacar e prosperar num mercado de trabalho em constante evolução.\r\n<br> <br> \r\nNesta sessão, irá descobrir:\r\n<br>\r\n->Como identificar e desenvolver as competências mais procuradas para o futuro. <br>\r\n->Formas de integrar a IA no seu trabalho para aumentar a produtividade e a criatividade. <br>\r\n->Tendências emergentes e setores em crescimento que oferecem novas oportunidades. <br>\r\n->Perspetivas de especialistas sobre como a IA está a transformar o panorama profissional. <br> <br>\r\nParticipe nesta conferência para aprender como transformar desafios em oportunidades e posicionar-se como líder na era da transformação digital. Seja qual for o seu setor ou nível de experiência, este evento irá equipá-lo com as ferramentas e conhecimentos para construir uma carreira sólida e preparada para o futuro.', 'DLT.jpeg', 1, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
