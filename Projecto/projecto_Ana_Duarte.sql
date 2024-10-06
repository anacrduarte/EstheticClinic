-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Dez-2023 às 15:14
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projecto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id_carrossel` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `titulo`, `imagem`, `descricao`, `ordem`, `activo`) VALUES
(1, 'Manicure', 'm6.jpg', 'Delicadeza e elegância nas pontas do dedos!', 0, 1),
(2, 'Pedicure', 'p11.jpg', 'O meu corpo é o meu lar.', 0, 1),
(3, 'Maquilhagem', 'wk7.jpg', 'A beleza está nos pormenores.', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ficheiro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id_imagem`, `titulo`, `ficheiro`, `ordem`, `activo`) VALUES
(1, '', 'm5.jpg', 0, 1),
(2, '', 'm7.jpg', 0, 1),
(4, '', 'm10.jpg', 0, 1),
(8, '', 'm15.jpg', 0, 1),
(9, '', 'm16.jpg', 0, 1),
(10, '', 'm17.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_mk`
--

CREATE TABLE `imagem_mk` (
  `id_mk` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ficheiro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagem_mk`
--

INSERT INTO `imagem_mk` (`id_mk`, `titulo`, `ficheiro`, `ordem`, `activo`) VALUES
(1, '', 'wk2.jpg', 0, 1),
(4, '', 'wk5.jpg', 0, 1),
(5, '', 'wk6.jpg', 0, 1),
(6, '', 'wk8.jpg', 0, 1),
(7, '', 'wk9.jpg', 0, 1),
(8, '', 'wk14.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_pedi`
--

CREATE TABLE `imagem_pedi` (
  `id_img_ped` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ficheiro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagem_pedi`
--

INSERT INTO `imagem_pedi` (`id_img_ped`, `titulo`, `ficheiro`, `ordem`, `activo`) VALUES
(3, '', 'p6.jpg', 0, 1),
(5, '', 'p8.jpg', 0, 1),
(7, '', 'p10.jpg', 0, 1),
(8, '', 'p11.jpg', 0, 1),
(9, '', 'p12.jpg', 0, 1),
(12, '', 'p19.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `redessociais`
--

CREATE TABLE `redessociais` (
  `social_id` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `classe` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redessociais`
--

INSERT INTO `redessociais` (`social_id`, `nome`, `link`, `classe`, `ordem`, `activo`) VALUES
(1, 'Facebook', ' https://fb.com', 'fa-brands fa-facebook', 0, 1),
(2, 'X-Twitter', 'https://twitter.com', 'fa-brands fa-x-twitter', 0, 1),
(3, 'Instagram', 'https://instagram.com', 'fa-brands fa-instagram', 0, 1),
(4, 'Linkedin', 'https://linkedin.com', 'fa-brands fa-linkedin-in', 0, 1),
(5, 'Youtube', 'https://youtube.com', 'fa-brands fa-youtube', 0, 1),
(6, 'TikTok', 'https://tiktok.com', 'fa-brands fa-tiktok', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servicos` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL DEFAULT '0',
  `activo` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id_servicos`, `titulo`, `imagem`, `descricao`, `ordem`, `activo`) VALUES
(17, 'Manicure', 'm8.jpg', 'Manicure consiste em empurrar e retirar as cutículas e espigões, as unhas são limadas e hidratadas. É concluída com a aplicação do verniz ao seu gosto.', 0, 1),
(18, 'Pedicure', 'p14.jpg', 'Uma ida regular à pedicure, mantém os seus pés saudáveis e elegantes. Evita calosidades e micoses. As unhas crescerão fortes e saudáveis. Pedicure consiste em limar as unhas, retirar as cutículas e calosidades e maquilhar as unhas.', 0, 1),
(19, 'Unhas de Gel', 'm13.jpg', 'As unhas de gel são criadas a partir da aplicação de um gel diretamente na unha, pode manter o tamanho normal da sua unha ou aumentar o tamanho aplicando o gel sobre a unha ou através de moldes.', 0, 1),
(20, 'Unhas de acrílico ', 'm22.jpg', 'Este método de alongamento para unhas é caracterizado por uma extensão através de tips coladas no bordo da unha em seguida acrescenta-se uma mistura acrílica entre a unha natural e as extensões.\r\nPodemos também aplicar o acrílico diretamente na unha natural.', 0, 1),
(21, 'Gelinho', 'm11.jpg', 'Para quem pretende que o verniz esteja intacto durante 2 semanas coloca o verniz gel. Existe em variadíssimas cores.', 0, 1),
(22, 'Calista', 'p1.jpg', 'É um tratamento profissional que efectua a extracção de hiperqueratoses e queratose (calos e calosidades) e o corte e tratamento de unhas, servindo-se de utensílios e produtos adequados.', 0, 1),
(23, 'Epilação', 'b7.jpg', 'As mulheres preocupam-se com os pêlos o ano inteiro, não somente no verão. A epilação é amplamente difundida entre as mulheres, e aprovada pelos homens! Existem diversos métodos de epilação, cera quente, semi-fria, roll-on e laser.', 0, 1),
(24, 'Maquilhagem', 'wk2.jpg', 'Proporcione a beleza natural e saudável à sua pele, para um look sensual e irresistível.', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `nome`, `email`, `senha`) VALUES
(4, 'as', 'as', '$2y$10$2QzAgkRFjKhoFC/rY3eKUe5Z4oj37cN9J6Giqqc4pn4xt2RLhht6K'),
(5, 'adr', 'asd@mail.com', '$2y$10$THuTmpY4RgqGjbosMiuRleoJVtATiO5JtLW5tEl0bAs1td8hL/KJ6'),
(7, 'aq', 'sa@sapo.pt', '$2y$10$4dkVJ57F7Ia7svESRVB9Tu/r.1viXlC9ttYofvsmeRrZkZXrlH8rO'),
(8, 'ds', 'dsa@mail.com', '$2y$10$HnYhOQMpfX4ZwwZsy1epKebV9HtfudBL76ZLCIQKUS6HBK/LyjAxa'),
(9, '', '', '$2y$10$c6Vd5bmaFlkCS7CRO/AK9O/3YwWolWumQlhl8sc9OxIB/iEjN0bty'),
(10, '', 'sap@sap.pt', '$2y$10$thSurZtUlJZSkTctsOzTQuGnwF7kyIylP2Kl/m88KdylwXKqSihyq'),
(11, 'ana', 'asta@mail.com', '$2y$10$CTy5aQd5CCK1npLT3vHJr.IxFiYCoSdh6TzcsyFFOrRyeNA0w36p.'),
(12, 'ana', 'ds.esta@com', '$2y$10$Jynvrj3lmHzNOpJ6xy/nTuCMW4UM101pwv4ZbTceURmKpA0p1tZym');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id_carrossel`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `imagem_mk`
--
ALTER TABLE `imagem_mk`
  ADD PRIMARY KEY (`id_mk`);

--
-- Índices para tabela `imagem_pedi`
--
ALTER TABLE `imagem_pedi`
  ADD PRIMARY KEY (`id_img_ped`);

--
-- Índices para tabela `redessociais`
--
ALTER TABLE `redessociais`
  ADD PRIMARY KEY (`social_id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id_carrossel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `imagem_mk`
--
ALTER TABLE `imagem_mk`
  MODIFY `id_mk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `imagem_pedi`
--
ALTER TABLE `imagem_pedi`
  MODIFY `id_img_ped` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `redessociais`
--
ALTER TABLE `redessociais`
  MODIFY `social_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servicos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
