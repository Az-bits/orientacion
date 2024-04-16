-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 192.168.8.18
-- Tiempo de generación: 27-04-2021 a las 19:52:59
-- Versión del servidor: 10.1.48-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_upea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `iniciales` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_simple` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='InnoDB free: 8192 kB';

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `iniciales`, `nombre_completo`, `nombre_simple`, `descripcion`, `estado`) VALUES
(1, '', '', 'SIN AREA', NULL, 'A'),
(2, '', 'CIENCIAS ECONÓMICAS, FINANCIERAS Y ADMINISTRATIVAS', 'ECONÓMICAS', 'CIENCIAS ECONÓMICAS, FINANCIERAS Y ADMINISTRATIVAS', 'A'),
(3, '', 'INGENIERIA DESARROLLO TECNOLOGICO PRODUCTIVO', 'INGENIERÍAS', 'DECANATO DEL AREA DEL DESARROLLO TECNOLOGICO PRODUCTIVO', 'A'),
(4, '', ' CIENCIAS DE LA SALUD', 'CIENCIAS DE LA SALUD', 'DECANATO DE AREA (CIENCIAS DE LA SALUD)', 'A'),
(5, '', 'CIENCIAS SOCIALES', 'CIENCIAS SOCIALES', 'DECANATO DE AREA (CIENCIAS SOCIALES)', 'A'),
(6, 'DCAH', 'CIENCIAS Y ARTES DEL HÁBITAT', 'CIENCIAS Y ARTES DEL HÁBITAT', 'ARQUITECTURA Y ARTES PLASTICAS', 'A'),
(7, '', 'DESARROLLO CIENCIAS POLITICAS JURIDICAS', 'JURIDICAS', 'DERECHO Y CIENCIAS POLITICAS', 'I'),
(8, '', 'CIENCIAS DE LA EDUCACIÓN', 'CIENCIAS DE LA EDUCACIÓN', 'AREA CIENCIAS DE LA EDUCACION', 'A'),
(9, '', 'CIENCIAS AGRÍCOLAS, PECUARIAS Y RECURSOS NATURALES', 'CIENCIAS AGRÍCOLAS, PECUARIAS Y RECURSOS NATURALES', 'DECANATO DE AREA (CS Agricolas)', 'A'),
(10, '', 'CIENCIA Y TECNOLOGIA', 'CIENCIA Y TECNOLOGIA', 'AREA DE CIENCIA Y TECNOLOGIA  SEGUN RESOLUCION HCU 148/2015', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `nombre_completo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_simple` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `iniciales` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_carrera` enum('carrera','otro') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_detalle` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horas_mes_poa` int(11) NOT NULL,
  `poa_auxiliares` int(11) NOT NULL,
  `poa_investigacion` int(11) NOT NULL DEFAULT '0',
  `poa_aux_investigacion` int(11) NOT NULL DEFAULT '0',
  `tipo_gestion` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANUAL, SEMESTRAL, MIXTO',
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `art_8` enum('SI','NO') COLLATE utf8_spanish_ci DEFAULT 'NO',
  `adicional` enum('habilitado','ninguna') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'ninguna',
  `planilla_beca` enum('habilitado','planilla') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'habilitado'
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='InnoDB free: 8192 kB; (`area_id`) REFER `sia_upea/area`(`id`';

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `area_id`, `nombre_completo`, `nombre_simple`, `iniciales`, `tipo_carrera`, `fecha_creacion`, `descripcion`, `descripcion_detalle`, `horas_mes_poa`, `poa_auxiliares`, `poa_investigacion`, `poa_aux_investigacion`, `tipo_gestion`, `estado`, `art_8`, `adicional`, `planilla_beca`) VALUES
(1, 1, 'INGENIERÍA DE SISTEMAS', 'SISTEMAS', 'CIS', 'carrera', '2001-09-21', '', 'traspaso de 9 aux doc (27) de investigacion con certificacion presupuestaria', 3280, 27, 120, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(2, 9, 'INGENIERÍA AGRONÓMICA', 'AGRONOMÍA', 'IAG', 'carrera', '2001-09-01', '', 'en compensacion al primer semestre 20 hrs mes con VB Lic. Vladimir Vega en nota interna 318/2013', 2120, 31, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(3, 6, 'ARQUITECTURA', 'ARQUITECTURA', 'CA', 'carrera', '2001-09-01', '', '2104 mas 128 de agosto y 64  de octubre mas 56 hrs mes de investigacion', 2352, 16, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(4, 8, 'CIENCIAS DE LA EDUCACIÓN', 'EDUCACIÓN', '', 'carrera', '0000-00-00', '', 'resta de 3 docentes investigado d 32 hrs/mes total 96 hrs mes', 7942, 38, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(5, 5, 'CIENCIAS DEL DESARROLLO', 'DESARROLLO', 'CCD', 'carrera', '0000-00-00', '', NULL, 1472, 14, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(6, 5, 'CIENCIAS DE LA COMUNICACIÓN SOCIAL', 'COMUNICACIÓN', '', 'carrera', '0000-00-00', '', 'modificacion de carga horaria mensual docente segun acta 26  y se trabaja directamente con carga horaria anual de 22704', 2208, 17, 80, 8, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(7, 2, 'CONTADURÍA PÚBLICA', 'CONTADURÍA', '', 'carrera', '0000-00-00', '', NULL, 3808, 37, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(8, 1, 'DERECHO', 'DERECHO', '', 'carrera', '0000-00-00', '', NULL, 6624, 34, 160, 8, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(9, 4, 'ENFERMERÍA', 'ENFERMERÍA', '', 'carrera', '0000-00-00', '', NULL, 3216, 30, 160, 8, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(10, 5, 'HISTORIA', 'HISTORIA', '', 'carrera', '0000-00-00', '', 'SE EMPIEZA CON NUEVA MALLA CURRICULAR SEMESTRAL', 896, 10, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(11, 10, 'INGENIERÍA CIVIL', 'CIVIL', 'I.C.', 'carrera', '0000-00-00', '', NULL, 1720, 24, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(12, 3, 'INGENIERÍA EN PRODUCCIÓN EMPRESARIAL', 'PRODUCCIÓN', 'I.P.E.', 'carrera', '0000-00-00', '', NULL, 2576, 16, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(13, 5, 'LINGÜÍSTICA E IDIOMAS', 'IDIOMAS', 'L.I.N.', 'carrera', '0000-00-00', '', 'investigacion de dep idioma y carrera', 4801, 24, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(14, 4, 'MEDICINA', 'MEDICINA', '', 'carrera', '0000-00-00', '', NULL, 5368, 30, 80, 8, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(15, 5, 'SOCIOLOGÍA', 'SOCIOLOGÍA', '', 'carrera', '0000-00-00', '', NULL, 1488, 18, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(16, 5, 'TRABAJO SOCIAL', 'TRABAJO', '', 'carrera', '0000-00-00', '', NULL, 1720, 15, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(17, 9, 'MEDICINA VETERINARIA Y ZOOTECNIA', 'VETERINARIA', '', 'carrera', '0000-00-00', '', NULL, 2506, 16, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(18, 2, 'ECONOMÍA', 'ECONOMÍA', '', 'carrera', '0000-00-00', '', NULL, 1712, 16, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(19, 10, 'INGENIERÍA DE GAS Y PETROQUÍMICA', 'PETROQUÍMICA', 'I.G.P.', 'carrera', '0000-00-00', '', NULL, 1604, 18, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(20, 2, 'ADMINISTRACIÓN DE EMPRESAS', 'ADMINISTRACIÓN', '', 'carrera', '0000-00-00', '', 'gestion I 2013 sobrepaso 72 hrs mes, la cual se recupera de Investigacion', 2976, 25, 160, 8, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(21, 4, 'ODONTOLOGÍA', 'ODONTOLOGÍA', '', 'carrera', '0000-00-00', '', NULL, 3484, 12, 80, 8, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(22, 3, 'INGENIERÍA ELECTRÓNICA', 'ELECTRÓNICA', 'I.E.', 'carrera', '0000-00-00', '', NULL, 1560, 25, 160, 8, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(23, 6, 'ARTES PLÁSTICAS', 'PLASTICAS', '', 'carrera', '2010-11-01', '', '720 usado en I/2013 de los 904', 1480, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(24, 1, 'CIENCIAS POLITICAS', 'POLITICAS', '', 'carrera', '2010-11-01', '', 'CARRERA NUEVA', 784, 6, 80, 2, 'ANUAL', 'A', 'SI', 'ninguna', 'habilitado'),
(25, 3, 'INGENIERÍA TEXTIL', 'TEXTIL', 'C.I.T.', 'carrera', '2010-11-01', '', 'CARRERA NUEVA', 406, 7, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(26, 8, 'EDUCACIÓN PARVULARIA', 'PARVULARIA', '', 'carrera', '2010-11-01', '', 'CARRERA NUEVA, increm,ento de 168 hrs /mes 2do reformulado poA de 1176', 1296, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(27, 3, 'INGENIERÍA ELECTRICA', 'ELECTRICA', 'C.I.E.', 'carrera', '2010-11-01', '', 'CARRERA NUEVA', 440, 7, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(28, 3, 'INGENIERÍA AUTOTRÓNICA', 'AUTOTRONICA', 'C.I.A.', 'carrera', '2010-11-01', '', 'CARRERA NUEVA', 1148, 7, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(29, 9, 'INGENIERÍA EN ZOOTECNIA E INDUSTRIA PECUARIA', 'PECUARIA', 'I.Z.I.P.', 'carrera', '2010-11-01', '', 'CARRERA NUEVA ZOOTECNIA E INDUSTRIA PECUARIA cambio de nombre segun res HCU ', 1048, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(30, 3, 'INGENIERÍA AMBIENTAL', 'AMBIENTAL', 'I.A.', 'carrera', '2010-11-01', '', 'CARRERA NUEVA', 576, 7, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(31, 4, 'NUTRICIÓN Y DIETÉTICA', 'DIETETICA', '', 'carrera', '2011-03-14', '', 'CARRERA NUEVA', 716, 6, 80, 2, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(32, 2, 'COMERCIO INTERNACIONAL', 'COMERCIO', '', 'carrera', '2012-12-05', '', 'CARRERA NUEVA, SEGUN 2do reformulado ', 1048, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(33, 2, 'GESTIÓN TURÍSTICA Y HOTELERA', 'TURISTICA', 'G.T.H.', 'carrera', '2012-09-01', '', 'MIXTA', 1152, 6, 80, 2, 'MIXTO', 'A', 'SI', 'ninguna', 'habilitado'),
(34, 3, 'AREA DE INGENIERÍA "D.T.P."', 'INGENIERIA', '', 'otro', '2012-12-01', '', 'FACULTAD DE INGENIERIA', 3584, 0, 0, 0, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(35, 5, 'PSICOLOGÍA', 'PSICOLOGIA', 'CP', 'carrera', '2011-12-31', '', 'CREADO Y APROBADO EN LA CUB', 720, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(36, 1, 'CIENCIAS FÍSICAS  Y ENERGÍAS ALTERNATIVAS', 'CIENCIAS FISICAS', '', 'carrera', '2012-03-01', '', 'CUB', 480, 6, 80, 2, 'SEMESTRAL', 'A', 'SI', 'ninguna', 'habilitado'),
(37, 4, 'AREA DE SALUD', 'SALUD', '', 'otro', NULL, '', 'FACULTAD  DE SALUD ', 0, 0, 0, 0, 'ANUAL', 'A', 'NO', 'ninguna', 'habilitado'),
(38, 5, 'AREA CIENCIAS SOCIALES', 'SOCIALES', '', 'otro', '2012-12-20', '', 'FACULTAD DE CIENCIAS SOCIALES', 0, 0, 0, 0, 'MIXTO', 'A', 'NO', 'ninguna', 'habilitado'),
(39, 8, 'AREA CIENCIAS DE LA EDUCACION', 'EDUCACION', '', 'otro', '2012-12-20', '', 'FACULTAD DE CIENCIAS DE LA EDUCACION', 0, 0, 0, 0, 'SEMESTRAL', 'A', 'NO', 'ninguna', 'habilitado'),
(40, 2, 'AREA DE ECONOMICAS, FINANCIERAS Y ADMINISTRATIVAS', 'ECONOMICAS', '', 'otro', '2014-08-25', '', 'MIXTA', 0, 0, 0, 0, 'MIXTO', 'A', 'NO', 'ninguna', 'habilitado'),
(41, 9, 'AREA CIENCIAS AGRICOLAS', 'AGRICOLAS', '', 'otro', '2014-08-13', '', NULL, 0, 0, 0, 0, 'SEMESTRAL', 'A', 'NO', 'ninguna', 'habilitado'),
(42, 6, 'CIENCIAS Y ARTES DEL HABITAT', 'CIENCIAS Y ARTES DEL HABITAT', '', 'otro', '2016-06-22', '', NULL, 0, 0, 0, 0, 'MIXTO', 'A', 'NO', 'ninguna', 'habilitado'),
(44, 10, 'AREA DE CIENCIA Y TECNOLOGIA', 'AREA DE CIENCIA Y TECNOLOGIA', '', 'otro', '2015-11-25', '', 'AREA DE CIENCIA Y TECNOLOGIA', 0, 0, 0, 0, 'SEMESTRAL', 'A', 'NO', 'ninguna', 'habilitado'),
(45, 8, 'PSICOMOTRICIDAD Y DEPORTES', 'PSICOMOTRICIDAD Y DEPORTES', 'PD', 'carrera', '2019-09-17', '', 'PSICOMOTRICIDAD Y DEPORTES CREADO SEGUN RESOLUCION HCCU 138/2019', 0, 0, 0, 0, 'SEMESTRAL', 'A', 'NO', 'ninguna', 'habilitado'),
(46, 4, 'TECNOLOGÍA EN LABORATORIO DENTAL', 'TECNOLOGÍA EN LABORATORIO DENTAL', 'TLD', 'carrera', '2019-09-17', '', 'TECNOLOGÍA EN MECANICA DENTAL CREADA SEGUN RESOLUCION HCU 139/2019  CAMBIADO A TECNOLOGIA EN LABORATORIO DENTRAL SEGUN RES HCU 038/2021', 0, 0, 0, 0, 'ANUAL', 'A', 'NO', 'ninguna', 'habilitado'),
(47, 8, 'MÚSICA', 'MÚSICA', 'MU', 'carrera', '2019-09-16', '', 'PROGRAMA COMPLEMENTARIO DE LICENCIATURA EN MUSICA', 0, 0, 0, 0, 'SEMESTRAL', 'A', 'NO', 'ninguna', 'habilitado'),
(48, 1, 'Direccion de Investigacion Ciencia y Tecnologia', 'DICYT', 'DICYT', 'otro', NULL, '', NULL, 0, 0, 0, 0, 'ANUAL', 'A', 'NO', 'ninguna', 'habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_sede`
--

CREATE TABLE IF NOT EXISTS `carrera_sede` (
  `id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `sede_id` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `estado_planilla` enum('habilitado','planilla','ninguna') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'habilitado',
  `codigo` int(8) DEFAULT NULL,
  `tipo_carrera_sede` enum('C','A','I') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='InnoDB free: 8192 kB; (`carrera_id`) REFER `sia_upea/carrera';

--
-- Volcado de datos para la tabla `carrera_sede`
--

INSERT INTO `carrera_sede` (`id`, `carrera_id`, `sede_id`, `telefono`, `estado`, `estado_planilla`, `codigo`, `tipo_carrera_sede`) VALUES
(1, 1, 1, '2115224', 'A', 'habilitado', 29000003, 'C'),
(2, 2, 1, '2115224', 'A', 'habilitado', 25000003, 'C'),
(3, 3, 1, '2115217', 'A', 'habilitado', 30000003, 'C'),
(4, 4, 1, '2119644', 'A', 'habilitado', 23000003, 'C'),
(5, 5, 1, '2115217', 'A', 'habilitado', 22000003, 'C'),
(6, 6, 1, '2115434', 'A', 'habilitado', 20000003, 'C'),
(7, 7, 1, '2115161', 'A', 'habilitado', 14000003, 'C'),
(8, 8, 1, '2115219', 'A', 'habilitado', 18000003, 'C'),
(9, 9, 1, '2115224', 'A', 'habilitado', 12000003, 'C'),
(10, 10, 1, '73748985', 'A', 'habilitado', 32000003, 'C'),
(11, 11, 1, '2115234', 'A', 'habilitado', 27000003, 'C'),
(12, 12, 1, '2840040', 'A', 'habilitado', 17000003, 'C'),
(13, 13, 1, '2115224', 'A', 'habilitado', 24000003, 'C'),
(14, 14, 1, '2115237', 'A', 'habilitado', 11000003, 'C'),
(15, 15, 1, '2115149', 'A', 'habilitado', 19000003, 'C'),
(16, 16, 1, '2115219', 'A', 'habilitado', 21000003, 'C'),
(17, 17, 1, '2115237', 'A', 'habilitado', 26000003, 'C'),
(18, 18, 1, '2115231', 'A', 'habilitado', 15000003, 'C'),
(19, 19, 7, '60563390-71925845', 'I', 'habilitado', NULL, 'C'),
(20, 20, 1, '2115161', 'A', 'habilitado', 16000003, 'C'),
(21, 21, 1, '2115175', 'A', 'habilitado', 13000003, 'C'),
(22, 22, 1, '2115149', 'A', 'planilla', 28000003, 'C'),
(23, 4, 2, '2119644', 'I', 'habilitado', NULL, 'C'),
(24, 4, 3, '2119644', 'A', 'habilitado', 71000001, 'C'),
(25, 4, 4, '2119644', 'A', 'habilitado', 71000002, 'C'),
(26, 8, 4, '2115219', 'A', 'habilitado', 71000004, 'C'),
(27, 13, 5, '2112233', 'A', 'habilitado', 71000013, 'C'),
(28, 17, 6, '2115237', 'I', 'habilitado', NULL, 'C'),
(29, 4, 8, NULL, 'A', 'habilitado', 71000014, 'C'),
(30, 12, 9, '2840040', 'I', 'habilitado', 71000011, 'C'),
(32, 7, 10, '76567215', 'A', 'habilitado', 71000008, 'C'),
(33, 8, 10, '76567215', 'A', 'habilitado', 71000009, 'C'),
(34, 23, 1, '76567215', 'A', 'habilitado', 35000003, 'C'),
(35, 24, 1, '76567215', 'A', 'habilitado', 33000003, 'C'),
(36, 9, 9, '76567215', 'I', 'habilitado', 71000012, 'C'),
(37, 25, 1, '76567215', 'A', 'habilitado', 38000003, 'C'),
(38, 26, 1, '76567215', 'A', 'habilitado', 42000003, 'C'),
(39, 27, 17, '76567215', 'I', 'habilitado', NULL, 'C'),
(40, 28, 1, '76567215', 'A', 'habilitado', 34000003, 'C'),
(41, 29, 1, '76567215', 'A', 'habilitado', 41000003, 'C'),
(42, 30, 1, '76567215', 'A', 'habilitado', 40000003, 'C'),
(43, 9, 10, '2115224', 'A', 'habilitado', 71000010, 'C'),
(44, 13, 13, NULL, 'A', 'habilitado', 71000005, 'C'),
(45, 31, 1, '76567215', 'A', 'habilitado', 37000003, 'C'),
(46, 32, 1, '76567215', 'A', 'habilitado', 44000003, 'C'),
(47, 7, 4, '76567215', 'A', 'habilitado', 71000003, 'C'),
(48, 7, 4, NULL, 'I', 'habilitado', NULL, 'C'),
(49, 33, 1, '76757215', 'A', 'habilitado', 36000003, 'C'),
(50, 13, 14, '76567215', 'A', 'habilitado', 24000009, 'A'),
(51, 2, 15, '76567215', 'A', 'habilitado', 25000002, 'I'),
(52, 4, 10, '76567215', 'A', 'habilitado', 71000007, 'C'),
(53, 4, 16, NULL, 'A', 'habilitado', 71000015, 'C'),
(54, 34, 1, NULL, 'A', 'habilitado', 71000001, 'C'),
(55, 20, 10, '2115161', 'A', 'habilitado', 71000006, 'C'),
(56, 35, 1, '76560000', 'A', 'habilitado', 45000003, 'C'),
(57, 36, 1, NULL, 'A', 'habilitado', 43000003, 'C'),
(58, 34, 1, '7777777', 'I', 'habilitado', NULL, 'A'),
(59, 4, 18, '2119644', 'A', 'habilitado', 71000021, 'C'),
(60, 4, 15, '2119644', 'A', 'habilitado', 23000002, 'I'),
(61, 5, 15, '777777', 'A', 'habilitado', 22000002, 'I'),
(62, 13, 15, '000000', 'A', 'habilitado', 24000002, 'I'),
(63, 10, 15, NULL, 'A', 'habilitado', 32000002, 'I'),
(64, 17, 19, '78757320', 'A', 'habilitado', 71000016, 'C'),
(65, 12, 15, '2840040', 'A', 'habilitado', 17000002, 'I'),
(66, 2, 6, '2115231', 'I', 'habilitado', NULL, 'C'),
(67, 18, 15, NULL, 'A', 'habilitado', 15000002, 'I'),
(68, 7, 15, NULL, 'A', 'habilitado', 14000002, 'I'),
(69, 2, 20, 's/t', 'A', 'habilitado', 71000017, 'C'),
(70, 6, 15, NULL, 'A', 'habilitado', 20000002, 'I'),
(71, 3, 15, NULL, 'A', 'habilitado', 30000003, 'A'),
(72, 20, 15, NULL, 'A', 'habilitado', 16000002, 'I'),
(73, 17, 15, '17', 'A', 'habilitado', 26000002, 'I'),
(74, 15, 15, NULL, 'A', 'habilitado', 19000002, 'I'),
(75, 2, 21, '21 s/t', 'A', 'habilitado', 71000022, 'C'),
(76, 27, 1, NULL, 'A', 'habilitado', 39000003, 'C'),
(77, 8, 15, '8', 'A', 'habilitado', 18000002, 'I'),
(78, 14, 15, '2119644', 'A', 'habilitado', 11000002, 'I'),
(79, 21, 15, 's/n', 'A', 'habilitado', 13000002, 'I'),
(80, 1, 15, NULL, 'A', 'habilitado', 29000002, 'I'),
(81, 19, 1, NULL, 'A', 'habilitado', 31000003, 'C'),
(82, 22, 15, 'electronica investig', 'A', 'habilitado', 28000002, 'I'),
(83, 19, 22, 'PALS GAS', 'A', 'habilitado', NULL, 'C'),
(84, 13, 23, 'SN', 'A', 'habilitado', 24000009, 'A'),
(85, 27, 15, NULL, 'A', 'habilitado', 39000002, 'I'),
(86, 36, 15, NULL, 'A', 'habilitado', 43000002, 'I'),
(87, 33, 15, NULL, 'A', 'habilitado', 36000002, 'I'),
(88, 35, 15, NULL, 'A', 'habilitado', 45000002, 'I'),
(89, 16, 15, NULL, 'A', 'habilitado', 21000002, 'I'),
(90, 24, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(91, 31, 15, NULL, 'A', 'habilitado', 37000002, 'I'),
(92, 7, 22, NULL, 'A', 'habilitado', NULL, 'C'),
(93, 29, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(94, 4, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(95, 9, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(96, 20, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(97, 8, 13, NULL, 'A', 'habilitado', NULL, 'C'),
(98, 11, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(99, 28, 15, '22813047', 'A', 'habilitado', NULL, 'I'),
(100, 8, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(101, 19, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(102, 23, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(103, 30, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(104, 9, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(105, 13, 4, NULL, 'A', 'habilitado', NULL, 'C'),
(106, 26, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(107, 13, 1, NULL, '', 'habilitado', NULL, 'C'),
(108, 32, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(109, 28, 10, '22222222', 'A', '', NULL, 'C'),
(110, 1, 10, NULL, 'A', 'habilitado', NULL, 'C'),
(111, 6, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(112, 45, 1, '77777777', 'A', 'habilitado', NULL, 'C'),
(113, 46, 1, '7777777777', 'A', 'habilitado', NULL, 'C'),
(114, 47, 1, '77777787', 'A', 'habilitado', NULL, 'C'),
(115, 25, 15, NULL, 'A', 'habilitado', NULL, 'I'),
(116, 12, 24, NULL, 'A', 'habilitado', NULL, 'C'),
(117, 48, 15, NULL, 'A', 'ninguna', NULL, 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE IF NOT EXISTS `gestion` (
  `id` int(11) NOT NULL,
  `tipo_gestion` char(3) COLLATE utf8_spanish_ci NOT NULL COMMENT 'R=Regular, V=Verano, I=Invierno, AD=Auxiliar de docencia',
  `periodo` char(3) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'I,II,III...',
  `gestion` char(25) COLLATE utf8_spanish_ci NOT NULL COMMENT '2010, 2011, 2012, ...',
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `fecha_inicio_condor` date DEFAULT NULL,
  `fecha_fin_condor` date DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `siacop_estado_gestion` tinyint(1) NOT NULL DEFAULT '0',
  `estado_innova` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado_evaluacionSicod` int(1) NOT NULL,
  `estado_admisiones` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='InnoDB free: 8192 kB';

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`id`, `tipo_gestion`, `periodo`, `gestion`, `fecha_inicio`, `fecha_fin`, `fecha_inicio_condor`, `fecha_fin_condor`, `descripcion`, `estado`, `siacop_estado_gestion`, `estado_innova`, `estado_evaluacionSicod`, `estado_admisiones`) VALUES
(1, 'R', 'I', '2010', '2010-02-01', '2010-07-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(2, 'R', 'II', '2010', '2010-08-01', '2010-12-13', NULL, NULL, '', 'I', 0, '', 0, 0),
(3, 'R', NULL, '2010', '2010-02-01', '2010-12-15', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(4, 'R', NULL, '2004', '2004-01-15', '2004-12-25', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(5, 'R', NULL, '2009', '2009-01-15', '2009-12-25', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(6, 'R', 'II', '2009', '2009-01-15', '2009-12-25', NULL, NULL, 'SEMESTRAL', 'I', 0, '', 0, 0),
(7, 'R', 'I', '2011', '2011-02-01', '2011-06-28', NULL, NULL, 'SEMESTRE REGULAR', 'I', 0, '', 0, 0),
(8, 'R', NULL, '2011', '2011-02-01', '2011-12-16', '2011-02-02', '2011-11-25', 'SEMESTRE ANUAL', 'I', 0, '', 0, 0),
(9, 'R', 'II', '2011', '2011-07-18', '2011-12-16', '2011-07-18', '2011-12-16', 'SEMESTRE REGULAR', 'I', 0, '', 0, 0),
(10, 'R', 'I', '2012', '2012-02-01', '2012-08-31', '2012-02-07', '2012-03-30', 'SEMESTRE REGULAR', 'I', 0, '', 0, 0),
(11, 'AD', 'I', '2012 - AUX', '2012-02-10', '2012-07-14', '2012-02-07', '2012-03-30', 'SEMESTRE REGULAR', 'I', 0, '', 0, 0),
(12, 'R', NULL, '2012', '2012-01-02', '2012-12-31', '2012-02-07', '2012-03-30', 'ANUAL', 'I', 0, '', 0, 0),
(13, 'AD', NULL, '2012 - AUX', '2012-02-01', '2012-12-31', '2012-02-07', '2012-03-30', 'ANUAL', 'I', 0, '', 0, 0),
(14, 'PRE', 'I', '2012 - PRE-UNIV.', '2011-12-23', '2012-02-10', '2012-02-03', '2012-02-16', 'PREFAS', 'I', 0, '', 0, 0),
(15, 'V', 'III', '2011-VERANO', '2012-02-02', '2012-03-02', '2012-02-01', '2012-02-28', 'SEMESTRAL VERANO', 'I', 0, '', 0, 0),
(16, 'PRE', NULL, '2012 - PRE', '2011-10-10', '2012-03-08', '2012-01-20', '2012-02-20', 'PREUNIVERSITARIO', 'I', 0, '', 0, 0),
(17, 'V', NULL, '2011-VERANO', '2012-01-09', '2012-03-09', '2012-02-01', '2012-02-29', 'ANUAL', 'I', 0, '', 0, 0),
(18, 'I', 'III', '2011-INVIERNO', '2011-07-11', '2011-08-05', '2011-07-18', '2011-08-01', 'SEMESTRAL', 'I', 0, '', 0, 0),
(19, 'PRE', 'II', '2012-PRE-UNIV.', '2012-03-16', '2012-08-31', '2012-05-01', '2012-07-02', 'PREFAS', 'I', 0, '', 0, 0),
(20, 'R', 'II', '2012', '2012-07-17', '2012-12-31', '2012-07-18', '2012-08-03', 'SEMESTRAL', 'I', 0, '', 0, 0),
(21, 'I', 'III', '2012-INVIERNO', '2012-07-04', '2012-08-11', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(22, 'AD', 'II', '2012-AUX', '2012-08-01', '2012-12-31', '2012-08-01', '2012-09-01', 'SEMESREAL', 'I', 0, '', 0, 0),
(23, 'PRE', NULL, '2013-PRE', '2012-10-01', '2013-02-26', '2012-10-01', '2013-11-06', 'PREUNIVERSITARIO ANUALES', 'I', 0, '', 0, 0),
(24, 'PRE', 'I', '2013-PRE-UNIV.', '2012-09-07', '2013-02-17', '2012-10-01', '2013-12-03', 'PREFAS SEMESTRALES', 'I', 0, '', 0, 0),
(25, 'R', NULL, '2013', '2013-02-04', '2013-12-31', '2013-02-04', '2014-06-09', 'ANUAL', 'I', 0, '', 0, 0),
(26, 'R', 'I', '2013', '2013-02-04', '2013-07-12', '2013-01-14', '2013-12-19', 'SEMESTRAL', 'I', 0, '', 0, 0),
(27, 'AD', 'I', '2013-AUX', '2013-02-04', '2013-07-12', '2013-01-14', '2013-12-13', 'SEMESTRAL AUXILIARURA', 'I', 0, '', 0, 0),
(28, 'AD', NULL, '2013-AUX', '2013-02-04', '2013-12-31', '2013-01-14', '2013-12-01', 'ANUALES AUXILIATURA', 'I', 0, '', 0, 0),
(29, 'INV', NULL, '2013-INVESTIGACION', '2013-02-04', '2013-12-31', '2013-01-23', '2013-12-11', 'DOCENTES INVESTIGADORES', 'I', 0, '', 0, 0),
(30, 'V', NULL, '2012-VERANO', '2012-12-18', '2013-03-14', '2013-01-24', '2014-02-05', 'VERANO ANUALES', 'I', 0, '', 0, 0),
(31, 'V', 'III', '2012-VERANO', '2013-01-02', '2013-02-28', '2013-01-28', '2013-12-16', 'VERANO SEMESTRALES', 'I', 0, '', 0, 0),
(32, 'V', 'IV', '2012-VERANO', '2013-01-14', '2013-02-18', '2013-01-28', '2013-02-22', 'VERANO SEMESTRAL SEGUNDA GESTION ACADEMICA', 'I', 0, '', 0, 0),
(33, 'R', 'II', '2013', '2013-07-29', '2013-12-31', '2013-07-29', '2015-04-14', 'SEMESTRAL', 'I', 0, '', 0, 0),
(34, 'PRE', 'II', '2013 PRE-UNIV.', '2013-05-05', '2013-07-30', '2013-06-25', '2013-12-10', 'PREUNIVERSITARIOS 2013', 'I', 0, '', 0, 0),
(35, 'AD', 'II', '2013-AUX', '2013-07-29', '2013-12-31', '2013-07-20', '2013-12-01', 'AUXILIARES DE DOCENCIA', 'I', 0, '', 0, 0),
(36, 'I', 'III', '2013-INVIERNO', '2013-07-15', '2013-08-30', '2013-07-12', '2013-08-31', 'INVIERNO semestrales', 'I', 0, '', 0, 0),
(37, 'PRE', NULL, '2014- PRE-UNIV.', '2013-10-01', '2014-04-21', '2013-10-14', '2015-07-30', NULL, 'I', 0, '', 0, 0),
(38, 'PRE', 'I', '2014- PRE-UNIV.', '2013-10-01', '2014-03-02', '2013-10-25', '2014-12-04', 'PREUNIVERSITARIOS 2014', 'I', 0, '', 0, 0),
(39, 'R', 'I', '2014', '2014-01-13', '2014-07-12', '2014-01-13', '2016-03-18', 'SEMESTRAL', 'I', 0, '', 0, 0),
(40, 'R', NULL, '2014', '2014-01-13', '2014-12-31', '2014-01-13', '2014-12-16', 'ANUAL', 'I', 0, '', 0, 0),
(41, 'V', 'III', '2013-VERANO', '2014-01-02', '2014-02-08', '2014-01-02', '2014-11-06', NULL, 'I', 0, '', 0, 0),
(42, 'V', NULL, '2013-VERANO', '2014-01-02', '2014-03-01', '2014-01-13', '2014-06-06', 'VERANO', 'I', 0, '', 0, 0),
(43, 'INV', NULL, '2014-INVESTIGACION', '2014-01-13', '2014-12-31', '2014-02-01', '2014-12-18', 'INVESTIGACION', 'I', 0, '', 0, 0),
(44, 'AD', 'I', '2014-AUX', '2014-01-13', '2014-07-12', '2014-02-03', '2014-11-28', 'AUXILIATURA', 'I', 0, '', 0, 0),
(45, 'AD', NULL, '2014-AUX', '2014-01-13', '2014-12-31', '2014-01-13', '2014-12-19', 'ANUAL', 'I', 0, '', 0, 0),
(46, 'PRE', 'II', '2014 - PRE-UNIV.', '2014-03-28', '2014-10-20', '2014-03-28', '2015-01-20', 'PREUNIVERSITARIO', 'I', 0, '', 0, 0),
(47, 'R', 'II', '2014', '2014-07-14', '2014-12-31', '2014-07-14', '2014-12-16', 'SEMESTRAL', 'I', 0, '', 0, 0),
(49, 'AD', 'II', '2014-AUX', '2014-07-14', '2014-12-31', '2014-07-14', '2014-11-27', NULL, 'I', 0, '', 0, 0),
(50, 'PRE', 'I', '2015-PRE-UNIV.', '2014-08-03', '2015-02-25', '2014-08-03', '2015-09-10', 'INSTRUCTIVO VCR/INST/ 043/2014', 'I', 0, '', 0, 0),
(51, 'PRE', NULL, '2015-PRE-UNIV.', '2014-08-03', '2015-02-25', '2014-08-03', '2015-02-20', 'INSTRUCTIVO VCR/INST/043/2014', 'I', 0, '', 0, 0),
(52, 'I', 'III', '2014-INVIERNO', '2014-07-11', '2014-08-08', '2014-07-14', '2014-10-13', NULL, 'I', 0, '', 0, 0),
(53, 'R', 'I', '2015', '2015-01-12', '2015-07-10', '2015-01-12', '2016-05-04', 'SEMESTRAL', 'I', 0, '', 0, 0),
(54, 'R', NULL, '2015', '2015-01-12', '2015-12-31', '2015-01-12', '2016-02-25', 'ANUAL', 'I', 0, '', 0, 0),
(55, 'V', 'III', '2014-VERANO', '2014-12-22', '2015-01-31', '2015-01-01', '2015-07-01', 'VERANO', 'I', 0, '', 0, 0),
(56, 'V', NULL, '2014-VERANO', '2014-12-08', '2015-01-31', '2015-01-01', '2015-06-21', 'VERANO', 'I', 0, '', 0, 0),
(57, 'INV', NULL, '2015 INVESTIGACION', '2015-01-12', '2015-12-31', '2015-01-12', '2015-12-02', 'INVESTIGACION', 'I', 0, '', 0, 0),
(58, 'AD', 'I', '2015-AUX', '2015-01-12', '2015-07-10', '2015-01-12', '2015-07-02', 'UPEA/VCR/INS Nº 06/2015 -', 'I', 0, '', 0, 0),
(59, 'AD', NULL, '2015-AUX', '2015-01-12', '2015-12-31', '2015-01-12', '2015-11-27', 'UPEA/VCR/INS Nº 06/2015', 'I', 0, '', 0, 0),
(60, 'PRE', 'II', '2015 PREUNIVERSITARIO', '2015-04-01', '2015-07-30', '2015-03-30', '2016-02-12', 'CALENDARIO ACADEMICO HCU 214/2014', 'I', 0, '', 0, 0),
(61, 'R', 'II', '2015', '2015-07-13', '2015-12-31', '2015-07-13', '2016-05-04', 'SEMESTRAL', 'I', 0, '', 0, 0),
(62, 'AD', 'II', '2015-AUX', '2015-07-13', '2015-12-31', '2015-07-13', '2015-12-01', 'INSTRUCTIVO VCR*/INST/Nº 29/2015', 'I', 0, '', 0, 0),
(63, 'PRE', 'I', '2016 PRE-UNIV', '2015-09-01', '2016-02-02', '2015-09-09', '2015-12-13', 'CALENDARIO ACADEMICO HCU 214/2014-VCR/INS/055/2015 INS/VCR/047/2015', 'I', 0, '', 0, 0),
(64, 'PRE', NULL, '2016 PRE-UNIV', '2015-09-15', '2016-01-31', '2015-09-09', '2016-04-13', 'CALENDARIO ACADEMICO HCU 214/2014-VCR/INS/055/2015', 'I', 0, '', 0, 0),
(65, 'V', 'III', '2015-VERANO', '2015-12-01', '2016-02-19', '2016-01-11', '2016-08-26', 'RES.HCU Nº 214/2014 INSTRUCTIVO VCR Nº 081/2015', 'I', 0, 'I', 0, 0),
(66, 'V', NULL, '2015-VERANO', '2015-12-01', '2016-02-29', '2016-01-11', '2016-08-26', 'RES.HCU Nº 214/2014 INSTRUCTIVO VCR Nº 081/2015', 'I', 0, 'I', 0, 0),
(67, 'R', 'I', '2016', '2016-01-11', '2016-07-06', '2016-01-11', '2016-07-11', 'RESOLUCION HCU Nº143/2015 INSTRUCTIVO VCR Nº 001/2016', 'I', 0, 'I', 0, 0),
(68, 'R', NULL, '2016', '2016-01-18', '2016-12-31', '2016-01-11', '2016-12-07', 'CALENDARIO ACADÉMICO HCU 143/2015-VCR/INS/001/2016', 'I', 0, 'I', 0, 0),
(69, 'AD', 'I', '2016-AUX', '2016-01-11', '2016-07-06', '2016-01-12', '2016-10-25', 'CALENDARIO ACADÉMICO HCU Nº143/2015 INSTRUCTIVO VCR/INST/002/2016', 'I', 0, '', 0, 0),
(70, 'AD', NULL, '2016-AUX', '2016-01-18', '2016-12-31', '2016-01-12', '2016-11-23', 'CALENDARIO ACADEMICO HCU Nº143/2015 INSTRUCTIVO VCR/INST/002/2016', 'I', 0, '', 0, 0),
(71, 'INV', NULL, '2016 INVESTIGACION', '2016-01-18', '2016-12-31', '2016-01-18', '2016-11-25', NULL, 'I', 0, '', 0, 0),
(72, 'PRE', 'II', '2016-PRE-UNIV', '2016-03-28', '2016-07-09', '2016-03-28', '2016-11-29', NULL, 'I', 0, '', 0, 0),
(73, 'R', 'II', '2016', '2016-07-07', '2016-12-31', '2016-07-07', '2016-11-24', 'RESOLUCION HCU Nº143/2015 INSTRUCTIVO VCR Nº 001/2016', 'I', 0, 'I', 0, 0),
(74, 'AD', 'II', '2016-AUX', '2016-07-07', '2016-12-31', '2016-07-07', '2016-11-15', 'CALENDARIO ACADÉMICO HCU Nº143/2015 INSTRUCTIVO VCR/INST/021/2016', 'I', 0, '', 0, 0),
(75, 'I', 'III', '2016-INVIERNO', '2016-07-07', '2016-07-30', '2016-07-07', '2016-08-25', 'HRT VCR 3264/2016', 'I', 0, '', 0, 0),
(76, 'PRE', 'I', '2017-PRE-UNIV', '2016-09-12', '2017-02-28', '2016-09-12', '2017-02-22', 'CALENDARIO ACADÉMICO HCU 143/2015-VCR/INS/043/2016', 'I', 0, '', 0, 0),
(77, 'PRE', NULL, '2017-PRE-UNIV', '2016-09-12', '2017-01-31', '2016-09-12', '2017-01-19', 'CALENDARIO ACADÉMICO HCU 143/2015-VCR/INS/043/2016', 'I', 0, '', 0, 0),
(78, 'R', 'I', '2017', '2017-01-16', '2017-06-30', '2016-12-09', '2017-10-25', 'CALENDARIO ACADÉMICO HCU 165/2016-VCR/INS/063/2016', 'I', 0, 'I', 0, 0),
(79, 'R', NULL, '2017', '2017-01-16', '2017-12-31', '2016-12-09', '2017-10-24', 'CALENDARIO ACADÉMICO HCU 165/2016-VCR/INS/063/2016', 'I', 0, 'I', 0, 0),
(80, 'V', NULL, '2016-VERANO', '2016-12-01', '2017-02-11', '2016-12-01', '2017-01-20', 'RES.HCU Nº 215/2016 INSTRUCTIVO VCR Nº 045/2016', 'I', 0, 'I', 0, 0),
(81, 'V', 'III', '2016-VERANO', '2016-12-14', '2017-01-31', '2016-12-16', '2017-03-10', 'RES.HCU Nº 215/2016 INSTRUCTIVO VCR Nº 045/2016', 'I', 0, 'I', 0, 0),
(82, 'AD', 'I', '2017-AUX', '2017-01-16', '2017-06-30', '2017-01-16', '2017-06-16', 'CALENDARIO ACADÉMICO HCU 165/2016-VCR/INS/049/2016', 'I', 0, '', 0, 0),
(83, 'INV', NULL, '2017 INVESTIGACION', '2017-01-16', '2017-12-31', '2017-01-16', '2017-09-15', 'CALENDARIO ACADÉMICO HCU 165/2016', 'I', 0, '', 0, 0),
(84, 'AD', NULL, '2017-AUX', '2017-01-16', '2017-12-31', '2017-01-16', '2017-09-15', 'CALENDARIO ACADÉMICO HCU 165/2016-VCR/INS/049/2016', 'I', 0, '', 0, 0),
(85, 'PRE', 'II', '2017-PRE-UNIV', '2017-03-20', '2017-07-03', '2017-04-17', '2017-11-24', 'CALENDARIO ACADÉMICO RESOL HCU N° 165/2016 - INSTRUCTIVO VCR/INST/13/2017 (13/ABR/2017)', 'I', 0, '', 0, 0),
(86, 'R', 'II', '2017', '2017-07-03', '2017-12-31', '2017-06-27', '2017-12-26', 'CALENDARIO ACADÉMICO RESOL. HCU 165/2016-VCR/INS/000/2017', 'I', 0, 'I', 0, 0),
(87, 'AD', 'II', '2017-AUX', '2017-07-03', '2017-12-31', '2017-06-27', '2017-10-24', 'CALENDARIO ACADÉMICO RESOL. HCU 165/2016-VCR/INS/000/2016', 'I', 0, '', 0, 0),
(88, 'PRE', 'I', '2018-PRE-UNIV', '2017-09-04', '2017-12-31', '2017-09-28', '2017-12-12', 'CALENDARIO ACADÉMICO APROBADO CON RESOL. HCU 165/2016', 'I', 0, '', 0, 0),
(89, 'PRE', NULL, '2018-PRE-UNIV', '2017-09-04', '2018-02-16', '2017-09-28', '2018-02-16', 'CALENDARIO ACADÉMICO APROBADO CON RESOL. HCU 165/2016', 'I', 0, '', 0, 0),
(90, 'V', 'III', '2017-VERANO', '2018-01-02', '2018-01-31', '2017-12-18', '2018-01-25', 'INSTRUCTIVO DE VICERRECTORADO N° 054/2017 DE FECHA 13/12/2017.', 'I', 0, 'I', 0, 0),
(91, 'V', NULL, '2017-VERANO', '2018-01-02', '2018-02-28', '2017-12-15', '2018-01-25', 'INSTRUCTIVO DE VICERRECTORADO N° 054/2017 DE FECHA 13/12/2017.', 'I', 0, 'I', 0, 0),
(92, 'R', NULL, '2018', '2018-01-02', '2018-12-31', '2018-01-15', '2018-05-17', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2018 - RESOL. H.C.U. N° 010/2018', 'I', 0, 'I', 0, 0),
(93, 'R', 'I', '2018', '2018-01-02', '2018-06-30', '2018-01-15', '2018-05-17', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2018 - RESOL. H.C.U. N° 010/2018', 'I', 0, 'I', 0, 0),
(94, 'AD', 'I', '2018-AUX', '2018-02-05', '2018-06-30', '2018-02-05', '2018-05-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, '', 0, 0),
(95, 'AD', NULL, '2018-AUX', '2018-02-05', '2018-12-31', '2018-02-05', '2018-05-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, '', 0, 0),
(96, 'PRE', 'II', '2018-PRE-UNIV', '2018-04-16', '2018-07-31', '2018-04-09', '2018-05-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, '', 0, 0),
(97, 'INV', NULL, '2018 INVESTIGACIÓN', '2018-05-11', '2018-12-31', '2018-05-11', '2018-09-19', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, '', 0, 0),
(98, 'R', 'II', '2018', '2018-07-02', '2018-12-31', '2018-07-19', '2018-09-19', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, 'I', 0, 0),
(99, 'AD', 'II', '2018-AUX', '2018-07-02', '2018-12-31', '2018-07-19', '2018-09-19', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017', 'I', 0, '', 0, 0),
(100, 'V', 'III', '2010', '2010-12-31', '2011-01-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(101, 'R', 'I', '2001', '2001-02-01', '2001-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(102, 'R', 'II', '2001', '2001-07-01', '2001-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(103, 'R', 'I', '2002', '2002-02-01', '2002-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(104, 'R', 'II', '2002', '2002-07-01', '2002-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(105, 'R', 'I', '2003', '2003-02-01', '2003-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(106, 'R', 'II', '2003', '2003-07-01', '2003-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(107, 'R', 'I', '2004', '2004-02-01', '2004-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(108, 'R', 'II', '2004', '2004-07-01', '2004-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(109, 'R', 'I', '2005', '2005-02-01', '2005-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(110, 'R', 'II', '2005', '2005-07-01', '2005-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(111, 'R', 'I', '2006', '2006-02-01', '2006-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(112, 'R', 'II', '2006', '2006-07-01', '2006-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(113, 'R', 'I', '2007', '2007-02-01', '2007-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(114, 'R', 'II', '2007', '2007-07-01', '2007-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(115, 'R', 'I', '2008', '2008-02-01', '2008-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(116, 'R', 'II', '2008', '2008-07-01', '2008-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(117, 'R', 'I', '2009', '2009-02-01', '2009-06-30', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(118, 'V', 'III', '2009', '2009-12-12', '2010-02-19', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(119, 'PRE', NULL, '2019-PRE-UNIV', '2018-09-24', '2018-12-21', '2018-09-13', '2018-10-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017 - INST. VCR N° 26/2018', 'I', 0, '', 0, 0),
(120, 'PRE', 'I', '2019-PRE-UNIV', '2018-09-24', '2018-12-21', '2018-09-13', '2018-10-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017 - INST. VCR N° 26/2018', 'I', 0, '', 0, 0),
(121, 'V', 'III', '2003', '2003-12-04', '2003-12-04', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(129, 'V', NULL, '2018-VERANO', '2019-01-02', '2019-02-28', '2018-11-28', '2019-01-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017 - INST. VCR N° 26/2018 - INST. VCR N° 38/2018', 'I', 0, 'I', 0, 0),
(130, 'V', 'III', '2018-VERANO', '2019-01-02', '2019-01-31', '2018-11-28', '2019-01-17', 'CALENDARIO ACADÉMICO HCU 010/2018 - VCR 42/2017 - INST. VCR N° 26/2018 - INST. VCR N° 38/2018', 'I', 0, 'I', 0, 0),
(131, 'R', NULL, '2019', '2019-01-02', '2019-12-31', '2019-01-14', '2019-04-15', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018', 'I', 0, 'A', 0, 0),
(132, 'R', 'I', '2019', '2019-01-02', '2019-06-30', '2019-01-14', '2019-04-10', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018', 'I', 0, 'A', 0, 0),
(133, 'AD', NULL, '2019-AUX', '2019-02-01', '2019-12-31', '2019-02-01', '2019-04-15', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018', 'I', 0, '', 0, 0),
(134, 'AD', 'I', '2019-AUX', '2019-02-01', '2019-06-30', '2019-02-01', '2019-04-10', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018', 'I', 0, '', 0, 0),
(135, 'INV', NULL, '2019 INVESTIGACIÓN', '2019-02-01', '2019-12-31', '2019-02-14', '2019-04-15', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018', 'I', 0, '', 0, 0),
(136, 'PRE', 'II', '2019-PRE-UNIV', '2019-04-01', '2019-06-28', '2019-04-01', '2019-05-16', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018 Y INSTRUCTIVO VCR/INST/014/2019', 'I', 0, '', 0, 0),
(137, 'V', 'III', '2008', '2008-11-01', '2008-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(138, 'R', NULL, '2002', '2002-01-01', '2002-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(139, 'R', NULL, '2003', '2003-01-01', '2003-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(140, 'R', NULL, '2005', '2005-01-01', '2005-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(141, 'R', NULL, '2006', '2006-01-01', '2006-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(142, 'R', NULL, '2007', '2007-01-01', '2007-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(143, 'R', NULL, '2008', '2008-01-01', '2008-12-12', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(144, 'V', NULL, '2006', '2006-12-24', '2006-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(145, 'V', NULL, '2008-VERANO', '2008-12-01', '2008-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(146, 'V', NULL, '2009', '2009-12-01', '2009-12-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(147, 'V', NULL, '2010-VERANO', '2010-01-01', '2010-01-31', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(148, 'AD', 'II', '2019-AUX', '2019-07-01', '2019-12-31', '2019-07-01', '2019-08-15', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018 E INSTRUCTIVO VICERRECTORAL VCR/INST/028/2019', 'I', 0, '', 0, 0),
(149, 'R', 'II', '2019', '2019-07-01', '2019-12-31', '2019-07-01', '2019-08-15', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018 E INSTRUCTIVO VICERRECTORAL VCR/INST/027/2019', 'I', 0, '', 0, 0),
(150, 'PRE', NULL, '2020-PRE-UNIV', '2019-09-23', '2020-01-31', '2019-09-09', '2020-01-16', 'PROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018 Y INSTRUCTIVO VCR/INST/044/2019', 'I', 0, '', 0, 0),
(151, 'PRE', 'I', '2020-PRE-UNIV', '2019-09-23', '2019-12-23', '2019-09-09', '2020-01-16', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2019 - RESOL. HCU N° 204/2018 Y INSTRUCTIVO VCR/INST/044/2019', 'I', 0, '', 0, 0),
(153, 'R', NULL, '2001', '2001-11-13', '2001-11-20', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(154, 'V', NULL, '2019-VERANO', '2020-01-02', '2020-02-28', '2020-01-13', '2020-01-16', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 204/2019', 'I', 0, '', 0, 0),
(155, 'V', 'III', '2019-VERANO', '2020-01-02', '2020-01-31', '2020-01-13', '2020-01-16', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 204/2019', 'I', 0, '', 0, 0),
(156, 'R', NULL, '2020', '2020-01-02', '2020-12-31', '2020-01-13', '2020-05-19', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'I', 0, '', 1, 0),
(157, 'R', 'I', '2020', '2020-01-02', '2020-07-10', '2020-01-13', '2020-05-19', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'I', 0, '', 0, 0),
(158, 'AD', NULL, '2020-AUX', '2020-02-03', '2020-12-31', '2020-02-03', '2020-05-19', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'I', 0, '', 0, 0),
(159, 'AD', 'I', '2020-AUX', '2020-02-03', '2020-07-10', '2020-02-03', '2020-05-19', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'I', 0, '', 0, 0),
(160, 'INV', NULL, '2020 INVESTIGACIÓN', '2020-02-13', '2020-12-31', '2020-02-10', '2020-05-19', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019 - INSTRUCTIVO DICYT-INST._0001/2020', 'I', 0, '', 0, 0),
(161, 'PRE', 'II', '2020-PRE-UNIV', '2020-06-15', '2020-07-28', '2020-07-01', '2020-07-20', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'I', 0, '', 0, 0),
(162, 'R', 'II', '2020', '2020-07-13', '2020-12-31', '2020-07-20', '2020-09-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 183/2019', 'I', 0, '', 1, 0),
(163, 'AD', 'II', '2020-AUX', '2020-08-03', '2020-12-31', '2020-08-03', '2020-09-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 183/2019', 'I', 0, '', 0, 0),
(164, 'PRE', NULL, '2021-PRE-UNIV', '2020-10-05', '2021-01-29', '2020-10-05', '2020-12-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'A', 0, '', 0, 1),
(165, 'PRE', 'I', '2021-PRE-UNIV', '2020-10-05', '2021-01-29', '2020-10-05', '2020-12-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 283/2019', 'A', 0, '', 0, 0),
(166, 'V', NULL, '2007', '2007-11-17', '2007-11-09', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(167, 'V', NULL, '2020-VERANO', '2021-01-04', '2021-02-26', '2021-01-11', '2021-01-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 183/2019', 'I', 0, '', 0, 0),
(168, 'V', 'III', '2020-VERANO', '2021-01-04', '2021-01-29', '2021-01-11', '2021-01-18', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2020 - RESOL. HCU N° 183/2019', 'I', 0, '', 0, 0),
(169, 'R', NULL, '2021', '2021-01-18', '2021-12-31', '2021-01-18', '2021-04-27', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° NNN/2020', 'A', 1, '', 0, 0),
(170, 'R', 'I', '2021', '2021-01-18', '2021-07-09', '2021-01-18', '2021-04-22', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° NNN/2020', 'A', 1, '', 0, 0),
(171, 'AD', NULL, '2021-AUX', '2021-02-12', '2021-12-31', '2021-02-08', '2021-04-28', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° 244/2020', 'A', 0, '', 0, 0),
(172, 'AD', 'I', '2021-AUX', '2021-02-12', '2021-07-09', '2021-02-08', '2021-04-22', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° 244/2020', 'A', 0, '', 0, 0),
(173, 'V', 'III', '2005', '2005-02-01', '2005-02-08', NULL, NULL, NULL, 'I', 0, '', 0, 0),
(174, 'INV', NULL, '2021 INVESTIGACIÓN', '2021-03-01', '2021-12-31', '2021-03-01', '2021-04-22', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° 244/2020 - INSTRUCTIVO DICYT-INST._001/2021', 'A', 1, '', 0, 0),
(175, 'PRE', 'II', '2021-PRE-UNIV', '2021-05-04', '2021-06-30', '2021-05-04', '2021-05-14', 'APROBACIÓN DE CALENDARIO ACADÉMICO 2021 - RESOL. HCU N° 244/2020', 'A', 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_caracteristica_vivienda`
--

CREATE TABLE IF NOT EXISTS `mae_caracteristica_vivienda` (
  `id_caracteristica_vivienda` int(11) NOT NULL COMMENT 'Código de característica vivienda',
  `nombre_caracteristica_vivienda` varchar(100) DEFAULT NULL COMMENT 'Nombre de la característica de vivienda'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_caracteristica_vivienda`
--

INSERT INTO `mae_caracteristica_vivienda` (`id_caracteristica_vivienda`, `nombre_caracteristica_vivienda`) VALUES
(8, 'Casa'),
(9, 'Departamento'),
(10, 'Habitacion'),
(11, 'Residencial'),
(12, 'Internado'),
(13, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_departamento`
--

CREATE TABLE IF NOT EXISTS `mae_departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(45) DEFAULT NULL,
  `sigla_departamento` varchar(45) DEFAULT NULL,
  `estado_departamento` char(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_departamento`
--

INSERT INTO `mae_departamento` (`id_departamento`, `nombre_departamento`, `sigla_departamento`, `estado_departamento`) VALUES
(1, 'LA PAZ', 'LP', 'ACTIVO'),
(2, 'ORURO', 'OR', 'ACTIVO'),
(3, 'COCHABAMBA', 'CBBA', 'ACTIVO'),
(4, 'CHUQUISACA', 'CH', 'ACTIVO'),
(5, 'PANDO', 'PND', 'ACTIVO'),
(6, 'SANTA CRUZ', 'SC', 'ACTIVO'),
(7, 'POTOSÍ', 'PT', 'ACTIVO'),
(8, 'BENI', 'BN', 'ACTIVO'),
(9, 'TARIJA', 'TJ', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_departamento_provincia`
--

CREATE TABLE IF NOT EXISTS `mae_departamento_provincia` (
  `id_departamento_provincia` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `estado_departamento_provincia` char(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_departamento_provincia`
--

INSERT INTO `mae_departamento_provincia` (`id_departamento_provincia`, `id_pais`, `id_departamento`, `id_provincia`, `estado_departamento_provincia`) VALUES
(1, 1, 1, 1, 'ACTIVO'),
(2, 1, 1, 2, 'ACTIVO'),
(3, 1, 1, 3, 'ACTIVO'),
(4, 1, 1, 4, 'ACTIVO'),
(5, 1, 1, 5, 'ACTIVO'),
(6, 1, 1, 6, 'ACTIVO'),
(7, 1, 1, 7, 'ACTIVO'),
(8, 1, 1, 8, 'ACTIVO'),
(9, 1, 1, 9, 'ACTIVO'),
(10, 1, 1, 10, 'ACTIVO'),
(11, 1, 1, 11, 'ACTIVO'),
(12, 1, 1, 12, 'ACTIVO'),
(13, 1, 1, 13, 'ACTIVO'),
(14, 1, 1, 14, 'ACTIVO'),
(15, 1, 1, 15, 'ACTIVO'),
(16, 1, 1, 16, 'ACTIVO'),
(17, 1, 1, 17, 'ACTIVO'),
(18, 1, 1, 18, 'ACTIVO'),
(19, 1, 1, 19, 'ACTIVO'),
(20, 1, 1, 20, 'ACTIVO'),
(21, 1, 2, 21, 'ACTIVO'),
(22, 1, 2, 22, 'ACTIVO'),
(23, 1, 2, 23, 'ACTIVO'),
(24, 1, 2, 24, 'ACTIVO'),
(25, 1, 2, 25, 'ACTIVO'),
(26, 1, 2, 26, 'ACTIVO'),
(27, 1, 2, 27, 'ACTIVO'),
(28, 1, 2, 28, 'ACTIVO'),
(29, 1, 2, 29, 'ACTIVO'),
(30, 1, 2, 30, 'ACTIVO'),
(31, 1, 2, 31, 'ACTIVO'),
(32, 1, 2, 32, 'ACTIVO'),
(33, 1, 2, 33, 'ACTIVO'),
(34, 1, 2, 34, 'ACTIVO'),
(35, 1, 2, 35, 'ACTIVO'),
(36, 1, 2, 36, 'ACTIVO'),
(37, 1, 3, 37, 'ACTIVO'),
(38, 1, 3, 38, 'ACTIVO'),
(39, 1, 3, 39, 'ACTIVO'),
(40, 1, 3, 40, 'ACTIVO'),
(41, 1, 3, 41, 'ACTIVO'),
(42, 1, 3, 42, 'ACTIVO'),
(43, 1, 3, 43, 'ACTIVO'),
(44, 1, 3, 44, 'ACTIVO'),
(45, 1, 3, 45, 'ACTIVO'),
(46, 1, 3, 46, 'ACTIVO'),
(47, 1, 3, 47, 'ACTIVO'),
(48, 1, 3, 48, 'ACTIVO'),
(49, 1, 3, 49, 'ACTIVO'),
(50, 1, 3, 50, 'ACTIVO'),
(51, 1, 3, 51, 'ACTIVO'),
(52, 1, 3, 52, 'ACTIVO'),
(53, 1, 4, 53, 'ACTIVO'),
(54, 1, 4, 54, 'ACTIVO'),
(55, 1, 4, 55, 'ACTIVO'),
(56, 1, 4, 56, 'ACTIVO'),
(57, 1, 4, 57, 'ACTIVO'),
(58, 1, 4, 58, 'ACTIVO'),
(59, 1, 4, 59, 'ACTIVO'),
(60, 1, 4, 60, 'ACTIVO'),
(61, 1, 4, 61, 'ACTIVO'),
(62, 1, 4, 62, 'ACTIVO'),
(63, 1, 5, 63, 'ACTIVO'),
(64, 1, 5, 64, 'ACTIVO'),
(65, 1, 5, 65, 'ACTIVO'),
(66, 1, 5, 66, 'ACTIVO'),
(67, 1, 5, 67, 'ACTIVO'),
(68, 1, 6, 68, 'ACTIVO'),
(69, 1, 6, 69, 'ACTIVO'),
(70, 1, 6, 70, 'ACTIVO'),
(71, 1, 6, 71, 'ACTIVO'),
(72, 1, 6, 72, 'ACTIVO'),
(73, 1, 6, 73, 'ACTIVO'),
(74, 1, 6, 74, 'ACTIVO'),
(75, 1, 6, 75, 'ACTIVO'),
(76, 1, 6, 76, 'ACTIVO'),
(77, 1, 6, 77, 'ACTIVO'),
(78, 1, 6, 78, 'ACTIVO'),
(79, 1, 6, 79, 'ACTIVO'),
(80, 1, 6, 80, 'ACTIVO'),
(81, 1, 6, 81, 'ACTIVO'),
(82, 1, 6, 82, 'ACTIVO'),
(83, 1, 7, 83, 'ACTIVO'),
(84, 1, 7, 84, 'ACTIVO'),
(85, 1, 7, 85, 'ACTIVO'),
(86, 1, 7, 86, 'ACTIVO'),
(87, 1, 7, 87, 'ACTIVO'),
(88, 1, 7, 88, 'ACTIVO'),
(89, 1, 7, 89, 'ACTIVO'),
(90, 1, 7, 90, 'ACTIVO'),
(91, 1, 7, 91, 'ACTIVO'),
(92, 1, 7, 92, 'ACTIVO'),
(93, 1, 7, 93, 'ACTIVO'),
(94, 1, 7, 94, 'ACTIVO'),
(95, 1, 7, 95, 'ACTIVO'),
(96, 1, 7, 96, 'ACTIVO'),
(97, 1, 7, 97, 'ACTIVO'),
(98, 1, 7, 98, 'ACTIVO'),
(99, 1, 8, 99, 'ACTIVO'),
(100, 1, 8, 100, 'ACTIVO'),
(101, 1, 8, 101, 'ACTIVO'),
(102, 1, 8, 102, 'ACTIVO'),
(103, 1, 8, 103, 'ACTIVO'),
(104, 1, 8, 104, 'ACTIVO'),
(105, 1, 8, 105, 'ACTIVO'),
(106, 1, 8, 106, 'ACTIVO'),
(107, 1, 9, 107, 'ACTIVO'),
(108, 1, 9, 108, 'ACTIVO'),
(109, 1, 9, 109, 'ACTIVO'),
(110, 1, 9, 110, 'ACTIVO'),
(111, 1, 9, 111, 'ACTIVO'),
(112, 1, 9, 112, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_municipio`
--

CREATE TABLE IF NOT EXISTS `mae_municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre_municipio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_municipio` char(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mae_municipio`
--

INSERT INTO `mae_municipio` (`id_municipio`, `nombre_municipio`, `estado_municipio`) VALUES
(1, 'Acasio', 'ACTIVO'),
(2, 'Achacachi', 'ACTIVO'),
(3, 'Achocalla', 'ACTIVO'),
(4, 'Aiquile', 'ACTIVO'),
(5, 'Alalay', 'ACTIVO'),
(6, 'Alto Beni', 'ACTIVO'),
(7, 'Ancoraimes', 'ACTIVO'),
(8, 'Andamarca', 'ACTIVO'),
(9, 'Antequera', 'ACTIVO'),
(10, 'Anzaldo', 'ACTIVO'),
(11, 'Apolo', 'ACTIVO'),
(12, 'Arampampa', 'ACTIVO'),
(13, 'Arani', 'ACTIVO'),
(14, 'Arbieto', 'ACTIVO'),
(15, 'Arque', 'ACTIVO'),
(16, 'Ascención de Guarayos', 'ACTIVO'),
(17, 'Atocha', 'ACTIVO'),
(18, 'Aucapata', 'ACTIVO'),
(19, 'Ayata', 'ACTIVO'),
(20, 'Ayo Ayo', 'ACTIVO'),
(21, 'Batallas', 'ACTIVO'),
(22, 'Baures', 'ACTIVO'),
(23, 'Belén de Andamarca', 'ACTIVO'),
(24, 'Belén de Urmiri', 'ACTIVO'),
(25, 'Bella Flor', 'ACTIVO'),
(26, 'Bermejo', 'ACTIVO'),
(27, 'Betanzos', 'ACTIVO'),
(28, 'Blanca Flor (San Lorenzo)', 'ACTIVO'),
(29, 'Bolívar', 'ACTIVO'),
(30, 'Bolpebra', 'ACTIVO'),
(31, 'Boyuibe', 'ACTIVO'),
(32, 'Buena Vista', 'ACTIVO'),
(33, 'Cabezas', 'ACTIVO'),
(34, 'Cairoma', 'ACTIVO'),
(35, 'Caiza "D"', 'ACTIVO'),
(36, 'Cajuata', 'ACTIVO'),
(37, 'Calacoto', 'ACTIVO'),
(38, 'Calamarca', 'ACTIVO'),
(39, 'Camargo', 'ACTIVO'),
(40, 'Camataqui (Villa Abecia)', 'ACTIVO'),
(41, 'Camiri', 'ACTIVO'),
(42, 'Capinota', 'ACTIVO'),
(43, 'Caquiaviri', 'ACTIVO'),
(44, 'Caracollo', 'ACTIVO'),
(45, 'Caranavi', 'ACTIVO'),
(46, 'Carangas', 'ACTIVO'),
(47, 'Caraparí', 'ACTIVO'),
(48, 'Caripuyo', 'ACTIVO'),
(49, 'Carmen Rivero Torres', 'ACTIVO'),
(50, 'Catacora', 'ACTIVO'),
(51, 'Chacarilla', 'ACTIVO'),
(52, 'Challapata', 'ACTIVO'),
(53, 'Chaquí', 'ACTIVO'),
(54, 'Charagua', 'ACTIVO'),
(55, 'Charaña', 'ACTIVO'),
(56, 'Chayanta', 'ACTIVO'),
(57, 'Chimoré', 'ACTIVO'),
(58, 'Chipaya', 'ACTIVO'),
(59, 'Choquecota', 'ACTIVO'),
(60, 'Chua Cocani', 'ACTIVO'),
(61, 'Chulumani', 'ACTIVO'),
(62, 'Chuma', 'ACTIVO'),
(63, 'Chuquihuta Ayllu Jucumani', 'ACTIVO'),
(64, 'Ckochas', 'ACTIVO'),
(65, 'Cliza', 'ACTIVO'),
(66, 'Cobija', 'ACTIVO'),
(67, 'Cocapata', 'ACTIVO'),
(68, 'Cochabamba', 'ACTIVO'),
(69, 'Coipasa', 'ACTIVO'),
(70, 'Colcapirhua', 'ACTIVO'),
(71, 'Colcha "K"', 'ACTIVO'),
(72, 'Collana', 'ACTIVO'),
(73, 'Colomi', 'ACTIVO'),
(74, 'Colpa Bélgica', 'ACTIVO'),
(75, 'Colquechaca', 'ACTIVO'),
(76, 'Colquencha', 'ACTIVO'),
(77, 'Colquiri', 'ACTIVO'),
(78, 'Comanche', 'ACTIVO'),
(79, 'Comarapa', 'ACTIVO'),
(80, 'Combaya', 'ACTIVO'),
(81, 'Concepción', 'ACTIVO'),
(82, 'Copacabana', 'ACTIVO'),
(83, 'Coripata', 'ACTIVO'),
(84, 'Coro Coro', 'ACTIVO'),
(85, 'Coroico', 'ACTIVO'),
(86, 'Corque', 'ACTIVO'),
(87, 'Cotagaita', 'ACTIVO'),
(88, 'Cotoca', 'ACTIVO'),
(89, 'Cruz de Machacamarca', 'ACTIVO'),
(90, 'Cuatro Cañadas', 'ACTIVO'),
(91, 'Cuchumuela (Villa Gualberto Villarroel)', 'ACTIVO'),
(92, 'Cuevo', 'ACTIVO'),
(93, 'Culpina', 'ACTIVO'),
(94, 'Curahuara de Carangas', 'ACTIVO'),
(95, 'Curva', 'ACTIVO'),
(96, 'Desaguadero', 'ACTIVO'),
(97, 'El Alto', 'ACTIVO'),
(98, 'El Choro', 'ACTIVO'),
(99, 'El Puente', 'ACTIVO'),
(100, 'El Sena', 'ACTIVO'),
(101, 'El Torno', 'ACTIVO'),
(102, 'El Trigal', 'ACTIVO'),
(103, 'El Villar', 'ACTIVO'),
(104, 'Entre Ríos', 'ACTIVO'),
(105, 'Entre Ríos (Bulo Bulo)', 'ACTIVO'),
(106, 'Escara', 'ACTIVO'),
(107, 'Escoma', 'ACTIVO'),
(108, 'Esmeralda', 'ACTIVO'),
(109, 'Eucaliptus', 'ACTIVO'),
(110, 'Exaltación', 'ACTIVO'),
(111, 'Filadelfia', 'ACTIVO'),
(112, 'Gral. Juan José Perez (Charazani)', 'ACTIVO'),
(113, 'Gral. Saavedra', 'ACTIVO'),
(114, 'Guanay', 'ACTIVO'),
(115, 'Guaqui', 'ACTIVO'),
(116, 'Guayaramerín', 'ACTIVO'),
(117, 'Gutiérrez', 'ACTIVO'),
(118, 'Huacaraje', 'ACTIVO'),
(119, 'Huacaya', 'ACTIVO'),
(120, 'Huachacalla', 'ACTIVO'),
(121, 'Huarina', 'ACTIVO'),
(122, 'Huatajata', 'ACTIVO'),
(123, 'Humaita (Ingavi)', 'ACTIVO'),
(124, 'Humanata', 'ACTIVO'),
(125, 'Ichoca', 'ACTIVO'),
(126, 'Icla', 'ACTIVO'),
(127, 'Incahuasi', 'ACTIVO'),
(128, 'Independencia', 'ACTIVO'),
(129, 'Inquisivi', 'ACTIVO'),
(130, 'Irupana', 'ACTIVO'),
(131, 'Ixiamas', 'ACTIVO'),
(132, 'Jesús de Machaca', 'ACTIVO'),
(133, 'La Asunta', 'ACTIVO'),
(134, 'La Guardia', 'ACTIVO'),
(135, 'La Paz', 'ACTIVO'),
(136, 'La Rivera', 'ACTIVO'),
(137, 'Lagunillas', 'ACTIVO'),
(138, 'Laja', 'ACTIVO'),
(139, 'Las Carreras', 'ACTIVO'),
(140, 'Licoma Pampa', 'ACTIVO'),
(141, 'Llallagua', 'ACTIVO'),
(142, 'Llica', 'ACTIVO'),
(143, 'Loreto', 'ACTIVO'),
(144, 'Luribay', 'ACTIVO'),
(145, 'Machacamarca', 'ACTIVO'),
(146, 'Macharetí', 'ACTIVO'),
(147, 'Magdalena', 'ACTIVO'),
(148, 'Mairana', 'ACTIVO'),
(149, 'Malla', 'ACTIVO'),
(150, 'Mapiri', 'ACTIVO'),
(151, 'Mecapaca', 'ACTIVO'),
(152, 'Mineros', 'ACTIVO'),
(153, 'Mizque', 'ACTIVO'),
(154, 'Mocomoco', 'ACTIVO'),
(155, 'Mojinete', 'ACTIVO'),
(156, 'Monteagudo', 'ACTIVO'),
(157, 'Montero', 'ACTIVO'),
(158, 'Moro Moro', 'ACTIVO'),
(159, 'Morochata', 'ACTIVO'),
(160, 'Nazacara de Pacajes', 'ACTIVO'),
(161, 'Nueva Esperanza', 'ACTIVO'),
(162, 'Ocurí', 'ACTIVO'),
(163, 'Okinawa', 'ACTIVO'),
(164, 'Omereque', 'ACTIVO'),
(165, 'Oruro', 'ACTIVO'),
(166, 'Padcaya', 'ACTIVO'),
(167, 'Padilla', 'ACTIVO'),
(168, 'Pailón', 'ACTIVO'),
(169, 'Palca', 'ACTIVO'),
(170, 'Palos Blancos', 'ACTIVO'),
(171, 'Pampa Aullagas', 'ACTIVO'),
(172, 'Pampa Grande', 'ACTIVO'),
(173, 'Papel Pampa', 'ACTIVO'),
(174, 'Pasorapa', 'ACTIVO'),
(175, 'Patacamaya', 'ACTIVO'),
(176, 'Pazña', 'ACTIVO'),
(177, 'Pelechuco', 'ACTIVO'),
(178, 'Pocoata', 'ACTIVO'),
(179, 'Pocona', 'ACTIVO'),
(180, 'Pojo', 'ACTIVO'),
(181, 'Porco', 'ACTIVO'),
(182, 'Poroma', 'ACTIVO'),
(183, 'Porongo (Ayacucho)', 'ACTIVO'),
(184, 'Portachuelo', 'ACTIVO'),
(185, 'Porvenir', 'ACTIVO'),
(186, 'Postrervalle', 'ACTIVO'),
(187, 'Potosí', 'ACTIVO'),
(188, 'Presto', 'ACTIVO'),
(189, 'Pucará', 'ACTIVO'),
(190, 'Pucarani', 'ACTIVO'),
(191, 'Puerto Acosta', 'ACTIVO'),
(192, 'Puerto Carabuco', 'ACTIVO'),
(193, 'Puerto Fernández Alonso', 'ACTIVO'),
(194, 'Puerto Gonzalo Moreno', 'ACTIVO'),
(195, 'Puerto Pérez', 'ACTIVO'),
(196, 'Puerto Quijarro', 'ACTIVO'),
(197, 'Puerto Rico', 'ACTIVO'),
(198, 'Puerto Siles', 'ACTIVO'),
(199, 'Puerto Suárez', 'ACTIVO'),
(200, 'Puerto Villarroel', 'ACTIVO'),
(201, 'Puna', 'ACTIVO'),
(202, 'Punata', 'ACTIVO'),
(203, 'Quiabaya', 'ACTIVO'),
(204, 'Quillacollo', 'ACTIVO'),
(205, 'Quime', 'ACTIVO'),
(206, 'Quirusillas', 'ACTIVO'),
(207, 'Ravelo', 'ACTIVO'),
(208, 'Reyes', 'ACTIVO'),
(209, 'Riberalta', 'ACTIVO'),
(210, 'Roboré', 'ACTIVO'),
(211, 'Rurrenabaque', 'ACTIVO'),
(212, 'Sabaya', 'ACTIVO'),
(213, 'Sacaba', 'ACTIVO'),
(214, 'Sacabamba', 'ACTIVO'),
(215, 'Sacaca', 'ACTIVO'),
(216, 'Saipina', 'ACTIVO'),
(217, 'Salinas de Garci Mendoza', 'ACTIVO'),
(218, 'Samaipata', 'ACTIVO'),
(219, 'San Agustín', 'ACTIVO'),
(220, 'San Andrés', 'ACTIVO'),
(221, 'San Andrés de Machaca', 'ACTIVO'),
(222, 'San Antonio de Esmoruco', 'ACTIVO'),
(223, 'San Antonio de Lomerío', 'ACTIVO'),
(224, 'San Benito', 'ACTIVO'),
(225, 'San Borja', 'ACTIVO'),
(226, 'San Buenaventura', 'ACTIVO'),
(227, 'San Carlos', 'ACTIVO'),
(228, 'San Ignacio', 'ACTIVO'),
(229, 'San Javier', 'ACTIVO'),
(230, 'San Joaquín', 'ACTIVO'),
(231, 'San José', 'ACTIVO'),
(232, 'San Juan', 'ACTIVO'),
(233, 'San Julián', 'ACTIVO'),
(234, 'San Lorenzo', 'ACTIVO'),
(235, 'San Lucas', 'ACTIVO'),
(236, 'San Matías', 'ACTIVO'),
(237, 'San Miguel', 'ACTIVO'),
(238, 'San Pablo de Huacareta', 'ACTIVO'),
(239, 'San Pablo de Lipez', 'ACTIVO'),
(240, 'San Pedro', 'ACTIVO'),
(241, 'San Pedro de Buena Vista', 'ACTIVO'),
(242, 'San Pedro de Curahuara', 'ACTIVO'),
(243, 'San Pedro de Quemes', 'ACTIVO'),
(244, 'San Pedro de Tiquina', 'ACTIVO'),
(245, 'San Rafael', 'ACTIVO'),
(246, 'San Ramón', 'ACTIVO'),
(247, 'Santa Ana', 'ACTIVO'),
(248, 'Santa Cruz de la Sierra', 'ACTIVO'),
(249, 'Santa Rosa', 'ACTIVO'),
(250, 'Santa Rosa del Abuná', 'ACTIVO'),
(251, 'Santa Rosa del Sara', 'ACTIVO'),
(252, 'Santiago de Callapa', 'ACTIVO'),
(253, 'Santiago de Huari', 'ACTIVO'),
(254, 'Santiago de Huata', 'ACTIVO'),
(255, 'Santiago de Huayllamarca', 'ACTIVO'),
(256, 'Santiago de Machaca', 'ACTIVO'),
(257, 'Santivañez', 'ACTIVO'),
(258, 'Santos Mercado (Reserva)', 'ACTIVO'),
(259, 'Santuario de Quillacas', 'ACTIVO'),
(260, 'Sapahaqui', 'ACTIVO'),
(261, 'Shinahota', 'ACTIVO'),
(262, 'Sica Sica', 'ACTIVO'),
(263, 'Sicaya', 'ACTIVO'),
(264, 'Sipe Sipe', 'ACTIVO'),
(265, 'Sopachuy', 'ACTIVO'),
(266, 'Soracachi (Paria)', 'ACTIVO'),
(267, 'Sorata', 'ACTIVO'),
(268, 'Sucre', 'ACTIVO'),
(269, 'Tacachi', 'ACTIVO'),
(270, 'Tacacoma', 'ACTIVO'),
(271, 'Tacobamba', 'ACTIVO'),
(272, 'Tacopaya', 'ACTIVO'),
(273, 'Tahua', 'ACTIVO'),
(274, 'Tapacarí', 'ACTIVO'),
(275, 'Tarabuco', 'ACTIVO'),
(276, 'Taraco', 'ACTIVO'),
(277, 'Tarata', 'ACTIVO'),
(278, 'Tarija', 'ACTIVO'),
(279, 'Tarvita', 'ACTIVO'),
(280, 'Teoponte', 'ACTIVO'),
(281, 'Tiahuanacu', 'ACTIVO'),
(282, 'Tinguipaya', 'ACTIVO'),
(283, 'Tipuani', 'ACTIVO'),
(284, 'Tiquipaya', 'ACTIVO'),
(285, 'Tiraque', 'ACTIVO'),
(286, 'Tito Yupanqui', 'ACTIVO'),
(287, 'Toco', 'ACTIVO'),
(288, 'Todos Santos', 'ACTIVO'),
(289, 'Tolata', 'ACTIVO'),
(290, 'Toledo', 'ACTIVO'),
(291, 'Tomave', 'ACTIVO'),
(292, 'Tomina', 'ACTIVO'),
(293, 'Toro Toro', 'ACTIVO'),
(294, 'Totora', 'ACTIVO'),
(295, 'Trinidad', 'ACTIVO'),
(296, 'Tupiza', 'ACTIVO'),
(297, 'Turco', 'ACTIVO'),
(298, 'Umala', 'ACTIVO'),
(299, 'Uncía', 'ACTIVO'),
(300, 'Uriondo (Concepción)', 'ACTIVO'),
(301, 'Urubichá', 'ACTIVO'),
(302, 'Uyuni', 'ACTIVO'),
(303, 'Vacas', 'ACTIVO'),
(304, 'Vallegrande', 'ACTIVO'),
(305, 'Viacha', 'ACTIVO'),
(306, 'Vila Vila', 'ACTIVO'),
(307, 'Villa Alcalá', 'ACTIVO'),
(308, 'Villa Azurduy', 'ACTIVO'),
(309, 'Villa Charcas', 'ACTIVO'),
(310, 'Villa de Yocalla', 'ACTIVO'),
(311, 'Villa Huanuni', 'ACTIVO'),
(312, 'Villa Mojocoya', 'ACTIVO'),
(313, 'Villa Nueva (Loma Alta)', 'ACTIVO'),
(314, 'Villa Poopó', 'ACTIVO'),
(315, 'Villa Rivero', 'ACTIVO'),
(316, 'Villa Serrano', 'ACTIVO'),
(317, 'Villa Tunari', 'ACTIVO'),
(318, 'Villa Vaca Guzmán (Muyupampa)', 'ACTIVO'),
(319, 'Villa Zudañez', 'ACTIVO'),
(320, 'Villamontes', 'ACTIVO'),
(321, 'Villazón', 'ACTIVO'),
(322, 'Vinto', 'ACTIVO'),
(323, 'Vitichi', 'ACTIVO'),
(324, 'Waldo Ballivián', 'ACTIVO'),
(325, 'Warnes', 'ACTIVO'),
(326, 'Yaco', 'ACTIVO'),
(327, 'Yacuiba', 'ACTIVO'),
(328, 'Yamparáez', 'ACTIVO'),
(329, 'Yanacachi', 'ACTIVO'),
(330, 'Yapacaní', 'ACTIVO'),
(331, 'Yotala', 'ACTIVO'),
(332, 'Yunchará', 'ACTIVO'),
(333, 'Yunguyo del Litoral', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_municipio_provincia`
--

CREATE TABLE IF NOT EXISTS `mae_municipio_provincia` (
  `id_municipio_provincia` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `estado_municipio_provincia` char(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=376 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mae_municipio_provincia`
--

INSERT INTO `mae_municipio_provincia` (`id_municipio_provincia`, `id_provincia`, `id_municipio`, `estado_municipio_provincia`) VALUES
(2, 1, 38, 'ACTIVO'),
(33, 25, 52, 'ACTIVO'),
(34, 99, 295, 'ACTIVO'),
(35, 99, 229, 'ACTIVO'),
(36, 25, 259, 'ACTIVO'),
(37, 30, 59, 'ACTIVO'),
(38, 101, 208, 'ACTIVO'),
(39, 30, 86, 'ACTIVO'),
(40, 101, 225, 'ACTIVO'),
(41, 101, 249, 'ACTIVO'),
(42, 22, 165, 'ACTIVO'),
(43, 22, 44, 'ACTIVO'),
(44, 101, 211, 'ACTIVO'),
(45, 22, 98, 'ACTIVO'),
(46, 100, 147, 'ACTIVO'),
(47, 22, 266, 'ACTIVO'),
(48, 100, 22, 'ACTIVO'),
(49, 100, 118, 'ACTIVO'),
(50, 32, 217, 'ACTIVO'),
(51, 32, 171, 'ACTIVO'),
(52, 102, 230, 'ACTIVO'),
(53, 33, 108, 'ACTIVO'),
(54, 33, 120, 'ACTIVO'),
(55, 33, 106, 'ACTIVO'),
(56, 33, 89, 'ACTIVO'),
(57, 102, 246, 'ACTIVO'),
(58, 102, 198, 'ACTIVO'),
(59, 33, 333, 'ACTIVO'),
(60, 103, 143, 'ACTIVO'),
(61, 103, 220, 'ACTIVO'),
(62, 36, 136, 'ACTIVO'),
(63, 104, 228, 'ACTIVO'),
(64, 36, 288, 'ACTIVO'),
(65, 105, 209, 'ACTIVO'),
(66, 36, 46, 'ACTIVO'),
(67, 105, 116, 'ACTIVO'),
(68, 106, 247, 'ACTIVO'),
(69, 106, 110, 'ACTIVO'),
(70, 28, 255, 'ACTIVO'),
(71, 107, 26, 'ACTIVO'),
(72, 54, 308, 'ACTIVO'),
(73, 54, 279, 'ACTIVO'),
(74, 23, 311, 'ACTIVO'),
(75, 61, 316, 'ACTIVO'),
(76, 107, 166, 'ACTIVO'),
(77, 57, 156, 'ACTIVO'),
(78, 57, 238, 'ACTIVO'),
(79, 59, 235, 'ACTIVO'),
(80, 59, 39, 'ACTIVO'),
(81, 112, 300, 'ACTIVO'),
(82, 59, 127, 'ACTIVO'),
(83, 23, 89, 'ACTIVO'),
(84, 59, 309, 'ACTIVO'),
(85, 53, 268, 'ACTIVO'),
(86, 53, 331, 'ACTIVO'),
(88, 24, 314, 'ACTIVO'),
(89, 53, 182, 'ACTIVO'),
(90, 112, 332, 'ACTIVO'),
(91, 60, 40, 'ACTIVO'),
(92, 60, 93, 'ACTIVO'),
(93, 108, 104, 'ACTIVO'),
(94, 60, 139, 'ACTIVO'),
(95, 24, 9, 'ACTIVO'),
(96, 109, 278, 'ACTIVO'),
(97, 56, 167, 'ACTIVO'),
(98, 56, 292, 'ACTIVO'),
(99, 111, 327, 'ACTIVO'),
(100, 56, 265, 'ACTIVO'),
(101, 111, 47, 'ACTIVO'),
(102, 29, 294, 'ACTIVO'),
(103, 111, 320, 'ACTIVO'),
(104, 56, 307, 'ACTIVO'),
(105, 56, 103, 'ACTIVO'),
(106, 110, 28, 'ACTIVO'),
(107, 110, 99, 'ACTIVO'),
(108, 35, 212, 'ACTIVO'),
(109, 58, 275, 'ACTIVO'),
(110, 35, 69, 'ACTIVO'),
(111, 58, 328, 'ACTIVO'),
(112, 35, 58, 'ACTIVO'),
(113, 34, 94, 'ACTIVO'),
(114, 34, 297, 'ACTIVO'),
(115, 55, 319, 'ACTIVO'),
(116, 55, 188, 'ACTIVO'),
(117, 55, 312, 'ACTIVO'),
(118, 55, 126, 'ACTIVO'),
(119, 27, 290, 'ACTIVO'),
(120, 1, 262, 'ACTIVO'),
(121, 1, 298, 'ACTIVO'),
(122, 26, 253, 'ACTIVO'),
(123, 1, 20, 'ACTIVO'),
(124, 1, 175, 'ACTIVO'),
(125, 1, 76, 'ACTIVO'),
(126, 1, 72, 'ACTIVO'),
(127, 68, 248, 'ACTIVO'),
(128, 31, 8, 'ACTIVO'),
(129, 68, 88, 'ACTIVO'),
(130, 83, 215, 'ACTIVO'),
(131, 68, 183, 'ACTIVO'),
(132, 83, 48, 'ACTIVO'),
(133, 68, 134, 'ACTIVO'),
(134, 18, 131, 'ACTIVO'),
(135, 68, 101, 'ACTIVO'),
(136, 18, 226, 'ACTIVO'),
(137, 84, 302, 'ACTIVO'),
(138, 21, 109, 'ACTIVO'),
(139, 72, 236, 'ACTIVO'),
(140, 84, 291, 'ACTIVO'),
(141, 84, 181, 'ACTIVO'),
(142, 2, 112, 'ACTIVO'),
(143, 2, 95, 'ACTIVO'),
(144, 78, 79, 'ACTIVO'),
(145, 86, 241, 'ACTIVO'),
(147, 86, 293, 'ACTIVO'),
(148, 78, 216, 'ACTIVO'),
(150, 87, 75, 'ACTIVO'),
(152, 87, 207, 'ACTIVO'),
(154, 79, 231, 'ACTIVO'),
(155, 87, 178, 'ACTIVO'),
(157, 79, 168, 'ACTIVO'),
(159, 87, 162, 'ACTIVO'),
(160, 79, 210, 'ACTIVO'),
(162, 70, 137, 'ACTIVO'),
(163, 70, 54, 'ACTIVO'),
(164, 70, 33, 'ACTIVO'),
(165, 88, 53, 'ACTIVO'),
(166, 70, 92, 'ACTIVO'),
(167, 88, 27, 'ACTIVO'),
(168, 66, 250, 'ACTIVO'),
(169, 70, 117, 'ACTIVO'),
(170, 88, 271, 'ACTIVO'),
(171, 70, 41, 'ACTIVO'),
(172, 66, 123, 'ACTIVO'),
(173, 89, 142, 'ACTIVO'),
(174, 70, 31, 'ACTIVO'),
(175, 11, 45, 'ACTIVO'),
(176, 89, 273, 'ACTIVO'),
(177, 11, 6, 'ACTIVO'),
(178, 81, 218, 'ACTIVO'),
(179, 81, 172, 'ACTIVO'),
(180, 81, 148, 'ACTIVO'),
(181, 81, 206, 'ACTIVO'),
(182, 67, 161, 'ACTIVO'),
(183, 71, 199, 'ACTIVO'),
(184, 67, 313, 'ACTIVO'),
(185, 90, 219, 'ACTIVO'),
(186, 71, 196, 'ACTIVO'),
(187, 67, 258, 'ACTIVO'),
(188, 71, 49, 'ACTIVO'),
(189, 85, 12, 'ACTIVO'),
(190, 85, 1, 'ACTIVO'),
(191, 69, 16, 'ACTIVO'),
(192, 69, 301, 'ACTIVO'),
(193, 69, 99, 'ACTIVO'),
(194, 91, 64, 'ACTIVO'),
(195, 65, 194, 'ACTIVO'),
(196, 91, 201, 'ACTIVO'),
(197, 76, 32, 'ACTIVO'),
(198, 91, 35, 'ACTIVO'),
(199, 65, 28, 'ACTIVO'),
(200, 76, 227, 'ACTIVO'),
(201, 65, 100, 'ACTIVO'),
(202, 76, 330, 'ACTIVO'),
(203, 76, 232, 'ACTIVO'),
(204, 92, 321, 'ACTIVO'),
(205, 74, 81, 'ACTIVO'),
(206, 74, 229, 'ACTIVO'),
(207, 74, 246, 'ACTIVO'),
(208, 93, 87, 'ACTIVO'),
(209, 63, 197, 'ACTIVO'),
(210, 74, 233, 'ACTIVO'),
(211, 93, 323, 'ACTIVO'),
(212, 74, 223, 'ACTIVO'),
(213, 63, 240, 'ACTIVO'),
(214, 74, 90, 'ACTIVO'),
(215, 94, 71, 'ACTIVO'),
(216, 94, 243, 'ACTIVO'),
(217, 63, 111, 'ACTIVO'),
(218, 82, 157, 'ACTIVO'),
(219, 82, 113, 'ACTIVO'),
(220, 82, 152, 'ACTIVO'),
(221, 95, 299, 'ACTIVO'),
(222, 64, 66, 'ACTIVO'),
(223, 7, 191, 'ACTIVO'),
(224, 82, 193, 'ACTIVO'),
(225, 7, 154, 'ACTIVO'),
(226, 82, 240, 'ACTIVO'),
(227, 95, 56, 'ACTIVO'),
(228, 64, 185, 'ACTIVO'),
(229, 7, 192, 'ACTIVO'),
(230, 95, 141, 'ACTIVO'),
(231, 95, 63, 'ACTIVO'),
(232, 7, 124, 'ACTIVO'),
(233, 77, 184, 'ACTIVO'),
(234, 64, 30, 'ACTIVO'),
(235, 77, 251, 'ACTIVO'),
(236, 64, 25, 'ACTIVO'),
(237, 7, 107, 'ACTIVO'),
(238, 77, 74, 'ACTIVO'),
(239, 96, 296, 'ACTIVO'),
(240, 75, 304, 'ACTIVO'),
(241, 17, 11, 'ACTIVO'),
(242, 17, 177, 'ACTIVO'),
(243, 75, 102, 'ACTIVO'),
(244, 75, 158, 'ACTIVO'),
(245, 75, 186, 'ACTIVO'),
(246, 75, 189, 'ACTIVO'),
(247, 73, 228, 'ACTIVO'),
(248, 73, 237, 'ACTIVO'),
(249, 73, 245, 'ACTIVO'),
(251, 20, 256, 'ACTIVO'),
(252, 20, 50, 'ACTIVO'),
(253, 80, 325, 'ACTIVO'),
(254, 80, 163, 'ACTIVO'),
(255, 96, 17, 'ACTIVO'),
(256, 19, 242, 'ACTIVO'),
(257, 19, 173, 'ACTIVO'),
(258, 19, 51, 'ACTIVO'),
(259, 10, 305, 'ACTIVO'),
(260, 10, 115, 'ACTIVO'),
(261, 10, 281, 'ACTIVO'),
(262, 10, 96, 'ACTIVO'),
(263, 97, 239, 'ACTIVO'),
(264, 97, 155, 'ACTIVO'),
(265, 97, 222, 'ACTIVO'),
(266, 10, 221, 'ACTIVO'),
(267, 10, 132, 'ACTIVO'),
(268, 98, 187, 'ACTIVO'),
(269, 98, 282, 'ACTIVO'),
(270, 10, 276, 'ACTIVO'),
(271, 13, 129, 'ACTIVO'),
(272, 98, 310, 'ACTIVO'),
(273, 13, 205, 'ACTIVO'),
(274, 13, 36, 'ACTIVO'),
(275, 98, 24, 'ACTIVO'),
(276, 13, 77, 'ACTIVO'),
(277, 13, 125, 'ACTIVO'),
(278, 13, 140, 'ACTIVO'),
(279, 16, 267, 'ACTIVO'),
(280, 16, 114, 'ACTIVO'),
(281, 16, 270, 'ACTIVO'),
(282, 16, 203, 'ACTIVO'),
(283, 16, 80, 'ACTIVO'),
(284, 16, 283, 'ACTIVO'),
(285, 16, 150, 'ACTIVO'),
(286, 16, 280, 'ACTIVO'),
(287, 5, 144, 'ACTIVO'),
(288, 5, 260, 'ACTIVO'),
(289, 5, 326, 'ACTIVO'),
(290, 5, 149, 'ACTIVO'),
(291, 5, 34, 'ACTIVO'),
(292, 3, 190, 'ACTIVO'),
(293, 3, 138, 'ACTIVO'),
(294, 3, 21, 'ACTIVO'),
(295, 3, 195, 'ACTIVO'),
(296, 9, 82, 'ACTIVO'),
(297, 9, 244, 'ACTIVO'),
(298, 9, 286, 'ACTIVO'),
(299, 8, 62, 'ACTIVO'),
(300, 8, 19, 'ACTIVO'),
(301, 8, 18, 'ACTIVO'),
(302, 4, 135, 'ACTIVO'),
(303, 4, 169, 'ACTIVO'),
(304, 4, 151, 'ACTIVO'),
(305, 4, 3, 'ACTIVO'),
(306, 4, 97, 'ACTIVO'),
(307, 14, 85, 'ACTIVO'),
(308, 14, 83, 'ACTIVO'),
(309, 6, 2, 'ACTIVO'),
(310, 6, 7, 'ACTIVO'),
(311, 6, 60, 'ACTIVO'),
(312, 6, 121, 'ACTIVO'),
(313, 6, 254, 'ACTIVO'),
(314, 6, 122, 'ACTIVO'),
(315, 15, 78, 'ACTIVO'),
(316, 15, 84, 'ACTIVO'),
(317, 15, 43, 'ACTIVO'),
(318, 15, 37, 'ACTIVO'),
(319, 15, 55, 'ACTIVO'),
(320, 15, 324, 'ACTIVO'),
(321, 15, 160, 'ACTIVO'),
(322, 15, 252, 'ACTIVO'),
(323, 12, 170, 'ACTIVO'),
(324, 12, 133, 'ACTIVO'),
(325, 12, 61, 'ACTIVO'),
(326, 12, 130, 'ACTIVO'),
(327, 12, 329, 'ACTIVO'),
(328, 37, 13, 'ACTIVO'),
(329, 37, 303, 'ACTIVO'),
(330, 39, 15, 'ACTIVO'),
(331, 39, 272, 'ACTIVO'),
(332, 40, 67, 'ACTIVO'),
(333, 40, 128, 'ACTIVO'),
(335, 40, 159, 'ACTIVO'),
(336, 51, 29, 'ACTIVO'),
(337, 41, 4, 'ACTIVO'),
(338, 41, 164, 'ACTIVO'),
(339, 41, 174, 'ACTIVO'),
(340, 42, 42, 'ACTIVO'),
(341, 42, 257, 'ACTIVO'),
(342, 42, 263, 'ACTIVO'),
(343, 44, 57, 'ACTIVO'),
(344, 44, 105, 'ACTIVO'),
(345, 44, 179, 'ACTIVO'),
(346, 44, 180, 'ACTIVO'),
(347, 44, 200, 'ACTIVO'),
(348, 44, 294, 'ACTIVO'),
(349, 43, 68, 'ACTIVO'),
(350, 45, 73, 'ACTIVO'),
(351, 45, 213, 'ACTIVO'),
(352, 45, 317, 'ACTIVO'),
(353, 38, 10, 'ACTIVO'),
(354, 38, 14, 'ACTIVO'),
(355, 38, 214, 'ACTIVO'),
(356, 38, 277, 'ACTIVO'),
(357, 46, 65, 'ACTIVO'),
(358, 46, 287, 'ACTIVO'),
(359, 46, 289, 'ACTIVO'),
(360, 47, 5, 'ACTIVO'),
(361, 47, 153, 'ACTIVO'),
(362, 47, 306, 'ACTIVO'),
(363, 48, 91, 'ACTIVO'),
(364, 48, 202, 'ACTIVO'),
(365, 48, 224, 'ACTIVO'),
(366, 48, 269, 'ACTIVO'),
(367, 48, 315, 'ACTIVO'),
(368, 49, 70, 'ACTIVO'),
(369, 49, 204, 'ACTIVO'),
(370, 49, 264, 'ACTIVO'),
(371, 49, 284, 'ACTIVO'),
(372, 49, 322, 'ACTIVO'),
(373, 50, 274, 'ACTIVO'),
(374, 52, 261, 'ACTIVO'),
(375, 52, 285, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_pais`
--

CREATE TABLE IF NOT EXISTS `mae_pais` (
  `id_pais` int(11) NOT NULL COMMENT 'Registra codigo interno del pais',
  `nombre_pais` varchar(100) DEFAULT NULL COMMENT 'Registra nombre del pais',
  `codigo_pais` varchar(10) DEFAULT NULL COMMENT 'Registra el codigo de pais',
  `nacionalidad` varchar(250) NOT NULL COMMENT 'Registra la nacionalidad'
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_pais`
--

INSERT INTO `mae_pais` (`id_pais`, `nombre_pais`, `codigo_pais`, `nacionalidad`) VALUES
(1, ' BOLIVIA', ' BO', 'boliviano'),
(2, 'PERU', 'PE', 'peruano'),
(3, 'ARGENTINA', 'AR', 'argentino'),
(4, 'PARAGUAY\r\n', 'PY', 'paraguayo'),
(5, 'CHILE', 'CL', 'chileno'),
(6, 'AUSTRIA', 'AT', 'austriaco'),
(7, 'AFGANISTAN', 'AF', 'afgano'),
(8, 'ALBANIA', 'AL', 'albano'),
(9, 'ALEMANIA', 'DE', 'alemán'),
(10, ' ANGOLA', ' AO', 'angolano'),
(11, ' ANTIGUA Y BARBUDA', ' AG', 'antiguano'),
(12, ' ARABIA SAUDI', ' SA', 'saudí'),
(13, ' ARGELIA', ' DZ', 'argelino'),
(14, ' ARMENIA', ' AM', 'armenience'),
(15, ' AUSTRALIA', ' AU', 'australiano'),
(16, ' BAHAMAS', ' BS', 'bahameño'),
(17, ' BARBADOS', ' BB', 'barbadense'),
(18, ' BELGICA', ' BE', 'belga'),
(19, ' BENIN', ' BJ', 'beninés'),
(20, ' BOSNIA Y HERZEGOVINA', ' BA', 'bosnio'),
(21, ' BRASIL', ' BR', 'brasileño'),
(22, ' BULGARIA', ' BG', 'búlgaro'),
(23, ' BURUNDI', ' BI', 'burundés'),
(24, ' CABO VERDE', ' CV', 'caboverdiano'),
(25, ' CAMBOYA', ' KH', 'camboyano'),
(26, ' CAMERUN', ' CM', 'camerunés'),
(27, ' CANADA', ' CA', 'canadiense'),
(28, ' CHINA', ' CN', 'chino'),
(29, ' COLOMBIA', ' CO', 'colombiano'),
(30, ' CONGO', ' CG', 'congoleño'),
(31, ' COREA DEL SUR', ' KP', 'surcoreano'),
(32, ' COREA DEL NORTE ', ' KR', 'norcoreano'),
(33, ' COSTA RICA', ' CR', 'costarricense'),
(34, ' CROACIA', ' CU', 'croata'),
(35, ' CUBA', ' HR', 'cubano'),
(36, ' DINAMARCA', ' DO', ' danés'),
(37, ' DOMINICA', ' DM', 'dominicano'),
(38, ' ECUADOR', ' EC', 'ecuatoriano'),
(39, ' EGIPTO', ' EG', 'egipcio'),
(40, ' EL SALVADOR', ' SV', 'salvadoreño'),
(41, ' ESLOVENIA', ' SI', 'eslovaco'),
(42, ' ESPAÑA', ' ES', 'español'),
(43, ' ESTADOS UNIDOS DE AMERICA', ' US', 'estado unidence'),
(44, ' ESTONIA', ' EE', 'estonio'),
(45, ' ETIOPIA', ' ET', 'etíope'),
(46, ' FILIPINAS', ' PH', 'filipino'),
(47, ' FINLANDIA', ' FI', 'finés'),
(48, ' FRANCIA', ' FR', 'francés'),
(49, ' GHANA', ' GH', 'ghanés'),
(50, ' GIBRALTAR', ' GI', 'gilbraltarence'),
(51, ' GRANADA', ' GD', 'granadino'),
(52, ' GRECIA', ' GR', 'griego'),
(53, ' GROENLANDIA', ' GL', 'groenlandés'),
(54, ' GUATEMALA', ' GT', 'guatemalteco'),
(55, ' GUAYANA FRANCESA', ' GF', 'guañano'),
(56, ' GUINEA', ' GN', 'Guineano'),
(57, ' GUINEA ECUATORIAL', ' GQ', 'Guineano'),
(58, ' GUINEA-BISSAU', ' GW', 'Guineano'),
(59, ' GUYANA', ' GY', 'guañano'),
(60, ' HAITI', ' HT', 'haitiano'),
(61, ' HONDURAS', ' HN', 'hondureño'),
(62, ' INDIA', ' IN', 'indio'),
(63, ' INDONESIA', ' ID', 'indionisio'),
(64, ' IRAN', ' IR', 'iraní'),
(65, ' IRAQ', ' IQ', 'iraquí'),
(66, ' IRLANDA', ' IE', 'irlandés'),
(67, ' ISLANDIA', ' TC', 'islandés'),
(68, ' ISRAEL', ' IL', 'israelí'),
(69, ' ITALIA', ' IT', 'italiano'),
(70, ' JAMAICA', ' JM', 'jamaicano'),
(71, ' JAPON', ' JP', 'japonés'),
(72, ' JORDANIA', ' JO', 'jordano'),
(73, ' KAZAJSTAN', ' KZ', 'kazajo'),
(74, ' KENIA', ' KE', 'keniata'),
(75, ' KUWAIT', ' KW', 'kuwaití'),
(76, ' LIBANO', ' LB', 'libanés'),
(77, ' LIBERIA', ' LR', 'liberiano'),
(78, ' LIBIA', ' LY', 'libio'),
(79, ' LITUANIA', ' LT', 'lituano'),
(80, ' LUXEMBURGO', ' LU', 'luxemburgés'),
(81, ' MACEDONIA ', ' MK', 'macedonio'),
(82, ' MADAGASCAR', ' MK', 'malgache'),
(83, ' MALASIA', ' MG', 'malayo'),
(84, ' MALAWI', ' MW', 'malawino'),
(85, ' MALDIVAS', ' MV', 'maldivo'),
(86, ' MARRUECOS', ' MA', 'marroquí'),
(87, ' MEXICO', ' MX', 'mexicano'),
(88, ' MONACO', ' MC', 'monaqués'),
(89, ' MONGOLIA', ' MN', 'mongól'),
(90, ' NAMIBIA', ' NA', 'namibio'),
(91, ' NEPAL', ' NP', 'nepalence'),
(92, ' NICARAGUA', ' NI', 'nicaraguense'),
(93, ' NIGERIA', ' NE', 'nigeriano'),
(94, ' NORUEGA', ' NO', 'noruego'),
(95, ' NUEVA ZELANDA', ' NZ', 'neozelandés'),
(96, ' PAKISTAN', ' PK', 'pakistaní'),
(97, ' PALESTINA', ' PS', 'palestino'),
(98, ' PANAMA', ' PA', 'panameño'),
(99, ' PAPUA NUEVA GUINEA', ' PG', 'papú'),
(100, ' POLONIA', ' PL', 'polaco'),
(101, ' PORTUGAL', ' PT', 'portugués'),
(102, ' PUERTO RICO', ' PR', 'puertoriquence'),
(103, ' QATAR', ' QA', 'katarí'),
(104, ' REP.DEMOCRATICA DEL CONGO', ' CG', 'congoleño'),
(105, ' REPUBLICA DOMINICANA', ' DO', 'dominicano'),
(106, ' REPUBLICA ESLOVACA', ' SK', 'eslovaco'),
(107, ' RUMANIA', ' RO', 'rumano'),
(108, ' RUSIA', ' RU', 'ruso'),
(109, ' SENEGAL', ' SN', 'senegalés'),
(110, ' SERBIA', ' RS', 'serbio'),
(111, ' SINGAPUR', ' SG', 'singapurense'),
(112, ' SUDAFRICA', ' ZA', 'sudafricano'),
(113, ' SUDAN', ' SD', 'sudanés'),
(114, ' TAILANDIA', ' TH', 'tailandés'),
(115, ' TANZANIA', ' TW', 'tanzano'),
(116, ' TURQUIA', ' TR', 'turco'),
(117, ' URUGUAY', ' UY', 'uruguayo'),
(118, ' VENEZUELA', ' VE', 'venezolano'),
(119, ' VIETNAM', ' VN', 'vietnamita'),
(120, ' YEMEN', ' YE', 'jemení'),
(121, ' ZAMBIA', ' ZM', 'zambiano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_provincia`
--

CREATE TABLE IF NOT EXISTS `mae_provincia` (
  `id_provincia` int(11) NOT NULL,
  `mombre_provincia` varchar(45) DEFAULT NULL,
  `estado_provincia` char(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_provincia`
--

INSERT INTO `mae_provincia` (`id_provincia`, `mombre_provincia`, `estado_provincia`) VALUES
(1, 'AROMA', 'ACTIVO'),
(2, 'BAUTISTA SAAVEDRA', 'ACTIVO'),
(3, 'LOS ANDES', 'ACTIVO'),
(4, 'MURILLO', 'ACTIVO'),
(5, 'LOAYZA', 'ACTIVO'),
(6, 'OMASUYOS', 'ACTIVO'),
(7, 'CAMACHO', 'ACTIVO'),
(8, 'MUÑECAS', 'ACTIVO'),
(9, 'MANCO KAPAC', 'ACTIVO'),
(10, 'INGAVI', 'ACTIVO'),
(11, 'CARANAVI', 'ACTIVO'),
(12, 'SUD YUNGAS', 'ACTIVO'),
(13, 'INQUISIVI', 'ACTIVO'),
(14, 'NOR YUNGAS', 'ACTIVO'),
(15, 'PACAJES', 'ACTIVO'),
(16, 'LARECAJA', 'ACTIVO'),
(17, 'FRANZ TAMAYO', 'ACTIVO'),
(18, 'ABEL ITURRALDE', 'ACTIVO'),
(19, 'GUALBERTO VILLAROEL', 'ACTIVO'),
(20, 'GENERAL JOSÉ MANUEL PANDO', 'ACTIVO'),
(21, 'TOMÁS BARRÓN', 'ACTIVO'),
(22, 'CERCADO', 'ACTIVO'),
(23, 'PANTALEÓN DALENCE', 'ACTIVO'),
(24, 'POOPÓ', 'ACTIVO'),
(25, 'EDUARDO AVAROA', 'ACTIVO'),
(26, 'SEBASTIÁN PAGADOR', 'ACTIVO'),
(27, 'SAUCARÍ', 'ACTIVO'),
(28, 'NOR CARANGAS', 'ACTIVO'),
(29, 'SAN PEDRO DE TOTORA', 'ACTIVO'),
(30, 'CARANGAS', 'ACTIVO'),
(31, 'SUD CARANGAS', 'ACTIVO'),
(32, 'LADISLAO CABRERA', 'ACTIVO'),
(33, 'LITORAL', 'ACTIVO'),
(34, 'SAJAMA', 'ACTIVO'),
(35, 'SABAYA', 'ACTIVO'),
(36, 'MEJILLONES', 'ACTIVO'),
(37, 'ARANI', 'ACTIVO'),
(38, 'ESTEBAN ARZE', 'ACTIVO'),
(39, 'ARQUE', 'ACTIVO'),
(40, 'AYOPAYA', 'ACTIVO'),
(41, 'CAMPERO', 'ACTIVO'),
(42, 'CAPINOTA', 'ACTIVO'),
(43, 'CERCADO', 'ACTIVO'),
(44, 'CARRASCO', 'ACTIVO'),
(45, 'CHAPARE', 'ACTIVO'),
(46, 'GERMÁN JORDÁN', 'ACTIVO'),
(47, 'MIZQUE', 'ACTIVO'),
(48, 'PUNATA', 'ACTIVO'),
(49, 'QUILLACOLLO', 'ACTIVO'),
(50, 'TAPACARÍ', 'ACTIVO'),
(51, 'BOLÍVAR', 'ACTIVO'),
(52, 'TIRAQUE', 'ACTIVO'),
(53, 'OROPEZA', 'ACTIVO'),
(54, 'JUANA AZURDUY', 'ACTIVO'),
(55, 'JAIME ZUDÁÑEZ', 'ACTIVO'),
(56, 'TOMINA', 'ACTIVO'),
(57, 'HERNANDO SILES', 'ACTIVO'),
(58, 'YAMPARÁEZ', 'ACTIVO'),
(59, 'NOR CINTI', 'ACTIVO'),
(60, 'SUD CINTI', 'ACTIVO'),
(61, 'BELISARIO BOETO', 'ACTIVO'),
(62, 'LUIS CALVO', 'ACTIVO'),
(63, 'MANURIPI', 'ACTIVO'),
(64, 'NICOLÁS SUÁREZ', 'ACTIVO'),
(65, 'MADRE DE DIOS', 'ACTIVO'),
(66, 'ABUNÁ', 'ACTIVO'),
(67, 'FEDERICO ROMÁN', 'ACTIVO'),
(68, 'ANDRÉS IBÁÑEZ', 'ACTIVO'),
(69, 'GUARAYOS', 'ACTIVO'),
(70, 'CORDILLERA', 'ACTIVO'),
(71, 'GERMAN BUSH', 'ACTIVO'),
(72, 'ANGEL SANDOVAL', 'ACTIVO'),
(73, 'VELASCO', 'ACTIVO'),
(74, 'ÑUFLO DE CHÁVEZ', 'ACTIVO'),
(75, 'VALLEGRANDE', 'ACTIVO'),
(76, 'ICHILO', 'ACTIVO'),
(77, 'SARA', 'ACTIVO'),
(78, 'MANUEL MARIA CABALLERO', 'ACTIVO'),
(79, 'CHIQUITOS', 'ACTIVO'),
(80, 'WARNES', 'ACTIVO'),
(81, 'FLORIDA', 'ACTIVO'),
(82, 'OBISPO SANTISTEBAN', 'ACTIVO'),
(83, 'ALONSO DE IBÁÑEZ', 'ACTIVO'),
(84, 'ANTONIO QUIJARRO', 'ACTIVO'),
(85, 'BERNARDINO BILBAO', 'ACTIVO'),
(86, 'CHARCAS', 'ACTIVO'),
(87, 'CHAYANTA', 'ACTIVO'),
(88, 'CORNELIO SAAVEDRA', 'ACTIVO'),
(89, 'DANIEL CAMPOS', 'ACTIVO'),
(90, 'ENRIQUE BALDIVIESO', 'ACTIVO'),
(91, 'JOSÉ MARÍA LINARES', 'ACTIVO'),
(92, 'MODESTO OMISTE', 'ACTIVO'),
(93, 'NOR CHICHAS', 'ACTIVO'),
(94, 'NOR LÍPEZ', 'ACTIVO'),
(95, 'RAFAEL BUSTILLO', 'ACTIVO'),
(96, 'SUD CHICHAS', 'ACTIVO'),
(97, 'SUD LÍPEZ', 'ACTIVO'),
(98, 'TOMÁS FRÍAS', 'ACTIVO'),
(99, 'CERCADO', 'ACTIVO'),
(100, 'ITÉNEZ', 'ACTIVO'),
(101, 'JOSÉ BALLIVIÁN', 'ACTIVO'),
(102, 'MAMORÉ', 'ACTIVO'),
(103, 'MARBÁN', 'ACTIVO'),
(104, 'MOXOS', 'ACTIVO'),
(105, 'VACA DÍEZ', 'ACTIVO'),
(106, 'YACUMA', 'ACTIVO'),
(107, 'ANICETO ARCE', 'ACTIVO'),
(108, 'BURDET O CONNOR', 'ACTIVO'),
(109, 'CERCADO', 'ACTIVO'),
(110, 'EUSTAQUIO MÉNDEZ', 'ACTIVO'),
(111, 'GRAN CHACO', 'ACTIVO'),
(112, 'JOSÉ MARÍA AVILÉS', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_tipo_vivienda`
--

CREATE TABLE IF NOT EXISTS `mae_tipo_vivienda` (
  `id_tipo_vivienda` int(11) NOT NULL,
  `nombre_vivienda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_tipo_vivienda`
--

INSERT INTO `mae_tipo_vivienda` (`id_tipo_vivienda`, `nombre_vivienda`) VALUES
(9, 'Propia de padres'),
(10, 'Alquilada'),
(11, 'Prestada'),
(12, 'Anticretico'),
(13, 'Adjudicada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_universidad`
--

CREATE TABLE IF NOT EXISTS `mae_universidad` (
  `id_universidad` int(11) NOT NULL,
  `nombre_universidad` varchar(100) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `departamento` varchar(30) DEFAULT NULL,
  `nombre_corto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mae_universidad`
--

INSERT INTO `mae_universidad` (`id_universidad`, `nombre_universidad`, `id_pais`, `departamento`, `nombre_corto`) VALUES
(1, 'UNIVERSIDAD PUBLICA DE EL ALTO', 1, 'La Paz ', 'UPEA'),
(2, 'UNIVERSIDAD MAYOR DE SAN ANDRES', 1, 'La Paz', 'UMSA'),
(3, 'UNIVERSIDAD TECNICA DE ORURO', 1, 'oruro', 'UTO'),
(4, 'UNIVERSIDAD MAYOR DE SAN SIMON', 1, 'COCHABAMBA', 'UMSS'),
(5, 'UNIVERSIDAD AUTONOMA TOMAS FRIAS', 1, 'POTOSI', 'UATF'),
(6, 'UNIVERSIDAD AUTONOMA GABRIEL RENE MORENO', 1, 'SANTA CRUZ', 'UAGRM'),
(7, 'UNIVERSIDAD AUTONOMA JUAN MISAEL SARACHO', 1, 'TARIJA', 'UAJMS'),
(8, 'UNIVERSIDAD AUTONOMA DEL BENI MCAL. JOSE BALLIVIAN', 1, 'BENI', 'UABJB'),
(9, 'UNIVERSIDAD NACIONAL DE SIGLO XX', 1, 'POTOSI', 'UNSXX'),
(10, 'UNIVERSIDAD AMAZONICA DE PANDO', 1, 'PANDO', 'UAP'),
(11, 'UNIVERSIDAD MAYOR REAL Y PONTIFICA DE SAN FRANCISCO XAVIER', 1, 'CHUQUISACA', 'USFX'),
(12, 'MINISTERIO DE EDUCACION O SEDUCA', 1, NULL, 'SEDUCA'),
(13, 'EXTRANJERO', 1, 'OTRO', 'EXTRANJERO'),
(14, 'UNIVERSIDAD MILITAR "MCAL. BERNARDINO BILBAO RIOJA"', 1, 'La Paz', 'UBBR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(11) NOT NULL,
  `tipo` enum('SAD','CENTRAL') COLLATE utf8_spanish_ci NOT NULL,
  `inicial_sede` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distancia_km` int(11) DEFAULT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='InnoDB free: 8192 kB';

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `tipo`, `inicial_sede`, `nombre`, `direccion`, `distancia_km`, `estado`) VALUES
(1, 'CENTRAL', 'VE', 'VILLA ESPERANZA', 'Av. Sucre "B" S/N Villa Esperanza', NULL, 'A'),
(2, 'SAD', '', 'QURPA', 'Provincia Ingavi', NULL, 'I'),
(3, 'SAD', 'CH', 'CHAGUAYA', 'Provincia Camacho', 160, 'A'),
(4, 'SAD', 'AC', 'ACHACACHI', 'Provincia Omasuyos', 96, 'A'),
(5, 'SAD', 'CO', 'COROICO - CRUZ LOMA', 'Localidad de Cruz Loma', 115, 'A'),
(6, 'CENTRAL', '', 'KALLUTACA', 'Camino a Laja Ex Cordepaz', NULL, 'I'),
(7, 'CENTRAL', '', 'VILLA INGENIO', 'Unidad Vecinal 2 - DM 5 - Plaza 18 de Febrero', NULL, 'I'),
(8, 'SAD', 'GU', 'GUAQUI', 'Camino a laja', 102, 'A'),
(9, 'SAD', '', 'SAN ANTONIO', 'Los yungas', 280, 'I'),
(10, 'SAD', 'VI', 'VIACHA', 'Plaza central de viacha', 29, 'A'),
(11, 'SAD', '', 'SAN ANTONIO-ALTO BENI', 'Provincia Franz Tamayo', NULL, 'I'),
(12, 'SAD', '', 'Sede Viacha', 'Plaza Central viacha', NULL, 'I'),
(13, 'SAD', 'AN', 'ANCORAIMES', 'LOS ANDES ACHACACHI', 132, 'A'),
(14, 'CENTRAL', '', 'DEPTO.  DE IDIOMAS - TGN', 'VILLA ESPERANZA', NULL, 'A'),
(15, 'CENTRAL', '', 'INSTITUTO DE  INVESTIGACIÓN', 'VILLA ESPERANZA', NULL, 'A'),
(16, 'SAD', 'BA', 'BATALLAS', 'CARRETERA ACHACACHI', 60, 'A'),
(17, 'CENTRAL', '', 'VILLA TEJADA', 'Z/ VILLA TEJADA RECTANGULAR', NULL, 'I'),
(18, 'SAD', 'CU', 'CHUA', 'CARRETERA A COPACABANA - EXTENSION', 98, 'A'),
(19, 'SAD', 'MA', 'MAPIRI-CHAROPAMPA', NULL, 360, 'A'),
(20, 'SAD', 'CR', 'CARANAVI - SAN PABLO', 'CARANAVI SAN PABLO ing agronomica', 160, 'A'),
(21, 'SAD', '', 'COHANA', 'cohana ', 98, 'I'),
(22, 'SAD', 'PB', 'PALOS BLANCOS', 'S/N', NULL, 'A'),
(23, 'CENTRAL', '', 'DEPTO.  DE IDIOMAS - R. PROPIOS', 'VILLA ESPERANZA', NULL, 'A'),
(24, 'SAD', 'CR', 'CARANAVI', 'Sede Académica', 160, 'A');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_asignacion_administrativo`
--
CREATE TABLE IF NOT EXISTS `vista_asignacion_administrativo` (
`asiadm_id` int(11)
,`paterno` char(20)
,`materno` char(30)
,`persona` char(50)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`entidad_aseguradora` enum('CORDES','SSU','CNS','CBP','CBES')
,`persona_id` int(11)
,`numero_ctta_bancaria` varchar(50)
,`fecha_nac` date
,`contrato` enum('P','E','RP')
,`fecha_ascenso` date
,`fecha_baja` date
,`nivel` int(2)
,`haber_basico` decimal(7,2)
,`nombre_area` varchar(14)
,`nombre_unidad` varchar(47)
,`codigo_unidad` varchar(10)
,`nombre_cargo` varchar(77)
,`nivel_id` int(2)
,`partida` varchar(5)
,`partida_nombre` varchar(100)
,`item` varchar(5)
,`estado` enum('ACTIVO','NINGUNO')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_cnde_prefasVerano`
--
CREATE TABLE IF NOT EXISTS `vista_cnde_prefasVerano` (
`id_asignacion` int(11)
,`item` int(11)
,`paralelo` char(10)
,`turno` char(1)
,`horas_semana` int(11)
,`nivel` int(11)
,`sigla_asignatura` varchar(20)
,`asignatura` varchar(200)
,`carrera` varchar(200)
,`sede` varchar(100)
,`fecha_asignacion` date
,`fecha_conclusion` date
,`cat_id` int(11)
,`categoria` varchar(200)
,`id_persona` int(11)
,`persona` char(50)
,`paterno` char(20)
,`materno` char(30)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`periodo` char(3)
,`gestion_control_docente` char(25)
,`item_nombramiento` varchar(50)
,`nro_resolucion` char(20)
,`tipo_resolucion` char(10)
,`codigo` int(8)
,`carrera_id` int(11)
,`gestion_id` int(11)
,`sede_id` int(11)
,`tipo_doc_est` char(1)
,`tipo_gestion` char(3)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_mae_matriculados`
--
CREATE TABLE IF NOT EXISTS `vista_mae_matriculados` (
`id_estudiante` int(11)
,`id_tipo_estudiante_matricula` int(11)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`tipo_documento` enum('CI','CIE','DNI','PASAPORTE')
,`nombre` char(50)
,`paterno` char(20)
,`materno` char(30)
,`fecha_nac` date
,`genero` enum('M','F')
,`estado_civil` enum('SOLTERO','CASADO','VIUDO','DIVORCIADO','CONVIVIENTE')
,`nacionalidad` varchar(100)
,`trabaja` varchar(6)
,`colegio` varchar(200)
,`anio_ingreso_estudiante` int(11)
,`area` enum('rural','urbano')
,`registro_universitario` varchar(50)
,`id_carrera_sede` int(11)
,`carrera` varchar(200)
,`numero_matricula` int(11)
,`fecha_matriculacion` timestamp
,`id_gestion` int(11)
,`gestion` int(11)
,`carrera_id` int(11)
,`area_id` int(11)
,`id_sede` int(11)
,`sede` varchar(100)
,`direccion_departamento` varchar(45)
,`direccion_provincia` varchar(45)
,`direccion_ciudad_localidad` varchar(45)
,`tipo_colegio` varchar(12)
,`nombre_modalidad` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_mallas_curriculares_prefas`
--
CREATE TABLE IF NOT EXISTS `vista_mallas_curriculares_prefas` (
`id` int(11)
,`modalidad` char(1)
,`optativa` char(1)
,`horas_semana` int(11)
,`horas_semestral` int(3)
,`nivel` int(11)
,`orden_plan_estudio` int(3)
,`sigla_asignatura` varchar(20)
,`asignatura` varchar(200)
,`mencion` varchar(200)
,`id_mencion` int(11)
,`pensum_id` int(11)
,`pensum` varchar(50)
,`numero_plan` int(3)
,`carrera` varchar(200)
,`carrera_id` int(11)
,`asignatura_id` int(11)
,`estado` char(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_nombramiento_general`
--
CREATE TABLE IF NOT EXISTS `vista_nombramiento_general` (
`codex` int(11)
,`id_persona` int(11)
,`gestion` char(25)
,`periodo` char(3)
,`nombre_simple` varchar(100)
,`carrera` varchar(200)
,`carrera_id` int(11)
,`nombre_asignatura` varchar(200)
,`sigla_asignatura` varchar(20)
,`paralelo` char(10)
,`turno` char(1)
,`nro_estudiantes` int(11)
,`item_nombramiento` varchar(50)
,`observacion` varchar(200)
,`nombre` char(50)
,`paterno` char(20)
,`materno` char(30)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`horas_mes` bigint(14)
,`nivel` int(11)
,`sede` varchar(100)
,`fecha_inicio` date
,`fecha_conclusion` date
,`fecha_emision_nombramiento` date
,`tipo_categoria_rgs` varchar(50)
,`categoria` varchar(200)
,`caso` varchar(100)
,`gestion_id` int(11)
,`tipo_gestion` char(3)
,`fecha_nac` date
,`afiliacion_afp` varchar(50)
,`num_NUA_afp` int(11)
,`tiempogestion` int(4)
,`asimen_id` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_persona`
--
CREATE TABLE IF NOT EXISTS `vista_persona` (
`id` int(11)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`fecha_nac` date
,`nombre` char(50)
,`paterno` char(20)
,`materno` char(30)
,`email` varchar(50)
,`celular` int(8)
,`estado` enum('A','I')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_siacop_asignacion_administrativo`
--
CREATE TABLE IF NOT EXISTS `vista_siacop_asignacion_administrativo` (
`ci` char(15)
,`nombre` char(50)
,`paterno` char(20)
,`materno` char(30)
,`id_poa` int(11)
,`id` int(11)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`nit` int(11)
,`dni` int(11)
,`cedula_identidad_extranejero` varchar(100)
,`direccion` varchar(250)
,`telefono` char(20)
,`celular` int(8)
,`fecha_nac` date
,`genero` enum('M','F')
,`estado_civil` enum('SOLTERO','CASADO','VIUDO','DIVORCIADO','CONVIVIENTE')
,`nacionalidad` char(20)
,`email` varchar(50)
,`pagina_web` varchar(100)
,`estado` enum('A','I')
,`fecha_ingreso_upea` date
,`fecha_recepcion_cas` date
,`acumulada_cas` float(5,2)
,`numero_ctta_bancaria` varchar(50)
,`entidad_pagadora` enum('TESORERIA','BNB')
,`afiliacion_afp` varchar(50)
,`num_NUA_afp` int(11)
,`entidad_aseguradora` enum('CORDES','SSU','CNS','CBP','CBES')
,`num_CUA` varchar(50)
,`direccion_departamento` varchar(45)
,`direccion_provincia` varchar(45)
,`direccion_ciudad_localidad` varchar(45)
,`direccion_zona_barrio_urbanizacion` varchar(45)
,`direccion_calle` varchar(45)
,`direccion_numero` varchar(10)
,`id_caja_salud` int(11)
,`caja_salud_fecha_afiliacion` date
,`caja_salud_numero_asegurado` varchar(255)
,`id_afp` int(11)
,`afp_numero_nua` varchar(45)
,`id_banco` int(11)
,`numero_cuenta_bancaria` bigint(20)
,`codigo_cargo` varchar(4)
,`id_asignacion_administrativo` int(11)
,`fecha_finalizacion_asignacion` datetime
,`estado_asignacion_administrativo` tinyint(1)
,`id_persona_administrativo` int(11)
,`id_nivel` int(11)
,`id_tipo_horario` int(11)
,`fecha_inicio_asignacion_administrativo` date
,`fecha_fin_asignacion_administrativo` date
,`numero_memorandum` varchar(45)
,`fecha_creacion_memorandum` date
,`tipo_contratacion` enum('CONVOCATORIA','DESIGNACION DIRECTA','REASIGNACION','COMISION','CONTINUIDAD','REINCORPORACION','OTRO')
,`url_memorandum` varchar(500)
,`detalle_finalizacion_asignacion` text
,`fecha_creacion_asignacion_administrativo` timestamp
,`nombre_cargo` varchar(255)
,`nivel` int(11)
,`item` varchar(5)
,`id_partida_presupuestaria` int(11)
,`codigo_partida_presupuestaria` varchar(5)
,`descripcion_partida_presupuestaria` varchar(45)
,`id_unidad_sede` int(11)
,`id_cargo` int(11)
,`fecha_inicio_poa` date
,`fecha_fin_poa` date
,`estado_poa` tinyint(1)
,`descripcion_poa` text
,`estado_administrativo` tinyint(1)
,`nombre_nivel` varchar(255)
,`correo_institucional` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_sicod_prefas`
--
CREATE TABLE IF NOT EXISTS `vista_sicod_prefas` (
`id_asidoc` int(11)
,`item` int(11)
,`paralelo` char(10)
,`turno` char(1)
,`id_asignatura_mencion` int(11)
,`horas_semana` int(11)
,`nivel` int(11)
,`orden_plan_estudio` int(3)
,`sigla_asignatura` varchar(20)
,`asignatura` varchar(200)
,`carrera` varchar(200)
,`sede` varchar(100)
,`fecha_asignacion` date
,`fecha_conclusion` date
,`cat_id` int(11)
,`categoria` varchar(200)
,`id_persona` int(11)
,`persona` char(50)
,`paterno` char(20)
,`materno` char(30)
,`ci` char(15)
,`expedido` enum('LP','OR','CBBA','CH','PT','SC','BN','TJ','PD','PERU','ITA','OTRO')
,`periodo` char(3)
,`gestion_control_docente` char(25)
,`item_nombramiento` varchar(50)
,`nro_resolucion` char(20)
,`tipo_resolucion` char(10)
,`codigo` int(8)
,`id_carrera_sede` int(11)
,`carrera_id` int(11)
,`gestion_id` int(11)
,`sede_id` int(11)
,`tipo_doc_est` char(1)
,`tipo_gestion` char(3)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_asignacion_administrativo`
--
DROP TABLE IF EXISTS `vista_asignacion_administrativo`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_asignacion_administrativo')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_cnde_prefasVerano`
--
DROP TABLE IF EXISTS `vista_cnde_prefasVerano`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_cnde_prefasVerano')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_mae_matriculados`
--
DROP TABLE IF EXISTS `vista_mae_matriculados`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_mae_matriculados')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_mallas_curriculares_prefas`
--
DROP TABLE IF EXISTS `vista_mallas_curriculares_prefas`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_mallas_curriculares_prefas')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_nombramiento_general`
--
DROP TABLE IF EXISTS `vista_nombramiento_general`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_nombramiento_general')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_persona`
--
DROP TABLE IF EXISTS `vista_persona`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_persona')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_siacop_asignacion_administrativo`
--
DROP TABLE IF EXISTS `vista_siacop_asignacion_administrativo`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_siacop_asignacion_administrativo')

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_sicod_prefas`
--
DROP TABLE IF EXISTS `vista_sicod_prefas`;
-- en uso(#1142 - SHOW VIEW command denied to user 'user_prefas'@'192.168.8.19' for table 'vista_sicod_prefas')

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indices de la tabla `carrera_sede`
--
ALTER TABLE `carrera_sede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sede_id` (`sede_id`),
  ADD KEY `carrera_id` (`carrera_id`);

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mae_caracteristica_vivienda`
--
ALTER TABLE `mae_caracteristica_vivienda`
  ADD PRIMARY KEY (`id_caracteristica_vivienda`);

--
-- Indices de la tabla `mae_departamento`
--
ALTER TABLE `mae_departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `mae_departamento_provincia`
--
ALTER TABLE `mae_departamento_provincia`
  ADD PRIMARY KEY (`id_departamento_provincia`),
  ADD KEY `fk_mae_departamento_provincia_mae_departamento1_idx` (`id_departamento`),
  ADD KEY `fk_mae_departamento_provincia_mae_provincia1_idx` (`id_provincia`),
  ADD KEY `fk_mae_departamento_provincia_mae_pais1_idx` (`id_pais`);

--
-- Indices de la tabla `mae_municipio`
--
ALTER TABLE `mae_municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `mae_municipio_provincia`
--
ALTER TABLE `mae_municipio_provincia`
  ADD PRIMARY KEY (`id_municipio_provincia`),
  ADD KEY `fk_mae_municipio_provincia_mae_provincia1_idx` (`id_provincia`),
  ADD KEY `fk_mae_municipio_provincia_mae_municipio1_idx` (`id_municipio`);

--
-- Indices de la tabla `mae_pais`
--
ALTER TABLE `mae_pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `mae_provincia`
--
ALTER TABLE `mae_provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `mae_tipo_vivienda`
--
ALTER TABLE `mae_tipo_vivienda`
  ADD PRIMARY KEY (`id_tipo_vivienda`);

--
-- Indices de la tabla `mae_universidad`
--
ALTER TABLE `mae_universidad`
  ADD PRIMARY KEY (`id_universidad`),
  ADD KEY `fk_mae_universidad_mae_pais1_idx` (`id_pais`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `carrera_sede`
--
ALTER TABLE `carrera_sede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT de la tabla `mae_caracteristica_vivienda`
--
ALTER TABLE `mae_caracteristica_vivienda`
  MODIFY `id_caracteristica_vivienda` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código de característica vivienda',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `mae_departamento`
--
ALTER TABLE `mae_departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `mae_departamento_provincia`
--
ALTER TABLE `mae_departamento_provincia`
  MODIFY `id_departamento_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT de la tabla `mae_municipio`
--
ALTER TABLE `mae_municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=334;
--
-- AUTO_INCREMENT de la tabla `mae_municipio_provincia`
--
ALTER TABLE `mae_municipio_provincia`
  MODIFY `id_municipio_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=376;
--
-- AUTO_INCREMENT de la tabla `mae_pais`
--
ALTER TABLE `mae_pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Registra codigo interno del pais',AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT de la tabla `mae_provincia`
--
ALTER TABLE `mae_provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT de la tabla `mae_tipo_vivienda`
--
ALTER TABLE `mae_tipo_vivienda`
  MODIFY `id_tipo_vivienda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `mae_universidad`
--
ALTER TABLE `mae_universidad`
  MODIFY `id_universidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_fk` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrera_sede`
--
ALTER TABLE `carrera_sede`
  ADD CONSTRAINT `carrera_sede_carrera_fk` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrera_sede_sede_fk` FOREIGN KEY (`sede_id`) REFERENCES `sede` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mae_departamento_provincia`
--
ALTER TABLE `mae_departamento_provincia`
  ADD CONSTRAINT `fk_mae_departamento_provincia_mae_departamento1` FOREIGN KEY (`id_departamento`) REFERENCES `mae_departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mae_departamento_provincia_mae_pais1` FOREIGN KEY (`id_pais`) REFERENCES `mae_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mae_departamento_provincia_mae_provincia1` FOREIGN KEY (`id_provincia`) REFERENCES `mae_provincia` (`id_provincia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mae_municipio_provincia`
--
ALTER TABLE `mae_municipio_provincia`
  ADD CONSTRAINT `fk_mae_municipio_provincia_mae_municipio1` FOREIGN KEY (`id_municipio`) REFERENCES `mae_municipio` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mae_municipio_provincia_mae_provincia1` FOREIGN KEY (`id_provincia`) REFERENCES `mae_provincia` (`id_provincia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
