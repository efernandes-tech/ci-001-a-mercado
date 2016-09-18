<?php
class Produtos extends CI_Controller{
    public function index(){
        $produtos = array();
        $bola = array(
            "nome" => "Bola de futebol",
            "descricao" => "Bola de futebol assinada pelo Zico",
            "preco" => 300
        );
        $hd = array(
            "nome" => "HD Externo usado",
            "marca" => "Mega HD 300 teras",
            "preco" => 400
        );
        array_push($produtos, $bola, $hd);

        $dados = array("produtos" => $produtos);
        $this->load->view("produtos/index.php", $dados);
    }
}