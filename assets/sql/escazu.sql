-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2021 a las 07:40:15
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
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id_archivo` int(4) NOT NULL,
  `id_tipoArchivo` int(4) DEFAULT NULL,
  `id_post` int(4) DEFAULT NULL,
  `nom_file` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id_archivo`, `id_tipoArchivo`, `id_post`, `nom_file`) VALUES
(1, 1, 3, 1),
(2, 1, 4, 2),
(3, 1, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(2) NOT NULL,
  `mainTitle` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `subMainTitle` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_og_image` int(2) DEFAULT NULL,
  `nom_categoria` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `slogan` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `og_description` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hits` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `mainTitle`, `subMainTitle`, `id_og_image`, `nom_categoria`, `slogan`, `seo_title`, `seo_keywords`, `seo_description`, `og_description`, `hits`) VALUES
(1, 'sdf', NULL, NULL, 'El acuerdo escazú', NULL, NULL, NULL, NULL, NULL, 0),
(2, 'cvbxcvb', NULL, NULL, 'Conferencias y seminarios web', NULL, NULL, NULL, NULL, NULL, 0),
(3, 'hdfghd', NULL, NULL, 'Materiales educativos e informativos', NULL, NULL, NULL, NULL, NULL, 0),
(4, 'dfgh', NULL, NULL, 'Ligas de interes', NULL, NULL, NULL, NULL, NULL, 0),
(5, 'dfgh', NULL, NULL, 'Cursos', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_post` int(3) NOT NULL,
  `id_imageAsList` int(3) DEFAULT NULL,
  `idAstxt` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `estrellas` decimal(3,1) NOT NULL DEFAULT 0.0,
  `id_usuario` int(3) DEFAULT NULL,
  `nom_post` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `slogan` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `whatsapp` bigint(10) DEFAULT NULL,
  `id_categoria` int(1) DEFAULT NULL,
  `descripcion_corta` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenido` varchar(7817) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inicioPublicacion` timestamp NULL DEFAULT NULL,
  `finPublicacion` date DEFAULT NULL,
  `dateUpdate` date NOT NULL,
  `linkFacebook` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `linkYoutube` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `linkInstagram` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `og_description` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hits` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_post`, `id_imageAsList`, `idAstxt`, `activo`, `estrellas`, `id_usuario`, `nom_post`, `slogan`, `whatsapp`, `id_categoria`, `descripcion_corta`, `contenido`, `inicioPublicacion`, `finPublicacion`, `dateUpdate`, `linkFacebook`, `linkYoutube`, `linkInstagram`, `seo_title`, `seo_keywords`, `seo_description`, `og_description`, `hits`) VALUES
(1, NULL, 'MEDIO AMBIENTE', 1, '0.0', 4, 'MEDIO AMBIENTE', 'MEDIO AMBIENTE', NULL, 1, 'MEDIO AMBIENTE', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, NULL, 'MEDIO AMBIENTE2', 1, '0.0', 4, 'MEDIO AMBIENTE2', 'MEDIO AMBIENTE2', NULL, 1, 'MEDIO AMBIENTE2', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE2</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, 'MEDIO AMBIENTE', 1, '0.0', 4, 'MEDIO AMBIENTE2', 'MEDIO AMBIENTE2', NULL, 1, 'MEDIO AMBIENTE2', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE2</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, 'MEDIO AMBIENTE3', 1, '0.0', 4, 'MEDIO AMBIENTE3', 'MEDIO AMBIENTE3', NULL, 1, 'MEDIO AMBIENTE3', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE3</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, 'MEDIO AMBIENTE4', 1, '0.0', 4, 'MEDIO AMBIENTE4', 'MEDIO AMBIENTE4', NULL, 1, 'MEDIO AMBIENTE4', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE4</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `index_servicioT` (`id_post`);

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
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
