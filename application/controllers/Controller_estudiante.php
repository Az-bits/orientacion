<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_estudiante extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelo_estudiante');
        date_default_timezone_set('America/La_Paz');
        $this->load->helper('funciones_helper');
    }
    public function index()
    {
        redirect(site_url(Hasher::make(1)));
    }

    public function departamento()
    {
        $id_departamento = $this->input->post('id_departamento');

        if ($id_departamento) {

            $ciudades = $this->Modelo_estudiante->getCiudades($id_departamento);
            echo '<option value="">Provincia</option>';
            foreach ($ciudades as $fila) {
                echo '<option value="' . $fila->id_provincia . '">' . $fila->nombre_provincia . '</option>';
            }
        } else {
            echo '<option value="">Provincia</option>';
        }
    }

    public function provincia()
    {
        $id_departamento = $this->input->post('id_provincia');

        if ($id_departamento) {

            $ciudades = $this->Modelo_estudiante->getMunicipio($id_departamento);
            echo '<option value="">Municipio</option>';
            foreach ($ciudades as $fila) {
                echo '<option value="' . $fila->id_municipio . '">' . $fila->nombre_municipio . '</option>';
            }
        } else {
            echo '<option value="">Municipio</option>';
        }
    }

    public function municipio()
    {
        $id_departamento = $this->input->post('id_municipio');

        if ($id_departamento) {
            $ciudades = $this->Modelo_estudiante->getColegio($id_departamento);
            echo '<option value="">Colegio</option>';
            foreach ($ciudades as $fila) {
                echo '<option value="' . $fila->id_colegio . '">' . $fila->nombre_colegio . '</option>';
            }
        } else {
            echo '<option value="">Colegio</option>';
        }
    }

    public function V_admin_estudiante()
    {
        $dato['menu'] = "2";
        $dato['contenido'] = "vista_admin/V_admin_estudiante";
        $this->load->view('plantilla_a', $dato);
    }
    public function C_insertar_colegio()
    {
        $datos = $this->input->post();
        $txtColegio = $datos['txtcolegio'];
        $txtMunicipio = $datos['txtMunicipio'];
        $Colegio = (mb_strtoupper($txtColegio));
        $idcolegio = $this->Modelo_estudiante->M_insertar_colegio($Colegio);
        $this->Modelo_estudiante->M_insertar_colegio_municipio($idcolegio, $txtMunicipio);
        redirect(site_url(Hasher::make(30)));

    }
    public function C_editar_colegio()
    {
        $id = $this->input->post('id');
        $nombrecolegio = $this->input->post('nombre_colegio');
        $estado = $this->input->post('estado');

        $this->Modelo_estudiante->M_editar_colegio($id, $nombrecolegio, $estado);

        redirect(site_url(Hasher::make(30)));

    }

    public function C_insertar_estudiante()
    {
        $datos = $this->input->post();
        $idestud = $datos['idest'];
        if (empty($idestud)) {
            if (!(trim($datos['txtCI']) == '') && !(trim($datos['txtNombres']) == '')
                && !(trim($datos['txtApellidos']) == '')
                && !(trim($datos['txtCelular']) == '')
                && !(trim($datos['txtEdad']) == '')
                && !(trim($datos['txtSexo']) == '')
                && !(trim($datos['txtDepartamento']) == '')
                && !(trim($datos['txtProvincia']) == '')
                && !(trim($datos['txtMunicipio']) == '')) {
                $txtCI = $datos['txtCI'];
                $txtNombres = $datos['txtNombres'];
                $txtApellidos = $datos['txtApellidos'];
                $txtCelular = $datos['txtCelular'];
                $txtEdad = $datos['txtEdad'];
                $txtSexo = $datos['txtSexo'];
                $txtColegio = $datos['txtColegio'];

                $Nombres = (strtoupper($txtNombres));
                $Apellidos = (strtoupper($txtApellidos));
                $idest = $this->Modelo_estudiante->M_insertar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo);
                $this->Modelo_estudiante->M_insertar_colegio_estudiante($idest, $txtColegio);
                redirect(site_url(Hasher::make(234, $idest))); //Controller_pagina@V_test"

            } else {
                redirect(site_url(Hasher::make(241)));
            }
        } else {
            $txtCI = $datos['txtCI'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCelular = $datos['txtCelular'];
            $txtEdad = $datos['txtEdad'];
            $txtSexo = $datos['txtSexo'];

            $txtColegio = $datos['txtColegio'];

            $Nombres = (strtoupper($txtNombres));
            $Apellidos = (strtoupper($txtApellidos));

            $this->Modelo_estudiante->M_editar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo, $idestud);

            $this->Modelo_estudiante->M_insertar_colegio_estudiante($idestud, $txtColegio);

            redirect(site_url(Hasher::make(234, $idestud)));
            //envia a la vista test
        }
    }

    public function C_insertar_estudiante2()
    {
        $datos = $this->input->post();
        $idestud = $datos['idest'];
        if (empty($idestud)) {
            if (!(trim($datos['txtCI']) == '') && !(trim($datos['txtNombres']) == '')
                && !(trim($datos['txtApellidos']) == '')
                && !(trim($datos['txtCelular']) == '')
                && !(trim($datos['txtColegio']) == '')
                && !(trim($datos['txtDepartamento']) == '')
                && !(trim($datos['txtProvincia']) == '')
                && !(trim($datos['txtMunicipio']) == '')) {$txtCI = $datos['txtCI'];
                $txtNombres = $datos['txtNombres'];
                $txtApellidos = $datos['txtApellidos'];
                $txtCelular = $datos['txtCelular'];
                $txtColegio = $datos['txtColegio'];

                $Nombres = (strtoupper($txtNombres));
                $Apellidos = (strtoupper($txtApellidos));
                $idest = $this->Modelo_estudiante->M_insertar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo);
                $this->Modelo_estudiante->M_insertar_colegio_estudiante($idest, $txtColegio);
                // redirecciona al Controller Pagina V_TEST2
                redirect(site_url(Hasher::make(244, $idest)));

            } else {
                redirect(site_url(Hasher::make(242)));
            }
        } else {
            redirect(site_url(Hasher::make(244, $idestud))); //envia a la vista test
        }
    }

    public function C_insertar_estudiante3()
    {
        $datos = $this->input->post();
        $idestud = $datos['idest'];
        if (empty($idestud)) {
            if (!(trim($datos['txtCI']) == '') && !(trim($datos['txtNombres']) == '')
                && !(trim($datos['txtApellidos']) == '')
                && !(trim($datos['txtCelular']) == '')
                && !(trim($datos['txtColegio']) == '')
                && !(trim($datos['txtDepartamento']) == '')
                && !(trim($datos['txtProvincia']) == '')
                && !(trim($datos['txtMunicipio']) == '')) {$txtCI = $datos['txtCI'];
                $txtNombres = $datos['txtNombres'];
                $txtApellidos = $datos['txtApellidos'];
                $txtCelular = $datos['txtCelular'];
                $txtColegio = $datos['txtColegio'];

                $Nombres = (strtoupper($txtNombres));
                $Apellidos = (strtoupper($txtApellidos));
                $idest = $this->Modelo_estudiante->M_insertar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo);
                $this->Modelo_estudiante->M_insertar_colegio_estudiante($idest, $txtColegio);
                // redirecciona al Controller Pagina V_TEST2
                redirect(site_url(Hasher::make(2552, $idest)));

            } else {
                redirect(site_url(Hasher::make(245)));
            }
        } else {
            redirect(site_url(Hasher::make(2552, $idestud))); //envia a la vista test
        }
    }
    public function C_insertar_estudiante4()
    {
        $datos = $this->input->post();
        $idestud = $datos['idest'];
        if (empty($idestud)) {
            if (!(trim($datos['txtCI']) == '') && !(trim($datos['txtNombres']) == '')
                && !(trim($datos['txtApellidos']) == '')
                && !(trim($datos['txtCelular']) == '')
                && !(trim($datos['txtEdad']) == '')
                && !(trim($datos['txtSexo']) == '')
                && !(trim($datos['txtColegio']) == '')
                && !(trim($datos['txtDepartamento']) == '')
                && !(trim($datos['txtProvincia']) == '')
                && !(trim($datos['txtMunicipio']) == '')) {$txtCI = $datos['txtCI'];
                $txtNombres = $datos['txtNombres'];
                $txtApellidos = $datos['txtApellidos'];
                $txtCelular = $datos['txtCelular'];
                $txtColegio = $datos['txtColegio'];
                $txtEdad = $datos['txtEdad'];
                $txtSexo = $datos['txtSexo'];

                $Nombres = (strtoupper($txtNombres));
                $Apellidos = (strtoupper($txtApellidos));
                $idest = $this->Modelo_estudiante->M_insertar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo);
                $this->Modelo_estudiante->M_insertar_colegio_estudiante($idest, $txtColegio);
                // redirecciona al Controller Pagina V_TEST2
                redirect(site_url(Hasher::make(2552, $idest)));

            } else {
                redirect(site_url(Hasher::make(2460)));
            }
        } else {
            $txtCI = $datos['txtCI'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCelular = $datos['txtCelular'];
            $txtEdad = $datos['txtEdad'];
            $txtSexo = $datos['txtSexo'];

            $txtColegio = $datos['txtColegio'];

            $Nombres = (strtoupper($txtNombres));
            $Apellidos = (strtoupper($txtApellidos));

            $this->Modelo_estudiante->M_editar_estudiante($txtCI, $Nombres, $Apellidos, $txtCelular, $txtEdad, $txtSexo, $idestud);

            $this->Modelo_estudiante->M_insertar_colegio_estudiante($idestud, $txtColegio);

            // redirect(site_url(Hasher::make(234, $idestud)));
            redirect(site_url(Hasher::make(2552, $idestud))); //envia a la vista test
        }
    }
    

    public function C_buscar_estudiante()
    {
        $carnet = $this->input->post('ci');
        $obj = $this->Modelo_estudiante->M_buscar_ci($carnet);
        echo json_encode($obj);
    }

}
