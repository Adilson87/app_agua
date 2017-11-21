<?php
    session_start();

    require_once('db.class.php');

    $nome_distribuidora = $_POST['nomedistribuidora'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    

    $estado =$_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    

    $_SESSION['email_session01'] = $email;

    //foreach($_checkbox as $_valor){
    //echo $_valor;
//}
    

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $email_existe = false;
    $senha_existe = false;
//verifica se o email ja existe 
    $sql = "SELECT * FROM cadastro WHERE email = '$email' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['email'])){

            $email_existe = true;

        }

    }else{
        echo 'Erro ao tentar localizar o registro de usuário';
    }

    //verificar se o e-mail já existe
    $sql = "SELECT * FROM cadastro WHERE cnpj = '$cnpj' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['cnpj'])){

            $senha_existe = true;

        }

    }else{
        echo 'Erro ao tentar localizar o registro de email';
    }

    if($email_existe || $senha_existe){

        $retorno_get = '';

        if($email_existe){
            $retorno_get .= "erro_usuario=1&";
            
        }

        if($senha_existe){
            $retorno_get .= "erro_email=1&";
        }

        header('Location: Formulario.php?' . $retorno_get);
        die();

    }

    
    

    $sql = "INSERT INTO cadastro (nomedistribuidora, cnpj, email, senha, telefone, cep, estado, cidade, rua) VALUES ('$nome_distribuidora', '$cnpj', '$email', '$senha', '$telefone',
        '$cep', '$estado', '$cidade', '$rua')";

    //executar a query
    if(mysqli_query($link, $sql)){
        header('location: lista_agua.php');
    }else{
        echo "Erro ao registrar o usuário!";
    }
    

?>