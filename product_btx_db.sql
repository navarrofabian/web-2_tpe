-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 00:02:28
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
(200120, 'Monitor', 'LG'),
(300500, 'Video Card', 'Nvidia'),
(402582, 'fuente de alimentacion', 'Evga'),
(500100, 'procesador', 'amd'),
(551112, 'Ram', 'Corsair'),
(700058, 'Motherboard', 'Msi'),
(854220, 'SSD', 'Kingstone');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment_content` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id_comment`, `comment_content`, `rating`, `id_product`, `id_user`) VALUES
(1, 'buen producto', 4, 5, 2),
(16, 'buen no producto', 4, 5, 2),
(17, 'malo', 1, 5, 2),
(40, 'anda?', 2, 5, 2),
(41, 'anda?', 1, 5, 2),
(42, 'anda?', 89, 5, 2),
(43, 'anda?', 52, 5, 2),
(44, 'anda?', 2, 5, 2),
(45, 'anda?', 85, 5, 2),
(46, 'anda?', 2, 5, 2),
(47, '2', 2, 5, 2),
(48, '2', 2, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `model`, `descriptions`, `price`, `image`, `id_category`) VALUES
(4, 'Intel i7 11gen', ' 4.2ghz 32mb cache', 355, '', 500100),
(5, 'Amd Ryzen 5', ' 4.2ghz 32mb cache ', 210, '', 500100),
(15, 'RTX 2080ti ', 'GPU\r\nGeForce RTX 3060 Ti\r\nNúcleos CUDA\r\n4864\r\nMemoria de video\r\nGDDR6 de 8 GB\r\nBus de memoria\r\n256 b', 820, '', 300500),
(17, 'Intel i7 11gen', ' Especificaciones de la CPU\r\nNúcleos: 8\r\nHilos: 16\r\nFrecuencia base del procesador: 2,50 GHz\r\nFrecue', 580, '', 500100),
(18, 'RTX 2060', 'DUAL-RTX2060-O6G-EVO, DVI-D, 2 HDMI 2.0b, DisplayPort 1.4', 982, '', 300500),
(19, 'LG 29', 'Pantalla IPS Ultra Wide 2560x1080 full hd', 722, '', 200120),
(24, 'i5', '4.2ghz 32mb cache', 200, 'images/products/619aabeddacc2.', 700058),
(25, 'i7', '4.2ghz 32mb cache', 200, 'images/products/619aac8d2b06b.', 200120),
(26, 'i3 ', '4.2ghz 32mb cache', 200, 'images/products/619aaec772689.png', 300500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `userName`, `email`, `password`, `admin`) VALUES
(14, 'admin', 'demo4@gmail.com', '123456', 0),
(38, 'ramdom', 'elmer123@email.com', '$2y$10$uVESBAPrzZE3di/fuaXwNO83XOj37E7x4NqjovFmoGn14bE14daHy', 0),
(39, 'juan19', 'juan123@email.com', '$2y$10$utWvz61hMuqsYG5f1Qt4aezEDiNth0afZ0Pi4iEClFR5DiVmZOZQ2', 0),
(40, 'noe12', 'elmer123@email.com', '$2y$10$P/v7sTekR6sUHlHd8SS.VOfks7aaYqVsLFW3S5522wj4uDWGaNJR.', 1),
(41, 'noe23', 'noe23@email.com', '$2y$10$SF8qxdwRUt.528Vr50MNdec3gi.dIJADGWDhDoyD9HeP/hQCNw/p2', 0),
(42, 'navarrofabian314', 'navarrofabian@gmail.com', '$2y$10$v4mZGxnG.HLUTJoj5By3i.5xWQsXIqwvaVWj3FC/MbADJGI0CbutW', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_comment_product` (`id_product`);

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
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
