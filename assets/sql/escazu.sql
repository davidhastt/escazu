-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2021 a las 05:04:15
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
  `nom_file` int(3) DEFAULT NULL,
  `rol` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id_archivo`, `id_tipoArchivo`, `id_post`, `nom_file`, `rol`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 2, 1),
(3, 1, 3, 3, 1),
(4, 3, 3, 4, 3),
(5, 1, 4, 4, 1),
(6, 4, 4, 6, 4),
(7, 2, 4, 7, 2),
(8, 2, 4, 8, 2),
(9, 3, 4, 9, 3),
(10, 3, 4, 10, 3),
(11, 3, 4, 11, 3),
(12, 3, 3, 12, 3),
(13, 3, 3, 13, 3),
(14, 4, 3, 14, 4),
(15, 2, 3, 15, 2);

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
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `estrellas` decimal(3,1) NOT NULL DEFAULT 0.0,
  `id_usuario` int(3) DEFAULT NULL,
  `nom_post` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `slogan` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idioma` text COLLATE utf8_spanish2_ci NOT NULL DEFAULT '\'\\\'ESP\\\'\'',
  `nota1` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nota2` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `whatsapp` bigint(10) DEFAULT NULL,
  `id_categoria` int(1) DEFAULT 1,
  `descripcion_corta` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenido` varchar(7817) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inicioPublicacion` date DEFAULT current_timestamp(),
  `finPublicacion` datetime DEFAULT current_timestamp(),
  `dateUpdate` date DEFAULT NULL,
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

INSERT INTO `posts` (`id_post`, `activo`, `estrellas`, `id_usuario`, `nom_post`, `slogan`, `idioma`, `nota1`, `nota2`, `whatsapp`, `id_categoria`, `descripcion_corta`, `contenido`, `inicioPublicacion`, `finPublicacion`, `dateUpdate`, `linkFacebook`, `linkYoutube`, `linkInstagram`, `seo_title`, `seo_keywords`, `seo_description`, `og_description`, `hits`) VALUES
(1, 1, '0.0', 4, 'ACUERDO ESCAZú', 'ACUERDO EN ESPAñOL ', 'PORT', '', NULL, NULL, 1, 'DOCUMENTO CON EL TEXTO OFICIAL DEL ACUERDO DE ESCAZú EN ESPAñOL', '                                                                                                                                                                                                                                                                                                                                                                                                                                DOCUMENTO CON EL TEXTO OFICIAL DEL ACUERDO DE ESCAZú EN ESPAñOL                                                                                                        \r\n                                                                \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                                                            \r\n                    ', '2021-07-25', '2021-07-25 13:24:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 1, '0.0', 4, 'CELEBRACIóN 23 DE ABRIL', 'CELEBRACIóN ENTRADA EN VIGOR DEL ACUERDO DE ESCAZú', 'PORT', '', NULL, NULL, 1, 'VIDEO DEL EVENTO VIRTUAL DE CELEBRACIóN DE LA ENTRADA EN VIGOR DEL ACUERDO DE ESCAZú PROMOVIDO POR LAS ORGANIZACIONES DE LA SOCIEDAD CIVIL', '                                                                                                                                                            VIDEO DEL EVENTO VIRTUAL DE CELEBRACIóN DE LA ENTRADA EN VIGOR DEL ACUERDO DE ESCAZú PROMOVIDO POR LAS ORGANIZACIONES DE LA SOCIEDAD CIVIL                                                                                                        \r\n                                                                \r\n                                                            \r\n                                                            \r\n                    ', '2021-07-25', '2021-07-25 13:25:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 1, '0.0', 4, '¿QUé ES EL ACUERDO DE ESCAZú?', '¿CONOCES EL ACUERDO DE ESCAZú?', 'ENG', 'EL AUTOR CEDE LOS DERECHOS', NULL, NULL, 1, 'INFOGRAFíA QUE DESCRIBE EN SíNTESIS QUé ES EL ACUERDO DE ESCAZú Y LOS ARTíCULOS PRINCIPALES', '                                                                                                                                                                                                                                                                                            INFOGRAFíA QUE DESCRIBE EN SíNTESIS QUé ES EL ACUERDO DE ESCAZú Y LOS ARTíCULOS PRINCIPALES                                                                                                        \r\n                                                                    \r\n                                                                    \r\n                                                                    \r\n                                                                \r\n                                                            \r\n                    ', '2021-07-25', '2021-07-25 13:27:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 1, '0.0', 4, 'ACUERDO DE ESCAZú 02 ACCESO A LA INFORMACIóN AMBIENTAL', '¿POR QUé ES IMPORTANTE CONTAR CON INFORMACIóN AMBI', 'ESP', NULL, NULL, NULL, 1, 'AUDIO SOBRE EL DERECHO DE ACCESO A LA INFORMACIóN AMBIENTAL QUE BUSCA GARANTIZAR EL ACUERDO DE ESCAZú', '                                                                                                                        AUDIO SOBRE EL DERECHO DE ACCESO A LA INFORMACIóN AMBIENTAL QUE BUSCA GARANTIZAR EL ACUERDO DE ESCAZú                                                                                                        \r\n                                                                    \r\n                                                                    \r\n                        ', '2021-07-25', '2021-07-25 13:28:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
(4, 'DAVID GERMáN', 'GOMEZ', 'MILLáN', '2021-07-21', 'M', 'DAVIDHASTT@GMAIL.COM', '$2y$04$VIyvigzx6YfT4vkz4A/B1.6zA.u3kVo44KP338z/0Zoo46bt93j.G', 1, '2021-07-02', 1),
(5, 'EDUARDO', 'LIMON', 'JIMENEZ', '2021-07-14', 'M', 'EDUARDO.LIMON@GMAIL.COM', '$2y$04$JUNJnomMUIMDxgGDMGhXFu28mnBB6Ss77V4nacNBpUvj2yJM0pw4W', 0, '2021-07-02', 0);

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
  MODIFY `id_archivo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
