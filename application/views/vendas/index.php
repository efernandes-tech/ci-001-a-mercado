        <h1>Minhas vendas</h1>
        <table class="table">
        <?php foreach($produtosVendidos as $produto) : ?>
            <tr>
                <td><?= $produto["nome"]?></td>
                 <td><?= dataMysqlParaPtBr($produto["data_de_entrega"]) ?></td>
            </tr>
        <?php endforeach ?>
        </table>