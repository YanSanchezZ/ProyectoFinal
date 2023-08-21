-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2023 a las 05:31:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros_grupo1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`id_usuario`, `nombre`, `clave`, `correo`, `telefono`) VALUES
(1, 'Yan Sanchez', '151515', 'yansa22@hotmail.com', '3015194769'),
(2, 'Alexander', '646464', 'alex@gamil.com', '6465481'),
(6, 'Francisco Sanchez', 'kasjhdaskjas', 'franciscosanchez@hotmail.com', '32165465'),
(7, 'Alexander Yan', '64646', 'alexanderyan@hotmail.com', '321354687'),
(8, 'yan yan', '151515', 'yan15@hotmail.com', '321321321'),
(9, 'jlasdka', '1234', 'abcd@gmail.com', '65465465'),
(10, 'maria', '321321', 'maria@gmail.com', '546871265'),
(11, 'vanesa', '151515', 'vanesa@gmail.com', '65465416516'),
(12, 'kira', '151515', 'kira@gmail.com', '654632161');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
