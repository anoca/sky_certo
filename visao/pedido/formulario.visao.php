<form action="<?=@$acao?>" method="POST">
    Id do Pedido: <input type="text" name="nome" value="<?=@$usuario['nmProduto']?>">
    Id do Usuario: <input type="number" name="preco" value="<?=@$usuario['preco']?>">
    <button type="submit">Enviar</button>
</form>