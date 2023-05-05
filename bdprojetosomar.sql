-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2023 às 00:46
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojetosomar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagensprojetos`
--

CREATE TABLE `imagensprojetos` (
  `idImagensProjetos` int(11) NOT NULL,
  `nomeImagem` varchar(45) NOT NULL,
  `idProjeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `indodss`
--

CREATE TABLE `indodss` (
  `idindicador` int(11) NOT NULL,
  `idODS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `odss`
--

CREATE TABLE `odss` (
  `idODS` int(11) NOT NULL,
  `codODS` int(11) NOT NULL,
  `nomeODS` varchar(128) NOT NULL,
  `descricao` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `odss`
--

INSERT INTO `odss` (`idODS`, `codODS`, `nomeODS`, `descricao`) VALUES
(1, 1, 'Erradicação da Pobreza', 'Acabar com a pobreza em todas as suas formas, em todos os lugares'),
(2, 2, 'Fome Zero', 'Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável'),
(3, 3, 'Boa Sáude e Bem-Estar', ' Assegurar uma vida saudável e promover o bem-estar para todos, em todas as idades'),
(4, 4, 'Educação de Qualidade', 'Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todos'),
(5, 5, 'Igualdade de Gênero', ' Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas'),
(6, 6, 'Água Limpa e Saneamento', ' Assegurar a disponibilidade e gestão sustentável da água e saneamento para todos'),
(7, 7, 'Energia Acessível e Limpa', ' Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todos'),
(8, 8, 'Emprego Digno e Crescimento Econômico', 'Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todos'),
(9, 9, 'Indústria, Inovação e Infraestrutura', ' Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação'),
(10, 10, 'Redução das Desigualdades', ' Reduzir a desigualdade dentro dos países e entre eles'),
(11, 11, 'Cidades e Comunidades Sustentáveis', 'Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis\nObjetivo 12. Assegurar padrões de produção e de consumo sustentáveis'),
(12, 12, 'Consumo e Produção Responáveis', 'Assegurar padrões de produção e de consumo sustentáveis'),
(13, 13, 'Combate ás Alterações Climáticas', ' Tomar medidas urgentes para combater a mudança do clima e seus impactos'),
(14, 14, 'Vida de Baixo DÁgua', 'Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável'),
(15, 15, 'Vida Sobre a Terra', 'Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade'),
(16, 16, 'Paz, justiça e Instituições Fortes', ' Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis'),
(17, 17, 'Parceiras em Prol das Metas', ' Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_de_acessos`
--

CREATE TABLE `perfil_de_acessos` (
  `idPerfil_de_Acesso` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `perfil_de_acessos`
--

INSERT INTO `perfil_de_acessos` (`idPerfil_de_Acesso`, `descricao`) VALUES
(1, 'Master'),
(2, 'Replicador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `idProjeto` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `linkVideo` varchar(45) NOT NULL,
  `nomeProjeto` varchar(45) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `aprovado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projet_odss`
--

CREATE TABLE `projet_odss` (
  `idProjeto` int(11) NOT NULL,
  `idODS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `idUnidade` int(11) NOT NULL,
  `numUnidade` varchar(45) NOT NULL,
  `nomeUnidade` varchar(45) NOT NULL,
  `enderecoCompleto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`idUnidade`, `numUnidade`, `nomeUnidade`, `enderecoCompleto`) VALUES
(1, '1', 'Senac Tech', 'Av. Venâncio Aires, 93 - Cidade Baixa, Porto Alegre - RS, 90040-191'),
(2, '2', 'Senac Lindóia', 'Av. Assis Brasil, 3522 - Loja 137 - Jardim Lindóia, Porto Alegre - RS, 91010-003'),
(3, '3', 'UniSenac - Centro Universitário RS', 'R. Cel. Genuíno, 130 - Centro Histórico, Porto Alegre - RS, 90010-350'),
(4, '4', 'Senac Saúde', 'Av. Assis Brasil, 1481 - Passo da Areia, Porto Alegre - RS, 91010-005'),
(5, '00', 'Fecomércio - RS', 'Rua Fecomércio 101 Bairro - Anchieta, Porto Alegre - RS, 90200-041');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `idUnidade` int(11) NOT NULL,
  `idPerfil_de_Acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `matricula`, `nome`, `email`, `senha`, `idUnidade`, `idPerfil_de_Acesso`) VALUES
(1, '1', 'Carlos Estevão', 'fecomercio@fecomercio.com.br', '12345', 5, 1),
(2, '2', 'Camila Storm', 'camila@senactech.com.br', '54321', 1, 2),
(3, '3', 'Paulo Otávio', 'paulo@senaclindoia.com.br', '22223', 2, 2),
(4, '4', 'Rogério da Silva', 'rogerio@unisenac.com.br', '33332', 3, 2),
(5, '5', 'Vitória Almeida', 'vitoria@senacsaude.com.br', '112233', 4, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagensprojetos`
--
ALTER TABLE `imagensprojetos`
  ADD PRIMARY KEY (`idImagensProjetos`),
  ADD KEY `fk_ImagensProjetos_Projetos1_idx` (`idProjeto`);

--
-- Índices para tabela `indodss`
--
ALTER TABLE `indodss`
  ADD PRIMARY KEY (`idindicador`),
  ADD KEY `fk_IndODSs_ODSs1_idx` (`idODS`);

--
-- Índices para tabela `odss`
--
ALTER TABLE `odss`
  ADD PRIMARY KEY (`idODS`);

--
-- Índices para tabela `perfil_de_acessos`
--
ALTER TABLE `perfil_de_acessos`
  ADD PRIMARY KEY (`idPerfil_de_Acesso`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`idProjeto`),
  ADD KEY `fk_Projetos_Usuarios_idx` (`idUsuario`);

--
-- Índices para tabela `projet_odss`
--
ALTER TABLE `projet_odss`
  ADD PRIMARY KEY (`idProjeto`,`idODS`),
  ADD KEY `fk_Projetos_has_ODSs_ODSs1_idx` (`idODS`),
  ADD KEY `fk_Projetos_has_ODSs_Projetos1_idx` (`idProjeto`);

--
-- Índices para tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idUnidade`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Usuarios_Unidades1_idx` (`idUnidade`),
  ADD KEY `fk_Usuarios_Perfil_de_Acessos1_idx` (`idPerfil_de_Acesso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagensprojetos`
--
ALTER TABLE `imagensprojetos`
  MODIFY `idImagensProjetos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `indodss`
--
ALTER TABLE `indodss`
  MODIFY `idindicador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `odss`
--
ALTER TABLE `odss`
  MODIFY `idODS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `perfil_de_acessos`
--
ALTER TABLE `perfil_de_acessos`
  MODIFY `idPerfil_de_Acesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `idProjeto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idUnidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imagensprojetos`
--
ALTER TABLE `imagensprojetos`
  ADD CONSTRAINT `fk_ImagensProjetos_Projetos1` FOREIGN KEY (`idProjeto`) REFERENCES `projetos` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `indodss`
--
ALTER TABLE `indodss`
  ADD CONSTRAINT `fk_IndODSs_ODSs1` FOREIGN KEY (`idODS`) REFERENCES `odss` (`idODS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `fk_Projetos_Usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `projet_odss`
--
ALTER TABLE `projet_odss`
  ADD CONSTRAINT `fk_Projetos_has_ODSs_ODSs1` FOREIGN KEY (`idODS`) REFERENCES `odss` (`idODS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Projetos_has_ODSs_Projetos1` FOREIGN KEY (`idProjeto`) REFERENCES `projetos` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Perfil_de_Acessos1` FOREIGN KEY (`idPerfil_de_Acesso`) REFERENCES `perfil_de_acessos` (`idPerfil_de_Acesso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_Unidades1` FOREIGN KEY (`idUnidade`) REFERENCES `unidades` (`idUnidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
