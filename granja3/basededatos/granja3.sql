-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2020 a las 01:47:19
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `granja3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrolechon`
--

CREATE TABLE `registrolechon` (
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `peso` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrolechon`
--

INSERT INTO `registrolechon` (`id`, `precio`, `peso`, `descripcion`, `edad`, `fecha_compra`) VALUES
(1, 2000, 160, 'mmihh', 7, '2020-08-15 22:50:33'),
(2, 1500, 180, 'qwqwqwwq', 8, '2020-08-15 23:09:21'),
(3, 0, 0, '', 0, '2020-08-16 00:14:12'),
(4, 0, 50, '', 0, '2020-08-16 00:21:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropeso`
--

CREATE TABLE `registropeso` (
  `id` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registropeso`
--

INSERT INTO `registropeso` (`id`, `peso`, `fecha_registro`) VALUES
(1, 45, '2020-08-16 00:23:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrolechon`
--
ALTER TABLE `registrolechon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registropeso`
--
ALTER TABLE `registropeso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrolechon`
--
ALTER TABLE `registrolechon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
