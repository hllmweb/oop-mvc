-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/01/2019 às 00:08
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blogmvc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `slug_categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `slug_categoria`) VALUES
(1, 'PHP', 'php'),
(2, 'JAVASCRIPT', 'javascript'),
(3, 'HTML', 'html'),
(4, 'CSS', 'css');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `visitas` int(11) NOT NULL,
  `data` date NOT NULL,
  `embed_youtube` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`id_post`, `id_categoria`, `imagem`, `post`, `slug`, `descricao`, `visitas`, `data`, `embed_youtube`) VALUES
(1, 1, 'img01.jpg', 'Video 01 - Apresentação do curso', '', '<p>Teste de descrição</p>', 820, '2019-01-02', ''),
(2, 1, 'img02.jpg', 'Video 02 - Fatiando layout', '', '<p>Teste de descrição</p>', 120, '2019-01-03', ''),
(3, 1, 'img01.jpg', 'Video 01 - Apresentação do curso', '', '<p>Teste de descrição</p>', 820, '2019-01-02', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
