<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>login</title>
</head>

<body>
  <main>
    <?php
    //banco de dados 
    require_once 'db_connect.php';
    //inicio da sessao
    session_start();
    

  if(isset($_POST['btn-send'])):
    $error = [];
    $login = mysqli_escape_string ($connect,$_POST['login']);
    $senha = mysqli_escape_string ($connect,$_POST['senha']);
      if(empty($login) or empty($senha)):
        $error[]= "<li>Os campos precisam ser preenchidos</li>";
      endif;
  endif;
    ?>


    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="user">insira o seu login:</label>
      <input type="text" name="login" id="login">
      <input type="password" name="senha" id="senha ">
      <button type="submit" name="btn-send">Entrar</button>


      <?php 
      if(!empty($error)):
        foreach($error as $msgerro):
          echo $msgerro;
        endforeach;
        endif;
      ?>
    </form>
  </main>
</body>

</html>