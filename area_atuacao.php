<?php

  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


?>
<?php
$erro_email = isset( $_GET['erro_email']) ? $_GET['erro_email'] : 0;
$erro_senha = isset($_GET['erro_senha']) ? $_GET['erro_senha'] : 0;





?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Olhagua</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Bootstrap based app landing page template">
    
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

  <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    
<style type="text/css">

#centralizar{
position:fixed; /* Forma de posicionamento - FIXA */
top:41%; /* Distante 50% do topo da tela do usuário */
left:45%; /* Distante 50% do lado esquerdo da tela do usuário */
margin-top:-100px; /* Margem negativa para o topo com a metade do valor da altura da imagem */
margin-left:-125px; /* Margem negativa para a esquerda com a metade do valor da largura da imagem */
}
#central{
position:fixed; /* Forma de posicionamento - FIXA */
top:25%; /* Distante 50% do topo da tela do usuário */
left:50%; /* Distante 50% do lado esquerdo da tela do usuário */
margin-top:-100px; /* Margem negativa para o topo com a metade do valor da altura da imagem */
margin-left:-125px; /* Margem negativa para a esquerda com a metade do valor da largura da imagem */
}

</style>
<script type="text/javascript">

</script>
  

</head>

<body style="background: #293949; " >
<nav  class=" navbar navbar-dark bg-primary " style="color: #FFFFFF>
      <div class="container">
        
        <!-- header -->
        <div class="navbar-header">
          
          <!-- botao toggle -->
          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <span  style="color: white;">Olhagua</span>
          </a>

        </div>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" style="color: white;">Editar Perfil</a></li>

            <li><a href="" style="color: white;">Historico de Vendas</a></li>
            <li><a href="" style="color: white;">Fale Conosco</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="index.php" style="color: white;">Sair</a></li>
            <li><a href="" style="color: white;"></a></li>
          </ul>
        </div>
      </div><!-- /container -->
    </nav><!-- /nav -->
    <div class="container">

    <div class="page-header">

<h1 style="color: white;">Área de Atuação?</h1>
</div>
</div>
<br/><br/><br/><br/><br/>
<form  method="post" action="cont_cadastro.php" id="formRegistrase"  >


    <section  id="centralizar" id="central" >
            <div class="container" >


              <div class="row"  >

                <!-- albuns -->
                <div class="col-md-4"  >
                <br/><br/><br/><br/>

              <div class="form-group"  >
              <label for="estado " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="CIDADE" class="form-control" id="cidade" name="cidade" onfocus="this.value='';">

              </div>
              <div class="form-group">
              <label for="cidade " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="BAIRRO" class="form-control" id="bairro" name="bairro" onfocus="this.value='';">

              </div>
               <div class="form-group">
              <label for="rua " style="color: #FFFFFF
"></label>
              <input type="text" placeholder="RUA" class="form-control" id="rua" name="rua" onfocus="this.value='';">

              </div>
              <br/>

              <div class="form-group">
              <label for="numero" style="color: #FFFFFF"> 
                
             <input type="text" placeholder="NUMERO" name="numero" class="form-control " style="width:88px;">

             </label>

              </div>

              <div align="center">



                  
                   <button type="submit" class=" btn btn-primary" id="enviar"  >Finalizar</button> 
                   </div>
                
                  </div>


                </div>

              </div>
            </div>
          </section>
          </form>
    
   
<!--<?php 

//if($msg!= false) 

//echo "<p>$msg</p>";

?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="imagem">Imagem:</label>
    <input type="file" required name="arquivo"/>
    <br/>
    <input type="submit" value="Enviar"/>
  </form>-->


    
      

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
