-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2017 às 01:32
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
  `user` varchar(10) NOT NULL,
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

--
-- Extraindo dados da tabela `gastos`
--

INSERT INTO `gastos` (`id`, `id_rep`, `type`, `date`, `date_creation`, `value`, `description`) VALUES
(5646, 0, 'AlimentaÃ§Ã£o', '2017-05-21', '2017-05-29', 134.5, 'Bretas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `republica`
--

CREATE TABLE `republica` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `creation` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `street` varchar(25) NOT NULL,
  `neighboor` varchar(20) NOT NULL,
  `complement` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `qtd` int(2) NOT NULL,
  `services` varchar(80) NOT NULL,
  `agency` varchar(20) NOT NULL,
  `able` varchar(20) NOT NULL,
  `img_id` int(6) NOT NULL,
  `img_name` varchar(40) NOT NULL,
  `img_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `republica`
--

INSERT INTO `republica` (`id`, `name`, `creation`, `type`, `state`, `city`, `street`, `neighboor`, `complement`, `email`, `phone`, `cellphone`, `qtd`, `services`, `agency`, `able`, `img_id`, `img_name`, `img_date`) VALUES
(8661, 'Rep do Amor', '2017-05-30', 'Masculina', 'Minas Gerais', 'Cidades MG', 'Rua Miguel Albano, 2071', 'Abc', '', 'adlerunifei@gmail.com', '35991226598', '358896654', 5, 'nada', 'locadora', '', 96508, 'fccf40b5e80dfaf6605b9d7055b27fd2.jpg', '2017-05-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(16) NOT NULL,
  `confirmpassword` varchar(16) NOT NULL,
  `birthday` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `cod_image` int(15) NOT NULL,
  `name_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `name`, `lastname`, `email`, `password`, `confirmpassword`, `birthday`, `type`, `cod_image`, `name_image`) VALUES
('2442', 'adler', 'diniz', 'adlerunifei@gmail.com', '123', '123', '1980-01-03', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessante`
--
ALTER TABLE `acessante`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
