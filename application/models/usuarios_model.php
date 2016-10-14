<?php

class Usuarios_model extends CI_Model {

    public function salva($usuario) {
        // Tabela e novo registro.
        $this->db->insert("usuarios", $usuario);
    }

    public function buscaPorEmailESenha($email, $senha) {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        // Retorna so o primeiro resultado da consulta.
        $usuario = $this->db->get("usuarios")->row_array();

        return $usuario;
    }

    public function busca($id) {
        $this->db->where("id", $id);

        return $this->db->get("usuarios")->row_array();
    }

}