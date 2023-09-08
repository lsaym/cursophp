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
?>

<body>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
      <label for="v1">digite aqui seu o seu salario:</label>
      <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>" step="any">
      <input type="submit" value="analisar">
      <p><strong><small>Considere o salario minimo tendo um valor de R$:1.380,00</small></strong></p>
    </form>
  </main>
  <section>
    <h1>Resultado final</h1>
    <?php 
    $padrao = numfmt_create( "pt_BR", NumberFormatter::CURRENCY); 
    $salmin = 1380;
    $resto = $valor1 % $salmin;
    $quociente = (int) ($valor1 / $salmin); 
    echo "o seu salario de ". numfmt_format_currency($padrao, $valor1,"BRL") . " equivale a cerca de  $quociente salarios minimos, mais uma bagatela de : R$ " . number_format($resto, 2, ",", ".");
    ?>
  </section>
</body>

</html>