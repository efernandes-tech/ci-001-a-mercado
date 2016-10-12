<html>
<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div class="container">
        <h1>Minhas vendas</h1>
        <table class="table">
        <?php foreach($produtosVendidos as $produto) : ?>
            <tr>
                <td><?= $produto["nome"]?></td>
                 <td><?= dataMysqlParaPtBr($produto["data_de_entrega"]) ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
</body>
</html>