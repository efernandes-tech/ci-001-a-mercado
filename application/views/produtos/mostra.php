<html>
<head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <div class="container">
        <h1><?= html_escape($produto["nome"]) ?><br></h1>
        <?= html_escape($produto["preco"]) ?><br>
        <?= auto_typography(html_escape($produto["descricao"])) ?><br>

        <h2>Compre agora mesmo!</h2>
        <?php
        echo form_open("vendas/nova");

        echo form_hidden("produto_id", $produto["id"]);

        echo form_label("Data de entrega" , "data_de_entrega");
            echo form_input(array(
                "name" => "data_de_entrega",
                "class" => "form-control",
                "id" => "data_de_entrega",
                "maxlength" => "255",
                "value" => ""
            ));

            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Comprar",
                "type" => "submit"
            ));
        echo form_close();
        ?>
    </div>
</body>
</html>