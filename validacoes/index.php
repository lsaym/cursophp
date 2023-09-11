<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>validacao</title>
</head>

<body>
  <main>
    <H1>VALIDATE FILTERS</H1>
    <?php 
      ////////////////////////////////// validacao
    if(isset($_POST['send'])): //se estiver configurado o botao, a seuqnecia de codigos a seguir vai iniciar.
      $erro=[];

        if(!$idade = filter_input (INPUT_POST,'idade',FILTER_VALIDATE_INT)):
        $erro[]="idade precisa ser um numero inteiro <br>";
      endif;
        // a exclamação indica negacão, então, resumo do codigo
        // se o valor da variavel $idade não for um numero inteiro, então o array $erro recebe a mensagem de erro como valor, é dessa maneiro com todos os dados que serão validados

      if(!$email = filter_input (INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
      $erro[]="seu email nao e valido <br>";
      endif;
        if(!$peso = filter_input (INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
        $erro[]="peso precisa ser um numero real <br>";
        endif;
        if(!$ip = filter_input (INPUT_POST,'ip',FILTER_VALIDATE_IP)):
        $erro[]="o numero de ip nao existe <br>";
        endif;
        if(!$url = filter_input (INPUT_POST,'url',FILTER_VALIDATE_URL)):
        $erro[]="a url e invalida <br>";
        endif;
        ///////////////////////////
          if(!empty($erro)): // se o array erro nao estiver vazio o foreach roda e exibe as mensagens de erro que tem nele
            foreach($erro as $erro):
              echo $erro;
            endforeach;
          else: // se nao tiver erro nenhum a mensagem de sucesso ou qualquer outra ação que quiser vai ser executada.
            echo "Seus dados estao corretos!";
          endif;
        endif;

    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <label for="idade">idade:</label>
      <input type="number" name="idade" id="idade" step="any">
      <label for="email">email:</label>
      <input type="email" name="email" id="email">
      <label for="peso">peso:</label>
      <input type="number" name="peso" id="peso" step="any">
      <label for="ip">IP</label>
      <input type="text" name="ip" id="ip">
      <label for="url">URL:</label>
      <input type="text" name="url" id="url">
      <button type="submit" name="send">Enviar</button>





    </form>
  </main>

</body>

</html>