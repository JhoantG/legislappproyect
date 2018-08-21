-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-08-2018 a las 13:20:50
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `legislappbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `IdChat` int(11) NOT NULL,
  `IdRChat` int(11) NOT NULL,
  `De` varchar(50) NOT NULL,
  `Para` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Mensaje` text NOT NULL,
  `LecturaChat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudad` int(11) NOT NULL,
  `Ciudad` varchar(80) DEFAULT NULL,
  `idDepartamento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiudad`, `Ciudad`, `idDepartamento`) VALUES
(1, 'Bello', 1),
(2, 'Caldas', 1),
(3, 'Copacabana', 1),
(4, 'Envigado', 1),
(5, 'Guarne', 1),
(6, 'Itagui', 1),
(7, 'La Ceja', 1),
(8, 'La Estrella', 1),
(9, 'La Tablaza', 1),
(10, 'Marinilla', 1),
(11, 'Medellín', 1),
(12, 'Rionegro', 1),
(13, 'Sabaneta', 1),
(14, 'San Antonio de Prado', 1),
(15, 'San Cristóbal', 1),
(16, 'Caucasia', 1),
(17, 'Barranquilla', 2),
(18, 'Malambo', 2),
(19, 'Puerto Colombia', 2),
(20, 'Soledad', 2),
(21, 'Arjona', 3),
(22, 'Bayunca', 3),
(23, 'Carmen de Bolívar', 3),
(24, 'Cartagena', 3),
(25, 'Turbaco', 3),
(26, 'Arcabuco', 4),
(27, 'Belencito', 4),
(28, 'Chiquinquirá', 4),
(29, 'Combita', 4),
(30, 'Cucaita', 4),
(31, 'Duitama', 4),
(32, 'Mongui', 4),
(33, 'Nobsa', 4),
(34, 'Paipa', 4),
(35, 'Puerto Boyacá', 4),
(36, 'Ráquira', 4),
(37, 'Samaca', 4),
(38, 'Santa Rosa de Viterbo', 4),
(39, 'Sogamoso', 4),
(40, 'Sutamerchán', 4),
(41, 'Tibasosa', 4),
(42, 'Tinjaca', 4),
(43, 'Tunja', 4),
(44, 'Ventaquemada', 4),
(45, 'Villa de Leiva', 4),
(46, 'La Dorada', 5),
(47, 'Manizales', 5),
(48, 'Villamaria', 5),
(49, 'Caloto', 6),
(50, 'Ortigal', 6),
(51, 'Piendamo', 6),
(52, 'Popayán', 6),
(53, 'Puerto Tejada', 6),
(54, 'Santander Quilichao', 6),
(55, 'Tunia', 6),
(56, 'Villarica', 6),
(57, 'Valledupar', 7),
(58, 'Cerete', 8),
(59, 'Montería', 8),
(60, 'Planeta Rica', 8),
(61, 'Alban', 9),
(62, 'Bogotá', 9),
(63, 'Bojaca', 9),
(64, 'Bosa', 9),
(65, 'Briceño', 9),
(66, 'Cajicá', 9),
(67, 'Chía', 9),
(68, 'Chinauta', 9),
(69, 'Choconta', 9),
(70, 'Cota', 9),
(71, 'El Muña', 9),
(72, 'El Rosal', 9),
(73, 'Engativá', 9),
(74, 'Facatativa', 9),
(75, 'Fontibón', 9),
(76, 'Funza', 9),
(77, 'Fusagasuga', 9),
(78, 'Gachancipá', 9),
(79, 'Girardot', 9),
(80, 'Guaduas', 9),
(81, 'Guayavetal', 9),
(82, 'La Calera', 9),
(83, 'La Caro', 9),
(84, 'Madrid', 9),
(85, 'Mosquera', 9),
(86, 'Nemocón', 9),
(87, 'Puente Piedra', 9),
(88, 'Puente Quetame', 9),
(89, 'Puerto Bogotá', 9),
(90, 'Puerto Salgar', 9),
(91, 'Quetame', 9),
(92, 'Sasaima', 9),
(93, 'Sesquile', 9),
(94, 'Sibaté', 9),
(95, 'Silvania', 9),
(96, 'Simijaca', 9),
(97, 'Soacha', 9),
(98, 'Sopo', 9),
(99, 'Suba', 9),
(100, 'Subachoque', 9),
(101, 'Susa', 9),
(102, 'Tabio', 9),
(103, 'Tenjo', 9),
(104, 'Tocancipa', 9),
(105, 'Ubaté', 9),
(106, 'Usaquén', 9),
(107, 'Usme', 9),
(108, 'Villapinzón', 9),
(109, 'Villeta', 9),
(110, 'Zipaquirá', 9),
(111, 'Maicao', 10),
(112, 'Riohacha', 10),
(113, 'Aipe', 11),
(114, 'Neiva', 11),
(115, 'Cienaga', 12),
(116, 'Gaira', 12),
(117, 'Rodadero', 12),
(118, 'Santa Marta', 12),
(119, 'Taganga', 12),
(120, 'Villavicencio', 13),
(121, 'Ipiales', 14),
(122, 'Pasto', 14),
(123, 'Cúcuta', 15),
(124, 'El Zulia', 15),
(125, 'La Parada', 15),
(126, 'Los Patios', 15),
(127, 'Villa del Rosario', 15),
(128, 'Armenia', 16),
(129, 'Calarcá', 16),
(130, 'Circasia', 16),
(131, 'La Tebaida', 16),
(132, 'Montenegro', 16),
(133, 'Quimbaya', 16),
(134, 'Dosquebradas', 17),
(135, 'Pereira', 17),
(136, 'Aratoca', 18),
(137, 'Barbosa', 18),
(138, 'Bucaramanga', 18),
(139, 'Floridablanca', 18),
(140, 'Girón', 18),
(141, 'Lebrija', 18),
(142, 'Oiba', 18),
(143, 'Piedecuesta', 18),
(144, 'Pinchote', 18),
(145, 'San Gil', 18),
(146, 'Socorro', 18),
(147, 'Sincelejo', 19),
(148, 'Armero', 20),
(149, 'Buenos Aires', 20),
(150, 'Castilla', 20),
(151, 'Espinal', 20),
(152, 'Flandes', 20),
(153, 'Guamo', 20),
(154, 'Honda', 20),
(155, 'Ibagué', 20),
(156, 'Mariquita', 20),
(157, 'Melgar', 20),
(158, 'Natagaima', 20),
(159, 'Payande', 20),
(160, 'Purificación', 20),
(161, 'Saldaña', 20),
(162, 'Tolemaida', 20),
(163, 'Amaime', 21),
(164, 'Andalucía', 21),
(165, 'Buenaventura', 21),
(166, 'Buga', 21),
(167, 'Buga La Grande', 21),
(168, 'Caicedonia', 21),
(169, 'Cali', 21),
(170, 'Candelaria', 21),
(171, 'Cartago', 21),
(172, 'Cavasa', 21),
(173, 'Costa Rica', 21),
(174, 'Dagua', 21),
(175, 'El Carmelo', 21),
(176, 'El Cerrito', 21),
(177, 'El Placer', 21),
(178, 'Florida', 21),
(179, 'Ginebra', 21),
(180, 'Guacarí', 21),
(181, 'Jamundi', 21),
(182, 'La Paila', 21),
(183, 'La Unión', 21),
(184, 'La Victoria', 21),
(185, 'Loboguerrero', 21),
(186, 'Palmira', 21),
(187, 'Pradera', 21),
(188, 'Roldanillo', 21),
(189, 'Rozo', 21),
(190, 'San Pedro', 21),
(191, 'Sevilla', 21),
(192, 'Sonso', 21),
(193, 'Tulúa', 21),
(194, 'Vijes', 21),
(195, 'Villa Gorgona', 21),
(196, 'Yotoco', 21),
(197, 'Yumbo', 21),
(198, 'Zarzal', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `Departamento` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `Departamento`) VALUES
(1, 'Antioquia'),
(2, 'Atlántico'),
(3, 'Bolívar'),
(4, 'Boyacá'),
(5, 'Caldas'),
(6, 'Cauca'),
(7, 'Cesar'),
(8, 'Córdoba'),
(9, 'Cundinamarca'),
(10, 'Guajira'),
(11, 'Huila'),
(12, 'Magdalena'),
(13, 'Meta'),
(14, 'Nariño'),
(15, 'Norte de Santander'),
(16, 'Quindío'),
(17, 'Risaralda'),
(18, 'Santander'),
(19, 'Sucre'),
(20, 'Tolima'),
(21, 'Valle del Cauca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `IdEspecialidad` int(50) NOT NULL,
  `Especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`IdEspecialidad`, `Especialidad`) VALUES
(1, 'Laborista'),
(2, 'Penalista'),
(3, 'Civilista'),
(4, 'Familia'),
(5, 'Mercantilista'),
(6, 'Administrativista'),
(7, 'Fiscalista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `IdPublicacion` int(11) NOT NULL,
  `Contenido` varchar(50) NOT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `Fecha` datetime NOT NULL,
  `IdReaccion` int(11) NOT NULL,
  `IdEspecialidad` int(11) DEFAULT NULL,
  `Anuncio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rchat`
--

CREATE TABLE `rchat` (
  `IdRChat` int(11) NOT NULL,
  `De` varchar(50) NOT NULL,
  `Para` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reaccion`
--

CREATE TABLE `reaccion` (
  `IdReaccion` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `Post` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `TipoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipoUsuario`, `TipoUsuario`) VALUES
(1, 'Abogado'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Documento` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` int(50) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `TarjetaProfesional` varchar(50) DEFAULT NULL,
  `UniversidadPregrado` varchar(50) DEFAULT NULL,
  `UniversidadPostgrado` text,
  `ExperienciaLaboral` text,
  `FechaRegistro` datetime NOT NULL,
  `IdEspecialidad` int(11) DEFAULT NULL,
  `IdDepartamento` int(11) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`IdChat`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudad`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`IdEspecialidad`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`IdPublicacion`);

--
-- Indices de la tabla `rchat`
--
ALTER TABLE `rchat`
  ADD PRIMARY KEY (`IdRChat`);

--
-- Indices de la tabla `reaccion`
--
ALTER TABLE `reaccion`
  ADD PRIMARY KEY (`IdReaccion`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `IdChat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `IdEspecialidad` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `IdPublicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rchat`
--
ALTER TABLE `rchat`
  MODIFY `IdRChat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reaccion`
--
ALTER TABLE `reaccion`
  MODIFY `IdReaccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
