<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <div class="container">
    <?php
    echo form_open("produtos/novo");

    echo form_label("Nome", "nome");
        echo form_input(array(
            "name" => "nome",
            "class" => "form-control",
            "id" => "nome",
            "maxlength" => "255",
        ));

    echo form_label("Preco", "preco");
        echo form_input(array(
            "name" => "preco",
            "class" => "form-control",
            "id" => "preco",
            "maxlength" => "255",
            "type" => "number",
        ));

    echo form_textarea(array(
        "name" => "descricao",
        "class" => "form-control",
        "id" => "descricao",
    ));

    echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));

    echo form_close();
    ?>
    </div>
</body>
</html>