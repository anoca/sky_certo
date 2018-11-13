 <?php

 require "modelo/produtoModelo.php";
 require "servicos/uploadImagemServico.php";
 require "modelo/pedidoModelo.php";


 /** anon */
 function index() {
  if(isset($_POST["cupom"])){
   extract($_POST);
   $desconto = buscarCupom($cupom);
   if (!empty($desconto)) {
      $totalCarrinho = $_SESSION["carrinho"]["total"];
      $descReal = $totalCarrinho - ($desconto * $totalCarrinho)/100;
    
      alert("Desconto aplicado!");        
    }else{
      alert("cupom invalido");
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