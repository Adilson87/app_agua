<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<?php

  $erro_email = isset( $_GET['erro_email']) ? $_GET['erro_email'] : 0;
  $erro_senha = isset($_GET['erro_senha']) ? $_GET['erro_senha'] : 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Bootstrap based app landing page template">
      <meta name="author" content="">
      <link rel="shortcut icon" href="assets/ico/favicon.ico">

      <title>Olhagua</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script type="text/javascript">
      

    $('formCadastrarse').submit(function(){
    $(this)[0].reset();
});
    </script>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    
    <link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>
  <body  style="background: #293949; " >

  

  <div class="container" >
      
    <div class="page-header">
    <br><br>
        
      <h1 
"><a href="index.php" style="text-decoration: none;"> Olhagua</h1></a>

    </div>
    <div class="row">
    <div class="col-sm-12">
      
      <h3>Cadastre-se</h3>

      <form method="post" action="registra_usuario.php" id="formCadastrarse" align="center">
        
              <div align="left"  class="form-row" >
              <label  for="nome" ></label>
              <input type="text" placeholder="NOME DA DISTRIBUIDORA" class="form-control" id="nomedistribuidora" name="nomedistribuidora"  onfocus="this.value='';">

              </div>
              <div class="form-row">
              <label for="nome" style="color: #FFFFFF
"></label>
              <input type="text" placeholder="CNPJ"  class="form-control" id="cnpj" name="cnpj" onfocus="this.value='';">

              </div>
              <div class="form-row">
                <label for="E-mail " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="E-MAIL" class="form-control" id="email" name="email" >
              <?php
               if( $erro == 1){

                echo '<font color= "#FF0000"> E-mail Já existe</font>';
               
               

               }

     
               ?>

              </div>
               <div class="form-group">
                <label for="senha" style="color: #FFFFFF
"></label>
              <input type="password" placeholder="SENHA"  class="form-control" id="senha" name="senha" >

              </div>

              <div class="form-group">
              <label for="nome" style="color: #FFFFFF
"></label>
              <input type="text" placeholder="TELEFONE" class="form-control" id="telefone" name="telefone" onfocus="this.value='';">

              </div>
              <div class="form-group">
              <label for="cep " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="CEP" class="form-control" id="cep" name="cep" onfocus="this.value='';">

              </div>
              <div class="form-group">
              <label for="estado " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="ESTADO" class="form-control" id="estado" name="estado" onfocus="this.value='';">

              </div>
              <div class="form-group">
              <label for="cidade " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="CIDADE" class="form-control" id="cidade" name="cidade" onfocus="this.value='';">

              </div>
               <div class="form-group">
              <label for="rua " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="RUA" class="form-control" id="rua" name="rua" onfocus="this.value='';">

              </div>



             <!-- <div class="form-group" style="position: left;">
              <label for="estado  " style="color: #FFFFFF
">Estado</label><br>
             <select id="estado" name="estado"  >
             
             
             <option>Pernambuco</option>
             <option>Paraiba</option>
             <option>Maceio</option>

            </select>

              </div>
              <div class="form-group">
              <label for="numero da conta " style="color: #FFFFFF
">Cidade</label><br>
              <select name="cidade" style="top:  150px;" >
             
             
             <option>Recife </option>
             <option>Camaragibe</option>
             <option>Cabrobó</option>

            </select>

              </div>-->
              
              

             
              


                <button type="submit" class=" btn btn-primary" id="enviar"  >Continuar</button> 
                <div>
      </form>



     
    <?php 

        if($erro == 1){

        echo '<font color= "#FF0000"> Usuario  ou senha inválido(s)</font>';
         
         }

     
       ?>

    </div>

</div>
  </div>
    </form> 

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>