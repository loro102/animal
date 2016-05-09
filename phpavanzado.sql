-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 16:07:24
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` longtext NOT NULL,
  `dueno` int(11) NOT NULL,
  `puntos` bigint(20) NOT NULL,
  `categoria` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `votantes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `contenido`, `dueno`, `puntos`, `categoria`, `fecha`, `votantes`) VALUES
(1, 'primer post', 'Esto es el contenido del post.\r\n\r\nEstamos probando saltos de linea y [b]bbcode[/b],para ver si todo marcha bien\r\n\r\n[center][img]http://gickr.com/results4/anim_d9d22f5c-3d4f-2a14-6198-fdca54635830.gif[/img][/center]', 1, 190, 1, '0000-00-00', '1;'),
(2, 'segundo post', 'otro contenido', 2, 1, 2, '0000-00-00', ''),
(3, 'otro post', 'otro contenido', 3, 10010, 3, '0000-00-00', '1;'),
(4, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(5, 'posteando 2', 'posteando 2', 2, 140, 1, '2015-11-02', ''),
(6, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(7, 'posteando 3', 'posteando 3', 3, 140, 1, '2015-11-02', ''),
(8, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(9, 'posteando 4', 'posteando 4', 1, 140, 2, '2015-11-02', ''),
(10, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(11, 'posteando 5', 'posteando 5', 2, 140, 2, '2015-11-02', ''),
(12, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(13, 'posteando6', 'posteando 6', 3, 160, 2, '2015-11-02', '1;'),
(14, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(15, 'posteando 7', 'posteando 7', 1, 140, 3, '2015-11-02', ''),
(16, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(17, 'posteando 8', 'posteando 8', 2, 140, 3, '2015-11-02', ''),
(18, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(19, 'posteando 9', 'posteando 9', 3, 140, 3, '2015-11-02', ''),
(20, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(21, 'posteando 3', 'posteando 3', 3, 140, 1, '2015-11-02', ''),
(22, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(23, 'posteando 4', 'posteando 4', 1, 140, 2, '2015-11-02', ''),
(24, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(25, 'posteando 5', 'posteando 5', 2, 140, 2, '2015-11-02', ''),
(26, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(27, 'posteando6', 'posteando 6', 3, 140, 2, '2015-11-02', ''),
(28, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(29, 'posteando 7', 'posteando 7', 1, 140, 3, '2015-11-02', ''),
(30, 'posteando', 'gsfhgksdfhgksdfjg', 1, 150, 1, '2015-11-02', ''),
(31, 'posteando 8', 'posteando 8', 2, 140, 3, '2015-11-02', ''),
(32, 'posteando', 'gsfhgksdfhgksdfjg', 1, 160, 1, '2015-11-02', '1;'),
(33, 'posteando 9', 'posteando 9', 3, 150, 3, '2015-11-02', '1;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `ext` varchar(50) NOT NULL DEFAULT 'png',
  `cambio` int(50) NOT NULL,
  `online` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`, `admin`, `nombre`, `apellidos`, `fecha`, `ext`, `cambio`, `online`) VALUES
(1, 'loro102', 'c33367701511b4f6020ec61ded352059', 'loro102@gmail.com', 1, 'alvaro', 'fieira martinez', '13-06-1986', 'jpg', 1451570909, 1449070332),
(2, 'petardo', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'as@as', 0, '', '', '', 'png', 0, 0),
(3, 'pokemon', 'c33367701511b4f6020ec61ded352059', 'pokemon', 0, '', '', '', 'png', 0, 0),
(4, 'test', 'c33367701511b4f6020ec61ded352059', 'test@test', 0, '', '', '', 'png', 0, 1448971752);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
