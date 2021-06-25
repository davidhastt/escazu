-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2021 a las 07:36:17
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
(1, NULL, 'MEDIO AMBIENTE', 1, '0.0', 1, 'LAGO DE CIUTZEO', 'DESAPARECE EL LAGO', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST', '                BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí</STRONG>\r\n              ', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, NULL, 'RECURSOS HIDRICOS', 1, '0.0', 1, 'LAGUNA DE BACALAR', 'BACALAR FOR US', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST ANCINA MESMO', '                BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí ANCINA MESMO</STRONG>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, 'RECOLECCION DE BASURA', 1, '0.0', 1, 'RECOLECCION DE BASURA EN TOLUCA', 'BASURA POR TODOS LADOS', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST ANCINA MESMO ES CORRECTO', '                BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>AQUI VA LA DESCRIPCION CORTA DEL POST ANCINA MESMO ES CORRECTO</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, 'DELIMITACION DEL LOBO MEXICANO', 1, '0.0', 1, 'EL LOBO MEXICANO SE EXTINGUE', 'ADIOS AL LOBO MEXICANO', NULL, 3, 'AQUI VA LA DESCRIPCION CORTA DEL POST DEL LOBO', '                BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>AQUI VA LA DESCRIPCION CORTA DEL POST DEL LOBO</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, 'CONTAMINACION EN EL RIO LERMA2', 1, '0.0', 4, 'EL RIO LERMA ESTA PARA LLORAR2', 'DESAPARECE LA VIDA EN EL RIO2', NULL, 2, 'AQUI VA LA DESCRIPCION CORTA DEL POST DEL RIO LERMA2', '                AQUI VA LA DESCRIPCION CORTA DEL POST DEL RIO LERMA BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí2</STRONG>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
(1, 'EDITH', 'GOMEZ', 'ROCHA', '2021-06-16', 'F', 'EDI@GMAIL.COM', '$2y$04$1q2vxosNBzm4NE/9P7xhi.vEOCpDKVefMBRgPIsiyZy/vi4tNDgGm', 0, '2021-06-21', 0),
(4, 'DAVID GERMáN', 'GOMEZ', 'MILLáN', '2021-06-23', 'M', 'DAVIDHASTT@GMAIL.COM', '$2y$04$FB2L3oDz.jjct7df8Asie.xMpLGvJspgL5Ir.CTtL7v.Czi9t1UQm', 1, '2021-06-17', 1),
(11, 'ROQUE', 'RODRIGUEZ', 'FUENTES', '2021-06-21', 'M', 'ROQUE@GMAIL.COM', '$2y$04$61KOubxLw1rexJwbM3ZzSu32k/oWzgtfX2z9Hiqk9EZ51kAC/YqCe', 0, '2021-06-21', 0),
(12, 'ERICKA', 'FUENTES', 'RODRIGUEZ', '2021-07-03', 'F', 'ERI@GMAIL.COM', '$2y$04$v8qqn9enKpLgDJROfSCvSeUJUTo0zYenDA/1tA7hVxlDXK3ipNFga', 0, '2021-06-21', 0),
(13, 'ESMERALDA', 'GUZMAN', 'SOTELO', '2021-06-09', 'F', 'ESME@GMAIL.COM', '$2y$04$1h/AnllkS/L62taWWqq0ROE/z8ITxfT17p7bHWih5afxEJJVWLkNi', 0, '2021-06-21', 0);

--
-- Índices para tablas volcadas
--

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
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
