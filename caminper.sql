-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2020 a las 01:59:41
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caminper`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ap_paterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ap_materno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `escuela` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `dni`, `nombre`, `ap_paterno`, `ap_materno`, `fecha_nac`, `email`, `escuela`, `direccion`, `telefono`, `estado`, `fecha_creacion`) VALUES
(1, '72186198', 'Martin', 'Merino', 'Merino', '2020-10-01', 'merinodavilam@gmail.com', 'UNMSM', 'Juan Castro 190', '+51941131516', 0, '2020-10-23 23:43:38'),
(9, '72186192', 'Martin', 'Merino', 'Merino', '2020-10-08', 'merinodavilam@gmail.com', 'UNMSM', 'Juan Castro 190', '+51941131516', 0, '2020-10-23 23:53:35'),
(10, '72186194', 'Martin', 'Merino', 'Merino', '2020-10-06', 'merinodavilam@gmail.com', 'UNMSM', 'Juan Castro 190', '+51941131516', 1, '2020-10-23 23:57:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
