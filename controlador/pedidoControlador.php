<?php

require "modelo/usuarioModelo.php";
/** user */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}
/** user */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $email, $senha, $cpf, $dtNasc));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}
/** user */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}
/** user */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $dtNasc = $_POST["dtNasc"];
        alert(editarUsuario($id, $nome, $email, $senha, $cpf, $dtNasc));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}
/** user */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
?>