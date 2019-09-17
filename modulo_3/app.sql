-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2019 a las 18:30:07
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
-- Base de datos: `app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created_by` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `name`, `link`, `price`, `activo`, `created_by`, `created_at`) VALUES
(1, 'Cristian', 'https://images.pexels.com/photos/1587036/pexels-photo-1587036.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 15, 0, 0, '2019-09-17 15:53:59'),
(3, 'Cristian3', 'https://images.pexels.com/photos/1587036/pexels-photo-1587036.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 15, 1, 0, '2019-09-17 15:53:59'),
(4, 'Pedro', 'https://images.pexels.com/photos/2749939/pexels-photo-2749939.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260', 55, 1, 0, '2019-09-17 15:53:59'),
(5, 'Pedro2', 'https://images.pexels.com/photos/2749939/pexels-photo-2749939.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260', 55, 0, 0, '2019-09-17 15:53:59'),
(6, 'Pedro23', 'https://images.pexels.com/photos/2749939/pexels-photo-2749939.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260', 55, 0, 0, '2019-09-17 15:53:59'),
(7, 'Pedro234', 'https://images.pexels.com/photos/2749939/pexels-photo-2749939.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260', 55, 0, 0, '2019-09-17 15:53:59'),
(8, 'Ford', 'https://images.pexels.com/photos/1496266/pexels-photo-1496266.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 4100, 0, 0, '2019-09-17 15:53:59'),
(9, 'Ford 2019', 'https://images.pexels.com/photos/1496266/pexels-photo-1496266.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 4100, 1, 0, '2019-09-17 15:53:59'),
(10, 'Cristian2', 'https://google.com', 33, 1, 0, '2019-09-17 15:53:59'),
(11, 'adsasf', 'https://google.com', 3322, 1, 0, '2019-09-17 15:53:59'),
(12, 'Pollo 2015', 'https://google.com', 50, 1, 1, '2019-09-17 16:02:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `active`) VALUES
(1, 'Christopher', 'criss', '123', 1),
(2, 'Ford', 'ford2019', '123', 1),
(3, 'Norbin', 'norbin2019', '59587545152', 1),
(4, 'Cristian N', 'cris2019', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
