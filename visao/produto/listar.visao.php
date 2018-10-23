
<h2>Listar produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
            <th>SABOR</th>
            <th>VIEW</th>
            <th>COMPRAR</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idProduto']?></td>
        <td><?=$produto['nmProduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['sabor']?></td>
        <td><a href="./produto/visualizar/<?=$produto['idProduto']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/addCarrinho/<?=$produto['idProduto']?>/<?=$produto['nmProduto']?>/<?=$produto['preco']?>" class="btn btn-secondary">comprar</a></td>
        <td><a href="./produto/editar/<?=$produto['idProduto']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['idProduto']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

