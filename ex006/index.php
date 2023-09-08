<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios retroalimentados</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$valor1 = $_GET['v1'] ?? "0";
$valor2 = $_GET['v2'] ?? "0";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <label for="v1">valor 1</label>
      <input type="number" name="v1" id="v1" value="<?=$valor1?>">
      <label for="v2">valor 2</label>
      <input type="number" name="v2" id="v2" value="<?=$valor2?>">
      <input type="submit" value="somar">
    </form>
  </main>
  <section>
    <h1>Resultado da soma</h1>
    <?php 
    $soma = $valor1 + $valor2;
    echo "o resultado da soma dos valores $valor1 e  $valor2 é: $soma";
    ?>
  </section>
</body>

</html>