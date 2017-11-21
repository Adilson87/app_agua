 <?php

     require_once('db.class.php');

     $objDb = new db();
    $link = $objDb->conecta_mysql();


     $msg = false;

     if(isset($_FILES['arquivo'])){
      "arquivo.jpg";
       
      $extensao = strtolower(substr($_FILES['arquivo'] ['name'], -4)); //pega a extensao do arquivo
      $novo_nome = md5(time()).$extensao;//define o nome do arquivo
      $diretorio = "upload/";//define o diretorio para onde enviaremos o arquivo
      move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$novo_nome);//efetua upload

      $sql_code = "INSERT INTO fotos(id, nome) VALUES (null, '$novo_nome')";
      if(mysqli->query($diretorio, $sql_code)){
        $msg = "falha ao enviar arquivo";
     }else{
        $msg = "arquivo enviado com sucesso";
     }
     
}
?>