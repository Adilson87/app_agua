<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BIM</title>

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

    <script>
      
    $(document).ready(function(){

     // verificar se  os campos de usuario e senha foram devidamente preenchidos

      $('#enviar').click(function(){

        var campo_vazio= false;

        if($('#nomemarca').val() == '' ){
            $('#nomemarca').css({'border-color': '#A94442'});
            campo_vazio= true;
      

       } else{
      
        $('#nomemarca').css({'border-color': '#CCC'});
       }     

       if($('#valormarca').val() == ''){

        $('#valormarca').css({'border-color': '#A94442'});
       campo_vazio= true;
       
       }else{

         $('#valormarca').css({'border-color': '#CCC'});
       }

       // a instrução faz com que nao dispare o submit do formulario 
         if(campo_vazio) return false;

      });
      });


     // verificar se  os campos de usuario e senha foram devidamente preenchidos

      
     // verificar se  os campos de usuario e senha foram devidamente preenchidos

      </script>

      <style >
@import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');

body {
  color: #5D5F63;
  background: #293949;
  font-family: 'Open Sans', sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
</style>
  </head>
  <body>
  <div class="container">
      
    <div class="page-header">
        
      <h1>Info-Água</h1>

    </div>
    <div class="row">
    <div class="col-sm-8">
      
      <h3>Cadastre-se</h3>

      <form method="post" action="nova_agua.php" id="formCadastrarse">
        
              <div class="form-group">
              <label for="nome">Nome da marca</label>
              <input type="text" class="form-control" id="nomemarca" name="nomemarca">
      
              </div>
               <!--<div class="form-group">
              <label for="nome">Valor da Água</label>
              <input type="text" class="form-control" id="valormarca" name="valormarca" >

              </div>-->
              

              <!-- <div class="radio">
                <label>
                 <input type="radio" name="opcoes">PHP

               </label> 

          
                <label>
                 
                 <input type="radio" name="opcoes">Java

               </label>

               </div>-->

                <button type="submit" class=" btn btn-primary" id="enviar" name="enviar">Cadastrar</button> 
      </form>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>