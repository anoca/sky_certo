<?php

function pegarTodosCupons() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function pegarCupomPorId($id) {
    $sql = "SELECT * FROM cupom WHERE codCupom= $id";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_array($resultado);
    return $cupom;
}

function adicionarCupom($nomeCupom, $porcentagemDesconto) {
    $sql = "INSERT INTO cupom (nomeCupom, porcentagemDesconto) 
			VALUES ('$nomeCupom', '$porcentagemDesconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function editarCupom($codCupom, $nomeCupom, $porcentagemDesconto) {
    $sql = "UPDATE cupom SET codCupom = '$codCupom', nomeCupom = '$nomeCupom', porcentagemDesconto ='porcentagemDesconto' WHERE codCupom = 
    $codCupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}

function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE codCupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
            
}

function buscarCupom($cupom){
    $comando="SELECT porcentagemDesconto FROM cupom WHERE nomeCupom = '$cupom'";
    $resultado = mysqli_query($cnx = conn(), $comando);
    if(!$resultado) { die('Erro ao encontrar cupom' . mysqli_error($cnx)); }
    $resultado = mysqli_fetch_assoc($resultado);
    
    return $resultado["porcentagemDesconto"];
}
]
