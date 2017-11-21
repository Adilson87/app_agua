 <?php

    session_start();
     

    require_once('db.class.php');

    
    $nomemarca = $_POST['nomemarca'];
    $valormarca = $_POST['valormarca'];
    $secao = $_SESSION['email'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();







    $sql = "INSERT INTO nova_agua ( email,novamarca, valor
    ) values ('$secao', '$nomemarca','$valormarca')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Água Cadastrado com sucesso!";
    }else{
        echo "Erro ao Cadastrar!";


    }
?>