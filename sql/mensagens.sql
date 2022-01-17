-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17/01/2022 às 18:02
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `MeuBanco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(3) NOT NULL,
  `conteudo` varchar(700) NOT NULL,
  `id_usuario` int(3) NOT NULL DEFAULT 0,
  `id_tecnico` int(3) NOT NULL DEFAULT 0,
  `id_conversa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `conteudo`, `id_usuario`, `id_tecnico`, `id_conversa`) VALUES
(14, 'lu', 3, 0, 50),
(15, 'gg', 3, 0, 50),
(16, 'oii', 3, 0, 50),
(17, 'Bom dia, como posso ajudá-lo?', 0, 3, 50),
(19, 'l', 3, 0, 50),
(20, 'oii', 1, 0, 48),
(21, 'bom dia, chamado 48', 0, 1, 48),
(23, 'estou com um problema no sistema', 1, 0, 48),
(24, 'pode me ajudar?', 1, 0, 48),
(25, 'me fale mais sobre o seu problema', 0, 1, 48);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
