<h2>Listar cupons</h2>

<table class="table">
    <thead>
        <tr>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><a href="./cupom/visualizar/<?=$cupom['codCupom']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./cupom/editar/<?=$cupom['codCupom']?>" class="btn btn-info">edit</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['codCupom']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo cupom</a>

