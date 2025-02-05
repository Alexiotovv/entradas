-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 06:20:09
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `entradas_salidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(100) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `ruc` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `imagen` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `ruc`, `direccion`, `telefono`, `descripcion`, `imagen`) VALUES
(1, 'nombre de la empresa', '354355', 'av san jeroronimo', '935142132', 'rubro de ventas', 'ereas el elegiso.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_entrada` int(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` varchar(200) NOT NULL,
  `hora_salida` varchar(200) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `alerta` TINYINT(1) NOT NULL DEFAULT 0,
  `hora_salida_programada` varchar(200) NOT NULL DEFAULT '',
  `tiempo_seleccionado` VARCHAR(200) NOT NULL DEFAULT ''
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(1, 1, 'has logged in the system at ', '2018-11-27 07:58:26'),
(2, 1, 'has logged out the system at ', '2018-11-27 07:59:03'),
(3, 1, 'has logged in the system at ', '2018-11-30 22:32:20'),
(4, 6, 'has logged in the system at ', '2018-12-01 20:28:15'),
(13, 1, 'has logged out the system at ', '2018-11-30 22:42:36'),
(14, 1, 'has logged in the system at ', '2018-12-04 11:12:37'),
(15, 1, 'has logged in the system at ', '2018-12-19 10:16:00'),
(16, 1, 'has logged in the system at ', '2018-12-19 10:21:46'),
(17, 1, 'has logged in the system at ', '2018-12-19 10:27:32'),
(18, 1, 'has logged in the system at ', '2018-12-19 10:33:11'),
(19, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:39:49'),
(20, 1, 'has logged in the system at ', '2018-12-19 10:40:01'),
(21, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:40:04'),
(22, 1, 'has logged in the system at ', '2018-12-19 10:42:35'),
(23, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:42:44'),
(24, 1, 'has logged in the system at ', '2018-12-19 10:43:07'),
(25, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:44:35'),
(26, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-14 10:55:46'),
(27, 1, 'se ha desconectado el sistema en ', '2019-01-14 11:02:35'),
(28, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-14 11:02:41'),
(29, 1, 'se ha desconectado el sistema en ', '2019-01-14 11:09:15'),
(30, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:05:23'),
(31, 1, 'se ha desconectado el sistema en ', '2019-01-16 21:05:32'),
(32, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:06:19'),
(33, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:09:39'),
(34, 1, 'se ha desconectado el sistema en ', '2019-01-16 21:12:48'),
(35, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:12:52'),
(36, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 22:33:53'),
(37, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-17 08:50:57'),
(38, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-17 22:37:23'),
(39, 1, 'se ha desconectado el sistema en ', '2019-01-18 01:25:04'),
(40, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 03:35:56'),
(41, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 08:25:58'),
(42, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 20:31:12'),
(43, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-19 06:39:38'),
(44, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 01:27:24'),
(45, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 01:43:21'),
(46, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 02:56:46'),
(47, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 10:44:05'),
(48, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 11:13:20'),
(49, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-21 11:27:47'),
(50, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 01:38:33'),
(51, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 07:15:31'),
(52, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 10:39:09'),
(53, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 20:39:13'),
(54, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:32:13'),
(55, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:46:48'),
(56, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:48:41'),
(57, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:48:52'),
(58, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:49:01'),
(59, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:52:37'),
(60, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:55:52'),
(61, 1, 'se ha desconectado el sistema en ', '2019-01-24 02:50:25'),
(62, 1, 'se ha desconectado el sistema en ', '2019-01-25 18:59:42'),
(63, 1, 'se ha desconectado el sistema en ', '2019-01-26 12:13:01'),
(64, 1, 'se ha desconectado el sistema en ', '2019-01-26 12:39:03'),
(65, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:34:43'),
(66, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:35:05'),
(67, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:36:18'),
(68, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:37:19'),
(69, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:40:18'),
(70, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:42:37'),
(71, 2, 'se ha desconectado el sistema en ', '2019-01-26 21:53:27'),
(72, 3, 'se ha desconectado el sistema en ', '2019-01-26 23:53:55'),
(73, 2, 'se ha desconectado el sistema en ', '2019-01-27 00:02:46'),
(74, 3, 'se ha desconectado el sistema en ', '2019-01-27 00:26:04'),
(75, 3, 'se ha desconectado el sistema en ', '2019-01-27 00:27:37'),
(76, 4, 'se ha desconectado el sistema en ', '2019-01-27 00:28:53'),
(77, 0, 'se ha desconectado el sistema en ', '2019-02-01 10:49:35'),
(78, 1, 'se ha desconectado el sistema en ', '2019-02-02 01:10:46'),
(79, 1, 'se ha desconectado el sistema en ', '2019-02-08 13:27:52'),
(80, 1, 'se ha desconectado el sistema en ', '2019-02-08 13:29:04'),
(81, 1, 'se ha desconectado el sistema en ', '2019-02-11 12:13:25'),
(82, 1, 'se ha desconectado el sistema en ', '2019-02-17 23:59:49'),
(83, 1, 'se ha desconectado el sistema en ', '2019-02-19 22:06:23'),
(84, 1, 'se ha desconectado el sistema en ', '2019-02-25 00:30:32'),
(85, 1, 'se ha desconectado el sistema en ', '2019-02-27 11:45:10'),
(86, 1, 'se ha desconectado el sistema en ', '2019-02-28 05:20:10'),
(87, 1, 'se ha desconectado el sistema en ', '2019-03-04 01:08:23'),
(88, 1, 'se ha desconectado el sistema en ', '2019-03-04 07:27:54'),
(89, 3, 'se ha desconectado el sistema en ', '2019-03-04 07:28:35'),
(90, 1, 'se ha desconectado el sistema en ', '2019-03-04 07:37:53'),
(91, 3, 'se ha desconectado el sistema en ', '2019-03-04 10:41:27'),
(92, 1, 'se ha desconectado el sistema en ', '2019-03-05 10:17:44'),
(93, 3, 'se ha desconectado el sistema en ', '2019-03-05 10:17:54'),
(94, 1, 'se ha desconectado el sistema en ', '2019-03-05 12:54:15'),
(95, 3, 'se ha desconectado el sistema en ', '2019-03-05 12:56:25'),
(96, 3, 'se ha desconectado el sistema en ', '2019-03-05 13:15:01'),
(97, 1, 'se ha desconectado el sistema en ', '2019-03-05 21:34:11'),
(98, 1, 'se ha desconectado el sistema en ', '2019-03-05 22:56:40'),
(99, 1, 'se ha desconectado el sistema en ', '2019-03-06 09:09:23'),
(100, 1, 'se ha desconectado el sistema en ', '2019-03-06 09:19:54'),
(101, 3, 'se ha desconectado el sistema en ', '2019-03-06 09:32:54'),
(102, 1, 'se ha desconectado el sistema en ', '2019-03-07 08:06:32'),
(103, 1, 'se ha desconectado el sistema en ', '2019-03-08 13:47:16'),
(104, 3, 'se ha desconectado el sistema en ', '2019-03-08 14:13:56'),
(105, 1, 'se ha desconectado el sistema en ', '2019-03-08 14:32:58'),
(106, 1, 'se ha desconectado el sistema en ', '2019-03-08 23:57:14'),
(107, 1, 'se ha desconectado el sistema en ', '2019-03-09 03:23:22'),
(108, 6, 'se ha desconectado el sistema en ', '2019-03-09 04:49:54'),
(109, 1, 'se ha desconectado el sistema en ', '2019-03-09 04:53:28'),
(110, 6, 'se ha desconectado el sistema en ', '2019-03-09 05:07:58'),
(111, 1, 'se ha desconectado el sistema en ', '2019-03-09 05:10:25'),
(112, 6, 'se ha desconectado el sistema en ', '2019-03-09 05:12:26'),
(113, 1, 'se ha desconectado el sistema en ', '2019-03-09 07:41:10'),
(114, 1, 'se ha desconectado el sistema en ', '2019-03-09 12:58:12'),
(115, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:58:32'),
(116, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:59:19'),
(117, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:59:27'),
(118, 1, 'se ha desconectado el sistema en ', '2019-03-10 00:00:22'),
(119, 1, 'se ha desconectado el sistema en ', '2019-03-10 00:00:34'),
(120, 1, 'se ha desconectado el sistema en ', '2019-03-10 01:33:16'),
(121, 5, 'se ha desconectado el sistema en ', '2019-03-10 01:46:17'),
(122, 5, 'se ha desconectado el sistema en ', '2019-03-10 05:54:18'),
(123, 5, 'se ha desconectado el sistema en ', '2019-03-11 12:37:07'),
(124, 5, 'se ha desconectado el sistema en ', '2019-03-11 13:12:30'),
(125, 1, 'se ha desconectado el sistema en ', '2019-03-12 04:02:11'),
(126, 1, 'se ha desconectado el sistema en ', '2019-03-12 08:26:01'),
(127, 3, 'se ha desconectado el sistema en ', '2019-03-12 08:38:10'),
(128, 1, 'se ha desconectado el sistema en ', '2019-03-12 09:10:43'),
(129, 5, 'se ha desconectado el sistema en ', '2019-03-12 12:33:46'),
(130, 0, 'se ha desconectado el sistema en ', '2019-03-12 12:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `imagen`, `tipo`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'osiris', 'a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70', 'logo.jpg', 'empleado', 'ender macron', 'pasha ', '131-321-3'),
(2, 'tusolutionweb', 'a1Bz20ydqelm8m1wql6c5dc4ff5d0be4ac99337cea5576e7ff', '5.jpg', 'administrador', '', '', ''),
(4, '453-5353455-5', 'a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70', 'core i5 hp.jpg', 'empleado', 'hiros jiros', 'vega', '0'),
(5, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', '1.jpg', 'administrador', 'sf', 'fdf', ''),
(6, 'empleado', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'app restaurant.jpg', 'empleado', 'fredy', 'mercury', '345543'),
(7, '', 'a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70', '', 'empleado', 'juson', 'toros dr mir', '1243234'),
(8, '', 'a1Bz20ydqelm8m1wqldd26ea8b2bc48d1b4038b99e4fdf612a', '', 'administrador', 'grey', 'jpi', '13213'),
(9, 'wrer', 'a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70', '', 'administrador', 'sdfsfsdf', 'rwrewrw', '234242');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
