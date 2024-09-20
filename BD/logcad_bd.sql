-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/09/2024 às 21:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `logcad_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usario_tbl`
--

CREATE TABLE `usuario_tbl` (
  `id_usuario` int(11) NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usario_tbl`
--

INSERT INTO `usario_tbl` (`id_usuario`, `email`, `senha`, `nome`) VALUES
(1, 'henrique.merlucci29@gmail.com', '123', 'Lucas'),
(2, 'henrique.merlucci29@gmail.com', '789546', 'Henrique'),
(3, 'henrique.merlucci29@gmail.com', '123', 'Henrique'),
(4, 'zecapaugordinho@outlook.com', 'jesusmeuamigo', 'Zeca');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usario_tbl`
--
ALTER TABLE `usario_tbl`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usario_tbl`
--
ALTER TABLE `usario_tbl`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
