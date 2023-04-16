-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2023 às 00:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_admin`
--

CREATE TABLE `tab_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_admin`
--

INSERT INTO `tab_admin` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_carros`
--

CREATE TABLE `tab_carros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ano` varchar(100) NOT NULL,
  `km` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `stats` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_carros`
--

INSERT INTO `tab_carros` (`id`, `nome`, `ano`, `km`, `preco`, `stats`) VALUES
(3, 'carro2', 'ano2', 'km2', 'preco2', 'status2'),
(4, 'carro3', 'ano3', 'km3', 'preco3', 'status3'),
(5, 'joao', 'joao', 'joao', 'joao', 'Vendido');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_usuarios`
--

CREATE TABLE `tab_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_usuarios`
--

INSERT INTO `tab_usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'joao', 'joao', 'joao'),
(2, 'joao', 'joao', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tab_admin`
--
ALTER TABLE `tab_admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tab_carros`
--
ALTER TABLE `tab_carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_admin`
--
ALTER TABLE `tab_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tab_carros`
--
ALTER TABLE `tab_carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
