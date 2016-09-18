<?php

class Produtos extends CI_Controller {

    public function index() {
        // Carraga o banco de dados.
        $this->load->database();

        // Carrega o modelo de dados.
        $this->load->model("produtos_model");

        // Busca todos os dados.
        $produtos = $this->produtos_model->buscaTodos();

        $dados = array("produtos" => $produtos);

        // Carrega os ajudantes.
        $this->load->helper("url");
        $this->load->helper("currency");

        $this->load->view("produtos/index.php", $dados);
    }

}