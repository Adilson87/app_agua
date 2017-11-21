
 

<?php


session_start();

require_once('db.class.php');

$email = $_POST['email1'];
$senha = $_POST['senha1'];




$sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

$objDb = new db();
$link = $objDb->conecta_mysql();


$resultado_id = mysqli_query($link, $sql);

//se o teste da conexao estiver ok cai no if, se nao vai pro else

if($resultado_id){
//se o array dados usuario estiver preenchido 

$dados_usuario = mysqli_fetch_array($resultado_id);

if(isset($dados_usuario['email'])){

	$_SESSION['email'] = $dados_usuario['email'];
    $_SESSION['telefone'] = $dados_usuario['telefone'];
    $_SESSION['nomedistribuidora'] = $dados_usuario['nomedistribuidora'];
    $_SESSION['cnpj'] = $dados_usuario['cnpj'];
    $_SESSION['estado'] = $dados_usuario['estado'];
    $_SESSION['cidade'] = $dados_usuario['cidade'];
    $_SESSION['rua'] = $dados_usuario['rua'];













header('location:home.php');


}else{

header('location:index.php?erro=1');



}






}
?>
