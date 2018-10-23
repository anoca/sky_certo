 <?php
function pegarLogin($nome, $senha) {
    $sql = "SELECT * FROM usuario WHERE nome= '$nome' and senha='$senha'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $nome = mysqli_fetch_array($resultado);
    return $nome;
}
 ?>