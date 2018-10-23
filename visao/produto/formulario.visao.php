<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" value="<?=@$produto['nmProduto']?>">
    Preço: <input type="number" name="preco" value="<?=@$produto['preco']?>">
    Descrição: <input type="text" name="descricao" value="<?=@$produto['descricao']?>">
    Sabor: <input type="text" name="sabor" value="<?=@$produto['sabor']?>">
    Arquivo: <input type="file" id="exampleInputFile" class="form" name="imagemProduto">
    <button type="submit">Enviar</button>
</form>