-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 23:49:40
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas2`
--
create database pruebas2;

use pruebas2;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext,
  `sen_term` varchar(1) NOT NULL DEFAULT '0',
  `temp_max` varchar(1) NOT NULL DEFAULT '0',
  `temp_min` varchar(1) NOT NULL DEFAULT '0',
  `est_act` varchar(1) NOT NULL DEFAULT '0',
  `viento` varchar(1) NOT NULL DEFAULT '0',
  `lluv_ca` varchar(1) NOT NULL DEFAULT '0',
  `presion` varchar(1) NOT NULL DEFAULT '0',
  `humedad` varchar(1) NOT NULL DEFAULT '0',
  `alert_vol` varchar(1) NOT NULL DEFAULT '0',
  `est_aire` varchar(1) NOT NULL DEFAULT '0',
  `dolar` varchar(1) NOT NULL DEFAULT '0',
  `euro` varchar(1) NOT NULL DEFAULT '0',
  `uf` varchar(1) NOT NULL DEFAULT '0',
  `utm` varchar(1) NOT NULL DEFAULT '0',
  `ipc` varchar(1) NOT NULL DEFAULT '0',
  `santoral` varchar(1) NOT NULL DEFAULT '0',
  `l_sismo` varchar(1) NOT NULL DEFAULT '0',
  `feriado` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `sen_term`, `temp_max`, `temp_min`, `est_act`, `viento`, `lluv_ca`, `presion`, `humedad`, `alert_vol`, `est_aire`, `dolar`, `euro`, `uf`, `utm`, `ipc`, `santoral`, `l_sismo`, `feriado`) VALUES
(150, 'Felipe', 'Contreras', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
