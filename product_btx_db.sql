-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 03:46:54
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
(16, 'buen producto, cumplio con las espectativas', 4, 5, 2),
(51, 'malo', 1, 5, 2),
(71, 'anda?', 2, 5, 2),
(83, 'otra prueba', 2, 5, 7),
(84, 'anda?', 5, 5, 42),
(85, 'malo', 1, 5, 42),
(86, 'muy buen producto recomendable', 5, 4, 42),
(87, 'comenario ', 4, 5, 42),
(88, 'comentario', 3, 4, 42),
(89, 'muy bueno', 4, 4, 42),
(90, 'muy bueno', 4, 4, 42),
(91, 'bueno', 3, 4, 42),
(92, 'muy buen producto recomendable', 5, 4, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `gaming` tinyint(4) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `model`, `descriptions`, `price`, `gaming`, `image`, `id_category`) VALUES
(4, 'Intel i7 11gen', ' 4.2ghz 32mb cache', 355, 1, '', 500100),
(5, 'Amd Ryzen 5', '4.2ghz 32mb cache AM4', 456, 0, '', 500100),
(15, 'i3 ', '4.2ghz 32mb cache', 200, 1, '', 200120),
(17, 'Intel i7 11gen', ' Especificaciones de la CPU\r\nNúcleos: 8\r\nHilos: 16\r\nFrecuencia base del procesador: 2,50 GHz\r\nFrecue', 580, 1, '', 500100),
(18, 'RTX 2060', 'DUAL-RTX2060-O6G-EVO, DVI-D, 2 HDMI 2.0b, DisplayPort 1.4', 982, 1, '', 300500),
(19, 'LG 29', 'Pantalla IPS Ultra Wide 2560x1080 full hd', 722, 1, '', 200120),
(24, 'i7', '4.2ghz 32mb cache', 200, 0, 'images/products/619aabeddacc2.', 500100),
(25, 'i7', '4.2ghz 32mb cache', 200, 0, 'images/products/619aac8d2b06b.', 200120),
(26, 'i3 ', '4.2ghz 32mb cache', 200, 0, 'images/products/619aaec772689.png', 300500),
(27, 'LG 29', 'Pantalla IPS Ultra Wide 2560x1080 full hd', 266, 1, 'images/products/619b17422a61f.jpg', 200120),
(28, 'i7', '4.2ghz 32mb cache', 799, 0, 'images/products/619b17615836a.jpg', 500100),
(29, 'Amd Ryzen 5', '4.2ghz 32mb cache', 200, 1, 'images/products/619bc152af07b.png', 500100),
(30, 'Amd Ryzen 7', '4.7ghz 64mb cache', 566, 1, 'images/products/619bc19b3d0a2.jpg', 500100),
(31, 'i7', '4.2ghz 32mb cache', 200, 0, 'images/products/619d4fdba1c84.jpg', 500100),
(32, 'Amd Ryzen 5', '4.2ghz 32mb cache', 200, 0, 'images/products/619ef85a4a2e6.png', 500100);

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
(14, 'admin', 'demo4@gmail.com', '123456', 1),
(38, 'ramdom', 'elmer123@email.com', '$2y$10$uVESBAPrzZE3di/fuaXwNO83XOj37E7x4NqjovFmoGn14bE14daHy', 0),
(42, 'navarrofabian314', 'navarrofabian@gmail.com', '$2y$10$v4mZGxnG.HLUTJoj5By3i.5xWQsXIqwvaVWj3FC/MbADJGI0CbutW', 1),
(46, 'usuario4', 'usuario4@email.com', '$2y$10$EIM5NKsUdmkWNT2uGF8hd.bU4aDxr.14NmRKz2dJNBVdet8NHdjNG', 1),
(48, 'userr', 'userr@email.com', '$2y$10$Lvp2M6m.V.nffGP6NZf7oOoa5MXJKO3mnQLbvGiepW6Pw9QzSjDp.', 0);

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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
