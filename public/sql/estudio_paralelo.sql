-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2016 a las 06:28:23
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

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
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE IF NOT EXISTS `espacios` (
  `id` int(10) unsigned NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `espacios`
--

INSERT INTO `espacios` (`id`, `titulo`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cocina', 'img', '2016-07-15 09:24:00', '2016-07-15 09:26:28', NULL);

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
('2016_07_15_040844_create_espacios_table', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2016-06-15 03:09:47', '2016-06-15 03:09:47'),
(2, 2, 1, '2016-06-15 03:09:48', '2016-06-15 03:09:48'),
(4, 4, 1, '2016-06-15 03:36:35', '2016-06-15 03:36:35'),
(6, 6, 2, '2016-07-11 04:25:59', '2016-07-11 04:25:59'),
(7, 7, 1, '2016-07-11 08:57:39', '2016-07-11 08:57:39'),
(8, 8, 1, '2016-07-11 09:00:17', '2016-07-11 09:00:17'),
(9, 9, 1, '2016-07-11 09:04:31', '2016-07-11 09:04:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tel`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', '', 'j.doe@codingo.me', '$2y$10$h1.GcFabWlCPTZtVQ4NT/ueNNN9jAGSuXvVX3LisXnszFkiXaCqWu', NULL, '2016-06-15 03:09:47', '2016-06-15 03:09:47'),
(2, 'Jane', 'Doe', '', 'jane.doe@codingo.me', '$2y$10$gfAc0gvhvF3XqN9V0aXGQu9jD94lv3.jwcHYX/Q96kMgDBzNddKGS', NULL, '2016-06-15 03:09:48', '2016-06-15 03:09:48'),
(4, 'Jeferson', 'Rivera', '', 'jefersonpatino@yahoo.es', NULL, 'iK2CzuJq6OTEWW3JPf6JRzdn4oLfDQHwjIohptnb6psLNaweX2p2QcPfSU1V', '2016-06-15 03:36:35', '2016-07-11 05:48:12'),
(6, 'Jefferson', 'Rivera', '', 'riverajefer@gmail.com', '$2y$10$4iSqnXP3eGsWq0znPnJcS.PapBb8jxg2kJMsyN4v19CA8AZmzhOxC', 'r4GiZqYdlnXPDsHnhrIQcYUNfb37GdGQRopb9VlDcpyt0nuQgfu5YXOjfzYC', '2016-07-11 04:25:59', '2016-07-11 05:46:00'),
(7, 'Lucas', 'Martinez', NULL, 'lc@gmail.com', '$2y$10$KV6z.W1w.SjEGp.LJCpWU.rqMJWrae/VRmv8AIktIyVocRMxYw7/S', NULL, '2016-07-11 08:57:39', '2016-07-11 08:57:39'),
(8, 'Juan', 'Perez', NULL, 'jp@gmail.com', '$2y$10$hDYl.LBBJBxNtqHy1W0/lO.YAtvLGvJwrTbYWyYH2L6/JkipoZMKe', NULL, '2016-07-11 09:00:17', '2016-07-11 09:00:17'),
(9, 'Juan', 'Martinez', '32323787', 'soporte@sionica.net', '$2y$10$W7FTeusWntcE99IZCd3n2um4GVsTJXsnrRZoZn.INgDUb0tuYw8rO', NULL, '2016-07-11 09:04:31', '2016-07-11 09:04:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `espacios`
--
ALTER TABLE `espacios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`), ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT de la tabla `espacios`
--
ALTER TABLE `espacios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
