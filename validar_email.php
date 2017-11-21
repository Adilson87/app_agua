<?php


// Coloque a mensagem que irá ser enviada para seu e-mail abaixo: 
$mensagem = "Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo:\n"; 

//Este loop coloca todos os campos do formulário na mensagem do e-mail a ser enviado 
while(list($campo, $valor) = each($_POST)) { 
$mensagem .= ucwords($campo).": ".$valor."\n";
} 

// Agora iremos fazer com que o PHP envie os dados do formulário para seu e-mail: 
mail("adilson.britojunior1987@gmail.com", "Assunto do E-mail", $mensagem, "From: $REMOTE_ADDR"); 

echo "Seu e-mail foi enviado com sucesso. Obrigado"; 
?>
