<?php

class Produtos_model extends CI_Model {

    public function buscaTodos() {
        // Não retorna os ja vendidos.
        $this->db->where("vendido", false);
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

    public function buscaVendidos($usuario) {
        $id = $usuario["id"];

        $this->db->select("produtos.*, vendas.data_de_entrega");

        $this->db->from("produtos");

        $this->db->join("vendas", "vendas.produto_id = produtos.id");

        $this->db->where("vendido", true);
        $this->db->where("usuario_id", $id);

        return $this->db->get()->result_array();
    }

}