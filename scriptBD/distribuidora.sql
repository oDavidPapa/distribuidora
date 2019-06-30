-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2019 às 18:35
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distribuidora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

CREATE TABLE `bebidas` (
  `idBebida` varchar(7) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `volume` varchar(7) NOT NULL,
  `preco` float NOT NULL,
  `quantidadeEstoque` int(11) NOT NULL,
  `fabricante` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebidas`
--

INSERT INTO `bebidas` (`idBebida`, `nome`, `volume`, `preco`, `quantidadeEstoque`, `fabricante`) VALUES
('cerv001', 'Cerveja Premium', '550', 7.99, 150, 'Stella Artois'),
('cerv002', 'Cerveja Long Neck', '343', 7.99, 300, 'Budweiser'),
('cerv003', 'Cerveja Extra', '355', 4.89, 150, 'Corona'),
('cha001', 'Champagne', '750', 378.97, 400, 'Moet e Chandon Imper'),
('redb001', 'Energy Drink RB', '437', 9, 200, 'Red Bull'),
('rum001', 'Rum Tangerina', '980', 26.96, 200, 'Bacardi'),
('vin001', 'Vinho Cabernet Sauvignon', '750', 25, 300, 'Balduzzi '),
('vin002', 'Vinho Di Manduria', '750', 122.73, 150, 'Primitivo Madrigale '),
('vodk001', 'Vodka Red Smirnoff', '998', 32.99, 2000, 'Smirnoff'),
('wisk001', 'Whisky Black Label', '1000', 119, 500, 'Jhonny Walker');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `idCidade` int(11) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `valorFreteVolume` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`idCidade`, `cidade`, `estado`, `CEP`, `valorFreteVolume`) VALUES
(1, 'Alegre', 'ES', '29500-000', 0.9),
(2, 'Vitória', 'ES', '299510-53', 0.5),
(3, 'Linhares', 'ES', '299510-50', 0.7),
(4, 'Rio de Janeiro', 'RJ', '297510-50', 0.5),
(5, 'Niterói', 'RJ', '297510-52', 0.7),
(6, 'Barra da Tijuca', 'RJ', '297510-51', 0.9),
(7, 'Belo Horizonte', 'MG', '279510-55', 0.5),
(8, 'Ipatinga', 'MG', '279510-54', 0.9),
(9, 'São Lourenço', 'MG', '279510-53', 0.7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `idCidade` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cnpj`, `endereco`, `idCidade`, `email`, `senha`) VALUES
(1, 'David', '18819910002', 'Rua Adair Celga', 1, 'david@gmail.com', '132243'),
(2, 'David', '18819910002', 'Rua Adair Celga', 3, 'david@gmail.com', '42343242'),
(3, 'Crislayne Dettmann', '12345678912', 'Rua Brauna, Sayonara, 148', 3, 'david@ufes.com', '123'),
(6, 'David Papa', '123.123.123-30', 'Avenida São João , Shell, 29927-000', 8, 'david@teste.com', '12345'),
(7, 'Francisco', '1234567890', 'Cobrinha', 3, 'chicoBento@gmail.com', '12345'),
(8, 'David Papa de Souza', '1234567890-12', 'Rua Adair Celga, Cobrinha, nÂº 30', 1, 'davidpapa@ufes.br', '12345'),
(9, 'Francisco', '1828129391202', 'Adair Celga, Cobrinha', 2, 'francisco@ufes.com', '12345'),
(10, 'David Papa de Souza', '148.392.923-02', 'Rua Adair Celga, 14, apt 102, Cobrinha', 1, 'david@ufes', '12345'),
(11, 'David Papa de Souza', '30.713.169/000', 'Vitorio de Souza', 1, 'david', '123'),
(12, 'Administrador', '000.000.000-00', 'Internet', 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `dataCompra` date NOT NULL,
  `valorTotal` float NOT NULL,
  `valorFrete` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`idCompra`, `idCliente`, `dataCompra`, `valorTotal`, `valorFrete`) VALUES
(68, 6, '2019-06-26', 15.98, 0.6251),
(69, 6, '2019-06-26', 23.97, 0.7203),
(70, 6, '2019-06-26', 319.6, 9.604),
(71, 6, '2019-06-26', 1110.52, 10.8416),
(72, 6, '2019-06-26', 378.97, 0.525),
(73, 6, '2019-06-26', 39.12, 1.988),
(74, 12, '2019-06-30', 23.97, 0.9261),
(75, 6, '2019-06-30', 1196.88, 4.5243),
(76, 6, '2019-06-30', 797.89, 2.8935),
(77, 6, '2019-06-30', 410.16, 4.2966),
(78, 6, '2019-06-30', 474.52, 4.2795);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenscompra`
--

CREATE TABLE `itenscompra` (
  `idItem` int(11) NOT NULL,
  `idBebida` varchar(7) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorItem` float NOT NULL,
  `idCompra` int(11) NOT NULL,
  `codItemCompra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itenscompra`
--

INSERT INTO `itenscompra` (`idItem`, `idBebida`, `quantidade`, `valorItem`, `idCompra`, `codItemCompra`) VALUES
(1, 'cerv001', 1, 7.99, 68, 49),
(2, 'cerv002', 1, 7.99, 68, 50),
(1, 'cerv002', 3, 23.97, 69, 51),
(1, 'cerv002', 40, 319.6, 70, 52),
(1, 'cerv002', 31, 247.69, 71, 53),
(2, 'cha001', 2, 757.94, 71, 54),
(3, 'vin001', 4, 100, 71, 55),
(4, 'cerv003', 1, 4.89, 71, 56),
(1, 'cha001', 1, 378.97, 72, 57),
(1, 'cerv003', 8, 39.12, 73, 58),
(1, 'cerv002', 3, 23.97, 75, 59),
(2, 'cha001', 3, 1136.91, 75, 60),
(3, 'redb001', 4, 36, 75, 61),
(1, 'cerv002', 5, 39.95, 76, 62),
(2, 'cha001', 2, 757.94, 76, 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`idBebida`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indexes for table `itenscompra`
--
ALTER TABLE `itenscompra`
  ADD PRIMARY KEY (`codItemCompra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `itenscompra`
--
ALTER TABLE `itenscompra`
  MODIFY `codItemCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
