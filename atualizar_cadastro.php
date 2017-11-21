<?php

require_once('db.class.php');

  $objDb = new db();
  $link = $objDb->conecta_mysql();

$sql = "SELECT * FROM tabela WHERE usuario='$usuario' AND senha='$senha'";

$res = mysql_query($sql)

$conta = mysql_num_rows($res);

if($conta >= "1")

{

$dados = mysql_fetch_array($res);

echo "

<form action="atualiza.php" method="POST">

Alterar Usuário: <input type="text" name="usuario" value="$dados[usuario]"><br>

Alterar Senha: <input type="text" name="senha" value="$dados[senha]"><br>

<input type="submit" value="Atualizar">

";

}

?>

ta blz dai o atualiza tu da um update

<?php

import_request_variables("p","p_");

if($p_usuario && $p_senha)

{

$sql = "UPDATE tabela SET nome='$p_usuario' AND senha='$p_senha'";

$res = mysql_query($sql);

if($res)

{

echo "Seus dados foram atualizados com sucesso!";

}

else

{

echo "Não foi possível atualizar seus dados : (";

}

}

?>