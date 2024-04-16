-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2021 a las 15:47:12
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_webs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `idblog` int(11) NOT NULL,
  `b_imagen` varchar(45) DEFAULT NULL,
  `b_titulo` varchar(255) DEFAULT NULL,
  `b_fecha_publicicaion` date DEFAULT NULL,
  `b_descripcion` text DEFAULT NULL,
  `b_estado` varchar(45) DEFAULT NULL,
  `b_fecha_reg` date DEFAULT NULL,
  `b_id_usuario` int(11) NOT NULL,
  `b_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`idblog`, `b_imagen`, `b_titulo`, `b_fecha_publicicaion`, `b_descripcion`, `b_estado`, `b_fecha_reg`, `b_id_usuario`, `b_update`) VALUES
(6, 'user_1621234364.jpg', 'DIFERENCIA ENTRE BACKEND Y FRONTEND', '2021-01-03', '<p style=\"margin-bottom: 30px; font-family: titillium_webregular; color: rgb(28, 35, 61); font-size: 16px; letter-spacing: 0.5px;\">En este artículo vamos a hablar sobre la&nbsp;<span style=\"font-weight: bolder;\">diferencia entre el desarrollador backend y frontend</span>. De esta forma será mucho más sencillo para ti, apasionado de la programación, decidir cuál es el camino que quieres tomar a la hora de adquirir una formación especializada en&nbsp;<a href=\"https://www.tokioschool.com/formaciones/cursos-programacion/front-end/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"color: rgb(252, 102, 127); text-decoration-line: initial; text-decoration-color: rgb(4, 33, 156); font-weight: 700;\">programación</a>.</p><p style=\"margin-bottom: 30px; font-family: titillium_webregular; color: rgb(28, 35, 61); font-size: 16px; letter-spacing: 0.5px;\">El desarrollador frontend es el que se encarga de la parte del desarrollo web que se ve, el frontend es la parte de uná página que interactúa con los usuarios. Por otro lado, el desarrollador backend es el que se encarga de todo lo que se esconde detrás de que una web funcione, de la parte de los servidores y las bases de datos.</p><p style=\"margin-bottom: 30px; font-family: titillium_webregular; color: rgb(28, 35, 61); font-size: 16px; letter-spacing: 0.5px;\">Se trata de&nbsp;<span style=\"font-weight: bolder;\">dos conceptos que explican a grandes rasgos cómo funciona una página web</span>&nbsp;y son fundamentales para cualquier persona que quiera trabajar en el mundo digital, ya sea en programación, marketing, diseño o emprendimiento.</p>', 'activo', '2021-05-17', 1, '2021-05-17 02:52:44'),
(7, 'user_1621236544.jpg', 'FIRMA DE CONVENIO CON MISTER CARS BOLIVIA SRL.', '2021-01-18', '<p>La universidad publica de El Alto firma el convenio con&nbsp; la empresa Mister Cars Bolivia SRL.<br></p>', 'activo', '2021-05-17', 1, '2021-05-17 03:29:04'),
(8, 'user_1621236990.jpg', 'LISTA DE COMPRENSIÓN', '2021-01-18', '<p>Lista de comprensión Python</p>', 'activo', '2021-05-17', 1, '2021-05-17 03:36:30'),
(9, 'user_1621237043.jpg', '9 PASOS DE UN PROCESO DE INVESTIGACIÓN', '2021-01-19', '<p>Los distintos procesos&nbsp;</p>', 'activo', '2021-05-17', 1, '2021-05-17 03:37:23'),
(10, 'user_1621238827.jpg', 'BUCLES', '2021-02-13', '<p>Un poco de información de como funcionan los bucles en programación</p>', 'activo', '2021-05-17', 1, '2021-05-17 04:07:07'),
(11, 'user_1621240036.jpg', 'LA LIBRERÍA STATISTICS', '2021-03-26', '<p>Un poco de información&nbsp;</p>', 'activo', '2021-05-17', 1, '2021-05-17 04:27:15'),
(12, 'user_1621240119.jpg', 'VIDEOS TUTORIALES', '2021-03-30', '<p>Ingresa para estar</p>', 'activo', '2021-05-17', 1, '2021-05-17 04:28:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_visitas`
--

CREATE TABLE `cantidad_visitas` (
  `idcantidad_visitas` int(11) NOT NULL,
  `can_ip_usuario` varchar(45) DEFAULT NULL,
  `can_sis_operativo` text DEFAULT NULL,
  `can_fecha_reg` date DEFAULT NULL,
  `can_update` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `can_cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cantidad_visitas`
--

INSERT INTO `cantidad_visitas` (`idcantidad_visitas`, `can_ip_usuario`, `can_sis_operativo`, `can_fecha_reg`, `can_update`, `can_cantidad`) VALUES
(1, '::1', 'Windows 8.1', '2021-05-07', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `idconvocatorias` int(11) NOT NULL,
  `con_foto_portada` varchar(45) DEFAULT NULL,
  `con_titulo` varchar(255) DEFAULT NULL,
  `con_descripcion` text DEFAULT NULL,
  `con_estado` varchar(45) DEFAULT NULL,
  `con_fecha_reg` date DEFAULT NULL,
  `con_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `con_iduser` int(11) NOT NULL,
  `idtipo_conv_comun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`idconvocatorias`, `con_foto_portada`, `con_titulo`, `con_descripcion`, `con_estado`, `con_fecha_reg`, `con_update`, `con_iduser`, `idtipo_conv_comun`) VALUES
(10, 'user_1621234938.jpg', 'ACTIVIDADES GESTIÓN 2021', '<p>Se informa a la comunidad universitaria</p>', 'activo', '2021-05-17', '2021-05-17 03:02:18', 1, 1),
(11, 'user_1621235267.jpg', 'INSCRIPCIONES I 2021', '<p>Inicia las actividades</p>', 'activo', '2021-05-17', '2021-05-17 03:07:47', 1, 2),
(12, 'user_1621235408.jpg', 'PRUEBA DE SUFICIENCIA ACADÉMICA I/2021', '<p>Inscribirte para dar tu examen</p>', 'activo', '2021-05-17', '2021-05-17 03:10:07', 1, 2),
(13, 'user_1621235489.jpg', 'INSCRÍBETE YA!', '<p>Admisiones<br></p>', 'activo', '2021-05-17', '2021-05-17 03:11:29', 1, 2),
(14, 'user_1621235838.jpg', 'PASANTÍA POSGRADO', '<p>Dirigida&nbsp;</p>', 'activo', '2021-05-17', '2021-05-17 03:17:18', 1, 2),
(15, 'user_1621235954.jpg', 'REINICIO DE ACTIVIDADES ACADÉMICAS I/2021', '<p>Se inicia</p>', 'activo', '2021-05-17', '2021-05-17 03:19:14', 1, 1),
(16, 'user_1621236760.jpg', 'UNIDAD DE REGISTROS Y ADMISIONES', '<p>Debido a la emergencia sanitaria</p>', 'activo', '2021-05-17', '2021-05-17 03:32:39', 1, 1),
(17, 'user_1621237242.jpg', 'PAGO DE BENEFICIOS ESTUDIANTILES', '<p>Comunicamos a los beneficiarios de las becas</p>', 'activo', '2021-05-17', '2021-05-17 03:40:41', 1, 1),
(18, 'user_1621237399.jpg', 'PAGOS DE SALARIOS MES DE DICIEMBRE', '<p>Comunicamos a los señores docentes</p>', 'activo', '2021-05-17', '2021-05-17 03:43:19', 1, 1),
(19, 'user_1621237928.jpg', 'MATRICULACIÓN ESTUDIANTES ANTIGUOS 2021', '<p>El rectorado y Vicerrectorado</p>', 'activo', '2021-05-17', '2021-05-17 03:52:08', 1, 1),
(20, 'user_1621238036.jpg', 'MATRICULACIÓN DE ESTUDIANTES ANTIGUOS', '<p>Instrucciones para la matriculación</p>', 'activo', '2021-05-17', '2021-05-17 03:53:56', 1, 1),
(21, 'user_1621238645.jpg', 'INFORMACIÓN DEL CRONOGRAMA DE ACTIVIDADES', '<p>La carrera de ingeniería de sistemas de acuerdo&nbsp;</p>', 'activo', '2021-05-17', '2021-05-17 04:04:04', 1, 1),
(22, 'user_1621239054.jpg', 'MATRICULACIÓN VIRTUAL', '<p>UPEA Inicia la matriculación virtual</p>', 'activo', '2021-05-17', '2021-05-17 04:10:54', 1, 1),
(23, 'user_1621239306.jpg', 'POSTULACIÓN A LA BECA COMEDOR 2021', '<p>Se convoca a todos los estudiantes</p>', 'activo', '2021-05-17', '2021-05-17 04:15:06', 1, 2),
(24, 'user_1621240318.jpg', 'PASANTÍAS', '<p>Se requiere pasantes</p>', 'activo', '2021-05-17', '2021-05-17 04:31:57', 1, 2),
(26, 'user_1621240743.jpg', 'DIA MUNDIAL DE LA CIENCIA Y TECNOLOGÍA', '<p>Por el día mundial de la ciencia y tecnología lanzamos el evento&nbsp;</p>', 'activo', '2021-05-17', '2021-05-17 04:39:03', 1, 2),
(27, 'user_1621240869.jpg', 'CURSOS PREUNIVERSITARIO II/2021', '<p>Iniciamos&nbsp;</p>', 'activo', '2021-05-17', '2021-05-17 04:41:08', 1, 2),
(28, 'user_1621241250.jpg', 'FLOSOL', '<p>El gran evento de software libre</p>', 'activo', '2021-05-17', '2021-05-17 04:47:29', 1, 2),
(29, 'user_1621241611.jpg', 'SEGIP 4/2021', '<p>Convoca a todos los interesados</p>', 'activo', '2021-05-17', '2021-05-17 04:53:31', 1, 2),
(30, 'user_1621242345.jpg', 'INSCRIPCIONES ', '<p>Aun puedes inscribirte</p>', 'activo', '2021-05-17', '2021-05-17 05:05:45', 1, 2),
(31, 'user_1621242437.jpg', 'DIA MUNDIAL DEL INTERNET', '<p>te invitamos a participar</p>', 'activo', '2021-05-17', '2021-05-17 05:07:17', 1, 2),
(32, 'user_1621242927.jpg', 'DIA', '<p>Evento&nbsp;</p>', 'activo', '2021-05-17', '2021-05-17 05:15:27', 1, 2),
(33, 'user_1621242988.jpg', 'CAMPEONATO RELAMPAGO', '<p>Participa</p>', 'activo', '2021-05-17', '2021-05-17 05:16:27', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cursos_academicos`
--

CREATE TABLE `detalle_cursos_academicos` (
  `iddetalle_cursos_academicos` int(11) NOT NULL,
  `det_img_portada` varchar(45) DEFAULT NULL,
  `det_titulo` varchar(255) DEFAULT NULL,
  `det_descripcion` text DEFAULT NULL,
  `det_costo` double(10,2) DEFAULT NULL,
  `det_cupo_max` int(11) DEFAULT NULL,
  `det_fecha_ini` date DEFAULT NULL,
  `det_fecha_fin` date DEFAULT NULL,
  `det_estado` varchar(45) DEFAULT NULL,
  `det_fecha_reg` date DEFAULT NULL,
  `det_iduser` int(11) NOT NULL,
  `det_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idtipo_curso_otros` int(11) NOT NULL,
  `det_costo_profe` double(10,2) DEFAULT NULL,
  `det_codigo` varchar(45) DEFAULT NULL,
  `det_carga_horaria` int(11) DEFAULT NULL,
  `det_version` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `groups_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `groups_update`) VALUES
(1, 'administrador', 'administrator', '2021-01-09 08:24:20'),
(2, 'encargado', 'General User', '2021-01-08 13:26:15'),
(3, 'editor', 'Usuario con rol de edición de datos', '2021-05-07 17:04:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idinstitucion` int(11) NOT NULL,
  `in_logo` varchar(45) DEFAULT NULL,
  `in_nombre` text DEFAULT NULL,
  `in_sigla` varchar(45) DEFAULT NULL,
  `in_correo1` varchar(255) DEFAULT NULL,
  `in_correo2` varchar(255) DEFAULT NULL,
  `in_celular1` varchar(20) DEFAULT NULL,
  `in_celular2` varchar(20) DEFAULT NULL,
  `in_telefono1` varchar(20) DEFAULT NULL,
  `in_telefono2` varchar(20) DEFAULT NULL,
  `in_facebook` text DEFAULT NULL,
  `in_twitter` text DEFAULT NULL,
  `ins_url_youtube` text DEFAULT NULL,
  `in_ubicacion` text DEFAULT NULL,
  `in_google_map` text DEFAULT NULL,
  `in_mision` text DEFAULT NULL,
  `in_vision` text DEFAULT NULL,
  `in_historia` text DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `in_fecha_reg` date DEFAULT NULL,
  `in_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_foto_autoridad` varchar(45) DEFAULT NULL,
  `in_nombre_autoridad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idinstitucion`, `in_logo`, `in_nombre`, `in_sigla`, `in_correo1`, `in_correo2`, `in_celular1`, `in_celular2`, `in_telefono1`, `in_telefono2`, `in_facebook`, `in_twitter`, `ins_url_youtube`, `in_ubicacion`, `in_google_map`, `in_mision`, `in_vision`, `in_historia`, `idusuario`, `in_fecha_reg`, `in_update`, `in_foto_autoridad`, `in_nombre_autoridad`) VALUES
(1, 'inst_1611003247.jpg', 'GOBIERNO AUTÓNOMO MUNICIPAL DE CARANAVI', 'GAMC', 'caranavi@gmail.com', '', '', '', '', '21131232', 'https://www.facebook.com/xavitravelexecutive', '', '', ' Calle Gallardo, Casa Gallardo, Zona Gran Poder', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6247.444997804558!2d-67.56962224645221!3d-15.833970730986431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f8f82a96d0a13%3A0xd6bcbe391de2436f!2sAlcaldia%20Municipal%20de%20Caranavi!5e1!3m2!1ses!2sbo!4v1610998195680!5m2!1ses!2sbo', '“EL GOBIERNO AUTÓNOMO MUNICIPAL DE CARANAVI ES UNA ENTIDAD TERRITORIAL AUTÓNOMA METROPOLITANA QUE IMPULSA EL DESARROLLO ECONÓMICO LOCAL, HUMANO Y TERRITORIAL A TRAVÉS DE LA PRESTACIÓN DE SERVICIOS PÚBLICOS A LA POBLACIÓN DE LOS DISTRITOS URBANOS Y RURALES PARA CONTRIBUIR AL VIVIR BIEN, BASADOS EN LOS PRINCIPIOS DE DEMOCRACIA PARTICIPATIVA, EFECTIVIDAD Y EQUIDAD DE SUS POLÍTICAS PÚBLICAS”', '“CARANAVI ES UN TERRITORIO CON AGUA PARA LA VIDA Y LA PRODUCCIÓN, CON EMPRENDIMIENTOS MUNICIPALES Y COMUNITARIOS QUE FORTALECEN LA ECONOMÍA PLURAL DE MUNICIPIO, CON MAYOR DESARROLLO HUMANO INTEGRAL, DONDE SE PRACTICA LA VIDA COMUNITARIA, DONDE LA ARMONÍA CON LA MADRE TIERRA ES MAYOR Y SUS HABITANTES EJERCEN SU DERECHO A LA CIUDAD PARTICIPANDO DE LA PLANIFICACIÓN Y GESTIÓN MUNICIPAL PARA VIVIR BIEN.\r\nCARANAVI TIENE UN GOBIERNO AUTÓNOMO MUNICIPAL QUE ES REFERENTE NACIONAL POR SU MAYOR AUTONOMÍA ECONÓMICA, POR SU MODELO DE GESTIÓN PARTICIPATIVA, EFICIENTE, TRANSPARENTE, ARTICULADORA, CON GOBIERNO ELECTRÓNICO, CON SERVICIOS ESPECIALIZADOS Y DE CALIDAD, Y CON SERVIDORES PÚBLICOS ÉTICOS, COMPETENTES Y COMPROMETIDOS CON EL DESARROLLO TERRITORIAL INTEGRAL DE CARANAVI Y EL VIVIR BIEN”', '', 1, '2021-04-27', '2021-04-27 10:36:14', 'inst_1611003448.jpg', 'JUAN CARLOS MERCADO NINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monto_depositado`
--

CREATE TABLE `monto_depositado` (
  `idmonto_depositado` int(11) NOT NULL,
  `monto_depositados` double(10,2) DEFAULT NULL,
  `monto_estado` varchar(45) DEFAULT NULL,
  `monto_fecha_reg` date DEFAULT NULL,
  `monto_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `monto_iduser` int(11) DEFAULT NULL,
  `idrealiza_cursos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `per_ci` varchar(45) DEFAULT NULL,
  `per_dpto` varchar(45) DEFAULT NULL,
  `per_nombre` varchar(255) DEFAULT NULL,
  `per_paterno` varchar(155) DEFAULT NULL,
  `per_materno` varchar(155) DEFAULT NULL,
  `per_celular` varchar(45) DEFAULT NULL,
  `per_correo` varchar(155) DEFAULT NULL,
  `per_ru` varchar(45) DEFAULT NULL,
  `per_id_persona_upea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idprivilegios` int(11) NOT NULL,
  `privi_estado` varchar(45) DEFAULT NULL,
  `idtabla_menu` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  `pri_id_usuario` int(11) DEFAULT NULL,
  `pri_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`idprivilegios`, `privi_estado`, `idtabla_menu`, `groups_id`, `pri_id_usuario`, `pri_update`) VALUES
(1, 'activo', 2, 1, NULL, '2021-03-09 11:18:14'),
(2, 'activo', 1, 1, NULL, '2021-03-29 10:19:21'),
(3, 'activo', 3, 1, 1, '2021-03-09 11:18:14'),
(4, 'activo', 4, 1, 1, '2021-03-09 11:18:14'),
(5, 'activo', 5, 1, 1, '2021-03-09 11:18:14'),
(6, 'activo', 6, 1, 1, '2021-03-09 11:18:14'),
(7, 'activo', 7, 1, 1, '2021-03-09 13:42:43'),
(15, 'activo', 15, 1, 1, '2021-04-27 21:19:49'),
(17, 'activo', 17, 1, 1, '2021-04-28 18:47:13'),
(18, 'activo', 18, 1, 1, '2021-04-29 09:52:11'),
(19, 'activo', 5, 2, NULL, '2021-05-02 23:04:51'),
(20, 'activo', 7, 2, NULL, '2021-05-02 23:04:55'),
(21, 'activo', 15, 2, 1, '2021-05-02 16:05:39'),
(22, 'activo', 17, 2, NULL, '2021-05-02 23:04:58'),
(23, 'activo', 18, 2, 1, '2021-05-02 16:05:39'),
(24, 'activo', 5, 3, 1, '2021-05-07 17:05:46'),
(25, 'activo', 6, 3, 1, '2021-05-07 17:05:46'),
(26, 'activo', 7, 3, 1, '2021-05-07 17:05:46'),
(28, 'activo', 18, 3, 1, '2021-05-07 17:05:46'),
(29, 'activo', 17, 3, 1, '2021-05-07 17:08:48'),
(30, 'activo', 4, 3, 1, '2021-05-07 17:10:43'),
(31, 'activo', 15, 3, 1, '2021-05-07 17:10:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza_cursos`
--

CREATE TABLE `realiza_cursos` (
  `idrealiza_cursos` int(11) NOT NULL,
  `reali_estado` varchar(45) DEFAULT NULL,
  `reali_fecha_reg` date DEFAULT NULL,
  `reali_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reali_iduser` int(11) NOT NULL,
  `realiza_fecha_entrega` date DEFAULT NULL,
  `realiza_estado_reserva` varchar(45) DEFAULT NULL,
  `reali_codigo` varchar(45) DEFAULT NULL,
  `idpersona` int(11) NOT NULL,
  `iddetalle_cursos_academicos` int(11) NOT NULL,
  `reali_tipo_est_prof` varchar(45) DEFAULT NULL,
  `reali_simbolo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idslider` int(11) NOT NULL,
  `sli_titulo` text DEFAULT NULL,
  `slid_imagen` text DEFAULT NULL,
  `sli_fecha_reg` date DEFAULT NULL,
  `sli_id_usuario` int(11) NOT NULL,
  `sli_estado` varchar(45) DEFAULT NULL,
  `sli_tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idslider`, `sli_titulo`, `slid_imagen`, `sli_fecha_reg`, `sli_id_usuario`, `sli_estado`, `sli_tipo`) VALUES
(17, 'INFORMACIONES', 'user_1621237718.jpg', '2021-05-17', 1, 'activo', 'img'),
(18, 'INFORMACIÓN SOBRE LAS INSCRIPCIONES', 'user_1621237763.jpg', '2021-05-17', 1, 'activo', 'img'),
(19, 'CONSTRUCCIÓN DEL NUEVO EDIFICIO', 'user_1621241314.jpg', '2021-05-17', 1, 'activo', 'img'),
(20, 'FLISOL COPIA DIGITAL', 'user_1621241396.jpg', '2021-05-17', 1, 'activo', 'img'),
(21, 'HORARIOS CENTRAL', 'pdf0524HORARIO I-2021 CENTRAL.pdf', '2021-05-17', 1, 'activo', 'pdf'),
(22, 'MALLA INFORMÁTICA - GESTIÓN', 'pdf0528Malla Informatica - Gestion .pdf', '2021-05-17', 1, 'activo', 'pdf'),
(23, 'CONVOCATORIA BECA COMEDOR', 'pdf0507CONVOCATORIA BECA COMEDOR INSTITUCIONAL 2021.pdf', '2021-05-17', 1, 'activo', 'pdf'),
(24, 'CONVOCATORIA DE FUTSAL', 'pdf0545CONVOCATORIA FUTSAL.pdf', '2021-05-17', 1, 'activo', 'pdf'),
(25, 'EVENTO DE GRADUACIÓN', 'user_1621243526.jpg', '2021-05-17', 1, 'activo', 'img'),
(26, 'EVENTO DE GRADUACIÓN', 'user_1621243542.jpg', '2021-05-17', 1, 'activo', 'img'),
(27, 'EVENTO DE GRADUACIÓN', 'user_1621243554.jpg', '2021-05-17', 1, 'activo', 'img'),
(28, 'EVENTO DE GRADUACIÓN', 'user_1621243566.jpg', '2021-05-17', 1, 'activo', 'img'),
(29, 'EVENTO DE GRADUACIÓN', 'user_1621243579.jpg', '2021-05-17', 1, 'activo', 'img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_menu`
--

CREATE TABLE `tabla_menu` (
  `idtabla_menu` int(11) NOT NULL,
  `tab_nombre` text DEFAULT NULL,
  `tab_link_funcion` text DEFAULT NULL,
  `tabl_descripcion` text DEFAULT NULL,
  `tabl_estado` varchar(45) DEFAULT NULL,
  `tabl_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tabl_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_menu`
--

INSERT INTO `tabla_menu` (`idtabla_menu`, `tab_nombre`, `tab_link_funcion`, `tabl_descripcion`, `tabl_estado`, `tabl_update`, `tabl_id_usuario`) VALUES
(1, 'privilegios', 'Controller_sistema/privilegios', 'privilegios', 'activo', '2021-04-14 01:12:16', 1),
(2, 'admin_usuarios', 'Controller_sistema/admin_usuarios', 'Admin usuarios', 'activo', '2021-01-08 12:14:08', 1),
(3, 'institucion', 'Controller_sistema/institucion', 'INSTITUCION', 'activo', '2021-01-08 14:11:12', 1),
(4, 'admin_blog', 'Controller_administracion/admin_blog', 'ADMIN BLOG', 'activo', '2021-01-08 21:26:37', 1),
(5, 'visitas', 'Controller_administracion/visitas', 'CANTIDAD VISITAS', 'activo', '2021-01-10 18:05:28', 1),
(6, 'slider', 'Controller_administracion/slider', 'IMAGENES / ARCHIVOS', 'activo', '2021-03-10 11:13:23', 1),
(7, 'convocatoriasComunicados', 'Controller_administracion/convocatoriasComunicados', 'CONVOCATORIAS / COMUNICADOS', 'activo', '2021-03-09 13:42:23', 1),
(15, 'adminCursos', 'Controller_administracion/adminCursos', 'adminCursos', 'activo', '2021-04-27 21:19:38', 1),
(17, 'inscripcionCursos', 'Controller_administracion/inscripcionCursos', 'inscripcionCursos', 'activo', '2021-04-28 18:46:59', 1),
(18, 'pagoDeudasEntCertificados', 'Controller_administracion/pagoDeudasEntCertificados', 'pagoDeudasEntCertificados', 'activo', '2021-04-29 09:52:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_conv_comun`
--

CREATE TABLE `tipo_conv_comun` (
  `idtipo_conv_comun` int(11) NOT NULL,
  `tipo_conv_comun_titulo` varchar(155) DEFAULT NULL,
  `tipo_conv_comun_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_conv_comun`
--

INSERT INTO `tipo_conv_comun` (`idtipo_conv_comun`, `tipo_conv_comun_titulo`, `tipo_conv_comun_estado`) VALUES
(1, 'COMUNICADOS', 'activo'),
(2, 'CONVOCATORIAS', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_curso_otros`
--

CREATE TABLE `tipo_curso_otros` (
  `idtipo_curso_otros` int(11) NOT NULL,
  `tipo_conv_curso_nombre` varchar(155) DEFAULT NULL,
  `tipo_conv_curso_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_curso_otros`
--

INSERT INTO `tipo_curso_otros` (`idtipo_curso_otros`, `tipo_conv_curso_nombre`, `tipo_conv_curso_estado`) VALUES
(1, 'CURSOS', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `users_id_usuario` int(11) DEFAULT NULL,
  `users_fecha_reg` date DEFAULT NULL,
  `users_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `imagen` varchar(45) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `users_id_usuario`, `users_fecha_reg`, `users_update`, `imagen`, `codigo`) VALUES
(1, '127.0.0.1', 'fer', '$2y$10$uo3cMGBw6XVX3pkKszrzxeEt7mjGfTmVmhVI8PcAN5SQriuvUL92W', 'fer', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1620400201, 1, 'JUAN FERNANDO', 'MERCADO LUNA', 'ADMIN', '0', NULL, NULL, '2021-05-07 17:10:01', 'user_1610401470.jpg', '111111'),
(2, '', 'juan', '$2y$10$X4IFs2IJzPWRu7kBxNZbaOHttL7TeUxxeZ3RXbsR5CFGIG1ojt9Qa', 'juan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1610407334, 1, 'LUIS FERNANDO', 'MERCADO', 'JC', '', NULL, NULL, '2021-04-27 10:35:54', 'user_1610407394.jpg', '11112220'),
(3, '', 'lec', '$2y$10$CPH48UTOXkp5iO4Q6OpvquPQn86LCZVbEJdA.Ptl4nBJFBdo32O7u', 'lec', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1620400164, 1, 'RODRIGO', 'LECOÑA', 'JC', '', NULL, NULL, '2021-05-07 17:09:24', 'user_1619985870.jpg', '10028685'),
(4, '', 'david', '$2y$10$PyIieCnT333dP1f2uOWXP.GocbItNlgh/3clVO5YNedGP1uc0ZMZu', 'david', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1620400253, 1, 'DAVID', 'CHOQUE', 'JC', '', NULL, NULL, '2021-05-07 17:10:53', 'user_1620399702.jpg', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 2, 1),
(4, 3, 2),
(5, 4, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idblog`);

--
-- Indices de la tabla `cantidad_visitas`
--
ALTER TABLE `cantidad_visitas`
  ADD PRIMARY KEY (`idcantidad_visitas`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`idconvocatorias`),
  ADD KEY `fk_convocatorias_tipo_conv_comun1_idx` (`idtipo_conv_comun`);

--
-- Indices de la tabla `detalle_cursos_academicos`
--
ALTER TABLE `detalle_cursos_academicos`
  ADD PRIMARY KEY (`iddetalle_cursos_academicos`),
  ADD KEY `fk_detalle_cursos_academicos_tipo_curso_otros1_idx` (`idtipo_curso_otros`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idinstitucion`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monto_depositado`
--
ALTER TABLE `monto_depositado`
  ADD PRIMARY KEY (`idmonto_depositado`),
  ADD KEY `fk_monto_depositado_realiza_cursos1_idx` (`idrealiza_cursos`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idprivilegios`),
  ADD KEY `fk_privilegios_tabla_menu1_idx` (`idtabla_menu`),
  ADD KEY `fk_privilegios_groups1_idx` (`groups_id`);

--
-- Indices de la tabla `realiza_cursos`
--
ALTER TABLE `realiza_cursos`
  ADD PRIMARY KEY (`idrealiza_cursos`),
  ADD KEY `fk_realiza_cursos_persona1_idx` (`idpersona`),
  ADD KEY `fk_realiza_cursos_detalle_cursos_academicos1_idx` (`iddetalle_cursos_academicos`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indices de la tabla `tabla_menu`
--
ALTER TABLE `tabla_menu`
  ADD PRIMARY KEY (`idtabla_menu`);

--
-- Indices de la tabla `tipo_conv_comun`
--
ALTER TABLE `tipo_conv_comun`
  ADD PRIMARY KEY (`idtipo_conv_comun`);

--
-- Indices de la tabla `tipo_curso_otros`
--
ALTER TABLE `tipo_curso_otros`
  ADD PRIMARY KEY (`idtipo_curso_otros`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cantidad_visitas`
--
ALTER TABLE `cantidad_visitas`
  MODIFY `idcantidad_visitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `idconvocatorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `detalle_cursos_academicos`
--
ALTER TABLE `detalle_cursos_academicos`
  MODIFY `iddetalle_cursos_academicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idinstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `monto_depositado`
--
ALTER TABLE `monto_depositado`
  MODIFY `idmonto_depositado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idprivilegios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `realiza_cursos`
--
ALTER TABLE `realiza_cursos`
  MODIFY `idrealiza_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `tabla_menu`
--
ALTER TABLE `tabla_menu`
  MODIFY `idtabla_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipo_conv_comun`
--
ALTER TABLE `tipo_conv_comun`
  MODIFY `idtipo_conv_comun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_curso_otros`
--
ALTER TABLE `tipo_curso_otros`
  MODIFY `idtipo_curso_otros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD CONSTRAINT `fk_convocatorias_tipo_conv_comun1` FOREIGN KEY (`idtipo_conv_comun`) REFERENCES `tipo_conv_comun` (`idtipo_conv_comun`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_cursos_academicos`
--
ALTER TABLE `detalle_cursos_academicos`
  ADD CONSTRAINT `fk_detalle_cursos_academicos_tipo_curso_otros1` FOREIGN KEY (`idtipo_curso_otros`) REFERENCES `tipo_curso_otros` (`idtipo_curso_otros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `monto_depositado`
--
ALTER TABLE `monto_depositado`
  ADD CONSTRAINT `fk_monto_depositado_realiza_cursos1` FOREIGN KEY (`idrealiza_cursos`) REFERENCES `realiza_cursos` (`idrealiza_cursos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD CONSTRAINT `fk_privilegios_groups1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_privilegios_tabla_menu1` FOREIGN KEY (`idtabla_menu`) REFERENCES `tabla_menu` (`idtabla_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `realiza_cursos`
--
ALTER TABLE `realiza_cursos`
  ADD CONSTRAINT `fk_realiza_cursos_detalle_cursos_academicos1` FOREIGN KEY (`iddetalle_cursos_academicos`) REFERENCES `detalle_cursos_academicos` (`iddetalle_cursos_academicos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_realiza_cursos_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
