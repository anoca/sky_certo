<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "LOJA");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}