-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2017 às 14:22
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buscarep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessante`
--

CREATE TABLE `acessante` (
  `user` varchar(10) CHARACTER SET utf8 NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(16) NOT NULL,
  `confirmpassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int(8) NOT NULL,
  `id_rep` int(8) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(180) NOT NULL,
  `value` int(5) NOT NULL,
  `user_id` int(8) NOT NULL,
  `image_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

CREATE TABLE `gastos` (
  `id` int(8) NOT NULL,
  `id_rep` int(8) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `date_creation` date NOT NULL,
  `value` float NOT NULL,
  `description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `republica`
--

CREATE TABLE `republica` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(10) CHARACTER SET latin1 NOT NULL,
  `state` varchar(20) CHARACTER SET latin1 NOT NULL,
  `city` varchar(30) CHARACTER SET latin1 NOT NULL,
  `street` varchar(45) CHARACTER SET latin1 NOT NULL,
  `neighboor` varchar(20) CHARACTER SET latin1 NOT NULL,
  `complement` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `cellphone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `qtd` int(2) NOT NULL,
  `services` varchar(80) CHARACTER SET latin1 NOT NULL,
  `agency` varchar(20) CHARACTER SET latin1 NOT NULL,
  `able` varchar(20) CHARACTER SET latin1 NOT NULL,
  `img_name` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `republica`
--

INSERT INTO `republica` (`id`, `name`, `type`, `state`, `city`, `street`, `neighboor`, `complement`, `email`, `phone`, `cellphone`, `qtd`, `services`, `agency`, `able`, `img_name`) VALUES
(1645, 'RepÃºblica DebÃ´nio', 'Mista', 'Minas Gerais', 'Cidades SP', 'Rua AntÃ´nio Alves de Almeida, 200', 'Alves CÃ¢ntara', 'Casa', 'vitaumsky@gmail.com', '', '', 8, 'Piscina, TV a Cabo', 'Free Wings', '', 'd21efa095a8bb4fdd690a3b05d0b8c16.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(35) CHARACTER SET latin1 NOT NULL,
  `password` varchar(16) CHARACTER SET latin1 NOT NULL,
  `confirmpassword` varchar(16) CHARACTER SET latin1 NOT NULL,
  `birthday` date NOT NULL,
  `type` varchar(15) CHARACTER SET latin1 NOT NULL,
  `cod_image` int(15) NOT NULL,
  `name_image` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessante`
--
ALTER TABLE `acessante`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avaliacao_id_rep` (`id_rep`),
  ADD KEY `avaliacao_usuario_id` (`user_id`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gastos_id_rep` (`id_rep`);

--
-- Indexes for table `republica`
--
ALTER TABLE `republica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_id_rep` FOREIGN KEY (`id_rep`) REFERENCES `republica` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `avaliacao_usuario_id` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_id_rep` FOREIGN KEY (`id_rep`) REFERENCES `republica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
