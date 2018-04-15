-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 01:22 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `idAudio` int(11) NOT NULL AUTO_INCREMENT,
  `Audio` varchar(45) NOT NULL,
  PRIMARY KEY (`idAudio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(45) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `NombreCategoria`, `ruta_imagen`, `idUsuario`) VALUES
(11, 'mm', 'img/1515375320_Penguins.jpg', 2),
(12, 'uuuuuu', 'img/1515459609_Lighthouse.jpg', 2),
(13, 'lala', 'img/1515519107_1.jpg', 3),
(14, 'lala', 'img/1515519110_1.jpg', 3),
(15, 'lala', 'img/1515519111_1.jpg', 3),
(16, 'lala', 'img/1515519112_1.jpg', 3),
(17, 'lala', 'img/1515519113_1.jpg', 3),
(40, 'Patooo', 'img/19cea2f12233bb2d18d57e60ff0d992e.jpg', 9),
(41, 'prueba', 'img/87109b169c85b9d57801b25e5f8d6c05.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `discapacidad`
--

CREATE TABLE IF NOT EXISTS `discapacidad` (
  `idUsuario` int(10) NOT NULL,
  `nomDiscapacidad` varchar(30) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` varchar(45) NOT NULL,
  `SubCategoria_idSubCategoria` int(11) NOT NULL,
  `Audio_idAudio` int(11) DEFAULT NULL,
  `Texto` varchar(50) NOT NULL,
  PRIMARY KEY (`idImagen`),
  KEY `Audio_idAudio` (`Audio_idAudio`),
  KEY `Texto_idTexto` (`Texto`),
  KEY `SubCategoria_idSubCategoria` (`SubCategoria_idSubCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`idImagen`, `Imagen`, `SubCategoria_idSubCategoria`, `Audio_idAudio`, `Texto`) VALUES
(4, 'img/e55569f5b113b3dbcd40f4fe9b89c952.jpg', 1, NULL, 'hola'),
(5, 'img/88d7b2fe311454d019b63e9204c73396.jpg', 6, NULL, 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NombreSubCategoria` varchar(45) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idSubCategoria`),
  KEY `Categoria_idCategoria` (`Categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subcategorias`
--

INSERT INTO `subcategorias` (`idSubCategoria`, `NombreSubCategoria`, `ruta_imagen`, `Categoria_idCategoria`) VALUES
(1, 'Pato', 'img/d4b538cc542193e4885d30bab8f18442.jpg', 40),
(5, 'holaaa', 'img/d59b345e38474a8ed1e966764967c2b5.jpg', 40),
(6, 'como', 'img/49c2abea1e8fcf294e0236309c2f0fe7.jpg', 40),
(8, 'lala', 'img/7cce78aec0979bfb1b446f6caf03b7b5.jpg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `texto`
--

CREATE TABLE IF NOT EXISTS `texto` (
  `idTexto` int(11) NOT NULL AUTO_INCREMENT,
  `Texto` varchar(45) NOT NULL,
  PRIMARY KEY (`idTexto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `edad` int(3) DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `discapacidad` varchar(1) DEFAULT NULL,
  `cargo` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `clave`, `ciudad`, `edad`, `diagnostico`, `discapacidad`, `cargo`) VALUES
(1, 'prueba@prueba.com', '202cb962ac59075b964b07152d234b70', 'e', 0, 'e', '0', '1'),
(2, 'eduardo.zamorata@gmail.com', 'e1671797c52e15f763380b45e841ec32', 'e', 1, 'e', 'v', '2'),
(4, 'p@pato.com', 'c4ca4238a0b923820dcc509a6f75849b', 'lala', NULL, NULL, NULL, '2'),
(9, 'pato.andrade93@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'lal', NULL, NULL, NULL, '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
