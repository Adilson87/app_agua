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
left:50%; /* Distante 50% do lado esquerdo da tela do usuário */
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
#borda{

      border-collapse: collapse; /* CSS2 */
    background: #FFFFF0;
    border: solid green 1px;

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

<h1 style="color: white;">COM QUAL FONTE TRABALHA?</h1>
</div>
</div>
<br/><br/><br/><br/>
<form method="post" action="cont_cadastro.php" id="formRegistrase" >
    <section >
            <div class="container">


              <div class="row">

                <!-- albuns -->
                <div class="col-md-6">


                  
                  <div class="row albuns">
                    
                    <div class="col-md-4" style="border: 4px solid #ffffff">
                      <img src="imagens/crystal.jpg" class="img-circle" alt="Cinque Terre"  class="img-responsive" class="img">
                      <input type="checkbox" name=" cristal" id="cristal" value="1">
                      <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">


                    </div>
                    <div class="col-md-4" style="border: 4px solid #ffffff">
                    <img src="imagens/indaia.jpg" class="img-circle" alt="Cinque Terre" class="img-responsive">
                        <input type="checkbox" name="indaia" id="indaia" value="2">
                        <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">

                    </div>
                                    <div class="col-md-4" style="border: 4px solid #ffffff" >
                  <img src="imagens/santajoana.png" class="img-circle" alt="Cinque Terre" class="img-responsive" >
                                        <input type="checkbox" name="santajoana" id="santajoana" value="5">
                                        <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">

                  <br/>
                  </div>
                

                  </div><!-- /row -->
                  <br>
                  <div class="container" style="margin-left: -14px;">
                  <div class="row" >

                 <div class="col-md-6">


                  <div class="row albuns" >
                    
                    <div class="col-md-4" style="border: 4px solid #ffffff;">
                      <img src="imagens/pratadovale.png" class="img-circle" alt="Cinque Terre" class="img-responsive" >
                    <input type="checkbox" name="pratadovale" id="pratadovale" value="3">
                    <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">

                    </div>
                    <div class="col-md-4" style="border: 4px solid #ffffff">
                     <img src="imagens/santaclara.jpg" class="img-circle" alt="Cinque Terre"  class="img-responsive" >
                      <input type="checkbox" name="santaclara" id="santaclara" value="4">
                      <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">
</div>
                <div class="col-md-4"  style="border: 4px solid #ffffff">
                  <img src="imagens/villa.jpg" class="img-circle" alt="Cinque Terre" class="img-responsive" >
                                                          <input type="checkbox" name="villa" id="villa" value="6">
                                                          <h5 style="color:#FFFFFF">10L&nbsp;/&nbsp;20L</h5>
                                            <input type="checkbox" name="litro10" id="litro10" value="1">&nbsp;&nbsp;&nbsp;



                      <input type="checkbox" name="litro20" id="litro20" value="1">

                  <br/>
                  </div>
</div>                  </div>

                   </div>
                    <br>

                    

                  </div><!-- /row -->

                </div>
                 <div class="row albuns">

                <!-- servicos -->
  <br/> <
                  </div>

                 <div >

                <button type="submit" class=" btn btn-primary" id="enviar" style="float: right;" >Continuar</button> 
                
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
