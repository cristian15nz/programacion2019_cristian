-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2019 a las 18:28:30
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
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `IDS` text,
  `nombre_equipo` int(11) DEFAULT NULL,
  `marcha` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`IDS`, `nombre_equipo`, `marcha`) VALUES
('1', 0, 'Motorola'),
('2', 0, 'Samsung');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales`
--

CREATE TABLE `decimales` (
  `_float` float DEFAULT NULL,
  `_double` double DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,2) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nombre` text,
  `pais` text,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `pais`, `fecha_nacimiento`) VALUES
(NULL, 'Cristian Nunez', 'DR', NULL),
(NULL, 'Wentchelle Antoine', 'HT', NULL),
(NULL, 'Chris Nuñez', 'JP', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `nombre` varchar(50) DEFAULT NULL,
  `edad` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`nombre`, `edad`) VALUES
('Cristy', 15),
('Silverio', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `_date` date DEFAULT NULL,
  `_datetime` datetime DEFAULT NULL,
  `_time` time DEFAULT NULL,
  `_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`_date`, `_datetime`, `_time`, `_timestamp`, `_year`) VALUES
('1996-01-15', '1996-01-15 08:10:30', '11:58:30', '2019-01-01 05:01:01', 2019),
('2019-09-03', '2019-09-03 12:04:12', '12:04:12', '2019-09-03 16:04:12', 2019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros`
--

CREATE TABLE `numericos_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros`
--

INSERT INTO `numericos_enteros` (`_tinyint`, `_smallint`, `_mediumint`, `_int`, `_bigint`) VALUES
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 32767, 8388607, 2147483647, 9223372036854775807);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros_sin_signos`
--

CREATE TABLE `numericos_enteros_sin_signos` (
  `_tinyint` int(10) UNSIGNED DEFAULT NULL,
  `_smallint` smallint(5) UNSIGNED DEFAULT NULL,
  `_mediumint` mediumint(8) UNSIGNED DEFAULT NULL,
  `_int` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros_sin_signos`
--

INSERT INTO `numericos_enteros_sin_signos` (`_tinyint`, `_smallint`, `_mediumint`, `_int`) VALUES
(255, 65535, 16777215, 4294967295),
(0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` text,
  `edad` tinyint(4) DEFAULT NULL,
  `cedula` varchar(14) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(13) DEFAULT NULL,
  `estado_civil` varchar(9) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `edad`, `cedula`, `sexo`, `direccion`, `telefono`, `estado_civil`, `correo`, `fecha_nacimiento`) VALUES
(1, 'Cristian Nunez', 23, '4022453462', 'Masculino', 'C/5, #14, Buenos Aires', '8388607', 'Soltero', 'cristian15nz@gmail.com', '1996-01-15'),
(2, 'luis suarez', 38, '4701494876', 'Masculino', 'Bella Vista, Santiago', '809-321-5879', 'Soltero', 'suarez@gmail.com', '1982-01-01'),
(3, 'Rony Frias', 22, '402555879844', 'Masculino', 'Puñal, Santiago', '809-321-5879', 'Soltero', 'frias@gmail.com', '0000-00-00'),
(4, 'Christopher Nuñez', 21, '4023578948752', 'Masculino', 'Reparto Peralta, Santiago', '809-123-4567', 'Casado', 'chris@gmail.com', '1999-12-24'),
(5, 'Wentchelle volo kabrit', 24, '1249875', 'Femenino', 'Puerto Principe, Haiti', '123 8887', 'Casado', 'went@gmail.com', '1990-11-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phones`
--

CREATE TABLE `phones` (
  `id` tinyint(3) UNSIGNED DEFAULT NULL,
  `name` text,
  `brand` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `phones`
--

INSERT INTO `phones` (`id`, `name`, `brand`) VALUES
(1, 'Mi A3', 'Xiamoi'),
(2, 'P30', 'Huawei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('Cristian', 'Cristian', 'Cristian'),
('Cristian Sil', 'Cristian Sil', 'Cristian Silverio Nunez Mata');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
