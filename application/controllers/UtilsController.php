<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UtilsController extends CI_Controller {

    // Caminho: "../ci-001-a-mercado/index.php/UtilsController/migrate".
    public function migrate() {
        // Inicializa a biblioteca.
        $this->load->library("migration");

        // Executa as migrations, e mantem o banco atualizado.
        $success = $this->migration->current();

        // Da um feedback sobre a operação.
        if ($success) {
            echo 'migrado';
        } else {
            show_error($this->migration->error_string());
        }
    }
}