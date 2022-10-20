-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2022 às 06:19
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `idade` int(11) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `telefone`, `idade`, `datanasc`, `email`) VALUES
(2, 'MATEUS SOUZA TRAJANO', '48996897385', 26, '1996-06-19', 'mateussouzatrajano@gmail.com'),
(5, 'maria', '48996463362', 22, '1111-11-11', 'maria@gmail.com'),
(7, 'anderson', '2312432334432', 11, '1222-11-11', 'anderson@gmail.com'),
(8, 'milena', '156456465415', 19, '2003-03-23', 'milenasouzatrajano@gmail.com'),
(10, 'Adao', '48996463362', 22, '1515-05-04', 'adao@gmail.com'),
(11, 'adao', '48996463362', 61, '1961-07-24', 'adao@gmail.com'),
(14, 'milena', '48996859874', 55, '1999-09-14', 'milena@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
