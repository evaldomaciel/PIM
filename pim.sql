-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2016 às 18:01
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionais`
--

CREATE TABLE `adicionais` (
  `id` int(11) NOT NULL,
  `seguro` varchar(1) NOT NULL,
  `tanqueCheio` varchar(1) NOT NULL,
  `limpo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `uf`) VALUES
(1, 'BrasÃ­lia', 'DF'),
(2, 'SÃ£o Paulo', 'SP'),
(3, 'Rio de Janeiro', 'RJ'),
(25, 'JoÃ£o Pinheiro', 'MG'),
(28, 'VitÃ³ria', 'ES');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `cnh` varchar(45) NOT NULL,
  `dataNascimento` date NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `Cidades_id` int(11) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `orgExp` varchar(8) NOT NULL,
  `sexo` char(1) NOT NULL,
  `primeiraCNH` date NOT NULL,
  `validadeCNH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `cnh`, `dataNascimento`, `endereco`, `telefone`, `email`, `Cidades_id`, `rg`, `orgExp`, `sexo`, `primeiraCNH`, `validadeCNH`) VALUES
(1, 'Evaldo B. Maciel', '123', '123', '1990-06-30', 'Tijuca', 123, 'evaldomaciel17@gmail.com', 3, '28043', 'SSPDF', 'M', '2016-10-06', '2016-10-12'),
(2, 'Evaldo Borba Maciel', '3393170000', '12345678', '1990-06-30', 'Riacho Fundo', 6193830000, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(3, 'Evaldo Borba Maciel', '03393173103', '12345678', '1990-06-30', 'Riacho Fundo', 6193830000, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(4, 'Evaldo Borba Maciel', '03393173103', '12345678', '1990-06-30', 'Riacho Fundo', 6193830000, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(6, 'Barbara', '03393173103', '12345678', '2015-11-30', 'Samambaia', 6697, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(7, 'Tati', '03393173103', '12345678', '2015-11-29', 'Sobradinho', 6193830000, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(8, 'Matheus', '03393173103', '12345678', '2012-10-29', 'SÃ£o SebastiÃ£o', 6193830000, 'evaldomaciel17@gmail.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(9, 'Leonardo', '03393173103', '12345678', '2015-10-31', 'AG', 6193830000, 'leo@leo.com.br', 1, '', '', '', '0000-00-00', '0000-00-00'),
(10, 'Pedro', '03393173103', '12345678', '2014-11-30', 'Gama', 6193830000, 'pedro@pedro.com', 1, '', '', '', '0000-00-00', '0000-00-00'),
(11, 'Pedro Junio', '03393173103', '12345678', '2015-10-29', 'Gama', 6193830000, 'evaldomaciel17@gmail.com', 1, '28043', 'SSPDF', 'M', '2015-11-29', '2015-11-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `perfil` varchar(10) NOT NULL COMMENT 'Gerente ou Funcionário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `login`, `senha`, `perfil`) VALUES
(1, 'e', '123', '123', 'e1671797c52e15f763380b45e841ec32', 'e'),
(2, 'e', '123', '123', 'c5851339e3a0280a75d506d7c727e8e0be94a422', 'e'),
(3, 'Evaldo Borba Maciel', '3393173103', 'evaldo.maciel', '8014aa1164411f6e1e6a34b4654c45e1', 'Gerente'),
(4, 'Evaldo Borba Maciel', '3393173103', 'evaldo.maciel', '8014aa1164411f6e1e6a34b4654c45e1', 'Gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenspagamento`
--

CREATE TABLE `itenspagamento` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `itens_Pagamentocol` varchar(45) DEFAULT NULL,
  `TipoPagamento_id` int(11) NOT NULL,
  `Locacao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `id` int(11) NOT NULL,
  `disponibilidade` char(1) NOT NULL,
  `reserva` varchar(45) NOT NULL,
  `saida` datetime NOT NULL,
  `devolucao` datetime NOT NULL,
  `Veiculos_id` int(11) NOT NULL,
  `Funcionarios_id` int(11) NOT NULL,
  `Clientes_id` int(11) NOT NULL,
  `Categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao_has_adicionais`
--

CREATE TABLE `locacao_has_adicionais` (
  `Locacao_id` int(11) NOT NULL,
  `Adicionais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamento`
--

CREATE TABLE `tipopagamento` (
  `id` int(11) NOT NULL,
  `cartaoDeCredito` char(3) NOT NULL,
  `cheque` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `renavam` int(11) NOT NULL,
  `chassi` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `ano` date NOT NULL,
  `veiculoscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adicionais`
--
ALTER TABLE `adicionais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Clientes_Cidades1_idx` (`Cidades_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itenspagamento`
--
ALTER TABLE `itenspagamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ItensPagamento_TipoPagamento1_idx` (`TipoPagamento_id`),
  ADD KEY `fk_ItensPagamento_Locacao1_idx` (`Locacao_id`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Locacao_Veiculos1_idx` (`Veiculos_id`),
  ADD KEY `fk_Locacao_Funcionarios1_idx` (`Funcionarios_id`),
  ADD KEY `fk_Locacao_Clientes1_idx` (`Clientes_id`),
  ADD KEY `fk_Locacao_Categoria1_idx` (`Categoria_id`);

--
-- Indexes for table `locacao_has_adicionais`
--
ALTER TABLE `locacao_has_adicionais`
  ADD KEY `fk_Locacao_has_Adicionais_Locacao1_idx` (`Locacao_id`),
  ADD KEY `fk_Locacao_has_Adicionais_Adicionais1_idx` (`Adicionais_id`);

--
-- Indexes for table `tipopagamento`
--
ALTER TABLE `tipopagamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adicionais`
--
ALTER TABLE `adicionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `itenspagamento`
--
ALTER TABLE `itenspagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locacao`
--
ALTER TABLE `locacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipopagamento`
--
ALTER TABLE `tipopagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_Clientes_Cidades1` FOREIGN KEY (`Cidades_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itenspagamento`
--
ALTER TABLE `itenspagamento`
  ADD CONSTRAINT `fk_ItensPagamento_Locacao1` FOREIGN KEY (`Locacao_id`) REFERENCES `locacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ItensPagamento_TipoPagamento1` FOREIGN KEY (`TipoPagamento_id`) REFERENCES `tipopagamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `locacao`
--
ALTER TABLE `locacao`
  ADD CONSTRAINT `fk_Locacao_Categoria1` FOREIGN KEY (`Categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Clientes1` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Funcionarios1` FOREIGN KEY (`Funcionarios_id`) REFERENCES `funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Veiculos1` FOREIGN KEY (`Veiculos_id`) REFERENCES `veiculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `locacao_has_adicionais`
--
ALTER TABLE `locacao_has_adicionais`
  ADD CONSTRAINT `fk_Locacao_has_Adicionais_Adicionais1` FOREIGN KEY (`Adicionais_id`) REFERENCES `adicionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_has_Adicionais_Locacao1` FOREIGN KEY (`Locacao_id`) REFERENCES `locacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
