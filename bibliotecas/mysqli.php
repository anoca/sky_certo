<?php

require_once ("./servicos/manipulacao.php");
function conn() {
	$dados= manipulacao();
	//print_r ($dados);
    //$cnx = mysqli_connect("", "", "", "");
    //if (!$cnx) die('Deu errado a conexao!');

    $cnx= mysqli_connect($dados[0],$dados[1],$dados[2],$dados[3]);
    if (!$cnx) die ('Deu errado a conexão');

    mysqli_set_charset ($cnx, "UTF8");
    return $cnx;
}
