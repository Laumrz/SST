-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2024 a las 06:47:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `furat_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accidentes`
--

CREATE TABLE `accidentes` (
  `id` int(11) NOT NULL,
  `nombre_trabajador` varchar(100) NOT NULL,
  `documento_trabajador` varchar(50) NOT NULL,
  `fecha_accidente` date NOT NULL,
  `descripcion_accidente` text NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `hora_accidente` time DEFAULT NULL,
  `cargo_trabajador` varchar(255) DEFAULT NULL,
  `empresa_nombre` varchar(255) DEFAULT NULL,
  `empresa_nit` varchar(50) DEFAULT NULL,
  `eps_trabajador` varchar(255) DEFAULT NULL,
  `arl_trabajador` varchar(255) DEFAULT NULL,
  `tipo_vinculo_laboral` varchar(255) DEFAULT NULL,
  `tipo_identificacion` varchar(10) DEFAULT NULL,
  `lugar_accidente` varchar(50) DEFAULT NULL,
  `tipo_lesion` varchar(255) DEFAULT NULL,
  `parte_cuerpo_afectada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accidentes`
--

INSERT INTO `accidentes` (`id`, `nombre_trabajador`, `documento_trabajador`, `fecha_accidente`, `descripcion_accidente`, `fecha_registro`, `hora_accidente`, `cargo_trabajador`, `empresa_nombre`, `empresa_nit`, `eps_trabajador`, `arl_trabajador`, `tipo_vinculo_laboral`, `tipo_identificacion`, `lugar_accidente`, `tipo_lesion`, `parte_cuerpo_afectada`) VALUES
(1, 'Juan Pablo Barragan', '1023368803', '2024-09-08', 'se cayo', '2024-09-08 19:19:17', '14:00:00', 'Ingeniero', 'Sywork sas', '123456789', 'Sura', 'Sura', 'Contrato a Término Indefinido', 'CC', 'Dentro de la Empresa', 'Fractura', 'Cabeza'),
(2, 'Laura', '1023370588', '2024-09-06', 'Se cayo de la silla', '2024-09-09 04:47:26', '16:00:00', 'Programador', 'SII colombia', '4552', 'Compensar', 'Sura', 'Contrato a Término Fijo', 'CC', 'Dentro de la Empresa', 'Esguince', 'Pies');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accidentes`
--
ALTER TABLE `accidentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accidentes`
--
ALTER TABLE `accidentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
