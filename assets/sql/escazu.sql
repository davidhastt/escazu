-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 22:25:15
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoP` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidoM` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `sexo` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` int(1) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  `confirmado` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidoP`, `apellidoM`, `fechaNac`, `sexo`, `email`, `password`, `puesto`, `fecha_registro`, `confirmado`) VALUES
(1, 'David', 'Gomez', 'Millan', '2021-06-15', 'M', 'davidhastt@gmail.com', '$2y$04$1s8eh1NkOy01qaqSxzNTce8.4.VwUNym2hWCZSI1BQ0CqswIhpW.W', 1, '0000-00-00', 1),
(3, 'EDITH', 'GOMEZ', 'ROCHA', '1982-05-05', 'M', 'EDI@GMAIL.COM', '$2y$04$iFMQ8u0DfjeYkhFKR.sAneIuKjDF2FLSYW/F1aRMJeUy9zpRC7vg.', 0, '2021-06-11', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
