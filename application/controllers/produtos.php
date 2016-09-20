<?php

class Produtos extends CI_Controller {

    public function index() {
        // Exibe informações que auxiliam no debugging.
        // $this->output->enable_profiler(TRUE);

        // Carrega o modelo de dados.
        $this->load->model("produtos_model");

        // Busca todos os dados.
        $produtos = $this->produtos_model->buscaTodos();

        $dados = array("produtos" => $produtos);

        // Carrega os ajudantes para este controller.
        $this->load->helper(array("currency", "form"));

        $this->load->view("produtos/index.php", $dados);
    }

}