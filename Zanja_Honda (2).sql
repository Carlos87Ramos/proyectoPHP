-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-08-2023 a las 22:01:26
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
(5, 'Fideo con tuco', 'Carne de pollo', 'ss', 'fideo con tuco.jpeg'),
(10, 'Ensalada', ' de arroz', '', 'Ensalada-de-arroz.jpg'),
(11, 'Fideo con tuco', 'Carne de Vaca', '', 'fideo con tuco.jpeg'),
(13, 'Asado', 'Oveja', 'bien', 'Asado.png');

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
(11, '   Harina', 'Trigo', 'Harina.jpeg', 10, 'Unidad'),
(23, 'Azucar', 'Cristal', 'Azucar.jpeg', 10, 'Kg'),
(26, 'Poroto', 'Negro', 'Poroto N.jpeg', 10, 'Kg'),
(27, 'Sal', 'De Mesa', 'sal .jpg', 10, 'Kg'),
(28, 'Carne ', 'Bovina ', 'Carne.jpg', 10, 'Kg'),
(29, 'Cebolla', 'Rosada', 'Cebolla.jpeg', 10, 'Kg');

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

--
-- Volcado de datos para la tabla `Receta`
--

INSERT INTO `Receta` (`Cantidad`, `Id_Menu`, `Id_Producto`) VALUES
(5, 4, 11),
(2, 4, 28),
(3, 4, 29),
(3, 5, 11),
(27, 5, 27);

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
(14, 11, 'Entrada', 10, '2023-08-03 16:56:23'),
(15, 23, 'Entrada', 10, '2023-08-03 16:56:34'),
(16, 26, 'Entrada', 10, '2023-08-03 16:56:47'),
(17, 27, 'Entrada', 10, '2023-08-03 16:57:09'),
(18, 28, 'Entrada', 10, '2023-08-03 16:57:28'),
(19, 29, 'Entrada', 10, '2023-08-03 16:58:49');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `Registro`
--
ALTER TABLE `Registro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
