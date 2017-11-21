<?php
	session_start();

	require_once('db.class.php');

   	$cristal = $_POST['cristal'];
   	$indaia = $_POST['indaia'];
   	$pratadovale = $_POST['pratadovale'];
   	$santaclara = $_POST['santaclara'];
   	$santajoana = $_POST['santajoana'];
   	$villa = $_POST['villa'];

   	$email_consuslta_recebe_session_form01 = $_SESSION['email_session01'];
	
	$objDb = new db();
    $link = $objDb->conecta_mysql();

	$sql = "UPDATE cadastro SET cristal = '$cristal', indaia = '$indaia', pratadovale = '$pratadovale', santaclara = '$santaclara', santajoana = '$santajoana', villa = '$villa' 
		WHERE email = '$email_consuslta_recebe_session_form01'";

    if(mysqli_query($link, $sql)){

    	header('location: index.php');
		 
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>