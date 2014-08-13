-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2014 at 04:23 AM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.3

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
-- Table structure for table `catfamilias`
--

CREATE TABLE IF NOT EXISTS `catfamilias` (
  `id_catfamilia` int(11) NOT NULL AUTO_INCREMENT,
  `num_familia` varchar(250) DEFAULT NULL,
  `dsc_descripcion` text,
  `nom_responsable` varchar(250) DEFAULT NULL,
  `num_extension` varchar(100) DEFAULT NULL,
  `dsc_region` varchar(100) DEFAULT NULL,
  `dsc_area` varchar(100) DEFAULT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_catfamilia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catfamilias`
--

INSERT INTO `catfamilias` (`id_catfamilia`, `num_familia`, `dsc_descripcion`, `nom_responsable`, `num_extension`, `dsc_region`, `dsc_area`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, '1', 'tornillos y cascos', 'jorge mejia', '', '', '', '2014-08-12', NULL, NULL, NULL, 'N'),
(2, '2', 'tornillos y cascos de aluminio', 'marisol', '', '', '', '2014-08-12', NULL, NULL, NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `catmateriales`
--

CREATE TABLE IF NOT EXISTS `catmateriales` (
  `id_catmaterial` int(11) NOT NULL AUTO_INCREMENT,
  `cod_producto` int(11) NOT NULL,
  `dsc_nombre` varchar(45) DEFAULT NULL,
  `dsc_descripcion` text,
  `id_catfamilia` int(11) DEFAULT NULL,
  `id_catunidad` int(11) DEFAULT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_catmaterial`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `catmateriales`
--

INSERT INTO `catmateriales` (`id_catmaterial`, `cod_producto`, `dsc_nombre`, `dsc_descripcion`, `id_catfamilia`, `id_catunidad`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, 1, 'casco 1', '', 1, 8, '2014-08-12', NULL, NULL, NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `catmatprov`
--

CREATE TABLE IF NOT EXISTS `catmatprov` (
  `id_catmatprov` int(11) NOT NULL AUTO_INCREMENT,
  `id_material` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `dsc_precio` int(11) NOT NULL,
  `fec_alta` date NOT NULL,
  `fec_modif` date NOT NULL,
  `fec_baja` date NOT NULL,
  `dsc_baja` text NOT NULL,
  `sta_baja` char(1) NOT NULL,
  PRIMARY KEY (`id_catmatprov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catmatprov`
--

INSERT INTO `catmatprov` (`id_catmatprov`, `id_material`, `id_proveedor`, `dsc_precio`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, 1, 2, 160, '2014-08-12', '2014-08-12', '0000-00-00', '', 'N'),
(2, 1, 1, 150, '2014-08-12', '2014-08-12', '0000-00-00', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `catproveedores`
--

CREATE TABLE IF NOT EXISTS `catproveedores` (
  `id_catproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `num_proveedor` varchar(250) DEFAULT NULL,
  `dsc_razon_social` varchar(250) DEFAULT NULL,
  `rfc_empresa` varchar(250) DEFAULT NULL,
  `dsc_domicilio` varchar(250) DEFAULT NULL,
  `nombre1` varchar(250) NOT NULL,
  `nombre2` varchar(250) NOT NULL,
  `telefono1` varchar(250) NOT NULL,
  `telefono2` varchar(250) NOT NULL,
  `telefono3` varchar(250) NOT NULL,
  `correo1` varchar(250) NOT NULL,
  `correo2` varchar(250) NOT NULL,
  `correo3` varchar(250) NOT NULL,
  `dsc_comercializadora` char(2) NOT NULL,
  `dsc_materiales` text NOT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_catproveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catproveedores`
--

INSERT INTO `catproveedores` (`id_catproveedor`, `num_proveedor`, `dsc_razon_social`, `rfc_empresa`, `dsc_domicilio`, `nombre1`, `nombre2`, `telefono1`, `telefono2`, `telefono3`, `correo1`, `correo2`, `correo3`, `dsc_comercializadora`, `dsc_materiales`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, '1', 'cascos s.a de c.v', '', 'dirección de cascos', 'nombre 1', '', 'tel1', '', '', 'correo@correo.com.mx', '', '', 'no', '', '2014-08-12', NULL, NULL, NULL, 'N'),
(2, '2', 'tornillos s.a de c.v', '', 'dirección de tornillos', 'n1', '', 't1', '', '', 'c1', '', '', 'no', '', '2014-08-12', NULL, NULL, NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `catunidades`
--

CREATE TABLE IF NOT EXISTS `catunidades` (
  `id_catunidad` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_nombre` varchar(45) DEFAULT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_catunidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `catunidades`
--

INSERT INTO `catunidades` (`id_catunidad`, `dsc_nombre`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(8, 'Piezas', '2014-07-07', NULL, NULL, NULL, 'N'),
(9, 'Metros', '2014-07-07', NULL, NULL, NULL, 'N'),
(10, 'Kilogramos', '2014-07-07', NULL, NULL, NULL, 'N'),
(11, 'Juegos', '2014-07-07', NULL, NULL, NULL, 'N'),
(12, 'Litros', '2014-07-07', NULL, NULL, NULL, 'N'),
(13, 'Tubos', '2014-07-07', NULL, NULL, NULL, 'N'),
(14, 'Rollos', '2014-07-07', NULL, NULL, NULL, 'N');

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
  `tipo_usuario` int(11) NOT NULL,
  `fec_alta` date NOT NULL,
  `fec_modif` date DEFAULT NULL,
  `fec_baja` date DEFAULT NULL,
  `dsc_baja` text,
  `sta_baja` char(1) NOT NULL,
  PRIMARY KEY (`id_catusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catusuarios`
--

INSERT INTO `catusuarios` (`id_catusuario`, `dsc_nombre`, `dsc_apellido_pat`, `dsc_apellido_mat`, `dsc_correo`, `cod_usuario`, `dsc_contrasena`, `tipo_usuario`, `fec_alta`, `fec_modif`, `fec_baja`, `dsc_baja`, `sta_baja`) VALUES
(1, 'Ivan', 'Hernadez', 'Lopez', 'van.m285@gmail.com', 12345, '$2a$12$SgfaMukmHGVpiLMHxQO6QOKg3FFh6JmUmN2ChiiZmK14LmGFmrT3C', 1, '2014-07-07', '2014-07-08', NULL, NULL, 'N'),
(2, 'Adriana', 'Tellez', 'Martinez', 'aditha.130990@gmail.com', 13091990, '$2a$12$kjqzN2UDyQ2AMWBZQJ4kv..vnT5Z5LaPoNQ8lgXnKdHHXPHJ1wmSW', 2, '2014-07-02', '0000-00-00', '0000-00-00', '', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
