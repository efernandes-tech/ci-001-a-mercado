<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo() {
        // Recebe os dados que vieram no POST.
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            // Criptografa a senha.
            "senha" => md5($this->input->post("senha"))
        );

        $this->load->database();

        $this->load->model("usuarios_model");

        $this->usuarios_model->salva($usuario);

        $this->load->view("usuarios/novo");
    }

}