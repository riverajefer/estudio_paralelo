-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2017 a las 22:46:43
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudio_paralelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendar_cita`
--

CREATE TABLE IF NOT EXISTS `agendar_cita` (
`id` int(10) unsigned NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agendar_cita`
--

INSERT INTO `agendar_cita` (`id`, `pedido_id`, `fecha`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 2, '2017-01-28', 'Holaaa', '2017-01-06 23:35:07', '2017-01-07 00:02:55'),
(2, 3, '2017-01-26', 'Pedido3', '2017-01-07 00:29:37', '2017-01-07 00:29:37'),
(3, 4, '2017-01-28', 'Hola soy un nuvo user', '2017-01-07 00:59:30', '2017-01-07 00:59:30'),
(4, 5, '2017-01-28', 'wwww', '2017-01-07 01:00:25', '2017-01-07 01:00:25'),
(5, 6, '2017-01-20', 'ssd', '2017-01-07 01:04:34', '2017-01-07 01:04:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Calido', 'calido.png', '2016-07-26 04:24:40', '2016-07-26 04:24:40', NULL),
(2, 'Neutro', 'neutro.png', '2016-07-26 04:24:50', '2016-07-26 04:24:50', NULL),
(3, 'Frio', 'frio.png', '2016-07-26 04:25:00', '2016-07-26 04:25:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `designer_pedido`
--

CREATE TABLE IF NOT EXISTS `designer_pedido` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `designer_pedido`
--

INSERT INTO `designer_pedido` (`id`, `user_id`, `pedido_id`, `created_at`, `updated_at`) VALUES
(1, 12, 2, '2017-02-03 23:32:34', '2017-02-03 23:32:46'),
(2, 12, 3, '2017-02-03 23:33:04', '2017-02-03 23:33:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE IF NOT EXISTS `espacios` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(10) unsigned NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clasico', 'clasico.png', '2016-07-25 21:04:05', '2016-07-25 21:04:05', NULL),
(2, 'Equilibrado', 'equilibrado.png', '2016-07-25 21:04:23', '2016-07-25 21:04:23', NULL),
(3, 'Moderno', 'moderno.png', '2016-07-26 03:49:01', '2016-07-26 03:49:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosespacios_pedido`
--

CREATE TABLE IF NOT EXISTS `fotosespacios_pedido` (
`id` int(10) unsigned NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `espacio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fotosespacios_pedido`
--

INSERT INTO `fotosespacios_pedido` (`id`, `pedido_id`, `espacio`, `img`, `created_at`, `updated_at`) VALUES
(1, 2, 'espacio1', 'espacio1.jpg', '2017-01-06 23:29:18', '2017-01-06 23:30:10'),
(2, 2, 'espacio2', 'espacio2.PNG', '2017-01-06 23:29:18', '2017-01-06 23:29:18'),
(3, 3, 'espacio1', 'espacio1.png', '2017-01-07 00:29:26', '2017-01-07 00:29:26'),
(4, 3, 'espacio2', 'espacio2.PNG', '2017-01-07 00:29:26', '2017-01-07 00:29:26'),
(5, 4, 'espacio1', 'espacio1.jpg', '2017-01-07 00:59:18', '2017-01-07 00:59:18'),
(6, 4, 'espacio2', 'espacio2.png', '2017-01-07 00:59:18', '2017-01-07 00:59:18');

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
('2016_12_12_011915_create_paquetes_table', 14),
('2017_01_18_020055_create_designer_users_table', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE IF NOT EXISTS `paquetes` (
`id` int(10) unsigned NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `valor` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'riverajefer@gmail.com', 'f27759d74a2a0da9014a0caf118863836dfa7204', '2016-06-15 03:35:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
`id` int(10) unsigned NOT NULL,
  `paquete_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `espacio_id` int(11) NOT NULL,
  `estilo_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `completo` tinyint(1) NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `paquete_id`, `user_id`, `espacio_id`, `estilo_id`, `color_id`, `completo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 6, 0, 0, 0, 'Sin envíar', '2017-01-06 23:04:00', '2017-01-06 23:04:08'),
(2, 1, 11, 2, 2, 2, 1, 'ENVÍADO', '2017-01-06 23:04:29', '2017-01-07 00:04:23'),
(3, 1, 11, 5, 2, 2, 1, 'ENVÍADO', '2017-01-07 00:28:53', '2017-01-07 00:29:41'),
(6, 1, 4, 6, 2, 1, 1, 'ENVÍADO', '2017-01-07 01:03:39', '2017-01-07 01:04:36'),
(7, 0, 12, 0, 0, 0, 0, '', '2017-01-07 01:12:20', '2017-01-07 01:12:20'),
(8, 0, 6, 0, 0, 0, 0, '', '2017-01-07 02:55:41', '2017-01-07 02:55:41'),
(9, 0, 13, 0, 0, 0, 0, '', '2017-02-01 22:36:03', '2017-02-01 22:36:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referentes`
--

CREATE TABLE IF NOT EXISTS `referentes` (
`id` int(10) unsigned NOT NULL,
  `espacio_id` int(11) NOT NULL,
  `estilo_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Estructura de tabla para la tabla `referente_pedido`
--

CREATE TABLE IF NOT EXISTS `referente_pedido` (
`id` int(10) unsigned NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `referente_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `referente_pedido`
--

INSERT INTO `referente_pedido` (`id`, `pedido_id`, `referente_id`, `created_at`, `updated_at`) VALUES
(5, 2, 3, '2017-01-07 00:01:18', '2017-01-07 00:01:18'),
(6, 2, 4, '2017-01-07 00:01:18', '2017-01-07 00:01:18'),
(7, 3, 2, '2017-01-07 00:29:14', '2017-01-07 00:29:14'),
(8, 3, 3, '2017-01-07 00:29:14', '2017-01-07 00:29:14'),
(9, 4, 2, '2017-01-07 00:59:04', '2017-01-07 00:59:04'),
(10, 4, 3, '2017-01-07 00:59:04', '2017-01-07 00:59:04'),
(11, 4, 4, '2017-01-07 00:59:04', '2017-01-07 00:59:04'),
(12, 5, 2, '2017-01-07 01:00:15', '2017-01-07 01:00:15'),
(13, 5, 3, '2017-01-07 01:00:15', '2017-01-07 01:00:15'),
(14, 6, 4, '2017-01-07 01:04:26', '2017-01-07 01:04:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2016-06-15 03:09:47', '2016-06-15 03:09:47'),
(2, 'administrator', '2016-06-15 03:09:47', '2016-06-15 03:09:47'),
(3, 'designer', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 4, 1, '2016-06-15 03:36:35', '2016-06-15 03:36:35'),
(6, 6, 2, '2016-07-11 04:25:59', '2016-07-11 04:25:59'),
(11, 11, 1, '2016-07-25 22:07:28', '2016-07-25 22:07:28'),
(12, 12, 3, '2017-01-07 01:12:20', '2017-01-07 01:12:20'),
(13, 13, 3, '2017-02-01 22:36:03', '2017-02-01 22:36:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_logins`
--

CREATE TABLE IF NOT EXISTS `social_logins` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `social_logins`
--

INSERT INTO `social_logins` (`id`, `user_id`, `provider`, `social_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 4, 'facebook', '10209163921031756', '', '2016-06-15 03:36:35', '2016-06-15 03:36:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tel`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Jeferson', 'Rivera', '', 'jefersonpatino@yahoo.es', NULL, 'AKBXAttNbZcLocc4BQW9XvvMxTqyfhVMsjUwbkFtiywVfzLq3r2lt4PBiM8f', '2016-06-15 03:36:35', '2017-01-07 01:09:11'),
(6, 'Jefferson', 'Rivera', '', 'riverajefer@gmail.com', '$2y$10$4iSqnXP3eGsWq0znPnJcS.PapBb8jxg2kJMsyN4v19CA8AZmzhOxC', 'KWpkWtmEM1FhOMD2hFTsQvuucEFLehxa3VTDHvevorX4LHRGgWKCm2GUFu1N', '2016-07-11 04:25:59', '2017-02-01 22:36:49'),
(11, 'Juan', 'Doe', '32323787', 'jrivera@gmail.com', '$2y$10$wPgsTEIeHauoDGaE70PJsOV5zZRDcpzmiicIguAEEZamuR2og8FHm', 'A1BFy7SubxUaIXRmqi3xJZZBbFCDtaRDeUEyh9yUi4kYiBQisVY2JKTHPYi7', '2016-07-25 22:07:28', '2017-01-07 01:38:27'),
(12, 'Daniela', 'Ruiz', '3645653', 'dr@gmail.com', '$2y$10$u.kb35KSFOgQqUS2DovYquVRMV/627c0e8bP1ZV/88hSExMuFjhvO', 'OjoGMIplsylmKFDyBfe9lMO5ltelSHVyZNxffqpYX1pFGbw6M7WFxgTDo3Pl', '2017-01-07 01:12:20', '2017-01-17 06:14:35'),
(13, 'Pedro', 'Aponte', '31548787874', 'pa@gmail.com', '$2y$10$2pg0nP/9T2J3Ii7xdLGJZu5EaXCKMP/cVq4kK5vcTF/8.waDdzqW2', 'Sij95MyGE9PJbTG6tptGT8QoKg5RegrSzL6pnP3ESGOYk3ULfOwWH76pPiGl', '2017-02-01 22:36:03', '2017-02-01 22:36:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendar_cita`
--
ALTER TABLE `agendar_cita`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `designer_pedido`
--
ALTER TABLE `designer_pedido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `espacios`
--
ALTER TABLE `espacios`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotosespacios_pedido`
--
ALTER TABLE `fotosespacios_pedido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD PRIMARY KEY (`id`), ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referentes`
--
ALTER TABLE `referentes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referente_pedido`
--
ALTER TABLE `referente_pedido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
 ADD PRIMARY KEY (`id`), ADD KEY `role_user_user_id_index` (`user_id`), ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indices de la tabla `social_logins`
--
ALTER TABLE `social_logins`
 ADD PRIMARY KEY (`id`), ADD KEY `social_logins_user_id_index` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendar_cita`
--
ALTER TABLE `agendar_cita`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `designer_pedido`
--
ALTER TABLE `designer_pedido`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `espacios`
--
ALTER TABLE `espacios`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `estilos`
--
ALTER TABLE `estilos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `fotosespacios_pedido`
--
ALTER TABLE `fotosespacios_pedido`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `referentes`
--
ALTER TABLE `referentes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `referente_pedido`
--
ALTER TABLE `referente_pedido`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `social_logins`
--
ALTER TABLE `social_logins`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
