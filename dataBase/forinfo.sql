-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 02:28:10
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
-- Base de datos: `forinfo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusiones`
--

CREATE TABLE `discusiones` (
  `ID_Discusion` int(11) NOT NULL,
  `discusion` varchar(150) NOT NULL,
  `contenido` varchar(600) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `Tags` varchar(60) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `discusiones`
--

INSERT INTO `discusiones` (`ID_Discusion`, `discusion`, `contenido`, `fecha`, `id_usuario`, `Tags`, `imagen`) VALUES
(1, '¿Es 1985 una buena película?', '¿Creen que debería ver la película 1985?', '2022-10-13', 16, 'Pelicula Argentina', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `name` text NOT NULL,
  `e-mail` text NOT NULL,
  `password` varchar(70) NOT NULL,
  `rango` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `name`, `e-mail`, `password`, `rango`) VALUES
(16, 'Fausto', 'fausto@gmail.com', '1234', 3),
(17, 'Santi', 'santi@gmail.com', '1234', 3),
(18, 'guest001', 'guest@gmail.com', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discusiones`
--
ALTER TABLE `discusiones`
  ADD PRIMARY KEY (`ID_Discusion`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`Tags`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD KEY `rangos` (`rango`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discusiones`
--
ALTER TABLE `discusiones`
  MODIFY `ID_Discusion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `discusiones`
--
ALTER TABLE `discusiones`
  ADD CONSTRAINT `discusiones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
