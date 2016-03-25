-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2016 a las 21:30:33
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `changes`
--

CREATE TABLE IF NOT EXISTS `changes` (
  `id` int(10) unsigned NOT NULL,
  `tutorial_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `newDate` date NOT NULL,
  `start_hour` int(11) DEFAULT NULL,
  `finish_hour` int(11) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `start_minute` int(11) NOT NULL,
  `finish_minute` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparts`
--

CREATE TABLE IF NOT EXISTS `imparts` (
  `id` int(10) unsigned NOT NULL,
  `subject_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imparts`
--

INSERT INTO `imparts` (`id`, `subject_id`, `user_id`) VALUES
(7, 2, 26),
(8, 3, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL,
  `transmitter_id` int(10) unsigned DEFAULT NULL,
  `receiver_id` int(10) unsigned DEFAULT NULL,
  `message` text COLLATE latin1_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `transmitter_id`, `receiver_id`, `message`, `date`) VALUES
(1, 25, 27, 'hola', '2016-02-28 12:37:51'),
(2, 27, 25, 'asasa', '2016-03-10 18:08:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `id` int(10) unsigned NOT NULL,
  `subject_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `credits` int(10) unsigned DEFAULT NULL,
  `quarter` enum('1','2') NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `credits`, `quarter`, `code`) VALUES
(2, 'asignatura 1', 6, '2', 'a1_code'),
(3, 'asignatura 2', 6, '1', 'a2_code'),
(4, 'p', 6, '2', 'p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(10) unsigned NOT NULL,
  `subject_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `day` enum('lunes','martes','miercoles','jueves','viernes') DEFAULT NULL,
  `start_hour` int(11) DEFAULT NULL,
  `finish_hour` int(11) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `start_minute` int(11) NOT NULL,
  `finish_minute` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tutorials`
--

INSERT INTO `tutorials` (`id`, `subject_id`, `user_id`, `day`, `start_hour`, `finish_hour`, `place`, `start_minute`, `finish_minute`) VALUES
(26, 2, 26, 'lunes', 10, 12, '0', 0, 0),
(27, 2, 26, 'lunes', 10, 12, '0', 0, 0),
(28, 2, 26, 'lunes', 10, 12, '0', 0, 0),
(29, 2, 26, 'lunes', 10, 12, 'lab 3.1', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `type` enum('admin','profesor','alumno','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `authenticated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `password`, `username`, `type`, `email`, `authenticated`) VALUES
(25, 'admin', 'admin', '$2a$10$d61uJds8.BusvtqfnzEU0ev24nfqehyEoR/yiIfhzRRCmD109Lte6', 'admin', 'admin', 'admin@correo.es', 1),
(26, 'profesor 1', 'profesor 1', '$2a$10$nd148RKBo55FcUe59zvaJO7ocmZgQx9RyNEGbzczkkPKhYHNJtAqu', 'p1', 'profesor', 'p1@correo.com', 1),
(27, 'profesor 2', 'profesor 2', '$2a$10$EniDKT/h3JggG9T7QrbX6uJ7yYAMbMd/O5sJuULtc7W9XxCbWg7YK', 'p2', 'profesor', 'p2@correo.es', 1),
(28, 'user', 'user', '$2a$10$2Wj.4DiDFFMWdsyOajb6VefEZvQJEGI4T2hsXjL45/pzQnnedzsaa', 'user', 'alumno', 'tfgusuario@gmail.com', 0),
(29, 'p3', 'p3', '$2a$10$6X.2WRtWB4iNWV8uaHmx..Vvcw3GZKp15JuJKyn6JdiJaLLQsPpCm', 'p3', 'profesor', 'p3@correo.es', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `changes`
--
ALTER TABLE `changes`
  ADD PRIMARY KEY (`id`), ADD KEY `tutorial_id` (`tutorial_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `imparts`
--
ALTER TABLE `imparts`
  ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `changes`
--
ALTER TABLE `changes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imparts`
--
ALTER TABLE `imparts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `changes`
--
ALTER TABLE `changes`
ADD CONSTRAINT `changes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `changess_ibfk_1` FOREIGN KEY (`tutorial_id`) REFERENCES `tutorials` (`id`);

--
-- Filtros para la tabla `imparts`
--
ALTER TABLE `imparts`
ADD CONSTRAINT `imparts_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `imparts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `studies`
--
ALTER TABLE `studies`
ADD CONSTRAINT `studies_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `studies_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tutorials`
--
ALTER TABLE `tutorials`
ADD CONSTRAINT `tutorials_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `tutorials_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
