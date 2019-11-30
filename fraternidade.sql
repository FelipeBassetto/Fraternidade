-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25-Mar-2019 às 18:33
-- Versão do servidor: 10.1.21-MariaDB
-- versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fraternidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--
USE obk6a4eglons2ijq;
/*
CREATE TABLE pessoas (
  id int(11) AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  sexo varchar(10) NOT NULL,
  data_nascimento varchar(20),
  estado_civil varchar(30) NOT NULL,
  nome_conjuge varchar(255),
  rg varchar(12) NOT NULL,
  cpf varchar(14) NOT NULL,
  email varchar(255),
  telefone varchar(50) NOT NULL,
  endereco varchar(255) NOT NULL,
  moradia varchar(30) NOT NULL,
  nome_pa varchar(100) NOT NULL,
  rg_pa varchar(12) NOT NULL,
  informacao_adicional varchar(255) NOT NULL,
  data_cadastro varchar(20),
  status varchar(7) NOT NULL,
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE dependentes(
  id_dependente int(11) AUTO_INCREMENT,
  num_cadastro varchar(255) NOT NULL,
  num_crianca int(2),
  nome_dependente varchar(255) NOT NULL,
  data_nascimento_dependente date NOT NULL,
  sexo_dependente varchar(255) NOT NULL,
  rg_dependente varchar(12),
  grau_parentenco varchar(255) NOT NULL,
  idade_C int(2) NOT NULL,
  tamanho_sapato varchar(255),
  tamanho_roupa varchar(255),
  data_nascimentoBB date,
  deficiencia varchar(255),
  fralda varchar(50) NOT NULL,
  PRIMARY KEY (id_dependente)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;
*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE usuarios(
  id int(11) AUTO_INCREMENT,
  login varchar(255),
  senha varchar(255),
  PRIMARY KEY (id)
)