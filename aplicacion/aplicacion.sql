-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 21:01:38
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

DROP TABLE IF EXISTS `calendario`;
CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  ` title` text COLLATE utf8_spanish2_ci NOT NULL,
  `start` date NOT NULL,
  `color` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, ` title`, `start`, `color`) VALUES
(1, 'cliente, especial', '2023-09-08', 'crimson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `rif` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `condicion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `cliente`, `rif`, `direccion`, `fecha`, `condicion`) VALUES
(7, 'Electrobobinado Lumar C.a', 'J-301012852', 'Guatire', '2023-09-08', 'Especial'),
(8, 'ElectroTecnica Eguegua C.a', 'J-001329714', 'Guarenas', '2023-09-08', 'Especial'),
(9, 'Floristeria Santa Cruz C.a', 'J-003422886', 'Guatire', '2023-09-08', 'Especial'),
(10, 'Inversiones yovandry C.a', 'J-298087595', 'Guatire', '2023-09-08', 'Especial'),
(11, 'Inversiones ACR C.a', 'J-412774344', 'Guatire', '2023-09-08', 'Especial'),
(12, 'Electrotecnica Halley C.a', 'J-407210874', 'Guarenas', '2023-09-08', 'Especial'),
(13, 'Aps Salud C.a', 'J-407568795', 'Guatire', '2023-09-08', 'Especial'),
(14, 'Peluqueria Baldaly C.a', 'J-308388718', 'Guarenas', '2023-09-08', 'Especial'),
(15, 'Gilmary C.a', 'J-307113987', 'Guarenas', '2023-09-08', 'Especial'),
(16, 'Ceramicas El Marquet C.a', 'J-000799431', 'Guatire', '2023-09-08', 'Especial'),
(17, 'Distribuidora Viera C.a', 'J-304732325', 'Guatire', '2023-09-08', 'Especial'),
(18, 'Motos Repuestos fagux C.a', 'J-402025661', 'Guarenas', '2023-09-08', 'Especial'),
(19, 'Servicios Alicar C.a', 'J-20030020', 'Guarenas', '2023-09-08', 'Especial'),
(20, 'Wlaimar C.a', 'J-402446829', 'Guarenas', '2023-09-08', 'Especial'),
(21, 'Distribuidora Morelys C.a', 'J-295823690', 'Guatire', '2023-09-08', 'Especial'),
(22, 'FerroVital C.a', 'J-501912823', 'Guatire', '2023-09-08', 'Especial'),
(23, 'Tecno Frio El Grande C.a', 'J-503594284', 'Guatire', '2023-09-08', 'Ordinario'),
(24, 'Electronica Gutire C.a', 'J-502823522', 'Guatire', '2023-09-08', 'Ordinario'),
(25, 'Soluciones Lofar C.a', 'J-501757445', 'Guatire', '2023-09-08', 'Ordinario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

DROP TABLE IF EXISTS `tabla`;
CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `rif` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `cliente`, `rif`, `direccion`, `fecha`) VALUES
(11, 'lenin hidalgo', 'J-200300200', 'guatire', '2023-09-03'),
(12, 'karelys vera', 'J-200300200', 'guarenas', '2023-09-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validar`
--

DROP TABLE IF EXISTS `validar`;
CREATE TABLE `validar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `validar`
--

INSERT INTO `validar` (`id`, `nombre`, `password`) VALUES
(1, 'Nicoleta22', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validar`
--
ALTER TABLE `validar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `validar`
--
ALTER TABLE `validar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
