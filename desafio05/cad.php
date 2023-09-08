<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado final</h1>
  </header>
  <main>
    <?php
      # Recebe valor do formulário
      $valor = $_REQUEST["valor"];    
      $int = (int) $valor;
      $flutuante = $valor - $int;

      # Exibe resultados
      echo "<p>Valor informado: $valor</p>";
      echo "<p>Parte inteira: $int</p>";
      echo "<p>Parte fracionária: $flutuante</p>";
?>
    <button class="voltar"> <a href="javascript:history.go(-1)">voltar </a></button>
</body>
</main>

</html>