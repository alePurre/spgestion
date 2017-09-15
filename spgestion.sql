-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2017 a las 19:49:17
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spgestion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPorDetalle` (IN `var` VARCHAR(100))  MODIFIES SQL DATA
BEGIN  
   SELECT idProducto, detalle, stock, cantMin, cantMax  FROM productos
    WHERE detalle like var
   ;  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stockTotal` ()  READS SQL DATA
BEGIN
SELECT * FROM `productos`;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoriaregborrado`
--

CREATE TABLE `auditoriaregborrado` (
  `idRegBorrado` int(11) NOT NULL,
  `idProductoEliminado` int(11) NOT NULL,
  `detalleReg` varchar(100) NOT NULL,
  `dateReg` datetime NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auditoriaregborrado`
--

INSERT INTO `auditoriaregborrado` (`idRegBorrado`, `idProductoEliminado`, `detalleReg`, `dateReg`, `usuario`) VALUES
(1, 5, 'Birome Roja', '2017-07-19 12:30:29', 'root@localhost');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresostockmateriales`
--

CREATE TABLE `egresostockmateriales` (
  `idEgreso` int(11) NOT NULL,
  `fechaRetiro` date NOT NULL,
  `idPedidoMaterial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosnotapedido`
--

CREATE TABLE `estadosnotapedido` (
  `idEstadoNotaPedido` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadospedidosusuario`
--

CREATE TABLE `estadospedidosusuario` (
  `idEstadoPedido` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresostockmateriales`
--

CREATE TABLE `ingresostockmateriales` (
  `idIngreso` int(11) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idNotaPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `idMaterial` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialesnotapedido`
--

CREATE TABLE `materialesnotapedido` (
  `idMaterialesNotaPedido` int(11) NOT NULL,
  `idNotaPedido` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialesporpedido`
--

CREATE TABLE `materialesporpedido` (
  `idMaterialesPedidos` int(11) NOT NULL,
  `idPedidoMaterial` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialesporproveedor`
--

CREATE TABLE `materialesporproveedor` (
  `idMaterialProveedor` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notasdepedido`
--

CREATE TABLE `notasdepedido` (
  `idNotaPedido` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idEstadoNotaPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosmaterialusuario`
--

CREATE TABLE `pedidosmaterialusuario` (
  `idPedidoMaterial` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `obra` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `idEstadoPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `stock` float DEFAULT '0',
  `cantMin` int(11) NOT NULL,
  `cantMax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `detalle`, `stock`, `cantMin`, `cantMax`) VALUES
(1, 'Resma Legal', 45, 5, 50),
(2, 'Resma A4', 100, 6, 100),
(3, 'Birome Verde', 9, 6, 50);

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `regBorrado_AD` AFTER DELETE ON `productos` FOR EACH ROW BEGIN
  DECLARE vUser varchar(50);
   SELECT USER() INTO vUser;
INSERT INTO auditoriaregborrado
   (idProductoEliminado,
   detalleReg,
   dateReg,
   usuario)
   VALUES
   ( OLD.idProducto,
    OLD.detalle,
     SYSDATE(),
     vUser );

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposusuario`
--

CREATE TABLE `tiposusuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `email`, `password`, `idTipoUsuario`) VALUES
(1, 'Ale', 'ale@ale.com', 'ale', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoriaregborrado`
--
ALTER TABLE `auditoriaregborrado`
  ADD PRIMARY KEY (`idRegBorrado`);

--
-- Indices de la tabla `egresostockmateriales`
--
ALTER TABLE `egresostockmateriales`
  ADD PRIMARY KEY (`idEgreso`);

--
-- Indices de la tabla `estadosnotapedido`
--
ALTER TABLE `estadosnotapedido`
  ADD PRIMARY KEY (`idEstadoNotaPedido`);

--
-- Indices de la tabla `estadospedidosusuario`
--
ALTER TABLE `estadospedidosusuario`
  ADD PRIMARY KEY (`idEstadoPedido`);

--
-- Indices de la tabla `ingresostockmateriales`
--
ALTER TABLE `ingresostockmateriales`
  ADD PRIMARY KEY (`idIngreso`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indices de la tabla `materialesnotapedido`
--
ALTER TABLE `materialesnotapedido`
  ADD PRIMARY KEY (`idMaterialesNotaPedido`);

--
-- Indices de la tabla `materialesporproveedor`
--
ALTER TABLE `materialesporproveedor`
  ADD PRIMARY KEY (`idMaterialProveedor`);

--
-- Indices de la tabla `notasdepedido`
--
ALTER TABLE `notasdepedido`
  ADD PRIMARY KEY (`idNotaPedido`);

--
-- Indices de la tabla `pedidosmaterialusuario`
--
ALTER TABLE `pedidosmaterialusuario`
  ADD PRIMARY KEY (`idPedidoMaterial`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoriaregborrado`
--
ALTER TABLE `auditoriaregborrado`
  MODIFY `idRegBorrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `egresostockmateriales`
--
ALTER TABLE `egresostockmateriales`
  MODIFY `idEgreso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadosnotapedido`
--
ALTER TABLE `estadosnotapedido`
  MODIFY `idEstadoNotaPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadospedidosusuario`
--
ALTER TABLE `estadospedidosusuario`
  MODIFY `idEstadoPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ingresostockmateriales`
--
ALTER TABLE `ingresostockmateriales`
  MODIFY `idIngreso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materialesnotapedido`
--
ALTER TABLE `materialesnotapedido`
  MODIFY `idMaterialesNotaPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materialesporproveedor`
--
ALTER TABLE `materialesporproveedor`
  MODIFY `idMaterialProveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notasdepedido`
--
ALTER TABLE `notasdepedido`
  MODIFY `idNotaPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedidosmaterialusuario`
--
ALTER TABLE `pedidosmaterialusuario`
  MODIFY `idPedidoMaterial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
