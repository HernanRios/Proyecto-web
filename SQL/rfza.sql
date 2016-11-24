-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 01:33:59
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rfza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeonato`
--

CREATE TABLE `campeonato` (
  `id_campeonato` int(11) NOT NULL,
  `campeon` varchar(75) NOT NULL,
  `subcampeon` varchar(75) NOT NULL,
  `fk_id_categoria` varchar(75) NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campeonato`
--

INSERT INTO `campeonato` (`id_campeonato`, `campeon`, `subcampeon`, `fk_id_categoria`, `anio`) VALUES
(2, 'jose', 'agus', 'APSE', 33),
(3, 'juancho', 'iii', 'Gilera', 200),
(4, 'Juan', 'Jose', 'Gilera', 2000),
(5, 'Hector', 'Julian', 'APSE', 2009);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` varchar(75) NOT NULL,
  `cilindrada` int(11) NOT NULL,
  `zona` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `cilindrada`, `zona`) VALUES
('APSE', 1400, 'Sudeste'),
('Gilera', 110, 'Tanidl'),
('Mar y Sierras', 3600, 'Sudeste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `fk_id_campeonato` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `fk_id_campeonato`, `texto`, `puntaje`, `fk_id_usuario`) VALUES
(2, 3, 'como', 4, 1),
(3, 2, 'hola', 4, 3),
(4, 2, 'hola', 4, 3),
(5, 3, 'hola', 4, 3),
(6, 3, 'que', 4, 3),
(7, 3, 'tal', 4, 3),
(8, 3, 'tal', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagencampeonato`
--

CREATE TABLE `imagencampeonato` (
  `path` varchar(200) NOT NULL,
  `fk_id_campeonato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagencampeonato`
--

INSERT INTO `imagencampeonato` (`path`, `fk_id_campeonato`) VALUES
('img/campeonato/582e03306c736_03_10_16_SAMSUNG GALAXY J7 SM-J700M_SM-J710.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `pass`, `permiso`) VALUES
(1, 'her@her.com', '$2y$10$zB9/Zcbn9ln9vBUgoCoRHuDi5DX2BN6xYan6COj7IyGrDIJQhb6mG', 1),
(2, 'h@h.com', '$2y$10$zB9/Zcbn9ln9vBUgoCoRHuDi5DX2BN6xYan6COj7IyGrDIJQhb6mG', 3),
(3, 'a@a.com', '$2y$10$zB9/Zcbn9ln9vBUgoCoRHuDi5DX2BN6xYan6COj7IyGrDIJQhb6mG', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id_campeonato`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`),
  ADD KEY `id_campeonato` (`id_campeonato`),
  ADD KEY `id_campeonato_2` (`id_campeonato`);

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
  ADD KEY `fk_id_campeonato` (`fk_id_campeonato`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `imagencampeonato`
--
ALTER TABLE `imagencampeonato`
  ADD PRIMARY KEY (`path`),
  ADD KEY `fk_id_campeonato` (`fk_id_campeonato`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `id_campeonato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD CONSTRAINT `campeonato_ibfk_1` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`fk_id_campeonato`) REFERENCES `campeonato` (`id_campeonato`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `imagencampeonato`
--
ALTER TABLE `imagencampeonato`
  ADD CONSTRAINT `imagencampeonato_ibfk_1` FOREIGN KEY (`fk_id_campeonato`) REFERENCES `campeonato` (`id_campeonato`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
