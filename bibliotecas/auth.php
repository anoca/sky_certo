<?php
require "modelo/loginModelo.php";
define('AUTENTICADOR', true);

function authLogin($nome, $senha) {
    $user= pegarLogin($nome, $senha);
    if(!empty($user)){
        $_SESSION["auth"] = array("user" => $user, "role" => $user["tipoUsuario"]);
        return true;
    }else{
        return false;
    }
}


function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}