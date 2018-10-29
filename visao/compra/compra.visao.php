<h1>Finalizar compra</h1>
<p>Você adquiriu um total de: <br>

 
<?php foreach ($carrinho as $produto): ?>
        <tr>
        	<td><?= $produto['quantidade'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <br>
        </tr>
    <?php endforeach; ?>
</p>

<?php echo "O valor total da compra é R$: " . $totalCarrinho; ?><BR>



<br>
<h2>Formas de pagamento</h2>
	<form action="" method="post">
		<input type="radio" name="pagamento" value="Boleto" checked> Boleto 
		<br> 
		<input type="radio" name="pagamento" value="Cartão de crédito"> Cartão de crédito 
		<br> 
		<input type="radio" name="pagamento" value="Débito"> Débito
		<br>
	</form>
<br>

<h2>Insira o cupom de desconto</h2>
	<form action="" method="post">
           <input type="text" name="cupom" value="">
           <input type="submit" name="Enviar" value="Enviar">
	</form>
<br>
<?php echo "O valor total da compra com desconto é de R$: " . $totalCarrinho; ?>
<br>
<br>
<a href="" class="btn btn-primary">Comprar</a>

