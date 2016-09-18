<?php

class Usuarios_model extends CI_Model {

    public function salva($usuario) {
        // Tabela e novo registro.
        $this->db->insert("usuarios", $usuario);
    }

}