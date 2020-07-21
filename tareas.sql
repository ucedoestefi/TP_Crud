-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 04:58:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dni` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id`, `nombre`, `apellido`, `email`, `dni`) VALUES
(1, 'Mayra Estefanía', 'Ucedo', 'ucedoestefi@gmail.com', '33391222'),
(2, 'Silvina Noemí', 'Páez', 'almabru1310@gmail.com', '22425636'),
(3, 'Juan Manuel', 'Rivera Morales', 'juanm2587@gmail.com ', '33333333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_asig` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tiempo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `observaciones` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `autor`, `fecha_asig`, `tiempo`, `observaciones`) VALUES
(13, 'Crear proyecto', 'Silvina', '26 de mayo', '1 semana', 'Netbeans'),
(6, 'HTML CSS CRUD', 'Estefania Juan Silvina', '26 de mayo', '2 días', 'Ver tutoriales'),
(7, 'Crear Base de Datos', 'Estefania', '29 de mayo', '1 semana', 'XAMPP-MySql'),
(8, 'Tablas en PHP', 'Juan', '29 de mayo', '1 semana', 'Ver tutoriales'),
(12, 'HTML', 'Silvina', '6 de junio', '1 semana', '4 interfaces'),
(14, 'Crud', 'Estefanía', '6 de junio', '1 semana', ''),
(15, 'Testeo', 'Silvina', '12 de junio', '3 días', ''),
(16, 'Agregar Tabla', 'Silvina', '15 de junio', '2 días', 'Base de datos'),
(17, 'Testeo', 'Estefanía', '15 de junio', '2 días', 'Final');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
