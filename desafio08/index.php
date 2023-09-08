<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz quadrada e cubica </title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$valor1 = $_GET['v1'] ?? "0";
?>

<body>
  <main>
    <h1>Informe um numero</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <label for="v1">numero</label>
      <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>" step="any">
      <input type="submit" value="analisar">
    </form>
  </main>
  <section>
    <h1>Resultado final</h1>
    <?php 
    $quadrada = sqrt($valor1) ;
    //$quadrada = $valor1 ** (1/2); tambem funciona
    $cubica = $valor1 ** (1/3);
    echo "a raiz <strong>quadrada</strong> de $valor1 é:<b> " . number_format($quadrada, 3, ",") . "</b><br>";
    echo "a raiz <strong>cubica</strong> de $valor1 é: <b>" . number_format($cubica, 3, ",") . "</b><br>";
    ?>
  </section>
</body>

</html>