<?php




if(isset($_POST['nome'])){

 $arquivo = fopen("dados.txt", "a");

 fwrite($arquivo, "nome: " .$_POST['nome'] . "\n");

 fclose($arquivo);

 }
?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario</title>

  </head>

  <body style="background-color: <?php if(isset($_POST['nome'])){echo '#FF4500'; }else{ echo 'f3f3f3'; }?>">

      <form name="dados_pessoas" method="POST" action="">

        nome:<input type="text" name="nome" id="nome"><br>

        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">




      </form>

  </body>

</html>