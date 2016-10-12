<?php

function autoriza() {
    // Pegar a instancia do codeigniter, para poder usar as funcoes, pois o helper nao disponibiliza o "$this".
    $ci = get_instance();

    $usuarioLogado = $ci->session->userdata("usuario_logado");

    if (!$usuarioLogado) {
        $ci->session->set_flashdata("danger", "Você precisa estar logado");
        redirect("/");
    }

    return $usuarioLogado;
}