<?php
class Modelo_configuracion extends CI_Model
{
    public function __construct()
    {parent::__construct();
        $this->load->database();
        date_default_timezone_set("\x41\x6d\x65\162\x69\143\141\57\x4c\x61\137\x50\141\172");}public function cantidad_visitas()
    {return $this->db->query("\x53\x45\114\x45\103\x54\x20\x43\117\x55\x4e\x54\50\151\144\143\x61\x6e\164\x69\x64\x61\x64\137\166\151\163\151\x74\x61\163\x29\x20\141\163\x20\x74\157\x74\141\154\40\x46\x52\117\115\x20\x63\141\x6e\164\x69\144\x61\x64\137\166\151\163\151\x74\x61\163\x20")->row();}public function listar_privilegios($id)
    {return $this->db->query("\123\105\x4c\105\103\124\x20\x2a\x20\x46\x52\117\115\x20\x70\x72\x69\166\151\154\x65\147\x69\x6f\163\12\x9\x9\11\x49\x4e\x4e\105\x52\40\x4a\117\111\x4e\x20\164\141\142\x6c\x61\x5f\x6d\x65\156\x75\40\117\116\x20\x70\162\151\x76\x69\x6c\145\x67\151\157\163\x2e\151\144\x74\141\142\154\141\137\155\x65\156\x75\x20\x3d\x20\164\x61\142\x6c\x61\137\x6d\145\156\165\56\151\x64\x74\141\142\154\141\x5f\x6d\x65\156\x75\12\x9\x9\x9\111\x4e\116\x45\x52\40\x4a\117\x49\116\x20\147\162\x6f\x75\x70\163\40\x4f\116\x20\160\162\x69\166\x69\x6c\145\147\151\157\163\56\147\x72\157\x75\x70\x73\x5f\151\x64\40\75\x20\147\x72\x6f\x75\160\163\56\x69\x64\12\x9\x9\x9\127\x48\x45\122\105\40\x70\162\x69\166\151\154\145\x67\151\157\x73\x2e\147\x72\157\x75\x70\163\137\151\x64\75\47{$id}\x27\40")->result();}public function veridicar_existente_privilegios($id, $idtabla_menu)
    {$fer = $this->db->query("\x20\x53\105\x4c\105\x43\124\x20\52\40\x46\x52\117\115\40\160\x72\151\x76\151\x6c\145\147\x69\x6f\x73\40\x57\110\x45\122\x45\40\x67\162\x6f\x75\160\x73\x5f\x69\x64\75\47{$id}\47\40\x41\x4e\104\x20\151\144\x74\x61\142\154\141\137\x6d\145\156\x75\75\47{$idtabla_menu}\47\x20");if ($fer->num_rows()) {return true;} else {return false;}}public function guardar_privilegios($estado, $fecha, $idusuario, $idtipo_usuario, $idtabla_menu)
    {if (is_array($idtabla_menu)) {for ($i = 0; $i < count($idtabla_menu); $i++) {$fer = array("\x70\x72\151\x76\151\x5f\145\163\164\141\x64\157" => $estado, "\160\162\x69\x5f\151\x64\137\x75\163\x75\x61\x72\151\157" => $idusuario, "\x69\144\164\x61\142\154\x61\x5f\x6d\x65\156\x75" => $idtabla_menu[$i], "\147\162\157\165\160\163\x5f\151\144" => $idtipo_usuario);
        $this->db->insert("\160\x72\151\166\x69\154\145\x67\x69\157\x73", $fer);}}}public function cambiar_estado_privilegios($idprivilegios, $estado)
    {$fer = array("\x70\x72\x69\x76\151\x5f\x65\163\164\141\x64\157" => $estado, "\x70\x72\x69\137\151\x64\x5f\165\163\x75\x61\x72\151\x6f" => $this->session->userdata("\x69\x64\x75\163\165\141\162\151\157"));
        $this->db->where("\x69\144\160\x72\x69\x76\x69\154\145\147\151\157\x73", $idprivilegios);
        $this->db->update("\160\x72\151\166\x69\x6c\x65\147\x69\157\x73", $fer);}public function ver_id_menus($idtabla_menu)
    {return $this->db->query("\x53\105\x4c\x45\x43\x54\x20\x2a\40\106\122\x4f\115\40\x74\141\x62\x6c\141\137\x6d\145\156\x75\40\x20\127\110\105\x52\x45\40\151\x64\x74\x61\x62\x6c\x61\x5f\155\145\156\x75\75\x27{$idtabla_menu}\47\40")->row();}public function listar_usuarios()
    {return $this->db->query("\x53\x45\114\x45\103\124\12\x9\x9\x9\x75\163\145\x72\x73\56\x69\x64\40\141\163\40\x69\144\137\165\x73\x65\162\x2c\xa\x9\11\x9\165\x73\x65\x72\x73\x2e\x69\x70\137\141\x64\144\162\145\163\163\54\12\11\11\11\x75\163\x65\x72\x73\56\165\163\145\162\156\x61\x6d\145\54\xa\11\x9\x9\x75\163\x65\162\x73\56\140\x70\x61\x73\x73\x77\157\x72\x64\140\x2c\12\11\x9\x9\165\163\145\162\x73\x2e\145\x6d\x61\x69\x6c\x2c\xa\x9\11\x9\x75\x73\x65\162\163\x2e\x61\143\164\151\x76\141\164\151\x6f\x6e\137\163\145\154\x65\x63\x74\x6f\x72\x2c\12\11\11\11\x75\163\145\162\163\x2e\141\143\x74\x69\166\x61\x74\x69\x6f\156\137\143\157\x64\145\x2c\12\11\x9\x9\x75\163\145\x72\163\x2e\146\157\162\147\x6f\x74\164\145\x6e\x5f\160\x61\x73\x73\x77\157\162\x64\x5f\x73\145\154\x65\143\x74\157\162\54\xa\11\x9\x9\x75\x73\x65\x72\163\x2e\x66\x6f\x72\147\157\164\164\x65\156\x5f\x70\x61\163\163\x77\157\x72\x64\137\x63\157\144\145\54\12\x9\x9\x9\165\x73\x65\162\163\56\146\x6f\162\x67\x6f\x74\164\145\x6e\x5f\160\141\x73\x73\167\x6f\162\144\137\x74\151\x6d\x65\x2c\xa\11\x9\11\165\163\145\x72\x73\x2e\162\145\x6d\x65\155\142\145\x72\x5f\x73\x65\154\145\143\x74\x6f\162\x2c\xa\11\x9\11\165\x73\145\162\163\x2e\x72\x65\155\145\155\142\145\x72\137\x63\x6f\144\x65\x2c\xa\x9\11\11\165\x73\145\162\x73\56\143\162\x65\x61\164\x65\x64\x5f\x6f\156\54\12\11\x9\x9\165\163\145\162\163\x2e\x6c\x61\163\x74\137\x6c\157\x67\x69\x6e\x2c\12\x9\x9\x9\x75\163\x65\x72\163\x2e\141\x63\x74\x69\166\x65\x2c\xa\x9\x9\x9\165\163\x65\x72\x73\x2e\146\151\162\163\164\137\156\141\155\145\x2c\xa\x9\x9\x9\x75\x73\145\x72\x73\56\154\141\x73\x74\x5f\x6e\x61\155\145\x2c\xa\11\x9\11\x75\163\145\x72\x73\56\x63\x6f\x6d\160\x61\156\x79\x2c\12\x9\11\x9\165\163\x65\x72\x73\x2e\x70\150\157\x6e\145\x2c\xa\x9\x9\x9\x75\x73\145\162\x73\x2e\x75\x73\x65\x72\x73\x5f\x69\144\137\165\x73\x75\141\162\x69\x6f\54\12\x9\11\11\165\x73\x65\x72\x73\56\x75\x73\x65\162\x73\x5f\146\x65\143\x68\141\137\x72\x65\x67\x2c\xa\x9\x9\11\x75\163\x65\162\x73\x2e\165\x73\x65\x72\x73\137\x75\160\x64\141\x74\145\x2c\xa\x9\11\x9\165\163\145\162\163\56\151\155\141\147\145\x6e\54\xa\11\11\11\165\163\x65\162\x73\56\x63\x6f\144\151\147\x6f\x2c\12\x9\x9\x9\x67\162\157\x75\x70\x73\x2e\140\156\141\x6d\x65\x60\x2c\xa\x9\x9\11\147\162\x6f\x75\x70\x73\56\144\145\163\143\162\x69\160\x74\151\157\156\xa\11\x9\11\x46\x52\117\115\x20\x75\163\145\162\x73\12\11\x9\11\x49\x4e\116\x45\x52\x20\x4a\x4f\111\116\40\x75\x73\145\x72\x73\137\x67\162\157\165\x70\x73\x20\117\x4e\40\165\163\x65\x72\x73\137\x67\x72\157\x75\160\x73\56\x75\163\x65\162\x5f\x69\x64\x20\75\x20\165\163\x65\x72\x73\56\151\x64\12\x9\x9\11\x49\x4e\x4e\105\122\40\x4a\x4f\x49\116\x20\147\x72\157\x75\x70\163\x20\117\x4e\x20\x75\163\145\162\x73\137\147\162\x6f\165\160\x73\56\147\162\157\x75\x70\137\x69\x64\40\x3d\40\x67\162\157\x75\160\163\x2e\151\x64\xa\x9\x9\11\x57\x48\x45\x52\105\x20\165\x73\x65\162\163\x2e\151\144\x21\x3d\x31\12\x9\11\11\x4f\x52\x44\x45\x52\x20\x42\131\40\165\x73\145\162\163\56\151\144\40\104\105\x53\103\x20")->result();}public function mostrar_autocompletar0($texto)
    {return $this->db->query("\123\x45\x4c\x45\103\x54\x20\52\40\x46\122\117\115\40\x75\163\145\x72\163\x20\127\110\x45\x52\x45\x20\143\x6f\x64\151\x67\157\40\114\x49\113\105\x20\x27{$texto}\45\47\x20\40\114\111\115\x49\x54\x20\61\x30\x20")->result();}public function buscar_datos_existente0($codigo)
    {$obj = $this->db->query("\123\105\x4c\x45\x43\x54\x20\52\x20\x46\x52\117\x4d\40\x75\x73\x65\x72\x73\x20\127\110\105\x52\x45\x20\143\x6f\144\x69\x67\157\75\x27{$codigo}\x27\x20");if ($obj->num_rows()) {return $obj->row();} else {return false;}}public function validar_usuario_existente($usuario)
    {$fer = $this->db->query("\123\x45\x4c\x45\x43\124\x20\x75\163\x65\x72\x6e\x61\x6d\x65\40\x46\122\x4f\115\x20\165\163\x65\x72\x73\x20\127\110\105\122\105\x20\x75\x73\x65\162\156\x61\155\145\x3d\47{$usuario}\x27\x20");if ($fer->num_rows()) {return 1;} else {return 0;}}public function reset_estado_user_id($id_user)
    {return $this->db->query("\123\x45\x4c\105\x43\124\12\11\x9\x9\165\163\x65\162\163\56\151\144\40\x41\x53\x20\151\144\137\165\163\x65\x72\x2c\12\11\11\x9\x75\163\145\x72\163\x2e\165\163\x65\162\156\x61\x6d\x65\54\xa\x9\11\11\165\163\x65\162\x73\56\140\160\141\163\163\x77\157\x72\x64\x60\54\xa\x9\11\x9\x75\163\x65\x72\x73\x2e\x65\155\x61\x69\x6c\54\xa\11\x9\11\165\163\145\162\163\x2e\141\143\164\x69\x76\145\x2c\xa\x9\11\x9\165\x73\145\x72\163\x2e\x66\151\162\163\164\137\156\141\155\x65\x2c\12\x9\x9\11\x75\x73\145\162\163\x2e\154\x61\x73\164\137\156\x61\x6d\x65\x2c\12\11\11\x9\x75\163\145\162\163\56\x63\x6f\155\160\x61\156\171\54\12\x9\x9\x9\x75\x73\x65\x72\x73\x2e\x70\x68\x6f\x6e\145\54\xa\11\x9\11\165\x73\145\x72\163\x2e\x75\x73\x65\x72\x73\x5f\x69\144\137\165\163\165\x61\162\151\157\x2c\12\x9\x9\x9\x75\163\x65\162\x73\56\x75\x73\145\162\x73\137\x66\145\143\150\x61\137\x72\x65\x67\x2c\12\11\11\x9\x75\163\x65\x72\163\56\165\x73\145\x72\163\137\165\x70\144\141\x74\145\x2c\12\x9\11\11\165\x73\x65\x72\x73\x2e\x69\155\x61\x67\145\156\54\12\x9\x9\11\165\163\x65\162\x73\56\143\157\144\151\147\x6f\54\xa\x9\11\x9\x67\x72\x6f\165\x70\163\56\140\x6e\141\x6d\x65\x60\x2c\12\x9\x9\x9\x67\x72\157\x75\160\x73\56\x64\145\x73\x63\162\151\x70\x74\x69\157\x6e\x2c\12\x9\11\11\165\x73\x65\x72\x73\x5f\147\x72\157\x75\160\x73\x2e\151\144\x20\141\x73\40\151\144\137\x67\x72\x75\160\157\x2c\xa\11\x9\x9\x67\162\x6f\x75\x70\163\56\x69\x64\x20\x61\x73\x20\x69\144\x5f\162\157\154\xa\x9\11\11\x46\x52\x4f\115\x20\x75\x73\x65\x72\x73\xa\x9\x9\11\x49\x4e\x4e\x45\x52\40\x4a\x4f\111\x4e\40\165\163\x65\x72\163\x5f\x67\x72\x6f\x75\160\163\40\x4f\116\40\165\163\145\162\x73\x5f\x67\162\157\x75\x70\x73\x2e\x75\x73\145\162\x5f\151\144\40\x3d\40\165\163\145\162\x73\x2e\151\144\xa\x9\11\x9\111\x4e\116\105\x52\x20\112\117\111\x4e\40\x67\x72\157\x75\160\163\x20\x4f\x4e\40\165\x73\x65\162\163\x5f\147\162\157\x75\x70\x73\56\147\x72\157\x75\x70\x5f\x69\144\40\75\x20\147\162\x6f\165\160\163\x2e\x69\144\12\x9\x9\x9\x20\x57\x48\105\122\x45\x20\x75\163\145\x72\163\x2e\151\144\75\x27{$id_user}\47\40")->row();}

    public function buscar_datos_existente($codigo)
    {
        $obj = $this->db->query("SELECT * FROM users WHERE codigo='$codigo'");
        if ($obj->num_rows()) {
            return $obj->row();
        } else {
            return false;
        }
    }
    public function mostrar_autocompletar($texto)
    {
        return $this->db->query("SELECT * FROM users WHERE codigo LIKE '$texto%'  LIMIT 10 ")->result();
    }
    public function eliminar_tabla_sys($tabla, $idtabla, $id)
    {
        $this->db->WHERE($idtabla, $id);
        $this->db->delete($tabla);
    }
    public function editar_tabla_sys($tabla, $obj, $idtabla, $id)
    {
        $this->db->WHERE($idtabla, $id);
        $this->db->update($tabla, $obj);
    }
    public function insertar_tabla_sys($tabla, $obj)
    {
        $this->db->insert($tabla, $obj);
        return $this->db->insert_id();
    }
    public function tabla_row_sys($tabla, $idtabla, $id)
    {
        return $this->db->query("SELECT * FROM $tabla  WHERE $idtabla='$id' ")->row();
    }
    public function tabla_result_sys($tabla, $idtabla, $id)
    {
        return $this->db->query("SELECT * FROM $tabla  WHERE $idtabla='$id' ")->result();
    }
    public function tabla_result_sys_random($tabla, $idtabla, $id)
    {
        return $this->db->query("SELECT * FROM $tabla  WHERE $idtabla='$id' ORDER BY RAND()")->result();
    }
    public function edit_tabla_detalle_curso_academico($tabla, $id, $obj)
    {
        $this->db->WHERE('iddetalle_cursos_academicos', $id);
        $this->db->update($tabla, $obj);
    }
    public function cantidad_de_pruebas()
    {
        $query = $this->db->query("SELECT COUNT(*) AS WW FROM respuestas WHERE idpreguntas=1");
        // echo "<script>console.log(".json_encode($query->result()[0]->WW).")</script>";
        return $query->result()[0]->WW;
    }
    public function cantidad_de_pregunta($tabla, $id_dat_tipo, $id)
    {
        return $this->db->query("SELECT COUNT(*) as total FROM $tabla WHERE $id_dat_tipo=$id and estado='ACTIVO'")->row();
    }
    public function M_lista_escalas($id_dat_tipo)
    {
        return $this->db->query("SELECT *  FROM escalas_dat WHERE id_tipo_dat=$id_dat_tipo")->row();
    }
    public function tabla_randow($tabla, $id_dat_tipo, $id)
    {
        return $this->db->query("SELECT * FROM $tabla WHERE $id_dat_tipo=$id and estado='ACTIVO' ORDER BY RAND()")->result();
    }

    public function tabla_query($tabla)
    {
        return $this->db->query("SELECT * FROM $tabla  ")->result();
    }
}
