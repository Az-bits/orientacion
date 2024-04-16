-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-08-2021 a las 12:39:32
-- Versión del servidor: 10.1.48-MariaDB-0+deb9u2
-- Versión de PHP: 7.0.33-0+deb9u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_adm_webs`
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
  `b_descripcion` text,
  `b_estado` varchar(45) DEFAULT NULL,
  `b_fecha_reg` date DEFAULT NULL,
  `b_id_usuario` int(11) NOT NULL,
  `b_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`idblog`, `b_imagen`, `b_titulo`, `b_fecha_publicicaion`, `b_descripcion`, `b_estado`, `b_fecha_reg`, `b_id_usuario`, `b_update`) VALUES
(1, 'user_1615311460.jpg', 'ASDASDASDSAD', '2021-03-09', '<h2 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 35px; line-height: 1.2em; color: rgb(34, 34, 34); letter-spacing: normal;\">Tamaño media carta o estamento:<span class=\"ez-toc-section-end\" style=\"box-sizing: inherit;\"></span></h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">Cuando se utiliza media carta, también denominada como hoja estamento las medidas corresponden con la mitad de la hoja carta:</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">En pulgadas: 5,5 x 8,5</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">En milímetros: 140 x 216</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">En cm: 14 x 21,6</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">En pixels: 1653,54 px ancho y 2480,32 px de alto ( para resolución de 300 ppp)</p><table width=\"591\" style=\"box-sizing: inherit; border-width: 1px 0px 0px 1px; border-style: solid; border-color: rgba(0, 0, 0, 0.1); border-image: initial; border-collapse: separate; border-spacing: 0px; margin: 0px 0px 1.5em; width: 740px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal; height: 81px;\"><tbody style=\"box-sizing: inherit;\"><tr style=\"box-sizing: inherit;\"><td style=\"box-sizing: inherit; border-width: 0px 1px 1px 0px; border-style: solid; border-color: rgba(0, 0, 0, 0.1); border-image: initial; padding: 8px;\"><img class=\"alignnone wp-image-3819 lazyloaded\" src=\"https://modelo-carta.com/wp-content/uploads/2018/03/Tama%C3%B1o-media-carta-pulgadas.jpg\" alt=\"\" width=\"197\" height=\"163\" sizes=\"(max-width: 197px) 100vw, 197px\" srcset=\"https://modelo-carta.com/wp-content/uploads/2018/03/Tamaño-media-carta-pulgadas.jpg 348w, https://modelo-carta.com/wp-content/uploads/2018/03/Tamaño-media-carta-pulgadas-300x248.jpg 300w\" data-ll-status=\"loaded\" style=\"box-sizing: inherit; height: auto; max-width: 100%;\"></td><td style=\"box-sizing: inherit; border-width: 0px 1px 1px 0px; border-style: solid; border-color: rgba(0, 0, 0, 0.1); border-image: initial; padding: 8px;\"><img class=\"alignnone wp-image-3818 lazyloaded\" src=\"https://modelo-carta.com/wp-content/uploads/2018/03/Tama%C3%B1o-media-carta-mil%C3%ADmetros.jpg\" alt=\"\" width=\"218\" height=\"180\" sizes=\"(max-width: 218px) 100vw, 218px\" srcset=\"https://modelo-carta.com/wp-content/uploads/2018/03/Tamaño-media-carta-milímetros.jpg 348w, https://modelo-carta.com/wp-content/uploads/2018/03/Tamaño-media-carta-milímetros-300x248.jpg 300w\" data-ll-status=\"loaded\" style=\"box-sizing: inherit; height: auto; max-width: 100%;\"></td></tr></tbody></table><h2 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 35px; line-height: 1.2em; color: rgb(34, 34, 34); letter-spacing: normal;\"><span class=\"ez-toc-section\" id=\"Tamano_de_hoja_doble_carta_o_tabloide\" style=\"box-sizing: inherit;\"></span>Tamaño de hoja doble carta o tabloide:<span class=\"ez-toc-section-end\" style=\"box-sizing: inherit;\"></span></h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal; text-align: justify;\">Tal y como podría esperarse, las medidas de la hoja doble carta corresponden con el tamaño de dos hojas cartas unidas por el lado más corto.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal; text-align: justify;\">En pulgadas: 11 x 17</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal; text-align: justify;\">En milímetros: 279,4 x 431,8 milímetros.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal; text-align: justify;\">En cm: 27,94 x 43,18</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 17px; letter-spacing: normal;\">En pixels: 3300,00 px de ancho, 5100,00 px de alto ( Para resolución de 300 ppp)</p>', 'activo', '2021-03-09', 1, '2021-03-09 13:37:47'),
(4, 'user_1619534598.jpg', 'ARQUITECTURA', '2021-04-27', '<p>asdsadsadsads</p>', 'activo', '2021-04-27', 1, '2021-04-27 10:43:18'),
(5, 'user_1619534834.jpg', 'PRUEVA124', '2021-04-27', '<p>sdsassdsfds</p>', 'activo', '2021-04-27', 1, '2021-04-27 13:24:47'),
(6, 'user_1621954847.jpg', 'PRUEBA', '2021-05-06', '<h1><b>Esto es una prueba </b>:)</h1><p><img src=\"data:image/png;base64,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\" style=\"width: 178px;\" data-filename=\"images.png\"><br></p><p></p>', 'activo', '2021-05-06', 1, '2021-05-25 11:00:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_visitas`
--

CREATE TABLE `cantidad_visitas` (
  `idcantidad_visitas` int(11) NOT NULL,
  `can_ip_usuario` varchar(45) DEFAULT NULL,
  `can_sis_operativo` text,
  `can_fecha_reg` date DEFAULT NULL,
  `can_update` date DEFAULT NULL,
  `can_cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `idconvocatorias` int(11) NOT NULL,
  `con_foto_portada` varchar(45) DEFAULT NULL,
  `con_titulo` varchar(255) DEFAULT NULL,
  `con_descripcion` text,
  `con_estado` varchar(45) DEFAULT NULL,
  `con_fecha_reg` date DEFAULT NULL,
  `con_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `con_iduser` int(11) NOT NULL,
  `idtipo_conv_comun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`idconvocatorias`, `con_foto_portada`, `con_titulo`, `con_descripcion`, `con_estado`, `con_fecha_reg`, `con_update`, `con_iduser`, `idtipo_conv_comun`) VALUES
(2, 'user_1615384411.jpg', 'TAMAÑO DE HOJA DOBLE CARTA O TABLOIDE:', '<p style=\"margin: 35px 0px; color: rgb(34, 34, 34); font-family: \" scope=\"\" one\",=\"\" serif;=\"\" font-size:=\"\" 23.1px;=\"\" letter-spacing:=\"\" normal;\"=\"\">En CSS es posible especificar el aspecto que tendrán los bordes de cualquier elemento, pudiendo incluso, dar valores distintos a las diferentes <span style=\"font-family: var(--header-font); font-variation-settings: \" wght\"=\"\" 725;=\"\" font-weight:=\"\" 700;=\"\" letter-spacing:=\"\" -0.75pt;=\"\" line-height:=\"\" 23.1px;\"=\"\">zonas</span> predeterminadas del elemento (zona superior, izquierda, derecha o zona inferior).</p><p style=\"margin: 35px 0px; color: rgb(34, 34, 34); font-family: \" scope=\"\" one\",=\"\" serif;=\"\" font-size:=\"\" 23.1px;=\"\" letter-spacing:=\"\" normal;\"=\"\">Las propiedades básicas existentes de los bordes en CSS son las siguientes:</p><table style=\"width: 1024px; border: 1px solid rgb(153, 153, 153); box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 15px; margin: 2em 0px; color: rgb(17, 17, 17); font-family: \" scope=\"\" one\",=\"\" serif;=\"\" font-size:=\"\" 23.1px;=\"\" letter-spacing:=\"\" normal;\"=\"\"><thead><tr style=\"background: var(--theme-gradient); color: rgb(238, 238, 238);\"><th style=\"border: 1px solid var(--theme-color); font-family: var(--header-font); font-weight: 400; text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 4px; font-size: 18px; padding: 8px;\"><span style=\"color: rgb(8, 82, 148);\">Propiedad</span></th><th style=\"border: 1px solid var(--theme-color); font-family: var(--header-font); font-weight: 400; text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 4px; font-size: 18px; padding: 8px;\"><span style=\"color: rgb(8, 82, 148);\">Valor</span></th><th style=\"border: 1px solid var(--theme-color); font-family: var(--header-font); font-weight: 400; text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 4px; font-size: 18px; padding: 8px;\"><span style=\"color: rgb(8, 82, 148);\">Significado</span></th></tr></thead><tbody><tr style=\"background: rgb(238, 238, 238);\"><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\"><code style=\"letter-spacing: -0.25pt; line-height: 21px; color: rgb(59, 99, 219); font-size: 1rem; font-family: var(--terminal-font); font-weight: 600;\">border-color</code> <badge-type class=\"p1234\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\"><badge-type class=\"color\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\">Especifica el color que se utilizará en el borde.</td></tr><tr style=\"background-color: rgb(204, 219, 249);\"><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\"><code style=\"letter-spacing: -0.25pt; line-height: 21px; color: rgb(59, 99, 219); font-size: 1rem; font-family: var(--terminal-font); font-weight: 600;\">border-width</code> <badge-type class=\"p1234\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\">thin | <span style=\"font-family: var(--header-font); font-variation-settings: \" wght\"=\"\" 725;=\"\" font-weight:=\"\" 700;=\"\" letter-spacing:=\"\" -0.75pt;=\"\" line-height:=\"\" 18.9px;\"=\"\">medium</span> | thick | <badge-type class=\"size\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\">Especifica un tamaño predefinido para el grosor del borde.</td></tr><tr style=\"background: rgb(238, 238, 238);\"><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\"><code style=\"letter-spacing: -0.25pt; line-height: 21px; color: rgb(59, 99, 219); font-size: 1rem; font-family: var(--terminal-font); font-weight: 600;\">border-style</code> <badge-type class=\"p1234\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\"><span style=\"font-family: var(--header-font); font-variation-settings: \" wght\"=\"\" 725;=\"\" font-weight:=\"\" 700;=\"\" letter-spacing:=\"\" -0.75pt;=\"\" line-height:=\"\" 18.9px;\"=\"\">none</span> | <badge-type class=\"style\"></badge-type></td><td style=\"border: 1px solid rgb(221, 221, 221); font-size: 0.9rem; padding: 8px;\">Define el estilo para el borde a utilizar (ver más adelante).</td></tr></tbody></table><p style=\"margin: 35px 0px; color: rgb(34, 34, 34); font-family: \" scope=\"\" one\",=\"\" serif;=\"\" font-size:=\"\" 23.1px;=\"\" letter-spacing:=\"\" normal;\"=\"\">En primer lugar, <code style=\"letter-spacing: -0.25pt; line-height: 21px; color: rgb(59, 99, 219); font-size: 1rem; font-family: var(--terminal-font); font-weight: 600;\">border-color</code> establece el color del borde, de la misma forma que lo hicimos en apartados anteriores de colores. En segundo lugar, con <code style=\"letter-spacing: -0.25pt; line-height: 21px; color: rgb(59, 99, 219); font-size: 1rem; font-family: var(--terminal-font); font-weight: 600;\">border-width</code> podemos establecer la anchura o grosor del borde utilizando tanto <span style=\"font-family: var(--header-font); font-variation-settings: \" wght\"=\"\" 725;=\"\" font-weight:=\"\" 700;=\"\" letter-spacing:=\"\" -0.75pt;=\"\" line-height:=\"\" 23.1px;\"=\"\">palabras clave</span> predefinidas como un tamaño concreto con cualquier tipo de las <span style=\"font-family: var(--header-font); font-variation-settings: \" wght\"=\"\" 725;=\"\" font-weight:=\"\" 700;=\"\" letter-spacing:=\"\" -0.75pt;=\"\" line-height:=\"\" 23.1px;\"=\"\">unidades</span> ya vistas.</p>', 'activo', '2021-03-10', '2021-03-10 14:41:16', 1, 2),
(6, 'user_1619536750.jpg', 'PRUEVA', '<p>asfsadsa</p>', 'activo', '2021-04-27', '2021-05-07 03:48:36', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cursos_academicos`
--

CREATE TABLE `detalle_cursos_academicos` (
  `iddetalle_cursos_academicos` int(11) NOT NULL,
  `det_img_portada` varchar(45) DEFAULT NULL,
  `det_titulo` varchar(255) DEFAULT NULL,
  `det_descripcion` text,
  `det_costo` double(10,2) DEFAULT NULL,
  `det_cupo_max` int(11) DEFAULT NULL,
  `det_fecha_ini` date DEFAULT NULL,
  `det_fecha_fin` date DEFAULT NULL,
  `det_estado` varchar(45) DEFAULT NULL,
  `det_fecha_reg` date DEFAULT NULL,
  `det_iduser` int(11) NOT NULL,
  `det_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idtipo_curso_otros` int(11) NOT NULL,
  `det_costo_profe` double(10,2) DEFAULT NULL,
  `det_codigo` varchar(45) DEFAULT NULL,
  `det_carga_horaria` int(11) DEFAULT NULL,
  `det_version` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_cursos_academicos`
--

INSERT INTO `detalle_cursos_academicos` (`iddetalle_cursos_academicos`, `det_img_portada`, `det_titulo`, `det_descripcion`, `det_costo`, `det_cupo_max`, `det_fecha_ini`, `det_fecha_fin`, `det_estado`, `det_fecha_reg`, `det_iduser`, `det_update`, `idtipo_curso_otros`, `det_costo_profe`, `det_codigo`, `det_carga_horaria`, `det_version`) VALUES
(1, 'user_1615404175.jpg', 'CURSO DE LARAVEL 5 COMPLETOO', '<div class=\"info-container\" style=\"box-shadow: none; padding: 20px 30px; margin: 0px 0px 10px; border-radius: 3px; color: rgb(3, 27, 78); font-family: Muli, sans-serif; font-size: medium; letter-spacing: normal;\"><h3 style=\"font-size: 1.2rem; line-height: 1.4;\">Acerca del curso</h3><div class=\"course-description\" style=\"color: rgba(3, 27, 78, 0.8);\">Con el curso de laravel 5 completo conocerás como utilizar de forma correcta y profesional este framework con la finalidad de crear páginas web profesionales utilizando PHP.</div></div><div class=\"info-container\" style=\"box-shadow: none; padding: 20px 30px; margin: 10px 0px; border-radius: 3px; color: rgb(3, 27, 78); font-family: Muli, sans-serif; font-size: medium; letter-spacing: normal;\"><h3 style=\"font-size: 1.2rem; line-height: 1.4;\">¿Qué aprenderás?</h3><div class=\"course-description\" style=\"color: rgba(3, 27, 78, 0.8);\">Entre las distintas temáticas que aprenderás a lo largo del curso de laravel 5 completo encontrarás:<br>• Modelos.<br>• Usuarios.<br>• Validaciones.<br>• Autenticaciones.<br>• Optimizar proyectos.<br><br>Este curso de laravel 5 completo está dirigido a aquellas personas e ingenieros de sistemas especializado en php que desean mejorar y optimizar sus códigos de forma profesional y efectiva.<br><br>Para realizar este curso de laravel 5 completo es necesario tener conocimientos previos de php444</div></div>', 250.00, 5, '2021-03-15', '2021-03-21', 'activo', '2021-03-10', 1, '2021-06-01 20:56:33', 1, 300.00, NULL, 120, 'VERSIÓN 1'),
(18, 'user_1620052994.jpg', 'MIKROTIC', '<header class=\"entry-header\" style=\"margin: 0px 0px 1.71429rem; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 13px; vertical-align: baseline; z-index: 1; position: relative; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(68, 68, 68); letter-spacing: normal;\"><h1 class=\"entry-title\" style=\"margin: 18px 0px 9px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 1.2; font-family: Arial, Helvetica, sans-serif; font-size: 1.57143rem; vertical-align: baseline;\">¿QUE ES MIKROTIK?</h1><div class=\"comments-link\" style=\"margin: 1.71429rem 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.84615; font-family: inherit; font-size: 0.928571rem; vertical-align: baseline; color: rgb(117, 117, 117);\"><a href=\"https://www.cqnetcr.com/blog/que-es-mikrotik/#respond\" style=\"margin: 0px; padding: 0px; color: rgb(117, 117, 117); border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 13px; vertical-align: baseline;\">Deja un comentario</a></div></header><div class=\"entry-content\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.71429; font-family: Helvetica, Arial, sans-serif; font-size: 13px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: normal;\"><div class=\"fb-like fb_iframe_widget\" data-href=\"https://www.cqnetcr.com/blog/que-es-mikrotik/\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"false\" data-size=\"large\" data-width=\"450\" data-share=\"1\" fb-xfbml-state=\"rendered\" fb-iframe-plugin-query=\"action=like&amp;app_id=306248609776266&amp;container_width=762&amp;href=https%3A%2F%2Fwww.cqnetcr.com%2Fblog%2Fque-es-mikrotik%2F&amp;layout=standard&amp;locale=es_LA&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large&amp;width=450\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; display: inline-block; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: bottom; display: inline-block; position: relative; text-align: justify; width: 450px; height: 28px;\"><iframe name=\"f839858c627e8c\" width=\"450px\" height=\"1000px\" data-testid=\"fb:like Facebook Social Plugin\" title=\"fb:like Facebook Social Plugin\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://web.facebook.com/plugins/like.php?action=like&amp;app_id=306248609776266&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df98d87148d7264%26domain%3Dwww.cqnetcr.com%26origin%3Dhttps%253A%252F%252Fwww.cqnetcr.com%252Ff2f9f6e3b484a8c%26relation%3Dparent.parent&amp;container_width=762&amp;href=https%3A%2F%2Fwww.cqnetcr.com%2Fblog%2Fque-es-mikrotik%2F&amp;layout=standard&amp;locale=es_LA&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large&amp;width=450\" class=\"\" style=\"margin: 0px 0px 1.71429rem; padding: 0px; max-width: 100%; border-width: initial; border-style: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: absolute; visibility: visible; width: 450px; height: 28px;\"></iframe></span></div><br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\"><img class=\"alignnone size-full wp-image-18\" src=\"https://www.cqnetcr.com/blog/wp-content/uploads/2018/10/q-mikrotik.jpg\" alt=\"Que es Mikrotik\" width=\"763\" height=\"363\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Nivel:</strong>&nbsp;Básico</p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\">En este artículo nos referiremos a Mikrotik como solución completa a cualquier escenario de red. Veremos un poco de historia de la marca y aspectos importantes a saber del RouterOS y los Routerboard.<span id=\"more-6\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></span></p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\">Mikrotik es un&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">fabricante de hardware y software de routers.</strong>&nbsp;Usado mundialmente en millones de redes de todas las escalas. Esta empresa se fundo en 1995 en Latvia al norte de Europa y ya cuenta con varios miles de técnicos en todo el mundo brindando el apoyo&nbsp;a la marca.</p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\">Una característica a destacar de Mikrotik es su&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">sistema operativo</strong>&nbsp;o&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">RouterOS</strong>; es un sistema operativo stand-alone basado en el kernel de&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Linux2.6</strong>, de gran potencia y capaz de ejecutar cualquier configuración de red, las configuraciones más populares son:</p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\">•Firewall<br style=\"margin: 0px; padding: 0px;\">•Routing<br style=\"margin: 0px; padding: 0px;\">•Forwarding<br style=\"margin: 0px; padding: 0px;\">•MPLS<br style=\"margin: 0px; padding: 0px;\">•VPN<br style=\"margin: 0px; padding: 0px;\">•Wireless<br style=\"margin: 0px; padding: 0px;\">•HotSpot<br style=\"margin: 0px; padding: 0px;\">•Calidad de Servicio (QoS)<br style=\"margin: 0px; padding: 0px;\">•Web Proxy</p><p style=\"margin-right: 0px; margin-bottom: 1.71429rem; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.71429; font-family: inherit; vertical-align: baseline; text-align: justify;\">Las funciones del RouterOS dependen de la&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">licencia</strong>&nbsp;con la que cuente&nbsp;el dispositivo, todos los dispositivos Mikrotik cuentan con una licencia de uso;&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Lista de licencias y configuraciones permitidas:</strong></p></div>', 100.00, 9, '2021-05-03', '2021-05-24', 'activo', '2021-05-03', 1, '2021-05-06 07:43:04', 1, 150.00, '2021051014', 10, 'VERSION 1'),
(19, 'user_1620363233.jpg', 'PRUEBA PPP', '<p><b>prueba</b> prueba</p>', 150.00, 59, '2021-06-17', '2021-08-06', 'activo', '2021-05-06', 1, '2021-06-01 20:56:29', 1, 400.00, '2021052221', 120, '1.0'),
(20, 'user_1625543485.jpg', 'FFDSF', '<p>BYGBVYB</p>', 100.00, 2, '2021-07-07', '2021-07-23', 'activo', '2021-07-05', 3, '2021-07-05 23:51:24', 1, 200.00, '2021072324', 100, 'VERSION 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `groups_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `groups_update`) VALUES
(1, 'administrador', 'administrator', '2021-01-09 08:24:20'),
(2, 'encargado', 'General User', '2021-01-08 13:26:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idinstitucion` int(11) NOT NULL,
  `in_logo` varchar(45) DEFAULT NULL,
  `in_nombre` text,
  `in_sigla` varchar(45) DEFAULT NULL,
  `in_correo1` varchar(255) DEFAULT NULL,
  `in_correo2` varchar(255) DEFAULT NULL,
  `in_celular1` varchar(20) DEFAULT NULL,
  `in_celular2` varchar(20) DEFAULT NULL,
  `in_telefono1` varchar(20) DEFAULT NULL,
  `in_telefono2` varchar(20) DEFAULT NULL,
  `in_facebook` text,
  `in_twitter` text,
  `ins_url_youtube` text,
  `in_ubicacion` text,
  `in_google_map` text,
  `in_mision` text,
  `in_vision` text,
  `in_historia` text,
  `idusuario` int(11) DEFAULT NULL,
  `in_fecha_reg` date DEFAULT NULL,
  `in_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `in_foto_autoridad` varchar(45) DEFAULT NULL,
  `in_nombre_autoridad` varchar(255) DEFAULT NULL,
  `foto_vicerrector` varchar(45) NOT NULL,
  `nombre_vicerrector` varchar(45) NOT NULL,
  `foto_director_carrera` varchar(45) NOT NULL,
  `nombre_director_carrera` varchar(45) NOT NULL,
  `foto_ejecutivo_carrera` varchar(45) NOT NULL,
  `nombre_ejecutivo_carrera` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idinstitucion`, `in_logo`, `in_nombre`, `in_sigla`, `in_correo1`, `in_correo2`, `in_celular1`, `in_celular2`, `in_telefono1`, `in_telefono2`, `in_facebook`, `in_twitter`, `ins_url_youtube`, `in_ubicacion`, `in_google_map`, `in_mision`, `in_vision`, `in_historia`, `idusuario`, `in_fecha_reg`, `in_update`, `in_foto_autoridad`, `in_nombre_autoridad`, `foto_vicerrector`, `nombre_vicerrector`, `foto_director_carrera`, `nombre_director_carrera`, `foto_ejecutivo_carrera`, `nombre_ejecutivo_carrera`) VALUES
(1, 'inst_1611003247.jpg', 'GOBIERNO AUTÓNOMO MUNICIPAL DE CARANAVI', 'GAMC', 'caranavi@gmail.com', '', '', '', '', '21131232', 'https://www.facebook.com/xavitravelexecutive', '', '', ' Calle Gallardo, Casa Gallardo, Zona Gran Poder', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6247.444997804558!2d-67.56962224645221!3d-15.833970730986431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f8f82a96d0a13%3A0xd6bcbe391de2436f!2sAlcaldia%20Municipal%20de%20Caranavi!5e1!3m2!1ses!2sbo!4v1610998195680!5m2!1ses!2sbo', '“EL GOBIERNO AUTÓNOMO MUNICIPAL DE CARANAVI ES UNA ENTIDAD TERRITORIAL AUTÓNOMA METROPOLITANA QUE IMPULSA EL DESARROLLO ECONÓMICO LOCAL, HUMANO Y TERRITORIAL A TRAVÉS DE LA PRESTACIÓN DE SERVICIOS PÚBLICOS A LA POBLACIÓN DE LOS DISTRITOS URBANOS Y RURALES PARA CONTRIBUIR AL VIVIR BIEN, BASADOS EN LOS PRINCIPIOS DE DEMOCRACIA PARTICIPATIVA, EFECTIVIDAD Y EQUIDAD DE SUS POLÍTICAS PÚBLICAS”', '“CARANAVI ES UN TERRITORIO CON AGUA PARA LA VIDA Y LA PRODUCCIÓN, CON EMPRENDIMIENTOS MUNICIPALES Y COMUNITARIOS QUE FORTALECEN LA ECONOMÍA PLURAL DE MUNICIPIO, CON MAYOR DESARROLLO HUMANO INTEGRAL, DONDE SE PRACTICA LA VIDA COMUNITARIA, DONDE LA ARMONÍA CON LA MADRE TIERRA ES MAYOR Y SUS HABITANTES EJERCEN SU DERECHO A LA CIUDAD PARTICIPANDO DE LA PLANIFICACIÓN Y GESTIÓN MUNICIPAL PARA VIVIR BIEN.\r\nCARANAVI TIENE UN GOBIERNO AUTÓNOMO MUNICIPAL QUE ES REFERENTE NACIONAL POR SU MAYOR AUTONOMÍA ECONÓMICA, POR SU MODELO DE GESTIÓN PARTICIPATIVA, EFICIENTE, TRANSPARENTE, ARTICULADORA, CON GOBIERNO ELECTRÓNICO, CON SERVICIOS ESPECIALIZADOS Y DE CALIDAD, Y CON SERVIDORES PÚBLICOS ÉTICOS, COMPETENTES Y COMPROMETIDOS CON EL DESARROLLO TERRITORIAL INTEGRAL DE CARANAVI Y EL VIVIR BIEN”', '', 1, '2021-06-17', '2021-06-17 10:42:24', 'inst_1623889477.jpg', 'JUAN CARLOS MERCADO NINA', 'inst_1623940899.jpg', 'VICERRECTOR', 'inst_1623940927.jpg', 'DIRECTOR', 'inst_1623940945.jpg', 'CENTRO DE ESTUDIANTES');

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
  `monto_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `monto_iduser` int(11) DEFAULT NULL,
  `idrealiza_cursos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monto_depositado`
--

INSERT INTO `monto_depositado` (`idmonto_depositado`, `monto_depositados`, `monto_estado`, `monto_fecha_reg`, `monto_update`, `monto_iduser`, `idrealiza_cursos`) VALUES
(296, 120.00, 'activo', '2021-05-04', '2021-05-04 22:05:49', 1, 152),
(297, 200.00, 'activo', '2021-05-04', '2021-05-04 22:06:22', 1, 153),
(298, 200.00, 'activo', '2021-05-04', '2021-05-04 22:07:00', 1, 154),
(299, 150.00, 'activo', '2021-05-04', '2021-05-04 22:07:36', 1, 155),
(300, 150.00, 'activo', '2021-05-04', '2021-05-04 22:13:30', 1, 156),
(301, 50.00, 'activo', '2021-05-04', '2021-05-04 22:20:29', 1, 157),
(302, 52.50, 'activo', '2021-05-04', '2021-05-04 22:20:50', 1, 158),
(303, 25.50, 'activo', '2021-05-04', '2021-05-04 22:22:14', 1, 159),
(304, 120.00, 'activo', '2021-05-04', '2021-05-04 22:32:55', 1, 160),
(305, 20.50, 'activo', '2021-05-04', '2021-05-04 22:44:08', 1, 161),
(306, 150.00, 'activo', '2021-05-04', '2021-05-04 22:52:30', 1, 162),
(307, 150.00, 'activo', '2021-05-06', '2021-05-06 07:09:27', 1, 163),
(308, 100.00, 'activo', '2021-05-06', '2021-05-06 07:32:30', 1, 164),
(309, 200.00, 'activo', '2021-05-06', '2021-05-06 07:35:06', 1, 165),
(310, 150.50, 'activo', '2021-05-06', '2021-05-06 07:36:55', 1, 166),
(311, 200.00, 'activo', '2021-05-06', '2021-05-06 07:38:37', 1, 167),
(312, 150.50, 'activo', '2021-05-06', '2021-05-06 07:41:32', 1, 168),
(313, 105.50, 'activo', '2021-05-06', '2021-05-06 07:43:04', 1, 169),
(314, 10.50, 'activo', '2021-05-06', '2021-05-06 07:48:11', 1, 152),
(315, 119.50, 'activo', '2021-05-06', '2021-05-06 07:48:58', 1, 152),
(316, 150.00, 'activo', '2021-05-06', '2021-05-07 04:23:48', 4, 170);

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

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `per_ci`, `per_dpto`, `per_nombre`, `per_paterno`, `per_materno`, `per_celular`, `per_correo`, `per_ru`, `per_id_persona_upea`) VALUES
(86, '10028685', 'LP', 'RODRIGO', 'LECOÑA', 'QUISPE', '63259224', 'rodry@gmail.com', '1220011', 1),
(87, '10077111', 'LP', 'RAQUEL', 'COARITE', 'ATINCORI', '63259224', 'raqy@gmail.com', '52200114', 1),
(88, '8425408', 'LP', 'ADRIAN', 'LECOÑA', 'QUISPE', '63259224', 'adfry@gmail.com', '20055411', 1),
(89, '2550596', 'LP', 'CARLOS TITO', 'VILLCA', 'CASTILLO', '63259224', 'titorodry@gmail.com', '2004411', 1),
(90, '10028684', 'LP', 'ALVARO', 'LECOÑA', 'QUISPE', '63259224', 'alvy@gmail.com', '65456456', 1),
(91, '5223399', 'LP', 'HEIDY VANESSA', 'NAVA', 'GONZALES', '63259224', 'rodry@gmail.com', '6465464', 1),
(92, '5820374', 'SC', 'LIDIO GROVER', 'CONDORI', 'GONZA', '63259224', 'lol@gmail.com', '25004411', 1),
(93, '7527164', 'LP', 'ALBARO GONZALO', 'CALIZAYA', 'ALDANA', '63259224', 'alverto@gmail.com', '25001144', 1),
(94, '2000580', 'LP', 'RICHARD HERNAN', 'CHUQUIMIA', 'CONDORI', '63259224', 'rodry@gmail.com', '25554411', 1),
(95, '5002704', 'TJ', 'ISRAEL FRANZ', 'QUISBERT', 'QUISPE', '75522441', 'israel@gmail.com', '', 1),
(96, '4750009', 'LP', 'DAVID JULIO', 'OSCO', 'TINTAYA', '75522441', 'rody@gmail.com', '2005511', 1),
(97, '4201594', 'LP', 'FREDY MAX', 'COARITE', 'LOAYZA', '63259224', 'lol@gmail.com', '5221444', 1),
(98, '300234', 'LP', 'SEVERO', 'CHAMBI', 'CONDORI', '63259224', 'rodry@gmail.com', '1002555', 1),
(99, '7810802', 'SC', 'RAMIRO', 'MENDOZA', 'ASISTIRI', '63259224', 'rodry@gmail.com', '200554111', 1),
(100, '5236376', 'CBB', 'RAMIRO JOSE', 'IGLESIAS', 'PEREZ', '63259224', 'rodry@gmail.com', '25500144', 1),
(101, '122242fffff', 'LP', 'CHAPO ', 'GUZMAN', 'GUZMAN', '44321111', 'e@gmail.com', '20004881', 4);

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
  `pri_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
(15, 'activo', 15, 1, NULL, '2021-06-01 10:51:12'),
(17, 'activo', 17, 1, 1, '2021-04-28 18:47:13'),
(18, 'activo', 18, 1, 1, '2021-04-29 09:52:11'),
(19, 'activo', 5, 2, NULL, '2021-05-02 23:04:51'),
(20, 'activo', 7, 2, NULL, '2021-05-02 23:04:55'),
(21, 'activo', 15, 2, 1, '2021-05-02 16:05:39'),
(22, 'activo', 17, 2, NULL, '2021-05-02 23:04:58'),
(23, 'activo', 18, 2, 1, '2021-05-02 16:05:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza_cursos`
--

CREATE TABLE `realiza_cursos` (
  `idrealiza_cursos` int(11) NOT NULL,
  `reali_estado` varchar(45) DEFAULT NULL,
  `reali_fecha_reg` date DEFAULT NULL,
  `reali_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reali_iduser` int(11) NOT NULL,
  `realiza_fecha_entrega` date DEFAULT NULL,
  `realiza_estado_reserva` varchar(45) DEFAULT NULL,
  `reali_codigo` varchar(45) DEFAULT NULL,
  `idpersona` int(11) NOT NULL,
  `iddetalle_cursos_academicos` int(11) NOT NULL,
  `reali_tipo_est_prof` varchar(45) DEFAULT NULL,
  `reali_simbolo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `realiza_cursos`
--

INSERT INTO `realiza_cursos` (`idrealiza_cursos`, `reali_estado`, `reali_fecha_reg`, `reali_update`, `reali_iduser`, `realiza_fecha_entrega`, `realiza_estado_reserva`, `reali_codigo`, `idpersona`, `iddetalle_cursos_academicos`, `reali_tipo_est_prof`, `reali_simbolo`) VALUES
(152, 'activo', '2021-05-04', '2021-05-04 22:05:49', 1, '0000-00-00', 'inscrito', '202105042249', 86, 1, 'ESTUDIANTE', ''),
(153, 'activo', '2021-05-04', '2021-05-04 22:06:22', 1, '0000-00-00', 'inscrito', '202105042222', 87, 1, 'ESTUDIANTE', ''),
(154, 'activo', '2021-05-04', '2021-05-04 22:07:00', 1, '0000-00-00', 'inscrito', '202105042200', 88, 1, 'PROFESIONAL', 'ING.'),
(155, 'activo', '2021-05-04', '2021-05-04 22:07:36', 1, '0000-00-00', 'inscrito', '202105042236', 89, 1, 'PROFESIONAL', 'ING.'),
(156, 'activo', '2021-05-04', '2021-05-04 22:13:30', 1, '0000-00-00', 'inscrito', '202105042230', 90, 1, 'PROFESIONAL', 'ING.'),
(157, 'activo', '2021-05-04', '2021-05-04 22:20:29', 1, '0000-00-00', 'inscrito', '202105042229', 86, 18, 'ESTUDIANTE', NULL),
(158, 'activo', '2021-05-04', '2021-05-04 22:20:50', 1, '0000-00-00', 'inscrito', '202105042250', 87, 18, 'ESTUDIANTE', NULL),
(159, 'activo', '2021-05-04', '2021-05-04 22:22:14', 1, '0000-00-00', 'inscrito', '202105042214', 91, 18, 'PROFESIONAL', 'ING.'),
(160, 'activo', '2021-05-04', '2021-05-04 22:32:55', 1, '0000-00-00', 'inscrito', '202105042255', 92, 18, 'PROFESIONAL', 'LIC.'),
(161, 'activo', '2021-05-04', '2021-05-04 22:44:08', 1, '0000-00-00', 'inscrito', '202105042208', 93, 18, 'PROFESIONAL', 'LIC.'),
(162, 'inactivo', '2021-05-04', '2021-05-04 23:08:12', 1, '2021-05-04', 'entregado', '202105042230', 94, 18, 'PROFESIONAL', 'ING.'),
(163, 'activo', '2021-05-06', '2021-05-06 07:30:30', 1, '0000-00-00', 'inscrito', '202105060730', 95, 18, 'PROFESIONAL', 'ING.'),
(164, 'activo', '2021-05-06', '2021-05-06 07:32:54', 1, '0000-00-00', 'inscrito', '202105060754', 96, 18, 'ESTUDIANTE', ''),
(165, 'activo', '2021-05-06', '2021-05-06 07:35:05', 1, '0000-00-00', 'inscrito', '202105060705', 97, 1, 'ESTUDIANTE', NULL),
(166, 'activo', '2021-05-06', '2021-05-06 07:36:55', 1, '0000-00-00', 'inscrito', '202105060755', 98, 1, 'ESTUDIANTE', NULL),
(167, 'activo', '2021-05-06', '2021-05-06 07:38:37', 1, '0000-00-00', 'inscrito', '202105060737', 91, 1, 'PROFESIONAL', ''),
(168, 'activo', '2021-05-06', '2021-05-06 07:41:32', 1, '0000-00-00', 'inscrito', '202105060732', 99, 1, 'ESTUDIANTE', NULL),
(169, 'activo', '2021-05-06', '2021-05-06 07:43:04', 1, '0000-00-00', 'inscrito', '202105060704', 100, 18, 'PROFESIONAL', 'DOC.'),
(170, 'activo', '2021-05-06', '2021-05-07 04:23:48', 4, '0000-00-00', 'inscrito', '202105062248', 101, 19, 'ESTUDIANTE', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idslider` int(11) NOT NULL,
  `sli_titulo` text,
  `slid_imagen` text,
  `sli_fecha_reg` date DEFAULT NULL,
  `sli_id_usuario` int(11) NOT NULL,
  `sli_estado` varchar(45) DEFAULT NULL,
  `sli_tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idslider`, `sli_titulo`, `slid_imagen`, `sli_fecha_reg`, `sli_id_usuario`, `sli_estado`, `sli_tipo`) VALUES
(7, 'ASDASDASDSAD', 'user_1615304167.jpg', '2021-03-09', 1, 'activo', 'img'),
(9, 'ARCHIVO DEPRUEBA', 'pdf1312Report0.pdf', '2021-03-09', 1, 'inactivo', 'pdf'),
(10, 'ARCHIVO DEPRUEBA', 'pdf1345Certificacion_Deudas_1.pdf', '2021-03-09', 1, 'activo', 'pdf'),
(13, 'SDFSDFSDFSDF', 'pdf1331MAESTRIA-EN-GESTION-DE-GOBIERNO-Y-POLITICAS-PUBLICAS.pdf', '2021-03-09', 1, 'activo', 'pdf'),
(14, 'PRUEVA1', 'user_1619536215.jpg', '2021-04-27', 1, 'activo', 'img'),
(15, 'PRUEVA', 'user_1619536263.jpg', '2021-04-27', 1, 'activo', 'img'),
(17, 'PROGRAMACION C', 'pdf2101Programación C.pdf', '2021-05-06', 4, 'activo', 'pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_menu`
--

CREATE TABLE `tabla_menu` (
  `idtabla_menu` int(11) NOT NULL,
  `tab_nombre` text,
  `tab_link_funcion` text,
  `tabl_descripcion` text,
  `tabl_estado` varchar(45) DEFAULT NULL,
  `tabl_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(1, 'CURSOS', 'activo'),
(2, 'TALLERES', 'activo'),
(5, 'SEMINARIOS', 'activo'),
(6, 'WEBINAR', 'activo'),
(11, 'CURSOS RAPIDOS', 'activo');

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
  `users_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(45) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `users_id_usuario`, `users_fecha_reg`, `users_update`, `imagen`, `codigo`) VALUES
(1, '127.0.0.1', 'fer', '$2y$10$uo3cMGBw6XVX3pkKszrzxeEt7mjGfTmVmhVI8PcAN5SQriuvUL92W', 'fer', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1628091082, 1, 'JUAN FERNANDO', 'MERCADO LUNA', 'ADMIN', '0', NULL, NULL, '2021-08-04 11:31:22', 'user_1621955561.jpg', '111111'),
(2, '', 'juan', '$2y$10$X4IFs2IJzPWRu7kBxNZbaOHttL7TeUxxeZ3RXbsR5CFGIG1ojt9Qa', 'juan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1610407334, 1, 'LUIS FERNANDO', 'MERCADO', 'JC', '', NULL, NULL, '2021-04-27 10:35:54', 'user_1610407394.jpg', '11112220'),
(3, '', 'lec', '$2y$10$CPH48UTOXkp5iO4Q6OpvquPQn86LCZVbEJdA.Ptl4nBJFBdo32O7u', 'lec', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1625543433, 1, 'RODRIGO', 'LECOÑA', 'JC', '', NULL, NULL, '2021-07-05 23:50:33', 'user_1619985870.jpg', '10028685');

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
(3, 2, 2),
(4, 3, 2);

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
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cantidad_visitas`
--
ALTER TABLE `cantidad_visitas`
  MODIFY `idcantidad_visitas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `idconvocatorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalle_cursos_academicos`
--
ALTER TABLE `detalle_cursos_academicos`
  MODIFY `iddetalle_cursos_academicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idinstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `monto_depositado`
--
ALTER TABLE `monto_depositado`
  MODIFY `idmonto_depositado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idprivilegios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `realiza_cursos`
--
ALTER TABLE `realiza_cursos`
  MODIFY `idrealiza_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
