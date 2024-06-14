-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 20:58:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agend`
--

CREATE TABLE `agend` (
  `NOMBRE` varchar(90) NOT NULL,
  `APELLIDOS` varchar(85) NOT NULL,
  `DOMICILIO` varchar(90) NOT NULL,
  `TELEFONO_DE_CASA` varchar(10) NOT NULL,
  `CELULAR` varchar(10) NOT NULL,
  `FECHA_DE_NACIMIENTO` varchar(10) NOT NULL,
  `CORREO_ELECTRONICO` varchar(95) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agend`
--

INSERT INTO `agend` (`NOMBRE`, `APELLIDOS`, `DOMICILIO`, `TELEFONO_DE_CASA`, `CELULAR`, `FECHA_DE_NACIMIENTO`, `CORREO_ELECTRONICO`, `ID`) VALUES
('sfdsdfsd', 'dsffsds', 'sdffsd', '454', '43446', '13/05/2006', 'duenasociel123@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agend`
--
ALTER TABLE `agend`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agend`
--
ALTER TABLE `agend`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
