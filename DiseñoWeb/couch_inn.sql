-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2016 a las 02:47:54
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `couch_inn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `id_calificacion` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  `id_couch` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL,
  `texto` longtext NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_couch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `couch`
--

CREATE TABLE IF NOT EXISTS `couch` (
  `id_couch` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `publicado` tinyint(1) NOT NULL,
  `eliminado` tinyint(1) NOT NULL,
  `cantidad_personas` int(50) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL,
  `imagen` blob NOT NULL,
  `id_couch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(3, 'México'),
(4, 'Colombia'),
(5, 'Guatemala'),
(6, 'España'),
(7, 'Brasil'),
(8, 'Uruguay'),
(9, 'Peru'),
(10, 'Argentina'),
(11, 'Chile'),
(12, 'Paraguay'),
(13, 'Inglaterra'),
(14, 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id_provincia` int(11) NOT NULL,
  `provincia` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `provincia`) VALUES
(1, 'Buenos Aires'),
(2, 'Córdoba'),
(3, 'Santa Fe'),
(4, 'Corrientes'),
(5, 'Misiones'),
(6, 'Salta'),
(7, 'Neuquén'),
(8, 'San Luis'),
(9, 'Mendoza'),
(10, 'Tucumán'),
(11, 'Chubut'),
(12, 'Tierra del fuego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id_reserva` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `id_telefono` int(11) NOT NULL,
  `numero` int(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `vip` tinyint(1) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(60) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_reserva_couch`
--

CREATE TABLE IF NOT EXISTS `usuario_reserva_couch` (
  `id_usuario` int(11) NOT NULL,
  `id_reserva` int(11) NOT NULL,
  `id_couch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_solicita_couch.`
--

CREATE TABLE IF NOT EXISTS `usuario_solicita_couch.` (
  `id_couch` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `id_couch` (`id_couch`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_reserva` (`id_reserva`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_couch` (`id_couch`);

--
-- Indices de la tabla `couch`
--
ALTER TABLE `couch`
  ADD PRIMARY KEY (`id_couch`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_couch` (`id_couch`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `usuario_reserva_couch`
--
ALTER TABLE `usuario_reserva_couch`
  ADD PRIMARY KEY (`id_usuario`,`id_reserva`,`id_couch`),
  ADD KEY `id_reserva` (`id_reserva`),
  ADD KEY `id_couch` (`id_couch`);

--
-- Indices de la tabla `usuario_solicita_couch.`
--
ALTER TABLE `usuario_solicita_couch.`
  ADD PRIMARY KEY (`id_couch`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `couch`
--
ALTER TABLE `couch`
  MODIFY `id_couch` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_couch`) REFERENCES `couch` (`id_couch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calificacion_ibfk_3` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id_reserva`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_couch`) REFERENCES `couch` (`id_couch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `couch`
--
ALTER TABLE `couch`
  ADD CONSTRAINT `couch_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `couch_ibfk_2` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `couch_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_couch`) REFERENCES `couch` (`id_couch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_reserva_couch`
--
ALTER TABLE `usuario_reserva_couch`
  ADD CONSTRAINT `usuario_reserva_couch_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_reserva_couch_ibfk_2` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id_reserva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_reserva_couch_ibfk_3` FOREIGN KEY (`id_couch`) REFERENCES `couch` (`id_couch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_solicita_couch.`
--
ALTER TABLE `usuario_solicita_couch.`
  ADD CONSTRAINT `usuario_solicita_couch._ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_solicita_couch._ibfk_2` FOREIGN KEY (`id_couch`) REFERENCES `couch` (`id_couch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
