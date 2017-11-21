
<?php
$erro_email = isset( $_GET['erro_email']) ? $_GET['erro_email'] : 0;
$erro_senha = isset($_GET['erro_senha']) ? $_GET['erro_senha'] : 0;





?>
<?php

  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


?>




<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">

			<title>Olhagua</title>

			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="css/custom.css" rel="stylesheet">
			<link href="css/flexslider.css" rel="stylesheet">
			
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>


	 <script type="text/javascript">
	
       $(document).ready(function(){

     // verificar se  os campos de usuario e senha foram devidamente preenchidos

      $('#logar').click(function(){

        var campo_vazio= false;

        if($('#email1').val() == '' ){
            $('#email1').css({'border-color': '#A94442'});
            campo_vazio= true;
      

       } else{
      
        $('#email1').css({'border-color': '#CCC'});
       }     

       if($('#senha1').val() == ''){

        $('#senha1').css({'border-color': '#A94442'});
       campo_vazio= true;
       }else{

         $('#senha1').css({'border-color': '#CCC'});
       }

       // a instrução faz com que nao dispare o submit do formulario 
         if(campo_vazio) return false;
      });

      });


	


  $ ('#exampleModal'). on ( 'show.bs.modal' , function ( event ) { var button = $ ( event . relatedTarget ) // Button that triggered the modal var recipient = button . data ( 'whatever' ) // Extract info from data-* attributes // If necessary, you could initiate an AJAX request here (and then do the updating in a callback). // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead. 

 	var modal = $ ( this ) modal . find ( '.modal-title' ). text ( 'New message to ' + recipient ) modal . find ( '.modal-body input' ). val ( recipient ) }) ;


     



	
</script>
			
			 




             



			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>

		<body>
		<form  >
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" class = "main-nav" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-	toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#topWrap">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
							</span>
							Olhagua<span class="title"></span>
						</a>
					</div>
					<div class="collapse navbar-collapse appiNav"  >

						<ul class="nav navbar-nav">
							<li><a href="#topWrap">.....</a></li>

							<li><a href="#topWrap">SOBRE APP</a></li>
							<li><a href="#productWrap">PARCEIROS</a></li>
							<li><a href="#pricingWrap">QUERO ENTREGAR</a></li>
							<li><a href="formulario.php">CADASTRAR-SE</a></li>
							<!--classes do modal-->
							 <li><a class= "btn btn-primary" data-toggle= "modal" data-target= "#exampleModal" data-whatever= "@mdo" >LOGIN</a></li>
                            



							</ul>

						
							





							


</div>

</div>    

</div>
</div>
</form>

<form method="post" action="validar_acesso.php" id="validarAcesso">
<!--div's do modal-->
<div class= "modal fade" id= "exampleModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
<div class= "modal-dialog" role= "document" >
<div class= "modal-content" > 
<div class= "modal-header" > 
<h5 class= "modal-title" id= "exampleModalLabel" > Olhagua </h5> 
<button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" > 
<span aria-hidden= "true" > &times; </span> 
</button> 
</div> 
<div class= "modal-body" > 
<div class= "form-group"> 
<label for= "recipient-name" class= "form-control-label" > E-MAIL </label>
<input type= "email" class= "form-control" id= "email1" name="email1" required="required"/><span class="required"></span> </div> 
<div class= "form-group" > <label for= "message-text" class= "form-control-label" > SENHA: </label> 
<input type="password" class= "form-control"  id="senha1" name="senha1" required="required"/><span class="required" ></span> </div>

<?php

if($erro == 1){

        echo '<font color= "#FF0000">&nbsp;
        Usuario  ou senha inválido(s)</font>';
         
         }

 ?>
 

<!--<img src="imagens/face.png">&nbsp;
<img src="imagens/gmail.png">-->

 </div> 

   

<div class= "modal-footer" >  <button type= "submit" class= "btn btn-primary" id="logar" name="logar"> Entrar </button> 
</div> </div> </div> </div> 
   


  <!-- #dialog é o id do DIV definido como mostrado a seguir  -->

</div>




						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
	    </form> 

			<div id="topWrap" class="jumbotron">
			<div class="container">
				<div class="col-md-6 col-md-push-6 jumboText">
					<h1>Olhagua</h1>
					<h2>Peça Água Mineral e receba em sua casa ou trabalho.</h2>
					<a class="btn btn-lg btn-success actionBtn" href="#"><i class="fa fa-mobile fa-4x pull-left"></i><span class="line1">Baixe agora mesmo</span><br/><span class="line2">App Store</span></a>
				</div>
				<div class="col-md-6 col-md-pull-6 hidden-xs">
					<div class="mobile">
						<div class="mobileSlider">
							<ul class="slides">
								<li>
								<img src="assets/img/screen1.jpg"/>
								</li>
								<li>
									<img src="assets/img/screen2.jpg"/>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			</div>

	<div id="featureWrap">
		<div class="container">
			<div class="row">
			<h1 align="center">SOBRE O APP</h1>
			 <h1 style="text-align:  center;color: #A9A9A9;">
O App da Água é um aplicativo para você pedir e rapidamente receber sua água favorita em casa ou no trabalho. Oferecemos suporte a todas as marcas do mercado, minerais e adicionadas de sais, devidamente legalizadas.<br> Através de nosso aplicativo, após criar e ativar seu usuário, você adiciona seu endereço e pronto: já pode pedir seu garrafão com a comodidade que os apps modernos oferecem. Peça pelo App da Água. Somos muito mais que um aplicativo de delivery, viemos pra mudar a sua maneira de pedir água.

</h1>

				<div class="col-sm-4 text-center feature">
					<i class="fa fa-tablet icon"></i>
					<h3>Fácil de Usar</h3>
					<p>
					
					 APP fácil de manusear, totalmente intuitivo e dinâmico.


					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-pencil icon"></i>
					<h3>Ágil</h3>
					<p>
                 Com apenas alguns cliques você finaliza sua compra.
 
					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<i class="fa fa-star icon"></i>
					<h3>Negócio</h3>
					<p>
					
sistema seguro e totalmente monitorado, que pode ser acessado em qualquer lugar da região.


					</p>
				</div>
			</div>
		</div>
	</div> <!-- /featureWrap -->
	
	<div id="productWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">titulo</h2>
					<h3 class="sectionTitle">Conteudo </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<div class="imgWrap">
						<img class="img-responsive" src="assets/img/tablet.png"/>
					</div>
				</div>
				<div class="col-md-5">
					<div class="productFeatures clearfix">
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>titulo</h3>
							<p>Conteudo</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-cog fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>titulo</h3>
							<p>conteudo</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-bars fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>titulo</h3>
							<p>conteudo.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /productWrap -->
	
	<div id="pricingWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">Pronto para começar??</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
						
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="priceTable alt">
						<li class="title">...</li>
						<li class="description">...</li>
						<li class="price">R$ 0,50</li>
						<ul class="features">
							<li>....</li>
							<li>....</li>
							<li>....</li>
						</ul>
						<li class="call">
							<a class="btn btn-success btn-lg" href="formulario.php">COMPRAR</a>
							
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- /pricingWrap -->
	
	<div id="testimonialsWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">sinopse do que vai ser dito</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="quote">"..........."</div>
								<div class="author">titulo</div>
							</li>
							<li>
								<div class="quote">"........"</div>
								<div class="author">titulo</div>
							</li>
							<li>
								<div class="quote">"..........."</div>
								<div class="author">titulo</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /testimonialsWrap -->
	
	
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<p>Copyright © 2017-2018. Todos os direitos reservados - by Olhagua. </a>. Todos os direitos reservados.</p>
					<p class="social">
						<a href="https://www.facebook.com/bootstrapbay">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://twitter.com/bootstrapbay">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="https://plus.google.com/+BootstrapbayThemes">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a href="http://www.youtube.com/user/bootstrapbayofficial">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.js"></script>
	
<script type="text/javascript">


      
   


$(document).ready(function() {

	$('.mobileSlider').flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		controlNav: false,
		directionNav: true,
		prevText: "&#171;",
		nextText: "&#187;"
	});
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
		
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() < 768) {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}
			else {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}

		}
	});
	
	$('#toTop').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
	
	var timer;
    $(window).bind('scroll',function () {
        clearTimeout(timer);
        timer = setTimeout( refresh , 50 );
    });
    var refresh = function () {
		if ($(window).scrollTop()>100) {
			$(".tagline").fadeTo( "slow", 0 );
		}
		else {
			$(".tagline").fadeTo( "slow", 1 );
		}
    };
		
});
 

</script>

  </body>
</html>