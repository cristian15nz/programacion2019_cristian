-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 18:21:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fn1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`) VALUES
(1, 'Wentchelle', 'Antoine'),
(2, 'Chistopher', 'Nuñez'),
(3, 'Kervens', 'Ford'),
(4, 'Ronny', 'Reyes'),
(5, 'Rony', 'Frias'),
(6, 'Wadley', 'Norbin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_correos`
--

CREATE TABLE `estudiantes_correos` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_correos`
--

INSERT INTO `estudiantes_correos` (`id`, `correo`) VALUES
(1, 'a.wentchelle94@gmail.com'),
(2, 'christopherventura@gmail.com'),
(2, 'thegamer123@gmail.com'),
(3, 'kervensford5@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_telefonos`
--

CREATE TABLE `estudiantes_telefonos` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_telefonos`
--

INSERT INTO `estudiantes_telefonos` (`id`, `telefono`) VALUES
(1, '809-307-8006'),
(3, '809-809-8009'),
(3, '829-987-8547');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
