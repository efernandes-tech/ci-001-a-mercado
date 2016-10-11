<?php

class Migration_Cria_tabela_de_vendas extends CI_migration {
    // Migra o banco para frente, aplicando as alteracoes.
    public function up() {
        // Define os campos que a tabela tera.
        $this->dbforge->add_field(array(
            "id" => array(
                "type" => "INT",
                "auto_increment" => true,
            ),
            "produto_id" => array(
                "type" => "INT",
            ),
            "comprador_id" => array(
                "type" => "INT",
            ),
            "data_de_entrega" => array(
                "type" => "DATE",
            ),
        ));
        // Define o campo "id" como chave primária.
        $this->dbforge->add_key("id", true);
        // Cria a tabela.
        $this->dbforge->create_table("vendas");
    }

    // Migra o banco para tras, desfazendo as alteracoes.
    public function down() {
        // Remove a tabela.
        $this->dbforge->drop_table('vendas');
    }
}