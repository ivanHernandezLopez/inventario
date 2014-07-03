-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2014 at 09:21 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `free_inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `catestados`
--

CREATE TABLE IF NOT EXISTS `catestados` (
  `id_catestado` int(11) NOT NULL,
  `dsc_abreviacion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_catestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catmunicipios`
--

CREATE TABLE IF NOT EXISTS `catmunicipios` (
  `id_catmunicipio` int(11) NOT NULL,
  `id_catestado` int(11) DEFAULT NULL,
  `dsc_nombre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_catmunicipio`),
  KEY `fk_catmunicipios_1_idx` (`id_catestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catpedidos`
--

CREATE TABLE IF NOT EXISTS `catpedidos` (
  `id_catpedidos` int(11) NOT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_enviado` date DEFAULT NULL,
  `dsc_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_catproveedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_catpedidos`),
  KEY `fk_catpedidos_1_idx` (`id_catproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catproductos`
--

CREATE TABLE IF NOT EXISTS `catproductos` (
  `id_producto` int(11) NOT NULL,
  `id_catproveedor` int(11) DEFAULT NULL,
  `id_catunidad` int(11) DEFAULT NULL,
  `cod_barras` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_precio_unit` int(11) DEFAULT NULL,
  `dsc_unidades_por_mayore` int(11) DEFAULT NULL,
  `dsc_precio_may` int(11) DEFAULT NULL,
  `id_catusuario` int(11) DEFAULT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `sta_baja` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `fk_catproductos_1_idx` (`id_catproveedor`),
  KEY `fk_catproductos_2_idx` (`id_catunidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catproveedores`
--

CREATE TABLE IF NOT EXISTS `catproveedores` (
  `id_catproveedor` int(11) NOT NULL,
  `dsc_direccion_empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_catmunicipio` int(11) DEFAULT NULL,
  `id_catestado` int(11) DEFAULT NULL,
  `dsc_colonia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_calle` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_postal` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_oficina` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_correo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_pagina_web` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_comentarios` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fec_alta` date NOT NULL,
  `fec_baja` date NOT NULL,
  `sta_baja` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_catproveedor`),
  KEY `fk_catproveedores_1_idx` (`id_catmunicipio`),
  KEY `fk_catproveedores_2_idx` (`id_catestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catunidades`
--

CREATE TABLE IF NOT EXISTS `catunidades` (
  `id_catunidad` int(11) NOT NULL,
  `dsc_siglas` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dsc_nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_catunidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catusuarios`
--

CREATE TABLE IF NOT EXISTS `catusuarios` (
  `id_catusuario` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_nombre` varchar(45) DEFAULT NULL,
  `dsc_apellido_pat` varchar(45) DEFAULT NULL,
  `dsc_apellido_mat` varchar(45) DEFAULT NULL,
  `dsc_correo` varchar(45) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL,
  `dsc_contrasena` varchar(100) DEFAULT NULL,
  `fec_alta` date NOT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) NOT NULL,
  PRIMARY KEY (`id_catusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `catusuarios`
--

INSERT INTO `catusuarios` (`id_catusuario`, `dsc_nombre`, `dsc_apellido_pat`, `dsc_apellido_mat`, `dsc_correo`, `cod_usuario`, `dsc_contrasena`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, 'Adriana', 'Tellez', 'Martinez', 'aditha.130990@gmail.com', 13091990, '$2a$12$kjqzN2UDyQ2AMWBZQJ4kv..vnT5Z5LaPoNQ8lgXnKdHHXPHJ1wmSW', '2014-07-02', '0000-00-00', '0000-00-00', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `detpedidos`
--

CREATE TABLE IF NOT EXISTS `detpedidos` (
  `id_detpedido` int(11) NOT NULL,
  `id_catpedido` int(11) DEFAULT NULL,
  `id_producto` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_detpedido`),
  KEY `fk_detpedidos_1_idx` (`id_catpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catmunicipios`
--
ALTER TABLE `catmunicipios`
  ADD CONSTRAINT `fk_catmunicipios_1` FOREIGN KEY (`id_catestado`) REFERENCES `catestados` (`id_catestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `catpedidos`
--
ALTER TABLE `catpedidos`
  ADD CONSTRAINT `fk_catpedidos_1` FOREIGN KEY (`id_catproveedor`) REFERENCES `catproveedores` (`id_catproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `catproductos`
--
ALTER TABLE `catproductos`
  ADD CONSTRAINT `fk_catproductos_1` FOREIGN KEY (`id_catproveedor`) REFERENCES `catproveedores` (`id_catproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_catproductos_2` FOREIGN KEY (`id_catunidad`) REFERENCES `catunidades` (`id_catunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `catproveedores`
--
ALTER TABLE `catproveedores`
  ADD CONSTRAINT `fk_catproveedores_1` FOREIGN KEY (`id_catmunicipio`) REFERENCES `catmunicipios` (`id_catmunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_catproveedores_2` FOREIGN KEY (`id_catestado`) REFERENCES `catestados` (`id_catestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detpedidos`
--
ALTER TABLE `detpedidos`
  ADD CONSTRAINT `fk_detpedidos_1` FOREIGN KEY (`id_catpedido`) REFERENCES `catpedidos` (`id_catpedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
