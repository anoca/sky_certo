<h2>Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>QUANTIDADE</th>
            <th>DELETE</th>
            <th>PRECO</th>
        </tr>
    </thead>
    <?php foreach ($carrinho as $produto): ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>">
                    <input type="hidden" name="id" value="<?=$produto["idProduto"] ?>">
                    <input type="submit" class="btn btn-primary" placeholder="Atualizar quantidade">
                </form>
            </td>
            <td><a href="./produto/deletarCarrinho/<?= $produto['idProduto'] ?>" class="btn btn-danger">del</a></td>
            <td><?= $produto['preco'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br>
<?php echo "O valor total da compra é: " . $totalCarrinho; ?>
<br>
<br>
<a href="./produto" class="btn btn-primary">Adicionar novo produto</a>

