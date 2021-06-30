-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 07:20:19
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
  `id_tipo` int(4) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL,
  `nom_file` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(6, NULL, 'ADIOSBACALAR', 1, '0.0', 4, 'LAGUNA DE BACALAR DESAPARECE', 'ADIOS BACALAR', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST', 'DAVID DAVID', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, NULL, 'LOBOMEXICANO', 1, '0.0', 4, 'DESAPARECE EL LOBO MEXICANO', 'ADIOS LOBITO', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST DEL LOBO MEXICANO', '                BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>AQUI VA LA DESCRIPCION CORTA DEL POST DEL LOBO MEXICANO</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, NULL, 'MEXICANOSVSCONTAMINACION', 0, '0.0', 4, 'UNION DE MEXICANOS VS LA CONTAMINACIONX', 'SI NO NOS UNIMOS NOS CARGA EL PAYASOX', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST DEL SI NO NOS UNIMOS NOS CARGA EL PAYASO', '                                DAVID<B> CARGA EL PAYASO</B>                                \r\n                                              \r\n              ', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, NULL, 'ZEMPOALA EN PELIGRO', 1, '0.0', 4, 'LAGUNAS DE ZEMPOALA SE  EXTINGUEN', 'ADIOS ZEMPOALA', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST DE ZEMPOALA', 'AQUI VA LA DESCRIPCION CORTA DEL POST DE ZEMPOALA', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, NULL, 'CUENCA DEL BALSAS', 1, '0.0', 4, 'ADIOS AL BALSAS', 'EL BALSAS SUPER CONTAMINADO', NULL, 1, 'AQUI VA LA DESCRIPCION DEL RIO BALSAS', 'AQUI VA LA DESCRIPCION DEL RIO BALSAS, DESCRIPCION LARGA DEL RIO BALSAS', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, NULL, 'BOSQUE DE ZUMPAHUACAN', 1, '0.0', 4, 'LAGO DE ZUMPAHUACAN', 'ADIOS BOSQUE DE ZUMPAHUACAN', NULL, 1, 'AQUI VA LA DESCRIPCION CORTA DEL POST ANCINA MESMO ES CORRECTO ADIOS BOSQUE DE ZUMPAHUACAN', 'AQUI VA LA DESCRIPCION CORTA DEL POST ANCINA MESMO ES CORRECTO ADIOS BOSQUE DE ZUMPAHUACAN, ANCINA MESMO AQUI VA LA DESCRIPCION', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, NULL, 'MEDIO AMBIENTE2', 1, '0.0', 4, 'MEDIO AMBIENTE2', 'MEDIO AMBIENTE2', NULL, 1, 'MEDIO AMBIENTE2', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE2</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(14, NULL, 'MEDIO AMBIENTE3', 1, '0.0', 4, 'MEDIO AMBIENTE3', 'MEDIO AMBIENTE3', NULL, 1, 'MEDIO AMBIENTE3', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE3MEDIO AMBIENTE3</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(15, NULL, 'MEDIO AMBIENTE3', 1, '0.0', 4, 'MEDIO AMBIENTE3', 'MEDIO AMBIENTE3', NULL, 1, 'MEDIO AMBIENTE3', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE3&NBSP;MEDIO AMBIENTE3</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(16, NULL, 'MEDIO AMBIENTE4', 1, '0.0', 4, 'MEDIO AMBIENTE4', 'MEDIO AMBIENTE4', NULL, 1, 'MEDIO AMBIENTE4', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE4&NBSP;</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(17, NULL, 'MEDIO AMBIENTE4', 1, '0.0', 4, 'MEDIO AMBIENTE4', 'MEDIO AMBIENTE4', NULL, 1, 'MEDIO AMBIENTE4', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE4</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, NULL, 'MEDIO AMBIENTE5', 1, '0.0', 4, 'MEDIO AMBIENTE5', 'MEDIO AMBIENTE5', NULL, 1, 'MEDIO AMBIENTE5', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE5</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, NULL, 'MEDIO AMBIENTE6', 1, '0.0', 4, 'MEDIO AMBIENTE6', 'MEDIO AMBIENTE6', NULL, 1, 'MEDIO AMBIENTE6', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE6</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, NULL, 'MEDIO AMBIENTE7', 1, '0.0', 4, 'MEDIO AMBIENTE7', 'MEDIO AMBIENTE7', NULL, 1, 'MEDIO AMBIENTE7', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE7</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, NULL, 'MEDIO AMBIENTE7', 1, '0.0', 4, 'MEDIO AMBIENTE7', 'MEDIO AMBIENTE7', NULL, 1, 'MEDIO AMBIENTE7', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE7</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(22, NULL, 'MEDIO AMBIENTE8', 1, '0.0', 4, 'MEDIO AMBIENTE8', 'MEDIO AMBIENTE8', NULL, 1, 'MEDIO AMBIENTE8', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE8</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(23, NULL, 'MEDIO AMBIENTE9', 1, '0.0', 4, 'MEDIO AMBIENTE9', 'MEDIO AMBIENTE9', NULL, 1, 'MEDIO AMBIENTE9', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE9</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(24, NULL, 'MEDIO AMBIENTE9', 1, '0.0', 4, 'MEDIO AMBIENTE9', 'MEDIO AMBIENTE9', NULL, 1, 'MEDIO AMBIENTE9', '                                                                    BORRA ESTO <EM>Y DESPUES </EM> <U>ESCRIBE EL CONTENIDO DEL POST</U> <STRONG>AQUí&NBSP;</STRONG><B>MEDIO AMBIENTE9</B>', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
  MODIFY `id_archivo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
