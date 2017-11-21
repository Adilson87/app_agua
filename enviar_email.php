<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Accordion Menu</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link href="css/custom.css" rel="stylesheet">
 <link href="css/flexslider.css" rel="stylesheet">

  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  <script src="jquery-3.2.1.js"></script>


<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">  
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">

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
<form action="validar_email.php" method="POST" >
<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">CONTATO</h2>
					</div>
				</div>

				
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						Quer conversar? Envie-nos uma mensagem. Gostaríamos de ouvir de você!
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-2">
							<div class="inputContainer">
							<label>Nome</label>
								<input type="text" name="contactName" id="contactName" value="" class="form-control" autocomplete="off"  name="nome" id="nome" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="inputContainer">
							<label class="screen-reader-text">Email</label>
								<input type="text" name="email" id="email" value="" class="form-control" autocomplete="off"  />
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<div class="inputContainer" >
							<label class="screen-reader-text">Mensagem</label>
								<textarea name="comments" id="commentsText" class="form-control" autocomplete="off" id="mensagem" name="mensagem"></textarea>
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<button name="submit" type="submit" class="btn btn-primary btn-lg">Enviar</button>
						</div>
					</div>
			</div>
		</div>
	</div> <!-- /contactWrap -->
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.js"></script>
	</body>
	</html>