<?php

class Migration_Adiciona_vendido_ao_produto extends CI_Migration {

    // Migra o banco para frente, aplicando as alteracoes.
    public function up() {
        // Adiciona um novo campo.
        $this->dbforge->add_column("produtos", array(
            "vendido" => array(
                "type" => "boolean",
                "default" => "0"
            )
        ));
    }

    // Migra o banco para tras, desfazendo as alteracoes.
    public function down() {
        // Remove a coluna adicionada.
        $this->dbforge->drop_column('produtos', 'vendido');
    }

}