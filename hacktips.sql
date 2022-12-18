-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2022 a las 18:57:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- --------------------------------------------------------
--
-- Base de datos: `hacktips`
--

CREATE DATABASES IF NOT EXISTS `hacktips` () ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario` varchar(64) NOT NULL,
  `clave` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Volcado de datos para la tabla `users`
--
INSERT INTO `users` (`usuario`, `clave`) VALUES
('admin', 'abc123.'),
('pep', 'abc123.'),
('paco', 'abc123.'),
('piko', 'abc123.'),
('pepi', 'abc123.');

-- Estructura de tabla para la tabla `tools`

CREATE TABLE `tools` (
  `id` INT NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Volcado de datos para la tabla `tools`
--
INSERT INTO `tools` (`id`, `name`) VALUES
('1', 'GitHub3rs'),
('2', 'Pasword Crackers'),
('3', 'Proxies'),
('4', 'Expoloitation'),
('5', 'Imformation Gathering'),
('6', 'Port ScaningPort Scaning'),
('7', 'Packet Analizers'),
('8', 'Vulnerabiity Scanners'),
('9', 'Addons');
--
-- Índices para tablas volcadas
--
-- Indices de la tabla `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);
COMMIT;


-- Estructura de tabla para la tabla `cursos`

CREATE TABLE `cursos` (
  `id` INT NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `basic` (
  `id` INT NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `medium` (
  `id` INT NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `advanced` (
  `id` INT NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
