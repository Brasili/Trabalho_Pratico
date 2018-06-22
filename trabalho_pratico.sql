-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 15-Jun-2018 às 20:06
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `trabalho_pratico`
--
CREATE DATABASE IF NOT EXISTS `trabalho_pratico` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trabalho_pratico`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_pais` int(10) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `pais_cidade` (`cod_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_autor` varchar(100) NOT NULL,
  `email_autor` varchar(100) NOT NULL,
  `data_comentario` varchar(50) NOT NULL,
  `cod_ponto` int(11) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `ponto_comentario` (`cod_ponto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pais`),
  KEY `cod_pais` (`id_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_turistico`
--

CREATE TABLE IF NOT EXISTS `ponto_turistico` (
  `id_ponto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ponto` varchar(100) NOT NULL,
  `cidade_ponto` int(11) NOT NULL,
  PRIMARY KEY (`id_ponto`),
  KEY `cidade_ponto` (`cidade_ponto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_ibfk_1` FOREIGN KEY (`cod_pais`) REFERENCES `paises` (`id_pais`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`cod_ponto`) REFERENCES `ponto_turistico` (`id_ponto`);

--
-- Limitadores para a tabela `ponto_turistico`
--
ALTER TABLE `ponto_turistico`
  ADD CONSTRAINT `ponto_turistico_ibfk_1` FOREIGN KEY (`cidade_ponto`) REFERENCES `cidades` (`id_cidade`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
