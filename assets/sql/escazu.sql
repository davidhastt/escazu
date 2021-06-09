-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2021 a las 23:52:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escazu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoP` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidoM` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `sexo` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` int(1) NOT NULL,
  `confirmado` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidoP`, `apellidoM`, `fechaNac`, `sexo`, `email`, `password`, `puesto`, `confirmado`) VALUES
(1, 'david', 'Gomez', 'Millan', '1982-05-20', 'M', 'davidhastt@gmail.com', '$2y$04$1s8eh1NkOy01qaqSxzNTce8.4.VwUNym2hWCZSI1BQ0CqswIhpW.W', 0, 1),
(2, 'CARLA', 'MARQUEZ', 'HERNANDEZ', '2021-06-24', 'M', 'CARLA@GMAIL.COM', '$2y$04$t.F03WFrxnMaboV79.WY1eB7X8CRJ.OjOgY3it0ZBA2KkyZd/58rW', 0, 0),
(3, 'EDITH', 'GOMEZ', 'ROCHA', '2021-06-22', 'F', 'NERIS@GMAI.COM', '$2y$04$n2Huirb6mgmYHQb3GvU3P.gkjkTO6ysZYUfMYBGNzxtpA5ZIiSede', 0, 0),
(4, 'EDITH', 'GOMEZ', 'ROCHA', '2021-06-22', 'F', 'NERIS2@GMAI.COM', '$2y$04$RJNjXLy.LhBS5Z.vJTveR.KLuoPObLa9NZRduwIAYCnVohV5pUXG6', 0, 0),
(5, 'EDITH', 'GOMEZ', 'ROCHA', '2021-06-22', 'F', 'NERIS3@GMAI.COM', '$2y$04$z5CxcloX4Wz6jE4JJfKj2uiCFkwUJBl2GTfs0RVc1gjeAO3r8fadK', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
