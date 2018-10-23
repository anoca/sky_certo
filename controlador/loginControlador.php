<?php
require_once "modelo/loginModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if (authLogin($nome, $senha)) {
            alert("bem vindo" . $nome);
           // redirecionar("usuario");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}

?>