-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-01-2017 a las 19:19:06
-- Versión del servidor: 5.5.52-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `AppInnenhaus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendar_cita`
--

CREATE TABLE IF NOT EXISTS `agendar_cita` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filtro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `agendar_cita`
--

INSERT INTO `agendar_cita` (`id`, `filtro_id`, `user_id`, `fecha`, `observaciones`, `created_at`, `updated_at`) VALUES
(6, 1, 0, '2016-12-14', 'gffhfgfg', '2016-12-12 22:52:58', '2016-12-12 22:52:58'),
(7, 2, 0, '2016-12-09', 'sdsd', '2016-12-31 03:14:37', '2016-12-31 03:14:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Calido', 'calido.png', '2016-07-26 04:24:40', '2016-07-26 04:24:40', NULL),
(2, 'Neutro', 'neutro.png', '2016-07-26 04:24:50', '2016-07-26 04:24:50', NULL),
(3, 'Frio', 'frio.png', '2016-07-26 04:25:00', '2016-07-26 04:25:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE IF NOT EXISTS `espacios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `espacios`
--

INSERT INTO `espacios` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sala', 'sala.png', '2016-07-25 21:04:39', '2016-07-25 21:04:39', NULL),
(2, 'Dormitorio', 'dormitorio.png', '2016-07-25 21:13:40', '2016-07-25 21:13:40', NULL),
(3, 'Baño', 'banio.png', '2016-07-25 21:14:04', '2016-07-25 21:14:04', NULL),
(4, 'Comedor', 'comedor.png', '2016-07-25 21:35:45', '2016-07-25 21:35:45', NULL),
(5, 'Cocina', 'cocina.png', '2016-07-26 20:36:00', '2016-07-26 20:36:00', NULL),
(6, 'Oficina', 'oficina.png', '2016-07-26 20:36:20', '2016-07-26 20:36:20', NULL),
(7, 'Exterior', 'exterior.png', '2016-07-26 20:37:15', '2016-07-26 20:37:15', NULL),
(8, 'Infantil', 'infantil.png', '2016-07-26 20:37:34', '2016-07-26 20:37:34', NULL),
(9, 'Otro', 'otro.png', '2016-07-26 20:38:02', '2016-07-26 20:38:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE IF NOT EXISTS `estilos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clasico', 'clasico.png', '2016-07-25 21:04:05', '2016-07-25 21:04:05', NULL),
(2, 'Equilibrado', 'equilibrado.png', '2016-07-25 21:04:23', '2016-07-25 21:04:23', NULL),
(3, 'Moderno', 'moderno.png', '2016-07-26 03:49:01', '2016-07-26 03:49:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro`
--

CREATE TABLE IF NOT EXISTS `filtro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `espacio_id` int(11) NOT NULL,
  `estilo_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `completo` tinyint(1) NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `filtro`
--

INSERT INTO `filtro` (`id`, `paquete_id`, `user_id`, `espacio_id`, `estilo_id`, `color_id`, `completo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 2, 2, 2, 1, 'ENVÍADO', '2016-08-03 22:56:18', '2016-12-28 11:38:48'),
(2, 1, 4, 5, 2, 2, 1, 'ENVÍADO', '2016-12-31 03:14:14', '2016-12-31 03:23:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosespacios_user`
--

CREATE TABLE IF NOT EXISTS `fotosespacios_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `espacio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `fotosespacios_user`
--

INSERT INTO `fotosespacios_user` (`id`, `user_id`, `espacio`, `img`, `created_at`, `updated_at`) VALUES
(6, 11, 'espacio1', 'espacio1.png', '2016-12-02 01:40:09', '2016-12-28 11:38:24'),
(7, 11, 'espacio2', 'espacio2.jpg', '2016-12-02 01:40:09', '2016-12-02 01:42:34'),
(8, 11, 'espacio3', 'espacio3.jpg', '2016-12-02 01:40:09', '2016-12-13 02:45:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_27_181053_create-roles', 1),
('2015_06_27_181105_create-role-user', 1),
('2015_06_27_183301_create-social-logins', 1),
('2016_07_15_040844_create_espacios_table', 2),
('2016_07_15_173557_create_estilos_table', 3),
('2016_07_15_174236_create_estilos_table', 4),
('2016_07_15_180709_create_estilos_table', 5),
('2016_07_15_221609_create_estilos_table', 6),
('2016_07_15_222642_create_estilos_table', 7),
('2016_07_25_155936_create_espacios_table', 7),
('2016_07_25_231635_create_colors_table', 8),
('2016_07_26_163238_create_referentes_table', 9),
('2016_08_02_203640_create_filtro_table', 10),
('2016_08_03_200557_create_table_referente_user', 11),
('2016_12_01_171544_create_fotosEspacios_user_table', 12),
('2016_12_01_210241_create_agendar_cita_table', 13),
('2016_12_12_011915_create_paquetes_table', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `valor` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `titulo`, `valor`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Little haus', '69.00', 'Dos tablas conceptuales iniciales Lista de compras personalizada Mensajería directa con su diseñador Servicio de compra y envío Diseño final y muebles de diseño', '2016-12-12 06:26:48', '2016-12-12 06:27:11', NULL),
(2, 'Basic haus', '85000', 'Dos tablas conceptuales iniciales Lista de compras personalizada Mensajería directa con su diseñador Servicio de compra y envío Diseño final y muebles de diseño', '2016-12-12 06:31:05', '2016-12-12 06:31:05', NULL),
(3, 'Main haus', '10.99', 'Dos tablas conceptuales iniciales Lista de compras personalizada  Mensajería directa con su diseñador Servicio de compra y envío Diseño final y muebles de diseño.', '2016-12-12 06:34:27', '2016-12-12 06:40:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'riverajefer@gmail.com', 'f27759d74a2a0da9014a0caf118863836dfa7204', '2016-06-15 03:35:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referentes`
--

CREATE TABLE IF NOT EXISTS `referentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `espacio_id` int(11) NOT NULL,
  `estilo_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `referentes`
--

INSERT INTO `referentes` (`id`, `espacio_id`, `estilo_id`, `img`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ref1.jpg', 'Descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 'ref2.jpg', 'Descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 'ref3.jpg', 'descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 'ref4.jpg', 'descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referente_user`
--

CREATE TABLE IF NOT EXISTS `referente_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `referente_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `referente_user`
--

INSERT INTO `referente_user` (`id`, `user_id`, `referente_id`, `created_at`, `updated_at`) VALUES
(21, 11, 2, '2016-12-13 02:53:30', '2016-12-13 02:53:30'),
(23, 11, 3, '2016-12-28 11:38:09', '2016-12-28 11:38:09'),
(24, 4, 3, '2016-12-31 03:14:27', '2016-12-31 03:14:27'),
(25, 4, 4, '2016-12-31 03:14:27', '2016-12-31 03:14:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2016-06-15 03:09:47', '2016-06-15 03:09:47'),
(2, 'administrator', '2016-06-15 03:09:47', '2016-06-15 03:09:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_index` (`user_id`),
  KEY `role_user_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 4, 1, '2016-06-15 03:36:35', '2016-06-15 03:36:35'),
(6, 6, 2, '2016-07-11 04:25:59', '2016-07-11 04:25:59'),
(11, 11, 1, '2016-07-25 22:07:28', '2016-07-25 22:07:28'),
(12, 12, 1, '2017-01-18 09:10:12', '2017-01-18 09:10:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_logins`
--

CREATE TABLE IF NOT EXISTS `social_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `social_logins_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `social_logins`
--

INSERT INTO `social_logins` (`id`, `user_id`, `provider`, `social_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 4, 'facebook', '10209163921031756', '', '2016-06-15 03:36:35', '2016-06-15 03:36:35'),
(2, 12, 'facebook', '1728451770750792', '', '2017-01-18 09:10:12', '2017-01-18 09:10:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filtro` int(11) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tel`, `email`, `filtro`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Jeferson', 'Rivera', '', 'jefersonpatino@yahoo.es', 0, NULL, '1BtN6nYVeJuJnsF4cqYXwjJiicyLgB31jbRnmzjV2CET4lZbATfbLW6uxAdB', '2016-06-15 03:36:35', '2016-07-15 22:06:34'),
(6, 'Jefferson', 'Rivera', '', 'riverajefer@gmail.com', 0, '$2y$10$4iSqnXP3eGsWq0znPnJcS.PapBb8jxg2kJMsyN4v19CA8AZmzhOxC', 'RIS3KmqN9L6s4oXFCCgXkx6XgN0tsqOtu2oWGMCiMmNxZaPeWSmOnxglz3wV', '2016-07-11 04:25:59', '2016-11-24 06:30:48'),
(11, 'Juan', 'Doe', '32323787', 'jrivera@bancoink.com', 0, '$2y$10$wPgsTEIeHauoDGaE70PJsOV5zZRDcpzmiicIguAEEZamuR2og8FHm', 'zgVl92KtAkPr6KmYFWWSvPe19YXBBQk8kCy5d0fa3gGJ30kAH0jb4J1XhIlc', '2016-07-25 22:07:28', '2016-12-28 11:37:44'),
(12, 'Deadline', 'Stdo', NULL, 'deadline.stdo@gmail.com', 0, NULL, 'wbE0u3oqbr6N6mzGgohHpGupUTPDmRD4jHy6qBnkOTncuysFwxabb3fn8KV2', '2017-01-18 09:10:12', '2017-01-18 09:10:12');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
