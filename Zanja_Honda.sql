-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-08-2023 a las 03:18:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Zanja_Honda`
--
CREATE DATABASE IF NOT EXISTS `Zanja_Honda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Zanja_Honda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menu`
--

DROP TABLE IF EXISTS `Menu`;
CREATE TABLE `Menu` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Menu`
--

INSERT INTO `Menu` (`ID`, `Nombre`, `Descripcion`, `Observaciones`, `Foto`) VALUES
(4, 'Strogonoff', 'de pollo', ' Con Arroz blanco', 'Strogonoff.jpeg'),
(5, 'Fideo con tuco', 'de vaca', '', 'fideo con tuco.jpeg'),
(7, 'Lenteja', 'con arroz', '', 'Lenteja.jpeg'),
(10, 'Ensalada', ' de arroz', '', 'Ensalada-de-arroz.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

DROP TABLE IF EXISTS `Producto`;
CREATE TABLE `Producto` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Foto` varchar(100) NOT NULL,
  `Cantidad` float NOT NULL,
  `Tipo` enum('Unidad','Kg') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`ID`, `Nombre`, `Descripcion`, `Foto`, `Cantidad`, `Tipo`) VALUES
(11, ' Harrina', 'trigo', 'Harina.jpeg', 48, 'Unidad'),
(12, 'Aceite', 'Soya', 'Aceite.jpeg', 0, 'Unidad'),
(13, 'Carne', 'Bovina', 'Carne.jpg', 0, 'Unidad'),
(14, 'Zapallo', 'Koreano', 'Zapallo.jpeg', 0, 'Unidad'),
(15, 'Pan', 'Casero', 'Pan.jpeg', 0, 'Kg'),
(17, 'Fideo', 'Moña', 'Fideo.jpeg', 0, 'Unidad'),
(18, 'Fideo', 'Tirabuzon', 'Fideo.jpeg', 0, 'Unidad'),
(21, 'Papa', 'rosada', 'Papa.jpeg', 0, 'Kg'),
(23, 'Azucar', 'Cristal', 'Azucar.jpeg', 8, 'Kg'),
(24, 'Azucar', 'Santa Clara', 'Azucar.jpeg', 0, 'Kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Receta`
--

DROP TABLE IF EXISTS `Receta`;
CREATE TABLE `Receta` (
  `Cantidad` float NOT NULL,
  `Id_Menu` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

DROP TABLE IF EXISTS `Registro`;
CREATE TABLE `Registro` (
  `Id` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `Tipo` enum('Entrada','Salida') NOT NULL,
  `Cantidad` float NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Registro`
--

INSERT INTO `Registro` (`Id`, `id_Producto`, `Tipo`, `Cantidad`, `Fecha`) VALUES
(1, 23, 'Entrada', 10, '2023-07-24 15:57:32'),
(2, 23, 'Entrada', 10, '2023-07-24 15:58:05'),
(3, 23, 'Entrada', 10, '2023-07-24 15:59:15'),
(4, 23, 'Entrada', 10, '2023-07-24 16:00:10'),
(5, 23, 'Entrada', 10, '2023-07-24 16:01:19'),
(6, 23, 'Entrada', 10, '2023-07-24 16:02:10'),
(7, 23, 'Entrada', 10, '2023-07-24 16:02:51'),
(8, 23, 'Entrada', 5, '2023-07-24 16:05:21'),
(9, 23, 'Salida', 7, '2023-07-24 16:05:47'),
(10, 11, 'Entrada', 12, '2023-07-24 16:09:01'),
(11, 11, 'Entrada', 12, '2023-07-24 16:29:21'),
(12, 11, 'Entrada', 12, '2023-07-24 16:33:17'),
(13, 11, 'Entrada', 12, '2023-07-24 16:34:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE `Usuario` (
  `Cedula` varchar(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tipo` enum('Director','Cocinero','Ayudante Cocina','Coordinador','Administrativo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`Cedula`, `Nombre`, `Password`, `Tipo`) VALUES
('11111111', 'Pablo Urquhart', '12345678', 'Director'),
('22222222', 'Magali Soto', '12345678', 'Cocinero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Receta`
--
ALTER TABLE `Receta`
  ADD PRIMARY KEY (`Id_Menu`,`Id_Producto`),
  ADD KEY `Id_Producto_Fk` (`Id_Producto`);

--
-- Indices de la tabla `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_Producto` (`id_Producto`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Menu`
--
ALTER TABLE `Menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `Registro`
--
ALTER TABLE `Registro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Receta`
--
ALTER TABLE `Receta`
  ADD CONSTRAINT `Id_Menu_Fk` FOREIGN KEY (`Id_Menu`) REFERENCES `Menu` (`ID`),
  ADD CONSTRAINT `Id_Producto_Fk` FOREIGN KEY (`Id_Producto`) REFERENCES `Producto` (`Id`);

--
-- Filtros para la tabla `Registro`
--
ALTER TABLE `Registro`
  ADD CONSTRAINT `Registro_ibfk_1` FOREIGN KEY (`id_Producto`) REFERENCES `Producto` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
