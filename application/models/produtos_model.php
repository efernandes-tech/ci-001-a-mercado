<?php

class Produtos_model extends CI_Model {

    public function buscaTodos() {
        // Retorna um array com todos os dados da tabela "produtos".
        return $this->db->get("produtos")->result_array();
    }

    public function salva($produto) {
        $this->db->insert("produtos", $produto);
    }

    public function busca($id) {
        return $this->db
           ->get_where("produtos", array("id" => $id))
            ->row_array();
    }

}