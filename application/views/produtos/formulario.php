    <h1>Cadastro de Produtos</h1>
    <?php // echo validation_errors("<p class='alert alert-danger'>","</p>") ?>
    <?php
    echo form_open("produtos/novo");

    echo form_label("Nome", "nome");
        echo form_input(array(
            "name" => "nome",
            "class" => "form-control",
            "id" => "nome",
            "maxlength" => "255",
            "value" => set_value("nome",""), // Quando nao passa na validacao, o dado nao se perde.
        ));
        // Exibe os erros da validacao.
        echo form_error("nome");

    echo form_label("Preco", "preco");
        echo form_input(array(
            "name" => "preco",
            "class" => "form-control",
            "id" => "preco",
            "maxlength" => "255",
            "type" => "number",
            "value" => set_value("preco",""), // Quando nao passa na validacao, o dado nao se perde.
        ));
        // Exibe os erros da validacao.
        echo form_error("preco");

    echo form_textarea(array(
        "name" => "descricao",
        "class" => "form-control",
        "id" => "descricao",
        "value" => set_value("descricao",""), // Quando nao passa na validacao, o dado nao se perde.
    ));
    // Exibe os erros da validacao.
    echo form_error("descricao");

    echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));

    echo form_close();
    ?>