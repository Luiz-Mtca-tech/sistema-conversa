-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17/01/2022 às 18:10
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
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `assunto` varchar(170) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tecnico` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`id`, `assunto`, `descricao`, `id_usuario`, `id_tecnico`) VALUES
(42, 'fegbtg', '                            &#13;&#10;            ', 1, 0),
(45, 'reg', '                            erg&#13;&#10;            ', 1, 0),
(46, 'heer', '                            &#13;&#10;            rwg', 1, 0),
(47, 'scsacsca', ' scsac                           &#13;&#10;            ', 1, 1),
(48, 'Meu chamado', 'legal                            &#13;&#10;            ', 1, 1),
(49, 'Outro chamado', '12                            &#13;&#10;            ', 1, 2),
(50, 'Me ajuda', '                            &#13;&#10;            weed', 3, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
