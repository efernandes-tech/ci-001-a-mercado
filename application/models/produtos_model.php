<?php

class Produtos_model extends CI_Model {

    public function buscaTodos() {
        // Retorna um array com todos os dados da tabela "produtos".
        return $this->db->get("produtos")->result_array();
    }

}