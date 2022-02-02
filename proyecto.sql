-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2022 a las 04:14:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `genero` varchar(12) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `ciudades` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`genero`, `rol`, `ciudades`) VALUES
('Hombre', 'Administrador', 'Quito'),
('Mujer', 'Secretaria', 'Loja'),
('', 'Médico', 'Guayaquil'),
('', 'Paciente', 'Manta'),
('', 'Usuario', 'Cuenca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` bigint(20) NOT NULL,
  `ci_cita` varchar(11) NOT NULL,
  `paciente` varchar(120) NOT NULL,
  `sintomas` varchar(1000) NOT NULL,
  `diagnostico` varchar(1000) NOT NULL,
  `especialidad_a` varchar(50) NOT NULL,
  `medico_a` varchar(120) NOT NULL,
  `fecha_a` date NOT NULL,
  `hora_a` time NOT NULL,
  `receta` varchar(1000) NOT NULL,
  `posologia` varchar(256) NOT NULL,
  `examenes` varchar(1000) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `ci_cita`, `paciente`, `sintomas`, `diagnostico`, `especialidad_a`, `medico_a`, `fecha_a`, `hora_a`, `receta`, `posologia`, `examenes`, `estado`, `fecha_registro`) VALUES
(1, '1719653220', 'Katherine Moreno', 'Gripe\r\nTos\r\nMalestar', '', 'Medicina Interna', 'Josefina Chiriboga', '2022-01-05', '20:18:00', '', '', '', 'Cancelado', '0000-00-00 00:00:00'),
(2, '1719653220', 'Katherine Moreno', 'Fiebre', 'Influenza', 'Endocrinología', 'María Castañeda', '2022-02-05', '10:00:00', 'Líquidos', '', 'Sangre, PCR', 'Atendido', '0000-00-00 00:00:00'),
(3, '1719653220', 'Katherine Moreno', 'Tos', '', 'Endocrinología', 'María Castañeda', '2022-01-16', '10:00:00', '', '', '', 'Pendiente', '0000-00-00 00:00:00'),
(4, '1415161718', 'Carlos Yánez', 'Fiebre, tos, malestar', 'COVID19', 'Pediatría', 'Josefina Carcelén', '2022-01-22', '15:00:00', 'Antibióticos', '', 'Prueba PCR', 'Atendido', '0000-00-00 00:00:00'),
(5, '1719653220', 'Katherine Moreno', 'Orzuelo', '', 'Oftalmología', 'Diana Torres', '2022-01-23', '10:20:00', '', '', '', 'Cancelado', '0000-00-00 00:00:00'),
(6, '1719653220', 'Katherine Moreno', 'Cirugía de estómago', '', 'Cirugía General', 'Diana Torres', '2022-01-31', '15:00:00', '', '', '', 'Pendiente', '0000-00-00 00:00:00'),
(7, '1719653220', 'Katherine Moreno', 'Anteojo', '', 'Oftalmología', 'Diana Torres', '2022-02-08', '16:00:00', '', '', '', 'Atendido', '0000-00-00 00:00:00'),
(8, '1719653220', 'Katherine Moreno', 'Revisión', 'Prueba', 'Ginecología', 'Diana Torres', '2022-01-30', '18:30:00', 'Paracetamol 500mg,Paracetamol 1g', 'Prueba', 'Urinálisis completo', 'Activado', '2022-01-30 18:30:01'),
(9, '1719653220', 'Katherine Moreno', 'Golpe en ojo', 'Prueba', 'Oftalmología', 'Diana Torres', '2022-02-09', '19:00:00', 'Paracetamol 500mg,Paracetamol 1g,Ibuprofeno', 'Cada 8 horas prueba', 'Urinálisis completo', 'Atendido', '2022-01-30 18:48:01'),
(10, '9999999999', 'Pruebas Calidad', 'Síntoma de prueba', 'Diagnóstico de prueba', 'Cirugía General', 'Diana Torres', '2022-02-01', '22:00:00', 'Paracetamol 1g,Agua Oxigenada', 'Paracetamol 1 cada 8 horas', 'Hemograma completo', 'Atendido', '2022-02-01 20:20:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(255) NOT NULL,
  `nombre_especialidad` varchar(50) NOT NULL,
  `descripcion_esp` varchar(500) NOT NULL,
  `disponibilidad` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_especialidad`, `descripcion_esp`, `disponibilidad`) VALUES
(1, 'Medicina Interna', 'Especialidad médica que se dedica a la atención integral del adulto enfermo, enfocada al diagnóstico y el tratamiento no quirúrgico de las enfermedades que afectan a sus órganos y sistemas internos, y a su prevención.\"\"\"\"', 'Activado'),
(2, 'Pediatría', 'Incluye la patología medico quirúrgica y de especialidades que presentan pacientes en las diferentes edades pediátricas desde el nacimiento hasta el término del crecimiento y desarrollo que, en promedio, se alcanza entre los 18 y 20 años de edad.\"\"', 'Activado'),
(3, 'Endocrinología', 'Se especializa en el diagnóstico y tratamiento de trastornos del sistema endocrino, que incluye las glándulas y órganos que elaboran hormonas.\"', 'Desactivado'),
(4, 'Ginecología', 'Dedicada al cuidado del sistema reproductor femenino. \"', 'Desactivad'),
(5, 'Cirugía General', 'Especialidad médica que se dedica a la atención integral del adulto enfermo, enfocada al diagnóstico y el tratamiento no quirúrgico de las enfermedades que afectan a sus órganos y sistemas internos, y a su prevención.\"	\"\"\"', 'Desactivado'),
(6, 'Oftalmología', 'Especialidad médico-quirúrgica que se relaciona con el diagnóstico y tratamiento de los defectos y de las enfermedades del aparato de la visión.', 'Activado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE `examenes` (
  `id_examen` int(11) NOT NULL,
  `examen` varchar(50) NOT NULL,
  `estado_examen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`id_examen`, `examen`, `estado_examen`) VALUES
(1, 'Hemograma completo', 'Activado'),
(2, 'Urinálisis completo', 'Activado'),
(3, 'Heces por parásito', 'Activado'),
(4, 'Sangre', 'Activado'),
(5, 'Prueba', 'Activado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id_medicina` bigint(20) NOT NULL,
  `medicina` varchar(50) NOT NULL,
  `estado_medicina` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicina`, `medicina`, `estado_medicina`) VALUES
(1, 'Paracetamol 500mg', 'Disponible'),
(2, 'Afrin Infantil Solución Nasal', 'Disponible'),
(3, 'Afrin Adulto Solución Nasal', 'Terminado'),
(4, 'Complejo B Tabletas', 'Terminado'),
(5, 'Paracetamol 1g', 'Disponible'),
(6, 'Aspirina', 'Terminado'),
(7, 'Ibuprofeno', 'Disponible'),
(8, 'Agua Oxigenada', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico_especialidad`
--

CREATE TABLE `medico_especialidad` (
  `ci_mesp` varchar(11) NOT NULL,
  `medico` varchar(60) NOT NULL,
  `especialidad` varchar(500) NOT NULL,
  `turno_inicio` date NOT NULL,
  `turno_fin` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `disponibilidad` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico_especialidad`
--

INSERT INTO `medico_especialidad` (`ci_mesp`, `medico`, `especialidad`, `turno_inicio`, `turno_fin`, `hora_inicio`, `hora_fin`, `disponibilidad`) VALUES
('1104154743', 'Diana Torres', 'Ginecología,Cirugía General,Oftalmología', '2022-01-30', '2022-02-12', '10:00:00', '23:00:00', 'Activado'),
('1156321518', 'María Castañeda', 'Medicina Interna,Pediatría,Endocrinología', '2022-02-15', '2022-02-24', '10:00:00', '12:00:00', 'Activado'),
('1415161718', 'Carlos Yánez', 'Ginecología', '2022-01-26', '2022-01-27', '12:00:00', '15:00:00', 'Activado'),
('1717171717', 'Josefina Carcelén', 'Medicina Interna,Pediatría,Endocrinología,Ginecología,Cirugía General', '2022-01-16', '2022-01-22', '10:00:00', '22:00:00', 'Activado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` varchar(11) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `contrasena`, `nombre`, `apellido`, `email`, `telefono`, `ciudad`, `direccion`, `fecha_nacimiento`, `genero`, `rol`) VALUES
('1104154743', '81dc9bdb52d04dc20036dbd8313ed055', 'Diana', 'Torres', 'dtorres@prueba.com', '333333', 'Loja', 'Loja', '1985-01-20', 'Mujer', 'Médico'),
('1156321518', '81dc9bdb52d04dc20036dbd8313ed055', 'María', 'Castañeda', 'mcastaneda@prueba.com', '0991164554', 'Esmeraldas', 'Esmeraldas', '1998-08-23', 'Mujer', 'Médico'),
('1415161718', '81dc9bdb52d04dc20036dbd8313ed055', 'Carlos', 'Yánez', 'cyanez@prueba.com', '0998800000', 'Quito', 'Chillogallo', '1989-03-12', 'Hombre', 'Paciente'),
('1717171717', '81dc9bdb52d04dc20036dbd8313ed055', 'Josefina', 'Carcelén', 'jcarcelen@prueba.com', '22222222', 'Loja', 'Loja', '1988-01-15', 'Mujer', 'Médico'),
('1718231119', '81dc9bdb52d04dc20036dbd8313ed055', 'Cristian', 'Zambrano', 'czambrano@prueba.com', '0998801105', 'Quito', 'Quito', '1988-02-16', 'Hombre', 'Administrador'),
('1719653220', '81dc9bdb52d04dc20036dbd8313ed055', 'Katherine', 'Moreno', 'kmoreno@pruebas.com', '0983467654', 'Quito', 'Valle', '1991-01-23', 'Mujer', 'Paciente'),
('9999999999', '81dc9bdb52d04dc20036dbd8313ed055', 'Pruebas', 'Calidad', 'qc@pruebas.com', '9999999', 'Quito', 'Quito', '1988-02-16', 'Hombre', 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(11) NOT NULL,
  `contrasena_rol` varchar(50) DEFAULT NULL,
  `rol` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `contrasena_rol`, `rol`) VALUES
('1104154743', '81dc9bdb52d04dc20036dbd8313ed055', 'Médico'),
('1156321518', '81dc9bdb52d04dc20036dbd8313ed055', 'Médico'),
('1415161718', '81dc9bdb52d04dc20036dbd8313ed055', 'Paciente'),
('1717171717', '81dc9bdb52d04dc20036dbd8313ed055', 'Médico'),
('1718231119', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador'),
('1719653220', '81dc9bdb52d04dc20036dbd8313ed055', 'Paciente'),
('9999999999', '81dc9bdb52d04dc20036dbd8313ed055', 'Paciente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id_medicina`);

--
-- Indices de la tabla `medico_especialidad`
--
ALTER TABLE `medico_especialidad`
  ADD PRIMARY KEY (`ci_mesp`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `examenes`
--
ALTER TABLE `examenes`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicina` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
