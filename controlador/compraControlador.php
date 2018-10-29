 <?php

require "modelo/produtoModelo.php";
require "servicos/uploadImagemServico.php";

/** anon */
function index() {
    if(isset($_POST["quantidade"]) && isset($_POST["id"])){
        extract($_POST);
        
        if(!empty($_SESSION["carrinho"]["produtos"])){
            $_SESSION["carrinho"]["total"] -= $_SESSION["carrinho"]["produtos"][$id]["preco"] * $_SESSION["carrinho"]["produtos"][$id]["quantidade"];
            $_SESSION["carrinho"]["produtos"][$id]["quantidade"]=$quantidade;
            $_SESSION["carrinho"]["total"] += $_SESSION["carrinho"]["produtos"][$id]["preco"]*$_SESSION["carrinho"]["produtos"][$id]["quantidade"];
        }else{
            $_SESSION["carrinho"]["total"] = 0;
        }
    }
    
    if(!isset($_SESSION["carrinho"])) {
        echo "Nao tem nada no carrinho";
    } else {
        $dados["carrinho"] = $_SESSION["carrinho"]["produtos"];
        $dados["totalCarrinho"] = $_SESSION["carrinho"]["total"];
        exibir("compra/compra", $dados);
    }
    
}
?>