-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2023 a las 22:05:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pqrsf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `adminId` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseprocedure`
--

CREATE TABLE `baseprocedure` (
  `pqrsfId` int(11) NOT NULL,
  `nuv` varchar(50) NOT NULL,
  `entryDate` date DEFAULT NULL,
  `expirationDate` date DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `isDisabled` int(11) DEFAULT NULL,
  `replyDate` date DEFAULT NULL,
  `requestingIds` varchar(50) DEFAULT NULL,
  `documentId` varchar(50) DEFAULT NULL,
  `respondeDocumentId` varchar(50) DEFAULT NULL,
  `trackingIds` varchar(50) DEFAULT NULL,
  `responseId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `baseprocedure`
--

INSERT INTO `baseprocedure` (`pqrsfId`, `nuv`, `entryDate`, `expirationDate`, `type`, `subject`, `name`, `isDisabled`, `replyDate`, `requestingIds`, `documentId`, `respondeDocumentId`, `trackingIds`, `responseId`) VALUES
(1, 'nuv21', '2022-12-29', '2022-12-29', 'Peticion', 'alksjfnakjsfnkasjfnasjkfnasjk', 'Alejandro', 0, NULL, '', '', '', '', ''),
(2, 'nuv2', '2022-12-29', NULL, 'Queja', 'asdasdasdas', 'Jose', 0, NULL, '', '', '', '', ''),
(3, 'nuv3', '2022-12-29', NULL, 'Sugerencia', 'jajajajajaja', 'Alejandro', 0, NULL, '', '', '', '', ''),
(4, 'nuv4', '2022-12-29', NULL, 'Peticion', 'otra mas', 'Alejandro', 0, NULL, '', '', '', '', ''),
(5, 'nuv5', '2022-12-29', NULL, 'Reclamo', 'no se jaja saludos', 'Jose', 0, NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document`
--

CREATE TABLE `document` (
  `documentId` int(11) NOT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report`
--

CREATE TABLE `report` (
  `reportId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requestor`
--

CREATE TABLE `requestor` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `typeRequestor` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `requestor`
--

INSERT INTO `requestor` (`userId`, `name`, `typeRequestor`, `address`, `phone`, `email`) VALUES
(1, 'Alejandro', 'Normal', 'Casa', '3137644515', 'alejomuvez@gmail.com'),
(2, 'Jose', 'Normal', 'Casa 2', '123124124', 'as@asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `response`
--

CREATE TABLE `response` (
  `responseId` int(11) NOT NULL,
  `replyDate` date DEFAULT NULL,
  `responseTimeHours` int(11) DEFAULT NULL,
  `responseDocumentId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracking`
--

CREATE TABLE `tracking` (
  `trackingId` int(11) NOT NULL,
  `dependency` varchar(50) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tracking`
--

INSERT INTO `tracking` (`trackingId`, `dependency`, `date`, `operator`) VALUES
(1, 'DERECHO', '', 'cualquiera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminId`);

--
-- Indices de la tabla `baseprocedure`
--
ALTER TABLE `baseprocedure`
  ADD PRIMARY KEY (`pqrsfId`);

--
-- Indices de la tabla `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`documentId`);

--
-- Indices de la tabla `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportId`);

--
-- Indices de la tabla `requestor`
--
ALTER TABLE `requestor`
  ADD PRIMARY KEY (`userId`);

--
-- Indices de la tabla `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`responseId`);

--
-- Indices de la tabla `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`trackingId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
