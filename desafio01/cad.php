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
    $num = $_GET["num"] ?? "0";
    echo "o numero escolhido foi $num <br> seu antecessor é " . --$num . "<br> e seu sucessor é " . $num+2 . "<br>";
    ?>
    <button class="voltar"> <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
    </button>
</body>
</main>

</html>