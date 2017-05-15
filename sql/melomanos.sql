-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2017 a las 21:47:36
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `melomanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(400) NOT NULL,
  `minAge` int(11) NOT NULL,
  `maxAge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fromid` int(11) DEFAULT NULL,
  `toid` int(11) DEFAULT NULL,
  `toGroup` int(11) DEFAULT NULL,
  `topic` varchar(30) NOT NULL,
  `content` varchar(400) NOT NULL,
  `fromDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usergenres`
--

CREATE TABLE `usergenres` (
  `idUser` int(11) NOT NULL,
  `idGenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `activeFrom` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `born` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `pass`, `isAdmin`, `activeFrom`, `born`) VALUES
(1000, 'kadaiser', '$2y$12$aaLgenb6SbSREF4KOCS/GOJ70ynWeubpMHmXK1bp8v40ittQc4DuO', 1, '2017-05-08 17:09:53', '1988-02-03'),
(1002, 'parabola', '$2y$12$fDOD/CPlKkJg9tL8GfdgROw7bOjFBbnVNy5e7xG3FVG1yZF3DViD6', 0, '2017-05-08 17:10:48', '1990-02-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersingroup`
--

CREATE TABLE `usersingroup` (
  `idUser` int(11) NOT NULL,
  `idGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `to` (`toid`),
  ADD KEY `from` (`fromid`),
  ADD KEY `toGroup` (`toGroup`);

--
-- Indices de la tabla `usergenres`
--
ALTER TABLE `usergenres`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idGenre` (`idGenre`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- Indices de la tabla `usersingroup`
--
ALTER TABLE `usersingroup`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idGroup` (`idGroup`),
  ADD KEY `idUser` (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`toid`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`fromid`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`toGroup`) REFERENCES `groups` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usergenres`
--
ALTER TABLE `usergenres`
  ADD CONSTRAINT `usergenres_ibfk_1` FOREIGN KEY (`idGenre`) REFERENCES `genres` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usergenres_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usersingroup`
--
ALTER TABLE `usersingroup`
  ADD CONSTRAINT `usersingroup_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usersingroup_ibfk_2` FOREIGN KEY (`idGroup`) REFERENCES `groups` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
