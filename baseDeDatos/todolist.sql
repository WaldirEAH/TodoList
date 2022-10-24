-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 20:58:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todolist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttarea`
--
CREATE DATABASE todolist
USE todolist

CREATE TABLE `ttarea` (
  `id` int(11) NOT NULL,
  `tarea` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ttarea`
--

INSERT INTO `ttarea` (`id`, `tarea`, `email`) VALUES
(31, 'uhygtfrdxcvbnm,,,,,,,,,,,,,,,,', 'usuario1@email.com'),
(33, 'tarea documentacion editado', 'juan@email.com'),
(34, 'documentacion app', 'juan@email.com'),
(35, 'lskdfjklsdjf', 'juan@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`nombre`, `apellidop`, `apellidom`, `email`, `password`) VALUES
(' ', ' ', ' ', ' ', '$2y$10$zLy7oVm01OyxmFQjjLEmve89QmoEfE3GswnxydtBFI4Q4Jsii3xZC'),
('nombre', 'apleiido', 'apelldio2', 'correo@email.com', '$2y$10$Bf/EjMvO/rYgzpLLQGx4YukTfDP2AUMYyeT7XC.RwBR/w0aOeHLaW'),
('Juan', 'Gomez', 'Castillo', 'juan@email.com', '$2y$10$tRcVKrTN5vRHuvomFZ51YuAFplSrWDz4ubo/m/XugEIl/XANXbffC'),
('usuario1', 'apusuario1', 'apusuario1', 'usuario1@email.com', '$2y$10$goCDrv4V5ENs0PvAgi/Dr.S8d/s2TvCRNUhlmf61LDKzTS2TNgKaW'),
('u2', 'a2', 'a2', 'usuario2', '$2y$10$8aHspvvHQhI1c0U3jQEol.o.pcE..xHGeWmYGxlVn/mEU3yuzJUYW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ttarea`
--
ALTER TABLE `ttarea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ttarea`
--
ALTER TABLE `ttarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ttarea`
--
ALTER TABLE `ttarea`
  ADD CONSTRAINT `ttarea_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tusuario` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
