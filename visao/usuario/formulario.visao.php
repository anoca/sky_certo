<?php 

if(isset($erros)) {
	foreach ($erros as $erro) {
		echo $erro;
	}
}

?>

<h1>Ainda não é nosso cliente? Cadastre-se aqui</h1>
<h5>Todos os campos com "*" são obrigatórios</h5>
<form action="<?=@$acao?>" method="POST">
    Nome e Sobrenome: <input type="text" name="nome" value="<?=@$usuario['nome']?>"><br>
    Email: <input type="text" name="email" value="<?=@$usuario['email']?>"><br>
    Senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>"><br>
    CPF: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>"><br>
    Data de Nascimento: <input type="date" name="dtNasc" value="<?=@$usuario['dtNasc']?>"><br>

    <button type="submit">Enviar</button>
</form>