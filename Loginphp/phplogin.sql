-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 11:09:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phplogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(100) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Usuario` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Forgot_pass` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `Nombre`, `Correo`, `Usuario`, `Password`, `Forgot_pass`, `phone`) VALUES
(1, 'Sonia López', 'sonia77mlm@gmail.com', 'sonia', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(2, 'Paloma Suarez', 'Paloma@gmail.com', 'PSuarez', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(3, 'Macarena Perez', 'Macape@gmail.com', 'MPerez', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(4, 'Pepita', 'josdjfi@jfodjfio', 'Pepita', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(5, 'Cova', 'soniamlopezm@gmail.com', 'Cova', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(6, 'Antonio', 'sonia77mlm@gmail.com', 'Antonio', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(7, 'dsfasdf', 'sdfasfd@jdfjksldj', 'dsfasdf', '509f1285e9b753a6764434ceba5c92c06f9f2eb0', '', 0),
(8, 'Carmen', 'Carmen@prueba1', 'Carmen1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(9, 'sonia', 'sonia77mlm@gmail.com', 'soniaa1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0),
(10, 'perez', 'sonia77mlm@gmail.com', 'pure', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
