-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2018 a las 07:31:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diagnostico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(2, 'Frutas', 'descripcion de categoria frutas'),
(3, 'bebidas', 'descripcion de bebidas'),
(4, 'Juguete', 'descripcion del juguete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` varchar(250) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `direccion` text,
  `fecha_nacimiento` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `direccion`, `fecha_nacimiento`, `telefono`, `email`) VALUES
('cliente-q53hmSO4pu-2552385-1706', 'Francisco Navas', 'No tiene', '2016-10-21', '78906544', 'frank@mail.com'),
('cliente-ws8D2ilugB-4606175-4246', 'Diana Carolina Cruz', 'San Salvador', '2018-10-29', '78906544', 'diana@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `num_detalle` int(11) NOT NULL,
  `factura_id` varchar(250) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioD` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`num_detalle`, `factura_id`, `producto_id`, `cantidad`, `precioD`) VALUES
(6, 'factura-zjndwvMxDS-72025-8326', 8, 1, '1.99'),
(7, 'factura-zjndwvMxDS-72025-8326', 9, 8, '4'),
(8, 'factura-Nz98qnHX74-93815-8719', 7, 3, '9'),
(9, 'factura-Nz98qnHX74-93815-8719', 6, 2, '1.2'),
(10, 'factura-S3cEtoyfd9-28446-4339', 10, 2, '9.1'),
(11, 'factura-S3cEtoyfd9-28446-4339', 9, 3, '1.5'),
(12, 'factura-S3cEtoyfd9-28446-4339', 7, 1, '2.5'),
(13, 'factura-S3cEtoyfd9-28446-4339', 6, 10, '6'),
(14, 'factura-BLVubZ1DCH-96071-9765', 9, 1, '0.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `num_factura` varchar(250) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `cliente_id` varchar(250) NOT NULL,
  `num_pago_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`num_factura`, `fecha`, `cliente_id`, `num_pago_id`) VALUES
('factura-BLVubZ1DCH-96071-9765', '2018-10-30', 'cliente-ws8D2ilugB-4606175-4246', 1),
('factura-Nz98qnHX74-93815-8719', '2018-10-29', 'cliente-q53hmSO4pu-2552385-1706', 1),
('factura-S3cEtoyfd9-28446-4339', '2018-10-30', 'cliente-ws8D2ilugB-4606175-4246', 1),
('factura-zjndwvMxDS-72025-8326', '2018-10-29', 'cliente-q53hmSO4pu-2552385-1706', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo_pago`
--

CREATE TABLE `modo_pago` (
  `num_pago` int(11) NOT NULL,
  `nombreE` varchar(250) NOT NULL,
  `otros_detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modo_pago`
--

INSERT INTO `modo_pago` (`num_pago`, `nombreE`, `otros_detalles`) VALUES
(1, 'efectivo', 'no hay detalles'),
(2, 'paypal', 'no hay detalles'),
(3, 'tarjeta de credito', 'no hay detalle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombreP` varchar(250) DEFAULT NULL,
  `precio` varchar(250) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombreP`, `precio`, `stock`, `categoria_id`) VALUES
(6, 'Manzana', '0.60', 3, 2),
(7, 'Sandia', '2.50', 10, 2),
(8, 'Coca cola lata 12 onzas', '0.99', 22, 3),
(9, 'Hi Energy', '0.50', 0, 3),
(10, 'Carro 4x4 Toy', '4.55', 12, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `user`, `password`) VALUES
(1, 'Francisco Jose', 'fran001', 'e190d72eea11d9049870eaa2d41e410f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`num_detalle`,`factura_id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `detalle_ibfk_1` (`factura_id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`num_factura`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `num_pago_id` (`num_pago_id`);

--
-- Indices de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  ADD PRIMARY KEY (`num_pago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `num_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  MODIFY `num_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`factura_id`) REFERENCES `factura` (`num_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`num_pago_id`) REFERENCES `modo_pago` (`num_pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
