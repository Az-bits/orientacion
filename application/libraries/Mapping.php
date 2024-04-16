<?php

class Mapping
{

    public static function map()
    {
        return [
            "1" => "Controller_sistema@inicio",

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++++++++++++++MODULOS FRONT END 200++++++++++++++++++++++++++++++++
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //RUTAS DE ADMIN
            "220" => "backend/dashboard@index",

            "26" => "Controller_estudiante@C_insertar_colegio",
            "28" => "Controller_estudiante@C_editar_colegio",
            "226" => "Controller_estudiante@C_insertar_estudiante",
            "277" => "Controller_estudiante@C_insertar_estudiante2",
            "15" => "Controller_estudiante@C_insertar_estudiante3",
            "1513" => "Controller_estudiante@C_insertar_estudiante4",

            "221" => "Controller_estudiante@V_admin_estudiante",
            "222" => "Controller_pregunta@V_admin_pregunta",
            "228" => "Controller_pregunta2@V_admin_pregunta2",

            "243" => "Controller_area@V_admin_area",
            "224" => "Controller_inteligencia@V_admin_inteligencia",

            "225" => "Controller_resultado@V_admin_resultado",
            "229" => "Controller_resultado2@V_admin_resultado2",

            //RUTAS DE USUARIO
            "287" => "Controller_resultado@V_insert_resultado",
            "297" => "Controller_resultado2@V_insert_resultado2",

            "270" => "Controller_pagina@Paginainicio",
            "251" => "Controller_pagina@V_principal2",
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            "33" => "Controller_respuesta@C_insertar_respuesta",
            "8" => "Controller_respuesta2@C_insertar_respuesta2",
            "10" => "Controller_respuesta3@C_insertar_respuesta3",

            "234" => "Controller_pagina@V_test",
            "244" => "Controller_pagina@V_test2",
            "255" => "Controller_pagina@V_test3",
            "2550" => "Controller_pagina@V_test4",

            "2552" => "Controller_pagina@V_iniciar_Test_DAT",

            "2553" => "Controller_pagina@V_examen_Test_DAT",
            "2554" => "Controller_respuesta@C_insertar_respuesta_DAT",

            "2518" => "Controller_pagina@V_resultado_Test_total",

            "2551" => "Controller_pagina@V_test_dat",

            "237" => "controller_pagina@V_resultado",
            "258" => "controller_pagina@V_resultado2",
            "14" => "controller_pagina@V_resultado3",
            //rutas del los tres tipos de test
            "241" => "Controller_pagina@V_inscripcion1",
            "242" => "Controller_pagina@V_inscripcion2",
            "245" => "Controller_pagina@V_inscripcion3",
            "2460" => "Controller_pagina@V_inscripcion4",

            "27" => "Controller_pagina@V_inscripcion_colegio",
            //rutas para la pagina de los test
            "246" => "Controller_pagina@V_principal2",
            "247" => "Controller_pagina@V_principal3",
            "248" => "Controller_pagina@V_principal4",

            "260" => "Controller_estudiante@login",

///////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////
            "2" => "Controller_admin@elementos",
            "3" => "Controller_admin@chart",
            "4" => "Controller_admin@panel",
            "5" => "Controller_admin@tablas",
            "6" => "Controller_admin@form",
            "7" => "Controller_admin@emply",

            // modulo usuario 11-20
            "11" => "Controller_sistema@admin_usuarios",
            "12" => "Controller_sistema@privilegios",
            "13" => "Controller_sistema@institucion",
            // modulo usuario

            //modulo admin blog 21 30
            "21" => "Controller_administracion@nuevo_colegio",
            "22" => "Controller_administracion@nuevoBlog",
            "23" => "Controller_administracion@visualizarBlog",
            "24" => "Controller_administracion@editarBlog",
            //modulo admin blog

            //modulo de visitas 31 40
            //"31"=>"Controller_administracion@visitas",
            "30" => "Controller_administracion@menu_colegios",
            "31" => "Controller_administracion@mostrar_estudiantes",
            "32" => "Controller_administracion@menu_reportes",
            "48" => "Controller_administracion@menu_informacion",
            "34" => "Controller_administracion@menu_pdf1",
            "35" => "Controller_reporte_pdf@listar_est1",
            "351" => "Controller_reporte_pdf@listar_est_2021_test1",
            "352" => "Controller_reporte_pdf@listar_est_2021_total",
            "353" => "Controller_reporte_pdf@listar_est1_intervalo",
            "354" => "Controller_reporte_pdf@listar_est2_intervalo",

            "36" => "Controller_reporte_pdf@listar_ue_test_1",
            "37" => "Controller_administracion@menu_pdf2",
            "350" => "Controller_reporte_pdf@listar_est2",
            "361" => "Controller_reporte_pdf@listar_ue_test_2",
            "362" => "Controller_reporte_pdf@listar_est3_intervalo",
            "38" => "Controller_administracion@menu_pdf3",
            "39" => "Controller_reporte_pdf@listar_est3",
            "40" => "Controller_reporte_pdf@listar_ue_test_3",

            // Modulo test de aptitudes diferentes
            "80" => "Controller_administracion@menu_pdf4",
            "801" => "Controller_reporte_pdf@listar_est4",
            "802" => "Controller_reporte_pdf@listar_est4_intervalo",
            "803" => "Controller_reporte_pdf@listar_ue_test_dat",

            // Excel
            "356" => "Controller_reporte_excel@listar_ue_est1_excel",

            "355" => "Controller_reporte_excel@listar_est1_excel",
            "3551" => "Controller_reporte_excel@listar_est1_excel_intervalo",
            "357" => "Controller_reporte_excel@listar_est2_excel",
            "3571" => "Controller_reporte_excel@listar_est2_excel_intervalo",
            "359" => "Controller_reporte_excel@listar_est3_excel",
            "3591" => "Controller_reporte_excel@listar_est3_excel_intervalo",
            "360" => "Controller_reporte_excel@listar_est4_excel",
            "3601" => "Controller_reporte_excel@listar_est4_excel_intervalo",

            //modulo de visitas NO 33

            // modulo de interes 41 50
            "41" => "Controller_administracion@mostrar_test_interes",
            "42" => "Controller_administracion@nueva_actividad",
            "43" => "Controller_administracion@editar_pregunta_interes",

            "45" => "Controller_administracion@mostrar_area_interes",
            "46" => "Controller_administracion@editar_area_interes",
            "44" => "Controller_administracion@nueva_area_interes",

            "47" => "Controller_administracion@mostrar_resultado_interes",
            "49" => "Controller_administracion@editar_acceso",
            "50" => "Controller_administracion@editar_colegio",

            //modulo de preguntas_test 51 60
            "51" => "Controller_administracion@mostrar_test_vocacional",
            "52" => "Controller_administracion@nueva_pregunta_test",
            "53" => "Controller_administracion@editar_pregunta_test",

            "55" => "Controller_administracion@mostrar_area_test",
            "56" => "Controller_administracion@editar_area_test",
            "54" => "Controller_administracion@nueva_area_test",

            "57" => "Controller_administracion@mostrar_resultado_test",

            //modulo de convocatorias

            //modulo test de inteligencia web 61 70

            "61" => "Controller_administracion@mostrar_test_inteligencia",
            "62" => "Controller_administracion@nueva_test_inteligencia",
            "63" => "Controller_administracion@editar_afirmacion_test",

            "65" => "Controller_administracion@mostrar_tipos_inteligencia",
            "66" => "Controller_administracion@editar_tipo_inteligencia",
            "64" => "Controller_administracion@nuevo_tipo_inteligencia",

            "67" => "Controller_administracion@mostrar_resultado_test",
////////////////////////////////////////////////////////////////////////////////////////////////////
            ////////////////////modulo test de interes/////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////

            //modulo de inicio 71 80
            "71" => "Auth@login",
            //modulo de inicio 71 80

            //modulo perfil 81 90
            "81" => "Controller_sistema@perfil",
            //modulo perfil

            //modulo de cursos 91 110
            "91" => "Controller_administracion@adminCursos",
            "92" => "Controller_administracion@crearNuevoCurso",
            "93" => "Controller_administracion@detallesCursos",
            "94" => "Controller_administracion@editardetallesCursos",

            //modulo de DAT NUEVO
            "910" => "Controller_administracion@adminTestDAT",
            "920" => "Controller_administracion@crearNuevoTestDAT",
            "930" => "Controller_administracion@detallesTest",
            "940" => "Controller_administracion@editardetallesTest",

            //modulo de cursos 91 110

            //modulo de inscripcion de cursos 111 130
            "111" => "Controller_administracion@inscripcionCursos",
            "112" => "Controller_administracion@inscripcionNuevoCursos",
            "113" => "Controller_administracion@listar_personas_curso",
            //modulo de inscripcion de cursos 111 129

            //modulo para imprimir recivo 130 al 140
            //reporte pdf
            "130" => "Controller_reporte_pdf@boleta_de_inscripcion",
            "131" => "Controller_reporte_pdf@boleta_de_inscripcion1",
            "132" => "Controller_reporte_pdf@listar_profesional_est",
            "133" => "Controller_reporte_pdf@listar_prof_est",

            //reporte exel
            "134" => "Controller_reporte_pdf@reporte_exel",
            "135" => "Controller_respuesta@resultado_chaside",
            //modulo para imprimir recivo

            //entrega de certificados y deudas pendientes 141 - 150
            "141" => "Controller_administracion@pagoDeudasEntCertificados",

            //lista_vcf
            "151" => "Controller_administracion@lista_vcf",
            //lista_vcf

        ];
    }

//    public static function menus()
    //    {

//      $ion = new Ion_auth();
    // if ($ion->in_group('members')){
    //     $data["members"] ["Te perdiste!!!"] = "00000";
    // }

// if ($ion->in_group('admin'))
    //     {
    //      $data = [
    //       "Administracion" => [
    //        "Inicio" =>"20",
    //        "Usuario" => "21",
    //        "Seguridad grupo" =>"22",
    //        "Mantenimiento" =>"23",
    //    ],

//    "Estudiantes" => [
    //     "Inscripciones" => "58",
    //     "certificaciones" => "51",
    //     "Avance Academico" => "56",

// ],
    // "Docentes" => [
    //    "LLenado Notas" => "42",

// ],

// "Busqueda" => [
    //    "Personas" => "100",
    //    "Consultas" => "101",

// ],
    // "Configuraciones" => [
    //    "Habilitar Inscripciones" => "140",
    //    "Habilitar llenado Notas" => "141",
    //    "Habilitar Gestiones" => "142",

// ],

//         /*    "Estadisticas" => [
    //                 "Lista de estudiantes por materia" => "120",
    //                 "Lista de estudiantes de carrera" => "121",
    //                 "Lista de certificaciones" => "121",

//             ],*/

//            "Plan Estudios" => [
    //             "Pensum" => "91",
    //             "Mension" => "95",
    //             "Asignatura" => "99",
    //             "Asignatura Mension" => "301",

//         ],
    //         "REPORTES" => [
    //            "Tipo de reportes" => "210",
    //            // "Lista inscrito por materia" => "210",
    //            // "Lista de estudiantes de carrera" => "211",
    //            // "datos de calificacion gestion " => "212",

//         ],

//         "Opciones" => ["Migracion" => "10","Salir" => "4",],

//     ];
    // }

//     if ($ion->in_group('kardixta'))
    //     {
    //          $data = [
    //              "Administracion Usuarios" => [
    //         //       "Inicio" =>"20",
    //        "Usuario" => "21",
    //         ],

//         "Busqueda" => [
    //            "Personas" => "100",
    //            "Consultas" => "101",
    //         ],
    //         "Configuraciones" => [
    //            "Habilitar Inscripciones" => "140",
    //            "Habilitar llenado Notas" => "141",
    //            "Habilitar Gestiones" => "142",

//         ],

//          "REPORTES" => [
    //                "Tipo de reportes" => "210",
    //                // "Lista inscrito por materia" => "210",
    //                // "Lista de estudiantes de carrera" => "211",
    //                // "datos de calificacion gestion " => "212",

//             ],

//             "Opciones" => ["Salir" => "4",],

//         ];

//         }

//         if ($ion->in_group('docente'))
    //         {
    //             $data["docente"] ["LLenado Notas"] = "42";
    //         }

//         if ($ion->in_group('estudiante'))
    //         {
    //             $data["estudiante"] ["Inscripciones"] = "48";
    //             $data["estudiante"] ["Certificaciones"] = "51";
    //             $data["estudiante"] ["Avance Academico"] = "56";
    //         }

//         return $data;

//     }

    ////   MENUS DE SANTOS LIMACHI
    ////   MENUS DE SANTOS LIMACHI

    public static function iconn()
    {
        $vec_iconos = array(
            'dashboard',
            'apps',
            'content_paste',
            'grid_on',
            'person',
            'notifications',
            'mail_outline',
            'search',
            'place',
            'done',
            'favorite',
            'image',
            'grid_on',
            'more_vert',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',

        );
        return $vec_iconos;
    }

}
