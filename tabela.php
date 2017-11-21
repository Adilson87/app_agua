<?php

  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


?>
<?php
$erro_email = isset( $_GET['erro_email']) ? $_GET['erro_email'] : 0;
$erro_senha = isset($_GET['erro_senha']) ? $_GET['erro_senha'] : 0;

?>
<?php

session_start();

if(!isset($_SESSION['email'])){
  
  header('location: index.html?==1');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Info-Água</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <!--inserir dados na tabela-->
    <script type="text/javascript">
   var table = document.getElementById('tabela_relatorio');
   var row = table.insertRow(1);
   row.innerHTML = "<td>"+...+"</td> <td>"+...+"</td><td>"+...+"</td>";
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: #293949;">
    
   	<div class="container">
   		
   		<div class="page-header">
   			<h1 style="color: #ffffff;" >Historico de Vendas </h1>
   		</div>

   		<table class="table table-striped table-bordered table-hover table-condensed" id="tabela_relatorio">
   			<thead >
   				<tr>
   					<th style="text-align: center; color: #ffffff;">Produto</th>
   					<th style="text-align: center;color: #ffffff;">Fabricante</th>
   					<th style="text-align: center;color: #ffffff;">Valor</th>
   				</tr>
   			</thead>
   			<tbody>
   				<tr class="success">
   					<td>Água</td>
   					<td>Indaia</td>
   					<td>3333</td>
   				</tr>
   				<tr class= "success">
   					<td>Água</td>
   					<td>Santa Clara</td>
   					<td>11</td>
   				</tr>
   				<tr class="success">
   					<td >Água</td>
   					<td >Santa Joana</td>
   					<td>350,00</td>
   				</tr>
   			</tbody>
   		</table>

   	</div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
      
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>