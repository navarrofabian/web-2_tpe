-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 17:27:21
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `product_btx_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `type_category` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `type_category`, `brand`) VALUES
(300500, 'Video Card', 'Nvidia'),
(500100, 'procesador', 'amd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `model`, `descriptions`, `price`, `id_category`) VALUES
(4, 'Intel i7 11gen', ' 4.2ghz 32mb cache', 355, 500100),
(5, 'Amd Ryzen 5', ' 4.2ghz 32mb cache ', 210, 500100),
(15, 'RTX 2080ti ', 'GPU\r\nGeForce RTX 3060 Ti\r\nNúcleos CUDA\r\n4864\r\nMemoria de video\r\nGDDR6 de 8 GB\r\nBus de memoria\r\n256 b', 820, 300500),
(17, 'Intel i7 11gen', ' Especificaciones de la CPU\r\nNúcleos: 8\r\nHilos: 16\r\nFrecuencia base del procesador: 2,50 GHz\r\nFrecue', 580, 500100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(2, 'demo@email.com', '$2y$10$x/MCFARVhS8SYE7Bnv4pW.LrJD4nj9r75VKQuMiZeCmpYQ.3vYsu2'),
(3, 'demo2@email.com', '$2y$10$cTOsqMWdJdZh01/yFaJWQ.qlC60K0YQARIGTLhjEwizBo5yyIBcuy'),
(10, 'demo4@email.com', '$2y$10$poN9Q0bB5ee3wNGrnB1zFunbUFOkGm7AApA37xjFh3e6rYh381MTi'),
(11, 'demo5@email.com', '$2y$10$8yWWj5oo9KerGFPIYthGM.IKxLV3yZDRzKubdk57/uIOj3jDQ2dfq'),
(12, 'demo5@email.com', '$2y$10$ZJCi/Tqx0Iy49alk1w50VOhT5UfVy5ozL./EeZ3EhulwXyngpkjNm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_product_category` (`id_category`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
