-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/08/2020 às 03:13
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zatos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_access` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_cpf` varchar(45) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_access`, `user_password`, `email`, `user_cpf`, `latitude`, `longitude`, `date_register`, `date_modify`, `date_activity`) VALUES
(1, 'Administrador', 'admin', '$2y$10$rmeRb8YAAUJlSvVH0GGT9ujT.LemhsCj9PJmLzBirkiqpA3Ou7Q2.', 'admin@empresaA.com.br', '78945612345', NULL, NULL, '2020-08-07 21:11:04', '2020-08-07 21:11:04', '2020-08-07 21:11:04');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
