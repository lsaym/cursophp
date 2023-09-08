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
    <h1>Resultado do procesamento</h1>
  </header>
  <main>
    <?php
    $name = $_GET["name"] ?? "sem nome";
    $subname = $_GET["subname"] ?? "sem sobrenome";
    echo "<p>prazer em conhecer voce, <strong>$name $subname</strong></p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
</body>
</main>

</html>