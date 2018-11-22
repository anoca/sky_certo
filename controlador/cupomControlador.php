<?php

require "modelo/cupomModelo.php";
/** anon */
function index() {
    $dados["cupons"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCupom($nomeCupom, $porcentagemDesconto));
        redirecionar("cupom/adicionar");
    } else {
        exibir("cupom/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarCupom($id));
    redirecionar("cupom/listar");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nomeCupom = $_POST["nomeCupom"];
        $porcentagemDesconto = $_POST["porcentagemDesconto"];
        alert(editarCupom($id, $nomeCupom, $porcentagemDesconto));
        redirecionar("cupom/listar");
    } else {
        $dados['cupom'] = pegarCupomPorId($id);
        $dados['acao'] = "./cupom/editar/$id";
        exibir("cupom/formulario", $dados);
    }
}
/** admin */
function visualizar($id) {
    $dados['cupom'] = pegarCupomPorId($id);
    exibir("cupom/visualizar", $dados);
}
?>
