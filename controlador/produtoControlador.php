  <?php

require "modelo/produtoModelo.php";
require "servicos/uploadImagemServico.php";

//echo "<PRE>";
//print_r($_SESSION["auth"]);

/** anon */
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}
/** user */
function adicionar() {
    if (ehPost()) {
        extract($_POST);

        $imagem_name    = $_FILES["imagemProduto"]["name"];
        $imagem_tmp     = $_FILES["imagemProduto"]["tmp_name"];
        $diretorio_imagem   = uploadImagem($imagem_name, $imagem_tmp);

        alert(adicionarProduto($nome, $preco, $descricao, $sabor,$diretorio_imagem));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}
/** user */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $sabor = $_POST["sabor"];
        alert(editarProduto($id, $nome, $preco, $descricao, $sabor));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/** anon */
function addCarrinho($id, $nome, $preco){
    if (!isset ($_SESSION["carrinho"])){
        $_SESSION["carrinho"]= array ();
        $_SESSION["carrinho"][$id]["quantidade"]=1;
        $_SESSION["carrinho"][$id]["nome"]= $nome;
        $_SESSION["carrinho"][$id]["preco"]=$preco;
        
    }elseif( !isset ($_SESSION["carrinho"][$id])){
        $_SESSION["carrinho"][$id]["quantidade"]=1;
        $_SESSION["carrinho"][$id]["nome"]= $nome;
        $_SESSION["carrinho"][$id]["preco"]=$preco;
        
    }else{
        $_SESSION["carrinho"][$id]["quantidade"]+=1;
        $_SESSION["carrinho"][$id]["preco"]+=$_SESSION["carrinho"][$id]["preco"];
    }  
     redirecionar("produto/listarCarrinho");
}
/** anon */
function listarCarrinho() {
    print_r($_SESSION["carrinho"]);
    $carrinho=array();
    $c=0;
   
    foreach ($_SESSION["carrinho"] as $id => $info) {
         $carrinho[$c]["idProduto"]= $id;
         $carrinho[$c]["quantidade"]= $info["quantidade"];
         $carrinho[$c]["nome"]= $info["nome"];
         $carrinho[$c]["preco"]= $info["preco"]; 

         $c+=1;


    }
    $dados["carrinho"] = $carrinho;
    //print_r($carrinho);
    exibir("produto/carrinho", $dados);
}
/** anon */
function deletarCarrinho($id){
        unset($_SESSION["carrinho"][$id]);
        redirecionar("produto/listarCarrinho");
}

/** anon */
function buscar() {
    extract($_POST);
    $dados['produtos'] = buscarM($termo);
    exibir("produto/listar", $dados);
}


