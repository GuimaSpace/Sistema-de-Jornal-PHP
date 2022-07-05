-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2022 às 16:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jornal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL,
  `autor` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `descricao` varchar(220) NOT NULL,
  `link` varchar(220) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `autor`, `titulo`, `descricao`, `link`, `created`) VALUES
(7, 'Guimaraes', 'Guimaraes Dev', 'github.com/GuimaSpace', 'https://thumbs.dreamstime.com/b/c%C3%B3digo-fonte-e-papel-de-parede-do-desktop-pela-linguagem-programa%C3%A7%C3%A3o-com-codi-124708208.jpg', '2022-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  `Descricao` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created`, `modified`, `Descricao`) VALUES
(2, 'Jair Bolsonaro', 'jailson@gmail.com', '91656bc4b7d4a2a3029ecb4d952982e7', '2022-06-26', '2022-06-26', ''),
(5, 'Vinicius', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-26', NULL, ''),
(6, 'Guimaraes', 'bolsonaro@gmail.com', '91656bc4b7d4a2a3029ecb4d952982e7', '2022-06-29', '2022-06-29', ''),
(7, 'Teste', 'teste@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '2022-06-29', NULL, ''),
(8, 'Jornalista', 'jornalista@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-29', '2022-06-29', ''),
(9, 'Guimaraes', 'guimaraes@gmail.com', '91656bc4b7d4a2a3029ecb4d952982e7', '2022-06-29', NULL, ''),
(10, 'adasd', 'asdasddas@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', '2022-06-29', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
