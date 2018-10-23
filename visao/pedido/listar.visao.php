<h2>Listar produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID PEDIDO</th>
            <th>ID USUÁRIO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['idPedido']?></td>
        <td><?=$pedido['idUsuario']?></td>
        <td><a href="./pedido/visualizar/<?=$produto['idPedido']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./pedido/editar/<?=$produto['idPedido']?>" class="btn btn-info">edit</a></td>
        <td><a href="./pedido/deletar/<?=$produto['idPedido']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./pedido/adicionar" class="btn btn-primary">Adicionar novo pedido</a>

