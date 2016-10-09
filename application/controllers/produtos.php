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
        $this->load->helper(array("currency"));

        $this->load->view("produtos/index.php", $dados);
    }

    public function formulario() {
        $this->load->view("produtos/formulario");
    }

    public function novo() {
        // Carrega a library de validacao.
        $this->load->library("form_validation");

        // Define as regras de validacao.
        $this->form_validation->set_rules("nome", "nome", "trim|required|min_length[5]");
        $this->form_validation->set_rules("preco", "preco", "required");
        $this->form_validation->set_rules("descricao", "descricao", "trim|required|min_length[10]");

        // Mensagens de validacao sao geradas dentro de.
        $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");

        // Roda as validacao e retorna se o form e valido.
        $sucesso = $this->form_validation->run();

        if ($sucesso) {
            $usuarioLogado = $this->session->userdata("usuario_logado");

            $produto = array(
                "nome" => $this->input->post("nome"),
                "descricao" => $this->input->post("descricao"),
                "preco" => $this->input->post("preco"),
                "usuario_id" => $usuarioLogado["id"]
            );

            $this->load->model("produtos_model");

            $this->produtos_model->salva($produto);

            $this->session->set_flashdata("success", "Produto salvo com sucesso.");

            redirect("/");
        } else {
            $this->load->view("produtos/formulario");
        }
    }

    public function mostra($id) {
        // $id = $this->input->get("id");

        $this->load->model("produtos_model");

        $produto = $this->produtos_model->busca($id);

        // Usei para trocar o "\n" por "<br>" na view.
        $this->load->helper("typography");

        $dados = array("produto" => $produto);

        $this->load->view("produtos/mostra", $dados);
    }

}