<?php

require "modelo/usuarioModelo.php";
require_once "funcaoValidacao.php";

/** admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}
/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);

        $vetorErros = array();
        $errosNome = nome($nome);
        $errosEmail = email($email);
        $errosSenha = senha($senha);
        $errosCPF = CPF($cpf);
        $errosDtNasc = nasc($dtNasc);

        $vetorErrosTotais = array_merge($vetorErros, $errosNome, $errosEmail, $errosSenha, $errosCPF, $errosDtNasc);

        if(!empty($vetorErrosTotais)) {
            
            $dados["erros"] = $vetorErrosTotais;
            exibir("usuario/formulario", $dados);
            
        } else {
            alert(adicionarUsuario($nome, $email, $senha, $cpf, $dtNasc));
            redirecionar("usuario/index");
        }
    } else {
        exibir("usuario/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}
/** admin */
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
/** anon */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
?>