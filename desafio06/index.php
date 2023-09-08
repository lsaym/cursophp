<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estrutura da divisao </title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
$valor1 = $_GET['v1'] ?? "0";
$valor2 = $_GET['v2'] ?? "1";
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <label for="v1">dividendo</label>
      <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
      <label for="v2">divisor</label>
      <input type="number" name="v2" id="v2" min="1" value="<?=$valor2?>">
      <input type="submit" value="analisar">
    </form>
  </main>
  <section>
    <h1>estrutura da divisão</h1>
    <?php 
    $quociente = (int) ($valor1 / $valor2); 
    $resto = $valor1 % $valor2;
    ?>
    <table class="divisao">
      <tr>
        <td><?=$valor1?></td>
        <td><?=$valor2?></td>
      </tr>
      <tr>
        <td><?=$resto?></td>
        <td><?=$quociente?></td>
      </tr>
    </table>
  </section>
</body>

</html>