-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2016 a las 02:20:10
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
-- Estructura de tabla para la tabla `filtro`
--

CREATE TABLE IF NOT EXISTS `filtro` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `espacio_id` int(11) NOT NULL,
  `estilo_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `plano` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `filtro`
--

INSERT INTO `filtro` (`id`, `user_id`, `espacio_id`, `estilo_id`, `color_id`, `plano`, `referente`, `created_at`, `updated_at`) VALUES
(1, 11, 8, 3, 2, 'plano.PNG', 'referente.png', '2016-08-03 22:56:18', '2016-08-12 04:18:42'),
(2, 11, 0, 0, 0, NULL, 'referente.png', '2016-08-04 03:04:05', '2016-08-04 03:04:05'),
(3, 0, 0, 0, 0, NULL, NULL, '2016-08-12 04:18:29', '2016-08-12 04:18:29');

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
('2016_08_03_200557_create_table_referente_user', 11);

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
(1, 1, 1, 'ref1.png', 'Descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 'ref2.png', 'Descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 'ref3.png', 'descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 'ref4.png', 'descrip', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referente_user`
--

CREATE TABLE IF NOT EXISTS `referente_user` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `referente_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `referente_user`
--

INSERT INTO `referente_user` (`id`, `user_id`, `referente_id`, `created_at`, `updated_at`) VALUES
(2, 11, 2, '2016-08-04 02:20:23', '2016-08-04 02:20:23'),
(9, 11, 3, '2016-08-12 05:16:47', '2016-08-12 05:16:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 4, 1, '2016-06-15 03:36:35', '2016-06-15 03:36:35'),
(6, 6, 2, '2016-07-11 04:25:59', '2016-07-11 04:25:59'),
(11, 11, 1, '2016-07-25 22:07:28', '2016-07-25 22:07:28');

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
  `filtro` int(11) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tel`, `email`, `filtro`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Jeferson', 'Rivera', '', 'jefersonpatino@yahoo.es', 0, NULL, '1BtN6nYVeJuJnsF4cqYXwjJiicyLgB31jbRnmzjV2CET4lZbATfbLW6uxAdB', '2016-06-15 03:36:35', '2016-07-15 22:06:34'),
(6, 'Jefferson', 'Rivera', '', 'riverajefer@gmail.com', 0, '$2y$10$4iSqnXP3eGsWq0znPnJcS.PapBb8jxg2kJMsyN4v19CA8AZmzhOxC', 'Y7FdshnlawqwZ7VBCox5w5mNOnWe9J6Hmd9oS71U5nSnpnxt5K23QyKmr0gu', '2016-07-11 04:25:59', '2016-07-25 21:46:56'),
(11, 'Juan', 'Doe', '32323787', 'jrivera@bancoink.com', 0, '$2y$10$wPgsTEIeHauoDGaE70PJsOV5zZRDcpzmiicIguAEEZamuR2og8FHm', 'bMwFInZbh71wRNEQDu0xKYcOsbswYoOqfm7Dfk4me6Y2DIi3KnqEANzRXVjC', '2016-07-25 22:07:28', '2016-08-12 03:25:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
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
-- Indices de la tabla `filtro`
--
ALTER TABLE `filtro`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD PRIMARY KEY (`id`), ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `referentes`
--
ALTER TABLE `referentes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referente_user`
--
ALTER TABLE `referente_user`
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
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT de la tabla `filtro`
--
ALTER TABLE `filtro`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `referentes`
--
ALTER TABLE `referentes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `referente_user`
--
ALTER TABLE `referente_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `social_logins`
--
ALTER TABLE `social_logins`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
